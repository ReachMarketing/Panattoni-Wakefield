<?php

$section = $args['section'] ?? "";
$title = $section['title'] ? '<h2 class="title">' . $section['title'] . '</h2>' : "";
$logos = get_field('client_logos', 'options', true) ?? "";
$theme = get_bloginfo('template_url');
$arrow = '<div class="arrow-wrapper"><div class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="17.228" height="11.869" viewBox="0 0 17.228 11.869"><g id="Arrow" transform="translate(-1554 -390.565)"><line id="Line_3" data-name="Line 3" x2="16" transform="translate(1554.5 396.5)" fill="none" stroke="#304354" stroke-linecap="round" stroke-width="1"/><path id="Path_255" data-name="Path 255" d="M3370.5,401l5.228-5.228-5.228-5.228" transform="translate(-1805 0.728)" fill="none" stroke="#304354" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></g></svg></div></div>';

$logosHTML = "";
if ($logos) {
    foreach ($logos as $logo) {
        $logosHTML .= '<li class="logo splide__slide">';
        $logosHTML .= '<img src="' . $logo['url'] . '" alt="Client logo" />';
        $logosHTML .= '</li>';
    }
}

echo <<<HTML
    <section class="logo-carousel">
        {$title}
        <div class="splide carousel" aria-label="Carousel">
            <div class="splide-prev button" role="button" aria-label="Previous logo">{$arrow}</div>
            <div class="splide-next button" role="button" aria-label="Next logo">{$arrow}</div>
            <div class="splide__track ">
                <ul class="splide__list">
                    {$logosHTML}
                </ul>
            </div>
        </div>
    </section>
HTML;
