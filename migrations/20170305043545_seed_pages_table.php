<?php

use Phinx\Migration\AbstractMigration;

class SeedPagesTable extends AbstractMigration
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
            insert into pages (id, browser_title, page_content)
            values ('1', 'About', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac elit consectetur, porta dolor mattis, rutrum nisi. Nam a congue dui, tincidunt lobortis felis. Praesent cursus ac orci sed vestibulum. In vel arcu tristique, tincidunt ex at, lacinia sem. Integer posuere interdum turpis ut vestibulum. Curabitur metus nulla, dapibus ut magna eu, maximus euismod turpis. Fusce a leo libero. Nulla hendrerit ante sed ipsum ultricies, ac scelerisque nibh tempor. Ut tortor nibh, ornare a sollicitudin euismod, mattis ut sapien. Aenean iaculis fringilla ante, ac ultrices libero. Sed nec odio congue, ullamcorper elit id, viverra ipsum. Morbi posuere ante vel lectus pulvinar, vel egestas magna vehicula. Vivamus bibendum ligula eget felis convallis, vel consequat nisl posuere. In non faucibus felis. Nunc vel laoreet arcu, in ultrices augue. Fusce elementum urna at augue pellentesque laoreet.')
        ");
    }

    public function down()
    {

    }
}
