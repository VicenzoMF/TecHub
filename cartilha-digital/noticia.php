<?php  
// Identificar o URL

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
  $url = "https://";
} else {
  $url = "http://";   

  $url.= $_SERVER['HTTP_HOST'];   


  $url.= $_SERVER['REQUEST_URI'];    
}

include_once './includes/head.php';

include_once './includes/header.php';
?>


  
    <section class="single-post-container">
      <div class="containerPost">
        <article class="post">
        <h1 class="titulo">Apoio Pedagógico</h1>
        <h3 class="subtitulo">ao Daltonismo</h3>
        <span>Autor Do Texto</span><span>1/01/2032</span>
        <img class="imgPost" src="./imagens/olhocolorido.jpg" alt="">
        <p class="text">Uma criança começa a perceber as cores e nomeá-las dos 3 meses de idade até os 3 anos, um fator extremamente importante para o desenvolvimento infantil, visto que estímulos decorrentes de figuras coloridas contribuem para o desenvolvimento da capacidade cognitiva, fala, audição, raciocínio e dentre outras funções, segundo estudos e especialistas sobre o assunto. As cores influenciam a vida de uma criança desde o início dela, portando significados culturais incontáveis.  </p>
        <hr>
        <p class="text">
        Dito isso, se vê necessário um maior apoio pedagógico às crianças com essa peculiaridade, a fim contribuir no desenvolvimento educacional da criança. Um projeto relativo ao aprendizado das cores conceitua-se no incentivo às crianças de educação infantil em reconhecer as cores em seus nomes, conceitos e significados, a fim de facilitar a vida cotidiana adulta que irão passar após esse desenvolvimento. A arte é lúdica, e assim sendo amplia a visualização da aplicabilidade do conhecimento adquirido de forma criativa e manual, físico, recreativo, apresentando aos alunos as cores, como parte de sua realidade e representação das coisas, através da pintura como instrumento de construção desse conhecimento.  
        </p>
        
        <p class="text">
        A revista Guia Infantil (2016, s/p [online]) destaca que a utilização de cores contribui para o desenvolvimento da criança, por meio do aprimoramento da capacidade motora, cognitiva, lógica, artística e de raciocínio. A arte está sempre a ser decifrada, a pintura exige uma compreensão ampliada do mundo, algo que possibilita oportunidades únicas para a criança durante a vida adulta, sendo importante fator agregativo para a felicidade da mesma, também.  
        </p>
        <p class="text">
        De acordo com algumas pesquisas recentes, cerca de 5% da população mundial tem daltonismo, e por isso, esse número não deve passar despercebido pelas instituições educacionais.
        </p>     
        <img class="bannerImgPost" src="./imagens/olhocolorido2.jpeg" alt="">     
        <hr>

        <input type="checkbox" id="show" hidden>
        <label for="show"><i class="showBtn fas fa-share"></i></label>

        
        <div class="shareContainer">
        <label for="show" class="closeBtn fas fa-times"></label>
          <div class="shareFlexContainer">
          <p>Compartilhe este artigo com outras pessoas!</p>
          <input class="shareUrl" type="text" id="urlInput" value="<?php echo $url ?>" disabled>
          <button class="btnCopy" onclick="CopyToClipboard()"><i class="fas fa-copy"></i></button>
          </div>
        </div>
        </div>







        </div>
        <div class="bottomContainerPost">   
          <h3 class="subtitulo">Recomendado</h3>

          <div class="recommendedContainer" onclick="window.location='http://localhost/cartilha-digital/noticia.php';">
            <div class="recommendedItem">
              <img class="imgRecommendedItem" src="./imagens/artigos/imagem teste.jpg">
              <a href="http://localhost/cartilha-digital/noticiaum.php">
              <div class="recommendedItemText">
                <h5>Os desafios profissionais e cotidianos de Daltônicos </h5>
                <h4 class="data">1/01/2032</h4>
                <p>No Brasil existem cerca de 15 milhões de daltónicos, sendo mais fácil encontrar a doença em homens, com 5% dos casos, do que em mulheres, com 0,25%...
                </p>
              </div>
              </a>
            </div>            
          </div>

          <div class="recommendedContainer" onclick="window.location='http://localhost/cartilha-digital/noticia.php';">
            <div class="recommendedItem">
              <img class="imgRecommendedItem" src="./imagens/artigos/imagem teste.jpg">
              <a href="http://localhost/cartilha-digital/noticiadois.php">
              <div class="recommendedItemText">
                <h4>Ferramentas que auxiliam</h4>
                <h4 class="data">1/01/2032</h4>
                <p>Na Internet é possível encontrar muitas ferramentas que ajudam os daltônicos em diversas situações. A ferramenta Color Name & Hue, por exemplo, categoriza as cores nos principais tons de vermelho, laranja, amarelo, verde, azul, violeta, marrom, preto, cinza e branco...
                </p>
              </div>
              </a>
            </div>            
          </div>

          <div class="recommendedContainer" onclick="window.location='http://localhost/cartilha-digital/noticia.php';">
            <div class="recommendedItem">
              <img class="imgRecommendedItem" src="./imagens/artigos/imagem teste.jpg">
              <a href="http://localhost/cartilha-digital/noticiatres.php">
              <div class="recommendedItemText">
                <h4>Desafios no avanço tecnológico de inclusão </h4>
                <h4 class="data">1/01/2032</h4>
                <p>De acordo com a OMS, o daltonismo atinge 350 milhões de pessoas no mundo, sendo 8 milhões no Brasil...
                </p>
              </div>
              </a>
            </div>            
          </div>

        </div> 
        </article>
    
    </section>

    
<?php 
  
include_once './includes/footer.php';
  
?>
