<?php

/**
* 
*/
class NavTab 
{
	public function openMenu(){
		return view('HtmlGenerator.navtab.openMenu')->render();
	}

	public function optionMenu($id, $status = ""){
		$name = 'nav_'.$id
		return view('HtmlGenerator.navtab.optionMenu',compact('id', 'name', 'status') )->render();
	}

	public function closeMenu(){
		return view('HtmlGenerator.panel.closeMenu')->render();
	}


	public function openConten($id){
		return view('HtmlGenerator.navtab.openConten', compact('id') )->render();
	}

	public function openConten($name, $status = 0){

		if($status == 0){
			$status = "";
		}
		else if($status == 1)
			$status = 'active in';

		return view('HtmlGenerator.navtab.optionConten', compact('name', 'status'))->render();
	}

	public function closeConten(){

	}


	public function closeConten(){
		return view('HtmlGenerator.navtab.closeConten')->render();
	}
}