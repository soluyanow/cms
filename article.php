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
		
		public function __construct($data = array()) {
			
			
		}
		
		public function storeFormValues($params) {
			
			
		}	
		
		

	}

?>