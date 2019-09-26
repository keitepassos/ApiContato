<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    public $timestamps = false;
    protected $fillable = ['log_login','log_nome','log_senha','log_ativo'];
    

    public function Login()
    {
        return $this->hasMany(Login::class);
    } 
}
