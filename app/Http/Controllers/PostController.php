<?php

namespace App\Http\Controllers;
	
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Str;
class PostController extends Controller 
{
    public function show()
    {
        Collection::macro('toUpper', function () {
            return $this->map(function ($value) {
                return Str::upper($value);
            });
        });

$collection = collect([1, 2, 3]);

$collection->when(true, function ($collection, $value) {
    return $collection->push(4);
});

$collection->when(false, function ($collection, $value) {
    return $collection->push(5);
});

$collection->all();

dd($collection);
    }
}

?>