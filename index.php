<?php
    function mult($m){
        $res='';
            for ($i=1; $i<=10; $i++){
                $res=$res. ' ' .$m. ' x ' .$i. ' = ' .$m*$i. '<br>';
        }
        return $res;
    }
?>

<! DOCTYPE html>
<html>
    <head>
        <title>TABLE</title>
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet" href=".assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="./assets/css/style.css">
    </head>
    <body>
        <div class="row">
                <?php 
                for ($m=1; $m<=900;$m++){
                    echo '<div class="col-md-2 text-center"> <br>';
                    echo 'table '.$m. '<br>';
                    echo mult($m);
                    echo '</div>';
                }
                 ?> 
        </div>  
    </body>    
 </html>
