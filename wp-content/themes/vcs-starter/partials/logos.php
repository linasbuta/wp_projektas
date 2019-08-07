    <section class="logos">
            <div class="logos-container">

                    <?php 
                
                    $logo1 = get_field('ls_logo1');
                    
                    $logo2 = get_field('ls_logo2');
                    $logo3 = get_field('ls_logo3');
                    $logo4 = get_field('ls_logo4');
                    ?>
                <img src="<?php echo $logo1['sizes']['about_foto_sizes'];?>">
                <img src="<?php echo $logo2['sizes']['about_foto_sizes'];?>">
                <img src="<?php echo $logo3['sizes']['about_foto_sizes'];?>">
                <img src="<?php echo $logo4['sizes']['about_foto_sizes'];?>">  
            </div>
    </section>