<?php 

    abstract class Persona{
        protected $nombre;
        protected $apellido;
        protected $dni;
        protected $edad;
        protected $email;
        protected $telefono;

        public function __construct($nombre, $apellido, $dni, $edad, $email, $telefono){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->dni = $dni;
            $this->edad = $edad;
            $this->email = $email;
            $this->telefono = $telefono;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getApellido(){
            return $this->apellido;
        }

        public function getDni(){
            return $this->dni;
        }

        public function getEdad(){
            return $this->edad;
        }

        public function getEmail(){
            return $this->email;
        }
        
        public function getTelefono(){
            return $this->telefono;
        }

        abstract public function mostrarDatos();
    }