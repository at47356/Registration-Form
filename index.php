
<?php
    include("database.php");
    

    //--------------SELECTING DATA AND DISPLAYING FROM DATABASE
    /* $sql = "SELECT * FROM users ";
    $result = mysqli_query($conn, $sql); 

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row["id"] . "<br>";
            echo $row["user"] . "<br>";
            echo $row["reg_date"] . "<br>";
        }
    }
    else {
        echo "no user found";
    }
    */
    //-------------ADDING A NEW USER-----------
    /* $username = "Patrick";
    $password = "rock";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (user, password)
            VALUES ('$username','$hash')";
    
    try{
        mysqli_query($conn, $sql);
        echo "User is now registered";
    } catch (mysqli_sql_exception){
        echo"Could not register user";
    }
    */
    //------------------------------------------------

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    
    <title>Register Page</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <h2>Welcome to TasteBook</h2>
        <label for="username">Username:</label> <br>
        <input type="text" name="username"><br>
        <label for="password">Password:</label> <br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="Register" class="submit">
    </form>
</body>
</html>

<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($username)){
            echo "Please enter a username";
        }
        elseif(empty($password)){
            echo "Please enter a password";
        } 
        else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";
            

        }
        try{
            mysqli_query($conn, $sql);
            echo "You are now registered";
        }
        catch(mysqli_sql_exception) {
            echo "That name is already taken";
        }
    }


    mysqli_close($conn);


    // if(isset($_POST["login"])){

    //     if(!empty($_POST["username"]) && !empty($_POST["password"])){


    //     $_SESSION["username"] = $_POST["username"];
    //     $_SESSION["password"] = $_POST["password"];

    //     header("Location: home.php");
    //     }
    // }

    


    // setcookie("fav_place", "home", time() + (86400 * 2), "/"); First value is a key, second is value, third is time so the 8k number is how many seconds in a day last is the place of storage
    // setcookie("fav_place", "home", time() + (86400 * 2), "/");
    // setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
    // setcookie("fav_drink", "coffee", time(


    // foreach($_COOKIE as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // };


//--------------------------------------------------------------------------------
    // if(isset($_POST["Login"])){

    //     $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

    //     $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    //     if(empty($age)){
    //         echo "That number wasnt valid";
    //     } else {
    //         echo "You are {$age} years old";
    //     }

    //     if(empty($email)){
    //         echo "That email wasnt valid <br>";
    //     } else {
    //         echo "You email is {$email}";
    //     }

        // $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        // $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        // $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        // echo "hello {$username} <br>" ;
        // echo "You are {$age} years old";
    // };


// --------------------------------------------------------------------------------
    // $username = "   Bro-Code";

    // $username = strtolower($username);
    // $username = strtoupper($username);
    // $username = trim($username);
    // $username = str_pad($username, 20, "/");
    // $username = str_replace("-", " ", $username); forst value is what we want to replace, second is what to replace with, last is what variable
    // $equals = strcmp($username, "We code"); 
    // echo "{$username} <br>";
    // echo $equals;
 
//-----------------------------------------------------------------------------------------

    /* if(isset($_POST["login"])){
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo "Please enter a username";
        } elseif(empty($password)) {
            echo "Please enter a password";
        } elseif(empty($username) && empty($password)) {
            echo "Please enter your username and Password";
        } elseif(isset($username) && isset($password)){
            echo "welcome {$username}";
        }
        
    };

    */


    // foreach($_POST as $key => $value){
    //     echo "{$key} = {$value} <br>";
    // };
    // ----------------------------------------------------------------------------------
    // $capitals = array(  "USA" => "washington DC", 
    //                     "Japan" => "kyoto", 
    //                     "South Korea" => "Seoul"
    // );
    // $country = $_POST["country"];
    // echo $capitals["{$country}"]

    // $capitals["USA"] = "las Vegas"; change existing value
    // $capitals["China"] = "beijing"; asign new key value
    // array_pop($capitals);
    // $keys = array_keys($capitals); Makes a new array of just the keys of mentioned array
    // foreach($keys as $key){
    //     echo "{$key} <br>";
    // };

    // $values = array_values($capitals);
    // foreach($values as $value){
    //     echo "{$value} <br>";
    // };

    // foreach($capitals as $key => $value){
    //     echo "{$key} {$value} <br>"; 
    // };



    // $foods = array("apple", "orange", "banana", "coconut");

    // $foods[0] = "pineapple";

    // array_push($foods, "guava", "kiwi" );
    // array_pop($foods);
    // array_shift($foods);

    // $foods = array_reverse($foods);
    // echo count($foods);

    // foreach($foods as $food){
    //     echo $food . "<br>";
    // }


    // --------------------------------

    // $counter = $_POST["counter"];
    // for($i = 0; $i<=$counter; $i++){
    //     echo $i . "<br>";
    // }
    
    // for($i = 20; $i > 0 ; $i-=2){
    //     echo $i . "<br>";
    // }


    //----------------------------------------------------------
    // $x = $_POST["x"];
    // $y = $_POST["y"];
    // $z = $_POST["z"];
    // $total = null;
    // $total = abs($x);
    // $total = round($x); round normally
    // $total = floor($x); round down always 
    // $total = ceil($x); round up always
    // $total = pow($x, $y);
    // $total = sqrt($x);
    // $total = max ($x, $y, $z); give highest number of variables provided
    // $total = min($x, $y, $z);
    // $total = pi();
    // $total = rand(40, 100); give a random number just upto 2bil, if you provide two numbers the first will be min and the second will be max 

    // ------------------------------------------------------------------------------------------------------

    // $radius = $_POST["radius"];
    // $circumference = null;
    // $area = null;
    // $volume = null;

    // $circumference = pi() * 2 * $radius;    
    // $circumference = round($circumference, 2);

    // $area = pi() * pow($radius, 2);
    // $area = round($area, 2);

    // $volume = (4 / 3) * pi() * pow($radius, 3);
    // $volume = round($volume, 2);

    // echo "circumference = {$circumference}cm <br>";
    // echo "area = {$area}cm2 <br>";
    // echo "volume = {$volume}cm3";

    // ------------------------------------------

    // $hours = 50;
    // $rate = 15;
    // $weekly_pay = null;

    // if($hours <= 0){
    //     $weekly_pay = 0;
    // }
    // elseif($hours <= 40){
    //     $weekly_pay = $hours * $rate;
    // }
    // else{
    //     $weekly_pay = ($rate * 40) + ($hours - 40) * ($rate * 1.5);
    // }

    // echo "You made \${$weekly_pay} this week";

    // -----------------------------------------------

    // $grade = "B";

    // switch($grade){
    //     case "A":
    //         echo "You did great";
    //         break;
    //     case "B":
    //         echo "You did Good";
    //         break;
    //     case "C":
    //         echo "You did okay";
    //         break;
    //     case "D":
    //         echo "You did poorly";
    //         break;
    //     case "F":
    //         echo "You did failed";
    //         break;
    //     default:
    //         echo "{$grade} is not valid";

    // }

    // --------------------------------------------------------

    
?>