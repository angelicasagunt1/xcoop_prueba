<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Email;
use Illuminate\Support\Str;
use Carbon\Carbon;


class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) {
            DB::table('tickets')->insert([
                'ticket' => Str::random(4),
                'email_id' => Email::pluck('id')->random(),
                'expiration_date' => Carbon::today()->subDays(rand(0, 365)),
            ]);
        }
    }
}
