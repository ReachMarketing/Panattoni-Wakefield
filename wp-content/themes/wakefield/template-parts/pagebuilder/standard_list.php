<?php

$section = $args['section'] ?? "";
$title = $section['title'] ? '<h2 class="title">' . $section['title'] . '</h2>' : "";
$intro_text = $section['intro_text'] ? '<div class="intro-text">' . $section['intro_text'] . '</div>' : "";
$scheme = $section['theme'] ?? "dark";
$align = $section['alignment'] ?? "left";
$elements = $section['list_elements'] ?? "";
$template = get_bloginfo('template_url');
$pattern = "";
if ($scheme == "dark") {
    $pattern = '<div class="pattern"><img src="' . $template . '/images/standard-list-' . $scheme . '.svg" alt="Background pattern" /></div>';
}

echo <<<HTML
    <section class="standard-list {$scheme} {$align}">
        {$pattern}
        <div class="text-wrapper">
            {$title}
            {$intro_text}
        </div>
        <div class="list-wrapper">
HTML;
if ($elements) {
    echo '<ul>';
    foreach ($elements as $element) {
        echo '<li>' . $element['text'] . '</li>';
    }
    echo '</ul>';
}
echo <<<HTML
        </div>
    </section>
HTML;
