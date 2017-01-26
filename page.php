<?php get_header(); ?>

<?php if (have_posts()) : ?>

<section>
<?php while (have_posts()):?>

<?php the_post(); ?>

<!-- start -->
<article>
    <header class="entry-header">
        <hgroup>
            <div class="date"><a href="<?php get_day_link(the_time('Y'), the_time('n'), the_time('j')); ?>"><?php the_time('Y-m-d'); ?></a></div>
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </hgroup>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
</article>
<!-- end -->

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
