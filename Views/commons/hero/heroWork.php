<div class="columns is-vcentered">
  <div class="column is-1-tablet arrow-container">
    <a href='/grafiz/works'>
      <span class='icon arrow-back'>
      <i class='fas fa-arrow-circle-left'></i>
      </span>
    </a>
  </div>
  <div class="column is-12-mobile is-10-tablet has-text-centered mb-2">
    <h1 class='hero-work is-size-3-mobile is-size-2-tablet is-size-1-fullhd'>
        <?= ucfirst($work->nom); ?>
        <span class='is-size-5-mobile is-size-5-tablet is-size-4-fullhd'><?= strtoupper($work->categorie); ?></span>
    </h1>
  </div>
  <div class="column is-1"></div>
</div>