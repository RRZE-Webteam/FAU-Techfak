<?php

/* 
 * Default Constants and values for FAU THeme
 */
$defaultoptions = array(
    'js-version'		    => '1.0',
    'optionpage-tab-default'	    => 'startseite',
    'content-width'		    => 770,
    'src-fallback-slider-image'	    => get_template_directory_uri().'/img/slider-fallback.jpg',
    'slider-category'		    => 'header',
    'slider-catid'		    => 0,
    
    'default_slider_excerpt_length' => 240,
    'start_header_count'	    => 5,
    'start_max_newscontent'	    => 5,
    'start_max_newspertag'	    => 1,    
    'start_prefix_tag_newscontent'  => 'startseite',
    'start_link_news_cat'	    => 0,    
    'start_link_news_show'	    => 1,
    'start_link_news_linktitle'	    => __('Mehr Meldungen','fau'),
    'start_link_videoportal_socialmedia'    => true,
    'start_title_videoportal_socialmedia'   => __('Alle Videos','fau'),
    'default_submenuthumb_src'	    =>  get_template_directory_uri().'/img/default-submenuthumb.png',
    'default_submenu_spalten'	    => 4,
    'default_submenu_entries'	    => 5,
    'menu_fallbackquote_show_excerpt'		=> 1,
    'menu_fallbackquote_excerpt_length'	=> 240,  
    'start_topevents_tag'	    => 'top',
    'start_topevents_max'	    => 1,
    'default_topevent_thumb_src'    => get_template_directory_uri().'/img/default-topeventthumb.png',
    'default_topevent_excerpt_length' => 100,

    /* Image Sizes */
    
    /* Default Thumb Size */
    'default_thumb_width'	    => 300,
    'default_thumb_height'	    => 150,
    'default_thumb_crop'	    => false,
    
    /* Image Sizes for Slider, Name: hero */
    'slider-image-width'	    => 1260,
    'slider-image-height'	    => 350,    
    'slider-image-crop'		    => true,
    
    /* Thumb for Main menu - Name: portalmenu-thumb */
    'default_mainmenuthumb_width'    => 370,
    'default_mainmenuthumb_height'   => 185,
    'default_mainmenuthumb_crop'    => false,
    
    /* Thumb for Image Menus in Content - Name: page-thumb */
    'default_submenuthumb_width'    => 220,
    'default_submenuthumb_height'   => 110,    
    
    /* Thumb of Topevent in Sidebar - Name: topevent-thumb */
    'default_topevent_thumb_width'  => 140,
    'default_topevent_thumb_height' => 90,
    'default_topevent_thumb_crop'   => true,  
    
    /* Thumb for Posts in Lists - Name: post-thumb */
    'default_postthumb_width'	    => 220,
    'default_postthumb_height'	    => 147,
    'default_postthumb_crop'	    => false,
   
     /* Thumb for Posts, displayed in post/page single display - Name: post */
    'default_post_width'	    => 300,
    'default_post_height'	    => 200,
    'default_post_crop'		    => false, 
    
     /* Thumb for person-type; small for sidebar - Name: person-thumb */
    'default_person_thumb_width'    => 60,
    'default_person_thumb_height'   => 80,
    'default_person_thumb_crop'	    => true, 
     
     /* Thumb for person-type; small for content - Name: person-thumb-bigger */
    'default_person_thumb_bigger_width'    => 90,
    'default_person_thumb_bigger_height'   => 120,
    'default_person_thumb_bigger_crop'	    => true,     

     /* Thumb for person-type; small for content - Name: person-thumb-page */
    'default_person_thumb_page_width'    => 200,
    'default_person_thumb_page_height'   => 300,
    'default_person_thumb_page_crop'	 => true,         
    
    /* Thumb for Logos (used in carousel) - Name: logo-thumb */
    'default_logo_carousel_width'	=> 140,
    'default_logo_carousel_height'	=> 110,
    'default_logo_carousel_crop'	=> true,      
  
    /* Images for gallerys - Name: gallery-full */
    'default_gallery_full_width'	=> 940,
    'default_gallery_full_height'	=> 470,
    'default_gallery_full_crop'		=> false,     
    
    /* Thumbs for gallerys - Name: gallery-thumb */
    'default_gallery_thumb_width'	=> 120,
    'default_gallery_thumb_height'	=> 80,
    'default_gallery_thumb_crop'	=> true,     

    /* Grid-Thumbs for gallerys - Name: gallery-grid */
    'default_gallery_grid_width'	=> 145,
    'default_gallery_grid_height'	=> 120,
    'default_gallery_grid_crop'		=> false,    
    
     /* 2 column Imagelists for gallerys - Name: image-2-col */
    'default_gallery_grid_width'	=> 300,
    'default_gallery_grid_height'	=> 200,
    'default_gallery_grid_crop'		=> true,        

    /* 4 column Imagelists for gallerys - Name: image-4-col */
    'default_gallery_grid_width'	=> 140,
    'default_gallery_grid_height'	=> 70,
    'default_gallery_grid_crop'		=> true,   
    
    
    'breadcrumb_root'			=> 'med.fau.de',
    'breadcrumb_delimiter'		=> ' <span>/</span>',
    'breadcrumb_beforehtml'		=> '<span class="active">', // '<span class="current">'; // tag before the current crumb
    'breadcrumb_afterhtml'		=> '</span>',
    'breadcrumb_uselastcat'		=> true,
    
    'fauhome_url'		    => 'https://www.fau.de',
    'fauhome_title'		    => __('Friedrich-Alexander-Universität (FAU)','fau'),
    'fauhome_linktext'		    => __('Zur FAU Seite','fau'),
    
    'socialmedia'		    => 1,
    'active_socialmedia_footer'	    => array(1),  
    'socialmedia_buttons_title'	    => __('FAUSocial','fau'),
    
    'menu_pretitle_portal'	    => __('Portal', 'fau'),
    'menu_aftertitle_portal'	    => '',
    
   'contact_address_name'	    => __('Friedrich-Alexander-Universität', 'fau'),
   'contact_address_name2'	    => __('Erlangen-Nürnberg', 'fau'),
   'contact_address_street'	    => __('Schlossplatz 4', 'fau'),
   'contact_address_plz'	    => __('91054', 'fau'),
   'contact_address_ort'	    => __('Erlangen', 'fau'),
   
    'contact_address_country'	    => '',
    'display_nojs_notice'	    => 0,
    'display_nojs_note'		    => __('JavaScript wurde deaktiviert oder Ihr Browser unterstützt kein JavaScript. Alle Inhalte sind erreichbar, jedoch ist die Bedienung teilweise umständlicher.','fau'),
    'google-site-verification'	    => '',
    'default_mainmenu_number'	    => 4,
   
    'default_logo_src'		    => get_template_directory_uri().'/img/logo-fau.png',
    'default_logo_height'	    => 65,
    'default_logo_width'	    => 240,
    
    'default_excerpt_morestring'    => '...',
    'default_excerpt_length'	    => 300,
    'default_anleser_excerpt_length'=> 300,
    'default_search_excerpt_length' => 300,
    
    'default_postthumb_src'	    => get_template_directory_uri().'/img/default-postthumb.png',

    'default_postthumb_always'	    => 1,


    'custom_excerpt_allowtags'	    => 'br',
    'url_banner-ad-notice'	    => 'https://www.fau.de/patente-gruendung-wissenstransfer/service-fuer-unternehmen/werben/',
    'title_banner-ad-notice'	    => __( 'Werbung', 'fau' ),
    
    'title_hero_post_categories'    =>  __( 'FAU aktuell', 'fau' ),
    'title_hero_post_archive'	    =>  __( 'FAU aktuell', 'fau' ),
    'title_hero_search'		    =>  __( 'Suche', 'fau' ),
    'title_hero_events'		    =>  __( 'Veranstaltungskalender','fau'),
    
    'advanced_beitragsoptionen'		=> true,
    'advanced_topevent'			=> true,
    'advanced_activateads'		=> true,
    'galery_link_original'		=> true,

    'advanced_post_active_subtitle'	=> true,

    'advanced_page_sidebar_titleabove'	=> true,
    'advanced_page_sidebar_titlebelow'	=> true,    
    'advanced_page_sidebar_useeditor_textabove'	=> false,
    'advanced_page_sidebar_useeditor_textbelow'	=> false,

    'advanced_page_sidebar_personen_title'	=> __('Kontakt','fau'), 
    'advanced_page_sidebar_linkblock1_number'	=> 3, 
    'advanced_page_sidebar_linkblock2_number'	=> 3,
    'advanced_page_sidebar_linkblock1_title'	=> __('Weitere Informationen','fau'), 
    'advanced_page_sidebar_linkblock2_title'	=> __('Sonstiges','fau'), 
    'advanced_page_sidebar_order_personlinks'	=> 0,
	// 0 = Kontakte, Links
	// 1 = Links, Kontakte
    'advanced_activate_post_comments'	=> false,
    'advanced_comments_notes_before'	    => __( 'Ihre E-Mail-Adresse wird nicht angezeigt. Verpflichtende Felder werden mit dem folgenden Zeichen markiert: <span class="required">*</span>', 'fau' ),
    'advanced_comments_disclaimer'          => __('Hinweis: Die Kommentare wurden von Lesern geschrieben und spiegeln deren persönliche Meinung wieder. Sie müssen nicht die Meinung der Universität oder der Fakultät repräsentieren.', 'fau' ),
    'advanced_comments_avatar'		    => false,
    

    'post_display_category_below'	=> true,
    'search_display_post_thumbnails'	=> true,
    'search_display_post_cats'		=> true,
    'search_display_continue_arrow'		=> true,
    'search_display_excerpt_morestring'		=> '...',
    
    'plugin_fau_person_headline'	=> true,
    'plugin_fau_person_malethumb'	=> get_template_directory_uri().'/img/platzhalter-mann.png',
    'plugin_fau_person_femalethumb'	=> get_template_directory_uri().'/img/platzhalter-frau.png',
    
    'index_synonym_listall'		=> true,
    'index_glossary_listall'		=> true,
    

     
); 


