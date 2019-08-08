<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method = "post">
        <div class = "container">
        <h1>Từ Điển Anh - Việt</h1>
            <input type="text" name="search" id= "search" placeholder="Nhập từ cần tìm"/>
            <input type = "submit" id = "submit" value = "Tìm"/>
        </div>
    </form>
    <?php
        $dictionary = array( 
            'hello' => 'xin chào',
            'bye' => 'tạm biệt',
            'love' => 'yêu',
            'hate' => 'ghét',
            'when' => 'khi nào',
            'go' => 'đi',
            'what' => 'cái gì',
            'good' => 'tốt',
            'god' => 'chúa',
            'dictionary' => 'từ điển',
            'array' => 'mảng',
            'book' => 'sách',
        );
        if($_SERVER['REQUEST_METHOD'] === 'POST')
        {     
            $search = $_POST['search'];
            foreach ($dictionary as $key => $value)
            {
                if( $search === $key ){
                    echo $value;
                }
            }
        }
    ?>
</body>
</html>