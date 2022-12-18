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
                'country_id' => 1,
                'code' => 'AF',
                'name' => 'Afghanistan',
                'phone_code' => 93
            ],
            [
                'country_id' => 2,
                'code' => 'AL',
                'name' => 'Albania',
                'phone_code' => 355
            ],
            [
                'country_id' => 3,
                'code' => 'DZ',
                'name' => 'Algeria',
                'phone_code' => 213
            ],
            [
                'country_id' => 4,
                'code' => 'AS',
                'name' => 'American Samoa',
                'phone_code' => 1684
            ],
            [
                'country_id' => 5,
                'code' => 'AD',
                'name' => 'Andorra',
                'phone_code' => 376
            ],
            [
                'country_id' => 6,
                'code' => 'AO',
                'name' => 'Angola',
                'phone_code' => 244
            ],
            [
                'country_id' => 7,
                'code' => 'AI',
                'name' => 'Anguilla',
                'phone_code' => 1264
            ],
            [
                'country_id' => 8,
                'code' => 'AQ',
                'name' => 'Antarctica',
                'phone_code' => 0
            ],
            [
                'country_id' => 9,
                'code' => 'AG',
                'name' => 'Antigua And Barbuda',
                'phone_code' => 1268
            ],
            [
                'country_id' => 10,
                'code' => 'AR',
                'name' => 'Argentina',
                'phone_code' => 54
            ],
            [
                'country_id' => 11,
                'code' => 'AM',
                'name' => 'Armenia',
                'phone_code' => 374
            ],
            [
                'country_id' => 12,
                'code' => 'AW',
                'name' => 'Aruba',
                'phone_code' => 297
            ],
            [
                'country_id' => 13,
                'code' => 'AU',
                'name' => 'Australia',
                'phone_code' => 61
            ],
            [
                'country_id' => 14,
                'code' => 'AT',
                'name' => 'Austria',
                'phone_code' => 43
            ],
            [
                'country_id' => 15,
                'code' => 'AZ',
                'name' => 'Azerbaijan',
                'phone_code' => 994
            ],
            [
                'country_id' => 16,
                'code' => 'BS',
                'name' => 'Bahamas The',
                'phone_code' => 1242
            ],
            [
                'country_id' => 17,
                'code' => 'BH',
                'name' => 'Bahrain',
                'phone_code' => 973
            ],
            [
                'country_id' => 18,
                'code' => 'BD',
                'name' => 'Bangladesh',
                'phone_code' => 880
            ],
            [
                'country_id' => 19,
                'code' => 'BB',
                'name' => 'Barbados',
                'phone_code' => 1246
            ],
            [
                'country_id' => 20,
                'code' => 'BY',
                'name' => 'Belarus',
                'phone_code' => 375
            ],
            [
                'country_id' => 21,
                'code' => 'BE',
                'name' => 'Belgium',
                'phone_code' => 32
            ],
            [
                'country_id' => 22,
                'code' => 'BZ',
                'name' => 'Belize',
                'phone_code' => 501
            ],
            [
                'country_id' => 23,
                'code' => 'BJ',
                'name' => 'Benin',
                'phone_code' => 229
            ],
            [
                'country_id' => 24,
                'code' => 'BM',
                'name' => 'Bermuda',
                'phone_code' => 1441
            ],
            [
                'country_id' => 25,
                'code' => 'BT',
                'name' => 'Bhutan',
                'phone_code' => 975
            ],
            [
                'country_id' => 26,
                'code' => 'BO',
                'name' => 'Bolivia',
                'phone_code' => 591
            ],
            [
                'country_id' => 27,
                'code' => 'BA',
                'name' => 'Bosnia and Herzegovina',
                'phone_code' => 387
            ],
            [
                'country_id' => 28,
                'code' => 'BW',
                'name' => 'Botswana',
                'phone_code' => 267
            ],
            [
                'country_id' => 29,
                'code' => 'BV',
                'name' => 'Bouvet Island',
                'phone_code' => 0
            ],
            [
                'country_id' => 30,
                'code' => 'BR',
                'name' => 'Brazil',
                'phone_code' => 55
            ],
            [
                'country_id' => 31,
                'code' => 'IO',
                'name' => 'British Indian Ocean Territory',
                'phone_code' => 246
            ],
            [
                'country_id' => 32,
                'code' => 'BN',
                'name' => 'Brunei',
                'phone_code' => 673
            ],
            [
                'country_id' => 33,
                'code' => 'BG',
                'name' => 'Bulgaria',
                'phone_code' => 359
            ],
            [
                'country_id' => 34,
                'code' => 'BF',
                'name' => 'Burkina Faso',
                'phone_code' => 226
            ],
            [
                'country_id' => 35,
                'code' => 'BI',
                'name' => 'Burundi',
                'phone_code' => 257
            ],
            [
                'country_id' => 36,
                'code' => 'KH',
                'name' => 'Cambodia',
                'phone_code' => 855
            ],
            [
                'country_id' => 37,
                'code' => 'CM',
                'name' => 'Cameroon',
                'phone_code' => 237
            ],
            [
                'country_id' => 38,
                'code' => 'CA',
                'name' => 'Canada',
                'phone_code' => 1
            ],
            [
                'country_id' => 39,
                'code' => 'CV',
                'name' => 'Cape Verde',
                'phone_code' => 238
            ],
            [
                'country_id' => 40,
                'code' => 'KY',
                'name' => 'Cayman Islands',
                'phone_code' => 1345
            ],
            [
                'country_id' => 41,
                'code' => 'CF',
                'name' => 'Central African Republic',
                'phone_code' => 236
            ],
            [
                'country_id' => 42,
                'code' => 'TD',
                'name' => 'Chad',
                'phone_code' => 235
            ],
            [
                'country_id' => 43,
                'code' => 'CL',
                'name' => 'Chile',
                'phone_code' => 56
            ],
            [
                'country_id' => 44,
                'code' => 'CN',
                'name' => 'China',
                'phone_code' => 86
            ],
            [
                'country_id' => 45,
                'code' => 'CX',
                'name' => 'Christmas Island',
                'phone_code' => 61
            ],
            [
                'country_id' => 46,
                'code' => 'CC',
                'name' => 'Cocos (Keeling) Islands',
                'phone_code' => 672
            ],
            [
                'country_id' => 47,
                'code' => 'CO',
                'name' => 'Colombia',
                'phone_code' => 57
            ],
            [
                'country_id' => 48,
                'code' => 'KM',
                'name' => 'Comoros',
                'phone_code' => 269
            ],
            [
                'country_id' => 49,
                'code' => 'CG',
                'name' => 'Republic Of The Congo',
                'phone_code' => 242
            ],
            [
                'country_id' => 50,
                'code' => 'CD',
                'name' => 'Democratic Republic Of The Congo',
                'phone_code' => 242
            ],
            [
                'country_id' => 51,
                'code' => 'CK',
                'name' => 'Cook Islands',
                'phone_code' => 682
            ],
            [
                'country_id' => 52,
                'code' => 'CR',
                'name' => 'Costa Rica',
                'phone_code' => 506
            ],
            [
                'country_id' => 53,
                'code' => 'CI',
                'name' => 'Cote D Ivoire (Ivory Coast)',
                'phone_code' => 225
            ],
            [
                'country_id' => 54,
                'code' => 'HR',
                'name' => 'Croatia (Hrvatska)',
                'phone_code' => 385
            ],
            [
                'country_id' => 55,
                'code' => 'CU',
                'name' => 'Cuba',
                'phone_code' => 53
            ],
            [
                'country_id' => 56,
                'code' => 'CY',
                'name' => 'Cyprus',
                'phone_code' => 357
            ],
            [
                'country_id' => 57,
                'code' => 'CZ',
                'name' => 'Czech Republic',
                'phone_code' => 420
            ],
            [
                'country_id' => 58,
                'code' => 'DK',
                'name' => 'Denmark',
                'phone_code' => 45
            ],
            [
                'country_id' => 59,
                'code' => 'DJ',
                'name' => 'Djibouti',
                'phone_code' => 253
            ],
            [
                'country_id' => 60,
                'code' => 'DM',
                'name' => 'Dominica',
                'phone_code' => 1767
            ],
            [
                'country_id' => 61,
                'code' => 'DO',
                'name' => 'Dominican Republic',
                'phone_code' => 1809
            ],
            [
                'country_id' => 62,
                'code' => 'TP',
                'name' => 'East Timor',
                'phone_code' => 670
            ],
            [
                'country_id' => 63,
                'code' => 'EC',
                'name' => 'Ecuador',
                'phone_code' => 593
            ],
            [
                'country_id' => 64,
                'code' => 'EG',
                'name' => 'Egypt',
                'phone_code' => 20
            ],
            [
                'country_id' => 65,
                'code' => 'SV',
                'name' => 'El Salvador',
                'phone_code' => 503
            ],
            [
                'country_id' => 66,
                'code' => 'GQ',
                'name' => 'Equatorial Guinea',
                'phone_code' => 240
            ],
            [
                'country_id' => 67,
                'code' => 'ER',
                'name' => 'Eritrea',
                'phone_code' => 291
            ],
            [
                'country_id' => 68,
                'code' => 'EE',
                'name' => 'Estonia',
                'phone_code' => 372
            ],
            [
                'country_id' => 69,
                'code' => 'ET',
                'name' => 'Ethiopia',
                'phone_code' => 251
            ],
            [
                'country_id' => 70,
                'code' => 'XA',
                'name' => 'External Territories of Australia',
                'phone_code' => 61
            ],
            [
                'country_id' => 71,
                'code' => 'FK',
                'name' => 'Falkland Islands',
                'phone_code' => 500
            ],
            [
                'country_id' => 72,
                'code' => 'FO',
                'name' => 'Faroe Islands',
                'phone_code' => 298
            ],
            [
                'country_id' => 73,
                'code' => 'FJ',
                'name' => 'Fiji Islands',
                'phone_code' => 679
            ],
            [
                'country_id' => 74,
                'code' => 'FI',
                'name' => 'Finland',
                'phone_code' => 358
            ],
            [
                'country_id' => 75,
                'code' => 'FR',
                'name' => 'France',
                'phone_code' => 33
            ],
            [
                'country_id' => 76,
                'code' => 'GF',
                'name' => 'French Guiana',
                'phone_code' => 594
            ],
            [
                'country_id' => 77,
                'code' => 'PF',
                'name' => 'French Polynesia',
                'phone_code' => 689
            ],
            [
                'country_id' => 78,
                'code' => 'TF',
                'name' => 'French Southern Territories',
                'phone_code' => 0
            ],
            [
                'country_id' => 79,
                'code' => 'GA',
                'name' => 'Gabon',
                'phone_code' => 241
            ],
            [
                'country_id' => 80,
                'code' => 'GM',
                'name' => 'Gambia The',
                'phone_code' => 220
            ],
            [
                'country_id' => 81,
                'code' => 'GE',
                'name' => 'Georgia',
                'phone_code' => 995
            ],
            [
                'country_id' => 82,
                'code' => 'DE',
                'name' => 'Germany',
                'phone_code' => 49
            ],
            [
                'country_id' => 83,
                'code' => 'GH',
                'name' => 'Ghana',
                'phone_code' => 233
            ],
            [
                'country_id' => 84,
                'code' => 'GI',
                'name' => 'Gibraltar',
                'phone_code' => 350
            ],
            [
                'country_id' => 85,
                'code' => 'GR',
                'name' => 'Greece',
                'phone_code' => 30
            ],
            [
                'country_id' => 86,
                'code' => 'GL',
                'name' => 'Greenland',
                'phone_code' => 299
            ],
            [
                'country_id' => 87,
                'code' => 'GD',
                'name' => 'Grenada',
                'phone_code' => 1473
            ],
            [
                'country_id' => 88,
                'code' => 'GP',
                'name' => 'Guadeloupe',
                'phone_code' => 590
            ],
            [
                'country_id' => 89,
                'code' => 'GU',
                'name' => 'Guam',
                'phone_code' => 1671
            ],
            [
                'country_id' => 90,
                'code' => 'GT',
                'name' => 'Guatemala',
                'phone_code' => 502
            ],
            [
                'country_id' => 91,
                'code' => 'XU',
                'name' => 'Guernsey and Alderney',
                'phone_code' => 44
            ],
            [
                'country_id' => 92,
                'code' => 'GN',
                'name' => 'Guinea',
                'phone_code' => 224
            ],
            [
                'country_id' => 93,
                'code' => 'GW',
                'name' => 'Guinea-Bissau',
                'phone_code' => 245
            ],
            [
                'country_id' => 94,
                'code' => 'GY',
                'name' => 'Guyana',
                'phone_code' => 592
            ],
            [
                'country_id' => 95,
                'code' => 'HT',
                'name' => 'Haiti',
                'phone_code' => 509
            ],
            [
                'country_id' => 96,
                'code' => 'HM',
                'name' => 'Heard and McDonald Islands',
                'phone_code' => 0
            ],
            [
                'country_id' => 97,
                'code' => 'HN',
                'name' => 'Honduras',
                'phone_code' => 504
            ],
            [
                'country_id' => 98,
                'code' => 'HK',
                'name' => 'Hong Kong S.A.R.',
                'phone_code' => 852
            ],
            [
                'country_id' => 99,
                'code' => 'HU',
                'name' => 'Hungary',
                'phone_code' => 36
            ],
            [
                'country_id' => 100,
                'code' => 'IS',
                'name' => 'Iceland',
                'phone_code' => 354
            ],
            [
                'country_id' => 101,
                'code' => 'IN',
                'name' => 'India',
                'phone_code' => 91
            ],
            [
                'country_id' => 102,
                'code' => 'country_id',
                'name' => 'Indonesia',
                'phone_code' => 62
            ],
            [
                'country_id' => 103,
                'code' => 'IR',
                'name' => 'Iran',
                'phone_code' => 98
            ],
            [
                'country_id' => 104,
                'code' => 'IQ',
                'name' => 'Iraq',
                'phone_code' => 964
            ],
            [
                'country_id' => 105,
                'code' => 'IE',
                'name' => 'Ireland',
                'phone_code' => 353
            ],
            [
                'country_id' => 106,
                'code' => 'IL',
                'name' => 'Israel',
                'phone_code' => 972
            ],
            [
                'country_id' => 107,
                'code' => 'IT',
                'name' => 'Italy',
                'phone_code' => 39
            ],
            [
                'country_id' => 108,
                'code' => 'JM',
                'name' => 'Jamaica',
                'phone_code' => 1876
            ],
            [
                'country_id' => 109,
                'code' => 'JP',
                'name' => 'Japan',
                'phone_code' => 81
            ],
            [
                'country_id' => 110,
                'code' => 'XJ',
                'name' => 'Jersey',
                'phone_code' => 44
            ],
            [
                'country_id' => 111,
                'code' => 'JO',
                'name' => 'Jordan',
                'phone_code' => 962
            ],
            [
                'country_id' => 112,
                'code' => 'KZ',
                'name' => 'Kazakhstan',
                'phone_code' => 7
            ],
            [
                'country_id' => 113,
                'code' => 'KE',
                'name' => 'Kenya',
                'phone_code' => 254
            ],
            [
                'country_id' => 114,
                'code' => 'KI',
                'name' => 'Kiribati',
                'phone_code' => 686
            ],
            [
                'country_id' => 115,
                'code' => 'KP',
                'name' => 'Korea North',
                'phone_code' => 850
            ],
            [
                'country_id' => 116,
                'code' => 'KR',
                'name' => 'Korea South',
                'phone_code' => 82
            ],
            [
                'country_id' => 117,
                'code' => 'KW',
                'name' => 'Kuwait',
                'phone_code' => 965
            ],
            [
                'country_id' => 118,
                'code' => 'KG',
                'name' => 'Kyrgyzstan',
                'phone_code' => 996
            ],
            [
                'country_id' => 119,
                'code' => 'LA',
                'name' => 'Laos',
                'phone_code' => 856
            ],
            [
                'country_id' => 120,
                'code' => 'LV',
                'name' => 'Latvia',
                'phone_code' => 371
            ],
            [
                'country_id' => 121,
                'code' => 'LB',
                'name' => 'Lebanon',
                'phone_code' => 961
            ],
            [
                'country_id' => 122,
                'code' => 'LS',
                'name' => 'Lesotho',
                'phone_code' => 266
            ],
            [
                'country_id' => 123,
                'code' => 'LR',
                'name' => 'Liberia',
                'phone_code' => 231
            ],
            [
                'country_id' => 124,
                'code' => 'LY',
                'name' => 'Libya',
                'phone_code' => 218
            ],
            [
                'country_id' => 125,
                'code' => 'LI',
                'name' => 'Liechtenstein',
                'phone_code' => 423
            ],
            [
                'country_id' => 126,
                'code' => 'LT',
                'name' => 'Lithuania',
                'phone_code' => 370
            ],
            [
                'country_id' => 127,
                'code' => 'LU',
                'name' => 'Luxembourg',
                'phone_code' => 352
            ],
            [
                'country_id' => 128,
                'code' => 'MO',
                'name' => 'Macau S.A.R.',
                'phone_code' => 853
            ],
            [
                'country_id' => 129,
                'code' => 'MK',
                'name' => 'Macedonia',
                'phone_code' => 389
            ],
            [
                'country_id' => 130,
                'code' => 'MG',
                'name' => 'Madagascar',
                'phone_code' => 261
            ],
            [
                'country_id' => 131,
                'code' => 'MW',
                'name' => 'Malawi',
                'phone_code' => 265
            ],
            [
                'country_id' => 132,
                'code' => 'MY',
                'name' => 'Malaysia',
                'phone_code' => 60
            ],
            [
                'country_id' => 133,
                'code' => 'MV',
                'name' => 'Maldives',
                'phone_code' => 960
            ],
            [
                'country_id' => 134,
                'code' => 'ML',
                'name' => 'Mali',
                'phone_code' => 223
            ],
            [
                'country_id' => 135,
                'code' => 'MT',
                'name' => 'Malta',
                'phone_code' => 356
            ],
            [
                'country_id' => 136,
                'code' => 'XM',
                'name' => 'Man (Isle of)',
                'phone_code' => 44
            ],
            [
                'country_id' => 137,
                'code' => 'MH',
                'name' => 'Marshall Islands',
                'phone_code' => 692
            ],
            [
                'country_id' => 138,
                'code' => 'MQ',
                'name' => 'Martinique',
                'phone_code' => 596
            ],
            [
                'country_id' => 139,
                'code' => 'MR',
                'name' => 'Mauritania',
                'phone_code' => 222
            ],
            [
                'country_id' => 140,
                'code' => 'MU',
                'name' => 'Mauritius',
                'phone_code' => 230
            ],
            [
                'country_id' => 141,
                'code' => 'YT',
                'name' => 'Mayotte',
                'phone_code' => 269
            ],
            [
                'country_id' => 142,
                'code' => 'MX',
                'name' => 'Mexico',
                'phone_code' => 52
            ],
            [
                'country_id' => 143,
                'code' => 'FM',
                'name' => 'Micronesia',
                'phone_code' => 691
            ],
            [
                'country_id' => 144,
                'code' => 'MD',
                'name' => 'Moldova',
                'phone_code' => 373
            ],
            [
                'country_id' => 145,
                'code' => 'MC',
                'name' => 'Monaco',
                'phone_code' => 377
            ],
            [
                'country_id' => 146,
                'code' => 'MN',
                'name' => 'Mongolia',
                'phone_code' => 976
            ],
            [
                'country_id' => 147,
                'code' => 'MS',
                'name' => 'Montserrat',
                'phone_code' => 1664
            ],
            [
                'country_id' => 148,
                'code' => 'MA',
                'name' => 'Morocco',
                'phone_code' => 212
            ],
            [
                'country_id' => 149,
                'code' => 'MZ',
                'name' => 'Mozambique',
                'phone_code' => 258
            ],
            [
                'country_id' => 150,
                'code' => 'MM',
                'name' => 'Myanmar',
                'phone_code' => 95
            ],
            [
                'country_id' => 151,
                'code' => 'NA',
                'name' => 'Namibia',
                'phone_code' => 264
            ],
            [
                'country_id' => 152,
                'code' => 'NR',
                'name' => 'Nauru',
                'phone_code' => 674
            ],
            [
                'country_id' => 153,
                'code' => 'NP',
                'name' => 'Nepal',
                'phone_code' => 977
            ],
            [
                'country_id' => 154,
                'code' => 'AN',
                'name' => 'Netherlands Antilles',
                'phone_code' => 599
            ],
            [
                'country_id' => 155,
                'code' => 'NL',
                'name' => 'Netherlands The',
                'phone_code' => 31
            ],
            [
                'country_id' => 156,
                'code' => 'NC',
                'name' => 'New Caledonia',
                'phone_code' => 687
            ],
            [
                'country_id' => 157,
                'code' => 'NZ',
                'name' => 'New Zealand',
                'phone_code' => 64
            ],
            [
                'country_id' => 158,
                'code' => 'NI',
                'name' => 'Nicaragua',
                'phone_code' => 505
            ],
            [
                'country_id' => 159,
                'code' => 'NE',
                'name' => 'Niger',
                'phone_code' => 227
            ],
            [
                'country_id' => 160,
                'code' => 'NG',
                'name' => 'Nigeria',
                'phone_code' => 234
            ],
            [
                'country_id' => 161,
                'code' => 'NU',
                'name' => 'Niue',
                'phone_code' => 683
            ],
            [
                'country_id' => 162,
                'code' => 'NF',
                'name' => 'Norfolk Island',
                'phone_code' => 672
            ],
            [
                'country_id' => 163,
                'code' => 'MP',
                'name' => 'Northern Mariana Islands',
                'phone_code' => 1670
            ],
            [
                'country_id' => 164,
                'code' => 'NO',
                'name' => 'Norway',
                'phone_code' => 47
            ],
            [
                'country_id' => 165,
                'code' => 'OM',
                'name' => 'Oman',
                'phone_code' => 968
            ],
            [
                'country_id' => 166,
                'code' => 'PK',
                'name' => 'Pakistan',
                'phone_code' => 92
            ],
            [
                'country_id' => 167,
                'code' => 'PW',
                'name' => 'Palau',
                'phone_code' => 680
            ],
            [
                'country_id' => 168,
                'code' => 'PS',
                'name' => 'Palestinian Territory Occupied',
                'phone_code' => 970
            ],
            [
                'country_id' => 169,
                'code' => 'PA',
                'name' => 'Panama',
                'phone_code' => 507
            ],
            [
                'country_id' => 170,
                'code' => 'PG',
                'name' => 'Papua new Guinea',
                'phone_code' => 675
            ],
            [
                'country_id' => 171,
                'code' => 'PY',
                'name' => 'Paraguay',
                'phone_code' => 595
            ],
            [
                'country_id' => 172,
                'code' => 'PE',
                'name' => 'Peru',
                'phone_code' => 51
            ],
            [
                'country_id' => 173,
                'code' => 'PH',
                'name' => 'Philippines',
                'phone_code' => 63
            ],
            [
                'country_id' => 174,
                'code' => 'PN',
                'name' => 'Pitcairn Island',
                'phone_code' => 0
            ],
            [
                'country_id' => 175,
                'code' => 'PL',
                'name' => 'Poland',
                'phone_code' => 48
            ],
            [
                'country_id' => 176,
                'code' => 'PT',
                'name' => 'Portugal',
                'phone_code' => 351
            ],
            [
                'country_id' => 177,
                'code' => 'PR',
                'name' => 'Puerto Rico',
                'phone_code' => 1787
            ],
            [
                'country_id' => 178,
                'code' => 'QA',
                'name' => 'Qatar',
                'phone_code' => 974
            ],
            [
                'country_id' => 179,
                'code' => 'RE',
                'name' => 'Reunion',
                'phone_code' => 262
            ],
            [
                'country_id' => 180,
                'code' => 'RO',
                'name' => 'Romania',
                'phone_code' => 40
            ],
            [
                'country_id' => 181,
                'code' => 'RU',
                'name' => 'Russia',
                'phone_code' => 70
            ],
            [
                'country_id' => 182,
                'code' => 'RW',
                'name' => 'Rwanda',
                'phone_code' => 250
            ],
            [
                'country_id' => 183,
                'code' => 'SH',
                'name' => 'Saint Helena',
                'phone_code' => 290
            ],
            [
                'country_id' => 184,
                'code' => 'KN',
                'name' => 'Saint Kitts And Nevis',
                'phone_code' => 1869
            ],
            [
                'country_id' => 185,
                'code' => 'LC',
                'name' => 'Saint Lucia',
                'phone_code' => 1758
            ],
            [
                'country_id' => 186,
                'code' => 'PM',
                'name' => 'Saint Pierre and Miquelon',
                'phone_code' => 508
            ],
            [
                'country_id' => 187,
                'code' => 'VC',
                'name' => 'Saint Vincent And The Grenadines',
                'phone_code' => 1784
            ],
            [
                'country_id' => 188,
                'code' => 'WS',
                'name' => 'Samoa',
                'phone_code' => 684
            ],
            [
                'country_id' => 189,
                'code' => 'SM',
                'name' => 'San Marino',
                'phone_code' => 378
            ],
            [
                'country_id' => 190,
                'code' => 'ST',
                'name' => 'Sao Tome and Principe',
                'phone_code' => 239
            ],
            [
                'country_id' => 191,
                'code' => 'SA',
                'name' => 'Saudi Arabia',
                'phone_code' => 966
            ],
            [
                'country_id' => 192,
                'code' => 'SN',
                'name' => 'Senegal',
                'phone_code' => 221
            ],
            [
                'country_id' => 193,
                'code' => 'RS',
                'name' => 'Serbia',
                'phone_code' => 381
            ],
            [
                'country_id' => 194,
                'code' => 'SC',
                'name' => 'Seychelles',
                'phone_code' => 248
            ],
            [
                'country_id' => 195,
                'code' => 'SL',
                'name' => 'Sierra Leone',
                'phone_code' => 232
            ],
            [
                'country_id' => 196,
                'code' => 'SG',
                'name' => 'Singapore',
                'phone_code' => 65
            ],
            [
                'country_id' => 197,
                'code' => 'SK',
                'name' => 'Slovakia',
                'phone_code' => 421
            ],
            [
                'country_id' => 198,
                'code' => 'SI',
                'name' => 'Slovenia',
                'phone_code' => 386
            ],
            [
                'country_id' => 199,
                'code' => 'XG',
                'name' => 'Smaller Territories of the UK',
                'phone_code' => 44
            ],
            [
                'country_id' => 200,
                'code' => 'SB',
                'name' => 'Solomon Islands',
                'phone_code' => 677
            ],
            [
                'country_id' => 201,
                'code' => 'SO',
                'name' => 'Somalia',
                'phone_code' => 252
            ],
            [
                'country_id' => 202,
                'code' => 'ZA',
                'name' => 'South Africa',
                'phone_code' => 27
            ],
            [
                'country_id' => 203,
                'code' => 'GS',
                'name' => 'South Georgia',
                'phone_code' => 0
            ],
            [
                'country_id' => 204,
                'code' => 'SS',
                'name' => 'South Sudan',
                'phone_code' => 211
            ],
            [
                'country_id' => 205,
                'code' => 'ES',
                'name' => 'Spain',
                'phone_code' => 34
            ],
            [
                'country_id' => 206,
                'code' => 'LK',
                'name' => 'Sri Lanka',
                'phone_code' => 94
            ],
            [
                'country_id' => 207,
                'code' => 'SD',
                'name' => 'Sudan',
                'phone_code' => 249
            ],
            [
                'country_id' => 208,
                'code' => 'SR',
                'name' => 'Suricountry_name',
                'phone_code' => 597
            ],
            [
                'country_id' => 209,
                'code' => 'SJ',
                'name' => 'Svalbard And Jan Mayen Islands',
                'phone_code' => 47
            ],
            [
                'country_id' => 210,
                'code' => 'SZ',
                'name' => 'Swaziland',
                'phone_code' => 268
            ],
            [
                'country_id' => 211,
                'code' => 'SE',
                'name' => 'Sweden',
                'phone_code' => 46
            ],
            [
                'country_id' => 212,
                'code' => 'CH',
                'name' => 'Switzerland',
                'phone_code' => 41
            ],
            [
                'country_id' => 213,
                'code' => 'SY',
                'name' => 'Syria',
                'phone_code' => 963
            ],
            [
                'country_id' => 214,
                'code' => 'TW',
                'name' => 'Taiwan',
                'phone_code' => 886
            ],
            [
                'country_id' => 215,
                'code' => 'TJ',
                'name' => 'Tajikistan',
                'phone_code' => 992
            ],
            [
                'country_id' => 216,
                'code' => 'TZ',
                'name' => 'Tanzania',
                'phone_code' => 255
            ],
            [
                'country_id' => 217,
                'code' => 'TH',
                'name' => 'Thailand',
                'phone_code' => 66
            ],
            [
                'country_id' => 218,
                'code' => 'TG',
                'name' => 'Togo',
                'phone_code' => 228
            ],
            [
                'country_id' => 219,
                'code' => 'TK',
                'name' => 'Tokelau',
                'phone_code' => 690
            ],
            [
                'country_id' => 220,
                'code' => 'TO',
                'name' => 'Tonga',
                'phone_code' => 676
            ],
            [
                'country_id' => 221,
                'code' => 'TT',
                'name' => 'Trincountry_idad And Tobago',
                'phone_code' => 1868
            ],
            [
                'country_id' => 222,
                'code' => 'TN',
                'name' => 'Tunisia',
                'phone_code' => 216
            ],
            [
                'country_id' => 223,
                'code' => 'TR',
                'name' => 'Turkey',
                'phone_code' => 90
            ],
            [
                'country_id' => 224,
                'code' => 'TM',
                'name' => 'Turkmenistan',
                'phone_code' => 7370
            ],
            [
                'country_id' => 225,
                'code' => 'TC',
                'name' => 'Turks And Caicos Islands',
                'phone_code' => 1649
            ],
            [
                'country_id' => 226,
                'code' => 'TV',
                'name' => 'Tuvalu',
                'phone_code' => 688
            ],
            [
                'country_id' => 227,
                'code' => 'UG',
                'name' => 'Uganda',
                'phone_code' => 256
            ],
            [
                'country_id' => 228,
                'code' => 'UA',
                'name' => 'Ukraine',
                'phone_code' => 380
            ],
            [
                'country_id' => 229,
                'code' => 'AE',
                'name' => 'United Arab Emirates',
                'phone_code' => 971
            ],
            [
                'country_id' => 230,
                'code' => 'GB',
                'name' => 'United Kingdom',
                'phone_code' => 44
            ],
            [
                'country_id' => 231,
                'code' => 'US',
                'name' => 'United States',
                'phone_code' => 1
            ],
            [
                'country_id' => 232,
                'code' => 'UM',
                'name' => 'United States Minor Outlying Islands',
                'phone_code' => 1
            ],
            [
                'country_id' => 233,
                'code' => 'UY',
                'name' => 'Uruguay',
                'phone_code' => 598
            ],
            [
                'country_id' => 234,
                'code' => 'UZ',
                'name' => 'Uzbekistan',
                'phone_code' => 998
            ],
            [
                'country_id' => 235,
                'code' => 'VU',
                'name' => 'Vanuatu',
                'phone_code' => 678
            ],
            [
                'country_id' => 236,
                'code' => 'VA',
                'name' => 'Vatican City State (Holy See)',
                'phone_code' => 39
            ],
            [
                'country_id' => 237,
                'code' => 'VE',
                'name' => 'Venezuela',
                'phone_code' => 58
            ],
            [
                'country_id' => 238,
                'code' => 'VN',
                'name' => 'Vietnam',
                'phone_code' => 84
            ],
            [
                'country_id' => 239,
                'code' => 'VG',
                'name' => 'Virgin Islands (British)',
                'phone_code' => 1284
            ],
            [
                'country_id' => 240,
                'code' => 'VI',
                'name' => 'Virgin Islands (US)',
                'phone_code' => 1340
            ],
            [
                'country_id' => 241,
                'code' => 'WF',
                'name' => 'Wallis And Futuna Islands',
                'phone_code' => 681
            ],
            [
                'country_id' => 242,
                'code' => 'EH',
                'name' => 'Western Sahara',
                'phone_code' => 212
            ],
            [
                'country_id' => 243,
                'code' => 'YE',
                'name' => 'Yemen',
                'phone_code' => 967
            ],
            [
                'country_id' => 244,
                'code' => 'YU',
                'name' => 'Yugoslavia',
                'phone_code' => 38
            ],
            [
                'country_id' => 245,
                'code' => 'ZM',
                'name' => 'Zambia',
                'phone_code' => 260
            ],
            [
                'country_id' => 246,
                'code' => 'ZW',
                'name' => 'Zimbabwe',
                'phone_code' => 26
            ],
        ];

        Country::insert($countries);

    }
}
