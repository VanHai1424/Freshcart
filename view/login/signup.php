<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from freshcart.codescandy.com/pages/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Nov 2023 14:19:28 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta content="Codescandy" name="author" />
      <title>Sign up eCommerce HTML Template - FreshCart</title>
      <!-- Favicon icon-->
      <link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon/favicon.ico" />

      <!-- Libs CSS -->
      <link href="./assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
      <link href="./assets/libs/feather-webfont/dist/feather-icons.css" rel="stylesheet" />
      <link href="./assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />

      <!-- Theme CSS -->
      <link rel="stylesheet" href="./assets/css/theme.min.css" />
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag() {
            dataLayer.push(arguments);
         }
         gtag("js", new Date());

         gtag("config", "G-M8S4MT3EYG");
      </script>
   </head>

   <body>
      <!-- navigation -->
      <div class="border-bottom shadow-sm">
         <nav class="navbar navbar-light py-2">
            <div class="container justify-content-center justify-content-lg-between">
               <a class="navbar-brand" href="./index.php">
                  <img src="./assets/images/logo/freshcart-logo.svg" alt="" class="d-inline-block align-text-top" />
               </a>
               <span class="navbar-text">
                  Already have an account?
                  <a href="index.php?act=signin">Sign in</a>
               </span>
            </div>
         </nav>
      </div>

      <main>
         <!-- section -->

         <section class="my-lg-14 my-8">
            <!-- container -->
            <div class="container">
               <!-- row -->
               <div class="row justify-content-center align-items-center">
                  <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
                     <!-- img -->
                     <img src="./assets/images/svg-graphics/signup-g.svg" alt="" class="img-fluid" />
                  </div>
                  <!-- col -->
                  <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
                     <div class="mb-lg-9 mb-5">
                        <h1 class="mb-1 h2 fw-bold">Get Start Shopping</h1>
                        <p>Welcome to FreshCart! Enter your email to get started.</p>
                     </div>
                     <!-- form -->
                     <form action="index.php?act=signup" method="POST" class="needs-validation" novalidate>
                        <div class="row g-3">
                           <!-- col -->
                           <div class="col">
                              <!-- input -->
                              <label for="formSignupfname" class="form-label visually-hidden">Name</label>
                              <input name="user" type="text" class="form-control" id="formSignupfname" placeholder="Name" required />
                              <div class="invalid-feedback">Please enter name.</div>
                           </div>
                           <div class="col-12">
                              <!-- input -->
                              <label for="formSignupEmail" class="form-label visually-hidden">Email address</label>
                              <input name="email" type="email" class="form-control" id="formSignupEmail" placeholder="Email" required />
                              <div class="invalid-feedback">Please enter email.</div>
                           </div>
                           <div class="col-12">
                              <div class="password-field position-relative">
                                 <label for="formSignupPassword" class="form-label visually-hidden">Password</label>
                                 <div class="password-field position-relative">
                                    <input name="pass" type="password" class="form-control fakePassword" id="formSignupPassword" placeholder="*****" required />
                                    <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                                    <div class="invalid-feedback">Please enter password.</div>
                                 </div>
                              </div>
                           </div>
                           <!-- btn -->
                           <div class="col-12 d-grid"><button name="submit" type="submit" class="btn btn-primary">Register</button></div>

                           <!-- text -->
                           <p>
                              <small>
                                 By continuing, you agree to our
                                 <a href="#!">Terms of Service</a>
                                 &
                                 <a href="#!">Privacy Policy</a>
                              </small>
                           </p>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </section>
      </main>

      