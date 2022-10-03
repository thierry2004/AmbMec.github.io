<!DOCTYPE html>
<html>

<head>
  <title>Inicio</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="responsive.css" media="screen and (max-width: 768px)" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="print.css" media="print">
</head>

<body>
  <header id="topo">
    <div class="container">
      <img src="images\2.jpg" alt="ambmec" />
      <div class="menu-section">
        <div class="menu-toggle">
          <div class="one"></div>
          <div class="two"></div>
          <div class="three"></div>
        </div>
        <nav>
          <ul>
            <li>
              <a href="apresentacao.php">Integrantes</a>
            </li>
            <li>
              <a href="galeria.php">Galería</a>
            </li>
            <li>
              <a href="contato.php">Contato</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <section class="nav">
    <h1>GRÊMIO AMBMEC </h1>
    <h3 class="span loader">
      <span class="m">M</span>
      <span class="m">A</span>
      <span class="m">R</span>
      <span class="m">I</span>
      <span class="m">E</span>
      <span class="m">&nbsp;</span>
      <span class="m">&nbsp;</span>
      <span class="m">C</span>
      <span class="m">U</span>
      <span class="m">R</span>
      <span class="m">I</span>
      <span class="m">E</span>
    </h3>
  </section>
  <section class="hero">
    <div class="container">
      <div>
        <h2>
          QUEM FOI?
        </h2>
        <p>
          Marie Sklodowska-Curie, foi uma fisica e quimica
          polonesa naturalizada francesa, que conduziu
          pesquisas pioneiras sobre radioatividade.
          O nosso grêmio recebeu esse nome de Marie Curie porque
          ela foi uma influencer, pesquisadora e mulher empoderada de
          suma importância. Numa época em que a ciencia era dominada pelos homens,
          Marie Curie fez uma verdadeira revolução no meio cietífico e na
          propria historia ao ser a primeira mulher do mundo a ganhar o prêmio nobel.
          Nosso grêmio estudantil, fundado por uma mulher se identifica com a historia da mesma, uma vez
          que ela mostra a força da mulher
          e que com muita dedicação, trabalho e esforço todos podem vir a ter grande renome na sociedade.
        </p>
      </div>
      <img src="https://clipground.com/images/curie-clipart-2.jpg" alt="" />
    </div>
  </section>

  <section id="form">
    <form action="">
      <h3>Teve uma ideia fale conosco!</h3>
      <div class="form-group">
        <input class="input-control" placeholder="Nome" />

        <input type="email" class="input-control" placeholder="Email" />
      </div>

      <div class="form-group">
        <input class="input-control" placeholder="Turma" />
      </div>

      <div class="form-group">
        <textarea class="input-control" name="conteudo" placeholder="DEIXE UMA MENSAGEM OU UMA IDEIA"
          required></textarea>
      </div>

      <div class="form-group">
        <button type="submit" class="button">Save</button>

      </div>

    </form>
  </section>


  <div data-scrool="suave" data-anima="scroll">
    <a href="#topo">
      <div class="topo">
        <img src="images\322-circle-up.svg" alt="voltar ao topo">
      </div>
    </a>
  </div>
<div class="copi">
  &copy;copyryte|D.projetos</div>
  <script src="scripts.js"></script>
  <script src="menu.js"></script>
</body>

</html>