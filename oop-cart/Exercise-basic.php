<?php
echo '<pre>';
$exerciseBasic = 'Nguyễn Thành Long';
echo '<br>';
echo 'Bài 2';
echo '<br>';
$textE1 = 'Tomorrow I \'ll learn PHP global variables.';
$textE2 = 'This is a bad command : del c:\\*.*';
echo $textE1.'<br>';
echo $textE2.'<br>';
echo '<br>';
echo 'Bài 3';
$var = 'PHP Tutorial';
echo "<h3>$var</h3>";
echo "<p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.
Go to the PHP Tutorial.</p>";
echo 'Bài 4';
echo '<br>';
echo 'Bài 5';
echo '<br>';
$hostname = gethostbyname($_SERVER['REMOTE_ADDR']);
echo $hostname;
echo '<br>';
echo 'Bài 6';
echo '<br>';
echo "Your User-Agent is: : " . $_SERVER['HTTP_USER_AGENT'];
echo '<br>';
echo 'Bài 7';
echo '<br>';
echo "Your file is: : " . $_SERVER['SCRIPT_FILENAME'];
echo '<br>';
echo 'Bài 8';
echo '<br>';
$linkW3  = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';
$url = parse_url($linkW3);
echo 'Scheme :'.$url['scheme'].'<br>';
echo 'Host :'.$url['host'].'<br>';
echo 'Path :'.$url['path'].'<br>';
echo '<br>';
echo 'Bài 9';
echo '<br>';
echo '<br>';
echo 'Bài 10';
echo '<br>';
if (isset($_SERVER['HTTPS']))
{
    echo 'HTTPS is called from';
}else{
    echo 'HTTP is called from';
}
?>