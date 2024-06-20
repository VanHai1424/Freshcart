<div class="main-wrapper">
    <!-- navbar vertical -->
    <!-- navbar -->
    <?php include 'box_left.php'; ?>
    <main class="main-content-wrapper">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row mb-8">
                <div class="col-md-12">
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
                        <div>
                            <!-- page header -->
                            <h2>Order Details</h2>
                            <!-- breacrumb -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Order Details</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- button -->
                        <div>
                            <a href="index.php?act=list_order" class="btn btn-primary">Back to all orders</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-12 mb-5">
                    <!-- card -->
                    <div class="card h-100 card-lg">
                        <div class="card-body p-6">
                            <div class="d-md-flex justify-content-between">
                                <div class="d-flex align-items-center mb-2 mb-md-0">
                                    <h2 class="mb-0">Order Name: <?= $listOrderDetail[0]['order_name'] ?></h2>
                                    
                                </div>
                            </div>
                            <div class="mt-8">
                                <div class="row">
                                    <!-- address -->
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="mb-6">
                                            <h6>Customer Details</h6>
                                            <p class="mb-1 lh-lg">
                                                <?= $listOrderDetail[0]['order_name'] ?>
                                                <br />
                                                <?= $listOrderDetail[0]['user_email'] ?>
                                                <br />
                                                <?= $listOrderDetail[0]['order_tel'] ?>
                                                <br />
                                                <?= $listOrderDetail[0]['order_address'] ?>
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <!-- Order Details -->
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="mb-6">
                                            <h6>Order Details</h6>
                                            <p class="mb-1 lh-lg">
                                                Order ID:
                                                <span class="text-dark"><?= $listOrderDetail[0]['order_id'] ?></span>
                                                <br />
                                                Order Date:
                                                <span class="text-dark"><?= date('d/m/Y', strtotime($listOrderDetail[0]['order_date'])) ?></span>
                                                <br />
                                                Order Total:
                                                <span class="text-dark"><?= number_format($listOrderDetail[0]['order_total']) ?></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <!-- Table -->
                                    <table class="table mb-0 text-nowrap table-centered">
                                        <!-- Table Head -->
                                        <thead class="bg-light">
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Image</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <!-- tbody -->
                                        <tbody>
                                            <?php 
                                                foreach ($listOrderDetail as $value) {
                                                    extract($value);    
                                            ?>
                                            <tr>
                                                <td><?= $product_name ?></td>
                                                <td>
                                                    <img src="../upload/<?= $product_img ?>" alt="" class="icon-shape icon-lg" />
                                                </td>
                                                <td><?= $order_detail_quantity ?></td>
                                                <td><span class="text-body"><?= $order_detail_price ?></span></td>
                                            </tr>
                                            <?php 
                                                }
                                            ?>
                                            <!-- <tr>
                                                <td>
                                                    <a href="#" class="text-inherit">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <img src="../assets/images/products/product-img-2.jpg" alt="" class="icon-shape icon-lg" />
                                                            </div>
                                                            <div class="ms-lg-4 mt-2 mt-lg-0">
                                                                <h5 class="mb-0 h6">NutriChoice Digestive</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><span class="text-body">$24.0</span></td>
                                                <td>1</td>
                                                <td>$24.00</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-inherit">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <img src="../assets/images/products/product-img-3.jpg" alt="" class="icon-shape icon-lg" />
                                                            </div>
                                                            <div class="ms-lg-4 mt-2 mt-lg-0">
                                                                <h5 class="mb-0 h6">Cadbury 5 Star Chocolate</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><span class="text-body">$32.0</span></td>
                                                <td>1</td>
                                                <td>$32.0</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-inherit">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <img src="../assets/images/products/product-img-4.jpg" alt="" class="icon-shape icon-lg" />
                                                            </div>
                                                            <div class="ms-lg-4 mt-2 mt-lg-0">
                                                                <h5 class="mb-0 h6">Onion Flavour Potato</h5>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><span class="text-body">$3.0</span></td>
                                                <td>2</td>
                                                <td>$6.0</td>
                                            </tr> -->

                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td colspan="1" class="fw-semibold text-dark">
                                                    <!-- text -->
                                                    Total
                                                </td>
                                                <td class="fw-semibold text-danger">
                                                    <!-- text -->
                                                    <?= number_format($listOrderDetail[0]['order_total']) ?> VND
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>