/*
 * Social Media 
 */
$default_socialmedia_liste = array(
    'delicious' => array(
	'name' => 'Delicious',
	'content'  => '',
	'active' => 0,
    ),
    'diaspora' => array(
	'name' => 'Diaspora',
	'content'  => '',
	'active' => 0,
    ),
    'facebook' => array(
	'name' => 'Facebook',
	'content'  => 'https://de-de.facebook.com/Uni.Erlangen.Nuernberg',
	'active' => 1,
    ),
    'twitter' => array(
	'name' => 'Twitter',
	'content'  => 'https://twitter.com/UniFAU',
	'active' => 1,
    ),
    'gplus' => array(
	'name' => 'Google Plus',
	'content'  => '',
	'active' => 0,
    ),
    'flattr' => array(
	'name' => 'Flattr',
	'content'  => '',
	'active' => 0,
    ),
    'flickr' => array(
	'name' => 'Flickr',
	'content'  => '',
	'active' => 0,
    ),
  
    'identica' => array(
	'name' => 'Identica',
	'content'  => '',
	'active' => 0,
    ),
    'itunes' => array(
	'name' => 'iTunes',
	'content'  => '',
	'active' => 0,
    ),
    'skype' => array(
	'name' => 'Skype',
	'content'  => '',
	'active' => 0,
    ),
    
    'youtube' => array(
	'name' => 'YouTube',
	'content'  => '',
	'active' => 0,
    ),
    'xing' => array(
	'name' => 'Xing',
	'content'  => 'https://www.xing.com/net/alumnifau',
	'active' => 1,
    ),
    'tumblr' => array(
	'name' => 'Tumblr',
	'content'  => '',
	'active' => 0,
    ),
    'github' => array(
	'name' => 'GitHub',
	'content'  => '',
	'active' => 0,
    ),
    'appnet' => array(
	'name' => 'App.Net',
	'content'  => '',
	'active' => 0,
    ),
    'feed' => array(
	'name' => 'RSS Feed',
	'content'  => get_bloginfo( 'rss2_url' ),
	'active' => 1,
    ),
    'friendica' => array(
	'name' => 'Friendica',
	'content'  => '',
	'active' => 0,
    ),
    'pinterest' => array(
	'name' => 'Pinterest',
	'content'  => 'http://www.pinterest.com/unifau/',
	'active' => 1,
    ),
); 

