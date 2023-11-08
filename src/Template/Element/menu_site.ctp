<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #252c41;">
    <div class="container">
      <?= $this->Html->link(__('C4ctus'), ['controller' => 'Home', 'action' => 'index'], ['class' => 'navbar-brand']) ?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item menu">
            <?= $this->Html->link(__('Home'), ['controller' => 'Home', 'action' => 'index'], ['class' => 'nav-link']) ?>
          </li>
          <li class="nav-item menu">
            <?= $this->Html->link(__('Sobre a Comunidade'), ['controller' => 'SobreEmpresa', 'action' => 'index'], ['class' => 'nav-link']) ?>
          </li>
          <!-- <li class="nav-item menu">
            ?= $this->Html->link(__('Blog'), ['controller' => 'Blog', 'action' => 'index'], ['class' => 'nav-link']) ?>
          </li> -->
          <li class="nav-item menu">
            <?= $this->Html->link(__('StartUp'), ['controller' => 'Startups', 'action' => 'index'], ['class' => 'nav-link']) ?>
          </li>
          <li class="nav-item menu">
            <?= $this->Html->link(__('Contato'), ['controller' => 'Contato', 'action' => 'index'], ['class' => 'nav-link']) ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>