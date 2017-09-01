<div class="areas">
    <nav role="navigation">
      <ul class="menu">
          <?php foreach($pages->visible() as $p): ?>
              <li  <?php e($p->isOpen(), ' class="active"') ?>>
                  <a href="<?php echo $p->url() ?>">
                      <?php echo $p->title()->html() ?>
                  </a>
<!--                Subnavi Longpage-->
                <?php if ($p->intendedTemplate()=="longpage"): ?>                
                  <?php if($items = $p->children()->visible()->filterBy('showinnavi', 'true')): ?>
                    <ul class="submenu">
                      <?php foreach($items as $sp): ?>
                        <li>
                          <a <?php e($sp->isOpen(), ' class="active"') ?> 
                             href="<?php echo $p->url()."#".$sp->uid() ?>">
                              <?php echo $sp->title()->html() ?>
                          </a>
                        </li>
                      <?php endforeach ?>
                    </ul>
                  <?php endif;  ?>
                <?php endif;  ?>
              </li>
          <?php endforeach ?>
      </ul>
    </nav>
  
    
  <?php // bei statischem Banner dieses hier nicht anzeigen 
    if($site->bantyp()=="dyn"):?>
      <address>
        <?php echo $site->address()->kirbytext(); ?>
        <?php echo $site->phone()->kirbytext(); ?>
        <a <?php echo attr(array(
          'href' => 'mailto:'.$site->mail(),
          'title'=> 'eMail senden'
            )) ?>
          >
        </a>
        <?php echo $site->mail(); ?>
      </address>
      <div class="mail">
        <a class="button stark"<?php echo attr(array(
          'href' => 'mailto:'.$site->mail(),
          'title'=> 'eMail senden'
            )) ?>
          >
          eMail senden
        </a>
      </div>
  <?php endif ?>
  </div>