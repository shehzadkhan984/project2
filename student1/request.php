<?php
include 'conf.php'; 




  if (isset($_POST['send'])) {
  	 $stuname = $_POST['stuname'];
     $sturoll = $_POST['sturoll'];
     $bname = $_POST['bookname'];
  	
     $stmt = $db->prepare("select * from books where book='$bname'");
      $stmt->execute();
   

      while ($row = $stmt->fetch()) 
      {
        $isbn1 = $row['isbn'];
        $auth1 = $row['author'];
      }
        $sql="INSERT INTO `request`(`stuname`, `sturoll`, `bookname`, `bisbn`, `bauthor`) VALUES ('$stuname','$sturoll','$bname','$isbn1','$auth1')";
  
  if($db->query($sql)){
    echo '<script>alert("request has been sent");</script>';
    header("refresh:0; url=rfbooks.php");
  }

  }




?>