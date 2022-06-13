<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>RAZ :: Episode 4 - Alternates Dismantled </title>
        <meta name="description" content="Zetaman is a docu-reality series that chronicles the crime fighting, comic book drawing and fundraising adventures of real-life superhero Illya 'Zetaman' King and his superhero-posse. " />
        <meta name="keywords" content="zetaman, agent null, tracy hudson, superheroes, real life superheroes, antiman" />
        <meta name="author" content="Allen Luebke">
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="3 month">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/favicon.ico"/>
        <link href="style.css" rel="stylesheet" type="text/css" media="screen">
    </head>
    <body>
        <div id="container">
            <div id="header" onclick="location.href='index.php';" style="cursor:pointer;">
            </div>
            <div class="headerlinks">
                <?php include ("menu.php"); ?>
            </div>
            <div class="content">
                <div id="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/aaSqvXqn5AU" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
                <?php include ("webisodes.php"); ?>
            </div>
            <div id="footer">
            <?php include ("footermenu.php"); ?>
            </div>
        </div>
    </body>
</html>
