<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="views/customer/recourses/css/login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">

    <form action="index.php?role=customer&action=loginValidate" method="POST">
        <input type="text" name="firstName" value="" placeholder="First Name">
        <input type="text" name="lastName" value="" placeholder="Last Name">
        <input type="email" name="email" value="" placeholder="Email">
        <input type="password" name="password" value="" placeholder="Password">
        <button type="submit" class="formButton">Sign Up</button>
    </form>

    <div class="sections">

        <div class="signup">
            <p>Not with us? Sign up Now!</p>
            <button type="button" name="signup" class="outline">Sign Up</button>
        </div>

        <div class="login">
            <p>Already have an account?</p>
            <button type="button" name="login" class="outline">Login</button>
        </div>
    </div>
    
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script><script  src="views/customer/recourses/js/login.js"></script>

</body>
</html>

