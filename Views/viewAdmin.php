<section class='section is-small login'>
  <!-- la bannière qui indique si la connexion Admin est faite ou pas -->
  <?php if(isset($_SESSION['msg-admin'])): ?>
  <div class='notification <?= $_SESSION['color-admin']; ?>'>
    <?= $_SESSION['msg-admin'] ?>
  </div>
  <?php endif; ?>
  
  <div class='container form <?php if(isset($class)) echo $class; ?> <?php if(isset($_SESSION['pseudo']))echo 'is-hidden'; ?>'>
    <form action='/grafiz/admin/login' method='POST'>
      <!-- ******* NOM ********** -->
      <div class='field'>
        <p class='control has-icons-left'>
          <input class='input' type='text' name='pseudo' placeholder='Name' required>
          <span class='icon is-small is-left'>
            <i class='fas fa-envelope'></i>
          </span>
        </p>
      </div>
      <!-- ******* PASSWORD ********** -->
      <div class='field'>
        <p class='control has-icons-left'>
          <input class='input' type='password' name='pass' placeholder='Password' required>
          <span class='icon is-small is-left'>
            <i class='fas fa-lock'></i>
          </span>
        </p>
      </div>
      <!-- ******* CONNEXION ********** -->
      <div class='field submit'>
        <div class='control'>
          <input type='submit' class='button is-success is-fullwidth' value='Connexion'>
        </div>
      </div>
    </form>
  </div>
  <!-- ******* DECONNEXION ********** -->
  <div class='container container-logout is-block'>
    <a href='/grafiz/admin/logout' class='is-danger logout is-fullwidth'>Déconnexion</a>
  </div>
  </section>
  
  
  <?php if(isset($_SESSION['contacts'])): ?>
  <section class='section contact'>
    <div class='container'>
      <?php foreach($_SESSION['contacts'] as $contacts => $value): ?>
      <article class='message'>
        <div class='message-header has-text-black' style='background-color: <?= $value->getColor(); ?>'>
          <ul class='has-text-black'>
            <li>date : <span><?= $value->getDateCreation(); ?></span></li>
            <li>id : <span><?= $value->getId(); ?></span></li>
            <li>nom : <span><?= $value->getNom(); ?></span></li>
            <li>email : <span><?= $value->getEmail(); ?></span></li>
            <li>sujet : <span><?= $value->getSujet(); ?></span></li>
          </ul>
          <a href='/grafiz/admin/delete/<?= $value->getId(); ?>'>
            <button class='delete is-medium' aria-label='delete'></button>
          </a>
        </div>
        <div class='message-body'><?= $value->getMessage(); ?></div>
      </article>
      <?php endforeach; ?>
    </div>
  </section>
  <?php endif; ?>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  