<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comment_1 = new \App\Comments();
        $comment_1->user_id = '1';
        $comment_1->posts_id = '1';
        $comment_1->body = 'Comentariul intai.';
        $comment_1->save();

        $comment_1 = new \App\Comments();
        $comment_1->user_id = '1';
        $comment_1->posts_id = '1';
        $comment_1->body = 'Comentariul al doilea.';
        $comment_1->save();
    }
}
