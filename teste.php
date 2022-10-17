<link rel="stylesheet" href="css/style.css">
<?php
$nome = strtolower(str_replace(' ','',$_POST['nome']));
$universo =strtolower($_POST['universo']);
$qtd = $_POST['qtd'];
$exibirN = ucwords(strtolower($_POST['nome']));



if($universo == 'marvel' ){
    if($nome != "thor" &&
    $nome != "hulk" &&
    $nome != "homemaranha" &&
    $nome != "deadpool" &&
    $nome != "panteranegra"){
     echo "<div class='dibas'> Heroi Inexistente </div>";
    }
    else{
        echo "<div class='nomeheroi'> O seu heroi é o <b>".$exibirN."</b> e ele vai repetir ".$qtd." vezes</div>";
        for($contador = 0 ; $contador<$qtd;$contador++){
            echo"<div class='dibas'><img src='img/".$nome.".gif' class='img'></div>";
        }
       }
}
else if($universo == 'dc'){
    if($nome != "batman" &&
   $nome != "flash" &&
   $nome != "lanternaverde" &&
   $nome != "superman" &&
   $nome != "rorschach"){
    echo "<div class='dibas'> Heroi Inexistente </div>";
   }
   else{
    echo "<div class='dibas'>O seu heroi é o ".$exibirN." e ele vai repetir ".$qtd." vezes</div>";
    for($contador = 0 ; $contador<$qtd;$contador++){
        echo"<img src='img/".$nome.".gif'>";
   }
}
}   
?>