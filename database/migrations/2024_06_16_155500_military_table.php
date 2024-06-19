<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('military', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('country'); // страна, которая создала
            $table->string('type'); // тип техниики
            $table->integer('quantity'); // количество
            $table->json('used_in'); // страны в которых он применяется
            $table->json('selling_in'); // страны куда его поставляют официально
            $table->integer('destroyed'); // количество уничтоженных по данным странам
            $table->integer('effective'); // медиана эффективности на поле боя
            //$table->timestamps(); // добавление временных меток
            //TODO добавить год создание.добавить ссылку на картинку. добавить цену производства. добавить массу, ширину, количесвто екипажа, основное орудие, скорость
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('military');
    }
};

