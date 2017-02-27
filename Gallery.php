<?

class Gallery{
    
    //private $objects;

    public function __construct($jsonPath) {
     //   $this->artJSon = file_get_contents("art_data.json");
        $artJson = file_get_contents($jsonPath);
        $this->objects = json_decode($artJson);
    }
    
    public function getArt($continent,$period,$objects, $caseSensitive = false) {
       
        $filteredArt = array();

        $index = 0; 
        for($i = 0; $i <= count($this->objects->continents); ++$i) {
	    		if($this->objects->continents[$i]->name == $continent){
        		for($j = 0; $j <= count($this->objects->continents[$i]->periods); ++$j){
                		if($this->objects->continents[$i]->periods[$j]->name == $period){
                        		for($k = 0; $k <= count($this->objects->continents[$i]->periods[$j]->types); ++$k){
                            			if(in_array($this->objects->continents[$i]->periods[$j]->types[$k]->type,$objects)){
                                			for($l = 0; $l < count($this->objects->continents[$i]->periods[$j]->types[$k]->details); ++$l){
                                        			$filteredArt[$index]["file_name"] = $this->objects->continents[$i]->periods[$j]->types[$k]->details[$l]->file_name;
                                        			$filteredArt[$index]["description"] = $this->objects->continents[$i]->periods[$j]->types[$k]->details[$l]->description;
								$index += 1;
                                			}

                            			}
                        		}
                		}
        		}
    		}
  
	} 
	return $filteredArt;
    }
} # end of class
