## Setup
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
`{{variable}}` can be used to print out the value of a variable passed into the render function of the controller in the twig template which displays this in the view. you can als `{{dump(variable)}}` when ding debugging.

When working with array you have to map over the array to be able to render the items in the twig template.


## Working with Databases
We use ORM when working with databases that allow us to communicate with databases without having to write MYSQL queries

`composer require symfony/orm-pack
$ composer require --dev symfony/maker-bundle


### To create a database
`php bin/console doctrine:database:create`

#### to create an entity
All entity names should be capitalised.
To create an entity which is symfony way of saying table
`$ php bin/console make:entity EntityName`

After you create one entity, if you want create a new entity that will be related to the previous entity, you have to run the `php bin/console make:entity PreviousEntityName` command again for the pevious entity so it tells you that the entity already exists, then you can start adding properties for the entity. Add the poperty and point that property to the relaing entity Class name which is the same as the entity name, set the field type to `ManyToMany or ManyToOne` etc depending on how you want the entities to be related.

read more in the [docs](https://symfony.com/doc/)