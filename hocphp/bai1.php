<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tài liệu học tập Trình Web</h1>

    <hr>
    <?php
    echo "<h2>PHP Cơ Bản</h2>";
    ?>

    <p>Tài liệu học tập HTML</p>
    <p>Tài liệu học tập CSS</p>

    <?php
    echo "<p>Tài liệu học tập JavaScript</p>";
    echo "<p>Tài liệu học tập MYSQL</p>";
    echo "<p>Tài liệu học tập PHP</p>";
    ?>
    <hr>
    <br>
    <?php
    $text = "từ cơ bản" . " đến nâng cao";
    echo $text;
    ?>
    <?php
    function showValue()
    {
        $a = 5;
        echo "Giá trị a = " . $a;
    }
    showValue();
    //echo $a;
    ?>
</body>

</html>