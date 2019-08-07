    <section class="our-amazing-team" id="team">
        <div class="flex-container-amazing-team">
                <div class="header-amazing-team">
                    <h3> <?php the_field('at_section_title'); ?> </h3>
                        
                    <p><?php the_field('am_section_description'); ?></p>
                </div>
        </div>

        <div class="main-amazing-team">

                    <?php 
            if(have_rows('amazing_team_repeat')):
                while(have_rows('amazing_team_repeat')):
            the_row();
                ?>

            <div class="column-amazing-team">
                    <?php 
                    $image_team = get_sub_field('am_team_foto','team_foto_sizes');
                    
                    ?>
                <img style="border-radius: 50%;" src="<?php echo $image_team['sizes']['team_foto_sizes']; ?>" alt="<?php echo $image_team['alt']; ?>"><!--team.png-->

                                    <h4><?php the_sub_field('am_foto_title_sub');?></h4>
                                        <p><?php the_sub_field('am_foto_description_sub');?></p>
                            <?php 
                            $linkas = get_sub_field('at_link_icon1');
                            $linkas2 = get_sub_field('am_link_icon2');
                            $linkas3 = get_sub_field('at_link_icon3');
                            // print_r($linkas);
                            ?>          
                                    <a href="<?php echo $linkas['url']?>" <?php echo $linkas['target']? 'target="_blank"' : ''?>>
                                    <i class="<?php the_sub_field('am_amazing_icon_sub');?> hover-facebook">
                                    
                                    </i></a>

                                    <a href="<?php echo $linkas2['url']?>" <?php echo $linkas2['target']? 'target="_blank"' : ''?>>
                                    <i class="<?php the_sub_field('amazing_icon_2');?> hover-pinterest">
                                    
                                    </i></a>

                            <a href="<?php echo $linkas3['url']?>" <?php echo $linkas3['target']? 'target="_blank"' : ''?>>
                            <i class="<?php the_sub_field('amazing_icon_3');?> hover-gmail">
                            </i>  
                            </a>

                            
            </div>
                    <?php    
                    endwhile;
                endif;

                ?>

            
        </div>
                    <div class="footer-amazing-team">
                        <p><?php the_field('am_amazing_footer_sub');?> </p>
                    </div>
    </section>