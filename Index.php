<!-- anukumari232009@gmail.com -->

<?php
$message = "";

try {

    $name = isset($_GET['name']) ? $_GET['name'] : "Anu";

    $url = "http://localhost/mini-api/api/greet.php?name=" . urlencode($name);

    $json = file_get_contents($url);

    if ($json === FALSE) {
        throw new Exception("API not reachable.");
    }

    $data = json_decode($json, true);

    if (!$data) {
        throw new Exception("Invalid JSON.");
    }

    $message = htmlspecialchars($data["message"]);

} catch (Exception $e) {
    $message = "Something went wrong!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mini API</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Mini API Demo</h1>

    <form method="GET">
        <input type="text" name="name" placeholder="Enter your name">
        <br><br>
        <button type="submit">Call API</button>
    </form>

    <h2><?php echo $message; ?></h2>
</div>

</body>
</html>
