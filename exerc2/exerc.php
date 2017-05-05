<?php
include "pedidos.php";

function totalSales($arSales){
    $totalGeral = 0;

    foreach ($arSales as $key => $value) {
        $totalGeral += $value['valor_bruto'];
    }    
    echo "Total de vendas: $totalGeral";
}

function topSales($arSales,$qtdTop){
    $totSalesProd = array();

    foreach ($arSales as $key => $value) {
        $totSalesProd[$value['produto_id']] += $value['valor_bruto'];
    }    
    arsort($totSalesProd);
    
    for ($i=0; $i < $qtdTop; $i++) { 
        echo ($i+1)." - Produto mais vendido é: ".array_keys($totSalesProd)[$i]." total vendido ".array_values($totSalesProd)[$i]."  <br />";
    }
}

function downSales($arSales,$qtdDown){
    $totSalesProd = array();

    foreach ($arSales as $key => $value) {
        $totSalesProd[$value['produto_id']] += $value['valor_bruto'];
    }    
    asort($totSalesProd);
    
    for ($i=0; $i < $qtdDown; $i++) { 
        echo ($i+1)." - Produto menos vendido é: ".array_keys($totSalesProd)[$i]." total vendido ".array_values($totSalesProd)[$i]."  <br />";
    }
}
function teste($arSales,$qtdDown){
    $totSalesProd = array();

    foreach ($arSales as $key => $value) {
        $totSalesProd[$value['produto_id']] += $value['valor_bruto'];
    }    
    asort($totSalesProd);
    print_r($totSalesProd);
    
    /*for ($i=0; $i < $qtdDown; $i++) { 
        echo ($i+1)." - Produto menos vendido é: ".array_keys($totSalesProd)[$i]." total vendido ".array_values($totSalesProd)[$i]."  <br />";
    }*/
}

switch ($_GET['state']) {
    case '1':
        totalSales($pedidos);
        break;
    case '2':
        topSales($pedidos,3);
         break;
    case '3':
        downSales($pedidos,10);
         break;
    case '4':
        teste($pedidos,48);
         break;         
}


//print_r($produtos_venda);