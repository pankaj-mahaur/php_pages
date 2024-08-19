<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Document</title>
</head>

<body>
    <div class="main">
        <!-- form -->
        <div class="container">
            <form action="formhandler.php" method="POST">
                <label class="label" for="firstname">Firstname?</label>
                <input required class="input" type="text" id="firstname" name="firstname" placeholder="FirstName...">

                <label class="label" for="lastname">Lastname?</label>
                <input required class="input" type="text" id="lastname" name="lastname" placeholder="LastName...">

                <label class="label" for="favouritegame">Favourite game?</label>
                <select class="input" name="favouritegame" id="favouritegame">
                    <option value="none">None</option>
                    <option value="PUNG">PUBG</option>
                    <option value="CODM">CODM</option>
                    <option value="BRAWLSTAR">BRAWLSTAR</option>
                </select>

                <button class="btn" name="submit" type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>

<?php







































// echo "Pankajmahaur12345";

// if (isset($_POST["submit"])) {
//     $user = $_POST["txtuser"];
//     $pass = $_POST["txtpass"];

//     echo $user;
//     echo $pass;

//     if (strcmp($user, "Pankaj") == 0 and strcasecmp($pass, "Aligarh") == 0)
//         // echo "Your are valid user";
//         header("Location:hello.html");
//     else
//         echo "You are invalid user";
// }







?>