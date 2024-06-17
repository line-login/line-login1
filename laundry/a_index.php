<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("db.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>洗衣店登入</title>
    <style>
        .container {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
        }

        .header {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #003f87;
        }

        .logo {
            width: 100px;
            height: 100px;
            background-color: #2c3e50;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 24px;
            margin-bottom: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
            font-size: 18px;
        }

        input[type="text"], input[type="password"] {
            width: calc(100% - 22px);
            padding: 10px;
            font-size: 18px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"], input[type="reset"] {
            background-color: #003f87;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
        }

        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #0056b3;
        }

        
    </style>
</head>

<body>
<div class="navbar">
        <a href="#"><img src="" alt="LOGO"></a>
        <div>
            <a href="#">首頁</a>
        </div>
        </div>
    <div class="container">
        <div class="header">
            洗衣店名稱
        </div>
        <div class="logo">
            LOGO
        </div>
        <form action="a_check.php" method="post">
            <table>
                <tr>
                    <td>帳號</td>
                    <td><input type="text" name="account" required></td>
                </tr>
                <tr>
                    <td>密碼</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="送出">
                        <input type="reset" value="重置">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <div class="footer">
        我是footer
    </div>
</body>

</html>
