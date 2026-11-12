public function up(): void
{
    Schema::table('users', function (Blueprint $table) {
        $table->boolean('is_admin')->default(false)->after('password');
        $table->string('phone')->nullable()->after('is_admin');
        $table->string('professional_url')->nullable()->after('phone');
        $table->string('photo_path')->nullable()->after('professional_url');
    });
}

public function down(): void
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn(['is_admin', 'phone', 'professional_url', 'photo_path']);
    });
}
