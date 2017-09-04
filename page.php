<?php get_header(); ?>
<div id="page">
    <div id="page-bgtop">
      <div id="content">
          <p>
              <ul class = "breadcrumb hr">
                  <?PHP the_breadcrumb(); ?>
              </ul>
          </p>
         <?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?> 
        <div class="post">
          <h2 class="title"><a href="<?PHP the_permalink();?>"><?PHP the_title();?></a></h2>
          <div class="entry">
            <p><?PHP the_content();?></p>
          </div>
          <div class="meta">
         
          </div>
        </div>
            <?PHP comments_template() ?> 
         <?PHP endwhile; ?>
         <?php endif; ?> 
      </div>
      <!-- end div#content -->
        <?php get_sidebar(); ?>
        <?php get_footer(); ?>