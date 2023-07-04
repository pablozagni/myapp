#  About MyApp
This is a basic Laravel App using Laravel 10, Jetstream, Livewire, laravelcollective/html, Bite and Tailwind CSS.
It has a lot of componets, designed for a rapid development start.

##  Usage
```
 - clone repo
 - create .env file from .env.example
 - php artisan key:generate
 - php artisan migrate:fresh
 - serve and register
```

##  The APP

There are GUESTs views:
 - Home
 - Contact us
 
You can Register and Log in.

![Login](https://github.com/pablozagni/myapp/blob/master/resources/assets/markdown/img/img1.png?raw=true)
<img src="/assets/markdown/img/img1.png" alt="Login" />

Register with your email and you'll get a validation email.
Once loged in, user has a Dashboard, with responsive options menu.

<img src="/assets/markdown/img/img2.png" alt="Main menu" />

<img src="/assets/markdown/img/img6.png" alt="Responsive  menu" />

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

<img src="/assets/markdown/img/img3.png" alt="Main menu" />
<img src="/assets/markdown/img/img4.png" alt="Main menu" />
<img src="/assets/markdown/img/img5.png" alt="Main menu" />
