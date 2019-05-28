<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSenatorsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'senators';

    /**
     * Run the migrations.
     * @table senators
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('numero')->nullable();
            $table->string('nomeParlamentar')->nullable();
            $table->string('nomeCompleto')->nullable();
            $table->string('cargo')->nullable();
            $table->string('partido')->nullable();
            $table->string('mandato')->nullable();
            $table->string('sexo', 45)->nullable();
            $table->string('uf', 45)->nullable();
            $table->string('telefone', 45)->nullable()->comment('					');
            $table->string('email', 45)->nullable();
            $table->string('nascimento', 45)->nullable()->comment('					');
            $table->string('fotoURL')->nullable();
            $table->double('gastoTotal')->nullable();
            $table->double('gastoPorDia')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
