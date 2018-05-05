<?php

class Model_Portfolio implements Model
{

	public function get_data()
	{

		// Здесь мы просто сэмулируем реальные данные.
		return array(
			
			array(
				'Year' => '2012',
				'Site' => 'http://DunkelBeer.ru',
				'Description' => 'Промо-сайт темного пива Dunkel.'
			),

		);
	}

}
