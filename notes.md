##
By default the homepage of symfony is in debug mode, you will have to create a HomeController that has a route path `'/'` as well as set `APP_ENV=prod` in the `.env` file. 


## Folders and what they do
src directory- all code you are writing will be contained in this folder
public foler - root of the app
vendor directory - for all packages that you will install
Read more in the symfony [docs](https://symfony.com/doc/current/index.html)


## Command to make a controller

`symfony console make:controller NameOfController`

This command will generate a controller folder containing the controller and, if Twig is installed in the project, it will also create a corresponding Twig template folder within the templates directory.


## conventions
`{{variable}}` can be used to print out the value of a variable passed into the render function of the controller in the twig template which displays this in the view. you can also `{{dump(variable)}}` when ding debugging
