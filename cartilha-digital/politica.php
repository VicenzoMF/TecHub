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
        <h1 class="titulo">Política</h1>
        <h3 class="subtitulo">de Privacidade</h3>
        <span>1/01/2032</span>
        <img class="imgPost" src="./imagens/daltonismo1.png" alt="">
        <p class="text">A nossa cartilha digital é uma empresa digital que une dados, tecnologia, artigos, notícias, curiosidades e criatividade para impulsionar a acessibilidade digital, com o objetivo de impulsionar os resultados de acessibilidade para quem pretende criar um site acessível ao público com alguma deficiência visual, respeitando e privilegiando a conformidade com a legislação de proteção de dados. A nossa cartilha valoriza a privacidade e a segurança dos dados dos titulares e de seus usuários. A presente Política de Privacidade tem por finalidade demonstrar o compromisso da Cartilha com a privacidade e a proteção dos dados pessoais coletados, durante todo o processo de tratamento dos dados pela Cartilha, estabelecendo as regras sobre a coleta, registro, armazenamento, uso, compartilhamento e eliminação dos dados coletados dentro do escopo dos serviços e funcionalidades do seu site, de acordo com as leis em vigor. </p>
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
