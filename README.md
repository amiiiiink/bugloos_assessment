### Bagloos Assessment On Laravel 9 PHP V8.1.13

# Description


 Make A mapper Module to map API (json and xml)
  to database models

# Version 2

in Version 2 I created a route

```Route::get("/data-mapper", [DataMapperController::class, 'index']);```

I have DataMapperController that have index method which we can see the input of API and output of mapper

class App\Http\ApiResponses is the input simulation
Trait App\Traits\DataMapper is using Annotation and reflection packages to map data into our database fields

# Version 3

I made a Mapping Module and bind it to laravel and made each directories separate

Try to make Single responsible each trait and class
and used __invoke on my route

# Version 4

I added strategy design pattern to be able to support xml data




