<?php
	class Article extends EMongoDocument{
		public  $title;
		public  $content;
		public static function model($className = __CLASS__){
			return parent::model($className);
		}
		
		public function getCollectionName(){
			return 'school';
		}
		
	}
?>