<?php
     $con = mysqli_connect('127.0.0.1','root','');
     if(!$con)
     {
         echo 'Not connected';
     }
     
     //$sql = "SELECT id, course, tutor, timeline, deadline, semester  from assignment";
     //$result = $conn-> query($sql);
     
     if (!mysqli_select_db($con,'classassignment'))
     {     
         echo 'Database Not Selected';
     }

     $course = $_POST['course'];
     $tutor = $_POST['tutor'];
     $time = $_POST['time'];
     $deadline = $_POST['deadline'];
     $semester = $_POST['semester'];


     $sql = "INSERT into assignment (course, tutor, timeline, deadline, semester) VALUES ('$course', '$tutor', '$timeline', '$deadline', '$semester')";
         
     if (!mysqli_query($con,$sql)){

          echo 'Assignment not submitted';
     }
     else{
          echo 'Assignment recorded';
     }
     header ("refresh:2; url=assig.php");   
     ?>