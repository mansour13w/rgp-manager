<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Personnage extends Model{

    protected $fillable = ['Nom', 'Description', 'Specialite'];

}