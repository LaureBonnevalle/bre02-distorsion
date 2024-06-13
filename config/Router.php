<?php


class Router {
    
    public function __contruct(){}
    
    
    public function handleRequest(string $get): void {
        
        
        //if($route !== null && $route === 'home'){}
        if (isset($get["route"]) && $get["route"] === "home") 
        {
            $pageController->about();
        } 
        
        //elseif ($route !== null && $route === 'add-category'){}
        elseif (isset($get["route"]) && $get["route"] === "add-category") 
        {
            $pageController->contact();
        }
        
        //elseif ($route !== null && $route === 'add-room'){}
        elseif (isset($get["route"]) && $get["route"] === "add-room") 
        {
            $pageController->contact();
        } 
        
        //elseif ($route !== null && $route === 'add-message'){}
        elseif (isset($get["route"]) && $get["route"] === "add-message") 
        {
            $pageController->contact();
        }
        
        //elseif ($route !== null && $route === 'show-room'){}
        elseif (isset($get["route"]) && $get["route"] === "show-room") 
        {
            $pageController->contact();
        }
        
        //elseif ($route === null ){}
        elseif (!isset($get["route"])) 
        {
            $pageController->notFound();
            
        }
          
        //elseif ($route !== null){}
        else {
            $pageController->home();
        }
        
        
    }
}


?>