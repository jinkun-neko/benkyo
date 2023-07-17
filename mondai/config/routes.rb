Rails.application.routes.draw do
  # Define your application routes per the DSL in https://guides.rubyonrails.org/routing.html

  # Defines the root path route ("/")
  root "questions#index"
  # get 'yaji', to: "questions#yaji" 
  resources :questions do
    resources :answers
  end
end
