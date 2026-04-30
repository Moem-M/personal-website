<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Projects - Mohammed Moni</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../global/styles.css" />
    <link rel="icon" href="../images/logo500.png" />
</head>

<body>
    <?php include("../includes/header.php"); ?>
    <?php include("../includes/links.php"); ?>
    <div class="main-content" id="projects-page">
        <h1 id="projects-header">My Projects</h1>

        <div id="project-deck">

            <div id="card1" class="project-card">
                <h2 class="project-card-title">Personal Website</h2>
                <img src="../images/logo500.png" alt="Website Logo" class="project-image" />
                <p>The website you are browing right now!</p>
                <p>Built with plain HTML and CSS for the frontend, some JS for client-side validation, and a little bit of php for server-side purposes</p>
                <p>Deployed on an Ubuntu VPS, using NGINX as a web server</p>
                <p>Links : <a href="https://github.com/Moem-M/personal-website">Github Repo</a></p>
            </div>

            <div id="card2" class="project-card">
                <h2 class="project-card-title">Linux .dotfiles</h2>
                <img src="../images/projects/configShowcase.png" alt="Picture of my config" class="project-image"/>
                <p>My custom linux config and a customized .iso file</p>
                <ul>
                    <li>Distro : Arch Linux</li>
                    <li>Window Manager : Hyprland</li>
                    <li>Taskbar : Waybar</li>
                    <li>Misc. : NeoVim, tmux, starship, kitty, rofi</li>
                </ul>
                <p>Links : Coming Soon</p>
            </div>

        </div>
    </div>
    <?php include("../includes/footer.php"); ?>
</body>

</html>
