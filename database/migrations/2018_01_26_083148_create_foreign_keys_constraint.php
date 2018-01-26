<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeysConstraint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recettes', function (Blueprint $table){
    
            /**
             * Lie la clé étrangère 'ingredients_id" à l'attribut 'id' de la table 'ingredients'
             * et définit l'action à lancer en cas de supression de l'entité parente 'Ingredient" :
             * 'cascade' signifie que si un ingrédient est supprimé, toutes les recettes faisant référence
             * à cette ingrédient seront supprimées. Idem pour les boissons
             */
           $table->foreign('ingredient_id')
                            ->references('id')->on('ingredients')
                            ->onDelete('cascade');
           $table->foreign('boisson_id')
                            ->references('id')->on('boissons')
                            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recettes', function (Blueprint $table){
            $table->dropForeign(['ingredient_id', 'boisson_id']);
        });
    }
}
