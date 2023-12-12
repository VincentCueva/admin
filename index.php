<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Training Guide</title>
</head>

<body>

    <div class="container">
        <h1>Training Guide</h1>

        <?php
        include('db.php');

        function displayTrainingData()
        {
            global $conn;
            $sql = "SELECT * FROM training";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                echo "<table border='1'>
                <tr>
                    <th>Title</th>
                    <th>Procedure</th>
                    <th>Steps</th>
                    <th>Reps</th>
                    <th>Action</th>
                </tr>";

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                    <td>{$row['title']}</td>
                    <td>{$row['procedure']}</td>
                    <td>{$row['steps']}</td>
                    <td>{$row['reps']}</td>
                    <td>
                        <a href='edit.php?id={$row['id']}'>Edit</a> |
                        <a href='delete.php?id={$row['id']}'>Delete</a>
                    </td>
                </tr>";
                }

                echo "</table>";
            } else {
                echo "No training data available.";
            }
        }

        displayTrainingData();
        ?>

        <h2>Add Training</h2>
        <form action="add.php" method="post" enctype="multipart/form-data">
            <label>Title:</label>
            <input type="text" name="title" required><br>
            <label>Procedure:</label>
            <textarea name="procedure" rows="4" cols="50" required></textarea><br>
            <label>Steps:</label>
            <textarea name="steps" rows="4" cols="50" required></textarea><br>
            <label>Reps:</label>
            <input type="text" name="reps" required><br>
            <label>Image:</label>
            <input type="file" name="image" accept="image/*"><br><br>
            <input type="submit" value="Add Training">
        </form>
        <br>

        <!-- Back button to go back to the dashboard -->
        <a href="admin.php">Back to Dashboard</a>
    </div>

</body>

</html>
