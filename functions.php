<?php

define('CT_BOOKS_DIR', get_stylesheet_directory());
define('CT_BOOKS_URI', get_stylesheet_directory_uri());
define('CT_BOOKS_VERSION', wp_get_theme()->Get('Version'));

require_once CT_BOOKS_DIR . '/inc/post-types.php';
require_once CT_BOOKS_DIR . '/inc/taxes.php';

require_once CT_BOOKS_DIR . '/inc/assets.php';
require_once CT_BOOKS_DIR . '/inc/single-book.php';
require_once CT_BOOKS_DIR . '/inc/book-status.php';
require_once CT_BOOKS_DIR . '/inc/admin-settings.php';
require_once CT_BOOKS_DIR . '/inc/account.php';
