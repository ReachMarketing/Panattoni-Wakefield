<?php

$section = $args['section'] ?? "";
$contact_title = $section['contact_title'] ? '<h2 class="title">' . $section['contact_title'] . '</h2>' : "";
$form_title = $section['contact_form_title'] ? '<h2 class="title">' . $section['contact_form_title'] . '</h2>' : "";

$type = $section['contact_type'] ?? 'contact';

$form = $section['contact_form_shortcode'] ? '<div class="iframe-wrapper-right"><iframe src="' . $section['contact_form_shortcode'] . '"></iframe></div>' : "";
if ($type != "newsletter") {
    $form = $section['form_embed_code'] ?? "";
}




echo <<<HTML
    <section class="contact-us">
HTML;
if ($type == 'contact') {
    get_template_part('template-parts/cards/contact_details', null, ['title' => $contact_title]);
}
if ($type == 'book') {
    $book = $section['booking_iframe_url'] ?? "";
    get_template_part('template-parts/cards/book_a_call', null, ['title' => $contact_title, 'iframe' => $book]);
}
if ($type == 'newsletter') {
    $content = $section['newsletter_content'] ?? "";
    $link = $section['link'] ?? "";
    get_template_part('template-parts/cards/newsletters', null, ['title' => $contact_title, 'content' => $content, 'link' => $link]);
}

echo <<<HTML
        <div class="contact-form">
            {$form_title}
            {$form}
        </div>
    </section>
HTML;
