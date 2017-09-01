<div class="modal">
  <label for="modal-1">
    <div class="modal-trigger">neue Anforderung erstellen</div>
  </label>
  <input class="modal-state" id="modal-1" type="checkbox" />
  <div class="modal-fade-screen">
    <div class="modal-inner">
      <div class="modal-close" for="modal-1"></div>
      <h1>Anforderung</h1>
      <form id='newReq' method="post">
        <div class="modal-intro">
          <?php
          // hier die verschiedenen Areas holen und als Checkbox ausgeben
          $result = db::query('SELECT * FROM bereiche ORDER BY sort');
          //    print_r($result);
          ?>
          <label for="area">Bereich</label>
          <select id="area" name="area">
            <option value="null" selected>bitte Bereich wählen</option>
            <?php foreach($result as $area): ?>
              <option value="<?= $area->id()?>"><?= $area->name()?></option>
            <?php endforeach; ?>
          </select>

          <label for="segments">Abschnitt</label>
          <select id="segments" name="segment">
          </select>
        </div>
        <div class="modal-content">
          <div>
            <input type="text" name="titel" placeholder="Titel">
          </div>
          <div>
            <textarea name="description" placeholder="Beschreibung">
            </textarea>
          </div>
        </div>         
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>