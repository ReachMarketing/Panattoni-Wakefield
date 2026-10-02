<?php

$section = $args['section'] ?? "";
$image = "";
if ($section['image']) {
    $image = '<picture>';
    $image .= '<source media="(min-width:1280px) and (max-width:1440px)" srcset="' . $section['image']['sizes']['hero-xl'] . '">';
    $image .= '<source media="(min-width:1024px) and (max-width:1280px)" srcset="' . $section['image']['sizes']['hero-lg'] . '">';
    $image .= '<source media="(min-width:768px) and (max-width:1024px)" srcset="' . $section['image']['sizes']['hero-md'] . '">';
    $image .= '<source media="(min-width:500px) and (max-width:768px)" srcset="' . $section['image']['sizes']['hero-sm'] . '">';
    $image .= '<source media="(max-width:500px)" srcset="' . $section['image']['sizes']['hero-xs'] . '">';
    $image .= '<img src="' . $section['image']['sizes']['hero-full'] . '" alt="' . $section['image']['alt'] . '" fetchpriority="high" />';
    $image .= '</picture>';
}
$caption1 = $section['caption_1'] ? '<div class="caption1">' . $section['caption_1'] . '</div>' : "";
$caption2 = $section['caption_2'] ? '<div class="caption2">' . $section['caption_2'] . '</div>' : "";
$caption = "";
if ($caption1 || $caption2) {
    $caption = '<div class="hero-caption"><div class="inner-wrapper">' . $caption1 . $caption2 . '</div></div>';
}

echo <<<HTML

<section class="hero fadeIn">
    {$image}
    {$caption}
</section>

HTML;
