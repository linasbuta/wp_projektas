    <section class="about-us">
    
            <div class="flex-container-about">
                    <div class="header-about-us">
                            <h3><?php the_field('au_about_title');?></h3>
                            
                            <p><?php the_field('au_about_description');?></p>
                    </div>
            </div> 



        <div class="container-about">

                <?php 
            if(have_rows('au_about_repeat')):
                while(have_rows('au_about_repeat')):
            the_row();
                ?>

            <div class="row">
                    <?php 
                    //, 'about_us_foto'
                    $image_about_us = get_sub_field('image_about', 'about_foto_sizes'); 
                    ?>
                    <div class="foto">
                        <img style="border-radius:50%; border:5px solid #f1f1f1;" src="<?php echo $image_about_us['sizes']['about_foto_sizes'];?>" alt="<?php echo $image_about_us['alt'];?>"></div>

                    <div class="main">
                        <h4><?php the_sub_field('au_about_title_sub');?></h4>
                        <h5><?php the_sub_field('au_about_title_under_sub');?></h5>
                            <p><?php the_sub_field('au_about_description_sub');?></p>
                    </div>
            </div><!--row end-->
                <?php    
                endwhile;
            endif;

            ?>


        </div>

            <div class="container-foto-footer">
            <!--class="foto-->
                <div>
                        <?php 
                        $image_about_footer = get_field('about_footer_image'); 
                        // print_r('$image_about_footer', 'about_foto_sizes');
                        ?>
                        <img style="border-radius:50%; border:5px solid #f1f1f1;" src="<?php echo $image_about_footer['sizes']['about_foto_sizes'];?>" alt="<?php echo $image_about_footer['alt'];?>"> 
                </div>
            </div>

    </section>