<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from freshcart.codescandy.com/pages/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Nov 2023 14:19:28 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta content="Codescandy" name="author" />
      <title>Forget Password eCommerce HTML Template - FreshCart</title>
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
                     <img src="./assets/images/svg-graphics/fp-g.svg" alt="" class="img-fluid" />
                  </div>
                  <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1 d-flex align-items-center">
                     <div>
                        <div class="mb-lg-9 mb-5">
                           <!-- heading -->
                           <h1 class="mb-2 h2 fw-bold">Forgot your password?</h1>
                           <p>Please enter the email address associated with your account and We will email you a link to reset your password.</p>
                        </div>
                        <!-- form -->
                        <form action="index.php?act=forgot_pass" method="POST" class="needs-validation" novalidate>
                           <!-- row -->
                           <div class="row g-3">
                              <!-- col -->
                              <div class="col-12">
                                 <!-- input -->
                                 <label for="formForgetEmail" class="form-label visually-hidden">Email address</label>
                                 <input name="email" type="email" class="form-control" id="formForgetEmail" placeholder="Email" required />
                                 <div class="invalid-feedback">Please enter correct email.</div>
                              </div>
                              <?= (isset($sendMailMess) && ($sendMailMess != "")) ? $sendMailMess : "" ?>
                              <!-- btn -->
                              <div class="col-12 d-grid gap-2">
                                 <button name="submit" type="submit" class="btn btn-primary">Reset Password</button>
                                 <a href="index.php?act=signup" class="btn btn-light">Back</a>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>

     
