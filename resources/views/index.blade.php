<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">


</head>

<body>
  <main>
    <ul class='slider'>
      <li class='item' style="background-image: url({{asset('/assets/img/guerreiro.png')}})">
        <div class='content'>
          <h2 class='title'>"Guerreiro"</h2>
          <p class='description'> No coração do campo de batalha, o guerreiro emerge como um colosso imperturbável,
            forjado na arte da guerra e moldado pela disciplina incansável. Com sua imponente armadura reluzente e
            espada afiada, o guerreiro é a personificação da coragem e da determinação. Seus passos ressoam como trovões
            no solo, enquanto enfrenta adversários com destemor, protegendo seus companheiros de batalha com um escudo
            impenetrável. Incansável e destemido, o guerreiro traz consigo a promessa de justiça e a força inabalável
            para enfrentar os desafios mais formidáveis. </p>
          <button onclick="redirectToNextPage('Guerreiro')">Criar</button>
        </div>
      </li>
      <li class='item' style="background-image: url({{asset('/assets/img/wizard.png')}})">
        <div class='content'>
          <h2 class='title'>"Mago"</h2>
          <p class='description'> Nos recantos ocultos da magia, o mago desvenda os segredos do cosmos, tecendo feitiços
            que desafiam a própria natureza. Com um cajado erguido e olhos cintilantes, o mago é um mestre dos
            elementos, manipulando fogo, água, terra e ar com um simples movimento de suas mãos. Sua mente é um arsenal
            de conhecimento arcano, e sua presença no campo de batalha é uma manifestação de poder místico. O mago
            explora os limites do impossível, transformando a realidade com suas artes mágicas e garantindo que o
            inusitado seja apenas uma questão de vontade. </p>
          <button onclick="redirectToNextPage('Mago')">Criar</button>
        </div>
      </li>
      <li class='item' style="background-image: url({{asset('/assets/img/arch.png')}})">
        <div class='content'>
          <h2 class='title'>"Arqueiro"</h2>
          <p class='description'> Das sombras da floresta ao topo das torres, o arqueiro se destaca como um virtuose da
            precisão. Com arco em punho e flechas afiadas, este mestre da destreza se move silenciosamente, ajustando-se
            aos ventos e observando cada movimento de seus adversários. Sua visão afiada alcança alvos inatingíveis para
            outros, e sua habilidade com a flecha é uma dança letal, onde cada disparo é uma expressão de domínio sobre
            a distância. O arqueiro é a personificação da graça mortal, uma sombra ágil que domina a arte da guerra à
            distância. </p>
          <button onclick="redirectToNextPage('Arqueiro')">Criar</button>
        </div>
      </li>
      <li class='item' style="background-image: url({{asset('/assets/img/monge.png')}})">
        <div class='content'>
          <h2 class='title'>"Monges"</h2>
          <p class='description'>
            Monges são sábios guerreiros que dedicam suas vidas à disciplina física, mental e espiritual. Através de
            anos de treinamento rigoroso em monastérios, eles aprimoram suas habilidades físicas e desenvolvem uma
            conexão profunda com suas próprias energias internas, conhecidas como "ki". Os monges são mestres em artes
            marciais desarmadas, utilizando técnicas ágeis e precisas para derrotar seus oponentes. Além da proficiência
            nas artes marciais, eles dominam o controle da respiração e meditação, permitindo-lhes realizar feitos
            extraordinários, como movimentos acrobáticos, saltos impressionantes e até mesmo canalizar seu "ki" para
            curar ferimentos ou aumentar suas capacidades físicas. Os monges seguem um código ético estrito, buscando a
            harmonia interna, a paz e o equilíbrio em um mundo repleto de desafios. Seu treinamento os transforma em
            guerreiros habilidosos e filósofos contemplativos, capazes de se adaptar a diversas situações com graça e
            destreza.
          </p>
          <button onclick="redirectToNextPage('Monge')">Criar</button>
        </div>
      </li>
      <li class='item' style="background-image: url({{asset('/assets/img/druida.png')}})">
        <div class='content'>
          <h2 class='title'>"Druídas"</h2>
          <p class='description'>
            Druídas são defensores da natureza e mestres da magia que emana dos elementos. Conectados profundamente
            com a flora e fauna, os druídas possuem a habilidade de se transformar em animais, ganhando assim as
            habilidades e instintos de criaturas selvagens. A sua magia tem um vínculo especial com o ambiente natural,
            podendo controlar as forças da terra, água e ar para curar aliados, invocar criaturas da floresta e
            conjurar feitiços que canalizam o poder da natureza contra seus inimigos. Em combate, eles se adaptam,
            alternando entre formas animais e o uso de magia elementar para equilibrar a harmonia da natureza.

          </p>
          <button onclick="redirectToNextPage('Druida')">Criar</button>
        </div>
      </li>
      <li class='item' style="background-image: url({{asset('/assets/img/necromante.png')}})">
        <div class='content'>
          <h2 class='title'>"Necromantes"</h2>
          <p class='description'>Necromantes são praticantes das artes obscuras, mestres na manipulação da morte e dos
            espíritos além da vida. Através de rituais sombrios, eles podem evocar e controlar mortos-vivos,
            transformando esqueletos e cadáveres em servos leais. A sua magia está entrelaçada com a morte e a
            decadência, permitindo-lhes drenar a energia vital dos seus oponentes para curar a si mesmos ou lançar
            maldições devastadoras. Além disso, os necromantes podem entrar em comunhão com o reino dos mortos, buscando
            conhecimento proibido e invocando magias que exploram os mistérios do além. Embora muitos os temam, os
            necromantes veem a morte como uma fonte de poder inexplorada e buscam dominar seus segredos para alcançar
            objetivos ambiciosos. </p>
            <button onclick="redirectToNextPage('Necromante')">Criar</button>
        </div>
      </li>
    </ul>
    <nav class='nav'>
      <ion-icon class='btn prev' name="arrow-back-outline"></ion-icon>
      <ion-icon class='btn next' name="arrow-forward-outline"></ion-icon>
    </nav>
  </main>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <script src="{{ asset('/assets/js/home.js') }}"></script>

  <script>
    function redirectToNextPage(personagem) {
      // Concatena o nome do personagem à URL da próxima página
      var url = "/personagem/cadastro?per=" + encodeURIComponent(personagem);
      
        // Redireciona para a próxima página
        window.location.href = url;

      
    }
  </script>
</body>

</html>