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
       if (Schema::hasTable('uma') && !Schema::hasTable('uma_')) {
    Schema::rename('uma', 'uma_');
}
        Schema::dropIfExists('umashankars');
        Schema::dropIfExists('students');
        Schema::dropIfExists('umashanakars');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
