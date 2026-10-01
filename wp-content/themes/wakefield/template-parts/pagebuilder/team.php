<?php

$section = $args['section'] ?? "";
$title = $section['title'] ? '<h2 class="title">' . $section['title'] . '</h2>' : "";
$flourish = $section['flourish'] ? '<img class="flourish" src="' . $section['flourish']['url'] . '" alt="Meet the team image flourish" />' : "";
$profiles = $section['team_members'] ?? "";

echo <<<HTML
    <section class="team">
    {$title}
    <div class="profiles-wrapper">
HTML;
if ($profiles) {
    foreach ($profiles as $profile) {
        get_template_part('template-parts/cards/team_profile', null, ['card' => $profile]);
    }
}
echo <<<HTML
    </div>
    </section>
HTML;
