<?php
/*
*---------------------------------------------------------
*
*	CartET - Open Source Shopping Cart Software
*	http://www.cartet.org
*
*---------------------------------------------------------
*/

global $cartet;

if (!$cartet->request->isAjax()) die();

if ($cartet->request->get('username'))
{
	echo 'OK';
}
else
{
	if ($cartet->request->get('scphone'))
	{
		$subject = 'Заказ обратного звонка '.STORE_NAME;
		$message = '
		<html><head><title>'.$subject.'</title></head><body>
		<p>Здравствуйте!</p>
		<p>
			В Вашем магазине '.STORE_NAME.' новый заказ обратного звонка.<br />
			<b>Телефон:</b><br />
			'.$cartet->request->get('scphone').'<br />
			<b>Имя:</b><br />
			'.$cartet->request->get('scname').'
		</p>
		</body></html>
		';

		os_php_mail(EMAIL_SUPPORT_ADDRESS, EMAIL_SUPPORT_NAME, EMAIL_SUPPORT_ADDRESS, STORE_NAME, '', EMAIL_SUPPORT_REPLY_ADDRESS, EMAIL_SUPPORT_REPLY_ADDRESS_NAME, '', '', $subject, $message, $message);
	}
}