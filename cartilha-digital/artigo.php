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
        <h1 class="titulo">Barreias na acessibilidade</h1>
        <h3 class="subtitulo">WEB para daltônicos</h3>
        <span>1/01/2032</span>
        <img class="imgPost" src="./imagens/barreira.jpg" alt="">
        <p class="text">Cor utilizada como único recurso para enfatizar uma informação 

Alguns sites apresentam gráficos guiados por cores, e estes devem ser incorporados com legendas, texturas de linhas diferentes, ilustrações e entre outras funcionalidades. Desse modo, seria proporcionado um acesso melhor para usuários daltônicos, facilitando a interpretação dos gráficos ou qualquer que seja a informação no site, utilizando várias formas de transmitir a informação e não se prender nas cores.  </p>
        <hr>
        <p class="text">Contraste Inadequado entre as cores da fonte e do plano fundo 

Algumas cores não são visíveis para daltônicos, dito isso, é preciso se atentar a utilizar combinações que forneçam um alto contraste, garantindo a visualização da fonte sem ter que fazer os olhos do usuário com alguma disfunção visual se esforçarem para ler o conteúdo. Verde e azul, vermelho e preto, e entre outras combinações são difíceis de se enxergar até para uma pessoa comum, se a fonte estiver relativamente pequena.</p>
        <p class="text">Validação de formulário por cores 

Sites que apresentam opções de validação guiadas apenas por reconhecimento de cores são barreiras que dificultam a vida de um daltônico em sua acessibilidade digital. Alguns formulários, por exemplo, marcam a fonte em vermelho para mostrar ao usuário que as informações preenchidas no campo foram inválidas, entretanto, uma pessoa que não consegue identificar essa cor teria alguns transtornos para conseguir terminar o formulário. A situação se agrava quando o formulário em questão é extenso, como uma prova digital, por exemplo.  </p>
        <p class="text">Para contornar esse problema, ilustrações que chamem a atenção do usuário para o campo não validado em questão são eficientes, além da possibilidade de realçar a fonte do campo com linhas mais espessas. </p>
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
        </article> 
    </section>

    
<?php 
  
include_once './includes/footer.php';
  
?>
