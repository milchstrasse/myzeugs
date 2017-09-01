<!-- Falls ein Hintergrundild hinterlegt ist, hier das Bild als eigenes div einbauen. Hintergrundbilder können bei Einstellungen oder einzeln bei jeder Longpage gemacht werden
-->
<?php if ($page->imagetoggle()!="no"): ?>
  <?php if($page->imagetoggle()=="ind"): ?>
    <?php $image = $page->image($page->bgimg()) ?>
  <?php else: ?>
    <?php $image = $site->image($site->bgimg()) ?>
  <?php endif ?>

  <?php /* nur ausgeben, wenn wirklich ein Bild vorhanden ist */ ?>
  <?php if(!empty($image)): ?>
    <div class="lphero" style="background-image: url(<?=$image->url() ?>)"></div>
  <?php endif ?>
<?php endif ?>
