<?php 

namespace Survey\Http\Controllers;

class SurveyListsController {
	public function getList(){
		for ($i=0; $i < 10; $i++) { 
			echo $i.'<br>';
		}
	}
}