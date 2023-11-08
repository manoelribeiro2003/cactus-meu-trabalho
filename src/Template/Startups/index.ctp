<main role="main">
  <div class="jumbotron blog">
    <div class="container">
      <h2 class="display-4 text-center blog-titulo">StartUp`s</h2>
      <div class="row">
          <div class="col-md-8 blog-main">

            <?php foreach($startups as $startup){ ?>

              <div class="row featurette">
                <div class="col-md-7 order-md-2">
                  <h2 class="featurette-heading blog-post-title">
                      <?= $this->Html->link(__($startup->startup), ['controller' => 'startups', 'action' => 'view' , $startup->id]) ?>
                  </h2>
                  <p class="lead">
                    <?= $startup->descricao ?>
                    <?= $this->Html->link(__('Continuar lendo'), ['controller' => 'startups', 'action' => 'view' , $startup->id], ['class' => 'cont-lendo-post text-danger']) ?>
                  </p>
                </div>
                <div class="col-md-5 order-md-1">
                  <a href="startup.html">
                    <?php
                    $imagem = $this->Html->image('../files/startups/'.$startup->logo_url, ['class' => 'featurette-image img-fluid mx-auto', 'alt' => $startup->startup]);

                    echo $this->Html->link(__($imagem), ['controller' => 'startups', 'action' => 'view' , $startup->id], ['escape' => false]);
                    ?>  
                  </a>
                </div>
              </div>
              <hr class="featurette-divider">

            <?php } ?>
            <?= $this->element('pagination_site'); ?>
          </div>

          <aside class="col-md-4 blog-sidebar">
            <?php if(($responsavel) AND ($responsavel->situation_id == 1)){ ?>
              <div class="p-3 mb-3 bg-light rounded">
                <h4 class="font-italic"><?= $responsavel->telefone ?></h4>
                <p class="mb-0"><?= $responsavel->email ?></p>
              </div>
            <?php } ?>

            <div class="p-3">
              <h4 class="font-italic">Recentes</h4>
              <ol class="list-unstyled mb-0">
                <?php foreach($startupUltimos as $startupUltimo){ ?>
                  <li>
                    <?= $this->Html->link(__($startupUltimo->startup),['controller' => 'startups', 'action' => 'view', $startupUltimo->id]) ?>
                  </li>
                <?php } ?>
              </ol>
            </div>

            <div class="p-3">
              <h4 class="font-italic">Destaques</h4>
              <ol class="list-unstyled">
                <?php foreach($startupDestaques as $startupDestaque){ ?>
                  <li>
                    <?= $this->Html->link(__($startupDestaque->startup),['controller' => 'startups', 'action' => 'view', $startupDestaque->id]) ?>
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
      
    </div>
  </div>
</main>
<?php //var_dump($autorSob) ?>