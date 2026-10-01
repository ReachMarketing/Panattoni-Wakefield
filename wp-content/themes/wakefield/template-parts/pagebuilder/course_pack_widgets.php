<?php

$section = $args['section'] ?? "";

$title = $section['title'] ? '<div class="title">' . $section['title'] . '</div>' : "";
$title_bg = $section['title_bg_color'] ?? "magenta";
$image = $section['title_background_image'] ? '<img src="' . $section['title_background_image']['url'] . '"  alt="course packs icon image" />' : "";
$image_position = $section['image_position'] ?? "top";
$show_text = $section['show_descriptive_text'] ?? "no";

$widgets = get_field('pack_widgets', 'option');

$template = get_bloginfo('template_url') . '/images';

$arrow = '<div class="arrow-wrapper"><div class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="17.228" height="11.869" viewBox="0 0 17.228 11.869"><g id="Arrow" transform="translate(-1554 -390.565)"><line id="Line_3" data-name="Line 3" x2="16" transform="translate(1554.5 396.5)" fill="none" stroke="#304354" stroke-linecap="round" stroke-width="1"/><path id="Path_255" data-name="Path 255" d="M3370.5,401l5.228-5.228-5.228-5.228" transform="translate(-1805 0.728)" fill="none" stroke="#304354" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/></g></svg></div></div>';

$widgetsHTML = "";
if ($widgets) {
    foreach ($widgets as $widget) {
        $widgetsHTML .= '<a href="' . $widget['link_to'] . '" class="widget button pack-widget ' . $widget['color_scheme'] . '">';
        $widgetsHTML .= '<div class="link-arrow-wrapper">' . $arrow . '</div>';
        $widgetsHTML .= '<div class="image-wrapper">';
        $widgetsHTML .= '<img src="' . $template . '/' . $widget['color_scheme'] . '-widget-icon.svg" alt="' . ucwords($widget['color_scheme']) . ' Icon" />';
        $widgetsHTML .= '</div>';
        $widgetsHTML .= '<div class="widget-inner">';
        $widgetsHTML .= '<div class="title">' . $widget['title'] . '</div>';
        $widgetsHTML .= '<div class="subtitle">' . $widget['sub_title'] . '</div>';
        if ($show_text == "yes") {
            $widgetsHTML .= '<div class="description">' . $widget['description'] . '</div>';
        }
        $widgetsHTML .= '</div>';
        $widgetsHTML .= '</a>';
    }
}


echo <<<HTML
    <section class="course-pack-widgets">
        <div class="intro-widget widget {$title_bg} ">
            <div class="bg-image {$image_position}">
                {$image}
            </div>
            <div class="title">
                {$title}
            </div>
        </div>
        {$widgetsHTML}
    </section>
HTML;
