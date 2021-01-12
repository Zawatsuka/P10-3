<?php
    function viewTab($tab){?>
        <div class="container-fluid">
        <div class="col-6">
        <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
        <div class="col-md-4">
    <?php
        foreach($tab as $key => $value){
            if((filter_var($value, FILTER_VALIDATE_URL))){
    ?>
                <img src="<?= $value;?>" alt="..." class="img-fluid" width="200">
                </div>
                <div class="col-md-8">
                <div class="card-body">
    <?php
            }else{
    ?>
                <h5 class="card-title"><?=$value;?></h5>
            
    <?php
            }

        }
    ?>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div> 
<?php  
    } 
?>
    
        

