<?php
   // // $db=new PDO('msql:host=localhost;dbname=ajaxdata','root','pidle');
   // $page=isset($_GET['p'])?$_GET['p']:'';
   // if($page=='add'){
   //   $name1=$_POST['n1'];
   //   $name2=$_POST['n2'];
   //   $stmt = $db->prepare("insert into crud values('',?,?,?,?)");
   //   $stmt->bindParam(1,$name1);
   //   $stmt->bindParam(2,$name2);
   //   if($stmt->execute()){
   //     echo "success add data"
   //          }
   //     else{
   //       echo"fail add data"
   //   }
   //
   //
   // }
   // elseif($page=='edit'){
   //
   // }
   // elseif($page=='del'){
   session_start();
   $conn=mysqli_connect('localhost','root','');
   mysqli_select_db($conn,'ajaxdata');
   $name1=$_POST['Name1'];
   $registerno1=$_POST['RegisterNo1'];
   $name2=$_POST['Name2'];
   $registerno2=$_POST['RegisterNo2'];
   $demo=$_POST['demo'];
   $gender=$_POST['g'];
   $bcaevent=$_POST['gn'];
   $bbaevent=$_POST['one-way'];
   $contact=$_POST['Contactno'];
   $sql="INSERT INTO crud(name1,registerno1,name2,registerno2,class,gender,bcaevent,bbaevent,contact) VALUES('$name1','$registerno1','$name2','$registerno2','$demo','$gender','$bcaevent','$bbaevent','$contact')";
   if($conn->query($sql)==TRUE){
     echo "success";
   }

   $conn->close();
?>
