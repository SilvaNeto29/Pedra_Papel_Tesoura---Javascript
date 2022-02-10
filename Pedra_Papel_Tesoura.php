<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Desafio</title>
</head>

<body>

  <h1>PEDRA - PAPEL - TESOURA</h1>
  <h4>Escolha sua jogada!</h4>

  <div class="divbotoes">
    <button class="botao" id="pedra" onclick="pedra()">Pedra</button><br>
    <button class="botao" id="papel" onclick="papel()">Papel</button><br>
    <button class="botao" id="tesoura" onclick="tesoura()">Tesoura</button><br>
  </div>

  <div class="partida">
    <br><br>
    <p id="partida">Clique para jogar.</p><br>
  </div>

  <div class="placar">
    <div class="paragrafos">
      <p id="placarEsquerdo">0</p>
      <p id="X"> X </p>
      <p id="placarDireito">0</p>
    </div>

  </div>

  <script>
    var placarEsquerdo = 0;
    var placarDireito = 0

    function pedra() {
      var pedra = 1;
      var computador = numAleatorio(1, 3);

      if (computador == 1) {
        document.getElementById("partida").textContent = "O computador também jogou pedra. Jogue novamente!";
      } else if (computador == 3) {
        document.getElementById("partida").textContent = "Você ganhou a rodada!!!! :D";
        placarEsquerdo++;
        document.getElementById("placarEsquerdo").textContent = placarEsquerdo;
      } else if (computador == 2) {
        document.getElementById("partida").textContent = "Você perdeu a rodada :'(";
        placarDireito++;
        document.getElementById("placarDireito").textContent = placarDireito;
      }
    }

    function papel() {
      var papel = 2;
      var computador = numAleatorio(1, 3);

      if (computador == 2) {
        document.getElementById("partida").textContent = "O computador também jogou papel. Jogue novamente!";
      } else if (computador == 1) {
        document.getElementById("partida").textContent = "Você ganhou a rodada!!!! :D";
        placarEsquerdo++;
        document.getElementById("placarEsquerdo").textContent = placarEsquerdo;
      } else if (computador == 3) {
        document.getElementById("partida").textContent = "Você perdeu a rodada :'(";
        placarDireito++;
        document.getElementById("placarDireito").textContent = placarDireito;
      }
    }

    function tesoura() {
      var tesoura = 3;
      var computador = numAleatorio(1, 3);

      if (computador == 3) {
        document.getElementById("partida").textContent = "O computador também jogou tesoura. Jogue novamente!";
      } else if (computador == 2) {
        document.getElementById("partida").textContent = "Você ganhou a rodada!!!! :D";
        placarEsquerdo++;
        document.getElementById("placarEsquerdo").textContent = placarEsquerdo;
      } else if (computador == 1) {
        document.getElementById("partida").textContent = "Você perdeu a rodada :'(";
        placarDireito++;
        document.getElementById("placarDireito").textContent = placarDireito;
      }
    }

    function numAleatorio(min, max) {
      var num = Math.floor(Math.random() * (max - min + 1)) + min;
      //alert(teste);
      return num;
    }
  </script>
</body>

</html>