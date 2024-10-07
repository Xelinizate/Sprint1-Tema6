<?php

   class Usuari{
    private $dades=[];

    public function __set($name, $value){
        $this->dades[$name] = $value;
        
    }

    public function mostrarDades(){
        return $this->dades;
    }
   }

   $usuari = new Usuari();
   $usuari->name = 'Adriana';
   $usuari->value = 37;

   print_r($usuari->mostrarDades());
   echo "<br>";

   class Calculadora{
    public function __call($name, $arguments){
        switch ($name){
            case 'suma':
                return array_sum($arguments);
            case 'multiplicacio':
                return array_product($arguments);
            default:
                return "Operació no existeix.";
        }
        
    }
   }

   $calcul = new Calculadora();
   echo $calcul->suma(4,5,8,1) . "<br>";
   echo $calcul->multiplicacio(3,6,7) . "<br>";
   echo $calcul->resta(9,2) . "<br>";

?>