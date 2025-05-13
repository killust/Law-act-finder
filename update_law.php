<?php
include 'config.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $law_act = $_POST['law_act'];
    $heading = $_POST['heading'];
    $content = $_POST['content'];

    $sql = "UPDATE laws SET law_act='$law_act', heading='$heading', content='$content' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM laws WHERE id='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Law/Act</title>
</head>
<body>
    <h2>Update Law/Act</h2>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Law/Act: <input type="text" name="law_act" value="<?php echo $row['law_act']; ?>" required><br>
        Heading: <input type="text" name="heading" value="<?php echo $row['heading']; ?>" required><br>
        Content: <textarea name="content" required><?php echo $row['content']; ?></textarea><br>
        <input type="submit" value="Update">
    </form>
    <a href="admin.php">Back to Admin Panel</a>
</body>
</html>
