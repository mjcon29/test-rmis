<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('images')->delete();
        
        \DB::table('images')->insert(array (
            0 => 
            array (
                'id' => 1,
                'document_id' => 1,
                'is_attachment' => 0,
                'content' => '',
                'image_path' => '1673581418-pdf-lib-creation-example-pdf.pdf',
                'password' => 'tjvYiydXiY',
                'created_at' => '2023-01-13 11:43:38',
                'updated_at' => '2023-01-13 11:57:53',
            ),
        ));
        
        
    }
}