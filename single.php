<?php get_header(); ?>

<?php if (have_posts()) : ?>

<section>
<?php while (have_posts()):?>

<?php the_post(); ?>
<?php get_template_part('content', get_post_format()); ?>

<?php endwhile; ?>
</section>

<?php comments_template(); ?>

<ul class="pager">
<?php previous_post_link("<li>%link</li>"); ?>
<?php next_post_link("&nbsp;<li>%link</li>"); ?>
</ul>

<?php endif; ?>

<?php get_footer(); ?>
