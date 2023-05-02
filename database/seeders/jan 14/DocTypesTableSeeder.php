<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DocTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('doc_types')->delete();
        
        \DB::table('doc_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Memorandum',
                'created_at' => '2022-12-13 10:30:41',
                'updated_at' => '2022-12-13 10:30:41',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'TESDA Circular',
                'created_at' => '2022-12-13 10:30:41',
                'updated_at' => '2022-12-13 10:30:41',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'TESDA Order',
                'created_at' => '2022-12-13 10:30:41',
                'updated_at' => '2022-12-13 10:30:41',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Letter',
                'created_at' => '2022-12-13 10:30:41',
                'updated_at' => '2022-12-13 10:30:41',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Memorandum Circular',
                'created_at' => '2022-12-13 10:30:41',
                'updated_at' => '2022-12-13 10:30:41',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Advisory',
                'created_at' => '2022-12-13 10:30:41',
                'updated_at' => '2022-12-13 10:30:41',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'TESDA Bulletin',
                'created_at' => '2022-12-13 10:30:41',
                'updated_at' => '2022-12-13 10:30:41',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Travel Order',
                'created_at' => '2022-12-13 10:30:41',
                'updated_at' => '2022-12-13 10:30:41',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Travel Authority',
                'created_at' => '2022-12-13 10:30:41',
                'updated_at' => '2022-12-13 10:30:41',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Compensatory Time Off',
                'created_at' => '2022-12-13 10:30:41',
                'updated_at' => '2022-12-13 10:30:41',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Application for Leave',
                'created_at' => '2022-12-13 10:30:41',
                'updated_at' => '2022-12-13 10:30:41',
            ),
            11 => 
            array (
                'id' => 15,
                'name' => 'Disbursement Voucher',
                'created_at' => '2022-12-14 14:53:20',
                'updated_at' => '2022-12-14 14:53:20',
            ),
            12 => 
            array (
                'id' => 16,
                'name' => 'Obligation Request Status',
                'created_at' => '2022-12-14 14:53:45',
                'updated_at' => '2022-12-14 14:53:45',
            ),
            13 => 
            array (
                'id' => 17,
                'name' => 'Local Advice of Allotment',
                'created_at' => '2022-12-14 14:54:03',
                'updated_at' => '2022-12-14 14:54:03',
            ),
            14 => 
            array (
                'id' => 18,
                'name' => 'REPORT',
                'created_at' => '2022-12-14 15:11:16',
                'updated_at' => '2022-12-14 15:11:16',
            ),
            15 => 
            array (
                'id' => 57,
                'name' => 'Office Order',
                'created_at' => '2022-12-15 14:03:34',
                'updated_at' => '2022-12-15 14:03:34',
            ),
            16 => 
            array (
                'id' => 59,
                'name' => 'CSW',
                'created_at' => '2022-12-15 14:45:12',
                'updated_at' => '2022-12-15 14:45:12',
            ),
            17 => 
            array (
                'id' => 61,
                'name' => 'Itinerary of Travel',
                'created_at' => '2022-12-15 15:52:18',
                'updated_at' => '2022-12-15 15:52:18',
            ),
            18 => 
            array (
                'id' => 64,
                'name' => 'Certificate of Participation',
                'created_at' => '2022-12-15 16:00:33',
                'updated_at' => '2022-12-15 16:00:33',
            ),
            19 => 
            array (
                'id' => 69,
                'name' => 'Purchase Request',
                'created_at' => '2022-12-16 10:48:57',
                'updated_at' => '2022-12-16 10:48:57',
            ),
            20 => 
            array (
                'id' => 71,
                'name' => 'Purchase Order',
                'created_at' => '2022-12-16 10:58:58',
                'updated_at' => '2022-12-16 10:58:58',
            ),
            21 => 
            array (
                'id' => 72,
                'name' => 'Requisition and issue slip',
                'created_at' => '2022-12-16 10:59:28',
                'updated_at' => '2022-12-16 10:59:28',
            ),
            22 => 
            array (
                'id' => 95,
                'name' => 'Request to render Overtime',
                'created_at' => '2022-12-16 16:36:02',
                'updated_at' => '2022-12-16 16:36:02',
            ),
            23 => 
            array (
                'id' => 97,
                'name' => 'Others',
                'created_at' => '2022-12-16 17:22:26',
                'updated_at' => '2022-12-16 17:22:26',
            ),
            24 => 
            array (
                'id' => 98,
                'name' => 'Billing Statement',
                'created_at' => '2022-12-19 10:45:09',
                'updated_at' => '2022-12-19 10:45:09',
            ),
            25 => 
            array (
                'id' => 99,
                'name' => 'Memorandum UTPRAS',
                'created_at' => '2022-12-19 11:34:58',
                'updated_at' => '2022-12-19 11:34:58',
            ),
            26 => 
            array (
                'id' => 100,
                'name' => 'GSIS Insurance',
                'created_at' => '2022-12-21 10:04:49',
                'updated_at' => '2022-12-21 10:04:49',
            ),
            27 => 
            array (
                'id' => 101,
                'name' => 'Transmittal',
                'created_at' => '2022-12-21 10:05:27',
                'updated_at' => '2022-12-21 10:05:27',
            ),
            28 => 
            array (
                'id' => 102,
                'name' => 'Terms Of Reference',
                'created_at' => '2022-12-21 10:05:56',
                'updated_at' => '2022-12-21 10:05:56',
            ),
            29 => 
            array (
                'id' => 103,
                'name' => 'Abstract of Quotation',
                'created_at' => '2022-12-21 11:05:41',
                'updated_at' => '2022-12-21 11:05:41',
            ),
            30 => 
            array (
                'id' => 104,
                'name' => 'Conduct of Assessment',
                'created_at' => '2022-12-23 11:30:49',
                'updated_at' => '2022-12-23 11:30:49',
            ),
            31 => 
            array (
                'id' => 105,
            'name' => 'Request for Assessor (within the region)',
                'created_at' => '2022-12-29 09:27:24',
                'updated_at' => '2022-12-29 09:27:24',
            ),
            32 => 
            array (
                'id' => 106,
            'name' => 'Request For Assessor (outside the region)',
                'created_at' => '2022-12-29 09:28:12',
                'updated_at' => '2022-12-29 09:28:12',
            ),
            33 => 
            array (
                'id' => 107,
                'name' => 'Conduct of Competency Assessment',
                'created_at' => '2022-12-29 09:29:56',
                'updated_at' => '2022-12-29 09:29:56',
            ),
            34 => 
            array (
                'id' => 108,
            'name' => 'Conduct of Competency Assessment ( CBP-PLA )',
                'created_at' => '2022-12-29 09:30:13',
                'updated_at' => '2022-12-29 09:30:13',
            ),
            35 => 
            array (
                'id' => 109,
                'name' => 'Request For REPM for TM I',
                'created_at' => '2022-12-29 09:30:55',
                'updated_at' => '2022-12-29 09:30:55',
            ),
            36 => 
            array (
                'id' => 110,
                'name' => 'Request For REPM for TM II',
                'created_at' => '2022-12-29 09:31:14',
                'updated_at' => '2022-12-29 09:31:14',
            ),
            37 => 
            array (
                'id' => 111,
                'name' => 'Request For Approval of Ocular Inspection',
                'created_at' => '2022-12-29 09:33:03',
                'updated_at' => '2022-12-29 09:33:03',
            ),
            38 => 
            array (
                'id' => 112,
                'name' => 'Request For Approval of Re-Ocular Inspection',
                'created_at' => '2022-12-29 09:33:50',
                'updated_at' => '2022-12-29 09:33:50',
            ),
            39 => 
            array (
                'id' => 113,
                'name' => 'Request For Approval of Capability Building Program Participants',
                'created_at' => '2022-12-29 09:34:44',
                'updated_at' => '2022-12-29 09:34:44',
            ),
            40 => 
            array (
                'id' => 114,
                'name' => 'Request For NTTC Level I',
                'created_at' => '2022-12-29 09:35:11',
                'updated_at' => '2022-12-29 09:35:11',
            ),
            41 => 
            array (
                'id' => 115,
                'name' => 'Attendance to Capability Building Program for various qualifications',
                'created_at' => '2022-12-29 09:36:14',
                'updated_at' => '2022-12-29 09:36:14',
            ),
            42 => 
            array (
                'id' => 116,
                'name' => 'Re-scheduling of Assessment',
                'created_at' => '2022-12-29 09:37:27',
                'updated_at' => '2022-12-29 09:37:27',
            ),
            43 => 
            array (
                'id' => 117,
            'name' => 'Application for Program (WTR)',
                'created_at' => '2022-12-29 09:38:07',
                'updated_at' => '2022-12-29 09:38:07',
            ),
            44 => 
            array (
                'id' => 118,
            'name' => 'Application for Program ( NTR )',
                'created_at' => '2022-12-29 09:38:30',
                'updated_at' => '2022-12-29 09:38:30',
            ),
            45 => 
            array (
                'id' => 119,
                'name' => 'Flexible Learning Delivery',
                'created_at' => '2022-12-29 09:39:02',
                'updated_at' => '2022-12-29 09:39:02',
            ),
            46 => 
            array (
                'id' => 120,
                'name' => 'Application for Change/Additional Trainer',
                'created_at' => '2022-12-29 09:39:36',
                'updated_at' => '2022-12-29 09:39:36',
            ),
            47 => 
            array (
                'id' => 121,
                'name' => 'Application for Community Based Training',
                'created_at' => '2022-12-29 09:40:43',
                'updated_at' => '2022-12-29 09:40:43',
            ),
            48 => 
            array (
                'id' => 122,
                'name' => 'Application for Diploma Program',
                'created_at' => '2022-12-29 09:41:04',
                'updated_at' => '2022-12-29 09:41:04',
            ),
            49 => 
            array (
                'id' => 123,
                'name' => 'Compliance Audit Report',
                'created_at' => '2022-12-29 13:54:21',
                'updated_at' => '2022-12-29 13:54:21',
            ),
            50 => 
            array (
                'id' => 124,
                'name' => 'Technical Assistance Report',
                'created_at' => '2022-12-29 13:55:52',
                'updated_at' => '2022-12-29 13:55:52',
            ),
            51 => 
            array (
                'id' => 125,
                'name' => 'UTPRAS Program Registration Tracking Sheets',
                'created_at' => '2022-12-29 13:56:41',
                'updated_at' => '2022-12-29 13:56:41',
            ),
            52 => 
            array (
                'id' => 126,
                'name' => 'CGAP Accomplishment Report',
                'created_at' => '2022-12-29 13:57:09',
                'updated_at' => '2022-12-29 13:57:09',
            ),
        ));
        
        
    }
}