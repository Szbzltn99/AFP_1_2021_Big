<?php
function get_g(){
    if(!filter_has_var(INPUT_GET, 'G')){
        die('Helytelen paraméter!');
    }
    $id = filter_input(INPUT_GET, 'G', FILTER_VALIDATE_INT);
    if($id === false){
        die('Helytelen paraméter!');
    }
    if($id <= 0){
        die('Az id legalább 1!');
    }
    return $id;

}
$id = get_g();