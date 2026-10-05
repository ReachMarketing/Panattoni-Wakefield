<?php

$downloads = $args['section']['downloads'] ?? "";

$count = count($downloads);

echo <<<HTML
    <section class="downloads-block">
        <div class="inner-wrapper">
            <div class="downloads-wrapper items{$count}">
HTML;
foreach ($downloads as $download) {
    echo <<<HTML
        <a class="download" href="{$download['file']['url']}" target="_blank">
            <img src="{$download['thumbnail']['sizes']['md']}" alt="Download {$download['title']}" />
            <div class="image-caption">
                <span>{$download['title']}</span>
                <span class="icon">Download <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M0 64C0 28.7 28.7 0 64 0L213.5 0c17 0 33.3 6.7 45.3 18.7L365.3 125.3c12 12 18.7 28.3 18.7 45.3L384 448c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 64zm208-5.5l0 93.5c0 13.3 10.7 24 24 24L325.5 176 208 58.5zM175 441c9.4 9.4 24.6 9.4 33.9 0l64-64c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-23 23 0-86.1c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 86.1-23-23c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64z"/></svg></span>
            </div>
        </a>
    HTML;
}
echo <<<HTML
            </div>
        </div>
    </section>
HTML;
