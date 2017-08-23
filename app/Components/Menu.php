<?php 
namespace App\Components;
/**
* Clase para generar panels
*/
class Menu 
{
	public function create($array, $index){
		
		$views[0] = view('HtmlGenerator.menu.open');
		$i=1;
		foreach ($array as $key => $obj) {
			if($index == $key){
				$array2 = array('active' => 'active');
				$resul = array_merge($obj, $array2);
			}
			else{
				$resul = $obj;
			}
			
			 $views[$i]= view('HtmlGenerator.menu.body', $resul);

			$i++;	
		}
		$views[$i] = view('HtmlGenerator.menu.close');
		//dd($views);
		return $views;
	}

//$arrayName = array( 0 => array('title' => 'inicio', 'route' => 'inicio.almace.categoria.index'), );
}