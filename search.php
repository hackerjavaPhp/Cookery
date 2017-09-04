<?php get_header(); ?>
<div id="page">
    <div id="page-bgtop">
      <div id="content">
           <p>Вы искали :<?PHP the_search_query();?></p>
         <?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?> 
        <div class="post">
          <h2 class="title"><a href="<?PHP the_permalink();?>"><?PHP the_title();?></a></h2>
          <p class="byline">Post</p>
          <div class="entry">
            <p><?PHP the_excerpt();?></p>
          </div>
          <div class="meta">
            <p class="links"><a href="#" class="comments">Comments (<?PHP comments_popup_link('0','1','%');?>)</a></p>
          </div>
        </div>

         <?PHP endwhile; ?>
          <?php the_posts_pagination(); ?>
          <?PHP else:?>
          <div>Поиск не дал результатов .Попробуйте еще раз !</div>
         <?php endif; ?> 
      </div>
      <!-- end div#content -->
        <?php get_sidebar(); ?>
        <?php get_footer(); ?>