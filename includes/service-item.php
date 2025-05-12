<?php
$services = [
    [
        "icon" => "bi bi-briefcase",
        "title" => "Lorem Ipsum",
        "title_link" => "#",
        "descriptions" => "Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident",
        "data-aos-delay" => 100,
    ],
    [
        "icon" => "bi bi-card-checklist",
        "title" => "Dolor Sitema",
        "title_link" => "#",
        "descriptions" => "Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata",
        "data-aos-delay" => 200,
    ],
    [
        "icon" => "bi bi-bar-chart",
        "title" => "Sed ut perspiciati",
        "title_link" => "#",
        "descriptions" => "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur",
        "data-aos-delay" => 300,
    ],
    [
        "icon" => "bi bi-binoculars",
        "title" => "Magni Dolores",
        "title_link" => "#",
        "descriptions" => "Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum",
        "data-aos-delay" => 400,
    ],
    [
        "icon" => "bi bi-brightness-high",
        "title" => "Nemo Enim",
        "title_link" => "#",
        "descriptions" => "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque",
        "data-aos-delay" => 500,
    ],
    [
        "icon" => "bi bi-calendar4-week",
        "title" => "Eiusmod Tempor",
        "title_link" => "#",
        "descriptions" => "Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi",
        "data-aos-delay" => 600,
    ],
];
?>

<?php foreach ($services as $service): ?>
<div class="col-md-6" data-aos="fade-up" data-aos-delay="<?php echo $service ['data-aos-delay']; ?>">
    <div class="service-item d-flex position-relative h-100">
        <i class="<?php echo $service['icon']; ?> icon flex-shrink-0"></i>
        <div>
            <h4 class="title">
                <a href="<?php echo $service['title_link']; ?>" class="stretched-link">
                    <?php echo $service['title']; ?>
                </a>
            </h4>
            <p class="description"><?php echo $service['descriptions']; ?></p>
        </div>
    </div>
</div>

<?php endforeach; ?>