<!-- Write php code to insert some data into the mySQL database -->
<?php
 require_once "01_php_connectMysql.php";
 if(isset($_POST["register"])){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $sCode = $_POST["sCode"];
        $sName = $_POST["sName"];
        $sCredits = $_POST["sCredits"];
        $sem = $_POST["sem"];
        $branch = $_POST["branch"];

        $sql = "INSERT INTO `subjects` (`course_code`, `course_name`, `course_credits`, `semester`, `branch`) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt){
            mysqli_stmt_bind_param($stmt, "ssiis", $sCode, $sName, $sCredits, $sem, $branch);

            $result = mysqli_stmt_execute($stmt);
            if($result){
                echo "<br> Registration successfull! <br>";
            } else {
                echo "<br> Registration failed!" . mysqli_error($conn);
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
 }
?>
<html>
    <head>
        <title>8613 - Hisham</title>
    </head>
    <body>
        <form action="02_php_dataInsertion.php" method="POST">
            <label for="sCode">Subject Code: </label>
            <input type="text" name="sCode" id="sCode" required>
            <br><br>
            <label for="sName">Subject Name: </label>
            <input type="text" name="sName" id="sName" required>
            <br><br>
            <label for="sCredits">Subject Credits: </label>
            <input type="text" name="sCredits" id="sCredits" required> 
            <br><br>
            <label for="sem">Semester: </label>
            <input type="text" name="sem" id="sem" required>
            <br><br>
            <label for="branch">Branch: </label>
            <input type="text" name="branch" id="branch" required>
            <br><br>
            <button type="submit" name="register">Register!</button>
        </form>
    </body>
</html>