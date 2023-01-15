<?php
 
include_once 'config.php';

if(isset($_POST["Export"])){
     
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=mydata.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('ID', 'Username', 'Email', 'Password', 'Mobile'));  
      $query = "SELECT * from  details";  
      $result = mysqli_query($conn, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  

/*

 if(isset($_POST["Import"])){
    
    $filename=$_FILES["file"]["tmp_name"];    
     if($_FILES["file"]["size"] > 0)
     {
        $file = fopen($filename, "r");
          while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
           {
             $sql = "INSERT into details(id,username,email,password,mobile) 
                   values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."')";
                   $result = mysqli_query($conn, $sql);
        if(!isset($result))
        {
          echo "<script type=\"text/javascript\">
              alert(\"Invalid File:Please Upload CSV File.\");
              window.location = \"csv.php\"
              </script>";    
        }
        else {
            echo "<script type=\"text/javascript\">
            alert(\"CSV File has been successfully Imported.\");
            window.location = \"view.php\"
          </script>";
        }
           }
      
           fclose($file);  
     }
  }   */
 
 ?>	
 











	