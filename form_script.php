<?php

$con = mysqli_connect ("host", "serwer", "password", "database") or die(mysqli_error($con));
    
    if(isset($_POST['send'])){

        if ($_POST['name'] !='' && (isset($_POST['email']) && $_POST['text'] !='')){
            
            $name = $con->real_escape_string($_POST['name']);
            $email = $con->real_escape_string($_POST['email']);
            $text = $con->real_escape_string($_POST['text']);
            
                $sql = "INSERT INTO db_form (name, email, text) VALUES ('".$name."','".$email."', '".$text."')";
    
                mysqli_query($con, $sql);
    
                $lastId = mysqli_insert_id($con);

            echo    "<p style='
                    color: #90EE90;
                    font-size: 2rem;
                    padding-top: 2rem;'> 

                    Wiadomość została wysłana i zapisana w bazie danych. </p>";

        }else {
            echo "<p style='
            color: crimson;
            font-size: 2rem;
            padding-top: 2rem;'> 
            
            Uzupełnij wszystkie pola w formularzu. </p>";
        }
        
    }
        
?>