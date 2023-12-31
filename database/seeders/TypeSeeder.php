<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['FrontEnd', 'Backend', 'FullStack', 'Design', 'DevOps'];
        foreach ($types as $type) {
            $new_type = new Type();
            $new_type->type = $type;
            $new_type->slug = Str::slug($type);
            $new_type->save();
        }
    }
}
