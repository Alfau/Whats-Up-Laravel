<?php 

class SlideshowController extends BaseController{
	function getSlides(){
		$slideshow=Slideshow::all();
		return View::make("home")->with("slideshow",$slideshow);
	}
}

?>