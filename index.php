<?php 
include 'model/user.php';
include 'model/pdo.php';
include 'model/category.php';
include 'model/product.php';
include 'model/review.php';
include 'model/order.php';
// include 'view/header.php';
$listCategory = loadall_category();
$listProductTop10 = loadall_sanpham_top10();
if (isset($_GET['act']) && ($_GET['act'] != '')) {
    $act = $_GET['act'];
    $arr = ['signin', 'signup', 'logout', 'forgot_pass', 'order'];
    if (!in_array($act, $arr)) {
        include 'view/header.php';
    }
    switch ($act) {
        case 'categories':
            if ((isset($_POST['keyw']) && ($_POST['keyw'] != ""))) {
                $keyw = $_POST['keyw'];
            } else {
                $keyw = "";
            }
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
            } else {
                $id = 0;
            }
            $listProduct = loadall_product($keyw, $id);
            include 'view/order/categories.php';
            break;
        
        case 'product_details':
            if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                $product = loadone_product($_GET['id']);
                $productRelated = loadall_product_related($_GET['id'], $product['id_category']);
                $productReviews = loadall_review($_GET['id']);
            }
            include 'view/order/product_details.php';
            break;

        case 'review':
            if(isset($_POST['submit'])) {
                $idProduct = $_POST['id'];
                $content = $_POST['content'];
                $date = date('Y/m/d');
                $idUser = $_SESSION['user']['id'];
                insert_review($idUser, $idProduct, $content, $date);

                $product = loadone_product($idProduct);
                $productRelated = loadall_product_related($idProduct, $product['id_category']);
                $productReviews = loadall_review($idProduct);
                include 'view/order/product_details.php';
            }
            break;    
            
        case 'cart':
            include 'view/order/cart.php';
            break;

        case 'checkout':
            include 'view/order/checkout.php';
            break; 

        case 'order':
            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $address = $_POST['address'];
                $payMethod = $_POST['pay_method'];
                $total = array_reduce($_SESSION['cart'], function($result, $item) {
                    return $result + $item['price'] * $item['quantityOrder'];
                }, 0);
                $idUser = $_SESSION['user']['id'];
                $date = date('Y/m/d');
                if($payMethod == 1) {
                    $idBill = addOrder($name, $tel, $address, $payMethod, $total, $date, 4, $idUser);
                    foreach ($_SESSION['cart'] as $value) {
                        extract($value);
                        addOrderDetail($quantityOrder, $price * $quantityOrder, $id, $idBill);
                    }
                    unset($_SESSION['cart']);
                    echo '<script>window.location.href = "./view/order/success.php"</script>';
                } else {
                    $_SESSION['payment_data'] = [
                        'name' => $name,
                        'email' => $email,
                        'tel' => $tel,
                        'address' => $address,
                        'payMethod' => $payMethod,
                        'total' => $total,
                        'idUser' => $idUser,
                        'date' => $date
                    ];
                    header("Location: ./vnpay_php/vnpay_create_payment.php");
                }
                
            }
            break; 

        case 'success':
            if (isset($_SESSION['payment_data']) && $_GET['vnp_ResponseCode'] == 0) {
                $name = $_SESSION['payment_data']['name'];
                $email = $_SESSION['payment_data']['email'];
                $tel = $_SESSION['payment_data']['tel'];
                $address = $_SESSION['payment_data']['address'];
                $payMethod = $_SESSION['payment_data']['payMethod'];
                $total = $_SESSION['payment_data']['total'];
                $idUser = $_SESSION['payment_data']['idUser'];
                $date = $_SESSION['payment_data']['date'];
                
                $idBill = addOrder($name, $tel, $address, $payMethod, $total, $date, 4, $idUser);
                foreach ($_SESSION['cart'] as $value) {
                    extract($value);
                    addOrderDetail($quantityOrder, $price * $quantityOrder, $id, $idBill);
                }
                unset($_SESSION['cart']);
                unset($_SESSION['payment_data']);
                echo '<script>window.location.href = "./view/order/success.php"</script>';
            } else {
                include 'view/home.php';
            }
            break;

        case 'about':
            include 'view/other/about.php';
            break; 

        case 'blog':
            include 'view/other/blog.php';
            break; 

        case 'contact':
            include 'view/other/contact.php';
            break; 

        case 'signin':
            if(isset($_POST['submit'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $loginMess = signin($user, $pass);
                if($loginMess == "") {
                    if($_SESSION['user']['role'] == 0) header("Location: ./admin/index.php");
                    else header("Location: index.php");
                }
            }
            include './view/login/signin.php';
            break;

        case 'signup':
            if(isset($_POST['submit'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                insert_user($user, $pass, $email, 1);
                header('Location: index.php?act=signin');
            }
            include './view/login/signup.php';
            break;

        case 'logout':
            logout();    
            include './view/login/signin.php';
            break;

        case 'forgot_pass':
            if(isset($_POST['submit'])) {
                $email = $_POST['email'];
                $sendMailMess = send_mail($email);
            }
            include './view/login/forgot_pass.php';
            break;

    }
} else {
    include 'view/header.php';
    include 'view/home.php';
}
    include 'view/footer.php';
