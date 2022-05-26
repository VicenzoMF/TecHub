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
        <h1 class="titulo">Os desafios</h1>
        <h3 class="subtitulo">profissionais e cotidianos de Daltônicos</h3>
        <span>Autor Do Texto</span><span>1/01/2032</span>
        <img class="imgPost" src="./imagens/oculosparadaltonicos.jpg" alt="">
        <p class="text">No Brasil existem cerca de 15 milhões de daltónicos, sendo mais fácil encontrar a doença em homens, com 5% dos casos, do que em mulheres, com 0,25%. Isso ocorre porque o daltonismo afeta o cromossomo X.</p>
        <hr>
        <p class="text">
        Já que o homem tem cromossomo XY, caso ele venha a receber dos pais um cromossomo X defeituoso, ele tem 100% de chance de ser portador da doença. Por outro lado, a mulher, que tem cromossomo XX, tem 50% de chance de receber um gene ruim, diminuindo a probabilidade de portar o daltonismo. A doença se manifesta na infância e pode ser percebida pela escola ou até mesmo pelos pais. “Eu percebi o daltonismo nas aulas de pintura, quando eu ia desenhar, eu pintava conforme o que eu via. Inclusive fiquei, muitas vezes, de castigo por terem pensado que eu estava brincando em sala de aula. Mas foi assim que se descobriu que eu era daltônico”, conta o professor de inglês.
        </p>
        
        <p class="text">
        Há vários tipos de daltonicos, 75% não identificam a cor verde (deuteranopia), 24% têm dificuldade em enxergar a cor vermelha (protanopia) e 1% não veem a cor azul (tritanopia). E ainda existe um caso mais raro, que são aqueles que não reconhecem nenhuma cor primária e enxergam tudo em preto e branco, são os acromatas. 
        </p>
        <p class="text">
        O daltonismo, doença ocular caracterizada por, na grande maioria, como uma deficiência genética que dificulta a percepção de cores primárias, pode impedir o exercício de algumas profissões, como pintor, geógrafo, piloto de avião ou qualquer outra atividade que exige o contato com tonalidades. 
        </p>     
        <img class="bannerImgPost" src="./imagens/desafio.jpg" alt="">     
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
