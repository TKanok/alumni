<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common extends CI_Core {

	public function index()
	{
		if (!function_exists('get_config')) {
            function & get;
            _config($replace = array()) {
                static $_config;
         
                if (isset($_config)) {
                    return $_config[0];
                }
         
                // Is the config file in the environment folder?
                if (!defined('ENVIRONMENT') OR!file_exists($file_path = APPPATH.
                        'config/'.ENVIRONMENT.
                        '/config.php')) {
                    $file_path = APPPATH.
                    'config/config.php';
                }
         
                // Fetch the config file
                if (!file_exists($file_path)) {
                    exit('The configuration file does not exist.');
                }
         
                require($file_path);
         
                // Does the $config array exist in the file?
                if (!isset($config) OR!is_array($config)) {
                    exit('Your config file does not appear to be formatted correctly.');
                }
         
                // Are any values being dynamically replaced?
                if (count($replace) > 0) {
                    foreach($replace as $key => $val) {
                        if (isset($config[$key])) {
                            $config[$key] = $val;
                        }
                    }
                }
         
                return $_config[0] = & $config;
            }
        }
	}
}