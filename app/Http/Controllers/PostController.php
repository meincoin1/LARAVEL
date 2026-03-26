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

$collection = collect([['John Doe', 35], ['Jane Doe', 33]]);

collect([1, 2, 3, 4])->every(function ($value, $key) {
    return $value > 2;
});

dd($collection)

?>