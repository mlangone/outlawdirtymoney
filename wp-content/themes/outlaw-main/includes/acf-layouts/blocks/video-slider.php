<?php
/**
 * Block template file: /app/public/wp-content/themes/hecsllc-main/includes/acf-layouts/blocks/video-slider.php
 *
 * Video Slider Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'video-slider-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-video-slider';
if( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<style type="text/css">
	<?php echo '#' . $id; ?> {
        /* Add styles that use ACF values here */

    }
    <?php echo '#' . $id; ?> .owl-stage {
            margin-left: -100px;
        }
    <?php echo '#' . $id; ?> .owl-theme .owl-nav [class*=owl-] {
        background: transparent;
    }
    <?php echo '#' . $id; ?>.owl-theme .owl-dots, .owl-theme .owl-nav {
        text-align: left;
        -webkit-tap-highlight-color: transparent;
    }
</style>

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?> alignnone">
    <div id="owl-<?php the_field( 'slider_id' ); ?>" class="owl-carousel owl-theme">
        <?php if ( have_rows( 'video_url_repeater' ) ) : ?>
            <?php while ( have_rows( 'video_url_repeater' ) ) : the_row(); ?>
                <div class="item" >
                    <?php the_sub_field( 'video_url' ); ?>
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
            margin: 30,
            loop: true,
            items: 1,
            stagePadding: 100,
            nav: true,
            navText: ["<img src='https://s3.amazonaws.com/hecs-media/wp-content/uploads/2019/07/22195940/Subtract.svg'>","<img src='https://s3.amazonaws.com/hecs-media/wp-content/uploads/2019/07/22195939/Subtract-1.svg'>"],
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