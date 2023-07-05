#  About MyApp
This is a basic Laravel App using Laravel 10, Jetstream, Livewire, laravelcollective/html, Bite and Tailwind CSS.
This APP uses pablozagni/laravel-starter-pack, a package intended to concentrate all blade components and re use them in any new application.
It has a lot of componets, designed for a rapid development start.
The idea is to build a complete and usefull suite of components.

With

![Form code](https://github.com/pablozagni/myapp/blob/master/resources/assets/markdown/img/img8.png?raw=true)

You get

![Form](https://github.com/pablozagni/myapp/blob/master/resources/assets/markdown/img/img7.png?raw=true)

And responsive

![Form responsive](https://github.com/pablozagni/myapp/blob/master/resources/assets/markdown/img/img9.png?raw=true)

##  Usage
```
 - clone repo
 - create .env file from .env.example
 - php artisan key:generate
 - php artisan migrate:fresh --seed
 - serve and register
```
You can login with Seeded user *admin@admin.com* with password *123456789*
##  The APP

There are GUESTs views:
 - Home
 - Contact us
 
You can Register and Log in.

![Login](https://github.com/pablozagni/myapp/blob/master/resources/assets/markdown/img/img1.png?raw=true)

Register with your email and you'll get a validation email.
Once loged in, user has a Dashboard, with responsive options menu.

![Main menu](https://github.com/pablozagni/myapp/blob/master/resources/assets/markdown/img/img2.png?raw=true)

![Responsive menu](https://github.com/pablozagni/myapp/blob/master/resources/assets/markdown/img/img6.png?raw=true)

##  CSS & Layouts

Resources\css\app.css is modified to add some common styles, like btn, btn-primary, etc.
Blade views are based on 3 base layouts that extends from layouts\main
 - layouts\main
 - layouts\guest\main for guest users
 - layouts\user\main for loged uses
 - layouts\admin\main for admin users
 
Each layout has it's navbar and sidebar.

##  Blade components

This App uses a generic model 'Client' to show how to implement Blade components.
As Users & Admins can edit Clients, the views for each one are stored in
 - \resources\views\users\clients
 - \resources\views\admin\clients

##  ClientController

You can choose to build a ClientRequest for validation, and a "fill" statement. I prefer large but clear code.

![](https://github.com/pablozagni/myapp/blob/master/resources/assets/markdown/img/img3.png?raw=true)
![](https://github.com/pablozagni/myapp/blob/master/resources/assets/markdown/img/img4.png?raw=true)
![](https://github.com/pablozagni/myapp/blob/master/resources/assets/markdown/img/img5.png?raw=true)
