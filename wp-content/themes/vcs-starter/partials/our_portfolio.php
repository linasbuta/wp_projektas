    <section class="our_portfolio" id="portfolio">
        <div class="flex-container-our-portfolio">

                    <div class="header-our-portfolio">
                        <h3><?php the_field('op_section_title');?></h3>
                        
                            <p><?php the_field('ou_section_description');?></p>

                    </div>
        </div><!--flex-container end-->

        <div class="flex-container-gallery">


                <?php 
            if(have_rows('ou_galerry')):
                while(have_rows('ou_galerry')):
            the_row();
                ?>

            <div class="column-gallery">
             <?php  $image1 = get_sub_field('foto', 'pagrindine');  ?>

                    <a href="<?php echo $image1['sizes']['large']; ?>" data-fancybox="gallery">

                    
                            <img src="<?php echo $image1['sizes']['pagrindine']; ?>" alt="<?php echo $image1['alt'];?>"></a>


                        <div class="column-footer">
                            <h4><?php the_sub_field('title_foto');?></h4>
                            <p><?php the_sub_field('foto_description');?></p>
                        </div>

            </div>
                <?php    
                endwhile;
            endif;

            ?>


        </div><!--flex-container-gallery end-->

    </section>