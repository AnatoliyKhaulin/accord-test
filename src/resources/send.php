<?php
$linkToUploads = "http://website.ru/uploads/";
$to      = 'info@website.ru';
$subject = 'Сообщение с сайта';
$headers = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: <callback@website.ru>\r\n";
// Загрузка файла на сайт.
$filename = date( 'YmdGis' );
$upload   = false;
if ( isset( $_FILES['file'] ) ) {
	$uploads_dir = 'uploads/';
	$frm         = explode( '.', $_FILES['file']['name'] );
	$frmFile     = $frm[ count( $frm ) - 1 ];
	$filename    = $filename . "." . $frmFile;
	if ( is_uploaded_file( $_FILES['file']['tmp_name'] ) ) {
		$upload = true;
		move_uploaded_file( $_FILES['file']['tmp_name'], $uploads_dir . $filename );
	}
}

$message = '<html>';
$message .= '<head>';
$message .= '<title>' . $subject . '</title>';
$message .= '</head>';
$message .= '<body>';
$message .= '<h3>' . $subject . '</h3>';
$message .= '<p>Имя: ' . $_POST['name'] . '</p>';
$message .= '<p>Телефон: ' . $_POST['phone'] . '</p>';
$message .= '<p>Почта: ' . $_POST['email'] . '</p>';
$message .= '<p>Форма: ' . $_POST['fn'] . '</p>';
// Если был загружен файл
if ( $upload == true ) {
	$message .= "<p>Ссылка на загруженный файл: $linkToUploads.$filename</p>";
}
$message .= '</body></html>';
$send = mail( $to, $subject, $message, $headers );
if ( $send ) {
	print "success";
} else {
	print "error";
}
?>
