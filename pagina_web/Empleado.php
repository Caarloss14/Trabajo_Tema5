<?php
class Empleado{
public $nombre;
public $apellido;
public $salario_base;

public function __construct($nombre,$apellido,$salario_base){
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->salario_base = $salario_base;
}
}


class Gerente extends Empleado{
public $bono = 10;
public function __construct($nombre, $apellido, $salario_base){
parent::__construct($nombre,$apellido,$salario_base);
}

public function calcularSalario(){
   return $this->salario_base + ($this->salario_base * $this->bono / 100);
}
}


class Vendedor extends Empleado{
public $comision;


public function __construct($nombre, $apellido, $salario_base){
parent::__construct($nombre,$apellido,$salario_base);
$this->comision = rand(0,10);
}

public function calcularSalario(){
   return $this->salario_base + ($this->salario_base * $this->comision / 100);
}
}


$empleado = new Gerente("Carlos","Sánchez",1300);

echo $empleado->calcularSalario() . "€";

?>