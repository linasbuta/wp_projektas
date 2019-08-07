
<?php 
$image = get_field('hh_background_image');


?>     
    <section class="head-image" id="hero"style="background-image: url(<?php     echo $image['sizes']['large'] ?>);">
            


               <div class="tint">  
        
                    <div class="head-main">
                       <h1><?php the_field('hh_pre_title');?></h1>

                           <h2><?php echo nl2br(get_field('hh_title'));?></h2>
                       
                           <?php 
                           $link = get_field('hh_link');

                           ?>
                      <a href="<?php echo $link['url'];?>" <?php echo $link['target'] ? 'target="_blank"' : '';?> class="button-style"><?php echo $link['title'];?></a>
                   </div>
                         
               </div>  <!-- tint end -->
              
          
     </section>
       
       