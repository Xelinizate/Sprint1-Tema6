<?php

    echo "Treballant amb màgic constants <br>";
    echo "<br>";

    echo __LINE__ . "<br>";

    
    function muestraRespuesta(){
        echo __FUNCTION__;
    }

    muestraRespuesta() . "<br>";

    class test {
        function proba(){
            echo __METHOD__;
                
            }

    }

    $respon = new test();
    $respon-> proba() . "<br>";

    trait testTrait{
        function nouTest(){
            echo "<br> Iniciació de proba";
        }
    }

    class testejant{
        use testTrait;

        function resultat(){
            echo __Trait__;
        }

    }

    $obj=new testejant;
    $obj-> nouTest();



?>