<?php get_header(); ?>

<?php if (have_posts()) : ?>

<section>
<?php while (have_posts()):?>

<?php the_post(); ?>
<?php get_template_part('content', get_post_format()); ?>

<?php endwhile; ?>
</section>

<ul class="pager">
<li><?php posts_nav_link('</li><li>','前へ','次へ'); ?></li>
</ul>

<?php endif; ?>

<?php get_footer(); ?>
