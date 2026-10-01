<?php

$section = $args['section'] ?? "";
$title = $section['title'] ? '<h2 class="title">' . $section['title'] . '</h2>' : "";
$number = $section['number_to_show'] ?? 3;

$options = array(
    'posts_per_page' => $number,
    'post_type' => 'testimonial',
    'post_status' => 'publish',
    'orderby' => 'menu_order',
    'order' => 'DESC',
    'fields' => 'ids'
);
$testimonials = get_posts($options);

echo <<<HTML
    <section class="latest-testimonials">
        {$title}
        <div class="testimonials-wrapper">
HTML;

foreach ($testimonials as $testimonial) {
    get_template_part('template-parts/cards/testimonial', null, ['card' => $testimonial, 'type' => 'short']);
}

echo <<<HTML
        </div>
    </section>
HTML;
