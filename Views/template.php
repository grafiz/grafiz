<?php require ROOT. '/Views/commons/head.php';?>
<?php require ROOT. '/Views/commons/header.php';?>
  <!-- <main> indique le contenu qui appartient exclusivement à cette page, il doit démarrer après le <header> et le terminer avant le <footer>, elle a un id de manière dynamique afin de styliser chaque pages-->
  <main id='page-<?= $this->page;?>'>

    <?= $content; ?>

  </main>
<?php require ROOT. '/Views/commons/formulaire.php';?>
<?php require ROOT. '/Views/commons/footer.php';?>