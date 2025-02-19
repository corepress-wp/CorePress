<?php
/**
 * Datasets for unit and integration tests.
 *
 * @package    WordPress
 * @subpackage Fonts
 */

/**
 * Trait for reusing datasets within the Fonts tests.
 */
trait WP_Font_Face_Tests_Datasets {
	/**
	 * Data provider.
	 *
	 * @return array
	 */
	public function data_should_print_given_fonts() {
		return array(
			'single truetype format font'    => array(
				'fonts'    => array(
					'Inter' =>
						array(
							array(
								'src'          =>
									array(
										'https://example.org/assets/fonts/inter/Inter-VariableFont_slnt,wght.ttf',
									),
								'font-family'  => 'Inter',
								'font-stretch' => 'normal',
								'font-style'   => 'normal',
								'font-weight'  => '200',
							),
						),
				),
				'expected' => <<<CSS
@font-face{font-family:Inter;font-style:normal;font-weight:200;font-display:fallback;src:url('https://example.org/assets/fonts/inter/Inter-VariableFont_slnt,wght.ttf') format('truetype');font-stretch:normal;}
CSS
			,
			),
			'multiple truetype format fonts' => array(
				'fonts'    => array(
					'Inter' =>
						array(
							array(
								'src'          =>
									array(
										'https://example.org/assets/fonts/inter/Inter-VariableFont_slnt,wght.ttf',
									),
								'font-family'  => 'Inter',
								'font-stretch' => 'normal',
								'font-style'   => 'normal',
								'font-weight'  => '200',
							),
							array(
								'src'          =>
									array(
										'https://example.org/assets/fonts/inter/Inter-VariableFont_slnt-Italic,wght.ttf',
									),
								'font-family'  => 'Inter',
								'font-stretch' => 'normal',
								'font-style'   => 'italic',
								'font-weight'  => '900',
							),
						),
				),
				'expected' => <<<CSS
@font-face{font-family:Inter;font-style:normal;font-weight:200;font-display:fallback;src:url('https://example.org/assets/fonts/inter/Inter-VariableFont_slnt,wght.ttf') format('truetype');font-stretch:normal;}
@font-face{font-family:Inter;font-style:italic;font-weight:900;font-display:fallback;src:url('https://example.org/assets/fonts/inter/Inter-VariableFont_slnt-Italic,wght.ttf') format('truetype');font-stretch:normal;}
CSS
			,
			),
			'single woff2 format font'       => array(
				'fonts'    => array(
					'DM Sans' =>
						array(
							array(
								'src'          =>
									array(
										'https://example.org/assets/fonts/dm-sans/DMSans-Regular.woff2',
									),
								'font-family'  => 'DM Sans',
								'font-stretch' => 'normal',
								'font-style'   => 'normal',
								'font-weight'  => '400',
							),
						),
				),
				'expected' => <<<CSS
@font-face{font-family:"DM Sans";font-style:normal;font-weight:400;font-display:fallback;src:url('https://example.org/assets/fonts/dm-sans/DMSans-Regular.woff2') format('woff2');font-stretch:normal;}
CSS
			,
			),
			'multiple woff2 format fonts'    => array(
				'fonts'                  => array(
					'DM Sans'       =>
						array(
							array(
								'src'          =>
									array(
										'https://example.org/assets/fonts/dm-sans/DMSans-Regular.woff2',
									),
								'font-family'  => 'DM Sans',
								'font-stretch' => 'normal',
								'font-style'   => 'normal',
								'font-weight'  => '400',
							),
							array(
								'src'          =>
									array(
										'https://example.org/assets/fonts/dm-sans/DMSans-Regular-Italic.woff2',
									),
								'font-family'  => 'DM Sans',
								'font-stretch' => 'normal',
								'font-style'   => 'italic',
								'font-weight'  => '400',
							),
							array(
								'src'          =>
									array(
										'https://example.org/assets/fonts/dm-sans/DMSans-Bold.woff2',
									),
								'font-family'  => 'DM Sans',
								'font-stretch' => 'normal',
								'font-style'   => 'normal',
								'font-weight'  => '700',
							),
							array(
								'src'          =>
									array(
										'https://example.org/assets/fonts/dm-sans/DMSans-Bold-Italic.woff2',
									),
								'font-family'  => 'DM Sans',
								'font-stretch' => 'normal',
								'font-style'   => 'italic',
								'font-weight'  => '700',
							),
						),
					'IBM Plex Mono' =>
						array(
							array(
								'src'          =>
									array(
										'https://example.org/assets/fonts/ibm-plex-mono/IBMPlexMono-Light.woff2',
									),
								'font-family'  => 'IBM Plex Mono',
								'font-display' => 'block',
								'font-stretch' => 'normal',
								'font-style'   => 'normal',
								'font-weight'  => '300',
							),
							array(
								'src'          =>
									array(
										'https://example.org/assets/fonts/ibm-plex-mono/IBMPlexMono-Regular.woff2',
									),
								'font-family'  => 'IBM Plex Mono',
								'font-display' => 'block',
								'font-stretch' => 'normal',
								'font-style'   => 'normal',
								'font-weight'  => '400',
							),
							array(
								'src'          =>
									array(
										'https://example.org/assets/fonts/ibm-plex-mono/IBMPlexMono-Italic.woff2',
									),
								'font-family'  => 'IBM Plex Mono',
								'font-display' => 'block',
								'font-stretch' => 'normal',
								'font-style'   => 'italic',
								'font-weight'  => '400',
							),
							array(
								'src'          =>
									array(
										'https://example.org/assets/fonts/ibm-plex-mono/IBMPlexMono-Bold.woff2',
									),
								'font-family'  => 'IBM Plex Mono',
								'font-display' => 'block',
								'font-stretch' => 'normal',
								'font-style'   => 'normal',
								'font-weight'  => '700',
							),
						),
				),
				'expected'               => <<<CSS
@font-face{font-family:"DM Sans";font-style:normal;font-weight:400;font-display:fallback;src:url('https://example.org/assets/fonts/dm-sans/DMSans-Regular.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:"DM Sans";font-style:italic;font-weight:400;font-display:fallback;src:url('https://example.org/assets/fonts/dm-sans/DMSans-Regular-Italic.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:"DM Sans";font-style:normal;font-weight:700;font-display:fallback;src:url('https://example.org/assets/fonts/dm-sans/DMSans-Bold.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:"DM Sans";font-style:italic;font-weight:700;font-display:fallback;src:url('https://example.org/assets/fonts/dm-sans/DMSans-Bold-Italic.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:"IBM Plex Mono";font-style:normal;font-weight:300;font-display:block;src:url('https://example.org/assets/fonts/ibm-plex-mono/IBMPlexMono-Light.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:"IBM Plex Mono";font-style:normal;font-weight:400;font-display:block;src:url('https://example.org/assets/fonts/ibm-plex-mono/IBMPlexMono-Regular.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:"IBM Plex Mono";font-style:italic;font-weight:400;font-display:block;src:url('https://example.org/assets/fonts/ibm-plex-mono/IBMPlexMono-Italic.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:"IBM Plex Mono";font-style:normal;font-weight:700;font-display:block;src:url('https://example.org/assets/fonts/ibm-plex-mono/IBMPlexMono-Bold.woff2') format('woff2');font-stretch:normal;}
CSS
			,
				'indexed array as input' => array(
					'fonts'    => array(
						array(
							array(
								'font-family'  => 'Piazzolla',
								'src'          => array( 'https://example.org/fonts/piazzolla400.ttf' ),
								'font-style'   => 'normal',
								'font-weight'  => '400',
								'font-stretch' => 'normal',
							),
							array(
								'font-family'  => 'Piazzolla',
								'src'          => array( 'https://example.org/fonts/piazzolla500.ttf' ),
								'font-style'   => 'normal',
								'font-weight'  => '400',
								'font-stretch' => 'normal',
							),
						),
						array(
							array(
								'font-family'  => 'Lobster',
								'src'          => array( 'https://example.org/fonts/lobster400.ttf' ),
								'font-style'   => 'normal',
								'font-weight'  => '400',
								'font-stretch' => 'normal',
							),
							array(
								'font-family'  => 'Lobster',
								'src'          => array( 'https://example.org/fonts/lobster500.ttf' ),
								'font-style'   => 'normal',
								'font-weight'  => '500',
								'font-stretch' => 'normal',
							),
						),
					),
					'expected' => <<<CSS
@font-face{font-family:Piazzolla;font-style:normal;font-weight:400;font-display:fallback;src:url('https://example.org/fonts/piazzolla400.ttf') format('truetype');font-stretch:normal;}
@font-face{font-family:Piazzolla;font-style:normal;font-weight:400;font-display:fallback;src:url('https://example.org/fonts/piazzolla500.ttf') format('truetype');font-stretch:normal;}
@font-face{font-family:Lobster;font-style:normal;font-weight:400;font-display:fallback;src:url('https://example.org/fonts/lobster400.ttf') format('truetype');font-stretch:normal;}
@font-face{font-family:Lobster;font-style:normal;font-weight:500;font-display:fallback;src:url('https://example.org/fonts/lobster500.ttf') format('truetype');font-stretch:normal;}
CSS
					,
				),
			),
		);
	}

	public function get_expected_fonts_for_fonts_block_theme( $key = '' ) {
		static $data = null;

		if ( null === $data ) {
			$uri  = get_stylesheet_directory_uri() . '/assets/fonts/';
			$data = array(
				'fonts'            => array(
					array(
						array(
							'src'          => array( $uri . 'dm-sans/DMSans-Regular.woff2' ),
							'font-family'  => 'DM Sans',
							'font-stretch' => 'normal',
							'font-style'   => 'normal',
							'font-weight'  => '400',
						),
						array(
							'src'          => array( $uri . 'dm-sans/DMSans-Regular-Italic.woff2' ),
							'font-family'  => 'DM Sans',
							'font-stretch' => 'normal',
							'font-style'   => 'italic',
							'font-weight'  => '400',
						),
						array(
							'src'          => array( $uri . 'dm-sans/DMSans-Bold.woff2' ),
							'font-family'  => 'DM Sans',
							'font-stretch' => 'normal',
							'font-style'   => 'normal',
							'font-weight'  => '700',
						),
						array(
							'src'          => array( $uri . 'dm-sans/DMSans-Bold-Italic.woff2' ),
							'font-family'  => 'DM Sans',
							'font-stretch' => 'normal',
							'font-style'   => 'italic',
							'font-weight'  => '700',
						),
					),
					array(
						array(
							'src'          => array( $uri . 'source-serif-pro/SourceSerif4Variable-Roman.ttf.woff2' ),
							'font-family'  => 'Source Serif Pro',
							'font-stretch' => 'normal',
							'font-style'   => 'normal',
							'font-weight'  => '200 900',
						),
						array(
							'src'          => array( $uri . 'source-serif-pro/SourceSerif4Variable-Italic.ttf.woff2' ),
							'font-family'  => 'Source Serif Pro',
							'font-stretch' => 'normal',
							'font-style'   => 'italic',
							'font-weight'  => '200 900',
						),
					),
				),
				'font_face_styles' => <<<CSS
@font-face{font-family:"DM Sans";font-style:normal;font-weight:400;font-display:fallback;src:url('{$uri}dm-sans/DMSans-Regular.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:"DM Sans";font-style:italic;font-weight:400;font-display:fallback;src:url('{$uri}dm-sans/DMSans-Regular-Italic.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:"DM Sans";font-style:normal;font-weight:700;font-display:fallback;src:url('{$uri}dm-sans/DMSans-Bold.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:"DM Sans";font-style:italic;font-weight:700;font-display:fallback;src:url('{$uri}dm-sans/DMSans-Bold-Italic.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:"Source Serif Pro";font-style:normal;font-weight:200 900;font-display:fallback;src:url('{$uri}source-serif-pro/SourceSerif4Variable-Roman.ttf.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:"Source Serif Pro";font-style:italic;font-weight:200 900;font-display:fallback;src:url('{$uri}source-serif-pro/SourceSerif4Variable-Italic.ttf.woff2') format('woff2');font-stretch:normal;}
CSS
				,
			);
		}

		if ( isset( $data[ $key ] ) ) {
			return $data[ $key ];
		}

		return $data;
	}

	public static function get_custom_font_families( $key = '' ) {
		static $data = null;

		$custom_theme_json_fonts = array(
			array(
				'fontFamily' => 'Piazzolla, serif',
				'name'       => 'Piazzolla',
				'slug'       => 'piazzolla',
				'fontFace'   => array(
					array(
						'fontFamily' => 'Piazzolla',
						'src'        => array( 'https://example.org/fonts/piazzolla400.ttf' ),
						'fontStyle'  => 'normal',
						'fontWeight' => '400',
					),
					array(
						'fontFamily' => 'Piazzolla',
						'src'        => array( 'https://example.org/fonts/piazzolla500.ttf' ),
						'fontStyle'  => 'normal',
						'fontWeight' => '400',
					),
				),
			),
			array(
				'fontFamily' => 'Lobster, sans-serif',
				'name'       => 'Lobster',
				'slug'       => 'lobster',
				'fontFace'   => array(
					array(
						'fontFamily' => 'Lobster',
						'src'        => array( 'https://example.org/fonts/lobster400.ttf' ),
						'fontStyle'  => 'normal',
						'fontWeight' => '400',
					),
					array(
						'fontFamily' => 'Lobster',
						'src'        => array( 'https://example.org/fonts/lobster500.ttf' ),
						'fontStyle'  => 'normal',
						'fontWeight' => '500',
					),
				),
			),
		);

		$expected_font_faces = array(
			array(
				array(
					'src'         => array( 'https://example.org/fonts/piazzolla400.ttf' ),
					'font-family' => 'Piazzolla',
					'font-style'  => 'normal',
					'font-weight' => '400',
				),
				array(
					'src'         => array( 'https://example.org/fonts/piazzolla500.ttf' ),
					'font-family' => 'Piazzolla',
					'font-style'  => 'normal',
					'font-weight' => '400',
				),
			),
			array(
				array(
					'src'         => array( 'https://example.org/fonts/lobster400.ttf' ),
					'font-family' => 'Lobster',
					'font-style'  => 'normal',
					'font-weight' => '400',
				),
				array(
					'src'         => array( 'https://example.org/fonts/lobster500.ttf' ),
					'font-family' => 'Lobster',
					'font-style'  => 'normal',
					'font-weight' => '500',
				),
			),
		);

		if ( null === $data ) {
			$data = array(
				'input'    => $custom_theme_json_fonts,
				'expected' => $expected_font_faces,
			);
		}

		if ( isset( $data[ $key ] ) ) {
			return $data[ $key ];
		}

		return $data;
	}

	public static function get_custom_style_variations( $key = '' ) {
		static $data = null;

		$path                   = get_stylesheet_directory() . '/assets/fonts/';
		$uri                    = get_stylesheet_directory_uri() . '/assets/fonts/';
		$expected_font_families = array(
			array(
				array(
					'src'          => array(
						"{$path}dm-sans/DMSans-Regular.woff2",
					),
					'font-family'  => 'DM Sans',
					'font-stretch' => 'normal',
					'font-style'   => 'normal',
					'font-weight'  => '400',
				),
				array(
					'src'          => array(
						"{$path}dm-sans/DMSans-Bold.woff2",
					),
					'font-family'  => 'DM Sans',
					'font-stretch' => 'normal',
					'font-style'   => 'normal',
					'font-weight'  => '700',
				),
			),
			array(
				array(
					'src'          => array(
						"{$path}open-sans/OpenSans-VariableFont_wdth,wght.ttf",
					),
					'font-family'  => 'Open Sans',
					'font-stretch' => 'normal',
					'font-style'   => 'normal',
					'font-weight'  => '400',
				),
				array(
					'src'          => array(
						"{$path}open-sans/OpenSans-Italic-VariableFont_wdth,wght.ttf",
					),
					'font-family'  => 'Open Sans',
					'font-stretch' => 'normal',
					'font-style'   => 'italic',
					'font-weight'  => '400',
				),
			),
			array(
				array(
					'src'          => array(
						"{$path}dm-sans/DMSans-Medium.woff2",
					),
					'font-family'  => 'DM Sans',
					'font-stretch' => 'normal',
					'font-style'   => 'normal',
					'font-weight'  => '500',
				),
				array(
					'src'          => array(
						"{$path}dm-sans/DMSans-Medium-Italic.woff2",
					),
					'font-family'  => 'DM Sans',
					'font-stretch' => 'normal',
					'font-style'   => 'italic',
					'font-weight'  => '500',
				),
			),
		);

		$expected_styles = <<<CSS
@font-face{font-family:"DM Sans";font-style:normal;font-weight:400;font-display:fallback;src:url('{$uri}dm-sans/DMSans-Regular.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:"DM Sans";font-style:normal;font-weight:700;font-display:fallback;src:url('{$uri}dm-sans/DMSans-Bold.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:"Open Sans";font-style:normal;font-weight:400;font-display:fallback;src:url('{$uri}open-sans/OpenSans-VariableFont_wdth,wght.ttf') format('truetype');font-stretch:normal;}
@font-face{font-family:"Open Sans";font-style:italic;font-weight:400;font-display:fallback;src:url('{$uri}open-sans/OpenSans-Italic-VariableFont_wdth,wght.ttf') format('truetype');font-stretch:normal;}
@font-face{font-family:"DM Sans";font-style:normal;font-weight:500;font-display:fallback;src:url('{$uri}dm-sans/DMSans-Medium.woff2') format('woff2');font-stretch:normal;}
@font-face{font-family:"DM Sans";font-style:italic;font-weight:500;font-display:fallback;src:url('{$uri}dm-sans/DMSans-Medium-Italic.woff2') format('woff2');font-stretch:normal;}
CSS;

		if ( null === $data ) {
			$data = array(
				'expected'        => $expected_font_families,
				'expected_styles' => $expected_styles,
			);
		}

		if ( isset( $data[ $key ] ) ) {
			return $data[ $key ];
		}

		return $data;
	}
}
