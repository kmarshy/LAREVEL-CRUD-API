Intro

Laravel 5.5  that uses API resources to do CRUD methods. (https://laravel.com/docs/5.6/eloquent-resources)
This is a recreation of the tutorial from Brad Traversy (https://github.com/bradtraversy/larticles_api) in my own words.

Why? - I am working on a Tracking System so, I was just sharpening  LAREVEL skills, maybe will add extras as the other proect goes on hosted in a private repo. I might reference this back... One brick contributes to a house

NB - This is not meant to be a solid CRUD example from me, the repo above will do more to help you.

Quick Start

# Install Dependencies
composer install

# Run Migrations
php artisan migrate

# Import Articles
php artisan db:seed

# Add virtual host if using Apache

# If you get an error about an encryption key
php artisan key:generate

Endpoints

List all articles with links and meta - GET api/articles

Get single article - GET api/article/{id}
Delete article - DELETE  api/article/{id}
Add article - POST api/article ,   title/body 
Update article - PUT api/article ,  article_id/title/body