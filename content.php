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
    <footer class="entry-footer">
        <?php the_tags('<div class="wp_tags"><span class="label label-success">', '</span> <span class="label label-success">', '</span></div>'); ?>
        <?php if (function_exists("wp_social_bookmarking_light_output_e")){ wp_social_bookmarking_light_output_e(null, get_permalink(), the_title("", "", false)); } ?>
    </footer>
</article>
