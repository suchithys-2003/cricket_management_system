<!DOCTYPE html>
<html>

<head>
    <title>RANKS</title>
    <style>
        body {
            background-color: lightslategray;
           /* background-repeat: no-repeat; background-image: url(img/batball.jpg);
            background-size: cover; */
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin: 0;
            padding: 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
           
        }

        th,
        td {
            border: 2px solid black;
            padding: 12px;
            text-align: center;
            font-size: 20px;
        }

        th {
            background-color: wheat;
            color: black;
        }

        button {
            background-color:green;
            color:white;
            border: none;
            padding: 14px 24px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            margin-top: 15px;
            cursor: pointer;
        }

        button a {
            color: white;
            text-decoration: none;
        }

        button:hover {
            background-color: red;
        }

        h1 {
            color: black;
            text-align: center;
            font-size: 25px;
        }

        .container {
            margin: 20px auto;
            max-width: 1000px;
            padding: 0 20px;
            overflow: hidden; /* To contain the shadow effect */
        }

        .container > div {
            background-color: #f9f9f9;
            padding: 30px;
            margin-top: 30px;
            border-radius: 20px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.5); /* Enhancing shadow effect */
            animation: slideRight 0.5s ease;
        }

        @keyframes slideRight {
            from {
                transform: translateX(-100%);
            }
            to {
                transform: translateX(0);
            }
        }

        .form-container {
            background-color: #f9f9f9;
            padding: 30px;
            margin-top: 20px;
            border-radius: 15px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.5); /* Enhancing shadow effect */
            animation: slideRight 0.5s ease;
        }

        .form-container input[type="text"],
        .form-container input[type="number"] {
            width: calc(100% - 24px);
            padding: 12px;
            margin: 10px 0;
            border: 2px solid blach;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .form-container button {
            width: calc(100% - 24px);
            background-color:lightcoral;
            color: white;
            border: none;
            padding: 14px 24px;
            margin-top: 20px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
        }

        .form-container button:hover {
            background-color: cadetblue;
        }
    </style>
</head>

<body>

    <div class="container">
        <button><a href="admindash.html">Back</a></button>

        <div>
            <h1>TEAM RANKING</h1>
            <table>
                <tr>
                    <th>Rank</th>
                    <th>Name</th>
                    <th>Rating</th>
                </tr>
                <?php
                $con = mysqli_connect("localhost", "root", "", "cricket");
                $query = "SELECT * FROM team ORDER BY rating DESC";
                $result = mysqli_query($con, $query);
                $i = 0;
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $i++;
                        $nm = $row["name"];
                        $q = "UPDATE team SET rank='$i' WHERE name='$nm'";
                        mysqli_query($con, $q);
                        echo "<tr><td>" . $i . "</td><td>" . $row["name"] . "</td><td>" . $row["rating"] . "</td></tr>";
                    }
                }
                ?>
            </table>
        </div>

        <div class="form-container">
            <h2>UPDATE TEAM</h2>
            <form action="update.php" method="POST">
               ENTER TEAM-RATING <input type="number" name="rating" placeholder="Enter Rating" required><br>
               ENTER TEAMNAME<input type="text" name="name" placeholder="Enter Team Name" required><br>

                <button type="submit">UPDATE</button>
            </form>
        </div>

        <div>
            <h1>BATSMAN RANKING</h1>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Rank</th>
                    <th>Teamname</th>
                    <th>Runs</th>
                </tr>
                <?php
                $query = "SELECT * FROM player WHERE type='batsman' ORDER BY runs DESC";
                $result = mysqli_query($con, $query);
                $i = 0;
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $i++;
                        $nm = $row["cap_no"];
                        $q = "UPDATE player SET rank='$i' WHERE cap_no='$nm'";
                        mysqli_query($con, $q);
                        echo "<tr><td>" . $row["playername"] . "</td><td>" . $i . "</td><td>" . $row["name"] . "</td><td>" . $row["runs"] . "</td></tr>";
                    }
                }
                ?>
            </table>
        </div>

        <div class="form-container">
            <h2>UPDATE PLAYER</h2>
            <form action="pupdate.php" method="POST">
              ENTER PLAYER NAME  <input type="text" name="name" placeholder="Enter Player Name" required><br>
               ENTER RUNS <input type="number" name="runs" placeholder="Enter Runs" required><br>
                NO OF WICKETS<input type="number" name="wickets" placeholder="Enter Wickets" required><br>
                NO OF MATCHES<input type="number" name="no_of_matches" placeholder="Enter Number of Matches" required><br>
                <button type="submit">UPDATE</button>
            </form>
        </div>

        <div>
            <h1>BOWLER RANKING</h1>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Rank</th>
                    <th>Teamname</th>
                    <th>Wickets</th>
                </tr>
                <?php
                $query = "SELECT * FROM player WHERE type='bowler' ORDER BY wickets DESC";
                $result = mysqli_query($con, $query);
                $i = 0;
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $i++;
                        $nm = $row["cap_no"];
                        $q = "UPDATE player SET rank='$i' WHERE cap_no='$nm'";
                        mysqli_query($con, $q);
                        echo "<tr><td>" . $row["playername"] . "</td><td>" . $i . "</td><td>" . $row["name"] . "</td><td>" . $row["wickets"] . "</td></tr>";
                    }
                }
                ?>
            </table>
        </div>

        <div>
            <h1>ALL-ROUNDER RANKING</h1>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Rank</th>
                    <th>Teamname</th>
                    <th>Runs</th>
                    <th>Wickets</th>
                </tr>
                <?php
                $query = "SELECT * FROM player WHERE type='allrounder' ORDER BY (runs + wickets * 2) DESC";
                $result = mysqli_query($con, $query);
                $i = 0;
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $i++;
                        $nm = $row["cap_no"];
                        $q = "UPDATE player SET rank='$i' WHERE cap_no='$nm'";
                        mysqli_query($con, $q);
                        echo "<tr><td>" . $row["playername"] . "</td><td>" . $i . "</td><td>" . $row["name"] . "</td><td>" . $row["runs"] . "</td><td>" . $row["wickets"] . "</td></tr>";
                    }
                }
                mysqli_close($con);
                ?>
            </table>
        </div>
    </div>

</body>

</html>
