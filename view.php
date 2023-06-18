<?php
require_once('database.php');
$res = $database->read();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
 
  <title>MY DATA</title>
 
 
  <link rel="stylesheet" href="css/style.css" type="text/css"/>
  <header>
    <nav >
      <label class="logo">YOUR DATA</label>
    <ul>
   <li> <a  href="view.php">View table</a></li>
    <li><a href="index.php"> Main page</a></li>
</ul>
    </nav>
  </header>
  
  
</head>
<body id="viewbody">
  <div class="container">
    <div class="row">
      <table class="content-table">
       <tr class="mainrow"  >
          <th>Mobile_no</th>
          <th>Full Name</th>
          <th>Email</th>
        </tr>

        <?php
        while ($r = mysqli_fetch_assoc($res)) {
        ?>
          <tr>
            <td><?php echo $r['Mobile'] ?></td>
            <td><?php echo $r['Name'] ?></td>
            <td><?php echo $r['Email'] ?></td>
          </tr>
        <?php
        }
        ?>
      </table>
    </div>
  </div>
</body>
</html>
