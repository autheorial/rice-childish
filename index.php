<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<a href="<?php the_permalink() ?>" rel="bookmark"><h1><?php the_title(); ?></h1></a>
<h3><?php the_time('d F Y') ?> &middot; <class="postmetadata"><?php the_category(', ') ?> &middot;
<?php comments_popup_link('Leave a comment / No comments', 'Leave a comment / 1 comment', 'Leave a comment / % comments');?> </h3>

<?php the_content(); ?>




<?php endwhile; ?>

<div style="font-family:courier new; text-align:right;"><?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?></div></p>

<?php next_posts_link('&larr; Before') ?>&nbsp;&middot;&nbsp;
<?php previous_posts_link('After &rarr;') ?>

<?php else : ?>
<h1>Aw, hamburgers!</h1>
<p> I apologize for the inconvenience, but something's
gone wrong! Ohnoes D: You should probably go back. I mean,
what else are you going to do here besides drink milk?</p>


<?php endif; ?>

<?php get_footer(); ?>