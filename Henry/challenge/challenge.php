<!-- 
    --------------------------------
    EXERCISE REQUIREMENTS 
    --------------------------------

    We will create a Restaurant Database (you can create it directly in php MyAdmin).
    The database should contain one table called dishes with columns dishID, image(URL link), name, price and meal description. If there are any columns that you think could compliment your project feel free to expand. 

    You should be able to:
    - Display all meals
    - Add a meal
    - Delete a meal 
-->





<!-- 
    --------------------------------
    PHP CONNECTION COMMAND
    --------------------------------
-->

<!-- CONNECT through db_connect.php to Database -->
<?php 
    require_once("db_connect.php");
    $sql = "SELECT * FROM dishes";//write sql query
    $result = mysqli_query($connect, $sql);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
    <title>PHP Day-3: Challenge</title>
</head>
<body>
    <div class="wrapper">

        <?php

            echo "<table>
            <tr>
                <h1 colspan='2'>
                Checkout our menu
                </h1>
            </tr>
            <tr style='display: flex; flex-wrap: wrap-reverse; justify-content: space-around;'>";
            
            foreach($rows as $id => $row){
                echo "
                    <td style='min-height: 150px; margin: 20px 10px; border: 5px outset black;border-radius: 15px; background: seashell; width: 45vw;  '>
                    
                            <section>
                                <div>
                                    <img  src='{$row['image']}' style='width: 100%; border-radius: 3px;'>
                                </div>
                                <div style='padding: 2px 20px; text-align: justify'>
                                    <h2>{$row['name']}</h2> 
                                    <p>{$row['meal_description']}</p>
                                    <hr>
                                    <h4>PRICE: \${$row['price']}</h4>
                                    <a href='delete.php?dishNo={$row["dishID"]}'><button style='width: 100%; padding: 5px 20px; margin: 2% 0%;'>Delete</button></a>
                                </div>
                            </section>
                    
                    </td>";
                    
            }

            echo "</tr>
            </table>
            <br><br><br>
            <hr>";
        ?>

<div>
    <a href="create.php"><h3>Add new records to the menu</h3></a>
    <a href="delete.php"><h3><span class="important">Delete</span> existing records to the menu</h3></a>
    <br><br><br>
</div>

</div>


</body>
</html>