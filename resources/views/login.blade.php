
    <!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome to login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url("../public/images/background.jpg");
            background-size: 100%;
        }

        .login-box {
            max-width: 400px;
            min-height: 400px;
            margin: 10% auto;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.76);
        }

        .reg {
            width: 400px;
            height: 400px;
            margin: 15px;
            padding: 20px;
        }

        .reg .title {
            text-align: center;
            padding-bottom: 10px;
        }

        .reg th {
            font-weight: normal;
            text-align: right;
        }

        .reg input {
            width: 200px;
            border: 1px solid #ccc;
            height: 20px;
            padding-left: 4px;
        }

        .reg .button {
            background-color: #0099ff;
            border: 1px solid #0099ff;
            color: #fff;
            width: 80px;
            height: 25px;
            margin: 0 5px;
            cursor: pointer;
        }

        .reg .td-btn {
            text-align: center;
            padding-top: 10px;
        }

        .error-box {
            width: 85%;
            margin: 15px auto;
            padding: 10px;
            background: #FFF0F2;
            border: 1px dotted #ff0099;
            font-size: 14px;
            color: #ff0000;
        }

        .error-box ul {
            margin: 10px;
            padding-left: 25px;
        }

        .reg .td-auto-login {
            font-size: 14px;
            text-align: left;
            padding-left: 90px;
            padding-top: 5px;
        }

        .reg .checkbox {
            width: auto;
            vertical-align: middle;
        }

        .reg label {
            vertical-align: middle;
        }
    </style>
</head>
<body>
<div class="login-box">
    <form method="post" action="login">
        @csrf
        <table class="reg">

            <tr>
                <th>UserName：</th>
                <td><input type="text" name="username"/></td>
            </tr>
            <tr>
                <th>Password：</th>
                <td><input type="password" name="password"/></td>
            </tr>

            <tr>
                <td colspan="2" class="td-btn">
                    <input type="submit" value="Login" class="button"/>
                    <input type="reset" value="Register" class="button" onclick="location.href='register'"/>
                </td>
            </tr>
        </table>
    </form>
    <div>
        <?php
        if (!empty($error)) {
            ?>
        <div class="error-box">
                <?php
                foreach ($error as $v) {
                    echo "<li>$v</li>";
                }
                ?>
        </div>
            <?php
        }
        ?>
    </div>
</div>
</body>
</html>
