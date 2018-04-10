<div class="ls-topbar">

    <!-- Notification bar -->
    <div class="ls-notification-topbar">
      <!-- User details -->
      <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
        <a href="#" class="ls-ico-user">
          <?php echo $_SESSION['nome'] ?>
        </a>
        <nav class="ls-dropdown-nav ls-user-menu"  ng-controller="loginCtrl">
          <ul>
            <li><a href="minha-conta.php">Conta</a></li>
            <li><a href="#" ng-click="logout()">Logout</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <span class="ls-show-sidebar ls-ico-menu"></span>

    <!-- Nome do produto/marca -->
    <h1 class="ls-brand-name"><a class="ls-ico-origins" href="/locawebstyle/documentacao/exemplos/boilerplate">Cravo Rosa Eventos</a></h1>
  </div>

  <aside class="ls-sidebar">
    <!-- Defails of user account -->
    <div data-ls-module="dropdown" class="ls-dropdown ls-user-account">
      <a href="#" class="ls-ico-user">
       <?php echo $_SESSION['nome'];?>
      </a>
      <nav class="ls-dropdown-nav ls-user-menu"  ng-controller="loginCtrl">
        <ul>
          <li><a href="minha-conta.php">Conta</a></li>
          <li><a href="#" ng-click="logout()">Logout</a></li>
        </ul>
      </nav>
    </div>
  <!-- Main menu -->
    <nav class="ls-menu">
      <ul>
        <li><a href="eventos.php" title="Eventos" class="ls-ico-calendar ls-active">Eventos</a></li>
         <li><a href="#" title="Lista de Presentes" class="ls-ico-text">Lista de Presentes</a></li>
      </ul>
    </nav>
  </aside>