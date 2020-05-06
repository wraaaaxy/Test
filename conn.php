<?php
    header("Content-type: text/html; charset=utf-8");//设置编码
    $con = mysql_connect("localhost","root","root") or die("数据库连接失败");
    mysql_select_db('login') or die("指定的数据库不能打开");
    mysql_query("set names utf8");//设置数据库的字符集

?>