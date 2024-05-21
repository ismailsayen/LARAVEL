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
            Schema::table('publications', function (Blueprint $table) {
                $table->unsignedBigInteger('id_profile');
                $table->foreign('id_profile')->references('id')->on('profiles')->cascadeOnDelete();
                //cascadeOnDelete veut dire que lorsque on suprrime un utilisateur c'est pub seront automatiquement supprimer

            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::table('publications', function (Blueprint $table) {
                $table->dropColumn('id_profile');
            });
        }
    };
