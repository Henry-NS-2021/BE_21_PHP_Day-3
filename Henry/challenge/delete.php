<?php
    require_once("db_connect.php");
    

    if(isset($_GET["dishNo"])){
        $dishNo = $_GET["dishNo"]; //grab and save the ID (of the item to delete) in the variable

        $sql = "DELETE FROM dishes WHERE dishID = $dishNo";

        if(mysqli_query($connect, $sql)){
            echo "<table style='min-width: 30%; background: beige; border-radius: 30px; display: flex; justify-content: center; align-items: center; height: 400px; text-align:center;'>
                
                   
                    <tr>
                        <td>
                            <svg style='border: solid 5px green; border-radius: 100%; padding: 1vh 0px;' xmlns='http://www.w3.org/2000/svg' width='50%' height='auto' fill='green' class='bi bi-check' viewBox='0 0 16 16'>
                            <path d='M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z'/>
                            </svg>
                        </td>
                    </tr>                
                    <tr>
                        <td>
                            <h2 style='vertical-align: center; width: 100%; color: green; margin: 6vh 0vh 9vh;'>
                            Record successfsully <span style='color:red'>deleted</span>!
                            
                            </h2>
                        </td>
                    </tr>                
                    <tr>
                        <td style='text-align:center;'>
                            <a href='challenge.php'><button style='width: 60%; align-text: center; background: green; border: white 5px solid; border-radius: 20px; color: whitesmoke; font-size: 2em; font-weight: bold; padding: 10px 0px; margin: 10% auto 0%; '>
                            OK
                            
                            </button></a>
                        </td>
                    </tr>                
           </table>";
        }
    }

?>
