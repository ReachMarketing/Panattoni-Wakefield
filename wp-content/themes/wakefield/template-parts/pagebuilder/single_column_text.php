<?php

$section = $args['section'] ?? "";
$title = $section['title'] ? '<h2>' . $section['title'] . '</h2>' : "";
$content = $section['content'] ?? "";
$link = $section['link'] ?? "";

echo <<<HTML
    <section class="single-column-text">
        <div class="inner-wrapper">
            <div class="text-content fadeUp">
                {$title}
                {$content}
HTML;
if ($link) {
    get_template_part('template-parts/buttons/primary', null, ['link' => $link]);
}
echo <<<HTML
            </div>
        </div>
    </section>
HTML;
