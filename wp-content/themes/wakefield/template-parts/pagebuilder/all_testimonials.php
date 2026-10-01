<?php

$args = array(
    'posts_per_page' => -1,
    'post_type' => 'testimonial',
    'post_status' => 'publish',
    'orderby' => 'menu_order',
    'order' => 'DESC',
    'fields' => 'ids'
);
$testimonials = get_posts($args);

echo <<<HTML
    <section class="all-testimonials">
        <div class="testimonials-wrapper">
HTML;
if ($testimonials) {
    foreach ($testimonials as $testimonial) {
        get_template_part('template-parts/cards/testimonial', null, ['card' => $testimonial]);
    }
}
echo <<<HTML
        </div>
    </section>
HTML;
