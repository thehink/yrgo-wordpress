<?php get_header(); ?>

<main role="main">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <article>
            <header>
                <h1><?php the_title(); ?></h1>
            </header>
            <pre>
                <?php print_r(WPSEO_Frontend::get_instance()->title(false)); ?>
                <?php print_r(get_option( 'wpseo_titles' )); ?>
            </pre>

            <?php the_content(); ?>
        </article>
    <?php endwhile; else: ?>
        <article>
            <p>Nothing to see.</p>
        </article>
    <?php endif; ?>
</main>

<?php get_footer();
