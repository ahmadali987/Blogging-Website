<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="global.css">
    <title>Insightful Vibes: TAJMAHAL</title>
    <script src="global.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }

        #tajmahal {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        #tajmahal video {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        h2 {
            color: #333;
        }

        h3 {
            color: #555;
            margin-bottom: 10px;
        }

        p {
            color: #444;
            margin-bottom: 15px;
        }


        /* Responsive design */
        @media screen and (max-width: 600px) {
            #tajmahal {
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <img src="logo1.png" alt="logo" id="logo">
    <div class="background-video">
        <video autoplay loop muted playsinline src="video.mp4"></video>
    </div>


    <?php

    $servername = "localhost";
    $username = "root";
    $db_password = "";
    $database = "blog";

    $connect = mysqli_connect($servername, $username, $db_password, $database);
    if (!$connect) {
        die("Connection Failed: " . mysqli_connect_error());
    }

    if (isset($_GET['blogId'])) {
        $id = $_GET['blogId'];
        $sql = "SELECT * FROM personalblogs WHERE id = $id";
        $result = mysqli_query($connect, $sql);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo ' <div id="tajmahal">
            <div>
            <img style="width: 100%;" src="' . $row["imgLink"] . '" alt="blog" id="blogimg">
            </div>
            <div>
            <h2>' . $row["title"] . '</h2>
            <p>' . $row["description"] . '</p>
            </div>
        </div>';
                }
            }
        }
    }
    ?>




</body>

</html>