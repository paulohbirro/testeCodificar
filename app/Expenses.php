<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class  Expenses  extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['id','cnpjCpf','tipoGasto','descricaoGasto','dataEmissao','valor','senator_id'];


}
