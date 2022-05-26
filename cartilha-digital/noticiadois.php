<?php 

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
        <h1 class="titulo">Ferramentas</h1>
        <h3 class="subtitulo">que auxiliam a navegação para os daltonicos</h3>
        <span>Autor Do Texto</span><span>1/01/2032</span>
        <img class="imgPost" src="./imagens/ferramenta.jpg" alt="">
        <p class="text">Na Internet é possível encontrar muitas ferramentas que ajudam os daltônicos em diversas situações. A ferramenta Color Name & Hue, por exemplo, categoriza as cores nos principais tons de vermelho, laranja, amarelo, verde, azul, violeta, marrom, preto, cinza e branco. É possível encontrar uma determinada cor deslizando o cursor do mouse através do espectro de cores disponibilizado no site, ou preenchendo os valores RGB, HSB ou HEX. A partir destas informações, a Color Name & Hue encontra a cor correspondente mais próxima dentre uma lista de 1640 cores. O aplicativo para dispositivos móveis DanKam, possui como proposta ‘corrigir’ o daltonismo. Este é uma ferramenta baseada em realidade aumentada que utiliza a câmera do dispositivo para filtrar as imagens em tempo real. O DanKam altera as cores de superfícies e objetos, possibilitando ao daltônico visualizar detalhes e contrastes que antes não eram possíveis de se identificar.<hr>
        <p class="text">
        Outra ferramenta disponível e que auxilia os daltônicos no dia a dia é o Color Identifier. Este é um aplicativo de realidade aumentada desenvolvido para dispositivos móveis que utiliza a câmera do celular ou tablet para identificar o nome das cores. Apontando a câmera do dispositivo para uma superfície, o Color Identifier além de dizer o nome, informa os valores HEX da cor identificada.</p>
        
        <p class="text">
        Ferramentas – Plugin do Google Chrome
O Google lançou uma extensão para o Google Chrome que vai facilitar a vida de quem sofre de daltonismo. O Color Enhancer modifica automaticamente a forma com a qual o navegador exibe algumas cores, permitindo que pessoas afetadas pelo distúrbio possam usar a Internet sem problemas.
Exemplo: </p>
        <p class="text">
        O recurso adiciona um botão ao lado da barra de endereços do Chrome. A configuração é simples: quando clicado, aparece um botão para ativar ou desativar e uma barra de rolagem que define a intensidade do efeito. Em “Setup”, é possível configurar a paleta de cores. É criado um filtro de cor personalizável aplicado a páginas da Internet visitadas para melhorar a percepção das cores.  </p>     
        <img class="bannerImgPost" src="./imagens/ferramenta2.jpg" alt="">     
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

        <?php 
  
include_once './includes/footer.php';
  
?>
