<?php include('server.php') ?>
<?php 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html lang="vi">

<head>
  <title>ShopCon</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
  
<body>
  <div class ="container">
        <div id="header">
            <h1>ShopCon</h1>
                <p>Easy Control Your Shops</p>
                <span>
                <!-- <button class = "logton"> Log Out</button>  -->
                    <a class="homebtn" href='index.php'>Home</a>
                    <a class="logout" href='login.php'>Log Out</a>
                    <form class="searchbar" action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search2">
                    <button type="submit" style="background:blue"><i class="fa fa-search"></i></button>
                    </form>
            </span>
        </div>
         <div id="content">
    


            <span>
            
                    <div id="mySidenav" class="sidenav" style ="width: 0px">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <!-- <a href="#">Func1</a> -->
                        <a href="index3.php">Open Time</a>
                        <a href="index4.php">Make Anouncement</a>
                </div> 
            </span>

                        <span class="navicon" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
   
                        <div id="actingscrn">
                            <div style="margin: 0vh 0vh 0vh 10vh;font-size:larger">
                                <div style="padding: 5vh"></div>
                                <table style="border: 1px solid white; width: 100%; height:fit-content; text-align:center;">
                                    <tr>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>country</th>
                                    <th>Phone number</th>
                                    </tr>

                                <?php
                                   $conn = mysqli_connect("localhost","root","","nhahang") or die ('Không thể kết nối tới database');
                                   $sql = "SELECT * FROM employees";
                                   $result = mysqli_query($conn, $sql);
                                   if (!$result){
                                      die ('Câu truy vấn bị sai');
                                   }
                                   while($row = mysqli_fetch_assoc($result)){
                               ?>   
                               <tr align="center">
                               <td>
                                   <?php echo $row['name_nv']; ?>
                               </td>
                               <td>
                                   <?php echo $row['sex']; ?>
                               </td>
                               <td>
                                   <?php echo $row['country'];?>
                               </td>
                               <td>
                                   <?php echo $row['phonenumber'];?>
                               </td>
                               <?php } ?>    
                                </table>




                            </div>
                
                
                        </div>
            
                        
                    <script src="js/script.js"></script>
            </div>
            <div id="footer">
                <p>Copyright © 2019 Infamous Team.</p>
                <p> Contact us!</p>
                    <a href="https://www.facebook.com/TheUnKnown.KuyMin" target ="_blank">
                    <img src="a.png" alt="TheUnKnown" width="50px" height="50px">
                    </a> 
                <!-- <a href="https://www.facebook.com/TheUnKnown.KuyMin" class="fa fa-facebook" target="_blank"> -->
            </div>
    </div>
</body>

</html>