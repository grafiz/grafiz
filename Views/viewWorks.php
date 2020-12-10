 <section class='section works'>
  <!-- is-variable is-0-mobile permettent d'enlever les gaps sur mobile -->
  <div class='columns is-mobile is-variable is-0-mobile is-multiline has-text-centered'>
    <?php foreach($works as $key => $value): ?>
    <div class='column is-full-mobile is-half-tablet is-one-third-desktop is-one-third-widescreen is-one-third-fullhd'>
      <?php
      // je rajoute le titre du 'work' dans l'URl en remplacant les espaces et autres par des tirets, en suppr les MAJ et apostrophes...l'ordre des règles est subtile
      $nom = str_replace("'", "", $value->nom);
      $nom = str_replace("&", "et", $nom);
      $nom = strtolower(str_replace(array(' - ', ' '), '-', $nom));
      ?>
      <!-- je rajoute le nom dans l'URL pr le SEO -->
      <a href='/grafiz/Works/show/<?= $value->id. '/'. $nom; ?>'>
        <div class='card'>
          <?php $class = ($value->categorie == 'retouche') ? 'retouche' : '';?>
          <div class='card-image'>
            <figure class='image is3by2 <?= $class; ?>'>
              <img src='<?= $value->img_show;?>' alt="<?= $value->nom;?>" loading='lazy'>
              <figcaption>
                <h3><?= $value->categorie; ?></h3>
                <p class='subtitle'><?= $value->nom; ?></p>
              </figcaption> 
            </figure>
          </div>
        </div>
      </a>
    </div>
    <?php endforeach ?>
  </div>
</section>       

