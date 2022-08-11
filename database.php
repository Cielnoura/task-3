<html>
  <style>

  body {
    background: linear-gradient(-45deg, #210242, #9198e5);
      align-items: center;
      color: white;
      display: flex;
font-family: 'Inter UI', sans-serif;
height: 100vh;
justify-content: center;
margin: 0;
width: 100vw;
    }

<?php

$conn = mysqli_connect("localhost", "root", '', "esp32");

if (mysqli_connect_errno()) {
    die('Unable to connect to database ' . mysqli_connect_error());
}

header("Access-Control-Allow-Origin: *");
$qry = $conn->prepare("SELECT * FROM movement ORDER BY ID DESC LIMIT 1");

$qry->execute();
$qry->bind_result($id, $direction, $duration, $dateTime);


while ($qry->fetch()) {
    $temp = array();
    $temp['ID'] = $id;
   
    $temp['Duration'] = $duration;
    array_push($columns, $temp);
}

echo json_encode($columns);
</style>
    <body>
<br>
<br>
            <h1> Result page  </h1>
          </br>
              </br>
                <?php
                  

                    $conn=mysqli_connect($SERVER,$username,$password,$dbname);
                   if(empty($_GET['value']))
                   {
                    echo "Give vaule <br>";
                    echo " Not submit";
                   }
                   else
                   {
                    $value=$_GET['value'];
                    echo "  The value is : " . $_GET['value'];
                    echo " Successfully submit";
                   }




                ?>
            </form>


    </body>
</html>
