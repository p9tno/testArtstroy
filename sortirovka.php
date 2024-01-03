<?php

// is_page_template(['template-design.php'])

if( have_rows('sortirovka_i_otobrazhenie') ):
    while ( have_rows('sortirovka_i_otobrazhenie') ) : the_row();
    
    if ( get_row_layout() == 'quiz' ) {
        get_template_part( 'template-parts/quiz/content');
    }
    
    if ( get_row_layout() == 'projects' ) {
        get_template_part( 'template-parts/sections/section', 'projects' ); 
    }
    
    if ( get_row_layout() == 'muchMore' ) {
        get_template_part( 'template-parts/sections/section', 'muchMore' ); 
    }
    
    if ( get_row_layout() == 'details' ) {
        get_template_part( 'template-parts/sections/section', 'details' );
    }
    
    if ( get_row_layout() == 'facts' ) {
        get_template_part( 'template-parts/sections/facts/content', 'facts' ); 
    }
    
    if ( get_row_layout() == 'facts2' ) {
        get_template_part( 'template-parts/sections/facts/content', 'facts2' ); 
    }
    
    
    if ( get_row_layout() == 'facts3' ) {
        get_template_part( 'template-parts/sections/facts/content', 'facts3' ); 
    }
    
    if ( get_row_layout() == 'docount' ) {
        get_template_part( 'template-parts/sections/section', 'docount' );
    }
    
    if ( get_row_layout() == 'personalManager' ) {
        get_template_part( 'template-parts/sections/section', 'personalManager' );
    }
    
    if ( get_row_layout() == 'information' ) {
        get_template_part( 'template-parts/sections/section', 'information' );
    }
    
    if ( get_row_layout() == 'gifts' ) {
        get_template_part( 'template-parts/sections/section', 'gifts' );
    }
    
    if ( get_row_layout() == 'founder' ) {
        get_template_part( 'template-parts/sections/section', 'founder' ); 
    }
    
    if ( get_row_layout() == 'certificate' ) {
        get_template_part( 'template-parts/sections/section', 'certificate' ); 
    }
    
    if ( get_row_layout() == 'team' ) {
        get_template_part( 'template-parts/sections/section', 'team' );
    }
    
    if ( get_row_layout() == 'teamPage' ) {
        get_template_part( 'template-parts/sections/section', 'teamPage' );
    }
    
    if ( get_row_layout() == 'honest' ) {
        get_template_part( 'template-parts/sections/section', 'honest' );
    }
    
    
    if ( get_row_layout() == 'advantage' ) {
        get_template_part( 'template-parts/sections/section', 'advantage' ); 
    }

    if ( get_row_layout() == 'advantage2' ) {
        get_template_part( 'template-parts/sections/section', 'advantage2' ); 
    }
    
    if ( get_row_layout() == 'location' ) {
        get_template_part( 'template-parts/sections/section', 'location' ); 
    }
    
    if ( get_row_layout() == 'reviews' ) {
        get_template_part( 'template-parts/sections/section', 'reviews' ); 
    }
    
    if ( get_row_layout() == 'logos' ) {
        get_template_part( 'template-parts/sections/section', 'logos' ); 
    }

    if ( get_row_layout() == 'logosPage' ) {
        get_template_part( 'template-parts/sections/section', 'logosPage' );
    }
    
    if ( get_row_layout() == 'faq' ) {
        get_template_part( 'template-parts/sections/section', 'faq' );
    }
    
    if ( get_row_layout() == 'consultation' ) {
        get_template_part( 'template-parts/sections/section', 'consultation' );
    }

    if ( get_row_layout() == 'consultationSoc' ) {
        get_template_part( 'template-parts/sections/section', 'consultationSoc' );
    }
    
    if ( get_row_layout() == 'content' ) {
        get_template_part( 'template-parts/sections/section', 'content' );
    }
    
    if ( get_row_layout() == 'row' ) {
        get_template_part( 'template-parts/sections/section', 'row' );
    }
        
    if ( get_row_layout() == 'figuresPage' ) {
        get_template_part( 'template-parts/sections/section', 'figuresPage' );
    }
    
    if ( get_row_layout() == 'documents' ) {
        get_template_part( 'template-parts/sections/section', 'documents' );
    }
    
    if ( get_row_layout() == 'documents2' ) {
        get_template_part( 'template-parts/sections/section', 'documents2' );
    }
    
    if ( get_row_layout() == 'stages' ) {
        get_template_part( 'template-parts/sections/section', 'stages' );
    }
    
    if ( get_row_layout() == 'stages2' ) {
        get_template_part( 'template-parts/sections/section', 'stages2' );
    }
    
    if ( get_row_layout() == 'price' ) {
        get_template_part( 'template-parts/sections/section', 'price' );
    }
    
    if ( get_row_layout() == 'performance' ) {
        get_template_part( 'template-parts/sections/section', 'performance' );
    }
    
    if ( get_row_layout() == 'presentation' ) {
        if ( is_page_template(['template-remont.php']) ) { get_template_part( 'template-parts/sections/section', 'presentationRemont' ); }
        elseif ( is_page_template(['template-design.php']) ) { get_template_part( 'template-parts/sections/section', 'presentationDesign' ); }
        elseif ( is_page_template(['template-construction.php']) ) { get_template_part( 'template-parts/sections/section', 'presentationConstruction' ); }
        else { get_template_part( 'template-parts/sections/section', 'presentation' ); }
    }
    
    if ( get_row_layout() == 'presentation2' ) {
        get_template_part( 'template-parts/sections/section', 'presentationOneClick' ); // скачать в один клик
    }
    
    if ( get_row_layout() == 'fourthSlider' ) {
        get_template_part( 'template-parts/sections/section', 'fourthSlider' ); // ourhouses
    }
    
    if ( get_row_layout() == 'largeSlider' ) {
        get_template_part( 'template-parts/sections/section', 'largeSlider' ); 
    }
    
    if ( get_row_layout() == 'mortgage' ) {
        get_template_part( 'template-parts/sections/section', 'mortgage' ); 
    }
        
    if ( get_row_layout() == 'portfolio' ) {
        get_template_part( 'template-parts/sections/section', 'portfolio' ); 
    }

    if ( get_row_layout() == 'servicesBlock' ) {
        get_template_part( 'template-parts/sections/section', 'task' ); 
    }
    
    endwhile;
endif;