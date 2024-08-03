<!DOCTYPE html>
<html>
<head>
    <title>RANKS</title>
    <style>

      body{
        background-image: url(img/batball.jpg);
        background-repeat: no-repeat;
        background-size: cover;
      }
        /* Styles for the button */
        .back-button {
            background: linear-gradient(to bottom, lightcoral, #45a049);
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s, transform 0.3s;
        }

        .back-button:hover {
            background: linear-gradient(to bottom, cadetblue, #4CAF50);
            transform: translateY(-2px);
        }

        /* Styles for the table container */
        .table-container {
            margin-top: 30px;
            overflow: hidden;
            border-radius: 20px;
            padding: 10px;
            box-shadow: 0 30px 50px rgba(0, 0, 0, 0.2); /* Increased shadow effect */
            animation: slide-from-left 0.5s ease-out;
            width: 70%;
            margin-left: 200px;
            padding: 20px;
            background-color:#777;
            /* background-color: lightgoldenrodyellow; */
        }

        /* Styles for the table */
        table {
            width: 100%; /* Decreased table width */
            margin: 0 auto;
            border-collapse: collapse;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 30px;
            border: 2px solid black;
            background-color: lightgrey;
        }

        th, td {
            padding: 30px; /* Decreased cell padding */
            text-align: left;
            border: 2px solid black;
        }

        th {
            background-color: lightcoral;
            font-size: 25px;
            font-weight: 20px;
            text-align: center;
        }
        td{
          font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
          font-size: 19px;
          font-weight: 20px;
          color: black;
        }

        /* Keyframe animation */
        @keyframes slide-from-left {
            from {
                transform: translateX(-100%);
            }
            to {
                transform: translateX(0);
            }
        }
    </style>
</head>
<body >
    <!-- Back button -->
    <button class="back-button"><a href="usernav.html" style="color: white; text-decoration: none;">Back</a></button>

    <!-- Table container -->
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Board Name</th>
                    <th>Chairman</th>
                    <th>Team's Board</th>
                    <th>DOA</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $con=mysqli_connect("localhost","root","","cricket");
                $query="select * from cricket_boards";
                $result=mysqli_query($con,$query);
                if(mysqli_num_rows($result)>0) {
                    while ($row=mysqli_fetch_assoc($result)) {
                        echo "<tr><td>".$row["board_name"]."</td>"."<td>".
                        $row["chairman"]."</td><td>".
                        $row["team"]."</td><td>".
                        $row["DOA"]."</td></tr>";
                    }
                }
                mysqli_close($con);
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
