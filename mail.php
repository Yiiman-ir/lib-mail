<?php
	/**
	 * Created by tokapps TM.
	 * Programmer: gholamreza beheshtian
	 * Mobile:09353466620
	 * Company Phone:05138846411
	 * Site:http://tokapps.ir
	 * Date: 03/26/2020
	 * Time: 20:06 PM
	 */
	
	namespace system\lib;
	
	
	use system\lib\mail\Mailer;
	use Yii;
	
	class mail extends Mailer {
		public function __construct( $config = [] ) {
			$this->useFileTransport = false;
			$this->transport        =
				[
					'class'      => 'Swift_SmtpTransport' ,
					'encryption' => 'tls' ,
					'host'       => Yii::$app->Options->emailServer ,
					'port'       => Yii::$app->Options->emailPort ,
					'username'   => Yii::$app->Options->emailUsername ,
					'password'   => Yii::$app->Options->emailPassword ,
				];
			parent::__construct( $config );
		
		}
	}
