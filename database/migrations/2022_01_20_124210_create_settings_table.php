<?php

use App\Models\Setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('key');
            $table->text('value')->nullable();
            $table->timestamps();
        });

        Setting::create(['key'=>'website_name','value'=>'Shataphool']);
        Setting::create(['key'=>'logo','value'=>'logo.png']);
        Setting::create(['key'=>'logo_footer','value'=>'logo_footer.png']);
        Setting::create(['key'=>'phone_number','value'=>'+8801711111111']);
        Setting::create(['key'=>'email','value'=>'demo@email.com']);
        Setting::create(['key'=>'address','value'=>'Dhaka, Bangladesh']);
        Setting::create(['key'=>'facebook','value'=>'https://facebook.com']);
        Setting::create(['key'=>'youtube','value'=>'https://youtube.com']);
        Setting::create(['key'=>'linkedin','value'=>'https://linkedin.com']);
        Setting::create(['key'=>'office_name','value'=>'Head Office']);
        Setting::create(['key'=>'office_phone','value'=>'+8801711111111']);
        Setting::create(['key'=>'office_email','value'=>'demo@email.com']);
        Setting::create(['key'=>'office_address','value'=>'Dhaka, Bangladesh']);
        Setting::create(['key'=>'office_map','value'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3629.0943437269484!2d88.67794121499675!3d24.551401684200563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fb8ce4ef566df5%3A0x1ccdd5c7addc5c9d!2sJahanabad%20Union%20Council!5e0!3m2!1sen!2sbd!4v1596194213663!5m2!1sen!2sbd']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
