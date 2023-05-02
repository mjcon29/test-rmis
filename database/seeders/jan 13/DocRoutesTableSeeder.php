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
                'id' => 114,
                'document_id' => 4,
                'user_id' => 8,
                'remarks' => NULL,
                'created_at' => '2022-12-15 15:54:05',
                'updated_at' => '2022-12-15 15:54:05',
            ),
            111 => 
            array (
                'id' => 115,
                'document_id' => 55,
                'user_id' => 8,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-15 15:54:56',
                'updated_at' => '2022-12-15 15:54:56',
            ),
            112 => 
            array (
                'id' => 116,
                'document_id' => 56,
                'user_id' => 5,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-15 15:55:35',
                'updated_at' => '2022-12-15 15:55:35',
            ),
            113 => 
            array (
                'id' => 118,
                'document_id' => 57,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 16:00:34',
                'updated_at' => '2022-12-15 16:00:34',
            ),
            114 => 
            array (
                'id' => 119,
                'document_id' => 58,
                'user_id' => 8,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-15 16:21:46',
                'updated_at' => '2022-12-15 16:21:46',
            ),
            115 => 
            array (
                'id' => 120,
                'document_id' => 59,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 16:38:26',
                'updated_at' => '2022-12-15 16:38:26',
            ),
            116 => 
            array (
                'id' => 121,
                'document_id' => 60,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 16:39:11',
                'updated_at' => '2022-12-15 16:39:11',
            ),
            117 => 
            array (
                'id' => 122,
                'document_id' => 61,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-15 16:39:33',
                'updated_at' => '2022-12-15 16:39:33',
            ),
            118 => 
            array (
                'id' => 123,
                'document_id' => 62,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 16:40:00',
                'updated_at' => '2022-12-15 16:40:00',
            ),
            119 => 
            array (
                'id' => 124,
                'document_id' => 63,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 17:00:16',
                'updated_at' => '2022-12-15 17:00:16',
            ),
            120 => 
            array (
                'id' => 125,
                'document_id' => 21,
                'user_id' => 8,
                'remarks' => NULL,
                'created_at' => '2022-12-15 17:03:08',
                'updated_at' => '2022-12-15 17:03:08',
            ),
            121 => 
            array (
                'id' => 126,
                'document_id' => 57,
                'user_id' => 1,
                'remarks' => 'Certificate for RPIIT signed',
                'created_at' => '2022-12-15 17:03:21',
                'updated_at' => '2022-12-15 17:03:21',
            ),
            122 => 
            array (
                'id' => 127,
                'document_id' => 21,
                'user_id' => 8,
                'remarks' => 'Ma\'am for your Initial.',
                'created_at' => '2022-12-15 17:04:36',
                'updated_at' => '2022-12-15 17:04:36',
            ),
            123 => 
            array (
                'id' => 129,
                'document_id' => 64,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 17:09:02',
                'updated_at' => '2022-12-15 17:09:02',
            ),
            124 => 
            array (
                'id' => 130,
                'document_id' => 65,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 17:10:48',
                'updated_at' => '2022-12-15 17:10:48',
            ),
            125 => 
            array (
                'id' => 131,
                'document_id' => 28,
                'user_id' => 1,
                'remarks' => 'Why this document now only?
is this still allowed?',
                'created_at' => '2022-12-15 17:11:04',
                'updated_at' => '2022-12-15 17:11:04',
            ),
            126 => 
            array (
                'id' => 132,
                'document_id' => 66,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 17:17:31',
                'updated_at' => '2022-12-15 17:17:31',
            ),
            127 => 
            array (
                'id' => 133,
                'document_id' => 67,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-15 17:20:02',
                'updated_at' => '2022-12-15 17:20:02',
            ),
            128 => 
            array (
                'id' => 134,
                'document_id' => 57,
                'user_id' => 4,
                'remarks' => 'Downloaded..',
                'created_at' => '2022-12-15 17:56:46',
                'updated_at' => '2022-12-15 17:56:46',
            ),
            129 => 
            array (
                'id' => 135,
                'document_id' => 56,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-15 17:56:46',
                'updated_at' => '2022-12-15 17:56:46',
            ),
            130 => 
            array (
                'id' => 136,
                'document_id' => 19,
                'user_id' => 8,
                'remarks' => 'Action already take.',
                'created_at' => '2022-12-15 18:01:24',
                'updated_at' => '2022-12-15 18:01:24',
            ),
            131 => 
            array (
                'id' => 137,
                'document_id' => 68,
                'user_id' => 4,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-15 18:02:39',
                'updated_at' => '2022-12-15 18:02:39',
            ),
            132 => 
            array (
                'id' => 138,
                'document_id' => 28,
                'user_id' => 3,
                'remarks' => 'Sir, this was acted already  per  ROD 6 U-347 s. 2022, dated December 14, 2022. FYI po.',
                'created_at' => '2022-12-15 18:03:28',
                'updated_at' => '2022-12-15 18:03:28',
            ),
            133 => 
            array (
                'id' => 139,
                'document_id' => 19,
                'user_id' => 3,
                'remarks' => 'Email to Region XI',
                'created_at' => '2022-12-15 18:08:54',
                'updated_at' => '2022-12-15 18:08:54',
            ),
            134 => 
            array (
                'id' => 140,
                'document_id' => 68,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-15 18:11:53',
                'updated_at' => '2022-12-15 18:11:53',
            ),
            135 => 
            array (
                'id' => 141,
                'document_id' => 4,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-15 18:13:21',
                'updated_at' => '2022-12-15 18:13:21',
            ),
            136 => 
            array (
                'id' => 142,
                'document_id' => 28,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 06:25:30',
                'updated_at' => '2022-12-16 06:25:30',
            ),
            137 => 
            array (
                'id' => 143,
                'document_id' => 35,
                'user_id' => 1,
                'remarks' => 'Disseminate and ensure compliance',
                'created_at' => '2022-12-16 06:28:16',
                'updated_at' => '2022-12-16 06:28:16',
            ),
            138 => 
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
            139 => 
            array (
                'id' => 145,
                'document_id' => 32,
                'user_id' => 1,
                'remarks' => 'coordinate with proponent',
                'created_at' => '2022-12-16 06:33:22',
                'updated_at' => '2022-12-16 06:33:22',
            ),
            140 => 
            array (
                'id' => 146,
                'document_id' => 33,
                'user_id' => 1,
                'remarks' => 'furnished copy PTC Capiz',
                'created_at' => '2022-12-16 06:45:00',
                'updated_at' => '2022-12-16 06:45:00',
            ),
            141 => 
            array (
                'id' => 147,
                'document_id' => 34,
                'user_id' => 1,
                'remarks' => 'Issue Memo reminding her that we are not in a business of jokes here, as an officer they are expected to behave accordingly, a repetition of the same shall be dealt with more severely and that this serve as a stern warning.',
                'created_at' => '2022-12-16 06:51:44',
                'updated_at' => '2022-12-16 06:51:44',
            ),
            142 => 
            array (
                'id' => 148,
                'document_id' => 36,
                'user_id' => 1,
                'remarks' => 'cel kindly sign the other documents before i affixed my signature since after i sign the same, i will route it to releasing unit and marked it signed',
                'created_at' => '2022-12-16 06:54:24',
                'updated_at' => '2022-12-16 06:54:24',
            ),
            143 => 
            array (
                'id' => 149,
                'document_id' => 37,
                'user_id' => 1,
                'remarks' => 'all schedules are approved except Dec. 23',
                'created_at' => '2022-12-16 07:07:58',
                'updated_at' => '2022-12-16 07:07:58',
            ),
            144 => 
            array (
                'id' => 150,
                'document_id' => 31,
                'user_id' => 1,
                'remarks' => 'see me 8am, let\'s discuss this

mae, calendar this and produce copy',
                'created_at' => '2022-12-16 07:31:16',
                'updated_at' => '2022-12-16 07:31:16',
            ),
            145 => 
            array (
                'id' => 151,
                'document_id' => 36,
                'user_id' => 3,
                'remarks' => 'Noted sir. The List is signed already sir.  Thank you.',
                'created_at' => '2022-12-16 08:23:53',
                'updated_at' => '2022-12-16 08:23:53',
            ),
            146 => 
            array (
                'id' => 152,
                'document_id' => 17,
                'user_id' => 1,
                'remarks' => 'Disseminate after correction of the program details',
                'created_at' => '2022-12-16 08:25:15',
                'updated_at' => '2022-12-16 08:25:15',
            ),
            147 => 
            array (
                'id' => 153,
                'document_id' => 36,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 08:27:12',
                'updated_at' => '2022-12-16 08:27:12',
            ),
            148 => 
            array (
                'id' => 154,
                'document_id' => 38,
                'user_id' => 1,
                'remarks' => 'Endorse to CO',
                'created_at' => '2022-12-16 08:29:25',
                'updated_at' => '2022-12-16 08:29:25',
            ),
            149 => 
            array (
                'id' => 155,
                'document_id' => 39,
                'user_id' => 1,
                'remarks' => 'what happen? i thought i have instructed you on this',
                'created_at' => '2022-12-16 08:39:05',
                'updated_at' => '2022-12-16 08:39:05',
            ),
            150 => 
            array (
                'id' => 156,
                'document_id' => 40,
                'user_id' => 1,
                'remarks' => 'refer this IPO',
                'created_at' => '2022-12-16 08:41:52',
                'updated_at' => '2022-12-16 08:41:52',
            ),
            151 => 
            array (
                'id' => 157,
                'document_id' => 37,
                'user_id' => 8,
                'remarks' => 'FOR INITIAL',
                'created_at' => '2022-12-16 08:57:37',
                'updated_at' => '2022-12-16 08:57:37',
            ),
            152 => 
            array (
                'id' => 158,
                'document_id' => 18,
                'user_id' => 8,
                'remarks' => 'For your initial Ma\'am',
                'created_at' => '2022-12-16 09:00:30',
                'updated_at' => '2022-12-16 09:00:30',
            ),
            153 => 
            array (
                'id' => 159,
                'document_id' => 41,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 09:06:12',
                'updated_at' => '2022-12-16 09:06:12',
            ),
            154 => 
            array (
                'id' => 160,
                'document_id' => 5,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 09:14:08',
                'updated_at' => '2022-12-16 09:14:08',
            ),
            155 => 
            array (
                'id' => 161,
                'document_id' => 49,
                'user_id' => 1,
                'remarks' => 'Disseminate as soon as program details is corrected as discussed with Cecil',
                'created_at' => '2022-12-16 09:18:09',
                'updated_at' => '2022-12-16 09:18:09',
            ),
            156 => 
            array (
                'id' => 162,
                'document_id' => 69,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 10:30:17',
                'updated_at' => '2022-12-16 10:30:17',
            ),
            157 => 
            array (
                'id' => 163,
                'document_id' => 70,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-16 10:54:38',
                'updated_at' => '2022-12-16 10:54:38',
            ),
            158 => 
            array (
                'id' => 164,
                'document_id' => 71,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-16 11:11:41',
                'updated_at' => '2022-12-16 11:11:41',
            ),
            159 => 
            array (
                'id' => 165,
                'document_id' => 72,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-16 11:13:53',
                'updated_at' => '2022-12-16 11:13:53',
            ),
            160 => 
            array (
                'id' => 166,
                'document_id' => 73,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-16 11:16:46',
                'updated_at' => '2022-12-16 11:16:46',
            ),
            161 => 
            array (
                'id' => 167,
                'document_id' => 74,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-16 11:18:49',
                'updated_at' => '2022-12-16 11:18:49',
            ),
            162 => 
            array (
                'id' => 168,
                'document_id' => 75,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 11:21:01',
                'updated_at' => '2022-12-16 11:21:01',
            ),
            163 => 
            array (
                'id' => 169,
                'document_id' => 74,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-16 11:59:49',
                'updated_at' => '2022-12-16 11:59:49',
            ),
            164 => 
            array (
                'id' => 170,
                'document_id' => 73,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-16 12:00:16',
                'updated_at' => '2022-12-16 12:00:16',
            ),
            165 => 
            array (
                'id' => 171,
                'document_id' => 72,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-16 12:01:05',
                'updated_at' => '2022-12-16 12:01:05',
            ),
            166 => 
            array (
                'id' => 172,
                'document_id' => 71,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-16 12:02:38',
                'updated_at' => '2022-12-16 12:02:38',
            ),
            167 => 
            array (
                'id' => 173,
                'document_id' => 70,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-16 12:03:07',
                'updated_at' => '2022-12-16 12:03:07',
            ),
            168 => 
            array (
                'id' => 174,
                'document_id' => 18,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-16 12:10:46',
                'updated_at' => '2022-12-16 12:10:46',
            ),
            169 => 
            array (
                'id' => 175,
                'document_id' => 35,
                'user_id' => 3,
                'remarks' => 'Notify all Units',
                'created_at' => '2022-12-16 12:12:59',
                'updated_at' => '2022-12-16 12:12:59',
            ),
            170 => 
            array (
                'id' => 176,
                'document_id' => 21,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-16 12:15:49',
                'updated_at' => '2022-12-16 12:15:49',
            ),
            171 => 
            array (
                'id' => 177,
                'document_id' => 55,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-16 12:17:31',
                'updated_at' => '2022-12-16 12:17:31',
            ),
            172 => 
            array (
                'id' => 178,
                'document_id' => 38,
                'user_id' => 3,
                'remarks' => 'Prepare endorsement memo to CO.',
                'created_at' => '2022-12-16 12:26:22',
                'updated_at' => '2022-12-16 12:26:22',
            ),
            173 => 
            array (
                'id' => 179,
                'document_id' => 70,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 12:57:11',
                'updated_at' => '2022-12-16 12:57:11',
            ),
            174 => 
            array (
                'id' => 180,
                'document_id' => 71,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 12:58:00',
                'updated_at' => '2022-12-16 12:58:00',
            ),
            175 => 
            array (
                'id' => 181,
                'document_id' => 72,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 12:59:31',
                'updated_at' => '2022-12-16 12:59:31',
            ),
            176 => 
            array (
                'id' => 182,
                'document_id' => 73,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 13:01:53',
                'updated_at' => '2022-12-16 13:01:53',
            ),
            177 => 
            array (
                'id' => 183,
                'document_id' => 74,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 13:08:12',
                'updated_at' => '2022-12-16 13:08:12',
            ),
            178 => 
            array (
                'id' => 184,
                'document_id' => 75,
                'user_id' => 1,
                'remarks' => 'for comment and recommendation',
                'created_at' => '2022-12-16 13:11:45',
                'updated_at' => '2022-12-16 13:11:45',
            ),
            179 => 
            array (
                'id' => 185,
                'document_id' => 18,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 13:15:01',
                'updated_at' => '2022-12-16 13:15:01',
            ),
            180 => 
            array (
                'id' => 186,
                'document_id' => 21,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 13:17:24',
                'updated_at' => '2022-12-16 13:17:24',
            ),
            181 => 
            array (
                'id' => 187,
                'document_id' => 51,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 13:23:09',
                'updated_at' => '2022-12-16 13:23:09',
            ),
            182 => 
            array (
                'id' => 188,
                'document_id' => 52,
                'user_id' => 1,
                'remarks' => 'Review and appropriate action',
                'created_at' => '2022-12-16 13:25:47',
                'updated_at' => '2022-12-16 13:25:47',
            ),
            183 => 
            array (
                'id' => 189,
                'document_id' => 50,
                'user_id' => 1,
                'remarks' => 'Rephrase
indicate the corrections',
                'created_at' => '2022-12-16 13:34:34',
                'updated_at' => '2022-12-16 13:34:34',
            ),
            184 => 
            array (
                'id' => 190,
                'document_id' => 75,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-16 13:40:46',
                'updated_at' => '2022-12-16 13:40:46',
            ),
            185 => 
            array (
                'id' => 191,
                'document_id' => 40,
                'user_id' => 3,
                'remarks' => 'Prepare endorsement memo to IPO.',
                'created_at' => '2022-12-16 13:45:48',
                'updated_at' => '2022-12-16 13:45:48',
            ),
            186 => 
            array (
                'id' => 192,
                'document_id' => 49,
                'user_id' => 3,
                'remarks' => 'Kindly revise the program.',
                'created_at' => '2022-12-16 13:47:49',
                'updated_at' => '2022-12-16 13:47:49',
            ),
            187 => 
            array (
                'id' => 193,
                'document_id' => 52,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-16 13:48:50',
                'updated_at' => '2022-12-16 13:48:50',
            ),
            188 => 
            array (
                'id' => 194,
                'document_id' => 75,
                'user_id' => 8,
                'remarks' => 'Ma\'am Document was emailed 12/16/2022 c/o Niña',
                'created_at' => '2022-12-16 14:02:27',
                'updated_at' => '2022-12-16 14:02:27',
            ),
            189 => 
            array (
                'id' => 195,
                'document_id' => 75,
                'user_id' => 3,
                'remarks' => 'This is acted already  per ROD6 CAC No. 162. s, 2022.',
                'created_at' => '2022-12-16 14:36:24',
                'updated_at' => '2022-12-16 14:36:24',
            ),
            190 => 
            array (
                'id' => 196,
                'document_id' => 20,
                'user_id' => 8,
                'remarks' => 'Ma\'am for your initial.',
                'created_at' => '2022-12-16 14:45:41',
                'updated_at' => '2022-12-16 14:45:41',
            ),
            191 => 
            array (
                'id' => 197,
                'document_id' => 76,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-16 15:13:59',
                'updated_at' => '2022-12-16 15:13:59',
            ),
            192 => 
            array (
                'id' => 198,
                'document_id' => 77,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-16 15:16:03',
                'updated_at' => '2022-12-16 15:16:03',
            ),
            193 => 
            array (
                'id' => 199,
                'document_id' => 78,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-16 15:16:52',
                'updated_at' => '2022-12-16 15:16:52',
            ),
            194 => 
            array (
                'id' => 200,
                'document_id' => 79,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-16 15:17:39',
                'updated_at' => '2022-12-16 15:17:39',
            ),
            195 => 
            array (
                'id' => 201,
                'document_id' => 80,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-16 15:19:22',
                'updated_at' => '2022-12-16 15:19:22',
            ),
            196 => 
            array (
                'id' => 202,
                'document_id' => 20,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-16 15:23:18',
                'updated_at' => '2022-12-16 15:23:18',
            ),
            197 => 
            array (
                'id' => 203,
                'document_id' => 38,
                'user_id' => 4,
                'remarks' => 'Done.. The request is already forwarded to the CO last December 13, 2022.  see attachment. thank you.',
                'created_at' => '2022-12-16 15:28:16',
                'updated_at' => '2022-12-16 15:28:16',
            ),
            198 => 
            array (
                'id' => 204,
                'document_id' => 58,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-16 15:29:28',
                'updated_at' => '2022-12-16 15:29:28',
            ),
            199 => 
            array (
                'id' => 206,
                'document_id' => 37,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-16 15:34:05',
                'updated_at' => '2022-12-16 15:34:05',
            ),
            200 => 
            array (
                'id' => 207,
                'document_id' => 38,
                'user_id' => 3,
                'remarks' => 'The Request Is Already Forwarded To The CO Last December 13, 2022',
                'created_at' => '2022-12-16 15:35:11',
                'updated_at' => '2022-12-16 15:35:11',
            ),
            201 => 
            array (
                'id' => 209,
                'document_id' => 25,
                'user_id' => 4,
            'remarks' => 'Done. As discussed,  RQM was realigned to COC for a shorter duration to comply with the requirement that all CFSP training will be completed and disbursed by end of December 2022. Realigned RQM (10) was approved last December 02, 2022.',
                'created_at' => '2022-12-16 15:38:18',
                'updated_at' => '2022-12-16 15:38:18',
            ),
            202 => 
            array (
                'id' => 211,
                'document_id' => 39,
                'user_id' => 3,
                'remarks' => 'Acted already,  Westtrade Technical Training And Assessment Center, Inc Submitted Other Program Registration Applications Namely: 1. Agricultural Crops Production NC II - With Existing 3 Registered Programs In The Lone District But With Justification From The Provincial Office 2. Gas Tungsten Arc Welding NC II - No Registered Program In The Province Of Antique.',
                'created_at' => '2022-12-16 15:39:48',
                'updated_at' => '2022-12-16 15:39:48',
            ),
            203 => 
            array (
                'id' => 212,
                'document_id' => 25,
                'user_id' => 3,
            'remarks' => 'Done Already. As Discussed, RQM Was Realigned To COC For A Shorter Duration To Comply With The Requirement That All CFSP Training Will Be Completed And Disbursed By End Of December 2022. Realigned RQM (10) Was Approved Last December 02, 2022.',
                'created_at' => '2022-12-16 15:40:50',
                'updated_at' => '2022-12-16 15:40:50',
            ),
            204 => 
            array (
                'id' => 221,
                'document_id' => 92,
                'user_id' => 5,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-16 15:53:43',
                'updated_at' => '2022-12-16 15:53:43',
            ),
            205 => 
            array (
                'id' => 222,
                'document_id' => 31,
                'user_id' => 3,
                'remarks' => 'Let\'s talk with RD',
                'created_at' => '2022-12-16 15:54:35',
                'updated_at' => '2022-12-16 15:54:35',
            ),
            206 => 
            array (
                'id' => 223,
                'document_id' => 23,
                'user_id' => 4,
                'remarks' => 'Done... per verification with RTC-Iloilo, CCTV recording is no longer needed.. Compliance audit was already conducted..',
                'created_at' => '2022-12-16 15:56:44',
                'updated_at' => '2022-12-16 15:56:44',
            ),
            207 => 
            array (
                'id' => 224,
                'document_id' => 31,
                'user_id' => 4,
                'remarks' => 'Already discussed this with RD and other personnel involved.',
                'created_at' => '2022-12-16 15:58:03',
                'updated_at' => '2022-12-16 15:58:03',
            ),
            208 => 
            array (
                'id' => 225,
                'document_id' => 92,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-16 16:07:32',
                'updated_at' => '2022-12-16 16:07:32',
            ),
            209 => 
            array (
                'id' => 226,
                'document_id' => 93,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 16:12:54',
                'updated_at' => '2022-12-16 16:12:54',
            ),
            210 => 
            array (
                'id' => 227,
                'document_id' => 49,
                'user_id' => 6,
                'remarks' => 'The Program was corrected and for dissemination.',
                'created_at' => '2022-12-16 16:25:49',
                'updated_at' => '2022-12-16 16:25:49',
            ),
            211 => 
            array (
                'id' => 228,
                'document_id' => 94,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 16:25:58',
                'updated_at' => '2022-12-16 16:25:58',
            ),
            212 => 
            array (
                'id' => 229,
                'document_id' => 95,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 16:27:01',
                'updated_at' => '2022-12-16 16:27:01',
            ),
            213 => 
            array (
                'id' => 230,
                'document_id' => 96,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 16:28:09',
                'updated_at' => '2022-12-16 16:28:09',
            ),
            214 => 
            array (
                'id' => 231,
                'document_id' => 31,
                'user_id' => 3,
                'remarks' => 'sir, considering that these need the input of finance, I think it is proper that they should respond to this.',
                'created_at' => '2022-12-16 16:29:00',
                'updated_at' => '2022-12-16 16:29:00',
            ),
            215 => 
            array (
                'id' => 232,
                'document_id' => 97,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 16:29:04',
                'updated_at' => '2022-12-16 16:29:04',
            ),
            216 => 
            array (
                'id' => 233,
                'document_id' => 98,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 16:30:54',
                'updated_at' => '2022-12-16 16:30:54',
            ),
            217 => 
            array (
                'id' => 234,
                'document_id' => 99,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 16:32:07',
                'updated_at' => '2022-12-16 16:32:07',
            ),
            218 => 
            array (
                'id' => 235,
                'document_id' => 49,
                'user_id' => 3,
                'remarks' => 'The Program Was Corrected And For Dissemination. Thank you.',
                'created_at' => '2022-12-16 16:33:30',
                'updated_at' => '2022-12-16 16:33:30',
            ),
            219 => 
            array (
                'id' => 236,
                'document_id' => 100,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 16:33:32',
                'updated_at' => '2022-12-16 16:33:32',
            ),
            220 => 
            array (
                'id' => 237,
                'document_id' => 101,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 16:36:02',
                'updated_at' => '2022-12-16 16:36:02',
            ),
            221 => 
            array (
                'id' => 238,
                'document_id' => 102,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 16:37:17',
                'updated_at' => '2022-12-16 16:37:17',
            ),
            222 => 
            array (
                'id' => 239,
                'document_id' => 103,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 16:37:50',
                'updated_at' => '2022-12-16 16:37:50',
            ),
            223 => 
            array (
                'id' => 240,
                'document_id' => 104,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 16:38:27',
                'updated_at' => '2022-12-16 16:38:27',
            ),
            224 => 
            array (
                'id' => 241,
                'document_id' => 40,
                'user_id' => 4,
                'remarks' => 'Please prepare a memorandum for dissemination.. Thank you..',
                'created_at' => '2022-12-16 16:46:12',
                'updated_at' => '2022-12-16 16:46:12',
            ),
            225 => 
            array (
                'id' => 242,
                'document_id' => 35,
                'user_id' => 4,
                'remarks' => 'Please prepare a memorandum to disseminate to all provincial offices..  Thank you..',
                'created_at' => '2022-12-16 16:49:10',
                'updated_at' => '2022-12-16 16:49:10',
            ),
            226 => 
            array (
                'id' => 243,
                'document_id' => 17,
                'user_id' => 6,
                'remarks' => 'The program was corrected and for dissemination. 
However, the document for the Office Order re Attendance to the Regional 2022 YEPA was previously attached to the wrong document title.',
                'created_at' => '2022-12-16 16:52:19',
                'updated_at' => '2022-12-16 16:52:19',
            ),
            227 => 
            array (
                'id' => 244,
                'document_id' => 75,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 16:53:03',
                'updated_at' => '2022-12-16 16:53:03',
            ),
            228 => 
            array (
                'id' => 245,
                'document_id' => 76,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 16:55:15',
                'updated_at' => '2022-12-16 16:55:15',
            ),
            229 => 
            array (
                'id' => 246,
                'document_id' => 17,
                'user_id' => 3,
                'remarks' => 'The program was corrected and ready for Dissemination.',
                'created_at' => '2022-12-16 16:55:31',
                'updated_at' => '2022-12-16 16:55:31',
            ),
            230 => 
            array (
                'id' => 247,
                'document_id' => 105,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-16 17:04:26',
                'updated_at' => '2022-12-16 17:04:26',
            ),
            231 => 
            array (
                'id' => 248,
                'document_id' => 106,
                'user_id' => 6,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-16 17:04:27',
                'updated_at' => '2022-12-16 17:04:27',
            ),
            232 => 
            array (
                'id' => 249,
                'document_id' => 77,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 17:09:53',
                'updated_at' => '2022-12-16 17:09:53',
            ),
            233 => 
            array (
                'id' => 250,
                'document_id' => 78,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 17:16:04',
                'updated_at' => '2022-12-16 17:16:04',
            ),
            234 => 
            array (
                'id' => 251,
                'document_id' => 79,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 17:17:10',
                'updated_at' => '2022-12-16 17:17:10',
            ),
            235 => 
            array (
                'id' => 252,
                'document_id' => 80,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 17:37:00',
                'updated_at' => '2022-12-16 17:37:00',
            ),
            236 => 
            array (
                'id' => 259,
                'document_id' => 107,
                'user_id' => 4,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-16 17:57:34',
                'updated_at' => '2022-12-16 17:57:34',
            ),
            237 => 
            array (
                'id' => 260,
                'document_id' => 92,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 17:58:48',
                'updated_at' => '2022-12-16 17:58:48',
            ),
            238 => 
            array (
                'id' => 261,
                'document_id' => 106,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-16 18:26:06',
                'updated_at' => '2022-12-16 18:26:06',
            ),
            239 => 
            array (
                'id' => 266,
                'document_id' => 93,
                'user_id' => 1,
                'remarks' => 'approved as to schedule only except December 23.',
                'created_at' => '2022-12-16 21:25:17',
                'updated_at' => '2022-12-16 21:25:17',
            ),
            240 => 
            array (
                'id' => 267,
                'document_id' => 94,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-16 21:27:57',
                'updated_at' => '2022-12-16 21:27:57',
            ),
            241 => 
            array (
                'id' => 268,
                'document_id' => 95,
                'user_id' => 1,
                'remarks' => 'Notify PD Carlito ASAP',
                'created_at' => '2022-12-16 21:30:13',
                'updated_at' => '2022-12-16 21:30:13',
            ),
            242 => 
            array (
                'id' => 269,
                'document_id' => 97,
                'user_id' => 1,
                'remarks' => 'Draft reply',
                'created_at' => '2022-12-16 21:31:09',
                'updated_at' => '2022-12-16 21:31:09',
            ),
            243 => 
            array (
                'id' => 270,
                'document_id' => 96,
                'user_id' => 1,
                'remarks' => 'File for future reference.',
                'created_at' => '2022-12-16 21:34:47',
                'updated_at' => '2022-12-16 21:34:47',
            ),
            244 => 
            array (
                'id' => 271,
                'document_id' => 98,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-16 21:36:17',
                'updated_at' => '2022-12-16 21:36:17',
            ),
            245 => 
            array (
                'id' => 272,
                'document_id' => 99,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-16 21:37:08',
                'updated_at' => '2022-12-16 21:37:08',
            ),
            246 => 
            array (
                'id' => 273,
                'document_id' => 100,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-16 21:39:24',
                'updated_at' => '2022-12-16 21:39:24',
            ),
            247 => 
            array (
                'id' => 274,
                'document_id' => 101,
                'user_id' => 1,
                'remarks' => 'no signature',
                'created_at' => '2022-12-16 21:42:51',
                'updated_at' => '2022-12-16 21:42:51',
            ),
            248 => 
            array (
                'id' => 275,
                'document_id' => 102,
                'user_id' => 1,
                'remarks' => 'no signature of mabel',
                'created_at' => '2022-12-16 21:44:32',
                'updated_at' => '2022-12-16 21:44:32',
            ),
            249 => 
            array (
                'id' => 276,
                'document_id' => 103,
                'user_id' => 1,
                'remarks' => 'No signature of mabel',
                'created_at' => '2022-12-16 21:45:40',
                'updated_at' => '2022-12-16 21:45:40',
            ),
            250 => 
            array (
                'id' => 277,
                'document_id' => 104,
                'user_id' => 1,
                'remarks' => 'No signature of Mabel',
                'created_at' => '2022-12-16 21:46:42',
                'updated_at' => '2022-12-16 21:46:42',
            ),
            251 => 
            array (
                'id' => 278,
                'document_id' => 105,
                'user_id' => 1,
                'remarks' => 'No attachments',
                'created_at' => '2022-12-16 21:47:37',
                'updated_at' => '2022-12-16 21:47:37',
            ),
            252 => 
            array (
                'id' => 279,
                'document_id' => 106,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 21:49:33',
                'updated_at' => '2022-12-16 21:49:33',
            ),
            253 => 
            array (
                'id' => 281,
                'document_id' => 60,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-16 21:51:47',
                'updated_at' => '2022-12-16 21:51:47',
            ),
            254 => 
            array (
                'id' => 282,
                'document_id' => 61,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 21:53:20',
                'updated_at' => '2022-12-16 21:53:20',
            ),
            255 => 
            array (
                'id' => 283,
                'document_id' => 62,
                'user_id' => 1,
                'remarks' => 'No assessment on December 23 and December 30',
                'created_at' => '2022-12-16 21:55:16',
                'updated_at' => '2022-12-16 21:55:16',
            ),
            256 => 
            array (
                'id' => 284,
                'document_id' => 63,
                'user_id' => 1,
                'remarks' => 'Forward to IPO for comment',
                'created_at' => '2022-12-16 21:56:59',
                'updated_at' => '2022-12-16 21:56:59',
            ),
            257 => 
            array (
                'id' => 285,
                'document_id' => 64,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-16 21:58:55',
                'updated_at' => '2022-12-16 21:58:55',
            ),
            258 => 
            array (
                'id' => 286,
                'document_id' => 65,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-16 21:59:46',
                'updated_at' => '2022-12-16 21:59:46',
            ),
            259 => 
            array (
                'id' => 287,
                'document_id' => 66,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 22:01:41',
                'updated_at' => '2022-12-16 22:01:41',
            ),
            260 => 
            array (
                'id' => 288,
                'document_id' => 67,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-16 22:02:43',
                'updated_at' => '2022-12-16 22:02:43',
            ),
            261 => 
            array (
                'id' => 289,
                'document_id' => 56,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 22:04:44',
                'updated_at' => '2022-12-16 22:04:44',
            ),
            262 => 
            array (
                'id' => 290,
                'document_id' => 68,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 22:09:01',
                'updated_at' => '2022-12-16 22:09:01',
            ),
            263 => 
            array (
                'id' => 291,
                'document_id' => 55,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-16 22:10:50',
                'updated_at' => '2022-12-16 22:10:50',
            ),
            264 => 
            array (
                'id' => 292,
                'document_id' => 20,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 22:12:45',
                'updated_at' => '2022-12-16 22:12:45',
            ),
            265 => 
            array (
                'id' => 293,
                'document_id' => 58,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 22:14:36',
                'updated_at' => '2022-12-16 22:14:36',
            ),
            266 => 
            array (
                'id' => 294,
                'document_id' => 37,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 22:18:23',
                'updated_at' => '2022-12-16 22:18:23',
            ),
            267 => 
            array (
                'id' => 295,
                'document_id' => 31,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-16 22:23:06',
                'updated_at' => '2022-12-16 22:23:06',
            ),
            268 => 
            array (
                'id' => 296,
                'document_id' => 49,
                'user_id' => 1,
                'remarks' => 'furnish copy invitation committee thru Cecil',
                'created_at' => '2022-12-16 22:25:14',
                'updated_at' => '2022-12-16 22:25:14',
            ),
            269 => 
            array (
                'id' => 297,
                'document_id' => 17,
                'user_id' => 1,
                'remarks' => 'check subject and some details don\'t match',
                'created_at' => '2022-12-16 22:26:48',
                'updated_at' => '2022-12-16 22:26:48',
            ),
            270 => 
            array (
                'id' => 298,
                'document_id' => 4,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-16 22:28:14',
                'updated_at' => '2022-12-16 22:28:14',
            ),
            271 => 
            array (
                'id' => 299,
                'document_id' => 107,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-17 11:42:34',
                'updated_at' => '2022-12-17 11:42:34',
            ),
            272 => 
            array (
                'id' => 300,
                'document_id' => 93,
                'user_id' => 3,
                'remarks' => 'Kindly check and verify.. also take note of the comment of RD.',
                'created_at' => '2022-12-17 11:45:50',
                'updated_at' => '2022-12-17 11:45:50',
            ),
            273 => 
            array (
                'id' => 301,
                'document_id' => 94,
                'user_id' => 3,
                'remarks' => 'Kindly check and verify. Take note of RD\'s comment.',
                'created_at' => '2022-12-17 11:48:16',
                'updated_at' => '2022-12-17 11:48:16',
            ),
            274 => 
            array (
                'id' => 302,
                'document_id' => 95,
                'user_id' => 3,
                'remarks' => 'Prepare Memo reply.',
                'created_at' => '2022-12-17 11:52:59',
                'updated_at' => '2022-12-17 11:52:59',
            ),
            275 => 
            array (
                'id' => 303,
                'document_id' => 98,
                'user_id' => 3,
                'remarks' => 'Kindly check and verify the submitted docs.',
                'created_at' => '2022-12-17 11:54:02',
                'updated_at' => '2022-12-17 11:54:02',
            ),
            276 => 
            array (
                'id' => 304,
                'document_id' => 99,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-17 11:54:37',
                'updated_at' => '2022-12-17 11:54:37',
            ),
            277 => 
            array (
                'id' => 305,
                'document_id' => 62,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-17 12:43:40',
                'updated_at' => '2022-12-17 12:43:40',
            ),
            278 => 
            array (
                'id' => 307,
                'document_id' => 67,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-17 17:37:49',
                'updated_at' => '2022-12-17 17:37:49',
            ),
            279 => 
            array (
                'id' => 308,
                'document_id' => 63,
                'user_id' => 3,
                'remarks' => 'Kindly ask IPO of there comment per RD\'s instruction.',
                'created_at' => '2022-12-17 17:42:36',
                'updated_at' => '2022-12-17 17:42:36',
            ),
            280 => 
            array (
                'id' => 310,
                'document_id' => 107,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-18 20:02:30',
                'updated_at' => '2022-12-18 20:02:30',
            ),
            281 => 
            array (
                'id' => 311,
                'document_id' => 42,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-18 20:03:43',
                'updated_at' => '2022-12-18 20:03:43',
            ),
            282 => 
            array (
                'id' => 312,
                'document_id' => 98,
                'user_id' => 5,
                'remarks' => 'Please evaluate based on checklist of additional trainer and update me status.
Thank you',
                'created_at' => '2022-12-19 09:22:17',
                'updated_at' => '2022-12-19 09:22:17',
            ),
            283 => 
            array (
                'id' => 315,
                'document_id' => 30,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-19 10:16:27',
                'updated_at' => '2022-12-19 10:16:27',
            ),
            284 => 
            array (
                'id' => 316,
                'document_id' => 108,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 10:24:36',
                'updated_at' => '2022-12-19 10:24:36',
            ),
            285 => 
            array (
                'id' => 318,
                'document_id' => 101,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-19 10:42:56',
                'updated_at' => '2022-12-19 10:42:56',
            ),
            286 => 
            array (
                'id' => 320,
                'document_id' => 109,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 10:45:05',
                'updated_at' => '2022-12-19 10:45:05',
            ),
            287 => 
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
            288 => 
            array (
                'id' => 322,
                'document_id' => 110,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 10:48:45',
                'updated_at' => '2022-12-19 10:48:45',
            ),
            289 => 
            array (
                'id' => 323,
                'document_id' => 111,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 10:51:06',
                'updated_at' => '2022-12-19 10:51:06',
            ),
            290 => 
            array (
                'id' => 324,
                'document_id' => 112,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 10:54:28',
                'updated_at' => '2022-12-19 10:54:28',
            ),
            291 => 
            array (
                'id' => 325,
                'document_id' => 26,
                'user_id' => 34,
                'remarks' => 'Please return back to LGPC with RD\'s remarks. Thank you!',
                'created_at' => '2022-12-19 10:55:05',
                'updated_at' => '2022-12-19 10:55:05',
            ),
            292 => 
            array (
                'id' => 326,
                'document_id' => 113,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 10:57:12',
                'updated_at' => '2022-12-19 10:57:12',
            ),
            293 => 
            array (
                'id' => 327,
                'document_id' => 114,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 10:59:49',
                'updated_at' => '2022-12-19 10:59:49',
            ),
            294 => 
            array (
                'id' => 328,
                'document_id' => 115,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 11:04:31',
                'updated_at' => '2022-12-19 11:04:31',
            ),
            295 => 
            array (
                'id' => 329,
                'document_id' => 104,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-19 11:05:41',
                'updated_at' => '2022-12-19 11:05:41',
            ),
            296 => 
            array (
                'id' => 330,
                'document_id' => 103,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-19 11:09:55',
                'updated_at' => '2022-12-19 11:09:55',
            ),
            297 => 
            array (
                'id' => 331,
                'document_id' => 116,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 11:19:48',
                'updated_at' => '2022-12-19 11:19:48',
            ),
            298 => 
            array (
                'id' => 332,
                'document_id' => 102,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-19 11:21:43',
                'updated_at' => '2022-12-19 11:21:43',
            ),
            299 => 
            array (
                'id' => 333,
                'document_id' => 117,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 11:22:02',
                'updated_at' => '2022-12-19 11:22:02',
            ),
            300 => 
            array (
                'id' => 334,
                'document_id' => 118,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 11:25:22',
                'updated_at' => '2022-12-19 11:25:22',
            ),
            301 => 
            array (
                'id' => 335,
                'document_id' => 119,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 11:28:13',
                'updated_at' => '2022-12-19 11:28:13',
            ),
            302 => 
            array (
                'id' => 336,
                'document_id' => 120,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 11:37:10',
                'updated_at' => '2022-12-19 11:37:10',
            ),
            303 => 
            array (
                'id' => 337,
                'document_id' => 121,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 11:40:09',
                'updated_at' => '2022-12-19 11:40:09',
            ),
            304 => 
            array (
                'id' => 338,
                'document_id' => 122,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 11:42:30',
                'updated_at' => '2022-12-19 11:42:30',
            ),
            305 => 
            array (
                'id' => 339,
                'document_id' => 123,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 11:45:05',
                'updated_at' => '2022-12-19 11:45:05',
            ),
            306 => 
            array (
                'id' => 340,
                'document_id' => 29,
                'user_id' => 3,
                'remarks' => 'This was acted already sir.',
                'created_at' => '2022-12-19 11:45:50',
                'updated_at' => '2022-12-19 11:45:50',
            ),
            307 => 
            array (
                'id' => 341,
                'document_id' => 124,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 11:47:40',
                'updated_at' => '2022-12-19 11:47:40',
            ),
            308 => 
            array (
                'id' => 342,
                'document_id' => 125,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 11:54:57',
                'updated_at' => '2022-12-19 11:54:57',
            ),
            309 => 
            array (
                'id' => 343,
                'document_id' => 126,
                'user_id' => 10,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 11:57:02',
                'updated_at' => '2022-12-19 11:57:02',
            ),
            310 => 
            array (
                'id' => 344,
                'document_id' => 127,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 11:59:06',
                'updated_at' => '2022-12-19 11:59:06',
            ),
            311 => 
            array (
                'id' => 345,
                'document_id' => 128,
                'user_id' => 35,
                'remarks' => 'Forwarded to ROD',
                'created_at' => '2022-12-19 11:59:34',
                'updated_at' => '2022-12-19 11:59:34',
            ),
            312 => 
            array (
                'id' => 346,
                'document_id' => 129,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 12:01:47',
                'updated_at' => '2022-12-19 12:01:47',
            ),
            313 => 
            array (
                'id' => 347,
                'document_id' => 126,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-19 12:08:29',
                'updated_at' => '2022-12-19 12:08:29',
            ),
            314 => 
            array (
                'id' => 348,
                'document_id' => 130,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 12:10:12',
                'updated_at' => '2022-12-19 12:10:12',
            ),
            315 => 
            array (
                'id' => 349,
                'document_id' => 131,
                'user_id' => 35,
                'remarks' => 'Forwarded to ROD',
                'created_at' => '2022-12-19 12:16:59',
                'updated_at' => '2022-12-19 12:16:59',
            ),
            316 => 
            array (
                'id' => 350,
                'document_id' => 132,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 12:29:23',
                'updated_at' => '2022-12-19 12:29:23',
            ),
            317 => 
            array (
                'id' => 351,
                'document_id' => 133,
                'user_id' => 35,
                'remarks' => 'Forwarded to PSU',
                'created_at' => '2022-12-19 12:46:20',
                'updated_at' => '2022-12-19 12:46:20',
            ),
            318 => 
            array (
                'id' => 352,
                'document_id' => 128,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-19 12:47:34',
                'updated_at' => '2022-12-19 12:47:34',
            ),
            319 => 
            array (
                'id' => 353,
                'document_id' => 131,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-19 12:47:54',
                'updated_at' => '2022-12-19 12:47:54',
            ),
            320 => 
            array (
                'id' => 354,
                'document_id' => 134,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 12:51:37',
                'updated_at' => '2022-12-19 12:51:37',
            ),
            321 => 
            array (
                'id' => 355,
                'document_id' => 135,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 12:59:44',
                'updated_at' => '2022-12-19 12:59:44',
            ),
            322 => 
            array (
                'id' => 356,
                'document_id' => 136,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 13:13:56',
                'updated_at' => '2022-12-19 13:13:56',
            ),
            323 => 
            array (
                'id' => 357,
                'document_id' => 62,
                'user_id' => 8,
                'remarks' => 'Ma\'am for your initial.',
                'created_at' => '2022-12-19 13:18:09',
                'updated_at' => '2022-12-19 13:18:09',
            ),
            324 => 
            array (
                'id' => 358,
                'document_id' => 94,
                'user_id' => 8,
                'remarks' => 'Ma\'am for your initial',
                'created_at' => '2022-12-19 13:21:03',
                'updated_at' => '2022-12-19 13:21:03',
            ),
            325 => 
            array (
                'id' => 359,
                'document_id' => 93,
                'user_id' => 8,
                'remarks' => 'Ma\'am for your initial.',
                'created_at' => '2022-12-19 13:22:28',
                'updated_at' => '2022-12-19 13:22:28',
            ),
            326 => 
            array (
                'id' => 360,
                'document_id' => 63,
                'user_id' => 8,
                'remarks' => 'Ma\'am for your initial.',
                'created_at' => '2022-12-19 13:24:11',
                'updated_at' => '2022-12-19 13:24:11',
            ),
            327 => 
            array (
                'id' => 361,
                'document_id' => 137,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 14:13:01',
                'updated_at' => '2022-12-19 14:13:01',
            ),
            328 => 
            array (
                'id' => 362,
                'document_id' => 138,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 14:28:48',
                'updated_at' => '2022-12-19 14:28:48',
            ),
            329 => 
            array (
                'id' => 363,
                'document_id' => 139,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 14:35:33',
                'updated_at' => '2022-12-19 14:35:33',
            ),
            330 => 
            array (
                'id' => 364,
                'document_id' => 99,
                'user_id' => 4,
                'remarks' => NULL,
                'created_at' => '2022-12-19 14:50:32',
                'updated_at' => '2022-12-19 14:50:32',
            ),
            331 => 
            array (
                'id' => 365,
                'document_id' => 140,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 14:54:24',
                'updated_at' => '2022-12-19 14:54:24',
            ),
            332 => 
            array (
                'id' => 366,
                'document_id' => 141,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 15:00:04',
                'updated_at' => '2022-12-19 15:00:04',
            ),
            333 => 
            array (
                'id' => 367,
                'document_id' => 142,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 15:02:53',
                'updated_at' => '2022-12-19 15:02:53',
            ),
            334 => 
            array (
                'id' => 368,
                'document_id' => 143,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 15:03:32',
                'updated_at' => '2022-12-19 15:03:32',
            ),
            335 => 
            array (
                'id' => 369,
                'document_id' => 144,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 15:06:03',
                'updated_at' => '2022-12-19 15:06:03',
            ),
            336 => 
            array (
                'id' => 370,
                'document_id' => 145,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 15:08:35',
                'updated_at' => '2022-12-19 15:08:35',
            ),
            337 => 
            array (
                'id' => 371,
                'document_id' => 146,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 15:13:03',
                'updated_at' => '2022-12-19 15:13:03',
            ),
            338 => 
            array (
                'id' => 372,
                'document_id' => 147,
                'user_id' => 35,
                'remarks' => 'Forwarded to ROD',
                'created_at' => '2022-12-19 15:17:06',
                'updated_at' => '2022-12-19 15:17:06',
            ),
            339 => 
            array (
                'id' => 373,
                'document_id' => 148,
                'user_id' => 35,
                'remarks' => 'Forwarded to ROD',
                'created_at' => '2022-12-19 15:18:53',
                'updated_at' => '2022-12-19 15:18:53',
            ),
            340 => 
            array (
                'id' => 374,
                'document_id' => 149,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 15:23:14',
                'updated_at' => '2022-12-19 15:23:14',
            ),
            341 => 
            array (
                'id' => 375,
                'document_id' => 59,
                'user_id' => 1,
                'remarks' => 'Forward To CO',
                'created_at' => '2022-12-19 15:24:34',
                'updated_at' => '2022-12-19 15:24:34',
            ),
            342 => 
            array (
                'id' => 376,
                'document_id' => 140,
                'user_id' => 1,
                'remarks' => 'Forward To CO',
                'created_at' => '2022-12-19 15:25:36',
                'updated_at' => '2022-12-19 15:25:36',
            ),
            343 => 
            array (
                'id' => 377,
                'document_id' => 59,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-19 15:33:55',
                'updated_at' => '2022-12-19 15:33:55',
            ),
            344 => 
            array (
                'id' => 378,
                'document_id' => 140,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-19 15:37:02',
                'updated_at' => '2022-12-19 15:37:02',
            ),
            345 => 
            array (
                'id' => 379,
                'document_id' => 30,
                'user_id' => 39,
                'remarks' => NULL,
                'created_at' => '2022-12-19 15:38:22',
                'updated_at' => '2022-12-19 15:38:22',
            ),
            346 => 
            array (
                'id' => 380,
                'document_id' => 59,
                'user_id' => 4,
                'remarks' => NULL,
                'created_at' => '2022-12-19 15:40:01',
                'updated_at' => '2022-12-19 15:40:01',
            ),
            347 => 
            array (
                'id' => 381,
                'document_id' => 59,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-19 15:45:36',
                'updated_at' => '2022-12-19 15:45:36',
            ),
            348 => 
            array (
                'id' => 382,
                'document_id' => 99,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-19 15:46:39',
                'updated_at' => '2022-12-19 15:46:39',
            ),
            349 => 
            array (
                'id' => 383,
                'document_id' => 98,
                'user_id' => 11,
                'remarks' => NULL,
                'created_at' => '2022-12-19 15:54:30',
                'updated_at' => '2022-12-19 15:54:30',
            ),
            350 => 
            array (
                'id' => 384,
                'document_id' => 150,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 16:20:59',
                'updated_at' => '2022-12-19 16:20:59',
            ),
            351 => 
            array (
                'id' => 385,
                'document_id' => 151,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-19 16:30:49',
                'updated_at' => '2022-12-19 16:30:49',
            ),
            352 => 
            array (
                'id' => 386,
                'document_id' => 152,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-19 16:32:47',
                'updated_at' => '2022-12-19 16:32:47',
            ),
            353 => 
            array (
                'id' => 387,
                'document_id' => 153,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 16:33:33',
                'updated_at' => '2022-12-19 16:33:33',
            ),
            354 => 
            array (
                'id' => 388,
                'document_id' => 154,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 16:34:41',
                'updated_at' => '2022-12-19 16:34:41',
            ),
            355 => 
            array (
                'id' => 389,
                'document_id' => 155,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 16:35:26',
                'updated_at' => '2022-12-19 16:35:26',
            ),
            356 => 
            array (
                'id' => 390,
                'document_id' => 156,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 16:36:29',
                'updated_at' => '2022-12-19 16:36:29',
            ),
            357 => 
            array (
                'id' => 391,
                'document_id' => 157,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-19 16:37:09',
                'updated_at' => '2022-12-19 16:37:09',
            ),
            358 => 
            array (
                'id' => 392,
                'document_id' => 158,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 16:38:51',
                'updated_at' => '2022-12-19 16:38:51',
            ),
            359 => 
            array (
                'id' => 393,
                'document_id' => 159,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 16:39:06',
                'updated_at' => '2022-12-19 16:39:06',
            ),
            360 => 
            array (
                'id' => 394,
                'document_id' => 150,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-19 16:41:37',
                'updated_at' => '2022-12-19 16:41:37',
            ),
            361 => 
            array (
                'id' => 395,
                'document_id' => 160,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 16:42:54',
                'updated_at' => '2022-12-19 16:42:54',
            ),
            362 => 
            array (
                'id' => 396,
                'document_id' => 99,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-19 16:43:43',
                'updated_at' => '2022-12-19 16:43:43',
            ),
            363 => 
            array (
                'id' => 397,
                'document_id' => 59,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-19 16:45:35',
                'updated_at' => '2022-12-19 16:45:35',
            ),
            364 => 
            array (
                'id' => 398,
                'document_id' => 161,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 16:54:07',
                'updated_at' => '2022-12-19 16:54:07',
            ),
            365 => 
            array (
                'id' => 399,
                'document_id' => 162,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-19 16:55:56',
                'updated_at' => '2022-12-19 16:55:56',
            ),
            366 => 
            array (
                'id' => 400,
                'document_id' => 163,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-19 17:01:22',
                'updated_at' => '2022-12-19 17:01:22',
            ),
            367 => 
            array (
                'id' => 401,
                'document_id' => 164,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 17:02:04',
                'updated_at' => '2022-12-19 17:02:04',
            ),
            368 => 
            array (
                'id' => 402,
                'document_id' => 165,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-19 17:04:02',
                'updated_at' => '2022-12-19 17:04:02',
            ),
            369 => 
            array (
                'id' => 403,
                'document_id' => 166,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-19 17:10:21',
                'updated_at' => '2022-12-19 17:10:21',
            ),
            370 => 
            array (
                'id' => 404,
                'document_id' => 167,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-19 17:17:04',
                'updated_at' => '2022-12-19 17:17:04',
            ),
            371 => 
            array (
                'id' => 405,
                'document_id' => 168,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-19 17:18:45',
                'updated_at' => '2022-12-19 17:18:45',
            ),
            372 => 
            array (
                'id' => 406,
                'document_id' => 169,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-19 17:19:56',
                'updated_at' => '2022-12-19 17:19:56',
            ),
            373 => 
            array (
                'id' => 407,
                'document_id' => 170,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-19 17:22:17',
                'updated_at' => '2022-12-19 17:22:17',
            ),
            374 => 
            array (
                'id' => 408,
                'document_id' => 171,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 08:22:34',
                'updated_at' => '2022-12-20 08:22:34',
            ),
            375 => 
            array (
                'id' => 409,
                'document_id' => 172,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 08:24:32',
                'updated_at' => '2022-12-20 08:24:32',
            ),
            376 => 
            array (
                'id' => 410,
                'document_id' => 173,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 08:26:10',
                'updated_at' => '2022-12-20 08:26:10',
            ),
            377 => 
            array (
                'id' => 411,
                'document_id' => 174,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 08:27:42',
                'updated_at' => '2022-12-20 08:27:42',
            ),
            378 => 
            array (
                'id' => 412,
                'document_id' => 175,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 08:43:55',
                'updated_at' => '2022-12-20 08:43:55',
            ),
            379 => 
            array (
                'id' => 413,
                'document_id' => 176,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 08:51:49',
                'updated_at' => '2022-12-20 08:51:49',
            ),
            380 => 
            array (
                'id' => 414,
                'document_id' => 177,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 08:53:04',
                'updated_at' => '2022-12-20 08:53:04',
            ),
            381 => 
            array (
                'id' => 415,
                'document_id' => 178,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 08:54:14',
                'updated_at' => '2022-12-20 08:54:14',
            ),
            382 => 
            array (
                'id' => 416,
                'document_id' => 179,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 08:55:44',
                'updated_at' => '2022-12-20 08:55:44',
            ),
            383 => 
            array (
                'id' => 417,
                'document_id' => 140,
                'user_id' => 4,
                'remarks' => NULL,
                'created_at' => '2022-12-20 08:55:48',
                'updated_at' => '2022-12-20 08:55:48',
            ),
            384 => 
            array (
                'id' => 418,
                'document_id' => 180,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 08:57:01',
                'updated_at' => '2022-12-20 08:57:01',
            ),
            385 => 
            array (
                'id' => 419,
                'document_id' => 181,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 09:09:46',
                'updated_at' => '2022-12-20 09:09:46',
            ),
            386 => 
            array (
                'id' => 420,
                'document_id' => 182,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 09:11:54',
                'updated_at' => '2022-12-20 09:11:54',
            ),
            387 => 
            array (
                'id' => 421,
                'document_id' => 183,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 09:12:49',
                'updated_at' => '2022-12-20 09:12:49',
            ),
            388 => 
            array (
                'id' => 422,
                'document_id' => 184,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 09:13:24',
                'updated_at' => '2022-12-20 09:13:24',
            ),
            389 => 
            array (
                'id' => 423,
                'document_id' => 185,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 09:14:39',
                'updated_at' => '2022-12-20 09:14:39',
            ),
            390 => 
            array (
                'id' => 424,
                'document_id' => 186,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 09:15:24',
                'updated_at' => '2022-12-20 09:15:24',
            ),
            391 => 
            array (
                'id' => 425,
                'document_id' => 187,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 09:15:58',
                'updated_at' => '2022-12-20 09:15:58',
            ),
            392 => 
            array (
                'id' => 426,
                'document_id' => 188,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 09:28:10',
                'updated_at' => '2022-12-20 09:28:10',
            ),
            393 => 
            array (
                'id' => 427,
                'document_id' => 167,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 09:32:02',
                'updated_at' => '2022-12-20 09:32:02',
            ),
            394 => 
            array (
                'id' => 428,
                'document_id' => 189,
                'user_id' => 6,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 09:50:52',
                'updated_at' => '2022-12-20 09:50:52',
            ),
            395 => 
            array (
                'id' => 429,
                'document_id' => 190,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:02:59',
                'updated_at' => '2022-12-20 10:02:59',
            ),
            396 => 
            array (
                'id' => 430,
                'document_id' => 191,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:04:16',
                'updated_at' => '2022-12-20 10:04:16',
            ),
            397 => 
            array (
                'id' => 431,
                'document_id' => 192,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:05:41',
                'updated_at' => '2022-12-20 10:05:41',
            ),
            398 => 
            array (
                'id' => 432,
                'document_id' => 193,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:09:24',
                'updated_at' => '2022-12-20 10:09:24',
            ),
            399 => 
            array (
                'id' => 433,
                'document_id' => 194,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:11:41',
                'updated_at' => '2022-12-20 10:11:41',
            ),
            400 => 
            array (
                'id' => 434,
                'document_id' => 195,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:15:38',
                'updated_at' => '2022-12-20 10:15:38',
            ),
            401 => 
            array (
                'id' => 435,
                'document_id' => 196,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:17:31',
                'updated_at' => '2022-12-20 10:17:31',
            ),
            402 => 
            array (
                'id' => 436,
                'document_id' => 197,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:19:08',
                'updated_at' => '2022-12-20 10:19:08',
            ),
            403 => 
            array (
                'id' => 437,
                'document_id' => 198,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:21:49',
                'updated_at' => '2022-12-20 10:21:49',
            ),
            404 => 
            array (
                'id' => 438,
                'document_id' => 199,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:23:14',
                'updated_at' => '2022-12-20 10:23:14',
            ),
            405 => 
            array (
                'id' => 439,
                'document_id' => 200,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:24:26',
                'updated_at' => '2022-12-20 10:24:26',
            ),
            406 => 
            array (
                'id' => 440,
                'document_id' => 181,
                'user_id' => 1,
                'remarks' => 'Forward to CO',
                'created_at' => '2022-12-20 10:24:30',
                'updated_at' => '2022-12-20 10:24:30',
            ),
            407 => 
            array (
                'id' => 441,
                'document_id' => 181,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-20 10:27:28',
                'updated_at' => '2022-12-20 10:27:28',
            ),
            408 => 
            array (
                'id' => 442,
                'document_id' => 181,
                'user_id' => 4,
                'remarks' => NULL,
                'created_at' => '2022-12-20 10:31:14',
                'updated_at' => '2022-12-20 10:31:14',
            ),
            409 => 
            array (
                'id' => 444,
                'document_id' => 202,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:38:20',
                'updated_at' => '2022-12-20 10:38:20',
            ),
            410 => 
            array (
                'id' => 445,
                'document_id' => 203,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:39:56',
                'updated_at' => '2022-12-20 10:39:56',
            ),
            411 => 
            array (
                'id' => 446,
                'document_id' => 140,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-20 10:44:04',
                'updated_at' => '2022-12-20 10:44:04',
            ),
            412 => 
            array (
                'id' => 447,
                'document_id' => 181,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-20 10:48:25',
                'updated_at' => '2022-12-20 10:48:25',
            ),
            413 => 
            array (
                'id' => 448,
                'document_id' => 181,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-20 10:49:41',
                'updated_at' => '2022-12-20 10:49:41',
            ),
            414 => 
            array (
                'id' => 449,
                'document_id' => 204,
                'user_id' => 35,
                'remarks' => 'Forwarded to ROD',
                'created_at' => '2022-12-20 10:53:14',
                'updated_at' => '2022-12-20 10:53:14',
            ),
            415 => 
            array (
                'id' => 450,
                'document_id' => 205,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:55:20',
                'updated_at' => '2022-12-20 10:55:20',
            ),
            416 => 
            array (
                'id' => 451,
                'document_id' => 206,
                'user_id' => 4,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:55:42',
                'updated_at' => '2022-12-20 10:55:42',
            ),
            417 => 
            array (
                'id' => 452,
                'document_id' => 207,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:56:48',
                'updated_at' => '2022-12-20 10:56:48',
            ),
            418 => 
            array (
                'id' => 453,
                'document_id' => 208,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 10:59:16',
                'updated_at' => '2022-12-20 10:59:16',
            ),
            419 => 
            array (
                'id' => 454,
                'document_id' => 209,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:01:05',
                'updated_at' => '2022-12-20 11:01:05',
            ),
            420 => 
            array (
                'id' => 455,
                'document_id' => 189,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-20 11:02:12',
                'updated_at' => '2022-12-20 11:02:12',
            ),
            421 => 
            array (
                'id' => 456,
                'document_id' => 210,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:02:26',
                'updated_at' => '2022-12-20 11:02:26',
            ),
            422 => 
            array (
                'id' => 457,
                'document_id' => 211,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:03:49',
                'updated_at' => '2022-12-20 11:03:49',
            ),
            423 => 
            array (
                'id' => 458,
                'document_id' => 179,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-20 11:04:53',
                'updated_at' => '2022-12-20 11:04:53',
            ),
            424 => 
            array (
                'id' => 459,
                'document_id' => 212,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:05:09',
                'updated_at' => '2022-12-20 11:05:09',
            ),
            425 => 
            array (
                'id' => 460,
                'document_id' => 190,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-20 11:06:24',
                'updated_at' => '2022-12-20 11:06:24',
            ),
            426 => 
            array (
                'id' => 461,
                'document_id' => 191,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-20 11:07:33',
                'updated_at' => '2022-12-20 11:07:33',
            ),
            427 => 
            array (
                'id' => 462,
                'document_id' => 192,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-20 11:08:42',
                'updated_at' => '2022-12-20 11:08:42',
            ),
            428 => 
            array (
                'id' => 463,
                'document_id' => 213,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:09:54',
                'updated_at' => '2022-12-20 11:09:54',
            ),
            429 => 
            array (
                'id' => 464,
                'document_id' => 195,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-20 11:10:09',
                'updated_at' => '2022-12-20 11:10:09',
            ),
            430 => 
            array (
                'id' => 465,
                'document_id' => 204,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-20 11:10:48',
                'updated_at' => '2022-12-20 11:10:48',
            ),
            431 => 
            array (
                'id' => 466,
                'document_id' => 213,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-20 11:12:09',
                'updated_at' => '2022-12-20 11:12:09',
            ),
            432 => 
            array (
                'id' => 467,
                'document_id' => 62,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-20 11:14:13',
                'updated_at' => '2022-12-20 11:14:13',
            ),
            433 => 
            array (
                'id' => 468,
                'document_id' => 214,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:17:17',
                'updated_at' => '2022-12-20 11:17:17',
            ),
            434 => 
            array (
                'id' => 469,
                'document_id' => 215,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:18:23',
                'updated_at' => '2022-12-20 11:18:23',
            ),
            435 => 
            array (
                'id' => 470,
                'document_id' => 216,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:19:37',
                'updated_at' => '2022-12-20 11:19:37',
            ),
            436 => 
            array (
                'id' => 471,
                'document_id' => 217,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:21:13',
                'updated_at' => '2022-12-20 11:21:13',
            ),
            437 => 
            array (
                'id' => 472,
                'document_id' => 218,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:29:55',
                'updated_at' => '2022-12-20 11:29:55',
            ),
            438 => 
            array (
                'id' => 473,
                'document_id' => 219,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:32:41',
                'updated_at' => '2022-12-20 11:32:41',
            ),
            439 => 
            array (
                'id' => 474,
                'document_id' => 220,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:33:57',
                'updated_at' => '2022-12-20 11:33:57',
            ),
            440 => 
            array (
                'id' => 475,
                'document_id' => 221,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:35:16',
                'updated_at' => '2022-12-20 11:35:16',
            ),
            441 => 
            array (
                'id' => 476,
                'document_id' => 222,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:36:32',
                'updated_at' => '2022-12-20 11:36:32',
            ),
            442 => 
            array (
                'id' => 477,
                'document_id' => 223,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:38:08',
                'updated_at' => '2022-12-20 11:38:08',
            ),
            443 => 
            array (
                'id' => 478,
                'document_id' => 224,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:39:37',
                'updated_at' => '2022-12-20 11:39:37',
            ),
            444 => 
            array (
                'id' => 479,
                'document_id' => 225,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:41:56',
                'updated_at' => '2022-12-20 11:41:56',
            ),
            445 => 
            array (
                'id' => 480,
                'document_id' => 226,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 11:43:06',
                'updated_at' => '2022-12-20 11:43:06',
            ),
            446 => 
            array (
                'id' => 481,
                'document_id' => 227,
                'user_id' => 35,
                'remarks' => 'Forwarded to ROD',
                'created_at' => '2022-12-20 11:46:48',
                'updated_at' => '2022-12-20 11:46:48',
            ),
            447 => 
            array (
                'id' => 482,
                'document_id' => 170,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 11:49:37',
                'updated_at' => '2022-12-20 11:49:37',
            ),
            448 => 
            array (
                'id' => 483,
                'document_id' => 169,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 12:00:13',
                'updated_at' => '2022-12-20 12:00:13',
            ),
            449 => 
            array (
                'id' => 484,
                'document_id' => 228,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 12:00:39',
                'updated_at' => '2022-12-20 12:00:39',
            ),
            450 => 
            array (
                'id' => 485,
                'document_id' => 168,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 12:02:24',
                'updated_at' => '2022-12-20 12:02:24',
            ),
            451 => 
            array (
                'id' => 486,
                'document_id' => 229,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 12:02:59',
                'updated_at' => '2022-12-20 12:02:59',
            ),
            452 => 
            array (
                'id' => 487,
                'document_id' => 166,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 12:07:30',
                'updated_at' => '2022-12-20 12:07:30',
            ),
            453 => 
            array (
                'id' => 488,
                'document_id' => 230,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 12:07:56',
                'updated_at' => '2022-12-20 12:07:56',
            ),
            454 => 
            array (
                'id' => 489,
                'document_id' => 231,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-20 12:08:03',
                'updated_at' => '2022-12-20 12:08:03',
            ),
            455 => 
            array (
                'id' => 490,
                'document_id' => 232,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-20 12:09:17',
                'updated_at' => '2022-12-20 12:09:17',
            ),
            456 => 
            array (
                'id' => 491,
                'document_id' => 162,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 12:09:40',
                'updated_at' => '2022-12-20 12:09:40',
            ),
            457 => 
            array (
                'id' => 492,
                'document_id' => 157,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 12:10:35',
                'updated_at' => '2022-12-20 12:10:35',
            ),
            458 => 
            array (
                'id' => 493,
                'document_id' => 152,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 12:11:17',
                'updated_at' => '2022-12-20 12:11:17',
            ),
            459 => 
            array (
                'id' => 494,
                'document_id' => 151,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 12:11:55',
                'updated_at' => '2022-12-20 12:11:55',
            ),
            460 => 
            array (
                'id' => 495,
                'document_id' => 233,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-20 13:15:13',
                'updated_at' => '2022-12-20 13:15:13',
            ),
            461 => 
            array (
                'id' => 498,
                'document_id' => 236,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-20 13:18:20',
                'updated_at' => '2022-12-20 13:18:20',
            ),
            462 => 
            array (
                'id' => 499,
                'document_id' => 237,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-20 13:19:17',
                'updated_at' => '2022-12-20 13:19:17',
            ),
            463 => 
            array (
                'id' => 500,
                'document_id' => 238,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-20 13:24:52',
                'updated_at' => '2022-12-20 13:24:52',
            ),
            464 => 
            array (
                'id' => 501,
                'document_id' => 232,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 13:26:42',
                'updated_at' => '2022-12-20 13:26:42',
            ),
            465 => 
            array (
                'id' => 502,
                'document_id' => 238,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 13:39:44',
                'updated_at' => '2022-12-20 13:39:44',
            ),
            466 => 
            array (
                'id' => 503,
                'document_id' => 237,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 13:40:10',
                'updated_at' => '2022-12-20 13:40:10',
            ),
            467 => 
            array (
                'id' => 505,
                'document_id' => 236,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 13:41:58',
                'updated_at' => '2022-12-20 13:41:58',
            ),
            468 => 
            array (
                'id' => 507,
                'document_id' => 233,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 13:42:57',
                'updated_at' => '2022-12-20 13:42:57',
            ),
            469 => 
            array (
                'id' => 508,
                'document_id' => 231,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 13:43:23',
                'updated_at' => '2022-12-20 13:43:23',
            ),
            470 => 
            array (
                'id' => 509,
                'document_id' => 30,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 13:44:56',
                'updated_at' => '2022-12-20 13:44:56',
            ),
            471 => 
            array (
                'id' => 510,
                'document_id' => 239,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 13:45:28',
                'updated_at' => '2022-12-20 13:45:28',
            ),
            472 => 
            array (
                'id' => 511,
                'document_id' => 203,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 13:46:04',
                'updated_at' => '2022-12-20 13:46:04',
            ),
            473 => 
            array (
                'id' => 512,
                'document_id' => 202,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 13:47:13',
                'updated_at' => '2022-12-20 13:47:13',
            ),
            474 => 
            array (
                'id' => 514,
                'document_id' => 167,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 13:48:52',
                'updated_at' => '2022-12-20 13:48:52',
            ),
            475 => 
            array (
                'id' => 515,
                'document_id' => 240,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 13:50:57',
                'updated_at' => '2022-12-20 13:50:57',
            ),
            476 => 
            array (
                'id' => 516,
                'document_id' => 241,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 13:55:00',
                'updated_at' => '2022-12-20 13:55:00',
            ),
            477 => 
            array (
                'id' => 517,
                'document_id' => 242,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 13:56:59',
                'updated_at' => '2022-12-20 13:56:59',
            ),
            478 => 
            array (
                'id' => 518,
                'document_id' => 243,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 13:59:26',
                'updated_at' => '2022-12-20 13:59:26',
            ),
            479 => 
            array (
                'id' => 519,
                'document_id' => 244,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:02:16',
                'updated_at' => '2022-12-20 14:02:16',
            ),
            480 => 
            array (
                'id' => 520,
                'document_id' => 245,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:03:45',
                'updated_at' => '2022-12-20 14:03:45',
            ),
            481 => 
            array (
                'id' => 521,
                'document_id' => 246,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:05:54',
                'updated_at' => '2022-12-20 14:05:54',
            ),
            482 => 
            array (
                'id' => 522,
                'document_id' => 247,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:07:49',
                'updated_at' => '2022-12-20 14:07:49',
            ),
            483 => 
            array (
                'id' => 523,
                'document_id' => 248,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:10:06',
                'updated_at' => '2022-12-20 14:10:06',
            ),
            484 => 
            array (
                'id' => 524,
                'document_id' => 248,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-20 14:11:19',
                'updated_at' => '2022-12-20 14:11:19',
            ),
            485 => 
            array (
                'id' => 525,
                'document_id' => 239,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-20 14:11:38',
                'updated_at' => '2022-12-20 14:11:38',
            ),
            486 => 
            array (
                'id' => 526,
                'document_id' => 240,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-20 14:11:56',
                'updated_at' => '2022-12-20 14:11:56',
            ),
            487 => 
            array (
                'id' => 527,
                'document_id' => 241,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-20 14:12:15',
                'updated_at' => '2022-12-20 14:12:15',
            ),
            488 => 
            array (
                'id' => 528,
                'document_id' => 242,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-20 14:12:33',
                'updated_at' => '2022-12-20 14:12:33',
            ),
            489 => 
            array (
                'id' => 529,
                'document_id' => 249,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:12:45',
                'updated_at' => '2022-12-20 14:12:45',
            ),
            490 => 
            array (
                'id' => 530,
                'document_id' => 243,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-20 14:12:48',
                'updated_at' => '2022-12-20 14:12:48',
            ),
            491 => 
            array (
                'id' => 531,
                'document_id' => 244,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-20 14:13:05',
                'updated_at' => '2022-12-20 14:13:05',
            ),
            492 => 
            array (
                'id' => 532,
                'document_id' => 245,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-20 14:13:21',
                'updated_at' => '2022-12-20 14:13:21',
            ),
            493 => 
            array (
                'id' => 533,
                'document_id' => 246,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-20 14:13:37',
                'updated_at' => '2022-12-20 14:13:37',
            ),
            494 => 
            array (
                'id' => 534,
                'document_id' => 247,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-20 14:13:57',
                'updated_at' => '2022-12-20 14:13:57',
            ),
            495 => 
            array (
                'id' => 535,
                'document_id' => 249,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-20 14:14:50',
                'updated_at' => '2022-12-20 14:14:50',
            ),
            496 => 
            array (
                'id' => 536,
                'document_id' => 250,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:16:04',
                'updated_at' => '2022-12-20 14:16:04',
            ),
            497 => 
            array (
                'id' => 537,
                'document_id' => 251,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:16:22',
                'updated_at' => '2022-12-20 14:16:22',
            ),
            498 => 
            array (
                'id' => 538,
                'document_id' => 252,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:17:02',
                'updated_at' => '2022-12-20 14:17:02',
            ),
            499 => 
            array (
                'id' => 539,
                'document_id' => 253,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:23:04',
                'updated_at' => '2022-12-20 14:23:04',
            ),
        ));
        \DB::table('doc_routes')->insert(array (
            0 => 
            array (
                'id' => 540,
                'document_id' => 251,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-20 14:23:39',
                'updated_at' => '2022-12-20 14:23:39',
            ),
            1 => 
            array (
                'id' => 541,
                'document_id' => 254,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:24:19',
                'updated_at' => '2022-12-20 14:24:19',
            ),
            2 => 
            array (
                'id' => 542,
                'document_id' => 255,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:25:34',
                'updated_at' => '2022-12-20 14:25:34',
            ),
            3 => 
            array (
                'id' => 543,
                'document_id' => 256,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:29:52',
                'updated_at' => '2022-12-20 14:29:52',
            ),
            4 => 
            array (
                'id' => 544,
                'document_id' => 257,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:33:54',
                'updated_at' => '2022-12-20 14:33:54',
            ),
            5 => 
            array (
                'id' => 545,
                'document_id' => 258,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:41:04',
                'updated_at' => '2022-12-20 14:41:04',
            ),
            6 => 
            array (
                'id' => 546,
                'document_id' => 259,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 14:43:07',
                'updated_at' => '2022-12-20 14:43:07',
            ),
            7 => 
            array (
                'id' => 548,
                'document_id' => 261,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 14:53:22',
                'updated_at' => '2022-12-20 14:53:22',
            ),
            8 => 
            array (
                'id' => 552,
                'document_id' => 265,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 15:02:06',
                'updated_at' => '2022-12-20 15:02:06',
            ),
            9 => 
            array (
                'id' => 554,
                'document_id' => 267,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 15:04:12',
                'updated_at' => '2022-12-20 15:04:12',
            ),
            10 => 
            array (
                'id' => 555,
                'document_id' => 268,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-20 15:06:49',
                'updated_at' => '2022-12-20 15:06:49',
            ),
            11 => 
            array (
                'id' => 556,
                'document_id' => 269,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 15:08:14',
                'updated_at' => '2022-12-20 15:08:14',
            ),
            12 => 
            array (
                'id' => 557,
                'document_id' => 270,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 15:10:47',
                'updated_at' => '2022-12-20 15:10:47',
            ),
            13 => 
            array (
                'id' => 558,
                'document_id' => 268,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-20 15:11:15',
                'updated_at' => '2022-12-20 15:11:15',
            ),
            14 => 
            array (
                'id' => 559,
                'document_id' => 271,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 15:11:40',
                'updated_at' => '2022-12-20 15:11:40',
            ),
            15 => 
            array (
                'id' => 560,
                'document_id' => 272,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 15:12:40',
                'updated_at' => '2022-12-20 15:12:40',
            ),
            16 => 
            array (
                'id' => 561,
                'document_id' => 273,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 15:13:04',
                'updated_at' => '2022-12-20 15:13:04',
            ),
            17 => 
            array (
                'id' => 562,
                'document_id' => 274,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 15:13:49',
                'updated_at' => '2022-12-20 15:13:49',
            ),
            18 => 
            array (
                'id' => 563,
                'document_id' => 275,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 15:14:29',
                'updated_at' => '2022-12-20 15:14:29',
            ),
            19 => 
            array (
                'id' => 564,
                'document_id' => 276,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 15:15:22',
                'updated_at' => '2022-12-20 15:15:22',
            ),
            20 => 
            array (
                'id' => 565,
                'document_id' => 277,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 15:16:02',
                'updated_at' => '2022-12-20 15:16:02',
            ),
            21 => 
            array (
                'id' => 566,
                'document_id' => 278,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 15:16:38',
                'updated_at' => '2022-12-20 15:16:38',
            ),
            22 => 
            array (
                'id' => 568,
                'document_id' => 279,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 15:23:36',
                'updated_at' => '2022-12-20 15:23:36',
            ),
            23 => 
            array (
                'id' => 569,
                'document_id' => 280,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-20 15:26:21',
                'updated_at' => '2022-12-20 15:26:21',
            ),
            24 => 
            array (
                'id' => 570,
                'document_id' => 281,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-20 15:28:45',
                'updated_at' => '2022-12-20 15:28:45',
            ),
            25 => 
            array (
                'id' => 571,
                'document_id' => 282,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-20 15:40:00',
                'updated_at' => '2022-12-20 15:40:00',
            ),
            26 => 
            array (
                'id' => 572,
                'document_id' => 283,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-20 15:41:08',
                'updated_at' => '2022-12-20 15:41:08',
            ),
            27 => 
            array (
                'id' => 573,
                'document_id' => 284,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-20 15:41:44',
                'updated_at' => '2022-12-20 15:41:44',
            ),
            28 => 
            array (
                'id' => 574,
                'document_id' => 285,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 16:46:27',
                'updated_at' => '2022-12-20 16:46:27',
            ),
            29 => 
            array (
                'id' => 575,
                'document_id' => 286,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 16:47:19',
                'updated_at' => '2022-12-20 16:47:19',
            ),
            30 => 
            array (
                'id' => 576,
                'document_id' => 287,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 16:48:12',
                'updated_at' => '2022-12-20 16:48:12',
            ),
            31 => 
            array (
                'id' => 577,
                'document_id' => 288,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 16:49:19',
                'updated_at' => '2022-12-20 16:49:19',
            ),
            32 => 
            array (
                'id' => 578,
                'document_id' => 289,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-20 16:51:27',
                'updated_at' => '2022-12-20 16:51:27',
            ),
            33 => 
            array (
                'id' => 580,
                'document_id' => 182,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 08:18:02',
                'updated_at' => '2022-12-21 08:18:02',
            ),
            34 => 
            array (
                'id' => 581,
                'document_id' => 183,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 08:19:54',
                'updated_at' => '2022-12-21 08:19:54',
            ),
            35 => 
            array (
                'id' => 582,
                'document_id' => 141,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 08:23:06',
                'updated_at' => '2022-12-21 08:23:06',
            ),
            36 => 
            array (
                'id' => 583,
                'document_id' => 185,
                'user_id' => 1,
                'remarks' => 'is this not yet capable to be processed using the procurement system?',
                'created_at' => '2022-12-21 08:25:06',
                'updated_at' => '2022-12-21 08:25:06',
            ),
            37 => 
            array (
                'id' => 584,
                'document_id' => 33,
                'user_id' => 1,
                'remarks' => 'WHY NO ACTION ON THIS DOCUMENT?',
                'created_at' => '2022-12-21 08:41:09',
                'updated_at' => '2022-12-21 08:41:09',
            ),
            38 => 
            array (
                'id' => 585,
                'document_id' => 17,
                'user_id' => 2,
                'remarks' => 'correction made',
                'created_at' => '2022-12-21 08:41:11',
                'updated_at' => '2022-12-21 08:41:11',
            ),
            39 => 
            array (
                'id' => 586,
                'document_id' => 105,
                'user_id' => 1,
                'remarks' => 'Prepare endorsement to CO for reasons stated therein',
                'created_at' => '2022-12-21 08:42:47',
                'updated_at' => '2022-12-21 08:42:47',
            ),
            40 => 
            array (
                'id' => 587,
                'document_id' => 142,
                'user_id' => 1,
                'remarks' => 'except Dec 23. No assessment on that date',
                'created_at' => '2022-12-21 08:55:46',
                'updated_at' => '2022-12-21 08:55:46',
            ),
            41 => 
            array (
                'id' => 588,
                'document_id' => 153,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-21 08:58:22',
                'updated_at' => '2022-12-21 08:58:22',
            ),
            42 => 
            array (
                'id' => 589,
                'document_id' => 290,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:10:04',
                'updated_at' => '2022-12-21 09:10:04',
            ),
            43 => 
            array (
                'id' => 590,
                'document_id' => 291,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:11:24',
                'updated_at' => '2022-12-21 09:11:24',
            ),
            44 => 
            array (
                'id' => 591,
                'document_id' => 292,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:12:37',
                'updated_at' => '2022-12-21 09:12:37',
            ),
            45 => 
            array (
                'id' => 592,
                'document_id' => 293,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:13:22',
                'updated_at' => '2022-12-21 09:13:22',
            ),
            46 => 
            array (
                'id' => 593,
                'document_id' => 294,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:14:23',
                'updated_at' => '2022-12-21 09:14:23',
            ),
            47 => 
            array (
                'id' => 594,
                'document_id' => 295,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:15:18',
                'updated_at' => '2022-12-21 09:15:18',
            ),
            48 => 
            array (
                'id' => 595,
                'document_id' => 154,
                'user_id' => 1,
                'remarks' => 'No assessment schedule on December 23',
                'created_at' => '2022-12-21 09:15:59',
                'updated_at' => '2022-12-21 09:15:59',
            ),
            49 => 
            array (
                'id' => 596,
                'document_id' => 296,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:17:04',
                'updated_at' => '2022-12-21 09:17:04',
            ),
            50 => 
            array (
                'id' => 597,
                'document_id' => 276,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-21 09:17:25',
                'updated_at' => '2022-12-21 09:17:25',
            ),
            51 => 
            array (
                'id' => 598,
                'document_id' => 297,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:19:41',
                'updated_at' => '2022-12-21 09:19:41',
            ),
            52 => 
            array (
                'id' => 599,
                'document_id' => 298,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:20:27',
                'updated_at' => '2022-12-21 09:20:27',
            ),
            53 => 
            array (
                'id' => 600,
                'document_id' => 299,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:21:18',
                'updated_at' => '2022-12-21 09:21:18',
            ),
            54 => 
            array (
                'id' => 601,
                'document_id' => 300,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:22:37',
                'updated_at' => '2022-12-21 09:22:37',
            ),
            55 => 
            array (
                'id' => 602,
                'document_id' => 301,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:23:25',
                'updated_at' => '2022-12-21 09:23:25',
            ),
            56 => 
            array (
                'id' => 603,
                'document_id' => 302,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:24:16',
                'updated_at' => '2022-12-21 09:24:16',
            ),
            57 => 
            array (
                'id' => 604,
                'document_id' => 303,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:25:34',
                'updated_at' => '2022-12-21 09:25:34',
            ),
            58 => 
            array (
                'id' => 605,
                'document_id' => 304,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:32:35',
                'updated_at' => '2022-12-21 09:32:35',
            ),
            59 => 
            array (
                'id' => 607,
                'document_id' => 290,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 09:37:24',
                'updated_at' => '2022-12-21 09:37:24',
            ),
            60 => 
            array (
                'id' => 608,
                'document_id' => 306,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:37:32',
                'updated_at' => '2022-12-21 09:37:32',
            ),
            61 => 
            array (
                'id' => 609,
                'document_id' => 291,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 09:39:15',
                'updated_at' => '2022-12-21 09:39:15',
            ),
            62 => 
            array (
                'id' => 610,
                'document_id' => 307,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 09:41:09',
                'updated_at' => '2022-12-21 09:41:09',
            ),
            63 => 
            array (
                'id' => 611,
                'document_id' => 292,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 09:41:34',
                'updated_at' => '2022-12-21 09:41:34',
            ),
            64 => 
            array (
                'id' => 612,
                'document_id' => 171,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 09:44:05',
                'updated_at' => '2022-12-21 09:44:05',
            ),
            65 => 
            array (
                'id' => 613,
                'document_id' => 172,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 09:45:29',
                'updated_at' => '2022-12-21 09:45:29',
            ),
            66 => 
            array (
                'id' => 614,
                'document_id' => 257,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 09:47:40',
                'updated_at' => '2022-12-21 09:47:40',
            ),
            67 => 
            array (
                'id' => 615,
                'document_id' => 173,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 09:48:53',
                'updated_at' => '2022-12-21 09:48:53',
            ),
            68 => 
            array (
                'id' => 616,
                'document_id' => 143,
                'user_id' => 1,
                'remarks' => 'No attachment',
                'created_at' => '2022-12-21 09:51:26',
                'updated_at' => '2022-12-21 09:51:26',
            ),
            69 => 
            array (
                'id' => 617,
                'document_id' => 274,
                'user_id' => 1,
                'remarks' => 'approved except Dec. 23 and 30. NO assessment on this dates',
                'created_at' => '2022-12-21 09:53:04',
                'updated_at' => '2022-12-21 09:53:04',
            ),
            70 => 
            array (
                'id' => 618,
                'document_id' => 174,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 09:59:19',
                'updated_at' => '2022-12-21 09:59:19',
            ),
            71 => 
            array (
                'id' => 619,
                'document_id' => 175,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 10:00:51',
                'updated_at' => '2022-12-21 10:00:51',
            ),
            72 => 
            array (
                'id' => 620,
                'document_id' => 178,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 10:05:35',
                'updated_at' => '2022-12-21 10:05:35',
            ),
            73 => 
            array (
                'id' => 621,
                'document_id' => 143,
                'user_id' => 35,
                'remarks' => 'Good Day RD, sorry po. Na attach ko na po yung document. Thank you.',
                'created_at' => '2022-12-21 10:30:19',
                'updated_at' => '2022-12-21 10:30:19',
            ),
            74 => 
            array (
                'id' => 622,
                'document_id' => 308,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 11:36:35',
                'updated_at' => '2022-12-21 11:36:35',
            ),
            75 => 
            array (
                'id' => 623,
                'document_id' => 309,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 11:39:51',
                'updated_at' => '2022-12-21 11:39:51',
            ),
            76 => 
            array (
                'id' => 624,
                'document_id' => 309,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-21 11:47:12',
                'updated_at' => '2022-12-21 11:47:12',
            ),
            77 => 
            array (
                'id' => 625,
                'document_id' => 308,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-21 11:47:29',
                'updated_at' => '2022-12-21 11:47:29',
            ),
            78 => 
            array (
                'id' => 626,
                'document_id' => 310,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 11:49:36',
                'updated_at' => '2022-12-21 11:49:36',
            ),
            79 => 
            array (
                'id' => 627,
                'document_id' => 311,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 11:50:58',
                'updated_at' => '2022-12-21 11:50:58',
            ),
            80 => 
            array (
                'id' => 628,
                'document_id' => 312,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 11:51:41',
                'updated_at' => '2022-12-21 11:51:41',
            ),
            81 => 
            array (
                'id' => 629,
                'document_id' => 204,
                'user_id' => 5,
                'remarks' => NULL,
                'created_at' => '2022-12-21 12:41:41',
                'updated_at' => '2022-12-21 12:41:41',
            ),
            82 => 
            array (
                'id' => 630,
                'document_id' => 204,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-21 12:57:27',
                'updated_at' => '2022-12-21 12:57:27',
            ),
            83 => 
            array (
                'id' => 632,
                'document_id' => 32,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 13:36:00',
                'updated_at' => '2022-12-21 13:36:00',
            ),
            84 => 
            array (
                'id' => 633,
                'document_id' => 313,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 14:38:00',
                'updated_at' => '2022-12-21 14:38:00',
            ),
            85 => 
            array (
                'id' => 634,
                'document_id' => 179,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 14:44:42',
                'updated_at' => '2022-12-21 14:44:42',
            ),
            86 => 
            array (
                'id' => 635,
                'document_id' => 314,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 15:09:56',
                'updated_at' => '2022-12-21 15:09:56',
            ),
            87 => 
            array (
                'id' => 636,
                'document_id' => 128,
                'user_id' => 5,
                'remarks' => NULL,
                'created_at' => '2022-12-21 15:11:27',
                'updated_at' => '2022-12-21 15:11:27',
            ),
            88 => 
            array (
                'id' => 637,
                'document_id' => 315,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 15:11:32',
                'updated_at' => '2022-12-21 15:11:32',
            ),
            89 => 
            array (
                'id' => 638,
                'document_id' => 131,
                'user_id' => 5,
                'remarks' => NULL,
                'created_at' => '2022-12-21 15:11:59',
                'updated_at' => '2022-12-21 15:11:59',
            ),
            90 => 
            array (
                'id' => 639,
                'document_id' => 316,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 15:12:19',
                'updated_at' => '2022-12-21 15:12:19',
            ),
            91 => 
            array (
                'id' => 640,
                'document_id' => 317,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 15:14:33',
                'updated_at' => '2022-12-21 15:14:33',
            ),
            92 => 
            array (
                'id' => 641,
                'document_id' => 318,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 15:16:07',
                'updated_at' => '2022-12-21 15:16:07',
            ),
            93 => 
            array (
                'id' => 642,
                'document_id' => 319,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 15:17:28',
                'updated_at' => '2022-12-21 15:17:28',
            ),
            94 => 
            array (
                'id' => 643,
                'document_id' => 320,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 15:18:18',
                'updated_at' => '2022-12-21 15:18:18',
            ),
            95 => 
            array (
                'id' => 644,
                'document_id' => 321,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 15:19:00',
                'updated_at' => '2022-12-21 15:19:00',
            ),
            96 => 
            array (
                'id' => 645,
                'document_id' => 232,
                'user_id' => 26,
                'remarks' => 'JA, ang application ni Oaing... CTO and sick leave.. which is final? thanks',
                'created_at' => '2022-12-21 15:20:30',
                'updated_at' => '2022-12-21 15:20:30',
            ),
            97 => 
            array (
                'id' => 646,
                'document_id' => 322,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 15:20:57',
                'updated_at' => '2022-12-21 15:20:57',
            ),
            98 => 
            array (
                'id' => 647,
                'document_id' => 323,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 15:21:33',
                'updated_at' => '2022-12-21 15:21:33',
            ),
            99 => 
            array (
                'id' => 649,
                'document_id' => 325,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 15:23:00',
                'updated_at' => '2022-12-21 15:23:00',
            ),
            100 => 
            array (
                'id' => 651,
                'document_id' => 326,
                'user_id' => 4,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 15:28:46',
                'updated_at' => '2022-12-21 15:28:46',
            ),
            101 => 
            array (
                'id' => 652,
                'document_id' => 327,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 15:32:29',
                'updated_at' => '2022-12-21 15:32:29',
            ),
            102 => 
            array (
                'id' => 653,
                'document_id' => 30,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 15:33:08',
                'updated_at' => '2022-12-21 15:33:08',
            ),
            103 => 
            array (
                'id' => 654,
                'document_id' => 328,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 15:33:36',
                'updated_at' => '2022-12-21 15:33:36',
            ),
            104 => 
            array (
                'id' => 655,
                'document_id' => 329,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 15:34:37',
                'updated_at' => '2022-12-21 15:34:37',
            ),
            105 => 
            array (
                'id' => 656,
                'document_id' => 330,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 15:35:30',
                'updated_at' => '2022-12-21 15:35:30',
            ),
            106 => 
            array (
                'id' => 657,
                'document_id' => 33,
                'user_id' => 26,
                'remarks' => 'Hello RD, already emailed sa PTC Capiz . FYI Sir. Thanks po',
                'created_at' => '2022-12-21 15:37:25',
                'updated_at' => '2022-12-21 15:37:25',
            ),
            107 => 
            array (
                'id' => 658,
                'document_id' => 100,
                'user_id' => 26,
                'remarks' => 'For Referral to TESDA CO-HRMD since this involves change of plantilla item number. Thanks',
                'created_at' => '2022-12-21 15:40:33',
                'updated_at' => '2022-12-21 15:40:33',
            ),
            108 => 
            array (
                'id' => 659,
                'document_id' => 238,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 15:42:38',
                'updated_at' => '2022-12-21 15:42:38',
            ),
            109 => 
            array (
                'id' => 660,
                'document_id' => 65,
                'user_id' => 26,
                'remarks' => 'Sir reviewed na po. FYI . Thanks',
                'created_at' => '2022-12-21 15:44:05',
                'updated_at' => '2022-12-21 15:44:05',
            ),
            110 => 
            array (
                'id' => 661,
                'document_id' => 331,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 15:44:30',
                'updated_at' => '2022-12-21 15:44:30',
            ),
            111 => 
            array (
                'id' => 662,
                'document_id' => 170,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 15:45:25',
                'updated_at' => '2022-12-21 15:45:25',
            ),
            112 => 
            array (
                'id' => 663,
                'document_id' => 103,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 15:46:40',
                'updated_at' => '2022-12-21 15:46:40',
            ),
            113 => 
            array (
                'id' => 664,
                'document_id' => 31,
                'user_id' => 26,
                'remarks' => 'Sir, we discussed this concern with PD Esther.  IPO budget officer already submitted the projected expenses and LAA was already prepared. FYI po. Thanks RD',
                'created_at' => '2022-12-21 15:51:57',
                'updated_at' => '2022-12-21 15:51:57',
            ),
            114 => 
            array (
                'id' => 665,
                'document_id' => 169,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 15:55:46',
                'updated_at' => '2022-12-21 15:55:46',
            ),
            115 => 
            array (
                'id' => 666,
                'document_id' => 34,
                'user_id' => 26,
                'remarks' => 'Ja, pls draft memo. TY',
                'created_at' => '2022-12-21 15:56:33',
                'updated_at' => '2022-12-21 15:56:33',
            ),
            116 => 
            array (
                'id' => 667,
                'document_id' => 168,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 15:58:05',
                'updated_at' => '2022-12-21 15:58:05',
            ),
            117 => 
            array (
                'id' => 668,
                'document_id' => 166,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 15:59:31',
                'updated_at' => '2022-12-21 15:59:31',
            ),
            118 => 
            array (
                'id' => 669,
                'document_id' => 162,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 16:04:15',
                'updated_at' => '2022-12-21 16:04:15',
            ),
            119 => 
            array (
                'id' => 670,
                'document_id' => 157,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 16:06:31',
                'updated_at' => '2022-12-21 16:06:31',
            ),
            120 => 
            array (
                'id' => 671,
                'document_id' => 332,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 16:10:14',
                'updated_at' => '2022-12-21 16:10:14',
            ),
            121 => 
            array (
                'id' => 672,
                'document_id' => 333,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 16:12:34',
                'updated_at' => '2022-12-21 16:12:34',
            ),
            122 => 
            array (
                'id' => 673,
                'document_id' => 202,
                'user_id' => 26,
                'remarks' => 'Already signed. FYI',
                'created_at' => '2022-12-21 16:14:07',
                'updated_at' => '2022-12-21 16:14:07',
            ),
            123 => 
            array (
                'id' => 674,
                'document_id' => 151,
                'user_id' => 26,
                'remarks' => 'Already signed. FYI',
                'created_at' => '2022-12-21 16:16:53',
                'updated_at' => '2022-12-21 16:16:53',
            ),
            124 => 
            array (
                'id' => 675,
                'document_id' => 334,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 16:18:58',
                'updated_at' => '2022-12-21 16:18:58',
            ),
            125 => 
            array (
                'id' => 676,
                'document_id' => 335,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 16:25:21',
                'updated_at' => '2022-12-21 16:25:21',
            ),
            126 => 
            array (
                'id' => 677,
                'document_id' => 336,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 16:26:25',
                'updated_at' => '2022-12-21 16:26:25',
            ),
            127 => 
            array (
                'id' => 678,
                'document_id' => 337,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 16:27:06',
                'updated_at' => '2022-12-21 16:27:06',
            ),
            128 => 
            array (
                'id' => 679,
                'document_id' => 338,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 16:27:44',
                'updated_at' => '2022-12-21 16:27:44',
            ),
            129 => 
            array (
                'id' => 680,
                'document_id' => 339,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 16:28:27',
                'updated_at' => '2022-12-21 16:28:27',
            ),
            130 => 
            array (
                'id' => 681,
                'document_id' => 340,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 16:28:53',
                'updated_at' => '2022-12-21 16:28:53',
            ),
            131 => 
            array (
                'id' => 682,
                'document_id' => 341,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 16:30:07',
                'updated_at' => '2022-12-21 16:30:07',
            ),
            132 => 
            array (
                'id' => 683,
                'document_id' => 342,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 16:31:36',
                'updated_at' => '2022-12-21 16:31:36',
            ),
            133 => 
            array (
                'id' => 684,
                'document_id' => 55,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 16:33:31',
                'updated_at' => '2022-12-21 16:33:31',
            ),
            134 => 
            array (
                'id' => 685,
                'document_id' => 343,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 16:33:56',
                'updated_at' => '2022-12-21 16:33:56',
            ),
            135 => 
            array (
                'id' => 686,
                'document_id' => 344,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 16:34:23',
                'updated_at' => '2022-12-21 16:34:23',
            ),
            136 => 
            array (
                'id' => 687,
                'document_id' => 64,
                'user_id' => 26,
                'remarks' => 'Ja, let us discuss',
                'created_at' => '2022-12-21 16:34:47',
                'updated_at' => '2022-12-21 16:34:47',
            ),
            137 => 
            array (
                'id' => 688,
                'document_id' => 102,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 16:36:20',
                'updated_at' => '2022-12-21 16:36:20',
            ),
            138 => 
            array (
                'id' => 689,
                'document_id' => 104,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 16:37:30',
                'updated_at' => '2022-12-21 16:37:30',
            ),
            139 => 
            array (
                'id' => 690,
                'document_id' => 101,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 16:38:38',
                'updated_at' => '2022-12-21 16:38:38',
            ),
            140 => 
            array (
                'id' => 691,
                'document_id' => 97,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-21 16:40:19',
                'updated_at' => '2022-12-21 16:40:19',
            ),
            141 => 
            array (
                'id' => 692,
                'document_id' => 345,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 16:41:47',
                'updated_at' => '2022-12-21 16:41:47',
            ),
            142 => 
            array (
                'id' => 693,
                'document_id' => 313,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 16:42:08',
                'updated_at' => '2022-12-21 16:42:08',
            ),
            143 => 
            array (
                'id' => 694,
                'document_id' => 346,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 16:42:21',
                'updated_at' => '2022-12-21 16:42:21',
            ),
            144 => 
            array (
                'id' => 695,
                'document_id' => 261,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 16:43:29',
                'updated_at' => '2022-12-21 16:43:29',
            ),
            145 => 
            array (
                'id' => 696,
                'document_id' => 347,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 16:43:35',
                'updated_at' => '2022-12-21 16:43:35',
            ),
            146 => 
            array (
                'id' => 697,
                'document_id' => 348,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 16:44:14',
                'updated_at' => '2022-12-21 16:44:14',
            ),
            147 => 
            array (
                'id' => 698,
                'document_id' => 152,
                'user_id' => 26,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 16:44:33',
                'updated_at' => '2022-12-21 16:44:33',
            ),
            148 => 
            array (
                'id' => 699,
                'document_id' => 349,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 16:44:51',
                'updated_at' => '2022-12-21 16:44:51',
            ),
            149 => 
            array (
                'id' => 700,
                'document_id' => 167,
                'user_id' => 26,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 16:44:58',
                'updated_at' => '2022-12-21 16:44:58',
            ),
            150 => 
            array (
                'id' => 701,
                'document_id' => 203,
                'user_id' => 26,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 16:45:16',
                'updated_at' => '2022-12-21 16:45:16',
            ),
            151 => 
            array (
                'id' => 702,
                'document_id' => 350,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 16:45:31',
                'updated_at' => '2022-12-21 16:45:31',
            ),
            152 => 
            array (
                'id' => 703,
                'document_id' => 351,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 16:46:29',
                'updated_at' => '2022-12-21 16:46:29',
            ),
            153 => 
            array (
                'id' => 704,
                'document_id' => 352,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 16:47:17',
                'updated_at' => '2022-12-21 16:47:17',
            ),
            154 => 
            array (
                'id' => 705,
                'document_id' => 353,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 16:47:52',
                'updated_at' => '2022-12-21 16:47:52',
            ),
            155 => 
            array (
                'id' => 706,
                'document_id' => 354,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-21 16:48:23',
                'updated_at' => '2022-12-21 16:48:23',
            ),
            156 => 
            array (
                'id' => 707,
                'document_id' => 293,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 16:49:05',
                'updated_at' => '2022-12-21 16:49:05',
            ),
            157 => 
            array (
                'id' => 708,
                'document_id' => 294,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 16:50:28',
                'updated_at' => '2022-12-21 16:50:28',
            ),
            158 => 
            array (
                'id' => 709,
                'document_id' => 326,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-21 16:51:13',
                'updated_at' => '2022-12-21 16:51:13',
            ),
            159 => 
            array (
                'id' => 710,
                'document_id' => 295,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 16:51:31',
                'updated_at' => '2022-12-21 16:51:31',
            ),
            160 => 
            array (
                'id' => 711,
                'document_id' => 296,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 16:52:21',
                'updated_at' => '2022-12-21 16:52:21',
            ),
            161 => 
            array (
                'id' => 712,
                'document_id' => 355,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 17:03:18',
                'updated_at' => '2022-12-21 17:03:18',
            ),
            162 => 
            array (
                'id' => 713,
                'document_id' => 297,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 17:03:26',
                'updated_at' => '2022-12-21 17:03:26',
            ),
            163 => 
            array (
                'id' => 714,
                'document_id' => 356,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 17:03:54',
                'updated_at' => '2022-12-21 17:03:54',
            ),
            164 => 
            array (
                'id' => 715,
                'document_id' => 298,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 17:05:09',
                'updated_at' => '2022-12-21 17:05:09',
            ),
            165 => 
            array (
                'id' => 716,
                'document_id' => 357,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 17:05:16',
                'updated_at' => '2022-12-21 17:05:16',
            ),
            166 => 
            array (
                'id' => 717,
                'document_id' => 358,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 17:05:44',
                'updated_at' => '2022-12-21 17:05:44',
            ),
            167 => 
            array (
                'id' => 718,
                'document_id' => 359,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 17:06:16',
                'updated_at' => '2022-12-21 17:06:16',
            ),
            168 => 
            array (
                'id' => 719,
                'document_id' => 360,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 17:06:31',
                'updated_at' => '2022-12-21 17:06:31',
            ),
            169 => 
            array (
                'id' => 720,
                'document_id' => 361,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 17:06:46',
                'updated_at' => '2022-12-21 17:06:46',
            ),
            170 => 
            array (
                'id' => 721,
                'document_id' => 362,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-21 17:07:14',
                'updated_at' => '2022-12-21 17:07:14',
            ),
            171 => 
            array (
                'id' => 722,
                'document_id' => 363,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 17:07:54',
                'updated_at' => '2022-12-21 17:07:54',
            ),
            172 => 
            array (
                'id' => 723,
                'document_id' => 364,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 17:08:56',
                'updated_at' => '2022-12-21 17:08:56',
            ),
            173 => 
            array (
                'id' => 724,
                'document_id' => 365,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 17:22:14',
                'updated_at' => '2022-12-21 17:22:14',
            ),
            174 => 
            array (
                'id' => 725,
                'document_id' => 366,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 17:24:14',
                'updated_at' => '2022-12-21 17:24:14',
            ),
            175 => 
            array (
                'id' => 726,
                'document_id' => 367,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 17:25:52',
                'updated_at' => '2022-12-21 17:25:52',
            ),
            176 => 
            array (
                'id' => 727,
                'document_id' => 368,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 17:28:52',
                'updated_at' => '2022-12-21 17:28:52',
            ),
            177 => 
            array (
                'id' => 728,
                'document_id' => 304,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 17:34:31',
                'updated_at' => '2022-12-21 17:34:31',
            ),
            178 => 
            array (
                'id' => 729,
                'document_id' => 299,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 17:35:25',
                'updated_at' => '2022-12-21 17:35:25',
            ),
            179 => 
            array (
                'id' => 730,
                'document_id' => 206,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-21 17:36:23',
                'updated_at' => '2022-12-21 17:36:23',
            ),
            180 => 
            array (
                'id' => 731,
                'document_id' => 300,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 17:37:02',
                'updated_at' => '2022-12-21 17:37:02',
            ),
            181 => 
            array (
                'id' => 732,
                'document_id' => 227,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-21 17:37:02',
                'updated_at' => '2022-12-21 17:37:02',
            ),
            182 => 
            array (
                'id' => 733,
                'document_id' => 309,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 17:38:45',
                'updated_at' => '2022-12-21 17:38:45',
            ),
            183 => 
            array (
                'id' => 734,
                'document_id' => 276,
                'user_id' => 3,
                'remarks' => 'Kindly check and verify the New Assessor\'s accreditation.',
                'created_at' => '2022-12-21 17:39:24',
                'updated_at' => '2022-12-21 17:39:24',
            ),
            184 => 
            array (
                'id' => 735,
                'document_id' => 318,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 17:39:43',
                'updated_at' => '2022-12-21 17:39:43',
            ),
            185 => 
            array (
                'id' => 736,
                'document_id' => 274,
                'user_id' => 3,
                'remarks' => 'Kindly take note of RD\'s remarks.',
                'created_at' => '2022-12-21 17:40:22',
                'updated_at' => '2022-12-21 17:40:22',
            ),
            186 => 
            array (
                'id' => 737,
                'document_id' => 147,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-21 17:40:40',
                'updated_at' => '2022-12-21 17:40:40',
            ),
            187 => 
            array (
                'id' => 738,
                'document_id' => 148,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-21 17:41:20',
                'updated_at' => '2022-12-21 17:41:20',
            ),
            188 => 
            array (
                'id' => 739,
                'document_id' => 142,
                'user_id' => 3,
                'remarks' => 'Kindly take note of RD\'s remarks',
                'created_at' => '2022-12-21 18:52:32',
                'updated_at' => '2022-12-21 18:52:32',
            ),
            189 => 
            array (
                'id' => 740,
                'document_id' => 153,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-21 18:53:10',
                'updated_at' => '2022-12-21 18:53:10',
            ),
            190 => 
            array (
                'id' => 741,
                'document_id' => 154,
                'user_id' => 3,
                'remarks' => 'Kindly take note of RDs remarks.',
                'created_at' => '2022-12-21 18:54:10',
                'updated_at' => '2022-12-21 18:54:10',
            ),
            191 => 
            array (
                'id' => 742,
                'document_id' => 128,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-21 18:55:55',
                'updated_at' => '2022-12-21 18:55:55',
            ),
            192 => 
            array (
                'id' => 743,
                'document_id' => 131,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-21 18:57:09',
                'updated_at' => '2022-12-21 18:57:09',
            ),
            193 => 
            array (
                'id' => 744,
                'document_id' => 94,
                'user_id' => 3,
                'remarks' => 'kindly affix your initial before you route to me.',
                'created_at' => '2022-12-21 18:58:52',
                'updated_at' => '2022-12-21 18:58:52',
            ),
            194 => 
            array (
                'id' => 745,
                'document_id' => 93,
                'user_id' => 3,
                'remarks' => 'Signed',
                'created_at' => '2022-12-21 19:00:36',
                'updated_at' => '2022-12-21 19:00:36',
            ),
            195 => 
            array (
                'id' => 746,
                'document_id' => 98,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-21 19:01:28',
                'updated_at' => '2022-12-21 19:01:28',
            ),
            196 => 
            array (
                'id' => 747,
                'document_id' => 105,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-21 19:03:39',
                'updated_at' => '2022-12-21 19:03:39',
            ),
            197 => 
            array (
                'id' => 748,
                'document_id' => 63,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-21 19:05:02',
                'updated_at' => '2022-12-21 19:05:02',
            ),
            198 => 
            array (
                'id' => 749,
                'document_id' => 369,
                'user_id' => 4,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-21 23:53:05',
                'updated_at' => '2022-12-21 23:53:05',
            ),
            199 => 
            array (
                'id' => 750,
                'document_id' => 370,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-22 09:03:42',
                'updated_at' => '2022-12-22 09:03:42',
            ),
            200 => 
            array (
                'id' => 751,
                'document_id' => 151,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 09:05:32',
                'updated_at' => '2022-12-22 09:05:32',
            ),
            201 => 
            array (
                'id' => 752,
                'document_id' => 202,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 09:09:49',
                'updated_at' => '2022-12-22 09:09:49',
            ),
            202 => 
            array (
                'id' => 753,
                'document_id' => 371,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-22 09:10:39',
                'updated_at' => '2022-12-22 09:10:39',
            ),
            203 => 
            array (
                'id' => 754,
                'document_id' => 312,
                'user_id' => 34,
                'remarks' => 'Jen, kindly check attachment',
                'created_at' => '2022-12-22 09:11:00',
                'updated_at' => '2022-12-22 09:11:00',
            ),
            204 => 
            array (
                'id' => 755,
                'document_id' => 314,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 09:12:21',
                'updated_at' => '2022-12-22 09:12:21',
            ),
            205 => 
            array (
                'id' => 756,
                'document_id' => 301,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 09:58:30',
                'updated_at' => '2022-12-22 09:58:30',
            ),
            206 => 
            array (
                'id' => 757,
                'document_id' => 372,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 10:03:41',
                'updated_at' => '2022-12-22 10:03:41',
            ),
            207 => 
            array (
                'id' => 758,
                'document_id' => 370,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-22 10:04:31',
                'updated_at' => '2022-12-22 10:04:31',
            ),
            208 => 
            array (
                'id' => 760,
                'document_id' => 373,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 10:05:15',
                'updated_at' => '2022-12-22 10:05:15',
            ),
            209 => 
            array (
                'id' => 761,
                'document_id' => 315,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 10:08:23',
                'updated_at' => '2022-12-22 10:08:23',
            ),
            210 => 
            array (
                'id' => 763,
                'document_id' => 316,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 10:09:29',
                'updated_at' => '2022-12-22 10:09:29',
            ),
            211 => 
            array (
                'id' => 764,
                'document_id' => 312,
                'user_id' => 35,
                'remarks' => 'Hi Maam Ja, na attach ko napo ang form. sorry po',
                'created_at' => '2022-12-22 10:10:04',
                'updated_at' => '2022-12-22 10:10:04',
            ),
            212 => 
            array (
                'id' => 765,
                'document_id' => 334,
                'user_id' => 34,
                'remarks' => 'Please return to RTC Iloilo',
                'created_at' => '2022-12-22 10:11:05',
                'updated_at' => '2022-12-22 10:11:05',
            ),
            213 => 
            array (
                'id' => 766,
                'document_id' => 317,
                'user_id' => 34,
                'remarks' => 'Please encode leave balance',
                'created_at' => '2022-12-22 10:12:10',
                'updated_at' => '2022-12-22 10:12:10',
            ),
            214 => 
            array (
                'id' => 767,
                'document_id' => 335,
                'user_id' => 34,
                'remarks' => 'For filing',
                'created_at' => '2022-12-22 10:14:12',
                'updated_at' => '2022-12-22 10:14:12',
            ),
            215 => 
            array (
                'id' => 768,
                'document_id' => 374,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-22 10:15:16',
                'updated_at' => '2022-12-22 10:15:16',
            ),
            216 => 
            array (
                'id' => 769,
                'document_id' => 336,
                'user_id' => 34,
                'remarks' => 'For archive',
                'created_at' => '2022-12-22 10:18:36',
                'updated_at' => '2022-12-22 10:18:36',
            ),
            217 => 
            array (
                'id' => 770,
                'document_id' => 337,
                'user_id' => 34,
                'remarks' => 'For archive',
                'created_at' => '2022-12-22 10:20:22',
                'updated_at' => '2022-12-22 10:20:22',
            ),
            218 => 
            array (
                'id' => 771,
                'document_id' => 338,
                'user_id' => 34,
                'remarks' => 'For archive',
                'created_at' => '2022-12-22 10:21:00',
                'updated_at' => '2022-12-22 10:21:00',
            ),
            219 => 
            array (
                'id' => 772,
                'document_id' => 339,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 10:21:28',
                'updated_at' => '2022-12-22 10:21:28',
            ),
            220 => 
            array (
                'id' => 773,
                'document_id' => 340,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 10:22:01',
                'updated_at' => '2022-12-22 10:22:01',
            ),
            221 => 
            array (
                'id' => 774,
                'document_id' => 375,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 10:23:58',
                'updated_at' => '2022-12-22 10:23:58',
            ),
            222 => 
            array (
                'id' => 775,
                'document_id' => 355,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 10:25:32',
                'updated_at' => '2022-12-22 10:25:32',
            ),
            223 => 
            array (
                'id' => 776,
                'document_id' => 356,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 10:28:04',
                'updated_at' => '2022-12-22 10:28:04',
            ),
            224 => 
            array (
                'id' => 777,
                'document_id' => 357,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 10:28:34',
                'updated_at' => '2022-12-22 10:28:34',
            ),
            225 => 
            array (
                'id' => 778,
                'document_id' => 358,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 10:28:59',
                'updated_at' => '2022-12-22 10:28:59',
            ),
            226 => 
            array (
                'id' => 779,
                'document_id' => 359,
                'user_id' => 34,
                'remarks' => 'For leave balance',
                'created_at' => '2022-12-22 10:29:42',
                'updated_at' => '2022-12-22 10:29:42',
            ),
            227 => 
            array (
                'id' => 780,
                'document_id' => 361,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 10:30:49',
                'updated_at' => '2022-12-22 10:30:49',
            ),
            228 => 
            array (
                'id' => 781,
                'document_id' => 362,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 10:31:25',
                'updated_at' => '2022-12-22 10:31:25',
            ),
            229 => 
            array (
                'id' => 782,
                'document_id' => 302,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 10:31:50',
                'updated_at' => '2022-12-22 10:31:50',
            ),
            230 => 
            array (
                'id' => 783,
                'document_id' => 232,
                'user_id' => 34,
                'remarks' => 'SL Maam',
                'created_at' => '2022-12-22 10:33:44',
                'updated_at' => '2022-12-22 10:33:44',
            ),
            231 => 
            array (
                'id' => 784,
                'document_id' => 374,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 10:34:39',
                'updated_at' => '2022-12-22 10:34:39',
            ),
            232 => 
            array (
                'id' => 785,
                'document_id' => 369,
                'user_id' => 34,
                'remarks' => 'For leave balance',
                'created_at' => '2022-12-22 10:36:40',
                'updated_at' => '2022-12-22 10:36:40',
            ),
            233 => 
            array (
                'id' => 786,
                'document_id' => 312,
                'user_id' => 34,
                'remarks' => 'For leave balance',
                'created_at' => '2022-12-22 10:37:34',
                'updated_at' => '2022-12-22 10:37:34',
            ),
            234 => 
            array (
                'id' => 787,
                'document_id' => 303,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 10:37:38',
                'updated_at' => '2022-12-22 10:37:38',
            ),
            235 => 
            array (
                'id' => 789,
                'document_id' => 376,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 10:40:32',
                'updated_at' => '2022-12-22 10:40:32',
            ),
            236 => 
            array (
                'id' => 790,
                'document_id' => 377,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 10:42:19',
                'updated_at' => '2022-12-22 10:42:19',
            ),
            237 => 
            array (
                'id' => 791,
                'document_id' => 132,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 10:53:50',
                'updated_at' => '2022-12-22 10:53:50',
            ),
            238 => 
            array (
                'id' => 792,
                'document_id' => 283,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 10:54:26',
                'updated_at' => '2022-12-22 10:54:26',
            ),
            239 => 
            array (
                'id' => 793,
                'document_id' => 282,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 10:55:05',
                'updated_at' => '2022-12-22 10:55:05',
            ),
            240 => 
            array (
                'id' => 794,
                'document_id' => 378,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 10:55:51',
                'updated_at' => '2022-12-22 10:55:51',
            ),
            241 => 
            array (
                'id' => 795,
                'document_id' => 306,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 10:57:13',
                'updated_at' => '2022-12-22 10:57:13',
            ),
            242 => 
            array (
                'id' => 796,
                'document_id' => 284,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 10:57:23',
                'updated_at' => '2022-12-22 10:57:23',
            ),
            243 => 
            array (
                'id' => 797,
                'document_id' => 379,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 10:57:24',
                'updated_at' => '2022-12-22 10:57:24',
            ),
            244 => 
            array (
                'id' => 798,
                'document_id' => 380,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 11:00:32',
                'updated_at' => '2022-12-22 11:00:32',
            ),
            245 => 
            array (
                'id' => 799,
                'document_id' => 381,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 11:01:23',
                'updated_at' => '2022-12-22 11:01:23',
            ),
            246 => 
            array (
                'id' => 800,
                'document_id' => 382,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 11:02:29',
                'updated_at' => '2022-12-22 11:02:29',
            ),
            247 => 
            array (
                'id' => 801,
                'document_id' => 383,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 11:04:22',
                'updated_at' => '2022-12-22 11:04:22',
            ),
            248 => 
            array (
                'id' => 802,
                'document_id' => 307,
                'user_id' => 1,
                'remarks' => 'Deferred. Monetization is being held in abeyance as of this time',
                'created_at' => '2022-12-22 11:04:40',
                'updated_at' => '2022-12-22 11:04:40',
            ),
            249 => 
            array (
                'id' => 803,
                'document_id' => 280,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:04:45',
                'updated_at' => '2022-12-22 11:04:45',
            ),
            250 => 
            array (
                'id' => 804,
                'document_id' => 329,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:05:19',
                'updated_at' => '2022-12-22 11:05:19',
            ),
            251 => 
            array (
                'id' => 805,
                'document_id' => 328,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:06:31',
                'updated_at' => '2022-12-22 11:06:31',
            ),
            252 => 
            array (
                'id' => 806,
                'document_id' => 384,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 11:06:32',
                'updated_at' => '2022-12-22 11:06:32',
            ),
            253 => 
            array (
                'id' => 807,
                'document_id' => 307,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:07:24',
                'updated_at' => '2022-12-22 11:07:24',
            ),
            254 => 
            array (
                'id' => 808,
                'document_id' => 385,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 11:07:37',
                'updated_at' => '2022-12-22 11:07:37',
            ),
            255 => 
            array (
                'id' => 809,
                'document_id' => 327,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:07:59',
                'updated_at' => '2022-12-22 11:07:59',
            ),
            256 => 
            array (
                'id' => 810,
                'document_id' => 325,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:08:26',
                'updated_at' => '2022-12-22 11:08:26',
            ),
            257 => 
            array (
                'id' => 812,
                'document_id' => 323,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:09:24',
                'updated_at' => '2022-12-22 11:09:24',
            ),
            258 => 
            array (
                'id' => 813,
                'document_id' => 320,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:09:54',
                'updated_at' => '2022-12-22 11:09:54',
            ),
            259 => 
            array (
                'id' => 814,
                'document_id' => 386,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 11:10:00',
                'updated_at' => '2022-12-22 11:10:00',
            ),
            260 => 
            array (
                'id' => 815,
                'document_id' => 308,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 11:12:46',
                'updated_at' => '2022-12-22 11:12:46',
            ),
            261 => 
            array (
                'id' => 816,
                'document_id' => 310,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:14:19',
                'updated_at' => '2022-12-22 11:14:19',
            ),
            262 => 
            array (
                'id' => 817,
                'document_id' => 320,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 11:17:06',
                'updated_at' => '2022-12-22 11:17:06',
            ),
            263 => 
            array (
                'id' => 818,
                'document_id' => 311,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:21:44',
                'updated_at' => '2022-12-22 11:21:44',
            ),
            264 => 
            array (
                'id' => 819,
                'document_id' => 319,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:24:23',
                'updated_at' => '2022-12-22 11:24:23',
            ),
            265 => 
            array (
                'id' => 820,
                'document_id' => 322,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:24:50',
                'updated_at' => '2022-12-22 11:24:50',
            ),
            266 => 
            array (
                'id' => 821,
                'document_id' => 321,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:25:14',
                'updated_at' => '2022-12-22 11:25:14',
            ),
            267 => 
            array (
                'id' => 822,
                'document_id' => 386,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:25:39',
                'updated_at' => '2022-12-22 11:25:39',
            ),
            268 => 
            array (
                'id' => 823,
                'document_id' => 385,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:26:18',
                'updated_at' => '2022-12-22 11:26:18',
            ),
            269 => 
            array (
                'id' => 824,
                'document_id' => 384,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:26:44',
                'updated_at' => '2022-12-22 11:26:44',
            ),
            270 => 
            array (
                'id' => 825,
                'document_id' => 383,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:27:16',
                'updated_at' => '2022-12-22 11:27:16',
            ),
            271 => 
            array (
                'id' => 826,
                'document_id' => 382,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:27:50',
                'updated_at' => '2022-12-22 11:27:50',
            ),
            272 => 
            array (
                'id' => 827,
                'document_id' => 381,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:28:16',
                'updated_at' => '2022-12-22 11:28:16',
            ),
            273 => 
            array (
                'id' => 828,
                'document_id' => 380,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:28:45',
                'updated_at' => '2022-12-22 11:28:45',
            ),
            274 => 
            array (
                'id' => 829,
                'document_id' => 378,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:29:43',
                'updated_at' => '2022-12-22 11:29:43',
            ),
            275 => 
            array (
                'id' => 830,
                'document_id' => 379,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:30:09',
                'updated_at' => '2022-12-22 11:30:09',
            ),
            276 => 
            array (
                'id' => 831,
                'document_id' => 376,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:30:45',
                'updated_at' => '2022-12-22 11:30:45',
            ),
            277 => 
            array (
                'id' => 832,
                'document_id' => 377,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:31:11',
                'updated_at' => '2022-12-22 11:31:11',
            ),
            278 => 
            array (
                'id' => 833,
                'document_id' => 375,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:31:42',
                'updated_at' => '2022-12-22 11:31:42',
            ),
            279 => 
            array (
                'id' => 834,
                'document_id' => 373,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:32:13',
                'updated_at' => '2022-12-22 11:32:13',
            ),
            280 => 
            array (
                'id' => 835,
                'document_id' => 372,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:32:41',
                'updated_at' => '2022-12-22 11:32:41',
            ),
            281 => 
            array (
                'id' => 836,
                'document_id' => 387,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 11:40:35',
                'updated_at' => '2022-12-22 11:40:35',
            ),
            282 => 
            array (
                'id' => 837,
                'document_id' => 388,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 11:41:25',
                'updated_at' => '2022-12-22 11:41:25',
            ),
            283 => 
            array (
                'id' => 838,
                'document_id' => 389,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 11:42:05',
                'updated_at' => '2022-12-22 11:42:05',
            ),
            284 => 
            array (
                'id' => 839,
                'document_id' => 390,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 11:42:47',
                'updated_at' => '2022-12-22 11:42:47',
            ),
            285 => 
            array (
                'id' => 840,
                'document_id' => 391,
                'user_id' => 34,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-22 11:45:04',
                'updated_at' => '2022-12-22 11:45:04',
            ),
            286 => 
            array (
                'id' => 841,
                'document_id' => 390,
                'user_id' => 34,
                'remarks' => 'No attachment',
                'created_at' => '2022-12-22 11:45:35',
                'updated_at' => '2022-12-22 11:45:35',
            ),
            287 => 
            array (
                'id' => 842,
                'document_id' => 323,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 11:47:46',
                'updated_at' => '2022-12-22 11:47:46',
            ),
            288 => 
            array (
                'id' => 843,
                'document_id' => 389,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:47:47',
                'updated_at' => '2022-12-22 11:47:47',
            ),
            289 => 
            array (
                'id' => 844,
                'document_id' => 392,
                'user_id' => 34,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-22 11:50:47',
                'updated_at' => '2022-12-22 11:50:47',
            ),
            290 => 
            array (
                'id' => 845,
                'document_id' => 388,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:51:14',
                'updated_at' => '2022-12-22 11:51:14',
            ),
            291 => 
            array (
                'id' => 846,
                'document_id' => 387,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-22 11:51:34',
                'updated_at' => '2022-12-22 11:51:34',
            ),
            292 => 
            array (
                'id' => 847,
                'document_id' => 372,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 11:52:59',
                'updated_at' => '2022-12-22 11:52:59',
            ),
            293 => 
            array (
                'id' => 848,
                'document_id' => 239,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 11:57:00',
                'updated_at' => '2022-12-22 11:57:00',
            ),
            294 => 
            array (
                'id' => 849,
                'document_id' => 390,
                'user_id' => 35,
                'remarks' => 'sorry maam ga lag po ko',
                'created_at' => '2022-12-22 12:00:55',
                'updated_at' => '2022-12-22 12:00:55',
            ),
            295 => 
            array (
                'id' => 850,
                'document_id' => 393,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:01:40',
                'updated_at' => '2022-12-22 12:01:40',
            ),
            296 => 
            array (
                'id' => 851,
                'document_id' => 394,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:02:18',
                'updated_at' => '2022-12-22 12:02:18',
            ),
            297 => 
            array (
                'id' => 852,
                'document_id' => 395,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:03:40',
                'updated_at' => '2022-12-22 12:03:40',
            ),
            298 => 
            array (
                'id' => 853,
                'document_id' => 396,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:06:28',
                'updated_at' => '2022-12-22 12:06:28',
            ),
            299 => 
            array (
                'id' => 854,
                'document_id' => 397,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:07:29',
                'updated_at' => '2022-12-22 12:07:29',
            ),
            300 => 
            array (
                'id' => 855,
                'document_id' => 398,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:08:05',
                'updated_at' => '2022-12-22 12:08:05',
            ),
            301 => 
            array (
                'id' => 856,
                'document_id' => 399,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:08:57',
                'updated_at' => '2022-12-22 12:08:57',
            ),
            302 => 
            array (
                'id' => 857,
                'document_id' => 400,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:09:36',
                'updated_at' => '2022-12-22 12:09:36',
            ),
            303 => 
            array (
                'id' => 858,
                'document_id' => 401,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:10:17',
                'updated_at' => '2022-12-22 12:10:17',
            ),
            304 => 
            array (
                'id' => 859,
                'document_id' => 402,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:12:54',
                'updated_at' => '2022-12-22 12:12:54',
            ),
            305 => 
            array (
                'id' => 860,
                'document_id' => 403,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:13:40',
                'updated_at' => '2022-12-22 12:13:40',
            ),
            306 => 
            array (
                'id' => 861,
                'document_id' => 404,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:14:22',
                'updated_at' => '2022-12-22 12:14:22',
            ),
            307 => 
            array (
                'id' => 862,
                'document_id' => 405,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:14:55',
                'updated_at' => '2022-12-22 12:14:55',
            ),
            308 => 
            array (
                'id' => 863,
                'document_id' => 406,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:15:20',
                'updated_at' => '2022-12-22 12:15:20',
            ),
            309 => 
            array (
                'id' => 864,
                'document_id' => 407,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 12:16:45',
                'updated_at' => '2022-12-22 12:16:45',
            ),
            310 => 
            array (
                'id' => 865,
                'document_id' => 373,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 12:17:25',
                'updated_at' => '2022-12-22 12:17:25',
            ),
            311 => 
            array (
                'id' => 866,
                'document_id' => 408,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 13:10:13',
                'updated_at' => '2022-12-22 13:10:13',
            ),
            312 => 
            array (
                'id' => 867,
                'document_id' => 409,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 13:12:39',
                'updated_at' => '2022-12-22 13:12:39',
            ),
            313 => 
            array (
                'id' => 868,
                'document_id' => 410,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 13:13:12',
                'updated_at' => '2022-12-22 13:13:12',
            ),
            314 => 
            array (
                'id' => 869,
                'document_id' => 411,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 13:13:37',
                'updated_at' => '2022-12-22 13:13:37',
            ),
            315 => 
            array (
                'id' => 870,
                'document_id' => 412,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 13:15:27',
                'updated_at' => '2022-12-22 13:15:27',
            ),
            316 => 
            array (
                'id' => 871,
                'document_id' => 413,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 13:15:54',
                'updated_at' => '2022-12-22 13:15:54',
            ),
            317 => 
            array (
                'id' => 872,
                'document_id' => 414,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-22 13:18:56',
                'updated_at' => '2022-12-22 13:18:56',
            ),
            318 => 
            array (
                'id' => 873,
                'document_id' => 415,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-22 13:23:38',
                'updated_at' => '2022-12-22 13:23:38',
            ),
            319 => 
            array (
                'id' => 874,
                'document_id' => 416,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-22 13:24:24',
                'updated_at' => '2022-12-22 13:24:24',
            ),
            320 => 
            array (
                'id' => 875,
                'document_id' => 417,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-22 13:25:01',
                'updated_at' => '2022-12-22 13:25:01',
            ),
            321 => 
            array (
                'id' => 876,
                'document_id' => 418,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-22 13:25:45',
                'updated_at' => '2022-12-22 13:25:45',
            ),
            322 => 
            array (
                'id' => 877,
                'document_id' => 419,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-22 13:26:51',
                'updated_at' => '2022-12-22 13:26:51',
            ),
            323 => 
            array (
                'id' => 878,
                'document_id' => 375,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 13:39:54',
                'updated_at' => '2022-12-22 13:39:54',
            ),
            324 => 
            array (
                'id' => 879,
                'document_id' => 376,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 13:41:44',
                'updated_at' => '2022-12-22 13:41:44',
            ),
            325 => 
            array (
                'id' => 880,
                'document_id' => 378,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 13:42:59',
                'updated_at' => '2022-12-22 13:42:59',
            ),
            326 => 
            array (
                'id' => 881,
                'document_id' => 379,
                'user_id' => 1,
                'remarks' => 'other documents no signature of mabel',
                'created_at' => '2022-12-22 13:46:22',
                'updated_at' => '2022-12-22 13:46:22',
            ),
            327 => 
            array (
                'id' => 882,
                'document_id' => 380,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-22 13:47:48',
                'updated_at' => '2022-12-22 13:47:48',
            ),
            328 => 
            array (
                'id' => 883,
                'document_id' => 227,
                'user_id' => 5,
                'remarks' => NULL,
                'created_at' => '2022-12-22 13:53:39',
                'updated_at' => '2022-12-22 13:53:39',
            ),
            329 => 
            array (
                'id' => 884,
                'document_id' => 147,
                'user_id' => 5,
                'remarks' => NULL,
                'created_at' => '2022-12-22 13:54:30',
                'updated_at' => '2022-12-22 13:54:30',
            ),
            330 => 
            array (
                'id' => 885,
                'document_id' => 148,
                'user_id' => 5,
                'remarks' => NULL,
                'created_at' => '2022-12-22 13:55:56',
                'updated_at' => '2022-12-22 13:55:56',
            ),
            331 => 
            array (
                'id' => 886,
                'document_id' => 420,
                'user_id' => 8,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-22 13:56:35',
                'updated_at' => '2022-12-22 13:56:35',
            ),
            332 => 
            array (
                'id' => 887,
                'document_id' => 147,
                'user_id' => 11,
                'remarks' => 'Action Taken. Memorandum ROD 6 U-352 s. 2022. 
Thank you Ma\'am.',
                'created_at' => '2022-12-22 14:02:36',
                'updated_at' => '2022-12-22 14:02:36',
            ),
            333 => 
            array (
                'id' => 888,
                'document_id' => 94,
                'user_id' => 8,
                'remarks' => 'Mam,

For initial.',
                'created_at' => '2022-12-22 15:11:41',
                'updated_at' => '2022-12-22 15:11:41',
            ),
            334 => 
            array (
                'id' => 889,
                'document_id' => 95,
                'user_id' => 8,
                'remarks' => 'Nin,

Forward to Negros PO.Thanx',
                'created_at' => '2022-12-22 15:13:34',
                'updated_at' => '2022-12-22 15:13:34',
            ),
            335 => 
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
            336 => 
            array (
                'id' => 891,
                'document_id' => 148,
                'user_id' => 11,
                'remarks' => 'Action taken per Memo ROD 6 U-340-A s.2022',
                'created_at' => '2022-12-23 08:29:52',
                'updated_at' => '2022-12-23 08:29:52',
            ),
            337 => 
            array (
                'id' => 892,
                'document_id' => 421,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 09:25:46',
                'updated_at' => '2022-12-23 09:25:46',
            ),
            338 => 
            array (
                'id' => 893,
                'document_id' => 422,
                'user_id' => 8,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 09:47:06',
                'updated_at' => '2022-12-23 09:47:06',
            ),
            339 => 
            array (
                'id' => 894,
                'document_id' => 421,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-23 09:56:40',
                'updated_at' => '2022-12-23 09:56:40',
            ),
            340 => 
            array (
                'id' => 895,
                'document_id' => 276,
                'user_id' => 8,
                'remarks' => NULL,
                'created_at' => '2022-12-23 11:01:27',
                'updated_at' => '2022-12-23 11:01:27',
            ),
            341 => 
            array (
                'id' => 896,
                'document_id' => 274,
                'user_id' => 8,
                'remarks' => NULL,
                'created_at' => '2022-12-23 11:07:00',
                'updated_at' => '2022-12-23 11:07:00',
            ),
            342 => 
            array (
                'id' => 897,
                'document_id' => 422,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-23 11:08:32',
                'updated_at' => '2022-12-23 11:08:32',
            ),
            343 => 
            array (
                'id' => 898,
                'document_id' => 420,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-23 11:09:57',
                'updated_at' => '2022-12-23 11:09:57',
            ),
            344 => 
            array (
                'id' => 899,
                'document_id' => 154,
                'user_id' => 8,
                'remarks' => 'Cover Memo and endorse to Passi Trade School.

Thank You',
                'created_at' => '2022-12-23 11:11:19',
                'updated_at' => '2022-12-23 11:11:19',
            ),
            345 => 
            array (
                'id' => 900,
                'document_id' => 148,
                'user_id' => 3,
                'remarks' => 'Acted already sir.',
                'created_at' => '2022-12-23 11:18:06',
                'updated_at' => '2022-12-23 11:18:06',
            ),
            346 => 
            array (
                'id' => 901,
                'document_id' => 94,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-23 11:19:04',
                'updated_at' => '2022-12-23 11:19:04',
            ),
            347 => 
            array (
                'id' => 902,
                'document_id' => 423,
                'user_id' => 6,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 11:23:01',
                'updated_at' => '2022-12-23 11:23:01',
            ),
            348 => 
            array (
                'id' => 903,
                'document_id' => 371,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-23 11:29:24',
                'updated_at' => '2022-12-23 11:29:24',
            ),
            349 => 
            array (
                'id' => 904,
                'document_id' => 165,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 11:32:08',
                'updated_at' => '2022-12-23 11:32:08',
            ),
            350 => 
            array (
                'id' => 905,
                'document_id' => 164,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 11:33:50',
                'updated_at' => '2022-12-23 11:33:50',
            ),
            351 => 
            array (
                'id' => 906,
                'document_id' => 160,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 11:35:23',
                'updated_at' => '2022-12-23 11:35:23',
            ),
            352 => 
            array (
                'id' => 907,
                'document_id' => 367,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 11:37:52',
                'updated_at' => '2022-12-23 11:37:52',
            ),
            353 => 
            array (
                'id' => 908,
                'document_id' => 424,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 11:38:02',
                'updated_at' => '2022-12-23 11:38:02',
            ),
            354 => 
            array (
                'id' => 909,
                'document_id' => 368,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 11:40:31',
                'updated_at' => '2022-12-23 11:40:31',
            ),
            355 => 
            array (
                'id' => 910,
                'document_id' => 425,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 11:43:09',
                'updated_at' => '2022-12-23 11:43:09',
            ),
            356 => 
            array (
                'id' => 911,
                'document_id' => 159,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 11:43:59',
                'updated_at' => '2022-12-23 11:43:59',
            ),
            357 => 
            array (
                'id' => 912,
                'document_id' => 130,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 11:45:48',
                'updated_at' => '2022-12-23 11:45:48',
            ),
            358 => 
            array (
                'id' => 913,
                'document_id' => 426,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 11:46:05',
                'updated_at' => '2022-12-23 11:46:05',
            ),
            359 => 
            array (
                'id' => 914,
                'document_id' => 427,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 11:47:04',
                'updated_at' => '2022-12-23 11:47:04',
            ),
            360 => 
            array (
                'id' => 915,
                'document_id' => 129,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 11:48:45',
                'updated_at' => '2022-12-23 11:48:45',
            ),
            361 => 
            array (
                'id' => 916,
                'document_id' => 428,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 11:49:22',
                'updated_at' => '2022-12-23 11:49:22',
            ),
            362 => 
            array (
                'id' => 917,
                'document_id' => 424,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 11:51:04',
                'updated_at' => '2022-12-23 11:51:04',
            ),
            363 => 
            array (
                'id' => 918,
                'document_id' => 429,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 11:51:34',
                'updated_at' => '2022-12-23 11:51:34',
            ),
            364 => 
            array (
                'id' => 920,
                'document_id' => 127,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 11:55:21',
                'updated_at' => '2022-12-23 11:55:21',
            ),
            365 => 
            array (
                'id' => 921,
                'document_id' => 317,
                'user_id' => 39,
                'remarks' => NULL,
                'created_at' => '2022-12-23 11:58:24',
                'updated_at' => '2022-12-23 11:58:24',
            ),
            366 => 
            array (
                'id' => 922,
                'document_id' => 423,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-23 12:08:36',
                'updated_at' => '2022-12-23 12:08:36',
            ),
            367 => 
            array (
                'id' => 923,
                'document_id' => 340,
                'user_id' => 26,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 12:38:28',
                'updated_at' => '2022-12-23 12:38:28',
            ),
            368 => 
            array (
                'id' => 924,
                'document_id' => 355,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-23 12:41:03',
                'updated_at' => '2022-12-23 12:41:03',
            ),
            369 => 
            array (
                'id' => 925,
                'document_id' => 356,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-23 12:42:47',
                'updated_at' => '2022-12-23 12:42:47',
            ),
            370 => 
            array (
                'id' => 926,
                'document_id' => 357,
                'user_id' => 26,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 12:44:11',
                'updated_at' => '2022-12-23 12:44:11',
            ),
            371 => 
            array (
                'id' => 927,
                'document_id' => 369,
                'user_id' => 39,
                'remarks' => NULL,
                'created_at' => '2022-12-23 12:46:37',
                'updated_at' => '2022-12-23 12:46:37',
            ),
            372 => 
            array (
                'id' => 928,
                'document_id' => 358,
                'user_id' => 26,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 12:53:47',
                'updated_at' => '2022-12-23 12:53:47',
            ),
            373 => 
            array (
                'id' => 929,
                'document_id' => 361,
                'user_id' => 26,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 13:01:25',
                'updated_at' => '2022-12-23 13:01:25',
            ),
            374 => 
            array (
                'id' => 930,
                'document_id' => 362,
                'user_id' => 26,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 13:05:37',
                'updated_at' => '2022-12-23 13:05:37',
            ),
            375 => 
            array (
                'id' => 931,
                'document_id' => 310,
                'user_id' => 26,
                'remarks' => 'Jen, pls forward to Mee sheil for processing of payments. TY',
                'created_at' => '2022-12-23 13:07:02',
                'updated_at' => '2022-12-23 13:07:02',
            ),
            376 => 
            array (
                'id' => 932,
                'document_id' => 311,
                'user_id' => 26,
                'remarks' => 'Jen pls forward to Mee sheil for processing of payments. TY',
                'created_at' => '2022-12-23 13:08:11',
                'updated_at' => '2022-12-23 13:08:11',
            ),
            377 => 
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
            378 => 
            array (
                'id' => 934,
                'document_id' => 430,
                'user_id' => 5,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 13:11:36',
                'updated_at' => '2022-12-23 13:11:36',
            ),
            379 => 
            array (
                'id' => 936,
                'document_id' => 319,
                'user_id' => 26,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 13:16:25',
                'updated_at' => '2022-12-23 13:16:25',
            ),
            380 => 
            array (
                'id' => 937,
                'document_id' => 154,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-23 13:17:02',
                'updated_at' => '2022-12-23 13:17:02',
            ),
            381 => 
            array (
                'id' => 938,
                'document_id' => 321,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-23 13:17:20',
                'updated_at' => '2022-12-23 13:17:20',
            ),
            382 => 
            array (
                'id' => 939,
                'document_id' => 430,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-23 13:18:17',
                'updated_at' => '2022-12-23 13:18:17',
            ),
            383 => 
            array (
                'id' => 941,
                'document_id' => 431,
                'user_id' => 10,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 13:32:36',
                'updated_at' => '2022-12-23 13:32:36',
            ),
            384 => 
            array (
                'id' => 943,
                'document_id' => 431,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-23 13:35:45',
                'updated_at' => '2022-12-23 13:35:45',
            ),
            385 => 
            array (
                'id' => 944,
                'document_id' => 432,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 13:41:23',
                'updated_at' => '2022-12-23 13:41:23',
            ),
            386 => 
            array (
                'id' => 945,
                'document_id' => 433,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 13:43:11',
                'updated_at' => '2022-12-23 13:43:11',
            ),
            387 => 
            array (
                'id' => 946,
                'document_id' => 434,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 13:43:50',
                'updated_at' => '2022-12-23 13:43:50',
            ),
            388 => 
            array (
                'id' => 947,
                'document_id' => 435,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 13:45:31',
                'updated_at' => '2022-12-23 13:45:31',
            ),
            389 => 
            array (
                'id' => 948,
                'document_id' => 436,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 13:45:49',
                'updated_at' => '2022-12-23 13:45:49',
            ),
            390 => 
            array (
                'id' => 949,
                'document_id' => 125,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 13:46:56',
                'updated_at' => '2022-12-23 13:46:56',
            ),
            391 => 
            array (
                'id' => 950,
                'document_id' => 437,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 13:47:13',
                'updated_at' => '2022-12-23 13:47:13',
            ),
            392 => 
            array (
                'id' => 951,
                'document_id' => 438,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 13:47:55',
                'updated_at' => '2022-12-23 13:47:55',
            ),
            393 => 
            array (
                'id' => 952,
                'document_id' => 436,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-23 13:48:03',
                'updated_at' => '2022-12-23 13:48:03',
            ),
            394 => 
            array (
                'id' => 953,
                'document_id' => 439,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 13:48:45',
                'updated_at' => '2022-12-23 13:48:45',
            ),
            395 => 
            array (
                'id' => 954,
                'document_id' => 437,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-23 13:48:45',
                'updated_at' => '2022-12-23 13:48:45',
            ),
            396 => 
            array (
                'id' => 955,
                'document_id' => 439,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-23 13:49:35',
                'updated_at' => '2022-12-23 13:49:35',
            ),
            397 => 
            array (
                'id' => 956,
                'document_id' => 124,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 13:49:47',
                'updated_at' => '2022-12-23 13:49:47',
            ),
            398 => 
            array (
                'id' => 957,
                'document_id' => 371,
                'user_id' => 4,
                'remarks' => 'List of beneficiaries - NOPO',
                'created_at' => '2022-12-23 13:50:27',
                'updated_at' => '2022-12-23 13:50:27',
            ),
            399 => 
            array (
                'id' => 958,
                'document_id' => 433,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-23 13:50:43',
                'updated_at' => '2022-12-23 13:50:43',
            ),
            400 => 
            array (
                'id' => 959,
                'document_id' => 353,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-23 13:51:57',
                'updated_at' => '2022-12-23 13:51:57',
            ),
            401 => 
            array (
                'id' => 960,
                'document_id' => 123,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 13:53:14',
                'updated_at' => '2022-12-23 13:53:14',
            ),
            402 => 
            array (
                'id' => 961,
                'document_id' => 122,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 13:54:13',
                'updated_at' => '2022-12-23 13:54:13',
            ),
            403 => 
            array (
                'id' => 962,
                'document_id' => 121,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 13:55:54',
                'updated_at' => '2022-12-23 13:55:54',
            ),
            404 => 
            array (
                'id' => 963,
                'document_id' => 120,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 13:56:45',
                'updated_at' => '2022-12-23 13:56:45',
            ),
            405 => 
            array (
                'id' => 964,
                'document_id' => 119,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 13:57:44',
                'updated_at' => '2022-12-23 13:57:44',
            ),
            406 => 
            array (
                'id' => 965,
                'document_id' => 118,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 13:58:37',
                'updated_at' => '2022-12-23 13:58:37',
            ),
            407 => 
            array (
                'id' => 966,
                'document_id' => 117,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 13:59:40',
                'updated_at' => '2022-12-23 13:59:40',
            ),
            408 => 
            array (
                'id' => 967,
                'document_id' => 116,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:00:26',
                'updated_at' => '2022-12-23 14:00:26',
            ),
            409 => 
            array (
                'id' => 968,
                'document_id' => 115,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:01:28',
                'updated_at' => '2022-12-23 14:01:28',
            ),
            410 => 
            array (
                'id' => 969,
                'document_id' => 114,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:02:23',
                'updated_at' => '2022-12-23 14:02:23',
            ),
            411 => 
            array (
                'id' => 970,
                'document_id' => 113,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:03:13',
                'updated_at' => '2022-12-23 14:03:13',
            ),
            412 => 
            array (
                'id' => 971,
                'document_id' => 112,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:04:02',
                'updated_at' => '2022-12-23 14:04:02',
            ),
            413 => 
            array (
                'id' => 972,
                'document_id' => 111,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:04:43',
                'updated_at' => '2022-12-23 14:04:43',
            ),
            414 => 
            array (
                'id' => 973,
                'document_id' => 110,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:05:35',
                'updated_at' => '2022-12-23 14:05:35',
            ),
            415 => 
            array (
                'id' => 974,
                'document_id' => 109,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:06:19',
                'updated_at' => '2022-12-23 14:06:19',
            ),
            416 => 
            array (
                'id' => 975,
                'document_id' => 108,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:07:04',
                'updated_at' => '2022-12-23 14:07:04',
            ),
            417 => 
            array (
                'id' => 976,
                'document_id' => 216,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:08:02',
                'updated_at' => '2022-12-23 14:08:02',
            ),
            418 => 
            array (
                'id' => 977,
                'document_id' => 200,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:08:54',
                'updated_at' => '2022-12-23 14:08:54',
            ),
            419 => 
            array (
                'id' => 978,
                'document_id' => 199,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:10:45',
                'updated_at' => '2022-12-23 14:10:45',
            ),
            420 => 
            array (
                'id' => 979,
                'document_id' => 198,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:12:18',
                'updated_at' => '2022-12-23 14:12:18',
            ),
            421 => 
            array (
                'id' => 980,
                'document_id' => 197,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:13:01',
                'updated_at' => '2022-12-23 14:13:01',
            ),
            422 => 
            array (
                'id' => 981,
                'document_id' => 196,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:16:27',
                'updated_at' => '2022-12-23 14:16:27',
            ),
            423 => 
            array (
                'id' => 982,
                'document_id' => 195,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:17:13',
                'updated_at' => '2022-12-23 14:17:13',
            ),
            424 => 
            array (
                'id' => 983,
                'document_id' => 194,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:17:48',
                'updated_at' => '2022-12-23 14:17:48',
            ),
            425 => 
            array (
                'id' => 984,
                'document_id' => 193,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:18:25',
                'updated_at' => '2022-12-23 14:18:25',
            ),
            426 => 
            array (
                'id' => 985,
                'document_id' => 192,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:19:11',
                'updated_at' => '2022-12-23 14:19:11',
            ),
            427 => 
            array (
                'id' => 986,
                'document_id' => 191,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:19:52',
                'updated_at' => '2022-12-23 14:19:52',
            ),
            428 => 
            array (
                'id' => 987,
                'document_id' => 190,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:20:51',
                'updated_at' => '2022-12-23 14:20:51',
            ),
            429 => 
            array (
                'id' => 988,
                'document_id' => 188,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:21:29',
                'updated_at' => '2022-12-23 14:21:29',
            ),
            430 => 
            array (
                'id' => 989,
                'document_id' => 180,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:22:53',
                'updated_at' => '2022-12-23 14:22:53',
            ),
            431 => 
            array (
                'id' => 990,
                'document_id' => 366,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:24:06',
                'updated_at' => '2022-12-23 14:24:06',
            ),
            432 => 
            array (
                'id' => 991,
                'document_id' => 371,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-23 14:24:48',
                'updated_at' => '2022-12-23 14:24:48',
            ),
            433 => 
            array (
                'id' => 992,
                'document_id' => 365,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:24:56',
                'updated_at' => '2022-12-23 14:24:56',
            ),
            434 => 
            array (
                'id' => 993,
                'document_id' => 364,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:25:43',
                'updated_at' => '2022-12-23 14:25:43',
            ),
            435 => 
            array (
                'id' => 994,
                'document_id' => 363,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:26:22',
                'updated_at' => '2022-12-23 14:26:22',
            ),
            436 => 
            array (
                'id' => 995,
                'document_id' => 360,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:26:59',
                'updated_at' => '2022-12-23 14:26:59',
            ),
            437 => 
            array (
                'id' => 996,
                'document_id' => 344,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:29:07',
                'updated_at' => '2022-12-23 14:29:07',
            ),
            438 => 
            array (
                'id' => 997,
                'document_id' => 371,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:29:55',
                'updated_at' => '2022-12-23 14:29:55',
            ),
            439 => 
            array (
                'id' => 998,
                'document_id' => 333,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:33:20',
                'updated_at' => '2022-12-23 14:33:20',
            ),
            440 => 
            array (
                'id' => 999,
                'document_id' => 332,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:35:15',
                'updated_at' => '2022-12-23 14:35:15',
            ),
            441 => 
            array (
                'id' => 1000,
                'document_id' => 435,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:35:57',
                'updated_at' => '2022-12-23 14:35:57',
            ),
            442 => 
            array (
                'id' => 1001,
                'document_id' => 434,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:36:34',
                'updated_at' => '2022-12-23 14:36:34',
            ),
            443 => 
            array (
                'id' => 1002,
                'document_id' => 432,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:37:19',
                'updated_at' => '2022-12-23 14:37:19',
            ),
            444 => 
            array (
                'id' => 1003,
                'document_id' => 429,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:37:57',
                'updated_at' => '2022-12-23 14:37:57',
            ),
            445 => 
            array (
                'id' => 1004,
                'document_id' => 428,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:39:12',
                'updated_at' => '2022-12-23 14:39:12',
            ),
            446 => 
            array (
                'id' => 1005,
                'document_id' => 427,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:39:46',
                'updated_at' => '2022-12-23 14:39:46',
            ),
            447 => 
            array (
                'id' => 1006,
                'document_id' => 426,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:40:28',
                'updated_at' => '2022-12-23 14:40:28',
            ),
            448 => 
            array (
                'id' => 1007,
                'document_id' => 425,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-23 14:41:12',
                'updated_at' => '2022-12-23 14:41:12',
            ),
            449 => 
            array (
                'id' => 1008,
                'document_id' => 203,
                'user_id' => 38,
                'remarks' => 'Returned',
                'created_at' => '2022-12-23 14:46:00',
                'updated_at' => '2022-12-23 14:46:00',
            ),
            450 => 
            array (
                'id' => 1009,
                'document_id' => 440,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 15:32:35',
                'updated_at' => '2022-12-23 15:32:35',
            ),
            451 => 
            array (
                'id' => 1010,
                'document_id' => 441,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 15:34:16',
                'updated_at' => '2022-12-23 15:34:16',
            ),
            452 => 
            array (
                'id' => 1011,
                'document_id' => 442,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 15:35:52',
                'updated_at' => '2022-12-23 15:35:52',
            ),
            453 => 
            array (
                'id' => 1012,
                'document_id' => 443,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 15:37:02',
                'updated_at' => '2022-12-23 15:37:02',
            ),
            454 => 
            array (
                'id' => 1013,
                'document_id' => 444,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 15:38:17',
                'updated_at' => '2022-12-23 15:38:17',
            ),
            455 => 
            array (
                'id' => 1014,
                'document_id' => 445,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-23 15:51:15',
                'updated_at' => '2022-12-23 15:51:15',
            ),
            456 => 
            array (
                'id' => 1015,
                'document_id' => 421,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-25 18:35:14',
                'updated_at' => '2022-12-25 18:35:14',
            ),
            457 => 
            array (
                'id' => 1016,
                'document_id' => 433,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-25 18:40:08',
                'updated_at' => '2022-12-25 18:40:08',
            ),
            458 => 
            array (
                'id' => 1017,
                'document_id' => 436,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-25 18:42:12',
                'updated_at' => '2022-12-25 18:42:12',
            ),
            459 => 
            array (
                'id' => 1018,
                'document_id' => 437,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-25 18:44:25',
                'updated_at' => '2022-12-25 18:44:25',
            ),
            460 => 
            array (
                'id' => 1019,
                'document_id' => 354,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-25 18:49:43',
                'updated_at' => '2022-12-25 18:49:43',
            ),
            461 => 
            array (
                'id' => 1020,
                'document_id' => 439,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-25 18:51:16',
                'updated_at' => '2022-12-25 18:51:16',
            ),
            462 => 
            array (
                'id' => 1021,
                'document_id' => 383,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-25 18:53:21',
                'updated_at' => '2022-12-25 18:53:21',
            ),
            463 => 
            array (
                'id' => 1022,
                'document_id' => 386,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-25 18:55:04',
                'updated_at' => '2022-12-25 18:55:04',
            ),
            464 => 
            array (
                'id' => 1023,
                'document_id' => 387,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-25 18:56:48',
                'updated_at' => '2022-12-25 18:56:48',
            ),
            465 => 
            array (
                'id' => 1024,
                'document_id' => 388,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-25 18:58:22',
                'updated_at' => '2022-12-25 18:58:22',
            ),
            466 => 
            array (
                'id' => 1025,
                'document_id' => 389,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-25 18:59:54',
                'updated_at' => '2022-12-25 18:59:54',
            ),
            467 => 
            array (
                'id' => 1026,
                'document_id' => 391,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-25 19:02:02',
                'updated_at' => '2022-12-25 19:02:02',
            ),
            468 => 
            array (
                'id' => 1027,
                'document_id' => 392,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-25 19:04:29',
                'updated_at' => '2022-12-25 19:04:29',
            ),
            469 => 
            array (
                'id' => 1028,
                'document_id' => 446,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 09:06:49',
                'updated_at' => '2022-12-27 09:06:49',
            ),
            470 => 
            array (
                'id' => 1029,
                'document_id' => 445,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-27 09:40:42',
                'updated_at' => '2022-12-27 09:40:42',
            ),
            471 => 
            array (
                'id' => 1030,
                'document_id' => 444,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-27 09:41:04',
                'updated_at' => '2022-12-27 09:41:04',
            ),
            472 => 
            array (
                'id' => 1031,
                'document_id' => 153,
                'user_id' => 4,
                'remarks' => 'Please prepare a reply memorandum.',
                'created_at' => '2022-12-27 09:41:16',
                'updated_at' => '2022-12-27 09:41:16',
            ),
            473 => 
            array (
                'id' => 1032,
                'document_id' => 443,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-27 09:41:29',
                'updated_at' => '2022-12-27 09:41:29',
            ),
            474 => 
            array (
                'id' => 1033,
                'document_id' => 442,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-27 09:42:27',
                'updated_at' => '2022-12-27 09:42:27',
            ),
            475 => 
            array (
                'id' => 1034,
                'document_id' => 441,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-27 09:42:45',
                'updated_at' => '2022-12-27 09:42:45',
            ),
            476 => 
            array (
                'id' => 1035,
                'document_id' => 440,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-27 09:43:03',
                'updated_at' => '2022-12-27 09:43:03',
            ),
            477 => 
            array (
                'id' => 1036,
                'document_id' => 446,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-27 09:43:19',
                'updated_at' => '2022-12-27 09:43:19',
            ),
            478 => 
            array (
                'id' => 1037,
                'document_id' => 105,
                'user_id' => 4,
                'remarks' => 'Please prepare a reply memorandum.',
                'created_at' => '2022-12-27 09:44:49',
                'updated_at' => '2022-12-27 09:44:49',
            ),
            479 => 
            array (
                'id' => 1038,
                'document_id' => 446,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 10:06:13',
                'updated_at' => '2022-12-27 10:06:13',
            ),
            480 => 
            array (
                'id' => 1039,
                'document_id' => 397,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-27 10:20:26',
                'updated_at' => '2022-12-27 10:20:26',
            ),
            481 => 
            array (
                'id' => 1040,
                'document_id' => 398,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-27 10:24:48',
                'updated_at' => '2022-12-27 10:24:48',
            ),
            482 => 
            array (
                'id' => 1041,
                'document_id' => 399,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-27 10:25:12',
                'updated_at' => '2022-12-27 10:25:12',
            ),
            483 => 
            array (
                'id' => 1042,
                'document_id' => 400,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-27 10:25:38',
                'updated_at' => '2022-12-27 10:25:38',
            ),
            484 => 
            array (
                'id' => 1043,
                'document_id' => 401,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-27 10:26:04',
                'updated_at' => '2022-12-27 10:26:04',
            ),
            485 => 
            array (
                'id' => 1044,
                'document_id' => 396,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-27 10:26:31',
                'updated_at' => '2022-12-27 10:26:31',
            ),
            486 => 
            array (
                'id' => 1045,
                'document_id' => 403,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-27 10:26:55',
                'updated_at' => '2022-12-27 10:26:55',
            ),
            487 => 
            array (
                'id' => 1046,
                'document_id' => 404,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-27 10:27:24',
                'updated_at' => '2022-12-27 10:27:24',
            ),
            488 => 
            array (
                'id' => 1048,
                'document_id' => 369,
                'user_id' => 34,
                'remarks' => 'No attachment',
                'created_at' => '2022-12-27 11:16:10',
                'updated_at' => '2022-12-27 11:16:10',
            ),
            489 => 
            array (
                'id' => 1049,
                'document_id' => 317,
                'user_id' => 34,
                'remarks' => 'No attachment',
                'created_at' => '2022-12-27 11:16:42',
                'updated_at' => '2022-12-27 11:16:42',
            ),
            490 => 
            array (
                'id' => 1050,
                'document_id' => 414,
                'user_id' => 34,
                'remarks' => 'Please cancel this. Already issued an Office Order. T.y.',
                'created_at' => '2022-12-27 11:28:46',
                'updated_at' => '2022-12-27 11:28:46',
            ),
            491 => 
            array (
                'id' => 1051,
                'document_id' => 413,
                'user_id' => 34,
                'remarks' => 'Please cancel this. Already issued an Office Order for the same purpose. T.y.',
                'created_at' => '2022-12-27 11:29:48',
                'updated_at' => '2022-12-27 11:29:48',
            ),
            492 => 
            array (
                'id' => 1052,
                'document_id' => 402,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-27 11:30:26',
                'updated_at' => '2022-12-27 11:30:26',
            ),
            493 => 
            array (
                'id' => 1053,
                'document_id' => 406,
                'user_id' => 34,
                'remarks' => 'Please cancel this. Already issued an Office Order for the same purpose. T.y.',
                'created_at' => '2022-12-27 11:34:16',
                'updated_at' => '2022-12-27 11:34:16',
            ),
            494 => 
            array (
                'id' => 1054,
                'document_id' => 407,
                'user_id' => 34,
                'remarks' => 'Please cancel this. Already issued an Office Order for the same purpose. T.y.',
                'created_at' => '2022-12-27 11:34:42',
                'updated_at' => '2022-12-27 11:34:42',
            ),
            495 => 
            array (
                'id' => 1055,
                'document_id' => 447,
                'user_id' => 8,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 11:40:47',
                'updated_at' => '2022-12-27 11:40:47',
            ),
            496 => 
            array (
                'id' => 1056,
                'document_id' => 408,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-27 11:45:31',
                'updated_at' => '2022-12-27 11:45:31',
            ),
            497 => 
            array (
                'id' => 1057,
                'document_id' => 409,
                'user_id' => 34,
                'remarks' => 'Please Cancel This. Already Issued An Office Order For The Same Purpose.',
                'created_at' => '2022-12-27 12:20:53',
                'updated_at' => '2022-12-27 12:20:53',
            ),
            498 => 
            array (
                'id' => 1058,
                'document_id' => 410,
                'user_id' => 34,
                'remarks' => 'Please Cancel This. Already Issued An Office Order For The Same Purpose. T.y.',
                'created_at' => '2022-12-27 12:22:28',
                'updated_at' => '2022-12-27 12:22:28',
            ),
            499 => 
            array (
                'id' => 1059,
                'document_id' => 411,
                'user_id' => 34,
                'remarks' => 'Please Cancel This. Already Issued An Office Order For The Same Purpose. T.y.',
                'created_at' => '2022-12-27 12:23:40',
                'updated_at' => '2022-12-27 12:23:40',
            ),
        ));
        \DB::table('doc_routes')->insert(array (
            0 => 
            array (
                'id' => 1060,
                'document_id' => 412,
                'user_id' => 34,
                'remarks' => 'Please Cancel This. Already Issued An Office Order For The Same Purpose. T.y.',
                'created_at' => '2022-12-27 12:24:44',
                'updated_at' => '2022-12-27 12:24:44',
            ),
            1 => 
            array (
                'id' => 1061,
                'document_id' => 395,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-27 12:25:37',
                'updated_at' => '2022-12-27 12:25:37',
            ),
            2 => 
            array (
                'id' => 1062,
                'document_id' => 405,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-27 12:28:34',
                'updated_at' => '2022-12-27 12:28:34',
            ),
            3 => 
            array (
                'id' => 1063,
                'document_id' => 394,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-27 12:28:59',
                'updated_at' => '2022-12-27 12:28:59',
            ),
            4 => 
            array (
                'id' => 1064,
                'document_id' => 393,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-27 12:29:30',
                'updated_at' => '2022-12-27 12:29:30',
            ),
            5 => 
            array (
                'id' => 1065,
                'document_id' => 447,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-27 13:30:06',
                'updated_at' => '2022-12-27 13:30:06',
            ),
            6 => 
            array (
                'id' => 1066,
                'document_id' => 448,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-27 13:44:36',
                'updated_at' => '2022-12-27 13:44:36',
            ),
            7 => 
            array (
                'id' => 1067,
                'document_id' => 449,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-27 13:45:22',
                'updated_at' => '2022-12-27 13:45:22',
            ),
            8 => 
            array (
                'id' => 1068,
                'document_id' => 450,
                'user_id' => 4,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 14:17:14',
                'updated_at' => '2022-12-27 14:17:14',
            ),
            9 => 
            array (
                'id' => 1069,
                'document_id' => 451,
                'user_id' => 4,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 14:18:45',
                'updated_at' => '2022-12-27 14:18:45',
            ),
            10 => 
            array (
                'id' => 1070,
                'document_id' => 452,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-27 14:21:50',
                'updated_at' => '2022-12-27 14:21:50',
            ),
            11 => 
            array (
                'id' => 1071,
                'document_id' => 453,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-27 14:25:00',
                'updated_at' => '2022-12-27 14:25:00',
            ),
            12 => 
            array (
                'id' => 1072,
                'document_id' => 450,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-27 14:27:19',
                'updated_at' => '2022-12-27 14:27:19',
            ),
            13 => 
            array (
                'id' => 1073,
                'document_id' => 454,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-27 14:29:18',
                'updated_at' => '2022-12-27 14:29:18',
            ),
            14 => 
            array (
                'id' => 1074,
                'document_id' => 451,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-27 14:29:52',
                'updated_at' => '2022-12-27 14:29:52',
            ),
            15 => 
            array (
                'id' => 1075,
                'document_id' => 316,
                'user_id' => 26,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 14:33:49',
                'updated_at' => '2022-12-27 14:33:49',
            ),
            16 => 
            array (
                'id' => 1076,
                'document_id' => 455,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 14:34:04',
                'updated_at' => '2022-12-27 14:34:04',
            ),
            17 => 
            array (
                'id' => 1077,
                'document_id' => 438,
                'user_id' => 3,
                'remarks' => 'No attachment',
                'created_at' => '2022-12-27 14:39:44',
                'updated_at' => '2022-12-27 14:39:44',
            ),
            18 => 
            array (
                'id' => 1078,
                'document_id' => 456,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 14:40:22',
                'updated_at' => '2022-12-27 14:40:22',
            ),
            19 => 
            array (
                'id' => 1079,
                'document_id' => 456,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-27 14:42:19',
                'updated_at' => '2022-12-27 14:42:19',
            ),
            20 => 
            array (
                'id' => 1080,
                'document_id' => 457,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 14:42:23',
                'updated_at' => '2022-12-27 14:42:23',
            ),
            21 => 
            array (
                'id' => 1081,
                'document_id' => 458,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 14:43:06',
                'updated_at' => '2022-12-27 14:43:06',
            ),
            22 => 
            array (
                'id' => 1082,
                'document_id' => 457,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-27 14:43:19',
                'updated_at' => '2022-12-27 14:43:19',
            ),
            23 => 
            array (
                'id' => 1083,
                'document_id' => 455,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-27 14:43:36',
                'updated_at' => '2022-12-27 14:43:36',
            ),
            24 => 
            array (
                'id' => 1084,
                'document_id' => 459,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 14:45:06',
                'updated_at' => '2022-12-27 14:45:06',
            ),
            25 => 
            array (
                'id' => 1085,
                'document_id' => 460,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 14:45:43',
                'updated_at' => '2022-12-27 14:45:43',
            ),
            26 => 
            array (
                'id' => 1086,
                'document_id' => 461,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 14:45:49',
                'updated_at' => '2022-12-27 14:45:49',
            ),
            27 => 
            array (
                'id' => 1087,
                'document_id' => 461,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-27 14:46:05',
                'updated_at' => '2022-12-27 14:46:05',
            ),
            28 => 
            array (
                'id' => 1088,
                'document_id' => 315,
                'user_id' => 26,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 14:47:02',
                'updated_at' => '2022-12-27 14:47:02',
            ),
            29 => 
            array (
                'id' => 1089,
                'document_id' => 446,
                'user_id' => 38,
                'remarks' => 'Signed, for downloading.',
                'created_at' => '2022-12-27 14:47:16',
                'updated_at' => '2022-12-27 14:47:16',
            ),
            30 => 
            array (
                'id' => 1090,
                'document_id' => 462,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 14:49:09',
                'updated_at' => '2022-12-27 14:49:09',
            ),
            31 => 
            array (
                'id' => 1091,
                'document_id' => 239,
                'user_id' => 38,
                'remarks' => 'Signed, for downloading.',
                'created_at' => '2022-12-27 14:49:21',
                'updated_at' => '2022-12-27 14:49:21',
            ),
            32 => 
            array (
                'id' => 1092,
                'document_id' => 462,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-27 14:51:16',
                'updated_at' => '2022-12-27 14:51:16',
            ),
            33 => 
            array (
                'id' => 1093,
                'document_id' => 463,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 14:51:58',
                'updated_at' => '2022-12-27 14:51:58',
            ),
            34 => 
            array (
                'id' => 1094,
                'document_id' => 463,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-27 14:54:27',
                'updated_at' => '2022-12-27 14:54:27',
            ),
            35 => 
            array (
                'id' => 1095,
                'document_id' => 464,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 14:54:35',
                'updated_at' => '2022-12-27 14:54:35',
            ),
            36 => 
            array (
                'id' => 1096,
                'document_id' => 448,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-27 14:55:28',
                'updated_at' => '2022-12-27 14:55:28',
            ),
            37 => 
            array (
                'id' => 1097,
                'document_id' => 465,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-27 14:55:29',
                'updated_at' => '2022-12-27 14:55:29',
            ),
            38 => 
            array (
                'id' => 1098,
                'document_id' => 314,
                'user_id' => 26,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 14:55:47',
                'updated_at' => '2022-12-27 14:55:47',
            ),
            39 => 
            array (
                'id' => 1099,
                'document_id' => 466,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-27 14:56:18',
                'updated_at' => '2022-12-27 14:56:18',
            ),
            40 => 
            array (
                'id' => 1100,
                'document_id' => 467,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 14:56:26',
                'updated_at' => '2022-12-27 14:56:26',
            ),
            41 => 
            array (
                'id' => 1101,
                'document_id' => 468,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-27 14:56:54',
                'updated_at' => '2022-12-27 14:56:54',
            ),
            42 => 
            array (
                'id' => 1102,
                'document_id' => 469,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-27 14:57:32',
                'updated_at' => '2022-12-27 14:57:32',
            ),
            43 => 
            array (
                'id' => 1103,
                'document_id' => 455,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 14:57:52',
                'updated_at' => '2022-12-27 14:57:52',
            ),
            44 => 
            array (
                'id' => 1104,
                'document_id' => 470,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 14:58:00',
                'updated_at' => '2022-12-27 14:58:00',
            ),
            45 => 
            array (
                'id' => 1105,
                'document_id' => 471,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-27 14:58:17',
                'updated_at' => '2022-12-27 14:58:17',
            ),
            46 => 
            array (
                'id' => 1106,
                'document_id' => 456,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 14:59:08',
                'updated_at' => '2022-12-27 14:59:08',
            ),
            47 => 
            array (
                'id' => 1107,
                'document_id' => 470,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-27 14:59:10',
                'updated_at' => '2022-12-27 14:59:10',
            ),
            48 => 
            array (
                'id' => 1108,
                'document_id' => 467,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-27 14:59:27',
                'updated_at' => '2022-12-27 14:59:27',
            ),
            49 => 
            array (
                'id' => 1109,
                'document_id' => 464,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-27 14:59:47',
                'updated_at' => '2022-12-27 14:59:47',
            ),
            50 => 
            array (
                'id' => 1110,
                'document_id' => 457,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:00:00',
                'updated_at' => '2022-12-27 15:00:00',
            ),
            51 => 
            array (
                'id' => 1111,
                'document_id' => 461,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:00:36',
                'updated_at' => '2022-12-27 15:00:36',
            ),
            52 => 
            array (
                'id' => 1112,
                'document_id' => 462,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:01:17',
                'updated_at' => '2022-12-27 15:01:17',
            ),
            53 => 
            array (
                'id' => 1113,
                'document_id' => 472,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-27 15:01:42',
                'updated_at' => '2022-12-27 15:01:42',
            ),
            54 => 
            array (
                'id' => 1114,
                'document_id' => 463,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:02:02',
                'updated_at' => '2022-12-27 15:02:02',
            ),
            55 => 
            array (
                'id' => 1115,
                'document_id' => 473,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-27 15:02:46',
                'updated_at' => '2022-12-27 15:02:46',
            ),
            56 => 
            array (
                'id' => 1116,
                'document_id' => 464,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:02:58',
                'updated_at' => '2022-12-27 15:02:58',
            ),
            57 => 
            array (
                'id' => 1117,
                'document_id' => 467,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:03:38',
                'updated_at' => '2022-12-27 15:03:38',
            ),
            58 => 
            array (
                'id' => 1118,
                'document_id' => 470,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:04:14',
                'updated_at' => '2022-12-27 15:04:14',
            ),
            59 => 
            array (
                'id' => 1119,
                'document_id' => 448,
                'user_id' => 3,
                'remarks' => 'Kindly follow-up the availability of Ma\'am Sollesta.
Prepare memo to Aklan for approval of RD.',
                'created_at' => '2022-12-27 15:04:21',
                'updated_at' => '2022-12-27 15:04:21',
            ),
            60 => 
            array (
                'id' => 1120,
                'document_id' => 474,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 15:04:51',
                'updated_at' => '2022-12-27 15:04:51',
            ),
            61 => 
            array (
                'id' => 1121,
                'document_id' => 243,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:05:06',
                'updated_at' => '2022-12-27 15:05:06',
            ),
            62 => 
            array (
                'id' => 1122,
                'document_id' => 244,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:05:52',
                'updated_at' => '2022-12-27 15:05:52',
            ),
            63 => 
            array (
                'id' => 1123,
                'document_id' => 442,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:07:02',
                'updated_at' => '2022-12-27 15:07:02',
            ),
            64 => 
            array (
                'id' => 1124,
                'document_id' => 475,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 15:07:32',
                'updated_at' => '2022-12-27 15:07:32',
            ),
            65 => 
            array (
                'id' => 1125,
                'document_id' => 444,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:07:48',
                'updated_at' => '2022-12-27 15:07:48',
            ),
            66 => 
            array (
                'id' => 1126,
                'document_id' => 476,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-27 15:08:46',
                'updated_at' => '2022-12-27 15:08:46',
            ),
            67 => 
            array (
                'id' => 1127,
                'document_id' => 477,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-27 15:09:13',
                'updated_at' => '2022-12-27 15:09:13',
            ),
            68 => 
            array (
                'id' => 1128,
                'document_id' => 466,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-27 15:09:19',
                'updated_at' => '2022-12-27 15:09:19',
            ),
            69 => 
            array (
                'id' => 1129,
                'document_id' => 468,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-27 15:09:44',
                'updated_at' => '2022-12-27 15:09:44',
            ),
            70 => 
            array (
                'id' => 1130,
                'document_id' => 448,
                'user_id' => 8,
                'remarks' => NULL,
                'created_at' => '2022-12-27 15:10:05',
                'updated_at' => '2022-12-27 15:10:05',
            ),
            71 => 
            array (
                'id' => 1131,
                'document_id' => 469,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-27 15:10:09',
                'updated_at' => '2022-12-27 15:10:09',
            ),
            72 => 
            array (
                'id' => 1132,
                'document_id' => 471,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-27 15:11:04',
                'updated_at' => '2022-12-27 15:11:04',
            ),
            73 => 
            array (
                'id' => 1133,
                'document_id' => 473,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-27 15:11:50',
                'updated_at' => '2022-12-27 15:11:50',
            ),
            74 => 
            array (
                'id' => 1134,
                'document_id' => 448,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-27 15:12:58',
                'updated_at' => '2022-12-27 15:12:58',
            ),
            75 => 
            array (
                'id' => 1135,
                'document_id' => 478,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 15:13:23',
                'updated_at' => '2022-12-27 15:13:23',
            ),
            76 => 
            array (
                'id' => 1136,
                'document_id' => 448,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:15:16',
                'updated_at' => '2022-12-27 15:15:16',
            ),
            77 => 
            array (
                'id' => 1137,
                'document_id' => 479,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 15:15:25',
                'updated_at' => '2022-12-27 15:15:25',
            ),
            78 => 
            array (
                'id' => 1138,
                'document_id' => 246,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:16:10',
                'updated_at' => '2022-12-27 15:16:10',
            ),
            79 => 
            array (
                'id' => 1139,
                'document_id' => 339,
                'user_id' => 26,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:16:22',
                'updated_at' => '2022-12-27 15:16:22',
            ),
            80 => 
            array (
                'id' => 1140,
                'document_id' => 466,
                'user_id' => 3,
                'remarks' => 'Prepare memo of approval.',
                'created_at' => '2022-12-27 15:16:31',
                'updated_at' => '2022-12-27 15:16:31',
            ),
            81 => 
            array (
                'id' => 1141,
                'document_id' => 480,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 15:16:40',
                'updated_at' => '2022-12-27 15:16:40',
            ),
            82 => 
            array (
                'id' => 1142,
                'document_id' => 247,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:17:00',
                'updated_at' => '2022-12-27 15:17:00',
            ),
            83 => 
            array (
                'id' => 1143,
                'document_id' => 248,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:17:34',
                'updated_at' => '2022-12-27 15:17:34',
            ),
            84 => 
            array (
                'id' => 1144,
                'document_id' => 481,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 15:17:36',
                'updated_at' => '2022-12-27 15:17:36',
            ),
            85 => 
            array (
                'id' => 1145,
                'document_id' => 438,
                'user_id' => 26,
                'remarks' => 'wala attachment cel',
                'created_at' => '2022-12-27 15:19:12',
                'updated_at' => '2022-12-27 15:19:12',
            ),
            86 => 
            array (
                'id' => 1146,
                'document_id' => 482,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 15:19:17',
                'updated_at' => '2022-12-27 15:19:17',
            ),
            87 => 
            array (
                'id' => 1147,
                'document_id' => 483,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 15:20:42',
                'updated_at' => '2022-12-27 15:20:42',
            ),
            88 => 
            array (
                'id' => 1148,
                'document_id' => 484,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-27 15:21:29',
                'updated_at' => '2022-12-27 15:21:29',
            ),
            89 => 
            array (
                'id' => 1149,
                'document_id' => 485,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-27 15:23:40',
                'updated_at' => '2022-12-27 15:23:40',
            ),
            90 => 
            array (
                'id' => 1150,
                'document_id' => 486,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-27 15:24:35',
                'updated_at' => '2022-12-27 15:24:35',
            ),
            91 => 
            array (
                'id' => 1151,
                'document_id' => 480,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-27 15:26:55',
                'updated_at' => '2022-12-27 15:26:55',
            ),
            92 => 
            array (
                'id' => 1152,
                'document_id' => 487,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-27 15:28:11',
                'updated_at' => '2022-12-27 15:28:11',
            ),
            93 => 
            array (
                'id' => 1153,
                'document_id' => 481,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-27 15:28:39',
                'updated_at' => '2022-12-27 15:28:39',
            ),
            94 => 
            array (
                'id' => 1154,
                'document_id' => 488,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-27 15:29:02',
                'updated_at' => '2022-12-27 15:29:02',
            ),
            95 => 
            array (
                'id' => 1155,
                'document_id' => 438,
                'user_id' => 3,
                'remarks' => 'Please attached the supporting documents.',
                'created_at' => '2022-12-27 15:30:55',
                'updated_at' => '2022-12-27 15:30:55',
            ),
            96 => 
            array (
                'id' => 1156,
                'document_id' => 489,
                'user_id' => 35,
                'remarks' => 'Forwarded to ROD',
                'created_at' => '2022-12-27 15:31:35',
                'updated_at' => '2022-12-27 15:31:35',
            ),
            97 => 
            array (
                'id' => 1157,
                'document_id' => 490,
                'user_id' => 35,
                'remarks' => 'Forwarded to ROD',
                'created_at' => '2022-12-27 15:32:21',
                'updated_at' => '2022-12-27 15:32:21',
            ),
            98 => 
            array (
                'id' => 1158,
                'document_id' => 475,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:33:02',
                'updated_at' => '2022-12-27 15:33:02',
            ),
            99 => 
            array (
                'id' => 1159,
                'document_id' => 483,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:34:32',
                'updated_at' => '2022-12-27 15:34:32',
            ),
            100 => 
            array (
                'id' => 1160,
                'document_id' => 479,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:37:15',
                'updated_at' => '2022-12-27 15:37:15',
            ),
            101 => 
            array (
                'id' => 1161,
                'document_id' => 474,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:38:06',
                'updated_at' => '2022-12-27 15:38:06',
            ),
            102 => 
            array (
                'id' => 1162,
                'document_id' => 478,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:40:51',
                'updated_at' => '2022-12-27 15:40:51',
            ),
            103 => 
            array (
                'id' => 1163,
                'document_id' => 471,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-27 15:41:09',
                'updated_at' => '2022-12-27 15:41:09',
            ),
            104 => 
            array (
                'id' => 1164,
                'document_id' => 480,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:41:45',
                'updated_at' => '2022-12-27 15:41:45',
            ),
            105 => 
            array (
                'id' => 1165,
                'document_id' => 489,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-27 15:42:04',
                'updated_at' => '2022-12-27 15:42:04',
            ),
            106 => 
            array (
                'id' => 1166,
                'document_id' => 481,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:42:18',
                'updated_at' => '2022-12-27 15:42:18',
            ),
            107 => 
            array (
                'id' => 1167,
                'document_id' => 490,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-27 15:42:47',
                'updated_at' => '2022-12-27 15:42:47',
            ),
            108 => 
            array (
                'id' => 1168,
                'document_id' => 482,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:43:43',
                'updated_at' => '2022-12-27 15:43:43',
            ),
            109 => 
            array (
                'id' => 1169,
                'document_id' => 353,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-27 15:44:16',
                'updated_at' => '2022-12-27 15:44:16',
            ),
            110 => 
            array (
                'id' => 1170,
                'document_id' => 473,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-27 15:45:23',
                'updated_at' => '2022-12-27 15:45:23',
            ),
            111 => 
            array (
                'id' => 1171,
                'document_id' => 491,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 15:46:12',
                'updated_at' => '2022-12-27 15:46:12',
            ),
            112 => 
            array (
                'id' => 1172,
                'document_id' => 492,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 15:47:25',
                'updated_at' => '2022-12-27 15:47:25',
            ),
            113 => 
            array (
                'id' => 1173,
                'document_id' => 479,
                'user_id' => 38,
                'remarks' => 'SIGNED. For Printing.',
                'created_at' => '2022-12-27 15:47:38',
                'updated_at' => '2022-12-27 15:47:38',
            ),
            114 => 
            array (
                'id' => 1174,
                'document_id' => 493,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 15:48:21',
                'updated_at' => '2022-12-27 15:48:21',
            ),
            115 => 
            array (
                'id' => 1175,
                'document_id' => 494,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 15:50:41',
                'updated_at' => '2022-12-27 15:50:41',
            ),
            116 => 
            array (
                'id' => 1176,
                'document_id' => 466,
                'user_id' => 8,
                'remarks' => 'Mam,

For your initital.

Thank you',
                'created_at' => '2022-12-27 15:51:48',
                'updated_at' => '2022-12-27 15:51:48',
            ),
            117 => 
            array (
                'id' => 1177,
                'document_id' => 449,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:53:36',
                'updated_at' => '2022-12-27 15:53:36',
            ),
            118 => 
            array (
                'id' => 1178,
                'document_id' => 466,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-27 15:54:27',
                'updated_at' => '2022-12-27 15:54:27',
            ),
            119 => 
            array (
                'id' => 1179,
                'document_id' => 494,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:54:39',
                'updated_at' => '2022-12-27 15:54:39',
            ),
            120 => 
            array (
                'id' => 1180,
                'document_id' => 493,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:55:15',
                'updated_at' => '2022-12-27 15:55:15',
            ),
            121 => 
            array (
                'id' => 1181,
                'document_id' => 491,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:55:52',
                'updated_at' => '2022-12-27 15:55:52',
            ),
            122 => 
            array (
                'id' => 1182,
                'document_id' => 492,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-27 15:56:35',
                'updated_at' => '2022-12-27 15:56:35',
            ),
            123 => 
            array (
                'id' => 1183,
                'document_id' => 495,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-27 15:59:17',
                'updated_at' => '2022-12-27 15:59:17',
            ),
            124 => 
            array (
                'id' => 1184,
                'document_id' => 496,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:02:49',
                'updated_at' => '2022-12-27 16:02:49',
            ),
            125 => 
            array (
                'id' => 1185,
                'document_id' => 136,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-27 16:03:16',
                'updated_at' => '2022-12-27 16:03:16',
            ),
            126 => 
            array (
                'id' => 1186,
                'document_id' => 136,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-27 16:04:11',
                'updated_at' => '2022-12-27 16:04:11',
            ),
            127 => 
            array (
                'id' => 1187,
                'document_id' => 497,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:04:22',
                'updated_at' => '2022-12-27 16:04:22',
            ),
            128 => 
            array (
                'id' => 1189,
                'document_id' => 498,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:05:27',
                'updated_at' => '2022-12-27 16:05:27',
            ),
            129 => 
            array (
                'id' => 1190,
                'document_id' => 331,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-27 16:07:44',
                'updated_at' => '2022-12-27 16:07:44',
            ),
            130 => 
            array (
                'id' => 1191,
                'document_id' => 499,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:16:27',
                'updated_at' => '2022-12-27 16:16:27',
            ),
            131 => 
            array (
                'id' => 1192,
                'document_id' => 500,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:16:53',
                'updated_at' => '2022-12-27 16:16:53',
            ),
            132 => 
            array (
                'id' => 1193,
                'document_id' => 501,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:17:30',
                'updated_at' => '2022-12-27 16:17:30',
            ),
            133 => 
            array (
                'id' => 1194,
                'document_id' => 502,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:17:58',
                'updated_at' => '2022-12-27 16:17:58',
            ),
            134 => 
            array (
                'id' => 1195,
                'document_id' => 503,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:18:18',
                'updated_at' => '2022-12-27 16:18:18',
            ),
            135 => 
            array (
                'id' => 1196,
                'document_id' => 504,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:18:45',
                'updated_at' => '2022-12-27 16:18:45',
            ),
            136 => 
            array (
                'id' => 1197,
                'document_id' => 505,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:19:09',
                'updated_at' => '2022-12-27 16:19:09',
            ),
            137 => 
            array (
                'id' => 1198,
                'document_id' => 506,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:19:34',
                'updated_at' => '2022-12-27 16:19:34',
            ),
            138 => 
            array (
                'id' => 1199,
                'document_id' => 507,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:20:00',
                'updated_at' => '2022-12-27 16:20:00',
            ),
            139 => 
            array (
                'id' => 1200,
                'document_id' => 508,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:20:45',
                'updated_at' => '2022-12-27 16:20:45',
            ),
            140 => 
            array (
                'id' => 1201,
                'document_id' => 509,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:21:08',
                'updated_at' => '2022-12-27 16:21:08',
            ),
            141 => 
            array (
                'id' => 1202,
                'document_id' => 510,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:21:29',
                'updated_at' => '2022-12-27 16:21:29',
            ),
            142 => 
            array (
                'id' => 1203,
                'document_id' => 511,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:21:51',
                'updated_at' => '2022-12-27 16:21:51',
            ),
            143 => 
            array (
                'id' => 1204,
                'document_id' => 512,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:26:59',
                'updated_at' => '2022-12-27 16:26:59',
            ),
            144 => 
            array (
                'id' => 1205,
                'document_id' => 513,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:27:30',
                'updated_at' => '2022-12-27 16:27:30',
            ),
            145 => 
            array (
                'id' => 1206,
                'document_id' => 449,
                'user_id' => 38,
                'remarks' => 'SIGNED, for printing.',
                'created_at' => '2022-12-27 16:28:25',
                'updated_at' => '2022-12-27 16:28:25',
            ),
            146 => 
            array (
                'id' => 1207,
                'document_id' => 514,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:28:47',
                'updated_at' => '2022-12-27 16:28:47',
            ),
            147 => 
            array (
                'id' => 1208,
                'document_id' => 515,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:29:22',
                'updated_at' => '2022-12-27 16:29:22',
            ),
            148 => 
            array (
                'id' => 1209,
                'document_id' => 516,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:29:49',
                'updated_at' => '2022-12-27 16:29:49',
            ),
            149 => 
            array (
                'id' => 1210,
                'document_id' => 455,
                'user_id' => 38,
                'remarks' => 'SIGNED, fro printing.',
                'created_at' => '2022-12-27 16:29:57',
                'updated_at' => '2022-12-27 16:29:57',
            ),
            150 => 
            array (
                'id' => 1211,
                'document_id' => 517,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:30:14',
                'updated_at' => '2022-12-27 16:30:14',
            ),
            151 => 
            array (
                'id' => 1212,
                'document_id' => 518,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:30:37',
                'updated_at' => '2022-12-27 16:30:37',
            ),
            152 => 
            array (
                'id' => 1213,
                'document_id' => 519,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:31:04',
                'updated_at' => '2022-12-27 16:31:04',
            ),
            153 => 
            array (
                'id' => 1214,
                'document_id' => 520,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:31:27',
                'updated_at' => '2022-12-27 16:31:27',
            ),
            154 => 
            array (
                'id' => 1215,
                'document_id' => 521,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:31:51',
                'updated_at' => '2022-12-27 16:31:51',
            ),
            155 => 
            array (
                'id' => 1216,
                'document_id' => 522,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:32:17',
                'updated_at' => '2022-12-27 16:32:17',
            ),
            156 => 
            array (
                'id' => 1217,
                'document_id' => 523,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:34:10',
                'updated_at' => '2022-12-27 16:34:10',
            ),
            157 => 
            array (
                'id' => 1218,
                'document_id' => 524,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:34:56',
                'updated_at' => '2022-12-27 16:34:56',
            ),
            158 => 
            array (
                'id' => 1219,
                'document_id' => 525,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:35:21',
                'updated_at' => '2022-12-27 16:35:21',
            ),
            159 => 
            array (
                'id' => 1220,
                'document_id' => 526,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:35:45',
                'updated_at' => '2022-12-27 16:35:45',
            ),
            160 => 
            array (
                'id' => 1221,
                'document_id' => 456,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-27 16:35:47',
                'updated_at' => '2022-12-27 16:35:47',
            ),
            161 => 
            array (
                'id' => 1222,
                'document_id' => 527,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:36:11',
                'updated_at' => '2022-12-27 16:36:11',
            ),
            162 => 
            array (
                'id' => 1223,
                'document_id' => 528,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:36:38',
                'updated_at' => '2022-12-27 16:36:38',
            ),
            163 => 
            array (
                'id' => 1224,
                'document_id' => 529,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:36:59',
                'updated_at' => '2022-12-27 16:36:59',
            ),
            164 => 
            array (
                'id' => 1225,
                'document_id' => 530,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:37:18',
                'updated_at' => '2022-12-27 16:37:18',
            ),
            165 => 
            array (
                'id' => 1226,
                'document_id' => 531,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:37:39',
                'updated_at' => '2022-12-27 16:37:39',
            ),
            166 => 
            array (
                'id' => 1227,
                'document_id' => 532,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-27 16:38:06',
                'updated_at' => '2022-12-27 16:38:06',
            ),
            167 => 
            array (
                'id' => 1228,
                'document_id' => 457,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-27 16:39:33',
                'updated_at' => '2022-12-27 16:39:33',
            ),
            168 => 
            array (
                'id' => 1229,
                'document_id' => 533,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-27 16:39:37',
                'updated_at' => '2022-12-27 16:39:37',
            ),
            169 => 
            array (
                'id' => 1230,
                'document_id' => 473,
                'user_id' => 8,
                'remarks' => NULL,
                'created_at' => '2022-12-27 16:40:29',
                'updated_at' => '2022-12-27 16:40:29',
            ),
            170 => 
            array (
                'id' => 1231,
                'document_id' => 461,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-27 16:40:41',
                'updated_at' => '2022-12-27 16:40:41',
            ),
            171 => 
            array (
                'id' => 1232,
                'document_id' => 534,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-27 16:41:38',
                'updated_at' => '2022-12-27 16:41:38',
            ),
            172 => 
            array (
                'id' => 1233,
                'document_id' => 535,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 16:41:46',
                'updated_at' => '2022-12-27 16:41:46',
            ),
            173 => 
            array (
                'id' => 1234,
                'document_id' => 462,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-27 16:42:00',
                'updated_at' => '2022-12-27 16:42:00',
            ),
            174 => 
            array (
                'id' => 1235,
                'document_id' => 463,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-27 16:43:18',
                'updated_at' => '2022-12-27 16:43:18',
            ),
            175 => 
            array (
                'id' => 1236,
                'document_id' => 536,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 16:43:34',
                'updated_at' => '2022-12-27 16:43:34',
            ),
            176 => 
            array (
                'id' => 1237,
                'document_id' => 464,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-27 16:44:12',
                'updated_at' => '2022-12-27 16:44:12',
            ),
            177 => 
            array (
                'id' => 1238,
                'document_id' => 467,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-27 16:44:59',
                'updated_at' => '2022-12-27 16:44:59',
            ),
            178 => 
            array (
                'id' => 1239,
                'document_id' => 537,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 16:45:20',
                'updated_at' => '2022-12-27 16:45:20',
            ),
            179 => 
            array (
                'id' => 1240,
                'document_id' => 535,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-27 16:45:29',
                'updated_at' => '2022-12-27 16:45:29',
            ),
            180 => 
            array (
                'id' => 1241,
                'document_id' => 536,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-27 16:45:47',
                'updated_at' => '2022-12-27 16:45:47',
            ),
            181 => 
            array (
                'id' => 1242,
                'document_id' => 473,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-27 16:45:51',
                'updated_at' => '2022-12-27 16:45:51',
            ),
            182 => 
            array (
                'id' => 1243,
                'document_id' => 537,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-27 16:46:05',
                'updated_at' => '2022-12-27 16:46:05',
            ),
            183 => 
            array (
                'id' => 1244,
                'document_id' => 470,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-27 16:46:37',
                'updated_at' => '2022-12-27 16:46:37',
            ),
            184 => 
            array (
                'id' => 1245,
                'document_id' => 538,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 16:46:44',
                'updated_at' => '2022-12-27 16:46:44',
            ),
            185 => 
            array (
                'id' => 1246,
                'document_id' => 539,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 16:48:04',
                'updated_at' => '2022-12-27 16:48:04',
            ),
            186 => 
            array (
                'id' => 1247,
                'document_id' => 540,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-27 16:49:03',
                'updated_at' => '2022-12-27 16:49:03',
            ),
            187 => 
            array (
                'id' => 1248,
                'document_id' => 541,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 16:49:30',
                'updated_at' => '2022-12-27 16:49:30',
            ),
            188 => 
            array (
                'id' => 1249,
                'document_id' => 438,
                'user_id' => 26,
                'remarks' => 'Cel, pls sign ORS. Thanks',
                'created_at' => '2022-12-27 16:50:28',
                'updated_at' => '2022-12-27 16:50:28',
            ),
            189 => 
            array (
                'id' => 1250,
                'document_id' => 542,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 16:50:48',
                'updated_at' => '2022-12-27 16:50:48',
            ),
            190 => 
            array (
                'id' => 1251,
                'document_id' => 438,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-27 16:52:20',
                'updated_at' => '2022-12-27 16:52:20',
            ),
            191 => 
            array (
                'id' => 1252,
                'document_id' => 542,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-27 16:56:19',
                'updated_at' => '2022-12-27 16:56:19',
            ),
            192 => 
            array (
                'id' => 1253,
                'document_id' => 541,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-27 16:56:36',
                'updated_at' => '2022-12-27 16:56:36',
            ),
            193 => 
            array (
                'id' => 1254,
                'document_id' => 539,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-27 16:56:54',
                'updated_at' => '2022-12-27 16:56:54',
            ),
            194 => 
            array (
                'id' => 1255,
                'document_id' => 538,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-27 16:57:09',
                'updated_at' => '2022-12-27 16:57:09',
            ),
            195 => 
            array (
                'id' => 1256,
                'document_id' => 543,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 16:57:33',
                'updated_at' => '2022-12-27 16:57:33',
            ),
            196 => 
            array (
                'id' => 1257,
                'document_id' => 544,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 16:57:56',
                'updated_at' => '2022-12-27 16:57:56',
            ),
            197 => 
            array (
                'id' => 1258,
                'document_id' => 545,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 16:59:45',
                'updated_at' => '2022-12-27 16:59:45',
            ),
            198 => 
            array (
                'id' => 1259,
                'document_id' => 543,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-27 17:00:17',
                'updated_at' => '2022-12-27 17:00:17',
            ),
            199 => 
            array (
                'id' => 1260,
                'document_id' => 546,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-27 17:01:08',
                'updated_at' => '2022-12-27 17:01:08',
            ),
            200 => 
            array (
                'id' => 1261,
                'document_id' => 547,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 17:01:27',
                'updated_at' => '2022-12-27 17:01:27',
            ),
            201 => 
            array (
                'id' => 1262,
                'document_id' => 548,
                'user_id' => 6,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 17:02:20',
                'updated_at' => '2022-12-27 17:02:20',
            ),
            202 => 
            array (
                'id' => 1263,
                'document_id' => 549,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-27 17:02:40',
                'updated_at' => '2022-12-27 17:02:40',
            ),
            203 => 
            array (
                'id' => 1264,
                'document_id' => 550,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-27 17:04:13',
                'updated_at' => '2022-12-27 17:04:13',
            ),
            204 => 
            array (
                'id' => 1265,
                'document_id' => 551,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 17:04:23',
                'updated_at' => '2022-12-27 17:04:23',
            ),
            205 => 
            array (
                'id' => 1266,
                'document_id' => 552,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 17:05:28',
                'updated_at' => '2022-12-27 17:05:28',
            ),
            206 => 
            array (
                'id' => 1267,
                'document_id' => 552,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-27 17:09:17',
                'updated_at' => '2022-12-27 17:09:17',
            ),
            207 => 
            array (
                'id' => 1268,
                'document_id' => 551,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-27 17:09:31',
                'updated_at' => '2022-12-27 17:09:31',
            ),
            208 => 
            array (
                'id' => 1269,
                'document_id' => 474,
                'user_id' => 38,
                'remarks' => 'Signed, for signature.',
                'created_at' => '2022-12-27 17:11:00',
                'updated_at' => '2022-12-27 17:11:00',
            ),
            209 => 
            array (
                'id' => 1270,
                'document_id' => 475,
                'user_id' => 38,
                'remarks' => 'Signed, for signature.',
                'created_at' => '2022-12-27 17:11:43',
                'updated_at' => '2022-12-27 17:11:43',
            ),
            210 => 
            array (
                'id' => 1271,
                'document_id' => 544,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-27 17:14:16',
                'updated_at' => '2022-12-27 17:14:16',
            ),
            211 => 
            array (
                'id' => 1272,
                'document_id' => 548,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-27 17:15:08',
                'updated_at' => '2022-12-27 17:15:08',
            ),
            212 => 
            array (
                'id' => 1273,
                'document_id' => 331,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-27 17:15:49',
                'updated_at' => '2022-12-27 17:15:49',
            ),
            213 => 
            array (
                'id' => 1274,
                'document_id' => 553,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 17:26:54',
                'updated_at' => '2022-12-27 17:26:54',
            ),
            214 => 
            array (
                'id' => 1275,
                'document_id' => 475,
                'user_id' => 38,
                'remarks' => 'Returned',
                'created_at' => '2022-12-27 17:32:05',
                'updated_at' => '2022-12-27 17:32:05',
            ),
            215 => 
            array (
                'id' => 1276,
                'document_id' => 478,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-27 17:38:57',
                'updated_at' => '2022-12-27 17:38:57',
            ),
            216 => 
            array (
                'id' => 1277,
                'document_id' => 480,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-27 17:39:55',
                'updated_at' => '2022-12-27 17:39:55',
            ),
            217 => 
            array (
                'id' => 1278,
                'document_id' => 481,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-27 17:40:49',
                'updated_at' => '2022-12-27 17:40:49',
            ),
            218 => 
            array (
                'id' => 1279,
                'document_id' => 482,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-27 17:41:48',
                'updated_at' => '2022-12-27 17:41:48',
            ),
            219 => 
            array (
                'id' => 1280,
                'document_id' => 483,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-27 17:43:40',
                'updated_at' => '2022-12-27 17:43:40',
            ),
            220 => 
            array (
                'id' => 1281,
                'document_id' => 491,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-27 17:44:59',
                'updated_at' => '2022-12-27 17:44:59',
            ),
            221 => 
            array (
                'id' => 1282,
                'document_id' => 492,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-27 17:46:00',
                'updated_at' => '2022-12-27 17:46:00',
            ),
            222 => 
            array (
                'id' => 1283,
                'document_id' => 554,
                'user_id' => 8,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-27 17:49:20',
                'updated_at' => '2022-12-27 17:49:20',
            ),
            223 => 
            array (
                'id' => 1284,
                'document_id' => 493,
                'user_id' => 38,
                'remarks' => NULL,
                'created_at' => '2022-12-27 17:53:29',
                'updated_at' => '2022-12-27 17:53:29',
            ),
            224 => 
            array (
                'id' => 1285,
                'document_id' => 489,
                'user_id' => 5,
                'remarks' => 'Please consolidate with reports from other POs and submit to CO on or before January 4, 2023.  Thank you.',
                'created_at' => '2022-12-28 08:51:54',
                'updated_at' => '2022-12-28 08:51:54',
            ),
            225 => 
            array (
                'id' => 1286,
                'document_id' => 490,
                'user_id' => 5,
                'remarks' => 'Please review and consolidate with reports from other POs, for submission to CO on or before January 3, 2023.  Thank you.',
                'created_at' => '2022-12-28 09:08:22',
                'updated_at' => '2022-12-28 09:08:22',
            ),
            226 => 
            array (
                'id' => 1287,
                'document_id' => 555,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-28 09:32:02',
                'updated_at' => '2022-12-28 09:32:02',
            ),
            227 => 
            array (
                'id' => 1288,
                'document_id' => 556,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-28 09:33:35',
                'updated_at' => '2022-12-28 09:33:35',
            ),
            228 => 
            array (
                'id' => 1289,
                'document_id' => 557,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-28 09:34:51',
                'updated_at' => '2022-12-28 09:34:51',
            ),
            229 => 
            array (
                'id' => 1290,
                'document_id' => 550,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 09:42:31',
                'updated_at' => '2022-12-28 09:42:31',
            ),
            230 => 
            array (
                'id' => 1291,
                'document_id' => 544,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 09:44:24',
                'updated_at' => '2022-12-28 09:44:24',
            ),
            231 => 
            array (
                'id' => 1292,
                'document_id' => 545,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 09:45:47',
                'updated_at' => '2022-12-28 09:45:47',
            ),
            232 => 
            array (
                'id' => 1293,
                'document_id' => 547,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 09:49:51',
                'updated_at' => '2022-12-28 09:49:51',
            ),
            233 => 
            array (
                'id' => 1294,
                'document_id' => 438,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 09:50:33',
                'updated_at' => '2022-12-28 09:50:33',
            ),
            234 => 
            array (
                'id' => 1295,
                'document_id' => 475,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 09:51:31',
                'updated_at' => '2022-12-28 09:51:31',
            ),
            235 => 
            array (
                'id' => 1296,
                'document_id' => 554,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 10:02:34',
                'updated_at' => '2022-12-28 10:02:34',
            ),
            236 => 
            array (
                'id' => 1297,
                'document_id' => 550,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 10:03:37',
                'updated_at' => '2022-12-28 10:03:37',
            ),
            237 => 
            array (
                'id' => 1298,
                'document_id' => 465,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 10:17:31',
                'updated_at' => '2022-12-28 10:17:31',
            ),
            238 => 
            array (
                'id' => 1299,
                'document_id' => 205,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 10:19:07',
                'updated_at' => '2022-12-28 10:19:07',
            ),
            239 => 
            array (
                'id' => 1300,
                'document_id' => 207,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 10:19:55',
                'updated_at' => '2022-12-28 10:19:55',
            ),
            240 => 
            array (
                'id' => 1301,
                'document_id' => 134,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 10:31:58',
                'updated_at' => '2022-12-28 10:31:58',
            ),
            241 => 
            array (
                'id' => 1302,
                'document_id' => 137,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 10:35:09',
                'updated_at' => '2022-12-28 10:35:09',
            ),
            242 => 
            array (
                'id' => 1303,
                'document_id' => 138,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 10:41:27',
                'updated_at' => '2022-12-28 10:41:27',
            ),
            243 => 
            array (
                'id' => 1304,
                'document_id' => 139,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 10:42:13',
                'updated_at' => '2022-12-28 10:42:13',
            ),
            244 => 
            array (
                'id' => 1305,
                'document_id' => 145,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 10:43:10',
                'updated_at' => '2022-12-28 10:43:10',
            ),
            245 => 
            array (
                'id' => 1306,
                'document_id' => 149,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 10:44:38',
                'updated_at' => '2022-12-28 10:44:38',
            ),
            246 => 
            array (
                'id' => 1307,
                'document_id' => 156,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 10:46:03',
                'updated_at' => '2022-12-28 10:46:03',
            ),
            247 => 
            array (
                'id' => 1308,
                'document_id' => 184,
                'user_id' => 1,
                'remarks' => 'No signature.',
                'created_at' => '2022-12-28 10:47:50',
                'updated_at' => '2022-12-28 10:47:50',
            ),
            248 => 
            array (
                'id' => 1309,
                'document_id' => 186,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 10:48:52',
                'updated_at' => '2022-12-28 10:48:52',
            ),
            249 => 
            array (
                'id' => 1310,
                'document_id' => 465,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 10:49:47',
                'updated_at' => '2022-12-28 10:49:47',
            ),
            250 => 
            array (
                'id' => 1311,
                'document_id' => 267,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 10:50:43',
                'updated_at' => '2022-12-28 10:50:43',
            ),
            251 => 
            array (
                'id' => 1314,
                'document_id' => 558,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-28 10:51:59',
                'updated_at' => '2022-12-28 10:51:59',
            ),
            252 => 
            array (
                'id' => 1315,
                'document_id' => 184,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 10:52:32',
                'updated_at' => '2022-12-28 10:52:32',
            ),
            253 => 
            array (
                'id' => 1316,
                'document_id' => 137,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 10:53:06',
                'updated_at' => '2022-12-28 10:53:06',
            ),
            254 => 
            array (
                'id' => 1317,
                'document_id' => 138,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 10:53:35',
                'updated_at' => '2022-12-28 10:53:35',
            ),
            255 => 
            array (
                'id' => 1318,
                'document_id' => 139,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 10:54:06',
                'updated_at' => '2022-12-28 10:54:06',
            ),
            256 => 
            array (
                'id' => 1319,
                'document_id' => 145,
                'user_id' => 3,
                'remarks' => 'Kindly reconcile our records to R10 CA Focal. Ensure compliance.',
                'created_at' => '2022-12-28 10:55:04',
                'updated_at' => '2022-12-28 10:55:04',
            ),
            257 => 
            array (
                'id' => 1320,
                'document_id' => 149,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 10:55:35',
                'updated_at' => '2022-12-28 10:55:35',
            ),
            258 => 
            array (
                'id' => 1321,
                'document_id' => 559,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-28 10:55:38',
                'updated_at' => '2022-12-28 10:55:38',
            ),
            259 => 
            array (
                'id' => 1322,
                'document_id' => 156,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 10:56:51',
                'updated_at' => '2022-12-28 10:56:51',
            ),
            260 => 
            array (
                'id' => 1323,
                'document_id' => 550,
                'user_id' => 10,
                'remarks' => 'Mam,

For your initial.

Thank you.',
                'created_at' => '2022-12-28 11:22:13',
                'updated_at' => '2022-12-28 11:22:13',
            ),
            261 => 
            array (
                'id' => 1324,
                'document_id' => 558,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 11:37:54',
                'updated_at' => '2022-12-28 11:37:54',
            ),
            262 => 
            array (
                'id' => 1325,
                'document_id' => 559,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 11:40:14',
                'updated_at' => '2022-12-28 11:40:14',
            ),
            263 => 
            array (
                'id' => 1326,
                'document_id' => 550,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 11:43:37',
                'updated_at' => '2022-12-28 11:43:37',
            ),
            264 => 
            array (
                'id' => 1327,
                'document_id' => 272,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 11:44:28',
                'updated_at' => '2022-12-28 11:44:28',
            ),
            265 => 
            array (
                'id' => 1328,
                'document_id' => 550,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 11:48:54',
                'updated_at' => '2022-12-28 11:48:54',
            ),
            266 => 
            array (
                'id' => 1329,
                'document_id' => 447,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 11:49:57',
                'updated_at' => '2022-12-28 11:49:57',
            ),
            267 => 
            array (
                'id' => 1330,
                'document_id' => 259,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 11:53:55',
                'updated_at' => '2022-12-28 11:53:55',
            ),
            268 => 
            array (
                'id' => 1331,
                'document_id' => 560,
                'user_id' => 35,
                'remarks' => 'Forwarded to ROD',
                'created_at' => '2022-12-28 11:55:11',
                'updated_at' => '2022-12-28 11:55:11',
            ),
            269 => 
            array (
                'id' => 1332,
                'document_id' => 370,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 11:57:58',
                'updated_at' => '2022-12-28 11:57:58',
            ),
            270 => 
            array (
                'id' => 1333,
                'document_id' => 560,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 11:58:35',
                'updated_at' => '2022-12-28 11:58:35',
            ),
            271 => 
            array (
                'id' => 1334,
                'document_id' => 258,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 12:00:24',
                'updated_at' => '2022-12-28 12:00:24',
            ),
            272 => 
            array (
                'id' => 1335,
                'document_id' => 256,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 12:02:22',
                'updated_at' => '2022-12-28 12:02:22',
            ),
            273 => 
            array (
                'id' => 1336,
                'document_id' => 155,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 12:04:55',
                'updated_at' => '2022-12-28 12:04:55',
            ),
            274 => 
            array (
                'id' => 1337,
                'document_id' => 255,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 12:05:55',
                'updated_at' => '2022-12-28 12:05:55',
            ),
            275 => 
            array (
                'id' => 1338,
                'document_id' => 253,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 12:06:42',
                'updated_at' => '2022-12-28 12:06:42',
            ),
            276 => 
            array (
                'id' => 1339,
                'document_id' => 254,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 12:07:27',
                'updated_at' => '2022-12-28 12:07:27',
            ),
            277 => 
            array (
                'id' => 1340,
                'document_id' => 252,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 12:08:04',
                'updated_at' => '2022-12-28 12:08:04',
            ),
            278 => 
            array (
                'id' => 1341,
                'document_id' => 250,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 12:08:43',
                'updated_at' => '2022-12-28 12:08:43',
            ),
            279 => 
            array (
                'id' => 1342,
                'document_id' => 230,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 12:09:37',
                'updated_at' => '2022-12-28 12:09:37',
            ),
            280 => 
            array (
                'id' => 1343,
                'document_id' => 561,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-28 12:22:58',
                'updated_at' => '2022-12-28 12:22:58',
            ),
            281 => 
            array (
                'id' => 1344,
                'document_id' => 562,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-28 12:24:40',
                'updated_at' => '2022-12-28 12:24:40',
            ),
            282 => 
            array (
                'id' => 1345,
                'document_id' => 563,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-28 12:32:58',
                'updated_at' => '2022-12-28 12:32:58',
            ),
            283 => 
            array (
                'id' => 1346,
                'document_id' => 564,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-28 12:42:20',
                'updated_at' => '2022-12-28 12:42:20',
            ),
            284 => 
            array (
                'id' => 1347,
                'document_id' => 565,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-28 12:48:09',
                'updated_at' => '2022-12-28 12:48:09',
            ),
            285 => 
            array (
                'id' => 1348,
                'document_id' => 139,
                'user_id' => 10,
                'remarks' => 'Mam,

For your iniital.

Thank you.',
                'created_at' => '2022-12-28 12:50:49',
                'updated_at' => '2022-12-28 12:50:49',
            ),
            286 => 
            array (
                'id' => 1349,
                'document_id' => 138,
                'user_id' => 10,
                'remarks' => 'Mam,.

For your initial.

Thank you.',
                'created_at' => '2022-12-28 12:52:28',
                'updated_at' => '2022-12-28 12:52:28',
            ),
            287 => 
            array (
                'id' => 1350,
                'document_id' => 566,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-28 13:15:44',
                'updated_at' => '2022-12-28 13:15:44',
            ),
            288 => 
            array (
                'id' => 1351,
                'document_id' => 134,
                'user_id' => 26,
                'remarks' => 'Gie, pls process request of Antique PO.... Ty',
                'created_at' => '2022-12-28 13:19:53',
                'updated_at' => '2022-12-28 13:19:53',
            ),
            289 => 
            array (
                'id' => 1352,
                'document_id' => 139,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 13:20:57',
                'updated_at' => '2022-12-28 13:20:57',
            ),
            290 => 
            array (
                'id' => 1353,
                'document_id' => 203,
                'user_id' => 26,
                'remarks' => 'Ja, acted/approved by RD already. TY',
                'created_at' => '2022-12-28 13:21:19',
                'updated_at' => '2022-12-28 13:21:19',
            ),
            291 => 
            array (
                'id' => 1354,
                'document_id' => 138,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 13:21:52',
                'updated_at' => '2022-12-28 13:21:52',
            ),
            292 => 
            array (
                'id' => 1355,
                'document_id' => 405,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-28 13:26:49',
                'updated_at' => '2022-12-28 13:26:49',
            ),
            293 => 
            array (
                'id' => 1356,
                'document_id' => 408,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-28 13:28:12',
                'updated_at' => '2022-12-28 13:28:12',
            ),
            294 => 
            array (
                'id' => 1357,
                'document_id' => 377,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-28 13:37:39',
                'updated_at' => '2022-12-28 13:37:39',
            ),
            295 => 
            array (
                'id' => 1358,
                'document_id' => 567,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-28 13:38:44',
                'updated_at' => '2022-12-28 13:38:44',
            ),
            296 => 
            array (
                'id' => 1359,
                'document_id' => 381,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-28 13:38:46',
                'updated_at' => '2022-12-28 13:38:46',
            ),
            297 => 
            array (
                'id' => 1360,
                'document_id' => 382,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-28 13:39:17',
                'updated_at' => '2022-12-28 13:39:17',
            ),
            298 => 
            array (
                'id' => 1361,
                'document_id' => 384,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-28 13:40:09',
                'updated_at' => '2022-12-28 13:40:09',
            ),
            299 => 
            array (
                'id' => 1362,
                'document_id' => 568,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-28 13:40:30',
                'updated_at' => '2022-12-28 13:40:30',
            ),
            300 => 
            array (
                'id' => 1363,
                'document_id' => 385,
                'user_id' => 26,
                'remarks' => NULL,
                'created_at' => '2022-12-28 13:41:07',
                'updated_at' => '2022-12-28 13:41:07',
            ),
            301 => 
            array (
                'id' => 1364,
                'document_id' => 269,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-28 13:49:28',
                'updated_at' => '2022-12-28 13:49:28',
            ),
            302 => 
            array (
                'id' => 1365,
                'document_id' => 568,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-28 13:50:03',
                'updated_at' => '2022-12-28 13:50:03',
            ),
            303 => 
            array (
                'id' => 1366,
                'document_id' => 567,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-28 13:50:19',
                'updated_at' => '2022-12-28 13:50:19',
            ),
            304 => 
            array (
                'id' => 1367,
                'document_id' => 229,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 13:50:47',
                'updated_at' => '2022-12-28 13:50:47',
            ),
            305 => 
            array (
                'id' => 1368,
                'document_id' => 228,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 13:53:12',
                'updated_at' => '2022-12-28 13:53:12',
            ),
            306 => 
            array (
                'id' => 1369,
                'document_id' => 226,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 13:53:50',
                'updated_at' => '2022-12-28 13:53:50',
            ),
            307 => 
            array (
                'id' => 1370,
                'document_id' => 225,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 13:54:43',
                'updated_at' => '2022-12-28 13:54:43',
            ),
            308 => 
            array (
                'id' => 1371,
                'document_id' => 224,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 13:55:20',
                'updated_at' => '2022-12-28 13:55:20',
            ),
            309 => 
            array (
                'id' => 1372,
                'document_id' => 223,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 13:56:00',
                'updated_at' => '2022-12-28 13:56:00',
            ),
            310 => 
            array (
                'id' => 1373,
                'document_id' => 222,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 13:56:34',
                'updated_at' => '2022-12-28 13:56:34',
            ),
            311 => 
            array (
                'id' => 1374,
                'document_id' => 221,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 13:57:13',
                'updated_at' => '2022-12-28 13:57:13',
            ),
            312 => 
            array (
                'id' => 1375,
                'document_id' => 220,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 13:57:46',
                'updated_at' => '2022-12-28 13:57:46',
            ),
            313 => 
            array (
                'id' => 1376,
                'document_id' => 219,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 13:58:16',
                'updated_at' => '2022-12-28 13:58:16',
            ),
            314 => 
            array (
                'id' => 1377,
                'document_id' => 218,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 13:58:55',
                'updated_at' => '2022-12-28 13:58:55',
            ),
            315 => 
            array (
                'id' => 1378,
                'document_id' => 569,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-28 13:59:32',
                'updated_at' => '2022-12-28 13:59:32',
            ),
            316 => 
            array (
                'id' => 1379,
                'document_id' => 138,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 14:01:18',
                'updated_at' => '2022-12-28 14:01:18',
            ),
            317 => 
            array (
                'id' => 1380,
                'document_id' => 570,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-28 14:03:01',
                'updated_at' => '2022-12-28 14:03:01',
            ),
            318 => 
            array (
                'id' => 1381,
                'document_id' => 139,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 14:05:45',
                'updated_at' => '2022-12-28 14:05:45',
            ),
            319 => 
            array (
                'id' => 1382,
                'document_id' => 466,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 14:08:03',
                'updated_at' => '2022-12-28 14:08:03',
            ),
            320 => 
            array (
                'id' => 1383,
                'document_id' => 472,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 14:08:42',
                'updated_at' => '2022-12-28 14:08:42',
            ),
            321 => 
            array (
                'id' => 1384,
                'document_id' => 476,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 14:09:27',
                'updated_at' => '2022-12-28 14:09:27',
            ),
            322 => 
            array (
                'id' => 1385,
                'document_id' => 484,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 14:10:15',
                'updated_at' => '2022-12-28 14:10:15',
            ),
            323 => 
            array (
                'id' => 1386,
                'document_id' => 487,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 14:10:53',
                'updated_at' => '2022-12-28 14:10:53',
            ),
            324 => 
            array (
                'id' => 1387,
                'document_id' => 450,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 14:12:05',
                'updated_at' => '2022-12-28 14:12:05',
            ),
            325 => 
            array (
                'id' => 1388,
                'document_id' => 451,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 14:12:42',
                'updated_at' => '2022-12-28 14:12:42',
            ),
            326 => 
            array (
                'id' => 1389,
                'document_id' => 546,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 14:13:24',
                'updated_at' => '2022-12-28 14:13:24',
            ),
            327 => 
            array (
                'id' => 1390,
                'document_id' => 548,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 14:14:33',
                'updated_at' => '2022-12-28 14:14:33',
            ),
            328 => 
            array (
                'id' => 1391,
                'document_id' => 549,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 14:15:22',
                'updated_at' => '2022-12-28 14:15:22',
            ),
            329 => 
            array (
                'id' => 1392,
                'document_id' => 554,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 14:16:40',
                'updated_at' => '2022-12-28 14:16:40',
            ),
            330 => 
            array (
                'id' => 1393,
                'document_id' => 453,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 14:18:22',
                'updated_at' => '2022-12-28 14:18:22',
            ),
            331 => 
            array (
                'id' => 1394,
                'document_id' => 346,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 14:18:51',
                'updated_at' => '2022-12-28 14:18:51',
            ),
            332 => 
            array (
                'id' => 1395,
                'document_id' => 347,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 14:19:35',
                'updated_at' => '2022-12-28 14:19:35',
            ),
            333 => 
            array (
                'id' => 1396,
                'document_id' => 349,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 14:20:17',
                'updated_at' => '2022-12-28 14:20:17',
            ),
            334 => 
            array (
                'id' => 1397,
                'document_id' => 563,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 14:21:18',
                'updated_at' => '2022-12-28 14:21:18',
            ),
            335 => 
            array (
                'id' => 1398,
                'document_id' => 543,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 14:23:26',
                'updated_at' => '2022-12-28 14:23:26',
            ),
            336 => 
            array (
                'id' => 1399,
                'document_id' => 63,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 14:25:56',
                'updated_at' => '2022-12-28 14:25:56',
            ),
            337 => 
            array (
                'id' => 1400,
                'document_id' => 567,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 14:26:58',
                'updated_at' => '2022-12-28 14:26:58',
            ),
            338 => 
            array (
                'id' => 1401,
                'document_id' => 94,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 14:27:55',
                'updated_at' => '2022-12-28 14:27:55',
            ),
            339 => 
            array (
                'id' => 1402,
                'document_id' => 163,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 14:30:26',
                'updated_at' => '2022-12-28 14:30:26',
            ),
            340 => 
            array (
                'id' => 1403,
                'document_id' => 275,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 14:31:38',
                'updated_at' => '2022-12-28 14:31:38',
            ),
            341 => 
            array (
                'id' => 1404,
                'document_id' => 277,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 14:32:24',
                'updated_at' => '2022-12-28 14:32:24',
            ),
            342 => 
            array (
                'id' => 1405,
                'document_id' => 279,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 14:32:51',
                'updated_at' => '2022-12-28 14:32:51',
            ),
            343 => 
            array (
                'id' => 1406,
                'document_id' => 330,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 14:33:46',
                'updated_at' => '2022-12-28 14:33:46',
            ),
            344 => 
            array (
                'id' => 1407,
                'document_id' => 128,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 14:38:11',
                'updated_at' => '2022-12-28 14:38:11',
            ),
            345 => 
            array (
                'id' => 1408,
                'document_id' => 126,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 14:39:18',
                'updated_at' => '2022-12-28 14:39:18',
            ),
            346 => 
            array (
                'id' => 1409,
                'document_id' => 131,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 14:40:19',
                'updated_at' => '2022-12-28 14:40:19',
            ),
            347 => 
            array (
                'id' => 1410,
                'document_id' => 154,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 14:41:23',
                'updated_at' => '2022-12-28 14:41:23',
            ),
            348 => 
            array (
                'id' => 1411,
                'document_id' => 570,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-28 14:41:30',
                'updated_at' => '2022-12-28 14:41:30',
            ),
            349 => 
            array (
                'id' => 1412,
                'document_id' => 569,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-28 14:41:48',
                'updated_at' => '2022-12-28 14:41:48',
            ),
            350 => 
            array (
                'id' => 1413,
                'document_id' => 571,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-28 14:42:28',
                'updated_at' => '2022-12-28 14:42:28',
            ),
            351 => 
            array (
                'id' => 1414,
                'document_id' => 204,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 14:43:06',
                'updated_at' => '2022-12-28 14:43:06',
            ),
            352 => 
            array (
                'id' => 1415,
                'document_id' => 213,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 14:43:54',
                'updated_at' => '2022-12-28 14:43:54',
            ),
            353 => 
            array (
                'id' => 1416,
                'document_id' => 326,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 14:44:50',
                'updated_at' => '2022-12-28 14:44:50',
            ),
            354 => 
            array (
                'id' => 1417,
                'document_id' => 566,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 14:46:58',
                'updated_at' => '2022-12-28 14:46:58',
            ),
            355 => 
            array (
                'id' => 1418,
                'document_id' => 571,
                'user_id' => 1,
                'remarks' => 'Signed',
                'created_at' => '2022-12-28 14:47:59',
                'updated_at' => '2022-12-28 14:47:59',
            ),
            356 => 
            array (
                'id' => 1419,
                'document_id' => 143,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 14:49:43',
                'updated_at' => '2022-12-28 14:49:43',
            ),
            357 => 
            array (
                'id' => 1420,
                'document_id' => 278,
                'user_id' => 1,
                'remarks' => NULL,
                'created_at' => '2022-12-28 14:51:21',
                'updated_at' => '2022-12-28 14:51:21',
            ),
            358 => 
            array (
                'id' => 1421,
                'document_id' => 349,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 14:53:45',
                'updated_at' => '2022-12-28 14:53:45',
            ),
            359 => 
            array (
                'id' => 1422,
                'document_id' => 566,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 14:56:09',
                'updated_at' => '2022-12-28 14:56:09',
            ),
            360 => 
            array (
                'id' => 1423,
                'document_id' => 472,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 14:56:49',
                'updated_at' => '2022-12-28 14:56:49',
            ),
            361 => 
            array (
                'id' => 1424,
                'document_id' => 572,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-28 14:57:16',
                'updated_at' => '2022-12-28 14:57:16',
            ),
            362 => 
            array (
                'id' => 1425,
                'document_id' => 476,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 14:57:33',
                'updated_at' => '2022-12-28 14:57:33',
            ),
            363 => 
            array (
                'id' => 1426,
                'document_id' => 484,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 14:58:02',
                'updated_at' => '2022-12-28 14:58:02',
            ),
            364 => 
            array (
                'id' => 1427,
                'document_id' => 487,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 14:58:21',
                'updated_at' => '2022-12-28 14:58:21',
            ),
            365 => 
            array (
                'id' => 1428,
                'document_id' => 546,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 14:58:50',
                'updated_at' => '2022-12-28 14:58:50',
            ),
            366 => 
            array (
                'id' => 1429,
                'document_id' => 549,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 14:59:22',
                'updated_at' => '2022-12-28 14:59:22',
            ),
            367 => 
            array (
                'id' => 1430,
                'document_id' => 573,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-28 15:00:36',
                'updated_at' => '2022-12-28 15:00:36',
            ),
            368 => 
            array (
                'id' => 1431,
                'document_id' => 574,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-28 15:02:14',
                'updated_at' => '2022-12-28 15:02:14',
            ),
            369 => 
            array (
                'id' => 1432,
                'document_id' => 346,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 15:02:53',
                'updated_at' => '2022-12-28 15:02:53',
            ),
            370 => 
            array (
                'id' => 1433,
                'document_id' => 347,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 15:03:29',
                'updated_at' => '2022-12-28 15:03:29',
            ),
            371 => 
            array (
                'id' => 1434,
                'document_id' => 330,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 15:03:56',
                'updated_at' => '2022-12-28 15:03:56',
            ),
            372 => 
            array (
                'id' => 1435,
                'document_id' => 275,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 15:04:30',
                'updated_at' => '2022-12-28 15:04:30',
            ),
            373 => 
            array (
                'id' => 1436,
                'document_id' => 277,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 15:05:05',
                'updated_at' => '2022-12-28 15:05:05',
            ),
            374 => 
            array (
                'id' => 1437,
                'document_id' => 279,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 15:05:26',
                'updated_at' => '2022-12-28 15:05:26',
            ),
            375 => 
            array (
                'id' => 1438,
                'document_id' => 278,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 15:05:52',
                'updated_at' => '2022-12-28 15:05:52',
            ),
            376 => 
            array (
                'id' => 1439,
                'document_id' => 155,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 15:06:30',
                'updated_at' => '2022-12-28 15:06:30',
            ),
            377 => 
            array (
                'id' => 1440,
                'document_id' => 143,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 15:07:37',
                'updated_at' => '2022-12-28 15:07:37',
            ),
            378 => 
            array (
                'id' => 1441,
                'document_id' => 560,
                'user_id' => 5,
                'remarks' => 'For issuance of CTPR',
                'created_at' => '2022-12-28 15:13:40',
                'updated_at' => '2022-12-28 15:13:40',
            ),
            379 => 
            array (
                'id' => 1442,
                'document_id' => 349,
                'user_id' => 10,
                'remarks' => 'Mam,

For your initial.

Thank you',
                'created_at' => '2022-12-28 15:14:36',
                'updated_at' => '2022-12-28 15:14:36',
            ),
            380 => 
            array (
                'id' => 1443,
                'document_id' => 560,
                'user_id' => 5,
                'remarks' => 'SMAW NC II - For Issuance of CTPR
Driving NC II - verify the nominal duration',
                'created_at' => '2022-12-28 15:27:53',
                'updated_at' => '2022-12-28 15:27:53',
            ),
            381 => 
            array (
                'id' => 1444,
                'document_id' => 137,
                'user_id' => 5,
                'remarks' => 'Please review the name of completers against the NSTP Form 1 and NSTP form 2 submitted by PO.
Thank you.',
                'created_at' => '2022-12-28 15:33:22',
                'updated_at' => '2022-12-28 15:33:22',
            ),
            382 => 
            array (
                'id' => 1445,
                'document_id' => 349,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 15:35:47',
                'updated_at' => '2022-12-28 15:35:47',
            ),
            383 => 
            array (
                'id' => 1446,
                'document_id' => 370,
                'user_id' => 10,
                'remarks' => NULL,
                'created_at' => '2022-12-28 16:21:28',
                'updated_at' => '2022-12-28 16:21:28',
            ),
            384 => 
            array (
                'id' => 1447,
                'document_id' => 370,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 16:42:16',
                'updated_at' => '2022-12-28 16:42:16',
            ),
            385 => 
            array (
                'id' => 1448,
                'document_id' => 278,
                'user_id' => 10,
                'remarks' => 'Ma\'am for your approval.',
                'created_at' => '2022-12-28 16:48:19',
                'updated_at' => '2022-12-28 16:48:19',
            ),
            386 => 
            array (
                'id' => 1449,
                'document_id' => 279,
                'user_id' => 10,
                'remarks' => 'Ma.am for your approval.',
                'created_at' => '2022-12-28 16:53:10',
                'updated_at' => '2022-12-28 16:53:10',
            ),
            387 => 
            array (
                'id' => 1450,
                'document_id' => 575,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-28 16:58:09',
                'updated_at' => '2022-12-28 16:58:09',
            ),
            388 => 
            array (
                'id' => 1451,
                'document_id' => 576,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-28 16:58:40',
                'updated_at' => '2022-12-28 16:58:40',
            ),
            389 => 
            array (
                'id' => 1452,
                'document_id' => 577,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-28 16:59:26',
                'updated_at' => '2022-12-28 16:59:26',
            ),
            390 => 
            array (
                'id' => 1453,
                'document_id' => 558,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 17:10:06',
                'updated_at' => '2022-12-28 17:10:06',
            ),
            391 => 
            array (
                'id' => 1454,
                'document_id' => 546,
                'user_id' => 10,
                'remarks' => 'Ma\'am for your initial.',
                'created_at' => '2022-12-28 17:10:42',
                'updated_at' => '2022-12-28 17:10:42',
            ),
            392 => 
            array (
                'id' => 1455,
                'document_id' => 559,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 17:11:06',
                'updated_at' => '2022-12-28 17:11:06',
            ),
            393 => 
            array (
                'id' => 1456,
                'document_id' => 567,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 17:32:58',
                'updated_at' => '2022-12-28 17:32:58',
            ),
            394 => 
            array (
                'id' => 1457,
                'document_id' => 571,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 17:33:28',
                'updated_at' => '2022-12-28 17:33:28',
            ),
            395 => 
            array (
                'id' => 1458,
                'document_id' => 544,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 17:40:22',
                'updated_at' => '2022-12-28 17:40:22',
            ),
            396 => 
            array (
                'id' => 1459,
                'document_id' => 476,
                'user_id' => 10,
                'remarks' => 'Mam,

For your initial.

Thank you.',
                'created_at' => '2022-12-28 17:41:16',
                'updated_at' => '2022-12-28 17:41:16',
            ),
            397 => 
            array (
                'id' => 1460,
                'document_id' => 475,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 17:42:47',
                'updated_at' => '2022-12-28 17:42:47',
            ),
            398 => 
            array (
                'id' => 1461,
                'document_id' => 494,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 17:43:39',
                'updated_at' => '2022-12-28 17:43:39',
            ),
            399 => 
            array (
                'id' => 1462,
                'document_id' => 543,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 17:44:20',
                'updated_at' => '2022-12-28 17:44:20',
            ),
            400 => 
            array (
                'id' => 1463,
                'document_id' => 545,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 17:45:42',
                'updated_at' => '2022-12-28 17:45:42',
            ),
            401 => 
            array (
                'id' => 1464,
                'document_id' => 547,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 17:47:34',
                'updated_at' => '2022-12-28 17:47:34',
            ),
            402 => 
            array (
                'id' => 1465,
                'document_id' => 546,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 17:48:35',
                'updated_at' => '2022-12-28 17:48:35',
            ),
            403 => 
            array (
                'id' => 1466,
                'document_id' => 421,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 17:48:39',
                'updated_at' => '2022-12-28 17:48:39',
            ),
            404 => 
            array (
                'id' => 1467,
                'document_id' => 424,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 17:49:18',
                'updated_at' => '2022-12-28 17:49:18',
            ),
            405 => 
            array (
                'id' => 1468,
                'document_id' => 425,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 17:50:14',
                'updated_at' => '2022-12-28 17:50:14',
            ),
            406 => 
            array (
                'id' => 1469,
                'document_id' => 426,
                'user_id' => 38,
                'remarks' => NULL,
                'created_at' => '2022-12-28 17:50:54',
                'updated_at' => '2022-12-28 17:50:54',
            ),
            407 => 
            array (
                'id' => 1470,
                'document_id' => 476,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 17:51:39',
                'updated_at' => '2022-12-28 17:51:39',
            ),
            408 => 
            array (
                'id' => 1471,
                'document_id' => 427,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 17:52:00',
                'updated_at' => '2022-12-28 17:52:00',
            ),
            409 => 
            array (
                'id' => 1472,
                'document_id' => 428,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 17:53:16',
                'updated_at' => '2022-12-28 17:53:16',
            ),
            410 => 
            array (
                'id' => 1473,
                'document_id' => 429,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 17:53:56',
                'updated_at' => '2022-12-28 17:53:56',
            ),
            411 => 
            array (
                'id' => 1474,
                'document_id' => 432,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 17:54:32',
                'updated_at' => '2022-12-28 17:54:32',
            ),
            412 => 
            array (
                'id' => 1475,
                'document_id' => 433,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 17:55:15',
                'updated_at' => '2022-12-28 17:55:15',
            ),
            413 => 
            array (
                'id' => 1476,
                'document_id' => 278,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 17:55:20',
                'updated_at' => '2022-12-28 17:55:20',
            ),
            414 => 
            array (
                'id' => 1477,
                'document_id' => 434,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 17:56:11',
                'updated_at' => '2022-12-28 17:56:11',
            ),
            415 => 
            array (
                'id' => 1478,
                'document_id' => 435,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 17:56:45',
                'updated_at' => '2022-12-28 17:56:45',
            ),
            416 => 
            array (
                'id' => 1479,
                'document_id' => 279,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-28 17:56:50',
                'updated_at' => '2022-12-28 17:56:50',
            ),
            417 => 
            array (
                'id' => 1480,
                'document_id' => 436,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 17:57:22',
                'updated_at' => '2022-12-28 17:57:22',
            ),
            418 => 
            array (
                'id' => 1481,
                'document_id' => 437,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 17:57:58',
                'updated_at' => '2022-12-28 17:57:58',
            ),
            419 => 
            array (
                'id' => 1482,
                'document_id' => 438,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 17:58:53',
                'updated_at' => '2022-12-28 17:58:53',
            ),
            420 => 
            array (
                'id' => 1483,
                'document_id' => 439,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 17:59:20',
                'updated_at' => '2022-12-28 17:59:20',
            ),
            421 => 
            array (
                'id' => 1484,
                'document_id' => 442,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 17:59:46',
                'updated_at' => '2022-12-28 17:59:46',
            ),
            422 => 
            array (
                'id' => 1485,
                'document_id' => 444,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 18:00:15',
                'updated_at' => '2022-12-28 18:00:15',
            ),
            423 => 
            array (
                'id' => 1486,
                'document_id' => 374,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 18:02:28',
                'updated_at' => '2022-12-28 18:02:28',
            ),
            424 => 
            array (
                'id' => 1487,
                'document_id' => 308,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 18:03:21',
                'updated_at' => '2022-12-28 18:03:21',
            ),
            425 => 
            array (
                'id' => 1488,
                'document_id' => 309,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 18:04:17',
                'updated_at' => '2022-12-28 18:04:17',
            ),
            426 => 
            array (
                'id' => 1489,
                'document_id' => 155,
                'user_id' => 8,
                'remarks' => NULL,
                'created_at' => '2022-12-28 18:05:15',
                'updated_at' => '2022-12-28 18:05:15',
            ),
            427 => 
            array (
                'id' => 1490,
                'document_id' => 332,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 18:05:26',
                'updated_at' => '2022-12-28 18:05:26',
            ),
            428 => 
            array (
                'id' => 1491,
                'document_id' => 333,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 18:05:47',
                'updated_at' => '2022-12-28 18:05:47',
            ),
            429 => 
            array (
                'id' => 1492,
                'document_id' => 333,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 18:05:47',
                'updated_at' => '2022-12-28 18:05:47',
            ),
            430 => 
            array (
                'id' => 1493,
                'document_id' => 344,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 18:06:29',
                'updated_at' => '2022-12-28 18:06:29',
            ),
            431 => 
            array (
                'id' => 1494,
                'document_id' => 360,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 18:09:25',
                'updated_at' => '2022-12-28 18:09:25',
            ),
            432 => 
            array (
                'id' => 1495,
                'document_id' => 363,
                'user_id' => 38,
                'remarks' => 'Signed, for printing.',
                'created_at' => '2022-12-28 18:10:24',
                'updated_at' => '2022-12-28 18:10:24',
            ),
            433 => 
            array (
                'id' => 1496,
                'document_id' => 137,
                'user_id' => 11,
            'remarks' => 'Action Taken (Memorandum ROD 6 U- 343 s. 2022)',
                'created_at' => '2022-12-29 08:08:35',
                'updated_at' => '2022-12-29 08:08:35',
            ),
            434 => 
            array (
                'id' => 1497,
                'document_id' => 155,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-29 08:20:57',
                'updated_at' => '2022-12-29 08:20:57',
            ),
            435 => 
            array (
                'id' => 1498,
                'document_id' => 277,
                'user_id' => 8,
                'remarks' => 'ma\'am for your approval',
                'created_at' => '2022-12-29 08:35:25',
                'updated_at' => '2022-12-29 08:35:25',
            ),
            436 => 
            array (
                'id' => 1499,
                'document_id' => 275,
                'user_id' => 8,
                'remarks' => 'ma\'am for your approval.',
                'created_at' => '2022-12-29 08:44:31',
                'updated_at' => '2022-12-29 08:44:31',
            ),
            437 => 
            array (
                'id' => 1500,
                'document_id' => 277,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-29 08:52:58',
                'updated_at' => '2022-12-29 08:52:58',
            ),
            438 => 
            array (
                'id' => 1501,
                'document_id' => 275,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-29 08:55:11',
                'updated_at' => '2022-12-29 08:55:11',
            ),
            439 => 
            array (
                'id' => 1502,
                'document_id' => 149,
                'user_id' => 5,
                'remarks' => 'Please attached approved LOA .  Thank you.',
                'created_at' => '2022-12-29 09:08:42',
                'updated_at' => '2022-12-29 09:08:42',
            ),
            440 => 
            array (
                'id' => 1503,
                'document_id' => 203,
                'user_id' => 34,
                'remarks' => 'For filing',
                'created_at' => '2022-12-29 09:09:21',
                'updated_at' => '2022-12-29 09:09:21',
            ),
            441 => 
            array (
                'id' => 1504,
                'document_id' => 390,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 09:12:12',
                'updated_at' => '2022-12-29 09:12:12',
            ),
            442 => 
            array (
                'id' => 1505,
                'document_id' => 143,
                'user_id' => 5,
                'remarks' => 'For File please.
The activity was already conducted last Dec. 21, 2022.
Said request was forwarded only on December 28.
Thank you.',
                'created_at' => '2022-12-29 09:12:45',
                'updated_at' => '2022-12-29 09:12:45',
            ),
            443 => 
            array (
                'id' => 1506,
                'document_id' => 431,
                'user_id' => 34,
                'remarks' => 'Please stamp the date received. T.y.',
                'created_at' => '2022-12-29 09:13:18',
                'updated_at' => '2022-12-29 09:13:18',
            ),
            444 => 
            array (
                'id' => 1507,
                'document_id' => 430,
                'user_id' => 34,
                'remarks' => 'Please stamp date received. T.y.',
                'created_at' => '2022-12-29 09:14:46',
                'updated_at' => '2022-12-29 09:14:46',
            ),
            445 => 
            array (
                'id' => 1508,
                'document_id' => 423,
                'user_id' => 34,
                'remarks' => 'Please stamp date received. T.y.',
                'created_at' => '2022-12-29 09:19:59',
                'updated_at' => '2022-12-29 09:19:59',
            ),
            446 => 
            array (
                'id' => 1509,
                'document_id' => 422,
                'user_id' => 34,
                'remarks' => 'Please stamp date received. T.y.',
                'created_at' => '2022-12-29 09:24:36',
                'updated_at' => '2022-12-29 09:24:36',
            ),
            447 => 
            array (
                'id' => 1510,
                'document_id' => 578,
                'user_id' => 38,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-29 09:26:51',
                'updated_at' => '2022-12-29 09:26:51',
            ),
            448 => 
            array (
                'id' => 1511,
                'document_id' => 578,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-29 09:32:53',
                'updated_at' => '2022-12-29 09:32:53',
            ),
            449 => 
            array (
                'id' => 1512,
                'document_id' => 450,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 09:34:35',
                'updated_at' => '2022-12-29 09:34:35',
            ),
            450 => 
            array (
                'id' => 1513,
                'document_id' => 451,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 09:34:52',
                'updated_at' => '2022-12-29 09:34:52',
            ),
            451 => 
            array (
                'id' => 1514,
                'document_id' => 557,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 09:36:08',
                'updated_at' => '2022-12-29 09:36:08',
            ),
            452 => 
            array (
                'id' => 1515,
                'document_id' => 556,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 09:37:10',
                'updated_at' => '2022-12-29 09:37:10',
            ),
            453 => 
            array (
                'id' => 1516,
                'document_id' => 533,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 09:38:25',
                'updated_at' => '2022-12-29 09:38:25',
            ),
            454 => 
            array (
                'id' => 1517,
                'document_id' => 555,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 09:39:24',
                'updated_at' => '2022-12-29 09:39:24',
            ),
            455 => 
            array (
                'id' => 1518,
                'document_id' => 531,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 09:40:28',
                'updated_at' => '2022-12-29 09:40:28',
            ),
            456 => 
            array (
                'id' => 1519,
                'document_id' => 530,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 09:41:45',
                'updated_at' => '2022-12-29 09:41:45',
            ),
            457 => 
            array (
                'id' => 1520,
                'document_id' => 529,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 09:43:30',
                'updated_at' => '2022-12-29 09:43:30',
            ),
            458 => 
            array (
                'id' => 1521,
                'document_id' => 528,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 09:46:23',
                'updated_at' => '2022-12-29 09:46:23',
            ),
            459 => 
            array (
                'id' => 1522,
                'document_id' => 527,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 09:47:02',
                'updated_at' => '2022-12-29 09:47:02',
            ),
            460 => 
            array (
                'id' => 1523,
                'document_id' => 526,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 09:49:04',
                'updated_at' => '2022-12-29 09:49:04',
            ),
            461 => 
            array (
                'id' => 1524,
                'document_id' => 525,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 09:49:32',
                'updated_at' => '2022-12-29 09:49:32',
            ),
            462 => 
            array (
                'id' => 1525,
                'document_id' => 524,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 09:50:14',
                'updated_at' => '2022-12-29 09:50:14',
            ),
            463 => 
            array (
                'id' => 1526,
                'document_id' => 523,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 09:50:39',
                'updated_at' => '2022-12-29 09:50:39',
            ),
            464 => 
            array (
                'id' => 1527,
                'document_id' => 522,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 09:52:14',
                'updated_at' => '2022-12-29 09:52:14',
            ),
            465 => 
            array (
                'id' => 1528,
                'document_id' => 521,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 09:52:47',
                'updated_at' => '2022-12-29 09:52:47',
            ),
            466 => 
            array (
                'id' => 1529,
                'document_id' => 520,
                'user_id' => 34,
                'remarks' => 'Returned. No signature of HR focal. T.y.',
                'created_at' => '2022-12-29 09:53:50',
                'updated_at' => '2022-12-29 09:53:50',
            ),
            467 => 
            array (
                'id' => 1530,
                'document_id' => 519,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 09:54:26',
                'updated_at' => '2022-12-29 09:54:26',
            ),
            468 => 
            array (
                'id' => 1531,
                'document_id' => 518,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 09:54:54',
                'updated_at' => '2022-12-29 09:54:54',
            ),
            469 => 
            array (
                'id' => 1532,
                'document_id' => 517,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 09:55:25',
                'updated_at' => '2022-12-29 09:55:25',
            ),
            470 => 
            array (
                'id' => 1533,
                'document_id' => 515,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 09:55:48',
                'updated_at' => '2022-12-29 09:55:48',
            ),
            471 => 
            array (
                'id' => 1534,
                'document_id' => 496,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 09:56:35',
                'updated_at' => '2022-12-29 09:56:35',
            ),
            472 => 
            array (
                'id' => 1535,
                'document_id' => 497,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 09:56:58',
                'updated_at' => '2022-12-29 09:56:58',
            ),
            473 => 
            array (
                'id' => 1536,
                'document_id' => 498,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 09:57:20',
                'updated_at' => '2022-12-29 09:57:20',
            ),
            474 => 
            array (
                'id' => 1537,
                'document_id' => 499,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 09:57:53',
                'updated_at' => '2022-12-29 09:57:53',
            ),
            475 => 
            array (
                'id' => 1538,
                'document_id' => 500,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 10:01:15',
                'updated_at' => '2022-12-29 10:01:15',
            ),
            476 => 
            array (
                'id' => 1539,
                'document_id' => 516,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 10:02:14',
                'updated_at' => '2022-12-29 10:02:14',
            ),
            477 => 
            array (
                'id' => 1540,
                'document_id' => 510,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 10:02:55',
                'updated_at' => '2022-12-29 10:02:55',
            ),
            478 => 
            array (
                'id' => 1541,
                'document_id' => 511,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 10:03:26',
                'updated_at' => '2022-12-29 10:03:26',
            ),
            479 => 
            array (
                'id' => 1542,
                'document_id' => 501,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 10:03:58',
                'updated_at' => '2022-12-29 10:03:58',
            ),
            480 => 
            array (
                'id' => 1543,
                'document_id' => 502,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 10:04:38',
                'updated_at' => '2022-12-29 10:04:38',
            ),
            481 => 
            array (
                'id' => 1544,
                'document_id' => 503,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 10:05:03',
                'updated_at' => '2022-12-29 10:05:03',
            ),
            482 => 
            array (
                'id' => 1545,
                'document_id' => 504,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 10:10:02',
                'updated_at' => '2022-12-29 10:10:02',
            ),
            483 => 
            array (
                'id' => 1546,
                'document_id' => 505,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 10:10:22',
                'updated_at' => '2022-12-29 10:10:22',
            ),
            484 => 
            array (
                'id' => 1547,
                'document_id' => 506,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 10:10:52',
                'updated_at' => '2022-12-29 10:10:52',
            ),
            485 => 
            array (
                'id' => 1548,
                'document_id' => 507,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 10:11:14',
                'updated_at' => '2022-12-29 10:11:14',
            ),
            486 => 
            array (
                'id' => 1549,
                'document_id' => 431,
                'user_id' => 35,
                'remarks' => 'na stamp kona po maam. Thank you.',
                'created_at' => '2022-12-29 10:11:50',
                'updated_at' => '2022-12-29 10:11:50',
            ),
            487 => 
            array (
                'id' => 1550,
                'document_id' => 508,
                'user_id' => 34,
                'remarks' => 'Please return. No Certification of Leave Balance from HR Focal. T.y.',
                'created_at' => '2022-12-29 10:12:14',
                'updated_at' => '2022-12-29 10:12:14',
            ),
            488 => 
            array (
                'id' => 1551,
                'document_id' => 509,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 10:12:37',
                'updated_at' => '2022-12-29 10:12:37',
            ),
            489 => 
            array (
                'id' => 1552,
                'document_id' => 512,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 10:13:00',
                'updated_at' => '2022-12-29 10:13:00',
            ),
            490 => 
            array (
                'id' => 1553,
                'document_id' => 513,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 10:13:29',
                'updated_at' => '2022-12-29 10:13:29',
            ),
            491 => 
            array (
                'id' => 1554,
                'document_id' => 423,
                'user_id' => 35,
                'remarks' => 'Hi maam ja, na stamp ko napo maam. Thank you.',
                'created_at' => '2022-12-29 10:13:47',
                'updated_at' => '2022-12-29 10:13:47',
            ),
            492 => 
            array (
                'id' => 1555,
                'document_id' => 514,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 10:14:21',
                'updated_at' => '2022-12-29 10:14:21',
            ),
            493 => 
            array (
                'id' => 1556,
                'document_id' => 431,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 10:14:59',
                'updated_at' => '2022-12-29 10:14:59',
            ),
            494 => 
            array (
                'id' => 1557,
                'document_id' => 423,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 10:16:23',
                'updated_at' => '2022-12-29 10:16:23',
            ),
            495 => 
            array (
                'id' => 1558,
                'document_id' => 430,
                'user_id' => 35,
                'remarks' => 'Hello Maam ja, Na stamp ko na po , Thank you',
                'created_at' => '2022-12-29 10:26:22',
                'updated_at' => '2022-12-29 10:26:22',
            ),
            496 => 
            array (
                'id' => 1559,
                'document_id' => 149,
                'user_id' => 11,
                'remarks' => NULL,
                'created_at' => '2022-12-29 10:29:39',
                'updated_at' => '2022-12-29 10:29:39',
            ),
            497 => 
            array (
                'id' => 1560,
                'document_id' => 422,
                'user_id' => 35,
                'remarks' => 'Hi maam Ja, na stamp ko na po. Thank you.',
                'created_at' => '2022-12-29 10:29:51',
                'updated_at' => '2022-12-29 10:29:51',
            ),
            498 => 
            array (
                'id' => 1562,
                'document_id' => 580,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-29 11:27:01',
                'updated_at' => '2022-12-29 11:27:01',
            ),
            499 => 
            array (
                'id' => 1563,
                'document_id' => 581,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-29 12:02:38',
                'updated_at' => '2022-12-29 12:02:38',
            ),
        ));
        \DB::table('doc_routes')->insert(array (
            0 => 
            array (
                'id' => 1564,
                'document_id' => 582,
                'user_id' => 10,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-29 12:28:38',
                'updated_at' => '2022-12-29 12:28:38',
            ),
            1 => 
            array (
                'id' => 1567,
                'document_id' => 585,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-29 13:19:34',
                'updated_at' => '2022-12-29 13:19:34',
            ),
            2 => 
            array (
                'id' => 1568,
                'document_id' => 586,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-29 13:20:03',
                'updated_at' => '2022-12-29 13:20:03',
            ),
            3 => 
            array (
                'id' => 1569,
                'document_id' => 587,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-29 13:21:06',
                'updated_at' => '2022-12-29 13:21:06',
            ),
            4 => 
            array (
                'id' => 1570,
                'document_id' => 588,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-29 13:33:59',
                'updated_at' => '2022-12-29 13:33:59',
            ),
            5 => 
            array (
                'id' => 1571,
                'document_id' => 589,
                'user_id' => 6,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-29 13:42:52',
                'updated_at' => '2022-12-29 13:42:52',
            ),
            6 => 
            array (
                'id' => 1572,
                'document_id' => 590,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-29 13:50:19',
                'updated_at' => '2022-12-29 13:50:19',
            ),
            7 => 
            array (
                'id' => 1573,
                'document_id' => 591,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-29 13:50:45',
                'updated_at' => '2022-12-29 13:50:45',
            ),
            8 => 
            array (
                'id' => 1574,
                'document_id' => 592,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-29 13:51:09',
                'updated_at' => '2022-12-29 13:51:09',
            ),
            9 => 
            array (
                'id' => 1575,
                'document_id' => 593,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-29 13:51:37',
                'updated_at' => '2022-12-29 13:51:37',
            ),
            10 => 
            array (
                'id' => 1576,
                'document_id' => 594,
                'user_id' => 35,
                'remarks' => 'Forwarded to HRMO',
                'created_at' => '2022-12-29 13:52:05',
                'updated_at' => '2022-12-29 13:52:05',
            ),
            11 => 
            array (
                'id' => 1577,
                'document_id' => 595,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-29 14:00:45',
                'updated_at' => '2022-12-29 14:00:45',
            ),
            12 => 
            array (
                'id' => 1578,
                'document_id' => 596,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-29 14:02:36',
                'updated_at' => '2022-12-29 14:02:36',
            ),
            13 => 
            array (
                'id' => 1579,
                'document_id' => 597,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-29 14:04:09',
                'updated_at' => '2022-12-29 14:04:09',
            ),
            14 => 
            array (
                'id' => 1580,
                'document_id' => 595,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-29 14:04:33',
                'updated_at' => '2022-12-29 14:04:33',
            ),
            15 => 
            array (
                'id' => 1581,
                'document_id' => 598,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-29 14:04:47',
                'updated_at' => '2022-12-29 14:04:47',
            ),
            16 => 
            array (
                'id' => 1582,
                'document_id' => 599,
                'user_id' => 35,
                'remarks' => 'Forwarded to ROD',
                'created_at' => '2022-12-29 14:05:59',
                'updated_at' => '2022-12-29 14:05:59',
            ),
            17 => 
            array (
                'id' => 1583,
                'document_id' => 600,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-29 14:06:32',
                'updated_at' => '2022-12-29 14:06:32',
            ),
            18 => 
            array (
                'id' => 1584,
                'document_id' => 601,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-29 14:07:55',
                'updated_at' => '2022-12-29 14:07:55',
            ),
            19 => 
            array (
                'id' => 1585,
                'document_id' => 602,
                'user_id' => 35,
                'remarks' => 'Forwarded to ROD',
                'created_at' => '2022-12-29 14:08:24',
                'updated_at' => '2022-12-29 14:08:24',
            ),
            20 => 
            array (
                'id' => 1586,
                'document_id' => 598,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-29 14:09:01',
                'updated_at' => '2022-12-29 14:09:01',
            ),
            21 => 
            array (
                'id' => 1587,
                'document_id' => 603,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-29 14:09:15',
                'updated_at' => '2022-12-29 14:09:15',
            ),
            22 => 
            array (
                'id' => 1588,
                'document_id' => 604,
                'user_id' => 35,
                'remarks' => 'Forwarded to ROD',
                'created_at' => '2022-12-29 14:10:35',
                'updated_at' => '2022-12-29 14:10:35',
            ),
            23 => 
            array (
                'id' => 1589,
                'document_id' => 605,
                'user_id' => 30,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-29 14:10:40',
                'updated_at' => '2022-12-29 14:10:40',
            ),
            24 => 
            array (
                'id' => 1590,
                'document_id' => 606,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-29 14:10:56',
                'updated_at' => '2022-12-29 14:10:56',
            ),
            25 => 
            array (
                'id' => 1591,
                'document_id' => 607,
                'user_id' => 35,
                'remarks' => 'Forwarded to ROD',
                'created_at' => '2022-12-29 14:11:29',
                'updated_at' => '2022-12-29 14:11:29',
            ),
            26 => 
            array (
                'id' => 1592,
                'document_id' => 582,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-29 14:11:34',
                'updated_at' => '2022-12-29 14:11:34',
            ),
            27 => 
            array (
                'id' => 1593,
                'document_id' => 608,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-29 14:14:09',
                'updated_at' => '2022-12-29 14:14:09',
            ),
            28 => 
            array (
                'id' => 1594,
                'document_id' => 609,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-29 14:17:22',
                'updated_at' => '2022-12-29 14:17:22',
            ),
            29 => 
            array (
                'id' => 1595,
                'document_id' => 596,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-29 14:18:52',
                'updated_at' => '2022-12-29 14:18:52',
            ),
            30 => 
            array (
                'id' => 1596,
                'document_id' => 610,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-29 14:19:05',
                'updated_at' => '2022-12-29 14:19:05',
            ),
            31 => 
            array (
                'id' => 1597,
                'document_id' => 589,
                'user_id' => 3,
                'remarks' => 'Kindly forward to HR',
                'created_at' => '2022-12-29 14:20:30',
                'updated_at' => '2022-12-29 14:20:30',
            ),
            32 => 
            array (
                'id' => 1598,
                'document_id' => 605,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-29 14:20:39',
                'updated_at' => '2022-12-29 14:20:39',
            ),
            33 => 
            array (
                'id' => 1599,
                'document_id' => 611,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-29 14:20:39',
                'updated_at' => '2022-12-29 14:20:39',
            ),
            34 => 
            array (
                'id' => 1600,
                'document_id' => 612,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-29 14:22:10',
                'updated_at' => '2022-12-29 14:22:10',
            ),
            35 => 
            array (
                'id' => 1601,
                'document_id' => 597,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-29 14:22:41',
                'updated_at' => '2022-12-29 14:22:41',
            ),
            36 => 
            array (
                'id' => 1602,
                'document_id' => 613,
                'user_id' => 8,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-29 14:22:43',
                'updated_at' => '2022-12-29 14:22:43',
            ),
            37 => 
            array (
                'id' => 1603,
                'document_id' => 614,
                'user_id' => 26,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-29 14:23:29',
                'updated_at' => '2022-12-29 14:23:29',
            ),
            38 => 
            array (
                'id' => 1604,
                'document_id' => 599,
                'user_id' => 3,
                'remarks' => 'Consolidate and submit to CO',
                'created_at' => '2022-12-29 14:24:05',
                'updated_at' => '2022-12-29 14:24:05',
            ),
            39 => 
            array (
                'id' => 1605,
                'document_id' => 615,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-29 14:24:31',
                'updated_at' => '2022-12-29 14:24:31',
            ),
            40 => 
            array (
                'id' => 1606,
                'document_id' => 600,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-29 14:25:27',
                'updated_at' => '2022-12-29 14:25:27',
            ),
            41 => 
            array (
                'id' => 1607,
                'document_id' => 589,
                'user_id' => 35,
                'remarks' => NULL,
                'created_at' => '2022-12-29 14:26:30',
                'updated_at' => '2022-12-29 14:26:30',
            ),
            42 => 
            array (
                'id' => 1608,
                'document_id' => 601,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-29 14:26:37',
                'updated_at' => '2022-12-29 14:26:37',
            ),
            43 => 
            array (
                'id' => 1609,
                'document_id' => 602,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-29 14:27:35',
                'updated_at' => '2022-12-29 14:27:35',
            ),
            44 => 
            array (
                'id' => 1610,
                'document_id' => 616,
                'user_id' => 38,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-29 14:27:42',
                'updated_at' => '2022-12-29 14:27:42',
            ),
            45 => 
            array (
                'id' => 1611,
                'document_id' => 617,
                'user_id' => 5,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-29 14:32:39',
                'updated_at' => '2022-12-29 14:32:39',
            ),
            46 => 
            array (
                'id' => 1612,
                'document_id' => 618,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-29 14:34:43',
                'updated_at' => '2022-12-29 14:34:43',
            ),
            47 => 
            array (
                'id' => 1613,
                'document_id' => 602,
                'user_id' => 5,
                'remarks' => 'Please consolidate all reports from other POs and submit to CO',
                'created_at' => '2022-12-29 14:34:45',
                'updated_at' => '2022-12-29 14:34:45',
            ),
            48 => 
            array (
                'id' => 1614,
                'document_id' => 619,
                'user_id' => 35,
                'remarks' => 'Forwarded to ROD',
                'created_at' => '2022-12-29 14:36:33',
                'updated_at' => '2022-12-29 14:36:33',
            ),
            49 => 
            array (
                'id' => 1615,
                'document_id' => 604,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-29 14:37:39',
                'updated_at' => '2022-12-29 14:37:39',
            ),
            50 => 
            array (
                'id' => 1616,
                'document_id' => 620,
                'user_id' => 35,
                'remarks' => 'Forwarded to ROD',
                'created_at' => '2022-12-29 14:37:47',
                'updated_at' => '2022-12-29 14:37:47',
            ),
            51 => 
            array (
                'id' => 1617,
                'document_id' => 607,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-29 14:38:09',
                'updated_at' => '2022-12-29 14:38:09',
            ),
            52 => 
            array (
                'id' => 1618,
                'document_id' => 621,
                'user_id' => 35,
                'remarks' => 'Forwarded to ROD',
                'created_at' => '2022-12-29 14:39:01',
                'updated_at' => '2022-12-29 14:39:01',
            ),
            53 => 
            array (
                'id' => 1619,
                'document_id' => 622,
                'user_id' => 35,
                'remarks' => 'Forwarded to ROD',
                'created_at' => '2022-12-29 14:40:14',
                'updated_at' => '2022-12-29 14:40:14',
            ),
            54 => 
            array (
                'id' => 1620,
                'document_id' => 607,
                'user_id' => 5,
                'remarks' => 'Please review and submit to CO on or before Jan. 4, 2023. Thank you.',
                'created_at' => '2022-12-29 14:42:02',
                'updated_at' => '2022-12-29 14:42:02',
            ),
            55 => 
            array (
                'id' => 1621,
                'document_id' => 623,
                'user_id' => 5,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-29 14:45:19',
                'updated_at' => '2022-12-29 14:45:19',
            ),
            56 => 
            array (
                'id' => 1622,
                'document_id' => 619,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-29 14:45:58',
                'updated_at' => '2022-12-29 14:45:58',
            ),
            57 => 
            array (
                'id' => 1623,
                'document_id' => 620,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-29 14:46:30',
                'updated_at' => '2022-12-29 14:46:30',
            ),
            58 => 
            array (
                'id' => 1624,
                'document_id' => 621,
                'user_id' => 3,
                'remarks' => 'Kindly follow-up the availability of Mr. Garanganao.',
                'created_at' => '2022-12-29 14:47:44',
                'updated_at' => '2022-12-29 14:47:44',
            ),
            59 => 
            array (
                'id' => 1625,
                'document_id' => 622,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-29 14:48:21',
                'updated_at' => '2022-12-29 14:48:21',
            ),
            60 => 
            array (
                'id' => 1626,
                'document_id' => 149,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-29 14:49:15',
                'updated_at' => '2022-12-29 14:49:15',
            ),
            61 => 
            array (
                'id' => 1627,
                'document_id' => 624,
                'user_id' => 35,
                'remarks' => 'Forwarded to RD',
                'created_at' => '2022-12-29 14:53:30',
                'updated_at' => '2022-12-29 14:53:30',
            ),
            62 => 
            array (
                'id' => 1628,
                'document_id' => 608,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-29 14:58:54',
                'updated_at' => '2022-12-29 14:58:54',
            ),
            63 => 
            array (
                'id' => 1629,
                'document_id' => 589,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 14:59:53',
                'updated_at' => '2022-12-29 14:59:53',
            ),
            64 => 
            array (
                'id' => 1630,
                'document_id' => 609,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-29 15:00:23',
                'updated_at' => '2022-12-29 15:00:23',
            ),
            65 => 
            array (
                'id' => 1631,
                'document_id' => 422,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 15:00:26',
                'updated_at' => '2022-12-29 15:00:26',
            ),
            66 => 
            array (
                'id' => 1632,
                'document_id' => 430,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 15:00:52',
                'updated_at' => '2022-12-29 15:00:52',
            ),
            67 => 
            array (
                'id' => 1633,
                'document_id' => 625,
                'user_id' => 35,
                'remarks' => 'Forwarded to ROD',
                'created_at' => '2022-12-29 15:01:11',
                'updated_at' => '2022-12-29 15:01:11',
            ),
            68 => 
            array (
                'id' => 1634,
                'document_id' => 610,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-29 15:01:54',
                'updated_at' => '2022-12-29 15:01:54',
            ),
            69 => 
            array (
                'id' => 1635,
                'document_id' => 590,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 15:03:00',
                'updated_at' => '2022-12-29 15:03:00',
            ),
            70 => 
            array (
                'id' => 1636,
                'document_id' => 594,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 15:03:28',
                'updated_at' => '2022-12-29 15:03:28',
            ),
            71 => 
            array (
                'id' => 1637,
                'document_id' => 593,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 15:04:01',
                'updated_at' => '2022-12-29 15:04:01',
            ),
            72 => 
            array (
                'id' => 1638,
                'document_id' => 592,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 15:04:27',
                'updated_at' => '2022-12-29 15:04:27',
            ),
            73 => 
            array (
                'id' => 1639,
                'document_id' => 591,
                'user_id' => 34,
                'remarks' => NULL,
                'created_at' => '2022-12-29 15:04:53',
                'updated_at' => '2022-12-29 15:04:53',
            ),
            74 => 
            array (
                'id' => 1640,
                'document_id' => 625,
                'user_id' => 3,
                'remarks' => 'Draft memo to the concerned region.',
                'created_at' => '2022-12-29 15:06:55',
                'updated_at' => '2022-12-29 15:06:55',
            ),
            75 => 
            array (
                'id' => 1641,
                'document_id' => 619,
                'user_id' => 10,
                'remarks' => 'Mam,

For your iniital.

Thank you',
                'created_at' => '2022-12-29 15:09:08',
                'updated_at' => '2022-12-29 15:09:08',
            ),
            76 => 
            array (
                'id' => 1642,
                'document_id' => 520,
                'user_id' => 35,
                'remarks' => 'Good Afternoon Ma\'am ja, gn return na po sang LGPC with signature.',
                'created_at' => '2022-12-29 15:10:33',
                'updated_at' => '2022-12-29 15:10:33',
            ),
            77 => 
            array (
                'id' => 1643,
                'document_id' => 626,
                'user_id' => 38,
                'remarks' => 'Internal Document',
                'created_at' => '2022-12-29 15:12:57',
                'updated_at' => '2022-12-29 15:12:57',
            ),
            78 => 
            array (
                'id' => 1644,
                'document_id' => 611,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-29 15:13:41',
                'updated_at' => '2022-12-29 15:13:41',
            ),
            79 => 
            array (
                'id' => 1645,
                'document_id' => 622,
                'user_id' => 10,
                'remarks' => 'Nins,

For dissemination.

Thank you',
                'created_at' => '2022-12-29 15:14:39',
                'updated_at' => '2022-12-29 15:14:39',
            ),
            80 => 
            array (
                'id' => 1646,
                'document_id' => 612,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-29 15:15:42',
                'updated_at' => '2022-12-29 15:15:42',
            ),
            81 => 
            array (
                'id' => 1647,
                'document_id' => 614,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-29 15:16:51',
                'updated_at' => '2022-12-29 15:16:51',
            ),
            82 => 
            array (
                'id' => 1648,
                'document_id' => 616,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-29 15:17:53',
                'updated_at' => '2022-12-29 15:17:53',
            ),
            83 => 
            array (
                'id' => 1649,
                'document_id' => 623,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-29 15:19:01',
                'updated_at' => '2022-12-29 15:19:01',
            ),
            84 => 
            array (
                'id' => 1650,
                'document_id' => 619,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-29 15:20:26',
                'updated_at' => '2022-12-29 15:20:26',
            ),
            85 => 
            array (
                'id' => 1651,
                'document_id' => 620,
                'user_id' => 10,
                'remarks' => NULL,
                'created_at' => '2022-12-29 15:20:36',
                'updated_at' => '2022-12-29 15:20:36',
            ),
            86 => 
            array (
                'id' => 1652,
                'document_id' => 626,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-29 15:21:39',
                'updated_at' => '2022-12-29 15:21:39',
            ),
            87 => 
            array (
                'id' => 1653,
                'document_id' => 620,
                'user_id' => 3,
                'remarks' => NULL,
                'created_at' => '2022-12-29 15:23:05',
                'updated_at' => '2022-12-29 15:23:05',
            ),
            88 => 
            array (
                'id' => 1654,
                'document_id' => 627,
                'user_id' => 35,
                'remarks' => 'Forwarded to ROD',
                'created_at' => '2022-12-29 15:37:09',
                'updated_at' => '2022-12-29 15:37:09',
            ),
        ));
        
        
    }
}