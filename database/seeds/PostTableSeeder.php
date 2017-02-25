<?php
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create(['title' => 'primer articulo',
            'content'              => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate pariatur ullam suscipit quas iusto non nesciunt omnis unde delectus at, minima quaerat, veritatis accusantium, atque, facere. Nisi esse, tempore. Nulla officiis sed tempore repellat dignissimos ad eaque animi autem, officia, illo qui maxime. Incidunt assumenda fugit dolores quod eius quo, blanditiis vero quos similique deleniti distinctio nemo animi magnam doloribus libero veritatis ullam a nisi! Deleniti asperiores deserunt, quo eaque voluptas aspernatur magnam. Quia repudiandae, numquam ipsam ab ullam dolore optio alias quaerat vero nam porro velit ex, voluptatum illum corporis quos ea consequuntur autem aspernatur. Quia beatae cupiditate excepturi.',
            'tags'                 => 'ufopolis,primer,articulo ,seeder',
            'photo'                => 'http://www.biografiasyvidas.com/biografia/v/fotos/verne_julio_2.jpg',

        ]
        );
         Post::create(['title' => 'segundo articulo',
            'content'              => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil consectetur quod doloremque eaque dolores aperiam vel in, maiores inventore, ratione quo reiciendis ex soluta beatae officia eligendi excepturi vero distinctio provident, neque mollitia, fugit quas! Consectetur incidunt voluptatibus rem. Ea excepturi, quidem, a amet modi blanditiis consectetur recusandae mollitia voluptatibus eum cupiditate sit in doloribus corporis tempora fugit dolor perferendis numquam unde vero porro laboriosam natus doloremque quos consequuntur. Consectetur id est illum ipsa fugiat, pariatur, impedit, repudiandae maiores eum nobis ipsum repellendus facilis ipsam earum beatae non nulla culpa. Ullam consectetur at itaque vero consequatur minus praesentium, dolores dicta! ',
            'tags'                 => 'julio,verne,segundo,articulo ,seeder',
            'photo'                => 'http://www.biografiasyvidas.com/biografia/v/fotos/verne_julio_2.jpg',

        ]
        );

    }
}
