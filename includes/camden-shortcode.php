<?php

/*-----------------------------------------------------------------------------------*/
/*	Removes ugly codes in shortcodes
/*-----------------------------------------------------------------------------------*/
function parse_shortcode_content( $content ) {

	/* Parse nested shortcodes and add formatting. */
	$content = trim( wpautop( do_shortcode( $content ) ) );

	/* Remove '</p>' from the start of the string. */
	if ( substr( $content, 0, 4 ) == '</p>' ) {
		$content = substr( $content, 4 );
	}

	/* Remove '<p>' from the end of the string. */
	if ( substr( $content, - 3, 3 ) == '<p>' ) {
		$content = substr( $content, 0, - 3 );
	}

	/* Remove any instances of '<p></p>'. */
	$content = str_replace( array( '<p></p>' ), '', $content );

	return $content;
}


/*-----------------------------------------------------------------------------------*/
/*	Grid Shortcodes
/*-----------------------------------------------------------------------------------*/

add_shortcode( 'one_half_alpha', 'camden_one_half_alpha' );
add_shortcode( 'one_half_omega', 'camden_one_half_omega' );
add_shortcode( 'one_third_alpha', 'camden_one_third_alpha' );
add_shortcode( 'one_third', 'camden_one_third' );
add_shortcode( 'one_third_omega', 'camden_one_third_omega' );
add_shortcode( 'one_fourth_alpha', 'camden_one_fourth_alpha' );
add_shortcode( 'one_fourth', 'camden_one_fourth' );
add_shortcode( 'one_fourth_omega', 'camden_one_fourth_omega' );
add_shortcode( 'two_third_alpha', 'camden_two_third_alpha' );
add_shortcode( 'two_third_omega', 'camden_two_third_omega' );
add_shortcode( 'clear', 'camden_clearfix' );
add_shortcode( 'line', 'camden_line' );

function camden_one_half_alpha( $atts, $content = null ) {
	return '<div class="row"><div class="large-6 columns">' . parse_shortcode_content( $content ) . '</div>';
}

function camden_one_half_omega( $atts, $content = null ) {
	return '<div class="large-6 columns">' . parse_shortcode_content( $content ) . '</div></div>';
}

function camden_one_third_alpha( $atts, $content = null ) {
	return '<div class="row"><div class="large-4 columns">' . parse_shortcode_content( $content ) . '</div>';
}

function camden_one_third( $atts, $content = null ) {
	return '<div class="large-4 columns">' . parse_shortcode_content( $content ) . '</div>';
}

function camden_one_third_omega( $atts, $content = null ) {
	return '<div class="large-4 columns">' . parse_shortcode_content( $content ) . '</div></div>';
}

function camden_one_fourth_alpha( $atts, $content = null ) {
	return '<div class="row"><div class="large-3 columns">' . parse_shortcode_content( $content ) . '</div>';
}

function camden_one_fourth( $atts, $content = null ) {
	return '<div class="large-3 columns">' . parse_shortcode_content( $content ) . '</div>';
}

function camden_one_fourth_omega( $atts, $content = null ) {
	return '<div class="large-3 columns">' . parse_shortcode_content( $content ) . '</div></div>';
}

function camden_two_third_alpha( $atts, $content = null ) {
	return '<div class="row"><div class="large-8 columns">' . parse_shortcode_content( $content ) . '</div>';
}

function camden_two_third_omega( $atts, $content = null ) {
	return '<div class="large-8 columns">' . parse_shortcode_content( $content ) . '</div></div>';
}

function camden_line() {
	return '<hr/>';
}


/*-----------------------------------------------------------------------------------*/
/*	Action Button Shortcodes
/*-----------------------------------------------------------------------------------*/

add_shortcode( 'btn', 'camden_button' );

function camden_button( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'url'    => '#',
		'target' => '_self',
		'color'  => '',
		'type'   => 'basic',
		'arrow'  => 'true',
		'size'   => ''
	), $atts ) );
	if ( $arrow == 'false' ):
		$out = "<a href=\"" . $url . "\" target=\"" . $target . "\" class=\"button-" . $type . "  button fr " . $color . " " . $size . " \">" . do_shortcode( $content ) . "</a>";
	else :
		$out = "<a href=\"" . $url . "\" target=\"" . $target . "\" class=\"button-" . $type . "  button fr " . $color . " " . $size . " \">" . do_shortcode( $content ) . "<i class=\"icon-angle-right\"></i></a>";
	endif;

	return $out;
}

/*-----------------------------------------------------------------------------------*/
/*  Misc Shortcodes
/*-----------------------------------------------------------------------------------*/
add_shortcode( 'checklist', 'camden_checklist' );
add_shortcode( 'checklist_circled', 'camden_checklist_circled' );
add_shortcode( 'pullquote_left', 'camden_pullquote_left' );
add_shortcode( 'pullquote_right', 'camden_pullquote_right' );
add_shortcode( 'quote', 'camden_blockquote' );

function camden_checklist( $atts, $content = null ) {
	return '<div class="checklist">' . parse_shortcode_content( $content ) . '</div>';
}

function camden_checklist_circled( $atts, $content = null ) {
	return '<div class="checklist-circled">' . parse_shortcode_content( $content ) . '</div>';
}

function camden_pullquote_left( $atts, $content = null ) {
	return '<span class="pullquote_left">' . $content . '</span>';
}

function camden_pullquote_right( $atts, $content = null ) {
	return '<span class="pullquote_right">' . $content . '</span>';
}

function camden_blockquote( $atts, $content = null ) {
	return '<blockquote class="cite">' . parse_shortcode_content( $content ) . '</blockquote>';
}
?>
