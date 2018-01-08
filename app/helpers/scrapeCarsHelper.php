<?php
Class scrapeCarsHelper extends Helper{

	public function storeData($getParams, $postParams){
		// $alertsModel = new messagesModel();
		$r = array(
			$getParams,
			$postParams,
		);
		return $r;
	}
}