/* 
 * Default Links for Topmenu , can be overwritten bei menu  
 */
$default_toplink_liste = array(    
    'link1'  => array(
	'name'	    => __('UnivIS', 'fau' ),
	'content'  => 'http://univis.fau.de/',
	'active'    => 1,
    ),
    'link2'  => array(
	'name'	    => __('Lageplan', 'fau' ),
	'content'  => 'https://karte.fau.de/',
	'active'    => 0,
    ),
    'link3'  => array(
	'name'	    => __('Universitätsklinikum', 'fau' ),
	'content'  => 'http://www.uk-erlangen.de/',
	'active'    => 1,
    ),
  
);

/* 
 * Default Link List for Submenus , can be overwritten bei Menu  
 */
$default_link_liste = array( 
	
	'centers' => array(    
	    '_title'	=> __('Einrichtungen','fau'),
	    'link1'  => array(
		'name'	    => __('Universitätsbibliothek', 'fau' ),
		'content'  => 'http://www.ub.fau.de/',
	    ),
	    'link2'  => array(
		'name'	    => __('Rechenzentrum', 'fau' ),
		'content'  => 'https://www.rrze.fau.de/',
		'class'	    => 'rwfak',
	    ),
	    'link3'  => array(
		'name'	    => __('Sprachenzentrum', 'fau' ),
		'content'  => 'http://www.sz.uni-erlangen.de/',
		'class'	    => 'medfak',
	    ),
	    'link4'  => array(
		'name'	    => __('Graduiertenschule', 'fau' ),
		'content'  => 'http://www.promotion.fau.de/',
		'class'	    => 'natfak',
	    ),
	  
	),
	
	'infos' => array(    
	    '_title'	=> __('Informationen für','fau'),
	  
	    'link1'  => array(
		'name'	    => __('Studierende', 'fau' ),
		'content'  => 'https://www.fau.de/studium/',
	    ),
	  
	    'link2'  => array(
		'name'	    => __('Schülerinnen und Schüler', 'fau' ),
		'content'  => 'https://www.fau.de/schulportal-der-fau/',
	    ),	
	    'link3'  => array(
		'name'	    => __('Alumni', 'fau' ),
		'content'  => 'https://www.fau.de/alumni/',
	    ),	
	    'link4'  => array(
		'name'	    => __('Unternehmen', 'fau' ),
		'content'  => 'https://www.fau.de/patente-gruendung-wissenstransfer/service-fuer-unternehmen/',
	    ),	
	    	
	 
	),
	'meta' => array(
	    'link1'  => array(
		'name'	    => __('Mein Campus', 'fau' ),
		'content'  => 'https://campus.fau.de/',
	    ),
	    'link2'  => array(
		'name'	    => __('UnivIS', 'fau' ),
		'content'  => 'http://univis.fau.de/',
	    ),
	    'link3'  => array(
		'name'	    => __('Anfahrt und Lageplan', 'fau' ),
		'content'  => 'http://karte.fau.de/',
	    ),
	   
	),
	'techmenu' => array(    
	    'link1'  => array(
		'name'	    => __('Stellenangebote', 'fau' ),
		'content'  => 'https://www.fau.de/universitaet/stellen-praktika-und-jobs/',
	    ),
	    'link2'  => array(
		'name'	    => __('Presse', 'fau' ),
		'content'  => 'https://www.fau.de/presseportal-der-fau/',
	    ),
	    'link3'  => array(
		'name'	    => __('Intranet', 'fau' ),
		'content'  => 'https://www.fau.de/intranet/',
	    ),	
	    'link4'  => array(
		'name'	    => __('Impressum', 'fau' ),
		'content'  => 'https://www.fau.de/impressum/',
	    ),	
	),
);


