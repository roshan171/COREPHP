<?php

include_once 'config.php';
include_once 'upload.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data View</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
     
</head>
  <body>

<div class="container-fluid">
  <div class="row">

            <form class="form-horizontal" action="function.php" method="post" name="upload_excel"   
                      enctype="multipart/form-data">
                  <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <input type="submit" name="Export" class="btn btn-success mt-3" value="Export File"/>
                            </div>
                   </div>                    
            </form>  
    <div class="col-8 col-md-8 col-lg-8 col-xl-8">
      
    </div>

<div class="col-2 col-md-2 col-lg-2 col-xl-2">
  <form class="form-horizontal" action="upload.php" method="post"

                      enctype="multipart/form-data">
                  <div class="form-group">
                    
                  <input type="file" name="file" class="mt-3">
                            <div class="col-md-4 col-md-offset-4">
                                <input type="submit" name="Import" class="btn btn-primary mt-3" value="Import"/>
                            </div>
                   </div>                    
            </form>  
    </div>
</div>        

</div>


		<h1 class="text-center text-primary">Order Details</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Contact</th>

    </tr>
  </thead>
  <tbody>
    <tr>

    <?php
        $rows=mysqli_query($conn,"SELECT * FROM details");
        $i=1;
?>

<?php  foreach ($rows as $row) :  ?>
  <tr id="<?php  echo $row['id'] ; ?>">  
  </tr>
  <td><?php echo $i++; ?></td>
      <td><?php echo $row['username'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['password'];?></td>
      <td><?php echo $row['mobile'];?></td>
    </tr>



    
  </tbody>

    
  <?php endforeach ?>
</table>



</body>
</html>