<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Checkout</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
	<link rel="icon" type="image/x-icon" href="logobv.png">
	
  </head>
  <body><br>
	
	<div id="fundocentral">
	<b><div id="foto"><img align="left" class="banner" src="banner.png"/></div>
	<div id="titulo"><div id="topo">Pacote Beto Carrero World</div>
	<div id="topo2">2 adultos e 1 criança de 8 anos</div>
	<h1 id="valor">Valor Total do Pacote: R$3.260,00</h1>
	</b></div>
	<hr color="#ecedf3">
	<div class="descricao"><br>
	<b> <font color="#838383">DESCRIÇÃO DO PACOTE</font></b><br><br>
	
	<div id="blocoaereo">
	<img id="aviaobloco" src="aviao.png"> <br>
	<b><div class="titulo">São Paulo - Navegantes</div></b>
	<h5>Ida e volta, 2 adultos e 1 criança</h5><br>
	<h2>IDA - 01 set 2022</h2>
	<img id="cia" src="latam3.png"> 
	<h3>Aeroporto de Origem: Guarulhos - SP</h3>
	<h6>Horário de Saída: 06:50</h6><br>
	<h3>Voo Direto</h3><h6>Duração do Voo: 01h 10min</h6><br>
	<h3>Aeroporto de Destino: Navegantes - SC</h3>
	<h6>Horário de Chegada: 08:00</h6><br>
	<br>
	<h2>VOLTA - 05 out 2022</h2>
	<img id="cia" src="latam3.png"> 
	<h3>Aeroporto de Origem: Guarulhos - SP</h3>
	<h6>Horário de Saída: 06:50</h6><br>
	<h3>Voo Direto</h3><h6>Duração do Voo: 01h 10min</h6><br>
	<h3>Aeroporto de Destino: Navegantes - SC</h3>
	<h6>Horário de Chegada: 08:00</h6><br><br>
	<b>Não inclui mala despachada.</b>
	</div>
	
	<div id="blocohotel">
	<img id="aviaobloco" src="hotel.png"> <br>
	<b><div class="titulo">Pousada do Pescador</div></b>
	<h5>3 diárias com café da manhã<br>1 quarto para 2 adultos e 1 criança</h5><br>
	<h2>CHECK IN - 01 set 2022</h2>
	<h6>Horário: 14:00</h6><br>
	<h2>CHECK OUT - 05 out 2022</h2>
	<h6>Horário: 11:00</h6><br>
	<h2>Endereço</h2>
	<h6>Rua Inácio Francisco De Souza, 416 Praia Da Armação, Penha, Santa Catarina, Brasil - CEP 88385-000.</h6>
	</div>
	
	<div id="blocoingresso">
	<img id="aviaobloco" src="ingresso.png"> <br>
	<b><div class="titulo">Beto Carrero World</div></b>
	<h5>Ingressos para dois dias no parque<br>2 adultos e 1 criança</h5><br>
	<h3>Ingressos válidos para utilização dia 05/07/2022 e 06/07/2022</h3>
	</div>	
