<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Ad extends Model
{

    protected $fillable = ['title', 'description', 'author_name', 'created_at_datetime'];

    public function getAds()
    {

        $ads = Ad::latest('created_at_datetime')
            ->where('created_at_datetime', '<=', Carbon::now())
            ->get();
        return $ads;
    }

}