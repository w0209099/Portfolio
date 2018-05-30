<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(templates_table_Seeder::class);
        $this->call(pages_table_Seeder::class);
        $this->call(articles_table_Seeder::class);
        $this->call(contents_table_Seeder::class);
        $this->call(permissions_table_Seeder::class);
        $this->call(users_table_Seeder::class);
        $this->call(user_permissions_table_Seeder::class);
    }
}

class templates_table_Seeder extends Seeder
{

     //Run the templates seeds.

    public function run()
    {
        DB::table('templates')->insert([
            'Template_name' => "mikeCSS",
            'Template_descript' => "mikesCSS",
            'Template_active' => "false",
            'Template_content' => "body {background: #6effff;}",
            'Created_by' => '1',
            'Modifyed_by'=> '1',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),


        ]);
        DB::table('templates')->insert([
            'Template_name' => "andrewCSS",
            'Template_descript' => "andrewsCSS",
            'Template_active' => "false",
            'Template_content' => "body {background: #d280dd;}",
            'Created_by' => '1',
            'Modifyed_by'=> '1',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),


        ]);
    }//end run
}//end templates_Seeder

class pages_table_Seeder extends Seeder
{

    //Run the pages seeds.

    public function run()
    {
        DB::table('pages')->insert([
            'Pages_name' => "mike page 1",
            'Pages_alias' => "placeholder",
            'Pages_descript' => "mikes 1st page",
            'Created_by' => '1',
            'Modifyed_by'=> '1',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('pages')->insert([
            'Pages_name' => "andrew page 1",
            'Pages_alias' => "placeholder",
            'Pages_descript' => "andrews 1st page",
            'Created_by' => '1',
            'Modifyed_by'=> '1',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
    }//end run
}//end pages_Seeder

class articles_table_Seeder extends Seeder
{

    //Run the articles seeds.

    public function run()
    {
        DB::table('articles')->insert([
            'Articles_name'=>'first article',
            'Articles_title'=>'article 1',
            'Articles_page'=>'1',
            'Articles_descript'=>'placeholder',
            'Articles_content'=>'placeholder',
            'Articles_html'=>'placeholder',
            'Articles_CA_ID'=>'1',
            'Articles_all_pages'=>'false',
            'Created_by' => '1',
            'Modifyed_by'=> '1',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('articles')->insert([
            'Articles_name'=>'second article',
            'Articles_title'=>'article 2',
            'Articles_page'=>'2',
            'Articles_descript'=>'placeholder',
            'Articles_content'=>'placeholder',
            'Articles_html'=>'placeholder',
            'Articles_CA_ID'=>'2',
            'Articles_all_pages'=>'false',
            'Created_by' => '1',
            'Modifyed_by'=> '1',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
    }//end run
}//end articles Seeder


class contents_table_Seeder extends Seeder
{

    //Run the contents seeds.

    public function run()
    {
        DB::table('contents')->insert([
            'contents_name'=>'first content',
            'contents_alias'=>'content 1',
            'contents_order'=>'1',
            'contents_descript'=>'placeholder',
            'Created_by' => '1',
            'Modifyed_by'=> '1',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('contents')->insert([
            'contents_name'=>'second content',
            'contents_alias'=>'content 2',
            'contents_order'=>'2',
            'contents_descript'=>'placeholder',
            'Created_by' => '1',
            'Modifyed_by'=> '1',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
    }//end run
}//end contents Seeder

class permissions_table_Seeder extends Seeder
{
    //Run the administrator seeds.
    public function run()
    {
        DB::table('permissions')->insert([
            'permission_type'=>'administrator',
        ]);
        DB::table('permissions')->insert([
            'permission_type'=>'editor',
        ]);
        DB::table('permissions')->insert([
            'permission_type'=>'user',
        ]);
    }//end run
}//end permissions Seeder

class users_table_Seeder extends Seeder
{
    //Run the users seeds.
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'andrew',
            'email'=>'andrew@home.ca',
            'password'=>Hash::make('password'),
            'Created_by'=>'1',
            'Modifyed_by'=>'1',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        DB::table('users')->insert([
            'name'=>'bob',
            'email'=>'bob@home.ca',
            'password'=>Hash::make('bobcat'),
            'Created_by'=>'1',
            'Modifyed_by'=>'1',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),

        ]);
        DB::table('users')->insert([
            'name'=>'mo',
            'email'=>'foreign@Contaminant',
            'password'=>Hash::make('walle'),
            'Created_by'=>'1',
            'Modifyed_by'=>'1',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
    }//end run
}//end users Seeder

class user_permissions_table_Seeder extends Seeder
{
    //Run the user_permissions seeds.
    public function run()
    {
        DB::table('user_permissions')->insert([
            'user_id'=>'1',
            'permissions_id'=>'1',
        ]);
        DB::table('user_permissions')->insert([
            'user_id'=>'1',
            'permissions_id'=>'2',
        ]);
        DB::table('user_permissions')->insert([
            'user_id'=>'1',
            'permissions_id'=>'3',
        ]);
        DB::table('user_permissions')->insert([
            'user_id'=>'2',
            'permissions_id'=>'2',
        ]);
        DB::table('user_permissions')->insert([
            'user_id'=>'2',
            'permissions_id'=>'3',
        ]);
        DB::table('user_permissions')->insert([
            'user_id'=>'3',
            'permissions_id'=>'3',
        ]);

    }//end run
}//end user_permissions Seeder