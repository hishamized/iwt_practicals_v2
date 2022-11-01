<!-- Write some php code to reverse an array of charaters -->
<?php
   if(isset($_POST["reverse"])){
    if($_SERVER['REQUEST_METHOD']  == 'POST'){
        $array = $_POST["array"];
        $length = strlen($array);
        echo("<br>The reversed string is: <br>");
        for($i = $length-1; $i >= 0; $i--){
            echo $array[$i];
        }
    }
   }
?>
<html>
    <head>
        <title>8613 - Hisham</title>
    </head>
    <body>
        <form action="./05_php_reverseArray.php" method="POST">
            <label for="array">Enter a string: </label>
            <br>
            <input type="text" name="array" id="array">
            <br><br>
            <button type="submit" name="reverse">Reverse It!</button>
        </form>
    </body>
</html>