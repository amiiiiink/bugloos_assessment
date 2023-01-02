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




