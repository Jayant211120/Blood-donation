<!doctype html>
<html>

<head>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        #main-div {
            display: flex;
            align-items: center;
        }

        .main-div-heading {
            color: white;
            top: 5px;
        }

        .main-div-heading {
            margin-top: 10px;
        }

        #main-div {
            content: "";
            background-color: aqua;
            height: 10%;
            width: 100%;
            position: fixed;
            z-index: 1000;
            animation: Jayant 5s infinite;
        }
        @keyframes Jayant {
    0%{
        background-color: aqua;    
    }
    20%{
        background-color: red;
    }
    50%{
        background-color: lightgreen;
    }
    70%{
        background-color: orange;
    }
    100%{
        background-color: tomato;
    }
}
        .navbar-unorderedlist {
            display: flex;
            margin-left: 33rem;

        }

        .navbar-list {
            margin-left: 5rem;
            display: block;
        }

        .navbar-list a {
            text-decoration: none;
            color: white;
        }

        .navbar-list a:hover {
            background-color: orange;
            color: white;
            border-radius: 80%;
            padding: 20px 20px;
        }
        table {
            font-size: 2rem;
            width: 100%;
            margin-top: 4rem;
        }

        th {
            background-color: black;
            color: white;
        }

        td {
            color: greenyellow;
            background-color: purple;
        }

        .large {
            font-size: 3rem;
        }
    </style>
</head>

<body>
    <header>
        <div id="main-div">
            <h2 id="main-div-heading">Blood Donation</h2>
            <nav class="navbar">
                <ul class="navbar-unorderedlist">
                    <li class="navbar-list"><a href='main.php'>HOME</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <br>
    <br><br>
    <br><br>
    <center>
        <table border='3'>
            <tr>
                <th>Username</th>
                <th>Mail</th>
                <th>Mobile</th>
                <th>Password</th>
                <th>Re-Password</th>
                <th>Suggestion</th>
            </tr>
            <?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'blooddonation';
            $conn = mysqli_connect($servername, $username, $password, $database);
            if(isset($_POST['send'])){
            $pass=$_POST['password'];
            $query = "SELECT * FROM `jayantv` WHERE `Password`='$pass'";
            $data = mysqli_query($conn, $query);
            $numberofitems = mysqli_num_rows($data);
            echo "<p class='large'>Check Your Details</p>";
            if ($numberofitems != 0) {
                while ($result = mysqli_fetch_assoc($data)) {
                    echo "
<tr>
<td>" . $result['Username'] . "</td>
<td>" . $result['Mail'] . "</td>
<td>" . $result['Mobile'] . "</td>
<td>" . $result['Password'] . "</td>
<td>" . $result['Repassword'] . "</td>
<td>" . $result['Suggestion'] . "</td>
</tr>
";
                }
            } else {
                echo "No Data Found";
            }
        }
            ?>
        </table>
    </center>
</body>

</html>