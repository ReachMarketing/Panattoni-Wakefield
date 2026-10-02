<?php
    get_template_part('template-parts/footer');
?>

<div class="bottom-footer">
    <div class="inner-wrapper">
        <p>&copy; <?php echo get_field('copyright_notice', 'option', true); ?> <?php echo date('Y'); ?></p>
    </div>
</div>

<?php
    wp_footer();
?>

        </div>
    </body>
</html>