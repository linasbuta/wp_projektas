        <div class="footer">
            <div class="container-footer-b">
                <p> &copy;<?php the_field('ft_copy_right');?></p>

                    <?php 
                    $f_linkas1 = get_field('footer_link1');
                    $f_linkas2 = get_field('footer_link2');
                    $f_linkas3 = get_field('footer_link3');
                    $f_linkas4 = get_field('footer_link4');

                    ?>
                        <div class="icon-container">
                            <a href="<?php echo $f_linkas1['url']?>" <?php echo $f_linkas1['target']? 'target="_blank"' : ''?>><i class="<?php the_field('ft_footer_icon1');?> f-hover-twitter"></i></a>

                        

                            <a href="<?php echo $f_linkas3['url']?>" <?php echo $f_linkas3['target']? 'target="_blank"' : ''?>><i class="<?php the_field('ft_footer_icon3');?> f-hover-facebook"></i></a>

                            <a href="<?php echo $f_linkas4['url']?>" <?php echo $f_linkas4['target']? 'target="_blank"' : ''?>><i class="<?php the_field('ft_footer_icon4');?> f-hover-pinterest"></i></a>
                        </div>
            </div>
        </div>




    <?php wp_footer();?>
</body>
</html>
