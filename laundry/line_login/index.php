<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../db.php");?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>洗衣店</title>
</head>
<body>
    <div class="container">
        <div class="header">
            洗衣店名稱
        </div>
        <div class="logo">
            LOGO
        </div>
        <button class="line-login" onclick="loginWithLine()">使用LINE登入</button>
    </div>
    <div class="footer">
        我是footer
    </div>

    <script>
        function loginWithLine() {
            const client_id = '2005611607';
            const redirect_uri = 'https://wash.newmatch19.com/line_login/line_callback.php';
            const state = 'random_string_to_prevent_csrf';
            const scope = 'profile openid email';

            const lineLoginUrl = `https://access.line.me/oauth2/v2.1/authorize?response_type=code&client_id=${client_id}&redirect_uri=${encodeURIComponent(redirect_uri)}&state=${state}&scope=${scope}`;

            window.location.href = lineLoginUrl;
        }
    </script>
</body>
</html>
