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

$collectionA = collect([1, 2, 3]);

$collectionB = $collectionA->collect();

$collectionB->all();

dd($collectionA)

?>