
    <?php foreach($donnes as $habitat) { ?> 
        <div class="col-sm-3">
                <div class="thumbnail">
                    <img src="image1.jpg" alt="Maison 1">
                    <div class="caption">
                        <h4><?php echo $habitat['quartier'] ;?></h4>
                        <p>Proposée par Annemien</p>
                        <p><?php echo $habitat['loyer'] ;?> € par nuit</p>
                        <p><?php echo $habitat['nbChambre'] ;?></p>
                        <p>A titre d information :  <?php echo $habitat['desc'] ;?></p>
                    </div>
                </div>
            </div>
    <?php } ?>

        
        
        
       