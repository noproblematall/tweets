<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'photo' => 'img/avatar.png',
            'password' => bcrypt('admin123456'),
            'api_token' => Str::random(60),
            'google' => "<script async src='https://www.googletagmanager.com/gtag/js?id=fake'></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'fake');
</script>"
        ]);
    }
}
