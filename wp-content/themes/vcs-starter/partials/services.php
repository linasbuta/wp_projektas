    <section class="section-services" id="services">
            <div class="flex-container-services">
                <div class="header-service">
                    <h3><?php the_field('hs_section_title'); ?></h3>
                        <p><?php the_field('hs_section_description'); ?></p>
                </div>
            </div><!--flex-container end-->
        <!-- =====Section SERVICES description==end=======-->

        <div class="flex-container-services-main">


                <?php 
            if(have_rows('hs_services_repeater')):
                while(have_rows('hs_services_repeater')):
                the_row();
                ?>

                <div class="column-service">
                    <span class="icon">
                    <?php the_sub_field('icon');?>
                        
                    </span>
            
                
                    <h3><?php the_sub_field('title');?></h3>
                        <p><?php the_sub_field('description');?></p>
                </div>
                <?php    
                endwhile;
            endif;

            ?>




        </div><!--flex-container end-->
    </section>