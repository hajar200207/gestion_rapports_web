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
            $table->string('cin')->unique();
            $table->string('cne')->unique();
        });
    }
    
    public function down()
    {
        Schema::table('etudiants', function (Blueprint $table) {
            $table->dropColumn('cin');
            $table->dropColumn('cne');
        });
    }
    
    /**
     * Reverse the migrations.
     */
   
};
