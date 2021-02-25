<?php
require_once "reader.php";
require_once "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>


<body>
<div class="table-responsive">
    <table id="datatable" class="table table-hover register">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Value</th>
      </tr>
    </thead>
      
    <tbody>
      
      <?php  
      $text = explode("\n",$text);
      ?> 
      <div id="time" class="container"> 
        <h2>Time of register: <span class="badge"><?php echo $text[0]; ?></p></span></h2>
      </div>
      <tr>
      <?php 
      $time = array_shift($text);
      foreach($text as $line)
      {
      $temp = explode(":",$line);
      $no = $temp[0];
      $data = $temp[1];
      ?>
        <td><?php echo $no; ?></th>
        <td><?php echo $data; ?></td>
      </tr>
      <?php } ?>
      
    </tbody>
  </table>   
</div>  
      
<?php
require_once "footer.php";
?>    

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
</body>
</html>