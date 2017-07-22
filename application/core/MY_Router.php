<?php
(defined('BASEPATH')) or exit('No direct script access allowed');

/* load the HMVC_Router class */
require APPPATH . 'third_party/HMVC/Router.php';

class MY_Router extends HMVC_Router {
	
	function _parse_routes() {
        // Apply the current module's routing config
        // CI v3.x has URI starting at segment 1
		$segstart = (intval(substr(CI_VERSION,0,1)) > 2) ? 1 : 0;

        if ($module = $this->uri->segment($segstart)) {
            foreach ($this->config->item('modules_locations') as $location) {
                if (is_file($file = $location . $module . '/config/routes.php')) {
                    include ($file);

                    $route = (!isset($route) or !is_array($route)) ? array() : $route;
                    $this->routes = array_merge($this->routes, $route);
                    unset($route);
                }
            }
        }
		

		foreach ($this->config->item('modules_locations') as $modules_path) {		
			$modules = scandir($modules_path);
			foreach($modules as $module)
			{
				if($module === '.' || $module === '..') continue;
				if(is_dir($modules_path) . '/' . $module)
				{
					$routes_path = $modules_path . $module . '/config/routes.php';
					if(file_exists($routes_path))
					{
						require($routes_path);

						$route = (!isset($route) or !is_array($route)) ? array() : $route;
						$this->routes = array_merge($this->routes, $route);
						unset($route);
					}
					else
					{
						continue;
					}
				}
			}
		}
        // Let parent do the heavy routing
        return parent::_parse_routes();
		
    }
}