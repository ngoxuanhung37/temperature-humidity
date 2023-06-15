<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="30">
<link rel="icon" type="image/png" href="logoptit.png">
<title>Nhiệt độ- Độ ẩm</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<style>
#c4ytable {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
	background-image: url(khihauthanhphohcm.jpg);
}

#c4ytable td, #c4ytable th {
    border: 1px solid #ddd;
    padding: 8px;
}



#c4ytable tr:hover {background-color: #ddd;}

#c4ytable th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: lightblue;
    color: white;
}
.navbar{
	display: flex;
	align-item : center;
	font-size: 36 px;
}
.myDiv {
  border: 1px red;
  background-color: lightblue;    
  text-align: center;
  font-size: 36px;
}
</style>

<?php
    //Connect to database and create table
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "btcuoiki";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
        echo "<a href='install.php'>If first time running click here to install database</a>";
    }
?> 


<div id="cards" class="cards">
<div class = "myDiv">HỌC VIỆN CÔNG NGHỆ BƯU CHÍNH VIỄN THÔNG CƠ SỞ TẠI TP. HCM</div>
<div class="container">
  <div align="center">
    <h2><marquee><font color = "#DB7093"<b>CƠ SỞ DỮ LIỆU VỀ NHIỆT ĐỘ VÀ ĐỘ ẨM TRÊN WEBSITE</b></marquee></h2>
  </div>
<hr>


<?php 
    $sql = "SELECT * FROM logs ORDER BY id DESC";
    if ($result=mysqli_query($conn,$sql))
    {
      // Fetch one and one row
      echo "<TABLE id='c4ytable'>";
      echo "<TR> <TH>STT</TH> <TH>NHIỆT ĐỘ</TH> <TH>ĐỘ ẨM</TH> <TH>NGÀY</TH> <TH>THỜI GIAN</TH></TR>";
      while ($row=mysqli_fetch_row($result))
      {
        echo "<TR>";
        echo "<TD>".$row[0]."</TD>";
        echo "<TD>".$row[1]."</TD>";
        echo "<TD>".$row[2]."</TD>";
        //echo "<TD>".$row[3]."</TD>";
        echo "<TD>".$row[4]."</TD>";
        echo "<TD>".$row[5]."</TD>";
        echo "</TR>";
      }
      echo "</TABLE>";
      // Free result set
      mysqli_free_result($result);
    }

    mysqli_close($conn);
?>
<footer class="page-footer font-small bg-warning">
<div class="footer-copyright text-center">© 2022 Copyright
  <a class="text-white" href="https://www.facebook.com/profile.php?id=100026729565170"><font color="#800080">@NGÔ XUÂN HÙNG </font></a></h6>
</div>
</footer>
</body>
</html>