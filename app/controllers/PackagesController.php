<?php 

class PackagesController extends BaseController{
	public function getIndex(){
		$packages=Packages::all();
		
		return Response::json($packages);
	}
}

?>