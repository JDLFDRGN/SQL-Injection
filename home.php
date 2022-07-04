<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <?php
        include 'database.php';
        session_start();
    ?>
    <div class="container">
        <div class="home-results">
            <div class="home-query">
                <h1>QUERY:</h1>
                <?php
                    echo "<p>$_SESSION[result]</p>"
                ?>
            </div>
            <div class="home-table">
                <h1>TABLE:</h1>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                    </tr>
                    <?php
                        $result = $connect->query($_SESSION['result']);

                        if(!$result){
                            echo "<script>alert('error')</script>";
                        }else{
                            for($i=0;$i<$result->num_rows;$i++){
                                $transform = $result->fetch_assoc();
    
                                echo "<tr>";
                                echo "<td>$transform[userID]</td>";
                                echo "<td>$transform[username]</td>";
                                echo "<td>$transform[password]</td>";
                                echo "</tr>";
                            }
                        }        
                    ?>
            </table>
            </div>
        </div>
        <div class="home-button">
            <button onclick="navigate('index.php')">Back</button>
        </div>               
    </div>
</body>
</html>