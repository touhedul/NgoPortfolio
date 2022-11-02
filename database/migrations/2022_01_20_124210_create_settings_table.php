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

        Setting::create(['key'=>'website_name','value'=>'IES LTD BD']);
        Setting::create(['key'=>'logo','value'=>'logo.png']);
        Setting::create(['key'=>'logo_footer','value'=>'logo_footer.png']);
        Setting::create(['key'=>'phone_number','value'=>'+880247114781']);
        Setting::create(['key'=>'email','value'=>'contact@ieslimitedbd.com']);
        Setting::create(['key'=>'address','value'=>'Monjuri Bhaban, Dhaka, Bangladesh']);
        Setting::create(['key'=>'facebook','value'=>'https://facebook.com']);
        Setting::create(['key'=>'youtube','value'=>'https://youtube.com']);
        Setting::create(['key'=>'linkedin','value'=>'https://linkedin.com']);
        Setting::create(['key'=>'experience','value'=>'15']);
        Setting::create(['key'=>'bank','value'=>'35']);
        Setting::create(['key'=>'corporate','value'=>'20']);
        Setting::create(['key'=>'project','value'=>'13250']);
        Setting::create(['key'=>'office_name','value'=>'Head Office']);
        Setting::create(['key'=>'office_phone','value'=>'+880247114781']);
        Setting::create(['key'=>'office_email','value'=>'contact@ieslimitedbd.com']);
        Setting::create(['key'=>'office_address','value'=>'Monjuri Bhaban, Dhaka, Bangladesh']);
        Setting::create(['key'=>'office_map','value'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116880.16880387929!2d90.28394416249999!3d23.729354799999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9649dce1869%3A0x7841f05d3b2af5f5!2sInspection%2C%20Engineering%20%26%20Survey%20(IES)%20Ltd.!5e0!3m2!1sen!2sbd!4v1667371373071!5m2!1sen!2sbd']);
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
