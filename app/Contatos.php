<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Contatos extends Model
{
    public $timestamps = false;
    protected $fillable = ['con_nome'];

    public function contatos()
    {
        return $this->hasMany(Contato::class);
    }
}
