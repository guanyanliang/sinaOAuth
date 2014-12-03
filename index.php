<?php

session_start();
//if( isset($_SESSION['last_key']) ) header("Location: weibolist.php");
include_once( 'config.php' );
include_once( 'weibooauth.php' );

$o = new WeiboOAuth( WB_AKEY , WB_SKEY  );

$keys = $o->getRequestToken();

if( strpos( "http://one.com/sina/" , 'index.php' ) === false ) //修改为自己配制的路径
	$callback =  'http://one.com/sina/callback.php';
else	
	$callback =  str_replace( 'index.php' , 'callback.php' , $_SERVER['SCRIPT_URI'] );


$aurl = $o->getAuthorizeURL( $keys['oauth_token'] ,false , $callback );

$_SESSION['keys'] = $keys;

?>
<a href="<?php echo $aurl?>">绑定新浪微博账号</a>




