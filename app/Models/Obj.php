<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Traits\RelatesToTeams;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Obj extends Model
{
    use RelatesToTeams;

    use HasFactory;

    public $table = 'objects';

    protected $fillable = [
        'parent_id'
    ];

    public static function booted()
    {
        static::creating(function ($model) {
            $model->uuid = Str::uuid();
        });
    }

    public function objectable()
    {
        return $this->morphTo();
    }

    public function children()
    {
        return $this->hasMany(Obj::class, 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(Obj::class, 'parent_id', 'id');
    }

    public function ancestors()
    {
        $ancestor = $this;
        $ancestors = collect();

        while ($ancestor->parent) {
            $ancestor = $ancestor->parent;
            $ancestors->push($ancestor);
        }

        return $ancestors;
    }
}