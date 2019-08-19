<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "Phan Thiên Hoàng";
// 86400 = 1 day
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
<body>
 
<?php

     if(!isset($_COOKIE[$cookie_name])) {
          echo "Cookie có tên '" . $cookie_name . "' chưa được tạo!";
     } else {
          echo "Cookie '" . $cookie_name . "' đã được tạo!<br>";
          echo "Giá trị là: " . $_COOKIE[$cookie_name] .'<br>';
     }

     if(count($_COOKIE) > 0) {
          echo "Cookies đang được bật.";
     } else {
          echo "Cookies đang bị tắt.";
     }

?>

     <!-- cookie là 1 đoạn văn bản mà 1 web serve có thể lưu trên ổ cứng của người dùng 
          Cookie cho phép 1 website lưu các thông tin trên máy tính của người dùng 
          sau đó lấy lại nó 
               -->

     <!-- cú pháp khởi tạo cookie  -->
     <!-- dùng hàm setcookie -->
     <!-- setcookie($name, $value, $expire, $path, $domain); -->
     <!-- $name là tên của cookie
          $value là giá trị của cookie
          $exprire thiết lập thời gian sống của 1 cookie
          $path đường dẫn 
          $domain tên domain -->
     <!-- muốn xóa 1 cookie thì mình đặt thời gian sống của nó thành số âm --> 
     <!-- lấy giá trị của 1 cookie thì dùng biến cục bộ $_COOKIE[$name] -->


     <!-- note 
          cookie lưu thông tin lên trình duyệt người dùng và có thể lấy giá trị ở serve
          cookie thì có thời gian sống nhất định 
          để truy suất dữ liệu thì dùng $_COOKIE
          xóa cookie thì thiết lập thời gian sống về quá khứ -->

</body>
</html>
