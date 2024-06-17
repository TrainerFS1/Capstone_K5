<?php

namespace Faker\Provider\pl_PL;

use Faker\Provider\Base;

/**
 * Generator of Polish vehicle registration numbers.
<<<<<<< HEAD
 * {@link} https://isap.sejm.gov.pl/isap.nsf/DocDetails.xsp?id=WDU20220001847
=======
 * {@link} http://prawo.sejm.gov.pl/isap.nsf/DocDetails.xsp?id=WDU20170002355
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 * {@link} https://pl.wikipedia.org/wiki/Tablice_rejestracyjne_w_Polsce#Tablice_standardowe
 */
class LicensePlate extends Base
{
    /**
     * @var array list of Polish voivodeships and respective vehicle registration number prefixes.
     */
    protected static $voivodeships = [
<<<<<<< HEAD
        'dolnośląskie' => ['D', 'V'],
        'kujawsko-pomorskie' => ['C'],
        'lubelskie' => ['L'],
        'lubuskie' => ['F'],
        'łódzkie' => ['E'],
        'małopolskie' => ['K', 'J'],
        'mazowieckie' => ['W', 'A'],
        'opolskie' => ['O'],
        'podkarpackie' => ['R', 'Y'],
        'podlaskie' => ['B'],
        'pomorskie' => ['G', 'X'],
        'śląskie' => ['S', 'I'],
        'świętokrzyskie' => ['T'],
        'warmińsko-mazurskie' => ['N'],
        'wielkopolskie' => ['P', 'M'],
        'zachodniopomorskie' => ['Z'],
=======
        'dolnośląskie' => 'D',
        'kujawsko-pomorskie' => 'C',
        'lubelskie' => 'L',
        'lubuskie' => 'F',
        'łódzkie' => 'E',
        'małopolskie' => 'K',
        'mazowieckie' => 'W',
        'opolskie' => 'O',
        'podkarpackie' => 'R',
        'podlaskie' => 'B',
        'pomorskie' => 'G',
        'śląskie' => 'S',
        'świętokrzyskie' => 'T',
        'warmińsko-mazurskie' => 'N',
        'wielkopolskie' => 'P',
        'zachodniopomorskie' => 'Z',
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    ];

    /**
     * @var array list of special vehicle registration number prefixes.
     */
    protected static $specials = [
<<<<<<< HEAD
        'army' => ['U'],
        'services' => ['H'],
=======
        'army' => 'U',
        'services' => 'H',
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    ];

