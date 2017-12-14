<html>
    <head>
        <title>TASK LIST BY SHANY | TLBS</title>
        <link rel="stylesheet" href="CSS/style.css">
        <link href="https://fonts.googleapis.com/css?family=Saira" rel="stylesheet">
        <link rel="stylesheet" href="libraries/font-awesome-4.7.0/css/font-awesome.min.css">
        <script src="js/jquery-3.2.1.min.js"></script>
    </head>
    <body>
        <div class="container">
            <label><b>Email</b></label>
            <input placeholder="Enter you email" name="email" required id="email"><span id="emailExist"></span>
            <div id="emailError"></div>
            <br>
            <label><b>Password</b></label>
            <input type="password" placeholder="Enter your password" name="password" required id="password">
            <div id="passwordError"></div>
            <br>
            <label><b>Password</b></label>
            <input type="password" placeholder="confirm your password" name="confirmPassword" required id="passwordConfirm">
            <div id="passwordConfirmError"></div>
            <br>
            <button type="submit" id="registerUser">Sign In</button>
        </div>
    </body>
</html>
<script src="js/loginErrorChecker.js"></script>
