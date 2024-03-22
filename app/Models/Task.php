<?php

namespace App\Models;

use App\Models\Model as AppModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends AppModel
{
    use HasFactory;

    public $fillable = ['head', 'body', 'completed'];
    // public $guarded = [];

    public static function completed() 
    {
        return static::where('completed', 1)->get();
    }

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function steps() 
    {
        return $this->hasMany(Step::class);
    }
}
