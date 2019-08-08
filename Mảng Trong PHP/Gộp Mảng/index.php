<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>document</title>
</head>

<body>
    <form method="POST">
        <p>Array 1:</p>
        <input type="text" style="width:50px;" name="a1num1">
        <input type="text" style="width:50px;" name="a1num2">
        <input type="text" style="width:50px;" name="a1num3">
        <input type="text" style="width:50px;" name="a1num4">
        <p>Array 2:</p>
        <input type="text" style="width:50px;" name="a2num1">
        <input type="text" style="width:50px;" name="a2num2">
        <input type="text" style="width:50px;" name="a2num3">
        <input type="text" style="width:50px;" name="a2num4">
        <br><br>
        <input type="submit" value="Combine">
    </form>
    <?php
        function combineArray($arr1, $arr2)
        {
        $arr3 = $arr1;
        foreach ($arr2 as $index => $element) {
            array_push($arr3, $element);
        }
        return $arr3;
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $array1 = array(
                $_POST["a1num1"],
                $_POST["a1num2"],
                $_POST["a1num3"],
                $_POST["a1num4"]
            );
            $array2 = array(
                $_POST["a1num1"],
                $_POST["a2num2"],
                $_POST["a2num3"],
                $_POST["a2num4"]
            );
            $result = combineArray($array1, $array2);
            print_r($result);
            echo "<br>";
            echo '<pre>';
            foreach($result as $key => $value){
                echo $value.",";
            }
            echo '</pre>';
        }
    ?>
</body>
</html>