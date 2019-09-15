<?php

$\033[31;1musername ="INDONESIA";
$\033[37;1mpassword ="74";
system('clear');
echo "\033[32;1mlogin dulu gan\n";
echo "username : ";
$user = trim(fgets(STDIN));
echo "password : ";
$pass = trim(fgets(STDIN));
if($user == $username && $pass == $password)
{
echo "\033[31;1mlogin sukses\n";
sleep(2);
system('clear');
echo "\033[31;1mTOOLS BERGUNA\n";
echo "[1] Tools FB
[2] Tools-C\n";
echo "Pilih Nomor :  \n";
$menu = trim(fgets(STDIN));
if($menu == 1)
{
system('git clone https://github.com/cahyoluhur/DarkTools');
}
if($menu == 2)
{
system('git clone https://github.com/cahyoluhur/CL');
}












}
else
{
echo "\033[32;1mlogin gagal\n";
}

?>
