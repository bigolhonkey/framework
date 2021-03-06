
use Cygnite\Database\Migration;
use Cygnite\Database\Table\Schema;

/**
* This file is generated by Cygnite Migration Command
* You may use up and down method to create migration
*/

class {%className%} extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Your schema to migrate
        Schema::make('{%table_name%}', function ($schema)
        {
            //$schema->setTableName('{%table_name%}');
            // If you don't specify the connection name, system will use default connection
            //$schema->on('{%database%}');

            $schema->create([
                    ['column'=> 'id', 'type' => 'int', 'length' => 11,
                     'increment' => true, 'key' => 'primary'],
		
                    /*..Add columns to your table schema .*/

                    ['column'=> 'created_at', 'type' => 'datetime'],
                    ['column'=> 'updated_at', 'type' => 'datetime'],

            ], 'InnoDB', 'latin1');
        });
		
    }

    /**
     * Revert back your migrations.
     *
     * @return void
     */
    public function down()
    {
        //Roll back your changes done by up method.
        Schema::make('{%table_name%}', function ($schema)
        {
            $schema->drop();
        });
    }
}// End of the Migration
