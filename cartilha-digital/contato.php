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
        <h1 class="titulo">Contato</h1>
        <h3 class="subtitulo"></h3>
        <span>1/01/2032</span>
        <img class="imgPost" src="./imagens/contato.jpg" alt="">
        <p class="text">Agradecemos sua presença no nosso site, e por ele venho divulgar as nossas redes sociais. Os debates e as conversas com nossos usuários auxiliam muito a melhorar o nosso trabalho, estamos sempre abertos para sugestões e opiniões construtivas para o desenvolvimento da nossa cartilha para contribuir com blogs cada vez mais estruturados, dignos do tema e do debate atual sobre acessibilidade. Por fim, agradeço sua atenção até o final do texto.  
          <hr>
          <div class="s-m">
          <a href="#"><i class="fab fa-whatsapp"></i></a>
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>

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
              <img class="imgRecommendedItem" src="./imagens/index.jpg">
              <a href="http://localhost/cartilha-digital/noticiaum.php">
              <div class="recommendedItemText">
                <h4>Os desafios profissionais de Daltônicos </h4>
                <h4 class="data">1/01/2032</h4>
                <p>No Brasil existem cerca de 15 milhões de daltónicos, sendo mais fácil encontrar a doença em homens, com 5% dos casos, do que em mulheres, com 0,25%...
                </p>
              </div>
              </a>
            </div>            
          </div>

          <div class="recommendedContainer" onclick="window.location='http://localhost/cartilha-digital/noticia.php';">
            <div class="recommendedItem">
              <img class="imgRecommendedItem" src="./imagens/daltonismo1.png">
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
              <img class="imgRecommendedItem" src="./imagens/inclusao2.jpg">
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
