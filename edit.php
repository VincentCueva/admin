<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM training WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Training</title>
</head>
<body>

<div class="container">
    <h2>Edit Training</h2>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label>Title:</label>
        <input type="text" name="title" value="<?php echo $row['title']; ?>" required><br>
        <label>Procedure:</label>
        <textarea name="procedure" rows="4" cols="50" required><?php echo $row['procedure']; ?></textarea><br>
        <label>Steps:</label>
        <textarea name="steps" rows="4" cols="50" required><?php echo $row['steps']; ?></textarea><br>
        <label>Reps:</label>
        <input type="text" name="reps" value="<?php echo $row['reps']; ?>" required><br>
        <input type="submit" value="Update Training">
    </form>
</div>

</body>
</html>
