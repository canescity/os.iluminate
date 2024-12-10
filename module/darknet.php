<?php
/*Color*/
$verde = "\033[32m";
$rojo = "\033[31m";
$celeste = "\033[36m";
$amarillo = "\033[33m";
$morado = "\033[35m";
$azul = "\033[34m";
$plomo = "\033[30m";

/*Form*/
echo $amarillo. "
           ————————————————————————————————————————
             |   ★MOVIMENTO NACIONAL_777★   |
           ————————————————————————————————————————\n";
 echo "=========================================================";
echo "\n
\033[01;31m[★] MOVIMENTO NACIONAL ANONYMO \033[01;32;1m@Anonymous (Telegram)\033[01;31m\n";
sleep(1);
echo "\033[01;31m[★] SOMOS A RESISTENCIA DO BRAZIL\n";
sleep(1);
echo "[★] MOVIMENTO POPULISTA AOS DIREITOS IGUAIS (Telegram)\033[01;31m.\n";
sleep(1);
echo "[★] BEM VINDO VENHA AJUDAR A PATROCINAR O MOVIMENTO.\n";
sleep(1);
echo "[★] SOMOS UMA ORGANIZAÇÃO DO PAÍS COM PODER POLÍTICO\n";
sleep(1);
echo "[★] SOMOS A FAVOR DE GUERRAS GEO POLÍTICOAS\n";
sleep(1);
echo "[★] EM BREVE O NOSSO LÍDER VAI DISPUTAR NA ONG\n";
sleep(1);
echo $amarillo. "\n——————————————————————————————————————————————————————————————————————————————————————————————————————————————————————";
echo "\n
\033[32m[★] SOMOS A SEGUNDA MAIOR ORGANIZAÇÃO\033[32m\n";
sleep(1);
echo "\033[32m[★] ESTAMOS FECHADO AO GRUPO PALESTINA\n";
sleep(1);
echo "\033[32m[★] TAMBEM PRETENDEMOS SE ALIAR COM USSR\n";
sleep(1);
echo "\033[32m[★] E VAMOS ALIAR O MAXIMO DE NAÇÃOES POSSÍVEIS\n";
sleep(1);
echo "\033[32m[★] ME FAÇAM REI E AVANÇAREMOS PARA NOVA HERA\n";
sleep(1);
echo "\033[32m[★] QUE É A NOVA ORDEM MUNDIAL DA ONG N.S.A\n";
sleep(1);
//GERAR QUANDOS NUMEROS

echo $celeste . "\n\nQUANTAS CARTELAS DA SORTE :  ";
$count = trim(fgets(STDIN,1024));

//GERAR NUMEROS DA MEGA SENA

for($x = 0; $x < $count; $x++){
$str = file_get_contents("http://namegenerators.org/fake-name-generator-br/");
$var = '/<div class="col2">(.*?)<\/div>/s';
preg_match_all($var, $str, $matches);

// INFORMACION DE LA TARGETA

sleep(5);
echo "\033[33m%%%%%%%%%\033[34m%%%%%%%\033[31m%%%%%%\033[32m MUNDO BINS ★RH★_593 \033[33m%%%%%%%%%\033[01;34m%%%%%%%\033[31m%%%%%%\n";

echo $rojo . "\n=================== INFORMACION DEL USUARIO ======================\n\n";
echo $verde . "[NOMBRE : ".str_replace("</span>", "", str_replace('<span class="name">', "", $matches[1][3]))."]".
                " \n[LUGAR : ".$matches[1][8]."]".
                " \n[CORREO : ".$matches[1][10]."]".
                " \n[TELEFONO : ".$matches[1][9]."]\n";
echo $rojo . "====================== TARGETA DE CREDITO  =======================\n\n";
echo $azul . " \n[TARGETA DE CREDITO : ".str_replace(" ", "", $matches[1][14])."]".
                " \n[CVV : ".$matches[1][16]."]".
                " \n[FECHA : ".$matches[1][15]."]\n\n";
        sleep(5);
}
echo ">  FECHA DE GENERACION : " .$plomo .$date."\n";
?>
