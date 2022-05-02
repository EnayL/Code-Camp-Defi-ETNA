<?php

namespace Database\Seeders;

use App\Models\Profil;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Self_;

class ProfilSeeder extends Seeder
{
    const NOMS = [
        'RINAZ',
        'ARNOULD',
        'BELGUERMA',
        'CARRA',
        'CROS',
        'DAEMS',
        'DEHILI',
        'DOUMERGUE',
        'LOKWA',
        'LE QUEREC',
        'MARAIS',
        'MOESAN',
        'PANKIEWICZ',
        'TORREGROSSA',
        'TRAM',
        'CHERON',
        'DAOUAH',
        'MOHAMED',
        'MOSCOU',
        'NKELEZI',
        'PROD HOMME',
        'DELANDE',
        'POJER',
        'SILVESTRE',
        'GENEVIEVE',
        'KEMAYOU',
        'MUNGALU MUKAMINA',
        'CHARPENTIER',
        'COURTAUX',
        'DEMANGE',
        'LADEIRA FERREIRA',
        'MÉMAIN',
        'TADROS',
        'VANDISTE',
        'VIGNAN',
        'DRIANT',
        'GUILMAIN',
        'CISSOKHO',
        'DAIME',
        'DRAME',
        'FELIX MARTINS',
        'GASSAMA',
        'THAP',
        'CRISTIANI',
        'SENEZERGUES',
        'DELAITRE',
        'MAUDUIT',
        'HANROT',
    ];

    const PRENOMS = [
        'Samir',
        'Lutricia',
        'Sabri',
        'Cameron',
        'Arthur',
        'Sandra',
        'Mélissa',
        'Clément',
        'Jennifer',
        'Robin',
        'Jérémie',
        'Clément',
        'Mégane',
        'Lisa',
        'Anthony',
        'Jennifer',
        'Fanida',
        'Sophie',
        'Cédric',
        'Eliza',
        'Magalie',
        'Colyne',
        'Tony',
        'Cindy',
        'Aurélie',
        'Karen',
        'Aurélie',
        'Oxana',
        'Franck',
        'Ella',
        'Jérémy',
        'Flavien',
        'Justine',
        'William',
        'Quentin',
        'Jeanne',
        'Alexandre',
        'Dambo',
        'Adeline',
        'Bintou',
        'Daniela',
        'Goundoba',
        'Linda',
        'Déborah',
        'Valérie',
        'Lola',
        'Thomas',
        'Julie',
    ];

    const SERVICE = [
        'Directeur, Service Relations École-Entreprise',
        'Service Pédagogique',
        'Service Pédagogique',
        'Service Pédagogique',
        'Service Pédagogique',
        'Service Pédagogique',
        'Service Pédagogique',
        'Service Pédagogique',
        'Service Pédagogique',
        'Service Pédagogique',
        'Service Pédagogique',
        'Service Pédagogique',
        'Service Pédagogique',
        'Service Pédagogique',
        'Service Pédagogique',
        'Service Administratif',
        'Service Administratif',
        'Service Administratif',
        'Service Administratif',
        'Service Administratif',
        'Service Administratif',
        'Service Relations École-Entreprise',
        'Service Relations École-Entreprise',
        'Service Relations École-Entreprise',
        'Service com et admissions',
        'Service com et admissions',
        'Service com et admissions',
        'BLU',
        'BLU',
        'BLU',
        'BLU',
        'BLU',
        'BLU',
        'BLU',
        'BLU',
        'Studio',
        'Studio',
        'Service RH',
        'Service RH',
        'Service RH',
        'Service RH',
        'Service RH',
        'Service RH',
        'Service Pédagogique, Service RH',
        'Service Administratif',
        'Service com et admissions',
        'BLU',
        'Studio',
    ];

    const EMAIL = [
        'rinaz_s@etna-alternance.net',
        'arnoul_l@etna-alternance.net',
        'belgue_s@etna-alternance.net',
        'carra_c@etna-alternance.net',
        'cros_a@etna-alternance.net',
        'daems_s@etna-alternance.net',
        'dehili_m@etna-alternance.net',
        'doumer_c@etna-alternance.net',
        'lokwa_j@etna-alternance.net',
        'lequer_r@etna-alternance.net',
        'marais_j@etna-alternance.net',
        'moesan_c@etna-alternance.net',
        'pankie_m@etna-alternance.net',
        'torreg_l@etna-alternance.net',
        'tram_a@etna-alternance.net',
        'cheron_j@etna-alternance.net',
        'daouah_f@etna-alternance.net',
        'moham_s@etna-alternance.net',
        'moscou_c@etna-alternance.net',
        'nkelez_e@etna-alternance.net',
        'prodho_m@etna-alternance.net',
        'deland_c@etna-alternance.net',
        'pojer_t@etna-alternance.net',
        'silves_c@etna-alternance.net',
        'genevi_a@etna-alternance.net',
        'kemayo_k@etna-alternance.net',
        'mundal_a@etna-alternance.net',
        'charpe_o@etna-alternance.net',
        'courta_f@etna-alternance.net',
        'demang_e@etna-alternance.net',
        'ladeir_j@etna-alternance.net',
        'mémain_f@etna-alternance.net',
        'tadros_j@etna-alternance.net',
        'vandis_w@etna-alternance.net',
        'vignan_q@etna-alternance.net',
        'driant_j@etna-alternance.net',
        'guilma_a@etna-alternance.net',
        'cissok_d@etna-alternance.net',
        'daime_a@etna-alternance.net',
        'drame_b@etna-alternance.net',
        'felixm_d@etna-alternance.net',
        'gassam_g@etna-alternance.net',
        'thap_l@etna-alternance.net',
        'cristi_d@etna-alternance.net',
        'seneze_v@etna-alternance.net',
        'delait_l@etna-alternance.net',
        'maudui_t@etna-alternance.net',
        'hanrot_j@etna-alternance.net',
    ];

