<?php

namespace App\Helpers;

use App\Models\Route;


class RouteHelper
{
    static function RouteData()
    {
        $route = [];

        foreach(Route::all() as $v) {
            $route[] = [
                'id' => $v->id,
                'name' => $v->name,
            ];
        }

        return $route;
    }
}
