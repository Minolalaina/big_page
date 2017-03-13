<?php
    function mult(){
        $res='';
        for ($i=2; $i<=3;$i++){
             for ($j=1; $j<=10; $j++){
                $res=$res. ' ' .$i. ' x ' .$j. ' = ' .$i*$j. '<br>';
            }
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
            <div class="col-md-3 table1 text-center">
                <?php 
                echo mult(2);
                 ?>
            </div>
            <div class="col-md-3 table2 text-center">
                <?php 
                echo mult(3);
                 ?>
            </div>
            <div class="col-md-3 table3 text-center">
                <?php 
                echo mult(4);
                 ?>
            </div>
            <div class="col-md-3 table4 text-center">
                <?php 
                echo mult(5);
                 ?>
            </div>  
        </div>  
    </body>    
 </html>
