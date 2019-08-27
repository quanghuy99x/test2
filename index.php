<!DOCTYPE html>
<html>
    <head>
        <title>ATN Shop</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            .container{
                width: 100%;
                margin: 0 auto;
            }
            .container img{
                width: 100%;

            }
            .footer{
                width: 100%;
                height: 100px;
                background-color: white;
            }
            .main{
                width: 100%;
                overflow: hidden;
                background-color: white;
            }

            .image img{
                width: 100%;
            }
            .detail{
                width: 100%;
                float: right;
                text-align: center;
            }
            .title{
                background-color: white;
                font-size: 25px;
                line-height: 70px;
                padding-left: 5px;
                font-weight: bold;
                color: purple;
            }
            .detail{
                padding-left: 15px;
                box-sizing: border-box;
            }
            .des{
                color: red;
                font-size: 18px;
                padding-left: 5px;
                padding-top: 1px;
                font-weight: normal;
            }

            .list{
                width: 100%;
                padding-top: 10px;
            }
            .item{
                width: 25%;
                float: left;
                padding: 5px;
                box-sizing: border-box;
            }
            .iimage img{
                width: 100%;
                height : 50%;
            }
            .nav{
                width: 100%;
                height: 50px;
                background-color: pink;
            }
            .nav ul{
                margin: 0;
                padding: 0;
                list-style: none;
            }
            .nav a{
                color:purple;
                font-size: 30px;
                text-decoration: cornflowerblue;
                line-height: 50px;
                padding-left: 185px;
                display: block;
            }
            .nav li{
                float: left;
            }
            .nav a:hover{
                color: #792323;
            }
            .nav li:hover{
                background-color:#DCF4F6;
            }
        </style>
    </head>
    <body>
        <?php
require_once './functions.php';
//load items
$query = "SELECT iId, iName, iDescription, iPrice, iStatus, iSize, iImage FROM Item ";
$result = queryMysql($query);
$error = $msg = "";
if (!$result){
    $error = "Couldn't load data, please try again.";
}
//load catalogue
$query1 = "SELECT cId, cName, cDescription from Catalogue";
$result1 = queryMysql($query1);
$error1 = $msg1 = "";
if (!$result1){
    $error1 = "Couldn't load data, please try again.";
}
?>

        <div class="container">
            <center><img src="images/a3.jpg"></center>
            <div class="header">
                
                <div class="nav">
                    <ul>
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="./login.php">Login</a></li>
                        <li><a href="#Lego">Lego</a></li>
                        <li><a href="#Figure">Figure</a></li>
                        <li><a href="#Car">Car</a></li>
                    </ul>
                </div>
            </div>
            <div class="main">
                <div class="hot">
                    <div class="detail">
                        <div class="title">
                            <i>ATN Store</i>
                        </div>
                        <div class="des">
                            Where You Can Find Amazing Toys ! 
                        </div>
                    </div>
                </div>
                <div class="seperator">
                </div>
                <div class="list w3-row">
                    <div class="" id="Lego"><h2>Lego</h2>
                    <?php
     require_once './functions.php';
     $query = "SELECT iId, iName, iDescription, iPrice, iStatus, iSize, iImage,cName FROM Item,Catalogue WHERE Item.catalogueId=Catalogue.cId AND cName LIKE '%Bag%'  ORDER BY cName";
     $result = queryMysql($query);
     $error = $msg = "";
     if (!$result){
      $error = "Couldn't load data, please try again.";
     }
     while ($row = mysqli_fetch_array($result)) {
        $iId = $row[0];
        $iName = $row[1];
        $iDescription = $row[2];
        $iPrice = $row[3];
        $iStatus = $row[4];
        $iSize = $row[5];
        $iImage = $row[6];
        
        echo "<div class='sp w3-quarter w3-card w3-center ' ><div class='w3-green w3-padding-large'>$iStatus</div><div ><img onclick=\"document.getElementById('$iName').style.display='block'\" id='testimg' src='./images/item/". $iImage . "' width='100%'></div><div class='name'><h3>$iName</h3></div><h3 class=w3-green>Price: $iPrice$</h3></div>"
                . "<!--SHOW MORE INFORMATION-->
  <div id='$iName' class='w3-modal'>
      <div class='w3-modal-content w3-animate-top w3-card-4'>
        <div class='w3-container w3-green w3-center w3-padding-20'> 
          <span onclick=\"document.getElementById('$iName').style.display='none';\"
         class='w3-button w3-red w3-xlarge w3-display-topright'>×</span>
          <h2>$iName</h2>
        </div>
        <div class='w3-container w3-row'>
          <div class='w3-half'>
              <img src='./images/item/". $iImage . "' width='100%'>
          </div>
          <div class='w3-half w3-left'>
              <h3>Price:$iPrice$</h3>
              <p>Description:$iDescription.</p>
              <h4>$iSize</h4>                           
          </div>                                                    
        </div>
        <button class='w3-button w3-green w3-section' onclick=\"document.getElementById('$iName').style.display='none';\">Close <i class='fa fa-remove'></i></button>
      </div>
    </div>";                                                                                       
    }
