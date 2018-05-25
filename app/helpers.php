<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 5/21/2018
 * Time: 2:16 AM
**/




if (! function_exists('menu_categories')) {
    function menu_categories($categories,$str='',$level=0){
        if($level==0){
            $str = '<ul class="dropdown-menu">';
        }
        foreach ($categories as $category){
            $str .= "<li><a href='".route('frontend.category',$category->slug)."'>{$category->title}</a></li>";
        }

        $str .= '</ul>';
        return $str;
    }
}