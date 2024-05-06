<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('norm', 10)->default(''); // Default value set to an empty string
            $table->string('noopg', 10)->default('');
            $table->string('idsop', 4)->default('');
            $table->string('nama', 100)->default('');
            $table->char('jk', 1)->default('');
            $table->string('hp', 200)->default('');
            $table->mediumText('almt')->default(''); // Default value set to an empty string
            $table->string('jns', 100)->default('');
            $table->string('sts', 200)->default('');
            $table->string('nmp', 200)->default('');
            $table->string('noas', 20)->default('');
            $table->string('kwn', 20)->default('');
            $table->string('email', 200)->default('');
            $table->date('tglhr')->nullable(); // Using nullable instead of default '0000-00-00'
            $table->char('gol', 3)->default('');
            $table->integer('brt')->default(0);
            $table->mediumText('alrg')->default(''); // Default value set to an empty string
            $table->string('foto', 254)->default('');
            $table->smallInteger('bl')->default(0);
            $table->string('jobs', 250)->default('');
            $table->integer('fee')->default(0);
            $table->date('rdate')->nullable();
            $table->longText('anamnesa')->default(''); // Default value set to an empty string
            $table->mediumText('notes')->default(''); // Default value set to an empty string
            $table->smallInteger('akt')->default(0);
            $table->string('user', 10)->default('');
            $table->timestamp('tgl')->nullable(); // Using nullable instead of default '0000-00-00 00:00:00'
            $table->bigInteger('created_by')->default(0);
            $table->timestamp('created')->useCurrent();
            $table->bigInteger('updated_by')->default(0);
            $table->timestamp('updated')->useCurrent();
            $table->integer('usia')->default(DB::raw('TIMESTAMPDIFF(YEAR, tglhr, CURDATE())'));
            $table->date('tglbuat')->default(DB::raw('CURRENT_DATE'));
            

            
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasiens');
    }
}
