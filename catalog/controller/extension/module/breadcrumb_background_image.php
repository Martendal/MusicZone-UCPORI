<?php  
/* 
Version: 1.0
Author: foodish
Website: #
*/

class ControllerExtensionModuleBreadcrumbBackgroundImage extends Controller {
	public function index($setting) {
		$data['background_color'] = $setting['background_color'];
		$data['background_image'] = $setting['background_image'];
		$data['background_image_position'] = $setting['background_image_position'];
		$data['background_image_repeat'] = $setting['background_image_repeat'];
		
		return $this->load->view('extension/module/breadcrumb_background_image.tpl', $data);
	}
}
?>