<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset");?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php wp_title();?>
    </title>
   
 

    <?php 
    wp_head();
    ?>
</head>
<body>
  <header>
          
   
        <div class="container flex-container ">
                    <div class="logo" id="logo-top">

                            <?php 
                            $logo = get_field('logo', 'options');
                            ?>
                                <img src="<?php echo $logo['sizes']['logo']; ?>" alt="<?php echo $logo['alt'];?>">
                    </div><!--LOGO END-->


                <nav class="nav-top">
                        <?php 
                        $menu_settings = [
                            'menu_class' => 'nav1',
                            'container' => false,
                            'theme_location' => 'primary-navigation',

                        ];
                        wp_nav_menu($menu_settings);
                        //ul nav1
                        ?>
                        
                    
                            <!--Responsive nav start-->
                    
                    <div class="nav-mobil">
                        <span>&equiv;</span>
                    </div>

                    <div class="mobil-nav-list">
                        

                        <?php 
                            $menu_settings1 = [
                                'menu_class' => 'nav1',
                                'container' => false,
                                'theme_location' => 'primary-navigation',

                            ];
                            wp_nav_menu($menu_settings1);
                            //ul nav1
                            ?>

                    </div> 

                    <!--Responsive nav end-->

                </nav><!--Top nav end-->

        </div><!--Flex-container end-->


    </header>  