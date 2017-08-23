<?php 
namespace App\Components;
/**
* Clase para generar panels
*/
class Panel
{

	public function open($title, $design, $colums){
		if($title != null ){
			return view('HtmlGenerator.panel.open', compact('title', 'design', 'colums') )->render();
		}
		else{
			return view('HtmlGenerator.panel.open', compact('design', 'colums') )->render();
		}
	}

	public function close(){
		return view('HtmlGenerator.panel.close')->render();
	}

}