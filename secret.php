<!DOCTYPE html>
<html>
    <head>
        <title>Secret Page</title>
    </head>
    <body>
        <?php
            if ((!isset($_POST['name']))||(!isset($_POST['password']))) {
                // 訪客必須輸入帳號密碼
        ?>
        <h1>Please Log In</h1>
        <p>This page is secret.</p>
        <form method="post" action="secret.php">
        <p><label for="name">Username:</label>
        <input type="text" name="name" id="name" size="15"/></p>
        <p><label for="password">Password:</label>
        <input type="password" name="password" id="password" size="15" /></p>
        <button type="submit" name="submit">Log In</button>
        </form>
        <?php
          }  else if (($_POST['name']=='user')&&($_POST['password']=='pass')) {
            // 訪客的帳號與密碼組合是正確的
            echo '<h1>Here it is!</h1>
            <p>I bet you are glad you can see this secret page.</p>';
          } else {
            //   訪客的帳號與密碼組合不正確
            echo '<h1>Go away!</h1>
            <p>You are not authorized to use this resource.</p>';
          }
        ?>
    </body>
</html>