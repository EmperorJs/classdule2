<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
        <title>Create Assignment</title>
        <link href="main.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="Gridlayout.css" type="text/css" rel="stylesheet">
        <p><img src="https://www.china-admissions.com/wp-content/uploads/2015/12/nankai-university-300x109.png"> 
        <p><img src="http://www.ace-smart.com/images/brochure-banner.jpg"><p>  
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title>Assignment</title>
</head>
<body>
        <header>
                <div class = "a">
                      <nav>
                       <ul>
                         <li><a href="index.php">Home</a> </li> 
                         <li><a href="page2.html">About Us</a> </li> 
                         <li><a href="page3.html">Infor</a> </li> 
                         <li><a href="page4.html">Contact Us</a> </li>                              
                       </ul>
                     </nav> 
             </div>      
             </header> 


             <form action = "register.php" method = "post">
        <table>
            <tr>
                <th></th>
                <th>
                <h2>Create Assignment</h2>
             </th>
             </tr>
             
             <tr>
                 <td>Course Name:</td>
                 <td><input type="text" name="course"></td>
             </tr>  
             <tr>
                 <td>Tutor:</td>
                 <td><input type="text" name="tutor"></td>
             </tr> 
             <tr>
                 <td>Timeline:</td>
                 <td><input type="text" name="timeline"></td>
             </tr> 
             <tr>
                 <td>Deadline:</td>
                 <td><input type="text" name="deadline"></td>
             </tr> 
             <tr>
                 <td>Semester:</td>
                 <td><input type="text" name="semester"></td>
             </tr>   
             <tr>
             <td></td>
                 <td><input type="submit" name="register"></td> 
             </tr>
            </table>
         </form>



<style type="text/css">
table{
  border-collapse: collapse;
      width:100%;
      color:#d96459;
      font-family:monospace;
    font-size:25px;
    text-align:center;
}
th{
  background-color:black;
  color:blueviolet;
}
</style>
<table> 
  <br><br>
        <tr>
           <th>id</th>        
           <th>course</th>     
           <th>tutor</th>      
           <th>timeline</th>     
           <th>deadline</th>     
           <th>semester</th> 
         </tr>
           
     <?php
     $conn = mysqli_connect("localhost","root","","classassignment");
     if($conn-> connect_error)
     {
         die ("Not connected:". $conn-> connect_error);
     }
     
     $sql = "SELECT id, course, tutor, timeline, deadline, semester  from assignment";
     $result = $conn-> query($sql);
     
     if ($result-> num_rows >0)
     {
       while ($row = $result-> fetch_assoc()){
     
         echo "<tr><td>". $row["id"]."</td><td>". $row["course"]."</td><td>". $row["tutor"]."</td><td>". $row["timeline"]."</td><td>". $row["deadline"]."</td><td>". $row["semester"]."</td></tr>";
     }
         echo "</table>";
     }
      else{
     echo "0 result";
         }
     $conn-> close();    
     ?>
     </table> 


</body>
</html>