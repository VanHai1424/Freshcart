<main>
    <!-- section-->
    <div class="mt-4">
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-12">
                    <!-- breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#!">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Shop</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shop Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- section -->
    <section class="mb-lg-14 mb-8 mt-8">
        <div class="container">
            <!-- row -->
            <?php 
                if(!isset($_SESSION['user'])) {

            ?>
            <div class="row">
                <!-- col -->
                <div class="col-12">
                    <div>
                        <div class="mb-8">
                            <!-- text -->
                            <h1 class="fw-bold mb-0">Checkout</h1>
                            <p class="mb-0">
                                Login to place an order         
                                <br>
                                Click here to
                                <a href="index.php?act=signin">Sign in</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
                }
            ?>
            <div>
                <!-- row -->
                <div class="row" style="justify-content: space-between;">
                    <div class="col-lg-7 col-md-12">
                        <!-- accordion -->
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <!-- accordion item -->
                            <div class="accordion-item py-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- heading one -->
                                    <a href="#" class="mb-10 fs-5 text-inherit collapsed h4" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                        <i class="feather-icon icon-map-pin me-2 text-muted"></i>
                                        Add delivery address
                                    </a>
                                    <!-- collapse -->
                                </div>
                                <form id="flush-collapseOne" class="modal-dialog collapse show" action="index.php?act=order" method="POST">
                                    <div class="modal-content">
                                        <!-- modal body -->
                                        <div class="modal-body">
                                            <!-- row -->
                                            <div class="row g-3">
                                                <!-- col -->
                                                <div class="col-12">
                                                    <input type="text" class="form-control" name="name" placeholder="Name" aria-label="First name" required />
                                                </div>
                                                <!-- col -->
                                                <div class="col-12">
                                                    <input type="text" class="form-control" name="email" placeholder="Email" required />
                                                </div>
                                                <!-- col -->
                                                <div class="col-12">
                                                    <input type="text" class="form-control" name="tel" placeholder="Phone number" required />
                                                </div>
                                                <div class="col-12">
                                                    <input type="text" class="form-control" name="address" placeholder="Address" required />
                                                </div>
                                                <div class="col-12">
                                                    <!-- button -->
                                                    <select class="form-select" name="pay_method">
                                                        <option value="1">Payment on delivery</option>
                                                        <option value="2">Bank card</option>
                                                    </select>
                                                </div>
                                                <!-- button -->
                                                <!-- <div class="col-12 text-end">
                                             <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
                                             <button class="btn btn-primary" type="submit">Save Address</button>
                                          </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>

                    <div class="col-12 col-md-12 col-lg-4" style="width: 38%;">
                        <div class="mt-4 mt-lg-0">
                            <div class="card shadow-sm">
                                <h5 class="px-6 py-4 bg-transparent mb-0">Order Details</h5>
                                <ul class="list-group list-group-flush">
                                    <!-- list group item -->
                                    <?php 
                                        $total = 0;
                                        foreach ($_SESSION['cart'] as $value) {
                                            extract($value);
                                            $total += $price * $quantityOrder;
                                    ?>
                                    <li class="list-group-item px-4 py-3">
                                        <div class="row align-items-center">
                                            <div class="col-2 col-md-2">
                                                <img src="./upload/<?= $img ?>" alt="" class="img-fluid" />
                                            </div>
                                            <div class="col-4 col-md-4">
                                                <h6 class="mb-0"><?= $name ?></h6>
                                            </div>
                                            <div class="col-2 col-md-2 text-center text-muted">
                                                <span><?= $quantityOrder ?></span>
                                            </div>
                                            <div class="col-4 text-lg-end text-start text-md-end col-md-4">
                                                <span class="fw-bold"><?= number_format($price * $quantityOrder) ?></span>
                                            </div>
                                        </div>
                                    </li>
                                    <?php 
                                        }
                                    ?>

                                    <!-- list group item -->
                                    <li class="list-group-item px-4 py-3">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <div>Item Subtotal</div>
                                            <div class="fw-bold"><?= number_format($total) ?></div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                Service Fee
                                                <i class="feather-icon icon-info text-muted" data-bs-toggle="tooltip" title="Default tooltip"></i>
                                            </div>
                                            <div class="fw-bold">0</div>
                                        </div>
                                    </li>
                                    <!-- list group item -->
                                    <li class="list-group-item px-4 py-3">
                                        <div class="d-flex align-items-center justify-content-between fw-bold">
                                            <div>Subtotal</div>
                                            <div class="text-danger"><?= number_format($total) ?> VND</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Button -->
                            <div class="col-lg-12 d-flex justify-content-end mt-5">
                                <a  <?= (!isset($_SESSION['user']) || ($_SESSION['cart'] == []) ? "disabled" : "") ?> type="submit" name="submit" onclick="placeOrder()" class="btn btn-primary ms-2">Place Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    function placeOrder() {
        const formE = document.getElementById('flush-collapseOne');
        formE.submit();
    }

</script>