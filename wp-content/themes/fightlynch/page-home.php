<?php
/*
 Template Name: Home Page Template
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<div id="main" class="m-all cf" role="main">
						
							<?php if (have_posts()) : ?>

											 <!-- Dual content: Lynch Syndrome and Risks --><div style="width:100%;padding:0 7%;">
							<?php  
							$args = array('pages_per_post' => 2,'post_type' => 'page', 'order'=> 'ASC', 'orderby' => 'post_date' );
							$postslist = the_excerpt( $args );
							foreach ( $postslist as $post ) :
							 setup_postdata( $post ); ?> 
								<div style="float:left;width:270px;margin:0 43px;">
									<?php the_title(); ?>   
									<?php the_excerpt(); ?>
									<?php ?>
								</div>
							<?php
							endforeach; 
							wp_reset_postdata();
							?>
							</div>
											
														
								<hr>
								 <!-- What type of person are you -->
								 <!--  -->
								 <!-- end. -->

								 <!-- Activities/Events -->
								 <h3>CCARE Activities</h3>    
							<!-- do stuff to display 3 activities -->
							<div style="width:100%;padding:0 7%;">
							<?php  
							$args = array( 'posts_per_page' => 3,'post_type' => 'event', 'order'=> 'ASC', 'orderby' => 'post_date' );
							$postslist = get_posts( $args );
							foreach ( $postslist as $post ) :
							 setup_postdata( $post ); ?> 
								<div style="float:left;width:270px;margin:0 13px;">
									<?php if ( has_post_thumbnail() ) { ?> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(270,270) ); ?></a> <?php } ?>
									<div class="event_thumb_holder" style="height:18px;">&nbsp;</div>
									<?php the_title(); ?>   
									<div class="event_thumb_text_holder" style="height:10px;">&nbsp;</div>
									<?php the_excerpt(); ?>
									<?php ?>
								</div>
							<?php
							endforeach; 
							wp_reset_postdata();
							?>
							</div>
							<?php endif; ?>

						</div>

				</div>

			</div>


<?php get_footer(); ?>
