<?php

use App\Models\Category;
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


        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        $categories = [
            'Abbigliamento', 'Accessori', 'Arredamento', 'Auto e Moto', 'Bambini', 'Casa e Giardino', 'Collezionismo', 'Elettronica', 'Film e Musica', 'Fotografia', 'Giochi e Videogiochi', 'Hobby e Tempo Libero', 'Libri e Riviste', 'Nautica', 'Sport e Fitness', 'Strumenti Musicali', 'Telefonia', 'Ufficio e Industria', 'Viaggi e Vacanze', 'Altro'
        ];
        foreach ($categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
