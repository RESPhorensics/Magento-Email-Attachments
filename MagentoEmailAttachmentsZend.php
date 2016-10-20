$mail = new Zend_Mail();

$at = new Zend_Mime_Part($myImage);

$at->type = ‘image/gif’;

$at->disposition = Zend_Mime::DISPOSITION_INLINE;

$at->encoding = Zend_Mime::ENCODING_BASE64;

$at->filename = ‘test.gif’;

$mail->addAttachment($at);

$mail->send();