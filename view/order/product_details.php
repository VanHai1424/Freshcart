<!-- Shop Cart -->
<?php 
    if(is_array($product)) {
        extract($product);
        // echo '<pre>';
        // print_r($product);
        // echo '</pre>';
    }
?>
<main>
    <div class="mt-4">
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-12">
                    <!-- breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="index.php?act=categories&id=<?= $id_category ?>"><?= $category_name ?></a></li>

                            <li class="breadcrumb-item active" aria-current="page"><?= $name ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <section class="mt-8">
        <div class="container">
            <form action="index.php?act=cart" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <!-- img slide -->
                        <div class="product" id="product">
                            <div>
                                <!-- img -->
                                <img width="100%" height="471" style="object-fit: cover; border-radius: 15px;" src="./upload/<?= $img ?>" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ps-lg-10 mt-6 mt-md-0">
                            <!-- content -->
                            <a href="index.php?act=categories&id=<?= $id_category ?>" class="mb-4 d-block"><?= $category_name ?></a>
                            <!-- heading -->
                            <h1 class="mb-1"><?= $name ?></h1>
                            <!-- <div class="mb-4">
                            <small class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </small>
                            <a href="#" class="ms-2">(30 reviews)</a>
                            </div> -->
                            <!-- hr -->
                            <hr class="my-6" />
                            <!-- <div class="mb-5">
                            <button type="button" class="btn btn-outline-secondary">250g</button>
                            
                            <button type="button" class="btn btn-outline-secondary">500g</button>
                            
                            <button type="button" class="btn btn-outline-secondary">1kg</button>
                            </div> -->
                            <div>
                                <!-- table -->
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        <tr>
                                            <td>Product Code:</td>
                                            <td><?= $id ?></td>
                                        </tr>
                                        <tr>
                                            <td>Quantity:</td>
                                            <td><?= $quantity ?></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <!-- hr -->
                            <hr class="my-6" />
                            <div>
                                <!-- input -->
                                <div class="input-group input-spinner">
                                    <input type="button" value="-" onclick="btnMinus(this)" class="button-minus btn btn-sm" data-field="quantity" />
                                    <input type="number" value="1" max="<?= $quantity ?>" min="1" name="quantity" class="quantity-field form-control-sm form-input" />
                                    <input type="button" value="+" onclick="btnPlus(this)" class="button-plus btn btn-sm" data-field="quantity" />
                                </div>
                            </div>

                            <div class="fs-4" style="margin-top: 12px;">
                                <!-- price -->
                                <span class="fw-bold text-danger"><?= number_format($price) ?> VND</span>
                                
                            </div>

                            <div class="mt-3 row justify-content-start g-2 align-items-center">
                                <div class="col-xxl-4 col-lg-4 col-md-5 col-5 d-grid">
                                    <!-- button -->
                                    <button data-id="<?= $id ?>" onclick="addToCart(<?= $id ?>, '<?= $name ?>', '<?= $img ?>', <?= $quantity ?>, <?= $price ?>, document.querySelector('input[name=\'quantity\']').value);" name="submit" type="button" class="btn btn-primary">
                                        <i class="feather-icon icon-shopping-bag me-2"></i>
                                        Add to cart
                                    </button>


                                </div>
                            </div>
                            <div class="mt-8">
                                <!-- dropdown -->
                                <div class="dropdown">
                                    <a class="btn btn-outline-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Share</a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="bi bi-facebook me-2"></i>
                                                Facebook
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="bi bi-twitter me-2"></i>
                                                Twitter
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="bi bi-instagram me-2"></i>
                                                Instagram
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="mt-lg-14 mt-8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills nav-lb-tab" id="myTab" role="tablist">
                        <!-- nav item -->
                        <li class="nav-item" role="presentation">
                            <!-- btn -->
                            <button class="nav-link active" id="product-tab" data-bs-toggle="tab" data-bs-target="#product-tab-pane" type="button" role="tab" aria-controls="product-tab-pane" aria-selected="true">
                                Product Details
                            </button>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item" role="presentation">
                            <!-- btn -->
                            <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews-tab-pane" type="button" role="tab" aria-controls="reviews-tab-pane" aria-selected="false">
                                Reviews
                            </button>
                        </li>
                        <!-- nav item -->
                    </ul>
                    <!-- tab content -->
                    <div class="tab-content" id="myTabContent">
                        <!-- tab pane -->
                        <div class="tab-pane fade show active" id="product-tab-pane" role="tabpanel" aria-labelledby="product-tab" tabindex="0">
                            <div class="my-8">
                                <div class="mb-5">
                                    <!-- text -->
                                    <p class="mb-0">
                                        <?= $desc ?>
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                        <!-- tab pane -->
                        <div class="tab-pane fade" id="reviews-tab-pane" role="tabpanel" aria-labelledby="reviews-tab" tabindex="0">
                            <div class="my-8">
                                <!-- row -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="me-lg-12 mb-6 mb-md-0">
                                            <div class="mb-5">
                                                <!-- title -->
                                                <h4 class="mb-3">Customer reviews</h4>
                                                <span>
                                                    <!-- rating -->
                                                    <small class="text-warning">
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-fill"></i>
                                                        <i class="bi bi-star-half"></i>
                                                    </small>
                                                    <span class="ms-3">4.1 out of 5</span>
                                                    <small class="ms-3">11,130 global ratings</small>
                                                </span>
                                            </div>
                                            <div class="mb-8">
                                                <!-- progress -->
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="text-nowrap me-3 text-muted">
                                                        <span class="d-inline-block align-middle text-muted">5</span>
                                                        <i class="bi bi-star-fill ms-1 small text-warning"></i>
                                                    </div>
                                                    <div class="w-100">
                                                        <div class="progress" style="height: 6px">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <span class="text-muted ms-3">53%</span>
                                                </div>
                                                <!-- progress -->
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="text-nowrap me-3 text-muted">
                                                        <span class="d-inline-block align-middle text-muted">4</span>
                                                        <i class="bi bi-star-fill ms-1 small text-warning"></i>
                                                    </div>
                                                    <div class="w-100">
                                                        <div class="progress" style="height: 6px">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="50"></div>
                                                        </div>
                                                    </div>
                                                    <span class="text-muted ms-3">22%</span>
                                                </div>
                                                <!-- progress -->
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="text-nowrap me-3 text-muted">
                                                        <span class="d-inline-block align-middle text-muted">3</span>
                                                        <i class="bi bi-star-fill ms-1 small text-warning"></i>
                                                    </div>
                                                    <div class="w-100">
                                                        <div class="progress" style="height: 6px">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="35"></div>
                                                        </div>
                                                    </div>
                                                    <span class="text-muted ms-3">14%</span>
                                                </div>
                                                <!-- progress -->
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="text-nowrap me-3 text-muted">
                                                        <span class="d-inline-block align-middle text-muted">2</span>
                                                        <i class="bi bi-star-fill ms-1 small text-warning"></i>
                                                    </div>
                                                    <div class="w-100">
                                                        <div class="progress" style="height: 6px">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="22"></div>
                                                        </div>
                                                    </div>
                                                    <span class="text-muted ms-3">5%</span>
                                                </div>
                                                <!-- progress -->
                                                <div class="d-flex align-items-center mb-2">
                                                    <div class="text-nowrap me-3 text-muted">
                                                        <span class="d-inline-block align-middle text-muted">1</span>
                                                        <i class="bi bi-star-fill ms-1 small text-warning"></i>
                                                    </div>
                                                    <div class="w-100">
                                                        <div class="progress" style="height: 6px">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 14%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="14"></div>
                                                        </div>
                                                    </div>
                                                    <span class="text-muted ms-3">7%</span>
                                                </div>
                                            </div>
                                            <div class="d-grid">
                                                <h4>Review this product</h4>
                                                <p class="mb-0">Share your thoughts with other customers.</p>
                                                <a href="#create-review" class="btn btn-outline-gray-400 mt-4 text-muted">Write the Review</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- col -->
                                    <div class="col-md-8">
                                        <div class="mb-10">
                                            <div class="d-flex justify-content-between align-items-center mb-8">
                                                <div>
                                                    <!-- heading -->
                                                    <h4>Reviews</h4>
                                                </div>
                                                <div>
                                                    <select class="form-select">
                                                        <option selected>Top Reviews</option>
                                                        <option value="Most Recent">Most Recent</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <?php 
                                                foreach ($productReviews as $value) {
                                                    extract($value);
                                                
                                            ?>
                                            <div class="d-flex border-bottom pb-6 mb-6">
                                                <!-- <img src="./assets/images/avatar/avatar-10.jpg" alt="" class="rounded-circle avatar-lg" /> -->
                                                <div class="ms-5">
                                                    <h6 class="mb-1"><?= $user_name ?></h6>
                                                    <!-- select option -->
                                                    <!-- content -->
                                                    <p class="small">
                                                        <span class="text-muted"><?= date('d/m/Y', strtotime($date)) ?></span>
                                                    </p>
                                                    <!-- rating -->
                                                    <!-- <div class="mb-2">
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <span class="ms-3 text-dark fw-bold">Need to recheck the weight at delivery point</span>
                                                        </div> -->
                                                    <!-- text-->
                                                    <p><?= $content ?></p>
                                                    <!-- icon -->
                                                    <div class="d-flex justify-content-end mt-4">
                                                        <a href="#" class="text-muted">
                                                            <i class="feather-icon icon-thumbs-up me-1"></i>
                                                            Helpful
                                                        </a>
                                                        <a href="#" class="text-muted ms-4">
                                                            <i class="feather-icon icon-flag me-2"></i>
                                                            Report abuse
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php 
                                                }
                                            ?>
                                            <div style="text-align: right;">
                                                <a href="#" class="btn btn-outline-gray-400 text-muted">Read More Reviews</a>
                                            </div>
                                        </div>
                                        <?php 
                                            if(isset($_SESSION['user'])) {

                                        ?>
                                        <form action="index.php?act=review" method="POST" id="create-review">
                                            <!-- rating -->
                                            <h3 class="mb-5">Create Review</h3>
                                            <div class="py-4 mb-4">
                                                <!-- heading -->
                                                <h5>Add a written review</h5>
                                                <textarea name="content" class="form-control" rows="3" placeholder="What did you like or dislike? What did you use this product for?"></textarea>
                                            </div>
                                            <!-- button -->
                                            <input type="hidden" name="id" value="<?= $product['id'] ?>">
                                            <div class="d-flex justify-content-end">
                                                <button name="submit" type="submit" class="btn btn-primary">Submit Review</button>
                                            </div>
                                        </form>
                                        <?php 
                                            } else {
                                                echo '<h2 class="mb-5>';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab pane -->
                        <div class="tab-pane fade" id="sellerInfo-tab-pane" role="tabpanel" aria-labelledby="sellerInfo-tab" tabindex="0">Đăng nhập để bình luận</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section -->
    <section class="my-lg-14 my-14">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-12">
                    <!-- heading -->
                    <h3>Related Items</h3>
                </div>
            </div>
            <!-- row -->
            <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-2 mt-2">
                <!-- col -->
                <?php 
                    foreach ($productRelated as $value) {
                        extract($value);
                    
                ?>
                <div class="col">
                    <div class="card card-product">
                        <div class="card-body">
                            <!-- badge -->

                            <div class="text-center position-relative">
                                <!-- <div class="position-absolute top-0 start-0">
                                    <span class="badge bg-danger">Sale</span>
                                </div> -->
                                <a href="index.php?act=product_details&id=<?= $id ?>">
                                    <!-- img -->
                                    <img src="./upload/<?= $img ?>" alt="" class="mb-3 img-fluid" />
                                </a>
                            </div>
                            <!-- heading -->
                            
                            <h2 class="fs-6"><a href="index.php?act=product_details&id=<?= $id ?>" class="text-inherit text-decoration-none"><?= $name ?></a></h2>
                            <!-- <div>
                                <small class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </small>
                                <span class="text-muted small">4.5(149)</span>
                            </div> -->
                            <!-- price -->
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="text-danger"><?= number_format($price) ?> VND</span>
                                </div>
                                <!-- btn -->
                                <div onclick="addToCart(<?= $id ?>, '<?= $name ?>', '<?= $img ?>', <?= $quantity ?> , <?= $price ?>, 1);"> 
                                    <a href="#!" class="btn btn-primary btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                        </svg>
                                        Add
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                    }
                ?>
            </div>
        </div>
    </section>
</main>
<script>
    // Add To Cart
    var totalProduct = document.querySelector('#totalProduct');
    function addToCart(id, name, img, quantity, price, quantityOrder) {
        $.ajax({
            type: 'POST',
            url: './view/order/add_to_cart.php',
            data: {
                id: id,
                name: name,
                img: img,
                quantity: quantity,
                price: price,
                quantityOrder: quantityOrder
            },

            success: function(response) {
                totalProduct.innerText = response;
                alert('Thêm thành công!');
            },
            
            error: function(error) {
                console.log(error);
            }
        });
    }
</script>