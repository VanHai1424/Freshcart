<?php 
   // echo '<pre>';
   // var_dump($listProductTop10);
   // echo '</pre>';

?>
<main>
         <section class="mt-8">
            <div class="container">
               <div class="hero-slider">
                  <div style="background: url(./assets/images/slider/slide-1.jpg) no-repeat; background-size: cover; border-radius: 0.5rem; background-position: center">
                     <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                        <span class="badge text-bg-warning">Opening Sale Discount 50%</span>

                        <h2 class="text-dark display-5 fw-bold mt-4">SuperMarket For Fresh Grocery</h2>
                        <p class="lead">Introduced a new model for online grocery shopping and convenient home delivery.</p>
                        <a href="#!" class="btn btn-dark mt-3">
                           Shop Now
                           <i class="feather-icon icon-arrow-right ms-1"></i>
                        </a>
                     </div>
                  </div>
                  <div style="background: url(./assets/images/slider/slider-2.jpg) no-repeat; background-size: cover; border-radius: 0.5rem; background-position: center">
                     <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                        <span class="badge text-bg-warning">Free Shipping - orders over $100</span>
                        <h2 class="text-dark display-5 fw-bold mt-4">
                           Free Shipping on
                           <br />
                           orders over
                           <span class="text-primary">$100</span>
                        </h2>
                        <p class="lead">Free Shipping to First-Time Customers Only, After promotions and discounts are applied.</p>
                        <a href="#!" class="btn btn-dark mt-3">
                           Shop Now
                           <i class="feather-icon icon-arrow-right ms-1"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <!-- Category Section Start-->
         <section class="mb-lg-10 mt-lg-14 my-8">
            <div class="container">
               <div class="row">
                  <div class="col-12 mb-6">
                     <h3 class="mb-0">Categories</h3>
                  </div>
               </div>
               <div class="category-slider">
                  <?php 
                     foreach ($listCategory as $value) {
                        extract($value);
                     
                  ?>
                  <div class="item">
                     <a href="index.php?act=categories&id=<?= $id ?>" class="text-decoration-none text-inherit">
                        <div class="card card-product mb-lg-4">
                           <div class="card-body text-center py-8">
                              <img style="width: 40px; height: 34px; object-fit: contain;" src="./upload/<?= $img ?>" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" />
                              <div class="text-truncate"><?= $name ?></div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <?php
                     }
                  ?>
                  <!-- <div class="item">
                     <a href="index.php?act=categories" class="text-decoration-none text-inherit">
                        <div class="card card-product mb-lg-4">
                           <div class="card-body text-center py-8">
                              <img src="./assets/images/category/category-snack-munchies.jpg" alt="Grocery Ecommerce Template" class="mb-3" />
                              <div class="text-truncate">Snack & Munchies</div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="item">
                     <a href="index.php?act=categories" class="text-decoration-none text-inherit">
                        <div class="card card-product mb-lg-4">
                           <div class="card-body text-center py-8">
                              <img src="./assets/images/category/category-bakery-biscuits.jpg" alt="Grocery Ecommerce Template" class="mb-3" />
                              <div class="text-truncate">Bakery & Biscuits</div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="item">
                     <a href="index.php?act=categories" class="text-decoration-none text-inherit">
                        <div class="card card-product mb-lg-4">
                           <div class="card-body text-center py-8">
                              <img src="./assets/images/category/category-instant-food.jpg" alt="Grocery Ecommerce Template" class="mb-3" />
                              <div class="text-truncate">Instant Food</div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="item">
                     <a href="index.php?act=categories" class="text-decoration-none text-inherit">
                        <div class="card card-product mb-lg-4">
                           <div class="card-body text-center py-8">
                              <img src="./assets/images/category/category-tea-coffee-drinks.jpg" alt="Grocery Ecommerce Template" class="mb-3" />
                              <div class="text-truncate">Tea, Coffee & Drinks</div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="item">
                     <a href="index.php?act=categories" class="text-decoration-none text-inherit">
                        <div class="card card-product mb-lg-4">
                           <div class="card-body text-center py-8">
                              <img src="./assets/images/category/category-atta-rice-dal.jpg" alt="Grocery Ecommerce Template" class="mb-3" />
                              <div class="text-truncate">Atta, Rice & Dal</div>
                           </div>
                        </div>
                     </a>
                  </div>

                  <div class="item">
                     <a href="index.php?act=categories" class="text-decoration-none text-inherit">
                        <div class="card card-product mb-lg-4">
                           <div class="card-body text-center py-8">
                              <img src="./assets/images/category/category-baby-care.jpg" alt="Grocery Ecommerce Template" class="mb-3" />
                              <div class="text-truncate">Baby Care</div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="item">
                     <a href="index.php?act=categories" class="text-decoration-none text-inherit">
                        <div class="card card-product mb-lg-4">
                           <div class="card-body text-center py-8">
                              <img src="./assets/images/category/category-chicken-meat-fish.jpg" alt="Grocery Ecommerce Template" class="mb-3" />
                              <div class="text-truncate">Chicken, Meat & Fish</div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="item">
                     <a href="index.php?act=categories" class="text-decoration-none text-inherit">
                        <div class="card card-product mb-lg-4">
                           <div class="card-body text-center py-8">
                              <img src="./assets/images/category/category-cleaning-essentials.jpg" alt="Grocery Ecommerce Template" class="mb-3" />
                              <div class="text-truncate">Cleaning Essentials</div>
                           </div>
                        </div>
                     </a>
                  </div>
                  <div class="item">
                     <a href="index.php?act=categories" class="text-decoration-none text-inherit">
                        <div class="card card-product mb-lg-4">
                           <div class="card-body text-center py-8">
                              <img src="./assets/images/category/category-pet-care.jpg" alt="Grocery Ecommerce Template" class="mb-3" />
                              <div class="text-truncate">Pet Care</div>
                           </div>
                        </div>
                     </a>
                  </div> -->
               </div>
            </div>
         </section>
         <!-- Category Section End-->
         <section>
            <div class="container">
               <div class="row">
                  <div class="col-12 col-md-6 mb-3 mb-lg-0">
                     <div>
                        <div class="py-10 px-8 rounded" style="background: url(./assets/images/banner/grocery-banner.png) no-repeat; background-size: cover; background-position: center">
                           <div>
                              <h3 class="fw-bold mb-1">Fruits & Vegetables</h3>
                              <p class="mb-4">
                                 Get Upto
                                 <span class="fw-bold">30%</span>
                                 Off
                              </p>
                              <a href="#!" class="btn btn-dark">Shop Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-6">
                     <div>
                        <div class="py-10 px-8 rounded" style="background: url(./assets/images/banner/grocery-banner-2.jpg) no-repeat; background-size: cover; background-position: center">
                           <div>
                              <h3 class="fw-bold mb-1">Bread</h3>
                              <p class="mb-4">
                                 Get Upto
                                 <span class="fw-bold">25%</span>
                                 Off
                              </p>
                              <a href="#!" class="btn btn-dark">Shop Now</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Popular Products Start-->
         <section class="my-lg-14 my-8">
            <div class="container">
               <div class="row">
                  <div class="col-12 mb-6">
                     <h3 class="mb-0">New Products</h3>
                  </div>
               </div>

               <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">
                  <?php 
                     foreach ($listProductTop10 as $value) {
                        extract($value);
                     
                  ?>
                  <div class="col">
                     <div class="card card-product">
                        <div class="card-body">
                           <div class="text-center position-relative">
                              <a href="index.php?act=product_details&id=<?= $id ?>"><img style="width: 211px; height: 211px; object-fit: cover;" src="./upload/<?= $img ?>" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>
                           </div>

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
                           <div class="d-flex justify-content-between align-items-center mt-3">
                              <div>
                                 <span class="text-danger"><?= number_format($price) ?> VND</span>
                                 <!-- <span class="text-decoration-line-through text-muted">$24</span> -->
                              </div>
                              <div data-id="<?= $id ?>" onclick="addToCart(<?= $id ?>, '<?= $name ?>', '<?= $img ?>', <?= $quantity ?> , <?= $price ?>, 1);">
                                 <a href="#!" class="btn btn-primary btn-sm">
                                    <svg
                                       xmlns="http://www.w3.org/2000/svg"
                                       width="16"
                                       height="16"
                                       viewBox="0 0 24 24"
                                       fill="none"
                                       stroke="currentColor"
                                       stroke-width="2"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       class="feather feather-plus">
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
         <!-- Popular Products End-->
         <!-- <section>
            <div class="container">
               <div class="row">
                  <div class="col-md-12 mb-6">
                     <h3 class="mb-0">Daily Best Sells</h3>
                  </div>
               </div>
               <div class="table-responsive-xl pb-6">
                  <div class="row row-cols-lg-4 row-cols-1 row-cols-md-2 g-4 flex-nowrap">
                     <div class="col">
                        <div class="pt-8 px-6 px-xl-8 rounded" style="background: url(./assets/images/banner/banner-deal.jpg) no-repeat; background-size: cover; height: 470px">
                           <div>
                              <h3 class="fw-bold text-white">100% Organic Coffee Beans.</h3>
                              <p class="text-white">Get the best deal before close.</p>
                              <a href="#!" class="btn btn-primary">
                                 Shop Now
                                 <i class="feather-icon icon-arrow-right ms-1"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="card card-product">
                           <div class="card-body">
                              <div class="text-center position-relative">
                                 <a href="index.php?act=product_details"><img src="./assets/images/products/product-img-11.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>


                              </div>
                              
                              <h2 class="fs-6"><a href="index.php?act=product_details" class="text-inherit text-decoration-none">Roast Ground Coffee</a></h2>

                              <div class="d-flex justify-content-between align-items-center mt-3">
                                 <div>
                                    <span class="text-dark">$13</span>
                                    <span class="text-decoration-line-through text-muted">$18</span>
                                 </div>
                                 <div>
                                    <small class="text-warning">
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-half"></i>
                                    </small>
                                    <span><small>4.5</small></span>
                                 </div>
                              </div>
                              <div class="d-grid mt-2">
                                 <a href="#!" class="btn btn-primary">
                                    <svg
                                       xmlns="http://www.w3.org/2000/svg"
                                       width="16"
                                       height="16"
                                       viewBox="0 0 24 24"
                                       fill="none"
                                       stroke="currentColor"
                                       stroke-width="2"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       class="feather feather-plus">
                                       <line x1="12" y1="5" x2="12" y2="19"></line>
                                       <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Add to cart
                                 </a>
                              </div>
                              <div class="d-flex justify-content-start text-center mt-3">
                                 <div class="deals-countdown w-100" data-countdown="2028/10/10 00:00:00"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="card card-product">
                           <div class="card-body">
                              <div class="text-center position-relative">
                                 <a href="index.php?act=product_details"><img src="./assets/images/products/product-img-12.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>

                              </div>
                              
                              <h2 class="fs-6"><a href="index.php?act=product_details" class="text-inherit text-decoration-none">Crushed Tomatoes</a></h2>
                              <div class="d-flex justify-content-between align-items-center mt-3">
                                 <div>
                                    <span class="text-dark">$13</span>
                                    <span class="text-decoration-line-through text-muted">$18</span>
                                 </div>
                                 <div>
                                    <small class="text-warning">
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-half"></i>
                                    </small>
                                    <span><small>4.5</small></span>
                                 </div>
                              </div>
                              <div class="d-grid mt-2">
                                 <a href="#!" class="btn btn-primary">
                                    <svg
                                       xmlns="http://www.w3.org/2000/svg"
                                       width="16"
                                       height="16"
                                       viewBox="0 0 24 24"
                                       fill="none"
                                       stroke="currentColor"
                                       stroke-width="2"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       class="feather feather-plus">
                                       <line x1="12" y1="5" x2="12" y2="19"></line>
                                       <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Add to cart
                                 </a>
                              </div>
                              <div class="d-flex justify-content-start text-center mt-3 w-100">
                                 <div class="deals-countdown w-100" data-countdown="2028/12/9 00:00:00"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col">
                        <div class="card card-product">
                           <div class="card-body">
                              <div class="text-center position-relative">
                                 <a href="index.php?act=product_details"><img src="./assets/images/products/product-img-13.jpg" alt="Grocery Ecommerce Template" class="mb-3 img-fluid" /></a>

                              </div>
                              
                              <h2 class="fs-6"><a href="index.php?act=product_details" class="text-inherit text-decoration-none">Golden Pineapple</a></h2>
                              <div class="d-flex justify-content-between align-items-center mt-3">
                                 <div>
                                    <span class="text-dark">$13</span>
                                    <span class="text-decoration-line-through text-muted">$18</span>
                                 </div>
                                 <div>
                                    <small class="text-warning">
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-fill"></i>
                                       <i class="bi bi-star-half"></i>
                                    </small>
                                    <span><small>4.5</small></span>
                                 </div>
                              </div>
                              <div class="d-grid mt-2">
                                 <a href="#!" class="btn btn-primary">
                                    <svg
                                       xmlns="http://www.w3.org/2000/svg"
                                       width="16"
                                       height="16"
                                       viewBox="0 0 24 24"
                                       fill="none"
                                       stroke="currentColor"
                                       stroke-width="2"
                                       stroke-linecap="round"
                                       stroke-linejoin="round"
                                       class="feather feather-plus">
                                       <line x1="12" y1="5" x2="12" y2="19"></line>
                                       <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                    Add to cart
                                 </a>
                              </div>
                              <div class="d-flex justify-content-start text-center mt-3">
                                 <div class="deals-countdown w-100" data-countdown="2028/11/11 00:00:00"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section> -->
         <section class="my-lg-14 my-8">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 col-lg-3">
                     <div class="mb-8 mb-xl-0">
                        <div class="mb-6"><img src="./assets/images/icons/clock.svg" alt="" /></div>
                        <h3 class="h5 mb-3">10 minute grocery now</h3>
                        <p>Get your order delivered to your doorstep at the earliest from FreshCart pickup stores near you.</p>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="mb-8 mb-xl-0">
                        <div class="mb-6"><img src="./assets/images/icons/gift.svg" alt="" /></div>
                        <h3 class="h5 mb-3">Best Prices & Offers</h3>
                        <p>Cheaper prices than your local supermarket, great cashback offers to top it off. Get best pricess & offers.</p>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="mb-8 mb-xl-0">
                        <div class="mb-6"><img src="./assets/images/icons/package.svg" alt="" /></div>
                        <h3 class="h5 mb-3">Wide Assortment</h3>
                        <p>Choose from 5000+ products across food, personal care, household, bakery, veg and non-veg & other categories.</p>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="mb-8 mb-xl-0">
                        <div class="mb-6"><img src="./assets/images/icons/refresh-cw.svg" alt="" /></div>
                        <h3 class="h5 mb-3">Easy Returns</h3>
                        <p>
                           Not satisfied with a product? Return it at the doorstep & get a refund within hours. No questions asked
                           <a href="#!">policy</a>
                           .
                        </p>
                     </div>
                  </div>
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