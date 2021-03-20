<?php

/**
 * WordPress標準機能
 *
 */
function init_setup()
{
	add_theme_support('post-thumbnails'); /* アイキャッチ */
	add_theme_support('automatic-feed-links'); /* RSSフィード */
	add_theme_support('title-tag'); /* タイトルタグ自動生成 */
	add_theme_support('html5', array( /* HTML5のタグで出力 */
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));
}
add_action('after_setup_theme', 'init_setup');


/**
 * メニューの登録
 * 
 */
function menu_setup()
{
	register_nav_menus(array(
		'place_global'  => 'グローバルメニュー',
	));
}
add_action('init', 'menu_setup');


/**
 * ウィジェットの登録
 *
 */
function widget_setup()
{
	register_sidebar(array(
		'name'          => 'サイドバー',
		'id'            => 'sidebar',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	));
}
add_action('widgets_init', 'widget_setup');


/**
 * JS.CSSファイルの読み込み
 * 
 */
function add_files()
{
	// WordPress提供のjquery.jsを読み込まない
	wp_deregister_script('jquery');
	// サイト共通JS
	wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/main.js', "", '20210315', true);
	// サイト共通のCSSの読み込み
	wp_enqueue_style('main', get_template_directory_uri() . '/dist/css/main.css', "", '20210315');
}
add_action('wp_enqueue_scripts', 'add_files');


/**
 * カスタム投稿
 * 
 */
function works_post()
{
	register_post_type('works', [
		'label' => '業務実績',
		'public' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-building',
		'supports' => ['thumbnail', 'title', 'editor', 'page-attributes'],
		'has_archive' => true,
		'hierarchical' => true,
		'show_in_rest' => true,
	]);
}
add_action('init', 'works_post');

function works_genre()
{
	register_taxonomy('works_genre', 'works', [
		'label' => '業務分類',
		'hierarchical' => true,
		'show_in_rest' => true,
	]);
}
add_action('init', 'works_genre');
