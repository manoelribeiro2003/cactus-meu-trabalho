<main role="main">
  <div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <?php
          $cont_marc = 0;
          foreach($carousels as $carousel){
            if($cont_marc == 0){
              echo '<li data-target="#myCarousel" data-slide-to="'.$cont_marc.'" class="active"></li>';
            }else{
              echo '<li data-target="#myCarousel" data-slide-to="'.$cont_marc.'"></li>';
            }
            $cont_marc++;        
          }
        ?>
      </ol>    
      <div class="col-12 text-center">
        <div class="carousel-inner">
          <?php
          $cont_slide = 0;
          foreach($carousels as $carousel){
            
            if($cont_slide == 0){
              echo '<div class="carousel-item active">';
            }else{
              echo '<div class="carousel-item">';
            }
            
            echo $this->Html->image('../files/carousel/'.$carousel->id . '/'.$carousel->imagem, ['class' => 'first-slide img-fluid', 'alt' => 'First slide']);
            echo '<div class="container">';
            echo '<div class="carousel-caption '.$carousel->position->posicao.'">';
            if($carousel->titulo != ""){
              echo '<h1 class="d-none d-md-block text-'.$carousel->color->text_cor.'">'.$carousel->titulo.'</h1>';
            }
            if($carousel->descricao != ""){
              echo '<p class="d-none d-md-block text-'.$carousel->color->text_cor.'">'.$carousel->descricao.'</p>';
            }
            if(($carousel->titulo_botao != "") AND ($carousel->link != "") AND ($carousel->color_id != "")){
              echo '<p><a class="btn btn-lg btn-'.$carousel->color->cor.'" href="'.$carousel->link.'" role="button">'.$carousel->titulo_botao.'</a></p>';
            }
            
            echo '</div>';
            echo '</div>';
            echo '</div>';        
            $cont_slide++;
          }
          ?>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

 
  <div class="jumbotron servicos">
    <div class="container">
      <h2 class="display-4 text-center titulo-servicos"><?= $servicos->titulo_ser ?></h2>
      <div class="card-deck">
        <div class="card text-center">
          <div class="tamanho-icone">
            <i class='<?= $servicos->icone_um ?>'></i>
          </div>
          <div class="card-body">
            <h5 class="card-title"><?= $servicos->titulo_um ?></h5>
            <p class="card-text"><?= $servicos->descricao_um ?></p>
          </div>
        </div>
        <div class="card text-center">
          <div class="tamanho-icone">
            <i class='<?= $servicos->icone_dois ?>'></i>
          </div>
          <div class="card-body">
            <h5 class="card-title"><?= $servicos->titulo_dois ?></h5>
            <p class="card-text"><?= $servicos->descricao_dois ?></p>
          </div>
        </div>
        <div class="card text-center">
          <div class="tamanho-icone">
            <i class='<?= $servicos->icone_tres ?>'></i>
          </div>
          <div class="card-body">
            <h5 class="card-title"><?= $servicos->titulo_tres ?></h5>
            <p class="card-text"><?= $servicos->descricao_tres ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="jumbotron evento">
    <div class="container">
      <h2 class="display-4 text-center titulo-evento"><?= $depoimentos->nome_dep ?></h2>
      <p class="lead text-center desc-evento"><?= $depoimentos->descricao_dep ?></p>
      <div class="card-deck">
        <div class="card text-center">
          <div class="embed-responsive embed-responsive-16by9">
            <?= $depoimentos->video_um ?>
          </div>
        </div>
        <div class="card text-center">
          <div class="embed-responsive embed-responsive-16by9">
            <?= $depoimentos->video_dois ?>
          </div>
        </div>
        <!-- <div class="card text-center">
          <div class="embed-responsive embed-responsive-16by9">
            ?= $depoimentos->video_tres ?>
          </div>
        </div> -->
      </div>
    </div>
  </div>

  <div class="jumbotron ult-art">
    <div class="container">
      <h2 class="display-4 text-center titulo-ult-art">StartUp's</h2>
      <div class="card-deck">

        <?php foreach($startupUltimos as $startupUltimo) { ?>
        <div class="card text-center">
          <?php 
            $imagem = $this->Html->image('../files/startups/' . $startupUltimo->logo_url, ['class' => 'card-img-top', 'alt' => $startupUltimo->startup]);

            echo $this->Html->link(__($imagem), ['controller' => 'startups', 'action' => 'view' , $startupUltimo->id], ['escape' => false]);
          ?>

          <div class="card-body">
            <h5 class="card-title title-post-home">
              <?= $this->Html->link(__($startupUltimo->startup), ['controller'=> 'startups', 'action' => 'view', $startupUltimo->id]) ?>
            </h5>
            <p class="card-text"><?= $startupUltimo->slug ?></p>
          </div>
        </div>

        <?php } ?>


      </div>
    </div>
  </div>
</main>
