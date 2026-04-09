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

$collection = collect([
    10 => ['product' => 'Desk', 'price' => 200],
    11 => ['product' => 'Desk', 'price' => 200],
]);

$values = $collection->values();

$values->all();

dd($collection);
    }
}

?>