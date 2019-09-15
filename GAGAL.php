<?php

$username ="INDONESIA";
$password ="74";
system('clear');
echo "login dulu gan\n";
echo "username : ";
$user = trim(fgets(STDIN));
echo "password : ";
$pass = trim(fgets(STDIN));
if($user == $username && $pass == $password)
{
echo "login sukses\n";
sleep(2);
system('clear');
echo "TOOLS BERGUNA\n";
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
echo "login gagal\n";
}

?>
