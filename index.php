<!DOCTYPE html>
<html lang="en">

<head>

    <?php include_once "./includes/head.php" ?>

</head>

<body class="index-page">

    <?php include_once "./includes/header.php"?>

    <?php

        $sliders=[
            [
                "title" => "Welcome to Sailor",
                "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
                "button_text" => "Get Started ",
                "bg_image_url" => "assets/img/hero-carousel/hero-carousel-1.jpg",
            ],
            [
                "title" => "At vero eos et accusamus",
                "description" => "Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.",
                "button_text" => "Get Started ",
                "bg_image_url" => "assets/img/hero-carousel/hero-carousel-2.jpg",
            ],
            [
                "title" => "Temporibus autem quibusdam",
                "description" => "Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.",
                "button_text" => "Get Started ",
                "bg_image_url" => "assets/img/hero-carousel/hero-carousel-3.jpg",
            ]
            ];

            $clients=[
                ["client_img" => "assets/img/clients/client-1.png"],
                ["client_img" => "assets/img/clients/client-2.png"],
                ["client_img" => "assets/img/clients/client-3.png"],
                ["client_img" => "assets/img/clients/client-4.png"],
                ["client_img" => "assets/img/clients/client-5.png"],
                ["client_img" => "assets/img/clients/client-6.png"],
            ];
    ?>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel"
                data-bs-interval="5000">
                <?php foreach ($sliders as $index => $slide ): ?>
                <div class="carousel-item <?php echo $index == 0 ? 'active' : ''  ?> ">
                    <img src="<?php echo $slide['bg_image_url'] ?>" alt="">
                    <div class="carousel-container">
                        <h2><?php echo $slide['title'] ?><br></h2>
                        <p><?php echo $slide['description'] ?></p>
                        <a href="#featured-services" class="btn-get-started"><?php echo $slide['button_text'] ?></a>
                    </div>
                </div><!-- End Carousel Item -->
                <?php endforeach ?>
                <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

                <ol class="carousel-indicators"></ol>

            </div>

        </section>

        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About</h2>
                <p>About Us<br></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea
                                    commodo
                                    consequat.</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>Duis aute irure dolor in reprehenderit in
                                    voluptate velit.</span></li>
                            <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea
                                    commodo</span></li>
                        </ul>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint
                            occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                            laborum. </p>
                        <a href="about.html" class="read-more"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>

                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Clients Section -->
        <section id="clients" class="clients section light-background">

            <div class="container" data-aos="fade-up">

                <div class="row gy-4">
                    <?php foreach ($clients as $client): ?>
                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="<?php echo $client ['client_img'] ?>" class="img-fluid" alt="Client Logo">
                    </div><!-- End Client Item -->
                    <?php endforeach ?>
                </div>

            </div>

        </section><!-- /Clients Section -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <div class="container">

                <div class="row gy-4">
                    <?php include_once './includes/service-item.php'?>
                </div>

            </div>

        </section><!-- /Services Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Portfolio</h2>
                <p>Necessitatibus eius consequatur</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-product">Card</li>
                        <li data-filter=".filter-branding">Web</li>
                    </ul><!-- End Portfolio Filters -->

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <?php include_once './includes/portfolio-item.php'?>

                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- /Portfolio Section -->

    </main>

    <?php include_once "./includes/footer.php" ?>
</body>

</html>