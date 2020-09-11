<html>
<head>
<title> user login and registration </title>
<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 

  </head>
  <body>
  <style>
      body {
          background-image: url('mobile_bg.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
      }
  </style>
  <div class="container">
    <div class="login-box">
    <div class="row">
    <div class="center">
           <h2> Login Here </h2>
           <form action="validation.php" method="post">
           <div class="form-group">
            <label> first name</label>
            <input type="text" name="user_first_name" class="form-control" required>
           </div>
               <label> last name</label>
               <input type="text" name="user_last_name" class="form-control" required>


             <div class="form-group">
            <label> Password</label>
            <input type="password" name="password" class="form-control" required>
           </div>

           <button type="submit" class="btn btn-primary"> Login</button>
          <p>dont have account? click here to <a href="register.php">register</a></p>
          
          </form>
        </div>

 


       </div>



     </div>
   </div>





 
   </body>
   </html>