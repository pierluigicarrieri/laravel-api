<?php

// ISSUE WITH THIS MIGRATION.
// WHEN MIGRATE COMMAND IS EXECUTED ERROR IS LAUNCHED, SAID TYPE_ID ALREADY CREATED IN PROJECTS TABLE

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
        // Schema::table('projects', function (Blueprint $table) {

        //         $table->foreignId('type_id')->constrained();    
                
        //     });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('projects', function (Blueprint $table) {
            
        //     $table->dropForeign('projects_type_id_foreign');

        //     $table->dropColumn('type_id');

        // });
    }
};
