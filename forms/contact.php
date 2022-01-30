<?php
 
  $con=mysqli_connect('localhost','root','','contactpage');
 if(!$con)
 {  ?>
          <script>alert('No connection..');</script>
 <?php }

$massage='';
 if(isset($_POST['submit']))
 {
   $name=$_POST['name'];
   $email=$_POST['email'];
   $subject=$_POST['subject'];
   $message=$_POST['message'];
      if($name!='' && $email!='' && $subject!='' && $message!='')
      {
          $q="INSERT INTO `contact_tbl`(`name`, `email`, `Subject`, `Message`) VALUES ('$name','$email','$subject','$message')";
          $ans=mysqli_query($con,$q);
          if($ans)
          {
              $massage='Your message has been sent. Thank you!';
          }
          else
          {
            $massage='Your message has Not been sent';
          }
      }
 }
?>
