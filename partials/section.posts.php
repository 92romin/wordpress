<section class="posts">
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

                <?php
                    get_partial('components/article.post.php');
                ?>

            <?php endwhile; ?>
        <?php endif; ?>

        <aside class="pagination">
            <?php the_posts_pagination(); ?>
        </aside>
    </div>
</section>