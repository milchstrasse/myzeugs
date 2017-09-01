<div class="menu-float">
  <div class="exposed">
    
    <div class="menu">
      <a href="#">
        <i class="fa fa-bars fa-lg"></i>
        <span>Menu</span>
      </a>
    </div>
    
    <div class="address">
      <a href="#">
        <i class="fa fa-phone fa-lg"></i>
        <span><?php echo $site->phone(); ?></span>
      </a>
    </div>
    <div class="mail">
        <a href="mailto:<?= $site->mail()?>">
            <i class="fa fa-envelope fa-lg"></i>
          <span>eMail</span>
        </a>
    </div>
  </div>
</div>