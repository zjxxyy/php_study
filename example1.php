<?php
//#phpinfo();
////$a = 6;
////$b = 7;
////$c = $a+$b;
////print $c;
////print "\n\r";
////echo $c;
////$shiliu = 0x6ff;
////print "\n\r";
////echo $shiliu;
////$zhifu = '曾经有操蛋的爱情摆在我面前，我珍惜了。当我得到的时候才感到后悔莫及。如果非要在这段爱情前面加上一段三个字，我愿意说三个字：滚犊子';
////
//////你可以放XAMPP指定的目录下，新建一个文件叫str.php。然后访问一下http://127.0.0.1/str.php试试。会不会显示这句话。
////
////echo $zhifu;
////$fudian = 121121.3133;
////echo $fudian;
////
////$f1 = 0.8881;
////var_dump($f1);
////$pao = true;
////
////if($pao) {
////   echo '我愿意去死';
////   echo "凌志玲，我爱死你了";
////
////} else {
////    echo "我不愿意去死";
////}
////$one =10;
////$two = false;
////$three = 0;
////$four = null;
////$result = isset($one,$two,$three,$four);
////var_dump($result);
////$jia = false;
////$result = isset($jia);
////var_dump($result);
////$shu = array(1,2,3);
////var_dump($shu);
//#$imgname = "https://pics6.baidu.com/feed/0823dd54564e92586c93c6f30f140e50cdbf4ea3.jpeg@f_auto?token=6564dc83b596d74377d5a3554898f110";
//#echo '<img src=$imgname width="300" height="250" />';
//#echo "<img src='https://pics6.baidu.com/feed/0823dd54564e92586c93c6f30f140e50cdbf4ea3.jpeg' />";
////echo "<img src='1.jpeg' />";
////echo "<br />";      //换行
//#imagejpeg($imgname);
////$p = 1;
////if(is_null($p)){
////    echo '执行真区间';
////}else{
////    echo '执行假区间';
////}
////echo "<br/>";
////$sca = ‘12131’;
//////如果为标量，执行真区间
////if(is_scalar($sca)){
////    echo '执行真区间';
////}else{
////    echo '执行假区间';
////}
////if(is_callable('v3_dump')){
////    echo '执行真区间';
////}else{
////    echo '执行假区间';
////}
////$bool = 0.0;
////if($bool){
////    echo '美女美女我爱你';
////}else{
////    echo '凤姐凤姐爱死我，执行假区间咯';
////}
////$float = 1.23;
////$result = intval($float);
//////看看结果是不是变了？
////var_dump($result);
////echo "<br />";
//////鸭脖子为整型的5
////$yabozi = 5;
////$re = floatval($yabozi);
////var_dump($re);
//////定义整型的变量
////echo "<br />";
////$yabozi = 23;
////$bian = strval($yabozi);
////$bian1 = '2132131';
//////强制变成字符串试试
////var_dump($bian1);
////define('MY_NAME','PHP中文网');
////
////echo MY_NAME;
////echo "<br />";
//////下面是错误的调用方式
////echo '我的名字是MY_NAME';
//////正确的调用方式该这么写
////echo "<br />";
////echo '我的名字是'.MY_NAME;
////echo DIR;
////echo "<br />";
//
////$shu = 'biao';
//////定义了一个【变量】$biao。将他的值设置为鼠标
////$biao = '鼠标';
////
//////$$shu 就是可变变量：在已声明的变量$shu前又加上了一个变量符
////echo $$shu

//echo $_SERVER['SCRIPT_FILENAME'];
//$x = 5;
//$y = 6;
//
//$foo = $x++ + $x--; // 10
//echo $foo;
//$x = 5;
//$y = 6;
//
//$bar = ++$y + ++$x; // 7+6 =13
//$x = 5;
//$y = 6;
//echo $bar;
//
//$cup = $x-- + $y--; //9
//$x = 5;
//$y = 6;
//echo $cup;
//$paper = ++$x + $x++; //11
//$x = 5;
//$y = 6;
//echo $paper;
//$water = $y-- + $x--;//11
//echo $water;
//echo $water + $paper;

$x = 5;
$y = '5';
if($x == $y){
    echo '结果为真';
}else{
    echo '结果为假';
}
?>
