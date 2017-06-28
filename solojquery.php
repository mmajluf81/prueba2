<?php

?>

<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    
         <script>
            $.parametrosGet = function(name){
                var resultado = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
                 if (resultado==null){
                          return null;
                   }
                 else{
                     return decodeURI(resultado[1]) || 0;
                    }
                }
                
             function listar_valores(){
                 var id_param =$.parametrosGet('id');               
                 document.cookie = "idcookie="+(((document.cookie.split(";"))[0]).split("="))[1] +"*"+id_param+";";                
                 var nuevo = "<div>El valor ingresado es:" + id_param; + "<br/></div>"
                 $('body').append(nuevo);
                 nuevo= "<div>La lista de valores ingresados es: <br/></div>"
                 $('body').append(nuevo);
                 var datos=((((document.cookie.split(";"))[0]).split("="))[1]).split("*");
                 for(i=1; i< datos.length; i++ ){
                     
                     $('body').append(datos[i]);
                     $('body').append('<br/>');
                 }
                 
             }             
                
        </script>
        
    </head>
    <body>
        <script>
            if(parseInt($.parametrosGet('id'))){
                 if(parseInt($.parametrosGet('id')) % 2){
                     
                       $('body').append("debe ingresar valores pares");
                 }
                 else{
                     
                       if (parseInt($.parametrosGet('id')) < 0 || parseInt($.parametrosGet('id'))>10){
                           $('body').append("debe ingresar valores entre 0 y 10");
                       }
                       else{
                           
                            listar_valores();
                           
                       }
                     
                 }
                
            }
            
            else{
                
                $('body').append("debe ingresar valores numericos");
            }
        </script>
    </body>
</html>
