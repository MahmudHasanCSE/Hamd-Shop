<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'status'];

    protected static $unit;

    public static function newUnit($request)
    {
        self::$unit = new Unit();
        self::saveUnitBasicInfo(self::$unit, $request);
    }

    public static function updateUnit($request, $id)
    {
        self::$unit = Unit::find($id);
        self::saveUnitBasicInfo(self::$unit, $request);
    }

    public static function saveUnitBasicInfo($blog, $request)
    {
        self::$unit->name        = $request->name;
        self::$unit->description = $request->description;
        self::$unit->status      = $request->status;
        self::$unit->save();
    }
}
