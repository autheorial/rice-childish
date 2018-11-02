<?php get_header(); ?>

<?php $posts=query_posts($query_string .
'&posts_per_page=-1'); ?>

<?php if (have_posts()) :?> 
<h1>Search Results</h1>
<?php while (have_posts()) : the_post(); ?>

<h4><a href="<?php the_permalink() ?>" rel="bookmark" 
title="Permanent Link to <?php the_title_attribute(); ?>">
<?php the_title(); ?></a><br />
<?php ('l d F, Y - g:ia') ?><br /></h4>

<?php endwhile; ?>

<?php next_posts_link('&larr; Before') ?>&nbsp;&middot;&nbsp;
<?php previous_posts_link('After &rarr;') ?>


<?php else : ?>
<h1>Aw, hamburgers!</h1>
<p> There are no results :( Perhaps you misspelt something?
Or maybe you're dumb. It's okay, I am too ^^</p>


<?php endif; ?>

<?php get_footer(); ?>