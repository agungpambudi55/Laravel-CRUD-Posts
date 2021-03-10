<!-- https://laravel.com/docs/8.x/queries -->

<?php
    // $data = DB::select('select * from posts where id_post = :id', ['id' => 1]);
    // $data = DB::table('posts')->select('title','content')->get();
    // $data = DB::table('posts')->get();
    // $data = DB::table('comments')->get();
    // $data = DB::table('posts')->orderBy('id_post', 'ASC')->get();
    // $data = DB::table('posts')->where('id_post', '=' , '1')->get(); 
    // $data = DB::table('posts')
    //     ->join('comments','posts.id_post','=','comments.id_post')
    //     ->get();
    // $data = DB::table('posts')
    //     ->join('comments','posts.id_post','=','comments.id_post')
    //     ->first();
    // $data = DB::table('posts')->where('id_post', '=' , '1')->first(); 
    // $data = DB::table('posts')->count();
    // $data = DB::table('posts')->min('id_post');
    // $data = DB::table('posts')->max('id_post');

    // if (DB::table('orders')->where('finalized', 1)->exists()) {
    // }

    // echo $data;

    // echo $data->id_post;
    // echo $data->title;
    // echo $data->content;
    // echo $data->name;
    // echo $data->comment;

    // foreach ($data as $dt) {
    //     echo $dt->id_post." | ".$dt->title." | ".$dt->content."</br>";
    // }

    // foreach ($data as $dt) {
    //     echo $dt->id_post." | ".$dt->title." | ".$dt->content." | ".$dt->name." | ".$dt->comment."</br>";
    // }
?>