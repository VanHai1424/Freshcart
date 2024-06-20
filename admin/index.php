<?php 
    include 'header.php';       
    include '../model/pdo.php';
    include '../model/product.php';
    include '../model/category.php';
    include '../model/user.php';
    include '../model/review.php';
    include '../model/order.php';
    include '../model/statistics.php';
    if(isset($_GET['act']) && ($_GET['act'] != '')) {
        $act = $_GET['act'];
        switch($act) {
            // Product
            case 'list_product':
                $records_per_page = 10;
                if (isset($_GET['page']) && is_numeric($_GET['page'])) {
                    $current_page = $_GET['page'];
                } else {
                    $current_page = 1;
                }
                $offset = ($current_page - 1) * $records_per_page;
                $countData = loadCount("product");
                $totalPages = ceil($countData / $records_per_page);
                $listProduct = loadall_product("", 0, $offset, $records_per_page);
               
                include 'product/list.php';
                break;

            case 'add_product':
                if(isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $quantity = $_POST['quantity'];
                    $price = $_POST['price'];
                    $desc = $_POST['desc'];
                    $id_category = $_POST['id_category'];
                    $fileName = basename($_FILES['image']['name']);
                    $targetFile = '../upload/'.$fileName;
                    if(move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)){
                        // echo "Thành công";
                    } else echo "Lỗi";
                    insert_product($name, $fileName, $price, $quantity, $desc, $id_category);
                    $thongBao = "Thêm sản phẩm thành công";
                }

                $listCategory = loadall_category();
                include 'product/add.php';
                break;

            case 'edit_product':
                if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $product = loadone_product($_GET['id']);
                }
                $listCategory = loadall_category();
                include 'product/edit.php';
                break;

            case 'update_product':
                if(isset($_POST['submit'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $price = $_POST['price'];
                    $quantity = $_POST['quantity'];
                    $desc = $_POST['desc'];
                    $id_category = $_POST['id_category'];
                    $fileName = basename($_FILES['image']['name']);
                    $targetFile = '../upload/'.$fileName;
                    if(move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)){
                        // echo "Thành công";
                    } else echo "Lỗi";
                    update_product($name, $fileName, $price, $quantity, $desc, $id_category, $id);
                }
                $listProduct = loadall_product();
                include 'product/list.php';
                break;

            case 'delete_product':
                if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_product($_GET['id']);
                }

                $listProduct = loadall_product();
                include 'product/list.php';
                break;    

            // Categories    
            case 'list_category':
                $listCategory = loadall_category();
                include 'category/list.php';
                break;

            case 'add_category':
                if(isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $fileName = basename($_FILES['image']['name']);
                    $targetFile = '../upload/'.$fileName;
                    if(move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)){
                        // echo "Thành công";
                    } else echo "Lỗi";
                    insert_category($name, $fileName);
                    $thongBao = "Thêm danh mục thành công";
                }
                include 'category/add.php';
                break;

            case 'edit_category':
                if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $category = loadone_category($_GET['id']);
                }
               
                include 'category/edit.php';
                break;

            case 'update_category':
                if(isset($_POST['submit'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $fileName = basename($_FILES['image']['name']);
                    $targetFile = '../upload/'.$fileName;
                    if(move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)){
                        // echo "Thành công";
                    } else echo "Lỗi";
                    update_category($name, $fileName, $id);
                }
                $listCategory = loadall_category();
                include 'category/list.php';
                break;
                
            case 'delete_category':
                if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_category($_GET['id']);
                }

                $listCategory = loadall_category();
                include 'category/list.php';
                break;    
    
            // Orders    
            case 'list_order':
                $listOrder = loadall_order();
                include 'order/list.php';
                break;
  
            case 'orders_detail':
                if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $listOrderDetail = loadall_orderDetail($_GET['id']);
                }
                include 'order/order_detail.php';
                break;

            // Users    
            case 'list_user';
                $listUser = loadall_user();
                include 'user/list.php';
                break;

            case 'add_user':
                if(isset($_POST['submit'])) {
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $role = $_POST['role'];
                    insert_user($user, $pass, $email, $role);
                    $thongBao = "Thêm tài khoản thành công";
                }
                include 'user/add.php';
                break;

            case 'edit_user':
                if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                    $user = loadone_user($_GET['id']);
                }
                include 'user/edit.php';
                break;

            case 'update_user':
                if(isset($_POST['submit'])) {
                    $id = $_POST['id'];
                    $user = $_POST['name'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $role = $_POST['role'];
                    update_user($user, $pass, $email, $role, $id);
                }
                $listUser = loadall_user();
                include 'user/list.php';
                break;

            case 'delete_user':
                if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_user($_GET['id']);
                }

                $listUser = loadall_user();
                include 'user/list.php';
                break;  

            // Reviews    
            case 'list_review':
                $listReview = loadall_review();
                include 'review/list.php';
                break;

            case 'delete_review':
                if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                    delete_review($_GET['id']);
                }

                $listReview = loadall_review();
                include 'review/list.php';
                break;    
        }
    } else {
        $listOrder = loadall_order_top5();
        $statistics = load_statistics();
        $listTotalSold = loadall_total_sold();
        include 'home.php';
    }
    include 'footer.php';
?>
