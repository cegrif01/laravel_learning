<?php
/**
 * Created by JetBrains PhpStorm.
 * User: charles
 * Date: 5/29/13
 * Time: 12:49 AM
 * To change this template use File | Settings | File Templates.
 */
class PostsTableSeeder extends Seeder {

    public function run()
    {
        $Posts = [
            [ 'title'=>'My first post' ]
        ];

        DB::table('posts')->insert($Posts);
    }
}
