<?php
$produto = $_POST['produto'];
$quantidade = $_POST['quantidade'];
$pagamento = $_POST ['pagamento'];
$parcelas = $_POST ['parcelas'];

if ($quantidade <=0) {
    echo "<strong>Erro:</strong> A quantidade  deve ser maior que zero. <br><br>";
    echo "<a href='index.php'> Voltar para o formulario</a>";
    exit; 

}

$preco_unitario =0;
$nome_produto = "";

switch ($produto) {
    case 'Monitor':
        $preco_unitario = 6800.00; 
        $nome_produto = "Monitor Alienware AW3225QF";
        break;

    case 'Teclado':
        $preco_unitario = 1679.99;
        $nome_produto = "Teclado Mecânico Gamer Wooting 60HE";
        break;

    case 'Mouse':
        $preco_unitario = 1583.99;
        $nome_produto = "Mouse Gamer Sem Fio Razer Viper V4 Pro";
        break;

    case 'Headseat':
        $preco_unitario = 408.99;
        $nome_produto = "Headset Gamer HyperX Cloud III";
        break;

}

        $subtotal = $preco_unitario * $quantidade;

        $valor_total = 0;
        $desconto = 0;
        $juros = 0;
        $valor_parcela =0; 

        if ($pagamento == 'pix') {
            $desconto = $subtotal * 0.05;
            $valor_total = $subtotal - $desconto;

        }

        elseif ($pagamento == 'cartao') {
            if($parcelas >= 1 && $parcelas <= 3 ) {
                $valor_total = $subtotal;
                $valor_parcela = $valor_total / $parcelas;

            } else {

            $juros = $subtotal * 0.015 * $parcelas;
            $valor_total = $subtotal + $juros;
            $valor_parcela = $valor_total / $parcelas;

            }
        }

        echo "<h2>Resumo da Compra</h2>";
        echo "Produto: " . $nome_produto . "<br>";
        echo "Valor Unitário: R$ " . number_format($preco_unitario, 2, ',', '.') . "<br>";
        echo "Quantidade: " . $quantidade . "<br>";
        echo "Subtotal: R$ " . number_format($subtotal, 2, ',', '.') . "<br><hr>";

        if($pagamento =='pix') {

        echo "Valor do desconto: R$ " . number_format($desconto, 2, ',', '.') . "<br>";
        echo "Valor total final: R$ " . number_format($valor_total, 2, ',', '.');

        }
        else{
            echo "Quantidade de parcelas: " . $parcelas . "<br>";

      if ($parcelas > 3) {
    echo "Valor do juros: R$ " . number_format($juros, 2, ',', '.') . "<br>";
}

    echo "Valor de cada parcela: R$ " . number_format($valor_parcela, 2, ',', '.') . "<br>";
    echo "Valor total final: R$ " . number_format($valor_total, 2, ',', '.');

        }



?>
