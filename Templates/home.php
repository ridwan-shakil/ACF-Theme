<?php
// ============================
// Template Name: Home 
// ============================
?>

<?php get_header() ?>
<!-- Hero section  -->
<div class="hero-wrap">
   <div class="home-slider owl-carousel">
      <?php if (have_rows('slider', 'options')) : ?>
         <?php while (have_rows('slider', 'options')) : the_row(); ?>
            <div class="slider-item" style="background-image:url(<?php the_sub_field('image'); ?>);">
               <div class="overlay"></div>
               <div class="container">
                  <div class="row no-gutters slider-text align-items-center justify-content-center">
                     <div class="col-md-8 ftco-animate">
                        <div class="text w-100 text-center">
                           <h2><?php the_sub_field('subtitle'); ?></h2>
                           <h1 class="mb-4"><?php the_sub_field('title'); ?></h1>
                           <p><a href="<?php the_sub_field('button_link'); ?>" class="btn btn-white"><?php the_sub_field('button_text'); ?></a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         <?php endwhile; ?>
      <?php endif; ?>
   </div>
</div>

<!-- Featurs section  -->
<?php if ($featurs = get_field('featurs', 'options')) : ?>
   <section class="ftco-section ftco-no-pt bg-light">
      <div class="container">
         <div class="row d-flex no-gutters">
            <div class="col-md-6 d-flex">
               <?php if ($featurs['image']) : ?>

                  <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(<?php echo $featurs['image']['url']; ?>">
                  <?php endif; ?>

                  </div>
            </div>
            <div class="col-md-6 pl-md-5 py-md-5">
               <div class="heading-section pl-md-4 pt-md-5">
                  <span class="subheading"><?php echo $featurs['subtitle'] ?></span>
                  <h2 class="mb-4"><?php echo $featurs['title'] ?></h2>
               </div>
               <?php $featur = $featurs['featur_list']; ?>

               <?php foreach ($featur as $value) { ?>
                  <div class="services-2 w-100 d-flex">
                     <div class="icon d-flex align-items-center justify-content-center"><?php echo $value['feature_icon'] ?></span></div>
                     <div class="text pl-4">
                        <h4><?php echo $value['feature_title'] ?></h4>
                        <p><?php echo $value['feature_description'] ?></p>
                     </div>
                  </div>
               <?php } ?>

            </div>
         </div>
      </div>
   </section>
<?php endif; ?>

<!-- Services section  -->
<?php if (get_field('show_services_section', 'options')) : ?>
   <section class="ftco-section bg-light ftco-no-pt">
      <div class="container">
         <div class="row">
            <?php if (have_rows('services', 'options')) : ?>

               <?php while (have_rows('services', 'options')) : the_row(); ?>

                  <div class="col-md-6 col-lg-3 d-flex services align-self-stretch px-4 ftco-animate">
                     <div class="d-block">
                        <div class="icon d-flex mr-2">
                           <span class="<?php the_sub_field('icon'); ?>"></span>
                        </div>
                        <div class="media-body">
                           <h3 class="heading"> <?php the_sub_field('title'); ?>
                           </h3>
                           <p> <?php the_sub_field('description'); ?>
                           </p>
                        </div>
                     </div>
                  </div>

               <?php endwhile; ?>

            <?php endif; ?>

         </div>
      </div>
   </section>
<?php endif; ?>


<!-- Countdown section  -->
<?php if (get_field('show_countdown_section', 'options')) : ?>
   <section class="ftco-counter bg-light ftco-no-pt" id="section-counter">
      <div class="container">
         <div class="row">
            <?php if (have_rows('counter', 'options')) : ?>
               <?php while (have_rows('counter', 'options')) : the_row(); ?>
                  <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                     <div class="block-18 text-center">
                        <div class="text">
                           <strong class="number" data-number="<?php the_sub_field('counter_number'); ?>"><?php the_sub_field('counter_number'); ?></strong>
                        </div>
                        <div class="text">
                           <span><?php the_sub_field('counter_title'); ?></span>
                        </div>
                     </div>
                  </div>
               <?php endwhile; ?>
            <?php endif; ?>
         </div>
      </div>
   </section>
<?php endif; ?>

<!-- Testimony Section  -->
<?php if (get_field('hide_testimonial_section_from_home_page', 'options')) : ?>
   <section class="ftco-section testimony-section bg-light">
      <div class="overlay"></div>
      <div class="container">
         <?php if ($testimony = get_field('testimonial_info', 'options')) : ?>
            <div class="row justify-content-center pb-5 mb-3">
               <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
                  <span class="subheading"><?php echo $testimony['subtitle'] ?></span>
                  <h2><?php echo $testimony['title'] ?></h2>
               </div>
            </div>
         <?php endif; ?>
         <div class="row ftco-animate">
            <div class="col-md-12">
               <div class="carousel-testimony owl-carousel ftco-owl">

                  <?php if (have_rows('testimonial', 'options')) : ?>

                     <?php while (have_rows('testimonial', 'options')) : the_row(); ?>

                        <div class="item">
                           <div class="testimony-wrap py-4">
                              <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                              <div class="text">
                                 <p class="mb-4"> <?php the_sub_field('review'); ?></p>
                                 <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url( <?php the_sub_field('image'); ?>)"></div>
                                    <div class="pl-3">
                                       <p class="name"> <?php the_sub_field('name'); ?></p>
                                       <span class="position"> <?php the_sub_field('designation'); ?></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     <?php endwhile; ?>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </div>
   </section>
<?php endif; ?>

<!-- FAQ section  -->
<section class="ftco-section ftco-no-pt bg-light ftco-faqs">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="img-faqs w-100">
               <?php if ($images = get_field('faq_image', 'options')) : ?>

                  <div class="img mb-4 mb-sm-0" style="background-image:url(<?php echo $images['faq_image_top']['url'] ?>);">
                  </div>
                  <div class="img img-2 mb-4 mb-sm-0" style="background-image:url(<?php echo $images['faq_image_bottom']['url'] ?>);">
                  </div>

               <?php endif; ?>

            </div>
         </div>
         <div class="col-lg-6 pl-lg-5">
            <?php if ($faq_info = get_field('faq_info', 'options')) : ?>
               <div class="heading-section mb-5 mt-5 mt-lg-0">
                  <span class="subheading">FAQs</span>
                  <h2 class="mb-3"><?php echo $faq_info['faq_title'] ?></h2>
                  <p><?php echo $faq_info['faq__description'] ?></p>
               </div>
            <?php endif; ?>

            <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
               <?php if (have_rows('faqs', 'options')) : ?>
                  <?php $i = 1 ?>
                  <?php while (have_rows('faqs', 'options')) : the_row(); ?>


                     <div class="card">
                        <div class="card-header p-0" id="heading<?php echo $i ?>">
                           <h2 class="mb-0">
                              <button href="#collapse<?php echo $i ?>" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="<?php if ($i == 1) :
                                                                                                                                                                                                                           echo 'true';
                                                                                                                                                                                                                        endif; ?>" aria-controls="collapse<?php echo $i ?>">
                                 <p class="mb-0"><?php the_sub_field('question'); ?></p>
                                 <i class="fa" aria-hidden="true"></i>
                              </button>
                           </h2>
                        </div>
                        <?php if ($i === 1) {
                           $sho = 'show';
                        } ?>
                        <div class="collapse 
                        <?php if ($i == 1) {
                           echo 'show';
                        } ?>" id="collapse<?php echo $i ?>" role="tabpanel" aria-labelledby="heading<?php echo $i ?>">
                           <div class="card-body py-3 px-0">
                              <?php the_sub_field('answer'); ?>
                           </div>
                        </div>
                     </div>

                     <?php $i++ ?>

                  <?php endwhile; ?>

               <?php endif; ?>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Blog section  -->
<section class="ftco-section">
   <div class="container">
      <?php if ($blog_info = get_field('blogs', 'options')) : ?>

         <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
               <span class="subheading"> <?php echo $blog_info['subtitle']; ?></span>
               <h2> <?php echo $blog_info['title']; ?></h2>
            </div>
         </div>
         <div class="row d-flex">

            <?php
            $catid = $blog_info['category'];
            $catname = get_cat_name($catid);
            $post_per_page = $blog_info['number_of_posts'];
            $args = array(
               'post_type' => 'post',
               'category_name' => $catname,
               'posts_per_page' => $post_per_page,
            );

            $query = new WP_Query($args);

            ?>

            <?php if ($query->have_posts()) : ?>

               <?php while ($query->have_posts()) : $query->the_post(); ?>

                  <div class="col-md-4 d-flex ftco-animate fadeInUp ftco-animated">
                     <div class="blog-entry align-self-stretch">
                        <a href="<?php the_permalink() ?>" class="block-20 rounded" style="background-image: url('<?php the_post_thumbnail_url('large') ?>');">
                        </a>
                        <div class="text p-4">
                           <div class="meta mb-2">
                              <div><a href="#"><?php the_date() ?></a></div>
                              <div><a href="#"><?php the_author() ?></a></div>
                              <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> <?php echo get_comments_number() ?></a></div>
                           </div>
                           <h3 class="heading"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                        </div>
                     </div>
                  </div>

               <?php endwhile; ?>

            <?php endif; ?>

            <?php wp_reset_query(); ?>

         </div>
      <?php endif; ?>
   </div>
</section>

<!-- Newsletter section  -->
<section class="ftco-section ftco-no-pb ftco-no-pt bg-secondary">
   <div class="container py-5">
      <div class="row">
         <div class="col-md-7 d-flex align-items-center">
            <h2 class="mb-3 mb-sm-0" style="color:black; font-size: 22px;">Sign Up for Your Free 1st Accounting Consultation</h2>
         </div>
         <div class="col-md-5 d-flex align-items-center">
            <form action="#" class="subscribe-form">
               <div class="form-group d-flex">
                  <input type="text" class="form-control" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="submit px-3">
               </div>
            </form>
         </div>
      </div>
   </div>
</section>

<section class="ftco-section bg-light">
   <div class="container">
      <div class="row justify-content-center pb-5 mb-3">
         <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Price &amp; Plans</span>
            <h2>Affordable Packages</h2>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="block-7">
               <div class="text-center">
                  <span class="excerpt d-block">Personal</span>
                  <span class="price"><sup>$</sup> <span class="number">49</span> <sub>/mos</sub></span>
                  <ul class="pricing-text mb-5">
                     <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
                     <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
                     <li><span class="fa fa-check mr-2"></span>Branding Services</li>
                     <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
                     <li><span class="fa fa-check mr-2"></span>Sales Management</li>
                  </ul>
                  <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="block-7">
               <div class="text-center">
                  <span class="excerpt d-block">Business</span>
                  <span class="price"><sup>$</sup> <span class="number">79</span> <sub>/mos</sub></span>
                  <ul class="pricing-text mb-5">
                     <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
                     <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
                     <li><span class="fa fa-check mr-2"></span>Branding Services</li>
                     <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
                     <li><span class="fa fa-check mr-2"></span>Sales Management</li>
                  </ul>
                  <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="block-7">
               <div class="text-center">
                  <span class="excerpt d-block">Ultimate</span>
                  <span class="price"><sup>$</sup> <span class="number">109</span> <sub>/mos</sub></span>
                  <ul class="pricing-text mb-5">
                     <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
                     <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
                     <li><span class="fa fa-check mr-2"></span>Branding Services</li>
                     <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
                     <li><span class="fa fa-check mr-2"></span>Sales Management</li>
                  </ul>
                  <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="block-7">
               <div class="text-center">
                  <span class="excerpt d-block">Premium</span>
                  <span class="price"><sup>$</sup> <span class="number">149</span> <sub>/mos</sub></span>
                  <ul class="pricing-text mb-5">
                     <li><span class="fa fa-check mr-2"></span>Brand Strategy</li>
                     <li><span class="fa fa-check mr-2"></span>Online Marketing</li>
                     <li><span class="fa fa-check mr-2"></span>Branding Services</li>
                     <li><span class="fa fa-check mr-2"></span>Creative Marketing</li>
                     <li><span class="fa fa-check mr-2"></span>Sales Management</li>
                  </ul>
                  <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php get_footer(); ?>