<br>
<br>
	<h1><b>Nesse pacote não inclui transfer.<br>
	<font color="red">Cancelamento não reembolsável.</font></b><br><br>
	Valor Total do Pacote: R$3.260,00</h1>
	</div>
	<hr color="#ecedf3">
	<form method="get" action="envio_dados.php"><br>
	<div class="passageiro1">
	<b> <font color="#838383">DADOS DO 1º PASSAGEIRO</font></b><br><br>
	
	<div class="nomecompleto"><b>Nome Completo</b></div>
    <input type="text" name="nome" placeholder="Digite seu nome completo">
	<br><br>
	
	<div class="datacpfrg">
	<b>Data de Nascimento</b><br>
    <input type="date" id="DataNascimento" name="DataNascimento">
	</div>
	
	<div class="datacpfrg">
	<b>CPF</b><br>
	<input type="text" id="CPF1" autocomplete="off" maxlength="14" placeholder="Digite seu CPF">
	</div>
		
	<div class="datacpfrg">
	<b>Gênero</b><br>
	<select name="genero" id="genero">
			<option value="mes0"></option>
			<option value="jan">FEMININO</option>
			<option value="fev">MASCULINO</option>
		</select>
	</div>
	
	<br>
	</div>
	<br>
	<div class="passageiro1">
	<b> <font color="#838383">DADOS DO 2º PASSAGEIRO</font></b><br><br>
	
	<div class="nomecompleto"><b>Nome Completo</b></div>
    <input type="text" name="nome" placeholder="Digite seu nome completo">
	<br><br>
	
	<div class="datacpfrg">
	<b>Data de Nascimento</b><br>
    <input type="date" id="DataNascimento" name="DataNascimento">
	</div>
	
	<div class="datacpfrg">
	<b>CPF</b><br>
	<input type="text" id="CPF2" autocomplete="off" maxlength="14" placeholder="Digite seu CPF">
	</div>
		
	<div class="datacpfrg">
	<b>Gênero</b><br>
	<select name="genero" id="genero">
			<option value="mes0"></option>
			<option value="jan">FEMININO</option>
			<option value="fev">MASCULINO</option>
		</select>
	</div>
	
	<br>
	</div>
	<br>
	<div class="passageiro1">
	<b> <font color="#838383">DADOS DO 3º PASSAGEIRO</font></b><br><br>
	
	<div class="nomecompleto"><b>Nome Completo</b></div>
    <input type="text" name="nome" placeholder="Digite seu nome completo">
	<br><br>
	
	
	<div class="datacpfrg">
	<b>Data de Nascimento</b><br>
    <input type="date" id="DataNascimento" name="DataNascimento">
	</div>
	
	<div class="datacpfrg">
	<b>CPF</b><br>
	<input type="text" id="CPF3" autocomplete="off" maxlength="14" placeholder="Digite seu CPF">
	</div>
		
	<div class="datacpfrg">
	<b>Gênero</b><br>
	<select name="genero" id="genero">
			<option value="mes0"></option>
			<option value="jan">FEMININO</option>
			<option value="fev">MASCULINO</option>
		</select>
	</div>
	
	<br>
	</div>
	<br>
	<div class="passageiro1">
	<b> <font color="#838383">PAGAMENTO COM CARTÃO DE CRÉDITO</font></b><br><br>
	<img class="cartao" src="visa.png"> <img class="cartao" src="mcard.png"> <img class="cartao" src="amex.png"> <img class="cartao" src="elo.png"> 
	<br><br>
	<b>Valor total: R$3.460,00</b><br><br>
	<b><div class="parcelar">Parcelar em:</b><br></div>
		<select name="mes" id="mes">
			<option value="1x">1x de R$000,00</option>
			<option value="2x">2x de R$000,00</option>
			<option value="3x">3x de R$000,00</option>
			<option value="4x">4x de R$000,00</option>
			<option value="5x">5x de R$000,00</option>
		</select>
	<br><br>
	<div class="nomeimpresso">
	<b>Nome Impresso no Cartão de Crédito</b><br>
    <input type="text" name="nome" placeholder="Digite conforme está no cartão">
	<br><br>
	</div>
	<div class="numerocartao">
	<b>Número do Cartão de Crédito</b><br>
    <input type="number" name="numerocartao" placeholder="Digite o número do cartão">
	<br><br>
	</div><br>
	<div class="datacpfrg">
	<b>CPF do Titular</b><br>
	<input type="text" id="CPF4" autocomplete="off" maxlength="14" placeholder="Digite o CPF do titular">
	</div>
	<div class="codigoseguranca">
	<b>Código de Segurança</b><br>
	<input type="number" name="codigoseguranca" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="4">
	<br>
	</div>
	
	<div class="mesanocodigo">
	<b>Mês de Validade</b><br>
		<select name="mes" id="mes">
			<option value="mes0"></option>
			<option value="jan">JANEIRO</option>
			<option value="fev">FEVEREIRO</option>
			<option value="mar">MARÇO</option>
			<option value="abr">ABRIL</option>
			<option value="mai">MAIO</option>
			<option value="jun">JUNHO</option>
			<option value="jul">JULHO</option>
			<option value="ago">AGOSTO</option>
			<option value="set">SETEMBRO</option>
			<option value="out">OUTUBRO</option>
			<option value="nov">NOVEMBRO</option>
			<option value="dez">DEZEMBRO</option>
		</select>
	</div>
	<div class="mesanocodigo">
		<b>Ano de Validade</b><br>
		<select name="ano" id="ano">
			<option value="ano0"></option>
			<option value="2022">2022</option>
			<option value="2023">2023</option>
			<option value="2024">2024</option>
			<option value="2025">2025</option>
			<option value="2026">2026</option>
			<option value="2027">2027</option>
			<option value="2028">2028</option>
			<option value="2029">2029</option>
			<option value="2030">2030</option>
			<option value="2031">2031</option>
			<option value="2032">2032</option>
			<option value="2033">2033</option>
			<option value="2034">2034</option>
			<option value="2035">2035</option>
			<option value="2036">2036</option>
		</select>
	</div>
	</div><br>
	<center><input type="submit" name="enviar" value="CONFIRMAR COMPRA"></center>
	</form>
	
	<script src="https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/dist/cleave.min.js"></script>
    <script>
    new Cleave('#CPF1', {
      blocks: [3, 3, 3, 2],
      delimiters: ['.', '.', '-'],
      numericOnly: true
    });
	
	new Cleave('#CPF2', {
      blocks: [3, 3, 3, 2],
      delimiters: ['.', '.', '-'],
      numericOnly: true
    });
	
	new Cleave('#CPF3', {
      blocks: [3, 3, 3, 2],
      delimiters: ['.', '.', '-'],
      numericOnly: true
    });
	
	new Cleave('#CPF4', {
      blocks: [3, 3, 3, 2],
      delimiters: ['.', '.', '-'],
      numericOnly: true
    });
	
	new Cleave('#RG1', {
      blocks: [1, 3, 3, 2],
      delimiters: ['.', '.', '-'],
      numericOnly: true
    });
	</script>
	
	</div>
	
	<center class="rodape">Bom Voo - Agência de Viagens - CNPJ 46.000.232/0001-40</center>
	
  </body>
</html>