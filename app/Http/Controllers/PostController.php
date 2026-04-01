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

$min = collect([['foo' => 10], ['foo' => 20]])->min('foo');

$min = collect([1, 2, 3, 4, 5])->min();

dd($min)

?>