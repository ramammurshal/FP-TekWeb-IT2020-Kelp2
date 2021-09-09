<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styleDashboard.css">
    <link rel="stylesheet" href="styleFeedback.css">
    <link rel="stylesheet" href="styleSlider.css">
    <link rel="icon" href="photos/listLast2.png">
    <script src="feedback.js"></script>
</head>

<body>
    <?php
        $usernameLogin = $_GET["usernameLogin"];
        $namaLogin = $_GET["namaLogin"];
    ?>
    <!-- HEADER -->
    <!-- HEADER -->
    <!-- HEADER -->
    <header>
        <nav>
            <div class="navMain">
                <ul class="ulNavMain">
                    <li><a href="#toDoList">To Do List</a></li>
                    <li><a href="#article">Article</a></li>
                    <li><a href="about.php?usernameLogin=<?php echo $usernameLogin?>&namaLogin=<?php echo $namaLogin ?>">About Us</a></li>
                    <li><a onclick="togglePopup()">Feedback</a></li>
                </ul>
            </div>
            <div class="navOut">
                <a href="index.php" onclick="return confirm('Are you sure you want to leave?')">Log Out</a>
            </div>
        </nav>
        <div class="jumbotron">
            <h1>
                <?php
                    date_default_timezone_set("Asia/Jakarta");
                    $time = (int)date("H");
                    if (0 <= $time && $time < 12) {
                        echo "Good Morning, " . $namaLogin . ".<br>" . "Let's organize your activities with a to do list!";
                    }
                    else if (12 <= $time && $time < 15) {
                        echo "Good Afternoon, " . $namaLogin . ".<br>" . "Let's organize your activities with a to do list!";
                    }
                    else if (15 <= $time && $time < 18) {
                        echo "Good Evening, " . $namaLogin . ".<br>" . "Let's organize your activities for tonight!";
                    }
                    else if (18 <= $time && $time < 24) {
                        echo "Good Night, " . $namaLogin . ".<br>" . "Let's organize your activities for tomorrow!";
                    }
                ?>
            </h1>
        </div>
    </header>

    <!-- MAIN -->
    <!-- MAIN -->
    <!-- MAIN -->
    <main>
        <!-- TO DO LIST -->
        <!-- TO DO LIST -->
        <div class="toDoList" id="toDoList">
            <?php
                $todos = array();

                if(file_exists("$usernameLogin.txt")){
                    $file = file_get_contents("$usernameLogin.txt");
                    $todos = unserialize($file);   
                }

                if(isset($_POST["todo"])){
                    $data = $_POST["todo"];
                    $todos[] = [
                        "todo" => "$data",
                        "status" => 0
                    ];
                    $serialized_todos = serialize($todos);
                    file_put_contents("$usernameLogin.txt", $serialized_todos);
                    header("Location:dashboard.php?usernameLogin=$usernameLogin&namaLogin=$namaLogin#toDoList");
                }

                if(isset($_GET["status"])){
                    $todos[$_GET["key"]]["status"] = $_GET["status"];
                    $serialized_todos = serialize($todos);
                    file_put_contents("$usernameLogin.txt", $serialized_todos);
                    header("Location:dashboard.php?usernameLogin=$usernameLogin&namaLogin=$namaLogin");
                }

                if(isset($_GET["hapus"])){
                    unset($todos[$_GET["key"]]);
                    $serialized_todos = serialize($todos);
                    file_put_contents("$usernameLogin.txt", $serialized_todos);
                    header("Location:dashboard.php?usernameLogin=$usernameLogin&namaLogin=$namaLogin");
                }
            ?>

            <div class="todoCode">
                <!-- FORM kita mengisi data To Do -->
                <form action="" method="POST" class="formToDoList">
                    <label>What's your plan?</label><br>
                    <input type="text" name="todo" class="inputTextToDoList" placeholder="Write here...">
                    <button type="submit" class="simpanToDoList">Save</button>
                </form>

                <ul class="totalList">
                    <?php foreach($todos as $key => $value): ?>
                    <li class="liToDoList">

                        <!-- Checkbox -->
                        <input type="checkbox" name="todo" class="checkboxToDoList" onclick="window.location.href='dashboard.php?usernameLogin=<?php echo $usernameLogin?>&namaLogin=<?php echo $namaLogin ?>&status=<?php echo ($value["status"]==1)?'0':'1'?>&key=<?php echo $key?>#toDoList'" <?php if($value["status"]==1) echo "checked"?>>
                        
                        <!-- Label -->
                        <label class="labelToDoList">
                            <?php
                                if($value["status"]==1){
                                    echo "<del>" . $value["todo"] . "</del>";
                                }
                                else{
                                    echo $value["todo"];
                                }
                            ?>
                        </label>

                        <!-- Hapus Data -->
                        <a class="deleteToDoList" href="dashboard.php?usernameLogin=<?php echo $usernameLogin?>&namaLogin=<?php echo $namaLogin ?>&hapus=1&key=<?php echo $key ?>#toDoList" onclick="return confirm('Are you sure to delete this?')">Delete</a>
                    </li>
                    <?php endforeach ?>
                </ul>
            </div>
            <div class="todoGIF">
                <img src="photos/gif1.gif" width="100%" height="100%">
            </div>
        </div>

        <!-- SLIDER -->
        <!-- SLIDER -->
        <div class="slider">
            <figure>
                <img src="photos/slider1.png">
                <img src="photos/slider2.png">
                <img src="photos/slider3.png">
            </figure>
        </div>

        <!-- ARTICLE -->
        <!-- ARTICLE -->
        <div class="article" id="article">
            <div class="articleGIF">
                <img src="photos/gif2.gif" width="100%" height="100%">
            </div>
            <div class="mainArticle">
                <h1>Our Article</h1>
                <div class="articleCard" onclick="window.location.href='article1.php?usernameLogin=<?php echo $usernameLogin?>&namaLogin=<?php echo $namaLogin?>'">
                    <h1>
                        <a href="article1.php?usernameLogin=<?php echo $usernameLogin?>&namaLogin=<?php echo $namaLogin?>">
                            1. Why is taking action hard?
                        </a>
                    </h1>
                    <div class="line"></div>
                    <p>
                        A brief discussion on the causes and effects of procrastination
                    </p>
                </div>

                <div class="articleCard" onclick="window.location.href='article2.php?usernameLogin=<?php echo $usernameLogin?>&namaLogin=<?php echo $namaLogin?>'">
                    <h1>
                        <a href="article2.php?usernameLogin=<?php echo $usernameLogin?>&namaLogin=<?php echo $namaLogin?>">
                            2. Increase Productivity Using Spotify
                        </a>
                    </h1>
                    <div class="line"></div>
                    <p>
                        Without us knowing it, Spotify can increase the level of productivity of our daily self. What made it like 
                        that? Lets check this article!
                    </p>
                </div>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <!-- FOOTER -->
    <!-- FOOTER -->
    <footer>
        <h1>
            @ Group 2 <br>
            Final Project Teknologi Web, 2021
        </h1>
    </footer>

    <!-- FEEDBACK -->
    <!-- FEEDBACK -->
    <!-- FEEDBACK -->
    <?php
        if(isset($_POST["commentUser"])) {
            $data = $_POST["commentUser"];
            file_put_contents("pesan$usernameLogin.txt", $data);
            echo "<script>alert('Massage has been send!')</script>";
        }
    ?>

    <form action="" method="POST">
        <div class="popup" id="popup-1">
            <div class="content">
                <div class="close-btn" onclick="togglePopup()">x</div>
                <h3 class="enterFeedbackWord">Enter your feedback</h3>
                <div class="input-field-comment"><input type="text" name="commentUser" placeholder="Your comment here..." class="validate"></div>
                <button class="second-button">Submit</button>
            </div>
        </div>
    </form>
</body>

</html>

