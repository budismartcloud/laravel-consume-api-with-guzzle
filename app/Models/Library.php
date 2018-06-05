<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Library extends Model {
	protected $table = 'libraries';
    protected $primaryKey = 'id';
    public $timestamps = false;

}