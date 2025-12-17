<?php

namespace Database\Seeders;

use App\Models\Tribe;
use App\Models\User;
use Exception;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class TribeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        //dd('TribeSeeder =>', User::first());

//        Tribe::truncate();
        $firstUserUuid = User::first()->id;

        try {
            $tribes = [
                // 1 Chaga
                 [
                    'name' => 'Chaga',
                    'common_names' => ['Chagga', 'Wachagga'],
                    'origin_region' => 'Mkoa wa Kilimanjaro',
                    'famous_location' => 'Moshi, slopes of Mount Kilimanjaro',
                    'country' => 'Tanzania',
                    'summary' => 'Wachaga ni jamii ya wakulima wanaoishi katika miteremko ya Mlima Kilimanjaro.',
                    'description' => 'Wanajulikana kwa kilimo cha kahawa na ndizi kwa mfumo wa matuta, pamoja na mila tajiri za chakula.',
                    'origins_and_history' => [
                        'summary' => 'Makazi katika miteremko ya Mlima Kilimanjaro',
                        'description' => 'Wachaga waliunda machifu huru yaliyopatikana katika ardhi yenye rutuba ya volkano.',
                        'items' => [
                            [
                                'name' => 'Uhamaji na makazi',
                                'description' => 'Walivutiwa na ardhi yenye rutuba inayofaa kwa kilimo cha ndizi na kahawa.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vinavyotokana na ndizi',
                        'description' => 'Ndizi ni kiini cha maisha ya kila siku na sherehe.',
                        'items' => [
                            [
                                'name' => 'Mtori',
                                'description' => 'Supu nzito ya ndizi na nyama ya ng’ombe inayoliwa asubuhi kwa jadi.',
                                'media_keys' => ['mtori_img'],
                            ],
                            [
                                'name' => 'Vyakula vya ndizi',
                                'description' => 'Ndizi ni sehemu muhimu ya lishe na taratibu za kitamaduni.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma za sherehe',
                        'description' => 'Muziki huambatana na taratibu za maisha na matukio ya kijamii.',
                        'items' => [
                            [
                                'name' => 'Mringaringa',
                                'description' => 'Huchezwa wakati wa sherehe na hafla za kijamii.',
                                'media_keys' => ['chaga_dance_video'],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi na mapambo ya jadi',
                        'description' => 'Mavazi huonyesha hadhi na tukio husika.',
                        'items' => [
                            [
                                'name' => 'Mapambo ya shanga',
                                'description' => 'Huvaa wakati wa sherehe na matambiko.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],

                // 2 Haya
                [
                    'name' => 'Haya',
                    'common_names' => ['Wahaya', 'Bahaya'],
                    'origin_region' => 'Mkoa wa Kagera',
                    'famous_location' => 'Bukoba na mwambao wa Ziwa Victoria',
                    'country' => 'Tanzania',
                    'summary' => 'Wahaya ni jamii ya wakulima na wafugaji wanaoishi kaskazini-magharibi mwa Tanzania.',
                    'description' => 'Wanajulikana kwa kilimo cha ndizi, ufugaji wa ng’ombe, na historia ndefu ya falme za jadi.',
                    'origins_and_history' => [
                        'summary' => 'Makazi ya muda mrefu katika eneo la Ziwa Victoria',
                        'description' => 'Wahaya waliunda falme imara za jadi zilizoongozwa na machifu (abakama) na kuwa miongoni mwa jamii za mwanzo kuendeleza teknolojia ya chuma.',
                        'items' => [
                            [
                                'name' => 'Uhamaji na falme za jadi',
                                'description' => 'Walijikita katika eneo la Kagera na kuunda falme zilizoongozwa na machifu wenye mamlaka ya kijamii na kiutamaduni.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vinavyotokana na ndizi na maziwa',
                        'description' => 'Ndizi ni chakula kikuu na hutumika pia kutengeneza vinywaji vya jadi.',
                        'items' => [
                            [
                                'name' => 'Matoke',
                                'description' => 'Ndizi zilizopikwa na kuliwa kama chakula kikuu cha kila siku.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Rubisi',
                                'description' => 'Kinywaji cha jadi kinachotengenezwa kutokana na ndizi kilicho muhimu katika sherehe.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kifalme na kijamii',
                        'description' => 'Ngoma na muziki hutumika katika sherehe, ibada za kifalme, na matukio ya kijamii.',
                        'items' => [
                            [
                                'name' => 'Ekitaguriro',
                                'description' => 'Ngoma ya jadi inayochezwa katika sherehe na mikusanyiko ya kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi ya jadi yalitengenezwa kwa magome ya miti (barkcloth) na mapambo ya asili.',
                        'items' => [
                            [
                                'name' => 'Mavazi ya magome',
                                'description' => 'Hutumika katika nyakati za zamani na sherehe za kitamaduni.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],


                // 3 Hehe
                 [
                    'name' => 'Hehe',
                    'common_names' => ['Wahehe', 'Hehe'],
                    'origin_region' => 'Mkoa wa Iringa',
                    'famous_location' => 'Iringa na maeneo ya Nyanda za Juu za Kusini',
                    'country' => 'Tanzania',
                    'summary' => 'Wahehe ni jamii ya wakulima na wapiganaji wa jadi wanaoishi katika Nyanda za Juu za Kusini mwa Tanzania.',
                    'description' => 'Wanajulikana kwa historia yao ya kijeshi, ujasiri, na upinzani mkali dhidi ya ukoloni, hasa chini ya uongozi wa Chief Mkwawa.',
                    'origins_and_history' => [
                        'summary' => 'Asili ya Nyanda za Juu za Kusini',
                        'description' => 'Wahehe waliunda dola yenye nguvu ya kijeshi katika karne ya 19 na kuwa jamii yenye mshikamano mkubwa.',
                        'items' => [
                            [
                                'name' => 'Falme na mapambano',
                                'description' => 'Chini ya uongozi wa Chief Mkwawa, Wahehe walipambana vikali dhidi ya wakoloni wa Kijerumani.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya nafaka na mazao ya shambani',
                        'description' => 'Lishe yao inategemea sana mahindi, mtama, na mazao ya mizizi.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mtama',
                                'description' => 'Chakula kikuu kinacholiwa kwa mboga au nyama.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Mboga za asili',
                                'description' => 'Mboga za majani zinazolimwa au kukusanywa porini.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma za kivita na sherehe',
                        'description' => 'Ngoma hutumika kuhamasisha mashujaa na katika sherehe za kijamii.',
                        'items' => [
                            [
                                'name' => 'Ngoma ya Wahehe',
                                'description' => 'Ngoma ya jadi yenye midundo ya nguvu na hatua za kishujaa.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na alama za kishujaa',
                        'description' => 'Mavazi ya jadi yalisisitiza ujasiri, hadhi, na nafasi ya mtu katika jamii.',
                        'items' => [
                            [
                                'name' => 'Ngozi na mapambo ya asili',
                                'description' => 'Yalitumiwa hasa na wapiganaji na viongozi wa jadi.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],


                // 4 Gogo
                 [
                    'name' => 'Gogo',
                    'common_names' => ['Wagogo', 'Gogo'],
                    'origin_region' => 'Mkoa wa Dodoma',
                    'famous_location' => 'Dodoma na maeneo ya kati ya Tanzania',
                    'country' => 'Tanzania',
                    'summary' => 'Wagogo ni jamii ya wafugaji na wakulima wanaoishi katika maeneo kame ya kati mwa Tanzania.',
                    'description' => 'Wanajulikana kwa ufugaji wa ng’ombe, mbuzi na kondoo, pamoja na uwezo wa kuishi katika mazingira yenye ukame.',
                    'origins_and_history' => [
                        'summary' => 'Asili ya maeneo ya kati ya Tanzania',
                        'description' => 'Wagogo wameishi kwa muda mrefu katika eneo la Dodoma na kuendeleza mbinu za maisha zinazokabiliana na ukame.',
                        'items' => [
                            [
                                'name' => 'Maisha ya ufugaji na uhamaji',
                                'description' => 'Walitegemea ufugaji na uhamaji wa msimu kutafuta malisho na maji.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya nafaka na maziwa',
                        'description' => 'Lishe yao hutegemea nafaka na bidhaa za mifugo.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mtama',
                                'description' => 'Chakula kikuu kinacholiwa kwa maziwa, mboga au nyama.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Maziwa na mtindi',
                                'description' => 'Bidhaa muhimu zinazotokana na mifugo.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za jadi',
                        'description' => 'Ngoma hutumika katika sherehe, matambiko na mikusanyiko ya kijamii.',
                        'items' => [
                            [
                                'name' => 'Ngoma ya Wagogo',
                                'description' => 'Ngoma ya jadi yenye midundo ya kurudiarudia na ala za asili.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi yalikuwa rahisi na yanayofaa mazingira ya ukame.',
                        'items' => [
                            [
                                'name' => 'Ngozi na shanga',
                                'description' => 'Mapambo yaliyovaliwa katika sherehe na matambiko.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],


                // 5 Zaramo
                 [
                    'name' => 'Zaramo',
                    'common_names' => ['Wazaramo', 'Zaramo'],
                    'origin_region' => 'Mkoa wa Pwani na Dar es Salaam',
                    'famous_location' => 'Dar es Salaam, Bagamoyo na Rufiji ya Kaskazini',
                    'country' => 'Tanzania',
                    'summary' => 'Wazaramo ni jamii ya wakulima na wavuvi wanaoishi katika maeneo ya pwani ya Tanzania.',
                    'description' => 'Wanajulikana kwa kilimo cha muhogo, mpunga na mahindi, pamoja na mila za pwani zilizoathiriwa na biashara ya Bahari ya Hindi.',
                    'origins_and_history' => [
                        'summary' => 'Asili ya maeneo ya pwani ya kati',
                        'description' => 'Wazaramo wameishi kwa muda mrefu katika eneo la Pwani na walishiriki katika mitandao ya biashara ya kale ya pwani.',
                        'items' => [
                            [
                                'name' => 'Makazi na biashara ya pwani',
                                'description' => 'Walijihusisha na kilimo, uvuvi na biashara ya ndani na nje.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya muhogo na mpunga',
                        'description' => 'Lishe yao inaakisi mazingira ya pwani na ardhi yenye rutuba.',
                        'items' => [
                            [
                                'name' => 'Ugali wa muhogo',
                                'description' => 'Chakula kikuu kinacholiwa kwa samaki au mboga.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Samaki wa pwani',
                                'description' => 'Hupatikana kwa wingi kutokana na shughuli za uvuvi.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma za pwani na matambiko',
                        'description' => 'Ngoma hutumika katika sherehe, tiba za jadi na ibada.',
                        'items' => [
                            [
                                'name' => 'Ngoma ya Zaramo',
                                'description' => 'Ngoma ya jadi inayohusisha midundo ya ngoma na nyimbo za jamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi ya pwani',
                        'description' => 'Mavazi yana athari za pwani na biashara ya kihistoria.',
                        'items' => [
                            [
                                'name' => 'Kanga na vito',
                                'description' => 'Huvaa katika maisha ya kila siku na sherehe.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],


                // 6 Sukuma
                 [
                    'name' => 'Sukuma',
                    'common_names' => ['Wasukuma', 'Sukuma'],
                    'origin_region' => 'Mkoa wa Mwanza, Shinyanga na Simiyu',
                    'famous_location' => 'Mwanza na maeneo ya Kusini ya Ziwa Victoria',
                    'country' => 'Tanzania',
                    'summary' => 'Wasukuma ni jamii kubwa zaidi ya kikabila nchini Tanzania, wanaoishi kaskazini-magharibi mwa nchi.',
                    'description' => 'Wanajulikana kwa ufugaji wa ng’ombe, kilimo cha pamba na mahindi, pamoja na utamaduni tajiri wa ngoma.',
                    'origins_and_history' => [
                        'summary' => 'Asili ya eneo la Ziwa Victoria',
                        'description' => 'Wasukuma waliunda jamii zilizoandaliwa kwa koo na mila za jadi zilizoimarisha mshikamano wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Maisha ya kifugaji na kilimo',
                                'description' => 'Jamii ilitegemea ufugaji wa ng’ombe na kilimo cha mazao ya chakula na biashara.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya nafaka na maziwa',
                        'description' => 'Lishe yao inahusisha nafaka, maziwa na bidhaa za mifugo.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mahindi',
                                'description' => 'Chakula kikuu kinacholiwa kwa mboga, samaki au nyama.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Maziwa ya asili',
                                'description' => 'Hunywewa fresh au hutumika kutengeneza mtindi.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma za jadi zenye nguvu',
                        'description' => 'Ngoma ni sehemu muhimu ya sherehe na utambulisho wa Wasukuma.',
                        'items' => [
                            [
                                'name' => 'Bugobogobo',
                                'description' => 'Ngoma maarufu ya Wasukuma yenye midundo ya kasi na harakati za nguvu.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi na mapambo ya jadi',
                        'description' => 'Mavazi yalihusisha ngozi, vitambaa na mapambo ya shanga.',
                        'items' => [
                            [
                                'name' => 'Shanga na ngozi',
                                'description' => 'Huvaa katika sherehe na matukio muhimu.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],

                // 7 Nyamwezi
                [
                    'name' => 'Nyamwezi',
                    'common_names' => ['Wanyamwezi', 'Nyamwezi'],
                    'origin_region' => 'Mkoa wa Tabora',
                    'famous_location' => 'Tabora na maeneo ya Magharibi ya Tanzania',
                    'country' => 'Tanzania',
                    'summary' => 'Wanyamwezi ni jamii ya wakulima na wafanyabiashara wa jadi walioko magharibi mwa Tanzania.',
                    'description' => 'Wanajulikana kwa historia yao ya biashara ya masafa marefu, kilimo cha mtama na mahindi, na mchango mkubwa katika historia ya Tanzania.',
                    'origins_and_history' => [
                        'summary' => 'Asili ya eneo la kati-magharibi',
                        'description' => 'Wanyamwezi waliunda falme za jadi na walikuwa mstari wa mbele katika misafara ya biashara ya pembe za ndovu na chumvi.',
                        'items' => [
                            [
                                'name' => 'Biashara na falme za jadi',
                                'description' => 'Waliongoza misafara ya biashara kutoka pwani hadi ndani ya bara.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya nafaka na mizizi',
                        'description' => 'Lishe yao ilitegemea mtama, mahindi na mazao ya mizizi.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mtama',
                                'description' => 'Chakula kikuu kinacholiwa kwa mboga au nyama.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Mboga za asili',
                                'description' => 'Mboga za majani zinazotokana na mazingira ya eneo.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma za kijamii na sherehe',
                        'description' => 'Ngoma hutumika katika sherehe za kifalme na mikusanyiko ya kijamii.',
                        'items' => [
                            [
                                'name' => 'Ngoma ya Wanyamwezi',
                                'description' => 'Ngoma ya jadi yenye midundo ya taratibu na ala za asili.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi yalikuwa rahisi na yenye kuonyesha hadhi ya kijamii.',
                        'items' => [
                            [
                                'name' => 'Vitambaa na shanga',
                                'description' => 'Huvaa katika sherehe na hafla maalum.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],


                // 8 Makonde
                [
                    'name' => 'Makonde',
                    'common_names' => ['Wamakonde', 'Makonde'],
                    'origin_region' => 'Mikoa ya Mtwara na Lindi',
                    'famous_location' => 'Uwanda wa Makonde na kusini mwa Tanzania',
                    'country' => 'Tanzania',
                    'summary' => 'Wamakonde ni jamii ya wakulima na wasanii wa jadi wanaoishi kusini mwa Tanzania.',
                    'description' => 'Wanajulikana kwa uchongaji wa vinyago vya mbao, hasa mtindo wa Ujamaa (Shetani), na kwa historia ya kupinga ukoloni.',
                    'origins_and_history' => [
                        'summary' => 'Asili ya Uwanda wa Makonde',
                        'description' => 'Wamakonde waliishi kwa muda mrefu katika maeneo ya miinuko kwa ajili ya kujilinda na maadui na walidumisha uhuru wao kwa muda mrefu.',
                        'items' => [
                            [
                                'name' => 'Makazi ya miinuko na mapambano',
                                'description' => 'Walichagua kuishi katika uwanda wa juu kwa usalama na uhuru.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya muhogo na mahindi',
                        'description' => 'Lishe yao inategemea sana muhogo kama chakula kikuu.',
                        'items' => [
                            [
                                'name' => 'Ugali wa muhogo',
                                'description' => 'Chakula kikuu kinacholiwa kwa mboga au samaki.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Mboga za asili',
                                'description' => 'Mboga za majani zinazotokana na mazingira ya kusini.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma za jadi na matambiko',
                        'description' => 'Ngoma hutumika katika sherehe, ibada na matambiko.',
                        'items' => [
                            [
                                'name' => 'Lingundumbwe',
                                'description' => 'Ngoma ya jadi ya Wamakonde inayochezwa katika sherehe muhimu.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi ya jadi yalihusisha ngozi, vitambaa na mapambo ya asili.',
                        'items' => [
                            [
                                'name' => 'Mapambo ya jadi',
                                'description' => 'Huvaa katika sherehe na matambiko ya kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],


                // 9 Maasai
                [
                    'name' => 'Maasai',
                    'common_names' => ['Wamaasai', 'Maasai'],
                    'origin_region' => 'Kaskazini mwa Tanzania',
                    'famous_location' => 'Arusha, Manyara na maeneo ya Ngorongoro',
                    'country' => 'Tanzania',
                    'summary' => 'Wamaasai ni jamii ya wafugaji wa jadi wanaoishi kaskazini mwa Tanzania.',
                    'description' => 'Wanajulikana kwa ufugaji wa ng’ombe, utamaduni imara wa kijadi, mavazi mekundu na maisha ya kuhamahama.',
                    'origins_and_history' => [
                        'summary' => 'Asili ya Bonde la Ufa la Afrika Mashariki',
                        'description' => 'Wamaasai walihamia kaskazini mwa Tanzania na kusini mwa Kenya, wakidumisha mfumo wa maisha ya kifugaji.',
                        'items' => [
                            [
                                'name' => 'Uhamaji wa wafugaji',
                                'description' => 'Maisha yao yalitegemea uhamaji wa msimu kutafuta malisho na maji.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vinavyotokana na mifugo',
                        'description' => 'Lishe yao hutokana zaidi na maziwa, nyama na damu ya ng’ombe.',
                        'items' => [
                            [
                                'name' => 'Maziwa na damu',
                                'description' => 'Mchanganyiko wa maziwa na damu hunywewa katika matukio maalum.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Nyama ya ng’ombe',
                                'description' => 'Huliwa katika sherehe na hafla muhimu.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Nyimbo na ngoma za kijamii',
                        'description' => 'Nyimbo na ngoma huambatana na sherehe za kijamii na umri.',
                        'items' => [
                            [
                                'name' => 'Adumu',
                                'description' => 'Ngoma maarufu ya kuruka inayochezwa na vijana wa kiume.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi na mapambo ya kitamaduni',
                        'description' => 'Mavazi ya shuka nyekundu na mapambo ya shanga ni alama ya utambulisho wa Wamaasai.',
                        'items' => [
                            [
                                'name' => 'Shuka na shanga',
                                'description' => 'Huvaa katika maisha ya kila siku na sherehe.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],

                // 10 Sandawe
                [
                    'name' => 'Sandawe',
                    'common_names' => ['Wasandawe', 'Sandawe'],
                    'origin_region' => 'Mkoa wa Dodoma',
                    'famous_location' => 'Kondoa na maeneo ya kati ya Tanzania',
                    'country' => 'Tanzania',
                    'summary' => 'Wasandawe ni jamii ya kale ya wawindaji na wakusanyaji wanaoishi kati mwa Tanzania.',
                    'description' => 'Wanajulikana kwa lugha yao ya kubofya (click language) na mtindo wa maisha wa jadi wa uwindaji na ukusanyaji.',
                    'origins_and_history' => [
                        'summary' => 'Asili ya jamii za kale za Tanzania',
                        'description' => 'Wasandawe ni miongoni mwa jamii za mwanzo kabisa kuishi katika eneo la Tanzania ya leo.',
                        'items' => [
                            [
                                'name' => 'Uwindaji na ukusanyaji',
                                'description' => 'Walitegemea uwindaji wa wanyama pori na ukusanyaji wa matunda na mizizi.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya uwindaji na asili',
                        'description' => 'Lishe yao ilitokana na wanyama pori na mimea ya asili.',
                        'items' => [
                            [
                                'name' => 'Nyama ya pori',
                                'description' => 'Nyama iliyopatikana kupitia uwindaji wa jadi.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Matunda na mizizi',
                                'description' => 'Vyakula vilivyokusanywa kutoka porini.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Nyimbo na ngoma za jadi',
                        'description' => 'Nyimbo zilihusishwa na ibada, uwindaji na sherehe.',
                        'items' => [
                            [
                                'name' => 'Nyimbo za kubofya',
                                'description' => 'Nyimbo zinazotumia lugha ya kubofya ya Kisanadawi.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi rahisi ya jadi',
                        'description' => 'Mavazi yalitengenezwa kwa ngozi na vifaa vya asili.',
                        'items' => [
                            [
                                'name' => 'Ngozi na mapambo ya asili',
                                'description' => 'Huvaa wakati wa sherehe na shughuli za uwindaji.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],

                // 11 Hadza
                 [
                    'name' => 'Hadza',
                    'common_names' => ['Wahadza', 'Hadza'],
                    'origin_region' => 'Mkoa wa Manyara',
                    'famous_location' => 'Eneo la Ziwa Eyasi',
                    'country' => 'Tanzania',
                    'summary' => 'Wahadza ni jamii ya wawindaji na wakusanyaji wanaoishi karibu na Ziwa Eyasi kaskazini mwa Tanzania.',
                    'description' => 'Wanajulikana kwa kuendelea kuishi kwa mtindo wa jadi wa uwindaji na ukusanyaji, na kwa lugha yao ya kipekee.',
                    'origins_and_history' => [
                        'summary' => 'Asili ya jamii za kale za Bonde la Ufa',
                        'description' => 'Wahadza ni miongoni mwa jamii za zamani zaidi katika Afrika Mashariki, wakihifadhi mtindo wa maisha wa kale.',
                        'items' => [
                            [
                                'name' => 'Maisha ya uwindaji na ukusanyaji',
                                'description' => 'Walitegemea uwindaji wa wanyama pori na ukusanyaji wa asali, matunda na mizizi.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya asili na uwindaji',
                        'description' => 'Lishe yao inategemea sana rasilimali za asili.',
                        'items' => [
                            [
                                'name' => 'Asali',
                                'description' => 'Chanzo muhimu cha chakula na nishati.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Nyama ya pori',
                                'description' => 'Hupatikana kupitia uwindaji wa jadi kwa kutumia mishale.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Nyimbo za jadi na ibada',
                        'description' => 'Nyimbo huimbwa katika ibada na sherehe za kijamii.',
                        'items' => [
                            [
                                'name' => 'Nyimbo za Hadza',
                                'description' => 'Nyimbo za sauti nyingi zinazoimbwa kwa pamoja.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya asili',
                        'description' => 'Mavazi hutengenezwa kwa ngozi na vifaa vya asili.',
                        'items' => [
                            [
                                'name' => 'Ngozi na mapambo rahisi',
                                'description' => 'Huvaa katika maisha ya kila siku na shughuli za uwindaji.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],


                // 12 Pare
                 [
                    'name' => 'Pare',
                    'common_names' => ['Wapare', 'Pare'],
                    'origin_region' => 'Mkoa wa Kilimanjaro',
                    'famous_location' => 'Mtaa wa Kilindi na miteremko ya Mlima Pare',
                    'country' => 'Tanzania',
                    'summary' => 'Wapare ni jamii ya wakulima wanaoishi katika miteremko ya Mlima Pare kaskazini mwa Tanzania.',
                    'description' => 'Wanajulikana kwa kilimo cha kahawa, ndizi na mahindi, pamoja na mila na desturi tajiri za kijamii.',
                    'origins_and_history' => [
                        'summary' => 'Makazi katika miteremko ya Mlima Pare',
                        'description' => 'Wapare waliunda jamii zilizokuwa na mashamba yenye rutuba, wakitumia mbinu za kilimo za matuta na kulima ndizi na kahawa.',
                        'items' => [
                            [
                                'name' => 'Kilimo na makazi',
                                'description' => 'Walijikita katika kilimo cha matunda na kahawa, na kujenga jamii zilizo imara za mashambani.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya ndizi na mahindi',
                        'description' => 'Lishe yao hutegemea sana ndizi, kahawa na mahindi.',
                        'items' => [
                            [
                                'name' => 'Mtori na wali wa ndizi',
                                'description' => 'Vyakula vya asili vinavyoliwa kila siku na wakati wa sherehe.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Vyakula vya ndizi',
                                'description' => 'Ndizi ni sehemu muhimu ya chakula na sherehe.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma hutumika katika sherehe, ibada na mikusanyiko ya kijamii.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Pare',
                                'description' => 'Ngoma za jadi zinazochezwa wakati wa sherehe na hafla za kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi ya jadi huonyesha hadhi na huchangia utambulisho wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Mapambo ya shanga na mavazi ya asili',
                                'description' => 'Huvaa katika sherehe na matukio maalum ya kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],


                // 13 Nyakyusa
                 [
                    'name' => 'Nyakyusa',
                    'common_names' => ['Wanyakyusa', 'Nyakyusa'],
                    'origin_region' => 'Mkoa wa Mbeya na Songwe',
                    'famous_location' => 'Mbeya, Tukuyu na pwani ya Ziwa Nyasa',
                    'country' => 'Tanzania',
                    'summary' => 'Wanyakyusa ni jamii ya wakulima wenye historia ndefu wanaoishi kusini-magharibi mwa Tanzania.',
                    'description' => 'Wanajulikana kwa kilimo cha miwa, mpunga, mahindi na mboga, pamoja na mila na desturi za kijamii zinazohusiana na familia na mashamba.',
                    'origins_and_history' => [
                        'summary' => 'Makazi katika milima na mabonde ya kusini-magharibi',
                        'description' => 'Wanyakyusa waliunda jamii zilizo imara katika milima na mabonde ya Mbeya, wakidumisha utamaduni na mashamba yenye rutuba.',
                        'items' => [
                            [
                                'name' => 'Kilimo na makazi',
                                'description' => 'Walijikita katika kilimo cha miwa, mpunga na mahindi, wakihifadhi familia na mashamba yao.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya nafaka na mizizi',
                        'description' => 'Lishe yao inahusisha sana miwa, mahindi, mpunga na mboga za asili.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mahindi',
                                'description' => 'Chakula kikuu kinacholiwa kwa mboga au nyama.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Vyakula vya asili',
                                'description' => 'Vyakula vinavyotokana na mashamba na mazingira ya Nyakyusa.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma hutumika katika sherehe za kijamii, ibada na tamasha.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Nyakyusa',
                                'description' => 'Ngoma za jadi zinazochezwa wakati wa sherehe na mikusanyiko ya kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi na mapambo ya asili huchangia utambulisho wa kijamii na sherehe.',
                        'items' => [
                            [
                                'name' => 'Shanga na vitambaa vya jadi',
                                'description' => 'Huvaa katika sherehe, hafla za familia na matukio maalum.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],


                // 14 Yao
                [
                    'name' => 'Yao',
                    'common_names' => ['Wayao', 'Yao'],
                    'origin_region' => 'Mikoa ya Mtwara, Lindi na kusini mwa Tanzania',
                    'famous_location' => 'Mtwara, Lindi na pwani ya Ziwa Nyasa',
                    'country' => 'Tanzania',
                    'summary' => 'Wayao ni jamii ya wakulima na wavuvi wanaoishi kusini mwa Tanzania na maeneo ya pwani ya Ziwa Nyasa.',
                    'description' => 'Wanajulikana kwa kilimo cha miwa, mpunga, mahindi na ufugaji mdogo, pamoja na utamaduni wa pwani uliyoathiriwa na biashara ya kale.',
                    'origins_and_history' => [
                        'summary' => 'Makazi katika pwani na maeneo ya kusini',
                        'description' => 'Wayao waliunda jamii zilizo na historia ndefu ya kilimo, uvuvi na biashara na wakihusiana na jamii jirani.',
                        'items' => [
                            [
                                'name' => 'Kilimo na uvuvi',
                                'description' => 'Walitegemea kilimo cha miwa, mpunga na mahindi pamoja na uvuvi wa Ziwa Nyasa na bahari.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya nafaka, mazao ya baharini na mizizi',
                        'description' => 'Lishe yao inajumuisha nafaka, samaki, miwa na mazao ya asili.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mahindi',
                                'description' => 'Chakula kikuu kinacholiwa kwa samaki, mboga au nyama ndogo.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Samaki na vyakula vya baharini',
                                'description' => 'Vyakula vinavyopatikana kutoka Ziwa Nyasa na pwani.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma hutumika katika sherehe, ibada na matukio ya kijamii.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Yao',
                                'description' => 'Ngoma za jadi zinazochezwa wakati wa sherehe na mikusanyiko ya kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi na mapambo ya asili huonyesha utambulisho wa kijamii na tamaduni za pwani.',
                        'items' => [
                            [
                                'name' => 'Shanga na vitambaa vya jadi',
                                'description' => 'Huvaa katika sherehe, ibada na matukio maalum ya kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],


                // 15 Kuria
                [
                    'name' => 'Kuria',
                    'common_names' => ['Wakurya', 'Kuria'],
                    'origin_region' => 'Mikoa ya Mara na Tarime',
                    'famous_location' => 'Tarime na maeneo ya kaskazini mwa Ziwa Victoria',
                    'country' => 'Tanzania',
                    'summary' => 'Wakurya ni jamii ya wakulima na wafugaji wanaoishi kaskazini mwa Ziwa Victoria.',
                    'description' => 'Wanajulikana kwa kilimo cha mahindi, mtama, na ufugaji wa ng’ombe, pamoja na mila na desturi za kijamii.',
                    'origins_and_history' => [
                        'summary' => 'Makazi katika mabonde ya kaskazini mwa Ziwa Victoria',
                        'description' => 'Wakurya waliunda jamii zilizo imara kando ya mabonde ya Ziwa Victoria, wakidumisha utamaduni na maadili ya kijamii.',
                        'items' => [
                            [
                                'name' => 'Kilimo na ufugaji',
                                'description' => 'Walitegemea kilimo cha nafaka na ufugaji wa ng’ombe ili kudumisha familia na jamii zao.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya nafaka na mazao ya mifugo',
                        'description' => 'Lishe yao inategemea mahindi, mtama, na bidhaa za mifugo.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mahindi',
                                'description' => 'Chakula kikuu kinacholiwa kwa mboga, nyama au maziwa.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Maziwa na nyama',
                                'description' => 'Hutumika katika lishe ya kila siku na sherehe.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma na nyimbo hutumika katika sherehe, mikusanyiko na ibada za kijamii.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Kuria',
                                'description' => 'Ngoma za jadi zinazochezwa wakati wa sherehe na hafla za kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi na mapambo ya asili huonyesha hadhi na utambulisho wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Shanga na vitambaa vya asili',
                                'description' => 'Huvaa katika sherehe, ibada na matukio maalum ya kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],


                // 16 Luguru
                [
                    'name' => 'Luguru',
                    'common_names' => ['Waluguru', 'Luguru'],
                    'origin_region' => 'Mkoa wa Morogoro',
                    'famous_location' => 'Mlimani na Misitu ya Uluguru',
                    'country' => 'Tanzania',
                    'summary' => 'Waluguru ni jamii ya wakulima wanaoishi katika mteremko na misitu ya Uluguru kaskazini-mashariki mwa Tanzania.',
                    'description' => 'Wanajulikana kwa kilimo cha mpunga, mahindi, na mazao mengine, pamoja na utamaduni tajiri wa kijamii na sherehe za kijadi.',
                    'origins_and_history' => [
                        'summary' => 'Makazi katika milima ya Uluguru',
                        'description' => 'Waluguru waliunda jamii zilizojikita katika kilimo cha shambani na kusimamia mashamba yenye rutuba na misitu ya asili.',
                        'items' => [
                            [
                                'name' => 'Kilimo na makazi',
                                'description' => 'Walijikita katika kilimo cha mpunga, mahindi na mazao mengine, wakihifadhi utamaduni wa kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya nafaka na mboga',
                        'description' => 'Lishe yao inategemea sana mahindi, mpunga na mboga za majani.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mahindi na mboga',
                                'description' => 'Chakula kikuu kinacholiwa kila siku na katika sherehe.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Vyakula vya asili',
                                'description' => 'Vyakula vinavyotokana na mashamba na misitu ya Uluguru.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma hutumika katika sherehe za kijamii, ibada na matukio ya kijadi.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Luguru',
                                'description' => 'Ngoma za jadi zinazochezwa wakati wa sherehe na hafla za kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi na mapambo ya asili huonyesha utambulisho wa kijamii na hadhi.',
                        'items' => [
                            [
                                'name' => 'Shanga na vitambaa vya jadi',
                                'description' => 'Huvaa katika sherehe, ibada na matukio maalum ya kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],


                // 17 Ngoni
                [
                    'name' => 'Ngoni',
                    'common_names' => ['Wangoni', 'Ngoni'],
                    'origin_region' => 'Asili ya Malawi na Msumbiji (baada wakahamia Tanzania)',
                    'famous_location' => 'Mkoa wa Ruvuma na Lindi',
                    'country' => 'Tanzania',
                    'summary' => 'Wangoni ni jamii ya wakoloni wa zamani na wapiganaji waliotokea kusini mwa Afrika, kisha wakahamia kusini mwa Tanzania.',
                    'description' => 'Wanajulikana kwa mila zao za kivita, utamaduni wa kijadi, na sherehe za kijamii zinazohusisha ngoma na uimbaji wa hadithi.',
                    'origins_and_history' => [
                        'summary' => 'Uhamiaji wa Kusini mwa Afrika hadi Tanzania',
                        'description' => 'Ngoni walihamia kutoka Malawi na Msumbiji wakihitaji ardhi na usalama, na kuleta desturi zao za kivita.',
                        'items' => [
                            [
                                'name' => 'Uhamiaji na migogoro',
                                'description' => 'Walihamia kaskazini mwa Malawi na Msumbiji, wakikabiliana na mashamba na jamii zilizopo.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya nafaka na mboga',
                        'description' => 'Lishe yao inahusisha mahindi, mtama, na vyakula vya shambani.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mahindi',
                                'description' => 'Chakula kikuu kinacholiwa kwa mboga au nyama.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Mboga za shambani',
                                'description' => 'Mboga zinazopandwa shambani na kutumika kila siku.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii na kivita',
                        'description' => 'Ngoma hutumika katika sherehe, hafla za kijadi na utambulisho wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Ngoma ya Ngoni',
                                'description' => 'Ngoma ya jadi yenye midundo ya kivita na uimbaji wa hadithi.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo ya kivita',
                        'description' => 'Mavazi huonyesha hadhi, umri na nafasi ya kijamii, yakiwemo vitambaa na shanga.',
                        'items' => [
                            [
                                'name' => 'Vitambaa na shanga',
                                'description' => 'Huvaa katika sherehe, hafla za kijamii na matukio ya kivita.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],

                // 18 Kerewe
                [
                    'name' => 'Kerewe',
                    'common_names' => ['Wakerewe', 'Kerewe'],
                    'origin_region' => 'Kisiwa cha Ukerewe, Ziwa Victoria',
                    'famous_location' => 'Kisiwa cha Ukerewe na pwani ya Ziwa Victoria',
                    'country' => 'Tanzania',
                    'summary' => 'Wakerewe ni jamii ya wakulima na wavuvi wanaoishi Kisiwa cha Ukerewe kaskazini mwa Ziwa Victoria.',
                    'description' => 'Wanajulikana kwa kilimo cha mtama, mahindi, na ufugaji mdogo, pamoja na uvuvi wa Ziwa Victoria na mila zao za kijamii.',
                    'origins_and_history' => [
                        'summary' => 'Makazi katika Kisiwa cha Ukerewe',
                        'description' => 'Wakerewe wameishi kwa muda mrefu katika kisiwa hiki, wakijenga jamii zilizo imara zinazotegemea kilimo na uvuvi.',
                        'items' => [
                            [
                                'name' => 'Kilimo na uvuvi',
                                'description' => 'Walitegemea kilimo cha mtama, mahindi na uvuvi wa Ziwa Victoria kudumisha familia na jamii zao.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya nafaka na samaki',
                        'description' => 'Lishe yao inajumuisha nafaka, samaki wa Ziwa Victoria na mboga za asili.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mtama',
                                'description' => 'Chakula kikuu kinacholiwa kwa mboga au samaki.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Samaki wa Ziwa Victoria',
                                'description' => 'Chanzo muhimu cha protini katika lishe yao.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma hutumika katika sherehe, ibada na matukio ya kijamii.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Kerewe',
                                'description' => 'Ngoma za jadi zinazochezwa katika sherehe na hafla za kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi na mapambo ya asili huonyesha utambulisho wa kijamii na hadhi.',
                        'items' => [
                            [
                                'name' => 'Shanga na vitambaa vya jadi',
                                'description' => 'Huvaa katika sherehe, ibada na matukio maalum ya kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],


                // 19 Swahili (Coastal)
                [
                    'name' => 'Swahili',
                    'common_names' => ['Waswahili', 'Swahili'],
                    'origin_region' => 'Pwani ya Tanzania',
                    'famous_location' => 'Zanzibar, Pemba, Mombasa na pwani ya Tanzania',
                    'country' => 'Tanzania',
                    'summary' => 'Waswahili ni jamii ya pwani inayojulikana kwa biashara, utamaduni wa pwani na urithi wa kihistoria wa Bahari ya Hindi.',
                    'description' => 'Wanajulikana kwa mchanganyiko wa tamaduni za Kiafrika, Kiarabu na Kihindi, pamoja na lugha ya Kiswahili, sanaa, na utamaduni wa baharini.',
                    'origins_and_history' => [
                        'summary' => 'Asili ya jamii ya pwani na biashara ya Bahari ya Hindi',
                        'description' => 'Waswahili waliunda miji ya kibiashara kando ya pwani, wakijihusisha na biashara ya dhahabu, hariri, na karafuu.',
                        'items' => [
                            [
                                'name' => 'Biashara na makazi ya pwani',
                                'description' => 'Walijenga miji yenye historia ya biashara na tamaduni mchanganyiko.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya pwani na mchanganyiko wa tamaduni',
                        'description' => 'Lishe yao inajumuisha samaki, pilau, wali, viazi na vyakula vya baharini vyenye harufu na ladha mchanganyiko.',
                        'items' => [
                            [
                                'name' => 'Pilau na wali wa baharini',
                                'description' => 'Vyakula vya kawaida vinavyopikwa kwa sherehe na familia.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Samaki na bidhaa za baharini',
                                'description' => 'Vyakula vinavyotokana na uvuvi wa pwani na Bahari ya Hindi.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma, nyimbo na muziki wa taarab',
                        'description' => 'Muziki hutumika katika sherehe, harusi, na hafla za kijamii.',
                        'items' => [
                            [
                                'name' => 'Taarab',
                                'description' => 'Muziki maarufu wa Waswahili unaochanganya ala za kiasili na Kiarabu.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo ya pwani',
                        'description' => 'Mavazi yanajumuisha vitenge, kanzu, mapambo ya shanga na mapambo ya dhahabu.',
                        'items' => [
                            [
                                'name' => 'Vitenge, kanzu na shanga',
                                'description' => 'Huvaa katika sherehe, harusi na hafla za kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],


                // 20 Tumbuka (present in border areas)
                [
                    'name' => 'Tumbuka',
                    'common_names' => ['Watumbuka', 'Tumbuka'],
                    'origin_region' => 'Kaskazini mwa Malawi na Kusini mwa Tanzania',
                    'famous_location' => 'Mbeya na Songwe',
                    'country' => 'Tanzania',
                    'summary' => 'Watumbuka ni jamii ya wakulima wanaoishi kaskazini mwa Malawi na kusini mwa Tanzania.',
                    'description' => 'Wanajulikana kwa kilimo cha mahindi, mpunga, miwa, na mboga, pamoja na mila na desturi za kijamii zinazohusiana na familia na jamii.',
                    'origins_and_history' => [
                        'summary' => 'Makazi katika mabonde ya kusini-magharibi',
                        'description' => 'Watumbuka waliunda jamii zilizo imara katika milima na mabonde ya Mbeya na Songwe, wakidumisha utamaduni na mashamba yenye rutuba.',
                        'items' => [
                            [
                                'name' => 'Kilimo na makazi',
                                'description' => 'Walijikita katika kilimo cha nafaka, miwa na mboga, wakihifadhi familia na mashamba yao.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya nafaka na mboga',
                        'description' => 'Lishe yao inategemea mahindi, mpunga, miwa na mboga za majani.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mahindi',
                                'description' => 'Chakula kikuu kinacholiwa kwa mboga au nyama.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Mboga za asili',
                                'description' => 'Vyakula vinavyotokana na mashamba na mazingira ya Watumbuka.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma hutumika katika sherehe za kijamii, ibada na tamasha.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Tumbuka',
                                'description' => 'Ngoma za jadi zinazochezwa wakati wa sherehe na mikusanyiko ya kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi na mapambo ya asili huchangia utambulisho wa kijamii na sherehe.',
                        'items' => [
                            [
                                'name' => 'Shanga na vitambaa vya jadi',
                                'description' => 'Huvaa katika sherehe, hafla za familia na matukio maalum.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],


                // 21. Kinga

                 [
                    'name' => 'Kinga',
                    'common_names' => ['Wakinga', 'Wakinga'],
                    'origin_region' => 'Mkoa wa Ruvuma',
                    'famous_location' => 'Maeneo ya kati ya Ruvuma na Mtwara',
                    'country' => 'Tanzania',
                    'summary' => 'Wakinga ni jamii ya wakulima na wafugaji wanaoishi kusini mwa Tanzania.',
                    'description' => 'Wanajulikana kwa kilimo cha mahindi, mtama, mihogo, ufugaji mdogo na utamaduni wa kijamii unaohusisha sherehe na desturi za jamii.',
                    'origins_and_history' => [
                        'summary' => 'Makazi katika mkoa wa Ruvuma',
                        'description' => 'Wakinga waliunda jamii zilizo imara zinazotegemea kilimo na ufugaji, na kudumisha mila na desturi zao za jadi.',
                        'items' => [
                            [
                                'name' => 'Kilimo na makazi',
                                'description' => 'Walijikita katika kilimo cha nafaka na mihogo pamoja na ufugaji mdogo wa ng’ombe na mbuzi.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya nafaka na mizizi',
                        'description' => 'Lishe yao inategemea mahindi, mtama, mihogo na mboga za asili.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mahindi na mboga',
                                'description' => 'Chakula kikuu kinacholiwa kila siku na katika sherehe.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Vyakula vya mizizi',
                                'description' => 'Vyakula vinavyotokana na mihogo na mizizi mingine ya asili.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma hutumika katika sherehe, ibada na hafla za kijamii.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Wakinga',
                                'description' => 'Ngoma za jadi zinazochezwa wakati wa sherehe na mikusanyiko ya kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi na mapambo ya asili huonyesha utambulisho wa kijamii na hadhi.',
                        'items' => [
                            [
                                'name' => 'Shanga na vitambaa vya jadi',
                                'description' => 'Huvaa katika sherehe, ibada na matukio maalum ya kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],

                // 22. Ha

                 [
                    'name' => 'Ha',
                    'common_names' => ['Waha', 'Ha'],
                    'origin_region' => 'Mkoa wa Kagera',
                    'famous_location' => 'Bukoba na mteremko wa Ziwa Victoria',
                    'country' => 'Tanzania',
                    'summary' => 'Waha ni jamii ya wakulima wa jadi wanaoishi kaskazini-magharibi mwa Tanzania.',
                    'description' => 'Wanajulikana kwa kilimo cha mahindi, mtama, kahawa na mboga, pamoja na mila na desturi za kijamii zinazohusisha familia na makazi ya jamii.',
                    'origins_and_history' => [
                        'summary' => 'Makazi katika mteremko wa Ziwa Victoria',
                        'description' => 'Waha waliunda jamii zilizo imara kando ya Ziwa Victoria, wakidumisha utamaduni wa kijamii na mashamba yenye rutuba.',
                        'items' => [
                            [
                                'name' => 'Kilimo na makazi',
                                'description' => 'Walijikita katika kilimo cha mahindi, mtama na kahawa, wakihifadhi familia na mashamba yao.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya nafaka na mboga',
                        'description' => 'Lishe yao inategemea sana mahindi, mtama, kahawa na mboga za majani.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mahindi',
                                'description' => 'Chakula kikuu kinacholiwa kwa mboga au nyama.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Vyakula vya asili',
                                'description' => 'Vyakula vinavyotokana na mashamba na mazingira ya Waha.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma hutumika katika sherehe za kijamii, ibada na tamasha.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Ha',
                                'description' => 'Ngoma za jadi zinazochezwa wakati wa sherehe na mikusanyiko ya kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi na mapambo ya asili huchangia utambulisho wa kijamii na sherehe.',
                        'items' => [
                            [
                                'name' => 'Shanga na vitambaa vya jadi',
                                'description' => 'Huvaa katika sherehe, hafla za familia na matukio maalum.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],

                // 23. Zigua

                 [
                    'name' => 'Zigua',
                    'common_names' => ['Wazigua', 'Zigua'],
                    'origin_region' => 'Mkoa wa Tanga',
                    'famous_location' => 'Korogwe, Pangani na maeneo ya pwani ya Tanga',
                    'country' => 'Tanzania',
                    'summary' => 'Wazigua ni jamii ya wakulima na wavuvi wanaoishi kaskazini-mashariki mwa Tanzania.',
                    'description' => 'Wanajulikana kwa kilimo cha miwa, mahindi, na ufugaji mdogo, pamoja na mila na desturi tajiri za kijamii.',
                    'origins_and_history' => [
                        'summary' => 'Makazi katika mkoa wa Tanga',
                        'description' => 'Wazigua waliunda jamii zilizo imara kando ya pwani na miji ya ndani, wakidumisha utamaduni na tamaduni zao za jadi.',
                        'items' => [
                            [
                                'name' => 'Kilimo na makazi',
                                'description' => 'Walijikita katika kilimo cha nafaka na miwa, na ufugaji mdogo wa ng’ombe na mbuzi.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya nafaka na bidhaa za shambani',
                        'description' => 'Lishe yao inategemea sana miwa, mahindi, mtama na mboga za asili.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mahindi',
                                'description' => 'Chakula kikuu kinacholiwa kwa mboga au nyama.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Vyakula vya asili',
                                'description' => 'Vyakula vinavyotokana na mashamba na mazingira ya Zigua.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma hutumika katika sherehe, ibada na hafla za kijamii.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Zigua',
                                'description' => 'Ngoma za jadi zinazochezwa wakati wa sherehe na mikusanyiko ya kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi na mapambo ya asili huonyesha utambulisho wa kijamii na hadhi.',
                        'items' => [
                            [
                                'name' => 'Shanga na vitambaa vya jadi',
                                'description' => 'Huvaa katika sherehe, ibada na matukio maalum ya kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],


                // 24. Sambaa

                 [
                    'name' => 'Sambaa',
                    'common_names' => ['Wasambaa', 'Sambaa'],
                    'origin_region' => 'Mkoa wa Tanga, mteremko wa Misitu ya Usambara',
                    'famous_location' => 'Usambara Mountains, Lushoto na Korogwe',
                    'country' => 'Tanzania',
                    'summary' => 'Wasambaa ni jamii ya wakulima wanaoishi mteremko wa Misitu ya Usambara kaskazini-mashariki mwa Tanzania.',
                    'description' => 'Wanajulikana kwa kilimo cha kahawa, mpunga, mihogo na mboga, pamoja na utamaduni tajiri wa kijamii na sherehe za jadi.',
                    'origins_and_history' => [
                        'summary' => 'Makazi katika mteremko wa Misitu ya Usambara',
                        'description' => 'Wasambaa waliunda jamii zilizo imara kando ya milima ya Usambara, wakidumisha kilimo chenye rutuba na utamaduni wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Kilimo na makazi',
                                'description' => 'Walijikita katika kilimo cha kahawa, mpunga, mihogo na mboga, wakihifadhi familia na mashamba yao.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya kahawa, nafaka na mboga',
                        'description' => 'Lishe yao inategemea sana kahawa, mpunga, mihogo na mboga za majani.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mahindi na mboga',
                                'description' => 'Chakula kikuu kinacholiwa kila siku na katika sherehe.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Vyakula vya asili',
                                'description' => 'Vyakula vinavyotokana na mashamba na misitu ya Usambara.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma hutumika katika sherehe za kijamii, ibada na tamasha.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Sambaa',
                                'description' => 'Ngoma za jadi zinazochezwa wakati wa sherehe na mikusanyiko ya kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi na mapambo ya asili huonyesha utambulisho wa kijamii na sherehe.',
                        'items' => [
                            [
                                'name' => 'Shanga na vitambaa vya jadi',
                                'description' => 'Huvaa katika sherehe, hafla za familia na matukio maalum.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],


                // 25. Bena
                 [
                    'name' => 'Bena',
                    'common_names' => ['Wabena', 'Bena'],
                    'origin_region' => 'Mkoa wa Njombe',
                    'famous_location' => 'Wanging’ombe na mteremko wa Milima ya Udzungwa',
                    'country' => 'Tanzania',
                    'summary' => 'Wabena ni jamii ya wakulima wanaoishi mteremko wa Milima ya Udzungwa kusini mwa Tanzania.',
                    'description' => 'Wanajulikana kwa kilimo cha kahawa, mpunga, mihogo na mboga, pamoja na mila na desturi za kijamii zinazohusisha familia na jamii.',
                    'origins_and_history' => [
                        'summary' => 'Makazi katika mteremko wa Milima ya Udzungwa',
                        'description' => 'Wabena waliunda jamii zilizo imara katika milima ya Udzungwa, wakidumisha kilimo chenye rutuba na utamaduni wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Kilimo na makazi',
                                'description' => 'Walijikita katika kilimo cha kahawa, mpunga, mihogo na mboga, wakihifadhi familia na mashamba yao.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya kahawa, nafaka na mboga',
                        'description' => 'Lishe yao inategemea kahawa, mpunga, mihogo na mboga za majani.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mahindi na mboga',
                                'description' => 'Chakula kikuu kinacholiwa kila siku na katika sherehe.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Vyakula vya asili',
                                'description' => 'Vyakula vinavyotokana na mashamba na mazingira ya Bena.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma hutumika katika sherehe, ibada na hafla za kijamii.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Bena',
                                'description' => 'Ngoma za jadi zinazochezwa wakati wa sherehe na mikusanyiko ya kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi na mapambo ya asili huonyesha utambulisho wa kijamii na hadhi.',
                        'items' => [
                            [
                                'name' => 'Shanga na vitambaa vya jadi',
                                'description' => 'Huvaa katika sherehe, hafla za familia na matukio maalum.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],


                // 26. Rangi
                 [
                    'name' => 'Rangi',
                    'common_names' => ['Warangi', 'Rangi'],
                    'origin_region' => 'Mkoa wa Singida',
                    'famous_location' => 'Singida Mjini na vijiji vya jirani',
                    'country' => 'Tanzania',
                    'summary' => 'Warangi ni jamii ya wakulima na wafugaji wanaoishi katikati mwa Tanzania.',
                    'description' => 'Wanajulikana kwa kilimo cha mahindi, mtama, mihogo, na ufugaji wa ng’ombe, pamoja na mila na desturi za kijamii zinazohusisha familia na mashamba.',
                    'origins_and_history' => [
                        'summary' => 'Makazi katika mkoa wa Singida',
                        'description' => 'Warangi waliunda jamii zilizo imara katikati mwa Tanzania, wakidumisha kilimo chenye rutuba na utamaduni wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Kilimo na makazi',
                                'description' => 'Walijikita katika kilimo cha nafaka na ufugaji wa ng’ombe ili kudumisha familia na jamii zao.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya nafaka na mazao ya mifugo',
                        'description' => 'Lishe yao inategemea mahindi, mtama, mihogo, mboga na bidhaa za mifugo.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mahindi',
                                'description' => 'Chakula kikuu kinacholiwa kwa mboga au nyama.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Maziwa na nyama',
                                'description' => 'Hutumika katika lishe ya kila siku na sherehe.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma hutumika katika sherehe, mikusanyiko na ibada za kijamii.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Rangi',
                                'description' => 'Ngoma za jadi zinazochezwa wakati wa sherehe na hafla za kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi na mapambo ya asili huonyesha hadhi na utambulisho wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Shanga na vitambaa vya jadi',
                                'description' => 'Huvaa katika sherehe, ibada na hafla maalum za kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],


                // 27. Wameru
                 [
                    'name' => 'Meru',
                    'common_names' => ['Wameru', 'Meru'],
                    'origin_region' => 'Mkoa wa Arusha, mteremko wa Mlima Meru',
                    'famous_location' => 'Arusha na mteremko wa Mlima Meru',
                    'country' => 'Tanzania',
                    'summary' => 'Wameru ni jamii ya wakulima wanaoishi mteremko wa Mlima Meru kaskazini mwa Tanzania.',
                    'description' => 'Wanajulikana kwa kilimo cha kahawa, mpunga, mihogo na mboga, pamoja na utamaduni tajiri wa kijamii na sherehe za jadi.',
                    'origins_and_history' => [
                        'summary' => 'Makazi katika mteremko wa Mlima Meru',
                        'description' => 'Wameru waliunda jamii zilizo imara kando ya milima ya Meru, wakidumisha kilimo chenye rutuba na utamaduni wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Kilimo na makazi',
                                'description' => 'Walijikita katika kilimo cha kahawa, mpunga, mihogo na mboga, wakihifadhi familia na mashamba yao.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya kahawa, nafaka na mboga',
                        'description' => 'Lishe yao inategemea kahawa, mpunga, mihogo na mboga za majani.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mahindi na mboga',
                                'description' => 'Chakula kikuu kinacholiwa kila siku na katika sherehe.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Vyakula vya asili',
                                'description' => 'Vyakula vinavyotokana na mashamba na misitu ya Meru.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma hutumika katika sherehe za kijamii, ibada na tamasha.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Meru',
                                'description' => 'Ngoma za jadi zinazochezwa wakati wa sherehe na mikusanyiko ya kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi na mapambo ya asili huonyesha utambulisho wa kijamii na hadhi.',
                        'items' => [
                            [
                                'name' => 'Shanga na vitambaa vya jadi',
                                'description' => 'Huvaa katika sherehe, hafla za familia na matukio maalum.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],

                // 28. Pogoro
                 [
                    'name' => 'Pogoro',
                    'common_names' => ['Wapogoro', 'Pogoro'],
                    'origin_region' => 'Mkoa wa Morogoro',
                    'famous_location' => 'Kilosa, Morogoro',
                    'country' => 'Tanzania',
                    'summary' => 'Wapogoro ni jamii ya wakulima wanaoishi katika mkoa wa Morogoro, mashariki mwa Tanzania.',
                    'description' => 'Wanajulikana kwa kilimo cha mahindi, mtama, mihogo na mboga, pamoja na mila na desturi za kijamii zinazohusisha familia na jamii.',
                    'origins_and_history' => [
                        'summary' => 'Makazi katika mkoa wa Morogoro',
                        'description' => 'Wapogoro waliunda jamii zilizo imara katika mkoa wa Morogoro, wakidumisha kilimo chenye rutuba na utamaduni wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Kilimo na makazi',
                                'description' => 'Walijikita katika kilimo cha nafaka na mboga, wakihifadhi familia na mashamba yao.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya nafaka na mboga',
                        'description' => 'Lishe yao inategemea mahindi, mtama, mihogo na mboga za majani.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mahindi na mboga',
                                'description' => 'Chakula kikuu kinacholiwa kila siku na katika sherehe.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Vyakula vya asili',
                                'description' => 'Vyakula vinavyotokana na mashamba na mazingira ya Pogoro.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma hutumika katika sherehe, ibada na hafla za kijamii.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Pogoro',
                                'description' => 'Ngoma za jadi zinazochezwa wakati wa sherehe na mikusanyiko ya kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi na mapambo ya asili huonyesha utambulisho wa kijamii na hadhi.',
                        'items' => [
                            [
                                'name' => 'Shanga na vitambaa vya jadi',
                                'description' => 'Huvaa katika sherehe, hafla za familia na matukio maalum.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],


                // 29. Matengo
                 [
                    'name' => 'Matengo',
                    'common_names' => ['Wamatengo', 'Matengo'],
                    'origin_region' => 'Mkoa wa Mbeya',
                    'famous_location' => 'Kyela na mteremko wa Ziwa Nyasa',
                    'country' => 'Tanzania',
                    'summary' => 'Wamatengo ni jamii ya wakulima wanaoishi mteremko wa Ziwa Nyasa na maeneo ya Mbeya.',
                    'description' => 'Wanajulikana kwa kilimo cha mpunga, mahindi, mihogo, na mboga, pamoja na mila na desturi tajiri za kijamii na sherehe za kijadi.',
                    'origins_and_history' => [
                        'summary' => 'Makazi katika mteremko wa Ziwa Nyasa',
                        'description' => 'Wamatengo waliunda jamii zilizo imara katika mteremko wa Ziwa Nyasa, wakidumisha kilimo chenye rutuba na utamaduni wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Kilimo na makazi',
                                'description' => 'Walijikita katika kilimo cha mpunga, mahindi, mihogo na mboga, wakihifadhi familia na mashamba yao.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya nafaka na mboga',
                        'description' => 'Lishe yao inategemea sana mpunga, mahindi, mihogo na mboga za majani.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mpunga na mboga',
                                'description' => 'Chakula kikuu kinacholiwa kila siku na katika sherehe.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Vyakula vya asili',
                                'description' => 'Vyakula vinavyotokana na mashamba na mazingira ya Matengo.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma hutumika katika sherehe, mikusanyiko na tamasha za kijamii.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Matengo',
                                'description' => 'Ngoma za jadi zinazochezwa wakati wa sherehe na hafla za kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi na mapambo ya asili huonyesha hadhi na utambulisho wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Shanga na vitambaa vya jadi',
                                'description' => 'Huvaa katika sherehe, hafla za familia na matukio maalum.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],


                // 30. Nyaturu
                 [
                    'name' => 'Nyaturu',
                    'common_names' => ['Wanyaturu', 'Nyaturu'],
                    'origin_region' => 'Mkoa wa Singida',
                    'famous_location' => 'Manyoni, Singida',
                    'country' => 'Tanzania',
                    'summary' => 'Wanyaturu ni jamii ya wakulima na wafugaji wanaoishi katikati mwa Tanzania.',
                    'description' => 'Wanajulikana kwa kilimo cha mahindi, mtama, mihogo, na ufugaji mdogo wa ng’ombe, pamoja na mila na desturi za kijamii zinazohusisha familia na mashamba.',
                    'origins_and_history' => [
                        'summary' => 'Makazi katika mkoa wa Singida',
                        'description' => 'Wanyaturu waliunda jamii zilizo imara katikati mwa Tanzania, wakidumisha kilimo chenye rutuba na utamaduni wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Kilimo na makazi',
                                'description' => 'Walijikita katika kilimo cha nafaka na ufugaji mdogo wa ng’ombe ili kudumisha familia na jamii zao.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya nafaka na mazao ya mifugo',
                        'description' => 'Lishe yao inategemea mahindi, mtama, mihogo, mboga na bidhaa za mifugo.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mahindi',
                                'description' => 'Chakula kikuu kinacholiwa kwa mboga au nyama.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Maziwa na nyama',
                                'description' => 'Hutumika katika lishe ya kila siku na sherehe.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma hutumika katika sherehe, mikusanyiko na ibada za kijamii.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Nyaturu',
                                'description' => 'Ngoma za jadi zinazochezwa wakati wa sherehe na hafla za kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi na mapambo ya asili huonyesha hadhi na utambulisho wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Shanga na vitambaa vya jadi',
                                'description' => 'Huvaa katika sherehe, hafla za familia na matukio maalum.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],


                // 31. Makua
                [
                    'name' => 'Makua',
                    'common_names' => ['Wamakua', 'Makua'],
                    'origin_region' => 'Mkoa wa Mtwara na Kusini mwa Pwani ya Tanzania',
                    'famous_location' => 'Mtwara na Lindi',
                    'country' => 'Tanzania',
                    'summary' => 'Wamakua ni jamii ya wakulima na wavuvi wanaoishi kusini-mashariki mwa Tanzania.',
                    'description' => 'Wanajulikana kwa kilimo cha mahindi, mtama, mihogo, ufugaji mdogo na uvuvi, pamoja na mila na desturi tajiri za kijamii.',
                    'origins_and_history' => [
                        'summary' => 'Makazi katika mkoa wa Mtwara na Lindi',
                        'description' => 'Wamakua waliunda jamii zilizo imara katika pwani na vijiji vya ndani, wakidumisha kilimo, uvuvi na utamaduni wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Kilimo na uvuvi',
                                'description' => 'Walijikita katika kilimo cha nafaka, mihogo na mboga pamoja na uvuvi wa pwani.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya nafaka, mboga na samaki',
                        'description' => 'Lishe yao inategemea mahindi, mtama, mihogo, mboga na bidhaa za baharini.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mahindi na mboga',
                                'description' => 'Chakula kikuu kinacholiwa kila siku na katika sherehe.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Samaki wa pwani',
                                'description' => 'Chanzo muhimu cha protini kutoka pwani.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma hutumika katika sherehe, ibada na hafla za kijamii.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Makua',
                                'description' => 'Ngoma za jadi zinazochezwa wakati wa sherehe na hafla za kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi na mapambo ya asili huonyesha utambulisho wa kijamii na hadhi.',
                        'items' => [
                            [
                                'name' => 'Shanga na vitambaa vya jadi',
                                'description' => 'Huvaa katika sherehe, hafla za familia na matukio maalum.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],


                // 32. Nyambo
                [
                    'name' => 'Nyambo',
                    'common_names' => ['Wanyambo', 'Nyambo'],
                    'origin_region' => 'Mkoa wa Rukwa',
                    'famous_location' => 'Sumbawanga na mtaa jirani',
                    'country' => 'Tanzania',
                    'summary' => 'Wanyambo ni jamii ya wakulima na wafugaji wanaoishi magharibi mwa Tanzania.',
                    'description' => 'Wanajulikana kwa kilimo cha mahindi, mtama, mihogo, ufugaji wa ng’ombe na mbuzi, pamoja na mila na desturi tajiri za kijamii.',
                    'origins_and_history' => [
                        'summary' => 'Makazi katika mkoa wa Rukwa',
                        'description' => 'Wanyambo waliunda jamii zilizo imara magharibi mwa Tanzania, wakidumisha kilimo, ufugaji na utamaduni wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Kilimo na makazi',
                                'description' => 'Walijikita katika kilimo cha nafaka na ufugaji wa mifugo ili kudumisha familia na jamii zao.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya nafaka na bidhaa za mifugo',
                        'description' => 'Lishe yao inategemea mahindi, mtama, mihogo, mboga na bidhaa za mifugo.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mahindi na mboga',
                                'description' => 'Chakula kikuu kinacholiwa kila siku na katika sherehe.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Maziwa na nyama',
                                'description' => 'Chanzo muhimu cha protini na lishe ya kila siku.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma hutumika katika sherehe, mikusanyiko na hafla za kijamii.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Nyambo',
                                'description' => 'Ngoma za jadi zinazochezwa wakati wa sherehe na hafla za kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi na mapambo ya asili huonyesha hadhi na utambulisho wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Shanga na vitambaa vya jadi',
                                'description' => 'Huvaa katika sherehe, hafla za familia na matukio maalum.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],

                // 33. Pemba
                [
                    'name' => 'Pemba',
                    'common_names' => ['Wapemba', 'Pemba'],
                    'origin_region' => 'Kisiwa cha Pemba, Zanzibar',
                    'famous_location' => 'Chake Chake na Mkoani Pemba',
                    'country' => 'Tanzania',
                    'summary' => 'Wapemba ni jamii ya wakulima na wavuvi wanaoishi kisiwa cha Pemba, Zanzibar.',
                    'description' => 'Wanajulikana kwa kilimo cha karafuu, pilipili, mihogo, na uvuvi, pamoja na utamaduni tajiri wa kijamii unaohusisha familia na sherehe za jadi.',
                    'origins_and_history' => [
                        'summary' => 'Makazi katika kisiwa cha Pemba',
                        'description' => 'Wapemba waliunda jamii zilizo imara kisiwa cha Pemba, wakidumisha kilimo, uvuvi na tamaduni zao za kijamii.',
                        'items' => [
                            [
                                'name' => 'Kilimo na uvuvi',
                                'description' => 'Walijikita katika kilimo cha karafuu, pilipili na mihogo pamoja na uvuvi wa pwani.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya nafaka, mboga na samaki',
                        'description' => 'Lishe yao inategemea mihogo, mahindi, mboga na samaki wa pwani.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mihogo na mboga',
                                'description' => 'Chakula kikuu kinacholiwa kila siku na katika sherehe.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Samaki wa pwani',
                                'description' => 'Chanzo muhimu cha protini kutoka pwani.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma hutumika katika sherehe, ibada na hafla za kijamii.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Pemba',
                                'description' => 'Ngoma za jadi zinazochezwa wakati wa sherehe na hafla za kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi na mapambo ya asili huonyesha utambulisho wa kijamii na hadhi.',
                        'items' => [
                            [
                                'name' => 'Shanga na vitambaa vya jadi',
                                'description' => 'Huvaa katika sherehe, hafla za familia na matukio maalum.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],

                // 34. Abairegi
                [
                    'name' => 'Abairegi',
                    'common_names' => ['Wabairegi', 'Abairegi'],
                    'origin_region' => 'Mkoa wa Kagera',
                    'famous_location' => 'Bukoba na vijiji vya jirani',
                    'country' => 'Tanzania',
                    'summary' => 'Wabairegi ni jamii ya wakulima wanaoishi kaskazini-magharibi mwa Tanzania.',
                    'description' => 'Wanajulikana kwa kilimo cha mahindi, mtama, mihogo, na ufugaji mdogo wa ng’ombe, pamoja na mila na desturi tajiri za kijamii.',
                    'origins_and_history' => [
                        'summary' => 'Makazi katika mkoa wa Kagera',
                        'description' => 'Wabairegi waliunda jamii zilizo imara kaskazini-magharibi mwa Tanzania, wakidumisha kilimo, ufugaji na utamaduni wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Kilimo na makazi',
                                'description' => 'Walijikita katika kilimo cha nafaka, mihogo na mboga pamoja na ufugaji mdogo wa ng’ombe.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya nafaka na mboga',
                        'description' => 'Lishe yao inategemea mahindi, mtama, mihogo, mboga na bidhaa za mifugo.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mahindi na mboga',
                                'description' => 'Chakula kikuu kinacholiwa kila siku na katika sherehe.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Maziwa na nyama',
                                'description' => 'Hutumika katika lishe ya kila siku na sherehe.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma hutumika katika sherehe, mikusanyiko na hafla za kijamii.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Abairegi',
                                'description' => 'Ngoma za jadi zinazochezwa wakati wa sherehe na hafla za kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi na mapambo ya asili huonyesha hadhi na utambulisho wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Shanga na vitambaa vya jadi',
                                'description' => 'Huvaa katika sherehe, hafla za familia na matukio maalum.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],

                // 35. Akie

                [
                    'name' => 'Akie',
                    'common_names' => ['Waakie', 'Akie'],
                    'origin_region' => 'Mkoa wa Manyara',
                    'famous_location' => 'Kaskazini mwa Ziwa Eyasi',
                    'country' => 'Tanzania',
                    'summary' => 'Waakie ni jamii ndogo ya wafugaji wanaoishi kaskazini mwa Ziwa Eyasi.',
                    'description' => 'Wanajulikana kwa ufugaji wa ng’ombe na mbuzi, pamoja na mila na desturi za kijamii zinazohusisha familia na jamii.',
                    'origins_and_history' => [
                        'summary' => 'Makazi kaskazini mwa Ziwa Eyasi',
                        'description' => 'Waakie waliunda jamii ndogo na imara kando ya Ziwa Eyasi, wakidumisha ufugaji na utamaduni wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Ufugaji na makazi',
                                'description' => 'Walijikita katika ufugaji wa ng’ombe na mbuzi, wakihifadhi familia na malisho ya mifugo yao.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Lishe inayotokana na mifugo',
                        'description' => 'Lishe yao inategemea maziwa, nyama, na bidhaa nyingine za mifugo.',
                        'items' => [
                            [
                                'name' => 'Maziwa na nyama',
                                'description' => 'Vyakula vya msingi vinavyotumiwa kila siku na katika sherehe.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma hutumika katika sherehe za kijamii na ibada za familia.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Akie',
                                'description' => 'Ngoma za jadi zinazochezwa wakati wa sherehe na hafla za kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi na mapambo ya asili huonyesha hadhi na utambulisho wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Shanga na vitambaa vya jadi',
                                'description' => 'Huvaa katika sherehe na hafla maalum za kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],

                // 36. Alagwa
                [
                    'name' => 'Alagwa',
                    'common_names' => ['Waalagwa', 'Alagwa'],
                    'origin_region' => 'Mkoa wa Dodoma',
                    'famous_location' => 'Kaskazini mwa Dodoma, Handeni na vijiji vya jirani',
                    'country' => 'Tanzania',
                    'summary' => 'Waalagwa ni jamii ya wakulima wanaoishi katikati mwa Tanzania.',
                    'description' => 'Wanajulikana kwa kilimo cha mahindi, mtama, mihogo na mboga, pamoja na ufugaji mdogo na mila za kijamii zinazohusisha familia na jamii.',
                    'origins_and_history' => [
                        'summary' => 'Makazi katika mkoa wa Dodoma',
                        'description' => 'Waalagwa waliunda jamii zilizo imara katikati mwa Tanzania, wakidumisha kilimo, ufugaji na utamaduni wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Kilimo na makazi',
                                'description' => 'Walijikita katika kilimo cha nafaka, mihogo na mboga, wakihifadhi familia na mashamba yao.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya nafaka na mboga',
                        'description' => 'Lishe yao inategemea mahindi, mtama, mihogo, mboga na bidhaa za mifugo.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mahindi na mboga',
                                'description' => 'Chakula kikuu kinacholiwa kila siku na katika sherehe.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Maziwa na nyama',
                                'description' => 'Hutumika katika lishe ya kila siku na sherehe.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma hutumika katika sherehe, mikusanyiko na hafla za kijamii.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Alagwa',
                                'description' => 'Ngoma za jadi zinazochezwa wakati wa sherehe na hafla za kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi na mapambo ya asili huonyesha hadhi na utambulisho wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Shanga na vitambaa vya jadi',
                                'description' => 'Huvaa katika sherehe, hafla za familia na matukio maalum.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],

                // 37. Arusha
                [
                    'name' => 'Arusha',
                    'common_names' => ['Waarusha', 'Arusha'],
                    'origin_region' => 'Mkoa wa Arusha, mteremko wa Mlima Meru',
                    'famous_location' => 'Arusha Mjini na vijiji vya jirani',
                    'country' => 'Tanzania',
                    'summary' => 'Waarusha ni jamii ya wafugaji na wakulima wanaoishi mteremko wa Mlima Meru kaskazini mwa Tanzania.',
                    'description' => 'Wanajulikana kwa ufugaji wa ng’ombe, mbuzi na kondoo, pamoja na kilimo cha kahawa, mihogo na mboga, pamoja na mila na desturi za kijamii.',
                    'origins_and_history' => [
                        'summary' => 'Makazi katika mteremko wa Mlima Meru',
                        'description' => 'Waarusha waliunda jamii zilizo imara kando ya Mlima Meru, wakidumisha ufugaji, kilimo na utamaduni wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Ufugaji, kilimo na makazi',
                                'description' => 'Walijikita katika ufugaji wa mifugo na kilimo cha kahawa, mihogo na mboga, wakihifadhi familia na mashamba yao.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Lishe inayotokana na mifugo na kilimo',
                        'description' => 'Lishe yao inategemea maziwa, nyama, kahawa, mihogo na mboga za majani.',
                        'items' => [
                            [
                                'name' => 'Maziwa na nyama',
                                'description' => 'Vyakula vya msingi vinavyotumiwa kila siku na katika sherehe.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Ugali wa mahindi na mboga',
                                'description' => 'Chakula cha kila siku na sherehe zinazohusisha kilimo cha ndani.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma hutumika katika sherehe, ibada na hafla za kijamii.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Arusha',
                                'description' => 'Ngoma za jadi zinazochezwa wakati wa sherehe na hafla za kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi na mapambo ya asili huonyesha utambulisho wa kijamii na hadhi.',
                        'items' => [
                            [
                                'name' => 'Shanga na vitambaa vya jadi',
                                'description' => 'Huvaa katika sherehe, hafla za familia na matukio maalum.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],

                // 38. Asa

                [
                    'name' => 'Asa',
                    'common_names' => ['Waasa', 'Asa'],
                    'origin_region' => 'Mkoa wa Rukwa, Ziwa Rukwa kaskazini',
                    'famous_location' => 'Ziwa Rukwa na vijiji vya jirani',
                    'country' => 'Tanzania',
                    'summary' => 'Waasa ni jamii ya wavuvi na wafugaji wanaoishi kaskazini mwa Ziwa Rukwa.',
                    'description' => 'Wanajulikana kwa uvuvi, ufugaji mdogo wa ng’ombe na mbuzi, pamoja na kilimo cha nafaka na mboga, pamoja na mila na desturi za kijamii.',
                    'origins_and_history' => [
                        'summary' => 'Makazi kando ya Ziwa Rukwa',
                        'description' => 'Waasa waliunda jamii zilizo imara kando ya Ziwa Rukwa, wakidumisha uvuvi, ufugaji na kilimo cha nafaka.',
                        'items' => [
                            [
                                'name' => 'Uvuvi, kilimo na makazi',
                                'description' => 'Walijikita katika uvuvi, kilimo cha mahindi na mboga, pamoja na ufugaji mdogo wa mifugo.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vinavyotokana na samaki, mifugo na kilimo',
                        'description' => 'Lishe yao inategemea samaki, maziwa, nyama, mboga na nafaka.',
                        'items' => [
                            [
                                'name' => 'Samaki wa Ziwa Rukwa',
                                'description' => 'Chanzo kikuu cha protini na chakula cha kila siku.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Ugali wa mahindi na mboga',
                                'description' => 'Chakula cha kila siku na sherehe za kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma hutumika katika sherehe, ibada na hafla za kijamii.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Asa',
                                'description' => 'Ngoma za jadi zinazochezwa wakati wa sherehe na hafla za kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi na mapambo ya asili huonyesha hadhi na utambulisho wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Shanga na vitambaa vya jadi',
                                'description' => 'Huvaa katika sherehe, hafla za familia na matukio maalum.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],

                // 39. Bangubangu

                [
                    'name' => 'Bangubangu',
                    'common_names' => ['Wabangubangu', 'Bangubangu'],
                    'origin_region' => 'Mkoa wa Kigoma na maeneo jirani',
                    'famous_location' => 'Kigoma na miji midogo ya jirani',
                    'country' => 'Tanzania',
                    'summary' => 'Wabangubangu ni jamii ya wakulima na wafugaji wanaoishi magharibi mwa Tanzania.',
                    'description' => 'Wanajulikana kwa kilimo cha mahindi, mtama, mihogo, mboga na ufugaji mdogo wa mifugo, pamoja na mila na desturi za kijamii.',
                    'origins_and_history' => [
                        'summary' => 'Makazi katika mkoa wa Kigoma',
                        'description' => 'Wabangubangu waliunda jamii zilizo imara magharibi mwa Tanzania, wakidumisha kilimo, ufugaji na utamaduni wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Kilimo na makazi',
                                'description' => 'Walijikita katika kilimo cha nafaka, mboga na ufugaji mdogo wa mifugo ili kudumisha familia na jamii zao.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya nafaka, mboga na bidhaa za mifugo',
                        'description' => 'Lishe yao inategemea mahindi, mtama, mihogo, mboga na bidhaa za mifugo.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mahindi na mboga',
                                'description' => 'Chakula kikuu kinacholiwa kila siku na katika sherehe.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Maziwa na nyama',
                                'description' => 'Hutumika katika lishe ya kila siku na sherehe.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma hutumika katika sherehe, mikusanyiko na hafla za kijamii.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Bangubangu',
                                'description' => 'Ngoma za jadi zinazochezwa wakati wa sherehe na hafla za kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi na mapambo ya asili huonyesha hadhi na utambulisho wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Shanga na vitambaa vya jadi',
                                'description' => 'Huvaa katika sherehe, hafla za familia na matukio maalum.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],

                // 40. Barabaig
                [
                    'name' => 'Barabaig',
                    'common_names' => ['Wabarabaig', 'Barabaig'],
                    'origin_region' => 'Mkoa wa Manyara na Arusha',
                    'famous_location' => 'Kaskazini mwa Dodoma na mteremko wa Mlima Manyara',
                    'country' => 'Tanzania',
                    'summary' => 'Wabarabaig ni jamii ya wafugaji wanaoishi kaskazini mwa Tanzania, hasa katikati mwa mikoa ya Manyara na Arusha.',
                    'description' => 'Wanajulikana kwa ufugaji wa ng’ombe, mbuzi na kondoo, pamoja na mila na desturi za kijamii zinazohusisha familia na jamii.',
                    'origins_and_history' => [
                        'summary' => 'Makazi kaskazini mwa Dodoma na Arusha',
                        'description' => 'Wabarabaig waliunda jamii zilizo imara katikati mwa mikoa ya Manyara na Arusha, wakidumisha ufugaji na utamaduni wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Ufugaji na makazi',
                                'description' => 'Walijikita katika ufugaji wa ng’ombe, mbuzi na kondoo, wakihifadhi familia na malisho ya mifugo yao.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Lishe inayotokana na mifugo',
                        'description' => 'Lishe yao inategemea maziwa, nyama, na bidhaa nyingine za mifugo.',
                        'items' => [
                            [
                                'name' => 'Maziwa na nyama',
                                'description' => 'Vyakula vya msingi vinavyotumiwa kila siku na katika sherehe.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma hutumika katika sherehe za kijamii na ibada za familia.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Barabaig',
                                'description' => 'Ngoma za jadi zinazochezwa wakati wa sherehe na hafla za kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi na mapambo ya asili huonyesha hadhi na utambulisho wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Shanga na vitambaa vya jadi',
                                'description' => 'Huvaa katika sherehe na hafla maalum za kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],

                // 41. Bazigaba
                [
                    'name' => 'Bazigaba',
                    'common_names' => ['Wabazigaba', 'Bazigaba'],
                    'origin_region' => 'Mkoa wa Kigoma',
                    'famous_location' => 'Kigoma na vijiji vya jirani',
                    'country' => 'Tanzania',
                    'summary' => 'Wabazigaba ni jamii ya wakulima na wavuvi wanaoishi magharibi mwa Tanzania, hasa mkoa wa Kigoma.',
                    'description' => 'Wanajulikana kwa kilimo cha mahindi, mtama, mihogo, mboga na uvuvi, pamoja na mila na desturi za kijamii zinazohusisha familia na jamii.',
                    'origins_and_history' => [
                        'summary' => 'Makazi katika mkoa wa Kigoma',
                        'description' => 'Wabazigaba waliunda jamii zilizo imara magharibi mwa Tanzania, wakidumisha kilimo, uvuvi na utamaduni wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Kilimo na makazi',
                                'description' => 'Walijikita katika kilimo cha nafaka, mboga na ufugaji mdogo pamoja na uvuvi wa maji matamu.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya nafaka, mboga na samaki',
                        'description' => 'Lishe yao inategemea mahindi, mtama, mihogo, mboga na samaki wa ndani.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mahindi na mboga',
                                'description' => 'Chakula kikuu kinacholiwa kila siku na katika sherehe.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Samaki wa ndani',
                                'description' => 'Chanzo muhimu cha protini na chakula cha kila siku.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma hutumika katika sherehe, ibada na hafla za kijamii.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Bazigaba',
                                'description' => 'Ngoma za jadi zinazochezwa wakati wa sherehe na hafla za kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi na mapambo ya asili huonyesha hadhi na utambulisho wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Shanga na vitambaa vya jadi',
                                'description' => 'Huvaa katika sherehe, hafla za familia na matukio maalum.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],

                //42. Bembe
                [
                    'name' => 'Bembe',
                    'common_names' => ['Wabembe', 'Bembe'],
                    'origin_region' => 'Mkoa wa Kigoma kaskazini-magharibi',
                    'famous_location' => 'Mpanda na vijiji vya jirani',
                    'country' => 'Tanzania',
                    'summary' => 'Wabembe ni jamii ya wakulima na wafugaji wanaoishi magharibi mwa Tanzania, hasa mkoa wa Kigoma.',
                    'description' => 'Wanajulikana kwa kilimo cha mahindi, mtama, mihogo, mboga na ufugaji mdogo wa mifugo, pamoja na mila na desturi tajiri za kijamii.',
                    'origins_and_history' => [
                        'summary' => 'Makazi katika mkoa wa Kigoma',
                        'description' => 'Wabembe waliunda jamii zilizo imara magharibi mwa Tanzania, wakidumisha kilimo, ufugaji na utamaduni wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Kilimo na makazi',
                                'description' => 'Walijikita katika kilimo cha nafaka, mboga na ufugaji mdogo wa mifugo ili kudumisha familia na jamii zao.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'food_and_cuisine' => [
                        'summary' => 'Vyakula vya nafaka, mboga na bidhaa za mifugo',
                        'description' => 'Lishe yao inategemea mahindi, mtama, mihogo, mboga na bidhaa za mifugo.',
                        'items' => [
                            [
                                'name' => 'Ugali wa mahindi na mboga',
                                'description' => 'Chakula kikuu kinacholiwa kila siku na katika sherehe.',
                                'media_keys' => [],
                            ],
                            [
                                'name' => 'Maziwa na nyama',
                                'description' => 'Hutumika katika lishe ya kila siku na sherehe.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'music_and_dance' => [
                        'summary' => 'Ngoma na nyimbo za kijamii',
                        'description' => 'Ngoma hutumika katika sherehe, mikusanyiko na hafla za kijamii.',
                        'items' => [
                            [
                                'name' => 'Ngoma za Bembe',
                                'description' => 'Ngoma za jadi zinazochezwa wakati wa sherehe na hafla za kijamii.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'dress_and_adornment' => [
                        'summary' => 'Mavazi ya jadi na mapambo',
                        'description' => 'Mavazi na mapambo ya asili huonyesha hadhi na utambulisho wa kijamii.',
                        'items' => [
                            [
                                'name' => 'Shanga na vitambaa vya jadi',
                                'description' => 'Huvaa katika sherehe, hafla za familia na matukio maalum.',
                                'media_keys' => [],
                            ],
                        ],
                    ],
                    'created_by' => $firstUserUuid,
                ],

            ];

            foreach ($tribes as $tribe) {
                //dd($tribe);
                //Tribe::create($tribe);
                Tribe::updateOrCreate(
                    ['name' => $tribe['name']],
                    $tribe
                );

            }

            // List of tribes (from your list). Names kept as provided.
            $tribes = [
                // 'Abairegi',
                // 'Akie',
                // 'Alagwa',
                // 'Arusha',
                // 'Asa',
                // 'Bangubangu',
                // 'Barabaig',
                // 'Bazigaba',
                // 'Bembe',
                // 'Bena',
                'Bende',
                'Bondei',
                'Bungu',
                'Burunge',
                //'Chaga',
                'Datooga',
                'Dhaiso',
                'Doe',
                'Fipa',
                'Girango',
                //'Gogo',
                'Goma',
                'Gorowa',
                // 'Ha',
                'Hadimu',
                //'Hadza',
                'Hangaza',
                //'Haya',
                //'Hehe',
                'Holoholo',
                'Ikizu',
                'Ikoma',
                'Indians in Tanzania',
                'Iramba',
                'Iraqw',
                'Jiji',
                'Jita',
                'Kabwa',
                'Kagura',
                'Kaguru',
                'Kahe',
                'Kami',
                'Kara',
                //'Kerewe',
                'Kimbu',
                // 'Kinga',
                'Kisankasa',
                'Kisi',
                'Koningo',
                'Konongo',
                //'Kuria',
                'Kutu',
                "Kw'adza",
                'Kwaya',
                'Kwere',
                'Lambya',
                //'Luguru',
                'Lungu',
                'Luo',
                //'Maasai',
                'Machinga',
                'Magoma',
                'Mahanji',
                //'Makonde',
                // 'Makua',
                'Makwe',
                'Malila',
                'Mambwe',
                'Manda',
                'Manyema',
                // 'Matengo',
                'Matumbi',
                'Maviha',
                'Mbugu',
                'Mbugwe',
                'Mbunga',
                'Mpoto',
                'Mwanga',
                'Mwera',
                'Ndali',
                'Ndamba',
                'Ndendeule',
                'Ndengereko',
                'Ndonde',
                'Nena',
                'Ngasa',
                'Ngindo',
                //'Ngoni',
                'Ngulu',
                'Ngurimi',
                'Nilotic peoples',
                'Nindi',
                //'Nyakyusa',
                // 'Nyambo',
                'Nyanyembe',
                'Nyasa',
                'Nyaturu',
                'Nyiha',
                'Okiek',
                'Pangwa',
                'Parakuyo',
                //'Pare',
                // 'Pemba',
                'Pimbwe',
                // 'Pogolo',
                // 'Rangi',
                'Rufiji',
                'Rungwa',
                'Rutara',
                'Rwa',
                'Safwa',
                'Sagara',
                //'Sandawe',
                'Sangu',
                'Segeju',
                // 'Shambaa',
                'Shirazi',
                'Shubi',
                'Sizaki',
                'Sonjo',
                'Suba',
                'Sumbwa',
                //'Swahili',
                'Taveta',
                'Tongwe',
                //'Tumbuka',
                'Turu',
                'Vidunda',
                'Vinza',
                'Wahinda',
                // 'Wameru',
                'Wanda',
                'Wanji',
                'Ware',
                //'Yao',
                'Zanaki',
                //'Zaramo',
                // 'Zigua',
                'Zinza',
                'Zyoba'
            ];

            $records = [];

            foreach ($tribes as $name) {
                // Build a slug-friendly famous_location placeholder
                $slug = Str::slug($name, '-');

                // Minimal but complete JSONX structures (customize later as needed)
                $commonNames = [$name];
                $originRegion = 'Various regions of Tanzania'; // placeholder, refine later
                $famousLocation = ucfirst($slug) . ' Area';
                $country = 'Tanzania';
                $summary = "The $name are an ethnic group associated with Tanzania.";
                $description = "The $name are an ethnic group associated with Tanzania. This entry contains a starter set of cultural information which should be refined with accurate, tribe-specific data.";
                $customs = [
                    'wedding_rituals' => "Traditional wedding practices vary within {$name} communities.",
                    'naming_ceremonies' => "Naming ceremonies reflect ancestry and local traditions."
                ];
                $beliefs = [
                    'ancestral_veneration' => true,
                    'religion' => 'Traditional and modern religions combined'
                ];
                $languages = [
                    'primary' => "{$name} language (local dialect)",
                    'dialects' => []
                ];
                $culturalArtifacts = [
                    'tools' => ['Traditional tools'],
                    'clothing' => ['Traditional clothing'],
                    'instruments' => ['Traditional instruments']
                ];
                $foods = [
                    'staples' => ['Local staples'],
                    'signature_dishes' => ['Signature dish of ' . $name]
                ];
                $musicAndDance = [
                    'dance_styles' => ['Traditional dance style'],
                    'instruments' => ['Drums', 'Chanting']
                ];
                $festivals = [
                    'events' => ['Annual cultural festival'],
                    'dates' => []
                ];
                $traditionalPractices = [
                    'farming' => 'Local subsistence and/or cash-crop practices',
                    'craftsmanship' => 'Local crafting traditions'
                ];
                $valuesAndPhilosophy = [
                    'proverbs' => ["Respect for elders is a core value in many {$name} communities."],
                    'core_values' => ['Community', 'Respect', 'Heritage']
                ];
                $famousFigures = [
                    ['name' => "{$name} Notable", 'role' => 'Cultural figure or leader']
                ];
                $pointsOfPride = [
                    'recognized_for' => ['Rich traditions', 'Local knowledge']
                ];
                $media = [
                    'photos' => [],
                    'videos' => []
                ];
                $externalLinks = [
                    'wikipedia' => ''
                ];

                $records[] = [
                    'name' => $name,
                    'common_names' => json_encode($commonNames),
                    'origin_region' => $originRegion,
                    'famous_location' => $famousLocation,
                    'country' => $country,
                    'summary' => $summary,
                    'description' => $description,
                    'customs' => json_encode($customs),
                    'beliefs' => json_encode($beliefs),
                    'languages' => json_encode($languages),
                    'cultural_artifacts' => json_encode($culturalArtifacts),
                    'foods' => json_encode($foods),
                    'music_and_dance' => json_encode($musicAndDance),
                    'festivals' => json_encode($festivals),
                    'traditional_practices' => json_encode($traditionalPractices),
                    'values_and_philosophy' => json_encode($valuesAndPhilosophy),
                    'famous_figures' => json_encode($famousFigures),
                    'points_of_pride' => json_encode($pointsOfPride),
                    'media' => json_encode($media),
                    'external_links' => json_encode($externalLinks),
                    'is_active' => true,
                    'created_at' => now(),
                    'created_by' => $firstUserUuid,
                ];
            }

            // Insert in chunks to avoid huge single insert
            $chunks = array_chunk($records, 20);
            foreach ($chunks as $chunk) {
                //DB::table('tribes')->insert($chunk);

                foreach ($chunk as $tribe) {
                    //dd($tribe);
                    //Tribe::create($tribe);
                    Tribe::updateOrCreate(
                        ['name' => $tribe['name']],
                        $tribe
                    );
                }

            }

            //DB::table('tribes')->update(['created_by' => '019a7aac-7158-7107-94ed-a0ac2a3609d0']);
        } catch (Exception $e) {

            Log::error("Error when seeding Users : " . $e->getMessage());
            //continue;

        }

    }
}
