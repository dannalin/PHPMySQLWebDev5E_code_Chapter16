<?php
if ((!isset($_SERVER['PHP_AUTH_USER']))&&
(!isset($_SERVER['PHP_AUTH_PW']))&&
(substr($_SERVER['HTTP_AUTHORIZATION'], 0, 6) == 'Basic')) {
    list($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']) =
    explode(':', base64_decode(substr($_SERVER['HTTP_AUTHORIZATION'], 6)));
}

// 將這個陳述式換成資料庫指令或類似的東西
if (($_SERVER['PHP_AUTH_USER'] != 'user') ||
($_SERVER['PHP_AUTH_PW'] != 'pass')) {
    // 訪客尚未提供資訊或他們的
    // 帳號密碼組合是不正確的
    header('WWW-Authenticate: Basic realm="Realm-Name"');
    header('HTTP/1.0 401 Unauthorized');
} else {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Secret Page</title>
    </head>
    <body>
    <?php
echo '<h1>Here it is!</h1>
<p>I bet you glad you can see this secret page.</p>';
}
    ?>
    </body>
    </html>