<?php


add_action('wp_head', 'custom_styles_core', 100);

function custom_styles_core()
{

    if( get_theme_mod('layout_header') == 'header2' ) {
         $footer_padding = "padding-left:0px;";
         $footer_width = "width:100%;";
    }else{
        $footer_padding = "";
        $footer_width = "";
    }

    if(!empty(get_theme_mod('background_color_page_title'))){
        $background_color_page_title = "background:" .esc_attr(get_theme_mod('background_color_page_title')) ." !important;";
    }else{
        $background_color_page_title = "";
    }

    if(!empty(get_theme_mod('background_image_page_title'))){
        $background_image_page_title = "background: url(" .esc_url(get_theme_mod('background_image_page_title')) .") no-repeat !important;";
    }else{
        $background_image_page_title = "";
    }

    if(get_theme_mod('hide_breadcrump_page_title') == true){
        $hide_breadcrump_page_title = "display:none !important;";
    }else{
        $hide_breadcrump_page_title = "";
    }


    if(get_theme_mod('hideline_page_title') == true){
        $hideline_page_title = "display:none !important;";
    }else{
        $hideline_page_title = "display:block !important;";
    }

    if(!empty(get_theme_mod('_loading_page_color'))) {
        $_loading_page_color = "background-color: " . esc_attr(get_theme_mod('_loading_page_color')) . ";";
    }else{
        $_loading_page_color = "";
    }

   if(get_theme_mod('garenal_back_to_top') == true){
       $garenal_back_to_top = "display:block;";
   }else{
       $garenal_back_to_top = "display:none !important;";
   }

    $typography_body = get_theme_mod( 'typography_body', array() );

    if(isset($typography_body['font-family'])){
        $body_font_family = "font-family: ".esc_attr($typography_body['font-family']).";";
    }else{
        $body_font_family = "";
    }

    if(isset($typography_body['color'])){
        $body_color= "color: ".esc_attr($typography_body['color']).";";
    }else{
        $body_color = "";
    }

    if($typography_body['variant'] == "100"){
        $body_typography_body = "font-weight:100;";
    }else if($typography_body['variant'] == "100italic"){
        $body_typography_body = "font-weight:100; font-style:italic;";
    }else if($typography_body['variant'] == "200"){
        $body_typography_body = "font-weight:200;";
    }else if($typography_body['variant'] == "200italic"){
        $body_typography_body = "font-weight:200; font-style:italic;";
    }else if($typography_body['variant'] == "300"){
        $body_typography_body = "font-weight:300;";
    }else if($typography_body['variant'] == "300italic"){
        $body_typography_body = "font-weight:300; font-style:italic;";
    }else if($typography_body['variant'] == "regular"){
        $body_typography_body = "font-weight:400;";
    }else if($typography_body['variant'] == "italic"){
        $body_typography_body = "font-weight:400; font-style:italic;";
    }else if($typography_body['variant'] == "500"){
        $body_typography_body = "font-weight:500;";
    }else if($typography_body['variant'] == "500italic"){
        $body_typography_body = "font-weight:500; font-style:italic;";
    }else if($typography_body['variant'] == "600"){
        $body_typography_body = "font-weight:600;";
    }else if($typography_body['variant'] == "600italic"){
        $body_typography_body = "font-weight:600; font-style:italic;";
    }else if($typography_body['variant'] == "700"){
        $body_typography_body = "font-weight:700;";
    }else if($typography_body['variant'] == "700italic"){
        $body_typography_body = "font-weight:700; font-style:italic;";
    }else if($typography_body['variant'] == "800"){
        $body_typography_body = "font-weight:800;";
    }else if($typography_body['variant'] == "800italic"){
        $body_typography_body = "font-weight:800; font-style:italic;";
    }else if($typography_body['variant'] == "900"){
        $body_typography_body = "font-weight:900;";
    }else if($typography_body['variant'] == "900italic"){
        $body_typography_body = "font-weight:900; font-style:italic;";
    }

    if(isset($typography_body['font-size'])){
        $body_font_size = "font-size: ".esc_attr($typography_body['font-size']).";";
    }else{
        $body_font_size = "";
    }

    //heading 1
    $typography_heading1 = get_theme_mod( 'typography_heading1', array() );

    if(isset($typography_heading1['font-size'])){
        $heading1_font_size = "font-size: ".esc_attr($typography_heading1['font-size']).";";
    }else{
        $heading1_font_size = "";
    }

    if(isset($typography_heading1['line-height'])){
        $heading1_line_height = "line-height: ".esc_attr($typography_heading1['line-height']).";";
    }else{
        $heading1_line_height = "";
    }

    if(isset($typography_heading1['letter-spacing'])){
        $heading1_letter_spacing = "letter-spacing: ".esc_attr($typography_heading1['letter-spacing']).";";
    }else{
        $heading1_letter_spacing = "";
    }

    if(isset($typography_heading1['text-transform'])){
        $heading1_text_transform = "text-transform: ".esc_attr($typography_heading1['text-transform']).";";
    }else{
        $heading1_text_transform = "";
    }

    if(isset($typography_heading1['color'])){
        $heading1_color = "color: ".esc_attr($typography_heading1['color']).";";
    }else{
        $heading1_color = "";
    }

    //heading 2
    $typography_heading2 = get_theme_mod( 'typography_heading2', array() );

    if(isset($typography_heading2['font-size'])){
        $heading2_font_size = "font-size: ".esc_attr($typography_heading2['font-size']).";";
    }else{
        $heading2_font_size = "";
    }

    if(isset($typography_heading2['line-height'])){
        $heading2_line_height = "line-height: ".esc_attr($typography_heading2['line-height']).";";
    }else{
        $heading2_line_height = "";
    }

    if(isset($typography_heading2['letter-spacing'])){
        $heading2_letter_spacing = "letter-spacing: ".esc_attr($typography_heading2['letter-spacing']).";";
    }else{
        $heading2_letter_spacing = "";
    }

    if(isset($typography_heading2['text-transform'])){
        $heading2_text_transform = "text-transform: ".esc_attr($typography_heading2['text-transform']).";";
    }else{
        $heading2_text_transform = "";
    }

    if(isset($typography_heading2['color'])){
        $heading2_color = "color: ".esc_attr($typography_heading2['color']).";";
    }else{
        $heading2_color = "";
    }

    //heading 3
    $typography_heading3 = get_theme_mod( 'typography_heading3', array() );

    if(isset($typography_heading3['font-size'])){
        $heading3_font_size = "font-size: ".esc_attr($typography_heading3['font-size']).";";
    }else{
        $heading3_font_size = "";
    }

    if(isset($typography_heading3['line-height'])){
        $heading3_line_height = "line-height: ".esc_attr($typography_heading3['line-height']).";";
    }else{
        $heading3_line_height = "";
    }

    if(isset($typography_heading3['letter-spacing'])){
        $heading3_letter_spacing = "letter-spacing: ".esc_attr($typography_heading3['letter-spacing']).";";
    }else{
        $heading3_letter_spacing = "";
    }

    if(isset($typography_heading3['text-transform'])){
        $heading3_text_transform = "text-transform: ".esc_attr($typography_heading3['text-transform']).";";
    }else{
        $heading3_text_transform = "";
    }

    if(isset($typography_heading3['color'])){
        $heading3_color = "color: ".esc_attr($typography_heading3['color']).";";
    }else{
        $heading3_color = "";
    }

    //heading 4
    $typography_heading4 = get_theme_mod( 'typography_heading4', array() );

    if(isset($typography_heading4['font-size'])){
        $heading4_font_size = "font-size: ".esc_attr($typography_heading4['font-size']).";";
    }else{
        $heading4_font_size = "";
    }

    if(isset($typography_heading4['line-height'])){
        $heading4_line_height = "line-height: ".esc_attr($typography_heading4['line-height']).";";
    }else{
        $heading4_line_height = "";
    }

    if(isset($typography_heading4['letter-spacing'])){
        $heading4_letter_spacing = "letter-spacing: ".esc_attr($typography_heading4['letter-spacing']).";";
    }else{
        $heading4_letter_spacing = "";
    }

    if(isset($typography_heading4['text-transform'])){
        $heading4_text_transform = "text-transform: ".esc_attr($typography_heading4['text-transform']).";";
    }else{
        $heading4_text_transform = "";
    }

    if(isset($typography_heading4['color'])){
        $heading4_color = "color: ".esc_attr($typography_heading4['color']).";";
    }else{
        $heading4_color = "";
    }

    //heading 5
    $typography_heading5 = get_theme_mod( 'typography_heading5', array() );

    if(isset($typography_heading5['font-size'])){
        $heading5_font_size = "font-size: ".esc_attr($typography_heading5['font-size']).";";
    }else{
        $heading5_font_size = "";
    }

    if(isset($typography_heading5['line-height'])){
        $heading5_line_height = "line-height: ".esc_attr($typography_heading5['line-height']).";";
    }else{
        $heading5_line_height = "";
    }

    if(isset($typography_heading5['letter-spacing'])){
        $heading5_letter_spacing = "letter-spacing: ".esc_attr($typography_heading5['letter-spacing']).";";
    }else{
        $heading5_letter_spacing = "";
    }

    if(isset($typography_heading5['text-transform'])){
        $heading5_text_transform = "text-transform: ".esc_attr($typography_heading5['text-transform']).";";
    }else{
        $heading5_text_transform = "";
    }

    if(isset($typography_heading5['color'])){
        $heading5_color = "color: ".esc_attr($typography_heading5['color']).";";
    }else{
        $heading5_color = "";
    }

    //heading 6
    $typography_heading6 = get_theme_mod( 'typography_heading6', array() );

    if(isset($typography_heading2['font-size'])){
        $heading6_font_size = "font-size: ".esc_attr($typography_heading6['font-size']).";";
    }else{
        $heading6_font_size = "";
    }

    if(isset($typography_heading6['line-height'])){
        $heading6_line_height = "line-height: ".esc_attr($typography_heading6['line-height']).";";
    }else{
        $heading6_line_height = "";
    }

    if(isset($typography_heading6['letter-spacing'])){
        $heading6_letter_spacing = "letter-spacing: ".esc_attr($typography_heading6['letter-spacing']).";";
    }else{
        $heading6_letter_spacing = "";
    }

    if(isset($typography_heading6['text-transform'])){
        $heading6_text_transform = "text-transform: ".esc_attr($typography_heading6['text-transform']).";";
    }else{
        $heading6_text_transform = "";
    }

    if(isset($typography_heading6['color'])){
        $heading6_color = "color: ".esc_attr($typography_heading6['color']).";";
    }else{
        $heading6_color = "";
    }

    if(get_theme_mod('display_search') == true ){
        $display_search = "display:block;";
    }else{
        $display_search = "display:none !important;";
    }

    if(get_theme_mod('display_cart') == true ){
        $display_cart = "display:block;";
    }else{
        $display_cart = "display:none !important;";
    }

    //Main menu
    $typography_main_menu_header = get_theme_mod( 'typography_main_menu_header', array() );

    if(isset($typography_main_menu_header['font-family'])){
        $typography_main_menu_header_font_family = "font-family: ".esc_attr($typography_main_menu_header['font-family']).";";
    }else{
        $typography_main_menu_header_font_family = "";
    }

    if(isset($typography_main_menu_header['text-transform'])){
        $typography_main_menu_header_text_transform = "text-transform: ".esc_attr($typography_main_menu_header['text-transform']).";";
    }else{
        $typography_main_menu_header_text_transform = "";
    }

    if(isset($typography_main_menu_header['color'])){
        $typography_main_menu_header_color = "color: ".esc_attr($typography_main_menu_header['color']).";";
    }else{
        $typography_main_menu_header_color = "";
    }



    if($typography_main_menu_header['variant'] == "100"){
        $typography_main_menu_header_body = "font-weight:100;";
    }else if($typography_main_menu_header['variant'] == "100italic"){
        $typography_main_menu_header_body = "font-weight:100; font-style:italic;";
    }else if($typography_main_menu_header['variant'] == "200"){
        $typography_main_menu_header_body = "font-weight:200;";
    }else if($typography_main_menu_header['variant'] == "200italic"){
        $typography_main_menu_header_body = "font-weight:200; font-style:italic;";
    }else if($typography_main_menu_header['variant'] == "300"){
        $typography_main_menu_header_body = "font-weight:300;";
    }else if($typography_main_menu_header['variant'] == "300italic"){
        $typography_main_menu_header_body = "font-weight:300; font-style:italic;";
    }else if($typography_main_menu_header['variant'] == "regular"){
        $typography_main_menu_header_body = "font-weight:400;";
    }else if($typography_main_menu_header['variant'] == "italic"){
        $typography_main_menu_header_body = "font-weight:400; font-style:italic;";
    }else if($typography_main_menu_header['variant'] == "500"){
        $typography_main_menu_header_body = "font-weight:500;";
    }else if($typography_main_menu_header['variant'] == "500italic"){
        $typography_main_menu_header_body = "font-weight:500; font-style:italic;";
    }else if($typography_main_menu_header['variant'] == "600"){
        $typography_main_menu_header_body = "font-weight:600;";
    }else if($typography_main_menu_header['variant'] == "600italic"){
        $typography_main_menu_header_body = "font-weight:600; font-style:italic;";
    }else if($typography_main_menu_header['variant'] == "700"){
        $typography_main_menu_header_body = "font-weight:700;";
    }else if($typography_main_menu_header['variant'] == "700italic"){
        $typography_main_menu_header_body = "font-weight:700; font-style:italic;";
    }else if($typography_main_menu_header['variant'] == "800"){
        $typography_main_menu_header_body = "font-weight:800;";
    }else if($typography_main_menu_header['variant'] == "800italic"){
        $typography_main_menu_header_body = "font-weight:800; font-style:italic;";
    }else if($typography_main_menu_header['variant'] == "900"){
        $typography_main_menu_header_body = "font-weight:900;";
    }else if($typography_main_menu_header['variant'] == "900italic"){
        $typography_main_menu_header_body = "font-weight:900; font-style:italic;";
    }

    if(isset($typography_main_menu_header['font-size'])){
        $typography_main_menu_header_font_size = "font-size: ".esc_attr($typography_main_menu_header['font-size']).";";
    }else{
        $typography_main_menu_header_font_size = "";
    }

    if(!empty(get_theme_mod('header_main_menu_hover'))){
        $typography_main_menu_header_color_hover = "color: ".esc_textarea(get_theme_mod('header_main_menu_hover')).";";
    }else{
        $typography_main_menu_header_color_hover = "";
    }




    //Sub menu
    if(!empty(get_theme_mod('background_sub_menu_header'))){
        $background_sub_menu = "background: ".esc_attr(get_theme_mod('background_sub_menu_header'))." !important;";
    }else{
        $background_sub_menu = "";
    }

    if(!empty(get_theme_mod('background_hover_sub_menu_header'))){
        $background_hover_sub_menu = "background: ".esc_attr(get_theme_mod('background_hover_sub_menu_header'))." !important;";
    }else{
        $background_hover_sub_menu = "";
    }

    if(!empty(get_theme_mod('border_top_sub_menu_header'))){
        $border_top_sub_menu_header = "border-top:3px solid ".esc_attr(get_theme_mod('border_top_sub_menu_header'))." !important;";
    }else{
        $border_top_sub_menu_header = "";
    }

    if(!empty(get_theme_mod('color_sub_menu_header'))){
        $color_sub_menu_header = "color: ".esc_attr(get_theme_mod('color_sub_menu_header'))." !important;";
    }else{
        $color_sub_menu_header = "";
    }

    if(!empty(get_theme_mod('hover_sub_menu_header'))){
        $hover_sub_menu_header = "color: ".esc_attr(get_theme_mod('hover_sub_menu_header'))." !important;";
    }else{
        $hover_sub_menu_header = "";
    }

    if(!empty(get_theme_mod('color_phone_header_top'))){
        $color_phone_header_top = "color: ".esc_attr(get_theme_mod('color_phone_header_top')).";";
    }else{
        $color_phone_header_top = "";
    }

    if(!empty(get_theme_mod('color_icon_phone_header_top'))){
        $color_icon_phone_header_top = "color: ".esc_attr(get_theme_mod('color_icon_phone_header_top')).";";
    }else{
        $color_icon_phone_header_top = "";
    }

    if(!empty(get_theme_mod('color_email_header_top'))){
        $color_email_header_top = "color: ".esc_attr(get_theme_mod('color_email_header_top')).";";
    }else{
        $color_email_header_top = "";
    }

    if(!empty(get_theme_mod('color_icon_email_header_top'))){
        $color_icon_email_header_top = "color: ".esc_attr(get_theme_mod('color_icon_email_header_top')).";";
    }else{
        $color_icon_email_header_top = "";
    }

    if(!empty(get_theme_mod('color_time_header_top'))){
        $color_time_header_top = "color: ".esc_attr(get_theme_mod('color_time_header_top')).";";
    }else{
        $color_time_header_top = "";
    }

    if(!empty(get_theme_mod('color_icon_time_header_top'))){
        $color_icon_time_header_top= "color: ".esc_attr(get_theme_mod('color_icon_time_header_top')).";";
    }else{
        $color_icon_time_header_top = "";
    }

    if(!empty(get_theme_mod('color_border_header_top'))){
        $color_border_header_top = "color: ".esc_attr(get_theme_mod('color_border_header_top'))." !important;";
    }else{
        $color_border_header_top = "";
    }

    if(!empty(get_theme_mod('color_search_header_top'))){
        $color_search_header_top = "color: ".esc_attr(get_theme_mod('color_search_header_top'))." !important;";
    }else{
        $color_search_header_top = "";
    }

    if(!empty(get_theme_mod('color_search_hover_header_top'))){
        $color_search_hover_header_top = "color: ".esc_attr(get_theme_mod('color_search_hover_header_top'))." !important;";
    }else{
        $color_search_hover_header_top = "";
    }

    if(!empty(get_theme_mod('color_cart_header_top'))){
        $color_cart_header_top = "color: ".esc_attr(get_theme_mod('color_cart_header_top'))." !important;";
    }else{
        $color_cart_header_top = "";
    }

    if(!empty(get_theme_mod('color_number_cart_header_top'))){
        $color_number_cart_header_top = "color: ".esc_attr(get_theme_mod('color_number_cart_header_top')).";";
    }else{
        $color_number_cart_header_top = "";
    }

    if(!empty(get_theme_mod('background_number_cart_header_top'))){
        $background_number_cart_header_top = "background: ".esc_attr(get_theme_mod('background_number_cart_header_top')).";";
    }else{
        $background_number_cart_header_top = "";
    }

    if(!empty(get_theme_mod('background_number_cart_header_top'))){
        $background_number_cart_header_top = "background: ".esc_attr(get_theme_mod('background_number_cart_header_top')).";";
    }else{
        $background_number_cart_header_top = "";
    }

    if(!empty(get_theme_mod('background_number_cart_header_top'))){
        $background_number_cart_header_top = "background: ".esc_attr(get_theme_mod('background_number_cart_header_top')).";";
    }else{
        $background_number_cart_header_top = "";
    }

    if(!empty(get_theme_mod('border_header'))){
        $border_header = "border-color: ".esc_attr(get_theme_mod('border_header')).";";
    }else{
        $border_header = "";
    }


    if(!empty(get_theme_mod('dots_header'))){
        $dots_header = "background: ".esc_attr(get_theme_mod('dots_header'))." !important;";
    }else{
        $dots_header = "";
    }

    if(!empty(get_theme_mod('dots_hover_header'))){
        $dots_hover_header = "background: ".esc_attr(get_theme_mod('dots_hover_header'))." !important;";
    }else{
        $dots_hover_header = "";
    }

    if(!empty(get_theme_mod('dots_border_header'))){
        $dots_border_header = "border-color : ".esc_attr(get_theme_mod('dots_border_header')).";";
    }else{
        $dots_border_header = "";
    }

    if(!empty(get_theme_mod('dots_border_hover_header'))){
        $dots_border_hover_header = "border-color : ".esc_attr(get_theme_mod('dots_border_hover_header')).";";
    }else{
        $dots_border_hover_header = "";
    }

    if(!empty(get_theme_mod('color_social_header'))){
        $color_social_header = "color : ".esc_attr(get_theme_mod('color_social_header')).";";
    }else{
        $color_social_header = "";
    }

    if(!empty(get_theme_mod('color_social_hover_header'))){
        $color_social_hover_header = "color : ".esc_attr(get_theme_mod('color_social_hover_header')).";";
    }else{
        $color_social_hover_header = "";
    }

    if(!empty(get_theme_mod('back_top_top_color'))){
        $back_top_top_color = "background: ".esc_attr(get_theme_mod('back_top_top_color')).";";
    }else{
        $back_top_top_color = "";
    }

    if(!empty(get_theme_mod('back_top_top_color_hover'))){
        $back_top_top_color_hover = "background: ".esc_attr(get_theme_mod('back_top_top_color_hover')).";";
    }else{
        $back_top_top_color_hover = "";
    }

    if(!empty(get_theme_mod('icon_back_top_top_color'))){
        $icon_back_top_top_color = "color: ".esc_attr(get_theme_mod('icon_back_top_top_color')).";";
    }else{
        $icon_back_top_top_color = "";
    }

    if(!empty(get_theme_mod('icon_back_top_top_color_hover'))){
        $icon_back_top_top_color_hover = "color: ".esc_attr(get_theme_mod('icon_back_top_top_color_hover')).";";
    }else{
        $icon_back_top_top_color_hover = "";
    }

    if(!empty(get_theme_mod('color_footer_style1'))){
        $color_footer_style1 = "color: ".esc_attr(get_theme_mod('color_footer_style1'))." !important;";
    }else{
        $color_footer_style1 = "";
    }

    if(!empty(get_theme_mod('color_footer_style2'))){
        $color_footer_style2 = "color: ".esc_attr(get_theme_mod('color_footer_style2'))." !important;";
    }else{
        $color_footer_style2 = "";
    }

    if(!empty(get_theme_mod('color_footer_style3'))){
        $color_footer_style3 = "color: ".esc_attr(get_theme_mod('color_footer_style3'))." !important;";
    }else{
        $color_footer_style3 = "";
    }

    if(!empty(get_theme_mod('color_sidebars_style1'))){
        $color_sidebars_style1 = "color: ".esc_attr(get_theme_mod('color_sidebars_style1')).";";
    }else{
        $color_sidebars_style1 = "";
    }

    if(!empty(get_theme_mod('color_sidebars_style2'))){
        $color_sidebars_style2 = "color: ".esc_attr(get_theme_mod('color_sidebars_style2'))." !important;";
    }else{
        $color_sidebars_style2 = "";
    }

    if(!empty(get_theme_mod('color_sidebars_style3'))){
        $color_sidebars_style3 = "color: ".esc_attr(get_theme_mod('color_sidebars_style3'))." !important;";
        $color_sidebars_style3_border = "border-color: ".esc_attr(get_theme_mod('color_sidebars_style3'))." !important;";
    }else{
        $color_sidebars_style3 = "";
        $color_sidebars_style3_border = "";
    }

    if(!empty(get_theme_mod('color_sidebars_style4'))){
        $color_sidebars_style4 = "background: ".esc_attr(get_theme_mod('color_sidebars_style4'))." !important;";
    }else{
        $color_sidebars_style4 = "";
    }

    if(!empty(get_theme_mod('color_sidebars_style5'))){
        $color_sidebars_style5 = "color: ".esc_attr(get_theme_mod('color_sidebars_style5'))." !important;";
        $color_sidebars_style5_border = "border-color: ".esc_attr(get_theme_mod('color_sidebars_style5'))." !important;";
    }else{
        $color_sidebars_style5 = "";
        $color_sidebars_style5_border = "";
    }

    if(!empty(get_theme_mod('color_sidebars_style6'))){
        $color_sidebars_style6 = "color: ".esc_attr(get_theme_mod('color_sidebars_style6'))." !important;";
        $color_sidebars_style6_back = "background: ".esc_attr(get_theme_mod('color_sidebars_style6')).";";
    }else{
        $color_sidebars_style6 = "";
        $color_sidebars_style6_back = "";
    }

    if(!empty(get_theme_mod('color_sidebars_style_border'))){
        $color_sidebars_style_border = "border-color: ".esc_attr(get_theme_mod('color_sidebars_style_border'))." !important;";
        $color_sidebars_style_back = "background: ".esc_attr(get_theme_mod('color_sidebars_style_border'))." !important;";
    }else{
        $color_sidebars_style_border = "";
        $color_sidebars_style_back = "";
    }

    if(!empty(get_theme_mod('color_sidebars_style7'))){
        $color_sidebars_style7 = "color: ".esc_attr(get_theme_mod('color_sidebars_style7'))." !important;";
        $color_sidebars_style7_back = "background: ".esc_attr(get_theme_mod('color_sidebars_style7'))." !important;";
    }else{
        $color_sidebars_style7 = "";
        $color_sidebars_style7_back = "";
    }

    if(!empty(get_theme_mod('color_shop_style1'))){#2e3841
        $color_shop_style1 = "color: ".esc_attr(get_theme_mod('color_shop_style1'))." !important;";
        $color_shop_style1_back = "background: ".esc_attr(get_theme_mod('color_shop_style1'))." !important;";
        $color_shop_style1_border = "border-color: ".esc_attr(get_theme_mod('color_shop_style1'))." !important;";
    }else{
        $color_shop_style1 = "";
        $color_shop_style1_border = "";
    }

    if(!empty(get_theme_mod('color_shop_style2'))){
        $color_shop_style2 = "background: ".esc_attr(get_theme_mod('color_shop_style2'))." !important;";
        $color_shop_style2_color = "color: ".esc_attr(get_theme_mod('color_shop_style2')).";";
        $color_shop_style2_border = "border-color: ".esc_attr(get_theme_mod('color_shop_style2'))." !important;";
    }else{
        $color_shop_style2 = "";
        $color_shop_style2_color = "";
        $color_shop_style2_border = "";
    }

    if(!empty(get_theme_mod('color_shop_style3'))){
        $color_shop_style3 = "background: ".esc_attr(get_theme_mod('color_shop_style3'))." !important;";
        $color_shop_style3_color = "color: ".esc_attr(get_theme_mod('color_shop_style3'))." !important;";
        $color_shop_style3_border = "border-color: ".esc_attr(get_theme_mod('color_shop_style3'))." !important;";
    }else{
        $color_shop_style3 = "";
        $color_shop_style3_color = "";
        $color_shop_style3_border = "";
    }

    if(!empty(get_theme_mod('color_shop_style4'))){
        $color_shop_style4 = "background: ".esc_attr(get_theme_mod('color_shop_style4'))." !important;";
        $color_shop_style4_color = "color: ".esc_attr(get_theme_mod('color_shop_style4'))." !important;";
        $color_shop_style4_border = "border-color: ".esc_attr(get_theme_mod('color_shop_style4'))." !important;";
    }else{
        $color_shop_style4 = "";
        $color_shop_style4_color = "";
        $color_shop_style4_border = "";
    }

    if(!empty(get_theme_mod('color_shop_style5'))){
        $color_shop_style5 = "background: ".esc_attr(get_theme_mod('color_shop_style5'))." !important;";
        $color_shop_style5_color = "color: ".esc_attr(get_theme_mod('color_shop_style5'))." !important;";
        $color_shop_style5_border = "border-color: ".esc_attr(get_theme_mod('color_shop_style5'))." !important;";
    }else{
        $color_shop_style5 = "";
        $color_shop_style5_color = "";
        $color_shop_style5_border = "";
    }

    if(!empty(get_theme_mod('color_shop_style6'))){
        $color_shop_style6 = "background: ".esc_attr(get_theme_mod('color_shop_style6'))." !important;";
        $color_shop_style6_color = "color: ".esc_attr(get_theme_mod('color_shop_style6'))." !important;";
        $color_shop_style6_border = "border-color: ".esc_attr(get_theme_mod('color_shop_style6'))." !important;";
    }else{
        $color_shop_style6 = "";
        $color_shop_style6_color = "";
        $color_shop_style6_border = "";
    }

    if(!empty(get_theme_mod('color_shop_style7'))){
        $color_shop_style7 = "background: ".esc_attr(get_theme_mod('color_shop_style7'))." !important;";
        $color_shop_style7_color = "color: ".esc_attr(get_theme_mod('color_shop_style7'))." !important;";
        $color_shop_style7_border = "border-color: ".esc_attr(get_theme_mod('color_shop_style7'))." !important;";
    }else{
        $color_shop_style7 = "";
        $color_shop_style7_color = "";
        $color_shop_style7_border = "";
    }



    if(!empty(get_theme_mod('layout_background_header3'))){
        $layout_background_header3 = "background: ".esc_attr(get_theme_mod('layout_background_header3'))." !important;";
    }else{
        $layout_background_header3 = "";
    }

    if(!empty(get_theme_mod('layout_background_header4'))){
        $layout_background_header4 = "background: ".esc_attr(get_theme_mod('layout_background_header4'))." !important;";
    }else{
        $layout_background_header4 = "";
    }



    if(!empty(get_theme_mod('layout_background_header1_style1'))){
        $layout_background_header1_style1 = "background: ".esc_attr(get_theme_mod('layout_background_header1_style1')).";";
    }else{
        $layout_background_header1_style1 = "";
    }

    if(!empty(get_theme_mod('layout_background_header1_style2'))){
        $layout_background_header1_style2 = "background: ".esc_attr(get_theme_mod('layout_background_header1_style2'))." !important;";
    }else{
        $layout_background_header1_style2 = "";
    }

    if(!empty(get_theme_mod('layout_background_header2'))){
        $layout_background_header2 = "background: ".esc_attr(get_theme_mod('layout_background_header2'))." !important;";
    }else{
        $layout_background_header2 = "";
    }

    //Main menu header 1 (home Dark)
    if(!empty(get_theme_mod('header1_v2_style1'))){
        $header1_v2_style1 = "color: ".esc_attr(get_theme_mod('header1_v2_style1'))." !important;";
    }else{
        $header1_v2_style1 = "";
    }

    if(!empty(get_theme_mod('header1_v2_style2'))){
        $header1_v2_style2 = "color: ".esc_attr(get_theme_mod('header1_v2_style2'))." !important;";
    }else{
        $header1_v2_style2 = "";
    }

    if(!empty(get_theme_mod('header1_v2_style3'))){
        $header1_v2_style3_border = "border-color: ".esc_attr(get_theme_mod('header1_v2_style3'))." !important;";
        $header1_v2_style3 = "background-color: ".esc_attr(get_theme_mod('header1_v2_style3'))." !important;";
    }else{
        $header1_v2_style3_border = "";
        $header1_v2_style3 = "";
    }


    //Main menu header 1 (home Shop)
    if(!empty(get_theme_mod('header1_v3_style1'))){
        $header1_v3_style1 = "color: ".esc_attr(get_theme_mod('header1_v3_style1'))." !important;";
    }else{
        $header1_v3_style1 = "";
    }

    if(!empty(get_theme_mod('header1_v3_style2'))){
        $header1_v3_style2 = "color: ".esc_attr(get_theme_mod('header1_v3_style2')).";";
    }else{
        $header1_v3_style2 = "";
    }

    if(!empty(get_theme_mod('header1_v3_style3'))){
        $header1_v3_style3_border = "border-color: ".esc_attr(get_theme_mod('header1_v3_style3'))." !important;";
        $header1_v3_style3 = "background-color: ".esc_attr(get_theme_mod('header1_v3_style3'))." !important;";
    }else{
        $header1_v3_style3_border = "";
        $header1_v3_style3 = "";
    }

    //Main menu header 2
    if(!empty(get_theme_mod('header2_style1'))){
        $header2_style1 = "color: ".esc_attr(get_theme_mod('header2_style1'))." !important;";
    }else{
        $header2_style1 = "";
    }

    if(!empty(get_theme_mod('header2_style2'))){
        $header2_style2= "color: ".esc_attr(get_theme_mod('header2_style2'))." !important;";
    }else{
        $header2_style2 = "";
    }

    if(!empty(get_theme_mod('header2_style3'))){
        $header2_style3_border = "border-color: ".esc_attr(get_theme_mod('header2_style3'))." !important;";
        $header2_style3 = "background-color: ".esc_attr(get_theme_mod('header2_style3'))." !important;";
    }else{
        $header2_style3_border = "";
        $header2_style3 = "";
    }

    if(!empty(get_theme_mod('header2_style4'))){
        $header2_style4_border = "border-color: ".esc_attr(get_theme_mod('header2_style4'))." !important;";
        $header2_style4 = "background-color: ".esc_attr(get_theme_mod('header2_style4'))." !important;";
    }else{
        $header2_style4_border = "";
        $header2_style4 = "";
    }

    if(!empty(get_theme_mod('header2_style5'))){
        $header2_style5_border = "border-color: ".esc_attr(get_theme_mod('header2_style5'))." !important;";
        $header2_style5 = "background-color: ".esc_attr(get_theme_mod('header2_style5'))." !important;";
    }else{
        $header2_style5_border = "";
        $header2_style5 = "";
    }


    //Main menu header 4
    if(!empty(get_theme_mod('header4_style1'))){
        $header4_style1 = "color: ".esc_attr(get_theme_mod('header4_style1'))." !important;";
    }else{
        $header4_style1 = "";
    }

    if(!empty(get_theme_mod('header4_style2'))){
        $header4_style2 = "color: ".esc_attr(get_theme_mod('header4_style2'))." !important;";
    }else{
        $header4_style2 = "";
    }

    if(!empty(get_theme_mod('header4_style3'))){
        $header4_style3 = "border-color: ".esc_attr(get_theme_mod('header4_style3'))." !important;";
    }else{
        $header4_style3 = "";
    }

    //Main menu header 5
    if(!empty(get_theme_mod('header5_style1'))){
        $header5_style1 = "color: ".esc_attr(get_theme_mod('header5_style1'))." !important;";
    }else{
        $header5_style1 = "";
    }

    if(!empty(get_theme_mod('header5_style2'))){
        $header5_style2 = "color: ".esc_attr(get_theme_mod('header5_style2'))." !important;";
    }else{
        $header5_style2 = "";
    }

    //CUSTOM COLOR HEADER 1 (Home default)
    if(!empty(get_theme_mod('color_header1_v1_top_style1'))){
        $color_header1_v1_top_style1 = "color: ".esc_attr(get_theme_mod('color_header1_v1_top_style1'))." !important;";
        $color_header1_v1_top_style1_border = "border-color: ".esc_attr(get_theme_mod('color_header1_v1_top_style1'))." !important;";
    }else{
        $color_header1_v1_top_style1 = "";
        $color_header1_v1_top_style1_border = "";
    }

    if(!empty(get_theme_mod('color_header1_v1_top_style2'))){
        $color_header1_v1_top_style2 = "color: ".esc_attr(get_theme_mod('color_header1_v1_top_style2'))." !important;";
        $color_header1_v1_top_style2_border = "border-color: ".esc_attr(get_theme_mod('color_header1_v1_top_style2'))." !important;";
    }else{
        $color_header1_v1_top_style2 = "";
        $color_header1_v1_top_style2_border = "";
    }

    if(!empty(get_theme_mod('color_header1_v1_top_style3'))){
        $color_header1_v1_top_style3 = "color: ".esc_attr(get_theme_mod('color_header1_v1_top_style3'))." !important;";
        $color_header1_v1_top_style3_border = "border-color: ".esc_attr(get_theme_mod('color_header1_v1_top_style3'))." !important;";
    }else{
        $color_header1_v1_top_style3 = "";
        $color_header1_v1_top_style3_border = "";
    }

    if(!empty(get_theme_mod('color_header1_v1_top_style4'))){
        $color_header1_v1_top_style4 = "color: ".esc_attr(get_theme_mod('color_header1_v1_top_style4'))." !important;";
        $color_header1_v1_top_style4_border = "border-color: ".esc_attr(get_theme_mod('color_header1_v1_top_style4'))." !important;";
        $color_header1_v1_top_style4_back = "background-color: ".esc_attr(get_theme_mod('color_header1_v1_top_style4'))." !important;";
    }else{
        $color_header1_v1_top_style4 = "";
        $color_header1_v1_top_style4_border = "";
        $color_header1_v1_top_style4_back = "";
    }

    if(!empty(get_theme_mod('color_header1_v1_top_style5'))){
        $color_header1_v1_top_style5 = "color: ".esc_attr(get_theme_mod('color_header1_v1_top_style5'))." !important;";
        $color_header1_v1_top_style5_border = "border-color: ".esc_attr(get_theme_mod('color_header1_v1_top_style5'))." !important;";
        $color_header1_v1_top_style5_back = "background-color: ".esc_attr(get_theme_mod('color_header1_v1_top_style5'))." !important;";
    }else{
        $color_header1_v1_top_style5 = "";
        $color_header1_v1_top_style5_border = "";
        $color_header1_v1_top_style5_back = "";
    }

    if(!empty(get_theme_mod('color_header1_v1_top_style6'))){
        $color_header1_v1_top_style6 = "color: ".esc_attr(get_theme_mod('color_header1_v1_top_style6'))." !important;";
    }else{
        $color_header1_v1_top_style6 = "";
    }


    //CUSTOM COLOR HEADER 1 (Home dark)
    if(!empty(get_theme_mod('color_header1_v2_top_style1'))){
        $color_header1_v2_top_style1 = "color: ".esc_attr(get_theme_mod('color_header1_v2_top_style1'))." !important;";
        $color_header1_v2_top_style1_border = "border-color: ".esc_attr(get_theme_mod('color_header1_v2_top_style1'))." !important;";
    }else{
        $color_header1_v2_top_style1 = "";
        $color_header1_v2_top_style1_border = "";
    }

    if(!empty(get_theme_mod('color_header1_v2_top_style2'))){
        $color_header1_v2_top_style2 = "color: ".esc_attr(get_theme_mod('color_header1_v2_top_style2'))." !important;";
        $color_header1_v2_top_style2_border = "border-color: ".esc_attr(get_theme_mod('color_header1_v2_top_style2'))." !important;";
    }else{
        $color_header1_v2_top_style2 = "";
        $color_header1_v2_top_style2_border = "";
    }

    if(!empty(get_theme_mod('color_header1_v2_top_style3'))){
        $color_header1_v2_top_style3 = "color: ".esc_attr(get_theme_mod('color_header1_v2_top_style3'))." !important;";
        $color_header1_v2_top_style3_border = "border-color: ".esc_attr(get_theme_mod('color_header1_v2_top_style3'))." !important;";
    }else{
        $color_header1_v2_top_style3 = "";
        $color_header1_v2_top_style3_border = "";
    }

    if(!empty(get_theme_mod('color_header1_v2_top_style4'))){
        $color_header1_v2_top_style4 = "color: ".esc_attr(get_theme_mod('color_header1_v2_top_style4'))." !important;";
        $color_header1_v2_top_style4_border = "border-color: ".esc_attr(get_theme_mod('color_header1_v2_top_style4'))." !important;";
        $color_header1_v2_top_style4_back = "background-color: ".esc_attr(get_theme_mod('color_header1_v2_top_style4'))." !important;";
    }else{
        $color_header1_v2_top_style4 = "";
        $color_header1_v2_top_style4_border = "";
        $color_header1_v2_top_style4_back = "";
    }

    if(!empty(get_theme_mod('color_header1_v2_top_style5'))){
        $color_header1_v2_top_style5 = "color: ".esc_attr(get_theme_mod('color_header1_v2_top_style5'))." !important;";
        $color_header1_v2_top_style5_border = "border-color: ".esc_attr(get_theme_mod('color_header1_v2_top_style5'))." !important;";
        $color_header1_v2_top_style5_back = "background-color: ".esc_attr(get_theme_mod('color_header1_v2_top_style5'))." !important;";
    }else{
        $color_header1_v2_top_style5 = "";
        $color_header1_v2_top_style5_border = "";
        $color_header1_v2_top_style5_back = "";
    }

    if(!empty(get_theme_mod('color_header1_v2_top_style6'))){
        $color_header1_v2_top_style6 = "color: ".esc_attr(get_theme_mod('color_header1_v2_top_style6'))." !important;";
    }else{
        $color_header1_v2_top_style6 = "";
    }


    //CUSTOM COLOR HEADER 1 (Home shop)
    if(!empty(get_theme_mod('color_header1_v3_top_style1'))){
        $color_header1_v3_top_style1 = "color: ".esc_attr(get_theme_mod('color_header1_v3_top_style1'))." !important;";
        $color_header1_v3_top_style1_border = "border-color: ".esc_attr(get_theme_mod('color_header1_v3_top_style1'))." !important;";
    }else{
        $color_header1_v3_top_style1 = "";
        $color_header1_v3_top_style1_border = "";
    }

    if(!empty(get_theme_mod('color_header1_v3_top_style2'))){
        $color_header1_v3_top_style2 = "color: ".esc_attr(get_theme_mod('color_header1_v3_top_style2'))." !important;";
        $color_header1_v3_top_style2_border = "border-color: ".esc_attr(get_theme_mod('color_header1_v3_top_style2'))." !important;";
    }else{
        $color_header1_v3_top_style2 = "";
        $color_header1_v3_top_style2_border = "";
    }

    if(!empty(get_theme_mod('color_header1_v3_top_style3'))){
        $color_header1_v3_top_style3 = "color: ".esc_attr(get_theme_mod('color_header1_v3_top_style3'))." !important;";
        $color_header1_v3_top_style3_border = "border-color: ".esc_attr(get_theme_mod('color_header1_v3_top_style3'))." !important;";
    }else{
        $color_header1_v3_top_style3 = "";
        $color_header1_v3_top_style3_border = "";
    }

    if(!empty(get_theme_mod('color_header1_v3_top_style4'))){
        $color_header1_v3_top_style4 = "color: ".esc_attr(get_theme_mod('color_header1_v3_top_style4'))." !important;";
        $color_header1_v3_top_style4_border = "border-color: ".esc_attr(get_theme_mod('color_header1_v3_top_style4'))." !important;";
        $color_header1_v3_top_style4_back = "background-color: ".esc_attr(get_theme_mod('color_header1_v3_top_style4'))." !important;";
    }else{
        $color_header1_v3_top_style4 = "";
        $color_header1_v3_top_style4_border = "";
        $color_header1_v3_top_style4_back = "";
    }

    if(!empty(get_theme_mod('color_header1_v3_top_style5'))){
        $color_header1_v3_top_style5 = "color: ".esc_attr(get_theme_mod('color_header1_v3_top_style5'))." !important;";
        $color_header1_v3_top_style5_border = "border-color: ".esc_attr(get_theme_mod('color_header1_v3_top_style5'))." !important;";
        $color_header1_v3_top_style5_back = "background-color: ".esc_attr(get_theme_mod('color_header1_v3_top_style5'))." !important;";
    }else{
        $color_header1_v3_top_style5 = "";
        $color_header1_v3_top_style5_border = "";
        $color_header1_v3_top_style5_back = "";
    }

    if(!empty(get_theme_mod('color_header1_v3_top_style6'))){
        $color_header1_v3_top_style6 = "color: ".esc_attr(get_theme_mod('color_header1_v3_top_style6'))." !important;";
    }else{
        $color_header1_v3_top_style6 = "";
    }

    //CUSTOM COLOR HEADER 2
    if(!empty(get_theme_mod('color_header2_top_style1'))){
        $color_header2_top_style1 = "color: ".esc_attr(get_theme_mod('color_header2_top_style1'))." !important;";
    }else{
        $color_header2_top_style1 = "";
    }

    if(!empty(get_theme_mod('color_header2_top_style2'))){
        $color_header2_top_style2 = "color: ".esc_attr(get_theme_mod('color_header2_top_style2'))." !important;";
    }else{
        $color_header2_top_style2 = "";
    }

    if(!empty(get_theme_mod('color_header2_top_style3'))){
        $color_header2_top_style3 = "color: ".esc_attr(get_theme_mod('color_header2_top_style3'))." !important;";
    }else{
        $color_header2_top_style3 = "";
    }

    if(!empty(get_theme_mod('color_header2_top_style4'))){
        $color_header2_top_style4 = "color: ".esc_attr(get_theme_mod('color_header2_top_style4'))." !important;";
    }else{
        $color_header2_top_style4 = "";
    }

    if(!empty(get_theme_mod('color_header2_top_style5'))){
        $color_header2_top_style5 = "background-color: ".esc_attr(get_theme_mod('color_header2_top_style5'))." !important;";
    }else{
        $color_header2_top_style5 = "";
    }

    if(!empty(get_theme_mod('color_header2_top_style6'))){
        $color_header2_top_style6 = "color: ".esc_attr(get_theme_mod('color_header2_top_style6'))." !important;";
    }else{
        $color_header2_top_style6 = "";
    }

    if(!empty(get_theme_mod('color_header2_top_style7'))){
        $color_header2_top_style7 = "color: ".esc_attr(get_theme_mod('color_header2_top_style7'))." !important;";
    }else{
        $color_header2_top_style7 = "";
    }

    //CUSTOM COLOR HEADER 4
    if(!empty(get_theme_mod('color_header4_top_style1'))){
        $color_header4_top_style1 = "color: ".esc_attr(get_theme_mod('color_header4_top_style1'))." !important;";
    }else{
        $color_header4_top_style1 = "";
    }

    if(!empty(get_theme_mod('color_header4_top_style2'))){
        $color_header4_top_style2 = "color: ".esc_attr(get_theme_mod('color_header4_top_style2'))." !important;";
    }else{
        $color_header4_top_style2 = "";
    }

    if(!empty(get_theme_mod('color_header4_top_style3'))){
        $color_header4_top_style3 = "color: ".esc_attr(get_theme_mod('color_header4_top_style3'))." !important;";
    }else{
        $color_header4_top_style3 = "";
    }

    if(!empty(get_theme_mod('color_header4_top_style4'))){
        $color_header4_top_style4 = "background-color: ".esc_attr(get_theme_mod('color_header4_top_style4'))." !important;";
    }else{
        $color_header4_top_style4 = "";
    }

    if(!empty(get_theme_mod('color_header4_top_style5'))){
        $color_header4_top_style5 = "color: ".esc_attr(get_theme_mod('color_header4_top_style5'))." !important;";
    }else{
        $color_header4_top_style5 = "";
    }

    if(!empty(get_theme_mod('color_header4_top_style6'))){
        $color_header4_top_style6 = "color: ".esc_attr(get_theme_mod('color_header4_top_style6'))." !important;";
    }else{
        $color_header4_top_style6 = "";
    }

    //CUSTOM COLOR HEADER 5

    if(!empty(get_theme_mod('color_header5_top_style1'))){
        $color_header5_top_style1 = "color: ".esc_attr(get_theme_mod('color_header5_top_style1'))." !important;";
    }else{
        $color_header5_top_style1 = "";
    }

    if(!empty(get_theme_mod('color_header5_top_style2'))){
        $color_header5_top_style2 = "color: ".esc_attr(get_theme_mod('color_header5_top_style2'))." !important;";
    }else{
        $color_header5_top_style2 = "";
    }

    if(!empty(get_theme_mod('color_header5_top_style3'))){
        $color_header5_top_style3 = "background-color: ".esc_attr(get_theme_mod('color_header5_top_style3'))." !important;";
    }else{
        $color_header5_top_style3 = "";
    }

    if(!empty(get_theme_mod('color_header5_top_style4'))){
        $color_header5_top_style4 = "color: ".esc_attr(get_theme_mod('color_header5_top_style4'))." !important;";
    }else{
        $color_header5_top_style4 = "";
    }

    if(!empty(get_theme_mod('color_header5_top_style5'))){
        $color_header5_top_style5 = "color: ".esc_attr(get_theme_mod('color_header5_top_style5'))." !important;";
    }else{
        $color_header5_top_style5 = "";
    }

    if(!empty(get_theme_mod('color_header5_top_style6'))){
        $color_header5_top_style6 = "background-color: ".esc_attr(get_theme_mod('color_header5_top_style6')).";";
    }else{
        $color_header5_top_style6 = "";
    }

    if(!empty(get_theme_mod('color_header5_top_style7'))){
        $color_header5_top_style7_border = "border-color: ".esc_attr(get_theme_mod('color_header5_top_style7')).";";
        $color_header5_top_style7_back = "background-color: ".esc_attr(get_theme_mod('color_header5_top_style7')).";";
    }else{
        $color_header5_top_style7_border = "";
        $color_header5_top_style7_back = "";
    }

    if(!empty(get_theme_mod('color_header5_top_style8'))){
        $color_header5_top_style8 = "color: ".esc_attr(get_theme_mod('color_header5_top_style8'))." !important;";
    }else{
        $color_header5_top_style8 = "";
    }

    if(!empty(get_theme_mod('color_header5_top_style9'))){
        $color_header5_top_style9 = "color: ".esc_attr(get_theme_mod('color_header5_top_style9'))." !important;";
    }else{
        $color_header5_top_style9 = "";
    }


    echo "<style>            
            .vk-navbar-right-fixed .vk-social-link li a{
                ".$color_header5_top_style8."
            }
            .vk-navbar-right-fixed .vk-social-link li a:hover{
                ".$color_header5_top_style9."
            }
            .vk-navbar-right-fixed .vk-nav-scroll-to-id li a.mPS2id-highlight:before, .vk-navbar-right-fixed .vk-nav-scroll-to-id li a:hover:before, .vk-navbar-right-fixed .vk-nav-scroll-to-id li a:focus:before{
                ".$color_header5_top_style7_back."
            }
            .vk-navbar-right-fixed .vk-nav-scroll-to-id li a.mPS2id-highlight:after, .vk-navbar-right-fixed .vk-nav-scroll-to-id li a:hover:after, .vk-navbar-right-fixed .vk-nav-scroll-to-id li a:focus:after{
                ".$color_header5_top_style7_border."
            }
            .vk-navbar-right-fixed .vk-nav-scroll-to-id li a:before{
                ".$color_header5_top_style6."
            }
            .vk-navbar-right-fixed .item-search i{
                ".$color_header5_top_style4."
            }
            .vk-navbar-right-fixed .item-search i:hover{
                ".$color_header5_top_style5."
            }
            .vk-navbar-right-fixed .shopping-cart .number-item{
                ".$color_header5_top_style2.";
                ".$color_header5_top_style3."
            }
            .vk-navbar-right-fixed .search-shopcart-button .shopping-cart i{
                ".$color_header5_top_style1."
            }
            
            .vk-header4 .item-search i{
                ".$color_header4_top_style5."
            }
            .vk-header4 .item-search i:hover{
                ".$color_header4_top_style6."
            }
            .vk-header4 .shopping-cart .number-item{
                ".$color_header4_top_style3.";
                ".$color_header4_top_style4.";
            }
            .vk-header4 .shopping-cart i{
                ".$color_header4_top_style2."
            }
            .vk-header4 .quick-address li{
                ".$color_header4_top_style1."
            }
            
            .vk-header2 .item-search i{
                ".$color_header2_top_style6.";
            }
            .vk-header2 .item-search i:hover{
                ".$color_header2_top_style7."
            }
             .vk-header2 .shopping-cart .number-item{
                ".$color_header2_top_style4.";
                ".$color_header2_top_style5."
             }
             .vk-header2 .vk-navbar .search-shopcart-button .shopping-cart{
                ".$color_header2_top_style3."
             }
             .vk-header2 .quick-address li i{
                ".$color_header2_top_style2."
             }
             .vk-header2 .quick-address li,.vk-header2 .quick-address li a{ 
                ".$color_header2_top_style1."
             }
             .page-id-2345 li.item-search i{
                ".$color_header1_v3_top_style5.";
            }
             .page-id-2345 li.item-search i:hover{
                ".$color_header1_v3_top_style6."
            }   
              .page-id-2345 .vk-header-transparent .shopping-cart .number-item{
                ".$color_header1_v3_top_style3.";
                ".$color_header1_v3_top_style4_back."
             }  
              .page-id-2345 .vk-header-transparent .shopping-cart i{
                ".$color_header1_v3_top_style2."
             }
             
             .page-id-2345 .vk-header-top .quick-address li{
                ".$color_header1_v3_top_style1.";
                    font-weight: 300;
             }
             
             
             .page-id-2272 li.item-search i{
                ".$color_header1_v2_top_style5."
            }
            .page-id-2272 li.item-search i:hover{
                ".$color_header1_v2_top_style6."
            }   
             .page-id-2272 .vk-header-transparent .shopping-cart .number-item{
                ".$color_header1_v2_top_style3.";
                ".$color_header1_v2_top_style4_back."
             }  
             .page-id-2272 .vk-header-transparent .shopping-cart i{
                ".$color_header1_v2_top_style2."
             }
             .page-id-2272 .vk-header-top .quick-address li{
                ".$color_header1_v2_top_style1."
             }
                
            .page-id-18 li.item-search i{
                ".$color_header1_v1_top_style5."
            }
            .page-id-18 li.item-search i:hover{
                ".$color_header1_v1_top_style6."
            }
            .page-id-18 .vk-header-transparent .shopping-cart .number-item{
                ".$color_header1_v1_top_style3.";
                ".$color_header1_v1_top_style4_back."
            }
            .page-id-18 .vk-header-transparent .shopping-cart i{
                ".$color_header1_v1_top_style2."
            }
            .page-id-18 .vk-header-top .quick-address li:before{
                ".$color_header1_v1_top_style1."
            }
            .page-id-18 .vk-header-top .quick-address li{
                ".$color_header1_v1_top_style1."
            }
            .vk-header5 .vk-navbar-nav > li > a{
                ".$header5_style1."
            }
            .vk-header5 .vk-navbar-nav > li > a:hover{
                ".$header5_style2."
            }

            .vk-header-two-nav .vk-navbar-right ul li a{
                ".$header4_style1."
            }
            .vk-header-two-nav .vk-navbar-right ul li a:hover{
                 background:none !important;
                ".$header4_style2."
            }
            .vk-header-two-nav .vk-navbar-header .vk-divider.left,.vk-header-two-nav .vk-navbar-header .vk-divider.right{
                ".$header4_style3."
            }
            .vk-header4 .vk-navbar-left > li > a{
                ".$header4_style1."
            }
            .vk-header4 .vk-navbar-left > li > a:hover{
                background:none !important;
                ".$header4_style2."
            }
            
            
            .vk-header2  .vk-navbar-nav{
                ".$header2_style3_border."
            }
            .vk-header2 .vk-navbar-nav li{
                ".$header2_style3_border."
            }
            @media screen and (min-width:992px){
                .vk-header2 .vk-navbar-nav li a{
                    ".$header2_style1.";
                    ".$header2_style5."
                }
                .vk-header2 .vk-navbar-nav li a:hover
                {
                    ".$header2_style2.";
                    ".$header2_style4."
                }
            }
            
            .page-id-2345 .vk-header1 .content:after{
                ".$header1_v3_style3."
            }
            .page-id-2345 .vk-header1 .vk-navbar-header{
                ".$header1_v3_style3_border."
            }
            .page-id-2345 .vk-header1 .vk-navbar{
                ".$header1_v3_style3_border."
            }
            
            .page-id-2345 .vk-header1 .vk-navbar-nav > li > a:hover{
                ".$header1_v3_style2.";
            }
                       
            .page-id-2272 .vk-header1 .content:after{
                ".$header1_v2_style3."
            }
           
            .page-id-2272 .vk-header1 .vk-navbar-header{
                ".$header1_v2_style3_border."
            }
            .page-id-2272 .vk-header1 .vk-navbar{
                ".$header1_v2_style3_border."
            }
            .page-id-2272 .vk-header1 .vk-navbar-nav > li > a{
                ".$header1_v2_style1.";
            }
            .page-id-2272 .vk-header1 .vk-navbar-nav > li > a:hover{
                ".$header1_v2_style2.";
            }
                      
            .vk-header2{
                ".$layout_background_header2."
            }
            
            .page-id-2272 .vk-header1{
                ".$layout_background_header1_style2."
            }
            .home .vk-header1{
                ".$layout_background_header1_style1."
            }
            
            .vk-header3{
                ".$layout_background_header3."
            }
            .vk-header4{
                ".$layout_background_header4."
            }
     
        
            #order_review_heading{
                ".$color_shop_style1."
            }
            .uni-checkout-order-review tfoot tr.cart-subtotal th{
                ".$color_shop_style1."
            }
            .uni-checkout-order-review tfoot tr.shipping th{
                ".$color_shop_style1."
            }
            .uni-checkout-order-review thead tr th{
                ".$color_shop_style1_back."
            }
            .uni-checkout-form-shipping .woocommerce-shipping-fields h3{
                ".$color_shop_style1_back."
            }
            .uni-billing-details h3{
                ".$color_shop_style1_back."
            }
            .uni-have-a-coupon .woocommerce-info{
                ".$color_shop_style1_back.";
                ".$color_shop_style1_border."
            }
            .woocommerce div.product form.cart .button:hover{
                ".$color_shop_style2_color.";
                ".$color_shop_style2_border.";
                 border:1px solid !important;
                background:none !important;
            }
            .uni-cart .wc-proceed-to-checkout a.button.alt:hover{
                ".$color_shop_style2_color.";
                ".$color_shop_style2_border.";
                 border:1px solid !important;
                background:none !important;
            }
            .uni-cart tbody tr.uni-coupon-update .coupon .button:hover{
                ".$color_shop_style2_color.";
                ".$color_shop_style2_border.";
                 border:1px solid !important;
                background:none !important;
            }
            .uni-cart tbody tr.uni-coupon-update .button:hover{
                ".$color_shop_style2_color.";
                ".$color_shop_style2_border.";
                 border:2px solid !important;
                background:none !important;
            }
            .uni-cart .wc-proceed-to-checkout a.button.alt{
                ".$color_shop_style2.";
                ".$color_shop_style3_color.";
                ".$color_shop_style2_border."
            }
            .uni-cart .cart_totals button.button{
                border:1px solid !important;
            }
            .uni-cart tbody tr.uni-coupon-update .button{
                border:1px solid !important;
            }
            .uni-cart .wc-proceed-to-checkout a.button.alt{
                border:1px solid !important;  
            }
            .uni-cart .wc-proceed-to-checkout a.button.al:hover{
                background:none !important;
            }
            .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button{
                ".$color_shop_style2.";
                ".$color_shop_style3_color.";
                ".$color_shop_style2_border."
            }
            .uni-cart tbody tr.uni-coupon-update .button{
                ".$color_shop_style2.";
                ".$color_shop_style3_color.";
                ".$color_shop_style2_border."
            }
            .uni-cart tbody tr.uni-coupon-update .coupon .button{
                ".$color_shop_style2.";
                ".$color_shop_style3_color.";
                ".$color_shop_style2_border."
            }
            .woocommerce div.product .woocommerce-tabs ul.tabs li.active a{
                ".$color_shop_style3_color."
            }
            .woocommerce div.product form.cart .button{
                ".$color_shop_style3_color."
            }
            .uni-cart .cart_totals tbody tr th{
                ".$color_shop_style1."
            }
            .uni-cart .cart_totals h2{
                ".$color_shop_style1_back."
            }
            .uni-cart tbody .name-product a{
                ".$color_shop_style1."
            }
            .uni-cart thead{
                ".$color_shop_style1_back."
            }
            .woocommerce div.product .woocommerce-tabs ul.tabs::before{
                ".$color_shop_style6_border."
            }
            .uni-single-product ul li a h2{
                ".$color_shop_style6_border."
            }
            .woocommerce div.product .woocommerce-tabs ul.tabs li{
                ".$color_shop_style6."
            }
            .uni-single-product div.product form.cart{
                ".$color_shop_style6_border."
            }
            .uni-single-product .woocommerce-review-link{
                ".$color_shop_style4_color."
            }
            .uni-single-product .woocommerce-product-details__short-description p{
                ".$color_shop_style4_color."
            }
            .woocommerce div.product .woocommerce-tabs .panel p{
                ".$color_shop_style4_color."
            }
            .woocommerce div.product .woocommerce-tabs ul.tabs li a{
                ".$color_shop_style4_color."
            }
            .uni-single-product .entry-summary .product_meta span a{
                ".$color_shop_style4_color."
            }
            .uni-single-product .entry-summary .product_meta span.posted_in{
                ".$color_shop_style4_color."
            }
            .woocommerce .star-rating span{
                ".$color_shop_style4_color."
            }
            .uni-single-product .related h2:after{
                ".$color_shop_style2."
            }
            .uni-single-product .related h2:before{
                ".$color_shop_style2."
            }
            .woocommerce div.product .woocommerce-tabs ul.tabs li.active{
                ".$color_shop_style2."
            }
            .woocommerce div.product form.cart .button{
                ".$color_shop_style2.";
                ".$color_shop_style2_border."
            }
            .woocommerce span.onsale{
                ".$color_shop_style2."
            }
            .uni-single-product .price span{
                ".$color_shop_style2_color."
            }
            .uni-single-product .related ul li .add_to_cart_button{
                ".$color_shop_style2_border."
            }
            .uni-single-product .related h2{
                ".$color_shop_style1."
            }
            .woocommerce div.product .product_title{
                ".$color_shop_style1."
            }
            .uni-shop-product-main-body .woocommerce-pagination .page-numbers li:hover{
                ".$color_shop_style2_color.";
                ".$color_shop_style2_border."
            }
            .uni-shop-product-main-body .woocommerce-pagination .page-numbers li:hover a{
                ".$color_shop_style2_color."
            }
            a.woocommerce-LoopProduct-link.woocommerce-loop-product__link .price{
                color:#FFF;
            }
            .vk-header .shopping-cart-list p.woocommerce-mini-cart__buttons.buttons a:hover{
                ".$color_shop_style2.";
                ".$color_shop_style1.";
                ".$color_shop_style2_border.";
            }
            .uni-shop-product-main-body ul li .add_to_cart_button:hover {
                background: none !important;
                ".$color_shop_style2_color.";
                ".$color_shop_style2_border."
            }
            .uni-shop-product-main-body ul li .price del{
                ".$color_shop_style2_color."
            }
            .vk-header .shopping-cart-list p.woocommerce-mini-cart__buttons.buttons{
                ".$color_shop_style1_back."
            }
            .shopping-cart-list .vk-table .vk-table-row:first-child, .shopping-cart-list .vk-table .vk-table-row{
                ".$color_shop_style1_back."
            }
            .vk-header .shopping-cart-list .woocommerce-mini-cart.cart_list.product_list_widget li{
                ".$color_shop_style6_border."
            }
            .uni-shop-product-main-body ul li a h2{
                ".$color_shop_style6_border."
            }
            .uni-shop-product-main-body .products li:hover .woocommerce-loop-product__link:before{
                ".$color_shop_style5."
            }
            .uni-shop-product-main-body .products li .woocommerce-loop-product__link:after{
                ".$color_shop_style3_color.";
                ".$color_shop_style3_border."
            }
            .vk-header .shopping-cart-list a.remove.remove_from_cart_button{
                ".$color_shop_style4_color."
            }
            .woocommerce ul.cart_list li a, .woocommerce ul.product_list_widget li a{
                ".$color_shop_style4_color."
            }
            .uni-shop-product-main-body .woocommerce-pagination .page-numbers li a{
                ".$color_shop_style4_color."
            }
            .uni-shop-product-main-body .woocommerce-pagination .page-numbers li{
                ".$color_shop_style6_border."
            }
            .woocommerce .woocommerce-ordering select{
                ".$color_shop_style4_color.";
                ".$color_shop_style4_border."
            }
            .woocommerce .woocommerce-result-count{
                ".$color_shop_style4_color."
            }
            .woocommerce .star-rating::before{
                ".$color_shop_style4_color."
            }
            .uni-shop-product-main-body ul li .add_to_cart_button{
                ".$color_shop_style2_border."
            }
            .shopping-cart-list .vk-table .vk-table-row .vk-table-data{
                ".$color_shop_style3_color."
            }
            .uni-shop-product-main-body ul li .star-rating{
                ".$color_shop_style4_color."
            }    
            p.woocommerce-mini-cart__total.total strong{
                ".$color_shop_style1."
            }
            .vk-header .shopping-cart-list{
                ".$color_shop_style2_border."
            }
            .vk-header .shopping-cart-list p.woocommerce-mini-cart__buttons.buttons a{
                ".$color_shop_style2_color.";
                ".$color_shop_style2_border."
            }
            .post-type-archive-product span.woocommerce-Price-amount.amount,.single-product span.woocommerce-Price-amount.amount{
                ".$color_shop_style2_color."
            }
            .uni-shop-product-main-body .woocommerce-pagination .page-numbers li span.current{
                ".$color_shop_style2_color."
            }
            .uni-shop-product-main-body ul li .add_to_cart_button{
                ".$color_shop_style2.";
                ".$color_shop_style3_color."
            }
            .post-type-archive-product .uni-shop-product-main-body ul li span.woocommerce-Price-amount.amount,.single-product .uni-shop-product-main-body ul li span.woocommerce-Price-amount.amount{
                ".$color_shop_style2_color."
            }
            .uni-shop-product-main-body ul li .onsale{
                ".$color_shop_style2.";
                ".$color_shop_style3_color."
            }
            
            .uni-shop-product-main-body .products li a h2{
                ".$color_shop_style1."
            }
            
            .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button{
                ".$color_sidebars_style6_back.";
                ".$color_sidebars_style7."
            }
            
            .woocommerce .widget_price_filter .ui-slider .ui-slider-handle{
                ".$color_sidebars_style6_back."
            }
            
            .woocommerce .widget_price_filter .ui-slider .ui-slider-range{
                ".$color_sidebars_style6_back."         
            }
   
            .woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content{
                ".$color_sidebars_style_back."
            }
            .widget_products span.woocommerce-Price-amount.amount{
                ".$color_sidebars_style6."
            }
            
            .widget-area p{
                ".$color_sidebars_style_border."
            }
            .widget-area .vk-title:hover{
                ".$color_sidebars_style5."
            }
            .widget ul li:hover a{
                ".$color_sidebars_style5."
            }
            .widget ul li:hover a:after{
                ".$color_sidebars_style5."
            }
            .widget ul li a:hover{
                ".$color_sidebars_style5.";
            }
            .widget.widget_search .search-field{
                ".$color_sidebars_style3.";
                ".$color_sidebars_style4."
            }
            .widget.widget_search .search-field::placeholder{
                ".$color_sidebars_style3."
            }
            .widget.widget_search .search-form{
                ".$color_sidebars_style4."
            }
            .widget#search-2:after{
                ".$color_sidebars_style3."
            }
            
            .widget-area p,.price_slider_amount .price_label{
                ".$color_sidebars_style3.";
            }
            .widget ul li:hover{
                ".$color_sidebars_style5_border."
            }
            .widget ul li:hover a{
                ".$color_sidebars_style5_border."
            }
            .widget ul li{
                ".$color_sidebars_style3_border.";
            }
            .widget ul li a{
                ".$color_sidebars_style3."
            }
            .widget ul li{
                ".$color_sidebars_style_border."
            }
            .widget-area .vk-title,.product-title{
                ".$color_sidebars_style2."
            }
            .widget .widget-title{
                ".$color_sidebars_style1."
            }
            .vk-footer .widget_nav_menu li::before{
                ".$color_footer_style3."
            }
            .vk-social-link li a{
                ".$color_footer_style3."
            }
            .vk-footer .vk-office li{
                ".$color_footer_style3."
            }
            .vk-footer .widget_nav_menu li a{
                ".$color_footer_style3."
            }
            .vk-footer p{
                ".$color_footer_style3."
            }
            .vk-footer .vk-heading{
                ".$color_footer_style2.";
            }
            .vk-footer h2{
                ".$color_footer_style2.";
            }
            .vk-social-link li a:hover{
                ".$color_footer_style1."
            }
            .vk-footer .widget_nav_menu li:hover::before{
                ".$color_footer_style1."
            }
            .vk-footer .widget_nav_menu li a:hover{
                ".$color_footer_style1."
            }
            .vk-footer .vk-office li i{
                ".$color_footer_style1.";
            }
            .vk-footer .vk-text-color-yellow-1{
                ".$color_footer_style1."
            }
            #scrollUp{
                ".$back_top_top_color.";".$icon_back_top_top_color."
            }
            #scrollUp:hover{
                ".$back_top_top_color_hover.";".$icon_back_top_top_color_hover."
            }
          
            .vk-navbar-nav li a:not(.slicknav_item), .vk-navbar-nav li span:not(.slicknav_item){
                ".$typography_main_menu_header_font_family.";
                ".$typography_main_menu_header_text_transform.";                
                ".$typography_main_menu_header_body.";
                ".$typography_main_menu_header_font_size.";
            }
            .vk-navbar-nav li a:hover, .vk-navbar-nav li a:focus, .vk-navbar-nav li span:hover, .vk-navbar-nav li span:focus{
                ".$typography_main_menu_header_color_hover.";
            }
            .vk-header-two-nav .vk-navbar-header .vk-divider.right{
                ".$border_header."
            }
            .vk-header-two-nav .vk-navbar-header .vk-divider.left{
                ".$border_header."
            }
            .shopping-cart .number-item{
                ".$color_number_cart_header_top.";".$background_number_cart_header_top."
            }
            .shopping-cart{
                ".$color_cart_header_top."
            }
            .item-search i{
                ".$color_search_header_top."
            }
            .item-search i:hover{
                ".$color_search_hover_header_top."
            }
            .item-search{
                ".$color_search_header_top."
            }
            
            .item-search:hover{
                ".$color_search_hover_header_top."
            }
            .vk-header-left-menu .quick-address li:nth-child(3){
                ".$color_time_header_top."
            }
            
            .vk-header-left-menu .quick-address li:nth-child(3) i{
                ".$color_icon_time_header_top."
            }
            
            .vk-header-left-menu .quick-address li:nth-child(2) a{
                ".$color_email_header_top."
            }
            
            .vk-header-left-menu .quick-address li:nth-child(2) i{
                ".$color_icon_email_header_top."
            }
            
            .vk-header-left-menu .quick-address li:nth-child(1){
                ".$color_phone_header_top."
            }
            
            .vk-header-left-menu .quick-address li:nth-child(1) i{
                ".$color_icon_phone_header_top."
            }
            
            .vk-header-left-menu .vk-navbar-nav li a:not(.slicknav_item):hover, .vk-header-left-menu .vk-navbar-nav li span:not(.slicknav_item):hover{
                ".$typography_main_menu_header_color_hover."
            }
            .vk-header-left-menu .vk-navbar-nav li a:not(.slicknav_item), .vk-header-left-menu .vk-navbar-nav li span:not(.slicknav_item){
                ".$typography_main_menu_header_color.";
                ".$typography_main_menu_header_text_transform.";
                ".$typography_main_menu_header_font_family.";
                ".$typography_main_menu_header_body.";
                ".$typography_main_menu_header_font_size.";
       
            }
            .vk-header-transparent .shopping-cart .number-item{
                ".$color_number_cart_header_top.";".$background_number_cart_header_top."
            }
            .vk-header-transparent .shopping-cart{
                ".$color_cart_header_top."
            }
            .vk-header-top .quick-address li:nth-child(3){
                ".$color_time_header_top."
            }
            .vk-header-top .quick-address li:nth-child(2){
                ".$color_email_header_top."
            }
            .vk-header-top .quick-address li:nth-child(1){
                ".$color_phone_header_top."
            }
           
            li.back:hover i{
                ".$header2_style2."
            }
            li.back i{
                ".$header2_style1."
            }
            .vk-header-left-menu .vk-navbar-nav li .sub-menu li,.vk-header-left-menu .vk-navbar-nav li .sub-menu li a{
                ".$header2_style5."
            }
            .vk-header-left-menu .vk-navbar-nav li .child{
                border:none !important;
            }
            .vk-header-left-menu .vk-navbar-nav li .sub-menu li a:hover{
                ".$header2_style2."
            }
            .vk-header-left-menu .vk-navbar-nav li .sub-menu li a{
                ".$header2_style1."
            }
            .vk-header-left-menu .vk-navbar-nav li .sub-menu li a:hover{
                ".$hover_sub_menu_header ."
            }
            .vk-navbar-nav.child li a:hover{
                ".$hover_sub_menu_header."
            }
            
            .vk-navbar-nav.child{
                ".$border_top_sub_menu_header."
            }
            .page-id-2345 .vk-header1 .child li a{
                ".$color_sub_menu_header."
            }
            .page-id-2345 .vk-header1 .child li a:hover{
                ".$hover_sub_menu_header."
            }
            .vk-navbar-nav.child li:hover {
                ".$background_hover_sub_menu."
            }
            
            .vk-header-transparent .vk-navbar-nav > li > span:hover, .vk-header-transparent .vk-navbar-nav > li > span:focus, .vk-header-transparent .vk-navbar-nav > li > a:hover, .vk-header-transparent .vk-navbar-nav > li > a:focus{
                ".$typography_main_menu_header_color_hover."
            }
            .vk-header-transparent .vk-navbar-nav > li > span, .vk-header-transparent .vk-navbar-nav > li > a{
                ".$typography_main_menu_header_font_family.";
                ".$typography_main_menu_header_body.";
                ".$typography_main_menu_header_font_size.";
                ".$typography_main_menu_header_text_transform.";
                ".$typography_main_menu_header_color."
            }

            .item-search{
                ".$display_search.";
            }
            
            .shopping-cart{
                ".$display_cart.";
            }
            
            h1{
                ".$heading1_font_size."; ".$heading1_line_height."; ".$heading1_letter_spacing."; ".$heading1_text_transform."; ".$heading1_color.";
            }
            
            h2{
                ".$heading2_font_size."; ".$heading2_line_height."; ".$heading2_letter_spacing."; ".$heading2_text_transform."; ".$heading2_color.";
            }
            
            h3{
                ".$heading3_font_size."; ".$heading3_line_height."; ".$heading3_letter_spacing."; ".$heading3_text_transform."; ".$heading3_color.";
            }
            
            h4{
                ".$heading4_font_size."; ".$heading4_line_height."; ".$heading4_letter_spacing."; ".$heading4_text_transform."; ".$heading4_color.";
            }
            
            h5{
                ".$heading5_font_size."; ".$heading5_line_height."; ".$heading5_letter_spacing."; ".$heading5_text_transform."; ".$heading5_color.";
            }
            
            h6{
                ".$heading6_font_size."; ".$heading6_line_height."; ".$heading6_letter_spacing."; ".$heading6_text_transform."; ".$heading6_color.";
            }
            
            body{
                ".$body_font_family.";".$body_typography_body.";".$body_font_size.";".$body_color.";
            }
            #scrollUp{
                ".$garenal_back_to_top.";
            }
            
            .vk-left-menu .vk-content, .vk-left-menu .vk-footer{
                ".$footer_padding."
            }
            
            .vk-footer .vk-list.vk-latest-news{
                ".$footer_width."
            }

            .vk-background-overlay._80{
                ".$background_color_page_title."
            }  
                      
            .vk-banner{
                ".$background_image_page_title.";
                background-size:cover !important;
            }
            
            .vk-breadcrumb{
                ".$hide_breadcrump_page_title."
            }
            .vk-header-two-nav ul.sub-menu.vk-navbar-nav.child li a{
                ".$color_sub_menu_header."
                ".$color_sub_menu_header."
            }
            .vk-header-two-nav ul.sub-menu.vk-navbar-nav.child li a:hover{
                ".$hover_sub_menu_header."
            }
            .vk-navbar-nav.child li a{
                ".$color_sub_menu_header."
            }
            
            
            
            .spinner1{
                ".$_loading_page_color.";
            }
            
            .spinner2 .double-bounce1, .double-bounce2{
                ".$_loading_page_color.";
            }
            
            .spinner3 > div{
                ".$_loading_page_color.";
            }
            
            .spinner4 .cube1, .cube2{
                ".$_loading_page_color.";
            }
            
            .spinner5{
                ".$_loading_page_color.";
            }
            
            .spinner6 .dot1, .dot2{
                ".$_loading_page_color.";
            }
            
            .spinner7 > div{
                ".$_loading_page_color.";
            }
            
            .sk-circle8 .sk-child:before{
                ".$_loading_page_color.";
            }
            
            .sk-cube-grid9 .sk-cube{
                ".$_loading_page_color.";
            }
            
            .sk-fading-circle10 .sk-circle:before{
                ".$_loading_page_color.";
            }
            
            .sk-folding-cube11 .sk-cube:before{
                ".$_loading_page_color.";
            }
        </style>";
}


function google_fonts_breacrumb(){

    $typography_body = get_theme_mod( 'typography_body', array() );
    wp_register_style( 'font_body',  'https://fonts.googleapis.com/css?family='.$typography_body['font-family'].':100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i', 'all' );
    wp_enqueue_style( 'font_body' );

}

add_action( 'wp_enqueue_scripts', 'google_fonts_breacrumb' );
?>