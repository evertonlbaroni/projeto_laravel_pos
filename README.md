# Prójeto pós

##instalação

Executar os seguintes comandos:

    composer install
    php artisan key:generate

Renomear o arquivo .env.example para .env e definir as configurações do banco de dados.

Executar os seguintes comandos:

    php artisan migrate
    php artisan db:seed


## Usuário/Senha

    admin@admin.com
    abc123

## API Endpoints

    
    +--------+-----------+----------------------------+------------------+--------------------------------------------------------+--------------+
    | Domain | Method    | URI                        | Name             | Action                                                 | Middleware   |
    +--------+-----------+----------------------------+------------------+--------------------------------------------------------+--------------+
    |        | POST      | api/v1/category            | category.store   | App\Http\Controllers\Api\V1\CategoryController@store   | api          |
    |        | GET|HEAD  | api/v1/category            | category.index   | App\Http\Controllers\Api\V1\CategoryController@index   | api          |
    |        | DELETE    | api/v1/category/{category} | category.destroy | App\Http\Controllers\Api\V1\CategoryController@destroy | api          |
    |        | GET|HEAD  | api/v1/category/{category} | category.show    | App\Http\Controllers\Api\V1\CategoryController@show    | api          |
    |        | PUT|PATCH | api/v1/category/{category} | category.update  | App\Http\Controllers\Api\V1\CategoryController@update  | api          |
    |        | POST      | api/v1/product             | product.store    | App\Http\Controllers\Api\V1\ProductController@store    | api          |
    |        | GET|HEAD  | api/v1/product             | product.index    | App\Http\Controllers\Api\V1\ProductController@index    | api          |
    |        | GET|HEAD  | api/v1/product/{product}   | product.show     | App\Http\Controllers\Api\V1\ProductController@show     | api          |
    |        | PUT|PATCH | api/v1/product/{product}   | product.update   | App\Http\Controllers\Api\V1\ProductController@update   | api          |
    |        | DELETE    | api/v1/product/{product}   | product.destroy  | App\Http\Controllers\Api\V1\ProductController@destroy  | api          |
    +--------+-----------+----------------------------+------------------+--------------------------------------------------------+--------------+
