<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    // Table Name
    protected $table = 'providers';
    // Primary key
    public $primaryKey = 'id';
    // Timestamp
    public $timestamp = true;
}
