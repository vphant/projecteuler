<!DOCTYPE html>
<html>
<head>
    <title>https://projecteuler.net</title>
</head>
<body>
<ul>
    <?php
    foreach (glob(__DIR__ . "/problem/*.php") as $filename) {
        $name = pathinfo($filename, PATHINFO_FILENAME);
        printf('<li><a href="/problem/%s">%s</a></li>', $name . '.php', $name);
    }

    ?>
</ul>
</body>
</html>