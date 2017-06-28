<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
   <head> 
    <script>
        function pasar(metodo){
            var id=document.getElementById("variable").value;
            if (metodo=='php') 
              var url= 'solophp.php?id='+id;
            else
              var url= 'solojquery.php?id='+id;  
          
            window.open(url);
        }

    </script>
    
    </head>
    
    <body>
      <center>  
        <p>INGRESE POR FAVOR UN NUMERO</p>
        <input type="text" id="variable">
        <div>
         <input type="button" value="Solo PHP" onclick="pasar('php')"/>
        
         <input type="button" value="Solo JQ" onclick="pasar('jq')"/>
        </div>
      </center>  
    </body>
</html>
