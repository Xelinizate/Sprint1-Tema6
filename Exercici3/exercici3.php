<?php

    trait cursPhp{
        function estudis(){
            echo __TRAIT__ . "<br>";
        }
    }

    trait cursMysql{
        function estudisExtra(){
            echo __TRAIT__;
        }
    }

    class formacio{
        
        use cursPhp, cursMysql;

    }

    $obj = new formacio();

    $obj->estudis();
    $obj->estudisExtra();


?>