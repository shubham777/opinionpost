<?php 
  class TutsPlusText_Widget extends WP_Widget{
  	//widget constructor
  	public function __construct(){
     
    parent::__construct(
        'tutsplustext_widget',
        __( 'TutsPlus Text Widget', 'tutsplustextdomain' ),
        array(
            'classname'   => 'tutsplustext_widget',
            'description' => __( 'A basic text widget to demo the Tutsplus series on creating your own widgets.', 'tutsplustextdomain' )
        )
      );
       
      load_plugin_textdomain( 'tutsplustextdomain', false, basename( dirname( __FILE__ ) ) . '/languages' );
       
    }

  	public function widget($args, $instance){
  	     //outputs the content of the widget
  	}

  	public function form( $instance ) {    
 
    $title      = esc_attr( $instance['title'] );
    $message    = esc_attr( $instance['message'] );
    ?>
     
    <p>
        <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('message'); ?>"><?php _e('Simple Message'); ?></label> 
        <textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('message'); ?>" name="<?php echo $this->get_field_name('message'); ?>"><?php echo $message; ?></textarea>
    </p>
     
    <?php 
    }

  	//updating widget replacing old instances with new
  	public function update($new_instance, $old_instance){
        //process widget options on save
  	}
  	
  }
?>