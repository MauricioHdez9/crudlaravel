<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->id();
            $table->string('razon');            //rozon social 
            $table->string('alias')->nullable();//
            $table->string('gp')->nullable();   //grupo
            $table->string('ncliente');         //numero de cliente
            $table->string('sr');               //subregion 
            $table->string('escliente');        //estado del cliente
            $table->string('mtc')->nullable();  //motivo de cancelacion
            $table->string('ncon');             //numero de contrato
            $table->dateTime('ffc');            //fecha de firma de contrato
            $table->dateTime('fic');            //fecha de inicio de cobro 
            $table->string('tp');               //tipo de programa 
            $table->string('mc');               //modelo de cobro
            $table->string('sai');              //sistema a impactar 
            $table->string('ff');               //frecuncia de facturacion 
            $table->string('pp');               //plazo de pagos 
            $table->string('linkc');            //  link contrato 
            $table->string('linkca');           // link caratula 
            $table->boolean('ra');              //renovacion automatica
            $table->boolean('cofe');            //contrato original y firmado en expediente 
            $table->boolean('ca');              //caratula
            $table->boolean('prog');            //proteccion de genes
            $table->boolean('antiso');          //anticorrucion y soborno 
            $table->boolean('codicon');         //codigos de conducta
            $table->string('otro')->nullable(); //
            $table->string('duco');             //duracion de contrato
            $table->dateTime('feterco');        //fecha de terminacion de contrato 
            $table->boolean ('ajprein');         //ajuste de precio por inflacion 
            $table->dateTime('feajuin')->nullable();    //fecha del primer ajuste 
            $table->string  ('perajin')->nullable();      //Periodicidad del ajuste 
            $table->boolean ('ajpreprod');               //Ajuste de precio por productividad
            $table->dateTime('fepajprod')->nullable();  //Fecha del primer ajuste
            $table->string  ('peajprod')->nullable();     //Periodicidad del ajuste
            $table->boolean ('ajpreco');                 //Ajuste de precio por contrato
            $table->dateTime('fepajpre')->nullable();   //Fecha del primer ajuste
            $table->string  ('perajpre')->nullable();     //Periodicidad del ajuste
            $table->string('kam');
            $table->string('kad');
            $table->string('cg');//comentarios generales 
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
        Schema::dropIfExists('contratos');
    }
}
