<?php

$contact_title = get_field('contact_title', 'option', true) ? '<h2>' . get_field('contact_title', 'option', true) . '</h2>' : "";
$contact_text = get_field('contact_text', 'option', true) ?? "";
$contact_form_shortcode = get_field('contact_form_shortcode', 'option', true) ?? "";

$privacy_title = get_field('privacy_title', 'option', true) ? '<h2>' . get_field('privacy_title', 'option', true) . '</h2>' : "";
$privacy_content = get_field('privacy_content', 'option', true) ?? "";

$copyright = get_field('copyright_notice', 'option', true) ?? "";

echo <<<HTML

<section class="contact-us fadeIn" id="contact">
    <div class="inner-wrapper">
        <div class="contact-wrapper">
            {$contact_title}
            {$contact_text}
        </div>
        <div class="contact-form">
HTML;

echo do_shortcode($contact_form_shortcode);

echo <<<HTML
        </div>
    </div>
</section>
HTML;
