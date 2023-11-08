<footer class="container-fluid py-3 rodape">
  <div class="container">
    <div class="row">
      <div class="col-6 col-md">
        <h5>C4ctus</h5>
        <ul class="list-unstyled text-small">
          <li><?= $this->Html->link(__('Home'), ['controller' => 'Home', 'action' => 'index'], ['class' => 'link-rodape']) ?></li>
          <li><?= $this->Html->link(__('Sobre a Comunidade'), ['controller' => 'SobreEmpresa', 'action' => 'index'], ['class' => 'link-rodape']) ?></li>
          <li><?= $this->Html->link(__('Contato'), ['controller' => 'Contato', 'action' => 'index'], ['class' => 'link-rodape']) ?></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Contato</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-rodape" href="https://wa.me/5588992449234">(88) 9 9244-9234</a></li>
          <li><a class="link-rodape" href="#">Rua Cons. José Júlio, 617 - Centro, Sobral, CE, Brazil</a></li>
          <li>CNPJ: XX.XXX.XXX/XXXX-61</li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Redes Sociais</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-rodape" href="https://wa.me/5588992449234" target="_blank">WhatsApp</a></li>        
          <li><a class="link-rodape" href="https://instagram.com/c4ctusorg" target="_blank">Instagram</a></li>
          <li><a class="link-rodape" href="https://www.facebook.com/profile.php?id=100089676164150" target="_blank">Facebook</a></li>
          <li><a class="link-rodape" href="https://www.youtube.com/@c4ctusorg" target="_blank">YouTube</a></li>
          <!-- <li><a class="link-rodape" href="https://twitter.com/celkecursos" target="_blank">Twiter</a></li> -->
        </ul>
      </div>
    </div>
  </div>
</footer>