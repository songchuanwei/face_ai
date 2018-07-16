require_once __DIR__ . '/vendor/autoload.php';
use Youtu\Phpsdk\Youtu;
use Youtu\Phpsdk\Conf;
use Youtu\Phpsdk\Auth;

$appid='';  //优图平台申请的appid
$secretId='';   //优图平台申请的id
$secretKey='';  //优图平台申请的key
$userid='';    //QQ号码

Conf::setAppInfo($appid, $secretId, $secretKey, $userid,conf::API_YOUTU_END_POINT);
$uploadRet = YouTu::detectface('face_01.jpg', 1);
var_dump($uploadRet);
