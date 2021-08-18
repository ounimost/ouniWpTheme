<?php

// アイキャッチ画像の設定
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 150, 150 );

// スタイルシートの適用
function custom_theme_assets() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

// blogのアーカイブページ
function post_has_archive( $args, $post_type ) {
  global $wp_rewrite;
  if ( 'post' === $post_type && ! is_null( $wp_rewrite ) ) {
    $archive_slug = 'blog';
    // Setting 'has_archive' ensures get_post_type_archive_template() returns an archive.php template.
    $args['has_archive'] = $archive_slug;
    // We have to register rewrite rules, because WordPress won't do it for us unless $args['rewrite'] is true.
    $archive_slug = $wp_rewrite->root . $archive_slug;
    add_rewrite_rule( "{$archive_slug}/?$", "index.php?post_type=$post_type", 'top' );
    $feeds = '(' . trim( implode( '|', $wp_rewrite->feeds ) ) . ')';
    add_rewrite_rule( "{$archive_slug}/feed/$feeds/?$", "index.php?post_type=$post_type" . '&feed=$matches[1]', 'top' );
    add_rewrite_rule( "{$archive_slug}/$feeds/?$", "index.php?post_type=$post_type" . '&feed=$matches[1]', 'top' );
    add_rewrite_rule( "{$archive_slug}/{$wp_rewrite->pagination_base}/([0-9]{1,})/?$", "index.php?post_type=$post_type" . '&paged=$matches[1]', 'top' );
  }
  return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

function post_archive_link( $args, $post_type ) {
  if ( 'post' === $post_type ) {
    $link = home_url( 'blog/' );
  }
  return $link;
}
add_filter( 'post_type_archive_link', 'post_archive_link', 10, 2 );

// 人気記事
function getPostViews($postID){
    $count_key = ‘post_views_count’;
    $count = get_post_meta($postID, $count_key, true);
    if($count==”){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, ‘0’);
        return "0 Views";
    }
    return $count　. " Views";
}
function setPostViews($postID) {
    $count_key = ‘post_views_count’;
    $count = get_post_meta($postID, $count_key, true);
    if($count==”){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, ‘0’);
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
remove_action( ‘wp_head’, ‘adjacent_posts_rel_link_wp_head’, 10, 0);