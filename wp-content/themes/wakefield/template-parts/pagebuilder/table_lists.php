<?php

$section = $args['section'] ?? "";
$title = $section['title'] ? '<h2 class="title">' . $section['title'] . '</h2>' : "";
$rows = $section['table_row'] ?? "";
$bg_color = $section['bg_color'] ?? 'none';

echo <<<HTML
    <section class="table-lists {$bg_color}">
        {$title}
        <div class="table-wrapper">
HTML;
if ($rows) {
    foreach ($rows as $row) {
        get_template_part('template-parts/cards/table_row', null, ['card' => $row]);
    }
}

echo <<<HTML
        </div>
    </section>
HTML;
