<?php
/**
 * Block template file: /app/public/wp-content/themes/hecsllc-main/includes/acf-layouts/blocks/home-testimonial-slider.php
 *
 * Home Testimonial Slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'home-testimonial-slider-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-home-testimonial-slider';
if( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<style type="text/css">
#kt-layout-id_f3a861-67 > .kt-row-layout-overlay {
    z-index:5;
}
	<?php echo '#' . $id; ?> {
        /* Add styles that use ACF values here */
        background-size: contain;
    background-repeat: no-repeat;
    background-position: right;
    min-height:680px;
	}
</style>
<div class="boxshadow"></div>
<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> alignfull">

    <div id="owl-<?php the_field( 'slider_id' ); ?>" class="owl-carousel owl-theme">
        <?php if ( have_rows( 'testimonial_repeater' ) ) : ?>
            <?php while ( have_rows( 'testimonial_repeater' ) ) : the_row(); ?>
            <?php $image = get_sub_field( 'image' ); ?>
            <div class="item">
                    <div class="thebackground" style="
                    background:url(<?php echo $image['url']; ?>); 
                    background-size: contain;
                    background-repeat: no-repeat;
                    background-position: right;
                    ">

                    <div class="wp-block-kadence-rowlayout alignnone testimonialSlides">
                        <div id="" class="kt-row-layout-inner">
                            <div class="kt-row-column-wrap kt-has-2-columns kt-gutter-default kt-v-gutter-default kt-row-valign-top kt-row-layout-equal kt-tab-layout-inherit kt-m-colapse-left-to-right kt-mobile-layout-row">
                                <div class="wp-block-kadence-column inner-column-1">
                                    <div class="kt-inside-inner-col">
                                        <h3><?php the_sub_field( 'testimonial' ); ?></h3>
                                        <p class="name" style="font-weight:900; font-size:1.222rem;"><?php the_sub_field( 'name' ); ?></p>
                                        <p class="location"><?php the_sub_field( 'location' ); ?></p>
                                    </div>
                                </div>
                                <div class="wp-block-kadence-column inner-column-2">
                                    <div class="kt-inside-inner-col">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
          
            <?php endwhile; ?>
        <?php else : ?>
            <?php // no rows found ?>
        <?php endif; ?>
    </div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function() {
        //Start and add normal owl options here - typl
        jQuery("#owl-<?php the_field( 'slider_id' ); ?>").owlCarousel({
            center: true,
            items:1,
            loop:true,
            margin:30,
            nav: true,
            navText: ["<img src='https://s3.amazonaws.com/hecs-media/wp-content/uploads/2019/07/22225126/Subtract-2.svg'>","<img src='https://s3.amazonaws.com/hecs-media/wp-content/uploads/2019/07/22225125/Subtract-3.svg'>"],
            dots:false,
            // center: true,
            // responsiveClass:true,
            // responsive:{
            //     0: {
            //         items: 1,
            //         nav: true
            //     },
            //     640: {
            //         items: 3,
            //         nav: false
            //     },
            //     768: {
            //         items: 4,
            //         nav: false,
            //         loop: true
            //     }
            // }
        });
    });
</script>