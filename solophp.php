<?php
$id= $_GET["id"];
session_start();  
//$lista_ids[]= $id; 

if (is_numeric($id)){
    if ($id%2==0 and ((int)$id>=2 and (int)$id<=10 ) ){   
       $_SESSION['lista'][]=$id ;
        echo 'el nuevo valor es:'.$id.'<br/>';
        echo 'valores ya ingresados:'.'</br>';
        for($i=0; $i<count($_SESSION['lista']); $i++){
            $aux = $_SESSION['lista'][$i];
            echo'<br/>';
            print_r($aux);

        }
    }
    else echo "ingrese un numero par entero entre el 0 y el 10";
}
else
    echo "ingrese un numero."
?>

<html>
    
</html>