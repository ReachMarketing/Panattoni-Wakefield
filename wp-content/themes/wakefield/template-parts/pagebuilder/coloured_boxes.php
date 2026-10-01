<?php

$section = $args['section'] ?? "";
$title = $section['title'] ? '<h2 class="title">' . $section['title'] . '</h2>' : "";
$boxes = $section['boxes'] ?? "";
$background = $section['add_background'] ?? "no";

echo <<<HTML
    <section class="coloured-boxes background-{$background}">
        {$title}
        <div class="boxes-wrapper">
HTML;
if ($boxes) {
    foreach ($boxes as $box) {
        get_template_part('template-parts/cards/coloured_box', null, ['card' => $box]);
    }
}
echo <<<HTML
        </div>
    </section>
HTML;