$default_header_logos = array(
    'fau' => array(
	    'url'           => '%s/img/logo-fau.png',
	    'thumbnail_url' => '%s/img/logo-fau.png',
	    'description'   => _x( 'FAU', 'Offizielles FAU-Logo', 'fau' )
    ),
    'fak-med' => array(
	    'url'           => '%s/img/logo-fak-med.png',
	    'thumbnail_url' => '%s/img/logo-fak-med.png',
	    'description'   => _x( 'FAKMED', 'Offizielles Logo der Medizin', 'fau' )
    ),
    'fak-nat' => array(
	    'url'           => '%s/img/logo-fak-nat.png',
	    'thumbnail_url' => '%s/img/logo-fak-nat.png',
	    'description'   => _x( 'FAKNAT', 'Offizielles Logo der Naturwissenschaft', 'fau' )
    ),
    'fak-phil' => array(
	    'url'           => '%s/img/logo-fak-phil.png',
	    'thumbnail_url' => '%s/img/logo-fak-phil.png',
	    'description'   => _x( 'FAKPHIL', 'Offizielles Logo der Philosophischen Fakultät', 'fau' )
    ),
    'fak-rechtswiwi' => array(
	    'url'           => '%s/img/logo-fak-rechtswiwi.png',
	    'thumbnail_url' => '%s/img/logo-fak-rechtswiwi.png',
	    'description'   => _x( 'FAKRECHTSWIWI', 'Offizielles Logo der Rechts- und Wirtschaftswissenschaftlichen Fakultät', 'fau' )
    ),
    'fak-tech' => array(
	    'url'           => '%s/img/logo-fak-tech.png',
	    'thumbnail_url' => '%s/img/logo-fak-tech.png',
	    'description'   => _x( 'FAKTECH', 'Offizielles Logo der Technischen Fakultät', 'fau' )
    )
);

 $categories=get_categories(array('orderby' => 'name','order' => 'ASC'));
 foreach($categories as $category) {
     if (!is_wp_error( $category )) {
	$currentcatliste[$category->cat_ID] = $category->name.' ('.$category->count.' '.__('Einträge','fau').')';
     }
 }        

