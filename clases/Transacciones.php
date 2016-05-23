<?php
class Transacciones { 
    private $nidacceso;
	private $nomtabla;
	private $accion;
	private $descripcion;
        private $nidusuario;
	private $queryins;
	function __construct($nidacce=NULL,$nomtab=NULL,$acci=NULL,$descri=NULL, $nidusuario=NULL){
		$this->nidacceso=$nidacce;
		$this->nomtabla=$nomtab;
		$this->accion=$acci;
		$this->descripcion=$descri;
                $this->nidusuario=$descri;
                
		function Idacceso(){
		return $this->nidacceso;
	}
	
	function Ingreso(){
		
		$db=dbconnect();
		/*Definicion del query que permitira ver el registro de transacciones*/
		
			$sqlins="Insert into from longtransacciones(IDACCESO, Nomtable, accion, "
                                . "descripcion) values (:id, :nomtable, :accion, :descripcion)";
		
			/*Preparacion SQL*/
			$this->queryins=$db->prepare($sqlsel);
		
			$this->queryins->execute();
		
		
		
		/*queryins->bindParam(:id, this)*/
		}
	}
}

?>