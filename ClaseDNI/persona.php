<?php
    class Persona{
        private $nombre;
        private $apellidos;
        private $numeroId;
        private $fechaNacimiento;

        public function __construct($nombre, $apellidos, $numeroId, $fechaNacimiento) {
            //__ <- indica que es un método reconocido por PHP
            $this->setNombre($nombre);
            $this->setApellidos($apellidos);
            $this->setNumeroId($numeroId);
            $this->setFechaNacimiento($fechaNacimiento);
            echo "Objketo creado: " . $this->nombre . "<br>";
        }
        public function __destruct(){
            echo "<br>El objeto ha sido destruido";
        }


        public function getNombre(){
            return $this->nombre;//$this hace referencia al objeto actual
                                 //$this->nombre da el valor del private $nombre de la clase
        }
        public function getApellidos(){
            return $this->apellidos;
        }
        public function getNumeroId(){
            return $this->numeroId;
        }
        public function getfechaNacimiento(){
            return $this->fechaNacimiento;
        }


        public function setNombre($nombre){
            $this->nombre = $nombre;
        }   
        public function setApellidos($apellidos){
            $this->apellidos=$apellidos;
        }
        public function setNumeroId($numeroId){
            $this->numeroId=$numeroId;
        }
        public function setFechaNacimiento($fechaNacimiento){
            $this->fechaNacimiento=$fechaNacimiento;
        }  
    }

    $persona1 = new Persona("Carlos", "García", "12345678A", "2004-05-20");

    echo $persona1->getNombre();
    echo "<br>";
    echo $persona1->getApellidos();
    echo "<br>";
    echo $persona1->getNumeroId();
    echo "<br>";
    echo $persona1->getFechaNacimiento();

?>