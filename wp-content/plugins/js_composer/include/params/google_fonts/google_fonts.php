<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * Class Vc_Google_Fonts
 * @since 4.3
 * vc_map examples:
 *      'params' => array(
 *          array(
 *                'type' => 'google_fonts',
 *                'param_name' => 'google_fonts',
 *                'value' => '',// Not recommended, this will override 'settings'. Example:
 *     'font_family:'.rawurlencode('Exo:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic').'|font_style:'.rawurlencode('900
 *     bold italic:900:italic'),
 *                'settings' => array(
 *                    'fields'=>array(
 *                        'font_family'=>'Abril Fatface:regular',//
 *     'Exo:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic',
 *     Default font family and all available styles to fetch
 *                        'font_style'=>'400 regular:400:normal', // Default font style. Name:weight:style, example:
 *     "800 bold regular:800:normal"
 *                        'font_family_description' => __('Select font family.','js_composer'),
 *                        'font_style_description' => __('Select font styling.','js_composer')
 *                  )
 *                ),
 *                'description' => __( 'Description for this group', 'js_composer' ), // Description for field group
 *            ),
 *      )
 */
class Vc_Google_Fonts {
	public $fonts_list = '[{"font_family":"Abril Fatface","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"ABeeZee","font_styles":"regular,italic","font_types":"400 regular:400:normal,400 italic:400:italic"},{"font_family":"Abel","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Aclonica","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Acme","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Actor","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Adamina","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Advent Pro","font_styles":"100,200,300,regular,500,600,700","font_types":"100 light regular:100:normal,200 light regular:200:normal,300 light regular:300:normal,400 regular:400:normal,500 bold regular:500:normal,600 bold regular:600:normal,700 bold regular:700:normal"},{"font_family":"Aguafina Script","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Akronim","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Aladin","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Aldrich","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Alef","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Alegreya","font_styles":"regular,italic,700,700italic,900,900italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic,900 bold regular:900:normal,900 bold italic:900:italic"},{"font_family":"Alegreya SC","font_styles":"regular,italic,700,700italic,900,900italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic,900 bold regular:900:normal,900 bold italic:900:italic"},{"font_family":"Alegreya Sans","font_styles":"100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,800,800italic,900,900italic","font_types":"100 light regular:100:normal,100 light italic:100:italic,300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic,500 bold regular:500:normal,500 bold italic:500:italic,700 bold regular:700:normal,700 bold italic:700:italic,800 bold regular:800:normal,800 bold italic:800:italic,900 bold regular:900:normal,900 bold italic:900:italic"},{"font_family":"Alegreya Sans SC","font_styles":"100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,800,800italic,900,900italic","font_types":"100 light regular:100:normal,100 light italic:100:italic,300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic,500 bold regular:500:normal,500 bold italic:500:italic,700 bold regular:700:normal,700 bold italic:700:italic,800 bold regular:800:normal,800 bold italic:800:italic,900 bold regular:900:normal,900 bold italic:900:italic"},{"font_family":"Alex Brush","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Alfa Slab One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Alice","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Alike","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Alike Angular","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Allan","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Allerta","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Allerta Stencil","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Allura","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Almendra","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Almendra Display","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Almendra SC","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Amarante","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Amaranth","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Amatic SC","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Amethysta","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Anaheim","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Andada","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Andika","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Angkor","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Annie Use Your Telescope","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Anonymous Pro","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Antic","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Antic Didone","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Antic Slab","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Anton","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Arapey","font_styles":"regular,italic","font_types":"400 regular:400:normal,400 italic:400:italic"},{"font_family":"Arbutus","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Arbutus Slab","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Architects Daughter","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Archivo Black","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Archivo Narrow","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Arimo","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Arizonia","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Armata","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Artifika","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Arvo","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Asap","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Asset","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Astloch","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Asul","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Atomic Age","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Aubrey","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Audiowide","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Autour One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Average","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Average Sans","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Averia Gruesa Libre","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Averia Libre","font_styles":"300,300italic,regular,italic,700,700italic","font_types":"300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Averia Sans Libre","font_styles":"300,300italic,regular,italic,700,700italic","font_types":"300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Averia Serif Libre","font_styles":"300,300italic,regular,italic,700,700italic","font_types":"300 light regular:300:normal,300 light italic:300:italic,400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Bad Script","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Balthazar","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bangers","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Basic","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Battambang","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Baumans","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bayon","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Belgrano","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Belleza","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"BenchNine","font_styles":"300,regular,700","font_types":"300 light regular:300:normal,400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Bentham","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Berkshire Swash","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bevan","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bigelow Rules","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bigshot One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bilbo","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bilbo Swash Caps","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bitter","font_styles":"regular,italic,700","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal"},{"font_family":"Black Ops One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bokor","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bonbon","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Boogaloo","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bowlby One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bowlby One SC","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Brawler","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bree Serif","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bubblegum Sans","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Bubbler One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Buda","font_styles":"300","font_types":"300 light regular:300:normal"},{"font_family":"Buenard","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Butcherman","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Butterfly Kids","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Cabin","font_styles":"regular,italic,500,500italic,600,600italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,500 bold regular:500:normal,500 bold italic:500:italic,600 bold regular:600:normal,600 bold italic:600:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Cabin Condensed","font_styles":"regular,500,600,700","font_types":"400 regular:400:normal,500 bold regular:500:normal,600 bold regular:600:normal,700 bold regular:700:normal"},{"font_family":"Cabin Sketch","font_styles":"regular,700","font_types":"400 regular:400:normal,700 bold regular:700:normal"},{"font_family":"Caesar Dressing","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Cagliostro","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Calligraffitti","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Cambo","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Candal","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Cantarell","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Cantata One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Cantora One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Capriola","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Cardo","font_styles":"regular,italic,700","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal"},{"font_family":"Carme","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Carrois Gothic","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Carrois Gothic SC","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Carter One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Caudex","font_styles":"regular,italic,700,700italic","font_types":"400 regular:400:normal,400 italic:400:italic,700 bold regular:700:normal,700 bold italic:700:italic"},{"font_family":"Cedarville Cursive","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Ceviche One","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Changa One","font_styles":"regular,italic","font_types":"400 regular:400:normal,400 italic:400:italic"},{"font_family":"Chango","font_styles":"regular","font_types":"400 regular:400:normal"},{"font_family":"Chau Philomene One","font_styles":"regular,italic","font_types":"400 regular:400:normal,400 italic:400:italic"},{"font_family":"Chela One","font_styles":" 

	/**
	 * @param $settings
	 * @param $value
	 *
	 * @since 4.3
	 * @return string
	 */
	public function render( $settings, $value ) {
		$fields = array();
		$values = array();
		$set = isset( $settings['settings'], $settings['settings']['fields'] ) ? $settings['settings']['fields'] : array();
		extract( $this->_vc_google_fonts_parse_attributes( $set, $value ) );
		ob_start();
		include vc_path_dir( 'TEMPLATES_DIR', 'params/google_fonts/template.php' );

		return ob_get_clean();
	}

	/**
	 *
	 * Load google fonts list for param
	 * To change this list use add_filters('vc_google_fonts_get_fonts_filter','your_custom_function'); and change array
	 * vc_filter: vc_google_fonts_get_fonts_filter
	 * @since 4.3
	 * @return array List of available fonts as array of objects. {"font_family":"Abril
	 *     Fatface","font_styles":"regular","font_types":"400 regular:400:normal"}
	 *
	 * @return array
	 */
	public function _vc_google_fonts_get_fonts() {
		return apply_filters( 'vc_google_fonts_get_fonts_filter', json_decode( $this->fonts_list ) );
	}

	/**
	 * @param $attr
	 * @param $value
	 *
	 * @since 4.3
	 * @return array
	 */
	public function _vc_google_fonts_parse_attributes( $attr, $value ) {
		$fields = array();
		if ( is_array( $attr ) && ! empty( $attr ) ) {
			foreach ( $attr as $key => $val ) {
				if ( is_numeric( $key ) ) {
					$fields[ $val ] = '';
				} else {
					$fields[ $key ] = $val;
				}
			}
		}

		$values = vc_parse_multi_attribute( $value, array(
			'font_family' => isset( $fields['font_family'] ) ? $fields['font_family'] : '',
			'font_style' => isset( $fields['font_style'] ) ? $fields['font_style'] : '',
			'font_family_description' => isset( $fields['font_family_description'] ) ? $fields['font_family_description'] : '',
			'font_style_description' => isset( $fields['font_style_description'] ) ? $fields['font_style_description'] : '',
		) );

		return array( 'fields' => $fields, 'values' => $values );
	}
}

/**
 * Function for rendering param in edit form (add element)
 * Parse settings from vc_map and entered values.
 *
 * @param $settings
 * @param $value
 *
 * @since 4.3
 * vc_filter: vc_google_fonts_render_filter
 * @return mixed|void rendered template for params in edit form
 *
 */
function vc_google_fonts_form_field( $settings, $value ) {
	$google_fonts = new Vc_Google_Fonts();

	return apply_filters( 'vc_google_fonts_render_filter', $google_fonts->render( $settings, $value ) );
}