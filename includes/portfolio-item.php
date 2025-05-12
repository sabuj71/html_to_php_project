<?php
$portfolios = [
    [
        "data_filter" => "filter-app",
        "portfolio_img" => "assets/img/masonry-portfolio/masonry-portfolio-1.jpg",
        "portfolio_title" => "App 1",
        "data_gallery" => "portfolio-gallery-app",
        "short_descriptions" => "Lorem ipsum, dolor sit",
        "portfolio_btn_label" => "More Details",
        "portfolio_btn_link" => "portfolio-details.php",
    ],
    [
        "data_filter" => "filter-product",
        "portfolio_img" => "assets/img/masonry-portfolio/masonry-portfolio-2.jpg",
        "portfolio_title" => "Product 1",
        "data_gallery" => "portfolio-gallery-product",
        "short_descriptions" => "Lorem ipsum, dolor sit",
        "portfolio_btn_label" => "More Details",
        "portfolio_btn_link" => "portfolio-details.php",
    ],
    [
        "data_filter" => "filter-branding",
        "portfolio_img" => "assets/img/masonry-portfolio/masonry-portfolio-3.jpg",
        "portfolio_title" => "Branding 1",
        "data_gallery" => "portfolio-gallery-branding",
        "short_descriptions" => "Lorem ipsum, dolor sit",
        "portfolio_btn_label" => "More Details",
        "portfolio_btn_link" => "portfolio-details.php",
    ],
    [
        "data_filter" => "filter-app",
        "portfolio_img" => "assets/img/masonry-portfolio/masonry-portfolio-4.jpg",
        "portfolio_title" => "App 2",
        "data_gallery" => "portfolio-gallery-app",
        "short_descriptions" => "Lorem ipsum, dolor sit",
        "portfolio_btn_label" => "More Details",
        "portfolio_btn_link" => "portfolio-details.php",
    ],
    [
        "data_filter" => "filter-product",
        "portfolio_img" => "assets/img/masonry-portfolio/masonry-portfolio-5.jpg",
        "portfolio_title" => "Product 2",
        "data_gallery" => "portfolio-gallery-product",
        "short_descriptions" => "Lorem ipsum, dolor sit",
        "portfolio_btn_label" => "More Details",
        "portfolio_btn_link" => "portfolio-details.php",
    ],
    [
        "data_filter" => "filter-branding",
        "portfolio_img" => "assets/img/masonry-portfolio/masonry-portfolio-6.jpg",
        "portfolio_title" => "Branding 2",
        "data_gallery" => "portfolio-gallery-branding",
        "short_descriptions" => "Lorem ipsum, dolor sit",
        "portfolio_btn_label" => "More Details",
        "portfolio_btn_link" => "portfolio-details.php",
    ],
    [
        "data_filter" => "filter-app",
        "portfolio_img" => "assets/img/masonry-portfolio/masonry-portfolio-7.jpg",
        "portfolio_title" => "App 3",
        "data_gallery" => "portfolio-gallery-app",
        "short_descriptions" => "Lorem ipsum, dolor sit",
        "portfolio_btn_label" => "More Details",
        "portfolio_btn_link" => "portfolio-details.php",
    ],
    [
        "data_filter" => "filter-product",
        "portfolio_img" => "assets/img/masonry-portfolio/masonry-portfolio-8.jpg",
        "portfolio_title" => "Product 3",
        "data_gallery" => "portfolio-gallery-product",
        "short_descriptions" => "Lorem ipsum, dolor sit",
        "portfolio_btn_label" => "More Details",
        "portfolio_btn_link" => "portfolio-details.php",
    ],
    [
        "data_filter" => "filter-branding",
        "portfolio_img" => "assets/img/masonry-portfolio/masonry-portfolio-9.jpg",
        "portfolio_title" => "Branding 3",
        "data_gallery" => "portfolio-gallery-branding",
        "short_descriptions" => "Lorem ipsum, dolor sit",
        "portfolio_btn_label" => "More Details",
        "portfolio_btn_link" => "portfolio-details.php",
    ],

];
?>

<?php foreach ($portfolios as $portfolio ): ?>
<div class="col-lg-4 col-md-6 portfolio-item isotope-item <?php echo $portfolio ['data_filter']; ?>">
    <img src="<?php echo $portfolio ['portfolio_img']; ?>" class="img-fluid" alt="">
    <div class="portfolio-info">
        <h4><?php echo $portfolio ['portfolio_title']; ?></h4>
        <p><?php echo $portfolio ['short_descriptions']; ?></p>
        <a href="<?php echo $portfolio ['portfolio_img']; ?>" title="<?php echo $portfolio ['portfolio_title']; ?>"
            data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        <a href="<?php echo $portfolio ['portfolio_btn_link']; ?>"
            title="<?php echo $portfolio ['portfolio_btn_label']; ?>" class="details-link"><i
                class="bi bi-link-45deg"></i></a>
    </div>
</div>

<?php endforeach; ?>