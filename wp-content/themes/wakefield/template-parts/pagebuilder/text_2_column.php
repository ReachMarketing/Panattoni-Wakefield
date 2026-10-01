<?php

$section = $args['section'] ?? "";
$top_title = $section['top_title'] ? '<div class="top-title">' . $section['top_title'] . '</div>' : "";
$title = $section['title'] ? '<h2>' . $section['title'] . '</h2>' : "";
$columns = $section['columns'] ?? "";
if ($columns) {
    $left = $columns['left_column'] ?? "";
    $right = $columns['right_column'] ?? "";
}

$theme = $section['block_theme'] ?? "none";
$background = $section['add_background'] ?? "no-background";
$icon_position = $section['icon_position'] ?? "left";
$align_content = $section['align_column_content'] ?? "no-align-content";

$images = get_bloginfo('template_url') . "/images";

$icon = "";
if ($theme != "none") {
    $icon .= '<div class="icon">';
    $icon .= '<img src="' . $images . '/' . $theme . '-icon.svg" alt="' . $theme . ' icon" />';
    $icon .= '</div>';
}

echo <<<HTML
    <section class="text-2-column {$theme} {$background} icon-{$icon_position}">
        {$icon}
HTML;

if ($align_content == "align-content") {
    echo <<<HTML
        {$top_title}
        {$title}
        <div class="left-column">
            {$left}
    HTML;
} else {
    echo <<<HTML
        <div class="left-column">
            {$top_title}
            {$title}
            {$left}
    HTML;
}

echo <<<HTML
        </div>
        <div class="right-column">
            {$right}
        </div>
    </section>
HTML;
