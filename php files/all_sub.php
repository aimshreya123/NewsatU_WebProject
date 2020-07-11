<html>
<head>
  <link rel="stylesheet" type="text/css" href="style_main.css">
  <link rel="stylesheet" type="text/css" href="vendor.css">
  <style type="text/css">
    body{
      font-family: "Times New Roman";
    }
  </style>
</head>
<body background="1.jpg">
  <div class="top_nav">
  <span onclick="openNav()">&#9776;</span>
    <b><a href="logout.php">LOGOUT</a></b>
    </div>
</div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br>
  <center><h2>VENDOR<br>ZONE</h2></center>
  <hr width="90%" align="center">
  <dl>
  <dt>SETTINGS</dt>
  <dd>Reset Password</dd>
  <dd>Update Profile</dd>
  <a href = "all_cus.php"><dt>VIEW CUSTOMERS</dt></a>
  <dd>Assign Delivery Boy</dd>
  <dd>Update Details</dd>
  <dt>BILL RECORDS</dt>
  <a href = "all_sub.php"><dd>View All Subscriptions</dd></a>
</dl>
  </div>
  <img src="News@U (1).png" class="logo"> 
<main><br><br><br>
  <center>
  <div class="vendor_intro">
    <?php
      $connection=mysqli_connect('localhost','root','root','news@u');
      if(!$connection)
      {
        die("Couldn't connect to server");
      }

  $sql = "SELECT * FROM `subscrpition_table`";
  $query_result=mysqli_query($connection, $sql);
  $count=mysqli_num_rows($query_result);
  if($count > 0)
  {
    echo"<table> <tr><th> Serial<br>Number </th><th>C_Id </th> <th>V_Id </th><th>DB_Id </th><th> Address </th><th>Sub_type </th><th> News_name </th></tr>";
    while ($record=mysqli_fetch_array($query_result)) 
    {
      echo" <tr><td>",$record["Sr.No."],"</td><td>",
              $record["Cus_Id"],"</td><td>",
              $record["Vendor_Id"],"</td><td>",
              $record["DB_Id"],"</td><td>",
              $record["Address"],"</td><td>",
              $record["Subscription type"],"</td><td>",
              $record["Newspaper Name"],"</td></tr>",;
    }
    echo"</table>";
  }
  mysqli_close($connection);
?>
  </div>
</center>
</main>
<footer>
<div class="contact">
  <a href="contact.html">Can't find what you're looking for? <span>Contact us</span> and one of our customer care agents will assist you.</a>
</div>
</footer>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>