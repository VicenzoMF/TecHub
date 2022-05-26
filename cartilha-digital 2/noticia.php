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
        <h1 class="titulo">Lorem Ipsum</h1>
        <h3 class="subtitulo">Neque porro quisquam est qui dolorem</h3>
        <span>Autor Do Texto</span><span>1/01/2032</span>
        <img class="imgPost" src="./imagens/artigos/imagem teste.jpg" alt="">
        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          Mauris viverra nibh aliquam, maximus felis at, vehicula leo. 
          Nullam in libero nulla. Donec scelerisque neque ut quam lobortis 
          rutrum. Nulla facilisi.</p>
        <hr>
        <p class="text">
          Mauris mollis lectus ac consectetur laoreet. Nulla aliquet libero 
          ultricies, pulvinar erat sed, fermentum arcu. Proin at urna sed dolor
          vulputate facilisis. Praesent tincidunt condimentum urna at commodo. 
          Nam tristique, lacus vel placerat semper, dui eros malesuada ipsum, 
          in consectetur ex sapien in quam. Nunc mattis nunc id ligula posuere 
          tempor. Maecenas cursus metus a euismod fringilla. Etiam ut velit
          hendrerit, molestie urna non, eleifend arcu. Nulla pulvinar quis dui 
          in vestibulum.
        </p>
        
        <p class="text">
          Donec pellentesque tellus eu neque ultrices dignissim. Suspendisse potenti. 
          Quisque tincidunt velit in pretium tincidunt. In efficitur enim quis ligula 
          molestie finibus. Sed faucibus vulputate ante eu aliquam. Nulla et magna
          non elit viverra aliquam eu et lacus. Sed sed efficitur nunc. Duis id
          porttitor sapien. Morbi luctus quam eu massa mattis accumsan. Suspendisse
          at vehicula dolor, ac aliquet lectus. Nullam sodales suscipit neque nec
          consequat. Donec ut gravida erat. Donec congue non justo at mattis.
        </p>
        <p class="text">
          Curabitur suscipit, dui quis mattis consectetur, eros neque sagittis nunc, sit
          amet aliquet augue dui id enim. Proin eleifend eget turpis vitae euismod.Curabitur 
          bibendum augue at arcu hendrerit, vitae gravida tortor laoreet.I nteger gravida in 
          ipsum a pulvinar. Nullam interdum luctus euismod. Suspendisse potenti. Duis imperdiet
           nisl ac viverra varius. Quisque eu erat a dolor accumsan sagittis ut quis metus.
        </p>     
        <img class="bannerImgPost" src="./imagens/artigos/imagem teste 2.jpg" alt="">     
        <hr>
        <p class="text">Duis non scelerisque purus. Interdum et malesuada fames ac ante ipsum primis in
           faucibus. Cras et velit ut nibh mollis consectetur. Quisque semper eros a tellus suscipit, 
           et porttitor urna lobortis. Duis vestibulum blandit vehicula. In scelerisque fermentum 
           pharetra. Etiam ipsum ligula, ultrices sed vehicula sed, consequat sit amet quam. Maecenas vel 
           velit vitae erat imperdiet consectetur in ut sapien.
        </p>

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
          <div class="fullHr"></div>
          <h3 class="subtitulo">Recomendado</h3>

          <div class="recommendedContainer" onclick="window.location='http://localhost/cartilha-digital/noticia.php';">
            <div class="recommendedItem">
              <img class="imgRecommendedItem" src="./imagens/artigos/imagem teste.jpg">
              <div class="recommendedItemText">
                <h4>Lorem Ipsum</h4>
                <h4 class="data">1/01/2032</h4>
                <p>Duis non scelerisque purus. Interdum et malesuada Nam nec libero maximus urna tincidunt 
                  porttitor. Curabitur urna dolor.
                </p>
              </div>
            </div>            
          </div>

          <div class="recommendedContainer" onclick="window.location='http://localhost/cartilha-digital/noticia.php';">
            <div class="recommendedItem">
              <img class="imgRecommendedItem" src="./imagens/artigos/imagem teste.jpg">
              <div class="recommendedItemText">
                <h4>Lorem Ipsum</h4>
                <h4 class="data">1/01/2032</h4>
                <p>Duis non scelerisque purus. Interdum et malesuada Nam nec libero maximus urna tincidunt 
                  porttitor. Curabitur urna dolor.
                </p>
              </div>
            </div>            
          </div>

          <div class="recommendedContainer" onclick="window.location='http://localhost/cartilha-digital/noticia.php';">
            <div class="recommendedItem">
              <img class="imgRecommendedItem" src="./imagens/artigos/imagem teste.jpg">
              <div class="recommendedItemText">
                <h4>Lorem Ipsum</h4>
                <h4 class="data">1/01/2032</h4>
                <p>Duis non scelerisque purus. Interdum et malesuada Nam nec libero maximus urna tincidunt 
                  porttitor. Curabitur urna dolor.
                </p>
              </div>
            </div>            
          </div>

        </div> 
        </article>
    
    </section>

    
<?php 
  
include_once './includes/footer.php';
  
?>
