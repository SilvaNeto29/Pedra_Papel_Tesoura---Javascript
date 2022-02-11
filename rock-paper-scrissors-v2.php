<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style-v2.css">
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
      var computador = numAleatorio(1, 3);

      switch (computador) {
        case 1:
          document.getElementById("partida").textContent = "O computador também jogou pedra. Jogue novamente!";
          break;
        case 2:
          document.getElementById("partida").textContent = "O computador jogou papel! Você perdeu! :'( ";
          placarDireito++;
          document.getElementById("placarDireito").textContent = placarDireito;
          break;
        case 3:
          document.getElementById("partida").textContent = "O computador jogou tesoura! Você ganhou a rodada!!!! :D ";
          placarEsquerdo++;
          document.getElementById("placarEsquerdo").textContent = placarEsquerdo;
          break;
      }

    }

    function papel() {
      var computador = numAleatorio(1, 3);

      switch (computador) {
        case 1:
          document.getElementById("partida").textContent = "O computador jogou pedra! Você ganhou a rodada!!";
          placarEsquerdo++;
          document.getElementById("placarEsquerdo").textContent = placarEsquerdo;
          break;
        case 2:
          document.getElementById("partida").textContent = "O computador também jogou papel. Empate!";
          break;
        case 3:
          document.getElementById("partida").textContent = "O computador jogou tesoura. Você perdeu a rodada!! :( ";
          placarDireito++;
          document.getElementById("placarDireito").textContent = placarDireito;
          break;
      }
    }

    function tesoura() {
      var computador = numAleatorio(1, 3);

      switch (computador) {
        case 1:
          document.getElementById("partida").textContent = "O computador jogou pedra! Você perdeu a rodada! :( ";
          placarDireito++;
          document.getElementById("placarDireito").textContent = placarDireito;
          break;
        case 2:
          document.getElementById("partida").textContent = "O computador jogou papel! Você ganhou!!";
          placarEsquerdo++;
          document.getElementById("placarEsquerdo").textContent = placarEsquerdo;
          break;
        case 3:
          document.getElementById("partida").textContent = "O computador jogou tesoura! Empate!";
          break;
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