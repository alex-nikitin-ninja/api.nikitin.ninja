<?php
Class scrapeCarsRuModel extends Model {

	// CREATE TABLE nikitin_ninja.tbl_scraped_cars_ru (
	//     id BIGINT AUTO_INCREMENT,
	//     ad_caption VARCHAR(256),
	//     ad_direct_url VARCHAR(512),
	//     car_price_parsed DECIMAL(16, 2),
	//     car_price VARCHAR(64),
	//     car_year VARCHAR(64),
	//     car_year_parsed VARCHAR(16),
	//     car_odometer VARCHAR(64),
	//     car_odometer_parsed DECIMAL(16, 2),
	//     car_description MEDIUMTEXT,
	//     raw_data MEDIUMTEXT,
	//     created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
	//     updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	//     deleted_at DATETIME,
	//     PRIMARY KEY (id)
	// );

	// CREATE TABLE nikitin_ninja.tbl_scraped_cars_ru_images (
	//     id BIGINT AUTO_INCREMENT,
	//     car_id BIGINT,
	//     big VARCHAR(512),
	//     sm VARCHAR(512),
	//     PRIMARY KEY (id)
	// );

	// ALTER TABLE nikitin_ninja.tbl_scraped_cars_ru ADD INDEX ad_direct_url(ad_direct_url);
	// ALTER TABLE nikitin_ninja.tbl_scraped_cars_ru_images ADD INDEX car_id(car_id);
	
	// ALTER TABLE nikitin_ninja.tbl_scraped_cars_ru CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
	// ALTER TABLE nikitin_ninja.tbl_scraped_cars_ru_images CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
	
	public function now(){
		$sql = "SELECT NOW() AS now;";

		$params = array();
		$r = self::query($sql, $params);
		return $r;
	}

	public function getCarByUrl($url, $columns = ['*']){
		$columns = implode(", ", $columns);

		$sql =
			"SELECT
				{$columns}
			FROM
				nikitin_ninja.tbl_scraped_cars_ru t
			WHERE
				ad_direct_url LIKE ':adDirectUrl'";

		$params = array(
			"adDirectUrl" => $url,
		);
		$r = self::query($sql, $params);
		return $r;
	}

}