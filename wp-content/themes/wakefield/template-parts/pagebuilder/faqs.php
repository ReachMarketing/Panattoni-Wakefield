<?php

$section = $args['section'] ?? "";
$title = $section['title'] ? '<h2 class="title">' . $section['title'] . '</h2>' : "";
$text = $section['intro_text'] ?? "";
$faqs = $section['faqs'] ?? "";
$background = $section['background'] ?? "yes";
$flourish = $section['image_flourish'] ? '<img class="flourish" src="' . $section['image_flourish']['url'] . '" alt="FAQs image flourish" />' : "";

echo <<<HTML
    <section class="faqs background-{$background}">
        {$flourish}
        <div class="intro">
            {$title}
            {$text}
        </div>
        <div class="faqs-wrapper">
            <div class="faqs-content-area">
HTML;
foreach ($faqs as $faq) {
    get_template_part('template-parts/cards/faq', null, ['card' => $faq]);
}
echo <<<HTML
            </div>
        </div>
    </section>
HTML;
