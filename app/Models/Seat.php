<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $table = "T_SEAT";

    protected $primaryKey = "seat_id";

    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = [
        'seat_id',
        'NIP',
        'building',
        'floor'
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class, 'NIP', 'NIP');
    }
}