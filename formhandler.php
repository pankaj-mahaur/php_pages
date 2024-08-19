<?php
    // var_dump($_SERVER["REQUEST_METHOD"]);
    // if (isset($_POST["submit"])) {
    //     # code...
    // }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $firstname = htmlspecialchars($_POST["firstname"]); 
        $lastname = htmlspecialchars($_POST["lastname"]); 
        $favouritegame = htmlspecialchars($_POST["favouritegame"]); 

        if(empty($firstname)){
            exit();
            header("location: ../index.php");
        }

        echo "These are the data that the user submitted:";
        echo "<br>";
        echo "First name: ". $firstname;
        echo "<br>";
        echo "Last name: ". $lastname;
        echo "<br>";
        echo "Favourite game: ". $favouritegame;

        header("Location: ../index.php");
    
    
    
    }

    else{
        header("Location:../index.php");
    }



?>    