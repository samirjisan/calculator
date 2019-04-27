<?php
        /*Sum*/
        if(isset($_POST['sum'])){
            if(!empty($_POST['no1']) && !empty($_POST['no2'])){
                function getSum($n1,$n2){
                echo "<h1 style='color:black;'>Summation: ".($n1+$n2)."</h1>";
                }
                getSum($_POST['no1'], $_POST['no2']);
            }
            else{
                echo "<h2 style='color:red;'>All Field Required...</h2>";
            }
        }
        /*Subs*/
        if(isset($_POST['subs'])){
            if(!empty($_POST['no1']) && !empty($_POST['no2'])){
                function getSubs($n1,$n2){
                echo "<h1 style='color:black;'>Substraction: ".($n1-$n2)."</h1>";
                }
                getSubs($_POST['no1'], $_POST['no2']);
            }
            else{
                echo "<h2 style='color:red;'>All Field Required...</h2>";
            }
        }
        /*Multy*/
        if(isset($_POST['multy'])){
            if(!empty($_POST['no1']) && !empty($_POST['no2'])){
                function getMulty($n1,$n2){
                echo "<h1 style='color:black;'>Multiplication: ".($n1*$n2)."</h1>";
                }
                getMulty($_POST['no1'], $_POST['no2']);
            }
            else{
                echo "<h2 style='color:red;'>All Field Required...</h2>";
            }
        }
        /*Div*/
        if(isset($_POST['div'])){
            if(!empty($_POST['no1']) && !empty($_POST['no2'])){
                function getDiv($n1,$n2){
                echo "<h1 style='color:black;'>Division: ".($n1/$n2)."</h1>";
                }
                getDiv($_POST['no1'], $_POST['no2']);
            }
            else{
                echo "<h2 style='color:red;'>All Field Required...</h2>";
            }
        }
        ?>

