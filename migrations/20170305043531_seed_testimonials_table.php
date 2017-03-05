<?php

use Phinx\Migration\AbstractMigration;

class SeedTestimonialsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
    public function up()
    {
        $password_hash = password_hash('verysecret', PASSWORD_DEFAULT);

        $this->execute("
            insert into testimonials (id, title, testimonial, user_id)
            values ('1', 'What a great site!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac elit consectetur, porta dolor mattis, rutrum nisi. Nam a congue dui, tincidunt lobortis felis. Praesent cursus ac orci sed vestibulum. In vel arcu tristique, tincidunt ex at, lacinia sem. Integer posuere interdum turpis ut vestibulum. Curabitur metus nulla, dapibus ut magna eu, maximus euismod turpis. Fusce a leo libero. Nulla hendrerit ante sed ipsum ultricies, ac scelerisque nibh tempor. Ut tortor nibh, ornare a sollicitudin euismod, mattis ut sapien. Aenean iaculis fringilla ante, ac ultrices libero. Sed nec odio congue, ullamcorper elit id, viverra ipsum. Morbi posuere ante vel lectus pulvinar, vel egestas magna vehicula. Vivamus bibendum ligula eget felis convallis, vel consequat nisl posuere. In non faucibus felis. Nunc vel laoreet arcu, in ultrices augue. Fusce elementum urna at augue pellentesque laoreet.', '1')
        ");
    }

    public function down()
    {

    }
}
