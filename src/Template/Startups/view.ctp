<main role="main">
  <div class="jumbotron blog">
    <div class="container">
      <div class="row">
          <div class="col-md-8 blog-main">
            <?php if($startup){ ?>
              <div class="blog-post">
                <h2 class="blog-post-title"><?= $startup->startup ?></h2><hr>
                <p class="blog-post-meta">                
                  <?php
                    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                    date_default_timezone_set('America/Sao_Paulo');

                    //$data = date_format($startup->created, 'Y-m-d H:i:s');

                    echo strftime ( '%d de %B de %Y' , strtotime(date_format($startup->created, 'Y-m-d H:i:s')));
                  ?>
                </p>
                <?= $startup->descricao  ?>
              </div><!-- /.blog-post -->                

              <nav class="blog-pagination">
                <?php
                  if($startupAnt){
                    echo $this->Html->link(__('Anterior'), ['controller' => 'startups', 'action' => 'view', $startupAnt->id], ['class' => 'btn btn-outline-primary']) . '&nbsp;';
                  }else{
                    echo $this->Html->link(__('Anterior'), ['controller' => 'startups', 'action' => 'view'], ['class' => 'btn btn-outline-secondary disabled']) . '&nbsp;';
                  }

                  if($startupProx){
                    echo $this->Html->link(__('Próximo'), ['controller' => 'startups', 'action' => 'view', $startupProx->id], ['class' => 'btn btn-outline-primary']);
                  }else{
                    echo $this->Html->link(__('Próximo'), ['controller' => 'startups', 'action' => 'view'], ['class' => 'btn btn-outline-secondary disabled']);
                  }
                ?>
              </nav>
            <?php }else { ?>
              <div class="alert alert-danger" role="alert">
                startup não encontrado!
              </div>
            <?php } ?>
          </div><!-- /.blog-main -->

          <aside class="col-md-4 blog-sidebar">
            <!-- ?php if(($autorSob) AND ($autorSob->situation_id == 1)){ ?>
              <div class="p-3 mb-3 bg-light rounded">
                <h4 class="font-italic"> $autorSob->titulo ?></h4>
                <p class="mb-0">?= $autorSob->descricao ?></p>
              </div>
            ?php } ?> -->

            <div class="p-3">
              <h4 class="font-italic">Recentes</h4>
              <ol class="list-unstyled mb-0">
                <?php foreach($startupUltimos as $startupUltimo){ ?>
                  <li>
                    <?= $this->Html->link(__($startupUltimo->titulo),['controller' => 'startups', 'action' => 'view', $startupUltimo->id]) ?>
                  </li>
                <?php } ?>
              </ol>
            </div>

            <div class="p-3">
              <h4 class="font-italic">Destaques</h4>
              <ol class="list-unstyled">
                <?php foreach($startupDestaques as $startupDestaque){ ?>
                  <li>
                    <?= $this->Html->link(__($startupDestaque->titulo),['controller' => 'startups', 'action' => 'view', $startupDestaque->id]) ?>
                  </li>
                <?php } ?>
              </ol>
            </div>

            <div class="p-3">
              <h4 class="font-italic">Redes Sociais</h4>
              <ol class="list-unstyled">
                <?php foreach($redeSocias as $redeSocia) { ?>
                  <li><i class="<?= $redeSocia->icone ?>"></i> <a href="<?= $redeSocia->link ?>" target="_blank"><?= $redeSocia->titulo ?></a></li>
                <?php } ?>
              </ol>
            </div>
          </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->
      

      <hr class="featurette-divider">
    </div>
  </div>
</main>
<?php //var_dump($redeSocias) ?>