    /**
     * @var array list of Polish counties and respective vehicle registration number prefixes.
     */
    protected static $counties = [
<<<<<<< HEAD
        'dolnośląskie' => [
=======
        'D' => [
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'Jelenia Góra' => ['J'],
            'Legnica' => ['L'],
            'Wałbrzych' => ['B'],
            'Wrocław' => ['W', 'X'],
            'bolesławiecki' => ['BL'],
            'dzierżoniowski' => ['DZ'],
            'głogowski' => ['GL'],
            'górowski' => ['GR'],
            'jaworski' => ['JA'],
            'jeleniogórski' => ['JE'],
            'kamiennogórski' => ['KA'],
            'kłodzki' => ['KL'],
            'legnicki' => ['LE'],
            'lubański' => ['LB'],
            'lubiński' => ['LU'],
            'lwówecki' => ['LW'],
            'milicki' => ['MI'],
            'oleśnicki' => ['OL'],
            'oławski' => ['OA'],
            'polkowicki' => ['PL'],
            'strzeliński' => ['ST'],
            'średzki' => ['SR'],
            'świdnicki' => ['SW'],
            'trzebnicki' => ['TR'],
            'wałbrzyski' => ['BA'],
            'wołowski' => ['WL'],
            'wrocławski' => ['WR'],
            'ząbkowicki' => ['ZA'],
            'zgorzelecki' => ['ZG'],
            'złotoryjski' => ['ZL'],
        ],
<<<<<<< HEAD
        'kujawsko-pomorskie' => [
=======
        'C' => [
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'Bydgoszcz' => ['B'],
            'Grudziądz' => ['G'],
            'Toruń' => ['T'],
            'Włocławek' => ['W'],
            'aleksandrowski' => ['AL'],
            'brodnicki' => ['BR'],
            'bydgoski' => ['BY'],
            'chełmiński' => ['CH'],
            'golubsko-dobrzyński' => ['GD'],
            'grudziądzki' => ['GR'],
            'inowrocławski' => ['IN'],
            'lipnowski' => ['LI'],
            'mogileński' => ['MG'],
            'nakielski' => ['NA'],
            'radziejowski' => ['RA'],
            'rypiński' => ['RY'],
            'sępoleński' => ['SE'],
            'świecki' => ['SW'],
            'toruński' => ['TR'],
            'tucholski' => ['TU'],
            'wąbrzeski' => ['WA'],
            'włocławski' => ['WL'],
            'żniński' => ['ZN'],
        ],
<<<<<<< HEAD
        'lubelskie' => [
=======
        'L' => [
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'Biała Podlaska' => ['B'],
            'Chełm' => ['C'],
            'Lublin' => ['U'],
            'Zamość' => ['Z'],
            'bialski' => ['BI'],
            'biłgorajski' => ['BL'],
            'chełmski' => ['CH'],
            'hrubieszowski' => ['HR'],
            'janowski' => ['JA'],
            'krasnostawski' => ['KS'],
            'kraśnicki' => ['KR'],
            'lubartowski' => ['LB'],
            'lubelski' => ['UB'],
            'łęczyński' => ['LE'],
            'łukowski' => ['LU'],
            'opolski' => ['OP'],
            'parczewski' => ['PA'],
            'puławski' => ['PU'],
            'radzyński' => ['RA'],
            'rycki' => ['RY'],
            'świdnicki' => ['SW'],
            'tomaszowski' => ['TM'],
            'włodawski' => ['WL'],
            'zamojski' => ['ZA'],
        ],
<<<<<<< HEAD
        'lubuskie' => [
=======
        'F' => [
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'Gorzów Wielkopolski' => ['G'],
            'Zielona Góra' => ['Z'],
            'gorzowski' => ['GW'],
            'krośnieński' => ['KR'],
            'międzyrzecki' => ['MI'],
            'nowosolski' => ['NW'],
            'słubicki' => ['SL'],
            'strzelecko-drezdenecki' => ['SD'],
            'sulęciński' => ['SU'],
            'świebodziński' => ['SW'],
            'wschowski' => ['WS'],
            'zielonogórski' => ['ZI'],
            'żagański' => ['ZG'],
            'żarski' => ['ZA'],
        ],
<<<<<<< HEAD
        'łódzkie' => [
            'Łódź' => ['L', 'D'],
=======
        'E' => [
            'Łódź' => ['L'],
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'Piotrków Trybunalski' => ['P'],
            'Skierniewice' => ['S'],
            'brzeziński' => ['BR'],
            'bełchatowski' => ['BE'],
            'kutnowski' => ['KU'],
            'łaski' => ['LA'],
            'łęczycki' => ['LE'],
            'łowicki' => ['LC'],
            'łódzki wschodni' => ['LW'],
            'opoczyński' => ['OP'],
            'pabianicki' => ['PA'],
            'pajęczański' => ['PJ'],
            'piotrkowski' => ['PI'],
            'poddębicki' => ['PD'],
            'radomszczański' => ['RA'],
            'rawski' => ['RW'],
            'sieradzki' => ['SI'],
            'skierniewicki' => ['SK'],
            'tomaszowski' => ['TM'],
            'wieluński' => ['WI'],
            'wieruszowski' => ['WE'],
            'zduńskowolski' => ['ZD'],
            'zgierski' => ['ZG'],
        ],
<<<<<<< HEAD
        'małopolskie' => [
            'Kraków' => ['R', 'K'],
=======
        'K' => [
            'Kraków' => ['R'],
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'Nowy Sącz' => ['N'],
            'Tarnów' => ['T'],
            'bocheński' => ['BA', 'BC'],
            'brzeski' => ['BR'],
            'chrzanowski' => ['CH'],
            'dąbrowski' => ['DA'],
            'gorlicki' => ['GR'],
<<<<<<< HEAD
            'krakowski' => ['RA', 'RK'],
=======
            'krakowski' => ['RA'],
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'limanowski' => ['LI'],
            'miechowski' => ['MI'],
            'myślenicki' => ['MY'],
            'nowosądecki' => ['NS'],
            'nowotarski' => ['NT'],
            'olkuski' => ['OL'],
            'oświęcimski' => ['OS'],
            'proszowicki' => ['PR'],
            'suski' => ['SU'],
            'tarnowski' => ['TA'],
            'tatrzański' => ['TT'],
            'wadowicki' => ['WA'],
            'wielicki' => ['WI'],
        ],
<<<<<<< HEAD
        'mazowieckie' => [
=======
        'W' => [
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'Ostrołęka' => ['O'],
            'Płock' => ['P'],
            'Radom' => ['R'],
            'Siedlce' => ['S'],
            'białobrzeski' => ['BR'],
            'ciechanowski' => ['CI'],
            'garwoliński' => ['G'],
            'gostyniński' => ['GS'],
            'grodziski' => ['GM'],
            'grójecki' => ['GR'],
            'kozienicki' => ['KZ'],
            'legionowski' => ['L'],
            'lipski' => ['LI'],
            'łosicki' => ['LS'],
            'makowski' => ['MA'],
            'miński' => ['M'],
            'mławski' => ['ML'],
            'nowodworski' => ['ND'],
            'ostrołęcki' => ['OS'],
            'ostrowski' => ['OR'],
            'otwocki' => ['OT'],
<<<<<<< HEAD
            'piaseczyński' => ['PA', 'PI', 'PW', 'PX'],
=======
            'piaseczyński' => ['PA', 'PI'],
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'płocki' => ['PL'],
            'płoński' => ['PN'],
            'pruszkowski' => ['PP', 'PR', 'PS'],
            'przasnyski' => ['PZ'],
            'przysuski' => ['PY'],
            'pułtuski' => ['PU'],
            'radomski' => ['RA'],
            'siedlecki' => ['SI'],
            'sierpecki' => ['SE'],
            'sochaczewski' => ['SC'],
            'sokołowski' => ['SK'],
            'szydłowiecki' => ['SZ'],
            'warszawski' => ['A', 'B', 'D', 'E', 'F', 'H', 'I', 'J', 'K', 'N', 'T', 'U', 'W', 'X', 'Y'],
            'warszawski zachodni' => ['Z'],
            'węgrowski' => ['WE'],
            'wołomiński' => ['WL', 'V'],
            'wyszkowski' => ['WY'],
            'zwoleński' => ['ZW'],
            'żuromiński' => ['ZU'],
            'żyrardowski' => ['ZY'],
        ],
<<<<<<< HEAD
        'opolskie' => [
=======
        'O' => [
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'Opole' => ['P'],
            'brzeski' => ['B'],
            'głubczycki' => ['GL'],
            'kędzierzyńsko-kozielski' => ['K'],
            'kluczborski' => ['KL'],
            'krapkowicki' => ['KR'],
            'namysłowski' => ['NA'],
            'nyski' => ['NY'],
            'oleski' => ['OL'],
            'opolski' => ['PO'],
            'prudnicki' => ['PR'],
            'strzelecki' => ['ST'],
        ],
<<<<<<< HEAD
        'podkarpackie' => [
=======
        'R' => [
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'Krosno' => ['K'],
            'Przemyśl' => ['P'],
            'Rzeszów' => ['Z'],
            'Tarnobrzeg' => ['T'],
            'bieszczadzki' => ['BI'],
            'brzozowski' => ['BR'],
            'dębicki' => ['DE'],
            'jarosławski' => ['JA'],
            'jasielski' => ['JS'],
            'kolbuszowski' => ['KL'],
            'krośnieński' => ['KR'],
            'leski' => ['LS'],
            'leżajski' => ['LE'],
            'lubaczowski' => ['LU'],
            'łańcucki' => ['LA'],
            'mielecki' => ['MI'],
            'niżański' => ['NI'],
            'przemyski' => ['PR'],
            'przeworski' => ['PZ'],
            'ropczycko-sędziszowski' => ['RS'],
<<<<<<< HEAD
            'rzeszowski' => ['ZE', 'ZR', 'ZZ'],
=======
            'rzeszowski' => ['ZE'],
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'sanocki' => ['SA'],
            'stalowowolski' => ['ST'],
            'strzyżowski' => ['SR'],
            'tarnobrzeski' => ['TA'],
        ],
<<<<<<< HEAD
        'podlaskie' => [
=======
        'B' => [
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'Białystok' => ['I'],
            'Łomża' => ['L'],
            'Suwałki' => ['S'],
            'augustowski' => ['AU'],
<<<<<<< HEAD
            'białostocki' => ['IA', 'IB'],
=======
            'białostocki' => ['IA'],
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'bielski' => ['BI'],
            'grajewski' => ['GR'],
            'hajnowski' => ['HA'],
            'kolneński' => ['KL'],
            'łomżyński' => ['LM'],
            'moniecki' => ['MN'],
            'sejneński' => ['SE'],
            'siemiatycki' => ['SI'],
            'sokólski' => ['SK'],
            'suwalski' => ['SU'],
            'wysokomazowiecki' => ['WM'],
            'zambrowski' => ['ZA'],
        ],
<<<<<<< HEAD
        'pomorskie' => [
=======
        'G' => [
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'Gdańsk' => ['D'],
            'Gdynia' => ['A'],
            'Słupsk' => ['S'],
            'Sopot' => ['SP'],
            'bytowski' => ['BY'],
            'chojnicki' => ['CH'],
            'człuchowski' => ['CZ'],
            'gdański' => ['DA'],
<<<<<<< HEAD
            'kartuski' => ['KA', 'KY', 'KZ'],
=======
            'kartuski' => ['KY', 'KA'],
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'kościerski' => ['KS'],
            'kwidzyński' => ['KW'],
            'lęborski' => ['LE'],
            'malborski' => ['MB'],
            'nowodworski' => ['ND'],
            'pucki' => ['PU'],
            'słupski' => ['SL'],
            'starogardzki' => ['ST'],
            'sztumski' => ['SZ'],
            'tczewski' => ['TC'],
            'wejherowski' => ['WE', 'WO'],
        ],
<<<<<<< HEAD
        'śląskie' => [
=======
        'S' => [
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'Bielsko-Biała' => ['B'],
            'Bytom' => ['Y'],
            'Chorzów' => ['H'],
            'Częstochowa' => ['C'],
            'Dąbrowa Górnicza' => ['D'],
            'Gliwice' => ['G'],
            'Jastrzębie-Zdrój' => ['JZ'],
            'Jaworzno' => ['J'],
            'Katowice' => ['K'],
            'Mysłowice' => ['M'],
            'Piekary Śląskie' => ['PI'],
            'Ruda Śląska,' => ['L', 'RS'],
            'Rybnik' => ['R'],
            'Siemianowice Śląskie' => ['I'],
            'Sosnowiec' => ['O'],
            'Świętochłowice' => ['W'],
            'Tychy' => ['T'],
            'Zabrze' => ['Z'],
            'Żory' => ['ZO'],
<<<<<<< HEAD
            'będziński' => ['BE', 'BN', 'E'],
            'bielski' => ['BI'],
            'cieszyński' => ['CI', 'CN'],
=======
            'będziński' => ['BE'],
            'bielski' => ['BI'],
            'cieszyński' => ['CN', 'CI'],
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'częstochowski' => ['CZ'],
            'gliwicki' => ['GL'],
            'kłobucki' => ['KL'],
            'lubliniecki' => ['LU'],
            'mikołowski' => ['MI'],
            'myszkowski' => ['MY'],
            'pszczyński' => ['PS'],
            'raciborski' => ['RC'],
            'rybnicki' => ['RB'],
            'tarnogórski' => ['TA'],
            'bieruńsko - lędziński' => ['BL'],
            'wodzisławski' => ['WD', 'WZ'],
            'zawierciański' => ['ZA'],
            'żywiecki' => ['ZY'],
        ],
<<<<<<< HEAD
        'świętokrzyskie' => [
=======
        'T' => [
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'Kielce' => ['K'],
            'buski' => ['BU'],
            'jędrzejowski' => ['JE'],
            'kazimierski' => ['KA'],
            'kielecki' => ['KI'],
            'konecki' => ['KN'],
            'opatowski' => ['OP'],
            'ostrowiecki' => ['OS'],
            'pińczowski' => ['PI'],
            'sandomierski' => ['SA'],
            'skarżyski' => ['SK'],
            'starachowicki' => ['ST'],
            'staszowski' => ['SZ'],
            'włoszczowski' => ['LW'],
        ],
<<<<<<< HEAD
        'warmińsko-mazurskie' => [
=======
        'N' => [
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'Elbląg' => ['E'],
            'Olsztyn' => ['O'],
            'bartoszycki' => ['BA'],
            'braniewski' => ['BR'],
            'działdowski' => ['DZ'],
            'elbląski' => ['EB'],
            'ełcki' => ['EL'],
            'giżycki' => ['GI'],
            'iławski' => ['IL'],
            'kętrzyński' => ['KE'],
            'lidzbarski' => ['LI'],
            'mrągowski' => ['MR'],
            'nidzicki' => ['NI'],
            'nowomiejski' => ['NM'],
            'olecki' => ['OE'],
            'gołdapski' => ['GO'],
            'olsztyński' => ['OL'],
            'ostródzki' => ['OS'],
            'piski' => ['PI'],
            'szczycieński' => ['SZ'],
            'węgorzewski' => ['WE'],
        ],
<<<<<<< HEAD
        'wielkopolskie' => [
=======
        'P' => [
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'Kalisz' => ['A', 'K'],
            'Konin' => ['KO', 'N'],
            'Leszno' => ['L'],
            'Poznań' => ['O', 'Y'],
            'chodzieski' => ['CH'],
            'czarnkowsko-trzcianecki' => ['CT'],
            'gnieźnieński' => ['GN'],
            'gostyński' => ['GS'],
            'grodziski' => ['GO'],
            'jarociński' => ['JA'],
            'kaliski' => ['KA'],
            'kępiński' => ['KE'],
            'kolski' => ['KL'],
            'koniński' => ['KN'],
            'kościański' => ['KS'],
            'krotoszyński' => ['KR'],
            'leszczyński' => ['LE'],
            'międzychodzki' => ['MI'],
            'nowotomyski' => ['NT'],
            'obornicki' => ['OB'],
            'ostrowski' => ['OS'],
            'ostrzeszowski' => ['OT'],
            'pilski' => ['P'],
            'pleszewski' => ['PL'],
            'poznański' => ['OZ', 'Z'],
            'rawicki' => ['RA'],
            'słupecki' => ['SL'],
            'szamotulski' => ['SZ'],
            'średzki' => ['SR'],
            'śremski' => ['SE'],
            'turecki' => ['TU'],
            'wągrowiecki' => ['WA'],
            'wolsztyński' => ['WL'],
            'wrzesiński' => ['WR'],
            'złotowski' => ['ZL'],
        ],
<<<<<<< HEAD
        'zachodniopomorskie' => [
=======
        'Z' => [
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'Koszalin' => ['K'],
            'Szczecin' => ['S', 'Z'],
            'Świnoujście' => ['SW'],
            'białogardzki' => ['BI'],
            'choszczeński' => ['CH'],
            'drawski' => ['DR'],
            'goleniowski' => ['GL'],
            'gryficki' => ['GY'],
            'gryfiński' => ['GR'],
            'kamieński' => ['KA'],
            'kołobrzeski' => ['KL'],
            'koszaliński' => ['KO'],
            'łobeski' => ['LO'],
            'myśliborski' => ['MY'],
            'policki' => ['PL'],
            'pyrzycki' => ['PY'],
            'sławieński' => ['SL'],
            'stargardzki' => ['ST'],
            'szczecinecki' => ['SZ'],
            'świdwiński' => ['SD'],
            'wałecki' => ['WA'],
        ],
<<<<<<< HEAD
        'army' => [
            'Siły Zbrojne Rzeczypospolitej Polskiej' => ['A', 'B', 'C', 'D', 'E', 'G', 'I', 'J', 'K', 'L'],
        ],
        'services' => [
=======
        'U' => [
            'Siły Zbrojne Rzeczypospolitej Polskiej' => ['A', 'B', 'C', 'D', 'E', 'G', 'I', 'J', 'K', 'L'],
        ],
        'H' => [
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'Centralne Biuro Antykorupcyjne' => ['A'],
            'Służba Ochrony Państwa' => ['BA', 'BB', 'BE', 'BF', 'BG'],
            'Służba Celno-Skarbowa' => ['CA', 'CB', 'CC', 'CD', 'CE', 'CF', 'CG', 'CH', 'CJ', 'CK', 'CL', 'CM', 'CN', 'CO', 'CP', 'CR'],
            'Agencja Bezpieczeństwa Wewnętrznego' => ['K'],
            'Agencja Wywiadu' => ['K'],
            'Służba Kontrwywiadu Wojskowego' => ['M'],
            'Służba Wywiadu Wojskowego' => ['M'],
            'Policja' => ['PA', 'PB', 'PC', 'PD', 'PE', 'PF', 'PG', 'PH', 'PJ', 'PK', 'PL', 'PL', 'PL', 'PL', 'PL', 'PM', 'PN', 'PP', 'PS', 'PT', 'PU', 'PW', 'PZ'],
            'Straż Graniczna' => ['WA', 'WK'],
        ],
    ];

    /**
     * @var array list of regex expressions matching Polish license plate suffixess when county code is 1 character long.
     */
    protected static $plateSuffixesGroup1 = [
        '\d{5}',
        '\d{4}[A-PR-Z]',
        '\d{3}[A-PR-Z]{2}',
        '[1-9][A-PR-Z]\d{3}',
        '[1-9][A-PR-Z]{2}\d{2}',
    ];

    /**
     * @var array list of regex expressions matching Polish license plate suffixess when county code is 2 characters long.
     */
    protected static $plateSuffixesGroup2 = [
        '[A-PR-Z]\d{3}',
        '\d{2}[A-PR-Z]{2}',
        '[1-9][A-PR-Z]\d{2}',
        '\d{2}[A-PR-Z][1-9]',
        '[1-9][A-PR-Z]{2}[1-9]',
        '[A-PR-Z]{2}\d{2}',
        '\d{5}',
        '\d{4}[A-PR-Z]',
        '\d{3}[A-PR-Z]{2}',
        '[A-PR-Z]\d{2}[A-PR-Z]',
        '[A-PR-Z][1-9][A-PR-Z]{2}',
    ];

    /**
     * Generates random license plate.
     *
     * @param bool       $special      whether special license plates should be included
     * @param array|null $voivodeships list of voivodeships license plate should be generated from
     * @param array|null $counties     list of counties license plate should be generated from
     */
    public static function licensePlate(
        bool $special = false,
        ?array $voivodeships = null,
        ?array $counties = null
    ): string {
        $voivodeshipsAvailable = static::$voivodeships + ($special ? static::$specials : []);
<<<<<<< HEAD
        $voivodeshipSelected = static::selectRandomArea($voivodeshipsAvailable, $voivodeships);
        $voivodeshipCode = static::randomElement($voivodeshipsAvailable[$voivodeshipSelected]);

        $countiesAvailable = static::$counties[$voivodeshipSelected];
        $countySelected = self::selectRandomArea($countiesAvailable, $counties);

        $countyCode = static::randomElement(static::$counties[$voivodeshipSelected][$countySelected]);
=======
        $voivodeshipCode = static::selectRandomArea($voivodeshipsAvailable, $voivodeships);

        $countiesAvailable = static::$counties[$voivodeshipCode];
        $countySelected = self::selectRandomArea($countiesAvailable, $counties);

        $countyCode = static::randomElement($countySelected);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        $suffix = static::regexify(static::randomElement(strlen($countyCode) === 1 ? static::$plateSuffixesGroup1 : static::$plateSuffixesGroup2));

        return "{$voivodeshipCode}{$countyCode} {$suffix}";
    }

    /**
     * Selects random area from the list of available and requested.
<<<<<<< HEAD
     *
     * @return string
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    protected static function selectRandomArea(array $available, ?array $requested)
    {
        $requested = array_intersect(array_keys($available), $requested ?? []);

        if (empty($requested)) {
            $requested = array_keys($available);
        }

<<<<<<< HEAD
        return static::randomElement($requested);
=======
        return $available[static::randomElement($requested)];
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
