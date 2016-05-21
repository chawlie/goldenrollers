<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="blog-feed" role="main">
  <header class="subpage-hero">
    <div class="row">
      <div class="logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_bloginfo('template_directory');?>/assets/images/golden_rollers_logo.png" alt="Golden Rollers" title="Golden Rollers"></a>
      </div>
    </div>
  </header>

  <?php do_action( 'foundationpress_before_content' ); ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
      <header>
          <a href="<?php the_permalink();?>"><h1 class="blog-title entry-title"><?php the_title(); ?></h1></a>
      </header>
      <section class="blog-content page-content">
        <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
        <div class="entry-content">
            <a href="<?php the_permalink();?>" class="post-thumb"><?php the_post_thumbnail(); ?></a>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink();?>" class="button">Read More</a>
        </div>
        <footer>
            <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
            <p><?php the_tags(); ?></p>
        </footer>
        <?php do_action( 'foundationpress_page_before_comments' ); ?>
        <?php comments_template(); ?>
        <?php do_action( 'foundationpress_page_after_comments' ); ?>
      </section>
  </article>
  <?php endwhile;?>

  <?php do_action( 'foundationpress_after_content' ); ?>


</div>

<?php get_footer(); ?>
