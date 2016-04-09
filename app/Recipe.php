<?php 

namespace Fridge;

class Recipe{
	protected $raw;


	protected $app_id = env('EDAMAM_ID');
	protected $app_key = env('EDAMAM_KEY');

	//Search for recipe by name and save as associated array
	public static function query($val){
		$url = 'https://api.edamam.com/search?q=' .urlencode($val) . '&app_id=' . $app_id . '&app_key=' . $app_key;
		$json = file_get_contents($url);
		$arr = json_decode($json, true);
		$recipes = array_pluck($arr, 'hits.recipe');
		dd($recipes);
		if(count($arr) == 0){
			return null;
		}else if(count($arr) == 1){
			return new Recipe($arr[0]);
		}else{
			$bus = [];
			foreach ($arr as $key => $value) {
				$bus[] = new Recipe($value);
			}
			return $bus;
		}
	}

	public function __construct(array $raw){
		$this->raw = $raw;
	}

	
}



?>