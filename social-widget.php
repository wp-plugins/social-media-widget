<?php
/**
 * Plugin Name: Social Media Widget
 * Plugin URI: http://www.idontlikethisgame.com
 * Description: Place social media icons on your Sidebar by inputting URLs to your profiles!
 * Version: 1.1
 * Author: Brian Freytag
 * Author URL: http://www.idontlikethisgame.com
 **/
 
/* Get the path of the widget */

$social_widget_path = WP_CONTENT_URL.'/plugins/'.plugin_basename(dirname(__FILE__)).'/';

/* Get custom stylesheet */
wp_enqueue_style('social_widget_css',$social_widget_path.'social_widget.css');

/* Load custom stylesheet as print style */
add_action('wp_print_styles', 'social_widget_css');

/* Load the widget */
add_action( 'widgets_init', 'socialwidget_load_widgets' );

/* Register the widget */
function socialwidget_load_widgets() {
	register_widget( 'Social_Widget' );
}

/* Begin Widget Class */
class Social_Widget extends WP_Widget {

	/* Widget setup  */
	function Social_Widget() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'Social Widget', 'description' => __('A widget that allows the user to display social media icons in their sidebar', 'test') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'social-widget' );

		/* Create the widget. */
		$this->WP_Widget( 'social-widget', __('Social Widget', 'example'), $widget_ops, $control_ops );
	}

	/* Display the widget  */
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$facebook = $instance['facebook'];		
		$twitter = $instance['twitter'];
		$myspace = $instance['myspace'];
		$linkedin = $instance['linkedin'];
		$youtube = $instance['youtube'];
		$digg = $instance['digg'];
		$reddit = $instance['reddit'];
		$buzz = $instance['buzz'];
		$rss = $instance['rss_url'];
		$subscribe = $instance['subscribe'];
		$icon_size = $instance['icon_size'];
		$icon_pack = $instance['icon_pack'];
		$icon_opacity = $instance['icon_opacity'];
		
		/* Choose Icon Size if Value is 'default' */
		if($icon_size == 'default') {
			$icon_size = '32';
		}
		
		/* Choose icon opacity if Value is 'default' */
		if($icon_opacity == 'default') {
			$icon_opacity = '0.8';
		}
		
		/* Need to make opacity a whole number for IE styling filter() */
		$icon_ie = $icon_opacity * 100;

		/* Before widget (defined by themes). */
		echo "<div class=\"socialmedia\">";

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title )
			echo $before_title . $title . $after_title;
		
		echo "<div class=\"socialmedia-buttons\">";
		/* Display linked images to profiles from widget settings if one was input. */
		
		// Facebook
		if ( $facebook != '') {
			?> <a href="<?php echo $facebook; ?>" target="_blank"> <img class="subscribes" src="<?php echo WP_CONTENT_URL.'/plugins/'.plugin_basename(dirname(__FILE__)).'/'; ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/facebook.png" alt="Follow us on Facebook!" title="Follow us on Facebook!" style="filter: alpha(opacity=<?php echo $icon_ie;?>);	opacity: <?php echo $icon_opacity;?>; -moz-opacity: <?php echo $icon_opacity;?>;"/></a> <?php 
		} else {
			echo ''; //If no URL inputed
		}
		
		// Twitter
		if ( $twitter != '' ) {
			?> <a href="<?php echo $twitter; ?>" target="_blank"><img class="subscribes" src="<?php echo WP_CONTENT_URL.'/plugins/'.plugin_basename(dirname(__FILE__)).'/'; ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/twitter.png" alt="Follow us on Twitter!" 
			title="Follow us on Twitter!" style="filter: alpha(opacity=<?php echo $icon_ie;?>);	opacity: <?php echo $icon_opacity;?>; -moz-opacity: <?php echo $icon_opacity;?>;" /></a> <?php
		} else {
			echo ''; //If no URL inputed
		}
		
		// MySpace
		if ( $myspace != '' ) {
			?> <a href="<?php echo $myspace; ?>" target="_blank"><img class="subscribes" src="<?php echo WP_CONTENT_URL.'/plugins/'.plugin_basename(dirname(__FILE__)).'/'; ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/myspace.png" alt="Follow us on Twitter!" 
			title="Follow us on MySpace!" style="filter: alpha(opacity=<?php echo $icon_ie;?>);	opacity: <?php echo $icon_opacity;?>; -moz-opacity: <?php echo $icon_opacity;?>;" /></a> <?php
		} else {
			echo ''; //If no URL inputed
		}
		
		// LinkedIN
		if ( $linkedin != '' ) {
			?> <a href="<?php echo $linkedin; ?>" target="_blank"><img class="subscribes" src="<?php echo WP_CONTENT_URL.'/plugins/'.plugin_basename(dirname(__FILE__)).'/'; ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/linkedin.png" alt="Follow us on LinkedIn!" 
			title="Follow us on LinkedIn!" style="filter: alpha(opacity=<?php echo $icon_ie;?>);	opacity: <?php echo $icon_opacity;?>; -moz-opacity: <?php echo $icon_opacity;?>;" /></a> <?php
		} else {
			echo ''; //If no URL inputed
		}
		
		// YouTube
		if ( $youtube != '' ) {
			?> <a href="<?php echo $youtube; ?>" target="_blank"><img class="subscribes" src="<?php echo WP_CONTENT_URL.'/plugins/'.plugin_basename(dirname(__FILE__)).'/'; ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/youtube.png" alt="Follow us on YouTube!" 
			title="Follow us on YouTube!" style="filter: alpha(opacity=<?php echo $icon_ie;?>);	opacity: <?php echo $icon_opacity;?>; -moz-opacity: <?php echo $icon_opacity;?>;" /></a> <?php
		} else {
			echo ''; //If No URL Inputed
		}
		
		// Digg
		if ( $digg != '' ) {
			?> <a href="<?php echo $digg; ?>" target="_blank"><img class="subscribes" src="<?php echo WP_CONTENT_URL.'/plugins/'.plugin_basename(dirname(__FILE__)).'/'; ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/digg.png" alt="Follow us on Digg!" 
			title="Follow us on Digg!" style="filter: alpha(opacity=<?php echo $icon_ie;?>);	opacity: <?php echo $icon_opacity;?>; -moz-opacity: <?php echo $icon_opacity;?>;" /></a> <?php
		} else {
			echo ''; //If no URL Inputed
		}
		
		// Reddit 
		if ( $reddit != '' ) {
			?> <a href="<?php echo $reddit; ?>" target="_blank"><img class="subscribes" src="<?php echo WP_CONTENT_URL.'/plugins/'.plugin_basename(dirname(__FILE__)).'/'; ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/reddit.png" alt="Follow us on Reddit!" 
			title="Follow us on Reddit!" style="filter: alpha(opacity=<?php echo $icon_ie;?>);	opacity: <?php echo $icon_opacity;?>; -moz-opacity: <?php echo $icon_opacity;?>;" /></a> <?php
		} else {
			echo ''; //If no URL Inputed
		}
		
		// Google Buzz
		if ( $buzz != '' ) {
			?> <a href="<?php echo $buzz; ?>" target="_blank"><img class="subscribes" src="<?php echo WP_CONTENT_URL.'/plugins/'.plugin_basename(dirname(__FILE__)).'/'; ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/buzz.png" alt="Follow us on Buzz!" 
			title="Follow us on Buzz!" style="filter: alpha(opacity=<?php echo $icon_ie;?>);	opacity: <?php echo $icon_opacity;?>; -moz-opacity: <?php echo $icon_opacity;?>;" /></a> <?php
		} else {
			echo ''; //If no URL Inputed
		}
		
		// RSS
		if ( $rss != '') {
			?> <a href="<?php echo $rss; ?>"><img class="subscribes" src="<?php echo WP_CONTENT_URL.'/plugins/'.plugin_basename(dirname(__FILE__)).'/'; ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/rss.png" alt="Subscribe to our RSS Feeds!" title="Subscribe to our RSS Feeds!" style="filter: alpha(opacity=<?php echo $icon_ie;?>);	opacity: <?php echo $icon_opacity;?>; -moz-opacity: <?php echo $icon_opacity;?>;" /></a> <?php
		} else {
			echo '';// If no URL Inputed
		}
		
		// E-mail Subscription -- If Newsletter or Mailing List available
		if ( $subscribe != '' ) {
			?> <a href="<?php echo $subscribe; ?>"><img class="subscribes" src="<?php echo WP_CONTENT_URL.'/plugins/'.plugin_basename(dirname(__FILE__)).'/'; ?>images/<?php echo $icon_pack.'/'.$icon_size; ?>/email.png" alt="Join our Mailing List!" title="Join Our Mailing List!" style="filter: alpha(opacity=<?php echo $icon_ie;?>);	opacity: <?php echo $icon_opacity;?>; -moz-opacity: <?php echo $icon_opacity;?>;" /></a><?php
		} else {
			echo ''; // If no URL Inputed
		}
		
		/* After widget (defined by themes). */
		echo "</div></div>";
	}

	/* Update the widget settings  */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip Tags For Text Boxes */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['facebook'] = strip_tags( $new_instance['facebook'] );
		$instance['twitter'] = strip_tags( $new_instance['twitter'] );
		$instance['myspace'] = strip_tags( $new_instance['myspace'] );
		$instance['linkedin'] = strip_tags( $new_instance['linkedin'] );
		$instance['youtube'] = strip_tags( $new_instance['youtube'] );
		$instance['digg'] = strip_tags( $new_instance['digg'] );
		$instance['reddit'] = strip_tags( $new_instance['reddit'] );
		$instance['buzz'] = strip_tags( $new_instance['buzz'] );
		$instance['rss_url'] = strip_tags( $new_instance['rss_url'] );
		$instance['subscribe'] = strip_tags( $new_instance['subscribe'] );
		$instance['icon_size'] = $new_instance['icon_size'];
		$instance['icon_pack'] = $new_instance['icon_pack'];
		$instance['icon_opacity'] = $new_instance['icon_opacity'];
		
		return $instance;
	}

	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 
			'title' => __('Follow Us!', 'test'), 
			'facebook' => __('http://www.facebook.com/your_name', 'test'), 
			'twitter' => __('http://www.twitter.com/yourname', 'test'),
			'myspace' => __('http://www.myspace.com/yourname', 'test'),
			'linkedin' => __('http://www.linkedin.com/in/yourname', 'test'),
			'youtube' => __('http://www.youtube.com/user/yourname', 'test'),
			'digg' => __('http://www.digg.com/users/yourname', 'test'),
			'reddit' => __('http://www.reddit.com/user/yourname', 'test'),
			'buzz' => __('http://www.google.com/profiles/yourname#buzz', 'test'),
			'icon_size' => 'default',
			'icon_pack' => 'default',
			'icon_opacity' => 'default');
			
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
		<p>
		<em>Note: Make sure you include FULL URL (i.e. http://www.example.com)</em><br />
		If you do not want an icon to be visible, simply delete the supplied URL and leave the input blox blank.
		</p>
		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'hybrid'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:85%;" />
		</p>

		<!-- Facebook URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e('Facebook URL:', 'test'); ?></label>
			<input id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" value="<?php echo $instance['facebook']; ?>" style="width:85%;" />
		</p>
		
		<!-- Twitter URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'twitter' ); ?>"><?php _e('Twitter URL:', 'test'); ?></label>
			<input id="<?php echo $this->get_field_id( 'twitter' ); ?>" name="<?php echo $this->get_field_name( 'twitter' ); ?>" value="<?php echo $instance['twitter']; ?>" style="width:85%;" />
		</p>

		<!-- MySpace URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'myspace' ); ?>"><?php _e('MySpace URL:', 'test'); ?></label>
			<input id="<?php echo $this->get_field_id( 'myspace' ); ?>" name="<?php echo $this->get_field_name( 'myspace' ); ?>" value="<?php echo $instance['myspace']; ?>" style="width:85%;" />
		</p>
		
		<!-- LinkedIn URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'linkedin' ); ?>"><?php _e('LinkedIn URL:', 'test'); ?></label>
			<input id="<?php echo $this->get_field_id( 'linkedin' ); ?>" name="<?php echo $this->get_field_name( 'linkedin' ); ?>" value="<?php echo $instance['linkedin']; ?>" style="width:85%;" />
		</p>
		
		<!-- YouTube URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'youtube' ); ?>"><?php _e('YouTube URL:', 'test'); ?></label>
			<input id="<?php echo $this->get_field_id( 'youtube' ); ?>" name="<?php echo $this->get_field_name( 'youtube' ); ?>" value="<?php echo $instance['youtube']; ?>" style="width:85%;" />
		</p>
		
		<!-- Digg URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'digg' ); ?>"><?php _e('Digg URL:', 'test'); ?></label>
			<input id="<?php echo $this->get_field_id( 'digg' ); ?>" name="<?php echo $this->get_field_name( 'digg' ); ?>" value="<?php echo $instance['digg']; ?>" style="width:85%;" />
		</p>

		<!-- Reddit URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'reddit' ); ?>"><?php _e('Reddit URL:', 'test'); ?></label>
			<input id="<?php echo $this->get_field_id( 'reddit' ); ?>" name="<?php echo $this->get_field_name( 'reddit' ); ?>" value="<?php echo $instance['reddit']; ?>" style="width:85%;" />
		</p>

		<!-- Buzz URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'buzz' ); ?>"><?php _e('Buzz URL:', 'test'); ?></label>
			<input id="<?php echo $this->get_field_id( 'buzz' ); ?>" name="<?php echo $this->get_field_name( 'buzz' ); ?>" value="<?php echo $instance['buzz']; ?>" style="width:85%;" />
		</p>
		
		<!-- RSS URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'rss_url' ); ?>"><?php _e('RSS URL:', 'test'); ?></label>
			<input id="<?php echo $this->get_field_id( 'rss_url' ); ?>" name="<?php echo $this->get_field_name( 'rss_url' ); ?>" value="<?php bloginfo('rss2_url') ?>" style="width:85%;" />
		</p>
		
		
		<!-- Subscribe URL: Text Input -->
		<p>
			<label for="<?php echo $this->get_field_id( 'subscribe' ); ?>"><?php _e('Subscription URL:', 'test'); ?></label>
			<input id="<?php echo $this->get_field_id( 'subscribe' ); ?>" name="<?php echo $this->get_field_name( 'subscribe' ); ?>" value="<?php echo $instance['subscribe'] ?>" style="width:85%;" />
		</p>
	 <!-- Choose Icon Size: Dropdown -->
		<p>
			<label for="<?php echo $this->get_field_id( 'icon_size' ); ?>"><?php _e('Icon Size', 'test'); ?></label>
			<select id="<?php echo $this->get_field_id( 'icon_size' ); ?>" name="<?php echo $this->get_field_name( 'icon_size' ); ?>">
			<option value="16" <?php if($instance['icon_size'] == '16') { echo 'selected'; } ?>>16px</option>
			<option value="default" <?php if($instance['icon_size'] == 'default') { echo 'selected'; } ?>>Default (32px)</option>
			<option value="64" <?php if($instance['icon_size'] == '64') { echo 'selected'; } ?>>64px</option>
			</select>
		</p>
		
	<!-- Choose Icon Pack: Dropdown -->
		<p>
			<label for="<?php echo $this->get_field_id( 'icon_pack' ); ?>"><?php _e('Icon Pack', 'test'); ?></label>
			<select id="<?php echo $this->get_field_id( 'icon_pack' ); ?>" name="<?php echo $this->get_field_name( 'icon_pack' ); ?>">
			<option value="heart" <?php if($instance['icon_pack'] == 'heart') { echo 'selected'; } ?>>Heart Icons</option>
			<option value="default" <?php if($instance['icon_pack'] == 'default') { echo 'selected'; } ?>>Default Icons (Web2.0)</option>
			<option value="sketch" <?php if($instance['icon_pack'] == 'sketch') { echo 'selected'; } ?>>Sketch Icons</option>
			</select>
		</p>
	
	<!--Starting Icon Opacity -->
		<p>
			<label for="<?php echo $this->get_field_id( 'icon_opacity' ); ?>"><?php _e('Default Icon Opacity', 'test'); ?></label>
			<select id="<?php echo $this->get_field_id( 'icon_opacity' ); ?>" name="<?php echo $this->get_field_name( 'icon_opacity' ); ?>">
			<option value="0.5" <?php if($instance['icon_opacity'] == '0.5') { echo 'selected'; } ?>>50%</option>
			<option value="0.6" <?php if($instance['icon_opacity'] == '0.6') { echo 'selected'; } ?>>60%</option>
			<option value="0.7" <?php if($instance['icon_opacity'] == '0.7') { echo 'selected'; } ?>>70%</option>
			<option value="default" <?php if($instance['icon_opacity'] == 'default') { echo 'selected'; } ?>>Default (80%)</option>
			<option value="0.9" <?php if($instance['icon_opacity'] == '0.9') { echo 'selected'; } ?>>90%</option>
			<option value="1" <?php if($instance['icon_opacity'] == '1') { echo 'selected'; } ?>>100%</option>
			</select>
		</p>
		
		

	<?php
	}
}

?>