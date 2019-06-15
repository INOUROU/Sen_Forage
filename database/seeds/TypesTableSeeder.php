<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Type1=App\Type::firstOrCreate(["name"=>"Cash"],["uuid"=>(string)Str::uuid()]);
        $Type2=App\Type::firstOrCreate(["name"=>"Orange Money"],["uuid"=>(string)Str::uuid()]);
        $Type3=App\Type::firstOrCreate(["name"=>"Visa"],["uuid"=>(string)Str::uuid()]);
        $Type4=App\Type::firstOrCreate(["name"=>"Cheque"],["uuid"=>(string)Str::uuid()]);
        $Type5=App\Type::firstOrCreate(["name"=>"wari"],["uuid"=>(string)Str::uuid()]);
    }
}
