<?php 

class UsuarioModel{

    //Propiedades 
    private $cedula;
    private $clave; 
    private $nombre;
    private $apellido;
    private $email;

    //contructor
    public function __construct(string $cedula,string $clave,string $nombre, string $apellido,string $email){
        if(empty(trim(string: $cedula))){
            throw new InvalidArgumentException(message: 'El campo cedula no puede estar vacio');
        }

        $resultado = $this-> validarClave($clave);
        if(!$resultado["resultado"]){
            throw new InvalidArgumentException(message: $resultado["mensaje"]);
        }

        if(empty(trim(string: $nombre))){
            throw new InvalidArgumentException(message: 'El campo cedula no puede estar vacio');
        }

        if(empty(trim(string: $apellido))){
            throw new InvalidArgumentException(message: 'El campo cedula no puede estar vacio');
        }

        $this->cedula = $cedula;
        $this->clave = $clave;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        
    }

    private function validarClave(string $clave): array {
    if(empty(trim(string: $clave))){
        $mesaje = "La calve es obligatiria";
        return array ("resultado" => false, "mensaje" => $mesaje);
    }

    if(strlen($clave) <= 10){
        $mesaje = "La clave dete tener mas de 10 caracteres<br>";
        return array("resultado" => false, "mensaje" => $mesaje);
    }
    return array ("resultado" => true, "mensaje" => "Clave valida");
    }


    public function getCedula(): string {
        return $this-> cedula;
    }

    public function getClave(): string {
        return $this-> clave;
    }

    public function getNombre(): string {
        return $this-> nombre;
    }

    public function getApellido(): string {
        return $this-> apellido;
    }  

    public function getEmail(): string {
        return $this-> email;
    }

    public function setEmail(string $email): void {
        $this-> email = $email;
    }
    
}