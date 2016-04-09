<?php

if (! function_exists('edamam_query')) {
    //Search for recipe by name and save as associated array
    function edamam_query($value){
        $url = 'https://api.edamam.com/search?q='.urlencode($value).'&app_id='.env('EDAMAM_ID').'&app_key='.env('EDAMAM_KEY');
        $json = file_get_contents($url);
        $results = json_decode($json, true);
        // dd($results['hits']);
        $recipes = [];
        foreach($results['hits'] as $key => $arrays){
            $recipes[$key] = $arrays['recipe'];//new \Fridge\Recipe($arrays['recipe']);
        }
        return $recipes;
    }
}
