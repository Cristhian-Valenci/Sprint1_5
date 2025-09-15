<?php 

interface Shape {

    public function calcularArea() : float;
}

class Triangulo implements Shape {

    private $alto;
    private $ancho;

    public function __construct(float $alto, float $ancho) {
        $this->alto = $alto;
        $this->ancho = $ancho;
    }

    public function calcularArea()  : float {
        return ($this->alto * $this->ancho) / 2;
    }
}

class Rectangulo implements Shape {

    private $alto;
    private $ancho;

    public function __construct(float $alto, float $ancho) {
        $this->alto = $alto;
        $this->ancho = $ancho;
    }

    public function calcularArea()  : float {
        return $this->alto * $this->ancho;
    }
}

class Circulo implements Shape {

    private const PI = 3.14;
    private $radio;

    public function __construct(float $radio) {
      $this->radio = $radio;
    }

    public function calcularArea() : float {
        return self::PI * ($this->radio * $this->radio);
        
    }
}

$rectangulo = new Rectangulo(4.5,6,8);
$triangulo = new Triangulo(3,7);
$circulo = new Circulo(5);

echo "El area del rectangulo es: " . $rectangulo->calcularArea();
echo "El area del triangulo es: " . $triangulo->calcularArea();
echo "El area del circulo es: " . $circulo->calcularArea();

?>