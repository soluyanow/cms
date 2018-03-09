<?php
	/*
		Класс - обработчик статей
	*/
	class Article {
		public $id 				= null; //id статей из базы данных
		public $publicationDate = null; //Дата первой публикации
		public $title 			= null; //Название статьи
		public $summary 		= null; //Краткое описание статьи
		public $content 		= null; //Содержание статьи, включая html
		
		//Установка свойств значений с помощью значений в массиве
		public function __construct($data = array()) {
			if (isset($data['id']) {
				$this->id = (int)$data['id'];				
			}
			
			if (isset($data['publicationDate'])) {
				$this->publicationDate = (int)$data['publicationDate'];
			}
			
			if (isset($data['title'])) {
				$this->title = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['title']);
			}
			
			if (isset($data['summary'])) {
				$this->summary = preg_replace("/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['summary']);
			}
			
			if (isset($data['content'])) {
				$this->content = $data['content'];
			}
		}
		
		//Установка значений свойств с помщью значений формы
		public function storeFormValues($params) {
			$this->__construct($params);
			if (isset($params['publicationDate'])) {
				$publicationDate = explode('-', $params['publicationDate']);
				
				if (count($publicationDate) == 3) {
					list($y, $m, $d) = $publicationDate;
					$this->publicationDate = mktime(0, 0, 0, $m, $d, $y);
				}
			}
			
		}	
		
		

	}

?>