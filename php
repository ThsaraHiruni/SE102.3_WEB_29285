<?php>
$s="localhost";
$u="root";
$p="";
$d="nsbm2";

$c=new mysqli($s,$u,$p,$d);

if ($c->connect_error)
{
     die("Connection failed: ");
}
else
{
echo "connection success";
}
?>
