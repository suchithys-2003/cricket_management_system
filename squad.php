<!DOCTYPE html>
<html>
<head>
    <style>
         body { 
            background-color: lightslategray;
            /* background-color: whitesmoke; */
            /* background-image: url(aksh-yadav-bY4cqxp7vos-unsplash\ \(1\).jpg); */
            background-repeat: no-repeat;
            background-size: cover;
            /* background-color: lightskyblue; */
            /* background-color: black; */
            background-size: cover; /* Cover the entire viewport */
            background-repeat: no-repeat; /* Prevent the background image from repeating */
        }
        table {
          background-color:lightcyan;
            border-collapse: collapse;
            width: 100%;
            height: 300px;
            animation: slideIn 1s ease forwards; /* Apply slide animation */
            border-radius: 20px; /* Add border radius to tables */
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); /* Increased shadow effect */
        }


        th, td {
            /* border: 1px solid black; */
            border: 3px solid #3f3f3f;
            border-radius: 5px;
            padding: 8px;
            text-align: center;
            font-size: 25px;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        th {
        background-color: lightslategray;
        color: white;
        }

        @keyframes slideIn {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .container {
            margin-bottom: 100px; /* Add space between containers (increase the gap here) */
            width: 50%; /* Set container width to half */
            margin: auto; /* Center the container horizontally */
            min-height: 80%; /* Set minimum height to 80% of viewport height */
            border-radius: 10px; /* Add border radius to containers */
            /* background-color: rgba(0, 0, 0, 0.1); */
             background-color:wheat;
            padding: 20px; /* Add padding to containers */
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); /* Increased shadow effect */
        }

        h1 {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); /* Apply box shadow to h1 */
            border-radius: 10px; /* Add border radius to h1 */
            background-color: wheat; /* Add background color to h1 */
            padding: 20px; /* Add padding to h1 */
            margin-top: 10px; /* Add margin to h1 */
            width: 50%;
            text-align: center;
            margin: auto;
        }

        button a {
             display: inline-block; 
            background-color: lightcoral;
            color: white;
            padding: 10px 20px;
            margin: 5px;
            border: none;
            /* border-radius: 20px; */
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
        }

        button a:hover {
            background-color: cadetblue;
        }
    </style>
</head>
<body>
    <button><a href="schedules.php">Back</a></button>
    <div style="text-align: center;">
        <h1>Squad for match number <?php echo $_POST['match_no']; ?></h1>
    </div>

    <div class="container" style="margin-bottom: 5% ; margin-top:5%">
        <h2 style="font: size 35px;">SQUAD 1</h2>
        <table>
            <tr>
                <th>Player Names</th>
            </tr>
            <tr>
                <td>
                    <?php
                    $con=mysqli_connect("localhost","root","","cricket");
                    $match_no=$_POST['match_no'];
                    $query1="SELECT p.playername FROM schedules s,player p WHERE s.team1=p.name AND s.match_no='$match_no'";
                    $result1=mysqli_query($con,$query1);
                    if(mysqli_num_rows($result1)>0) {
                        while ($row=mysqli_fetch_assoc($result1)) {
                            echo $row["playername"] . "<br>";
                        }
                    }
                    mysqli_close($con);
                    ?>
                </td>
            </tr>
        </table>
    </div>

    <div class="container" style="margin-bottom: 5%;">
        <h2>SQUAD 2</h2>
        <table>
            <tr>
                <th>Player Names</th>
            </tr>
            <tr>
                <td>
                    <?php
                    $con=mysqli_connect("localhost","root","","cricket");
                    $match_no=$_POST['match_no'];
                    $query2="SELECT p.playername FROM schedules s,player p WHERE s.team2=p.name AND s.match_no='$match_no'";
                    $result2=mysqli_query($con,$query2);
                    if(mysqli_num_rows($result2)>0) {
                        while ($row=mysqli_fetch_assoc($result2)) {
                            echo $row["playername"] . "<br>";
                        }
                    }
                    mysqli_close($con);
                    ?>
                </td>
            </tr>
        </table>
    </div>

    <div class="container" style="margin-bottom: 5%;">
        <h2>Captain's And Vice-Captain's</h2>
        <table>
            <tr>
                <th>Player Names</th>
                <th>Team</th>
                <th>Position</th>
            </tr>
            <?php
            $con=mysqli_connect("localhost","root","","cricket");
            $match_no=$_POST['match_no'];
            $query1="SELECT p.playername,p.name,s.position FROM selected_for s,schedules sc,player p WHERE s.name=sc.team1 AND s.date=sc.date AND s.cap_no=p.cap_no AND s.name=p.name AND sc.match_no='$match_no' ORDER BY p.name";
            $result1=mysqli_query($con,$query1);
            if(mysqli_num_rows($result1)>0) {
                while ($row=mysqli_fetch_assoc($result1)) {
                    echo "<tr><td>".$row["playername"]."</td><td>".$row["name"]."</td><td>".$row["position"]."</td></tr>";
                }
            } else {
                echo "<tr><td colspan='3'>NOT ANNOUNCED!! for team1</td></tr>";
            }

            $query2="SELECT p.playername,p.name,s.position FROM selected_for s,schedules sc,player p WHERE s.name=sc.team2 AND s.date=sc.date AND s.cap_no=p.cap_no AND s.name=p.name AND sc.match_no='$match_no' ORDER BY p.name";
            $result2=mysqli_query($con,$query2);
            if(mysqli_num_rows($result2)>0) {
                while ($row=mysqli_fetch_assoc($result2)) {
                    echo "<tr><td>".$row["playername"]."</td><td>".$row["name"]."</td><td>".$row["position"]."</td></tr>";
                }
            } else {
                echo "<tr><td colspan='3'>NOT ANNOUNCED!! for team2</td></tr>";
            }
            mysqli_close($con);
            ?>
        </table>
    </div>
</body>
</html>
