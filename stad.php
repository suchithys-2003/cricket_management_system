<!DOCTYPE html>
<html>

<head>
    <title>RANKS</title>
    <style>
        body {
            background-color:lightgrey;
            background-image: url(aksh-yadav-bY4cqxp7vos-unsplash\ \(1\).jpg);
            background-repeat: no-repeat;
            background-size: cover;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 70%;
            margin: 60px auto;
            padding: 20px;
            background-color: lightslategray;
            border-radius: 30px;
            box-shadow: 0 25px 40px rgba(0, 0, 0, 0.3);
            animation: slideRight 1.5s ease; /* Changed animation to slideRight */
          
            padding-bottom: 50px;
        }

        @keyframes slideRight {
            from {
                opacity: 0;
                transform: translateX(-50px); /* Sliding from left to right */
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        table {
            width: 100%;
            border-radius: 10px;
            border-collapse: collapse;
            border: 3px solid black;
        }

        th,
        td {
            border: 2px solid black;
            padding: 10px;
            text-align: left;
            font-size: 20px;
            font-weight: 30px;
        }

        th {
            background-color: wheat;
            text-align: center;
        }

        td {
            background-color: white; /* Set background color to white */
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button {
            background-color: lightcoral; 
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-bottom: 20px;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
            margin-left: 10px;
        }

        button:hover {
            background-color: cadetblue; /* Change background color on hover */
        }

        h1 {
            text-align: center;
            color:yellow;
        }
    </style>
</head>

<body>
    <button><a href="usernav.html" style="color:white;">Back</a></button>
    <div class="container">
        <h1>Stadiums Information</h1>
        <table>
            <tr>
                <th>Stadium Name</th>
                <th>Capacity</th>
                <th>DOI</th>
                <th>Board Name</th>
                <th>Team's Stadium</th>
            </tr>
            <?php
            $con = mysqli_connect("localhost", "root", "", "cricket");
            $query = "select * from stadiums";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>" . $row["stadium_name"] . "</td><td>" .
                        $row["capacity"] . "</td><td>" .
                        $row["DOI"] . "</td><td>" .
                        $row["board_name"] . "</td><td>" .
                        $row["team"] . "</td></tr>";
                }
            }
            mysqli_close($con);
            ?>
        </table>
    </div>
</body>

</html>
