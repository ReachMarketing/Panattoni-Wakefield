<?php

$section = $args['section'] ?? "";
$content = $section['content'] ?? "";
$link = $section['link'] ?? "";
$bg_color = $section['bg_color'] ?? "red";
$width = $section['content_width'] ?? "medium";

$quotes_icon = '<div class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 77 77"><defs><style>.cls-1{fill:#fff;}.cls-2{isolation:isolate;}.cls-3{fill:#000;}</style></defs><g><circle class="cls-1" cx="38.5" cy="38.5" r="38.5"></circle><g class="cls-2"><g class="cls-2"><path class="cls-3" d="M30.12,26.66v1.9c-2.72,1.42-4.67,2.91-5.84,4.45-1.18,1.55-1.76,3.23-1.76,5.06,0,1.08.15,1.83.46,2.23.28.43.62.65,1.02.65s.94-.12,1.62-.35c.68-.23,1.3-.35,1.86-.35,1.27,0,2.37.47,3.32,1.42.94.94,1.41,2.09,1.41,3.46,0,1.48-.57,2.76-1.72,3.83-1.14,1.07-2.57,1.6-4.27,1.6-2.07,0-3.94-.9-5.61-2.69-1.67-1.79-2.5-4-2.5-6.63,0-3.09,1.03-5.98,3.08-8.65s5.03-4.65,8.93-5.91ZM52.25,26.8v1.76c-3.12,1.79-5.18,3.4-6.17,4.82-.99,1.42-1.48,3.09-1.48,5.01,0,.87.17,1.52.51,1.95.34.43.7.65,1.07.65.34,0,.85-.12,1.53-.37.68-.25,1.36-.37,2.04-.37,1.27,0,2.37.46,3.32,1.37.94.91,1.41,2.03,1.41,3.36,0,1.52-.6,2.83-1.79,3.94-1.19,1.11-2.65,1.67-4.38,1.67-2.04,0-3.88-.88-5.52-2.64s-2.46-3.96-2.46-6.59c0-3.25,1.04-6.21,3.11-8.88,2.07-2.67,5.01-4.57,8.81-5.68Z"></path></g></g></g></svg></div>';

$template = get_bloginfo('template_url');
$pattern = '<img class="pattern" src="' . $template . '/images/pattern-4-' . $bg_color . '.svg" alt="Background pattern" />';

echo <<<HTML
    <section class="single-testimonial {$bg_color}">
        {$pattern}
        <div class="content">
            {$quotes_icon}
            <div class="text-wrapper">
                <div class="testimonial {$width}">
                    {$content}
                </div>
HTML;

if ($link) {
    echo '<div class="outer-link-wrapper">';
    get_template_part('template-parts/buttons/secondary_link', null, ['link' => $link]);
    echo '</div>';
}

echo <<<HTML
            </div>
        </div>
    </section>
HTML;