?>
     
                </div>        
                    <div class="list w3-row">
                    <div class=""id="Figure"><h2>Figure</h2>
                    <?php
     require_once './functions.php';
     $query = "SELECT iId, iName, iDescription, iPrice, iStatus, iSize, iImage,cName FROM Item,Catalogue WHERE Item.catalogueId=Catalogue.cId AND cName LIKE '%Leather%'  ORDER BY cName";
     $result = queryMysql($query);
     $error = $msg = "";
     if (!$result){
      $error = "Couldn't load data, please try again.";
     }
     while ($row = mysqli_fetch_array($result)) {
        $iId = $row[0];
        $iName = $row[1];
        $iDescription = $row[2];
        $iPrice = $row[3];
        $iStatus = $row[4];
        $iSize = $row[5];
        $iImage = $row[6];
        
        echo "<div class='sp w3-quarter w3-card w3-center ' ><div class='w3-green w3-padding-large'>$iStatus</div><div ><img onclick=\"document.getElementById('$iName').style.display='block'\" id='testimg' src='./images/item/". $iImage . "' width='100%'></div><div class='name'><h3>$iName</h3></div><h3 class= w3-green>Price:$iPrice$</h3></div>"
                . "<!--SHOW MORE INFORMATION-->
  <div id='$iName' class='w3-modal'>
      <div class='w3-modal-content w3-animate-top w3-card-4'>
        <div class='w3-container w3-green w3-center w3-padding-20'> 
          <span onclick=\"document.getElementById('$iName').style.display='none';\"
         class='w3-button w3-red w3-xlarge w3-display-topright'>×</span>
          <h2>$iName</h2>
        </div>
        <div class='w3-container w3-row'>
          <div class='w3-half'>
              <img src='./images/item/". $iImage . "' width='100%'>
          </div>
          <div class='w3-half w3-left'>
              <h3>Price:$iPrice$</h3>
              <p>Description:$iDescription.</p>
              <h4>$iSize</h4>                           
          </div>                                                    
        </div>
        <button class='w3-button w3-green w3-section' onclick=\"document.getElementById('$iName').style.display='none';\">Close <i class='fa fa-remove'></i></button>
      </div>
    </div>";                                                                                       
    }
?>
     
                </div>
                                        </div>        
                    <div class="list w3-row">
                    <div class=""id="Car"><h2>Car</h2>
                    <?php
     require_once './functions.php';
     $query = "SELECT iId, iName, iDescription, iPrice, iStatus, iSize, iImage,cName FROM Item,Catalogue WHERE Item.catalogueId=Catalogue.cId AND cName LIKE '%Pants%'  ORDER BY cName";
     $result = queryMysql($query);
     $error = $msg = "";
     if (!$result){
      $error = "Couldn't load data, please try again.";
     }
     while ($row = mysqli_fetch_array($result)) {
        $iId = $row[0];
        $iName = $row[1];
        $iDescription = $row[2];
        $iPrice = $row[3];
        $iStatus = $row[4];
        $iSize = $row[5];
        $iImage = $row[6];
        echo "<div class='sp w3-quarter w3-card w3-center ' ><div class='w3-green w3-padding-large'>$iStatus</div><div ><img onclick=\"document.getElementById('$iName').style.display='block'\" id='testimg' src='./images/item/". $iImage . "' width='100%'></div><div class='name'><h3>$iName</h3></div><h3 class= w3-green>Price:$iPrice$</h3></div>"
                . "<!--SHOW MORE INFORMATION-->
  <div id='$iName' class='w3-modal'>
      <div class='w3-modal-content w3-animate-top w3-card-4'>
        <div class='w3-container w3-green w3-center w3-padding-20'> 
          <span onclick=\"document.getElementById('$iName').style.display='none';\"
         class='w3-button w3-red w3-xlarge w3-display-topright'>×</span>
          <h2>$iName</h2>
        </div>
        <div class='w3-container w3-row'>
          <div class='w3-half'>
              <img src='./images/item/". $iImage . "' width='100%'>
          </div>
          <div class='w3-half w3-left'>
              <h3>Price:$iPrice$</h3>
              <p>Description:$iDescription.</p>
              <h4>$iSize</h4>                           
          </div>                                                    
        </div>
        <button class='w3-button w3-green w3-section' onclick=\"document.getElementById('$iName').style.display='none';\">Close <i class='fa fa-remove'></i></button>
      </div>
    </div>";                                                                                       
    }
?>   
                </div>  
            </div>
            <div class="footer">
                 <div class="w3-center "</div>
                 <p><b>Associated with</b></br><img style="width: 100px; height:100px ;" src="images/a5.jpg" alt=""> <img style="width: 100px; height:100px ; background-color:#FFFFFF" src="images/a6.jpg" alt=""><img style="width: 100px; height:100px ; background-color:#FFFFFF" src="images/a7.jpg" alt=""></p>
            </div>
        </div>
    </body>
</html>

