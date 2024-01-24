
<?php
if ($_SERVER["REQUEST_METHOD"] == ){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    echo $name . ", " . $email . ", " . $message;
}
?>

<?php
if (isset ($_POST['submit'])) {
    
}
?>


<body>
    <h1> Contact </h1>
</body>
</html>