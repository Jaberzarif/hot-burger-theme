<?php
class HOTBURGER_MENU_WALKER extends Walker_Nav_Menu
{

    function start_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"navbar-nav mr-auto\">\n";
    }

    // Displays start of an element. E.g '<li> Item Name'
    // @see Walker::start_el()
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $object = $item->object;
        $type = $item->type;
        $title = $item->title;
        $description = $item->description;
        $permalink = $item->url;
        if ($depth == 0) {
            $class_names_li = " class='nav-item'";
        } else  if ($depth == 1) {
            $class_names_li = "nav-item active'";
        }

        $output .= "<li " . $class_names_li . " >";
        if ($depth == 1) {
            $class_names_a = 'class="nav-link"';
        } else {
            $class_names_a = 'class="nav-link"';
        }

        if ($permalink) {
            $output .= '<a href="' . $permalink . '" ' . $class_names_a . '>';
        }

        $output .= $title;

        if ($permalink) {
            $output .= '</a>';
        }
    }
}
