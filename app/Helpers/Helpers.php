<?php

namespace App\Helpers;

use App\Models\User;
use App\Models\Country;
use App\Models\Attachment;
use App\Models\SportsSeason;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Models\Permission as ModelsPermission;

class Helpers
{
    public static function isUserLogin()
    {
        return auth()?->check();
    }

    public static function getCurrentUserId()
    {
      if (self::isUserLogin()) {
        return auth()?->user()?->id;
      }
    }

    public static function getMedia($id)
    {
      return Attachment::find($id);
    }

    public static function getCountryCode(){
      return Country::get(["calling_code", "id", "iso_3166_2", 'flag'])->unique('calling_code');
    }

    public static function getUser()
    {
        $user = User::with('roles')->where('system_reserve' ,'!=', 1)->latest()->take(5)->get();
        return $user;
    }

   

    public static function getSportsSeasonByDate($playerRegDate)
  {
    $result = SportsSeason::select('id', 'sports_season_name')
        ->whereRaw("STR_TO_DATE(sports_season_from, '%d-%m-%Y') <= STR_TO_DATE(?, '%d-%m-%Y')", [$playerRegDate])
        ->whereRaw("STR_TO_DATE(sports_season_to, '%d-%m-%Y') >= STR_TO_DATE(?, '%d-%m-%Y')", [$playerRegDate])
        ->orderBy('id', 'DESC')
        ->first();

    return $result;
  }

}