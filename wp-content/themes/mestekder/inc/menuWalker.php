<?php
class MyTheme_Navwalker extends Walker_Nav_Menu
{
    // <ul> açılış kısmı
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $indent = str_repeat("\t", $depth);
        $submenu = ($depth > 0) ? ' sub-sub-menu' : ' sub-menu';
        $output .= "\n$indent<ul class=\"$submenu\">\n";
    }

    // <li> başlangıcı
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        // CSS sınıfları
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        // Alt menüsü varsa
        $has_children = in_array('menu-item-has-children', $classes);

        $class_names = join(' ', array_filter($classes));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $output .= $indent . '<li' . $class_names . '>';

        // Menü linki
        $attributes  = !empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url)        ? ' href="'   . esc_attr($item->url) . '"' : '';

        // Menü elemanı çıktısı
        $item_output = isset($args->before) ? $args->before : '';
        $item_output .= '<a' . $attributes . '>';
        $item_output .= (isset($args->link_before) ? $args->link_before : '')
            . apply_filters('the_title', $item->title, $item->ID)
            . (isset($args->link_after) ? $args->link_after : '');
        if ($has_children) {
        }
        $item_output .= '</a>';
        $item_output .= isset($args->after) ? $args->after : '';

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
