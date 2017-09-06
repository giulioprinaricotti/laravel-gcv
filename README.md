# laravel-gcv
Laravel Google Cloud Vision API package

## Install

#### Install via Composer

```
composer require giulioprinaricotti/laravel-gcv
```

Add the following lines to your `config/app.php`

```php
'providers' => [
        ...
        LaravelGCV\LaravelGCVProvider::class,
        ...
    ],


 'aliases' => [
        ...
        'LaravelGCV' => LaravelGCV\LaravelGCVFacade::class,
    ],
```

## Example

```php
use LaravelGCV\LaravelGCVFacade;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller
{
    public function test(){
      $result = LaravelGCVFacade::colors(Storage::disk('local')->get('clc.jpg')));
    	return response()->json(compact('result'));
    }
}
```
