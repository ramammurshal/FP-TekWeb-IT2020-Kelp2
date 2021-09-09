<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome!</title>
  <link rel="icon" href="photos/listLast2.png">
  <style> 
    @import url("https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@500&family=Poppins:wght@500&display=swap"); 
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap");
    body {
      padding-top: 110px;
      text-align: center;
      background-color: #fb8500;
    }

    h1 {
      color: white;
      font-family: "Baloo Tammudu 2";
      font-size: 50px;
      margin-bottom: 5px;
    }

    button {
      background-color: #332f2c;
      color: white;
      padding: 12px 0px;
      margin-bottom: 14px;
      border: none;
      border: 1px solid black;
      border-radius: 8px;
      cursor: pointer;
      width: 20%;
      font-family: Poppins;
    }

    button:hover {
      background-color: #b6b0a3;
      color: black;
    }

    button:active {
      background-color: #8d897e;
      box-shadow: 0 2px #8d897e;
      transform: translateY(2px);
    }
  </style>  
</head>

<body>
    <h1>Welcome to To Do List App!</h1>

    <form action="daftar.php">
      <button type="submit">Sign Up</button>
    </form>
    
    <form action="login.php">
      <button type="submit">Login</button>
    </form>
</body>

</html>
