<?php

namespace App;

use PhpParser\NodeVisitor\FirstFindingVisitor;

class Post 
{
    private static $blog_posts = [
        [
            "id" => 1,
            "title" => "Judul Post Pertama",
            "author" => "Yosua Wijaya",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere, neque quasi in itaque, ratione accusantium iusto necessitatibus corporis error nam est. Expedita, maiores facere nemo quos earum consequatur accusamus reprehenderit autem eum aperiam tempora nisi vitae laborum libero blanditiis tenetur rerum saepe, quaerat suscipit, sint est corrupti animi. Tenetur placeat ea vero quo atque, eveniet corrupti velit animi. Eligendi alias excepturi quam fugiat similique rerum veniam recusandae tempore necessitatibus deserunt nihil velit eveniet ea reiciendis perferendis dolorem, corporis non sunt."
        ],
        [
            "id" => 2,
            "title" => "Judul Post Kedua",
            "author" => "Budi Kurniawan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi optio, quibusdam temporibus id dolor consequatur totam fuga numquam, veniam voluptatum iusto in accusantium ad perspiciatis beatae possimus ullam, nostrum at cumque? Accusantium, repellat officiis similique odio repellendus id quam voluptatum voluptatibus laudantium sint modi iusto delectus consequuntur magnam ut? Quidem, est voluptatum voluptate commodi necessitatibus libero. Quasi enim minus, doloribus repellendus amet nihil beatae quidem hic, quisquam nisi, quia excepturi. Quis sit iure rerum vitae. Doloribus doloremque quae provident error, perspiciatis soluta, libero, odio non sequi eligendi mollitia ea magni rerum beatae blanditiis omnis sapiente ipsam recusandae fugit minus quos."
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($id) {
        $posts = static::all(); //self itu untuk property static, static itu untuk method static
        $choosen_post = [];

        // foreach($posts as $p) {
        //     if($p['id'] == $id)
        //         $choosen_post = $p;
        // }

        return $posts->firstWhere('id', $id);
    }
}
