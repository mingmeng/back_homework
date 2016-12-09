<?php
$username =$_POST['username'];
$password =$_POST['password'];
if($username&&$password){
	try
		{
    	$conn = new PDO("mysql:host=localhost;dbname=first","root","");
    	echo "连接成功!";
    	$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	foreach ($conn->query("SELECT * from test where username='$username'") as $row) 
    	{
    		if($row['password']==$password)
    			die('登陆成功！欢迎您！'.$row['username']);
    		else
    			die('登录失败！');
    	}
	}
	catch(PDOException $e)
	{
	    echo "未能成功链接数据库<br>";
	    echo $e->getMessage();
	}
}
else
	echo "表单没有填完整！";
?>
