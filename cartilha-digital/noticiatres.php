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
        <h1 class="titulo">Desafios</h1>
        <h3 class="subtitulo">no avanço tecnológico de inclusão</h3>
        <span>Autor Do Texto</span><span>1/01/2032</span>
        <img class="imgPost" src="./imagens/inclusao.jpg" alt="">
        <p class="text">De acordo com a OMS, o daltonismo atinge 350 milhões de pessoas no mundo, sendo 8 milhões no Brasil. Apesar de não haver cura (na maior parte dos casos a origem é genética, sendo a maior proporção dos afetados do sexo masculino), são várias as iniciativas que pretendem facilitar a vida do portador da condição, tornando-o mais integrado com o mundo dos não-daltônicos que o cercam. A mais famosa tecnologia atual talvez seja a dos óculos de marcas com Enchroma e Pilestone, cujos vídeos de reações ao uso circulam na internet e criaram grande expectativa no público-alvo. 
            <p class="text">
            No entanto, essa criação enfrenta certa polêmica entre usuários e especialistas, pois o valor do item o faz pouco acessível. Também porque, segundo estudo publicado em 2018 pela Universidade de Granada, os óculos não tornam a visão de um daltônico comparável à de alguém sem a condição, além de não atender igualmente os diferentes tipos de daltonismo. 
        <p class="text">
        Outros recursos criados para o cotidiano de quem possui alguma das formas de daltonismo incluem ferramentas de filtro de tela em sistemas operacionais como o Windows, que aumentam os contrastes de cores nas imagens; aplicativos de celular sincronizados com os semáforos, que avisam das mudanças; e técnicas de conversão de páginas da internet para um formato de texto que indica quais palavras e termos estavam ressaltados em diferentes cores no texto original.  </p>
        <p class="text">O sistema de códigos gráficos criado por Miguel Neiva é uma linguagem universal, e o realizador comenta que o sistema poderia ter surgido há muitos anos, pois não é dependente de avanços tecnológicos. “Mas, de fato, a sociedade esqueceu-se dos daltônicos”. A iniciativa está em mais de 100 países e já recebeu diversos prêmios relacionados à acessibilidade digital, transporte e direitos humanos. 
        <img class="bannerImgPost" src="./imagens/inclusao2.jpg" alt="">     
        <hr>
        <p class="text">
        Basicamente há três símbolos para as cores primárias (vermelho, amarelo e azul) e a combinação desses três símbolos em pares forma o próprio símbolo das cores derivadas da junção das cores primárias (laranja, roxo e verde), além de dois símbolos próprios respectivamente para branco e preto que, adicionados aos de cores, indicam tonalidades mais claras ou mais escuras da cor em questão.</p>
         <p class="text">
         O código pode ser usado em diferentes produtos. A ideia não é que, por exemplo, a criança daltônica use lápis de cor específicos, mas sim que os símbolos estejam presentes nos lápis de todas as crianças, evitando, dessa forma, a discriminação. Segundo Miguel, “o público alvo é o daltônico, mas não só. É para chegar a todos”. </p>
         <p class="text">
         A empresa atua com parcerias públicas e privadas, nacionalmente e internacionalmente. Em Portugal, o código já está presente em bandeiras de sinalização de perigo em todas as praias. Nos Estados Unidos houve a produção do jogo popular UNO em versão inclusiva com o ColorAdd.</p>

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
