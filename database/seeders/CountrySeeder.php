<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                'id' => 1,
                'code' => 'AF',
                'name' => 'Afghanistan',
                'phone_code' => 93
            ],
            [
                'id' => 2,
                'code' => 'AL',
                'name' => 'Albania',
                'phone_code' => 355
            ],
            [
                'id' => 3,
                'code' => 'DZ',
                'name' => 'Algeria',
                'phone_code' => 213
            ],
            [
                'id' => 4,
                'code' => 'AS',
                'name' => 'American Samoa',
                'phone_code' => 1684
            ],
            [
                'id' => 5,
                'code' => 'AD',
                'name' => 'Andorra',
                'phone_code' => 376
            ],
            [
                'id' => 6,
                'code' => 'AO',
                'name' => 'Angola',
                'phone_code' => 244
            ],
            [
                'id' => 7,
                'code' => 'AI',
                'name' => 'Anguilla',
                'phone_code' => 1264
            ],
            [
                'id' => 8,
                'code' => 'AQ',
                'name' => 'Antarctica',
                'phone_code' => 0
            ],
            [
                'id' => 9,
                'code' => 'AG',
                'name' => 'Antigua And Barbuda',
                'phone_code' => 1268
            ],
            [
                'id' => 10,
                'code' => 'AR',
                'name' => 'Argentina',
                'phone_code' => 54
            ],
            [
                'id' => 11,
                'code' => 'AM',
                'name' => 'Armenia',
                'phone_code' => 374
            ],
            [
                'id' => 12,
                'code' => 'AW',
                'name' => 'Aruba',
                'phone_code' => 297
            ],
            [
                'id' => 13,
                'code' => 'AU',
                'name' => 'Australia',
                'phone_code' => 61
            ],
            [
                'id' => 14,
                'code' => 'AT',
                'name' => 'Austria',
                'phone_code' => 43
            ],
            [
                'id' => 15,
                'code' => 'AZ',
                'name' => 'Azerbaijan',
                'phone_code' => 994
            ],
            [
                'id' => 16,
                'code' => 'BS',
                'name' => 'Bahamas The',
                'phone_code' => 1242
            ],
            [
                'id' => 17,
                'code' => 'BH',
                'name' => 'Bahrain',
                'phone_code' => 973
            ],
            [
                'id' => 18,
                'code' => 'BD',
                'name' => 'Bangladesh',
                'phone_code' => 880
            ],
            [
                'id' => 19,
                'code' => 'BB',
                'name' => 'Barbados',
                'phone_code' => 1246
            ],
            [
                'id' => 20,
                'code' => 'BY',
                'name' => 'Belarus',
                'phone_code' => 375
            ],
            [
                'id' => 21,
                'code' => 'BE',
                'name' => 'Belgium',
                'phone_code' => 32
            ],
            [
                'id' => 22,
                'code' => 'BZ',
                'name' => 'Belize',
                'phone_code' => 501
            ],
            [
                'id' => 23,
                'code' => 'BJ',
                'name' => 'Benin',
                'phone_code' => 229
            ],
            [
                'id' => 24,
                'code' => 'BM',
                'name' => 'Bermuda',
                'phone_code' => 1441
            ],
            [
                'id' => 25,
                'code' => 'BT',
                'name' => 'Bhutan',
                'phone_code' => 975
            ],
            [
                'id' => 26,
                'code' => 'BO',
                'name' => 'Bolivia',
                'phone_code' => 591
            ],
            [
                'id' => 27,
                'code' => 'BA',
                'name' => 'Bosnia and Herzegovina',
                'phone_code' => 387
            ],
            [
                'id' => 28,
                'code' => 'BW',
                'name' => 'Botswana',
                'phone_code' => 267
            ],
            [
                'id' => 29,
                'code' => 'BV',
                'name' => 'Bouvet Island',
                'phone_code' => 0
            ],
            [
                'id' => 30,
                'code' => 'BR',
                'name' => 'Brazil',
                'phone_code' => 55
            ],
            [
                'id' => 31,
                'code' => 'IO',
                'name' => 'British Indian Ocean Territory',
                'phone_code' => 246
            ],
            [
                'id' => 32,
                'code' => 'BN',
                'name' => 'Brunei',
                'phone_code' => 673
            ],
            [
                'id' => 33,
                'code' => 'BG',
                'name' => 'Bulgaria',
                'phone_code' => 359
            ],
            [
                'id' => 34,
                'code' => 'BF',
                'name' => 'Burkina Faso',
                'phone_code' => 226
            ],
            [
                'id' => 35,
                'code' => 'BI',
                'name' => 'Burundi',
                'phone_code' => 257
            ],
            [
                'id' => 36,
                'code' => 'KH',
                'name' => 'Cambodia',
                'phone_code' => 855
            ],
            [
                'id' => 37,
                'code' => 'CM',
                'name' => 'Cameroon',
                'phone_code' => 237
            ],
            [
                'id' => 38,
                'code' => 'CA',
                'name' => 'Canada',
                'phone_code' => 1
            ],
            [
                'id' => 39,
                'code' => 'CV',
                'name' => 'Cape Verde',
                'phone_code' => 238
            ],
            [
                'id' => 40,
                'code' => 'KY',
                'name' => 'Cayman Islands',
                'phone_code' => 1345
            ],
            [
                'id' => 41,
                'code' => 'CF',
                'name' => 'Central African Republic',
                'phone_code' => 236
            ],
            [
                'id' => 42,
                'code' => 'TD',
                'name' => 'Chad',
                'phone_code' => 235
            ],
            [
                'id' => 43,
                'code' => 'CL',
                'name' => 'Chile',
                'phone_code' => 56
            ],
            [
                'id' => 44,
                'code' => 'CN',
                'name' => 'China',
                'phone_code' => 86
            ],
            [
                'id' => 45,
                'code' => 'CX',
                'name' => 'Christmas Island',
                'phone_code' => 61
            ],
            [
                'id' => 46,
                'code' => 'CC',
                'name' => 'Cocos (Keeling) Islands',
                'phone_code' => 672
            ],
            [
                'id' => 47,
                'code' => 'CO',
                'name' => 'Colombia',
                'phone_code' => 57
            ],
            [
                'id' => 48,
                'code' => 'KM',
                'name' => 'Comoros',
                'phone_code' => 269
            ],
            [
                'id' => 49,
                'code' => 'CG',
                'name' => 'Republic Of The Congo',
                'phone_code' => 242
            ],
            [
                'id' => 50,
                'code' => 'CD',
                'name' => 'Democratic Republic Of The Congo',
                'phone_code' => 242
            ],
            [
                'id' => 51,
                'code' => 'CK',
                'name' => 'Cook Islands',
                'phone_code' => 682
            ],
            [
                'id' => 52,
                'code' => 'CR',
                'name' => 'Costa Rica',
                'phone_code' => 506
            ],
            [
                'id' => 53,
                'code' => 'CI',
                'name' => 'Cote D Ivoire (Ivory Coast)',
                'phone_code' => 225
            ],
            [
                'id' => 54,
                'code' => 'HR',
                'name' => 'Croatia (Hrvatska)',
                'phone_code' => 385
            ],
            [
                'id' => 55,
                'code' => 'CU',
                'name' => 'Cuba',
                'phone_code' => 53
            ],
            [
                'id' => 56,
                'code' => 'CY',
                'name' => 'Cyprus',
                'phone_code' => 357
            ],
            [
                'id' => 57,
                'code' => 'CZ',
                'name' => 'Czech Republic',
                'phone_code' => 420
            ],
            [
                'id' => 58,
                'code' => 'DK',
                'name' => 'Denmark',
                'phone_code' => 45
            ],
            [
                'id' => 59,
                'code' => 'DJ',
                'name' => 'Djibouti',
                'phone_code' => 253
            ],
            [
                'id' => 60,
                'code' => 'DM',
                'name' => 'Dominica',
                'phone_code' => 1767
            ],
            [
                'id' => 61,
                'code' => 'DO',
                'name' => 'Dominican Republic',
                'phone_code' => 1809
            ],
            [
                'id' => 62,
                'code' => 'TP',
                'name' => 'East Timor',
                'phone_code' => 670
            ],
            [
                'id' => 63,
                'code' => 'EC',
                'name' => 'Ecuador',
                'phone_code' => 593
            ],
            [
                'id' => 64,
                'code' => 'EG',
                'name' => 'Egypt',
                'phone_code' => 20
            ],
            [
                'id' => 65,
                'code' => 'SV',
                'name' => 'El Salvador',
                'phone_code' => 503
            ],
            [
                'id' => 66,
                'code' => 'GQ',
                'name' => 'Equatorial Guinea',
                'phone_code' => 240
            ],
            [
                'id' => 67,
                'code' => 'ER',
                'name' => 'Eritrea',
                'phone_code' => 291
            ],
            [
                'id' => 68,
                'code' => 'EE',
                'name' => 'Estonia',
                'phone_code' => 372
            ],
            [
                'id' => 69,
                'code' => 'ET',
                'name' => 'Ethiopia',
                'phone_code' => 251
            ],
            [
                'id' => 70,
                'code' => 'XA',
                'name' => 'External Territories of Australia',
                'phone_code' => 61
            ],
            [
                'id' => 71,
                'code' => 'FK',
                'name' => 'Falkland Islands',
                'phone_code' => 500
            ],
            [
                'id' => 72,
                'code' => 'FO',
                'name' => 'Faroe Islands',
                'phone_code' => 298
            ],
            [
                'id' => 73,
                'code' => 'FJ',
                'name' => 'Fiji Islands',
                'phone_code' => 679
            ],
            [
                'id' => 74,
                'code' => 'FI',
                'name' => 'Finland',
                'phone_code' => 358
            ],
            [
                'id' => 75,
                'code' => 'FR',
                'name' => 'France',
                'phone_code' => 33
            ],
            [
                'id' => 76,
                'code' => 'GF',
                'name' => 'French Guiana',
                'phone_code' => 594
            ],
            [
                'id' => 77,
                'code' => 'PF',
                'name' => 'French Polynesia',
                'phone_code' => 689
            ],
            [
                'id' => 78,
                'code' => 'TF',
                'name' => 'French Southern Territories',
                'phone_code' => 0
            ],
            [
                'id' => 79,
                'code' => 'GA',
                'name' => 'Gabon',
                'phone_code' => 241
            ],
            [
                'id' => 80,
                'code' => 'GM',
                'name' => 'Gambia The',
                'phone_code' => 220
            ],
            [
                'id' => 81,
                'code' => 'GE',
                'name' => 'Georgia',
                'phone_code' => 995
            ],
            [
                'id' => 82,
                'code' => 'DE',
                'name' => 'Germany',
                'phone_code' => 49
            ],
            [
                'id' => 83,
                'code' => 'GH',
                'name' => 'Ghana',
                'phone_code' => 233
            ],
            [
                'id' => 84,
                'code' => 'GI',
                'name' => 'Gibraltar',
                'phone_code' => 350
            ],
            [
                'id' => 85,
                'code' => 'GR',
                'name' => 'Greece',
                'phone_code' => 30
            ],
            [
                'id' => 86,
                'code' => 'GL',
                'name' => 'Greenland',
                'phone_code' => 299
            ],
            [
                'id' => 87,
                'code' => 'GD',
                'name' => 'Grenada',
                'phone_code' => 1473
            ],
            [
                'id' => 88,
                'code' => 'GP',
                'name' => 'Guadeloupe',
                'phone_code' => 590
            ],
            [
                'id' => 89,
                'code' => 'GU',
                'name' => 'Guam',
                'phone_code' => 1671
            ],
            [
                'id' => 90,
                'code' => 'GT',
                'name' => 'Guatemala',
                'phone_code' => 502
            ],
            [
                'id' => 91,
                'code' => 'XU',
                'name' => 'Guernsey and Alderney',
                'phone_code' => 44
            ],
            [
                'id' => 92,
                'code' => 'GN',
                'name' => 'Guinea',
                'phone_code' => 224
            ],
            [
                'id' => 93,
                'code' => 'GW',
                'name' => 'Guinea-Bissau',
                'phone_code' => 245
            ],
            [
                'id' => 94,
                'code' => 'GY',
                'name' => 'Guyana',
                'phone_code' => 592
            ],
            [
                'id' => 95,
                'code' => 'HT',
                'name' => 'Haiti',
                'phone_code' => 509
            ],
            [
                'id' => 96,
                'code' => 'HM',
                'name' => 'Heard and McDonald Islands',
                'phone_code' => 0
            ],
            [
                'id' => 97,
                'code' => 'HN',
                'name' => 'Honduras',
                'phone_code' => 504
            ],
            [
                'id' => 98,
                'code' => 'HK',
                'name' => 'Hong Kong S.A.R.',
                'phone_code' => 852
            ],
            [
                'id' => 99,
                'code' => 'HU',
                'name' => 'Hungary',
                'phone_code' => 36
            ],
            [
                'id' => 100,
                'code' => 'IS',
                'name' => 'Iceland',
                'phone_code' => 354
            ],
            [
                'id' => 101,
                'code' => 'IN',
                'name' => 'India',
                'phone_code' => 91
            ],
            [
                'id' => 102,
                'code' => 'id',
                'name' => 'Indonesia',
                'phone_code' => 62
            ],
            [
                'id' => 103,
                'code' => 'IR',
                'name' => 'Iran',
                'phone_code' => 98
            ],
            [
                'id' => 104,
                'code' => 'IQ',
                'name' => 'Iraq',
                'phone_code' => 964
            ],
            [
                'id' => 105,
                'code' => 'IE',
                'name' => 'Ireland',
                'phone_code' => 353
            ],
            [
                'id' => 106,
                'code' => 'IL',
                'name' => 'Israel',
                'phone_code' => 972
            ],
            [
                'id' => 107,
                'code' => 'IT',
                'name' => 'Italy',
                'phone_code' => 39
            ],
            [
                'id' => 108,
                'code' => 'JM',
                'name' => 'Jamaica',
                'phone_code' => 1876
            ],
            [
                'id' => 109,
                'code' => 'JP',
                'name' => 'Japan',
                'phone_code' => 81
            ],
            [
                'id' => 110,
                'code' => 'XJ',
                'name' => 'Jersey',
                'phone_code' => 44
            ],
            [
                'id' => 111,
                'code' => 'JO',
                'name' => 'Jordan',
                'phone_code' => 962
            ],
            [
                'id' => 112,
                'code' => 'KZ',
                'name' => 'Kazakhstan',
                'phone_code' => 7
            ],
            [
                'id' => 113,
                'code' => 'KE',
                'name' => 'Kenya',
                'phone_code' => 254
            ],
            [
                'id' => 114,
                'code' => 'KI',
                'name' => 'Kiribati',
                'phone_code' => 686
            ],
            [
                'id' => 115,
                'code' => 'KP',
                'name' => 'Korea North',
                'phone_code' => 850
            ],
            [
                'id' => 116,
                'code' => 'KR',
                'name' => 'Korea South',
                'phone_code' => 82
            ],
            [
                'id' => 117,
                'code' => 'KW',
                'name' => 'Kuwait',
                'phone_code' => 965
            ],
            [
                'id' => 118,
                'code' => 'KG',
                'name' => 'Kyrgyzstan',
                'phone_code' => 996
            ],
            [
                'id' => 119,
                'code' => 'LA',
                'name' => 'Laos',
                'phone_code' => 856
            ],
            [
                'id' => 120,
                'code' => 'LV',
                'name' => 'Latvia',
                'phone_code' => 371
            ],
            [
                'id' => 121,
                'code' => 'LB',
                'name' => 'Lebanon',
                'phone_code' => 961
            ],
            [
                'id' => 122,
                'code' => 'LS',
                'name' => 'Lesotho',
                'phone_code' => 266
            ],
            [
                'id' => 123,
                'code' => 'LR',
                'name' => 'Liberia',
                'phone_code' => 231
            ],
            [
                'id' => 124,
                'code' => 'LY',
                'name' => 'Libya',
                'phone_code' => 218
            ],
            [
                'id' => 125,
                'code' => 'LI',
                'name' => 'Liechtenstein',
                'phone_code' => 423
            ],
            [
                'id' => 126,
                'code' => 'LT',
                'name' => 'Lithuania',
                'phone_code' => 370
            ],
            [
                'id' => 127,
                'code' => 'LU',
                'name' => 'Luxembourg',
                'phone_code' => 352
            ],
            [
                'id' => 128,
                'code' => 'MO',
                'name' => 'Macau S.A.R.',
                'phone_code' => 853
            ],
            [
                'id' => 129,
                'code' => 'MK',
                'name' => 'Macedonia',
                'phone_code' => 389
            ],
            [
                'id' => 130,
                'code' => 'MG',
                'name' => 'Madagascar',
                'phone_code' => 261
            ],
            [
                'id' => 131,
                'code' => 'MW',
                'name' => 'Malawi',
                'phone_code' => 265
            ],
            [
                'id' => 132,
                'code' => 'MY',
                'name' => 'Malaysia',
                'phone_code' => 60
            ],
            [
                'id' => 133,
                'code' => 'MV',
                'name' => 'Maldives',
                'phone_code' => 960
            ],
            [
                'id' => 134,
                'code' => 'ML',
                'name' => 'Mali',
                'phone_code' => 223
            ],
            [
                'id' => 135,
                'code' => 'MT',
                'name' => 'Malta',
                'phone_code' => 356
            ],
            [
                'id' => 136,
                'code' => 'XM',
                'name' => 'Man (Isle of)',
                'phone_code' => 44
            ],
            [
                'id' => 137,
                'code' => 'MH',
                'name' => 'Marshall Islands',
                'phone_code' => 692
            ],
            [
                'id' => 138,
                'code' => 'MQ',
                'name' => 'Martinique',
                'phone_code' => 596
            ],
            [
                'id' => 139,
                'code' => 'MR',
                'name' => 'Mauritania',
                'phone_code' => 222
            ],
            [
                'id' => 140,
                'code' => 'MU',
                'name' => 'Mauritius',
                'phone_code' => 230
            ],
            [
                'id' => 141,
                'code' => 'YT',
                'name' => 'Mayotte',
                'phone_code' => 269
            ],
            [
                'id' => 142,
                'code' => 'MX',
                'name' => 'Mexico',
                'phone_code' => 52
            ],
            [
                'id' => 143,
                'code' => 'FM',
                'name' => 'Micronesia',
                'phone_code' => 691
            ],
            [
                'id' => 144,
                'code' => 'MD',
                'name' => 'Moldova',
                'phone_code' => 373
            ],
            [
                'id' => 145,
                'code' => 'MC',
                'name' => 'Monaco',
                'phone_code' => 377
            ],
            [
                'id' => 146,
                'code' => 'MN',
                'name' => 'Mongolia',
                'phone_code' => 976
            ],
            [
                'id' => 147,
                'code' => 'MS',
                'name' => 'Montserrat',
                'phone_code' => 1664
            ],
            [
                'id' => 148,
                'code' => 'MA',
                'name' => 'Morocco',
                'phone_code' => 212
            ],
            [
                'id' => 149,
                'code' => 'MZ',
                'name' => 'Mozambique',
                'phone_code' => 258
            ],
            [
                'id' => 150,
                'code' => 'MM',
                'name' => 'Myanmar',
                'phone_code' => 95
            ],
            [
                'id' => 151,
                'code' => 'NA',
                'name' => 'Namibia',
                'phone_code' => 264
            ],
            [
                'id' => 152,
                'code' => 'NR',
                'name' => 'Nauru',
                'phone_code' => 674
            ],
            [
                'id' => 153,
                'code' => 'NP',
                'name' => 'Nepal',
                'phone_code' => 977
            ],
            [
                'id' => 154,
                'code' => 'AN',
                'name' => 'Netherlands Antilles',
                'phone_code' => 599
            ],
            [
                'id' => 155,
                'code' => 'NL',
                'name' => 'Netherlands The',
                'phone_code' => 31
            ],
            [
                'id' => 156,
                'code' => 'NC',
                'name' => 'New Caledonia',
                'phone_code' => 687
            ],
            [
                'id' => 157,
                'code' => 'NZ',
                'name' => 'New Zealand',
                'phone_code' => 64
            ],
            [
                'id' => 158,
                'code' => 'NI',
                'name' => 'Nicaragua',
                'phone_code' => 505
            ],
            [
                'id' => 159,
                'code' => 'NE',
                'name' => 'Niger',
                'phone_code' => 227
            ],
            [
                'id' => 160,
                'code' => 'NG',
                'name' => 'Nigeria',
                'phone_code' => 234
            ],
            [
                'id' => 161,
                'code' => 'NU',
                'name' => 'Niue',
                'phone_code' => 683
            ],
            [
                'id' => 162,
                'code' => 'NF',
                'name' => 'Norfolk Island',
                'phone_code' => 672
            ],
            [
                'id' => 163,
                'code' => 'MP',
                'name' => 'Northern Mariana Islands',
                'phone_code' => 1670
            ],
            [
                'id' => 164,
                'code' => 'NO',
                'name' => 'Norway',
                'phone_code' => 47
            ],
            [
                'id' => 165,
                'code' => 'OM',
                'name' => 'Oman',
                'phone_code' => 968
            ],
            [
                'id' => 166,
                'code' => 'PK',
                'name' => 'Pakistan',
                'phone_code' => 92
            ],
            [
                'id' => 167,
                'code' => 'PW',
                'name' => 'Palau',
                'phone_code' => 680
            ],
            [
                'id' => 168,
                'code' => 'PS',
                'name' => 'Palestinian Territory Occupied',
                'phone_code' => 970
            ],
            [
                'id' => 169,
                'code' => 'PA',
                'name' => 'Panama',
                'phone_code' => 507
            ],
            [
                'id' => 170,
                'code' => 'PG',
                'name' => 'Papua new Guinea',
                'phone_code' => 675
            ],
            [
                'id' => 171,
                'code' => 'PY',
                'name' => 'Paraguay',
                'phone_code' => 595
            ],
            [
                'id' => 172,
                'code' => 'PE',
                'name' => 'Peru',
                'phone_code' => 51
            ],
            [
                'id' => 173,
                'code' => 'PH',
                'name' => 'Philippines',
                'phone_code' => 63
            ],
            [
                'id' => 174,
                'code' => 'PN',
                'name' => 'Pitcairn Island',
                'phone_code' => 0
            ],
            [
                'id' => 175,
                'code' => 'PL',
                'name' => 'Poland',
                'phone_code' => 48
            ],
            [
                'id' => 176,
                'code' => 'PT',
                'name' => 'Portugal',
                'phone_code' => 351
            ],
            [
                'id' => 177,
                'code' => 'PR',
                'name' => 'Puerto Rico',
                'phone_code' => 1787
            ],
            [
                'id' => 178,
                'code' => 'QA',
                'name' => 'Qatar',
                'phone_code' => 974
            ],
            [
                'id' => 179,
                'code' => 'RE',
                'name' => 'Reunion',
                'phone_code' => 262
            ],
            [
                'id' => 180,
                'code' => 'RO',
                'name' => 'Romania',
                'phone_code' => 40
            ],
            [
                'id' => 181,
                'code' => 'RU',
                'name' => 'Russia',
                'phone_code' => 70
            ],
            [
                'id' => 182,
                'code' => 'RW',
                'name' => 'Rwanda',
                'phone_code' => 250
            ],
            [
                'id' => 183,
                'code' => 'SH',
                'name' => 'Saint Helena',
                'phone_code' => 290
            ],
            [
                'id' => 184,
                'code' => 'KN',
                'name' => 'Saint Kitts And Nevis',
                'phone_code' => 1869
            ],
            [
                'id' => 185,
                'code' => 'LC',
                'name' => 'Saint Lucia',
                'phone_code' => 1758
            ],
            [
                'id' => 186,
                'code' => 'PM',
                'name' => 'Saint Pierre and Miquelon',
                'phone_code' => 508
            ],
            [
                'id' => 187,
                'code' => 'VC',
                'name' => 'Saint Vincent And The Grenadines',
                'phone_code' => 1784
            ],
            [
                'id' => 188,
                'code' => 'WS',
                'name' => 'Samoa',
                'phone_code' => 684
            ],
            [
                'id' => 189,
                'code' => 'SM',
                'name' => 'San Marino',
                'phone_code' => 378
            ],
            [
                'id' => 190,
                'code' => 'ST',
                'name' => 'Sao Tome and Principe',
                'phone_code' => 239
            ],
            [
                'id' => 191,
                'code' => 'SA',
                'name' => 'Saudi Arabia',
                'phone_code' => 966
            ],
            [
                'id' => 192,
                'code' => 'SN',
                'name' => 'Senegal',
                'phone_code' => 221
            ],
            [
                'id' => 193,
                'code' => 'RS',
                'name' => 'Serbia',
                'phone_code' => 381
            ],
            [
                'id' => 194,
                'code' => 'SC',
                'name' => 'Seychelles',
                'phone_code' => 248
            ],
            [
                'id' => 195,
                'code' => 'SL',
                'name' => 'Sierra Leone',
                'phone_code' => 232
            ],
            [
                'id' => 196,
                'code' => 'SG',
                'name' => 'Singapore',
                'phone_code' => 65
            ],
            [
                'id' => 197,
                'code' => 'SK',
                'name' => 'Slovakia',
                'phone_code' => 421
            ],
            [
                'id' => 198,
                'code' => 'SI',
                'name' => 'Slovenia',
                'phone_code' => 386
            ],
            [
                'id' => 199,
                'code' => 'XG',
                'name' => 'Smaller Territories of the UK',
                'phone_code' => 44
            ],
            [
                'id' => 200,
                'code' => 'SB',
                'name' => 'Solomon Islands',
                'phone_code' => 677
            ],
            [
                'id' => 201,
                'code' => 'SO',
                'name' => 'Somalia',
                'phone_code' => 252
            ],
            [
                'id' => 202,
                'code' => 'ZA',
                'name' => 'South Africa',
                'phone_code' => 27
            ],
            [
                'id' => 203,
                'code' => 'GS',
                'name' => 'South Georgia',
                'phone_code' => 0
            ],
            [
                'id' => 204,
                'code' => 'SS',
                'name' => 'South Sudan',
                'phone_code' => 211
            ],
            [
                'id' => 205,
                'code' => 'ES',
                'name' => 'Spain',
                'phone_code' => 34
            ],
            [
                'id' => 206,
                'code' => 'LK',
                'name' => 'Sri Lanka',
                'phone_code' => 94
            ],
            [
                'id' => 207,
                'code' => 'SD',
                'name' => 'Sudan',
                'phone_code' => 249
            ],
            [
                'id' => 208,
                'code' => 'SR',
                'name' => 'Suricountry_name',
                'phone_code' => 597
            ],
            [
                'id' => 209,
                'code' => 'SJ',
                'name' => 'Svalbard And Jan Mayen Islands',
                'phone_code' => 47
            ],
            [
                'id' => 210,
                'code' => 'SZ',
                'name' => 'Swaziland',
                'phone_code' => 268
            ],
            [
                'id' => 211,
                'code' => 'SE',
                'name' => 'Sweden',
                'phone_code' => 46
            ],
            [
                'id' => 212,
                'code' => 'CH',
                'name' => 'Switzerland',
                'phone_code' => 41
            ],
            [
                'id' => 213,
                'code' => 'SY',
                'name' => 'Syria',
                'phone_code' => 963
            ],
            [
                'id' => 214,
                'code' => 'TW',
                'name' => 'Taiwan',
                'phone_code' => 886
            ],
            [
                'id' => 215,
                'code' => 'TJ',
                'name' => 'Tajikistan',
                'phone_code' => 992
            ],
            [
                'id' => 216,
                'code' => 'TZ',
                'name' => 'Tanzania',
                'phone_code' => 255
            ],
            [
                'id' => 217,
                'code' => 'TH',
                'name' => 'Thailand',
                'phone_code' => 66
            ],
            [
                'id' => 218,
                'code' => 'TG',
                'name' => 'Togo',
                'phone_code' => 228
            ],
            [
                'id' => 219,
                'code' => 'TK',
                'name' => 'Tokelau',
                'phone_code' => 690
            ],
            [
                'id' => 220,
                'code' => 'TO',
                'name' => 'Tonga',
                'phone_code' => 676
            ],
            [
                'id' => 221,
                'code' => 'TT',
                'name' => 'Trinidad And Tobago',
                'phone_code' => 1868
            ],
            [
                'id' => 222,
                'code' => 'TN',
                'name' => 'Tunisia',
                'phone_code' => 216
            ],
            [
                'id' => 223,
                'code' => 'TR',
                'name' => 'Turkey',
                'phone_code' => 90
            ],
            [
                'id' => 224,
                'code' => 'TM',
                'name' => 'Turkmenistan',
                'phone_code' => 7370
            ],
            [
                'id' => 225,
                'code' => 'TC',
                'name' => 'Turks And Caicos Islands',
                'phone_code' => 1649
            ],
            [
                'id' => 226,
                'code' => 'TV',
                'name' => 'Tuvalu',
                'phone_code' => 688
            ],
            [
                'id' => 227,
                'code' => 'UG',
                'name' => 'Uganda',
                'phone_code' => 256
            ],
            [
                'id' => 228,
                'code' => 'UA',
                'name' => 'Ukraine',
                'phone_code' => 380
            ],
            [
                'id' => 229,
                'code' => 'AE',
                'name' => 'United Arab Emirates',
                'phone_code' => 971
            ],
            [
                'id' => 230,
                'code' => 'GB',
                'name' => 'United Kingdom',
                'phone_code' => 44
            ],
            [
                'id' => 231,
                'code' => 'US',
                'name' => 'United States',
                'phone_code' => 1
            ],
            [
                'id' => 232,
                'code' => 'UM',
                'name' => 'United States Minor Outlying Islands',
                'phone_code' => 1
            ],
            [
                'id' => 233,
                'code' => 'UY',
                'name' => 'Uruguay',
                'phone_code' => 598
            ],
            [
                'id' => 234,
                'code' => 'UZ',
                'name' => 'Uzbekistan',
                'phone_code' => 998
            ],
            [
                'id' => 235,
                'code' => 'VU',
                'name' => 'Vanuatu',
                'phone_code' => 678
            ],
            [
                'id' => 236,
                'code' => 'VA',
                'name' => 'Vatican City State (Holy See)',
                'phone_code' => 39
            ],
            [
                'id' => 237,
                'code' => 'VE',
                'name' => 'Venezuela',
                'phone_code' => 58
            ],
            [
                'id' => 238,
                'code' => 'VN',
                'name' => 'Vietnam',
                'phone_code' => 84
            ],
            [
                'id' => 239,
                'code' => 'VG',
                'name' => 'Virgin Islands (British)',
                'phone_code' => 1284
            ],
            [
                'id' => 240,
                'code' => 'VI',
                'name' => 'Virgin Islands (US)',
                'phone_code' => 1340
            ],
            [
                'id' => 241,
                'code' => 'WF',
                'name' => 'Wallis And Futuna Islands',
                'phone_code' => 681
            ],
            [
                'id' => 242,
                'code' => 'EH',
                'name' => 'Western Sahara',
                'phone_code' => 212
            ],
            [
                'id' => 243,
                'code' => 'YE',
                'name' => 'Yemen',
                'phone_code' => 967
            ],
            [
                'id' => 244,
                'code' => 'YU',
                'name' => 'Yugoslavia',
                'phone_code' => 38
            ],
            [
                'id' => 245,
                'code' => 'ZM',
                'name' => 'Zambia',
                'phone_code' => 260
            ],
            [
                'id' => 246,
                'code' => 'ZW',
                'name' => 'Zimbabwe',
                'phone_code' => 26
            ],
        ];


        foreach ($countries as $country) {
            Country::insert([
                'id' => $country['id'],
                'name' => $country['name'],
                'code' => $country['code'],
                'phone_code' => $country['phone_code'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
