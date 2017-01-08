<?php
Class v1Controller extends Controller{

	public function index(){
		$r = 'Action is required';
		self::apiResponse($r, 'Error', '404');
	}

	// Sample methods
		public function info(){
			$r = array(
				'version' => '1.0',
				'description' => 'Version 1.0',
			);
			
			self::apiResponse($r);
		}

		public function testWParams(){
			// Sample
			// passing get parameters
			// /api/v1/testWParams?t=tt
			$recvParams = self::localVar('get');
			// passing post parameters
			// $recvParams = self::recvParams();

			self::apiResponse($recvParams);
		}

	// Messages
		public function messages($params){
			$params = trim($params);
			if (strlen($params)>0) {
				$params = explode('/', $params);
			}else{
				$params = false;
			}

			$recvParams = self::recvParams();

			$messagesHelper = new messagesHelper();
			$r = $messagesHelper->run($params, $recvParams);

			self::apiResponse($r);
		}

}