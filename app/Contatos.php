<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Contatos extends Model
{
    public $timestamps = false;
    protected $fillable = ['con_nome','con_sobrenome','con_email','con_instituicao','con_foto', 'con_data_nascimento'];
    

    public function contatos()
    {
        return $this->hasMany(Contatos::class);
    }
}
