<?php
Class scrapeCarsHelper extends Helper{

	// CREATE TABLE nikitin_ninja.tbl_scraped_cars (
	//     id BIGINT AUTO_INCREMENT,
	//     ad_caption VARCHAR(256),
	//     ad_direct_url VARCHAR(512),
	//     ad_time_mysql DATETIME,
	//     ad_time_raw VARCHAR(64),
	//     ad_time_parsed DATETIME,
	//     car_price_parsed DECIMAL(10, 2),
	//     car_price_raw VARCHAR(63),
	//     car_year VARCHAR(16),
	//     created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
	//     updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	//     deleted_at DATETIME,
	//     PRIMARY KEY (id)
	// );

	// CREATE TABLE nikitin_ninja.tbl_scraped_cars_images (
	//     id BIGINT AUTO_INCREMENT,
	//     car_id BIGINT,
	//     big VARCHAR(512),
	//     sm VARCHAR(512),
	//     PRIMARY KEY (id)
	// );

	public function storeData($getParams, $postParams){
		$scrapeCarsModel = new scrapeCarsModel();
		$r = array(
			$getParams,
			$postParams,
			$scrapeCarsModel->now(),
		);
		return $r;
	}
}