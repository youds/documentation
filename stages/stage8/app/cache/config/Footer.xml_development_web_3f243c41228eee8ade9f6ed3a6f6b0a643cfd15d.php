<?php

// This is a compiled Agavi configuration file
// Compiled from: /Users/sth/Sites/demoapp/app/modules/Widgets/cache/Footer.xml
// Generated by: AgaviCachingConfigHandler
// Date: 2009-09-16T14:38:36+0000

$configs = array (
  '*' => 
  array (
    'lifetime' => NULL,
    'groups' => 
    array (
    ),
    'views' => NULL,
    'action_attributes' => 
    array (
    ),
    'output_types' => 
    array (
    ),
  ),
);
if(isset($configs[$index = $container->getRequestMethod()]) || isset($configs[$index = "*"])) {
	$isCacheable = true;
	$config = $configs[$index];
	if(is_array($config["views"])) {
		foreach($config["views"] as &$view) {
			if(!is_array($view)) {
				if($view === null) {
					$view = array(
						"module" => null,
						"name" => null
					);
				} else {
					$view = array(
						"module" => $moduleName,
						"name" => AgaviToolkit::evaluateModuleDirective(
							$moduleName,
							"agavi.view.name",
							array(
								"actionName" => $actionName,
								"viewName" => $view,
							)
						)
					);
				}
			}
		}
	}
}

?>