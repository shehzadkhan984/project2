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
        $book1 = $row['book'];
        $isbn1 = $row['isbn'];
        $auth1 = $row['author'];
      }
      if($bname == $book1){
        $sql="INSERT INTO `request`(`stuname`, `sturoll`, `bookname`, `bisbn`, `bauthor`) VALUES ('$stuname','$sturoll','$bname','$isbn1','$auth1')";
      }else{
        echo '<script>alert("Please Select Book Name");</script>';
    header("refresh:0; url=rfbooks.php");

      }
  
  if($db->query($sql)){
    echo '<script>alert("request has been sent");</script>';
    header("refresh:0; url=rfbooks.php");
  }

  }




?>