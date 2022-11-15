<?php/** * The WPDashboardTwitter_Helper Class * * @package 	WordPress_Plugins * @subpackage 	WPDashboardTwitter *//*** The WPDashboardTwitter_Helper class* holding all of the compatibility and* helper methods** @package 		WordPress_Plugins* @subpackage 	WPDashboardTwitter* @since 		0.8* @author 		scripts@schloebe.de*/class WPDashboardTwitter_Helper extends WPDashboardTwitter {	/** 	* Class Constructor 	* 	* @since	0.8 	* @author	scripts@schloebe.de 	*/	function __construct() {		parent::__construct();	}	/** 	* Retrieve the url to the plugins directory or to a specific file within that directory. 	* The original function has been changed in 2.8 but we need it for 2.7 as well 	* so we can pass a second argument 	* 	* @since	0.8 	* @author	scripts@schloebe.de 	*/	public static function plugins_url($path = '', $plugin = '') {		if( version_compare($GLOBALS['wp_version'], '2.7.999', '>') ) {			return plugins_url($path, $plugin);		} else {			$scheme = ( is_ssl() ? 'https' : 'http' );			if ( $plugin !== '' && preg_match('#^' . preg_quote(WPMU_PLUGIN_DIR . DIRECTORY_SEPARATOR, '#') . '#', $plugin) ) {				$url = WPMU_PLUGIN_URL;			} else {				$url = WP_PLUGIN_URL;			}			if ( 0 === strpos($url, 'http') ) {				if ( is_ssl() )					$url = str_replace( 'http://', "{$scheme}://", $url );			}			if ( !empty($plugin) && is_string($plugin) ) {				$folder = dirname(plugin_basename($plugin));				if ('.' != $folder)					$url .= '/' . ltrim($folder, '/');			}			if ( !empty($path) && is_string($path) && strpos($path, '..') === false )				$url .= '/' . ltrim($path, '/');			return apply_filters('plugins_url', $url, $path, $plugin);		}	}	/** 	* Wrapper for the js_escape function 	* 	* @since	1.1.5 	* @return	string $services 	* @author	scripts@schloebe.de 	*/	public static function esc_js( $str ) {		return ( version_compare($GLOBALS['wp_version'], '2.7.999', '>') ) ? esc_js( $str ) : js_escape( $str );	}		/** 	* Wrapper for the js_escape function 	*  	* @since	1.1.5 	* @return	string $services 	* @author	scripts@schloebe.de 	*/	public static function esc_attr( $str ) {		return ( version_compare($GLOBALS['wp_version'], '2.7.999', '>') ) ? esc_attr( $str ) : attribute_escape( $str );	}		/** 	* Wrapper for the esc_html function 	*  	* @since	1.1.5  	* @return	string $services 	* @author	scripts@schloebe.de 	*/	public static function esc_html( $str ) {		return ( version_compare($GLOBALS['wp_version'], '2.7.999', '>') ) ? esc_html( $str ) : wp_specialchars( $str );	}	/** 	* Encrypts a string for storing in the db 	* 	* @since 		0.8.3 	* @param 		string	$str 	* @return 		string	$str 	* @author 		scripts@schloebe.de 	*/	public static function encrypt( $str ) {		global $wp_default_secret_key;		$str = base64_encode( $str . 'wpdtwoelfi' ); /* The evil w-word again. :-( */		return $str;	}}?>