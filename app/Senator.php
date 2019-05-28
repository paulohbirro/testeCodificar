<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Senator extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['id','nomeParlamentar','nomeCompleto','cargo','partido','mandato','sexo','uf','telefone','email','nascimento','fotoURL','gastoTotal','gastoPorDia'];


}
