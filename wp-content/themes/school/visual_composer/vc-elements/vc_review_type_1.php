<?php
/*
Element Description: VC Info Box
*/
 
// Element Class 
class vcReviewType1 extends WPBakeryShortCode {
		 
		// Element Init
		function __construct() {
				add_action( 'init', array( $this, 'vc_review_type_1_mapping' ) );
				add_shortcode( 'vc_review_type_1', array( $this, 'vc_review_type_1_html' ) );
		}
		 
		// Element Mapping
		public function vc_review_type_1_mapping() {
				 
				// Stop all if VC is not enabled
				if ( !defined( 'WPB_VC_VERSION' ) ) {
						return;
				}
				 
				// Map the block with vc_map()
				vc_map( 
						array(
								'name' => __('Отзыв №1', 'visotskiy'),
								'base' => 'vc_review_type_1',
								'description' => __('Выберите отзыв №1', 'visotskiy'), 
								'category' => __('Для работы с сайтом', 'visotskiy'),         
								'params' => array(
										array(
											'type' => 'attach_image',
											'holder' => 'div',
											'class' => 'title-class',
											'heading' => __( 'Выберите картинку', 'visotskiy' ),
											'param_name' => 'image_url',
											'value' => __( '', 'visotskiy' ),
											'description' => __( 'Выберите картинку', 'visotskiy' ),
											'admin_label' => false,
											'weight' => 0
										),
										array(
											'type' => 'textfield',
											'holder' => 'p',
											'class' => 'title-class',
											'heading' => __( 'Заголовок:', 'visotskiy' ),
											'param_name' => 'title',
											'value' => "",
											'description' => __( 'Введите заголовок.', 'visotskiy' ),
											'admin_label' => false,
											'weight' => 0
										),

										array(
											"type" => "textfield",
											"holder" => "div",
											"class" => "",
											"heading" => __( "Очередность заголовка", "visotskiy" ),
											"param_name" => "status",
											"value" => __( "", "visotskiy" ),
											"description" => __( "Варианты: 1,2,3,4,5,6. Оставив поле пустым заголовок будет по умолчанию h3", "visotskiy" )
										),

										array(
											'type' => 'vc_link',
											'holder' => 'p',
											'class' => 'title-class',
											'heading' => __( 'Ссылка кнопки:', 'visotskiy' ),
											'param_name' => 'btn_link',
											'value' => "",
											'description' => __( 'Введите ссылку кнопки.', 'visotskiy' ),
											'admin_label' => false,
											'weight' => 0
										),
										
										array(
											"type" => "textarea_html",
											"holder" => "div",
											"class" => "",
											"heading" => __( "Описание:", "visotskiy" ),
											"param_name" => "content",
											"value" => __( "", "visotskiy" ),
											"description" => __( "Введите описание.", "visotskiy" )
										),
								),
						)
				);
				
		}
		 
		 
		// Element HTML
		public function vc_review_type_1_html( $atts, $content = null ) {
				 
				// Params extraction
				extract(
						shortcode_atts(
								array(
									'title' 			=> '',
									'image_url' 	=> '',
									'btn_link'		=> '',
									'status'			=> '3',
								), 
								$atts
						)
				);
				 
				// Fill $html var with data
				$img = wp_get_attachment_image_url($image_url, 'full');
				if($btn_link != ''){
					$btn_href = vc_build_link($btn_link);
					$link = '<a href="'.site_url($btn_href["url"]).'" class="btn btn_border btn_border-white review-type-1__btn effect effect_bounce-top" target="_blank">Смотреть</a>';
					$header_content_class = 'review-type-1__header-content_center';
				}else{
					$link = '';
					$header_content_class = '';
				}
				$html = '
				<div class="review-type-1">
					<div class="review-type-1__header">
						<img src="'.$img.'" alt="'.$title.'" class="review-type-1__header-image">
						<div class="review-type-1__header-content '.$header_content_class.'">
							<h'.$status.' class="review-type-1__header-title">'.$title.'</h'.$status.'>
							'.$link.'
						</div>
					</div>
					<div class="review-type-1__content">
						'.wpautop($content).'
					</div>
				</div>';

				// <a href="'.$link.'" class="btn btn_brand-1 review-type-1__btn" target="_blank">'.$button_text.'</a>
				 
				return $html;
				 
		}
		 
} // End Element Class
 
 
// Element Class Init
new vcReviewType1();
?>