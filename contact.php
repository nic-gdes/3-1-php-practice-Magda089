<!DOCTYPE html>
<html lang="en">


<?php
$page_title = "Home";
include('./components/head.php');
?>
</head>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    echo $name . ", " . $email . ", " . $message;
}
?>

<?php
if (isset($_POST['submit'])) {
}
?>


<body>
    <?php
    include('./components/nav.php');
    ?>

    <main>
        <h1> Contact </h1>
        <h2>Fill the form so I can contact you!</h2>
        <section class="form">
            <form action="./contact.php" method="POST">
                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                    <?php if ($name == "") {
                        echo "<h2>This is required</h2>";
                    } ?>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="input-group">
                    <label for="message">Your message</label>
                    <textarea name="message" id="message" rows="10"></textarea>
                </div>
                <div class="input-submit"><input type="submit" value="Submit" /></div>
            </form>

        </section>
    </main>
    <?php
    include('./components/footer.php');
    ?>
</body>

</html>