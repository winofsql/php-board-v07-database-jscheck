<?php
// ******************************
// PHP 8用
// ******************************
$pv = explode(".", phpversion());
if ($pv[0] + 0 >= 8) {
    error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED & ~E_WARNING);
} else {
    error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
}

// ******************************
// キャッシュ
// ******************************
session_cache_limiter('nocache');
session_start();

// ******************************
// 日本語用
// ******************************
mb_language('Japanese');
mb_internal_encoding('UTF-8');

// ******************************
// グローバル変数
// ******************************
$log_text = "";
$kensu = "";
$error = [];
$clear = "";
$view_head_height = "330";

// データベース
$host = "localhost";
$user = "root";
$dbname = "lightbox";
$connect_string = "mysql:host={$host};dbname={$dbname}";
