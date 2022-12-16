<?php get_header(); ?>

    <?php $id = get_queried_object_id(); ?>

    <?php
        $block = get_field('hero', $id);
    ?>
    
    <?php
        get_partial('partials/section.hero-blog.php', [
            'block' => $block
        ]);
    ?>

    <?php
        get_partial('partials/section.posts.php');
    ?>

<?php get_footer(); ?>