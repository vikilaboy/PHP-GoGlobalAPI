<?php

namespace GoGlobal\Response;

use GoGlobal\ResponseInterface;

class HotelInfo extends HotelInfoGeo implements ResponseInterface
{
	protected static $MAP_INFO = [
		'HotelSearchCode' => 'hotel_search_code',
		'HotelName' => 'hotel_name',
		'Address' => 'address',
		'CityCode' => 'city_id',
		'Phone	' => 'phone',
		'Fax' => 'fax',
		'Category' => 'category',
		//'RoomCount' => 'room_count',
	];

}