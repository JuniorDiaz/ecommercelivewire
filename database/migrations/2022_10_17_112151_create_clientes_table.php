<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('codcli');
            $table->string('nome', 140);
            $table->string('cpf', 15);
            $table->string('rg', 15);
            $table->string('cnpj', 21);
            $table->string('ie', 21);
            $table->string('email', 50);
            $table->string('obs', 100);
            $table->enum('ativo', ['Sim', 'Não']);
            $table->enum('bloquear', ['Sim', 'Não']);
            $table->foreignId('user_id')->constrained('users');
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
        Schema::dropIfExists('clientes');
    }
};
