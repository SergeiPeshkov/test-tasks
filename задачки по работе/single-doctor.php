<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); 

		$exp = get_post_meta($post->ID, 'expi', 1);
		$rang = get_post_meta($post->ID, 'rang', 1);
		$level = get_post_meta($post->ID, 'leve', 1);
		$link = get_post_meta($post->ID, 'link', 1);
		$acco = get_post_meta($post->ID, 'acco', 1);

set_query_var('title', get_the_title() );
set_query_var('subtitle',  $rang );
get_template_part('parts/breadcrumbs');
//  'compare'	=> 'REGEXP',

 ?>
         <section id="content" style="margin-bottom: 0px;">
            <div class="content-wrap" style="padding-top: 15px;">
               <div class="container clearfix">
                  <!-- Post Content
                     ============================================= -->
                  <div class="postcontent nobottommargin notopmargin clearfix mt-5">
                     <section>
                        <div class="col_two_fifth">
                           <div class="mobile-adaptation-doctor">
                           <img src="<?php echo get_the_post_thumbnail_url($post, 'large') ?>" alt="<?php the_title(); ?>" class="img-fluid rounded">
                           <?php 
						   
                           $args = array(
                              'numberposts'	=> -1,
                              'post_type'		=> 'klinika',
                              'meta_query'	=> array(
                              'relation'		=> 'OR',
                                  array(
                                      'key'		=> 'сотрудники',									 
                                      'compare'	=> 'LIKE',
                                      'value'	=>  ':"'. get_the_ID().'"',
                                  ),
                              )
                          );
                          $the_query = new WP_Query( $args );
                        //   var_dump(count($the_query->posts));
                          foreach ($the_query->posts as $key => $value) { ?>      
                           <div class="feature-box fbox-small fbox-plain">
                              <div class="fbox-icon">
                                 <a href="<?php the_permalink($value); ?>"><i class="icon-location"></i></a>
                              </div>
								<a href="<?php the_permalink($value); ?>">
										 <h3 class="hoverdoctor" style="margin-bottom: 0">
											<?php echo get_the_title($value); ?>
										 </h3>
										 
										<span>
											<?php /*the_field('адрес', $value->ID)  */								 
												$adress = get_field('адрес', $value->ID);
												$town =  explode(",", $adress);
												$street= strstr($adress, 'ул');	
												if(stripos($town[1], 'Мирное')) {$town[1] = ", ".$town[1].","; } else{ unset($town[1]); $town[0]= $town[0].","; }		
												echo $town[0].$town[1]."<br>".$street;
											?>									
										</span>							 
								</a>
								<br>									
								 <?php 																 
								 $worklist =  get_field('график_работы');
								// var_dump($timework);
								 if( have_rows('график_работы') ):
														
									while(have_rows('график_работы') ): the_row();
									 $timework= get_sub_field('Время_работы');											
											if ($value->ID ==  $timework["клиника"]) {	?>
													<span class="btn-link" style="cursor: pointer;" data-toggle="collapse" href="#a<?php echo $value->ID ?>" role="button" aria-expanded="false" aria-controls="#a<?php echo $value->ID ?>">
															График работы
													</span>	
											
												 <?php  foreach ($timework as $key => $grafic){
													if($key == "клиника") continue;									  
													if($grafic){?>
													<ul type='none'>												
														<div class="collapse" id="a<?php echo $timework["клиника"] ?>">
														  <div>
															<li style="border-bottom: 1px solid #e2e2e2; width: 50%;">
																<?php echo $key .': '.$grafic ?>
															</li>
														  </div>
														</div>
													</ul>													
													 <?php 	}
													} 											
											}																	
									endwhile;
											
								endif;		
																		 
								  ?> 							  							
                             
                           </div>
                           <?php } // end foreach ?>								  
                        </div>
                     </div>
                        <div class="col_three_fifth col_last">
                           <h3>
                              <p class="opit-raboti">Опыт работы: <?=$exp?></p>
                           </h3>
                           <?php the_content(); ?>
                        </div>
                     </section>
                     <div class="divider"><i class="icon-circle"></i></div>
                     <div class="clear"></div>
                 
                     <!-- .postcontent end -->
                  </div>
                  <!-- Sidebar
                     ============================================= -->
                  <?php 
                  set_query_var('classes', 'sidebar nobottommargin notopmargin col_last clearfix mt-5' );
                  get_template_part('parts/blog','latest-single-author'); 
				  
				  ?>
                  <!-- .sidebar end -->
               </div>
            </div>
         </section>
<?php endwhile; ?>
<?php get_footer(); ?>