<!DOCTYPE html>
<html lang="en">


<?php
$page_title = "Home";
include ('./components/head.php');
?>
</head>

<body>
 <?php
include('./components/nav.php');
 ?>
 <main>
 <h1>My Favorite Travel Destinations</h1>
 <div class="gallery">
 <div class="grid-item grid-item-1"><img src="./pictures/brazil.jpg"></div>
 <div class="grid-item grid-item-2"><img src="./pictures/chicago.jpeg" ></div>
 <div class="grid-item grid-item-3"><img src="./pictures//dublin.jpeg" ></div>
 <div class="grid-item grid-item-4"><img src="./pictures/poland.jpg" ></div>
 <div class="grid-item grid-item-5"><img src="./pictures/scotland.webp" ></div>
 <div class="grid-item grid-item-6"><img src="./pictures/tokyo.jpeg" ></div>
 </div>
 </main>
 <?php
include('./components/footer.php');
 ?>