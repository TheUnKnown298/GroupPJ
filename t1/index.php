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
                        <a href="index2.php">Employees</a>
                        <a href="index3.php">Open Time</a>
                        <a href="index4.php">Make Anouncement</a>
                </div> 
            </span>

                <span class="navicon" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
   
                        <div id="actingscrn">
                            <div style="margin: 10vh 40vh auto 40vh;font-size:larger">
                            <h1>Product List</h1> 
    <table> 
        <tr> 
            <th>Id</th> 
            <th>Name</th> 
            <th>Price</th> 
            <th>Action</th> 
        </tr> 
                            <?php
                                 $conn = mysqli_connect("localhost","root","","nhahang") or die ('Không thể kết nối tới database');
                                 $sql = "SELECT * FROM items";
                                 $result = mysqli_query($conn, $sql);
                                 if (!$result){
                                    die ('Câu truy vấn bị sai');
                                 }
                                 while($row = mysqli_fetch_assoc($result)){
                             ?>   
                             <tr style="text-align:center">
                             <td>
                                 <?php echo $row['id_items']; ?>
                             </td>
                             <td>
                                 <?php echo $row['items_name']; ?>
                             </td>
                             <td>
                                 <?php echo $row['price'];?>
                             </td>
                             <td><a href = "index.php?page=index&action=add&id=<?php echo $row['id_items'] ?>">Add to cart</a></td>
                             <?php } ?>    
        
    </table>
                             
                                   
                            
                                </div>
                            </div>
                            <div id="sidebar">
                            <php require(cart.php);?>
                            </div> 
            
                        
                    <script src="js/script.js"></script>
                    <div class="card">
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