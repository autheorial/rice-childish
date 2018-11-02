<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<a href="<?php the_permalink() ?>" rel="bookmark"><h1><?php the_title(); ?></h1></a>
<h3><?php the_time('d F Y') ?> &middot; <class="postmetadata"><?php the_category(', ') ?> &middot; 
<?php the_tags( 'Tags: ', ', ', ''); ?> &middot; 
<?php comments_popup_link('Leave a comment / No comments', 'Leave a comment / 1 comment', 'Leave a comment / % comments');?> </h3>
<?php the_content(); ?>




<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

<?php comments_template(); ?>

<?php endwhile; ?>

<?php next_posts_link('&larr;') ?>
<?php previous_posts_link(' &rarr;') ?>

<?php else : ?>
<h1>Boo 8(</h1>
<p> I apologize for the inconvenience, but apparently
the page you are looking for does not exist! Why not have 
a glass of milk while you're here?</p>
<?php get_search_form(); ?>


<?php endif; ?>

<?php get_footer(); ?>