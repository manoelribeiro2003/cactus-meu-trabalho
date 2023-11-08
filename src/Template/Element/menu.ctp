<nav class="sidebar">
    <ul class="list-unstyled">
        <li><?= $this->Html->link(
            '<i class="fas fa-tachometer-alt"></i> Dashboard',
            [
                'controller' => 'welcome',
                'action' => 'index'
            ],
            [
                'escape'=> false
            ]
            ); ?>
        </li>

        <li><?= $this->Html->link(
            '<i class="fas fa-users"></i> Usuários',
            [
                'controller' => 'Users',
                'action' => 'index'
            ],
            [
                'escape'=> false
            ]
            ); ?>
        </li>

        <li><?= $this->Html->link(
            '<i class="fas fa-sliders-h"></i> Carousel',
            [
                'controller' => 'Carousels',
                'action' => 'index'
            ],
            [
                'escape'=> false
            ]
            ); ?>
        </li>

        <li><?= $this->Html->link(
            '<i class="fas fa-wrench"></i> Serviços',
            [
                'controller' => 'Servicos',
                'action' => 'view',
                '1'
            ],
            [
                'escape'=> false
            ]
            ); ?>
        </li>

        <li><?= $this->Html->link(
            '<i class="fas fa-video"></i> Vídeo',
            [
                'controller' => 'Depoimentos',
                'action' => 'view',
                '1'
            ],
            [
                'escape'=> false
            ]
            ); ?>
        </li>

        <li><?= $this->Html->link(
            '<i class="fas fa-users"></i> Startup',
            [
                'controller' => 'Startups',
                'action' => 'index'
            ],
            [
                'escape'=> false
            ]
            ); ?>
        </li>

        <li><?= $this->Html->link(
            '<i class="fas fa-newspaper"></i> Sobre Empresa',
            [
                'controller' => 'EmpresasSobs',
                'action' => 'index'
            ],
            [
                'escape'=> false
            ]
            ); ?>
        </li>

        <li><?= $this->Html->link(
            '<i class="far fa-envelope"></i> Mensagens',
            [
                'controller' => 'ContatosMsgs',
                'action' => 'index'
            ],
            [
                'escape'=> false
            ]
            ); ?>
        </li>

        <li><?= $this->Html->link(
            '<i class="fas fa-newspaper"></i> Artigos',
            [
                'controller' => 'Artigos',
                'action' => 'index'
            ],
            [
                'escape'=> false
            ]
            ); ?>
        </li>

        <li><?= $this->Html->link(
            '<i class="fas fa-user"></i> Sobre Autor',
            [
                'controller' => 'AutorsSobs',
                'action' => 'edit',
                1
            ],
            [
                'escape'=> false
            ]
            ); ?>
        </li>

        <li><?= $this->Html->link(
            '<i class="fas fa-share-alt"></i> Redes Sociais',
            [
                'controller' => 'RedesSocias',
                'action' => 'index'
            ],
            [
                'escape'=> false
            ]
            ); ?>
        </li>

        <li><?= $this->Html->link(
            '<i class="fas fa-sign-out-alt"></i> Sair',
            [
                'controller' => 'users',
                'action' => 'logout'
            ],
            [
                'escape'=> false
            ]
            ); ?>
        </li>
    </ul>
</nav>

