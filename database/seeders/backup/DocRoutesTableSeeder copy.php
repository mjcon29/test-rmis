<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DocRoutesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('doc_routes')->delete();
        
        \DB::table('doc_routes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'document_id' => 1,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-13 10:34:53',
                'updated_at' => '2022-12-13 10:34:53',
            ),
            1 => 
            array (
                'id' => 2,
                'document_id' => 2,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-14 10:43:49',
                'updated_at' => '2022-12-14 10:43:49',
            ),
            2 => 
            array (
                'id' => 3,
                'document_id' => 1,
                'user_id' => 1,
                'remarks' => 'File this upon compliance',
                'created_at' => '2022-12-14 10:49:53',
                'updated_at' => '2022-12-14 10:49:53',
            ),
            3 => 
            array (
                'id' => 4,
                'document_id' => 3,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-14 10:51:22',
                'updated_at' => '2022-12-14 10:51:22',
            ),
            4 => 
            array (
                'id' => 5,
                'document_id' => 2,
                'user_id' => 1,
                'remarks' => 'Submit more details info as provided in the marginal annotations',
                'created_at' => '2022-12-14 10:54:33',
                'updated_at' => '2022-12-14 10:54:33',
            ),
            5 => 
            array (
                'id' => 6,
                'document_id' => 3,
                'user_id' => 1,
                'remarks' => 'comply as instructed',
                'created_at' => '2022-12-14 10:56:19',
                'updated_at' => '2022-12-14 10:56:19',
            ),
            6 => 
            array (
                'id' => 7,
                'document_id' => 4,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-14 12:32:16',
                'updated_at' => '2022-12-14 12:32:16',
            ),
            7 => 
            array (
                'id' => 8,
                'document_id' => 3,
                'user_id' => 3,
                'remarks' => 'Prepare endorsement to CO',
                'created_at' => '2022-12-14 13:09:18',
                'updated_at' => '2022-12-14 13:09:18',
            ),
            8 => 
            array (
                'id' => 9,
                'document_id' => 2,
                'user_id' => 3,
                'remarks' => 'Provide details for RD\'s reference.',
                'created_at' => '2022-12-14 13:11:54',
                'updated_at' => '2022-12-14 13:11:54',
            ),
            9 => 
            array (
                'id' => 10,
                'document_id' => 5,
                'user_id' => 3,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-14 13:26:04',
                'updated_at' => '2022-12-14 13:26:04',
            ),
            10 => 
            array (
                'id' => 11,
                'document_id' => 6,
                'user_id' => 3,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-14 13:35:47',
                'updated_at' => '2022-12-14 13:35:47',
            ),
            11 => 
            array (
                'id' => 12,
                'document_id' => 2,
                'user_id' => 5,
                'remarks' => 'Ma\'am, this is a revised memo as an action taken re RD\'s comments.
For your endorsement, please.
Thank you.',
                'created_at' => '2022-12-14 13:47:57',
                'updated_at' => '2022-12-14 13:47:57',
            ),
            12 => 
            array (
                'id' => 13,
                'document_id' => 2,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-14 13:54:45',
                'updated_at' => '2022-12-14 13:54:45',
            ),
            13 => 
            array (
                'id' => 14,
                'document_id' => 4,
                'user_id' => 1,
                'remarks' => 'Forward to NOPO, comply as instructed',
                'created_at' => '2022-12-14 13:56:58',
                'updated_at' => '2022-12-14 13:56:58',
            ),
            14 => 
            array (
                'id' => 15,
                'document_id' => 2,
                'user_id' => 1,
                'remarks' => 'return to PO Antique with corresponding comments',
                'created_at' => '2022-12-14 14:01:59',
                'updated_at' => '2022-12-14 14:01:59',
            ),
            15 => 
            array (
                'id' => 16,
                'document_id' => 2,
                'user_id' => 3,
                'remarks' => 'Kindly take note of RD\'s guidance.',
                'created_at' => '2022-12-14 14:20:13',
                'updated_at' => '2022-12-14 14:20:13',
            ),
            16 => 
            array (
                'id' => 17,
                'document_id' => 5,
                'user_id' => 1,
                'remarks' => 'Returned',
                'created_at' => '2022-12-14 14:20:23',
                'updated_at' => '2022-12-14 14:20:23',
            ),
            17 => 
            array (
                'id' => 18,
                'document_id' => 7,
                'user_id' => 5,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-14 14:23:03',
                'updated_at' => '2022-12-14 14:23:03',
            ),
            18 => 
            array (
                'id' => 19,
                'document_id' => 8,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-14 14:23:14',
                'updated_at' => '2022-12-14 14:23:14',
            ),
            19 => 
            array (
                'id' => 20,
                'document_id' => 4,
                'user_id' => 3,
                'remarks' => 'Ensure compliance of NOPO',
                'created_at' => '2022-12-14 14:24:01',
                'updated_at' => '2022-12-14 14:24:01',
            ),
            20 => 
            array (
                'id' => 21,
                'document_id' => 7,
                'user_id' => 3,
                'remarks' => 'Letter of Approval for the Change/Additional Designated Trainer of PCCI',
                'created_at' => '2022-12-14 14:28:01',
                'updated_at' => '2022-12-14 14:28:01',
            ),
            21 => 
            array (
                'id' => 22,
                'document_id' => 3,
                'user_id' => 4,
                'remarks' => 'Ma\'am for your Comments/Suggestions/Initials.. Thank you..',
                'created_at' => '2022-12-14 14:28:06',
                'updated_at' => '2022-12-14 14:28:06',
            ),
            22 => 
            array (
                'id' => 23,
                'document_id' => 9,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-14 14:29:50',
                'updated_at' => '2022-12-14 14:29:50',
            ),
            23 => 
            array (
                'id' => 24,
                'document_id' => 6,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-14 14:29:59',
                'updated_at' => '2022-12-14 14:29:59',
            ),
            24 => 
            array (
                'id' => 25,
                'document_id' => 3,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-14 14:32:58',
                'updated_at' => '2022-12-14 14:32:58',
            ),
            25 => 
            array (
                'id' => 26,
                'document_id' => 7,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-14 15:04:44',
                'updated_at' => '2022-12-14 15:04:44',
            ),
            26 => 
            array (
                'id' => 27,
                'document_id' => 3,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-14 15:05:38',
                'updated_at' => '2022-12-14 15:05:38',
            ),
            27 => 
            array (
                'id' => 28,
                'document_id' => 8,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-14 15:07:23',
                'updated_at' => '2022-12-14 15:07:23',
            ),
            28 => 
            array (
                'id' => 29,
                'document_id' => 8,
                'user_id' => 1,
                'remarks' => 'Endorse to CO',
                'created_at' => '2022-12-14 15:10:19',
                'updated_at' => '2022-12-14 15:10:19',
            ),
            29 => 
            array (
                'id' => 30,
                'document_id' => 10,
                'user_id' => 7,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-14 15:11:16',
                'updated_at' => '2022-12-14 15:11:16',
            ),
            30 => 
            array (
                'id' => 31,
                'document_id' => 9,
                'user_id' => 1,
                'remarks' => 'let\'s discuss

mae: calendar this',
                'created_at' => '2022-12-14 15:17:35',
                'updated_at' => '2022-12-14 15:17:35',
            ),
            31 => 
            array (
                'id' => 32,
                'document_id' => 11,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-14 15:42:43',
                'updated_at' => '2022-12-14 15:42:43',
            ),
            32 => 
            array (
                'id' => 33,
                'document_id' => 8,
                'user_id' => 4,
                'remarks' => NULL,
                'created_at' => '2022-12-14 17:07:01',
                'updated_at' => '2022-12-14 17:07:01',
            ),
            33 => 
            array (
                'id' => 34,
                'document_id' => 2,
                'user_id' => 5,
                'remarks' => 'Westtrade  Technical Training and Assessment Center, Inc submitted other program registration applications namely:
1.  Agricultural Crops Production NC II - with existing 3 registered programs in the lone district but with Justification from the Provincial Office
2. Gas Tungsten Arc Welding NC II - No registered program in the Province of Antique

Requesting permission to proceed with the processing of their application for Organic Agriculture Production NC II, Ma\'am.
Thank you.',
                'created_at' => '2022-12-14 17:23:50',
                'updated_at' => '2022-12-14 17:23:50',
            ),
            34 => 
            array (
                'id' => 35,
                'document_id' => 8,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-14 18:33:20',
                'updated_at' => '2022-12-14 18:33:20',
            ),
            35 => 
            array (
                'id' => 36,
                'document_id' => 12,
                'user_id' => 3,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-14 18:38:09',
                'updated_at' => '2022-12-14 18:38:09',
            ),
            36 => 
            array (
                'id' => 37,
                'document_id' => 13,
                'user_id' => 3,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-14 18:39:37',
                'updated_at' => '2022-12-14 18:39:37',
            ),
            37 => 
            array (
                'id' => 38,
                'document_id' => 14,
                'user_id' => 3,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-14 18:41:02',
                'updated_at' => '2022-12-14 18:41:02',
            ),
            38 => 
            array (
                'id' => 39,
                'document_id' => 15,
                'user_id' => 3,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-14 18:42:42',
                'updated_at' => '2022-12-14 18:42:42',
            ),
            39 => 
            array (
                'id' => 40,
                'document_id' => 16,
                'user_id' => 3,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-14 18:43:56',
                'updated_at' => '2022-12-14 18:43:56',
            ),
            40 => 
            array (
                'id' => 41,
                'document_id' => 8,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-14 18:45:33',
                'updated_at' => '2022-12-14 18:45:33',
            ),
            41 => 
            array (
                'id' => 42,
                'document_id' => 11,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-14 18:51:52',
                'updated_at' => '2022-12-14 18:51:52',
            ),
            42 => 
            array (
                'id' => 43,
                'document_id' => 12,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-14 19:14:50',
                'updated_at' => '2022-12-14 19:14:50',
            ),
            43 => 
            array (
                'id' => 44,
                'document_id' => 13,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-14 19:18:38',
                'updated_at' => '2022-12-14 19:18:38',
            ),
            44 => 
            array (
                'id' => 45,
                'document_id' => 14,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-14 19:21:16',
                'updated_at' => '2022-12-14 19:21:16',
            ),
            45 => 
            array (
                'id' => 46,
                'document_id' => 15,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-14 19:22:17',
                'updated_at' => '2022-12-14 19:22:17',
            ),
            46 => 
            array (
                'id' => 47,
                'document_id' => 16,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-14 19:25:07',
                'updated_at' => '2022-12-14 19:25:07',
            ),
            47 => 
            array (
                'id' => 48,
                'document_id' => 10,
                'user_id' => 3,
                'remarks' => 'Kindly submit to CO',
                'created_at' => '2022-12-15 08:54:00',
                'updated_at' => '2022-12-15 08:54:00',
            ),
            48 => 
            array (
                'id' => 49,
                'document_id' => 17,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 09:04:13',
                'updated_at' => '2022-12-15 09:04:13',
            ),
            49 => 
            array (
                'id' => 50,
                'document_id' => 18,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 09:08:26',
                'updated_at' => '2022-12-15 09:08:26',
            ),
            50 => 
            array (
                'id' => 51,
                'document_id' => 19,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 09:09:50',
                'updated_at' => '2022-12-15 09:09:50',
            ),
            51 => 
            array (
                'id' => 52,
                'document_id' => 20,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 09:10:36',
                'updated_at' => '2022-12-15 09:10:36',
            ),
            52 => 
            array (
                'id' => 53,
                'document_id' => 21,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 09:11:39',
                'updated_at' => '2022-12-15 09:11:39',
            ),
            53 => 
            array (
                'id' => 54,
                'document_id' => 22,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 09:12:44',
                'updated_at' => '2022-12-15 09:12:44',
            ),
            54 => 
            array (
                'id' => 55,
                'document_id' => 23,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 09:13:59',
                'updated_at' => '2022-12-15 09:13:59',
            ),
            55 => 
            array (
                'id' => 56,
                'document_id' => 24,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 09:15:46',
                'updated_at' => '2022-12-15 09:15:46',
            ),
            56 => 
            array (
                'id' => 57,
                'document_id' => 25,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 09:16:40',
                'updated_at' => '2022-12-15 09:16:40',
            ),
            57 => 
            array (
                'id' => 58,
                'document_id' => 26,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 09:18:39',
                'updated_at' => '2022-12-15 09:18:39',
            ),
            58 => 
            array (
                'id' => 59,
                'document_id' => 27,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 09:27:09',
                'updated_at' => '2022-12-15 09:27:09',
            ),
            59 => 
            array (
                'id' => 60,
                'document_id' => 28,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 09:28:23',
                'updated_at' => '2022-12-15 09:28:23',
            ),
            60 => 
            array (
                'id' => 61,
                'document_id' => 29,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 09:30:33',
                'updated_at' => '2022-12-15 09:30:33',
            ),
            61 => 
            array (
                'id' => 62,
                'document_id' => 30,
                'user_id' => 3,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-15 09:32:45',
                'updated_at' => '2022-12-15 09:32:45',
            ),
            62 => 
            array (
                'id' => 63,
                'document_id' => 18,
                'user_id' => 1,
                'remarks' => 'if assessor is available then the same is approved',
                'created_at' => '2022-12-15 09:57:37',
                'updated_at' => '2022-12-15 09:57:37',
            ),
            63 => 
            array (
                'id' => 64,
                'document_id' => 22,
                'user_id' => 1,
                'remarks' => 'disseminate this to all OUs',
                'created_at' => '2022-12-15 10:06:15',
                'updated_at' => '2022-12-15 10:06:15',
            ),
            64 => 
            array (
                'id' => 65,
                'document_id' => 18,
                'user_id' => 3,
                'remarks' => 'Kindly follow-up to the concerned office if Mr. Ronelio F. Pardilla, Jr is available. Then, prepare memo rely.',
                'created_at' => '2022-12-15 10:10:48',
                'updated_at' => '2022-12-15 10:10:48',
            ),
            65 => 
            array (
                'id' => 66,
                'document_id' => 27,
                'user_id' => 1,
                'remarks' => 'Why this request just now?

Why no endorsement from PD Carlito?',
                'created_at' => '2022-12-15 10:10:58',
                'updated_at' => '2022-12-15 10:10:58',
            ),
            66 => 
            array (
                'id' => 67,
                'document_id' => 19,
                'user_id' => 1,
                'remarks' => 'is there prior arrangement? is the assessor available?',
                'created_at' => '2022-12-15 10:16:21',
                'updated_at' => '2022-12-15 10:16:21',
            ),
            67 => 
            array (
                'id' => 68,
                'document_id' => 17,
                'user_id' => 1,
                'remarks' => 'Where\'s the attachments?',
                'created_at' => '2022-12-15 10:19:07',
                'updated_at' => '2022-12-15 10:19:07',
            ),
            68 => 
            array (
                'id' => 69,
                'document_id' => 20,
                'user_id' => 1,
                'remarks' => 'Granted for as long as assessor is available',
                'created_at' => '2022-12-15 10:22:55',
                'updated_at' => '2022-12-15 10:22:55',
            ),
            69 => 
            array (
                'id' => 70,
                'document_id' => 27,
                'user_id' => 3,
                'remarks' => 'Follow - up the availability of Ms. Alilain. Prepare memo reply.',
                'created_at' => '2022-12-15 10:25:27',
                'updated_at' => '2022-12-15 10:25:27',
            ),
            70 => 
            array (
                'id' => 71,
                'document_id' => 19,
                'user_id' => 3,
                'remarks' => 'Follow-up the availability of the concerned assessor. Prepare Memo Reply.',
                'created_at' => '2022-12-15 10:27:04',
                'updated_at' => '2022-12-15 10:27:04',
            ),
            71 => 
            array (
                'id' => 72,
                'document_id' => 31,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 10:27:18',
                'updated_at' => '2022-12-15 10:27:18',
            ),
            72 => 
            array (
                'id' => 73,
                'document_id' => 20,
                'user_id' => 3,
                'remarks' => 'Follow-up the availability of assessor. Prepare memo reply.',
                'created_at' => '2022-12-15 10:31:46',
                'updated_at' => '2022-12-15 10:31:46',
            ),
            73 => 
            array (
                'id' => 74,
                'document_id' => 32,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 11:11:25',
                'updated_at' => '2022-12-15 11:11:25',
            ),
            74 => 
            array (
                'id' => 75,
                'document_id' => 33,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 11:13:11',
                'updated_at' => '2022-12-15 11:13:11',
            ),
            75 => 
            array (
                'id' => 76,
                'document_id' => 34,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 11:14:46',
                'updated_at' => '2022-12-15 11:14:46',
            ),
            76 => 
            array (
                'id' => 77,
                'document_id' => 35,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 11:26:03',
                'updated_at' => '2022-12-15 11:26:03',
            ),
            77 => 
            array (
                'id' => 78,
                'document_id' => 36,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 11:27:18',
                'updated_at' => '2022-12-15 11:27:18',
            ),
            78 => 
            array (
                'id' => 79,
                'document_id' => 37,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 11:28:25',
                'updated_at' => '2022-12-15 11:28:25',
            ),
            79 => 
            array (
                'id' => 80,
                'document_id' => 21,
                'user_id' => 1,
                'remarks' => 'approved as to schedule but deferred the date',
                'created_at' => '2022-12-15 11:28:41',
                'updated_at' => '2022-12-15 11:28:41',
            ),
            80 => 
            array (
                'id' => 81,
                'document_id' => 38,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 11:29:14',
                'updated_at' => '2022-12-15 11:29:14',
            ),
            81 => 
            array (
                'id' => 82,
                'document_id' => 39,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 11:30:27',
                'updated_at' => '2022-12-15 11:30:27',
            ),
            82 => 
            array (
                'id' => 83,
                'document_id' => 40,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 11:49:57',
                'updated_at' => '2022-12-15 11:49:57',
            ),
            83 => 
            array (
                'id' => 84,
                'document_id' => 41,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 11:52:33',
                'updated_at' => '2022-12-15 11:52:33',
            ),
            84 => 
            array (
                'id' => 85,
                'document_id' => 42,
                'user_id' => 4,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-15 11:59:53',
                'updated_at' => '2022-12-15 11:59:53',
            ),
            85 => 
            array (
                'id' => 86,
                'document_id' => 23,
                'user_id' => 1,
                'remarks' => 'Provide copy as requested',
                'created_at' => '2022-12-15 11:59:58',
                'updated_at' => '2022-12-15 11:59:58',
            ),
            86 => 
            array (
                'id' => 87,
                'document_id' => 24,
                'user_id' => 1,
                'remarks' => 'request shall be endorsed early next year for lack of material time to implement',
                'created_at' => '2022-12-15 12:07:40',
                'updated_at' => '2022-12-15 12:07:40',
            ),
            87 => 
            array (
                'id' => 88,
                'document_id' => 36,
                'user_id' => 1,
                'remarks' => 'forward to CO',
                'created_at' => '2022-12-15 12:11:20',
                'updated_at' => '2022-12-15 12:11:20',
            ),
            88 => 
            array (
                'id' => 89,
                'document_id' => 36,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-15 12:56:12',
                'updated_at' => '2022-12-15 12:56:12',
            ),
            89 => 
            array (
                'id' => 90,
                'document_id' => 24,
                'user_id' => 3,
                'remarks' => 'Set a meeting  with RD, let\'s discuss this with him. Draft reply to ATINO.',
                'created_at' => '2022-12-15 12:59:52',
                'updated_at' => '2022-12-15 12:59:52',
            ),
            90 => 
            array (
                'id' => 91,
                'document_id' => 21,
                'user_id' => 3,
                'remarks' => 'Notify the concerned PO.',
                'created_at' => '2022-12-15 13:01:58',
                'updated_at' => '2022-12-15 13:01:58',
            ),
            91 => 
            array (
                'id' => 93,
                'document_id' => 43,
                'user_id' => 8,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-15 13:35:48',
                'updated_at' => '2022-12-15 13:35:48',
            ),
            92 => 
            array (
                'id' => 94,
                'document_id' => 44,
                'user_id' => 8,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-15 13:47:51',
                'updated_at' => '2022-12-15 13:47:51',
            ),
            93 => 
            array (
                'id' => 95,
                'document_id' => 45,
                'user_id' => 8,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-15 13:48:55',
                'updated_at' => '2022-12-15 13:48:55',
            ),
            94 => 
            array (
                'id' => 96,
                'document_id' => 46,
                'user_id' => 8,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-15 13:49:35',
                'updated_at' => '2022-12-15 13:49:35',
            ),
            95 => 
            array (
                'id' => 97,
                'document_id' => 47,
                'user_id' => 8,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-15 13:50:14',
                'updated_at' => '2022-12-15 13:50:14',
            ),
            96 => 
            array (
                'id' => 98,
                'document_id' => 48,
                'user_id' => 8,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-15 13:56:07',
                'updated_at' => '2022-12-15 13:56:07',
            ),
            97 => 
            array (
                'id' => 99,
                'document_id' => 25,
                'user_id' => 1,
                'remarks' => 'for comment and recommendation',
                'created_at' => '2022-12-15 14:01:21',
                'updated_at' => '2022-12-15 14:01:21',
            ),
            98 => 
            array (
                'id' => 100,
                'document_id' => 49,
                'user_id' => 6,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-15 14:03:35',
                'updated_at' => '2022-12-15 14:03:35',
            ),
            99 => 
            array (
                'id' => 101,
                'document_id' => 42,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-15 14:06:52',
                'updated_at' => '2022-12-15 14:06:52',
            ),
            100 => 
            array (
                'id' => 102,
                'document_id' => 25,
                'user_id' => 3,
                'remarks' => 'Let\'s discuss this.',
                'created_at' => '2022-12-15 14:16:29',
                'updated_at' => '2022-12-15 14:16:29',
            ),
            101 => 
            array (
                'id' => 103,
                'document_id' => 49,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-15 14:17:41',
                'updated_at' => '2022-12-15 14:17:41',
            ),
            102 => 
            array (
                'id' => 104,
                'document_id' => 36,
                'user_id' => 4,
                'remarks' => NULL,
                'created_at' => '2022-12-15 14:22:38',
                'updated_at' => '2022-12-15 14:22:38',
            ),
            103 => 
            array (
                'id' => 105,
                'document_id' => 50,
                'user_id' => 34,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-15 14:35:13',
                'updated_at' => '2022-12-15 14:35:13',
            ),
            104 => 
            array (
                'id' => 106,
                'document_id' => 36,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-15 14:35:39',
                'updated_at' => '2022-12-15 14:35:39',
            ),
            105 => 
            array (
                'id' => 107,
                'document_id' => 26,
                'user_id' => 1,
                'remarks' => 'Returned to LGPC for appropriate action by the administrator',
                'created_at' => '2022-12-15 14:41:01',
                'updated_at' => '2022-12-15 14:41:01',
            ),
            106 => 
            array (
                'id' => 108,
                'document_id' => 51,
                'user_id' => 34,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-15 14:45:12',
                'updated_at' => '2022-12-15 14:45:12',
            ),
            107 => 
            array (
                'id' => 109,
                'document_id' => 27,
                'user_id' => 5,
                'remarks' => 'Already acted per Memorandum ROD6 U-347 s. 2022 dated Dec. 14, 2022 signed by RD on the same date.  Disseminated to PTC-Cadiz thru Negros Occidental Provincial Office Dec. 15, 2022',
                'created_at' => '2022-12-15 14:55:05',
                'updated_at' => '2022-12-15 14:55:05',
            ),
            108 => 
            array (
                'id' => 110,
                'document_id' => 26,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-15 15:16:16',
                'updated_at' => '2022-12-15 15:16:16',
            ),
            109 => 
            array (
                'id' => 111,
                'document_id' => 52,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 15:36:36',
                'updated_at' => '2022-12-15 15:36:36',
            ),
            110 => 
            array (
                'id' => 112,
                'document_id' => 53,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 15:37:04',
                'updated_at' => '2022-12-15 15:37:04',
            ),
            111 => 
            array (
                'id' => 113,
                'document_id' => 54,
                'user_id' => 29,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-15 15:37:15',
                'updated_at' => '2022-12-15 15:37:15',
            ),
            112 => 
            array (
                'id' => 114,
                'document_id' => 4,
                'user_id' => 8,
                'remarks' => NULL,
                'created_at' => '2022-12-15 15:54:05',
                'updated_at' => '2022-12-15 15:54:05',
            ),
            113 => 
            array (
                'id' => 115,
                'document_id' => 55,
                'user_id' => 8,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-15 15:54:56',
                'updated_at' => '2022-12-15 15:54:56',
            ),
            114 => 
            array (
                'id' => 116,
                'document_id' => 56,
                'user_id' => 5,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-15 15:55:35',
                'updated_at' => '2022-12-15 15:55:35',
            ),
            115 => 
            array (
                'id' => 117,
                'document_id' => 54,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-15 15:57:11',
                'updated_at' => '2022-12-15 15:57:11',
            ),
            116 => 
            array (
                'id' => 118,
                'document_id' => 57,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 16:00:34',
                'updated_at' => '2022-12-15 16:00:34',
            ),
            117 => 
            array (
                'id' => 119,
                'document_id' => 58,
                'user_id' => 8,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-15 16:21:46',
                'updated_at' => '2022-12-15 16:21:46',
            ),
            118 => 
            array (
                'id' => 120,
                'document_id' => 59,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 16:38:26',
                'updated_at' => '2022-12-15 16:38:26',
            ),
            119 => 
            array (
                'id' => 121,
                'document_id' => 60,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 16:39:11',
                'updated_at' => '2022-12-15 16:39:11',
            ),
            120 => 
            array (
                'id' => 122,
                'document_id' => 61,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-15 16:39:33',
                'updated_at' => '2022-12-15 16:39:33',
            ),
            121 => 
            array (
                'id' => 123,
                'document_id' => 62,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 16:40:00',
                'updated_at' => '2022-12-15 16:40:00',
            ),
            122 => 
            array (
                'id' => 124,
                'document_id' => 63,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 17:00:16',
                'updated_at' => '2022-12-15 17:00:16',
            ),
            123 => 
            array (
                'id' => 125,
                'document_id' => 21,
                'user_id' => 8,
                'remarks' => NULL,
                'created_at' => '2022-12-15 17:03:08',
                'updated_at' => '2022-12-15 17:03:08',
            ),
            124 => 
            array (
                'id' => 126,
                'document_id' => 57,
                'user_id' => 1,
                'remarks' => 'Certificate for RPIIT signed',
                'created_at' => '2022-12-15 17:03:21',
                'updated_at' => '2022-12-15 17:03:21',
            ),
            125 => 
            array (
                'id' => 127,
                'document_id' => 21,
                'user_id' => 8,
                'remarks' => 'Ma\'am for your Initial.',
                'created_at' => '2022-12-15 17:04:36',
                'updated_at' => '2022-12-15 17:04:36',
            ),
            126 => 
            array (
                'id' => 129,
                'document_id' => 64,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 17:09:02',
                'updated_at' => '2022-12-15 17:09:02',
            ),
            127 => 
            array (
                'id' => 130,
                'document_id' => 65,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 17:10:48',
                'updated_at' => '2022-12-15 17:10:48',
            ),
            128 => 
            array (
                'id' => 131,
                'document_id' => 28,
                'user_id' => 1,
                'remarks' => 'Why this document now only?
is this still allowed?',
                'created_at' => '2022-12-15 17:11:04',
                'updated_at' => '2022-12-15 17:11:04',
            ),
            129 => 
            array (
                'id' => 132,
                'document_id' => 66,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 17:17:31',
                'updated_at' => '2022-12-15 17:17:31',
            ),
            130 => 
            array (
                'id' => 133,
                'document_id' => 67,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 17:20:02',
                'updated_at' => '2022-12-15 17:20:02',
            ),
            131 => 
            array (
                'id' => 134,
                'document_id' => 57,
                'user_id' => 4,
                'remarks' => 'Downloaded..',
                'created_at' => '2022-12-15 17:56:46',
                'updated_at' => '2022-12-15 17:56:46',
            ),
            132 => 
            array (
                'id' => 135,
                'document_id' => 56,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-15 17:56:46',
                'updated_at' => '2022-12-15 17:56:46',
            ),
            133 => 
            array (
                'id' => 136,
                'document_id' => 19,
                'user_id' => 8,
                'remarks' => 'Action already take.',
                'created_at' => '2022-12-15 18:01:24',
                'updated_at' => '2022-12-15 18:01:24',
            ),
            134 => 
            array (
                'id' => 137,
                'document_id' => 68,
                'user_id' => 4,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-15 18:02:39',
                'updated_at' => '2022-12-15 18:02:39',
            ),
            135 => 
            array (
                'id' => 138,
                'document_id' => 28,
                'user_id' => 3,
                'remarks' => 'Sir, this was acted already  per  ROD 6 U-347 s. 2022, dated December 14, 2022. FYI po.',
                'created_at' => '2022-12-15 18:03:28',
                'updated_at' => '2022-12-15 18:03:28',
            ),
            136 => 
            array (
                'id' => 139,
                'document_id' => 19,
                'user_id' => 3,
                'remarks' => 'Email to Region XI',
                'created_at' => '2022-12-15 18:08:54',
                'updated_at' => '2022-12-15 18:08:54',
            ),
            137 => 
            array (
                'id' => 140,
                'document_id' => 68,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-15 18:11:53',
                'updated_at' => '2022-12-15 18:11:53',
            ),
            138 => 
            array (
                'id' => 141,
                'document_id' => 4,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-15 18:13:21',
                'updated_at' => '2022-12-15 18:13:21',
            ),
            139 => 
            array (
                'id' => 142,
                'document_id' => 28,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 06:25:30',
                'updated_at' => '2022-12-16 06:25:30',
            ),
            140 => 
            array (
                'id' => 143,
                'document_id' => 35,
                'user_id' => 1,
                'remarks' => 'Disseminate and ensure compliance',
                'created_at' => '2022-12-16 06:28:16',
                'updated_at' => '2022-12-16 06:28:16',
            ),
            141 => 
            array (
                'id' => 144,
                'document_id' => 29,
                'user_id' => 1,
                'remarks' => 'Let\'s discuss this

Mae, 
calendar this',
                'created_at' => '2022-12-16 06:31:53',
                'updated_at' => '2022-12-16 06:31:53',
            ),
            142 => 
            array (
                'id' => 145,
                'document_id' => 32,
                'user_id' => 1,
                'remarks' => 'coordinate with proponent',
                'created_at' => '2022-12-16 06:33:22',
                'updated_at' => '2022-12-16 06:33:22',
            ),
            143 => 
            array (
                'id' => 146,
                'document_id' => 33,
                'user_id' => 1,
                'remarks' => 'furnished copy PTC Capiz',
                'created_at' => '2022-12-16 06:45:00',
                'updated_at' => '2022-12-16 06:45:00',
            ),
            144 => 
            array (
                'id' => 147,
                'document_id' => 34,
                'user_id' => 1,
                'remarks' => 'Issue Memo reminding her that we are not in a business of jokes here, as an officer they are expected to behave accordingly, a repetition of the same shall be dealt with more severely and that this serve as a stern warning.',
                'created_at' => '2022-12-16 06:51:44',
                'updated_at' => '2022-12-16 06:51:44',
            ),
            145 => 
            array (
                'id' => 148,
                'document_id' => 36,
                'user_id' => 1,
                'remarks' => 'cel kindly sign the other documents before i affixed my signature since after i sign the same, i will route it to releasing unit and marked it signed',
                'created_at' => '2022-12-16 06:54:24',
                'updated_at' => '2022-12-16 06:54:24',
            ),
            146 => 
            array (
                'id' => 149,
                'document_id' => 37,
                'user_id' => 1,
                'remarks' => 'all schedules are approved except Dec. 23',
                'created_at' => '2022-12-16 07:07:58',
                'updated_at' => '2022-12-16 07:07:58',
            ),
            147 => 
            array (
                'id' => 150,
                'document_id' => 31,
                'user_id' => 1,
                'remarks' => 'see me 8am, let\'s discuss this

mae, calendar this and produce copy',
                'created_at' => '2022-12-16 07:31:16',
                'updated_at' => '2022-12-16 07:31:16',
            ),
            148 => 
            array (
                'id' => 151,
                'document_id' => 36,
                'user_id' => 3,
                'remarks' => 'Noted sir. The List is signed already sir.  Thank you.',
                'created_at' => '2022-12-16 08:23:53',
                'updated_at' => '2022-12-16 08:23:53',
            ),
            149 => 
            array (
                'id' => 152,
                'document_id' => 17,
                'user_id' => 1,
                'remarks' => 'Disseminate after correction of the program details',
                'created_at' => '2022-12-16 08:25:15',
                'updated_at' => '2022-12-16 08:25:15',
            ),
            150 => 
            array (
                'id' => 153,
                'document_id' => 36,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 08:27:12',
                'updated_at' => '2022-12-16 08:27:12',
            ),
            151 => 
            array (
                'id' => 154,
                'document_id' => 38,
                'user_id' => 1,
                'remarks' => 'Endorse to CO',
                'created_at' => '2022-12-16 08:29:25',
                'updated_at' => '2022-12-16 08:29:25',
            ),
            152 => 
            array (
                'id' => 155,
                'document_id' => 39,
                'user_id' => 1,
                'remarks' => 'what happen? i thought i have instructed you on this',
                'created_at' => '2022-12-16 08:39:05',
                'updated_at' => '2022-12-16 08:39:05',
            ),
            153 => 
            array (
                'id' => 156,
                'document_id' => 40,
                'user_id' => 1,
                'remarks' => 'refer this IPO',
                'created_at' => '2022-12-16 08:41:52',
                'updated_at' => '2022-12-16 08:41:52',
            ),
            154 => 
            array (
                'id' => 157,
                'document_id' => 37,
                'user_id' => 8,
                'remarks' => 'FOR INITIAL',
                'created_at' => '2022-12-16 08:57:37',
                'updated_at' => '2022-12-16 08:57:37',
            ),
            155 => 
            array (
                'id' => 158,
                'document_id' => 18,
                'user_id' => 8,
                'remarks' => 'For your initial Ma\'am',
                'created_at' => '2022-12-16 09:00:30',
                'updated_at' => '2022-12-16 09:00:30',
            ),
            156 => 
            array (
                'id' => 159,
                'document_id' => 41,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 09:06:12',
                'updated_at' => '2022-12-16 09:06:12',
            ),
            157 => 
            array (
                'id' => 160,
                'document_id' => 5,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 09:14:08',
                'updated_at' => '2022-12-16 09:14:08',
            ),
            158 => 
            array (
                'id' => 161,
                'document_id' => 49,
                'user_id' => 1,
                'remarks' => 'Disseminate as soon as program details is corrected as discussed with Cecil',
                'created_at' => '2022-12-16 09:18:09',
                'updated_at' => '2022-12-16 09:18:09',
            ),
            159 => 
            array (
                'id' => 162,
                'document_id' => 69,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 10:30:17',
                'updated_at' => '2022-12-16 10:30:17',
            ),
            160 => 
            array (
                'id' => 163,
                'document_id' => 70,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-16 10:54:38',
                'updated_at' => '2022-12-16 10:54:38',
            ),
            161 => 
            array (
                'id' => 164,
                'document_id' => 71,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-16 11:11:41',
                'updated_at' => '2022-12-16 11:11:41',
            ),
            162 => 
            array (
                'id' => 165,
                'document_id' => 72,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-16 11:13:53',
                'updated_at' => '2022-12-16 11:13:53',
            ),
            163 => 
            array (
                'id' => 166,
                'document_id' => 73,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-16 11:16:46',
                'updated_at' => '2022-12-16 11:16:46',
            ),
            164 => 
            array (
                'id' => 167,
                'document_id' => 74,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-16 11:18:49',
                'updated_at' => '2022-12-16 11:18:49',
            ),
            165 => 
            array (
                'id' => 168,
                'document_id' => 75,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 11:21:01',
                'updated_at' => '2022-12-16 11:21:01',
            ),
            166 => 
            array (
                'id' => 169,
                'document_id' => 74,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-16 11:59:49',
                'updated_at' => '2022-12-16 11:59:49',
            ),
            167 => 
            array (
                'id' => 170,
                'document_id' => 73,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-16 12:00:16',
                'updated_at' => '2022-12-16 12:00:16',
            ),
            168 => 
            array (
                'id' => 171,
                'document_id' => 72,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-16 12:01:05',
                'updated_at' => '2022-12-16 12:01:05',
            ),
            169 => 
            array (
                'id' => 172,
                'document_id' => 71,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-16 12:02:38',
                'updated_at' => '2022-12-16 12:02:38',
            ),
            170 => 
            array (
                'id' => 173,
                'document_id' => 70,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-16 12:03:07',
                'updated_at' => '2022-12-16 12:03:07',
            ),
            171 => 
            array (
                'id' => 174,
                'document_id' => 18,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-16 12:10:46',
                'updated_at' => '2022-12-16 12:10:46',
            ),
            172 => 
            array (
                'id' => 175,
                'document_id' => 35,
                'user_id' => 3,
                'remarks' => 'Notify all Units',
                'created_at' => '2022-12-16 12:12:59',
                'updated_at' => '2022-12-16 12:12:59',
            ),
            173 => 
            array (
                'id' => 176,
                'document_id' => 21,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-16 12:15:49',
                'updated_at' => '2022-12-16 12:15:49',
            ),
            174 => 
            array (
                'id' => 177,
                'document_id' => 55,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-16 12:17:31',
                'updated_at' => '2022-12-16 12:17:31',
            ),
            175 => 
            array (
                'id' => 178,
                'document_id' => 38,
                'user_id' => 3,
                'remarks' => 'Prepare endorsement memo to CO.',
                'created_at' => '2022-12-16 12:26:22',
                'updated_at' => '2022-12-16 12:26:22',
            ),
            176 => 
            array (
                'id' => 179,
                'document_id' => 70,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 12:57:11',
                'updated_at' => '2022-12-16 12:57:11',
            ),
            177 => 
            array (
                'id' => 180,
                'document_id' => 71,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 12:58:00',
                'updated_at' => '2022-12-16 12:58:00',
            ),
            178 => 
            array (
                'id' => 181,
                'document_id' => 72,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 12:59:31',
                'updated_at' => '2022-12-16 12:59:31',
            ),
            179 => 
            array (
                'id' => 182,
                'document_id' => 73,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 13:01:53',
                'updated_at' => '2022-12-16 13:01:53',
            ),
            180 => 
            array (
                'id' => 183,
                'document_id' => 74,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 13:08:12',
                'updated_at' => '2022-12-16 13:08:12',
            ),
            181 => 
            array (
                'id' => 184,
                'document_id' => 75,
                'user_id' => 1,
                'remarks' => 'for comment and recommendation',
                'created_at' => '2022-12-16 13:11:45',
                'updated_at' => '2022-12-16 13:11:45',
            ),
            182 => 
            array (
                'id' => 185,
                'document_id' => 18,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 13:15:01',
                'updated_at' => '2022-12-16 13:15:01',
            ),
            183 => 
            array (
                'id' => 186,
                'document_id' => 21,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 13:17:24',
                'updated_at' => '2022-12-16 13:17:24',
            ),
            184 => 
            array (
                'id' => 187,
                'document_id' => 51,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 13:23:09',
                'updated_at' => '2022-12-16 13:23:09',
            ),
            185 => 
            array (
                'id' => 188,
                'document_id' => 52,
                'user_id' => 1,
                'remarks' => 'Review and appropriate action',
                'created_at' => '2022-12-16 13:25:47',
                'updated_at' => '2022-12-16 13:25:47',
            ),
            186 => 
            array (
                'id' => 189,
                'document_id' => 50,
                'user_id' => 1,
                'remarks' => 'Rephrase
indicate the corrections',
                'created_at' => '2022-12-16 13:34:34',
                'updated_at' => '2022-12-16 13:34:34',
            ),
            187 => 
            array (
                'id' => 190,
                'document_id' => 75,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-16 13:40:46',
                'updated_at' => '2022-12-16 13:40:46',
            ),
            188 => 
            array (
                'id' => 191,
                'document_id' => 40,
                'user_id' => 3,
                'remarks' => 'Prepare endorsement memo to IPO.',
                'created_at' => '2022-12-16 13:45:48',
                'updated_at' => '2022-12-16 13:45:48',
            ),
            189 => 
            array (
                'id' => 192,
                'document_id' => 49,
                'user_id' => 3,
                'remarks' => 'Kindly revise the program.',
                'created_at' => '2022-12-16 13:47:49',
                'updated_at' => '2022-12-16 13:47:49',
            ),
            190 => 
            array (
                'id' => 193,
                'document_id' => 52,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-16 13:48:50',
                'updated_at' => '2022-12-16 13:48:50',
            ),
            191 => 
            array (
                'id' => 194,
                'document_id' => 75,
                'user_id' => 8,
                'remarks' => 'Ma\'am Document was emailed 12/16/2022 c/o Niña',
                'created_at' => '2022-12-16 14:02:27',
                'updated_at' => '2022-12-16 14:02:27',
            ),
            192 => 
            array (
                'id' => 195,
                'document_id' => 75,
                'user_id' => 3,
                'remarks' => 'This is acted already  per ROD6 CAC No. 162. s, 2022.',
                'created_at' => '2022-12-16 14:36:24',
                'updated_at' => '2022-12-16 14:36:24',
            ),
            193 => 
            array (
                'id' => 196,
                'document_id' => 20,
                'user_id' => 8,
                'remarks' => 'Ma\'am for your initial.',
                'created_at' => '2022-12-16 14:45:41',
                'updated_at' => '2022-12-16 14:45:41',
            ),
            194 => 
            array (
                'id' => 197,
                'document_id' => 76,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-16 15:13:59',
                'updated_at' => '2022-12-16 15:13:59',
            ),
            195 => 
            array (
                'id' => 198,
                'document_id' => 77,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-16 15:16:03',
                'updated_at' => '2022-12-16 15:16:03',
            ),
            196 => 
            array (
                'id' => 199,
                'document_id' => 78,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-16 15:16:52',
                'updated_at' => '2022-12-16 15:16:52',
            ),
            197 => 
            array (
                'id' => 200,
                'document_id' => 79,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-16 15:17:39',
                'updated_at' => '2022-12-16 15:17:39',
            ),
            198 => 
            array (
                'id' => 201,
                'document_id' => 80,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-16 15:19:22',
                'updated_at' => '2022-12-16 15:19:22',
            ),
            199 => 
            array (
                'id' => 202,
                'document_id' => 20,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-16 15:23:18',
                'updated_at' => '2022-12-16 15:23:18',
            ),
            200 => 
            array (
                'id' => 203,
                'document_id' => 38,
                'user_id' => 4,
                'remarks' => 'Done.. The request is already forwarded to the CO last December 13, 2022.  see attachment. thank you.',
                'created_at' => '2022-12-16 15:28:16',
                'updated_at' => '2022-12-16 15:28:16',
            ),
            201 => 
            array (
                'id' => 204,
                'document_id' => 58,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-16 15:29:28',
                'updated_at' => '2022-12-16 15:29:28',
            ),
            202 => 
            array (
                'id' => 206,
                'document_id' => 37,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-16 15:34:05',
                'updated_at' => '2022-12-16 15:34:05',
            ),
            203 => 
            array (
                'id' => 207,
                'document_id' => 38,
                'user_id' => 3,
                'remarks' => 'The Request Is Already Forwarded To The CO Last December 13, 2022',
                'created_at' => '2022-12-16 15:35:11',
                'updated_at' => '2022-12-16 15:35:11',
            ),
            204 => 
            array (
                'id' => 209,
                'document_id' => 25,
                'user_id' => 4,
            'remarks' => 'Done. As discussed,  RQM was realigned to COC for a shorter duration to comply with the requirement that all CFSP training will be completed and disbursed by end of December 2022. Realigned RQM (10) was approved last December 02, 2022.',
                'created_at' => '2022-12-16 15:38:18',
                'updated_at' => '2022-12-16 15:38:18',
            ),
            205 => 
            array (
                'id' => 211,
                'document_id' => 39,
                'user_id' => 3,
                'remarks' => 'Acted already,  Westtrade Technical Training And Assessment Center, Inc Submitted Other Program Registration Applications Namely: 1. Agricultural Crops Production NC II - With Existing 3 Registered Programs In The Lone District But With Justification From The Provincial Office 2. Gas Tungsten Arc Welding NC II - No Registered Program In The Province Of Antique.',
                'created_at' => '2022-12-16 15:39:48',
                'updated_at' => '2022-12-16 15:39:48',
            ),
            206 => 
            array (
                'id' => 212,
                'document_id' => 25,
                'user_id' => 3,
            'remarks' => 'Done Already. As Discussed, RQM Was Realigned To COC For A Shorter Duration To Comply With The Requirement That All CFSP Training Will Be Completed And Disbursed By End Of December 2022. Realigned RQM (10) Was Approved Last December 02, 2022.',
                'created_at' => '2022-12-16 15:40:50',
                'updated_at' => '2022-12-16 15:40:50',
            ),
            207 => 
            array (
                'id' => 221,
                'document_id' => 92,
                'user_id' => 5,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-16 15:53:43',
                'updated_at' => '2022-12-16 15:53:43',
            ),
            208 => 
            array (
                'id' => 222,
                'document_id' => 31,
                'user_id' => 3,
                'remarks' => 'Let\'s talk with RD',
                'created_at' => '2022-12-16 15:54:35',
                'updated_at' => '2022-12-16 15:54:35',
            ),
            209 => 
            array (
                'id' => 223,
                'document_id' => 23,
                'user_id' => 4,
                'remarks' => 'Done... per verification with RTC-Iloilo, CCTV recording is no longer needed.. Compliance audit was already conducted..',
                'created_at' => '2022-12-16 15:56:44',
                'updated_at' => '2022-12-16 15:56:44',
            ),
            210 => 
            array (
                'id' => 224,
                'document_id' => 31,
                'user_id' => 4,
                'remarks' => 'Already discussed this with RD and other personnel involved.',
                'created_at' => '2022-12-16 15:58:03',
                'updated_at' => '2022-12-16 15:58:03',
            ),
            211 => 
            array (
                'id' => 225,
                'document_id' => 92,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-16 16:07:32',
                'updated_at' => '2022-12-16 16:07:32',
            ),
            212 => 
            array (
                'id' => 226,
                'document_id' => 93,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 16:12:54',
                'updated_at' => '2022-12-16 16:12:54',
            ),
            213 => 
            array (
                'id' => 227,
                'document_id' => 49,
                'user_id' => 6,
                'remarks' => 'The Program was corrected and for dissemination.',
                'created_at' => '2022-12-16 16:25:49',
                'updated_at' => '2022-12-16 16:25:49',
            ),
            214 => 
            array (
                'id' => 228,
                'document_id' => 94,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 16:25:58',
                'updated_at' => '2022-12-16 16:25:58',
            ),
            215 => 
            array (
                'id' => 229,
                'document_id' => 95,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 16:27:01',
                'updated_at' => '2022-12-16 16:27:01',
            ),
            216 => 
            array (
                'id' => 230,
                'document_id' => 96,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 16:28:09',
                'updated_at' => '2022-12-16 16:28:09',
            ),
            217 => 
            array (
                'id' => 231,
                'document_id' => 31,
                'user_id' => 3,
                'remarks' => 'sir, considering that these need the input of finance, I think it is proper that they should respond to this.',
                'created_at' => '2022-12-16 16:29:00',
                'updated_at' => '2022-12-16 16:29:00',
            ),
            218 => 
            array (
                'id' => 232,
                'document_id' => 97,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 16:29:04',
                'updated_at' => '2022-12-16 16:29:04',
            ),
            219 => 
            array (
                'id' => 233,
                'document_id' => 98,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 16:30:54',
                'updated_at' => '2022-12-16 16:30:54',
            ),
            220 => 
            array (
                'id' => 234,
                'document_id' => 99,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 16:32:07',
                'updated_at' => '2022-12-16 16:32:07',
            ),
            221 => 
            array (
                'id' => 235,
                'document_id' => 49,
                'user_id' => 3,
                'remarks' => 'The Program Was Corrected And For Dissemination. Thank you.',
                'created_at' => '2022-12-16 16:33:30',
                'updated_at' => '2022-12-16 16:33:30',
            ),
            222 => 
            array (
                'id' => 236,
                'document_id' => 100,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 16:33:32',
                'updated_at' => '2022-12-16 16:33:32',
            ),
            223 => 
            array (
                'id' => 237,
                'document_id' => 101,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 16:36:02',
                'updated_at' => '2022-12-16 16:36:02',
            ),
            224 => 
            array (
                'id' => 238,
                'document_id' => 102,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 16:37:17',
                'updated_at' => '2022-12-16 16:37:17',
            ),
            225 => 
            array (
                'id' => 239,
                'document_id' => 103,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 16:37:50',
                'updated_at' => '2022-12-16 16:37:50',
            ),
            226 => 
            array (
                'id' => 240,
                'document_id' => 104,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 16:38:27',
                'updated_at' => '2022-12-16 16:38:27',
            ),
            227 => 
            array (
                'id' => 241,
                'document_id' => 40,
                'user_id' => 4,
                'remarks' => 'Please prepare a memorandum for dissemination.. Thank you..',
                'created_at' => '2022-12-16 16:46:12',
                'updated_at' => '2022-12-16 16:46:12',
            ),
            228 => 
            array (
                'id' => 242,
                'document_id' => 35,
                'user_id' => 4,
                'remarks' => 'Please prepare a memorandum to disseminate to all provincial offices..  Thank you..',
                'created_at' => '2022-12-16 16:49:10',
                'updated_at' => '2022-12-16 16:49:10',
            ),
            229 => 
            array (
                'id' => 243,
                'document_id' => 17,
                'user_id' => 6,
                'remarks' => 'The program was corrected and for dissemination. 
However, the document for the Office Order re Attendance to the Regional 2022 YEPA was previously attached to the wrong document title.',
                'created_at' => '2022-12-16 16:52:19',
                'updated_at' => '2022-12-16 16:52:19',
            ),
            230 => 
            array (
                'id' => 244,
                'document_id' => 75,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 16:53:03',
                'updated_at' => '2022-12-16 16:53:03',
            ),
            231 => 
            array (
                'id' => 245,
                'document_id' => 76,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 16:55:15',
                'updated_at' => '2022-12-16 16:55:15',
            ),
            232 => 
            array (
                'id' => 246,
                'document_id' => 17,
                'user_id' => 3,
                'remarks' => 'The program was corrected and ready for Dissemination.',
                'created_at' => '2022-12-16 16:55:31',
                'updated_at' => '2022-12-16 16:55:31',
            ),
            233 => 
            array (
                'id' => 247,
                'document_id' => 105,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 17:04:26',
                'updated_at' => '2022-12-16 17:04:26',
            ),
            234 => 
            array (
                'id' => 248,
                'document_id' => 106,
                'user_id' => 6,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-16 17:04:27',
                'updated_at' => '2022-12-16 17:04:27',
            ),
            235 => 
            array (
                'id' => 249,
                'document_id' => 77,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 17:09:53',
                'updated_at' => '2022-12-16 17:09:53',
            ),
            236 => 
            array (
                'id' => 250,
                'document_id' => 78,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 17:16:04',
                'updated_at' => '2022-12-16 17:16:04',
            ),
            237 => 
            array (
                'id' => 251,
                'document_id' => 79,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 17:17:10',
                'updated_at' => '2022-12-16 17:17:10',
            ),
            238 => 
            array (
                'id' => 252,
                'document_id' => 80,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 17:37:00',
                'updated_at' => '2022-12-16 17:37:00',
            ),
            239 => 
            array (
                'id' => 259,
                'document_id' => 107,
                'user_id' => 4,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-16 17:57:34',
                'updated_at' => '2022-12-16 17:57:34',
            ),
            240 => 
            array (
                'id' => 260,
                'document_id' => 92,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 17:58:48',
                'updated_at' => '2022-12-16 17:58:48',
            ),
            241 => 
            array (
                'id' => 261,
                'document_id' => 106,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-16 18:26:06',
                'updated_at' => '2022-12-16 18:26:06',
            ),
            242 => 
            array (
                'id' => 266,
                'document_id' => 93,
                'user_id' => 1,
                'remarks' => 'approved as to schedule only except December 23.',
                'created_at' => '2022-12-16 21:25:17',
                'updated_at' => '2022-12-16 21:25:17',
            ),
            243 => 
            array (
                'id' => 267,
                'document_id' => 94,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-16 21:27:57',
                'updated_at' => '2022-12-16 21:27:57',
            ),
            244 => 
            array (
                'id' => 268,
                'document_id' => 95,
                'user_id' => 1,
                'remarks' => 'Notify PD Carlito ASAP',
                'created_at' => '2022-12-16 21:30:13',
                'updated_at' => '2022-12-16 21:30:13',
            ),
            245 => 
            array (
                'id' => 269,
                'document_id' => 97,
                'user_id' => 1,
                'remarks' => 'Draft reply',
                'created_at' => '2022-12-16 21:31:09',
                'updated_at' => '2022-12-16 21:31:09',
            ),
            246 => 
            array (
                'id' => 270,
                'document_id' => 96,
                'user_id' => 1,
                'remarks' => 'File for future reference.',
                'created_at' => '2022-12-16 21:34:47',
                'updated_at' => '2022-12-16 21:34:47',
            ),
            247 => 
            array (
                'id' => 271,
                'document_id' => 98,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-16 21:36:17',
                'updated_at' => '2022-12-16 21:36:17',
            ),
            248 => 
            array (
                'id' => 272,
                'document_id' => 99,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-16 21:37:08',
                'updated_at' => '2022-12-16 21:37:08',
            ),
            249 => 
            array (
                'id' => 273,
                'document_id' => 100,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-16 21:39:24',
                'updated_at' => '2022-12-16 21:39:24',
            ),
            250 => 
            array (
                'id' => 274,
                'document_id' => 101,
                'user_id' => 1,
                'remarks' => 'no signature',
                'created_at' => '2022-12-16 21:42:51',
                'updated_at' => '2022-12-16 21:42:51',
            ),
            251 => 
            array (
                'id' => 275,
                'document_id' => 102,
                'user_id' => 1,
                'remarks' => 'no signature of mabel',
                'created_at' => '2022-12-16 21:44:32',
                'updated_at' => '2022-12-16 21:44:32',
            ),
            252 => 
            array (
                'id' => 276,
                'document_id' => 103,
                'user_id' => 1,
                'remarks' => 'No signature of mabel',
                'created_at' => '2022-12-16 21:45:40',
                'updated_at' => '2022-12-16 21:45:40',
            ),
            253 => 
            array (
                'id' => 277,
                'document_id' => 104,
                'user_id' => 1,
                'remarks' => 'No signature of Mabel',
                'created_at' => '2022-12-16 21:46:42',
                'updated_at' => '2022-12-16 21:46:42',
            ),
            254 => 
            array (
                'id' => 278,
                'document_id' => 105,
                'user_id' => 1,
                'remarks' => 'No attachments',
                'created_at' => '2022-12-16 21:47:37',
                'updated_at' => '2022-12-16 21:47:37',
            ),
            255 => 
            array (
                'id' => 279,
                'document_id' => 106,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 21:49:33',
                'updated_at' => '2022-12-16 21:49:33',
            ),
            256 => 
            array (
                'id' => 280,
                'document_id' => 53,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-16 21:50:56',
                'updated_at' => '2022-12-16 21:50:56',
            ),
            257 => 
            array (
                'id' => 281,
                'document_id' => 60,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-16 21:51:47',
                'updated_at' => '2022-12-16 21:51:47',
            ),
            258 => 
            array (
                'id' => 282,
                'document_id' => 61,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 21:53:20',
                'updated_at' => '2022-12-16 21:53:20',
            ),
            259 => 
            array (
                'id' => 283,
                'document_id' => 62,
                'user_id' => 1,
                'remarks' => 'No assessment on December 23 and December 30',
                'created_at' => '2022-12-16 21:55:16',
                'updated_at' => '2022-12-16 21:55:16',
            ),
            260 => 
            array (
                'id' => 284,
                'document_id' => 63,
                'user_id' => 1,
                'remarks' => 'Forward to IPO for comment',
                'created_at' => '2022-12-16 21:56:59',
                'updated_at' => '2022-12-16 21:56:59',
            ),
            261 => 
            array (
                'id' => 285,
                'document_id' => 64,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-16 21:58:55',
                'updated_at' => '2022-12-16 21:58:55',
            ),
            262 => 
            array (
                'id' => 286,
                'document_id' => 65,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-16 21:59:46',
                'updated_at' => '2022-12-16 21:59:46',
            ),
            263 => 
            array (
                'id' => 287,
                'document_id' => 66,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 22:01:41',
                'updated_at' => '2022-12-16 22:01:41',
            ),
            264 => 
            array (
                'id' => 288,
                'document_id' => 67,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-16 22:02:43',
                'updated_at' => '2022-12-16 22:02:43',
            ),
            265 => 
            array (
                'id' => 289,
                'document_id' => 56,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 22:04:44',
                'updated_at' => '2022-12-16 22:04:44',
            ),
            266 => 
            array (
                'id' => 290,
                'document_id' => 68,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 22:09:01',
                'updated_at' => '2022-12-16 22:09:01',
            ),
            267 => 
            array (
                'id' => 291,
                'document_id' => 55,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-16 22:10:50',
                'updated_at' => '2022-12-16 22:10:50',
            ),
            268 => 
            array (
                'id' => 292,
                'document_id' => 20,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 22:12:45',
                'updated_at' => '2022-12-16 22:12:45',
            ),
            269 => 
            array (
                'id' => 293,
                'document_id' => 58,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 22:14:36',
                'updated_at' => '2022-12-16 22:14:36',
            ),
            270 => 
            array (
                'id' => 294,
                'document_id' => 37,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 22:18:23',
                'updated_at' => '2022-12-16 22:18:23',
            ),
            271 => 
            array (
                'id' => 295,
                'document_id' => 31,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-16 22:23:06',
                'updated_at' => '2022-12-16 22:23:06',
            ),
            272 => 
            array (
                'id' => 296,
                'document_id' => 49,
                'user_id' => 1,
                'remarks' => 'furnish copy invitation committee thru Cecil',
                'created_at' => '2022-12-16 22:25:14',
                'updated_at' => '2022-12-16 22:25:14',
            ),
            273 => 
            array (
                'id' => 297,
                'document_id' => 17,
                'user_id' => 1,
                'remarks' => 'check subject and some details don\'t match',
                'created_at' => '2022-12-16 22:26:48',
                'updated_at' => '2022-12-16 22:26:48',
            ),
            274 => 
            array (
                'id' => 298,
                'document_id' => 4,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 22:28:14',
                'updated_at' => '2022-12-16 22:28:14',
            ),
            275 => 
            array (
                'id' => 299,
                'document_id' => 107,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-17 11:42:34',
                'updated_at' => '2022-12-17 11:42:34',
            ),
            276 => 
            array (
                'id' => 300,
                'document_id' => 93,
                'user_id' => 3,
                'remarks' => 'Kindly check and verify.. also take note of the comment of RD.',
                'created_at' => '2022-12-17 11:45:50',
                'updated_at' => '2022-12-17 11:45:50',
            ),
            277 => 
            array (
                'id' => 301,
                'document_id' => 94,
                'user_id' => 3,
                'remarks' => 'Kindly check and verify. Take note of RD\'s comment.',
                'created_at' => '2022-12-17 11:48:16',
                'updated_at' => '2022-12-17 11:48:16',
            ),
            278 => 
            array (
                'id' => 302,
                'document_id' => 95,
                'user_id' => 3,
                'remarks' => 'Prepare Memo reply.',
                'created_at' => '2022-12-17 11:52:59',
                'updated_at' => '2022-12-17 11:52:59',
            ),
            279 => 
            array (
                'id' => 303,
                'document_id' => 98,
                'user_id' => 3,
                'remarks' => 'Kindly check and verify the submitted docs.',
                'created_at' => '2022-12-17 11:54:02',
                'updated_at' => '2022-12-17 11:54:02',
            ),
            280 => 
            array (
                'id' => 304,
                'document_id' => 99,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-17 11:54:37',
                'updated_at' => '2022-12-17 11:54:37',
            ),
            281 => 
            array (
                'id' => 305,
                'document_id' => 62,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-17 12:43:40',
                'updated_at' => '2022-12-17 12:43:40',
            ),
            282 => 
            array (
                'id' => 307,
                'document_id' => 67,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-17 17:37:49',
                'updated_at' => '2022-12-17 17:37:49',
            ),
            283 => 
            array (
                'id' => 308,
                'document_id' => 63,
                'user_id' => 3,
                'remarks' => 'Kindly ask IPO of there comment per RD\'s instruction.',
                'created_at' => '2022-12-17 17:42:36',
                'updated_at' => '2022-12-17 17:42:36',
            ),
            284 => 
            array (
                'id' => 309,
                'document_id' => 53,
                'user_id' => 3,
                'remarks' => 'Kindly attached the corrected document submitted by IPO.',
                'created_at' => '2022-12-17 17:44:04',
                'updated_at' => '2022-12-17 17:44:04',
            ),
            285 => 
            array (
                'id' => 310,
                'document_id' => 107,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-18 20:02:30',
                'updated_at' => '2022-12-18 20:02:30',
            ),
            286 => 
            array (
                'id' => 311,
                'document_id' => 42,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-18 20:03:43',
                'updated_at' => '2022-12-18 20:03:43',
            ),
            287 => 
            array (
                'id' => 312,
                'document_id' => 98,
                'user_id' => 5,
                'remarks' => 'Please evaluate based on checklist of additional trainer and update me status.
Thank you',
                'created_at' => '2022-12-19 09:22:17',
                'updated_at' => '2022-12-19 09:22:17',
            ),
            288 => 
            array (
                'id' => 313,
                'document_id' => 54,
                'user_id' => 34,
                'remarks' => 'Please insert leave balance and return to me. T.Y.',
                'created_at' => '2022-12-19 10:02:36',
                'updated_at' => '2022-12-19 10:02:36',
            ),
            289 => 
            array (
                'id' => 314,
                'document_id' => 54,
                'user_id' => 39,
                'remarks' => NULL,
                'created_at' => '2022-12-19 10:15:45',
                'updated_at' => '2022-12-19 10:15:45',
            ),
            290 => 
            array (
                'id' => 315,
                'document_id' => 30,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-19 10:16:27',
                'updated_at' => '2022-12-19 10:16:27',
            ),
            291 => 
            array (
                'id' => 316,
                'document_id' => 108,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 10:24:36',
                'updated_at' => '2022-12-19 10:24:36',
            ),
            292 => 
            array (
                'id' => 317,
                'document_id' => 54,
                'user_id' => 39,
                'remarks' => NULL,
                'created_at' => '2022-12-19 10:30:17',
                'updated_at' => '2022-12-19 10:30:17',
            ),
            293 => 
            array (
                'id' => 318,
                'document_id' => 101,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-19 10:42:56',
                'updated_at' => '2022-12-19 10:42:56',
            ),
            294 => 
            array (
                'id' => 319,
                'document_id' => 54,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-19 10:44:02',
                'updated_at' => '2022-12-19 10:44:02',
            ),
            295 => 
            array (
                'id' => 320,
                'document_id' => 109,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 10:45:05',
                'updated_at' => '2022-12-19 10:45:05',
            ),
            296 => 
            array (
                'id' => 321,
                'document_id' => 50,
                'user_id' => 34,
                'remarks' => 'Hi RD, 

Please see attached revised memo po.

Thank you!',
                'created_at' => '2022-12-19 10:47:54',
                'updated_at' => '2022-12-19 10:47:54',
            ),
            297 => 
            array (
                'id' => 322,
                'document_id' => 110,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 10:48:45',
                'updated_at' => '2022-12-19 10:48:45',
            ),
            298 => 
            array (
                'id' => 323,
                'document_id' => 111,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 10:51:06',
                'updated_at' => '2022-12-19 10:51:06',
            ),
            299 => 
            array (
                'id' => 324,
                'document_id' => 112,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 10:54:28',
                'updated_at' => '2022-12-19 10:54:28',
            ),
            300 => 
            array (
                'id' => 325,
                'document_id' => 26,
                'user_id' => 34,
                'remarks' => 'Please return back to LGPC with RD\'s remarks. Thank you!',
                'created_at' => '2022-12-19 10:55:05',
                'updated_at' => '2022-12-19 10:55:05',
            ),
            301 => 
            array (
                'id' => 326,
                'document_id' => 113,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 10:57:12',
                'updated_at' => '2022-12-19 10:57:12',
            ),
            302 => 
            array (
                'id' => 327,
                'document_id' => 114,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 10:59:49',
                'updated_at' => '2022-12-19 10:59:49',
            ),
            303 => 
            array (
                'id' => 328,
                'document_id' => 115,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 11:04:31',
                'updated_at' => '2022-12-19 11:04:31',
            ),
            304 => 
            array (
                'id' => 329,
                'document_id' => 104,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-19 11:05:41',
                'updated_at' => '2022-12-19 11:05:41',
            ),
            305 => 
            array (
                'id' => 330,
                'document_id' => 103,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-19 11:09:55',
                'updated_at' => '2022-12-19 11:09:55',
            ),
            306 => 
            array (
                'id' => 331,
                'document_id' => 116,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 11:19:48',
                'updated_at' => '2022-12-19 11:19:48',
            ),
            307 => 
            array (
                'id' => 332,
                'document_id' => 102,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-19 11:21:43',
                'updated_at' => '2022-12-19 11:21:43',
            ),
            308 => 
            array (
                'id' => 333,
                'document_id' => 117,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 11:22:02',
                'updated_at' => '2022-12-19 11:22:02',
            ),
            309 => 
            array (
                'id' => 334,
                'document_id' => 118,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 11:25:22',
                'updated_at' => '2022-12-19 11:25:22',
            ),
            310 => 
            array (
                'id' => 335,
                'document_id' => 119,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 11:28:13',
                'updated_at' => '2022-12-19 11:28:13',
            ),
            311 => 
            array (
                'id' => 336,
                'document_id' => 120,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 11:37:10',
                'updated_at' => '2022-12-19 11:37:10',
            ),
            312 => 
            array (
                'id' => 337,
                'document_id' => 121,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 11:40:09',
                'updated_at' => '2022-12-19 11:40:09',
            ),
            313 => 
            array (
                'id' => 338,
                'document_id' => 122,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 11:42:30',
                'updated_at' => '2022-12-19 11:42:30',
            ),
            314 => 
            array (
                'id' => 339,
                'document_id' => 123,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 11:45:05',
                'updated_at' => '2022-12-19 11:45:05',
            ),
            315 => 
            array (
                'id' => 340,
                'document_id' => 29,
                'user_id' => 3,
                'remarks' => 'This was acted already sir.',
                'created_at' => '2022-12-19 11:45:50',
                'updated_at' => '2022-12-19 11:45:50',
            ),
            316 => 
            array (
                'id' => 341,
                'document_id' => 124,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 11:47:40',
                'updated_at' => '2022-12-19 11:47:40',
            ),
            317 => 
            array (
                'id' => 342,
                'document_id' => 125,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 11:54:57',
                'updated_at' => '2022-12-19 11:54:57',
            ),
            318 => 
            array (
                'id' => 343,
                'document_id' => 126,
                'user_id' => 10,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 11:57:02',
                'updated_at' => '2022-12-19 11:57:02',
            ),
            319 => 
            array (
                'id' => 344,
                'document_id' => 127,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 11:59:06',
                'updated_at' => '2022-12-19 11:59:06',
            ),
            320 => 
            array (
                'id' => 345,
                'document_id' => 128,
                'user_id' => 35,
                'remarks' => 'Forwarded to ROD',
                'created_at' => '2022-12-19 11:59:34',
                'updated_at' => '2022-12-19 11:59:34',
            ),
            321 => 
            array (
                'id' => 346,
                'document_id' => 129,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 12:01:47',
                'updated_at' => '2022-12-19 12:01:47',
            ),
            322 => 
            array (
                'id' => 347,
                'document_id' => 126,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-19 12:08:29',
                'updated_at' => '2022-12-19 12:08:29',
            ),
            323 => 
            array (
                'id' => 348,
                'document_id' => 130,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 12:10:12',
                'updated_at' => '2022-12-19 12:10:12',
            ),
            324 => 
            array (
                'id' => 349,
                'document_id' => 131,
                'user_id' => 35,
                'remarks' => 'Forwarded to ROD',
                'created_at' => '2022-12-19 12:16:59',
                'updated_at' => '2022-12-19 12:16:59',
            ),
            325 => 
            array (
                'id' => 350,
                'document_id' => 132,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 12:29:23',
                'updated_at' => '2022-12-19 12:29:23',
            ),
            326 => 
            array (
                'id' => 351,
                'document_id' => 133,
                'user_id' => 35,
                'remarks' => 'Forwarded to PSU',
                'created_at' => '2022-12-19 12:46:20',
                'updated_at' => '2022-12-19 12:46:20',
            ),
            327 => 
            array (
                'id' => 352,
                'document_id' => 128,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-19 12:47:34',
                'updated_at' => '2022-12-19 12:47:34',
            ),
            328 => 
            array (
                'id' => 353,
                'document_id' => 131,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-19 12:47:54',
                'updated_at' => '2022-12-19 12:47:54',
            ),
            329 => 
            array (
                'id' => 354,
                'document_id' => 134,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 12:51:37',
                'updated_at' => '2022-12-19 12:51:37',
            ),
            330 => 
            array (
                'id' => 355,
                'document_id' => 135,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 12:59:44',
                'updated_at' => '2022-12-19 12:59:44',
            ),
            331 => 
            array (
                'id' => 356,
                'document_id' => 136,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 13:13:56',
                'updated_at' => '2022-12-19 13:13:56',
            ),
            332 => 
            array (
                'id' => 357,
                'document_id' => 62,
                'user_id' => 8,
                'remarks' => 'Ma\'am for your initial.',
                'created_at' => '2022-12-19 13:18:09',
                'updated_at' => '2022-12-19 13:18:09',
            ),
            333 => 
            array (
                'id' => 358,
                'document_id' => 94,
                'user_id' => 8,
                'remarks' => 'Ma\'am for your initial',
                'created_at' => '2022-12-19 13:21:03',
                'updated_at' => '2022-12-19 13:21:03',
            ),
            334 => 
            array (
                'id' => 359,
                'document_id' => 93,
                'user_id' => 8,
                'remarks' => 'Ma\'am for your initial.',
                'created_at' => '2022-12-19 13:22:28',
                'updated_at' => '2022-12-19 13:22:28',
            ),
            335 => 
            array (
                'id' => 360,
                'document_id' => 63,
                'user_id' => 8,
                'remarks' => 'Ma\'am for your initial.',
                'created_at' => '2022-12-19 13:24:11',
                'updated_at' => '2022-12-19 13:24:11',
            ),
            336 => 
            array (
                'id' => 361,
                'document_id' => 137,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 14:13:01',
                'updated_at' => '2022-12-19 14:13:01',
            ),
            337 => 
            array (
                'id' => 362,
                'document_id' => 138,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 14:28:48',
                'updated_at' => '2022-12-19 14:28:48',
            ),
            338 => 
            array (
                'id' => 363,
                'document_id' => 139,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 14:35:33',
                'updated_at' => '2022-12-19 14:35:33',
            ),
            339 => 
            array (
                'id' => 364,
                'document_id' => 99,
                'user_id' => 4,
                'remarks' => NULL,
                'created_at' => '2022-12-19 14:50:32',
                'updated_at' => '2022-12-19 14:50:32',
            ),
            340 => 
            array (
                'id' => 365,
                'document_id' => 140,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 14:54:24',
                'updated_at' => '2022-12-19 14:54:24',
            ),
            341 => 
            array (
                'id' => 366,
                'document_id' => 141,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 15:00:04',
                'updated_at' => '2022-12-19 15:00:04',
            ),
            342 => 
            array (
                'id' => 367,
                'document_id' => 142,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 15:02:53',
                'updated_at' => '2022-12-19 15:02:53',
            ),
            343 => 
            array (
                'id' => 368,
                'document_id' => 143,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 15:03:32',
                'updated_at' => '2022-12-19 15:03:32',
            ),
            344 => 
            array (
                'id' => 369,
                'document_id' => 144,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 15:06:03',
                'updated_at' => '2022-12-19 15:06:03',
            ),
            345 => 
            array (
                'id' => 370,
                'document_id' => 145,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 15:08:35',
                'updated_at' => '2022-12-19 15:08:35',
            ),
            346 => 
            array (
                'id' => 371,
                'document_id' => 146,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 15:13:03',
                'updated_at' => '2022-12-19 15:13:03',
            ),
            347 => 
            array (
                'id' => 372,
                'document_id' => 147,
                'user_id' => 35,
                'remarks' => 'Forwarded to ROD',
                'created_at' => '2022-12-19 15:17:06',
                'updated_at' => '2022-12-19 15:17:06',
            ),
            348 => 
            array (
                'id' => 373,
                'document_id' => 148,
                'user_id' => 35,
                'remarks' => 'Forwarded to ROD',
                'created_at' => '2022-12-19 15:18:53',
                'updated_at' => '2022-12-19 15:18:53',
            ),
            349 => 
            array (
                'id' => 374,
                'document_id' => 149,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 15:23:14',
                'updated_at' => '2022-12-19 15:23:14',
            ),
            350 => 
            array (
                'id' => 375,
                'document_id' => 59,
                'user_id' => 1,
                'remarks' => 'Forward To CO',
                'created_at' => '2022-12-19 15:24:34',
                'updated_at' => '2022-12-19 15:24:34',
            ),
            351 => 
            array (
                'id' => 376,
                'document_id' => 140,
                'user_id' => 1,
                'remarks' => 'Forward To CO',
                'created_at' => '2022-12-19 15:25:36',
                'updated_at' => '2022-12-19 15:25:36',
            ),
            352 => 
            array (
                'id' => 377,
                'document_id' => 59,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-19 15:33:55',
                'updated_at' => '2022-12-19 15:33:55',
            ),
            353 => 
            array (
                'id' => 378,
                'document_id' => 140,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-19 15:37:02',
                'updated_at' => '2022-12-19 15:37:02',
            ),
            354 => 
            array (
                'id' => 379,
                'document_id' => 30,
                'user_id' => 39,
                'remarks' => NULL,
                'created_at' => '2022-12-19 15:38:22',
                'updated_at' => '2022-12-19 15:38:22',
            ),
            355 => 
            array (
                'id' => 380,
                'document_id' => 59,
                'user_id' => 4,
                'remarks' => NULL,
                'created_at' => '2022-12-19 15:40:01',
                'updated_at' => '2022-12-19 15:40:01',
            ),
            356 => 
            array (
                'id' => 381,
                'document_id' => 59,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-19 15:45:36',
                'updated_at' => '2022-12-19 15:45:36',
            ),
            357 => 
            array (
                'id' => 382,
                'document_id' => 99,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-19 15:46:39',
                'updated_at' => '2022-12-19 15:46:39',
            ),
            358 => 
            array (
                'id' => 383,
                'document_id' => 98,
                'user_id' => 11,
                'remarks' => NULL,
                'created_at' => '2022-12-19 15:54:30',
                'updated_at' => '2022-12-19 15:54:30',
            ),
            359 => 
            array (
                'id' => 384,
                'document_id' => 150,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 16:20:59',
                'updated_at' => '2022-12-19 16:20:59',
            ),
            360 => 
            array (
                'id' => 385,
                'document_id' => 151,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-19 16:30:49',
                'updated_at' => '2022-12-19 16:30:49',
            ),
            361 => 
            array (
                'id' => 386,
                'document_id' => 152,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-19 16:32:47',
                'updated_at' => '2022-12-19 16:32:47',
            ),
            362 => 
            array (
                'id' => 387,
                'document_id' => 153,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 16:33:33',
                'updated_at' => '2022-12-19 16:33:33',
            ),
            363 => 
            array (
                'id' => 388,
                'document_id' => 154,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 16:34:41',
                'updated_at' => '2022-12-19 16:34:41',
            ),
            364 => 
            array (
                'id' => 389,
                'document_id' => 155,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 16:35:26',
                'updated_at' => '2022-12-19 16:35:26',
            ),
            365 => 
            array (
                'id' => 390,
                'document_id' => 156,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 16:36:29',
                'updated_at' => '2022-12-19 16:36:29',
            ),
            366 => 
            array (
                'id' => 391,
                'document_id' => 157,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-19 16:37:09',
                'updated_at' => '2022-12-19 16:37:09',
            ),
            367 => 
            array (
                'id' => 392,
                'document_id' => 158,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 16:38:51',
                'updated_at' => '2022-12-19 16:38:51',
            ),
            368 => 
            array (
                'id' => 393,
                'document_id' => 159,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 16:39:06',
                'updated_at' => '2022-12-19 16:39:06',
            ),
            369 => 
            array (
                'id' => 394,
                'document_id' => 150,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-19 16:41:37',
                'updated_at' => '2022-12-19 16:41:37',
            ),
            370 => 
            array (
                'id' => 395,
                'document_id' => 160,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 16:42:54',
                'updated_at' => '2022-12-19 16:42:54',
            ),
            371 => 
            array (
                'id' => 396,
                'document_id' => 99,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-19 16:43:43',
                'updated_at' => '2022-12-19 16:43:43',
            ),
            372 => 
            array (
                'id' => 397,
                'document_id' => 59,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-19 16:45:35',
                'updated_at' => '2022-12-19 16:45:35',
            ),
            373 => 
            array (
                'id' => 398,
                'document_id' => 161,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 16:54:07',
                'updated_at' => '2022-12-19 16:54:07',
            ),
            374 => 
            array (
                'id' => 399,
                'document_id' => 162,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-19 16:55:56',
                'updated_at' => '2022-12-19 16:55:56',
            ),
            375 => 
            array (
                'id' => 400,
                'document_id' => 163,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 17:01:22',
                'updated_at' => '2022-12-19 17:01:22',
            ),
            376 => 
            array (
                'id' => 401,
                'document_id' => 164,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 17:02:04',
                'updated_at' => '2022-12-19 17:02:04',
            ),
            377 => 
            array (
                'id' => 402,
                'document_id' => 165,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 17:04:02',
                'updated_at' => '2022-12-19 17:04:02',
            ),
            378 => 
            array (
                'id' => 403,
                'document_id' => 166,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-19 17:10:21',
                'updated_at' => '2022-12-19 17:10:21',
            ),
            379 => 
            array (
                'id' => 404,
                'document_id' => 167,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-19 17:17:04',
                'updated_at' => '2022-12-19 17:17:04',
            ),
            380 => 
            array (
                'id' => 405,
                'document_id' => 168,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-19 17:18:45',
                'updated_at' => '2022-12-19 17:18:45',
            ),
            381 => 
            array (
                'id' => 406,
                'document_id' => 169,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-19 17:19:56',
                'updated_at' => '2022-12-19 17:19:56',
            ),
            382 => 
            array (
                'id' => 407,
                'document_id' => 170,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-19 17:22:17',
                'updated_at' => '2022-12-19 17:22:17',
            ),
            383 => 
            array (
                'id' => 408,
                'document_id' => 171,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 08:22:34',
                'updated_at' => '2022-12-20 08:22:34',
            ),
            384 => 
            array (
                'id' => 409,
                'document_id' => 172,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 08:24:32',
                'updated_at' => '2022-12-20 08:24:32',
            ),
            385 => 
            array (
                'id' => 410,
                'document_id' => 173,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 08:26:10',
                'updated_at' => '2022-12-20 08:26:10',
            ),
            386 => 
            array (
                'id' => 411,
                'document_id' => 174,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 08:27:42',
                'updated_at' => '2022-12-20 08:27:42',
            ),
            387 => 
            array (
                'id' => 412,
                'document_id' => 175,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 08:43:55',
                'updated_at' => '2022-12-20 08:43:55',
            ),
            388 => 
            array (
                'id' => 413,
                'document_id' => 176,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 08:51:49',
                'updated_at' => '2022-12-20 08:51:49',
            ),
            389 => 
            array (
                'id' => 414,
                'document_id' => 177,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 08:53:04',
                'updated_at' => '2022-12-20 08:53:04',
            ),
            390 => 
            array (
                'id' => 415,
                'document_id' => 178,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 08:54:14',
                'updated_at' => '2022-12-20 08:54:14',
            ),
            391 => 
            array (
                'id' => 416,
                'document_id' => 179,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 08:55:44',
                'updated_at' => '2022-12-20 08:55:44',
            ),
            392 => 
            array (
                'id' => 417,
                'document_id' => 140,
                'user_id' => 4,
                'remarks' => NULL,
                'created_at' => '2022-12-20 08:55:48',
                'updated_at' => '2022-12-20 08:55:48',
            ),
            393 => 
            array (
                'id' => 418,
                'document_id' => 180,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 08:57:01',
                'updated_at' => '2022-12-20 08:57:01',
            ),
            394 => 
            array (
                'id' => 419,
                'document_id' => 181,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 09:09:46',
                'updated_at' => '2022-12-20 09:09:46',
            ),
            395 => 
            array (
                'id' => 420,
                'document_id' => 182,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 09:11:54',
                'updated_at' => '2022-12-20 09:11:54',
            ),
            396 => 
            array (
                'id' => 421,
                'document_id' => 183,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 09:12:49',
                'updated_at' => '2022-12-20 09:12:49',
            ),
            397 => 
            array (
                'id' => 422,
                'document_id' => 184,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 09:13:24',
                'updated_at' => '2022-12-20 09:13:24',
            ),
            398 => 
            array (
                'id' => 423,
                'document_id' => 185,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 09:14:39',
                'updated_at' => '2022-12-20 09:14:39',
            ),
            399 => 
            array (
                'id' => 424,
                'document_id' => 186,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 09:15:24',
                'updated_at' => '2022-12-20 09:15:24',
            ),
            400 => 
            array (
                'id' => 425,
                'document_id' => 187,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 09:15:58',
                'updated_at' => '2022-12-20 09:15:58',
            ),
            401 => 
            array (
                'id' => 426,
                'document_id' => 188,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 09:28:10',
                'updated_at' => '2022-12-20 09:28:10',
            ),
            402 => 
            array (
                'id' => 427,
                'document_id' => 167,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 09:32:02',
                'updated_at' => '2022-12-20 09:32:02',
            ),
            403 => 
            array (
                'id' => 428,
                'document_id' => 189,
                'user_id' => 6,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 09:50:52',
                'updated_at' => '2022-12-20 09:50:52',
            ),
            404 => 
            array (
                'id' => 429,
                'document_id' => 190,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:02:59',
                'updated_at' => '2022-12-20 10:02:59',
            ),
            405 => 
            array (
                'id' => 430,
                'document_id' => 191,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:04:16',
                'updated_at' => '2022-12-20 10:04:16',
            ),
            406 => 
            array (
                'id' => 431,
                'document_id' => 192,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:05:41',
                'updated_at' => '2022-12-20 10:05:41',
            ),
            407 => 
            array (
                'id' => 432,
                'document_id' => 193,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:09:24',
                'updated_at' => '2022-12-20 10:09:24',
            ),
            408 => 
            array (
                'id' => 433,
                'document_id' => 194,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:11:41',
                'updated_at' => '2022-12-20 10:11:41',
            ),
            409 => 
            array (
                'id' => 434,
                'document_id' => 195,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:15:38',
                'updated_at' => '2022-12-20 10:15:38',
            ),
            410 => 
            array (
                'id' => 435,
                'document_id' => 196,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:17:31',
                'updated_at' => '2022-12-20 10:17:31',
            ),
            411 => 
            array (
                'id' => 436,
                'document_id' => 197,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:19:08',
                'updated_at' => '2022-12-20 10:19:08',
            ),
            412 => 
            array (
                'id' => 437,
                'document_id' => 198,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:21:49',
                'updated_at' => '2022-12-20 10:21:49',
            ),
            413 => 
            array (
                'id' => 438,
                'document_id' => 199,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:23:14',
                'updated_at' => '2022-12-20 10:23:14',
            ),
            414 => 
            array (
                'id' => 439,
                'document_id' => 200,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:24:26',
                'updated_at' => '2022-12-20 10:24:26',
            ),
            415 => 
            array (
                'id' => 440,
                'document_id' => 181,
                'user_id' => 1,
                'remarks' => 'Forward to CO',
                'created_at' => '2022-12-20 10:24:30',
                'updated_at' => '2022-12-20 10:24:30',
            ),
            416 => 
            array (
                'id' => 441,
                'document_id' => 181,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-20 10:27:28',
                'updated_at' => '2022-12-20 10:27:28',
            ),
            417 => 
            array (
                'id' => 442,
                'document_id' => 181,
                'user_id' => 4,
                'remarks' => NULL,
                'created_at' => '2022-12-20 10:31:14',
                'updated_at' => '2022-12-20 10:31:14',
            ),
            418 => 
            array (
                'id' => 443,
                'document_id' => 201,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:36:25',
                'updated_at' => '2022-12-20 10:36:25',
            ),
            419 => 
            array (
                'id' => 444,
                'document_id' => 202,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:38:20',
                'updated_at' => '2022-12-20 10:38:20',
            ),
            420 => 
            array (
                'id' => 445,
                'document_id' => 203,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:39:56',
                'updated_at' => '2022-12-20 10:39:56',
            ),
            421 => 
            array (
                'id' => 446,
                'document_id' => 140,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-20 10:44:04',
                'updated_at' => '2022-12-20 10:44:04',
            ),
            422 => 
            array (
                'id' => 447,
                'document_id' => 181,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-20 10:48:25',
                'updated_at' => '2022-12-20 10:48:25',
            ),
            423 => 
            array (
                'id' => 448,
                'document_id' => 181,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-20 10:49:41',
                'updated_at' => '2022-12-20 10:49:41',
            ),
            424 => 
            array (
                'id' => 449,
                'document_id' => 204,
                'user_id' => 35,
                'remarks' => 'Forwarded to ROD',
                'created_at' => '2022-12-20 10:53:14',
                'updated_at' => '2022-12-20 10:53:14',
            ),
            425 => 
            array (
                'id' => 450,
                'document_id' => 205,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:55:20',
                'updated_at' => '2022-12-20 10:55:20',
            ),
            426 => 
            array (
                'id' => 451,
                'document_id' => 206,
                'user_id' => 4,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:55:42',
                'updated_at' => '2022-12-20 10:55:42',
            ),
            427 => 
            array (
                'id' => 452,
                'document_id' => 207,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:56:48',
                'updated_at' => '2022-12-20 10:56:48',
            ),
            428 => 
            array (
                'id' => 453,
                'document_id' => 208,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:59:16',
                'updated_at' => '2022-12-20 10:59:16',
            ),
            429 => 
            array (
                'id' => 454,
                'document_id' => 209,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:01:05',
                'updated_at' => '2022-12-20 11:01:05',
            ),
            430 => 
            array (
                'id' => 455,
                'document_id' => 189,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-20 11:02:12',
                'updated_at' => '2022-12-20 11:02:12',
            ),
            431 => 
            array (
                'id' => 456,
                'document_id' => 210,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:02:26',
                'updated_at' => '2022-12-20 11:02:26',
            ),
            432 => 
            array (
                'id' => 457,
                'document_id' => 211,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:03:49',
                'updated_at' => '2022-12-20 11:03:49',
            ),
            433 => 
            array (
                'id' => 458,
                'document_id' => 179,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-20 11:04:53',
                'updated_at' => '2022-12-20 11:04:53',
            ),
            434 => 
            array (
                'id' => 459,
                'document_id' => 212,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:05:09',
                'updated_at' => '2022-12-20 11:05:09',
            ),
            435 => 
            array (
                'id' => 460,
                'document_id' => 190,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-20 11:06:24',
                'updated_at' => '2022-12-20 11:06:24',
            ),
            436 => 
            array (
                'id' => 461,
                'document_id' => 191,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-20 11:07:33',
                'updated_at' => '2022-12-20 11:07:33',
            ),
            437 => 
            array (
                'id' => 462,
                'document_id' => 192,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-20 11:08:42',
                'updated_at' => '2022-12-20 11:08:42',
            ),
            438 => 
            array (
                'id' => 463,
                'document_id' => 213,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:09:54',
                'updated_at' => '2022-12-20 11:09:54',
            ),
            439 => 
            array (
                'id' => 464,
                'document_id' => 195,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-20 11:10:09',
                'updated_at' => '2022-12-20 11:10:09',
            ),
            440 => 
            array (
                'id' => 465,
                'document_id' => 204,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-20 11:10:48',
                'updated_at' => '2022-12-20 11:10:48',
            ),
            441 => 
            array (
                'id' => 466,
                'document_id' => 213,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-20 11:12:09',
                'updated_at' => '2022-12-20 11:12:09',
            ),
            442 => 
            array (
                'id' => 467,
                'document_id' => 62,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-20 11:14:13',
                'updated_at' => '2022-12-20 11:14:13',
            ),
            443 => 
            array (
                'id' => 468,
                'document_id' => 214,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:17:17',
                'updated_at' => '2022-12-20 11:17:17',
            ),
            444 => 
            array (
                'id' => 469,
                'document_id' => 215,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:18:23',
                'updated_at' => '2022-12-20 11:18:23',
            ),
            445 => 
            array (
                'id' => 470,
                'document_id' => 216,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:19:37',
                'updated_at' => '2022-12-20 11:19:37',
            ),
            446 => 
            array (
                'id' => 471,
                'document_id' => 217,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:21:13',
                'updated_at' => '2022-12-20 11:21:13',
            ),
            447 => 
            array (
                'id' => 472,
                'document_id' => 218,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:29:55',
                'updated_at' => '2022-12-20 11:29:55',
            ),
            448 => 
            array (
                'id' => 473,
                'document_id' => 219,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:32:41',
                'updated_at' => '2022-12-20 11:32:41',
            ),
            449 => 
            array (
                'id' => 474,
                'document_id' => 220,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:33:57',
                'updated_at' => '2022-12-20 11:33:57',
            ),
            450 => 
            array (
                'id' => 475,
                'document_id' => 221,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:35:16',
                'updated_at' => '2022-12-20 11:35:16',
            ),
            451 => 
            array (
                'id' => 476,
                'document_id' => 222,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:36:32',
                'updated_at' => '2022-12-20 11:36:32',
            ),
            452 => 
            array (
                'id' => 477,
                'document_id' => 223,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:38:08',
                'updated_at' => '2022-12-20 11:38:08',
            ),
            453 => 
            array (
                'id' => 478,
                'document_id' => 224,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:39:37',
                'updated_at' => '2022-12-20 11:39:37',
            ),
            454 => 
            array (
                'id' => 479,
                'document_id' => 225,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:41:56',
                'updated_at' => '2022-12-20 11:41:56',
            ),
            455 => 
            array (
                'id' => 480,
                'document_id' => 226,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:43:06',
                'updated_at' => '2022-12-20 11:43:06',
            ),
            456 => 
            array (
                'id' => 481,
                'document_id' => 227,
                'user_id' => 35,
                'remarks' => 'Forwarded to ROD',
                'created_at' => '2022-12-20 11:46:48',
                'updated_at' => '2022-12-20 11:46:48',
            ),
            457 => 
            array (
                'id' => 482,
                'document_id' => 170,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 11:49:37',
                'updated_at' => '2022-12-20 11:49:37',
            ),
            458 => 
            array (
                'id' => 483,
                'document_id' => 169,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 12:00:13',
                'updated_at' => '2022-12-20 12:00:13',
            ),
            459 => 
            array (
                'id' => 484,
                'document_id' => 228,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 12:00:39',
                'updated_at' => '2022-12-20 12:00:39',
            ),
            460 => 
            array (
                'id' => 485,
                'document_id' => 168,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 12:02:24',
                'updated_at' => '2022-12-20 12:02:24',
            ),
            461 => 
            array (
                'id' => 486,
                'document_id' => 229,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 12:02:59',
                'updated_at' => '2022-12-20 12:02:59',
            ),
            462 => 
            array (
                'id' => 487,
                'document_id' => 166,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 12:07:30',
                'updated_at' => '2022-12-20 12:07:30',
            ),
            463 => 
            array (
                'id' => 488,
                'document_id' => 230,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 12:07:56',
                'updated_at' => '2022-12-20 12:07:56',
            ),
            464 => 
            array (
                'id' => 489,
                'document_id' => 231,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-20 12:08:03',
                'updated_at' => '2022-12-20 12:08:03',
            ),
            465 => 
            array (
                'id' => 490,
                'document_id' => 232,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-20 12:09:17',
                'updated_at' => '2022-12-20 12:09:17',
            ),
            466 => 
            array (
                'id' => 491,
                'document_id' => 162,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 12:09:40',
                'updated_at' => '2022-12-20 12:09:40',
            ),
            467 => 
            array (
                'id' => 492,
                'document_id' => 157,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 12:10:35',
                'updated_at' => '2022-12-20 12:10:35',
            ),
            468 => 
            array (
                'id' => 493,
                'document_id' => 152,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 12:11:17',
                'updated_at' => '2022-12-20 12:11:17',
            ),
            469 => 
            array (
                'id' => 494,
                'document_id' => 151,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 12:11:55',
                'updated_at' => '2022-12-20 12:11:55',
            ),
            470 => 
            array (
                'id' => 495,
                'document_id' => 233,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-20 13:15:13',
                'updated_at' => '2022-12-20 13:15:13',
            ),
            471 => 
            array (
                'id' => 496,
                'document_id' => 234,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-20 13:16:25',
                'updated_at' => '2022-12-20 13:16:25',
            ),
            472 => 
            array (
                'id' => 497,
                'document_id' => 235,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-20 13:17:30',
                'updated_at' => '2022-12-20 13:17:30',
            ),
            473 => 
            array (
                'id' => 498,
                'document_id' => 236,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-20 13:18:20',
                'updated_at' => '2022-12-20 13:18:20',
            ),
            474 => 
            array (
                'id' => 499,
                'document_id' => 237,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-20 13:19:17',
                'updated_at' => '2022-12-20 13:19:17',
            ),
            475 => 
            array (
                'id' => 500,
                'document_id' => 238,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-20 13:24:52',
                'updated_at' => '2022-12-20 13:24:52',
            ),
            476 => 
            array (
                'id' => 501,
                'document_id' => 232,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 13:26:42',
                'updated_at' => '2022-12-20 13:26:42',
            ),
            477 => 
            array (
                'id' => 502,
                'document_id' => 238,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 13:39:44',
                'updated_at' => '2022-12-20 13:39:44',
            ),
            478 => 
            array (
                'id' => 503,
                'document_id' => 237,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 13:40:10',
                'updated_at' => '2022-12-20 13:40:10',
            ),
            479 => 
            array (
                'id' => 504,
                'document_id' => 235,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 13:41:37',
                'updated_at' => '2022-12-20 13:41:37',
            ),
            480 => 
            array (
                'id' => 505,
                'document_id' => 236,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 13:41:58',
                'updated_at' => '2022-12-20 13:41:58',
            ),
            481 => 
            array (
                'id' => 506,
                'document_id' => 234,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 13:42:40',
                'updated_at' => '2022-12-20 13:42:40',
            ),
            482 => 
            array (
                'id' => 507,
                'document_id' => 233,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 13:42:57',
                'updated_at' => '2022-12-20 13:42:57',
            ),
            483 => 
            array (
                'id' => 508,
                'document_id' => 231,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 13:43:23',
                'updated_at' => '2022-12-20 13:43:23',
            ),
            484 => 
            array (
                'id' => 509,
                'document_id' => 30,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 13:44:56',
                'updated_at' => '2022-12-20 13:44:56',
            ),
            485 => 
            array (
                'id' => 510,
                'document_id' => 239,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 13:45:28',
                'updated_at' => '2022-12-20 13:45:28',
            ),
            486 => 
            array (
                'id' => 511,
                'document_id' => 203,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 13:46:04',
                'updated_at' => '2022-12-20 13:46:04',
            ),
            487 => 
            array (
                'id' => 512,
                'document_id' => 202,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 13:47:13',
                'updated_at' => '2022-12-20 13:47:13',
            ),
            488 => 
            array (
                'id' => 513,
                'document_id' => 201,
                'user_id' => 34,
                'remarks' => 'Please encode leave balance. T.Y.',
                'created_at' => '2022-12-20 13:48:05',
                'updated_at' => '2022-12-20 13:48:05',
            ),
            489 => 
            array (
                'id' => 514,
                'document_id' => 167,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 13:48:52',
                'updated_at' => '2022-12-20 13:48:52',
            ),
            490 => 
            array (
                'id' => 515,
                'document_id' => 240,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 13:50:57',
                'updated_at' => '2022-12-20 13:50:57',
            ),
            491 => 
            array (
                'id' => 516,
                'document_id' => 241,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 13:55:00',
                'updated_at' => '2022-12-20 13:55:00',
            ),
            492 => 
            array (
                'id' => 517,
                'document_id' => 242,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 13:56:59',
                'updated_at' => '2022-12-20 13:56:59',
            ),
            493 => 
            array (
                'id' => 518,
                'document_id' => 243,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 13:59:26',
                'updated_at' => '2022-12-20 13:59:26',
            ),
            494 => 
            array (
                'id' => 519,
                'document_id' => 244,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:02:16',
                'updated_at' => '2022-12-20 14:02:16',
            ),
            495 => 
            array (
                'id' => 520,
                'document_id' => 245,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:03:45',
                'updated_at' => '2022-12-20 14:03:45',
            ),
            496 => 
            array (
                'id' => 521,
                'document_id' => 246,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:05:54',
                'updated_at' => '2022-12-20 14:05:54',
            ),
            497 => 
            array (
                'id' => 522,
                'document_id' => 247,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:07:49',
                'updated_at' => '2022-12-20 14:07:49',
            ),
            498 => 
            array (
                'id' => 523,
                'document_id' => 248,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:10:06',
                'updated_at' => '2022-12-20 14:10:06',
            ),
            499 => 
            array (
                'id' => 524,
                'document_id' => 248,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-20 14:11:19',
                'updated_at' => '2022-12-20 14:11:19',
            ),
        ));
        \DB::table('doc_routes')->insert(array (
            0 => 
            array (
                'id' => 525,
                'document_id' => 239,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-20 14:11:38',
                'updated_at' => '2022-12-20 14:11:38',
            ),
            1 => 
            array (
                'id' => 526,
                'document_id' => 240,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-20 14:11:56',
                'updated_at' => '2022-12-20 14:11:56',
            ),
            2 => 
            array (
                'id' => 527,
                'document_id' => 241,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-20 14:12:15',
                'updated_at' => '2022-12-20 14:12:15',
            ),
            3 => 
            array (
                'id' => 528,
                'document_id' => 242,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-20 14:12:33',
                'updated_at' => '2022-12-20 14:12:33',
            ),
            4 => 
            array (
                'id' => 529,
                'document_id' => 249,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:12:45',
                'updated_at' => '2022-12-20 14:12:45',
            ),
            5 => 
            array (
                'id' => 530,
                'document_id' => 243,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-20 14:12:48',
                'updated_at' => '2022-12-20 14:12:48',
            ),
            6 => 
            array (
                'id' => 531,
                'document_id' => 244,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-20 14:13:05',
                'updated_at' => '2022-12-20 14:13:05',
            ),
            7 => 
            array (
                'id' => 532,
                'document_id' => 245,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-20 14:13:21',
                'updated_at' => '2022-12-20 14:13:21',
            ),
            8 => 
            array (
                'id' => 533,
                'document_id' => 246,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-20 14:13:37',
                'updated_at' => '2022-12-20 14:13:37',
            ),
            9 => 
            array (
                'id' => 534,
                'document_id' => 247,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-20 14:13:57',
                'updated_at' => '2022-12-20 14:13:57',
            ),
            10 => 
            array (
                'id' => 535,
                'document_id' => 249,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-20 14:14:50',
                'updated_at' => '2022-12-20 14:14:50',
            ),
            11 => 
            array (
                'id' => 536,
                'document_id' => 250,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:16:04',
                'updated_at' => '2022-12-20 14:16:04',
            ),
            12 => 
            array (
                'id' => 537,
                'document_id' => 251,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:16:22',
                'updated_at' => '2022-12-20 14:16:22',
            ),
            13 => 
            array (
                'id' => 538,
                'document_id' => 252,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:17:02',
                'updated_at' => '2022-12-20 14:17:02',
            ),
            14 => 
            array (
                'id' => 539,
                'document_id' => 253,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:23:04',
                'updated_at' => '2022-12-20 14:23:04',
            ),
            15 => 
            array (
                'id' => 540,
                'document_id' => 251,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-20 14:23:39',
                'updated_at' => '2022-12-20 14:23:39',
            ),
            16 => 
            array (
                'id' => 541,
                'document_id' => 254,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:24:19',
                'updated_at' => '2022-12-20 14:24:19',
            ),
            17 => 
            array (
                'id' => 542,
                'document_id' => 255,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:25:34',
                'updated_at' => '2022-12-20 14:25:34',
            ),
            18 => 
            array (
                'id' => 543,
                'document_id' => 256,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:29:52',
                'updated_at' => '2022-12-20 14:29:52',
            ),
            19 => 
            array (
                'id' => 544,
                'document_id' => 257,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:33:54',
                'updated_at' => '2022-12-20 14:33:54',
            ),
            20 => 
            array (
                'id' => 545,
                'document_id' => 258,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:41:04',
                'updated_at' => '2022-12-20 14:41:04',
            ),
            21 => 
            array (
                'id' => 546,
                'document_id' => 259,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:43:07',
                'updated_at' => '2022-12-20 14:43:07',
            ),
            22 => 
            array (
                'id' => 547,
                'document_id' => 260,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 14:52:52',
                'updated_at' => '2022-12-20 14:52:52',
            ),
            23 => 
            array (
                'id' => 548,
                'document_id' => 261,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 14:53:22',
                'updated_at' => '2022-12-20 14:53:22',
            ),
            24 => 
            array (
                'id' => 549,
                'document_id' => 262,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 14:54:12',
                'updated_at' => '2022-12-20 14:54:12',
            ),
            25 => 
            array (
                'id' => 550,
                'document_id' => 263,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 14:55:02',
                'updated_at' => '2022-12-20 14:55:02',
            ),
            26 => 
            array (
                'id' => 551,
                'document_id' => 264,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 15:00:24',
                'updated_at' => '2022-12-20 15:00:24',
            ),
            27 => 
            array (
                'id' => 552,
                'document_id' => 265,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 15:02:06',
                'updated_at' => '2022-12-20 15:02:06',
            ),
            28 => 
            array (
                'id' => 553,
                'document_id' => 266,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 15:03:16',
                'updated_at' => '2022-12-20 15:03:16',
            ),
            29 => 
            array (
                'id' => 554,
                'document_id' => 267,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 15:04:12',
                'updated_at' => '2022-12-20 15:04:12',
            ),
            30 => 
            array (
                'id' => 555,
                'document_id' => 268,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-20 15:06:49',
                'updated_at' => '2022-12-20 15:06:49',
            ),
            31 => 
            array (
                'id' => 556,
                'document_id' => 269,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 15:08:14',
                'updated_at' => '2022-12-20 15:08:14',
            ),
            32 => 
            array (
                'id' => 557,
                'document_id' => 270,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 15:10:47',
                'updated_at' => '2022-12-20 15:10:47',
            ),
            33 => 
            array (
                'id' => 558,
                'document_id' => 268,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 15:11:15',
                'updated_at' => '2022-12-20 15:11:15',
            ),
            34 => 
            array (
                'id' => 559,
                'document_id' => 271,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 15:11:40',
                'updated_at' => '2022-12-20 15:11:40',
            ),
            35 => 
            array (
                'id' => 560,
                'document_id' => 272,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 15:12:40',
                'updated_at' => '2022-12-20 15:12:40',
            ),
            36 => 
            array (
                'id' => 561,
                'document_id' => 273,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 15:13:04',
                'updated_at' => '2022-12-20 15:13:04',
            ),
            37 => 
            array (
                'id' => 562,
                'document_id' => 274,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 15:13:49',
                'updated_at' => '2022-12-20 15:13:49',
            ),
            38 => 
            array (
                'id' => 563,
                'document_id' => 275,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 15:14:29',
                'updated_at' => '2022-12-20 15:14:29',
            ),
            39 => 
            array (
                'id' => 564,
                'document_id' => 276,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 15:15:22',
                'updated_at' => '2022-12-20 15:15:22',
            ),
            40 => 
            array (
                'id' => 565,
                'document_id' => 277,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 15:16:02',
                'updated_at' => '2022-12-20 15:16:02',
            ),
            41 => 
            array (
                'id' => 566,
                'document_id' => 278,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 15:16:38',
                'updated_at' => '2022-12-20 15:16:38',
            ),
            42 => 
            array (
                'id' => 568,
                'document_id' => 279,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 15:23:36',
                'updated_at' => '2022-12-20 15:23:36',
            ),
            43 => 
            array (
                'id' => 569,
                'document_id' => 280,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-20 15:26:21',
                'updated_at' => '2022-12-20 15:26:21',
            ),
            44 => 
            array (
                'id' => 570,
                'document_id' => 281,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 15:28:45',
                'updated_at' => '2022-12-20 15:28:45',
            ),
            45 => 
            array (
                'id' => 571,
                'document_id' => 282,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-20 15:40:00',
                'updated_at' => '2022-12-20 15:40:00',
            ),
            46 => 
            array (
                'id' => 572,
                'document_id' => 283,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-20 15:41:08',
                'updated_at' => '2022-12-20 15:41:08',
            ),
            47 => 
            array (
                'id' => 573,
                'document_id' => 284,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-20 15:41:44',
                'updated_at' => '2022-12-20 15:41:44',
            ),
            48 => 
            array (
                'id' => 574,
                'document_id' => 285,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 16:46:27',
                'updated_at' => '2022-12-20 16:46:27',
            ),
            49 => 
            array (
                'id' => 575,
                'document_id' => 286,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 16:47:19',
                'updated_at' => '2022-12-20 16:47:19',
            ),
            50 => 
            array (
                'id' => 576,
                'document_id' => 287,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 16:48:12',
                'updated_at' => '2022-12-20 16:48:12',
            ),
            51 => 
            array (
                'id' => 577,
                'document_id' => 288,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 16:49:19',
                'updated_at' => '2022-12-20 16:49:19',
            ),
            52 => 
            array (
                'id' => 578,
                'document_id' => 289,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 16:51:27',
                'updated_at' => '2022-12-20 16:51:27',
            ),
            53 => 
            array (
                'id' => 580,
                'document_id' => 182,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 08:18:02',
                'updated_at' => '2022-12-21 08:18:02',
            ),
            54 => 
            array (
                'id' => 581,
                'document_id' => 183,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 08:19:54',
                'updated_at' => '2022-12-21 08:19:54',
            ),
            55 => 
            array (
                'id' => 582,
                'document_id' => 141,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 08:23:06',
                'updated_at' => '2022-12-21 08:23:06',
            ),
            56 => 
            array (
                'id' => 583,
                'document_id' => 185,
                'user_id' => 1,
                'remarks' => 'is this not yet capable to be processed using the procurement system?',
                'created_at' => '2022-12-21 08:25:06',
                'updated_at' => '2022-12-21 08:25:06',
            ),
            57 => 
            array (
                'id' => 584,
                'document_id' => 33,
                'user_id' => 1,
                'remarks' => 'WHY NO ACTION ON THIS DOCUMENT?',
                'created_at' => '2022-12-21 08:41:09',
                'updated_at' => '2022-12-21 08:41:09',
            ),
            58 => 
            array (
                'id' => 585,
                'document_id' => 17,
                'user_id' => 2,
                'remarks' => 'correction made',
                'created_at' => '2022-12-21 08:41:11',
                'updated_at' => '2022-12-21 08:41:11',
            ),
            59 => 
            array (
                'id' => 586,
                'document_id' => 105,
                'user_id' => 1,
                'remarks' => 'Prepare endorsement to CO for reasons stated therein',
                'created_at' => '2022-12-21 08:42:47',
                'updated_at' => '2022-12-21 08:42:47',
            ),
            60 => 
            array (
                'id' => 587,
                'document_id' => 142,
                'user_id' => 1,
                'remarks' => 'except Dec 23. No assessment on that date',
                'created_at' => '2022-12-21 08:55:46',
                'updated_at' => '2022-12-21 08:55:46',
            ),
            61 => 
            array (
                'id' => 588,
                'document_id' => 153,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-21 08:58:22',
                'updated_at' => '2022-12-21 08:58:22',
            ),
            62 => 
            array (
                'id' => 589,
                'document_id' => 290,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:10:04',
                'updated_at' => '2022-12-21 09:10:04',
            ),
            63 => 
            array (
                'id' => 590,
                'document_id' => 291,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:11:24',
                'updated_at' => '2022-12-21 09:11:24',
            ),
            64 => 
            array (
                'id' => 591,
                'document_id' => 292,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:12:37',
                'updated_at' => '2022-12-21 09:12:37',
            ),
            65 => 
            array (
                'id' => 592,
                'document_id' => 293,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:13:22',
                'updated_at' => '2022-12-21 09:13:22',
            ),
            66 => 
            array (
                'id' => 593,
                'document_id' => 294,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:14:23',
                'updated_at' => '2022-12-21 09:14:23',
            ),
            67 => 
            array (
                'id' => 594,
                'document_id' => 295,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:15:18',
                'updated_at' => '2022-12-21 09:15:18',
            ),
            68 => 
            array (
                'id' => 595,
                'document_id' => 154,
                'user_id' => 1,
                'remarks' => 'No assessment schedule on December 23',
                'created_at' => '2022-12-21 09:15:59',
                'updated_at' => '2022-12-21 09:15:59',
            ),
            69 => 
            array (
                'id' => 596,
                'document_id' => 296,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:17:04',
                'updated_at' => '2022-12-21 09:17:04',
            ),
            70 => 
            array (
                'id' => 597,
                'document_id' => 276,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-21 09:17:25',
                'updated_at' => '2022-12-21 09:17:25',
            ),
            71 => 
            array (
                'id' => 598,
                'document_id' => 297,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:19:41',
                'updated_at' => '2022-12-21 09:19:41',
            ),
            72 => 
            array (
                'id' => 599,
                'document_id' => 298,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:20:27',
                'updated_at' => '2022-12-21 09:20:27',
            ),
            73 => 
            array (
                'id' => 600,
                'document_id' => 299,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:21:18',
                'updated_at' => '2022-12-21 09:21:18',
            ),
            74 => 
            array (
                'id' => 601,
                'document_id' => 300,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:22:37',
                'updated_at' => '2022-12-21 09:22:37',
            ),
            75 => 
            array (
                'id' => 602,
                'document_id' => 301,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:23:25',
                'updated_at' => '2022-12-21 09:23:25',
            ),
            76 => 
            array (
                'id' => 603,
                'document_id' => 302,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:24:16',
                'updated_at' => '2022-12-21 09:24:16',
            ),
            77 => 
            array (
                'id' => 604,
                'document_id' => 303,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:25:34',
                'updated_at' => '2022-12-21 09:25:34',
            ),
            78 => 
            array (
                'id' => 605,
                'document_id' => 304,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:32:35',
                'updated_at' => '2022-12-21 09:32:35',
            ),
            79 => 
            array (
                'id' => 606,
                'document_id' => 305,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:34:49',
                'updated_at' => '2022-12-21 09:34:49',
            ),
            80 => 
            array (
                'id' => 607,
                'document_id' => 290,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 09:37:24',
                'updated_at' => '2022-12-21 09:37:24',
            ),
            81 => 
            array (
                'id' => 608,
                'document_id' => 306,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:37:32',
                'updated_at' => '2022-12-21 09:37:32',
            ),
            82 => 
            array (
                'id' => 609,
                'document_id' => 291,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 09:39:15',
                'updated_at' => '2022-12-21 09:39:15',
            ),
            83 => 
            array (
                'id' => 610,
                'document_id' => 307,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:41:09',
                'updated_at' => '2022-12-21 09:41:09',
            ),
            84 => 
            array (
                'id' => 611,
                'document_id' => 292,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 09:41:34',
                'updated_at' => '2022-12-21 09:41:34',
            ),
            85 => 
            array (
                'id' => 612,
                'document_id' => 171,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 09:44:05',
                'updated_at' => '2022-12-21 09:44:05',
            ),
            86 => 
            array (
                'id' => 613,
                'document_id' => 172,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 09:45:29',
                'updated_at' => '2022-12-21 09:45:29',
            ),
            87 => 
            array (
                'id' => 614,
                'document_id' => 257,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 09:47:40',
                'updated_at' => '2022-12-21 09:47:40',
            ),
            88 => 
            array (
                'id' => 615,
                'document_id' => 173,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 09:48:53',
                'updated_at' => '2022-12-21 09:48:53',
            ),
            89 => 
            array (
                'id' => 616,
                'document_id' => 143,
                'user_id' => 1,
                'remarks' => 'No attachment',
                'created_at' => '2022-12-21 09:51:26',
                'updated_at' => '2022-12-21 09:51:26',
            ),
            90 => 
            array (
                'id' => 617,
                'document_id' => 274,
                'user_id' => 1,
                'remarks' => 'approved except Dec. 23 and 30. NO assessment on this dates',
                'created_at' => '2022-12-21 09:53:04',
                'updated_at' => '2022-12-21 09:53:04',
            ),
            91 => 
            array (
                'id' => 618,
                'document_id' => 174,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 09:59:19',
                'updated_at' => '2022-12-21 09:59:19',
            ),
            92 => 
            array (
                'id' => 619,
                'document_id' => 175,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 10:00:51',
                'updated_at' => '2022-12-21 10:00:51',
            ),
            93 => 
            array (
                'id' => 620,
                'document_id' => 178,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 10:05:35',
                'updated_at' => '2022-12-21 10:05:35',
            ),
            94 => 
            array (
                'id' => 621,
                'document_id' => 143,
                'user_id' => 35,
                'remarks' => 'Good Day RD, sorry po. Na attach ko na po yung document. Thank you.',
                'created_at' => '2022-12-21 10:30:19',
                'updated_at' => '2022-12-21 10:30:19',
            ),
            95 => 
            array (
                'id' => 622,
                'document_id' => 308,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 11:36:35',
                'updated_at' => '2022-12-21 11:36:35',
            ),
            96 => 
            array (
                'id' => 623,
                'document_id' => 309,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 11:39:51',
                'updated_at' => '2022-12-21 11:39:51',
            ),
            97 => 
            array (
                'id' => 624,
                'document_id' => 309,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-21 11:47:12',
                'updated_at' => '2022-12-21 11:47:12',
            ),
            98 => 
            array (
                'id' => 625,
                'document_id' => 308,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-21 11:47:29',
                'updated_at' => '2022-12-21 11:47:29',
            ),
            99 => 
            array (
                'id' => 626,
                'document_id' => 310,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 11:49:36',
                'updated_at' => '2022-12-21 11:49:36',
            ),
            100 => 
            array (
                'id' => 627,
                'document_id' => 311,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 11:50:58',
                'updated_at' => '2022-12-21 11:50:58',
            ),
            101 => 
            array (
                'id' => 628,
                'document_id' => 312,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 11:51:41',
                'updated_at' => '2022-12-21 11:51:41',
            ),
            102 => 
            array (
                'id' => 629,
                'document_id' => 204,
                'user_id' => 5,
                'remarks' => NULL,
                'created_at' => '2022-12-21 12:41:41',
                'updated_at' => '2022-12-21 12:41:41',
            ),
            103 => 
            array (
                'id' => 630,
                'document_id' => 204,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-21 12:57:27',
                'updated_at' => '2022-12-21 12:57:27',
            ),
            104 => 
            array (
                'id' => 632,
                'document_id' => 32,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 13:36:00',
                'updated_at' => '2022-12-21 13:36:00',
            ),
            105 => 
            array (
                'id' => 633,
                'document_id' => 313,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 14:38:00',
                'updated_at' => '2022-12-21 14:38:00',
            ),
            106 => 
            array (
                'id' => 634,
                'document_id' => 179,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 14:44:42',
                'updated_at' => '2022-12-21 14:44:42',
            ),
            107 => 
            array (
                'id' => 635,
                'document_id' => 314,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 15:09:56',
                'updated_at' => '2022-12-21 15:09:56',
            ),
            108 => 
            array (
                'id' => 636,
                'document_id' => 128,
                'user_id' => 5,
                'remarks' => NULL,
                'created_at' => '2022-12-21 15:11:27',
                'updated_at' => '2022-12-21 15:11:27',
            ),
            109 => 
            array (
                'id' => 637,
                'document_id' => 315,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 15:11:32',
                'updated_at' => '2022-12-21 15:11:32',
            ),
            110 => 
            array (
                'id' => 638,
                'document_id' => 131,
                'user_id' => 5,
                'remarks' => NULL,
                'created_at' => '2022-12-21 15:11:59',
                'updated_at' => '2022-12-21 15:11:59',
            ),
            111 => 
            array (
                'id' => 639,
                'document_id' => 316,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 15:12:19',
                'updated_at' => '2022-12-21 15:12:19',
            ),
            112 => 
            array (
                'id' => 640,
                'document_id' => 317,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 15:14:33',
                'updated_at' => '2022-12-21 15:14:33',
            ),
            113 => 
            array (
                'id' => 641,
                'document_id' => 318,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 15:16:07',
                'updated_at' => '2022-12-21 15:16:07',
            ),
            114 => 
            array (
                'id' => 642,
                'document_id' => 319,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 15:17:28',
                'updated_at' => '2022-12-21 15:17:28',
            ),
            115 => 
            array (
                'id' => 643,
                'document_id' => 320,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 15:18:18',
                'updated_at' => '2022-12-21 15:18:18',
            ),
            116 => 
            array (
                'id' => 644,
                'document_id' => 321,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 15:19:00',
                'updated_at' => '2022-12-21 15:19:00',
            ),
            117 => 
            array (
                'id' => 645,
                'document_id' => 232,
                'user_id' => 26,
                'remarks' => 'JA, ang application ni Oaing... CTO and sick leave.. which is final? thanks',
                'created_at' => '2022-12-21 15:20:30',
                'updated_at' => '2022-12-21 15:20:30',
            ),
            118 => 
            array (
                'id' => 646,
                'document_id' => 322,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 15:20:57',
                'updated_at' => '2022-12-21 15:20:57',
            ),
            119 => 
            array (
                'id' => 647,
                'document_id' => 323,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 15:21:33',
                'updated_at' => '2022-12-21 15:21:33',
            ),
            120 => 
            array (
                'id' => 648,
                'document_id' => 324,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 15:22:08',
                'updated_at' => '2022-12-21 15:22:08',
            ),
            121 => 
            array (
                'id' => 649,
                'document_id' => 325,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 15:23:00',
                'updated_at' => '2022-12-21 15:23:00',
            ),
            122 => 
            array (
                'id' => 650,
                'document_id' => 54,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 15:27:37',
                'updated_at' => '2022-12-21 15:27:37',
            ),
            123 => 
            array (
                'id' => 651,
                'document_id' => 326,
                'user_id' => 4,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 15:28:46',
                'updated_at' => '2022-12-21 15:28:46',
            ),
            124 => 
            array (
                'id' => 652,
                'document_id' => 327,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 15:32:29',
                'updated_at' => '2022-12-21 15:32:29',
            ),
            125 => 
            array (
                'id' => 653,
                'document_id' => 30,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 15:33:08',
                'updated_at' => '2022-12-21 15:33:08',
            ),
            126 => 
            array (
                'id' => 654,
                'document_id' => 328,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 15:33:36',
                'updated_at' => '2022-12-21 15:33:36',
            ),
            127 => 
            array (
                'id' => 655,
                'document_id' => 329,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 15:34:37',
                'updated_at' => '2022-12-21 15:34:37',
            ),
            128 => 
            array (
                'id' => 656,
                'document_id' => 330,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 15:35:30',
                'updated_at' => '2022-12-21 15:35:30',
            ),
            129 => 
            array (
                'id' => 657,
                'document_id' => 33,
                'user_id' => 26,
                'remarks' => 'Hello RD, already emailed sa PTC Capiz . FYI Sir. Thanks po',
                'created_at' => '2022-12-21 15:37:25',
                'updated_at' => '2022-12-21 15:37:25',
            ),
            130 => 
            array (
                'id' => 658,
                'document_id' => 100,
                'user_id' => 26,
                'remarks' => 'For Referral to TESDA CO-HRMD since this involves change of plantilla item number. Thanks',
                'created_at' => '2022-12-21 15:40:33',
                'updated_at' => '2022-12-21 15:40:33',
            ),
            131 => 
            array (
                'id' => 659,
                'document_id' => 238,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 15:42:38',
                'updated_at' => '2022-12-21 15:42:38',
            ),
            132 => 
            array (
                'id' => 660,
                'document_id' => 65,
                'user_id' => 26,
                'remarks' => 'Sir reviewed na po. FYI . Thanks',
                'created_at' => '2022-12-21 15:44:05',
                'updated_at' => '2022-12-21 15:44:05',
            ),
            133 => 
            array (
                'id' => 661,
                'document_id' => 331,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 15:44:30',
                'updated_at' => '2022-12-21 15:44:30',
            ),
            134 => 
            array (
                'id' => 662,
                'document_id' => 170,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 15:45:25',
                'updated_at' => '2022-12-21 15:45:25',
            ),
            135 => 
            array (
                'id' => 663,
                'document_id' => 103,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 15:46:40',
                'updated_at' => '2022-12-21 15:46:40',
            ),
            136 => 
            array (
                'id' => 664,
                'document_id' => 31,
                'user_id' => 26,
                'remarks' => 'Sir, we discussed this concern with PD Esther.  IPO budget officer already submitted the projected expenses and LAA was already prepared. FYI po. Thanks RD',
                'created_at' => '2022-12-21 15:51:57',
                'updated_at' => '2022-12-21 15:51:57',
            ),
            137 => 
            array (
                'id' => 665,
                'document_id' => 169,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 15:55:46',
                'updated_at' => '2022-12-21 15:55:46',
            ),
            138 => 
            array (
                'id' => 666,
                'document_id' => 34,
                'user_id' => 26,
                'remarks' => 'Ja, pls draft memo. TY',
                'created_at' => '2022-12-21 15:56:33',
                'updated_at' => '2022-12-21 15:56:33',
            ),
            139 => 
            array (
                'id' => 667,
                'document_id' => 168,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 15:58:05',
                'updated_at' => '2022-12-21 15:58:05',
            ),
            140 => 
            array (
                'id' => 668,
                'document_id' => 166,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 15:59:31',
                'updated_at' => '2022-12-21 15:59:31',
            ),
            141 => 
            array (
                'id' => 669,
                'document_id' => 162,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 16:04:15',
                'updated_at' => '2022-12-21 16:04:15',
            ),
            142 => 
            array (
                'id' => 670,
                'document_id' => 157,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 16:06:31',
                'updated_at' => '2022-12-21 16:06:31',
            ),
            143 => 
            array (
                'id' => 671,
                'document_id' => 332,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 16:10:14',
                'updated_at' => '2022-12-21 16:10:14',
            ),
            144 => 
            array (
                'id' => 672,
                'document_id' => 333,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 16:12:34',
                'updated_at' => '2022-12-21 16:12:34',
            ),
            145 => 
            array (
                'id' => 673,
                'document_id' => 202,
                'user_id' => 26,
                'remarks' => 'Already signed. FYI',
                'created_at' => '2022-12-21 16:14:07',
                'updated_at' => '2022-12-21 16:14:07',
            ),
            146 => 
            array (
                'id' => 674,
                'document_id' => 151,
                'user_id' => 26,
                'remarks' => 'Already signed. FYI',
                'created_at' => '2022-12-21 16:16:53',
                'updated_at' => '2022-12-21 16:16:53',
            ),
            147 => 
            array (
                'id' => 675,
                'document_id' => 334,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 16:18:58',
                'updated_at' => '2022-12-21 16:18:58',
            ),
            148 => 
            array (
                'id' => 676,
                'document_id' => 335,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 16:25:21',
                'updated_at' => '2022-12-21 16:25:21',
            ),
            149 => 
            array (
                'id' => 677,
                'document_id' => 336,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 16:26:25',
                'updated_at' => '2022-12-21 16:26:25',
            ),
            150 => 
            array (
                'id' => 678,
                'document_id' => 337,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 16:27:06',
                'updated_at' => '2022-12-21 16:27:06',
            ),
            151 => 
            array (
                'id' => 679,
                'document_id' => 338,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 16:27:44',
                'updated_at' => '2022-12-21 16:27:44',
            ),
            152 => 
            array (
                'id' => 680,
                'document_id' => 339,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 16:28:27',
                'updated_at' => '2022-12-21 16:28:27',
            ),
            153 => 
            array (
                'id' => 681,
                'document_id' => 340,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 16:28:53',
                'updated_at' => '2022-12-21 16:28:53',
            ),
            154 => 
            array (
                'id' => 682,
                'document_id' => 341,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 16:30:07',
                'updated_at' => '2022-12-21 16:30:07',
            ),
            155 => 
            array (
                'id' => 683,
                'document_id' => 342,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 16:31:36',
                'updated_at' => '2022-12-21 16:31:36',
            ),
            156 => 
            array (
                'id' => 684,
                'document_id' => 55,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 16:33:31',
                'updated_at' => '2022-12-21 16:33:31',
            ),
            157 => 
            array (
                'id' => 685,
                'document_id' => 343,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 16:33:56',
                'updated_at' => '2022-12-21 16:33:56',
            ),
            158 => 
            array (
                'id' => 686,
                'document_id' => 344,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 16:34:23',
                'updated_at' => '2022-12-21 16:34:23',
            ),
            159 => 
            array (
                'id' => 687,
                'document_id' => 64,
                'user_id' => 26,
                'remarks' => 'Ja, let us discuss',
                'created_at' => '2022-12-21 16:34:47',
                'updated_at' => '2022-12-21 16:34:47',
            ),
            160 => 
            array (
                'id' => 688,
                'document_id' => 102,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 16:36:20',
                'updated_at' => '2022-12-21 16:36:20',
            ),
            161 => 
            array (
                'id' => 689,
                'document_id' => 104,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 16:37:30',
                'updated_at' => '2022-12-21 16:37:30',
            ),
            162 => 
            array (
                'id' => 690,
                'document_id' => 101,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 16:38:38',
                'updated_at' => '2022-12-21 16:38:38',
            ),
            163 => 
            array (
                'id' => 691,
                'document_id' => 97,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 16:40:19',
                'updated_at' => '2022-12-21 16:40:19',
            ),
            164 => 
            array (
                'id' => 692,
                'document_id' => 345,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 16:41:47',
                'updated_at' => '2022-12-21 16:41:47',
            ),
            165 => 
            array (
                'id' => 693,
                'document_id' => 313,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 16:42:08',
                'updated_at' => '2022-12-21 16:42:08',
            ),
            166 => 
            array (
                'id' => 694,
                'document_id' => 346,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 16:42:21',
                'updated_at' => '2022-12-21 16:42:21',
            ),
            167 => 
            array (
                'id' => 695,
                'document_id' => 261,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 16:43:29',
                'updated_at' => '2022-12-21 16:43:29',
            ),
            168 => 
            array (
                'id' => 696,
                'document_id' => 347,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 16:43:35',
                'updated_at' => '2022-12-21 16:43:35',
            ),
            169 => 
            array (
                'id' => 697,
                'document_id' => 348,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 16:44:14',
                'updated_at' => '2022-12-21 16:44:14',
            ),
            170 => 
            array (
                'id' => 698,
                'document_id' => 152,
                'user_id' => 26,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 16:44:33',
                'updated_at' => '2022-12-21 16:44:33',
            ),
            171 => 
            array (
                'id' => 699,
                'document_id' => 349,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 16:44:51',
                'updated_at' => '2022-12-21 16:44:51',
            ),
            172 => 
            array (
                'id' => 700,
                'document_id' => 167,
                'user_id' => 26,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 16:44:58',
                'updated_at' => '2022-12-21 16:44:58',
            ),
            173 => 
            array (
                'id' => 701,
                'document_id' => 203,
                'user_id' => 26,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 16:45:16',
                'updated_at' => '2022-12-21 16:45:16',
            ),
            174 => 
            array (
                'id' => 702,
                'document_id' => 350,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 16:45:31',
                'updated_at' => '2022-12-21 16:45:31',
            ),
            175 => 
            array (
                'id' => 703,
                'document_id' => 351,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 16:46:29',
                'updated_at' => '2022-12-21 16:46:29',
            ),
            176 => 
            array (
                'id' => 704,
                'document_id' => 352,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 16:47:17',
                'updated_at' => '2022-12-21 16:47:17',
            ),
            177 => 
            array (
                'id' => 705,
                'document_id' => 353,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 16:47:52',
                'updated_at' => '2022-12-21 16:47:52',
            ),
            178 => 
            array (
                'id' => 706,
                'document_id' => 354,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 16:48:23',
                'updated_at' => '2022-12-21 16:48:23',
            ),
            179 => 
            array (
                'id' => 707,
                'document_id' => 293,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 16:49:05',
                'updated_at' => '2022-12-21 16:49:05',
            ),
            180 => 
            array (
                'id' => 708,
                'document_id' => 294,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 16:50:28',
                'updated_at' => '2022-12-21 16:50:28',
            ),
            181 => 
            array (
                'id' => 709,
                'document_id' => 326,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-21 16:51:13',
                'updated_at' => '2022-12-21 16:51:13',
            ),
            182 => 
            array (
                'id' => 710,
                'document_id' => 295,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 16:51:31',
                'updated_at' => '2022-12-21 16:51:31',
            ),
            183 => 
            array (
                'id' => 711,
                'document_id' => 296,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 16:52:21',
                'updated_at' => '2022-12-21 16:52:21',
            ),
            184 => 
            array (
                'id' => 712,
                'document_id' => 355,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 17:03:18',
                'updated_at' => '2022-12-21 17:03:18',
            ),
            185 => 
            array (
                'id' => 713,
                'document_id' => 297,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 17:03:26',
                'updated_at' => '2022-12-21 17:03:26',
            ),
            186 => 
            array (
                'id' => 714,
                'document_id' => 356,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 17:03:54',
                'updated_at' => '2022-12-21 17:03:54',
            ),
            187 => 
            array (
                'id' => 715,
                'document_id' => 298,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 17:05:09',
                'updated_at' => '2022-12-21 17:05:09',
            ),
            188 => 
            array (
                'id' => 716,
                'document_id' => 357,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 17:05:16',
                'updated_at' => '2022-12-21 17:05:16',
            ),
            189 => 
            array (
                'id' => 717,
                'document_id' => 358,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 17:05:44',
                'updated_at' => '2022-12-21 17:05:44',
            ),
            190 => 
            array (
                'id' => 718,
                'document_id' => 359,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 17:06:16',
                'updated_at' => '2022-12-21 17:06:16',
            ),
            191 => 
            array (
                'id' => 719,
                'document_id' => 360,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 17:06:31',
                'updated_at' => '2022-12-21 17:06:31',
            ),
            192 => 
            array (
                'id' => 720,
                'document_id' => 361,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 17:06:46',
                'updated_at' => '2022-12-21 17:06:46',
            ),
            193 => 
            array (
                'id' => 721,
                'document_id' => 362,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 17:07:14',
                'updated_at' => '2022-12-21 17:07:14',
            ),
            194 => 
            array (
                'id' => 722,
                'document_id' => 363,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 17:07:54',
                'updated_at' => '2022-12-21 17:07:54',
            ),
            195 => 
            array (
                'id' => 723,
                'document_id' => 364,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 17:08:56',
                'updated_at' => '2022-12-21 17:08:56',
            ),
            196 => 
            array (
                'id' => 724,
                'document_id' => 365,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 17:22:14',
                'updated_at' => '2022-12-21 17:22:14',
            ),
            197 => 
            array (
                'id' => 725,
                'document_id' => 366,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 17:24:14',
                'updated_at' => '2022-12-21 17:24:14',
            ),
            198 => 
            array (
                'id' => 726,
                'document_id' => 367,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 17:25:52',
                'updated_at' => '2022-12-21 17:25:52',
            ),
            199 => 
            array (
                'id' => 727,
                'document_id' => 368,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 17:28:52',
                'updated_at' => '2022-12-21 17:28:52',
            ),
            200 => 
            array (
                'id' => 728,
                'document_id' => 304,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 17:34:31',
                'updated_at' => '2022-12-21 17:34:31',
            ),
            201 => 
            array (
                'id' => 729,
                'document_id' => 299,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 17:35:25',
                'updated_at' => '2022-12-21 17:35:25',
            ),
            202 => 
            array (
                'id' => 730,
                'document_id' => 206,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-21 17:36:23',
                'updated_at' => '2022-12-21 17:36:23',
            ),
            203 => 
            array (
                'id' => 731,
                'document_id' => 300,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 17:37:02',
                'updated_at' => '2022-12-21 17:37:02',
            ),
            204 => 
            array (
                'id' => 732,
                'document_id' => 227,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-21 17:37:02',
                'updated_at' => '2022-12-21 17:37:02',
            ),
            205 => 
            array (
                'id' => 733,
                'document_id' => 309,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 17:38:45',
                'updated_at' => '2022-12-21 17:38:45',
            ),
            206 => 
            array (
                'id' => 734,
                'document_id' => 276,
                'user_id' => 3,
                'remarks' => 'Kindly check and verify the New Assessor\'s accreditation.',
                'created_at' => '2022-12-21 17:39:24',
                'updated_at' => '2022-12-21 17:39:24',
            ),
            207 => 
            array (
                'id' => 735,
                'document_id' => 318,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 17:39:43',
                'updated_at' => '2022-12-21 17:39:43',
            ),
            208 => 
            array (
                'id' => 736,
                'document_id' => 274,
                'user_id' => 3,
                'remarks' => 'Kindly take note of RD\'s remarks.',
                'created_at' => '2022-12-21 17:40:22',
                'updated_at' => '2022-12-21 17:40:22',
            ),
            209 => 
            array (
                'id' => 737,
                'document_id' => 147,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-21 17:40:40',
                'updated_at' => '2022-12-21 17:40:40',
            ),
            210 => 
            array (
                'id' => 738,
                'document_id' => 148,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-21 17:41:20',
                'updated_at' => '2022-12-21 17:41:20',
            ),
            211 => 
            array (
                'id' => 739,
                'document_id' => 142,
                'user_id' => 3,
                'remarks' => 'Kindly take note of RD\'s remarks',
                'created_at' => '2022-12-21 18:52:32',
                'updated_at' => '2022-12-21 18:52:32',
            ),
            212 => 
            array (
                'id' => 740,
                'document_id' => 153,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-21 18:53:10',
                'updated_at' => '2022-12-21 18:53:10',
            ),
            213 => 
            array (
                'id' => 741,
                'document_id' => 154,
                'user_id' => 3,
                'remarks' => 'Kindly take note of RDs remarks.',
                'created_at' => '2022-12-21 18:54:10',
                'updated_at' => '2022-12-21 18:54:10',
            ),
            214 => 
            array (
                'id' => 742,
                'document_id' => 128,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-21 18:55:55',
                'updated_at' => '2022-12-21 18:55:55',
            ),
            215 => 
            array (
                'id' => 743,
                'document_id' => 131,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-21 18:57:09',
                'updated_at' => '2022-12-21 18:57:09',
            ),
            216 => 
            array (
                'id' => 744,
                'document_id' => 94,
                'user_id' => 3,
                'remarks' => 'kindly affix your initial before you route to me.',
                'created_at' => '2022-12-21 18:58:52',
                'updated_at' => '2022-12-21 18:58:52',
            ),
            217 => 
            array (
                'id' => 745,
                'document_id' => 93,
                'user_id' => 3,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 19:00:36',
                'updated_at' => '2022-12-21 19:00:36',
            ),
            218 => 
            array (
                'id' => 746,
                'document_id' => 98,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-21 19:01:28',
                'updated_at' => '2022-12-21 19:01:28',
            ),
            219 => 
            array (
                'id' => 747,
                'document_id' => 105,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-21 19:03:39',
                'updated_at' => '2022-12-21 19:03:39',
            ),
            220 => 
            array (
                'id' => 748,
                'document_id' => 63,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-21 19:05:02',
                'updated_at' => '2022-12-21 19:05:02',
            ),
            221 => 
            array (
                'id' => 749,
                'document_id' => 369,
                'user_id' => 4,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 23:53:05',
                'updated_at' => '2022-12-21 23:53:05',
            ),
            222 => 
            array (
                'id' => 750,
                'document_id' => 370,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-22 09:03:42',
                'updated_at' => '2022-12-22 09:03:42',
            ),
            223 => 
            array (
                'id' => 751,
                'document_id' => 151,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 09:05:32',
                'updated_at' => '2022-12-22 09:05:32',
            ),
            224 => 
            array (
                'id' => 752,
                'document_id' => 202,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 09:09:49',
                'updated_at' => '2022-12-22 09:09:49',
            ),
            225 => 
            array (
                'id' => 753,
                'document_id' => 371,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-22 09:10:39',
                'updated_at' => '2022-12-22 09:10:39',
            ),
            226 => 
            array (
                'id' => 754,
                'document_id' => 312,
                'user_id' => 34,
                'remarks' => 'Jen, kindly check attachment',
                'created_at' => '2022-12-22 09:11:00',
                'updated_at' => '2022-12-22 09:11:00',
            ),
            227 => 
            array (
                'id' => 755,
                'document_id' => 314,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 09:12:21',
                'updated_at' => '2022-12-22 09:12:21',
            ),
            228 => 
            array (
                'id' => 756,
                'document_id' => 301,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 09:58:30',
                'updated_at' => '2022-12-22 09:58:30',
            ),
            229 => 
            array (
                'id' => 757,
                'document_id' => 372,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 10:03:41',
                'updated_at' => '2022-12-22 10:03:41',
            ),
            230 => 
            array (
                'id' => 758,
                'document_id' => 370,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-22 10:04:31',
                'updated_at' => '2022-12-22 10:04:31',
            ),
            231 => 
            array (
                'id' => 760,
                'document_id' => 373,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 10:05:15',
                'updated_at' => '2022-12-22 10:05:15',
            ),
            232 => 
            array (
                'id' => 761,
                'document_id' => 315,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 10:08:23',
                'updated_at' => '2022-12-22 10:08:23',
            ),
            233 => 
            array (
                'id' => 763,
                'document_id' => 316,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 10:09:29',
                'updated_at' => '2022-12-22 10:09:29',
            ),
            234 => 
            array (
                'id' => 764,
                'document_id' => 312,
                'user_id' => 35,
                'remarks' => 'Hi Maam Ja, na attach ko napo ang form. sorry po',
                'created_at' => '2022-12-22 10:10:04',
                'updated_at' => '2022-12-22 10:10:04',
            ),
            235 => 
            array (
                'id' => 765,
                'document_id' => 334,
                'user_id' => 34,
                'remarks' => 'Please return to RTC Iloilo',
                'created_at' => '2022-12-22 10:11:05',
                'updated_at' => '2022-12-22 10:11:05',
            ),
            236 => 
            array (
                'id' => 766,
                'document_id' => 317,
                'user_id' => 34,
                'remarks' => 'Please encode leave balance',
                'created_at' => '2022-12-22 10:12:10',
                'updated_at' => '2022-12-22 10:12:10',
            ),
            237 => 
            array (
                'id' => 767,
                'document_id' => 335,
                'user_id' => 34,
                'remarks' => 'For filing',
                'created_at' => '2022-12-22 10:14:12',
                'updated_at' => '2022-12-22 10:14:12',
            ),
            238 => 
            array (
                'id' => 768,
                'document_id' => 374,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-22 10:15:16',
                'updated_at' => '2022-12-22 10:15:16',
            ),
            239 => 
            array (
                'id' => 769,
                'document_id' => 336,
                'user_id' => 34,
                'remarks' => 'For archive',
                'created_at' => '2022-12-22 10:18:36',
                'updated_at' => '2022-12-22 10:18:36',
            ),
            240 => 
            array (
                'id' => 770,
                'document_id' => 337,
                'user_id' => 34,
                'remarks' => 'For archive',
                'created_at' => '2022-12-22 10:20:22',
                'updated_at' => '2022-12-22 10:20:22',
            ),
            241 => 
            array (
                'id' => 771,
                'document_id' => 338,
                'user_id' => 34,
                'remarks' => 'For archive',
                'created_at' => '2022-12-22 10:21:00',
                'updated_at' => '2022-12-22 10:21:00',
            ),
            242 => 
            array (
                'id' => 772,
                'document_id' => 339,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 10:21:28',
                'updated_at' => '2022-12-22 10:21:28',
            ),
            243 => 
            array (
                'id' => 773,
                'document_id' => 340,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 10:22:01',
                'updated_at' => '2022-12-22 10:22:01',
            ),
            244 => 
            array (
                'id' => 774,
                'document_id' => 375,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 10:23:58',
                'updated_at' => '2022-12-22 10:23:58',
            ),
            245 => 
            array (
                'id' => 775,
                'document_id' => 355,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 10:25:32',
                'updated_at' => '2022-12-22 10:25:32',
            ),
            246 => 
            array (
                'id' => 776,
                'document_id' => 356,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 10:28:04',
                'updated_at' => '2022-12-22 10:28:04',
            ),
            247 => 
            array (
                'id' => 777,
                'document_id' => 357,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 10:28:34',
                'updated_at' => '2022-12-22 10:28:34',
            ),
            248 => 
            array (
                'id' => 778,
                'document_id' => 358,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 10:28:59',
                'updated_at' => '2022-12-22 10:28:59',
            ),
            249 => 
            array (
                'id' => 779,
                'document_id' => 359,
                'user_id' => 34,
                'remarks' => 'For leave balance',
                'created_at' => '2022-12-22 10:29:42',
                'updated_at' => '2022-12-22 10:29:42',
            ),
            250 => 
            array (
                'id' => 780,
                'document_id' => 361,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 10:30:49',
                'updated_at' => '2022-12-22 10:30:49',
            ),
            251 => 
            array (
                'id' => 781,
                'document_id' => 362,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 10:31:25',
                'updated_at' => '2022-12-22 10:31:25',
            ),
            252 => 
            array (
                'id' => 782,
                'document_id' => 302,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 10:31:50',
                'updated_at' => '2022-12-22 10:31:50',
            ),
            253 => 
            array (
                'id' => 783,
                'document_id' => 232,
                'user_id' => 34,
                'remarks' => 'SL Maam',
                'created_at' => '2022-12-22 10:33:44',
                'updated_at' => '2022-12-22 10:33:44',
            ),
            254 => 
            array (
                'id' => 784,
                'document_id' => 374,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 10:34:39',
                'updated_at' => '2022-12-22 10:34:39',
            ),
            255 => 
            array (
                'id' => 785,
                'document_id' => 369,
                'user_id' => 34,
                'remarks' => 'For leave balance',
                'created_at' => '2022-12-22 10:36:40',
                'updated_at' => '2022-12-22 10:36:40',
            ),
            256 => 
            array (
                'id' => 786,
                'document_id' => 312,
                'user_id' => 34,
                'remarks' => 'For leave balance',
                'created_at' => '2022-12-22 10:37:34',
                'updated_at' => '2022-12-22 10:37:34',
            ),
            257 => 
            array (
                'id' => 787,
                'document_id' => 303,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 10:37:38',
                'updated_at' => '2022-12-22 10:37:38',
            ),
            258 => 
            array (
                'id' => 788,
                'document_id' => 305,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 10:39:46',
                'updated_at' => '2022-12-22 10:39:46',
            ),
            259 => 
            array (
                'id' => 789,
                'document_id' => 376,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 10:40:32',
                'updated_at' => '2022-12-22 10:40:32',
            ),
            260 => 
            array (
                'id' => 790,
                'document_id' => 377,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 10:42:19',
                'updated_at' => '2022-12-22 10:42:19',
            ),
            261 => 
            array (
                'id' => 791,
                'document_id' => 132,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 10:53:50',
                'updated_at' => '2022-12-22 10:53:50',
            ),
            262 => 
            array (
                'id' => 792,
                'document_id' => 283,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 10:54:26',
                'updated_at' => '2022-12-22 10:54:26',
            ),
            263 => 
            array (
                'id' => 793,
                'document_id' => 282,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 10:55:05',
                'updated_at' => '2022-12-22 10:55:05',
            ),
            264 => 
            array (
                'id' => 794,
                'document_id' => 378,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 10:55:51',
                'updated_at' => '2022-12-22 10:55:51',
            ),
            265 => 
            array (
                'id' => 795,
                'document_id' => 306,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 10:57:13',
                'updated_at' => '2022-12-22 10:57:13',
            ),
            266 => 
            array (
                'id' => 796,
                'document_id' => 284,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 10:57:23',
                'updated_at' => '2022-12-22 10:57:23',
            ),
            267 => 
            array (
                'id' => 797,
                'document_id' => 379,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 10:57:24',
                'updated_at' => '2022-12-22 10:57:24',
            ),
            268 => 
            array (
                'id' => 798,
                'document_id' => 380,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 11:00:32',
                'updated_at' => '2022-12-22 11:00:32',
            ),
            269 => 
            array (
                'id' => 799,
                'document_id' => 381,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 11:01:23',
                'updated_at' => '2022-12-22 11:01:23',
            ),
            270 => 
            array (
                'id' => 800,
                'document_id' => 382,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 11:02:29',
                'updated_at' => '2022-12-22 11:02:29',
            ),
            271 => 
            array (
                'id' => 801,
                'document_id' => 383,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 11:04:22',
                'updated_at' => '2022-12-22 11:04:22',
            ),
            272 => 
            array (
                'id' => 802,
                'document_id' => 307,
                'user_id' => 1,
                'remarks' => 'Deferred. Monetization is being held in abeyance as of this time',
                'created_at' => '2022-12-22 11:04:40',
                'updated_at' => '2022-12-22 11:04:40',
            ),
            273 => 
            array (
                'id' => 803,
                'document_id' => 280,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:04:45',
                'updated_at' => '2022-12-22 11:04:45',
            ),
            274 => 
            array (
                'id' => 804,
                'document_id' => 329,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:05:19',
                'updated_at' => '2022-12-22 11:05:19',
            ),
            275 => 
            array (
                'id' => 805,
                'document_id' => 328,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:06:31',
                'updated_at' => '2022-12-22 11:06:31',
            ),
            276 => 
            array (
                'id' => 806,
                'document_id' => 384,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 11:06:32',
                'updated_at' => '2022-12-22 11:06:32',
            ),
            277 => 
            array (
                'id' => 807,
                'document_id' => 307,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:07:24',
                'updated_at' => '2022-12-22 11:07:24',
            ),
            278 => 
            array (
                'id' => 808,
                'document_id' => 385,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 11:07:37',
                'updated_at' => '2022-12-22 11:07:37',
            ),
            279 => 
            array (
                'id' => 809,
                'document_id' => 327,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:07:59',
                'updated_at' => '2022-12-22 11:07:59',
            ),
            280 => 
            array (
                'id' => 810,
                'document_id' => 325,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:08:26',
                'updated_at' => '2022-12-22 11:08:26',
            ),
            281 => 
            array (
                'id' => 811,
                'document_id' => 324,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:08:51',
                'updated_at' => '2022-12-22 11:08:51',
            ),
            282 => 
            array (
                'id' => 812,
                'document_id' => 323,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:09:24',
                'updated_at' => '2022-12-22 11:09:24',
            ),
            283 => 
            array (
                'id' => 813,
                'document_id' => 320,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:09:54',
                'updated_at' => '2022-12-22 11:09:54',
            ),
            284 => 
            array (
                'id' => 814,
                'document_id' => 386,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 11:10:00',
                'updated_at' => '2022-12-22 11:10:00',
            ),
            285 => 
            array (
                'id' => 815,
                'document_id' => 308,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 11:12:46',
                'updated_at' => '2022-12-22 11:12:46',
            ),
            286 => 
            array (
                'id' => 816,
                'document_id' => 310,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:14:19',
                'updated_at' => '2022-12-22 11:14:19',
            ),
            287 => 
            array (
                'id' => 817,
                'document_id' => 320,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 11:17:06',
                'updated_at' => '2022-12-22 11:17:06',
            ),
            288 => 
            array (
                'id' => 818,
                'document_id' => 311,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:21:44',
                'updated_at' => '2022-12-22 11:21:44',
            ),
            289 => 
            array (
                'id' => 819,
                'document_id' => 319,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:24:23',
                'updated_at' => '2022-12-22 11:24:23',
            ),
            290 => 
            array (
                'id' => 820,
                'document_id' => 322,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:24:50',
                'updated_at' => '2022-12-22 11:24:50',
            ),
            291 => 
            array (
                'id' => 821,
                'document_id' => 321,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:25:14',
                'updated_at' => '2022-12-22 11:25:14',
            ),
            292 => 
            array (
                'id' => 822,
                'document_id' => 386,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:25:39',
                'updated_at' => '2022-12-22 11:25:39',
            ),
            293 => 
            array (
                'id' => 823,
                'document_id' => 385,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:26:18',
                'updated_at' => '2022-12-22 11:26:18',
            ),
            294 => 
            array (
                'id' => 824,
                'document_id' => 384,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:26:44',
                'updated_at' => '2022-12-22 11:26:44',
            ),
            295 => 
            array (
                'id' => 825,
                'document_id' => 383,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:27:16',
                'updated_at' => '2022-12-22 11:27:16',
            ),
            296 => 
            array (
                'id' => 826,
                'document_id' => 382,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:27:50',
                'updated_at' => '2022-12-22 11:27:50',
            ),
            297 => 
            array (
                'id' => 827,
                'document_id' => 381,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:28:16',
                'updated_at' => '2022-12-22 11:28:16',
            ),
            298 => 
            array (
                'id' => 828,
                'document_id' => 380,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:28:45',
                'updated_at' => '2022-12-22 11:28:45',
            ),
            299 => 
            array (
                'id' => 829,
                'document_id' => 378,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:29:43',
                'updated_at' => '2022-12-22 11:29:43',
            ),
            300 => 
            array (
                'id' => 830,
                'document_id' => 379,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:30:09',
                'updated_at' => '2022-12-22 11:30:09',
            ),
            301 => 
            array (
                'id' => 831,
                'document_id' => 376,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:30:45',
                'updated_at' => '2022-12-22 11:30:45',
            ),
            302 => 
            array (
                'id' => 832,
                'document_id' => 377,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:31:11',
                'updated_at' => '2022-12-22 11:31:11',
            ),
            303 => 
            array (
                'id' => 833,
                'document_id' => 375,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:31:42',
                'updated_at' => '2022-12-22 11:31:42',
            ),
            304 => 
            array (
                'id' => 834,
                'document_id' => 373,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:32:13',
                'updated_at' => '2022-12-22 11:32:13',
            ),
            305 => 
            array (
                'id' => 835,
                'document_id' => 372,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:32:41',
                'updated_at' => '2022-12-22 11:32:41',
            ),
            306 => 
            array (
                'id' => 836,
                'document_id' => 387,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 11:40:35',
                'updated_at' => '2022-12-22 11:40:35',
            ),
            307 => 
            array (
                'id' => 837,
                'document_id' => 388,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 11:41:25',
                'updated_at' => '2022-12-22 11:41:25',
            ),
            308 => 
            array (
                'id' => 838,
                'document_id' => 389,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 11:42:05',
                'updated_at' => '2022-12-22 11:42:05',
            ),
            309 => 
            array (
                'id' => 839,
                'document_id' => 390,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 11:42:47',
                'updated_at' => '2022-12-22 11:42:47',
            ),
            310 => 
            array (
                'id' => 840,
                'document_id' => 391,
                'user_id' => 34,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-22 11:45:04',
                'updated_at' => '2022-12-22 11:45:04',
            ),
            311 => 
            array (
                'id' => 841,
                'document_id' => 390,
                'user_id' => 34,
                'remarks' => 'No attachment',
                'created_at' => '2022-12-22 11:45:35',
                'updated_at' => '2022-12-22 11:45:35',
            ),
            312 => 
            array (
                'id' => 842,
                'document_id' => 323,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 11:47:46',
                'updated_at' => '2022-12-22 11:47:46',
            ),
            313 => 
            array (
                'id' => 843,
                'document_id' => 389,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:47:47',
                'updated_at' => '2022-12-22 11:47:47',
            ),
            314 => 
            array (
                'id' => 844,
                'document_id' => 392,
                'user_id' => 34,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-22 11:50:47',
                'updated_at' => '2022-12-22 11:50:47',
            ),
            315 => 
            array (
                'id' => 845,
                'document_id' => 388,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:51:14',
                'updated_at' => '2022-12-22 11:51:14',
            ),
            316 => 
            array (
                'id' => 846,
                'document_id' => 387,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:51:34',
                'updated_at' => '2022-12-22 11:51:34',
            ),
            317 => 
            array (
                'id' => 847,
                'document_id' => 372,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 11:52:59',
                'updated_at' => '2022-12-22 11:52:59',
            ),
            318 => 
            array (
                'id' => 848,
                'document_id' => 239,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 11:57:00',
                'updated_at' => '2022-12-22 11:57:00',
            ),
            319 => 
            array (
                'id' => 849,
                'document_id' => 390,
                'user_id' => 35,
                'remarks' => 'sorry maam ga lag po ko',
                'created_at' => '2022-12-22 12:00:55',
                'updated_at' => '2022-12-22 12:00:55',
            ),
            320 => 
            array (
                'id' => 850,
                'document_id' => 393,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:01:40',
                'updated_at' => '2022-12-22 12:01:40',
            ),
            321 => 
            array (
                'id' => 851,
                'document_id' => 394,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:02:18',
                'updated_at' => '2022-12-22 12:02:18',
            ),
            322 => 
            array (
                'id' => 852,
                'document_id' => 395,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:03:40',
                'updated_at' => '2022-12-22 12:03:40',
            ),
            323 => 
            array (
                'id' => 853,
                'document_id' => 396,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:06:28',
                'updated_at' => '2022-12-22 12:06:28',
            ),
            324 => 
            array (
                'id' => 854,
                'document_id' => 397,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:07:29',
                'updated_at' => '2022-12-22 12:07:29',
            ),
            325 => 
            array (
                'id' => 855,
                'document_id' => 398,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:08:05',
                'updated_at' => '2022-12-22 12:08:05',
            ),
            326 => 
            array (
                'id' => 856,
                'document_id' => 399,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:08:57',
                'updated_at' => '2022-12-22 12:08:57',
            ),
            327 => 
            array (
                'id' => 857,
                'document_id' => 400,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:09:36',
                'updated_at' => '2022-12-22 12:09:36',
            ),
            328 => 
            array (
                'id' => 858,
                'document_id' => 401,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:10:17',
                'updated_at' => '2022-12-22 12:10:17',
            ),
            329 => 
            array (
                'id' => 859,
                'document_id' => 402,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:12:54',
                'updated_at' => '2022-12-22 12:12:54',
            ),
            330 => 
            array (
                'id' => 860,
                'document_id' => 403,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:13:40',
                'updated_at' => '2022-12-22 12:13:40',
            ),
            331 => 
            array (
                'id' => 861,
                'document_id' => 404,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:14:22',
                'updated_at' => '2022-12-22 12:14:22',
            ),
            332 => 
            array (
                'id' => 862,
                'document_id' => 405,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:14:55',
                'updated_at' => '2022-12-22 12:14:55',
            ),
            333 => 
            array (
                'id' => 863,
                'document_id' => 406,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:15:20',
                'updated_at' => '2022-12-22 12:15:20',
            ),
            334 => 
            array (
                'id' => 864,
                'document_id' => 407,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:16:45',
                'updated_at' => '2022-12-22 12:16:45',
            ),
            335 => 
            array (
                'id' => 865,
                'document_id' => 373,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 12:17:25',
                'updated_at' => '2022-12-22 12:17:25',
            ),
            336 => 
            array (
                'id' => 866,
                'document_id' => 408,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 13:10:13',
                'updated_at' => '2022-12-22 13:10:13',
            ),
            337 => 
            array (
                'id' => 867,
                'document_id' => 409,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 13:12:39',
                'updated_at' => '2022-12-22 13:12:39',
            ),
            338 => 
            array (
                'id' => 868,
                'document_id' => 410,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 13:13:12',
                'updated_at' => '2022-12-22 13:13:12',
            ),
            339 => 
            array (
                'id' => 869,
                'document_id' => 411,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 13:13:37',
                'updated_at' => '2022-12-22 13:13:37',
            ),
            340 => 
            array (
                'id' => 870,
                'document_id' => 412,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 13:15:27',
                'updated_at' => '2022-12-22 13:15:27',
            ),
            341 => 
            array (
                'id' => 871,
                'document_id' => 413,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 13:15:54',
                'updated_at' => '2022-12-22 13:15:54',
            ),
            342 => 
            array (
                'id' => 872,
                'document_id' => 414,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 13:18:56',
                'updated_at' => '2022-12-22 13:18:56',
            ),
            343 => 
            array (
                'id' => 873,
                'document_id' => 415,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-22 13:23:38',
                'updated_at' => '2022-12-22 13:23:38',
            ),
            344 => 
            array (
                'id' => 874,
                'document_id' => 416,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-22 13:24:24',
                'updated_at' => '2022-12-22 13:24:24',
            ),
            345 => 
            array (
                'id' => 875,
                'document_id' => 417,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-22 13:25:01',
                'updated_at' => '2022-12-22 13:25:01',
            ),
            346 => 
            array (
                'id' => 876,
                'document_id' => 418,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-22 13:25:45',
                'updated_at' => '2022-12-22 13:25:45',
            ),
            347 => 
            array (
                'id' => 877,
                'document_id' => 419,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-22 13:26:51',
                'updated_at' => '2022-12-22 13:26:51',
            ),
            348 => 
            array (
                'id' => 878,
                'document_id' => 375,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 13:39:54',
                'updated_at' => '2022-12-22 13:39:54',
            ),
            349 => 
            array (
                'id' => 879,
                'document_id' => 376,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 13:41:44',
                'updated_at' => '2022-12-22 13:41:44',
            ),
            350 => 
            array (
                'id' => 880,
                'document_id' => 378,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 13:42:59',
                'updated_at' => '2022-12-22 13:42:59',
            ),
            351 => 
            array (
                'id' => 881,
                'document_id' => 379,
                'user_id' => 1,
                'remarks' => 'other documents no signature of mabel',
                'created_at' => '2022-12-22 13:46:22',
                'updated_at' => '2022-12-22 13:46:22',
            ),
            352 => 
            array (
                'id' => 882,
                'document_id' => 380,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 13:47:48',
                'updated_at' => '2022-12-22 13:47:48',
            ),
            353 => 
            array (
                'id' => 883,
                'document_id' => 227,
                'user_id' => 5,
                'remarks' => NULL,
                'created_at' => '2022-12-22 13:53:39',
                'updated_at' => '2022-12-22 13:53:39',
            ),
            354 => 
            array (
                'id' => 884,
                'document_id' => 147,
                'user_id' => 5,
                'remarks' => NULL,
                'created_at' => '2022-12-22 13:54:30',
                'updated_at' => '2022-12-22 13:54:30',
            ),
            355 => 
            array (
                'id' => 885,
                'document_id' => 148,
                'user_id' => 5,
                'remarks' => NULL,
                'created_at' => '2022-12-22 13:55:56',
                'updated_at' => '2022-12-22 13:55:56',
            ),
            356 => 
            array (
                'id' => 886,
                'document_id' => 420,
                'user_id' => 8,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-22 13:56:35',
                'updated_at' => '2022-12-22 13:56:35',
            ),
            357 => 
            array (
                'id' => 887,
                'document_id' => 147,
                'user_id' => 11,
                'remarks' => 'Action Taken. Memorandum ROD 6 U-352 s. 2022. 
Thank you Ma\'am.',
                'created_at' => '2022-12-22 14:02:36',
                'updated_at' => '2022-12-22 14:02:36',
            ),
            358 => 
            array (
                'id' => 888,
                'document_id' => 94,
                'user_id' => 8,
                'remarks' => 'Mam,

For initial.',
                'created_at' => '2022-12-22 15:11:41',
                'updated_at' => '2022-12-22 15:11:41',
            ),
            359 => 
            array (
                'id' => 889,
                'document_id' => 95,
                'user_id' => 8,
                'remarks' => 'Nin,

Forward to Negros PO.Thanx',
                'created_at' => '2022-12-22 15:13:34',
                'updated_at' => '2022-12-22 15:13:34',
            ),
            360 => 
            array (
                'id' => 890,
                'document_id' => 142,
                'user_id' => 8,
                'remarks' => 'Mam,,

For approval.

Thank you',
                'created_at' => '2022-12-22 15:19:07',
                'updated_at' => '2022-12-22 15:19:07',
            ),
            361 => 
            array (
                'id' => 891,
                'document_id' => 148,
                'user_id' => 11,
                'remarks' => 'Action taken per Memo ROD 6 U-340-A s.2022',
                'created_at' => '2022-12-23 08:29:52',
                'updated_at' => '2022-12-23 08:29:52',
            ),
            362 => 
            array (
                'id' => 892,
                'document_id' => 421,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 09:25:46',
                'updated_at' => '2022-12-23 09:25:46',
            ),
            363 => 
            array (
                'id' => 893,
                'document_id' => 422,
                'user_id' => 8,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 09:47:06',
                'updated_at' => '2022-12-23 09:47:06',
            ),
            364 => 
            array (
                'id' => 894,
                'document_id' => 421,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-23 09:56:40',
                'updated_at' => '2022-12-23 09:56:40',
            ),
            365 => 
            array (
                'id' => 895,
                'document_id' => 276,
                'user_id' => 8,
                'remarks' => NULL,
                'created_at' => '2022-12-23 11:01:27',
                'updated_at' => '2022-12-23 11:01:27',
            ),
            366 => 
            array (
                'id' => 896,
                'document_id' => 274,
                'user_id' => 8,
                'remarks' => NULL,
                'created_at' => '2022-12-23 11:07:00',
                'updated_at' => '2022-12-23 11:07:00',
            ),
            367 => 
            array (
                'id' => 897,
                'document_id' => 422,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-23 11:08:32',
                'updated_at' => '2022-12-23 11:08:32',
            ),
            368 => 
            array (
                'id' => 898,
                'document_id' => 420,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-23 11:09:57',
                'updated_at' => '2022-12-23 11:09:57',
            ),
            369 => 
            array (
                'id' => 899,
                'document_id' => 154,
                'user_id' => 8,
                'remarks' => 'Cover Memo and endorse to Passi Trade School.

Thank You',
                'created_at' => '2022-12-23 11:11:19',
                'updated_at' => '2022-12-23 11:11:19',
            ),
            370 => 
            array (
                'id' => 900,
                'document_id' => 148,
                'user_id' => 3,
                'remarks' => 'Acted already sir.',
                'created_at' => '2022-12-23 11:18:06',
                'updated_at' => '2022-12-23 11:18:06',
            ),
            371 => 
            array (
                'id' => 901,
                'document_id' => 94,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-23 11:19:04',
                'updated_at' => '2022-12-23 11:19:04',
            ),
            372 => 
            array (
                'id' => 902,
                'document_id' => 423,
                'user_id' => 6,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 11:23:01',
                'updated_at' => '2022-12-23 11:23:01',
            ),
            373 => 
            array (
                'id' => 903,
                'document_id' => 371,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-23 11:29:24',
                'updated_at' => '2022-12-23 11:29:24',
            ),
            374 => 
            array (
                'id' => 904,
                'document_id' => 165,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 11:32:08',
                'updated_at' => '2022-12-23 11:32:08',
            ),
            375 => 
            array (
                'id' => 905,
                'document_id' => 164,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 11:33:50',
                'updated_at' => '2022-12-23 11:33:50',
            ),
            376 => 
            array (
                'id' => 906,
                'document_id' => 160,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 11:35:23',
                'updated_at' => '2022-12-23 11:35:23',
            ),
            377 => 
            array (
                'id' => 907,
                'document_id' => 367,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 11:37:52',
                'updated_at' => '2022-12-23 11:37:52',
            ),
            378 => 
            array (
                'id' => 908,
                'document_id' => 424,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 11:38:02',
                'updated_at' => '2022-12-23 11:38:02',
            ),
            379 => 
            array (
                'id' => 909,
                'document_id' => 368,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 11:40:31',
                'updated_at' => '2022-12-23 11:40:31',
            ),
            380 => 
            array (
                'id' => 910,
                'document_id' => 425,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 11:43:09',
                'updated_at' => '2022-12-23 11:43:09',
            ),
            381 => 
            array (
                'id' => 911,
                'document_id' => 159,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 11:43:59',
                'updated_at' => '2022-12-23 11:43:59',
            ),
            382 => 
            array (
                'id' => 912,
                'document_id' => 130,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 11:45:48',
                'updated_at' => '2022-12-23 11:45:48',
            ),
            383 => 
            array (
                'id' => 913,
                'document_id' => 426,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 11:46:05',
                'updated_at' => '2022-12-23 11:46:05',
            ),
            384 => 
            array (
                'id' => 914,
                'document_id' => 427,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 11:47:04',
                'updated_at' => '2022-12-23 11:47:04',
            ),
            385 => 
            array (
                'id' => 915,
                'document_id' => 129,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 11:48:45',
                'updated_at' => '2022-12-23 11:48:45',
            ),
            386 => 
            array (
                'id' => 916,
                'document_id' => 428,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 11:49:22',
                'updated_at' => '2022-12-23 11:49:22',
            ),
            387 => 
            array (
                'id' => 917,
                'document_id' => 424,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 11:51:04',
                'updated_at' => '2022-12-23 11:51:04',
            ),
            388 => 
            array (
                'id' => 918,
                'document_id' => 429,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 11:51:34',
                'updated_at' => '2022-12-23 11:51:34',
            ),
            389 => 
            array (
                'id' => 919,
                'document_id' => 201,
                'user_id' => 39,
                'remarks' => NULL,
                'created_at' => '2022-12-23 11:51:43',
                'updated_at' => '2022-12-23 11:51:43',
            ),
            390 => 
            array (
                'id' => 920,
                'document_id' => 127,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 11:55:21',
                'updated_at' => '2022-12-23 11:55:21',
            ),
            391 => 
            array (
                'id' => 921,
                'document_id' => 317,
                'user_id' => 39,
                'remarks' => NULL,
                'created_at' => '2022-12-23 11:58:24',
                'updated_at' => '2022-12-23 11:58:24',
            ),
            392 => 
            array (
                'id' => 922,
                'document_id' => 423,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-23 12:08:36',
                'updated_at' => '2022-12-23 12:08:36',
            ),
            393 => 
            array (
                'id' => 923,
                'document_id' => 340,
                'user_id' => 26,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 12:38:28',
                'updated_at' => '2022-12-23 12:38:28',
            ),
            394 => 
            array (
                'id' => 924,
                'document_id' => 355,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-23 12:41:03',
                'updated_at' => '2022-12-23 12:41:03',
            ),
            395 => 
            array (
                'id' => 925,
                'document_id' => 356,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-23 12:42:47',
                'updated_at' => '2022-12-23 12:42:47',
            ),
            396 => 
            array (
                'id' => 926,
                'document_id' => 357,
                'user_id' => 26,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 12:44:11',
                'updated_at' => '2022-12-23 12:44:11',
            ),
            397 => 
            array (
                'id' => 927,
                'document_id' => 369,
                'user_id' => 39,
                'remarks' => NULL,
                'created_at' => '2022-12-23 12:46:37',
                'updated_at' => '2022-12-23 12:46:37',
            ),
            398 => 
            array (
                'id' => 928,
                'document_id' => 358,
                'user_id' => 26,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 12:53:47',
                'updated_at' => '2022-12-23 12:53:47',
            ),
            399 => 
            array (
                'id' => 929,
                'document_id' => 361,
                'user_id' => 26,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 13:01:25',
                'updated_at' => '2022-12-23 13:01:25',
            ),
            400 => 
            array (
                'id' => 930,
                'document_id' => 362,
                'user_id' => 26,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 13:05:37',
                'updated_at' => '2022-12-23 13:05:37',
            ),
            401 => 
            array (
                'id' => 931,
                'document_id' => 310,
                'user_id' => 26,
                'remarks' => 'Jen, pls forward to Mee sheil for processing of payments. TY',
                'created_at' => '2022-12-23 13:07:02',
                'updated_at' => '2022-12-23 13:07:02',
            ),
            402 => 
            array (
                'id' => 932,
                'document_id' => 311,
                'user_id' => 26,
                'remarks' => 'Jen pls forward to Mee sheil for processing of payments. TY',
                'created_at' => '2022-12-23 13:08:11',
                'updated_at' => '2022-12-23 13:08:11',
            ),
            403 => 
            array (
                'id' => 933,
                'document_id' => 154,
                'user_id' => 10,
                'remarks' => 'mAM,

For your initial.

Thank you.',
                'created_at' => '2022-12-23 13:10:58',
                'updated_at' => '2022-12-23 13:10:58',
            ),
            404 => 
            array (
                'id' => 934,
                'document_id' => 430,
                'user_id' => 5,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 13:11:36',
                'updated_at' => '2022-12-23 13:11:36',
            ),
            405 => 
            array (
                'id' => 936,
                'document_id' => 319,
                'user_id' => 26,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 13:16:25',
                'updated_at' => '2022-12-23 13:16:25',
            ),
            406 => 
            array (
                'id' => 937,
                'document_id' => 154,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-23 13:17:02',
                'updated_at' => '2022-12-23 13:17:02',
            ),
            407 => 
            array (
                'id' => 938,
                'document_id' => 321,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-23 13:17:20',
                'updated_at' => '2022-12-23 13:17:20',
            ),
            408 => 
            array (
                'id' => 939,
                'document_id' => 430,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-23 13:18:17',
                'updated_at' => '2022-12-23 13:18:17',
            ),
            409 => 
            array (
                'id' => 941,
                'document_id' => 431,
                'user_id' => 10,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 13:32:36',
                'updated_at' => '2022-12-23 13:32:36',
            ),
            410 => 
            array (
                'id' => 943,
                'document_id' => 431,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-23 13:35:45',
                'updated_at' => '2022-12-23 13:35:45',
            ),
            411 => 
            array (
                'id' => 944,
                'document_id' => 432,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 13:41:23',
                'updated_at' => '2022-12-23 13:41:23',
            ),
            412 => 
            array (
                'id' => 945,
                'document_id' => 433,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 13:43:11',
                'updated_at' => '2022-12-23 13:43:11',
            ),
            413 => 
            array (
                'id' => 946,
                'document_id' => 434,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 13:43:50',
                'updated_at' => '2022-12-23 13:43:50',
            ),
            414 => 
            array (
                'id' => 947,
                'document_id' => 435,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 13:45:31',
                'updated_at' => '2022-12-23 13:45:31',
            ),
            415 => 
            array (
                'id' => 948,
                'document_id' => 436,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 13:45:49',
                'updated_at' => '2022-12-23 13:45:49',
            ),
            416 => 
            array (
                'id' => 949,
                'document_id' => 125,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 13:46:56',
                'updated_at' => '2022-12-23 13:46:56',
            ),
            417 => 
            array (
                'id' => 950,
                'document_id' => 437,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 13:47:13',
                'updated_at' => '2022-12-23 13:47:13',
            ),
            418 => 
            array (
                'id' => 951,
                'document_id' => 438,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 13:47:55',
                'updated_at' => '2022-12-23 13:47:55',
            ),
            419 => 
            array (
                'id' => 952,
                'document_id' => 436,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-23 13:48:03',
                'updated_at' => '2022-12-23 13:48:03',
            ),
            420 => 
            array (
                'id' => 953,
                'document_id' => 439,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 13:48:45',
                'updated_at' => '2022-12-23 13:48:45',
            ),
            421 => 
            array (
                'id' => 954,
                'document_id' => 437,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-23 13:48:45',
                'updated_at' => '2022-12-23 13:48:45',
            ),
            422 => 
            array (
                'id' => 955,
                'document_id' => 439,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-23 13:49:35',
                'updated_at' => '2022-12-23 13:49:35',
            ),
            423 => 
            array (
                'id' => 956,
                'document_id' => 124,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 13:49:47',
                'updated_at' => '2022-12-23 13:49:47',
            ),
            424 => 
            array (
                'id' => 957,
                'document_id' => 371,
                'user_id' => 4,
                'remarks' => 'List of beneficiaries - NOPO',
                'created_at' => '2022-12-23 13:50:27',
                'updated_at' => '2022-12-23 13:50:27',
            ),
            425 => 
            array (
                'id' => 958,
                'document_id' => 433,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-23 13:50:43',
                'updated_at' => '2022-12-23 13:50:43',
            ),
            426 => 
            array (
                'id' => 959,
                'document_id' => 353,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-23 13:51:57',
                'updated_at' => '2022-12-23 13:51:57',
            ),
            427 => 
            array (
                'id' => 960,
                'document_id' => 123,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 13:53:14',
                'updated_at' => '2022-12-23 13:53:14',
            ),
            428 => 
            array (
                'id' => 961,
                'document_id' => 122,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 13:54:13',
                'updated_at' => '2022-12-23 13:54:13',
            ),
            429 => 
            array (
                'id' => 962,
                'document_id' => 121,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 13:55:54',
                'updated_at' => '2022-12-23 13:55:54',
            ),
            430 => 
            array (
                'id' => 963,
                'document_id' => 120,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 13:56:45',
                'updated_at' => '2022-12-23 13:56:45',
            ),
            431 => 
            array (
                'id' => 964,
                'document_id' => 119,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 13:57:44',
                'updated_at' => '2022-12-23 13:57:44',
            ),
            432 => 
            array (
                'id' => 965,
                'document_id' => 118,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 13:58:37',
                'updated_at' => '2022-12-23 13:58:37',
            ),
            433 => 
            array (
                'id' => 966,
                'document_id' => 117,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 13:59:40',
                'updated_at' => '2022-12-23 13:59:40',
            ),
            434 => 
            array (
                'id' => 967,
                'document_id' => 116,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:00:26',
                'updated_at' => '2022-12-23 14:00:26',
            ),
            435 => 
            array (
                'id' => 968,
                'document_id' => 115,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:01:28',
                'updated_at' => '2022-12-23 14:01:28',
            ),
            436 => 
            array (
                'id' => 969,
                'document_id' => 114,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:02:23',
                'updated_at' => '2022-12-23 14:02:23',
            ),
            437 => 
            array (
                'id' => 970,
                'document_id' => 113,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:03:13',
                'updated_at' => '2022-12-23 14:03:13',
            ),
            438 => 
            array (
                'id' => 971,
                'document_id' => 112,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:04:02',
                'updated_at' => '2022-12-23 14:04:02',
            ),
            439 => 
            array (
                'id' => 972,
                'document_id' => 111,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:04:43',
                'updated_at' => '2022-12-23 14:04:43',
            ),
            440 => 
            array (
                'id' => 973,
                'document_id' => 110,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:05:35',
                'updated_at' => '2022-12-23 14:05:35',
            ),
            441 => 
            array (
                'id' => 974,
                'document_id' => 109,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:06:19',
                'updated_at' => '2022-12-23 14:06:19',
            ),
            442 => 
            array (
                'id' => 975,
                'document_id' => 108,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:07:04',
                'updated_at' => '2022-12-23 14:07:04',
            ),
            443 => 
            array (
                'id' => 976,
                'document_id' => 216,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:08:02',
                'updated_at' => '2022-12-23 14:08:02',
            ),
            444 => 
            array (
                'id' => 977,
                'document_id' => 200,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:08:54',
                'updated_at' => '2022-12-23 14:08:54',
            ),
            445 => 
            array (
                'id' => 978,
                'document_id' => 199,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:10:45',
                'updated_at' => '2022-12-23 14:10:45',
            ),
            446 => 
            array (
                'id' => 979,
                'document_id' => 198,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:12:18',
                'updated_at' => '2022-12-23 14:12:18',
            ),
            447 => 
            array (
                'id' => 980,
                'document_id' => 197,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:13:01',
                'updated_at' => '2022-12-23 14:13:01',
            ),
            448 => 
            array (
                'id' => 981,
                'document_id' => 196,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:16:27',
                'updated_at' => '2022-12-23 14:16:27',
            ),
            449 => 
            array (
                'id' => 982,
                'document_id' => 195,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:17:13',
                'updated_at' => '2022-12-23 14:17:13',
            ),
            450 => 
            array (
                'id' => 983,
                'document_id' => 194,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:17:48',
                'updated_at' => '2022-12-23 14:17:48',
            ),
            451 => 
            array (
                'id' => 984,
                'document_id' => 193,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:18:25',
                'updated_at' => '2022-12-23 14:18:25',
            ),
            452 => 
            array (
                'id' => 985,
                'document_id' => 192,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:19:11',
                'updated_at' => '2022-12-23 14:19:11',
            ),
            453 => 
            array (
                'id' => 986,
                'document_id' => 191,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:19:52',
                'updated_at' => '2022-12-23 14:19:52',
            ),
            454 => 
            array (
                'id' => 987,
                'document_id' => 190,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:20:51',
                'updated_at' => '2022-12-23 14:20:51',
            ),
            455 => 
            array (
                'id' => 988,
                'document_id' => 188,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:21:29',
                'updated_at' => '2022-12-23 14:21:29',
            ),
            456 => 
            array (
                'id' => 989,
                'document_id' => 180,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:22:53',
                'updated_at' => '2022-12-23 14:22:53',
            ),
            457 => 
            array (
                'id' => 990,
                'document_id' => 366,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:24:06',
                'updated_at' => '2022-12-23 14:24:06',
            ),
            458 => 
            array (
                'id' => 991,
                'document_id' => 371,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-23 14:24:48',
                'updated_at' => '2022-12-23 14:24:48',
            ),
            459 => 
            array (
                'id' => 992,
                'document_id' => 365,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:24:56',
                'updated_at' => '2022-12-23 14:24:56',
            ),
            460 => 
            array (
                'id' => 993,
                'document_id' => 364,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:25:43',
                'updated_at' => '2022-12-23 14:25:43',
            ),
            461 => 
            array (
                'id' => 994,
                'document_id' => 363,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:26:22',
                'updated_at' => '2022-12-23 14:26:22',
            ),
            462 => 
            array (
                'id' => 995,
                'document_id' => 360,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:26:59',
                'updated_at' => '2022-12-23 14:26:59',
            ),
            463 => 
            array (
                'id' => 996,
                'document_id' => 344,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:29:07',
                'updated_at' => '2022-12-23 14:29:07',
            ),
            464 => 
            array (
                'id' => 997,
                'document_id' => 371,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:29:55',
                'updated_at' => '2022-12-23 14:29:55',
            ),
            465 => 
            array (
                'id' => 998,
                'document_id' => 333,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:33:20',
                'updated_at' => '2022-12-23 14:33:20',
            ),
            466 => 
            array (
                'id' => 999,
                'document_id' => 332,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:35:15',
                'updated_at' => '2022-12-23 14:35:15',
            ),
            467 => 
            array (
                'id' => 1000,
                'document_id' => 435,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:35:57',
                'updated_at' => '2022-12-23 14:35:57',
            ),
            468 => 
            array (
                'id' => 1001,
                'document_id' => 434,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:36:34',
                'updated_at' => '2022-12-23 14:36:34',
            ),
            469 => 
            array (
                'id' => 1002,
                'document_id' => 432,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:37:19',
                'updated_at' => '2022-12-23 14:37:19',
            ),
            470 => 
            array (
                'id' => 1003,
                'document_id' => 429,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:37:57',
                'updated_at' => '2022-12-23 14:37:57',
            ),
            471 => 
            array (
                'id' => 1004,
                'document_id' => 428,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:39:12',
                'updated_at' => '2022-12-23 14:39:12',
            ),
            472 => 
            array (
                'id' => 1005,
                'document_id' => 427,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:39:46',
                'updated_at' => '2022-12-23 14:39:46',
            ),
            473 => 
            array (
                'id' => 1006,
                'document_id' => 426,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:40:28',
                'updated_at' => '2022-12-23 14:40:28',
            ),
            474 => 
            array (
                'id' => 1007,
                'document_id' => 425,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:41:12',
                'updated_at' => '2022-12-23 14:41:12',
            ),
            475 => 
            array (
                'id' => 1008,
                'document_id' => 203,
                'user_id' => 38,
                'remarks' => 'Returned',
                'created_at' => '2022-12-23 14:46:00',
                'updated_at' => '2022-12-23 14:46:00',
            ),
            476 => 
            array (
                'id' => 1009,
                'document_id' => 440,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 15:32:35',
                'updated_at' => '2022-12-23 15:32:35',
            ),
            477 => 
            array (
                'id' => 1010,
                'document_id' => 441,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 15:34:16',
                'updated_at' => '2022-12-23 15:34:16',
            ),
            478 => 
            array (
                'id' => 1011,
                'document_id' => 442,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 15:35:52',
                'updated_at' => '2022-12-23 15:35:52',
            ),
            479 => 
            array (
                'id' => 1012,
                'document_id' => 443,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 15:37:02',
                'updated_at' => '2022-12-23 15:37:02',
            ),
            480 => 
            array (
                'id' => 1013,
                'document_id' => 444,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 15:38:17',
                'updated_at' => '2022-12-23 15:38:17',
            ),
            481 => 
            array (
                'id' => 1014,
                'document_id' => 445,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 15:51:15',
                'updated_at' => '2022-12-23 15:51:15',
            ),
            482 => 
            array (
                'id' => 1015,
                'document_id' => 421,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-25 18:35:14',
                'updated_at' => '2022-12-25 18:35:14',
            ),
            483 => 
            array (
                'id' => 1016,
                'document_id' => 433,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-25 18:40:08',
                'updated_at' => '2022-12-25 18:40:08',
            ),
            484 => 
            array (
                'id' => 1017,
                'document_id' => 436,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-25 18:42:12',
                'updated_at' => '2022-12-25 18:42:12',
            ),
            485 => 
            array (
                'id' => 1018,
                'document_id' => 437,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-25 18:44:25',
                'updated_at' => '2022-12-25 18:44:25',
            ),
            486 => 
            array (
                'id' => 1019,
                'document_id' => 354,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-25 18:49:43',
                'updated_at' => '2022-12-25 18:49:43',
            ),
            487 => 
            array (
                'id' => 1020,
                'document_id' => 439,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-25 18:51:16',
                'updated_at' => '2022-12-25 18:51:16',
            ),
            488 => 
            array (
                'id' => 1021,
                'document_id' => 383,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-25 18:53:21',
                'updated_at' => '2022-12-25 18:53:21',
            ),
            489 => 
            array (
                'id' => 1022,
                'document_id' => 386,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-25 18:55:04',
                'updated_at' => '2022-12-25 18:55:04',
            ),
            490 => 
            array (
                'id' => 1023,
                'document_id' => 387,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-25 18:56:48',
                'updated_at' => '2022-12-25 18:56:48',
            ),
            491 => 
            array (
                'id' => 1024,
                'document_id' => 388,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-25 18:58:22',
                'updated_at' => '2022-12-25 18:58:22',
            ),
            492 => 
            array (
                'id' => 1025,
                'document_id' => 389,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-25 18:59:54',
                'updated_at' => '2022-12-25 18:59:54',
            ),
            493 => 
            array (
                'id' => 1026,
                'document_id' => 391,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-25 19:02:02',
                'updated_at' => '2022-12-25 19:02:02',
            ),
            494 => 
            array (
                'id' => 1027,
                'document_id' => 392,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-25 19:04:29',
                'updated_at' => '2022-12-25 19:04:29',
            ),
        ));
        
        
    }
}