<!--hier werden die inline-Styles definert-->
  <style>
    body{
      <?php if($image = $site->image($site->pict_bg())): ?>
        background-image: url(<?=$image->url() ?>);
        background-size: cover;
      <?php endif ?>
    }
    body, a, a:visited{
      font-family: <?php echo $site->ffp() ?> ;
    }
    h1,h2,h3,h4,h5{
      font-family: <?php echo $site->ffh() ?>;
    }
  </style>