<?php

$section = $args['section'] ?? "";
$newsletters = $section['newsletters'] ?? "";

echo <<<HTML
    <section class="newsletter-archive">
        <div class="news-archive-card-wrapper newsletters-wrappper">
HTML;
if ($newsletters) {
    foreach ($newsletters as $newsletter) {
        get_template_part('template-parts/cards/newsletter-card', null, ['card' => $newsletter]);
    }
} else {
    echo '<div class="title">No newsletters found</div>';
}
echo <<<HTML
        </div>
    </section>
HTML;
