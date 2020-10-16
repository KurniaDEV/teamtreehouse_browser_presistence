<?php
$pass="PaSswOrd";

$encript_pass=password_hash($pass, PASSWORD_BCRYPT);

echo $encript_pass;



if(password_verify('PaSswOrd', $encript_pass))
{
    echo "password benar";
}else{
    echo "password salah";
}