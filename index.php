<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 
    <head> 
        <title>Desplegant una aplicació PHP sobre Heroku</title> 
    </head> 
    <body> 
        <?php 
            echo "Afegint Cookies<br>"; 
            echo "Sóc el desenvolupador daorab"; 
            setcookie("nom", "Daniel Ortega", time()+3600, "/", "", 0); 
            setcookie("edat", "22", time()+3600, "/", "", 0); 
            setcookie("cicle", "DAW", time()+3600, "/", "", 0); 
            setcookie("curs", "2n", time()+3600, "/", "", 0); 
            setcookie("any", "2016­2017", time()+3600, "/", "", 0);            
        ?>  
    </body>    
 
