<?php 
namespace App\Components;
/**
* Clase para generar panels
*/
class Modal 
{
	//@override
	public function open($id, $size, $title = null, $titleSize = null){
		return view('HtmlGenerator.modal.open', compact('id', 'size', 'title', 'titleSize') )->render();
	}

	//@override
	public function close(){
		return view('HtmlGenerator.modal.close')->render();
	}
	
	public function openFoot(){
		return view('HtmlGenerator.modal.openFooter')->render();
	}

	public function closeFoot(){
		return view('HtmlGenerator.modal.closeFooter')->render();
	}

}