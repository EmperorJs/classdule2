<!DOCTYPE html>
<html>
<head>
      <title>Login Page</title>
      <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <div id="frm">
         <form action="process.php" method="post" >
              <p>
                  <label>Username:</label>
                  <input type="text" id="user" name="user"/>                 
              </p>  
              <p>  
                  <label>Password:</label>              
                  <input type="password" id="pass" value="pass"/>                 
              </p>           
              <p>                              
                  <input type="submit" id="btn" value="login"/>                 
              </p>
         </form>
     </div>    
</body>      
</html>