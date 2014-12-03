<?php
session_start();
include_once( 'config.php' );
include_once( 'weibooauth.php' );

//var_dump($_SESSION['last_key']);
//exit;

$c = new WeiboClient( WB_AKEY , WB_SKEY , $_SESSION['last_key']['oauth_token'] , $_SESSION['last_key']['oauth_token_secret']  );
$ms  = $c->home_timeline();  

  if(!empty($_POST['sub'])){      
     //$c->update($_POST['con']); //只发送文字    
     //图片路径
     $blogo="http://one.com/sina/5facc9be66eac33169ddb94481a0bdaf.jpg";    
     $c->upload($_POST['con'],$blogo);
  }
  
   if(!empty($_POST['sub2'])){
     $c->follow($_POST['username']);
  }
  
?>
<form action="" method="post">
<input type="text" name="con">
<input type="submit" name="sub" value="发表微博">
</form>

<form action="" method="post">
<input type="text" name="username">
<input type="submit" name="sub2" value="关注某人">
</form>




