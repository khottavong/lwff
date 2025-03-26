<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts' );

// Create Shortcode ticket
// Shortcode: [ticket link="" title="single day" date="feb 4 - 6" price="$20" buy_now="Buy Now" size="small"]
function create_ticket_shortcode($atts) {

	$atts = shortcode_atts(
		array(
			'link' => '',
			'title' => 'single day',
			'date' => 'feb 4 - 6',
            'time' => '',
			'price' => '$20',
			'buy_now' => 'Buy Now',
			'size' => 'small',
            'id' => '',
		),
		$atts,
		'ticket'
	);

	$link = $atts['link'];
	$title = $atts['title'];
	$date = $atts['date'];
    $time = $atts['time'];
	$price = $atts['price'];
	$buy_now = $atts['buy_now'];
	$size = $atts['size'];
    $id = $atts['id'];
    
			ob_start();
	?>
    <div class="ticket <?php echo $size;?>">
			<?php if ($title) { ?>
				<div class="ticket__title">
					<h3><?php echo $title ?></h3>
				</div>
			<?php } ?>
			<div class="ticket__body">
			<?php if ($date) { ?>
					<div class="ticket__date">
						<span><?php echo $date ?>
                        <?php if ($time) { ?>
                          <span class="time"><?php echo $time;?></span>
                        <?php } ?>
                        </span>
					</div>
				<?php } ?>
				<?php if ($price) { ?>
					<div class="ticket__price">
						<span><?php echo $price ?></span>
					</div>
				<?php } ?>
			</div>
            <div class="ticket__footer">
            <?php if (	$link ) { ?>
					<a id="<?php echo $id;?>" class="ticket__link" href="<?php echo esc_url($link);?>"><?php echo $buy_now; ?></a>
				<?php } ?>
            </div>
		</div>
		<?php
		$output_string = ob_get_contents();
		ob_end_clean();
	return $output_string;

}
add_shortcode( 'ticket', 'create_ticket_shortcode' );