<?php

try {
     $bd = new mysqli('localhost', 'id18736058_root', '{Y2RDGv/d-ET+PxT', 'id18736058_admiria');
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}
/*
if($bd->ping() ) {
    echo 'todo bien';

}else{
    echo $bd->connect_error;
}
*/
