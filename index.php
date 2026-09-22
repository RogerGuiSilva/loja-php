<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Loja de Informática</title>
</head>
<body>
    <h1>Faça seu Pedido</h1>

    <form action="processa.php" method="POST">

        <label for="produto">Escolha o Produto</label>
        <select name="produto" id="produto" required>
            <option value="Monitor">Monitor Alienware AW3225QF -R$ 6.800  </option>
            <option value = "Teclado">Teclado Mecânico Gamer Wooting 60HE -R$ 1.679,99 </option>
            <option value = "Mouse"> Mouse Gamer Sem Fio Razer Viper V4 Pro - R$ 1.583,99</option>
            <option value = "Headseat">Headset Gamer HyperX Cloud III - R$ 408,99 </option>
        </select>
        <br><br>

        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" requerid min="1">
        <br><br>

        <p>Forma de Pagamento:</p>
        <input type="radio" name="pagamento" id="pix" value="pix" required>
        <label for="pix">PIX</label>

         <input type="radio" name="pagamento" id="cartao" value="cartao" required>
        <label for="cartao">Cartão de Credito</label>
        <br><br>

        <label for="parcelas"> Numero de parcelas (1 a 12): </label>
        <select name="parcelas" id="parcelas">
         <option value="1">1x</option>
            <option value="2">2x</option>
            <option value="3">3x</option>
            <option value="4">4x</option>
            <option value="5">5x</option>
            <option value="6">6x</option>
            <option value="7">7x</option>
            <option value="8">8x</option>
            <option value="9">9x</option>
            <option value="10">10x</option>
            <option value="11">11x</option>
            <option value="12">12x</option>   
        </select>
        <br><br>

        <button type="submit">Calcular Pedido</button>


    </form>

    
</body>
</html>