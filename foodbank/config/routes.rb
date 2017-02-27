Foodbank:: Application.routes.draw do 
    resources :forms  
    
    root :to => redirect(' /forms')
end
