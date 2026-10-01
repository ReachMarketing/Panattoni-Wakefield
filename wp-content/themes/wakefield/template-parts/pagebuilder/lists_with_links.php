<?php

$section = $args['section'] ?? "";

$title = $section['title'] ? '<h2 class="title">' . $section['title'] . '</h2>' : "";
$lists = $section['lists'] ?? "";

$template = get_bloginfo('template_url') . '/images';

echo <<<HTML
    <section class="lists-with-links">
        <div class="background-pattern">
            <img src="{$template}/list-pattern-purple.svg" alt="Background pattern">
        </div>
        <div class="inner-content">
            {$title}
HTML;

foreach ($lists as $list) {
    $list_title = $list['title'] ? '<h3 class="list-title">' . $list['title'] . '</h3>' : "";
    $list_items = $list['list_item'] ?? "";
    $link = $list['link'];

    $items = "";
    if ($list_items) {
        $items .= '<ul>';
        foreach ($list_items as $list_item) {
            $items .= '<li>' . $list_item['text'] . '</li>';
        }
        $items .= '</ul>';
    }

    echo <<<HTML
            <div class="list-wrapper">
                {$list_title}
                {$items}
    HTML;
    if ($link) {
        get_template_part('template-parts/buttons/primary_link', null, ['link' => $link, 'color' => 'purple']);
    }
    echo <<<HTML
            </div>
        
    HTML;
}

echo <<<HTML
        </div>
    </section>
HTML;
