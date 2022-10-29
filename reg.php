<?php
//$_GET后面加上中括号，将username作为字符串放在中括号里面，就得到了表单里面的<input type="text" name="username" /> 的值
$u = $_POST['username'];
echo $u.'<br />';

//$_GET['pwd'] 得到表单<input type="text" name="username" /> 的值
$passwd = $_REQUEST['pwd'];
echo $passwd.'<br />';
?>