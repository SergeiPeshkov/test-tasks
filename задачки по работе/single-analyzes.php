<?php get_header(); 
if (have_posts()) : while (have_posts()) : the_post();
$price = get_post_meta(get_the_ID(), 'price', 1);
set_query_var('title', get_the_title() );
if ($price)
		{if(!stristr($price, '₽')){
				$price= $price .' &#8381;'; /*добавляем значек рубля, если цена больше нуля и значек рубля не в вставляли в админку*/				
		}
	}

/*set_query_var('subtitle',  $price?$price.'&#8381;':''  );*/

set_query_var('subtitle',  $price); 
get_template_part('parts/breadcrumbs'); ?>

      <section id="content" style="margin-bottom: 0px;">
         <div class="content-wrap mobile-usluga" style="padding-top: 15px;">
            <div class="container clearfix">
               <!-- Post Content
                     ============================================= -->
               <section>			
                  <div class="text_review">					  
					<?php the_content(); ?>					 
                   </div>
               </section>
						   
               <?php 
			  
             
            $args = array(
                'numberposts'	=> -1,
                'post_type'		=> 'klinika',
                'meta_query'	=> array(
                    'relation'		=> 'OR',
                    array(
                        'meta_key'		=> 'анализы_%_анализы',
                        'compare'	=> '=',
                        'value'		=> get_the_ID(),
                    ),
                )
            );
            $the_query = new WP_Query( $args );	
			
               ?>
               <section>
                  <div class="modal fade" id="clinic_modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     style="display: none;" aria-hidden="true">
                     <div class="modal-dialog">
                        <div class="modal-body">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <i class="icon-et-map-pin"></i>
                                 <h4 class="modal-title" id="myModalLabel">Контакты клиники</h4>
                                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                              </div>
                              <div class="modal-body">
                                 <p>
                                    <div class="feature-box fbox-plain">
                                       <div class="fbox-icon">
                                          <a href="#"><i class="icon-calendar21"></i></a>
                                       </div>
                                       <h3>График работы:</h3>
                                       <p class="modal__schedule-block">Пн. – вс.: 8:00 - 21:00</p>
                                    </div>
                                 </p>
                                 <hr>

                                 <p>
                                    <div class="feature-box fbox-plain">
                                       <div class="fbox-icon">
                                          <a href="#"><i class="icon-phone3"></i></a>
                                       </div>
                                       <h3>Номера телефонов:</h3>
                                       <p class="modal__phones-block"><a href="tel:+73652604900">+7 (3652) 604 900</a>
                                          <br> <a href="tel:+79787325000">+7 (978) 732 50
                                             00</a></p>
                                    </div>
                                 </p>
                                 <hr>

                                 <p>
                                    <div class="feature-box fbox-plain">
                                       <div class="fbox-icon">
                                          <a href="#"><i class="icon-location"></i></a>
                                       </div>
                                       <h3>Адрес:</h3>
                                       <p class="modal__address-block">г.Симферополь, ул.Семашко, 4-А</p>
                                    </div>
                                 </p>
                                 <section class="clinic-map" id="modalMap" style="height: 300px"></section>
                              </div>
                              <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php
                     $accordion_state = 'data-state="closed"';
                     if ($_GET['from']) {
                        foreach($the_query->posts as $key => $clinic) {
                           if ($clinic->ID == $_GET['from']) {
                              $accordion_state = 'data-active="'.($key + 1).'"';
                              break;
                           }
                        }
                     }
                  ?>
                  <?php if (count($the_query->posts) > 0): ?>
                  <h2 class="mt-4">Места предоставления услуги:</h2>
                  <?php endif; ?>
                  <div class="accordion accordion-bg clearfix accordion-usluga" <?=$accordion_state?>>
                    <?php 
                         $clinic_select =  '';
                        foreach ($the_query->posts as $clinic) { 
                           $email = get_field('email', $clinic) ? get_field('email', $clinic) : get_option('admin_email');
                           $clinic_select .= '<option value="'. $email .'">' . get_the_title($clinic) . '</option>';
                        ?>
                     <div class="acctitle">
                        <i class="acc-closed icon-ok-circle"></i>
                        <i class="acc-open icon-remove-circle"></i>
                        <?php echo get_the_title($clinic); ?>
                        <span class="usluga-address"><?php echo  the_field('адрес', $clinic->ID )  ?></span>
                     </div>
                     <div class="acc_content clearfix" style="display: none;">					 
					
					<?php  $analis_list =  get_field('анализы', $clinic->ID); // получаем поле с анализами и ценами для клиники из списка (клиника в которой есть анализы в принципе)
						
						
							foreach($analis_list as $key => $analis_item) // имеем две сущности. 1 - объект анализа (тип post), 2 - цену анализа (массив)
							{								
								// var_dump($analis_item["анализы"]->ID);
									if($analis_item["анализы"]->ID == get_the_ID()){		//если id объекта совпадает с текущим, выводим название и цену																							
									?> 						
									   <div class="blocks-uslugi">  					
										   <div class="row uslugi-row font-uslugi mb-3">
											  <div class="col-lg-9"><?php echo $analis_item["анализы"]->post_title; ?></div>
											  
											  <div class="col-lg-3"><i class="price-usluga-single"><?php echo format_price($analis_item["цена_анализа"]); ?></i></div>
										   </div>						                           
										</div>						
									<?php												
									}
																
							}
					?> 
					
                        <a onclick="showModalBy(this)" class="contacts-usluga"
                           data-placemark-coord="[<?php the_field('метка_широта', $clinic->ID) ?>, <?php the_field('метка_долгота', $clinic->ID) ?>]"
                           data-placemark-hint="<?php the_field('адрес', $clinic->ID ) ?>"
                           data-placemark-text="<?php the_field('адрес', $clinic->ID ) ?>"
                           data-schedule="<?php the_field('график_работы', $clinic->ID ) ?>"
                           data-address="<?php the_field('адрес', $clinic->ID ) ?>"
                           data-phones="<?php 
                           $phones = []; 
                           foreach (get_field('номера_телефонов', $clinic->ID) as $key => $value) $phones[] = $value['номер_телефона']; 
                           echo implode(', ', $phones);
                           ?>">
                           <i class="icon-map-marker1 mr-1"></i>Контакты клиники
                        </a>
                        <a href="<?= get_permalink($clinic->ID) ?>" class="more-link fright">Страница подразделения →</a>
                     </div>
                     <? } ?>
                  </div>
               </section>
			   		<div class="divider"><i class="icon-circle" style="font-size: 12px; "></i></div>
					<p style="font-weight: 400; ">* Предварительная запись не требуется. 
					Анализы можно сдать в порядке живой очереди. </p>
				   
			<!-- === убираем форму заявки === 
			    <div class="container">
					 <div class="fancy-title title-border title-center ">
								<h2>Оставить заявку</h2>
						</div>
				</div>
			   
               <div id="contact-form-overlay" class="contact-form-overlay-clinic clearfix mt-5 mb-5">

                  <div class="form-widget">

                     <div class="form-result"></div>

                     <!-- Contact Form
      ============================================= --><!--
                    <?php echo str_replace('{{clinics_list}}', $clinic_select, do_shortcode('[contact-form-7 id="36239" title="Запись на прием(Услуга)" html_class="nobottommargin"]')); ?>
                  </div>
               </div>
			   -->
			
			  
            </div>

         </div>

      </section>
      <?php endwhile; endif; ?>
<?php get_footer(); ?>