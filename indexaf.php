<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="images/x-icon" href="./images/tshe-logo-removebg-preview.png">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <title>ASSETS ROSTER</title>
</head>

<body>
    <!-- TOP HEADER SECTION SATRT -->


    <div class="HeaderBar">
        <div class="LogoHeader">
            <a href="./index.html"> <img style="width: 112px;" src="./images/logo.jpg" alt="Logo co."></a>
        </div>
        <div class="MenuMobile None" id="MenuMobile" style="
    margin-left: -5%;
">
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
                                <li><a class="dropdown-item" href="./DATA-RECONCILIATION-PROCESS.html"> Data
                                        Reconcilation Process </a></li>

                            </ul>
                        </div>

                        <li class="MenuTitle">
                            <a href="https://store.collx.in/">Products</a>
                        </li>
                        <li class="MenuTitle">
                            <a href="./contact.html">Contact us</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="./logout.php"> <img
                                    src="https://img.icons8.com/metro/26/000000/guest-male.png">
                                <?php echo "Welcome " . $_SESSION['email'] ?>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="ButtonHeader">
                    <ul class="d-flex">




                    </ul>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ml-auto">

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
    <!-- SLIDER SECTION SATRT -->
    <div class="container-fluid home-container p-0">
        <div class="row">
            <section class="split home-container-section">
                <a href="" class="iitjee_box">
                    <h1> ASSET MANAGEMENT</h1>
                </a>
                <a href="" class="neet_box">
                    <h1>DATA MAPPING</h1>
                </a>
            </section>
        </div>
    </div>
    <!-- SLIDER SECTION END -->
    <!-- ABOUT US SECTION START -->
    <div class="container-fluid overflow-hidden bg-white about-us">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <div class="row ">
                        <div class="col-lg-5 col-md-5 pe-lg-4 py-lg-0 py-md-5 py-0 top_banner-left-part">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-md-12 col-sm-6 col-9 position-relative">
                                    <img src="./images/team-work-animate.svg" class="lazy-image loaded"
                                        data-src="https://www.imgglobalinfotech.com/public/assets/img/about-section/Our-Journey.webp"
                                        alt="Our-Journey" width="450" height="auto">

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 pt-lg-0 pt-5">
                            <h2 class="col-12 heading fs-md-14 fs-12 left"><span
                                    class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">ABOUT US
                                </span></h2>
                            <P>Data is the new asset. Innovation and Creativity are the base behind our asset management
                                software. We endeavor to provide smart solutions to all your data
                                challenges.
                                <br>
                                We are a group of innovative thinkers and problem solvers on a mission to address the
                                asset-tracking problems facing the world. Once equipped with our robust platform, our
                                clients are in a position to regain control over the assets within their organizations
                                and reinvest the significant cost savings into their people, communities, and
                                interests.’
                                The skilled staff of Asset Roaster is an international, entirely remote workforce. We
                                challenge the status quo and work to make the world a better place one wise move at a
                                time in the spirit of innovation and inquiry.
                                <br>
                                With the rapid increase in asset management demands, we want to supply smarter solutions
                                for all your asset issues. We have developed a unique and innovative software technology
                                that is highly-responsive towards effectively managing the clients assets. Our Company
                                offers several solutions such as Data Migration, Data Infusion, Data Generation, and
                                Vendor Reconciliation. We have an expert team with advanced technological skills to
                                ensure that our asset management services can be delivered in the best way that suits
                                your business requirements.
                            </P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- ABOUT US SECTION END -->

    <!-- why partner with us section satrt -->

    <div class="container-fluid why-prtnr">
        <div class="container">
            <div class="row text-center mb-5">
                <h2 class="col-12 headings fs-md-14 fs-12 left"><span class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Why
                        Partner With Us?</span></h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="one-box">
                        <div id="content">
                            <div id="banner">Partner</div>
                            <p>Asset Roster is the leading Fixed Asset Management Solution Company with core expertise
                                in data handling through advanced softwares and hardwares that guarantees 100% guarantee
                                for relevance and accuracy in data management. Our Asset tracking Solutions are
                                categorized in two parts:
                            </p>
                            <ul>
                                <li><a href="#">.Fixed Asset Management</a></li>
                                <li><a href="#">.Data Mapping </a></li>
                            </ul>
                            <p style="margin-top: 33px;">We have collaborated with some of the largest businesses in the
                                world for more than 20
                                years. Our staff of more than 100 people is highly skilled in technologies like RFID,
                                Barcode, WLAN, Factory Automation, and they have a thorough understanding of industry
                                verticals like retail, transportation & logistics, and manufacturing. Because of this
                                solid basis, our clients have faith in our asset tracking system to always add value and
                                innovation to the work we perform together.
                            </p>


                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="why-reborn">
                        <img src="./images/who-choose-reborn.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- why partner section end -->
    <!-- SERVICE SECTION START -->
    <div class="container-fluid service-reborn mb-5">
        <div class="container">
            <div class="row text-center mb-5">
                <h2 class="col-12 headings fs-md-14 fs-12 left"><span
                        class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Services</span></h2>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="row mx-0 align-items-center pt-3 justify-content-center align-items-stretch">
                        <div class="col-lg-3 col-md-4 col-6 p-3 align-self-stretch">
                            <div class="row py-3 industries_item mx-0 h-100">
                                <div class="col-12 text-center pb-2">
                                    <img class="w-80px"
                                        src="https://www.imgglobalinfotech.com/public/assets/img/industries-section/Healthcare.webp"
                                        alt="Healthcare">
                                </div>
                                <div class="col-12  fw-900 fs-xl-18 fs-lg-16 text-center">INVENTORY MANAGEMENT</div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 p-3 align-self-stretch">
                            <div class="row py-3 industries_item mx-0 h-100">
                                <div class="col-12 text-center pb-2">
                                    <img class="w-80px"
                                        src="https://www.imgglobalinfotech.com/public/assets/img/industries-section/education-e-learing.webp"
                                        alt="education-e-learing">
                                </div>
                                <div class="col-12  fw-900 fs-xl-18 fs-lg-16 text-center">PERIODIC INVENTORY MANAGEMENT
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 p-3 align-self-stretch">
                            <div class="row py-3 industries_item mx-0 h-100">
                                <div class="col-12 text-center pb-2">
                                    <img class="w-80px"
                                        src="https://www.imgglobalinfotech.com/public/assets/img/industries-section/Media-&amp;-Entertainment.webp"
                                        alt="Media-&amp;-Entertainment">
                                </div>
                                <div class="col-12  fw-900 fs-xl-18 fs-lg-16 text-center">BARCODE INVENTORY MANAGEMENT
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 p-3 align-self-stretch">
                            <div class="row py-3 industries_item mx-0 h-100">
                                <div class="col-12 text-center pb-2">
                                    <img class="w-80px"
                                        src="https://www.imgglobalinfotech.com/public/assets/img/industries-section/E-Commerce.webp"
                                        alt="E-commerce">
                                </div>
                                <div class="col-12  fw-900 fs-xl-18 fs-lg-16 text-center">RFI INVENTORY MANAGEMENT</div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 p-3 align-self-stretch">
                            <div class="row py-3 industries_item mx-0 h-100">
                                <div class="col-12 text-center pb-2">
                                    <img class="w-80px"
                                        src="https://www.imgglobalinfotech.com/public/assets/img/industries-section/Banking-&amp;-Finance.webp"
                                        alt="Banking-&amp;-Finance">
                                </div>
                                <div class="col-12  fw-900 fs-xl-18 fs-lg-16 text-center">AMC SOFTWARE</div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 p-3 align-self-stretch">
                            <div class="row py-3 industries_item mx-0 h-100">
                                <div class="col-12 text-center pb-2">
                                    <img class="w-80px"
                                        src="https://www.imgglobalinfotech.com/public/assets/img/industries-section/Taxi-Booking.webp"
                                        alt="Taxi-Booking">
                                </div>
                                <div class="col-12  fw-900 fs-xl-18 fs-lg-16 text-center">FIXED ASSET MANAGEMENT</div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 p-3 align-self-stretch">
                            <div class="row py-3 industries_item mx-0 h-100">
                                <div class="col-12 text-center pb-2">
                                    <img class="w-80px"
                                        src="https://www.imgglobalinfotech.com/public/assets/img/industries-section/Food-&amp;-Restaurant.webp"
                                        alt="Food-&amp;-Restaurant">
                                </div>
                                <div class="col-12  fw-900 fs-xl-18 fs-lg-16 text-center">DATA MAPPING </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 p-3 align-self-stretch">
                            <div class="row py-3 industries_item mx-0 h-100">
                                <div class="col-12 text-center pb-2">
                                    <img class="w-80px"
                                        src="https://www.imgglobalinfotech.com/public/assets/img/industries-section/Social-Networking.webp"
                                        alt="Social-Networking">
                                </div>
                                <div class="col-12  fw-900 fs-xl-18 fs-lg-16 text-center">Data RECONCILATION</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SERVICE SECTION END -->

    <!-- ACHIEVEMENT SECTUON START -->
    <div class="container-fluid achievements position-relative overflow-hidden mb-5 ">
        <div class="container position-relative zi-1 py-md-5 py-4">
            <div class="row">
                <div class="col-12 h-100">
                    <div class="row align-items-start">
                        <div class="col-xl-7 position-relative h-100">
                            <div class="row">
                                <h2 class="d-none invisible">Achievements</h2>
                                <h2 class="col-12 mx-md-3 mx-3 heading fs-md-14 fs-12 left text-white"><span
                                        class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">CLIENTS WE SERVE </span></h2>
                                <div class="col-12 fs-md-17 fs-sm-15 fs-14 text-white py-4 text-md-start text-center">
                                    Being successful in the industry since for more than a decade, we have a history of
                                    providing timely delivery, value pricing, and high-quality work through a variety of
                                    software solutions.</div>
                                <div class="col-12 ps-0">
                                    <div class="row">
                                        <div class="col-sm-3 col-6 py-sm-0 py-4">
                                            <div class="row">
                                                <div class="col-12 text-xl-start text-center mb-3">
                                                    <img src="https://www.imgglobalinfotech.com/public/assets/img/achievements-section/successful-projects.webp"
                                                        class="h-xxl-60px h-50px" alt="successful-projects">
                                                </div>
                                                <h3 class="d-none invisible">Successful Projects</h3>
                                                <div
                                                    class="col-12 text-xl-start text-center fs-xl-40 fs-md-30 fs-sm-25 fs-20 text-white fw-900">
                                                    1200 <span class="ms-n1 fw-600 text-theme2">+</span></div>
                                                <div
                                                    class="col-12 text-xl-start text-center text-white fw-600 fs-xl-16 fs-md-14 fs-13">
                                                    Successful Projects</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-6 py-sm-0 py-4">
                                            <div class="row">
                                                <div class="col-12 text-xl-start text-center mb-3">
                                                    <img src="https://www.imgglobalinfotech.com/public/assets/img/achievements-section/success-ratio.webp"
                                                        class="h-xxl-60px h-50px" alt="success-ratio">
                                                </div>
                                                <h3 class="d-none invisible">Success Ratio</h3>
                                                <div
                                                    class="col-12 text-xl-start text-center fs-xl-40 fs-md-30 fs-sm-25 fs-20 text-white fw-900">
                                                    98 <span class="ms-n1 fw-600 text-theme2 fs-22">%</span></div>
                                                <div
                                                    class="col-12 text-xl-start text-center text-white fw-600 fs-xl-16 fs-md-14 fs-13">
                                                    Success Ratio</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-6 py-sm-0 py-4">
                                            <div class="row">
                                                <div class="col-12 text-xl-start text-center mb-3">
                                                    <img src="https://www.imgglobalinfotech.com/public/assets/img/achievements-section/team-members.webp"
                                                        class="h-xxl-60px h-50px" alt="Team Members">
                                                </div>
                                                <h3 class="d-none invisible">Team Members</h3>
                                                <div
                                                    class="col-12 text-xl-start text-center fs-xl-40 fs-md-30 fs-sm-25 fs-20 text-white fw-900">
                                                    100 <span class="ms-n1 fw-600 text-theme2">+</span></div>
                                                <div
                                                    class="col-12 text-xl-start text-center text-white fw-600 fs-xl-16 fs-md-14 fs-13">
                                                    Team Members</div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-6 py-sm-0 py-4">
                                            <div class="row">
                                                <div class="col-12 text-xl-start text-center mb-3">
                                                    <img src="https://www.imgglobalinfotech.com/public/assets/img/achievements-section/year-in-insustry.webp"
                                                        class="h-xxl-60px h-50px" alt="year-in-insustry">
                                                </div>
                                                <h3 class="d-none invisible">Years in Industry</h3>
                                                <div
                                                    class="col-12 text-xl-start text-center fs-xl-40 fs-md-30 fs-sm-25 fs-20 text-white fw-900">
                                                    8 <span class="ms-n1 fw-600 text-theme2">+</span></div>
                                                <div
                                                    class="col-12 text-xl-start text-center text-white fw-600 fs-xl-16 fs-md-14 fs-13">
                                                    Years in Industry</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 position-relative align-self-end pt-xl-0 pt-0">
                            <div class="sparater-block d-xl-block d-none">
                                <span class="fw-900 invisible"></span>
                            </div>
                            <div class="row">
                                <div class="col-xl-4 col-md col-sm-4 col-6 ps-1 pe-1 mt-sm-4">
                                    <a href="#"
                                        class="w-100 text-center py-2 d-block px-1 border border-2 mb-2 certified-box">
                                        <img src="https://www.imgglobalinfotech.com/public/assets/img/achievements-section/certified1.webp"
                                            class="obj" alt="certified1" width="100" height="100">
                                    </a>
                                </div>
                                <div class="col-xl-4 col-md col-sm-4 col-6 px-1 mb-2 mt-sm-4">
                                    <a href="#"
                                        class="w-100 text-center py-2 d-block px-1 border border-2 mb-2 certified-box">
                                        <img src="https://www.imgglobalinfotech.com/public/assets/img/achievements-section/certified2.webp"
                                            class="obj" alt="certified2" width="100" height="100">
                                    </a>
                                </div>
                                <div class="col-xl-4 col-md col-sm-4 col-6 px-1 mb-2 mt-sm-4">
                                    <a href="#"
                                        class="w-100 text-center py-2 d-block px-1 border border-2 mb-2 certified-box">
                                        <img src="https://www.imgglobalinfotech.com/public/assets/img/achievements-section/certified3.webp"
                                            class="obj" alt="certified3" width="100" height="100">
                                    </a>
                                </div>
                                <div class="col-xl-4 col-md col-sm-4 col-6 px-1 mb-2">
                                    <a href="#"
                                        class="w-100 text-center py-2 d-block px-1 border border-2 mb-2 certified-box">
                                        <img src="https://www.imgglobalinfotech.com/public/assets/img/achievements-section/certified-payu-partner.webp"
                                            alt="certified-payu-partner" class="obj" width="100" height="100">
                                    </a>
                                </div>
                                <div class="col-xl-4 col-md col-sm-4 col-6 px-1 mb-2">
                                    <a href="#"
                                        class="w-100 text-center py-2 d-block px-1 border border-2 mb-2 certified-box">
                                        <img src="https://www.imgglobalinfotech.com/public/assets/img/achievements-section/certified4.webp"
                                            class="obj" alt="certified4" width="100" height="100">
                                    </a>
                                </div>
                                <div class="col-xl-4 col-md col-sm-4 col-6 px-1 mb-2">
                                    <a href="#"
                                        class="w-100 text-center py-2 d-block px-1 border border-2 mb-2 certified-box">
                                        <img src="https://www.imgglobalinfotech.com/public/assets/img/achievements-section/certified5.webp"
                                            class="obj" alt="certified5" width="100" height="100">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ACHIEVEMENT SECTION END -->
    <!-- TESTIMONIAL SECTION START -->
    <div class="container-fluid testimonial-reborn mb-5 ">

        <div class="container">
            <div class="row text-center mb-5">
                <h2 class="col-12 headings fs-md-14 fs-12 left"><span
                        class="fs-xl-32 fs-lg-28 fs-md-24 fs-20">Testimonial</span></h2>
            </div>

            <section id="testim" class="testim">
                <div class="testim-cover">
                    <div class="wrap">

                        <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                        <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                        <ul id="testim-dots" class="dots">
                            <li class="dot active"></li>
                            <li class="dot"></li>
                            <li class="dot"></li><!--
                        -->
                            <li class="dot"></li><!--
                        -->
                            <li class="dot"></li>
                        </ul>
                        <div id="testim-content" class="cont">

                            <div class="active">
                                <div class="img"><img
                                        src="https://in.bmscdn.com/iedb/artist/images/website/poster/large/kartik-aaryan-1045198-08-12-2017-06-34-11.jpg"
                                        alt=""></div>
                                <h2>IDEA</h2>
                                <p>Their asset management software is a state-of-art system that has helped us maintain
                                    and secure our assets with their real-time visibility system. Their software
                                    solutions are cost-friendly and worth every penny.</p>
                            </div>

                            <div>
                                <div class="img"><img
                                        src="https://timesofindia.indiatimes.com/thumb/msid-75752690,width-800,height-600,resizemode-4/75752690.jpg"
                                        alt=""></div>
                                <h2>DELHIVERY</h2>
                                <p>We were able to witness a discernible decrease in operational costs thanks to their
                                    asset management software. All things in the RM warehouse can now be fully tracked
                                    and traced, which makes it easier for us to manage resources inside the warehouses.
                                    We also have total control over all transaction and inventory data in real-time
                                    thanks to AMC Software's seamless connectivity with our ERP.</p>
                            </div>

                            <div>
                                <div class="img"><img
                                        src="https://timesofindia.indiatimes.com/thumb/msid-75752690,width-800,height-600,resizemode-4/75752690.jpg"
                                        alt=""></div>
                                <h2>CK</h2>
                                <p>The greatest in the business is Asset Roster. They have been working with us for a
                                    while, so we hired them to help us with data mapping. Their knowledgeable solutions
                                    for all the data-driven services have left us in awe.</p>
                            </div>

                            <div>
                                <div class="img"><img
                                        src="https://p16-sg-default.akamaized.net/aweme/1080x1080/tiktok-obj/1666413671597057.jpeg"
                                        alt=""></div>
                                <h2>FERRERO ROCHER</h2>
                                <p>The efficiency of scale has been delivered across all of our warehouses in India
                                    thanks in large part to Asset Roster. We can simply track and trace every item in
                                    the supplied chat because of their barcode-based serialization on every item. It
                                    smoothly interacts with our current SAP system, enabling real-time access to
                                    accurate data. We now have better inventory visibility and improved process control
                                    with minimal human involvement thanks to their asset tracking software.</p>
                            </div>

                            <div>
                                <div class="img"><img
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSKLJe1Lrz2N3ufVSwQokSJ79jGBbIptXuVnsdxMmNUlE14ohwp&usqp=CAU"
                                        alt=""></div>
                                <h2>DPS</h2>
                                <p>We value Asset Roaster’s ability to offer creative solutions to meet our needs for
                                    automated data collection for various Inventory Management stages at all of our
                                    business divisions and product traceability. The team at Asset Roaster has solid
                                    domain expertise and was able to deliver reliable solutions within the confines of
                                    project schedules.</p>
                            </div>

                        </div>

                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- TESTIMONIAL SECTION END -->
    <!-- FOOTER SECTION START -->
    <footer class="footer" role="contentinfo">


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
    <SCRipt>
        var SwitchMenuMobile = document.getElementById("SwitchMenuMobile");
        var MenuMobile = document.getElementById("MenuMobile");

        var ClassMenuMobile = MenuMobile.className

        SwitchMenuMobile.addEventListener("click", function () {
            MenuMobile.className = "MenuMobile";
        })
        MenuMobile.addEventListener("click", function () {
            MenuMobile.className = "MenuMobile" + " CloseMenu";
            setTimeout(1000, function () {
                MenuMobile.className = "MenuMobile CloseMenu" + " None";
            })
        })
    </SCRipt>


    <script>

        $(".dark-toggle").on("click",
            function () {
                $("body").toggleClass("dark")
            });
    </script>
    <script>
        'use strict'
        var testim = document.getElementById("testim"),
            testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
            testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
            testimLeftArrow = document.getElementById("left-arrow"),
            testimRightArrow = document.getElementById("right-arrow"),
            testimSpeed = 4500,
            currentSlide = 0,
            currentActive = 0,
            testimTimer,
            touchStartPos,
            touchEndPos,
            touchPosDiff,
            ignoreTouch = 30;
        ;

        window.onload = function () {

            // Testim Script
            function playSlide(slide) {
                for (var k = 0; k < testimDots.length; k++) {
                    testimContent[k].classList.remove("active");
                    testimContent[k].classList.remove("inactive");
                    testimDots[k].classList.remove("active");
                }

                if (slide < 0) {
                    slide = currentSlide = testimContent.length - 1;
                }

                if (slide > testimContent.length - 1) {
                    slide = currentSlide = 0;
                }

                if (currentActive != currentSlide) {
                    testimContent[currentActive].classList.add("inactive");
                }
                testimContent[slide].classList.add("active");
                testimDots[slide].classList.add("active");

                currentActive = currentSlide;

                clearTimeout(testimTimer);
                testimTimer = setTimeout(function () {
                    playSlide(currentSlide += 1);
                }, testimSpeed)
            }

            testimLeftArrow.addEventListener("click", function () {
                playSlide(currentSlide -= 1);
            })

            testimRightArrow.addEventListener("click", function () {
                playSlide(currentSlide += 1);
            })

            for (var l = 0; l < testimDots.length; l++) {
                testimDots[l].addEventListener("click", function () {
                    playSlide(currentSlide = testimDots.indexOf(this));
                })
            }

            playSlide(currentSlide);

            // keyboard shortcuts
            document.addEventListener("keyup", function (e) {
                switch (e.keyCode) {
                    case 37:
                        testimLeftArrow.click();
                        break;

                    case 39:
                        testimRightArrow.click();
                        break;

                    case 39:
                        testimRightArrow.click();
                        break;

                    default:
                        break;
                }
            })

            testim.addEventListener("touchstart", function (e) {
                touchStartPos = e.changedTouches[0].clientX;
            })

            testim.addEventListener("touchend", function (e) {
                touchEndPos = e.changedTouches[0].clientX;

                touchPosDiff = touchStartPos - touchEndPos;

                console.log(touchPosDiff);
                console.log(touchStartPos);
                console.log(touchEndPos);


                if (touchPosDiff > 0 + ignoreTouch) {
                    testimLeftArrow.click();
                } else if (touchPosDiff < 0 - ignoreTouch) {
                    testimRightArrow.click();
                } else {
                    return;
                }

            })
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>