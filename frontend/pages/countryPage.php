<?php require_once('connect.php'); 
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
      <a class="contact">CONTACT</a>
      <a class="result">RESULT</a>
      <a class="country">COUNTRY</a>
      <a class="result">RESULT</a>
      <a class="country">COUNTRY</a>
      <a class="profile">PROFILE</a>
    </nav>
    <div class="content">
      <div class="left">
        <div class="credit"><h1>CREDIT LEFT: 0/3</h1></div>
        <div class="university">
          <div class="first-uni"><h2>University name</h2></div>
          <div class="second-uni"><h2>University name</h2></div>
          <div class="third-uni"><h2>University name</h2></div>
        </div>
        <div class="confirm">
          <h2>You have select <br />all 3 universities</h2>
          <b> Please Confirm your choice</b>
          <div class="add">
            <p>Confirm</p>
          </div>
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
              <b>MORE</b>
            </div>
            <h4><?= $row['Country'] ?></h4>
            <h4><?= "GPA Requirement: ".$row['GPA_Requirement'] ?></h4>
            <h4><?= "English score: ".$row['Engscore_Requirement'] ?></h4>
            <textarea name="" id="">Input your reason</textarea>
            <div class="add">
              <p>Add</p>
            </div>
          </div>
        </div>
        <?php }
        ?>
        <!-- *****************************//-->
      </div>
    </div>
  </body>
</html>