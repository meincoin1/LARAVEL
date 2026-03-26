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

$collection = collect(['account_id' => 1, 'product' => 'Desk', 'amount' => 5]);

$collection->has(['amount', 'price']);

dd($collection)

?>