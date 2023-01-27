<?php
require_once "config.php";

$email = $password = $confirm_password = "";
$email_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // check if email is empty
    if (empty(trim($_POST["email"]))) {
        $email_err = "email cannot be blank";
    } else {
        $sql = "SELECT id FROM user WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            // set the value of param email
            $param_email = trim($_POST['email']);

            //try to execute this statement
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $email_err = "Email already exist";
                } else {
                    $email = trim($_POST['email']);
                }
            } else {
                echo "something went wrong";
            }
        }
    }
    mysqli_stmt_close($stmt);


    // check for password
    if (empty(trim($_POST['password']))) {
        $password_err = "Password cannot be blank";
    } elseif (strlen(trim($_POST['password'])) < 5) {
        $password_err = "Password cannot be less than 5 characters";
    } else {
        $password = trim($_POST['password']);
    }

    // check for confirm password
    if (trim($_POST['password']) != trim($_POST['confirm_password'])) {
        $password_err = "Password should match";
    }

    // insert in database
    if (empty($email_err) && empty($password_err) && empty($confirm_password_err)) {
        $sql = "INSERT INTO user (email, password) VALUES (?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ss", $param_email, $param_password);

            // set these parameters
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            //try to execute the query
            if (mysqli_stmt_execute($stmt)) {
                header("location: login.php");
            } else {
                echo "Something went wrong... cannot redirect!";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP login system!</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
  <!-- TOP HEADER SECTION SATRT -->


  <div class="HeaderBar">
        <div class="LogoHeader">
            <a href="./index.html"> <img style="width: 112px;" src="./images/logo.jpg" alt="Logo co."></a>
        </div>
        <div class="MenuMobile None" id="MenuMobile">
            <div class="BoxMenuMobile">
                <div class="LogoMenu">
                    <img src="./images/logo.jpg" alt="Logo co.">
                </div>
                <div class="MenuHeader">
                    <ul class="d-flex">
                        <li class="MenuTitle">
                            <a href="./about-us.html">About Us </a>
                        </li>

                        <div class="dropdown">
                            <button type="button" class="btn btneesss dropdown-toggle" data-bs-toggle="dropdown">
                                Services
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./assets-management.html">Assets Management</a></li>
                                <li><a class="dropdown-item" href="./Data-Mapping.html">Data Mapping</a></li>  
                                <li><a class="dropdown-item" href="./DATA-RECONCILIATION-PROCESS.html"> Data Reconcilation Process   </a></li> 
                                                    
                            </ul>
                        </div>

                        <li class="MenuTitle">
                            <a href="https://store.collx.in/">Products</a>
                        </li>
                        <li class="MenuTitle">
                            <a href="./contact.html">Contact us</a>
                        </li>
                    </ul>
                </div>
                <div class="ButtonHeader">
                    <ul class="d-flex">
                        <li>
                            <a href="./login.php"><button class="Loginbtn">Login</button></a>
                        </li>
                        <li>
                            <a href="./signup.php"><button class="Registerbtn">Signup</button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="SwitchMenuMobile" id="SwitchMenuMobile">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- TOP HEADER SECTION END -->

<div class="container mt-4">
<h3>Please Register Here:</h3>
<hr>
<form action="" method="post">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Email</label>
      <input type="text" class="form-control" name="email" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-12">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name ="password" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
      <label for="inputPassword4">Confirm Password</label>
      <input type="password" class="form-control" name ="confirm_password" id="inputPassword" placeholder="Confirm Password">
    </div>
  
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>
       <!-- FOOTER SECTION START -->
       <footer class="footer" role="contentinfo" style="
    margin-top: 50px;
">


<div class="container">
    <div class="row">

        <div class="col-xl-2">
            <div class="footer__logo">
                <a href="#" title="Asset Panda">
                    <img src="./images/logo.jpg" alt="Asset Panda" title="Asset Panda"
                        class="footer-logo-image">
                </a>
            </div>
            <address class="address">
                5729 Lebanon Road<br>
                Ste 144-269<br>
                Frisco, Texas 75034 </address>
            <div class="telephone">
                <a href="tel:" title="telephone"></a>
            </div>


            <div class="footer__social">
                <ul>
                    <li>
                        <a class="bs-footer__social-media-icon" href="https://www.facebook.com/AssetPanda/"
                            target="_blank">
                            <img src="https://www.assetpanda.com/wp-content/uploads/2020/02/icons-8-facebook-new.svg"
                                class="active" alt="facebook">
                            <img src="https://www.assetpanda.com/wp-content/uploads/2020/02/icons-8-facebook-new-1.svg"
                                class="hover" alt="facebook">
                        </a>
                    </li>
                    <li>
                        <a class="bs-footer__social-media-icon"
                            href="https://www.linkedin.com/company/asset-panda/" target="_blank">
                            <img src="https://www.assetpanda.com/wp-content/uploads/2020/02/icons-8-linkedin.svg"
                                class="active" alt="linkedin">
                            <img src="https://www.assetpanda.com/wp-content/uploads/2020/02/icons-8-linkedin-1.svg"
                                class="hover" alt="linkedin">
                        </a>
                    </li>
                    <li>
                        <a class="bs-footer__social-media-icon"
                            href="https://www.youtube.com/channel/UCmz_q5p4O_NOShFjawIg4Fw" target="_blank">
                            <img src="https://www.assetpanda.com/wp-content/uploads/2020/02/icons-8-youtube-play.svg"
                                class="active" alt="youtube">
                            <img src="https://www.assetpanda.com/wp-content/uploads/2020/02/icons-8-youtube-play-1.svg"
                                class="hover" alt="youtube">
                        </a>
                    </li>
                </ul>
            </div>

            <!--Copyright Text-->
            <div class="footer__copyrights">
                <p aria-label="
                  ©2023 Asset Panda                    " tabindex="0">
                    ©2023 Asset Panda </p>
            </div>
        </div>
        <div class="col-xl-2">
            <p aria-label="Get the App" tabindex="0">Get the App</p>
            <div class="apple_store__logo">
                <a href="https://itunes.apple.com/us/app/asset-panda/id586542460?mt=8" target="_blank"
                    title="apple-app-store-logo">
                    <img src="https://www.assetpanda.com/wp-content/uploads/2020/02/apple-store-logo.png"
                        alt="apple-app-store-logo" title="apple-app-store-logo" class="store-logo-image">
                </a>
            </div>

            <div class="google_play_store__logo">
                <a href="https://play.google.com/store/apps/details?id=com.assetpanda&amp;hl=en" target="_blank"
                    title="Asset Panda">
                    <img src="https://www.assetpanda.com/wp-content/uploads/2020/02/google-play-store-logo.png"
                        alt="google-play-store-logo" title="google-play-store-logo" class="store-logo-image">
                </a>
            </div>

        </div>

        <div class="col-xl-2">
            <div class="footer__list">
                <div>
                    <p data-toggle="collapse" href="#about" aria-label="Products" tabindex="0">Products</p>
                    <ul id="menu-products-menu" class="collapse show dont-collapse-sm">
                        <li id="menu-item-168"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-168"><a
                                href="https://www.assetpanda.com/our-technology/">Our Technology</a></li>
                        <li id="menu-item-167"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-167"><a
                                href="https://www.assetpanda.com/integrations/">Integrations</a></li>
                        <li id="menu-item-9000"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9000"><a
                                href="https://www.assetpanda.com/barcode-labels/">Barcode Labels</a></li>
                    </ul> <span class="footer-drop-down-helper"></span>
                </div>
            </div>
        </div>
        <div class="col-xl-2">
            <div class="footer__list">
                <div>
                    <p data-toggle="collapse" href="#about" aria-label="About" tabindex="0">About</p>
                    <ul id="menu-about-menu" class="collapse show dont-collapse-sm">
                        <li id="menu-item-171"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-171"><a
                                href="https://www.assetpanda.com/our-company/">Our Company</a></li>
                        <li id="menu-item-170"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-170"><a
                                href="https://www.assetpanda.com/contact/">Contact Asset Panda</a></li>
                        <li id="menu-item-169"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-169"><a
                                href="https://www.assetpanda.com/careers/">Careers</a></li>
                        <li id="menu-item-173"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-173"><a
                                href="https://www.assetpanda.com/pressroom/">Pressroom</a></li>
                    </ul> <span class="footer-drop-down-helper"></span>
                </div>
            </div>
        </div>
        <div class="col-xl-2">
            <div class="footer__list">
                <div>
                    <p data-toggle="collapse" href="#about" aria-label="Resources" tabindex="0">Resources</p>
                    <ul id="menu-footer-resources-menu" class="collapse show dont-collapse-sm">
                        <li id="menu-item-1317"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1317"><a
                                href="https://www.assetpanda.com/other-resources/client-reviews/">Client
                                Reviews</a></li>
                        <li id="menu-item-174"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-174"><a
                                href="https://www.assetpanda.com/resource-center/case-studies/">Case Studies</a>
                        </li>
                        <li id="menu-item-175"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-175"><a
                                href="https://www.assetpanda.com/resource-center/white-papers/">White Papers</a>
                        </li>
                        <li id="menu-item-184"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-184"><a
                                href="https://www.assetpanda.com/resource-center/blog/">Blog</a></li>
                        <li id="menu-item-176"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-176"><a
                                href="https://www.assetpanda.com/resource-center/webinars/">Webinars</a></li>
                        <li id="menu-item-177"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-177"><a
                                href="https://www.assetpanda.com/other-resources/faq/">FAQ</a></li>
                        <li id="menu-item-178"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-178"><a
                                href="https://www.assetpanda.com/other-resources/roi-calculator/">ROI
                                Calculator</a></li>
                        <li id="menu-item-7233"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7233"><a
                                href="https://www.assetpanda.com/resource-center/success-stories/">Success
                                Stories</a></li>
                    </ul> <span class="footer-drop-down-helper"></span>
                </div>
            </div>
        </div>
        <div class="col-xl-2">
            <div class="footer__list">
                <div>
                    <p data-toggle="collapse" href="#about" aria-label="Other" tabindex="0">Other</p>
                    <ul id="menu-footer-other-menu" class="collapse show dont-collapse-sm">
                        <li id="menu-item-7408"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7408"><a
                                href="https://info.assetpanda.com/newsletter-sign-up">Newsletter Sign-Up</a>
                        </li>
                        <li id="menu-item-195"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-195"><a
                                href="https://www.assetpanda.com/gdpr-policy/">GDPR Policy</a></li>
                        <li id="menu-item-197"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-197">
                            <a href="https://www.assetpanda.com/privacy-policy/">Privacy Policy</a>
                        </li>
                        <li id="menu-item-198"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-198"><a
                                href="https://www.assetpanda.com/terms-of-use/">Terms of Use</a></li>
                        <li id="menu-item-9522"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9522"><a
                                href="https://www.assetpanda.com/public-security-information/">Public Security
                                Information</a></li>
                    </ul> <span class="footer-drop-down-helper"></span>
                </div>
            </div>
        </div>
    </div>

</div>



</footer>

<!-- FOOTER SECTION END -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>