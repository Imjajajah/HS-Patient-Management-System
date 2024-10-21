<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authorizations extends Model
{
    use HasFactory;

    protected $table = 'authorizations';

    protected $primaryKey = 'authorization_id';

    protected $guarded = [];

    public function users()
    {
        return $this->hasMany(User::class, 'authorization_id');
    }
}
