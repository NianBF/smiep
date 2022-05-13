<?php
	class Categoria{
		private $id_cat;
		private $nCategoria;
		
 
		function __construct(){}
 
		public function getnCategoria(){
		return $this->nCategoria;
		}
 
		public function setnCategoria($nCategoria){
			$this->nCategoria = $nCategoria;
		}
 
		public function getid_Cat(){
			return $this->id_cat;
		}

		public function setid_cat($id_cat){
			$this->id_cat = $id_cat;
		}
 
	}
?>