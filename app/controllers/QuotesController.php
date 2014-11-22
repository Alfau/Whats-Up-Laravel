<?php 

class QuotesController extends BaseController{
	function getQuotes(){
		$quotes=Quotes::orderbyraw("RAND()")->find(1);
		return View::make("home")->with("Quote",$quotes);
	}
}

?>