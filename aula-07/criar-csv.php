<?php
$pessoas = array(
    ["Nome", "Idade", "Cidade"],
    ["Rafael", 20, "Americana"],
    ["Ana", 19, "Campinas"],
    ["Gabriel", 20, "Santa Bárbara"],
    ["Yngrid", 21, "Americana"]
);

$arquivo = fopen("dados.csv","a+");

/*for($i = 0; $i < count($pessoas); $i++){
    fputcsv($arquivo, $pessoas[$i], ";");
}
*/
foreach($pessoas as $uma_pessoa){
    fputcsv($arquivo, $uma_pessoa, ";");
}

fclose($arquivo);
?>