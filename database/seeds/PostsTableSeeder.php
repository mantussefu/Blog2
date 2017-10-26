<?php

use Illuminate\Database\Seeder;
use App\Posts;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();

        for($i = 0; $i < 5; $i++) {
            App\Posts::create([
                'user_id' => '1',
                'title' => $faker->title,
                'body' => $faker->text
            ]);
        }
//        $post_1 = new Posts();
//        $post_1->user_id = '1';
//        $post_1->title = 'Crin Antonescu, fericit ca se trece la ora de iarna';
//        $post_1->body = '28 octombrie este o zi specială pentru fostul preşedinte interimar al României Crin Antonescu.
//        Prin trecerea la ora de iarnă, ziua de 28 decembrie va avea 25 de ore, ceea ce înseamnă că vom dormi mai mult
//        cu o oră. "Este una din puţine veşti bune pe care le-am primit în această perioadă", a declarat, căscând,
//        preşedintele PNL, Crin Antonescu. "Ultimele negocieri politice, pregătirea pentru alegeri, toate acestea m-au
//        epuizat. Abia de mai reuşeam să prind 18 ore de somn pe noapte", a precizat liderul PNL. Politicianul a promis
//        că, odată ce va ajunge la putere va avea grija ca românii să treacă la ora de iarnă cel puţin odată pe
//        săptâmână, să poată să vină odihniţi la primărie când se vor împărţi ajutoarele de la ONU.';
//        $post_1->save();
//
//        $post_2 = new Posts();
//        $post_2->user_id = '1';
//        $post_2->title = 'Povestea lui Gigel';
//        $post_2->body = 'Gigel este un băiat cu sinep mic.Este atât de mic încât când ma-sa îl vede gol îl întreabă de
//        ce are acolo o bubiță.Așa ca gigel se hotăra să își ia unul artificial și să si-l lipească,vopsindu-l,spunandu-i
//        lui ma-sa ca i+o crescut peste noapte.Dar din păcate acest gigel al nostru nu avu bani să îl cumpere.El reuși să
//        stânga bani obligandu-i pe colegii de la școală să îi dea banii de pachet.Dar tot nu era suficient așa ca s-o
//        apucat să vinda sticle de carton pt ca lui îi plăcea să aibă sticle de carton.Așa ca...ajutati-l pe gigel al
//        nostru să îți cumpere donând la numărul de telefon 073926583 sau puteți plăti pe cârdul de credit atât cât ne
//        dați toții banii';
//        $post_2->save();
    }
}
