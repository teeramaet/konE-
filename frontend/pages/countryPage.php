<?php
session_start();
require_once('connect.php'); 
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <link rel="stylesheet" href="countryPageStyle.css" />
  <body>
    <nav class="navbar">
    <a href="contactPage.php" class="contact">CONTACT</a>
      <a href="congratPage.php" class="result">RESULT</a>
      <a href = "countryPage.php" class="country">COUNTRY</a>
      <a href = "editProfilePage.html" class="profile">PROFILE</a>
      <a href = "loginPage.html" class="login">LOGIN</a>
    </nav>
    <div class="content">
      <div class="left">
        
        <div class="credit"><h1>YOU HAVE </br>1 CREDIT</h1></div>
        <div class="university">
          <h2>Choose your dream university</h2>
        </div>
        <div class="confirm">
          <h2>Click the add button to request this program</h2>
        </div>
      </div>
      <div class="right">
        <!-- *****************************//-->
        <?php
        $q="select * from program p join university u on u.id = p.universityID";
        $result=$mysqli->query($q);
                  if(!$result){
                    echo "Select failed. Error: ".$mysqli->error ;
                    return false;
                  }
        while($row = $result->fetch_array()){?>

        <div class="card">
        <img src="<?= $row['image_URL'] ?>" alt="" />
          <div class="container">
            <div class="container-between">
              <h3><?= $row['University_name'] ?></h3>
              <a href="<?="countryInfo.php?ID=".$row['ID']?>"<b>MORE</b></a>
            </div>
            <h4><?= $row['Country'] ?></h4>
            <h4><?= "GPA Requirement: ".$row['GPA_Requirement'] ?></h4>
            <h4><?= "English score: ".$row['Engscore_Requirement'] ?></h4>
            <textarea name="" id="" placeholder="Input your reason"></textarea>
            
            <form action="" method="post" class="add">
              <input type="submit" name="add" value="Add" class="add">
            </form>
          </div>
        </div>
        <?php }
        ?>
 
        <!-- *****************************//-->
      </div>
    </div>
  </body>
</html>
