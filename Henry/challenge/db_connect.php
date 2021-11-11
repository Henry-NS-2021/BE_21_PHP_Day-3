
<?php

    function formatted_dump($var){
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
    }


    $host_name = "localhost";
    $user_name = "root";
    $password = "";
    $db_name = "restaurant";

    $connect = new mysqli($host_name, $user_name, $password, $db_name);

    if(!$connect){
        // echo "<h1 style='color: red;'>error!</h1>";
        die("Connection is failed:" . mysqli_connect_error());
    }
        //  else{
        //     echo "<br>Yu huuu... <b>Connected!</b><br><br>";
        // }





    //   --------------------------------------------------------  

    // $sql = "SELECT * FROM dishes";//write sql query
    // $result = mysqli_query($connect, $sql);
    // $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // formatted_dump ($rows);

    // foreach($rows as $row){
    //     echo "<article style='border: 5px outset black; background: seashell; width: 30%; margin: auto; border-radius: 15px;'>
    //         <div>
    //             <img  src='{$row['image']}' style='width: 100%; border-radius: 3px;'>
    //         </div>
    //         <div style='padding: 2px 20px; text-align: justify'>
    //             <h1>{$row['name']}</h1> 
    //             <p>{$row['meal_description']}</p>
    //             <hr>
    //             <h4>PRICE: \${$row['price']}</h4>
    //         </div>
    //     </article>
    //     <br><br><br>
    //     <hr>";
    // }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>



