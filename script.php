<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$name = $_POST["nome"];
$idade = $_POST["idade"];

if(empty($name))
{
    echo 'O nome não pode ser vazio';
    return 0 ;
}

if(strlen($name) < 3)
{
    echo 'O nome deve conter mais de 3 caracteres';
    return 0;
}
if(strlen($name) > 40 )
{
    echo 'O nome é muito extenso';
    return 0;
}
if(!is_numeric($idade))
{
    echo 'Informe um numero para idade';
    return 0;
}

If($idade >= 6 && $idade <=12)
{
    for($i = 0; $i <= count($categorias); $i++ )
    
        if($categorias[$i] == 'infantil') 
            echo "O nadador ", $name, " compete na categoria " ,$categorias[$i];

}
else If($idade >= 13 && $idade <=18)
{
    for($i = 0; $i <= count($categorias); $i++ )
    {
        if($categorias[$i] == 'adolecente')
            echo "O nadador ", $name, " compete na categoria " ,$categorias[$i];
    }
}    
else If($idade >= 19 && $idade <= 59)
{
    for($i = 0; $i <= count($categorias); $i++ )
    {
        if($categorias[$i] =='adulto')
            echo "O nadador ", $name, " compete na categoria " , $categorias[$i];
           
    }   
}
else 
{   for($i = 0; $i <= count($categorias); $i++ )
    {
        if($categorias[$i] == 'idoso')
            echo "O nadador ", $name, " compete na categoria " ,$categorias[$i];
    
    }
}