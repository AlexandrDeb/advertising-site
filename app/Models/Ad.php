<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Ad extends Model
{

    protected $fillable = ['title', 'description', 'user_id', 'author_name', 'created_at_datetime'];

    public function getAds()
    {
        //Get 5 records from the database
        $ads = Ad::paginate(5);

      /*  $ads = Ad::latest('created_at_datetime')
            ->where('created_at_datetime', '<=', Carbon::now())
            ->get();*/
        return $ads;
    }

}
