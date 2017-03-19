<?php

namespace Mini\Controller

use Mini\Model\Data

class DataController
{
	public function index()
	{
		// Instance new Model (Song)
        $Data = new Data();
        // getting all songs and amount of songs
        $datas = $Data->getAllData();        
       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
	}
}