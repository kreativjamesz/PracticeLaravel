<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // protected $fillable = ['name','email','status'];
    protected $guarded = [];

    protected $attributes = [
        'status' => 0,
    ];

    public function getStatusAttribute($attribute)
    {
        return $this->activeOptions()[$attribute];
    }

    public function scopeActive($query)
    {
        return $query->where('status',1);
    }

    public function scopeInactive($query)
    {
        return $query->where('status',0);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function activeOptions()
    {
        return [
            0 => 'Inactive',
            1 => 'Active',
            2 => 'In-Progress'
        ];
    }

}
