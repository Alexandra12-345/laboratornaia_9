<!DOCTYPE html>
<html>
<head>
    <title>Лабораторная работа 9</title>
    <meta charset="utf-8">
    </head>
<body>
    <form id="frm" method="POST" action="">
        <p>Введите число x, которое меньше 1:</p>
        <input type="text" name="x">
        <p>Введите число n:</p>
        <input type="text" name="n">
        <input type="submit" value="OK">
    </form>
    <?php
        $x=$_POST["x"];
        $n=$_POST["n"];
        $i=0;
        for($a=0; $a<=$n; $a++){
                $i=$i+(($x**((2*$a)+1))/((2*$a)+1));
            }
            echo $i;
    ?>
</body>
</html>