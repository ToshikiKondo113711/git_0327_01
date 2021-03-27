<?php
$core_path = dirname(__FILE__);

// GETのパラメータで指定されたファイル名がcore/pagesのフォルダ内にあるかを調べる（セキュリティ対策用）
$file_exists = file_exists("{$core_path}/pages/{$_GET['page']}.php");

// GETのパラメータでpageがない場合 or 指定されたファイルが存在しない場合はリダイレクト
if (empty($_GET['page']) || $file_exists == false ) {
	header('Location: index.php?page=inbox');
}
// GETのパラメータ（?page=hogehoge）で指定されたファイルを自動的に読み込む為のスクリプト
$include_file = "{$core_path}/pages/{$_GET['page']}.php";

?>