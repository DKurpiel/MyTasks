<?php

if (isset($_POST['submit'])) 
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    $result = "";

    if ($num1 != "" || $num2 != "" )
    {
        switch ($operator)
        {
            case "None":
                 "Wybierz opcje";
                break;
            case "+":
                 $result = $num1 + $num2;
                break;
            case "-":
                 $result = $num1 - $num2;
                break;
            case "*":
                 $result = $num1 * $num2;
                break;            
            case "/":
                if ($num1 == 0 || $num2 == 0)
                {
                    $result = 'błąd';
                } else {
                    $result = $num1 / $num2;
                }               
        }
    }

}

?>