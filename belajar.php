<!DOCTYPE html>
<html>
<head>
    <title>navbar</title>
    <style>
     * {
         margin:0; 
         padding:0;
         box-sizing: border-box;
     }

    .background {
        filter: brightness(50%);
        width: 100vw;
        height: 100vh;
        position: fixed;
        background-size: cover;
        z-index: -1;
        background-position: center;
        background-repeat: no-repeat;
    }

    .navbar {
        width: 100%;
        height: 80px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: rgb(0, 0, 0, 1);
        border-bottom: 1px solid #fff;
        color: #fff;
        top: 0;
        left: 0;
        padding: 25px 60px;
        position: fixed;
        box-sizing: border-box
    }

    .navbar ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: space-evenly;

    }

    .navbar ul li {
        list-style: none;
    }

    .navbar ul li a {
        line-height: 55px;
        text-decoration: none;
        color: #fff;
        font-weight: 600;
        text-transform: uppercase;
        padding: 10px 20px;
        transition: 0.5s;
    }

    .navbar ul li a:hover {
        background: #00BFFF;
        border-radius: 6px;
    }
    </style>

</head>
<body>
<nav class="navbar">
     <ul>       
        <li><a href="#">Home</a></li>
     	<li><a href="create.php">Add</a></li>
     	<li><a href="index.php?" onclick="return confirm ('yang bener logout dek?');">Logout</a></li>
     </ul>
</nav>
<img src="assets/img/background3.png" class="background">
</body>
</html>