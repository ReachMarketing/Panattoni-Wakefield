<?php

$section = $args['section'] ?? "";
$title = $section['title'] ? '<h2>' . $section['title'] . '</h2>' : "";
$content = $section['content'] ?? "";
$link = $section['link'] ?? "";
$image = $section['image'] ? '<a href="' . $section['image']['sizes']['full'] . '" data-fancybox><img src="' . $section['image']['sizes']['md'] . '" alt="Image representing Panattoni Wakefield" /></a>' : "";
$caption = $section['caption'] ? '<div class="image-caption">' . $section['caption'] . '</div>' : "";
$image_style = $section['image_style'] ?? "aspect";
$layout = $section['layout'] ?? "standard";

echo <<<HTML
    <section class="text-and-image">
        <div class="inner-wrapper {$layout}">
            <div class="text-content fadeUp">
                {$title}
                {$content}
HTML;
if ($link) {
    get_template_part('template-parts/buttons/primary', null, ['link' => $link]);
}
echo <<<HTML
            </div>
            <div class="image {$image_style} fadeUp">
                {$image}
                {$caption}
            </div>
        </div>
    </section>
HTML;
