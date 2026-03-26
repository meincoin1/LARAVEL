<?php

namespace App\Http\Controllers;
	
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Str;

Collection::macro('toUpper', function () {
    return $this->map(function ($value) {
        return Str::upper($value);
    });
});

$lazyCollection = collect([1, 2, 3, 4])->lazy();

get_class($lazyCollection);

$lazyCollection->all();

dd($lazyCollection)

?>