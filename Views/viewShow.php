<?php 
$array = $work->imgs_path;
// je retire la 1ère img du tableau, elle sera la 1ère image de présentation 
$first = array_shift($array);
?>
<section class='section show'>
    <div class='columns is-multiline'>
      <div class='column is-full-mobile is-12-tablet is-12-desktop is-6-widescreen first-img has-text-centered'>
        <?php $class = ($work->categorie == 'retouche') ? 'retouche' : ''; ?>
        <figure class='<?= $class; ?>'>
          <img src='<?= $first;?>' alt='<?= $work->nom; ?>' class=''>
        </figure>
      </div>
      
      <div class='column is-full-mobile is-12-tablet is-12-desktop is-6-widescreen is-5-fullhd description has-text-left' style=''>
        <!-- Icons Adobe -->
        <article class='media has-background-white-ter'>
          <?php if($work->icon_path): ?>
          <div class='media-left mb-3'>
            <?php foreach($work->icon_path as $key): ?>
            <figure class='image is-48x48 mr-2'>
              <img src='<?= $key['path'];?>' alt='logo Adobe <?= $key['name']; ?>'>
            </figure>
            <?php endforeach ?>  
          </div>
          <?php endif; ?>
          
          <div class='media-content'>
            <div class='content'>
              <div class='columns'>
                <div class='column is-narrow toto'>
                  <?php if($work->client): ?>
                  <p>
                    <b>Client : </b>
                    <br>
                    <?= $work->client; ?>   
                    <br><br>
                  </p> 
                    <? endif; ?>
                    <p>
                    <b>Catégorie : </b>  
                    <br>
                    <strong><?= $work->categorie; ?></strong>
                    </p>
                </div>
                
                <div class='column'>
                  <p> 
                    <?php $description = $work->description;?>
                    <b>Description : </b>  
                    <br>
                    <!-- si la 1ère clé commence direct par une chaine vide(null) c'est qu'il n'y a pas de texte descriptif avant la liste à puces -->
                    </p> 
                    <?php if($description[0] == null): ?>
                    <ul>
                      <?php foreach($description as $li): ?>
                      <li><?= $li; ?></li>
                      <?php endforeach; ?>
                    </ul>
                    <?php else: ?>
                    <!-- array_shift pr empècher  -->
                    <?= array_shift($description); ?>
                    <ul>
                      <?php foreach($description as $li): ?>
                      <li><?= $li; ?></li>
                      <?php endforeach; ?>
                    </ul>                      
                    <?php endif; ?>
                     
                </div>
              </div>
            </div>
          </div>
        </article>
      </div>
    </div>                                                                              

  
  <?php if(count($array) > 1): ?>
  <div class='columns works is-multiline is-variable is-0-mobile'>  
    <?php
    // chaque .column positionne la 1ère image à droite et la 2eme à gauche
    foreach($array as $key): ?>
    <div class='column item-position is-12-mobile is-12-tablet is-12-desktop is-6-widescreen has-text-centered'>
      <div class='box'>
        <figure>
          <img src='<?= $key;?>' alt='<?= 'graphisme '. $work->nom; ?>'>
        </figure>
      </div>
    </div>
    <?php endforeach ?>
  </div>

  <?php elseif(count($array) == 1): ?>
  <div class='columns has-text-centered'>
    <div class='column'>
      <div class='box'>
        <figure>
          <img src='<?= $array[0];?>' alt='Image'>
        </figure>
      </div>
    </div>
  </div>
  <?php endif; ?>
</section>









