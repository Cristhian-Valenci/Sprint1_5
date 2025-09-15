<?php 

abstract class Shape {
    protected $alto = 0;
    protected $ancho = 0;

    public function __construct(float $alto, float $ancho) {
        $this->alto = $alto;
        $this->ancho = $ancho;
    }

    public function getAlto() : float {
        return $this->alto;
    }
    public function getAncho() : float {
        return $this->ancho;
    }
    
    abstract public function calcularArea() : float;
}

class Triangulo extends Shape {
   
    public function calcularArea() : float {
        return ($this->alto * $this->ancho) / 2;
    }
}

class Rectangulo extends Shape {

    public function calcularArea() : float {
        return $this->alto * $this->ancho;
    }
}

$triangulo = new Triangulo(3,9.2);
$rectangulo = new Rectangulo(5,8);

echo "El area del rectangulo es: " . $rectangulo->calcularArea();
echo "El area del triangulo es: " . $triangulo->calcularArea();


?>