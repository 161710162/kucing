<?php

class kucing{
	public $suara;
	public $kaki;
public function __construct ($suara,$kaki){
$this->suara=$suara;
$this->kaki=$kaki;
}
public function set_suara($suara){
$this->suara=$suara;
}
public function get_suara(){
 return $this->suara;
}
public function set_kaki($kaki){
return $this->kaki=$kaki;
}
public function get_kaki(){
 return $this->kaki;
}

}

?>