<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php 登录与注册</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="http://libs.baidu.com/jquery/1.9.1/jquery.js"></script>
</head>
<body>
   <div id="div">
    <h3>欢迎登陆后台管理系统</h3>
    <div id="cnt">
        <form method="post" action="main.php">
            用户名：<input type="text" placeholder="请输入用户名" name="username">
            <br><br>
            密码：<input type="password" placeholder="请输入密码" name="password">
            <br><br>
            <input type="submit" value="登录" class="sub">
            <input type="button" value="注册" class="sub" id="sub">
        </form>
    </div>
    <script>
        $("#sub").click(function(){
            location.href = "reg.php";
        });
    </script>
   </div> 
</body>
</html>