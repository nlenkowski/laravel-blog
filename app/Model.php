<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

// Create a new default Model to use the same guarded attributes in all Models
class Model extends Eloquent
{
    protected $guarded = [];
}
