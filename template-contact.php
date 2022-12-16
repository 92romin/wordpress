<?php 
    /* Template Name: Contact Us */ 
    get_header();
?>
    <?php 
        get_partial('partials/section.hero-contact.php', [
            'block' => get_field('hero'),
        ]);
    ?>

    <?php 
        get_partial('partials/section.contact.php', [
            'block' => get_field('contact'),
        ]);
    ?>
<?php get_footer(); ?>