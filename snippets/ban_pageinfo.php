<!--Info, auf welcher Seite man ist, inkl. Link zur Startseite-->
    <a href="<?= url() ?>"><h1><?= $site->title() ?></h1></a>
    <?php if($site->bantyp()=="dyn"): ?>
      <span class="accent"><?= $page->title() ?></span>
    <?php endif ?>

