<!DOCTYPE html>
<html lang="en">


<?php
$page_title = "Home";
include('./components/head.php');
?>
</head>

<body>
    <?php
    include('./components/nav.php');
    ?>
    <main>
        <h1>My Favorite Travel Destinations</h1>
        <div class="gallery">
            <div class="grid-item">
                <img src="./pictures/brazil.jpg" alt="Brazil">
                <div class="grid-item-content">
                    <h2>Brazil</h2>
                    <p>Explore the vibrant culture and stunning landscapes of Brazil.</p>
                </div>
            </div>
            <div class="grid-item">
                <img src="./pictures/chicago.jpeg" alt="Chicago">
                <div class="grid-item-content">
                    <h2>Chicago</h2>
                    <p>Discover the architectural wonders and rich history of Chicago.</p>
                </div>
            </div>
            <div class="grid-item">
                <img src="./pictures/dublin.jpeg" alt="Dublin">
                <div class="grid-item-content">
                    <h2>Dublin</h2>
                    <p>Experience the charm and hospitality of Dublin, Ireland.</p>
                </div>
            </div>
            <div class="grid-item">
                <img src="./pictures/poland.jpg" alt="Poland">
                <div class="grid-item-content">
                    <h2>Poland</h2>
                    <p>Immerse yourself in the rich history and cultural heritage of Poland.</p>
                </div>
            </div>
            <div class="grid-item">
                <img src="./pictures/scotland.webp" alt="Scotland">
                <div class="grid-item-content">
                    <h2>Scotland</h2>
                    <p>Explore the breathtaking landscapes and historic castles of Scotland.</p>
                </div>
            </div>
            <div class="grid-item">
                <img src="./pictures/tokyo.jpeg" alt="Tokyo">
                <div class="grid-item-content">
                    <h2>Tokyo</h2>
                    <p>Experience the unique blend of tradition and modernity in Tokyo, Japan.</p>
                </div>
            </div>
        </div>
    </main>
    <?php
    include('./components/footer.php');
    ?>