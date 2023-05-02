<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ActivityLogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('activity_logs')->delete();
        
        \DB::table('activity_logs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'log_name' => 'Document',
                'description' => 'created',
                'subject_type' => 'App\\Models\\Document',
                'event' => 'created',
                'subject_id' => 1,
                'causer_type' => 'App\\Models\\User',
                'causer_id' => 35,
                'properties' => '{"attributes":{"doc_number":null,"memo_number":null,"origin_id":1,"mor_id":1,"doctype_id":1,"user_id":35,"status":0,"date_received":"2023-01-13","deadline":"2023-01-16","control_number":null,"subject":"test 1","updated_at":"2023-01-13T03:43:37.000000Z"}}',
                'batch_uuid' => NULL,
                'created_at' => '2023-01-13 11:43:38',
                'updated_at' => '2023-01-13 11:43:38',
            ),
            1 => 
            array (
                'id' => 2,
                'log_name' => 'Document',
                'description' => 'updated',
                'subject_type' => 'App\\Models\\Document',
                'event' => 'updated',
                'subject_id' => 1,
                'causer_type' => 'App\\Models\\User',
                'causer_id' => 35,
                'properties' => '{"attributes":{"doc_number":"TN-2023-01-13-0001","origin_id":1,"mor_id":1,"doctype_id":1,"user_id":35,"status":0,"date_received":"2023-01-13","deadline":"2023-01-16","subject":"test 1","updated_at":"2023-01-13T03:43:37.000000Z"},"old":{"doc_number":null,"origin_id":null,"mor_id":null,"doctype_id":null,"user_id":null,"status":null,"date_received":null,"deadline":null,"subject":null,"updated_at":null}}',
                'batch_uuid' => NULL,
                'created_at' => '2023-01-13 11:43:38',
                'updated_at' => '2023-01-13 11:43:38',
            ),
            2 => 
            array (
                'id' => 3,
                'log_name' => 'Document Route',
                'description' => 'created',
                'subject_type' => 'App\\Models\\DocRoutes',
                'event' => 'created',
                'subject_id' => 1,
                'causer_type' => 'App\\Models\\User',
                'causer_id' => 35,
                'properties' => '{"attributes":{"date_received":null,"remarks":"Forwarded toJerry Tizon","employee_id":null}}',
                'batch_uuid' => NULL,
                'created_at' => '2023-01-13 11:43:38',
                'updated_at' => '2023-01-13 11:43:38',
            ),
            3 => 
            array (
                'id' => 4,
                'log_name' => 'Document',
                'description' => 'created',
                'subject_type' => 'App\\Models\\images',
                'event' => 'created',
                'subject_id' => 1,
                'causer_type' => 'App\\Models\\User',
                'causer_id' => 35,
                'properties' => '{"attributes":{"document_id":1,"image_path":"1673581418-pdf-lib-creation-example-pdf.pdf"}}',
                'batch_uuid' => NULL,
                'created_at' => '2023-01-13 11:43:38',
                'updated_at' => '2023-01-13 11:43:38',
            ),
            4 => 
            array (
                'id' => 5,
                'log_name' => 'Document',
                'description' => 'updated',
                'subject_type' => 'App\\Models\\images',
                'event' => 'updated',
                'subject_id' => 1,
                'causer_type' => 'App\\Models\\User',
                'causer_id' => 4,
                'properties' => '{"attributes":[],"old":[]}',
                'batch_uuid' => NULL,
                'created_at' => '2023-01-13 11:57:53',
                'updated_at' => '2023-01-13 11:57:53',
            ),
        ));
        
        
    }
}