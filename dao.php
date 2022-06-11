<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview</title>

    <link rel="stylesheet" href="./richtexteditor/runtime/richtexteditor_preview.css" />
</head>

<body>

    <div class="text-center">
        <h1 class="display-4">HTMLCode</h1>

        <div style="width: 960px; margin: 0 auto; text-align: left; border: solid 1px gray; padding: 8px;">
            <?php
            echo $_POST["htmlcode"];
            ?>
        </div>

    </div>
</body>

</html>