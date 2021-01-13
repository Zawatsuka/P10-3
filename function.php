<?php
    function viewTab($tab){
?>
        <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="<?= $tab['portrait']?>" class="img-fluid" width="400" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?= $tab['name']. " " . $tab['firstname'] ?></h5>
              <p class="card-text"><?= $tab['description'] ?></p>
            </div>
          </div>
        </div>
      </div>
<?php
    } 
?>
    
        

