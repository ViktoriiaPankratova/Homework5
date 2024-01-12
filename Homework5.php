<?php
function areaofacircle(int $number1, int $power)
{$string="Введіть радіус кола для розрахунку площі\n";
    echo $string;
    $number1=(int) fgets(STDIN);
    $power=2;
   $area=$number1**$power*pi();
    echo $area;
}
echo areaofacircle(1,2).PHP_EOL;

function raisetoapower(int $number, int $power)
{
    $string1="Введіть число, що підносимо до ступеню\n";
    echo $string1;
    $number=(int) fgets(STDIN);
    $string2="Введіть степінь\n";
    echo $string2;
    $power=(int) fgets(STDIN);
    $raisingToPower=$number**$power;
    echo $raisingToPower;
}
echo raisetoapower(1,1).PHP_EOL;

function raisetoapower1(int $number, int $power)
{
    $string1="Введіть число, що підносимо до ступеню\n";
    echo $string1;
    $number=(int) fgets(STDIN);
    $string2="Введіть степінь\n";
    echo $string2;
    $power=(int) fgets(STDIN);
    $raisingToPower=$number**$power;
    return $raisingToPower;
}
$function=raisetoapower1(1,1);
$raisingToPower=0;
echo $raisingToPower;