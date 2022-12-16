<?php
    $general = get_field('general', 'options')['contact'];
?>
<section class="hero-contact">
    <div class="container">
        <section>
            <h1><?php echo $block['heading']; ?></h1>
            <a href="tel:<?php echo $general['telephone']; ?>"><?php echo $general['telephone']; ?></a>
            <!-- <a href="mailto:<?php echo $general['email']; ?>"><?php echo $general['email']; ?></a> -->
        </section>

        <?php
            get_partial('components/aside.social.php', [
                'block' => get_field('social', 'options')['links'],
            ]);
        ?>
    </div>
</section>