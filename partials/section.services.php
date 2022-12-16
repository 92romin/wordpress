
<section class="services">
    <?php
        if(isset($block['heading'])): 
            get_partial('components/div.separator.php', [
                'block' => $block
            ]);
        endif;
    ?>
    <div class="container">
        <?php foreach($block['lines'] as $single): ?>
            <h2><?php echo $single['line']; ?></h2>
        <?php endforeach; ?>
    </div>
</section>