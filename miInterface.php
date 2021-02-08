<?php
//ejemplo de aplicacion para realizar, añadir o eliminar pedidos
interface miInterface {
public function pedidosListar();
//aqui vamos listando los métodos a emplear 
}
//el metodo se declara fuera del método, se hace dentro de una clase
class pedidos implements miInterface{
    public function pedidosListar() {
      //y aquí declaramos los métodos y vamos añadiendo la funcionalidad
    }
}

//de esta manera estructuramos los métodos, creando una especie de plantilla,
//para que cosas que se hacen con la misma estructura pero que tienen diferente 
//funcionalidad, tengan un orden.