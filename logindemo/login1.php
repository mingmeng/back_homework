<?php
$username =$_POST['username'];
$password =$_POST['password'];
if($username&&$password){
	try
	{
	    $conn = new PDO("mysql:host=localhost;dbname=first","root","");
	    echo "连接成功!";
	    $conn -> setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
	    $data=$conn->query("SELECT * from test where username='{$username}'");
	    $dy=$data-> fetch(PDO::FETCH_ASSOC);
	    if(!empty($dy))
	    	echo "用户名已存在";
	    else
	    {
	    	$news=$conn->query("INSERT into test(username,sexual,password)
			values('$username','man','$password')");
		    if($news)
		    {
		    	foreach ($conn->query("SELECT * from test where username='$username'") as $row) 
		    	{
		    		die("注册成功！".$row['username']);
		    	}
		    }
		    else
		    	echo "注册失败！";
	    }    
	}
	catch(PDOException $e)
	{
	    echo $e->getMessage();
	}
}
else
	echo "表单没有填完整！";
?>
