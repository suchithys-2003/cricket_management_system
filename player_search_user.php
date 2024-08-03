<!DOCTYPE html>
<html>
<head>
    <title>Cricket Player Details</title>
    <style type="text/css">
        body {
            background-image: url(aksh-yadav-bY4cqxp7vos-unsplash\ \(1\).jpg);
            /* background-color: #dddddd; */
            background-color: lightgrey;
            /* background-color:cornsilk; */
            background-size: cover;
            background-position: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; */
            margin: 0;
            padding: 0;
            color: #ffffff;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background-color: #34495e;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            animation: fadeIn 1s ease;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        /* @keyframes slideRight {
            from {
                opacity: 0;
                transform: translateX(-50px); 
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }  */

        table {
            border-collapse: collapse;
             width: 100%;
            /* border: 2px solid #2c3e50; Darker Gray  */
            border: 1px solid white;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: .5px solid #dddddd;
        }

        th {
            /* background-color: #2ecc71; Green */
            background-color:cadetblue;
            color: #ffffff;
            font-weight: bold;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #34495e; /* Dark Gray */
        }

        a {
            text-decoration: none;
            color: #333;
        }

        button {
            background-color:wheat; /* Blue */
            border: none;
            color:black;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: lightcoral; /* Dark Blue */
        }

        .back-button {
            text-align: center;
            margin-top: 20px;
        }

        .back-button a {
            font-size: 18px;
        }

        .back-button button {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    $con = mysqli_connect("localhost", "root", "", "cricket") or die(mysqli_error($con));
    $player = $_POST['playername'];
    $query = "select * from player where playername like '$player%'";
    $res = mysqli_query($con, $query);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            echo "<h1 style='text-align:center;'>" . $row["playername"] . "</h1>
                  <table>
                    <tr>
                        <td style='vertical-align: top;'>
                            <img src=" . $row["image"] . " width='400px' height='400px'>
                        </td>
                        <td>
                            <table>
                                <tr><th>PLAYERNAME</th><td>" . $row["playername"] . "</td></tr>
                                <tr><th>RANK</th><td>" . $row["rank"] . "</td></tr>
                                <tr><th>TEAM</th><td>" . $row["name"] . "</td></tr>
                                <tr><th>RUNS</th><td>" . $row["runs"] . "</td></tr>
                                <tr><th>TYPE</th><td>" . $row["type"] . "</td></tr>
                                <tr><th>BATTING BEST</th><td>" . $row["batting_best"] . "</td></tr>
                                <tr><th>BOWLING BEST</th><td>" . $row["bowling_best"] . "</td></tr>
                            </table>
                        </td>
                    </tr>
                  </table>";
        }
    } else {
        echo "<script type='text/javascript'>alert('PLAYER NOT FOUND!!');</script>";
        header("refresh: 0.01; url=usernav.html");
    }
    mysqli_close($con);
    ?>
    <div class="back-button">
        <button><a href="usernav.html">Back</a></button>
    </div>
</div>

</body>
</html>
