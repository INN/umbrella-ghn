<?php
if(plsh_gs('show_about_author') == 'on' && is_singular('post'))
{
    ?>    	
    <!-- About author -->
    <div class="about-author" id="about-author">
       <!-- Call to Action -->
    	<div class="title-default" id="follow-ghn">
    		<a href="#" class="active">Follow Georgia Health News</a>
    	</div>
    	<br>
    	<h5>Sign up for our <a style="color:#256FAF;" href="http://eepurl.com/cz7zo"> free email alerts</a> and follow us on <a style="color:#256FAF;" href="https://www.facebook.com/GeorgiaHealthNews/">Facebook</a> and on Twitter <a style="color:#256FAF;" href="https://twitter.com/gahealthnews">@gahealthnews</a>.</h5>
		<h5>Help us fulfill our nonprofit mission with a <a style="color:#256FAF;" href="http://www.georgiahealthnews.com/donate/">tax-deductible donation</a>!</h5>

        <div class="title-default">
            <a href="#" class="active"><?php _e('About author', 'goliath'); ?></a>
        </div>
        <div class="about">
            <?php echo get_avatar( get_the_author_meta('ID'), 117); ?> 
            <h2>
                <?php the_author(); ?>
                <?php 
                    $position = get_the_author_meta( 'position' );
                    if($position)
                    {
                        echo '<span>' . $position  . '</span>';
                    }
                ?>
            </h2>
            <?php
                $description = get_the_author_meta( 'description' );
                if($description)
                {
                    echo '<p>' . $description . '</p>';
                }
            ?>
            <div class="social">
                <?php
                    $twitter = get_the_author_meta( 'twitter' );
                    $facebook = get_the_author_meta( 'facebook' );
                    $youtube = get_the_author_meta( 'youtube' );
                    $gplus = get_the_author_meta( 'gplus' );
                    $pinterest = get_the_author_meta( 'pinterest' );

                    if($twitter) { echo '<a href="' . esc_url($twitter) .'"><i class="fa fa-twitter-square"></i></a>'; }
                    if($facebook) { echo '<a href="' . esc_url($facebook) .'"><i class="fa fa-facebook-square"></i></a>'; }
                    if($youtube) { echo '<a href="' . esc_url($youtube) .'"><i class="fa fa-youtube-square"></i></a>'; }
                    if($gplus) { echo '<a href="' . esc_url($gplus) .'"><i class="fa fa-google-plus-square"></i></a>'; }
                    if($pinterest) { echo '<a href="' . esc_url($pinterest) .'"><i class="fa fa-pinterest-square"></i></a>'; }  
                ?>
            </div>
        </div>
    </div>
    
<?php } ?>