<?php

// INCLUDE THIS BEFORE you load your ReduxFramework object config file.


// You may replace $redux_opt_name with a string if you wish. If you do so, change loader.php
// as well as all the instances below.
$redux_opt_name = THEME_OPT;

if ( !function_exists( "redux_add_metaboxes" ) ):
	function redux_add_metaboxes($metaboxes) {
	
	$page_options = array();

	$metaSection = array(
		'title' => 'Cсылка Госзакупки',
		'icon_class'    => 'icon-large',
		'icon'          => 'el-icon-list-alt',
		'fields' => array(
			array(
				'id'     => 'label-zakupki',
				'type'   => 'text',
				'title'  => __( 'Название источника',THEME_OPT)
			),
            array(
                'id'     => 'url-zakupki',
                'type'   => 'text',
                'title'  => __( 'URL cсылка Госзакупки',THEME_OPT)
            ),
            array(
                'id'               => 'post_page_sections',
                'type'             => 'repeatable_list',
                'accordion'      => true,
                'title'            => __('Статьи о нас:', THEME_OPT),
                'add_button'     => __( 'Добавить статью'),
                'remove_button'  => __( 'Удалить статью'),
                'fields'         => array(
                    array(
                        'id'     => 'label-links',
                        'type'   => 'text',
                        'title'  => __( 'Название источника',THEME_OPT)
                    ),
                    array(
                        'id'     => 'url-links',
                        'type'   => 'text',
                        'title'  => __( 'URL cсылка',THEME_OPT)
                    )
                )
            )
		)
	);
	
	$page_options[] = $metaSection;

	$metaboxes[] = array(
		'id'            => 'page-options',
		'title'         => __( 'Дополнительные поля страницы', THEME_OPT ),
		'post_types'    => array( 'page' ),
		'page_template' => array('posts-page.php'),
		'position'      => 'normal', // normal, advanced, side
		'priority'      => 'high', // high, core, default, low
		'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
		'sections'      => $page_options,
	);

	return $metaboxes;
  }
  add_action("redux/metaboxes/{$redux_opt_name}/boxes", 'redux_add_metaboxes');
endif;