$setoptions = array(
   'fau_theme_options'   => array(
       
       
        'startseite'   => array(
           'tabtitle'   => __('Startseite', 'fau'),
           'fields' => array(
                            
	       'newsbereich'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Nachrichtenbereich', 'fau' ),                      
              ),
	       
	       'start_max_newscontent'=> array(
                  'type'    => 'select',
                  'title'   => __( 'Zahl der News (Gesamt)', 'fau' ),
                  'label'   => __( 'Anzahl der News auf der Startseite unterhalb des Sliders', 'fau' ),
		   'liste'   => array(2 => 2,3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7),
                  'default' => $defaultoptions['start_max_newscontent'],
		   'parent'  => 'newsbereich'
              ),  
	        'start_prefix_tag_newscontent' => array(
                  'type'    => 'text',
                  'title'   => __( 'Sortierungs-Tag', 'fau' ),
                  'label'   => __( 'Angabe des Tag-Prefixes, mit dem News auf der Startseite gezeigt werden. Im Artikel wird dann dieser Tag plus eine Nummer vergeben um die Sortierung festzusetzen. Beispiel bei einem gewählten Tag-Prefix "Startseite": Erster Artikel mit Tag "Startseite1", Zweiter Artikel mit Tag "Startseite2"', 'fau' ),               
                  'default' => $defaultoptions['start_prefix_tag_newscontent'],
		     'parent'  => 'newsbereich'
              ),  
	       
	       
	       'start_max_newspertag'=> array(
                  'type'    => 'select',
                  'title'   => __( 'News pro gleichem Sortierungs-Tag', 'fau' ),
                  'label'   => __( 'Anzahl der Artikel mit dem vorgegebene Prefix-Tag (Reihenfolge).', 'fau' ),
		   'liste'   => array(1 => 1, 2 => 2,3 => 3, 4 => 4, 5 => 5),
                  'default' => $defaultoptions['start_max_newspertag'],
		    'parent'  => 'newsbereich'
              ),  
	       'start_link_news_show' => array(
                  'type'    => 'bool',
                  'title'   => __( 'News verlinken', 'fau' ),
                  'label'   => __( 'Weitere Meldungen verlinken.', 'fau' ),               
                  'default' => $defaultoptions['start_link_news_show'],
		     'parent'  => 'newsbereich'
              ),  
		'start_link_news_cat' => array(
                  'type'    => 'select',
                  'title'   => __( 'News-Kategorie', 'fau' ),
                  'label'   => __( 'Unter den News erscheint ein Link auf eine Übersicht der News. Hier wird die Kategorie dafür ausgewählt. Für den Fall, dass keine Artikel mit einem Prefix-Tag ausgestattet sind, wird diese Kategorie auch bei der Anzeige der ersten News verwendet.', 'fau' ),
                  'liste'   => $currentcatliste,
                  'default' => $defaultoptions['start_link_news_cat'],
		     'parent'  => 'newsbereich'
              ), 
	        'start_link_news_linktitle' => array(
                  'type'    => 'text',
                  'title'   => __( 'Linktitel', 'fau' ),
                  'label'   => __( 'Verlinkungstitel für weitere Meldungen.', 'fau' ),               
                  'default' => $defaultoptions['start_link_news_linktitle'],
		     'parent'  => 'newsbereich'
              ),  
	       
	    'default_postthumb_always' => array(
		    'type'    => 'select',
		    'title'   => __( 'Immer ein Artikelbild anzeigen', 'fau' ),
		    'label'   => __( 'Immer ein Artikelbild zu einer Nachricht zeigen. Wenn kein Artikelbild definiert wurde, nehme stattdessen ein Ersatzbild.', 'fau' ),      
		    'liste'   => array(1 => __('Ja', 'fau'), 0 => __('Nein', 'fau')),
		    'default' => $defaultoptions['default_postthumb_always'],
		    'parent'  => 'newsbereich'
              ), 
	        	
	       
	       
	       
              'sliderpars'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Slider', 'fau' ),                      
              ),
              
	     'start_header_count'=> array(
                  'type'    => 'select',
                  'title'   => __( 'Zahl der Slides', 'fau' ),
                  'label'   => __( 'Anzahl der Slides von verlinkten Top-Artikeln', 'fau' ),
		  'liste'   => array(2 => 2,3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7),
                  'default' => $defaultoptions['start_header_count'],
                   'parent'  => 'sliderpars'
              ), 

               
              'slider-catid' => array(
                  'type'    => 'select',
                  'title'   => __( 'Kategorie', 'fau' ),
                  'label'   => __( 'Bitte wählen Sie die Kategorie der Artikel aus die im Slider erscheinen sollen.', 'fau' ),
                  'liste'   => $currentcatliste,
                  'default' => $defaultoptions['slider-catid'],
                   'parent'  => 'sliderpars'
              ), 
             'topevents'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Top Events', 'fau' ),                      
              ), 
	    'start_topevents_tag' => array(
                  'type'    => 'text',
                  'title'   => __( 'Schlagwort', 'fau' ),
                  'label'   => __( 'Schlagwort mit dem Beiträge als ausgestattet sein müssen, damit sie als Top-Event angezeigt werden.', 'fau' ),               
                  'default' => $defaultoptions['start_topevents_tag'],
		  'parent'  => 'topevents'
              ),  
	       'start_topevents_max'=> array(
                  'type'    => 'select',
                  'title'   => __( 'Zahl der Top-Events', 'fau' ),
                  'label'   => __( 'Wieviele Top-Events sollen maximal auf der Startseite angezeigt werden', 'fau' ),
		  'liste'   => array(1 => 1,2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6),
                  'default' => $defaultoptions['start_topevents_max'],
                  'parent'  => 'topevents'
              ),  
	       
    
               
               
          )
       ), 
       'socialmedia'   => array(
           'tabtitle'   => __('Social Media Footer', 'fau'),
           'fields' => array(
              'active_socialmedia_footer' => array(
                  'type'    => 'multiselectlist',
                  'title'   => __( 'Social Media Footer anzeigen', 'fau' ),
                  'label'   => __( 'Auf welchen Seiten soll der Social Media Footer angezeigt werden.', 'fau' ),
		  'liste'   => array(
				1 => __('Startseite','fau'),
      				2 => __('Portalseiten','fau'),
      				3 => __('Suche und Fehlerseiten','fau'),
      				4 => __('Inhaltsseite mit Navi','fau'),
      				5 => __('Standard Seiten','fau'),
      				6 => __('Beiträge','fau'),       
		      ),
                  'default' => $defaultoptions['active_socialmedia_footer'],
              ),  
	       
              'socialmedia' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Buttons anzeigen', 'fau' ),
                  'label'   => __( 'Welche Social Media Buttons sollen auf der Startseite angezeigt werden.', 'fau' ),
                 
                  'default' => $defaultoptions['socialmedia'],
              ),  
	        'socialmedia_buttons_title' => array(
                  'type'    => 'text',
                  'title'   => __( 'Titel Socialmediabereich', 'fau' ),
                  'label'   => __( 'Titel über den Social Media Icons im Social Media Footer.', 'fau' ),               
                  'default' => $defaultoptions['socialmedia_buttons_title'],
		),        
	       
	       
	      'sm-list'  => array(
		  'type'    => 'urlchecklist',
		  'title'   => __( 'Social Media Portale', 'fau' ),
		  'liste'   => $default_socialmedia_liste,
	      ), 
	     'start_link_videoportal_socialmedia'  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Verlinke Videoportal', 'fau' ),
                  'label'   => __( 'Verlinke Videoportal auf dem Social Media Fußteil der Startseite', 'fau' ),
                  'default' => $defaultoptions['start_link_videoportal_socialmedia'],
              ),     
	      'start_title_videoportal_socialmedia' => array(
                  'type'    => 'text',
                  'title'   => __( 'Verlinkungstext Videoportal', 'fau' ),
                  'label'   => __( 'Text mit der auf das Videoportal im Social Media Fußteil verlinkt wird.', 'fau' ),               
                  'default' => $defaultoptions['start_title_videoportal_socialmedia'],
              ),       
          )
       ),
       'allgemeines'   => array(
           'tabtitle'   => __('Allgemeine Einstellungen', 'fau'),
           'fields' => array(
              
              'menu_pretitle_portal' => array(
                  'type'    => 'text',
                  'title'   => __( 'Menü Portal-Button (Vortitel)', 'fau' ),
                  'label'   => __( 'Begriff vor dem Titel des gewählten Menüs', 'fau' ),               
                  'default' => $defaultoptions['menu_pretitle_portal'],
              ),  
	        'menu_aftertitle_portal' => array(
                  'type'    => 'text',
                  'title'   => __( 'Menü Portal-Button (Nachtitel)', 'fau' ),
                  'label'   => __( 'Begriff nach dem Titel des gewählten Menüs', 'fau' ),               
                  'default' => $defaultoptions['menu_aftertitle_portal'],
              ),  
	       
	      'menu_fallbackquote_show_excerpt' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Zitatersatz', 'fau' ),
                  'label'   => __( 'Wenn bei einem Menupunkt auf oberster Ebene kein Zitat vorgegeben ist, zeige stattdessen einen Auszug der Seite.', 'fau' ),                
                  'default' => $defaultoptions['menu_fallbackquote_show_excerpt'],
              ),  
	       
	       
	     'google-site-verification' => array(
                  'type'    => 'text',
                  'title'   => __( 'Google Site Verification', 'fau' ),
                  'label'   => __( 'Meta-Tag zur Identifikation der Inhaberschaft gegenüber Google. geben Sie hier den Content-Bestand an für die Identifikation mittels Meta-Tag.', 'fau' ),               
                  'default' => $defaultoptions['google-site-verification'],
              ),  
	      'url_banner-ad-notice'	 => array(
                  'type'    => 'url',
                  'title'   => __( 'Werbebanner Infolink', 'fau' ),
                  'label'   => __( 'URL zu einer Seite, die bei einem Klick auf den Hinweis zur Werbung aufgerufen wird.', 'fau' ),               
                  'default' => $defaultoptions['url_banner-ad-notice'],
              ),  
	       'title_banner-ad-notice'	 => array(
                  'type'    => 'text',
                  'title'   => __( 'Hinweistitel für Werbebanner', 'fau' ),
                  'label'   => __( 'Aus gesetzlichen Gründen muss vor Werbebannern ein Hinweis stehen, daß es sich um eben solche Werbung handelt. Üblicherweise reicht ein Titel "Werbung" o.ä.. Dieser Titel kann hier angegeben oder geändert werden.', 'fau' ),               
                  'default' => $defaultoptions['title_banner-ad-notice'],
              ),  
   
		'title_hero_post_categories'	 => array(
		    'type'    => 'text',
		    'title'   => __( 'Bühnentitel Kategorieseiten', 'fau' ),
		    'label'   => __( 'Im Bühnenteil wird ein Titel großflächig hinterlegt. Dieser kann hier für Kategorieseiten von Nachrichten hinterlegt werden.', 'fau' ),               
		    'default' => $defaultoptions['title_hero_post_categories'],
		), 
		'title_hero_post_archive'	 => array(
		    'type'    => 'text',
		    'title'   => __( 'Bühnentitel Beitragsarchiv', 'fau' ),
		    'label'   => __( 'Im Bühnenteil wird ein Titel großflächig hinterlegt. Dieser kann hier für Archivseiten von Nachrichten hinterlegt werden.', 'fau' ),               
		    'default' => $defaultoptions['title_hero_post_archive'],
		), 
	       'title_hero_search'	 => array(
		    'type'    => 'text',
		    'title'   => __( 'Bühnentitel Suche', 'fau' ),
		    'label'   => __( 'Im Bühnenteil wird ein Titel großflächig hinterlegt. Dieser kann hier für Suchergebnisseiten hinterlegt werden.', 'fau' ),               
		    'default' => $defaultoptions['title_hero_search'],
		), 
	       'title_hero_events'	 => array(
		    'type'    => 'text',
		    'title'   => __( 'Bühnentitel Veranstaltungen', 'fau' ),
		    'label'   => __( 'Im Bühnenteil wird ein Titel großflächig hinterlegt. Dieser kann hier für Seiten zu Veranstaltungen hinterlegt werden.', 'fau' ),               
		    'default' => $defaultoptions['title_hero_events'],
		), 
	              
	      'breadcrumb_root'	 => array(
		    'type'    => 'text',
		    'title'   => __( 'Titel Startseite in Breadcrumb', 'fau' ),
		    'label'   => __( 'Definiert, wie der Link zur Startseite in der Breadcrumb aussehen soll. Per Default sollte hier die offizielle URL stehen; bspw. <code>phil.fau.de</code>.', 'fau' ),               
		    'default' => $defaultoptions['breadcrumb_root'],
		), 

	       
	       
	     'postoptions'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Beiträge', 'fau' ),                      
              ),
	       
	       'post_display_category_below' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Zeige Kategorien', 'fau' ),
                  'label'   => __( 'Liste der Kategorien unter dem Beitrag anzeigen', 'fau' ),                
                  'default' => $defaultoptions['post_display_category_below'],
		  'parent'  => 'postoptions'
              ),  
	       
	
	       
	       
	      'suchergebnisse'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Suchergebnisse', 'fau' ),                      
              ),
	       
	       'search_display_post_thumbnails' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Zeige Thumbs', 'fau' ),
                  'label'   => __( 'Bei den Suchergebnisse Thumbnails anzeigen, wenn diese vorhanden sind', 'fau' ),                
                  'default' => $defaultoptions['search_display_post_thumbnails'],
		  'parent'  => 'suchergebnisse'
              ),   
	      'search_display_post_cats'  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Zeige Kategorien', 'fau' ),
                  'label'   => __( 'Bei den Suchergebnisse Kategorien der Beiträge anzeigen', 'fau' ),                
                  'default' => $defaultoptions['search_display_post_cats'],
		  'parent'  => 'suchergebnisse'
              ),   
	       'search_display_continue_arrow' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Weiterlesen-Pfeil', 'fau' ),
                  'label'   => __( 'Zeige verlinkten Pfeil zum Weiterelesen.', 'fau' ),                
                  'default' => $defaultoptions['search_display_continue_arrow'],
		  'parent'  => 'suchergebnisse'
              ),   
	       'default_search_excerpt_length' => array(
                  'type'    => 'number',
                  'title'   => __( 'Länge Textauszug', 'fau' ),
                  'label'   => __( 'Anzahl der maximalen Zeichen für den Textauszug bei der Ergebnissliste.', 'fau' ),                
                  'default' => $defaultoptions['default_search_excerpt_length'],
		  'parent'  => 'suchergebnisse'
              ),   
	     'search_display_excerpt_morestring'=> array(
		    'type'    => 'text',
		    'title'   => __( 'Textabbruch', 'fau' ),
		    'label'   => __( 'Falls der Textauszug nach der vorgegebenen Länger abgeschnitten werden muss, können hier Trennzeichen angegeben werden.', 'fau' ),               
		    'default' => $defaultoptions['search_display_excerpt_morestring'],
		), 
          )
       ),
       'contact'   => array(
           'tabtitle'   => __('Kontaktdaten', 'fau'),
           'fields' => array(
               'pubadresse'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Öffemtliche Adresse im Fußteil', 'fau' ),                      
              ),
              'contact_address_name' => array(
                  'type'    => 'text',
                  'title'   => __( 'Adressat', 'fau' ),
                  'label'   => __( 'Erste Zeile der Adresse', 'fau' ),               
                  'default' => $defaultoptions['contact_address_name'],
		  'parent'  => 'pubadresse'
              ),  
	       'contact_address_name2' => array(
                  'type'    => 'text',
                  'title'   => __( 'Adressat (Zusatz)', 'fau' ),
                  'label'   => __( 'Zweite Zeile der Adresse', 'fau' ),               
                  'default' => $defaultoptions['contact_address_name2'],
		    'parent'  => 'pubadresse'
              ),  
	      'contact_address_street' => array(
                  'type'    => 'text',
                  'title'   => __( 'Strasse', 'fau' ),
                  'label'   => __( 'Strasse inkl. Hausnummer', 'fau' ),               
                  'default' => $defaultoptions['contact_address_street'],
		   'parent'  => 'pubadresse'
              ),  
	       'contact_address_plz' => array(
                  'type'    => 'text',
                  'title'   => __( 'PLZ', 'fau' ),
                  'label'   => __( 'Postleitzahl', 'fau' ),               
                  'default' => $defaultoptions['contact_address_plz'],
		    'parent'  => 'pubadresse'
              ),  
	       'contact_address_ort' => array(
                  'type'    => 'text',
                  'title'   => __( 'Ort', 'fau' ),
                  'label'   => __( 'Ortsname', 'fau' ),               
                  'default' => $defaultoptions['contact_address_ort'],
		    'parent'  => 'pubadresse'
              ),  
	       'contact_address_country' => array(
                  'type'    => 'text',
                  'title'   => __( 'Land', 'fau' ),
                  'label'   => __( 'Optionale Landesangabe', 'fau' ),               
                  'default' => $defaultoptions['contact_address_country'],
		  'parent'  => 'pubadresse'
              ),  
	     
   
          )
       ),
       'advanced'   => array(
           'tabtitle'   => __('Erweitert', 'fau'),
           'fields' => array(
               'bedienung'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Backend', 'fau' ),                      
              ),
             'advanced_beitragsoptionen'  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Erweiterte Beitragsoptionen', 'fau' ),
                  'label'   => __( 'Bei der Bearbeitung von Beiträgen die erweiterten Optionen anzeigen.', 'fau' ),                
                  'default' => $defaultoptions['advanced_beitragsoptionen'],
		  'parent'  => 'bedienung'
              ),   
	      'advanced_topevent'  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Top-Events', 'fau' ),
                  'label'   => __( 'Ermöglicht es Beiträge als Top-Event zu deklarieren und entsprechende Optionen freizuschalten.', 'fau' ),                
                  'default' => $defaultoptions['advanced_topevent'],
		  'parent'  => 'bedienung'
              ),   
	      'advanced_activateads' => array(
                  'type'    => 'bool',
                  'title'   => __( 'Werbebanner', 'fau' ),
                  'label'   => __( 'Aktiviert die Möglichkeit, Werbebanner zu verwalten.', 'fau' ),                
                  'default' => $defaultoptions['advanced_activateads'],
		  'parent'  => 'bedienung'
              ),   
	       'advanced_post_active_subtitle'	=> array(
                  'type'    => 'bool',
                  'title'   => __( 'Untertitel (Beiträge)', 'fau' ),
                  'label'   => __( 'Erlaube die Eingabe von Untertitel bei Beiträgen.', 'fau' ),                
                  'default' => $defaultoptions['advanced_post_active_subtitle'],
		  'parent'  => 'bedienung'
              ),   
	       
	       
	      'design'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Design', 'fau' ),                      
              ),
	       
	      'galery_link_original'	  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Verlinke Galerybilder', 'fau' ),
                  'label'   => __( 'Bei der Anzeige einer Defaultgalerie unter der Bildunterschrift eine Verlinkung auf das Originalbild einschalten', 'fau' ),                
                  'default' => $defaultoptions['galery_link_original'],
		  'parent'  => 'design'
              ),   
	       'sidebaropt'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Erweiterte Einstellunge für Sidebars (von Seiten)', 'fau' ),                      
              ),
	       'advanced_page_sidebar_titleabove'	  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Feld Titel oben', 'fau' ),
                  'label'   => __( 'Fragt ein eigenes Titelfeld über den Texteditor zum Text oben ab (Titel können allerdings auch im Editorfeld eingegeben werden)', 'fau' ),                
                  'default' => $defaultoptions['advanced_page_sidebar_titleabove'],
		  'parent'  => 'sidebaropt'
              ), 
	       'advanced_page_sidebar_titlebelow'	  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Feld Titel unten', 'fau' ),
                  'label'   => __( 'Fragt ein eigenes Titelfeld über den Texteditor zum Text unten ab (Titel können allerdings auch im Editorfeld eingegeben werden)', 'fau' ),                
                  'default' => $defaultoptions['advanced_page_sidebar_titlebelow'],
		  'parent'  => 'sidebaropt'
              ), 
	       
	        'advanced_page_sidebar_useeditor_textabove'		  => array(
                  'type'    => 'bool',
                  'title'   => __( 'WYSIWYG-Editor Text unten', 'fau' ),
                  'label'   => __( 'Erlaubt die Nutzung des WYSWYG-Editors für die Eingabe von Text in der Sitebar. Dies schließt auch HTML-Tags mit Bildern und Links ein. Andernfalls ist nur ein Text mit Absätzen möglich.', 'fau' ),                
                  'default' => $defaultoptions['advanced_page_sidebar_useeditor_textabove'],
		  'parent'  => 'sidebaropt'
              ), 
	    'advanced_page_sidebar_useeditor_textbelow'		  => array(
                  'type'    => 'bool',
                  'title'   => __( 'WYSIWYG-Editor Text unten', 'fau' ),
                  'label'   => __('Erlaubt die Nutzung des WYSWYG-Editors für die Eingabe von Text in der Sitebar. Dies schließt auch HTML-Tags mit Bildern und Links ein. Andernfalls ist nur ein Text mit Absätzen möglich.', 'fau' ),                
                  'default' => $defaultoptions['advanced_page_sidebar_useeditor_textbelow'],
		  'parent'  => 'sidebaropt'
              ), 
	       
	       
	       
		'advanced_page_sidebar_personen_title'	  => array(
                  'type'    => 'text',
                  'title'   => __( 'Default Titel über Kontakte', 'fau' ),
                  'label'   => __( 'Optionaler Titel über einem ausgewählten Kontakt.', 'fau' ),                
                  'default' => $defaultoptions['advanced_page_sidebar_personen_title'],
		  'parent'  => 'sidebaropt'
		), 
	       'advanced_page_sidebar_linkblock1_title'	  => array(
                  'type'    => 'text',
                  'title'   => __( 'Default Titel erster Linkblock', 'fau' ),
                  'label'   => __( 'Optionaler Titel über den ersten Linkblock, wenn dieser belegt ist.', 'fau' ),                
                  'default' => $defaultoptions['advanced_page_sidebar_linkblock1_title'],
		  'parent'  => 'sidebaropt'
		), 
	       
	        'advanced_page_sidebar_linkblock2_title'	  => array(
                  'type'    => 'text',
                  'title'   => __( 'Default Titel zweiter Linkblock', 'fau' ),
                  'label'   => __( 'Optionaler Titel über den zweiten Linkblock, wenn dieser belegt ist.', 'fau' ),                
                  'default' => $defaultoptions['advanced_page_sidebar_linkblock2_title'],
		  'parent'  => 'sidebaropt'
		), 
	        'advanced_page_sidebar_linkblock1_number'	  => array(
                  'type'    => 'number',
                  'title'   => __( 'Links im ersten Linkblock', 'fau' ),
                  'label'   => __( 'Wieviele Links können maximal im ersten Linkblock angegeben werden.', 'fau' ),                
                  'default' => $defaultoptions['advanced_page_sidebar_linkblock1_number'],
		  'parent'  => 'sidebaropt'
		), 
	         'advanced_page_sidebar_linkblock2_number'	  => array(
                  'type'    => 'number',
                  'title'   => __( 'Links im zweiten Linkblock', 'fau' ),
                  'label'   => __( 'Wieviele Links können maximal im zweiten Linkblock angegeben werden.', 'fau' ),                
                  'default' => $defaultoptions['advanced_page_sidebar_linkblock2_number'],
		  'parent'  => 'sidebaropt'
		), 
	       

		'kommentare'  => array(
                  'type'    => 'section',
                  'title'   => __( 'Kommentare', 'fau' ),                      
		),
	       'advanced_activate_post_comments'		  => array(
                  'type'    => 'bool',
                  'title'   => __( 'Kommentarfunktion aktivieren', 'fau' ),
                  'label'   => __( 'Schaltet die Kommentarfunktion für Beiträge ein.', 'fau' ),                
                  'default' => $defaultoptions['advanced_activate_post_comments'],
		  'parent'  => 'kommentare'
		), 
	        'advanced_comments_notes_before'	  => array(
                  'type'    => 'text',
                  'title'   => __( 'Hinweistext Eingabeformular', 'fau' ),
                  'label'   => __( 'Informationen über den Eingabefeldern für neue Kommentare.', 'fau' ),                
                  'default' => $defaultoptions['advanced_comments_notes_before'],
		  'parent'  => 'kommentare'
		), 
	        'advanced_comments_disclaimer'	  => array(
                  'type'    => 'text',
                  'title'   => __( 'Kommentar-Disclaimer', 'fau' ),
                  'label'   => __( 'Hinweistext zur Abgrenzung zum Inhalt der Kommentare.', 'fau' ),                
                  'default' => $defaultoptions['advanced_comments_disclaimer'],
		  'parent'  => 'kommentare'
		), 
	       
  
	       
	       
	       
   
          )
       ),
       
       
    )
);
	       