<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = new mysqli('localhost', 'feedback_user', 'redacted', 'project_db');
    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

    $email = $_POST['user-email'];

    // Check duplicate
    $check = $conn->prepare("SELECT id FROM feedback WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        $error = "This email is already registered.";
    } else {
        // Assign all fields to variables
        $firstname  = $_POST['user-firstname'];
        $lastname   = $_POST['user-lastname'];
        $age        = $_POST['user-age'] == '' ? null : (int)$_POST['user-age'];
        $occupation = $_POST['user-occupation'];
        $github     = $_POST['user-github'];
        $gender     = $_POST['gender'];
        $region     = $_POST['region-list'];
        $source     = $_POST['user-source'];
        $feedback   = $_POST['text-area'];

        $interests_arr = [];
        if (isset($_POST['check-frontend'])) $interests_arr[] = 'frontend';
        if (isset($_POST['check-backend']))  $interests_arr[] = 'backend';
        if (isset($_POST['check-neither']))  $interests_arr[] = 'neither';
        $interests = implode(',', $interests_arr);

        // Insert
        $insert = $conn->prepare("INSERT INTO feedback (email, firstname, lastname, age, occupation, github, gender, region, interests, source, feedback) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
        $insert->bind_param("sssisssssss", $email, $firstname, $lastname, $age, $occupation, $github, $gender, $region, $interests, $source, $feedback);
        if ($insert->execute()) {
            $success = "Thank you!";
        } else {
            $error = "Duplicate Email.";
        }
        $insert->close();
    }
    $check->close();
    $conn->close();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Feedback</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../global/styles.css" />
    <link rel="icon" href="../images/logo500.png" />
    <script src="../scripts/validation.js"></script>
</head>

<body>
    <?php include("../includes/header.php"); ?>
    <?php include("../includes/links.php"); ?>
    <div class="main-content" id="feedback-page">
        <div id="feedback-heading">
            <h1>Feedback Form</h1>
            <?php if (isset($error)) echo "<p class='form-error'>$error</p>"; ?>
            <?php if (isset($success)) echo "<p>$success</p>"; ?>
        </div>
        <form name="feedback" id="feedback" action="" method="post">
            <fieldset id="user-information">
                <legend>Your Information</legend>

                <div class="form-row">
                    <label for="user-email">Email Address<span id="mandatory-marker">*</span></label>
                    <input type="text" name="user-email" id="user-email" />
                </div>

                <div class="form-row">
                    <label for="user-firstname">First Name<span id="mandatory-marker">*</span></label>
                    <input type="text" name="user-firstname" id="user-firstname" />
                </div>

                <div class="form-row">
                    <label for="user-lastname">Last Name<span id="mandatory-marker">*</span></label>
                    <input type="text" name="user-lastname" id="user-lastname" />
                </div>


                <div class="form-row">
                    <label for="user-age">Age</label>
                    <input type="text" name="user-age" id="user-age" />
                </div>

                <div class="form-row">
                    <label for="user-occupation">Occupation</label>
                    <input type="text" name="user-occupation" id="user-occupation" />
                </div>

                <div class="form-row">
                    <label for="user-github">GitHub Account</label>
                    <input type="text" name="user-github" id="user-github" />
                </div>

                <div class="form-row">
                    <label>Gender</label>

                    <div class="form-option">
                        <input type="radio" name="gender" id="male-option" checked="checked" value="male" />
                        <label for="male-option">Male</label>
                    </div>

                    <div class="form-option">
                        <input type="radio" name="gender" id="female-option" value="female" />
                        <label for="female-option">Female</label>
                    </div>

                </div>

                <div class="form-row">
                    <label for="region-list">Region</label>
                    <select id="region-list" name="region-list">
                        <option value="other">Other</option>
                        <option value="riyadh">Riyadh</option>
                        <option value="makkah">Makkah</option>
                        <option value="madinah">Madina</option>
                        <option value="shargiyah">Shargiyah</option>
                        <option value="qasim">Al-Qasim</option>
                        <option value="hail">Hail</option>
                        <option value="tabuk">Tabuk</option>
                        <option value="north">Northern Borders Region</option>
                        <option value="jazan">Jazan</option>
                        <option value="najran">Najran</option>
                        <option value="baha">Al-Baha</option>
                        <option value="jouf">Al-Jouf</option>
                        <option value="asir">Asir</option>
                    </select>
                </div>


                <div class="form-row">
                    <label>Interests</label>

                    <div class="form-option">
                        <input type="checkbox" id="check-frontend" name="check-frontend" onchange="neitherCheck()" />
                        <label for="check-frontend">Frontend Development</label>
                    </div>

                    <div class="form-option">
                        <input type="checkbox" id="check-backend" name="check-backend" onchange="neitherCheck()" />
                        <label for="check-backend">Backend Development</label>
                    </div>

                    <div class="form-option">
                        <input type="checkbox" id="check-neither" name="check-neither" checked="checked" onchange="neitherCheck()" />
                        <label for="check-neither">Neither</label>
                    </div>

                </div>
            </fieldset>


            <fieldset id="user-feedback">
                <legend>Feedback</legend>

                <div class="form-row">
                    <label for="user-source">How did you hear about this website?</label>
                    <input type="text" name="user-source" id="user-source" />
                </div>

                <div class="form-row">
                    <label for="text-area">Feedback<span id="mandatory-marker">*</span></label>
                    <textarea id="text-area" name="text-area"></textarea>
                </div>

            </fieldset>

            <input type="submit" value="Submit" id="form-submit" />
        </form>

    </div>
    <?php include("../includes/footer.php"); ?>
</body>

</html>
