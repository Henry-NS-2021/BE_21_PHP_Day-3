<!-- CONNECT through db_connect.php to Database -->
<?php
    require_once("db_connect.php");

    
    // check if the form has been submitted
    if(isset($_POST["submit"])){
        // fetch values from the form before saving each of the into a variable
        $meal_image = $_POST["image"];
        $meal_name = $_POST["name"];
        $meal_price = $_POST["price"];
        $meal_description = $_POST["meal_description"];
        // variable with insert command (DO IT ONLY LOCALLY in order NOT to clash with the $sql variable from the challenge.php file)
        $sql = "INSERT INTO dishes (image, name, price, meal_description) VALUES ('$meal_image', '$meal_name', '$meal_price', '$meal_description')";


        // condition to verify if the record has actually been added
        if(mysqli_query($connect, $sql) == true){
            echo "<br><h2>Cool. We have a new dish on the menu!</h2>";
        }
    }
	
?>


<!-- 
    --------------------------------
    HTML file 
    --------------------------------
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- [FORM] -->
    <section id="form">
        
        <form method="post">
            <h1>Form to add new dishes</h1>
            <!-- <input type="text" placeholder="dish_id"> -->
            <div id="input_field">
                <span>
                    <input type="text" name="name" placeholder="name">
                    <input type="text" name="price" placeholder="price">
                    <input type="text" name="image" placeholder="image">
                </span>
                <textarea type="textarea" rows="5" cols="50" name="meal_description" placeholder="Enter the meal description here"></textarea>
            </div>
            <br><br><hr>
            <button id="submit_btn" type="submit" name="submit">SUBMIT</button>
        </form>
        <br><br><br>
        <a href="challenge.php"><button><< Back to the menu</button></a>
    
    </section>
</body>
</html>