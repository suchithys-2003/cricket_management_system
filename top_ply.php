<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>top players</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            background-image: url('img/signup-bg.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 100px auto 50px; /* Centering the container and moving it slightly down */
            padding: 20px;
            background-color: wheat;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.4); /* Adding shadow effect */
            animation: fadeIn 1s ease;
            position: relative;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        table {
            margin-top: 40px;
            width: 100%;
            border-collapse: collapse;
            background-color: #f9f9f9; /* Adding color to the table */
            border-radius: 5px;
            overflow: hidden;
        }

        th, td {
            border: 3px solid #444;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        .back-button {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color:#333;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .back-button a {
            color: #fff;
            text-decoration: none;
        }

        .back-button:hover {
            background-color:cadetblue;
        }

        form {
            text-align: center;
            margin-top: 20px;
        }

        input[type="number"] {
            width: 300px;
            height: 30px;
            font-size: 16px;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color:#333;
            color:white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: cadetblue;
        }

        @keyframes slideInFromLeft {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(0);
            }
        }

        .animated-table {
            animation: slideInFromLeft 1s ease;
        }
    </style>
</head>
<body>
<div class="transition transition-2 is-active"></div>
<div class="container">
    <button class="back-button"><a href="usernav.html">Back</a></button>
    <div class="animated-table">
        <table>
            <thead>
            <tr>
                <th>NAME</th>
                <th>RUNS</th>
                <th>WICKETS</th>
                <th>TEAM</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $con=mysqli_connect("localhost","root","","cricket");
            $query="SELECT * FROM top_players";
            $result=mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {
                while ($row=mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>".$row["playername"]."</td>";
                    echo "<td>".$row["runs"]."</td>";
                    echo "<td>".$row["wickets"]."</td>";
                    echo "<td>".$row["name"]."</td>";
                    echo "</tr>";
                }
            }
            mysqli_close($con);
            ?>
            </tbody>
        </table>
    </div>
    <form action="squad.php" method="post">
        <!-- <p style="font-size: 18px;">Enter Match Number to retrieve players squad</p>
        <input type="number" name="match_no" placeholder="match_number" required>
        <br><br>
        <input type="submit" value="Submit" required> -->
    </form>
</div>
</body>
</html>
