<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>#SpamS | Sell</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-aller.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li><a href="index.php"><span>Home</span></a></li>
          <li><a href="buy.php"><span>Buy</span></a></li>
          <li class="active" ><a href="sell.php"><span>Sell</span></a></li>
          <li><a href="about.php"><span>About Us</span></a></li>
          <li><a href="contact.php"><span>Contact Us</span></a></li>
          <?php
            session_start();
            if ($_SESSION['access'] == "1") {
              echo "<li><a href='logout.php'><span>Log Out</span></a></li>";
              echo "</br><div id='specialone'>Logged In as " . $_SESSION['user'] . "</div";
            }
            else {
              echo "<li><a href='login.php'><span>Log In</span></a></li>";
            }
          ?>
        </ul>
        </ul>
      </div>
      <div class="logo">
        <h1><a href="index.php"><small>Seal the Deal</small> <span>#SpamS</span></a></h1>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/slide1.jpg" width="940" height="271" alt="" /> </a> <a href="#"><img src="images/slide2.jpg" width="940" height="271" alt="" /> </a> <a href="#"><img src="images/slide3.jpg" width="940" height="271" alt="" /> </a> </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Sell An Item</span></h2>
          <div class="clr"></div>
        </div>
        <?php
          session_start();
          if ($_SESSION['access'] == "1") {
            echo '<form action="handlesell.php" method="POST">';
            echo '<b>Item to Sell:</b></br>';
            echo '<input name="itemname" type="text"></input></br>';
            echo '<b>Choose a category:</b></br>';
            echo '<select name = "sell_category">';   
            echo '<option value="select">Please Select</option>';
            echo '<option value="Electronics">Electronics</option>';
            echo '<option value="Clothing">Clothing</option>';
            echo '<option value="Furnitures">Furnitures</option>';
            echo '<option value="Decorations">Decorations</option>';
            echo '<option value="Boooks/Readers">Boooks/Readers</option>';
            echo '<option value="Miscellaneous">Miscellaneous</option>';
            echo '</select></br>';
            echo '<b>Selling Price:</b></br>';
            echo '<input name="price" type="text"></input></br>';
            echo '<b>Price is negotiable?:</b></br>';
            echo '<input name="negotiable" type="checkbox"></input></br>';
            echo '<b>Jacobs Phone(last 4 digits):</b></br>';
            echo '<input name="phone" type="text"></input></br>';
            echo '<b>Description:</b></br>';
            echo '<textarea name="description" cols=48 rows=5></textarea></br>';
            echo '<input type ="submit" value="Submit"></br>';
            echo '</form>';
          }
          else {
            echo "<h3>Please <a href = 'login.php'>Log In</a> first!</h3>";
          }
        ?>
      </div>
      <div class="sidebar">
        <div class="searchform">
          <form id="formsearch" name="formsearch" method="post" action="#">
            <span>
            <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search" type="text" />
            </span>
            <input name="button_search" src="images/search.jpg" class="button_search" type="image" />
          </form>
        </div>
        <div class="clr"></div>
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="buy.php">Buy</a></li>
            <li><a href="sell.php">Sell</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>.</p>
      <p class="rf">Design by Dream <a href="http://www.dreamtemplate.com/">Web Templates</a></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</body>
</html>
