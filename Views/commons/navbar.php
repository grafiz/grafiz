<!-- is-spaced rajoute par défaut une marge de 1rem pour top et bottom et 2rem pour left et right -->
    <!-- is-fixed-top pr fiwer la nav meme au scroll -->
    <nav class='navbar'>
      
      <div class='container'>
        <!-- c'est le menu coté gauche toujours visible  -->
        <div class='navbar-brand'>
          <a class='navbar-item has-text-left' href='/grafiz/accueil'>
            <img class='logo' src=<?= ASSETS. '/img/OPTIMIZED/logo/logo-grafiz2.svg';?> alt='logo Grafiz'>
          </a>


          <?php if(isset($_SESSION['pseudo'])): ?>
            <?php $uri = $_SERVER['REQUEST_URI']; ?>
            <div class='login is-danger is-size-6 is-medium ml-4 mt-3 has-text-danger has-text-weight-bold'>
              <span class='mr-2'>Déconnexion</span>
              <a class='delete has-background-danger is-medium' href=<?= $uri.'/logout'; ?>></a>
            </div>
          <?php endif; ?>
          


          <!-- l'icone burger doit tjrs etre le dernier enfant de navbar-brand -->
          <a role='button' class='navbar-burger is-large' data-target='menu' aria-label='menu' aria-expanded='false'>
            <span aria-hidden='true'></span>
            <span aria-hidden='true'></span>
            <span aria-hidden='true'></span>
          </a>
        </div>
        
        
        <!-- le menu caché il doit etre un enfant direct de 'navbar'-->
        <div class='navbar-menu' id='menu'>

          <div class='navbar-end'>
            <a href='/grafiz/accueil' class='navbar-item is-size-5 <?php if($this->page == 'Accueil') echo 'link-active'; ?>'>Accueil</a>
            <hr>
            <a href='/grafiz/works' class='navbar-item is-size-5 <?php if($this->page == 'Works') echo 'link-active'; ?>'>Works</a>
            <hr>
            <a href='/grafiz/about' class='navbar-item is-size-5 <?php if($this->page == 'About') echo 'link-active'; ?>'>About</a>
            <hr>
            <a href='/grafiz/tutos' class='navbar-item is-size-5 <?php if($this->page == 'Tutos') echo 'link-active'; ?>'>Tutos</a>
            <hr>
            <a href='/grafiz/contact' class='navbar-item is-size-5 <?php if($this->page == 'Contact') echo 'link-active'; ?>'>Contact</a>
            <hr>
            
            <div class='navbar-item has-text-centered-desktop'>
              <a href='https://www.facebook.com/grafiz.loic.5' title='facebook'>
                <span class='icon is-medium'>
                  <i class='fab fa-lg fa-facebook-square'></i>
                </span>
              </a>
              
              
              <a href='https://www.instagram.com/grafiz.creation/' title='instagram'>
                <span class='icon is-medium'>
                  <i class='fab fa-lg fa-instagram'></i>
                </span>
              </a>
              
              <a href='https://www.behance.net/grafizcreation?tracking_source=search_users_recommended%7Cgrafiz' title='behance'>
                <span class='icon is-medium'>
                  <i class='fab fa-lg fa-behance-square'></i>
                </span>
              </a>

              <a href='https://dribbble.com/Dsigneer' title='dribble'>
                <span class='icon is-medium'>
                  <i class='fab fa-lg fa-dribbble'></i>
                 
                </span>
              </a>
            </div>
            
          </div>
        </div>
      </div>
    </nav>

