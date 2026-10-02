<?php

$image_rows = $args['section']['image_row'] ?? "";
$gallery_id = "gallery-" . rand();

echo <<<HTML
    <section class="image-block">
        <div class="inner-wrapper">
HTML;

foreach ($image_rows as $row) {
    echo '<div class="images-wrapper">';
    foreach ($row as $images) {
        foreach ($images as $image) {
            $caption = $image['caption'] ? '<div class="image-caption">' . $image['caption'] . '</div>' : "";
            $alt = $image['image']['alt'] ?? "";
            if (empty($alt)) {
                $alt = $image['caption'];
            }
            if (empty($alt)) {
                $alt = "Image representing Panattoni Wakefield";
            }
            echo <<<HTML
                <a href="{$image['image']['sizes']['full']}" data-fancybox="{$gallery_id}">
                     <picture>
                        <source media="(min-width:1280px) and (max-width:1440px)" srcset="{$image['image']['sizes']['xl']}">
                        <source media="(min-width:1024px) and (max-width:1280px)" srcset="{$image['image']['sizes']['lg']}">
                        <source media="(min-width:768px) and (max-width:1024px)" srcset="{$image['image']['sizes']['md']}">
                        <source media="(min-width:500px) and (max-width:768px)" srcset="{$image['image']['sizes']['sm']}">
                        <source media="(max-width:500px)" srcset="{$image['image']['sizes']['xs']}">
                        <img src="{$image['image']['sizes']['full']}" alt="{$alt}" fetchpriority="high" />
                    </picture>
                    {$caption}
                </a>
            HTML;
        }
    }

    echo '</div>';
}

echo <<<HTML
        </div>
    </section>
HTML;
