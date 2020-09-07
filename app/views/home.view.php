<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home - MVC</title>
    </head>
    <body>
        <p>this is the homepage</p>

        <?php
        echo "data fetched:";
        foreach ($data as $key => $value) {
            echo "<br>" . $data[$key];
        }
        ?>
    </body>
</html>