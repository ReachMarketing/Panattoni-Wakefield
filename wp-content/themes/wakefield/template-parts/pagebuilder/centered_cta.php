<?php

$section = $args['section'] ?? "";
$top_title = $section['top_title'] ? '<div class="top-title">' . $section['top_title'] . '</div>' : "";
$title = $section['title'] ? '<h2 class="title">' . $section['title'] . '</h2>' : "";
$intro_text = $section['intro_text'] ? '<div class="intro-text">' . $section['intro_text'] . '</div>' : "";
$links = $section['links'] ?? "";
$pack = $section['pack_type'] ?? "none";
$position = $section['icon_position'] ?? "left";

$template = get_bloginfo('template_url');
$icon = "";
if ($pack != "none") {
    $icon = '<img class="icon ' . $position . '" src="' . $template . '/images/' . $pack . '-cta-icon.svg" alt="' . ucwords($pack) . ' pack icon" />';
}

echo <<<HTML
    <section class="centered-cta {$pack} {$position}">
        {$icon}
        <div class="content-area">
            {$top_title}
            {$title}
            {$intro_text}
HTML;
if ($links) {
    echo '<div class="links-wrapper">';
    foreach ($links as $link) {
        get_template_part('template-parts/buttons/secondary_link', null, ['link' => $link['link']]);
    }
    echo '</div>';
}
echo <<<HTML
        </div>
    </section>
HTML;
