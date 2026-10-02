<?php

$columns = $args['section']['columns'] ?? "";
$left = $columns['left_column'] ?? "";
$right = $columns['right_column'] ?? "";

$left_title = $left['title'] ? '<h2>' . $left['title'] . '</h2>' : "";
$left_content = $left['content'] ?? "";
$left_link = $left['link'] ?? "";

$right_title = $right['title'] ? '<h2>' . $right['title'] . '</h2>' : "";
$right_content = $right['content'] ?? "";
$right_link = $right['link'] ?? "";

echo <<<HTML
    <section class="two-column-text">
        <div class="inner-wrapper">
            <div class="left-column text-content fadeUp">
                {$left_title}
                {$left_content}
HTML;
if ($left_link) {
    get_template_part('template-parts/buttons/primary', null, ['link' => $left_link]);
}
echo <<<HTML
            </div>
            <div class="right-column text-content fadeUp">
                {$right_title}
                {$right_content}
HTML;
if ($right_link) {
    get_template_part('template-parts/buttons/primary', null, ['link' => $right_link]);
}
echo <<<HTML
            </div>
        </div>
    </section>
HTML;
