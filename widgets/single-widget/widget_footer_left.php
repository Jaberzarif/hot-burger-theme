<?php
// Creating the widget 
class footer_widget_left extends WP_Widget
{

    function __construct()
    {
        parent::__construct(

            // Base ID of your widget
            'footer_widget_left',

            // Widget name will appear in UI
            __('Footer Left  Menu Widget', 'footer_widget_left_domain'),

            // Widget description
            array('description' => __('This widget contains the footer left menu', 'footer_widget_left_domain'),)
        );
    }

    // Creating widget front-end

    public function widget($args, $instance)
    {
        $output = $args['before_widget'];
        /**
         * <img class="footer-logo" src="'.THEME_IMG_PATH.'tg_logo_big.png" alt="footer logo" />
         * <p class="about-text">'.get_bloginfo('description').'</p>
         */
        $output .= '
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5 class="footer-title">'.esc_attr($title).'</h5>
                </div>
         ';
        $output .= $args['after_widget'];
        echo $output;
    }

    // Widget Backend 
    public function form($instance)
    {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'footer_widget_left_domain');
        }
        // Widget admin form
?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
<?php
    }

    // Updating widget replacing old instances with new
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }

    // Class footer_widget_left ends here
}


// Register and load the widget
function wpb_load_widget()
{
    register_widget('footer_widget_left');
}
add_action('widgets_init', 'wpb_load_widget');
