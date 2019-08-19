<?php session_start();

$_SESSION['user1'] = 'Phan thiên hoàng';

$_SESSION['user'] = 'Vũ Thanh Tài';

// unset($_SESSION['user']);

// unset($_SESSION);


if (isset($_SESSION['user'])) {
    echo $_SESSION['user'] .'<br>';
}

if (isset($_SESSION['user1'])) {
    echo $_SESSION['user1'];
}
?>
<!--biến session dùng để lưu giữ thông tin người dùng
    hoặc là lưu trữ tùy chọn cấu hình của người dùng
    
    để bắt đầu 1 session ta dùng session_start() 
    để lưu trữ session ta dùng $_SESSION 
    cú pháp : $_SESSION[$name] = $value 
    xóa session thì dùng unset($_SESSION) --> 

    <!-- so sánh session và cookie 
        session                                     cookie  
    Lưu trên server                         Lưu trên trình duyệt của client                              
    
    Session lưu trên server                 Cookie lưu dưới client 
    nên bảo mật hơn	                        nên kém bảo mật hơn
       
    Lưu không giới hạn                      Lưu có giới hạn [4kb/50cookie]
        -->

<!-- ứng dụng :
    nếu cần lưu giữ thông tin bảo mật thì dùng session
    còn nếu muốn gửi dữ liệu nhanh, ko cần bảo mật thì dùng cookie
    --> 
