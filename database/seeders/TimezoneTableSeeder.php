<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateTableSeeder extends Seeder
{
    public function run()
    {
        foreach($this->timezone() as $timezone) {
            DB::table(config('CountryStateCity.migrations.timezones.table_name'))->insert([
                "id"                => $timezone['id'],
                "zoneName"          => $timezone['zoneName'],
                "country_id"        => $timezone['country_id'],
                "gmtOffset"         => $timezone['gmtOffset'],
                "gmtOffsetName"     => $timezone['gmtOffsetName'],
                "abbreviation"      => $timezone['abbreviation'],
                "tzName"            => $timezone['tzName'],
                "created_at"        => now()
            ]);
        }
    }

    private function timezone(){
        return $timezone = [
            [
                [
                  "country_id"=> 1,
                  "zoneName"=> "Asia/Kabul",
                  "gmtOffset"=> 16200,
                  "gmtOffsetName"=> "UTC+04=>30",
                  "abbreviation"=> "AFT",
                  "tzName"=> "Afghanistan Time"
                ],
                [
                  "country_id"=> 2,
                  "zoneName"=> "Europe/Mariehamn",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "EET",
                  "tzName"=> "Eastern European Time"
                ],
                [
                  "country_id"=> 3,
                  "zoneName"=> "Europe/Tirane",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 4,
                  "zoneName"=> "Africa/Algiers",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 5,
                  "zoneName"=> "Pacific/Pago_Pago",
                  "gmtOffset"=> -39600,
                  "gmtOffsetName"=> "UTC-11=>00",
                  "abbreviation"=> "SST",
                  "tzName"=> "Samoa Standard Time"
                ],
                [
                  "country_id"=> 6,
                  "zoneName"=> "Europe/Andorra",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 7,
                  "zoneName"=> "Africa/Luanda",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "WAT",
                  "tzName"=> "West Africa Time"
                ],
                [
                  "country_id"=> 8,
                  "zoneName"=> "America/Anguilla",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 9,
                  "zoneName"=> "Antarctica/Casey",
                  "gmtOffset"=> 39600,
                  "gmtOffsetName"=> "UTC+11=>00",
                  "abbreviation"=> "AWST",
                  "tzName"=> "Australian Western Standard Time"
                ],
                [
                  "country_id"=> 9,
                  "zoneName"=> "Antarctica/Davis",
                  "gmtOffset"=> 25200,
                  "gmtOffsetName"=> "UTC+07=>00",
                  "abbreviation"=> "DAVT",
                  "tzName"=> "Davis Time"
                ],
                [
                  "country_id"=> 9,
                  "zoneName"=> "Antarctica/DumontDUrville",
                  "gmtOffset"=> 36000,
                  "gmtOffsetName"=> "UTC+10=>00",
                  "abbreviation"=> "DDUT",
                  "tzName"=> "Dumont d'Urville Time"
                ],
                [
                  "country_id"=> 9,
                  "zoneName"=> "Antarctica/Mawson",
                  "gmtOffset"=> 18000,
                  "gmtOffsetName"=> "UTC+05=>00",
                  "abbreviation"=> "MAWT",
                  "tzName"=> "Mawson Station Time"
                ],
                [
                  "country_id"=> 9,
                  "zoneName"=> "Antarctica/McMurdo",
                  "gmtOffset"=> 46800,
                  "gmtOffsetName"=> "UTC+13=>00",
                  "abbreviation"=> "NZDT",
                  "tzName"=> "New Zealand Daylight Time"
                ],
                [
                  "country_id"=> 9,
                  "zoneName"=> "Antarctica/Palmer",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "CLST",
                  "tzName"=> "Chile Summer Time"
                ],
                [
                  "country_id"=> 9,
                  "zoneName"=> "Antarctica/Rothera",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "ROTT",
                  "tzName"=> "Rothera Research Station Time"
                ],
                [
                  "country_id"=> 9,
                  "zoneName"=> "Antarctica/Syowa",
                  "gmtOffset"=> 10800,
                  "gmtOffsetName"=> "UTC+03=>00",
                  "abbreviation"=> "SYOT",
                  "tzName"=> "Showa Station Time"
                ],
                [
                  "country_id"=> 9,
                  "zoneName"=> "Antarctica/Troll",
                  "gmtOffset"=> 0,
                  "gmtOffsetName"=> "UTC±00",
                  "abbreviation"=> "GMT",
                  "tzName"=> "Greenwich Mean Time"
                ],
                [
                  "country_id"=> 9,
                  "zoneName"=> "Antarctica/Vostok",
                  "gmtOffset"=> 21600,
                  "gmtOffsetName"=> "UTC+06=>00",
                  "abbreviation"=> "VOST",
                  "tzName"=> "Vostok Station Time"
                ],
                [
                  "country_id"=> 9,
                  "zoneName"=> "America/Antigua",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 11,
                  "zoneName"=> "America/Argentina/Buenos_Aires",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "ART",
                  "tzName"=> "Argentina Time"
                ],
                [
                  "country_id"=> 11,
                  "zoneName"=> "America/Argentina/Catamarca",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "ART",
                  "tzName"=> "Argentina Time"
                ],
                [
                  "country_id"=> 11,
                  "zoneName"=> "America/Argentina/Cordoba",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "ART",
                  "tzName"=> "Argentina Time"
                ],
                [
                  "country_id"=> 11,
                  "zoneName"=> "America/Argentina/Jujuy",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "ART",
                  "tzName"=> "Argentina Time"
                ],
                [
                  "country_id"=> 11,
                  "zoneName"=> "America/Argentina/La_Rioja",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "ART",
                  "tzName"=> "Argentina Time"
                ],
                [
                  "country_id"=> 11,
                  "zoneName"=> "America/Argentina/Mendoza",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "ART",
                  "tzName"=> "Argentina Time"
                ],
                [
                  "country_id"=> 11,
                  "zoneName"=> "America/Argentina/Rio_Gallegos",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "ART",
                  "tzName"=> "Argentina Time"
                ],
                [
                  "country_id"=> 11,
                  "zoneName"=> "America/Argentina/Salta",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "ART",
                  "tzName"=> "Argentina Time"
                ],
                [
                  "country_id"=> 11,
                  "zoneName"=> "America/Argentina/San_Juan",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "ART",
                  "tzName"=> "Argentina Time"
                ],
                [
                  "country_id"=> 11,
                  "zoneName"=> "America/Argentina/San_Luis",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "ART",
                  "tzName"=> "Argentina Time"
                ],
                [
                  "country_id"=> 11,
                  "zoneName"=> "America/Argentina/Tucuman",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "ART",
                  "tzName"=> "Argentina Time"
                ],
                [
                  "country_id"=> 11,
                  "zoneName"=> "America/Argentina/Ushuaia",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "ART",
                  "tzName"=> "Argentina Time"
                ],
                [
                  "country_id"=> 12,
                  "zoneName"=> "Asia/Yerevan",
                  "gmtOffset"=> 14400,
                  "gmtOffsetName"=> "UTC+04=>00",
                  "abbreviation"=> "AMT",
                  "tzName"=> "Armenia Time"
                ],
                [
                  "country_id"=> 13,
                  "zoneName"=> "America/Aruba",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 14,
                  "zoneName"=> "Antarctica/Macquarie",
                  "gmtOffset"=> 39600,
                  "gmtOffsetName"=> "UTC+11=>00",
                  "abbreviation"=> "MIST",
                  "tzName"=> "Macquarie Island Station Time"
                ],
                [
                  "country_id"=> 14,
                  "zoneName"=> "Australia/Adelaide",
                  "gmtOffset"=> 37800,
                  "gmtOffsetName"=> "UTC+10=>30",
                  "abbreviation"=> "ACDT",
                  "tzName"=> "Australian Central Daylight Saving Time"
                ],
                [
                  "country_id"=> 14,
                  "zoneName"=> "Australia/Brisbane",
                  "gmtOffset"=> 36000,
                  "gmtOffsetName"=> "UTC+10=>00",
                  "abbreviation"=> "AEST",
                  "tzName"=> "Australian Eastern Standard Time"
                ],
                [
                  "country_id"=> 14,
                  "zoneName"=> "Australia/Broken_Hill",
                  "gmtOffset"=> 37800,
                  "gmtOffsetName"=> "UTC+10=>30",
                  "abbreviation"=> "ACDT",
                  "tzName"=> "Australian Central Daylight Saving Time"
                ],
                [
                  "country_id"=> 14,
                  "zoneName"=> "Australia/Currie",
                  "gmtOffset"=> 39600,
                  "gmtOffsetName"=> "UTC+11=>00",
                  "abbreviation"=> "AEDT",
                  "tzName"=> "Australian Eastern Daylight Saving Time"
                ],
                [
                  "country_id"=> 14,
                  "zoneName"=> "Australia/Darwin",
                  "gmtOffset"=> 34200,
                  "gmtOffsetName"=> "UTC+09=>30",
                  "abbreviation"=> "ACST",
                  "tzName"=> "Australian Central Standard Time"
                ],
                [
                  "country_id"=> 14,
                  "zoneName"=> "Australia/Eucla",
                  "gmtOffset"=> 31500,
                  "gmtOffsetName"=> "UTC+08=>45",
                  "abbreviation"=> "ACWST",
                  "tzName"=> "Australian Central Western Standard Time (Unofficial)"
                ],
                [
                  "country_id"=> 14,
                  "zoneName"=> "Australia/Hobart",
                  "gmtOffset"=> 39600,
                  "gmtOffsetName"=> "UTC+11=>00",
                  "abbreviation"=> "AEDT",
                  "tzName"=> "Australian Eastern Daylight Saving Time"
                ],
                [
                  "country_id"=> 14,
                  "zoneName"=> "Australia/Lindeman",
                  "gmtOffset"=> 36000,
                  "gmtOffsetName"=> "UTC+10=>00",
                  "abbreviation"=> "AEST",
                  "tzName"=> "Australian Eastern Standard Time"
                ],
                [
                  "country_id"=> 14,
                  "zoneName"=> "Australia/Lord_Howe",
                  "gmtOffset"=> 39600,
                  "gmtOffsetName"=> "UTC+11=>00",
                  "abbreviation"=> "LHST",
                  "tzName"=> "Lord Howe Summer Time"
                ],
                [
                  "country_id"=> 14,
                  "zoneName"=> "Australia/Melbourne",
                  "gmtOffset"=> 39600,
                  "gmtOffsetName"=> "UTC+11=>00",
                  "abbreviation"=> "AEDT",
                  "tzName"=> "Australian Eastern Daylight Saving Time"
                ],
                [
                  "country_id"=> 14,
                  "zoneName"=> "Australia/Perth",
                  "gmtOffset"=> 28800,
                  "gmtOffsetName"=> "UTC+08=>00",
                  "abbreviation"=> "AWST",
                  "tzName"=> "Australian Western Standard Time"
                ],
                [
                  "country_id"=> 14,
                  "zoneName"=> "Australia/Sydney",
                  "gmtOffset"=> 39600,
                  "gmtOffsetName"=> "UTC+11=>00",
                  "abbreviation"=> "AEDT",
                  "tzName"=> "Australian Eastern Daylight Saving Time"
                ],
                [
                  "country_id"=> 15,
                  "zoneName"=> "Europe/Vienna",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 16,
                  "zoneName"=> "Asia/Baku",
                  "gmtOffset"=> 14400,
                  "gmtOffsetName"=> "UTC+04=>00",
                  "abbreviation"=> "AZT",
                  "tzName"=> "Azerbaijan Time"
                ],
                [
                  "country_id"=> 17,
                  "zoneName"=> "America/Nassau",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "EST",
                  "tzName"=> "Eastern Standard Time (North America)"
                ],
                [
                  "country_id"=> 18,
                  "zoneName"=> "Asia/Bahrain",
                  "gmtOffset"=> 10800,
                  "gmtOffsetName"=> "UTC+03=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Arabia Standard Time"
                ],
                [
                  "country_id"=> 19,
                  "zoneName"=> "Asia/Dhaka",
                  "gmtOffset"=> 21600,
                  "gmtOffsetName"=> "UTC+06=>00",
                  "abbreviation"=> "BDT",
                  "tzName"=> "Bangladesh Standard Time"
                ],
                [
                  "country_id"=> 20,
                  "zoneName"=> "America/Barbados",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 21,
                  "zoneName"=> "Europe/Minsk",
                  "gmtOffset"=> 10800,
                  "gmtOffsetName"=> "UTC+03=>00",
                  "abbreviation"=> "MSK",
                  "tzName"=> "Moscow Time"
                ],
                [
                  "country_id"=> 22,
                  "zoneName"=> "Europe/Brussels",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 23,
                  "zoneName"=> "America/Belize",
                  "gmtOffset"=> -21600,
                  "gmtOffsetName"=> "UTC-06=>00",
                  "abbreviation"=> "CST",
                  "tzName"=> "Central Standard Time (North America)"
                ],
                [
                  "country_id"=> 24,
                  "zoneName"=> "Africa/Porto-Novo",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "WAT",
                  "tzName"=> "West Africa Time"
                ],
                [
                  "country_id"=> 25,
                  "zoneName"=> "Atlantic/Bermuda",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 26,
                  "zoneName"=> "Asia/Thimphu",
                  "gmtOffset"=> 21600,
                  "gmtOffsetName"=> "UTC+06=>00",
                  "abbreviation"=> "BTT",
                  "tzName"=> "Bhutan Time"
                ],
                [
                  "country_id"=> 27,
                  "zoneName"=> "America/La_Paz",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "BOT",
                  "tzName"=> "Bolivia Time"
                ],
                [
                  "country_id"=> 155,
                  "zoneName"=> "America/Anguilla",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 28,
                  "zoneName"=> "Europe/Sarajevo",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 29,
                  "zoneName"=> "Africa/Gaborone",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "CAT",
                  "tzName"=> "Central Africa Time"
                ],
                [
                  "country_id"=> 30,
                  "zoneName"=> "Europe/Oslo",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 31,
                  "zoneName"=> "America/Araguaina",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "BRT",
                  "tzName"=> "Brasília Time"
                ],
                [
                  "country_id"=> 31,
                  "zoneName"=> "America/Bahia",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "BRT",
                  "tzName"=> "Brasília Time"
                ],
                [
                  "country_id"=> 31,
                  "zoneName"=> "America/Belem",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "BRT",
                  "tzName"=> "Brasília Time"
                ],
                [
                  "country_id"=> 31,
                  "zoneName"=> "America/Boa_Vista",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AMT",
                  "tzName"=> "Amazon Time (Brazil)[3"
                ],
                [
                  "country_id"=> 31,
                  "zoneName"=> "America/Campo_Grande",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AMT",
                  "tzName"=> "Amazon Time (Brazil)[3"
                ],
                [
                  "country_id"=> 31,
                  "zoneName"=> "America/Cuiaba",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "BRT",
                  "tzName"=> "Brasilia Time"
                ],
                [
                  "country_id"=> 31,
                  "zoneName"=> "America/Eirunepe",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "ACT",
                  "tzName"=> "Acre Time"
                ],
                [
                  "country_id"=> 31,
                  "zoneName"=> "America/Fortaleza",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "BRT",
                  "tzName"=> "Brasília Time"
                ],
                [
                  "country_id"=> 31,
                  "zoneName"=> "America/Maceio",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "BRT",
                  "tzName"=> "Brasília Time"
                ],
                [
                  "country_id"=> 31,
                  "zoneName"=> "America/Manaus",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AMT",
                  "tzName"=> "Amazon Time (Brazil)"
                ],
                [
                  "country_id"=> 31,
                  "zoneName"=> "America/Noronha",
                  "gmtOffset"=> -7200,
                  "gmtOffsetName"=> "UTC-02=>00",
                  "abbreviation"=> "FNT",
                  "tzName"=> "Fernando de Noronha Time"
                ],
                [
                  "country_id"=> 31,
                  "zoneName"=> "America/Porto_Velho",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AMT",
                  "tzName"=> "Amazon Time (Brazil)[3"
                ],
                [
                  "country_id"=> 31,
                  "zoneName"=> "America/Recife",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "BRT",
                  "tzName"=> "Brasília Time"
                ],
                [
                  "country_id"=> 31,
                  "zoneName"=> "America/Rio_Branco",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "ACT",
                  "tzName"=> "Acre Time"
                ],
                [
                  "country_id"=> 31,
                  "zoneName"=> "America/Santarem",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "BRT",
                  "tzName"=> "Brasília Time"
                ],
                [
                  "country_id"=> 31,
                  "zoneName"=> "America/Sao_Paulo",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "BRT",
                  "tzName"=> "Brasília Time"
                ],
                [
                  "country_id"=> 32,
                  "zoneName"=> "Indian/Chagos",
                  "gmtOffset"=> 21600,
                  "gmtOffsetName"=> "UTC+06=>00",
                  "abbreviation"=> "IOT",
                  "tzName"=> "Indian Ocean Time"
                ],
                [
                  "country_id"=> 33,
                  "zoneName"=> "Asia/Brunei",
                  "gmtOffset"=> 28800,
                  "gmtOffsetName"=> "UTC+08=>00",
                  "abbreviation"=> "BNT",
                  "tzName"=> "Brunei Darussalam Time"
                ],
                [
                  "country_id"=> 34,
                  "zoneName"=> "Europe/Sofia",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "EET",
                  "tzName"=> "Eastern European Time"
                ],
                [
                  "country_id"=> 35,
                  "zoneName"=> "Africa/Ouagadougou",
                  "gmtOffset"=> 0,
                  "gmtOffsetName"=> "UTC±00",
                  "abbreviation"=> "GMT",
                  "tzName"=> "Greenwich Mean Time"
                ],
                [
                  "country_id"=> 36,
                  "zoneName"=> "Africa/Bujumbura",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "CAT",
                  "tzName"=> "Central Africa Time"
                ],
                [
                  "country_id"=> 37,
                  "zoneName"=> "Asia/Phnom_Penh",
                  "gmtOffset"=> 25200,
                  "gmtOffsetName"=> "UTC+07=>00",
                  "abbreviation"=> "ICT",
                  "tzName"=> "Indochina Time"
                ],
                [
                  "country_id"=> 38,
                  "zoneName"=> "Africa/Douala",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "WAT",
                  "tzName"=> "West Africa Time"
                ],
                [
                  "country_id"=> 39,
                  "zoneName"=> "America/Atikokan",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "EST",
                  "tzName"=> "Eastern Standard Time (North America)"
                ],
                [
                  "country_id"=> 39,
                  "zoneName"=> "America/Blanc-Sablon",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 39,
                  "zoneName"=> "America/Cambridge_Bay",
                  "gmtOffset"=> -25200,
                  "gmtOffsetName"=> "UTC-07=>00",
                  "abbreviation"=> "MST",
                  "tzName"=> "Mountain Standard Time (North America)"
                ],
                [
                  "country_id"=> 39,
                  "zoneName"=> "America/Creston",
                  "gmtOffset"=> -25200,
                  "gmtOffsetName"=> "UTC-07=>00",
                  "abbreviation"=> "MST",
                  "tzName"=> "Mountain Standard Time (North America)"
                ],
                [
                  "country_id"=> 39,
                  "zoneName"=> "America/Dawson",
                  "gmtOffset"=> -25200,
                  "gmtOffsetName"=> "UTC-07=>00",
                  "abbreviation"=> "MST",
                  "tzName"=> "Mountain Standard Time (North America)"
                ],
                [
                  "country_id"=> 39,
                  "zoneName"=> "America/Dawson_Creek",
                  "gmtOffset"=> -25200,
                  "gmtOffsetName"=> "UTC-07=>00",
                  "abbreviation"=> "MST",
                  "tzName"=> "Mountain Standard Time (North America)"
                ],
                [
                  "country_id"=> 39,
                  "zoneName"=> "America/Edmonton",
                  "gmtOffset"=> -25200,
                  "gmtOffsetName"=> "UTC-07=>00",
                  "abbreviation"=> "MST",
                  "tzName"=> "Mountain Standard Time (North America)"
                ],
                [
                  "country_id"=> 39,
                  "zoneName"=> "America/Fort_Nelson",
                  "gmtOffset"=> -25200,
                  "gmtOffsetName"=> "UTC-07=>00",
                  "abbreviation"=> "MST",
                  "tzName"=> "Mountain Standard Time (North America)"
                ],
                [
                  "country_id"=> 39,
                  "zoneName"=> "America/Glace_Bay",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 39,
                  "zoneName"=> "America/Goose_Bay",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 39,
                  "zoneName"=> "America/Halifax",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 39,
                  "zoneName"=> "America/Inuvik",
                  "gmtOffset"=> -25200,
                  "gmtOffsetName"=> "UTC-07=>00",
                  "abbreviation"=> "MST",
                  "tzName"=> "Mountain Standard Time (North America"
                ],
                [
                  "country_id"=> 39,
                  "zoneName"=> "America/Iqaluit",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "EST",
                  "tzName"=> "Eastern Standard Time (North America"
                ],
                [
                  "country_id"=> 39,
                  "zoneName"=> "America/Moncton",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 39,
                  "zoneName"=> "America/Nipigon",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "EST",
                  "tzName"=> "Eastern Standard Time (North America"
                ],
                [
                  "country_id"=> 39,
                  "zoneName"=> "America/Pangnirtung",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "EST",
                  "tzName"=> "Eastern Standard Time (North America"
                ],
                [
                  "country_id"=> 39,
                  "zoneName"=> "America/Rainy_River",
                  "gmtOffset"=> -21600,
                  "gmtOffsetName"=> "UTC-06=>00",
                  "abbreviation"=> "CST",
                  "tzName"=> "Central Standard Time (North America"
                ],
                [
                  "country_id"=> 39,
                  "zoneName"=> "America/Rankin_Inlet",
                  "gmtOffset"=> -21600,
                  "gmtOffsetName"=> "UTC-06=>00",
                  "abbreviation"=> "CST",
                  "tzName"=> "Central Standard Time (North America"
                ],
                [
                  "country_id"=> 39,
                  "zoneName"=> "America/Regina",
                  "gmtOffset"=> -21600,
                  "gmtOffsetName"=> "UTC-06=>00",
                  "abbreviation"=> "CST",
                  "tzName"=> "Central Standard Time (North America"
                ],
                [
                  "country_id"=> 39,
                  "zoneName"=> "America/Resolute",
                  "gmtOffset"=> -21600,
                  "gmtOffsetName"=> "UTC-06=>00",
                  "abbreviation"=> "CST",
                  "tzName"=> "Central Standard Time (North America"
                ],
                [
                  "country_id"=> 39,
                  "zoneName"=> "America/St_Johns",
                  "gmtOffset"=> -12600,
                  "gmtOffsetName"=> "UTC-03=>30",
                  "abbreviation"=> "NST",
                  "tzName"=> "Newfoundland Standard Time"
                ],
                [
                  "country_id"=> 39,
                  "zoneName"=> "America/Swift_Current",
                  "gmtOffset"=> -21600,
                  "gmtOffsetName"=> "UTC-06=>00",
                  "abbreviation"=> "CST",
                  "tzName"=> "Central Standard Time (North America"
                ],
                [
                  "country_id"=> 39,
                  "zoneName"=> "America/Thunder_Bay",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "EST",
                  "tzName"=> "Eastern Standard Time (North America"
                ],
                [
                  "country_id"=> 39,
                  "zoneName"=> "America/Toronto",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "EST",
                  "tzName"=> "Eastern Standard Time (North America"
                ],
                [
                  "country_id"=> 39,
                  "zoneName"=> "America/Vancouver",
                  "gmtOffset"=> -28800,
                  "gmtOffsetName"=> "UTC-08=>00",
                  "abbreviation"=> "PST",
                  "tzName"=> "Pacific Standard Time (North America"
                ],
                [
                  "country_id"=> 39,
                  "zoneName"=> "America/Whitehorse",
                  "gmtOffset"=> -25200,
                  "gmtOffsetName"=> "UTC-07=>00",
                  "abbreviation"=> "MST",
                  "tzName"=> "Mountain Standard Time (North America"
                ],
                [
                  "country_id"=> 39,
                  "zoneName"=> "America/Winnipeg",
                  "gmtOffset"=> -21600,
                  "gmtOffsetName"=> "UTC-06=>00",
                  "abbreviation"=> "CST",
                  "tzName"=> "Central Standard Time (North America"
                ],
                [
                  "country_id"=> 39,
                  "zoneName"=> "America/Yellowknife",
                  "gmtOffset"=> -25200,
                  "gmtOffsetName"=> "UTC-07=>00",
                  "abbreviation"=> "MST",
                  "tzName"=> "Mountain Standard Time (North America"
                ],
                [
                  "country_id"=> 40,
                  "zoneName"=> "Atlantic/Cape_Verde",
                  "gmtOffset"=> -3600,
                  "gmtOffsetName"=> "UTC-01=>00",
                  "abbreviation"=> "CVT",
                  "tzName"=> "Cape Verde Time"
                ],
                [
                  "country_id"=> 41,
                  "zoneName"=> "America/Cayman",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "EST",
                  "tzName"=> "Eastern Standard Time (North America"
                ],
                [
                  "country_id"=> 42,
                  "zoneName"=> "Africa/Bangui",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "WAT",
                  "tzName"=> "West Africa Time"
                ],
                [
                  "country_id"=> 43,
                  "zoneName"=> "Africa/Ndjamena",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "WAT",
                  "tzName"=> "West Africa Time"
                ],
                [
                  "country_id"=> 44,
                  "zoneName"=> "America/Punta_Arenas",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "CLST",
                  "tzName"=> "Chile Summer Time"
                ],
                [
                  "country_id"=> 44,
                  "zoneName"=> "America/Santiago",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "CLST",
                  "tzName"=> "Chile Summer Time"
                ],
                [
                  "country_id"=> 44,
                  "zoneName"=> "Pacific/Easter",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "EASST",
                  "tzName"=> "Easter Island Summer Time"
                ],
                [
                  "country_id"=> 45,
                  "zoneName"=> "Asia/Shanghai",
                  "gmtOffset"=> 28800,
                  "gmtOffsetName"=> "UTC+08=>00",
                  "abbreviation"=> "CST",
                  "tzName"=> "China Standard Time"
                ],
                [
                  "country_id"=> 45,
                  "zoneName"=> "Asia/Urumqi",
                  "gmtOffset"=> 21600,
                  "gmtOffsetName"=> "UTC+06=>00",
                  "abbreviation"=> "XJT",
                  "tzName"=> "China Standard Time"
                ],
                [
                  "country_id"=> 46,
                  "zoneName"=> "Indian/Christmas",
                  "gmtOffset"=> 25200,
                  "gmtOffsetName"=> "UTC+07=>00",
                  "abbreviation"=> "CXT",
                  "tzName"=> "Christmas Island Time"
                ],
                [
                  "country_id"=> 47,
                  "zoneName"=> "Indian/Cocos",
                  "gmtOffset"=> 23400,
                  "gmtOffsetName"=> "UTC+06=>30",
                  "abbreviation"=> "CCT",
                  "tzName"=> "Cocos Islands Time"
                ],
                [
                  "country_id"=> 48,
                  "zoneName"=> "America/Bogota",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "COT",
                  "tzName"=> "Colombia Time"
                ],
                [
                  "country_id"=> 49,
                  "zoneName"=> "Indian/Comoro",
                  "gmtOffset"=> 10800,
                  "gmtOffsetName"=> "UTC+03=>00",
                  "abbreviation"=> "EAT",
                  "tzName"=> "East Africa Time"
                ],
                [
                  "country_id"=> 50,
                  "zoneName"=> "Africa/Brazzaville",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "WAT",
                  "tzName"=> "West Africa Time"
                ],
                [
                  "country_id"=> 51,
                  "zoneName"=> "Africa/Kinshasa",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "WAT",
                  "tzName"=> "West Africa Time"
                ],
                [
                  "country_id"=> 51,
                  "zoneName"=> "Africa/Lubumbashi",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "CAT",
                  "tzName"=> "Central Africa Time"
                ],
                [
                  "country_id"=> 52,
                  "zoneName"=> "Pacific/Rarotonga",
                  "gmtOffset"=> -36000,
                  "gmtOffsetName"=> "UTC-10=>00",
                  "abbreviation"=> "CKT",
                  "tzName"=> "Cook Island Time"
                ],
                [
                  "country_id"=> 53,
                  "zoneName"=> "America/Costa_Rica",
                  "gmtOffset"=> -21600,
                  "gmtOffsetName"=> "UTC-06=>00",
                  "abbreviation"=> "CST",
                  "tzName"=> "Central Standard Time (North America"
                ],
                [
                  "country_id"=> 54,
                  "zoneName"=> "Africa/Abidjan",
                  "gmtOffset"=> 0,
                  "gmtOffsetName"=> "UTC±00",
                  "abbreviation"=> "GMT",
                  "tzName"=> "Greenwich Mean Time"
                ],
                [
                  "country_id"=> 55,
                  "zoneName"=> "Europe/Zagreb",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 56,
                  "zoneName"=> "America/Havana",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "CST",
                  "tzName"=> "Cuba Standard Time"
                ],
                [
                  "country_id"=> 249,
                  "zoneName"=> "America/Curacao",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 57,
                  "zoneName"=> "Asia/Famagusta",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "EET",
                  "tzName"=> "Eastern European Time"
                ],
                [
                  "country_id"=> 57,
                  "zoneName"=> "Asia/Nicosia",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "EET",
                  "tzName"=> "Eastern European Time"
                ],
                [
                  "country_id"=> 58,
                  "zoneName"=> "Europe/Prague",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 59,
                  "zoneName"=> "Europe/Copenhagen",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 60,
                  "zoneName"=> "Africa/Djibouti",
                  "gmtOffset"=> 10800,
                  "gmtOffsetName"=> "UTC+03=>00",
                  "abbreviation"=> "EAT",
                  "tzName"=> "East Africa Time"
                ],
                [
                  "country_id"=> 61,
                  "zoneName"=> "America/Dominica",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 62,
                  "zoneName"=> "America/Santo_Domingo",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 63,
                  "zoneName"=> "Asia/Dili",
                  "gmtOffset"=> 32400,
                  "gmtOffsetName"=> "UTC+09=>00",
                  "abbreviation"=> "TLT",
                  "tzName"=> "Timor Leste Time"
                ],
                [
                  "country_id"=> 64,
                  "zoneName"=> "America/Guayaquil",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "ECT",
                  "tzName"=> "Ecuador Time"
                ],
                [
                  "country_id"=> 64,
                  "zoneName"=> "Pacific/Galapagos",
                  "gmtOffset"=> -21600,
                  "gmtOffsetName"=> "UTC-06=>00",
                  "abbreviation"=> "GALT",
                  "tzName"=> "Galápagos Time"
                ],
                [
                  "country_id"=> 65,
                  "zoneName"=> "Africa/Cairo",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "EET",
                  "tzName"=> "Eastern European Time"
                ],
                [
                  "country_id"=> 66,
                  "zoneName"=> "America/El_Salvador",
                  "gmtOffset"=> -21600,
                  "gmtOffsetName"=> "UTC-06=>00",
                  "abbreviation"=> "CST",
                  "tzName"=> "Central Standard Time (North America"
                ],
                [
                  "country_id"=> 67,
                  "zoneName"=> "Africa/Malabo",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "WAT",
                  "tzName"=> "West Africa Time"
                ],
                [
                  "country_id"=> 68,
                  "zoneName"=> "Africa/Asmara",
                  "gmtOffset"=> 10800,
                  "gmtOffsetName"=> "UTC+03=>00",
                  "abbreviation"=> "EAT",
                  "tzName"=> "East Africa Time"
                ],
                [
                  "country_id"=> 69,
                  "zoneName"=> "Europe/Tallinn",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "EET",
                  "tzName"=> "Eastern European Time"
                ],
                [
                  "country_id"=> 70,
                  "zoneName"=> "Africa/Addis_Ababa",
                  "gmtOffset"=> 10800,
                  "gmtOffsetName"=> "UTC+03=>00",
                  "abbreviation"=> "EAT",
                  "tzName"=> "East Africa Time"
                ],
                [
                  "country_id"=> 71,
                  "zoneName"=> "Atlantic/Stanley",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "FKST",
                  "tzName"=> "Falkland Islands Summer Time"
                ],
                [
                  "country_id"=> 72,
                  "zoneName"=> "Atlantic/Faroe",
                  "gmtOffset"=> 0,
                  "gmtOffsetName"=> "UTC±00",
                  "abbreviation"=> "WET",
                  "tzName"=> "Western European Time"
                ],
                [
                  "country_id"=> 73,
                  "zoneName"=> "Pacific/Fiji",
                  "gmtOffset"=> 43200,
                  "gmtOffsetName"=> "UTC+12=>00",
                  "abbreviation"=> "FJT",
                  "tzName"=> "Fiji Time"
                ],
                [
                  "country_id"=> 74,
                  "zoneName"=> "Europe/Helsinki",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "EET",
                  "tzName"=> "Eastern European Time"
                ],
                [
                  "country_id"=> 75,
                  "zoneName"=> "Europe/Paris",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 76,
                  "zoneName"=> "America/Cayenne",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "GFT",
                  "tzName"=> "French Guiana Time"
                ],
                [
                  "country_id"=> 77,
                  "zoneName"=> "Pacific/Gambier",
                  "gmtOffset"=> -32400,
                  "gmtOffsetName"=> "UTC-09=>00",
                  "abbreviation"=> "GAMT",
                  "tzName"=> "Gambier Islands Time"
                ],
                [
                  "country_id"=> 77,
                  "zoneName"=> "Pacific/Marquesas",
                  "gmtOffset"=> -34200,
                  "gmtOffsetName"=> "UTC-09=>30",
                  "abbreviation"=> "MART",
                  "tzName"=> "Marquesas Islands Time"
                ],
                [
                  "country_id"=> 77,
                  "zoneName"=> "Pacific/Tahiti",
                  "gmtOffset"=> -36000,
                  "gmtOffsetName"=> "UTC-10=>00",
                  "abbreviation"=> "TAHT",
                  "tzName"=> "Tahiti Time"
                ],
                [
                  "country_id"=> 78,
                  "zoneName"=> "Indian/Kerguelen",
                  "gmtOffset"=> 18000,
                  "gmtOffsetName"=> "UTC+05=>00",
                  "abbreviation"=> "TFT",
                  "tzName"=> "French Southern and Antarctic Time"
                ],
                [
                  "country_id"=> 79,
                  "zoneName"=> "Africa/Libreville",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "WAT",
                  "tzName"=> "West Africa Time"
                ],
                [
                  "country_id"=> 80,
                  "zoneName"=> "Africa/Banjul",
                  "gmtOffset"=> 0,
                  "gmtOffsetName"=> "UTC±00",
                  "abbreviation"=> "GMT",
                  "tzName"=> "Greenwich Mean Time"
                ],
                [
                  "country_id"=> 81,
                  "zoneName"=> "Asia/Tbilisi",
                  "gmtOffset"=> 14400,
                  "gmtOffsetName"=> "UTC+04=>00",
                  "abbreviation"=> "GET",
                  "tzName"=> "Georgia Standard Time"
                ],
                [
                  "country_id"=> 82,
                  "zoneName"=> "Europe/Berlin",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 82,
                  "zoneName"=> "Europe/Busingen",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 83,
                  "zoneName"=> "Africa/Accra",
                  "gmtOffset"=> 0,
                  "gmtOffsetName"=> "UTC±00",
                  "abbreviation"=> "GMT",
                  "tzName"=> "Greenwich Mean Time"
                ],
                [
                  "country_id"=> 84,
                  "zoneName"=> "Europe/Gibraltar",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 85,
                  "zoneName"=> "Europe/Athens",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "EET",
                  "tzName"=> "Eastern European Time"
                ],
                [
                  "country_id"=> 86,
                  "zoneName"=> "America/Danmarkshavn",
                  "gmtOffset"=> 0,
                  "gmtOffsetName"=> "UTC±00",
                  "abbreviation"=> "GMT",
                  "tzName"=> "Greenwich Mean Time"
                ],
                [
                  "country_id"=> 86,
                  "zoneName"=> "America/Nuuk",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "WGT",
                  "tzName"=> "West Greenland Time"
                ],
                [
                  "country_id"=> 86,
                  "zoneName"=> "America/Scoresbysund",
                  "gmtOffset"=> -3600,
                  "gmtOffsetName"=> "UTC-01=>00",
                  "abbreviation"=> "EGT",
                  "tzName"=> "Eastern Greenland Time"
                ],
                [
                  "country_id"=> 86,
                  "zoneName"=> "America/Thule",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 87,
                  "zoneName"=> "America/Grenada",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 88,
                  "zoneName"=> "America/Guadeloupe",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 89,
                  "zoneName"=> "Pacific/Guam",
                  "gmtOffset"=> 36000,
                  "gmtOffsetName"=> "UTC+10=>00",
                  "abbreviation"=> "CHST",
                  "tzName"=> "Chamorro Standard Time"
                ],
                [
                  "country_id"=> 90,
                  "zoneName"=> "America/Guatemala",
                  "gmtOffset"=> -21600,
                  "gmtOffsetName"=> "UTC-06=>00",
                  "abbreviation"=> "CST",
                  "tzName"=> "Central Standard Time (North America"
                ],
                [
                  "country_id"=> 91,
                  "zoneName"=> "Europe/Guernsey",
                  "gmtOffset"=> 0,
                  "gmtOffsetName"=> "UTC±00",
                  "abbreviation"=> "GMT",
                  "tzName"=> "Greenwich Mean Time"
                ],
                [
                  "country_id"=> 92,
                  "zoneName"=> "Africa/Conakry",
                  "gmtOffset"=> 0,
                  "gmtOffsetName"=> "UTC±00",
                  "abbreviation"=> "GMT",
                  "tzName"=> "Greenwich Mean Time"
                ],
                [
                  "country_id"=> 93,
                  "zoneName"=> "Africa/Bissau",
                  "gmtOffset"=> 0,
                  "gmtOffsetName"=> "UTC±00",
                  "abbreviation"=> "GMT",
                  "tzName"=> "Greenwich Mean Time"
                ],
                [
                  "country_id"=> 94,
                  "zoneName"=> "America/Guyana",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "GYT",
                  "tzName"=> "Guyana Time"
                ],
                [
                  "country_id"=> 95,
                  "zoneName"=> "America/Port-au-Prince",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "EST",
                  "tzName"=> "Eastern Standard Time (North America"
                ],
                [
                  "country_id"=> 96,
                  "zoneName"=> "Indian/Kerguelen",
                  "gmtOffset"=> 18000,
                  "gmtOffsetName"=> "UTC+05=>00",
                  "abbreviation"=> "TFT",
                  "tzName"=> "French Southern and Antarctic Time"
                ],
                [
                  "country_id"=> 97,
                  "zoneName"=> "America/Tegucigalpa",
                  "gmtOffset"=> -21600,
                  "gmtOffsetName"=> "UTC-06=>00",
                  "abbreviation"=> "CST",
                  "tzName"=> "Central Standard Time (North America"
                ],
                [
                  "country_id"=> 98,
                  "zoneName"=> "Asia/Hong_Kong",
                  "gmtOffset"=> 28800,
                  "gmtOffsetName"=> "UTC+08=>00",
                  "abbreviation"=> "HKT",
                  "tzName"=> "Hong Kong Time"
                ],
                [
                  "country_id"=> 99,
                  "zoneName"=> "Europe/Budapest",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 100,
                  "zoneName"=> "Atlantic/Reykjavik",
                  "gmtOffset"=> 0,
                  "gmtOffsetName"=> "UTC±00",
                  "abbreviation"=> "GMT",
                  "tzName"=> "Greenwich Mean Time"
                ],
                [
                  "country_id"=> 101,
                  "zoneName"=> "Asia/Kolkata",
                  "gmtOffset"=> 19800,
                  "gmtOffsetName"=> "UTC+05=>30",
                  "abbreviation"=> "IST",
                  "tzName"=> "Indian Standard Time"
                ],
                [
                  "country_id"=> 102,
                  "zoneName"=> "Asia/Jakarta",
                  "gmtOffset"=> 25200,
                  "gmtOffsetName"=> "UTC+07=>00",
                  "abbreviation"=> "WIB",
                  "tzName"=> "Western Indonesian Time"
                ],
                [
                  "country_id"=> 102,
                  "zoneName"=> "Asia/Jayapura",
                  "gmtOffset"=> 32400,
                  "gmtOffsetName"=> "UTC+09=>00",
                  "abbreviation"=> "WIT",
                  "tzName"=> "Eastern Indonesian Time"
                ],
                [
                  "country_id"=> 102,
                  "zoneName"=> "Asia/Makassar",
                  "gmtOffset"=> 28800,
                  "gmtOffsetName"=> "UTC+08=>00",
                  "abbreviation"=> "WITA",
                  "tzName"=> "Central Indonesia Time"
                ],
                [
                  "country_id"=> 102,
                  "zoneName"=> "Asia/Pontianak",
                  "gmtOffset"=> 25200,
                  "gmtOffsetName"=> "UTC+07=>00",
                  "abbreviation"=> "WIB",
                  "tzName"=> "Western Indonesian Time"
                ],
                [
                  "country_id"=> 103,
                  "zoneName"=> "Asia/Tehran",
                  "gmtOffset"=> 12600,
                  "gmtOffsetName"=> "UTC+03=>30",
                  "abbreviation"=> "IRDT",
                  "tzName"=> "Iran Daylight Time"
                ],
                [
                  "country_id"=> 104,
                  "zoneName"=> "Asia/Baghdad",
                  "gmtOffset"=> 10800,
                  "gmtOffsetName"=> "UTC+03=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Arabia Standard Time"
                ],
                [
                  "country_id"=> 105,
                  "zoneName"=> "Europe/Dublin",
                  "gmtOffset"=> 0,
                  "gmtOffsetName"=> "UTC±00",
                  "abbreviation"=> "GMT",
                  "tzName"=> "Greenwich Mean Time"
                ],
                [
                  "country_id"=> 106,
                  "zoneName"=> "Asia/Jerusalem",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "IST",
                  "tzName"=> "Israel Standard Time"
                ],
                [
                  "country_id"=> 107,
                  "zoneName"=> "Europe/Rome",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 108,
                  "zoneName"=> "America/Jamaica",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "EST",
                  "tzName"=> "Eastern Standard Time (North America"
                ],
                [
                  "country_id"=> 109,
                  "zoneName"=> "Asia/Tokyo",
                  "gmtOffset"=> 32400,
                  "gmtOffsetName"=> "UTC+09=>00",
                  "abbreviation"=> "JST",
                  "tzName"=> "Japan Standard Time"
                ],
                [
                  "country_id"=> 110,
                  "zoneName"=> "Europe/Jersey",
                  "gmtOffset"=> 0,
                  "gmtOffsetName"=> "UTC±00",
                  "abbreviation"=> "GMT",
                  "tzName"=> "Greenwich Mean Time"
                ],
                [
                  "country_id"=> 111,
                  "zoneName"=> "Asia/Amman",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "EET",
                  "tzName"=> "Eastern European Time"
                ],
                [
                  "country_id"=> 112,
                  "zoneName"=> "Asia/Almaty",
                  "gmtOffset"=> 21600,
                  "gmtOffsetName"=> "UTC+06=>00",
                  "abbreviation"=> "ALMT",
                  "tzName"=> "Alma-Ata Time[1"
                ],
                [
                  "country_id"=> 112,
                  "zoneName"=> "Asia/Aqtau",
                  "gmtOffset"=> 18000,
                  "gmtOffsetName"=> "UTC+05=>00",
                  "abbreviation"=> "AQTT",
                  "tzName"=> "Aqtobe Time"
                ],
                [
                  "country_id"=> 112,
                  "zoneName"=> "Asia/Aqtobe",
                  "gmtOffset"=> 18000,
                  "gmtOffsetName"=> "UTC+05=>00",
                  "abbreviation"=> "AQTT",
                  "tzName"=> "Aqtobe Time"
                ],
                [
                  "country_id"=> 112,
                  "zoneName"=> "Asia/Atyrau",
                  "gmtOffset"=> 18000,
                  "gmtOffsetName"=> "UTC+05=>00",
                  "abbreviation"=> "MSD+1",
                  "tzName"=> "Moscow Daylight Time+1"
                ],
                [
                  "country_id"=> 112,
                  "zoneName"=> "Asia/Oral",
                  "gmtOffset"=> 18000,
                  "gmtOffsetName"=> "UTC+05=>00",
                  "abbreviation"=> "ORAT",
                  "tzName"=> "Oral Time"
                ],
                [
                  "country_id"=> 112,
                  "zoneName"=> "Asia/Qostanay",
                  "gmtOffset"=> 21600,
                  "gmtOffsetName"=> "UTC+06=>00",
                  "abbreviation"=> "QYZST",
                  "tzName"=> "Qyzylorda Summer Time"
                ],
                [
                  "country_id"=> 112,
                  "zoneName"=> "Asia/Qyzylorda",
                  "gmtOffset"=> 18000,
                  "gmtOffsetName"=> "UTC+05=>00",
                  "abbreviation"=> "QYZT",
                  "tzName"=> "Qyzylorda Summer Time"
                ],
                [
                  "country_id"=> 113,
                  "zoneName"=> "Africa/Nairobi",
                  "gmtOffset"=> 10800,
                  "gmtOffsetName"=> "UTC+03=>00",
                  "abbreviation"=> "EAT",
                  "tzName"=> "East Africa Time"
                ],
                [
                  "country_id"=> 114,
                  "zoneName"=> "Pacific/Enderbury",
                  "gmtOffset"=> 46800,
                  "gmtOffsetName"=> "UTC+13=>00",
                  "abbreviation"=> "PHOT",
                  "tzName"=> "Phoenix Island Time"
                ],
                [
                  "country_id"=> 114,
                  "zoneName"=> "Pacific/Kiritimati",
                  "gmtOffset"=> 50400,
                  "gmtOffsetName"=> "UTC+14=>00",
                  "abbreviation"=> "LINT",
                  "tzName"=> "Line Islands Time"
                ],
                [
                  "country_id"=> 114,
                  "zoneName"=> "Pacific/Tarawa",
                  "gmtOffset"=> 43200,
                  "gmtOffsetName"=> "UTC+12=>00",
                  "abbreviation"=> "GILT",
                  "tzName"=> "Gilbert Island Time"
                ],
                [
                  "country_id"=> 115,
                  "zoneName"=> "Asia/Pyongyang",
                  "gmtOffset"=> 32400,
                  "gmtOffsetName"=> "UTC+09=>00",
                  "abbreviation"=> "KST",
                  "tzName"=> "Korea Standard Time"
                ],
                [
                  "country_id"=> 116,
                  "zoneName"=> "Asia/Seoul",
                  "gmtOffset"=> 32400,
                  "gmtOffsetName"=> "UTC+09=>00",
                  "abbreviation"=> "KST",
                  "tzName"=> "Korea Standard Time"
                ],
                [
                  "country_id"=> 248,
                  "zoneName"=> "Europe/Belgrade",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 117,
                  "zoneName"=> "Asia/Kuwait",
                  "gmtOffset"=> 10800,
                  "gmtOffsetName"=> "UTC+03=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Arabia Standard Time"
                ],
                [
                  "country_id"=> 118,
                  "zoneName"=> "Asia/Bishkek",
                  "gmtOffset"=> 21600,
                  "gmtOffsetName"=> "UTC+06=>00",
                  "abbreviation"=> "KGT",
                  "tzName"=> "Kyrgyzstan Time"
                ],
                [
                  "country_id"=> 119,
                  "zoneName"=> "Asia/Vientiane",
                  "gmtOffset"=> 25200,
                  "gmtOffsetName"=> "UTC+07=>00",
                  "abbreviation"=> "ICT",
                  "tzName"=> "Indochina Time"
                ],
                [
                  "country_id"=> 120,
                  "zoneName"=> "Europe/Riga",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "EET",
                  "tzName"=> "Eastern European Time"
                ],
                [
                  "country_id"=> 121,
                  "zoneName"=> "Asia/Beirut",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "EET",
                  "tzName"=> "Eastern European Time"
                ],
                [
                  "country_id"=> 122,
                  "zoneName"=> "Africa/Maseru",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "SAST",
                  "tzName"=> "South African Standard Time"
                ],
                [
                  "country_id"=> 123,
                  "zoneName"=> "Africa/Monrovia",
                  "gmtOffset"=> 0,
                  "gmtOffsetName"=> "UTC±00",
                  "abbreviation"=> "GMT",
                  "tzName"=> "Greenwich Mean Time"
                ],
                [
                  "country_id"=> 124,
                  "zoneName"=> "Africa/Tripoli",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "EET",
                  "tzName"=> "Eastern European Time"
                ],
                [
                  "country_id"=> 125,
                  "zoneName"=> "Europe/Vaduz",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 126,
                  "zoneName"=> "Europe/Vilnius",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "EET",
                  "tzName"=> "Eastern European Time"
                ],
                [
                  "country_id"=> 127,
                  "zoneName"=> "Europe/Luxembourg",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 128,
                  "zoneName"=> "Asia/Macau",
                  "gmtOffset"=> 28800,
                  "gmtOffsetName"=> "UTC+08=>00",
                  "abbreviation"=> "CST",
                  "tzName"=> "China Standard Time"
                ],
                [
                  "country_id"=> 129,
                  "zoneName"=> "Europe/Skopje",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 130,
                  "zoneName"=> "Indian/Antananarivo",
                  "gmtOffset"=> 10800,
                  "gmtOffsetName"=> "UTC+03=>00",
                  "abbreviation"=> "EAT",
                  "tzName"=> "East Africa Time"
                ],
                [
                  "country_id"=> 131,
                  "zoneName"=> "Africa/Blantyre",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "CAT",
                  "tzName"=> "Central Africa Time"
                ],
                [
                  "country_id"=> 132,
                  "zoneName"=> "Asia/Kuala_Lumpur",
                  "gmtOffset"=> 28800,
                  "gmtOffsetName"=> "UTC+08=>00",
                  "abbreviation"=> "MYT",
                  "tzName"=> "Malaysia Time"
                ],
                [
                  "country_id"=> 132,
                  "zoneName"=> "Asia/Kuching",
                  "gmtOffset"=> 28800,
                  "gmtOffsetName"=> "UTC+08=>00",
                  "abbreviation"=> "MYT",
                  "tzName"=> "Malaysia Time"
                ],
                [
                  "country_id"=> 133,
                  "zoneName"=> "Indian/Maldives",
                  "gmtOffset"=> 18000,
                  "gmtOffsetName"=> "UTC+05=>00",
                  "abbreviation"=> "MVT",
                  "tzName"=> "Maldives Time"
                ],
                [
                  "country_id"=> 134,
                  "zoneName"=> "Africa/Bamako",
                  "gmtOffset"=> 0,
                  "gmtOffsetName"=> "UTC±00",
                  "abbreviation"=> "GMT",
                  "tzName"=> "Greenwich Mean Time"
                ],
                [
                  "country_id"=> 135,
                  "zoneName"=> "Europe/Malta",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 136,
                  "zoneName"=> "Europe/Isle_of_Man",
                  "gmtOffset"=> 0,
                  "gmtOffsetName"=> "UTC±00",
                  "abbreviation"=> "GMT",
                  "tzName"=> "Greenwich Mean Time"
                ],
                [
                  "country_id"=> 137,
                  "zoneName"=> "Pacific/Kwajalein",
                  "gmtOffset"=> 43200,
                  "gmtOffsetName"=> "UTC+12=>00",
                  "abbreviation"=> "MHT",
                  "tzName"=> "Marshall Islands Time"
                ],
                [
                  "country_id"=> 137,
                  "zoneName"=> "Pacific/Majuro",
                  "gmtOffset"=> 43200,
                  "gmtOffsetName"=> "UTC+12=>00",
                  "abbreviation"=> "MHT",
                  "tzName"=> "Marshall Islands Time"
                ],
                [
                  "country_id"=> 138,
                  "zoneName"=> "America/Martinique",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 139,
                  "zoneName"=> "Africa/Nouakchott",
                  "gmtOffset"=> 0,
                  "gmtOffsetName"=> "UTC±00",
                  "abbreviation"=> "GMT",
                  "tzName"=> "Greenwich Mean Time"
                ],
                [
                  "country_id"=> 140,
                  "zoneName"=> "Indian/Mauritius",
                  "gmtOffset"=> 14400,
                  "gmtOffsetName"=> "UTC+04=>00",
                  "abbreviation"=> "MUT",
                  "tzName"=> "Mauritius Time"
                ],
                [
                  "country_id"=> 141,
                  "zoneName"=> "Indian/Mayotte",
                  "gmtOffset"=> 10800,
                  "gmtOffsetName"=> "UTC+03=>00",
                  "abbreviation"=> "EAT",
                  "tzName"=> "East Africa Time"
                ],
                [
                  "country_id"=> 142,
                  "zoneName"=> "America/Bahia_Banderas",
                  "gmtOffset"=> -21600,
                  "gmtOffsetName"=> "UTC-06=>00",
                  "abbreviation"=> "CST",
                  "tzName"=> "Central Standard Time (North America"
                ],
                [
                  "country_id"=> 142,
                  "zoneName"=> "America/Cancun",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "EST",
                  "tzName"=> "Eastern Standard Time (North America"
                ],
                [
                  "country_id"=> 142,
                  "zoneName"=> "America/Chihuahua",
                  "gmtOffset"=> -25200,
                  "gmtOffsetName"=> "UTC-07=>00",
                  "abbreviation"=> "MST",
                  "tzName"=> "Mountain Standard Time (North America"
                ],
                [
                  "country_id"=> 142,
                  "zoneName"=> "America/Hermosillo",
                  "gmtOffset"=> -25200,
                  "gmtOffsetName"=> "UTC-07=>00",
                  "abbreviation"=> "MST",
                  "tzName"=> "Mountain Standard Time (North America"
                ],
                [
                  "country_id"=> 142,
                  "zoneName"=> "America/Matamoros",
                  "gmtOffset"=> -21600,
                  "gmtOffsetName"=> "UTC-06=>00",
                  "abbreviation"=> "CST",
                  "tzName"=> "Central Standard Time (North America"
                ],
                [
                  "country_id"=> 142,
                  "zoneName"=> "America/Mazatlan",
                  "gmtOffset"=> -25200,
                  "gmtOffsetName"=> "UTC-07=>00",
                  "abbreviation"=> "MST",
                  "tzName"=> "Mountain Standard Time (North America"
                ],
                [
                  "country_id"=> 142,
                  "zoneName"=> "America/Merida",
                  "gmtOffset"=> -21600,
                  "gmtOffsetName"=> "UTC-06=>00",
                  "abbreviation"=> "CST",
                  "tzName"=> "Central Standard Time (North America"
                ],
                [
                  "country_id"=> 142,
                  "zoneName"=> "America/Mexico_City",
                  "gmtOffset"=> -21600,
                  "gmtOffsetName"=> "UTC-06=>00",
                  "abbreviation"=> "CST",
                  "tzName"=> "Central Standard Time (North America"
                ],
                [
                  "country_id"=> 142,
                  "zoneName"=> "America/Monterrey",
                  "gmtOffset"=> -21600,
                  "gmtOffsetName"=> "UTC-06=>00",
                  "abbreviation"=> "CST",
                  "tzName"=> "Central Standard Time (North America"
                ],
                [
                  "country_id"=> 142,
                  "zoneName"=> "America/Ojinaga",
                  "gmtOffset"=> -25200,
                  "gmtOffsetName"=> "UTC-07=>00",
                  "abbreviation"=> "MST",
                  "tzName"=> "Mountain Standard Time (North America"
                ],
                [
                  "country_id"=> 142,
                  "zoneName"=> "America/Tijuana",
                  "gmtOffset"=> -28800,
                  "gmtOffsetName"=> "UTC-08=>00",
                  "abbreviation"=> "PST",
                  "tzName"=> "Pacific Standard Time (North America"
                ],
                [
                  "country_id"=> 143,
                  "zoneName"=> "Pacific/Chuuk",
                  "gmtOffset"=> 36000,
                  "gmtOffsetName"=> "UTC+10=>00",
                  "abbreviation"=> "CHUT",
                  "tzName"=> "Chuuk Time"
                ],
                [
                  "country_id"=> 143,
                  "zoneName"=> "Pacific/Kosrae",
                  "gmtOffset"=> 39600,
                  "gmtOffsetName"=> "UTC+11=>00",
                  "abbreviation"=> "KOST",
                  "tzName"=> "Kosrae Time"
                ],
                [
                  "country_id"=> 143,
                  "zoneName"=> "Pacific/Pohnpei",
                  "gmtOffset"=> 39600,
                  "gmtOffsetName"=> "UTC+11=>00",
                  "abbreviation"=> "PONT",
                  "tzName"=> "Pohnpei Standard Time"
                ],
                [
                  "country_id"=> 144,
                  "zoneName"=> "Europe/Chisinau",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "EET",
                  "tzName"=> "Eastern European Time"
                ],
                [
                  "country_id"=> 145,
                  "zoneName"=> "Europe/Monaco",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 146,
                  "zoneName"=> "Asia/Choibalsan",
                  "gmtOffset"=> 28800,
                  "gmtOffsetName"=> "UTC+08=>00",
                  "abbreviation"=> "CHOT",
                  "tzName"=> "Choibalsan Standard Time"
                ],
                [
                  "country_id"=> 146,
                  "zoneName"=> "Asia/Hovd",
                  "gmtOffset"=> 25200,
                  "gmtOffsetName"=> "UTC+07=>00",
                  "abbreviation"=> "HOVT",
                  "tzName"=> "Hovd Time"
                ],
                [
                  "country_id"=> 146,
                  "zoneName"=> "Asia/Ulaanbaatar",
                  "gmtOffset"=> 28800,
                  "gmtOffsetName"=> "UTC+08=>00",
                  "abbreviation"=> "ULAT",
                  "tzName"=> "Ulaanbaatar Standard Time"
                ],
                [
                  "country_id"=> 147,
                  "zoneName"=> "Europe/Podgorica",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 148,
                  "zoneName"=> "America/Montserrat",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 149,
                  "zoneName"=> "Africa/Casablanca",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "WEST",
                  "tzName"=> "Western European Summer Time"
                ],
                [
                  "country_id"=> 150,
                  "zoneName"=> "Africa/Maputo",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "CAT",
                  "tzName"=> "Central Africa Time"
                ],
                [
                  "country_id"=> 151,
                  "zoneName"=> "Asia/Yangon",
                  "gmtOffset"=> 23400,
                  "gmtOffsetName"=> "UTC+06=>30",
                  "abbreviation"=> "MMT",
                  "tzName"=> "Myanmar Standard Time"
                ],
                [
                  "country_id"=> 152,
                  "zoneName"=> "Africa/Windhoek",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "WAST",
                  "tzName"=> "West Africa Summer Time"
                ],
                [
                  "country_id"=> 153,
                  "zoneName"=> "Pacific/Nauru",
                  "gmtOffset"=> 43200,
                  "gmtOffsetName"=> "UTC+12=>00",
                  "abbreviation"=> "NRT",
                  "tzName"=> "Nauru Time"
                ],
                [
                  "country_id"=> 154,
                  "zoneName"=> "Asia/Kathmandu",
                  "gmtOffset"=> 20700,
                  "gmtOffsetName"=> "UTC+05=>45",
                  "abbreviation"=> "NPT",
                  "tzName"=> "Nepal Time"
                ],
                [
                  "country_id"=> 156,
                  "zoneName"=> "Europe/Amsterdam",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 157,
                  "zoneName"=> "Pacific/Noumea",
                  "gmtOffset"=> 39600,
                  "gmtOffsetName"=> "UTC+11=>00",
                  "abbreviation"=> "NCT",
                  "tzName"=> "New Caledonia Time"
                ],
                [
                  "country_id"=> 158,
                  "zoneName"=> "Pacific/Auckland",
                  "gmtOffset"=> 46800,
                  "gmtOffsetName"=> "UTC+13=>00",
                  "abbreviation"=> "NZDT",
                  "tzName"=> "New Zealand Daylight Time"
                ],
                [
                  "country_id"=> 158,
                  "zoneName"=> "Pacific/Chatham",
                  "gmtOffset"=> 49500,
                  "gmtOffsetName"=> "UTC+13=>45",
                  "abbreviation"=> "CHAST",
                  "tzName"=> "Chatham Standard Time"
                ],
                [
                  "country_id"=> 159,
                  "zoneName"=> "America/Managua",
                  "gmtOffset"=> -21600,
                  "gmtOffsetName"=> "UTC-06=>00",
                  "abbreviation"=> "CST",
                  "tzName"=> "Central Standard Time (North America"
                ],
                [
                  "country_id"=> 160,
                  "zoneName"=> "Africa/Niamey",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "WAT",
                  "tzName"=> "West Africa Time"
                ],
                [
                  "country_id"=> 161,
                  "zoneName"=> "Africa/Lagos",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "WAT",
                  "tzName"=> "West Africa Time"
                ],
                [
                  "country_id"=> 162,
                  "zoneName"=> "Pacific/Niue",
                  "gmtOffset"=> -39600,
                  "gmtOffsetName"=> "UTC-11=>00",
                  "abbreviation"=> "NUT",
                  "tzName"=> "Niue Time"
                ],
                [
                  "country_id"=> 163,
                  "zoneName"=> "Pacific/Norfolk",
                  "gmtOffset"=> 43200,
                  "gmtOffsetName"=> "UTC+12=>00",
                  "abbreviation"=> "NFT",
                  "tzName"=> "Norfolk Time"
                ],
                [
                  "country_id"=> 164,
                  "zoneName"=> "Pacific/Saipan",
                  "gmtOffset"=> 36000,
                  "gmtOffsetName"=> "UTC+10=>00",
                  "abbreviation"=> "ChST",
                  "tzName"=> "Chamorro Standard Time"
                ],
                [
                  "country_id"=> 165,
                  "zoneName"=> "Europe/Oslo",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 166,
                  "zoneName"=> "Asia/Muscat",
                  "gmtOffset"=> 14400,
                  "gmtOffsetName"=> "UTC+04=>00",
                  "abbreviation"=> "GST",
                  "tzName"=> "Gulf Standard Time"
                ],
                [
                  "country_id"=> 167,
                  "zoneName"=> "Asia/Karachi",
                  "gmtOffset"=> 18000,
                  "gmtOffsetName"=> "UTC+05=>00",
                  "abbreviation"=> "PKT",
                  "tzName"=> "Pakistan Standard Time"
                ],
                [
                  "country_id"=> 168,
                  "zoneName"=> "Pacific/Palau",
                  "gmtOffset"=> 32400,
                  "gmtOffsetName"=> "UTC+09=>00",
                  "abbreviation"=> "PWT",
                  "tzName"=> "Palau Time"
                ],
                [
                  "country_id"=> 169,
                  "zoneName"=> "Asia/Gaza",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "EET",
                  "tzName"=> "Eastern European Time"
                ],
                [
                  "country_id"=> 169,
                  "zoneName"=> "Asia/Hebron",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "EET",
                  "tzName"=> "Eastern European Time"
                ],
                [
                  "country_id"=> 170,
                  "zoneName"=> "America/Panama",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "EST",
                  "tzName"=> "Eastern Standard Time (North America"
                ],
                [
                  "country_id"=> 171,
                  "zoneName"=> "Pacific/Bougainville",
                  "gmtOffset"=> 39600,
                  "gmtOffsetName"=> "UTC+11=>00",
                  "abbreviation"=> "BST",
                  "tzName"=> "Bougainville Standard Time[6"
                ],
                [
                  "country_id"=> 171,
                  "zoneName"=> "Pacific/Port_Moresby",
                  "gmtOffset"=> 36000,
                  "gmtOffsetName"=> "UTC+10=>00",
                  "abbreviation"=> "PGT",
                  "tzName"=> "Papua New Guinea Time"
                ],
                [
                  "country_id"=> 172,
                  "zoneName"=> "America/Asuncion",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "PYST",
                  "tzName"=> "Paraguay Summer Time"
                ],
                [
                  "country_id"=> 173,
                  "zoneName"=> "America/Lima",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "PET",
                  "tzName"=> "Peru Time"
                ],
                [
                  "country_id"=> 174,
                  "zoneName"=> "Asia/Manila",
                  "gmtOffset"=> 28800,
                  "gmtOffsetName"=> "UTC+08=>00",
                  "abbreviation"=> "PHT",
                  "tzName"=> "Philippine Time"
                ],
                [
                  "country_id"=> 175,
                  "zoneName"=> "Pacific/Pitcairn",
                  "gmtOffset"=> -28800,
                  "gmtOffsetName"=> "UTC-08=>00",
                  "abbreviation"=> "PST",
                  "tzName"=> "Pacific Standard Time (North America"
                ],
                [
                  "country_id"=> 176,
                  "zoneName"=> "Europe/Warsaw",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 177,
                  "zoneName"=> "Atlantic/Azores",
                  "gmtOffset"=> -3600,
                  "gmtOffsetName"=> "UTC-01=>00",
                  "abbreviation"=> "AZOT",
                  "tzName"=> "Azores Standard Time"
                ],
                [
                  "country_id"=> 177,
                  "zoneName"=> "Atlantic/Madeira",
                  "gmtOffset"=> 0,
                  "gmtOffsetName"=> "UTC±00",
                  "abbreviation"=> "WET",
                  "tzName"=> "Western European Time"
                ],
                [
                  "country_id"=> 177,
                  "zoneName"=> "Europe/Lisbon",
                  "gmtOffset"=> 0,
                  "gmtOffsetName"=> "UTC±00",
                  "abbreviation"=> "WET",
                  "tzName"=> "Western European Time"
                ],
                [
                  "country_id"=> 178,
                  "zoneName"=> "America/Puerto_Rico",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 179,
                  "zoneName"=> "Asia/Qatar",
                  "gmtOffset"=> 10800,
                  "gmtOffsetName"=> "UTC+03=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Arabia Standard Time"
                ],
                [
                  "country_id"=> 180,
                  "zoneName"=> "Indian/Reunion",
                  "gmtOffset"=> 14400,
                  "gmtOffsetName"=> "UTC+04=>00",
                  "abbreviation"=> "RET",
                  "tzName"=> "Réunion Time"
                ],
                [
                  "country_id"=> 181,
                  "zoneName"=> "Europe/Bucharest",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "EET",
                  "tzName"=> "Eastern European Time"
                ],
                [
                  "country_id"=> 182,
                  "zoneName"=> "Asia/Anadyr",
                  "gmtOffset"=> 43200,
                  "gmtOffsetName"=> "UTC+12=>00",
                  "abbreviation"=> "ANAT",
                  "tzName"=> "Anadyr Time[4"
                ],
                [
                  "country_id"=> 182,
                  "zoneName"=> "Asia/Barnaul",
                  "gmtOffset"=> 25200,
                  "gmtOffsetName"=> "UTC+07=>00",
                  "abbreviation"=> "KRAT",
                  "tzName"=> "Krasnoyarsk Time"
                ],
                [
                  "country_id"=> 182,
                  "zoneName"=> "Asia/Chita",
                  "gmtOffset"=> 32400,
                  "gmtOffsetName"=> "UTC+09=>00",
                  "abbreviation"=> "YAKT",
                  "tzName"=> "Yakutsk Time"
                ],
                [
                  "country_id"=> 182,
                  "zoneName"=> "Asia/Irkutsk",
                  "gmtOffset"=> 28800,
                  "gmtOffsetName"=> "UTC+08=>00",
                  "abbreviation"=> "IRKT",
                  "tzName"=> "Irkutsk Time"
                ],
                [
                  "country_id"=> 182,
                  "zoneName"=> "Asia/Kamchatka",
                  "gmtOffset"=> 43200,
                  "gmtOffsetName"=> "UTC+12=>00",
                  "abbreviation"=> "PETT",
                  "tzName"=> "Kamchatka Time"
                ],
                [
                  "country_id"=> 182,
                  "zoneName"=> "Asia/Khandyga",
                  "gmtOffset"=> 32400,
                  "gmtOffsetName"=> "UTC+09=>00",
                  "abbreviation"=> "YAKT",
                  "tzName"=> "Yakutsk Time"
                ],
                [
                  "country_id"=> 182,
                  "zoneName"=> "Asia/Krasnoyarsk",
                  "gmtOffset"=> 25200,
                  "gmtOffsetName"=> "UTC+07=>00",
                  "abbreviation"=> "KRAT",
                  "tzName"=> "Krasnoyarsk Time"
                ],
                [
                  "country_id"=> 182,
                  "zoneName"=> "Asia/Magadan",
                  "gmtOffset"=> 39600,
                  "gmtOffsetName"=> "UTC+11=>00",
                  "abbreviation"=> "MAGT",
                  "tzName"=> "Magadan Time"
                ],
                [
                  "country_id"=> 182,
                  "zoneName"=> "Asia/Novokuznetsk",
                  "gmtOffset"=> 25200,
                  "gmtOffsetName"=> "UTC+07=>00",
                  "abbreviation"=> "KRAT",
                  "tzName"=> "Krasnoyarsk Time"
                ],
                [
                  "country_id"=> 182,
                  "zoneName"=> "Asia/Novosibirsk",
                  "gmtOffset"=> 25200,
                  "gmtOffsetName"=> "UTC+07=>00",
                  "abbreviation"=> "NOVT",
                  "tzName"=> "Novosibirsk Time"
                ],
                [
                  "country_id"=> 182,
                  "zoneName"=> "Asia/Omsk",
                  "gmtOffset"=> 21600,
                  "gmtOffsetName"=> "UTC+06=>00",
                  "abbreviation"=> "OMST",
                  "tzName"=> "Omsk Time"
                ],
                [
                  "country_id"=> 182,
                  "zoneName"=> "Asia/Sakhalin",
                  "gmtOffset"=> 39600,
                  "gmtOffsetName"=> "UTC+11=>00",
                  "abbreviation"=> "SAKT",
                  "tzName"=> "Sakhalin Island Time"
                ],
                [
                  "country_id"=> 182,
                  "zoneName"=> "Asia/Srednekolymsk",
                  "gmtOffset"=> 39600,
                  "gmtOffsetName"=> "UTC+11=>00",
                  "abbreviation"=> "SRET",
                  "tzName"=> "Srednekolymsk Time"
                ],
                [
                  "country_id"=> 182,
                  "zoneName"=> "Asia/Tomsk",
                  "gmtOffset"=> 25200,
                  "gmtOffsetName"=> "UTC+07=>00",
                  "abbreviation"=> "MSD+3",
                  "tzName"=> "Moscow Daylight Time+3"
                ],
                [
                  "country_id"=> 182,
                  "zoneName"=> "Asia/Ust-Nera",
                  "gmtOffset"=> 36000,
                  "gmtOffsetName"=> "UTC+10=>00",
                  "abbreviation"=> "VLAT",
                  "tzName"=> "Vladivostok Time"
                ],
                [
                  "country_id"=> 182,
                  "zoneName"=> "Asia/Vladivostok",
                  "gmtOffset"=> 36000,
                  "gmtOffsetName"=> "UTC+10=>00",
                  "abbreviation"=> "VLAT",
                  "tzName"=> "Vladivostok Time"
                ],
                [
                  "country_id"=> 182,
                  "zoneName"=> "Asia/Yakutsk",
                  "gmtOffset"=> 32400,
                  "gmtOffsetName"=> "UTC+09=>00",
                  "abbreviation"=> "YAKT",
                  "tzName"=> "Yakutsk Time"
                ],
                [
                  "country_id"=> 182,
                  "zoneName"=> "Asia/Yekaterinburg",
                  "gmtOffset"=> 18000,
                  "gmtOffsetName"=> "UTC+05=>00",
                  "abbreviation"=> "YEKT",
                  "tzName"=> "Yekaterinburg Time"
                ],
                [
                  "country_id"=> 182,
                  "zoneName"=> "Europe/Astrakhan",
                  "gmtOffset"=> 14400,
                  "gmtOffsetName"=> "UTC+04=>00",
                  "abbreviation"=> "SAMT",
                  "tzName"=> "Samara Time"
                ],
                [
                  "country_id"=> 182,
                  "zoneName"=> "Europe/Kaliningrad",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "EET",
                  "tzName"=> "Eastern European Time"
                ],
                [
                  "country_id"=> 182,
                  "zoneName"=> "Europe/Kirov",
                  "gmtOffset"=> 10800,
                  "gmtOffsetName"=> "UTC+03=>00",
                  "abbreviation"=> "MSK",
                  "tzName"=> "Moscow Time"
                ],
                [
                  "country_id"=> 182,
                  "zoneName"=> "Europe/Moscow",
                  "gmtOffset"=> 10800,
                  "gmtOffsetName"=> "UTC+03=>00",
                  "abbreviation"=> "MSK",
                  "tzName"=> "Moscow Time"
                ],
                [
                  "country_id"=> 182,
                  "zoneName"=> "Europe/Samara",
                  "gmtOffset"=> 14400,
                  "gmtOffsetName"=> "UTC+04=>00",
                  "abbreviation"=> "SAMT",
                  "tzName"=> "Samara Time"
                ],
                [
                  "country_id"=> 182,
                  "zoneName"=> "Europe/Saratov",
                  "gmtOffset"=> 14400,
                  "gmtOffsetName"=> "UTC+04=>00",
                  "abbreviation"=> "MSD",
                  "tzName"=> "Moscow Daylight Time+4"
                ],
                [
                  "country_id"=> 182,
                  "zoneName"=> "Europe/Ulyanovsk",
                  "gmtOffset"=> 14400,
                  "gmtOffsetName"=> "UTC+04=>00",
                  "abbreviation"=> "SAMT",
                  "tzName"=> "Samara Time"
                ],
                [
                  "country_id"=> 182,
                  "zoneName"=> "Europe/Volgograd",
                  "gmtOffset"=> 14400,
                  "gmtOffsetName"=> "UTC+04=>00",
                  "abbreviation"=> "MSK",
                  "tzName"=> "Moscow Standard Time"
                ],
                [
                  "country_id"=> 183,
                  "zoneName"=> "Africa/Kigali",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "CAT",
                  "tzName"=> "Central Africa Time"
                ],
                [
                  "country_id"=> 184,
                  "zoneName"=> "Atlantic/St_Helena",
                  "gmtOffset"=> 0,
                  "gmtOffsetName"=> "UTC±00",
                  "abbreviation"=> "GMT",
                  "tzName"=> "Greenwich Mean Time"
                ],
                [
                  "country_id"=> 185,
                  "zoneName"=> "America/St_Kitts",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 186,
                  "zoneName"=> "America/St_Lucia",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 187,
                  "zoneName"=> "America/Miquelon",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "PMDT",
                  "tzName"=> "Pierre & Miquelon Daylight Time"
                ],
                [
                  "country_id"=> 188,
                  "zoneName"=> "America/St_Vincent",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 189,
                  "zoneName"=> "America/St_Barthelemy",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 190,
                  "zoneName"=> "America/Marigot",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 191,
                  "zoneName"=> "Pacific/Apia",
                  "gmtOffset"=> 50400,
                  "gmtOffsetName"=> "UTC+14=>00",
                  "abbreviation"=> "WST",
                  "tzName"=> "West Samoa Time"
                ],
                [
                  "country_id"=> 192,
                  "zoneName"=> "Europe/San_Marino",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 193,
                  "zoneName"=> "Africa/Sao_Tome",
                  "gmtOffset"=> 0,
                  "gmtOffsetName"=> "UTC±00",
                  "abbreviation"=> "GMT",
                  "tzName"=> "Greenwich Mean Time"
                ],
                [
                  "country_id"=> 194,
                  "zoneName"=> "Asia/Riyadh",
                  "gmtOffset"=> 10800,
                  "gmtOffsetName"=> "UTC+03=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Arabia Standard Time"
                ],
                [
                  "country_id"=> 195,
                  "zoneName"=> "Africa/Dakar",
                  "gmtOffset"=> 0,
                  "gmtOffsetName"=> "UTC±00",
                  "abbreviation"=> "GMT",
                  "tzName"=> "Greenwich Mean Time"
                ],
                [
                  "country_id"=> 196,
                  "zoneName"=> "Europe/Belgrade",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 197,
                  "zoneName"=> "Indian/Mahe",
                  "gmtOffset"=> 14400,
                  "gmtOffsetName"=> "UTC+04=>00",
                  "abbreviation"=> "SCT",
                  "tzName"=> "Seychelles Time"
                ],
                [
                  "country_id"=> 198,
                  "zoneName"=> "Africa/Freetown",
                  "gmtOffset"=> 0,
                  "gmtOffsetName"=> "UTC±00",
                  "abbreviation"=> "GMT",
                  "tzName"=> "Greenwich Mean Time"
                ],
                [
                  "country_id"=> 199,
                  "zoneName"=> "Asia/Singapore",
                  "gmtOffset"=> 28800,
                  "gmtOffsetName"=> "UTC+08=>00",
                  "abbreviation"=> "SGT",
                  "tzName"=> "Singapore Time"
                ],
                [
                  "country_id"=> 250,
                  "zoneName"=> "America/Anguilla",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 200,
                  "zoneName"=> "Europe/Bratislava",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 201,
                  "zoneName"=> "Europe/Ljubljana",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 202,
                  "zoneName"=> "Pacific/Guadalcanal",
                  "gmtOffset"=> 39600,
                  "gmtOffsetName"=> "UTC+11=>00",
                  "abbreviation"=> "SBT",
                  "tzName"=> "Solomon Islands Time"
                ],
                [
                  "country_id"=> 203,
                  "zoneName"=> "Africa/Mogadishu",
                  "gmtOffset"=> 10800,
                  "gmtOffsetName"=> "UTC+03=>00",
                  "abbreviation"=> "EAT",
                  "tzName"=> "East Africa Time"
                ],
                [
                  "country_id"=> 204,
                  "zoneName"=> "Africa/Johannesburg",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "SAST",
                  "tzName"=> "South African Standard Time"
                ],
                [
                  "country_id"=> 205,
                  "zoneName"=> "Atlantic/South_Georgia",
                  "gmtOffset"=> -7200,
                  "gmtOffsetName"=> "UTC-02=>00",
                  "abbreviation"=> "GST",
                  "tzName"=> "South Georgia and the South Sandwich Islands Time"
                ],
                [
                  "country_id"=> 206,
                  "zoneName"=> "Africa/Juba",
                  "gmtOffset"=> 10800,
                  "gmtOffsetName"=> "UTC+03=>00",
                  "abbreviation"=> "EAT",
                  "tzName"=> "East Africa Time"
                ],
                [
                  "country_id"=> 207,
                  "zoneName"=> "Africa/Ceuta",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 207,
                  "zoneName"=> "Atlantic/Canary",
                  "gmtOffset"=> 0,
                  "gmtOffsetName"=> "UTC±00",
                  "abbreviation"=> "WET",
                  "tzName"=> "Western European Time"
                ],
                [
                  "country_id"=> 207,
                  "zoneName"=> "Europe/Madrid",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 208,
                  "zoneName"=> "Asia/Colombo",
                  "gmtOffset"=> 19800,
                  "gmtOffsetName"=> "UTC+05=>30",
                  "abbreviation"=> "IST",
                  "tzName"=> "Indian Standard Time"
                ],
                [
                  "country_id"=> 209,
                  "zoneName"=> "Africa/Khartoum",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "EAT",
                  "tzName"=> "Eastern African Time"
                ],
                [
                  "country_id"=> 210,
                  "zoneName"=> "America/Paramaribo",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "SRT",
                  "tzName"=> "Suriname Time"
                ],
                [
                  "country_id"=> 211,
                  "zoneName"=> "Arctic/Longyearbyen",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 212,
                  "zoneName"=> "Africa/Mbabane",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "SAST",
                  "tzName"=> "South African Standard Time"
                ],
                [
                  "country_id"=> 213,
                  "zoneName"=> "Europe/Stockholm",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 214,
                  "zoneName"=> "Europe/Zurich",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 215,
                  "zoneName"=> "Asia/Damascus",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "EET",
                  "tzName"=> "Eastern European Time"
                ],
                [
                  "country_id"=> 216,
                  "zoneName"=> "Asia/Taipei",
                  "gmtOffset"=> 28800,
                  "gmtOffsetName"=> "UTC+08=>00",
                  "abbreviation"=> "CST",
                  "tzName"=> "China Standard Time"
                ],
                [
                  "country_id"=> 217,
                  "zoneName"=> "Asia/Dushanbe",
                  "gmtOffset"=> 18000,
                  "gmtOffsetName"=> "UTC+05=>00",
                  "abbreviation"=> "TJT",
                  "tzName"=> "Tajikistan Time"
                ],
                [
                  "country_id"=> 218,
                  "zoneName"=> "Africa/Dar_es_Salaam",
                  "gmtOffset"=> 10800,
                  "gmtOffsetName"=> "UTC+03=>00",
                  "abbreviation"=> "EAT",
                  "tzName"=> "East Africa Time"
                ],
                [
                  "country_id"=> 219,
                  "zoneName"=> "Asia/Bangkok",
                  "gmtOffset"=> 25200,
                  "gmtOffsetName"=> "UTC+07=>00",
                  "abbreviation"=> "ICT",
                  "tzName"=> "Indochina Time"
                ],
                [
                  "country_id"=> 220,
                  "zoneName"=> "Africa/Lome",
                  "gmtOffset"=> 0,
                  "gmtOffsetName"=> "UTC±00",
                  "abbreviation"=> "GMT",
                  "tzName"=> "Greenwich Mean Time"
                ],
                [
                  "country_id"=> 221,
                  "zoneName"=> "Pacific/Fakaofo",
                  "gmtOffset"=> 46800,
                  "gmtOffsetName"=> "UTC+13=>00",
                  "abbreviation"=> "TKT",
                  "tzName"=> "Tokelau Time"
                ],
                [
                  "country_id"=> 222,
                  "zoneName"=> "Pacific/Tongatapu",
                  "gmtOffset"=> 46800,
                  "gmtOffsetName"=> "UTC+13=>00",
                  "abbreviation"=> "TOT",
                  "tzName"=> "Tonga Time"
                ],
                [
                  "country_id"=> 223,
                  "zoneName"=> "America/Port_of_Spain",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 224,
                  "zoneName"=> "Africa/Tunis",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 225,
                  "zoneName"=> "Europe/Istanbul",
                  "gmtOffset"=> 10800,
                  "gmtOffsetName"=> "UTC+03=>00",
                  "abbreviation"=> "EET",
                  "tzName"=> "Eastern European Time"
                ],
                [
                  "country_id"=> 226,
                  "zoneName"=> "Asia/Ashgabat",
                  "gmtOffset"=> 18000,
                  "gmtOffsetName"=> "UTC+05=>00",
                  "abbreviation"=> "TMT",
                  "tzName"=> "Turkmenistan Time"
                ],
                [
                  "country_id"=> 227,
                  "zoneName"=> "America/Grand_Turk",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "EST",
                  "tzName"=> "Eastern Standard Time (North America"
                ],
                [
                  "country_id"=> 228,
                  "zoneName"=> "Pacific/Funafuti",
                  "gmtOffset"=> 43200,
                  "gmtOffsetName"=> "UTC+12=>00",
                  "abbreviation"=> "TVT",
                  "tzName"=> "Tuvalu Time"
                ],
                [
                  "country_id"=> 229,
                  "zoneName"=> "Africa/Kampala",
                  "gmtOffset"=> 10800,
                  "gmtOffsetName"=> "UTC+03=>00",
                  "abbreviation"=> "EAT",
                  "tzName"=> "East Africa Time"
                ],
                [
                  "country_id"=> 230,
                  "zoneName"=> "Europe/Kiev",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "EET",
                  "tzName"=> "Eastern European Time"
                ],
                [
                  "country_id"=> 230,
                  "zoneName"=> "Europe/Simferopol",
                  "gmtOffset"=> 10800,
                  "gmtOffsetName"=> "UTC+03=>00",
                  "abbreviation"=> "MSK",
                  "tzName"=> "Moscow Time"
                ],
                [
                  "country_id"=> 230,
                  "zoneName"=> "Europe/Uzhgorod",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "EET",
                  "tzName"=> "Eastern European Time"
                ],
                [
                  "country_id"=> 230,
                  "zoneName"=> "Europe/Zaporozhye",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "EET",
                  "tzName"=> "Eastern European Time"
                ],
                [
                  "country_id"=> 231,
                  "zoneName"=> "Asia/Dubai",
                  "gmtOffset"=> 14400,
                  "gmtOffsetName"=> "UTC+04=>00",
                  "abbreviation"=> "GST",
                  "tzName"=> "Gulf Standard Time"
                ],
                [
                  "country_id"=> 232,
                  "zoneName"=> "Europe/London",
                  "gmtOffset"=> 0,
                  "gmtOffsetName"=> "UTC±00",
                  "abbreviation"=> "GMT",
                  "tzName"=> "Greenwich Mean Time"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "America/Adak",
                  "gmtOffset"=> -36000,
                  "gmtOffsetName"=> "UTC-10=>00",
                  "abbreviation"=> "HST",
                  "tzName"=> "Hawaii–Aleutian Standard Time"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "America/Anchorage",
                  "gmtOffset"=> -32400,
                  "gmtOffsetName"=> "UTC-09=>00",
                  "abbreviation"=> "AKST",
                  "tzName"=> "Alaska Standard Time"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "America/Boise",
                  "gmtOffset"=> -25200,
                  "gmtOffsetName"=> "UTC-07=>00",
                  "abbreviation"=> "MST",
                  "tzName"=> "Mountain Standard Time (North America"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "America/Chicago",
                  "gmtOffset"=> -21600,
                  "gmtOffsetName"=> "UTC-06=>00",
                  "abbreviation"=> "CST",
                  "tzName"=> "Central Standard Time (North America"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "America/Denver",
                  "gmtOffset"=> -25200,
                  "gmtOffsetName"=> "UTC-07=>00",
                  "abbreviation"=> "MST",
                  "tzName"=> "Mountain Standard Time (North America"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "America/Detroit",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "EST",
                  "tzName"=> "Eastern Standard Time (North America"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "America/Indiana/Indianapolis",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "EST",
                  "tzName"=> "Eastern Standard Time (North America"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "America/Indiana/Knox",
                  "gmtOffset"=> -21600,
                  "gmtOffsetName"=> "UTC-06=>00",
                  "abbreviation"=> "CST",
                  "tzName"=> "Central Standard Time (North America"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "America/Indiana/Marengo",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "EST",
                  "tzName"=> "Eastern Standard Time (North America"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "America/Indiana/Petersburg",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "EST",
                  "tzName"=> "Eastern Standard Time (North America"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "America/Indiana/Tell_City",
                  "gmtOffset"=> -21600,
                  "gmtOffsetName"=> "UTC-06=>00",
                  "abbreviation"=> "CST",
                  "tzName"=> "Central Standard Time (North America"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "America/Indiana/Vevay",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "EST",
                  "tzName"=> "Eastern Standard Time (North America"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "America/Indiana/Vincennes",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "EST",
                  "tzName"=> "Eastern Standard Time (North America"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "America/Indiana/Winamac",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "EST",
                  "tzName"=> "Eastern Standard Time (North America"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "America/Juneau",
                  "gmtOffset"=> -32400,
                  "gmtOffsetName"=> "UTC-09=>00",
                  "abbreviation"=> "AKST",
                  "tzName"=> "Alaska Standard Time"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "America/Kentucky/Louisville",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "EST",
                  "tzName"=> "Eastern Standard Time (North America"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "America/Kentucky/Monticello",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "EST",
                  "tzName"=> "Eastern Standard Time (North America"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "America/Los_Angeles",
                  "gmtOffset"=> -28800,
                  "gmtOffsetName"=> "UTC-08=>00",
                  "abbreviation"=> "PST",
                  "tzName"=> "Pacific Standard Time (North America"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "America/Menominee",
                  "gmtOffset"=> -21600,
                  "gmtOffsetName"=> "UTC-06=>00",
                  "abbreviation"=> "CST",
                  "tzName"=> "Central Standard Time (North America"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "America/Metlakatla",
                  "gmtOffset"=> -32400,
                  "gmtOffsetName"=> "UTC-09=>00",
                  "abbreviation"=> "AKST",
                  "tzName"=> "Alaska Standard Time"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "America/New_York",
                  "gmtOffset"=> -18000,
                  "gmtOffsetName"=> "UTC-05=>00",
                  "abbreviation"=> "EST",
                  "tzName"=> "Eastern Standard Time (North America"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "America/Nome",
                  "gmtOffset"=> -32400,
                  "gmtOffsetName"=> "UTC-09=>00",
                  "abbreviation"=> "AKST",
                  "tzName"=> "Alaska Standard Time"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "America/North_Dakota/Beulah",
                  "gmtOffset"=> -21600,
                  "gmtOffsetName"=> "UTC-06=>00",
                  "abbreviation"=> "CST",
                  "tzName"=> "Central Standard Time (North America"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "America/North_Dakota/Center",
                  "gmtOffset"=> -21600,
                  "gmtOffsetName"=> "UTC-06=>00",
                  "abbreviation"=> "CST",
                  "tzName"=> "Central Standard Time (North America"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "America/North_Dakota/New_Salem",
                  "gmtOffset"=> -21600,
                  "gmtOffsetName"=> "UTC-06=>00",
                  "abbreviation"=> "CST",
                  "tzName"=> "Central Standard Time (North America"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "America/Phoenix",
                  "gmtOffset"=> -25200,
                  "gmtOffsetName"=> "UTC-07=>00",
                  "abbreviation"=> "MST",
                  "tzName"=> "Mountain Standard Time (North America"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "America/Sitka",
                  "gmtOffset"=> -32400,
                  "gmtOffsetName"=> "UTC-09=>00",
                  "abbreviation"=> "AKST",
                  "tzName"=> "Alaska Standard Time"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "America/Yakutat",
                  "gmtOffset"=> -32400,
                  "gmtOffsetName"=> "UTC-09=>00",
                  "abbreviation"=> "AKST",
                  "tzName"=> "Alaska Standard Time"
                ],
                [
                  "country_id"=> 233,
                  "zoneName"=> "Pacific/Honolulu",
                  "gmtOffset"=> -36000,
                  "gmtOffsetName"=> "UTC-10=>00",
                  "abbreviation"=> "HST",
                  "tzName"=> "Hawaii–Aleutian Standard Time"
                ],
                [
                  "country_id"=> 234,
                  "zoneName"=> "Pacific/Midway",
                  "gmtOffset"=> -39600,
                  "gmtOffsetName"=> "UTC-11=>00",
                  "abbreviation"=> "SST",
                  "tzName"=> "Samoa Standard Time"
                ],
                [
                  "country_id"=> 234,
                  "zoneName"=> "Pacific/Wake",
                  "gmtOffset"=> 43200,
                  "gmtOffsetName"=> "UTC+12=>00",
                  "abbreviation"=> "WAKT",
                  "tzName"=> "Wake Island Time"
                ],
                [
                  "country_id"=> 235,
                  "zoneName"=> "America/Montevideo",
                  "gmtOffset"=> -10800,
                  "gmtOffsetName"=> "UTC-03=>00",
                  "abbreviation"=> "UYT",
                  "tzName"=> "Uruguay Standard Time"
                ],
                [
                  "country_id"=> 236,
                  "zoneName"=> "Asia/Samarkand",
                  "gmtOffset"=> 18000,
                  "gmtOffsetName"=> "UTC+05=>00",
                  "abbreviation"=> "UZT",
                  "tzName"=> "Uzbekistan Time"
                ],
                [
                  "country_id"=> 236,
                  "zoneName"=> "Asia/Tashkent",
                  "gmtOffset"=> 18000,
                  "gmtOffsetName"=> "UTC+05=>00",
                  "abbreviation"=> "UZT",
                  "tzName"=> "Uzbekistan Time"
                ],
                [
                  "country_id"=> 237,
                  "zoneName"=> "Pacific/Efate",
                  "gmtOffset"=> 39600,
                  "gmtOffsetName"=> "UTC+11=>00",
                  "abbreviation"=> "VUT",
                  "tzName"=> "Vanuatu Time"
                ],
                [
                  "country_id"=> 238,
                  "zoneName"=> "Europe/Vatican",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "CET",
                  "tzName"=> "Central European Time"
                ],
                [
                  "country_id"=> 239,
                  "zoneName"=> "America/Caracas",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "VET",
                  "tzName"=> "Venezuelan Standard Time"
                ],
                [
                  "country_id"=> 240,
                  "zoneName"=> "Asia/Ho_Chi_Minh",
                  "gmtOffset"=> 25200,
                  "gmtOffsetName"=> "UTC+07=>00",
                  "abbreviation"=> "ICT",
                  "tzName"=> "Indochina Time"
                ],
                [
                  "country_id"=> 241,
                  "zoneName"=> "America/Tortola",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 242,
                  "zoneName"=> "America/St_Thomas",
                  "gmtOffset"=> -14400,
                  "gmtOffsetName"=> "UTC-04=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Atlantic Standard Time"
                ],
                [
                  "country_id"=> 243,
                  "zoneName"=> "Pacific/Wallis",
                  "gmtOffset"=> 43200,
                  "gmtOffsetName"=> "UTC+12=>00",
                  "abbreviation"=> "WFT",
                  "tzName"=> "Wallis & Futuna Time"
                ],
                [
                  "country_id"=> 244,
                  "zoneName"=> "Africa/El_Aaiun",
                  "gmtOffset"=> 3600,
                  "gmtOffsetName"=> "UTC+01=>00",
                  "abbreviation"=> "WEST",
                  "tzName"=> "Western European Summer Time"
                ],
                [
                  "country_id"=> 245,
                  "zoneName"=> "Asia/Aden",
                  "gmtOffset"=> 10800,
                  "gmtOffsetName"=> "UTC+03=>00",
                  "abbreviation"=> "AST",
                  "tzName"=> "Arabia Standard Time"
                ],
                [
                  "country_id"=> 246,
                  "zoneName"=> "Africa/Lusaka",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "CAT",
                  "tzName"=> "Central Africa Time"
                ],
                [
                  "country_id"=> 247,
                  "zoneName"=> "Africa/Harare",
                  "gmtOffset"=> 7200,
                  "gmtOffsetName"=> "UTC+02=>00",
                  "abbreviation"=> "CAT",
                  "tzName"=> "Central Africa Time"
                ]
              ]

        ];
    }

}
