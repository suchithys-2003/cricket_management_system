<!DOCTYPE html>
<html>

<head>
    <title>RANKS</title>
    <style>
        body {
            background-color:#777;
            /* background-image: url(img/signup-bg.jpg); */
            background-repeat: no-repeat;
            background-size: cover;
            background-color: lightgray;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin: 0;
            padding: 0;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            width: 80%;
            margin: 30px auto;
            padding: 20px;
            background-color: lightslategray;
            border-radius: 15px;
            margin-bottom: 50px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .table-container {
            margin-bottom: 10px;
            animation: slideLeft 1s ease;
        }

        @keyframes slideLeft {
            from {
                margin-left: -100%;
            }

            to {
                margin-left: 0;
            }
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 2px solid black;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            color: black;
            font-weight: 30px;
        }

        tr:nth-child(even) {
            background-color: #f6f9f0;
        }

        h1 {
            text-align: center;
            color: yellow;
        }

        button {
            background-color: cadetblue;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover{
            background-color:lightcoral;
        }
    </style>
</head>

<body>
    <button style="margin-top: 20px; margin-left:20px"><a href="usernav.html" style="color:white; text-decoration:none">Back</a></button>
    <div class="container">
        <div class="table-container">
            <h1>TEAM RANKING</h1>
            <table>
                <tr>
                    <th style="background-color:wheat; text-align:center">Rank</th>
                    <th style="background-color:wheat; text-align:center">Name</th>
                    <th style="background-color:wheat; text-align:center">Rating</th>
                </tr>
                <!-- PHP code for team ranking -->
								<?php
                $con=mysqli_connect("localhost","root","","cricket");
                $query="select * from team order by rating desc";
                $result=mysqli_query($con,$query);
                $i=floor(0);
                if(mysqli_num_rows($result)>0)
                {
                    while ($row=mysqli_fetch_assoc($result)) { $i=$i+1;
                        echo "<tr><th>"
                        .floor($i)."</th><th>".
                        $row["name"]."</th><th>".
                        $row["rating"]."</th></tr>";
                    }
                }
                ?>
            </table>
        </div>
    </div>

    <div class="container">
        <div class="table-container">
            <h1>BATSMAN RANKING</h1>
            <table>
                <tr>
                    <th style="background-color:wheat; text-align:center">Name</th>
                    <th style="background-color:wheat; text-align:center">Rank</th>
                    <th style="background-color:wheat; text-align:center">Teamname</th>
                    <th style="background-color:wheat; text-align:center">Runs</th>
                </tr>
                <!-- PHP code for batsman ranking -->
								<?php
                $con=mysqli_connect("localhost","root","","cricket");
                $query="select * from player  where type='batsman' order by runs desc";
                $result=mysqli_query($con,$query);$i=floor(0);
                if(mysqli_num_rows($result)>0)
                {
                    while ($row=mysqli_fetch_assoc($result)) { $i=$i+1;
                        echo "<tr><th>".$row["playername"]."</th><th>".
                        floor($i)."</th><th>".
                        $row["name"]."</th><th>".
                        $row["runs"]."</th></tr>";
                    }
                }
                ?>
            </table>
        </div>
    </div>

    <div class="container">
        <div class="table-container">
            <h1>BOWLER RANKING</h1>
            <table>
                <tr>
                    <th style="background-color:wheat; text-align:center">Name</th>
                    <th style="background-color:wheat; text-align:center">Rank</th>
                    <th style="background-color:wheat; text-align:center">Teamname</th>
                    <th style="background-color:wheat; text-align:center">Wickets</th>
                </tr>
                <!-- PHP code for bowler ranking -->
								<?php
                $con=mysqli_connect("localhost","root","","cricket");
                $query="select * from player  where type='bowler' order by wickets desc";
                $result=mysqli_query($con,$query);$i=floor(0);
                if(mysqli_num_rows($result)>0)
                {
                    while ($row=mysqli_fetch_assoc($result)) { $i=$i+1;
                        echo "<tr><th>".$row["playername"]."</th><th>".
                        floor($i)."</th><th>".
                        $row["name"]."</th><th>".
                        $row["wickets"]."</th></tr>";
                    }
                }
                ?>
            </table>
        </div>
    </div>

    <div class="container">
        <div class="table-container">
            <h1>ALL-ROUNDER RANKING</h1>
            <table>
                <tr>
                    <th style="background-color:wheat; text-align:center">Name</th>
                    <th style="background-color:wheat; text-align:center">Rank</th>
                    <th style="background-color:wheat; text-align:center">Teamname</th>
                    <th style="background-color:wheat; text-align:center">Runs</th>
                    <th style="background-color:wheat; text-align:center">Wickets</th>
                </tr>
                <!-- PHP code for all-rounder ranking -->

								<?php
                $con=mysqli_connect("localhost","root","","cricket");
                $query="select * from player  where type='allrounder' order by (runs+wickets*2) desc";
                $result=mysqli_query($con,$query);$i=floor(0);
                if(mysqli_num_rows($result)>0)
                {
                    while ($row=mysqli_fetch_assoc($result)) { $i=$i+1;
                        echo "<tr><th>".$row["playername"]."</th><th>".
                        floor($i)."</th><th>".
                        $row["name"]."</th><th>".
                        $row["runs"]."</th><th>".
                        $row["wickets"]."</th></tr>";
                    }
                }
                mysqli_close($con);
                ?>
            </table>
        </div>
    </div>
</body>

</html>
