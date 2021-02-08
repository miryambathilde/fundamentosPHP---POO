<?php
//creamos la clase y dentro definimos las propiedades con valores por defecto
class coches{
    public $nombre = "Nombre del modelo";
    public $precio = 00;
        
    //declaracion del METODO CONSTRUCTOR, pasamos por parametro las propiedades
    //muy importante pasar la PROPIEDAD mediante PARAMETROS, si no, no funciona
    function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
//una vez que tenemos las propiedades lo que hacemos es crear un método
    public function fichaCoche() {
        return "Modelo: ". $this->nombre. " Precio: ".$this->precio;
    }   
}
//clase con herencia extends para que coja la herencia de coches//
class industrial extends coches {
    public $licencia;
    //ejemplo de 'static'
    static $terreno = "Agricola";
    //metodo constructor con la nueva propiedad
        function __construct($nombre, $precio, $licencia) {
            //aqui le decimos quien es el padre del que hereda el metodo constructor
            parent::__construct($nombre, $precio);
            //añadimos la propiedad nueva de nueva clase que hereda
            $this->licencia = $licencia;
    }
    //añadimos la funcion de fichaChoche concatenando la propiedad de licencia
    public function fichaCoche() {
        return "Modelo: ". $this->nombre. " Precio: ".$this->precio. " Licencia: ".$this->licencia;
    } 
}
//instanciamos la clase y aquí vamos modificando los valores segun necesitemos
//$turismo1 = new coches('Seat Ibiza', 5780);
//$turismo2 = new coches('Ford Focus', 7790);
//añadimos un nuevo tipo de vehiculo industrial
//$industrial = new industrial ('Ford Tourneo', 7432, "No requiere de licencia");
//hacemos un echo a la clase y al método que quiero ejecutar
//echo $industrial->fichaCoche();
//static: accedemos a la propiedad sin instanciar la clase
echo industrial::$terreno;



