1：申请新浪微博站内应用
　　打开http://open.weibo.com/，选择[应用开发]下[站内应用]－＞创建应用，创建好后，点击[应用信息]中[基本信息]，查看App Key与App Secret．但必须通过审核上线后才可以生效使用．


2:下载PHP SDK
　　打开https://code.google.com/p/libweibo/downloads/list　选择OAuth版weibo class for标准PHP环境,支持图片微博,更换头像下载．


3:修改程序
　　配制config.php文件，输入第一步申请的App Key与App Secret，完善界面，
在weibolist.php中加上表单，与发送微博代码：
$c = new WeiboClient( WB_AKEY , WB_SKEY , $_SESSION['last_key']['oauth_token'] , $_SESSION['last_key']['oauth_token_secret'] );
$ms = $c->home_timeline();
if(!empty($_POST['sub'])){ 
//$c->update($_POST['con']); //只发送文字 
//图片路径
$blogo="http://one.com/sina/5facc9be66eac33169ddb94481a0bdaf.jpg"; 
$c->upload($_POST['con'],$blogo);
}
实现同时发送图片功能．如果申请应用审核通过后，可以直接发送微博．


4:注意事项
　在php.ini里面：extension=php_curl.dll去掉前面的分号。
