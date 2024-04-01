<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title></title>


 <link rel="stylesheet" href="style.css">
</head>
<body>

 <div class="wrapper">
         <div class="title">
            HOSTEL
         </div>
         <form action="login_action.php" method="post">
            
                        
            <div class="field">
               <input type="email" required name="email">
               <label>Enter Email</label>
            </div>
            <div class="field">
               <input type="password" required name="pass">
               <label> Enter Password</label>
            </div>
            <div class="content">
               <!-- <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div> -->
               <!-- <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div> -->
            </div>
            <div class="field">
               <input type="submit" value="Login">
            </div>
            <div class="signup-link">
               Not a member? <a href="signup.php">Signup now</a>
            </div>
         </form>
      </div>
</body>
</html>