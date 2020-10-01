<?php

class recipecollection
{
    private $title;
    private $recipes = array();

    public function __construct($title = null)
    {
        $this->setTitle($title);
    }
    

    public function setTitle($title)
    {
        if (empty($title)) {
            $this->title = null;
        } else {
            $this->title = ucwords($title);
        }
    }
    
    public function getTitle()
    {
        return $this->title;
    }


    public function addrecipe($recipe)
    {
        $this->recipes[] = $recipe;
    }

    public function getrecipes()
    {
        $titles = array();
        foreach($this->recipes as $recipes)
        {
            $title[] = $recipes->getTitle();
        }
        return $titles;
    }

    public function filterbytag($tag)
    {
        $tagrecipes = array();
        foreach ($this->recipes as $recipes)
        {
            if(in_array(strtolower($tag), $recipes->gettags()))
            {
                $tagedrecipes[] = $recipes;
            }
        }
        
    }

    public function filterbyid($id)
    {
        return $this->recipes[$id];
    }

    public function getcombinedingredients()
    {
        $ingredients = array();
        foreach ($this->recipes as $ing)
        {
            foreach($this->recipes as $recipe)
            {
                $item = $ing["item"];
                if(strpos($item,","))
                {
                    $item = strpos($item,",",true);
                }
                if(substr($item,-1) == "s" && array_key_exists(rtrim($item,"s"), $ingredients))
                {
                    $item = rtrim($item,"s");
                }elseif(array_key_exists($item. "s", $ingredients)){
                    $item .= "s";
                }
                    $ingredients[$item]= array(
                        $ing["amount"],
                        $ing["measure"]
                    );
            }
        }
    }
}