    const TELEPHONE = [
        '00 00 00 00 00',
        '00 00 00 00 01',
        '00 00 00 00 02',
        '00 00 00 00 03',
        '00 00 00 00 04',
        '00 00 00 00 05',
        '00 00 00 00 06',
        '00 00 00 00 07',
        '00 00 00 00 08',
        '00 00 00 00 09',
        '00 00 00 00 10',
        '00 00 00 00 11',
        '00 00 00 00 12',
        '00 00 00 00 13',
        '00 00 00 00 14',
        '00 00 00 00 15',
        '00 00 00 00 16',
        '00 00 00 00 17',
        '00 00 00 00 18',
        '00 00 00 00 19',
        '00 00 00 00 20',
        '00 00 00 00 21',
        '00 00 00 00 22',
        '00 00 00 00 23',
        '00 00 00 00 24',
        '00 00 00 00 25',
        '00 00 00 00 26',
        '00 00 00 00 27',
        '00 00 00 00 28',
        '00 00 00 00 29',
        '00 00 00 00 30',
        '00 00 00 00 31',
        '00 00 00 00 32',
        '00 00 00 00 33',
        '00 00 00 00 34',
        '00 00 00 00 35',
        '00 00 00 00 36',
        '00 00 00 00 37',
        '00 00 00 00 38',
        '00 00 00 00 39',
        '00 00 00 00 40',
        '00 00 00 00 41',
        '00 00 00 00 42',
        '00 00 00 00 43',
        '00 00 00 00 44',
        '00 00 00 00 45',
        '00 00 00 00 46',
        '00 00 00 00 47',
    ];

    const IMAGE = [
        'RINAZ.png',
        'ARNOULD.png',
        'BELGUERMA.png',
        'CARRA.png',
        'CROS.png',
        'DAEMS.png',
        'DEHILI.png',
        'DOUMERGUE.png',
        'LOKWA.png',
        'LE QUEREC.png',
        'MARAIS.png',
        'MOESAN.png',
        'PANKIEWICZ.png',
        'TORREGROSSA.png',
        'TRAM.png',
        'CHERON.png',
        'DAOUAH.png',
        'MOHAMED.png',
        'MOSCOU.png',
        'NKELEZI.png',
        'PROD HOMME.png',
        'DELANDE.png',
        'POJER.png',
        'SILVESTRE.png',
        'GENEVIEVE.png',
        'KEMAYOU.png',
        'MUNGALU MUKAMINA.png',
        'CHARPENTIER.png',
        'COURTAUX.png',
        'DEMANGE.png',
        'LADEIRA FERREIRA.png',
        'MÉMAIN.png',
        'TADROS.png',
        'VANDISTE.png',
        'VIGNAN.png',
        'DRIANT.png',
        'GUILMAIN.png',
        'CISSOKHO.png',
        'DAIME.png',
        'DRAME.png',
        'FELIX MARTINS.png',
        'GASSAMA.png',
        'THAP.png',
        'CRISTIANI.png',
        'SENEZERGUES.png',
        'DELAITRE.png',
        'MAUDUIT.png',
        'HANROT.png',




    ];

    const RESPONSABLE = [

        'direction',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'employé',
        'chefRH',
        'chefadministratif',
        'chefcom',
        'chefBLU',
        'chefstudio',
    ];

    const TAGS = [
        'Direction',
        'Ip',
        'Technique',
        'Technique',
        'Technique',
        'Ip',
        'Suivi',
        'Technique',
        'Suivi',
        'Technique',
        'Technique',
        'Suivi',
        'Ip',
        'Suivi',
        'Technique',
        'Facturation',
        'Administration',
        'Administration',
        'Administration',
        'Facturation',
        'Facturation',
        'Utilisateur',
        'Utilisateur',
        'Utilisateur',
        'Admission',
        'Com',
        'Admission',
        'Asys',
        'Asys',
        'Dev',
        'Dev',
        'Dev',
        'Dev',
        'Asys',
        'Devops',
        'Utilisateur',
        'Utilisateur',
        'Propreté',
        'Office',
        'Propreté',
        'Propreté',
        'Propreté',
        'Office',
        'Utilisateur',
        'Utilisateur',
        'Utilisateur',
        'Utilisateur',
        'Utilisateur',



    ];



    public function run()
    {
        DB::table('profils')->truncate();
        $files = Storage::allFiles("public/avatars");
        // dd(self::NOMS);

        for ($i = 0; $i < count(self::NOMS); $i++) {
            $randomFile = explode("/", $files[rand(0, count($files) - 1)]);


                Profil::create([
                'nom' => self::NOMS[$i],
                'prenom' => self::PRENOMS[$i],
                'photo' => self::IMAGE[$i],
                'service' => self::SERVICE[$i],
                'telephone' => self::TELEPHONE[$i],
                'email' => self::EMAIL[$i],
                'responsable' => self::RESPONSABLE[$i],
                'tags' => self::TAGS[$i],
            ]);
        }
    }
}