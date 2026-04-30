<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>University Database</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../global/styles.css" />
    <link rel="icon" href="../images/logo500.png" />
</head>

<body>
    <?php include("../includes/header.php"); ?>
    <?php include("../includes/links.php"); ?>
    <div class="main-content">
        <h1>University Courses</h1>
        <ul>
        <?php
        $conn = new mysqli('localhost', 'feedback_user', 'redacted', 'project_db');
        $result = $conn->query("SELECT courses.title, departments.name FROM courses JOIN departments ON courses.department_id = departments.id");
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . $row['title'] . " – " . $row['name'] . "</li>";
        }
        $conn->close();
        ?>
        </ul>
    </div>
    <?php include("../includes/footer.php"); ?>
</body>

</html>
