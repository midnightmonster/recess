<?php
Library::import('recess.framework.Application');

class RecessToolsApplication extends Application {
	
	public $codeTemplatesDir;
	
	public function __construct() {
		
		$this->name = 'Recess Tools';
		
		$this->viewsDir = $_ENV['dir.recess'] . 'recess/apps/tools/views/';	
		
		$this->assetUrl = $_ENV['url.base'] . 'recess/recess/apps/tools/public/';
		
		$this->codeTemplatesDir = $_ENV['dir.recess'] . 'recess/apps/tools/templates/';
		
		$this->modelsPrefix = 'recess.apps.tools.models.';
		
		$this->controllersPrefix = 'recess.apps.tools.controllers.';

		$this->modelsPrefix = 'recess.apps.tools.models.';
		
		$this->routingPrefix = 'recess/';
		
	}
}

?>