<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('etudiants', function (Blueprint $table) {
            $table->string('rapport')->nullable(); // Or any other column type based on your needs
        });
    }
    
    public function down()
    {
        Schema::table('etudiants', function (Blueprint $table) {
            $table->dropColumn('rapport');
        });
    }
    
};
