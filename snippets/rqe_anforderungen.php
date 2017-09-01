<!--<p>das ist "<?= $el->title() ?>"</p>-->

<?php
// falls $_POST nicht leer ist, jetzt die Daten in die DB schreiben
  // jetzt in die DB zuückschreiben
//  if ($_POST){
//    db::insert('anforderungen', array(
//    'titel'         => get('titel'),
//    'beschreibung'  => get('beschreibung'),
//    'abschnitt_id'  => get('abschnitt'),
//    ));
//  }
?>

<?php
  // erst alle Bereiche (areas) abfragen
  $result = db::query('SELECT * FROM bereiche ORDER BY sort');
  foreach($result as $bereich): ?>
  <div class="bereich">
    <h1><?= $bereich->name()?></h1>
    <?php  // und dann die Abschnitte
    $result2 = db::query('SELECT * FROM abschnitte WHERE bereich_id='.$bereich->id().' ORDER BY name');    
    foreach($result2 as $abschnitt): 
    ?>
      <div class="abschnitt">
        <h2><?= $abschnitt->name()?></h2>
        <?php // und für jeden Abschnitt dann die Anforderungen
        $result3 = db::query('SELECT * FROM view_anforderungen WHERE abschnitt_id='.$abschnitt->id.' ORDER BY titel');
        //          a::show($result3);
        foreach($result3 as $anforderung){
          AnforderungAusgeben($anforderung);
        }; 
        ?>
      </div><!-- Ende Anforderung -->
    <?php endforeach;  //  Abschnitt ?>
  </div><!-- Ende Bereich -->
  <?php endforeach; ?>

<!--Modal erstellen-->
<div class="modal">
  <label for="modal-1">
    <div class="modal-trigger">neue Anforderung erstellen</div>
  </label>
  <input class="modal-state" id="modal-1" type="checkbox" />
  <div class="modal-fade-screen">
    <div class="modal-inner">
<!--      <div class="modal-close" for="modal-1"></div>-->
        <div class="modal-intro">
          <?php metaWaehlen() ?>
          <i class="m-close fa fa-2x fa-close" aria-hidden="true"></i>
        </div>
<!--      <form id='newReq' method="post">-->
        <div class="modal-content">
          <div class="titlebar">
            <h2><input type="text" name="titel" placeholder="Titel"></h2>
          </div>        
          <div>
          <textarea name="description" placeholder="Beschreibung"></textarea>
          </div>
          <?php bereichWaehlen() ?>
        </div>         
        <input type="submit" value="Submit">
<!--      </form>-->
    </div>
  </div>




<?php  // Functions 
  

  function AnforderungAusgeben($a) {
    $sticon = $a->statusicon();
    if ($sticon == ""){
      $sticon = "snowflake-o";
    }
    
    $phase = $a->phasename;
    $status = $a->statusname;
    
    if ($phase == ""){
      $phase = "Status unbekannt";
    }
    if ($status <> ""){
      $status = " / ".$status;
    }
      
//    a::show($a);
    ?>
  <div id="<?=$a->id ?>" class="anforderung hide">
    <div class="slidebar">

      <div class="slidecontent">
        <div class="info">
          <i class="icon fa fa-<?= $sticon ?> fa-fw"></i>
          <div>
            <span><?= $phase ?></span>
            <span><?= $status ?></span>
          </div>
        </div>
        <div class="titel">
          <h3><?= $a->titel() ?></h3>
        </div>
        <div class="iconbar">
          <i class="edit fa fa-pencil-square-o fw"></i>
          <i class="accordion fa fa-angle-down fw"></i>
        </div>
      </div>
    </div>
    <div class="anf-body">
      <P>
        <?= $a->beschreibung() ?>
      </P>
    </div>  
  </div>
 <?php   } // Ende AnforderungenAusgeben ?> 

<?php function phasenListe(){ ?>
    <?php  $result = db::query('SELECT * FROM entwicklungsphasen ORDER BY sort');
    foreach($result AS $phase): ?>
      <li data-phaseid='<?= $phase->id() ?>'><?= $phase->name() ?></li>
    <?php endforeach; ?>
<?php } ?>

<?php function statusListe(){ ?>
    <?php  $result = db::query('SELECT * FROM entwicklungsstatus ORDER BY sort');
    foreach($result AS $status): ?>
      <li data-statusid='<?= $status->id() ?>'
          data-phaseid='<?= $status->entwicklungsphase_id() ?>'
          data-icon='<?= $status->icon() ?>'
          style="display: none;"
          >
        <?= $status->name() ?></li>
    <?php endforeach; ?>
<?php } ?>

<?php function bereichWaehlen() { ?>
<!--  <div class="bereichwaehlen">-->
  <div id="mod_bereich">
  <div  class="dropdown">
    <div class="dropdown-container">
      <p class="dropdown-description">Bereich</p>
      <p id="dropdown-bereich" class="dropdown-button">auswählen</p>
      <ul class="dropdown-menu dropdown-select">
        <?php 
          $result = db::query('SELECT * FROM bereiche ORDER BY sort');
          foreach($result as $bereich): ?>
          <li data-b="<?= $bereich->id ?>"><?= $bereich->name ?></li>
        <?php endforeach;  //  Bereich ?>
      </ul>
    </div>
  </div>
  <div id="mod_abschnitt" class="dropdown">
    <div class="dropdown-container" style="display: none;">
      <p class="dropdown-description">Abschnitt</p>
      <p id="dropdown-abschnitt" class="dropdown-button"></p>
      <ul class="dropdown-menu dropdown-select">
        <?php 
        $result3 = db::query('SELECT * FROM abschnitte ORDER BY bereich_id, name');
        foreach($result3 as $abschnitt): ?>
          <li 
              data-a="<?= $abschnitt->id ?>" 
              data-b="<?= $abschnitt->bereich_id ?>"
              style="display: none;"
              >
            <?= $abschnitt->name ?>
          </li>
        <?php endforeach;  //  Bereich ?>
      </ul>
    </div>
  </div>
</div>
<?php } ?>

  <?php function metaWaehlen() { ?>
    <div class="metawaehlen">
      <div class="info">
        <i class="icon fa fa-fw fa-snowflake-o fa-2x"></i>
      </div>
      <div id="mod_phase" class="dropdown">
        <div class="dropdown-container">
          <p class="dropdown-description">Entwicklungsphase</p>
          <p id="dropdown-phase" class="dropdown-button">auswählen</p>
          <ul class="dropdown-menu dropdown-select">
            <?php phasenListe() ?>
          </ul>
        </div>
      </div>
      <div id="mod_status" class="dropdown">
        <div class="dropdown-container"  style="display: none;">
          <p class="dropdown-description">Status</p>
          <p id="dropdown-status" class="dropdown-button">auswählen</p>
          <ul class="dropdown-menu dropdown-select">
            <?php statusListe() ?>
          </ul>
        </div>
      </div>
    </div>
  <?php } ?>