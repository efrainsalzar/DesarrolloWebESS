<?php
class Cola {

    private $primero;
    private $ultimo;
    private $elemento;
    function __construct()
    {
        $this->primero = 0;
        $this->ultimo = 0;
        $this->elemento = array();
    }
    public function insertar($valor)
    {
        $this->elemento[$this->ultimo] = $valor;
        $this->ultimo++;
    }
    public function eliminar()
    {
        if($this->primero == $this->ultimo)
        {
            return "La cola esta vacia";
        }
        else
        {
            $valor = $this->elemento[$this->primero];
            $this->primero++;
            return $valor;
        }
    }
   
    public function mostrar()
    {
        if($this->primero == $this->ultimo){
            return "La cola esta vacia";
        }
        else{
            for($this->i=$this->primero; $this->i < $this->ultimo; $this->i++){
                echo $this->elemento[$this->i]. "<br>";
            }
        }
    }
}

?>