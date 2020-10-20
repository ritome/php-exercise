<html>
    <herd>
        <meta charset="UTF-8">
        <title></title>
    </herd>
    <body>
        <?php 
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];

        $operator = $_GET['r1'];

        if ($operator === "Add") {
            $add = $num1 + $num2;
            echo ("足し算: " . $add);
        } elseif ($operator === "Sub") {
            $sub = $num1 - $num2;
            echo ("引き算: " . $sub);
        } elseif () {
            # code...
        }
    
    </body>
</html>