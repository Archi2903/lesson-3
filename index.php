<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>lesson 3</title>
</head>
<body>
<header>
    <h1>Lesson 3 Arthur
        <hr>
    </h1>
</header>
<main>

    <div class="calculate">
        <h2> mini Calculate</h2>
        <?php echo "<form action=index.php method=get>
            <i>input <em>2</em>> number and select <em>operate</em></i>
            <input type=text id=first name=first size=5px>
            <input type=text id=second name=second size=5px><br>
            <input type=radio name=math id=plus value=plus checked=true> <em>+</em>
            <input type=radio name=math id=minus value=minus> <em>-</em>
            <br/>
            <br><input type=submit class=button value=Равно>";

        $first = $_GET['first'];
        $second = $_GET['second'];
        function math($first, $second)

        {
            if ($_GET['math'] == 'plus') {
                echo $first + $second;
            } else {
                echo $first - $second;
            }
        }


        echo "</form>" ?>
        <strong> Your answer = <?php echo math($first, $second) ?></strong>
    </div>
    <br><!--Calculate-->
    <div class="images">
        <h3><br><br><br><br><br><br><br><br>Images</h3>
        <style>
            img {
                width: 300px;
                height: 250px;
            }
        </style>
        <?php include __DIR__ . '/function.php' ?>
        <img src="img/i12.png" alt="image"> <!-- Picture for example-->

        <img src="<?php '/img/' . get_image($imgs); ?> " alt="image">

    </div>
</main>
<footer></footer>

</body>
</html>