<?php
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

use App\Feedback;

class FeedbackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
      public function run()
    {
        Feedback::create(['user'  => 'facundo tanjausen',
            'content'              => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia eaque minima laboriosam ipsum tempora sequi! Ducimus, excepturi praesentium voluptates reiciendis debitis fugiat, quasi ullam magni suscipit eveniet, voluptas aut consequuntur. Minus earum suscipit labore libero quisquam laudantium, consequatur esse. Fugiat dolorem quia harum saepe deserunt, non qui debitis! Voluptate neque sequi dicta nihil tenetur placeat ducimus iusto, vitae ad ipsam quia velit repudiandae magni libero commodi asperiores hic id, exercitationem cum odit maiores minima laborum quae! Ab doloribus assumenda ex nihil porro? Doloribus perspiciatis fuga molestiae voluptates est, tenetur consequatur veniam. Cum veniam saepe qui itaque magni quos, rem, possimus dignissimos officia quas in, molestiae. Sit facere praesentium sunt velit ea, voluptas possimus voluptatem animi placeat perspiciatis tempore est libero id, maiores molestias eius magni explicabo, ut dolorum nam nemo! Libero, nesciunt veniam facilis voluptas consequuntur tenetur labore laboriosam iusto magnam repellat a praesentium! Hic necessitatibus quo ut modi, ex explicabo, quia possimus deleniti illum accusamus. Quas dicta doloribus minus, maxime nam rerum incidunt, praesentium beatae consequatur aut quod ducimus adipisci illo accusamus, facere sint id cum eveniet quibusdam, qui amet ullam placeat mollitia minima dolor. Nihil quis, perferendis eaque sit quaerat quam provident, veniam quos a quas tenetur modi.',]);
         Feedback::create(['user'  => 'agapito',
            'content'              => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, autem tenetur rem. Expedita, odit? Consequuntur quisquam explicabo officiis dolorem nihil, libero est, unde voluptates fuga dicta earum rerum suscipit. Rem ratione nobis magnam natus dicta dignissimos molestiae saepe laborum suscipit optio laudantium cum, assumenda, omnis autem impedit non id! Tempore nobis, asperiores consequuntur temporibus, distinctio ea sequi doloremque ullam error, harum consectetur neque delectus eaque reiciendis corporis iste! Vel, veritatis omnis maxime nisi dignissimos impedit reprehenderit voluptas quasi corrupti repellendus ratione, a ex eos consequuntur saepe assumenda ullam! Ipsum perferendis eaque voluptate esse excepturi, quaerat incidunt harum, nihil! Repudiandae, error.',]);


    }
}
