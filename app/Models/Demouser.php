<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demouser extends Model
{
    use HasFactory;

/**
 * The table associated with the model.
 *
 * @var string
 */
protected $table = 'demoUser';

/**
 * The primary key for the model.
 *
 * @var string
 */
protected $primaryKey = 'id';

/**
 * Indicates if the model should be timestamped.
 *
 * @var boolean
 */
public $timestamps = true;

/**
 * The attributes that should be hidden for arrays.
 *
 * @var array
 */
protected $hidden = [];
/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
protected $fillable = ['username','email','mobile'];
/**
 * The attributes that aren't mass assignable.
 *
 * @var array
 */
protected $guarded = [];
}
