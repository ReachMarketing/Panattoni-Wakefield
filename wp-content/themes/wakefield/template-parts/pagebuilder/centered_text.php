<?php

$section = $args['section'] ?? "";
$title = $section['title'] ? '<h2 class="title">' . $section['title'] . '</h2>' : "";
$intro_text = $section['intro_text'] ? '<div class="intro-text">' . $section['intro_text'] . '</div>' : "";
$content = $section['content'] ?? "";
$link = $section['link'] ?? "";

$add_bg = $section['add_background'] ?? "yes";
$connect = $section['connect_to_next_component'] ?? "yes";

echo <<<HTML
    <section class="centered-text bg-{$add_bg} connect-{$connect}">
        {$title}
        {$intro_text}
        {$content}
HTML;
if ($link) {
    echo '<div class="link-wrapper">';
    get_template_part('template-parts/buttons/primary_link', null, ['link' => $link, 'color' => 'blue']);
    echo '</div>';
}
echo <<<HTML
    </section>
HTML;
