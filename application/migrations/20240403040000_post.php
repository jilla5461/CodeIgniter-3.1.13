<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
class Migration_Post extends CI_Migration { 
    public function up() { 
            $this->dbforge->add_field(array(
            'id' => array(
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => TRUE,
                    'auto_increment' => TRUE
            ),
            'name' => array(
                    'type' => 'VARCHAR',
                    'constraint' => '100'
            ),
            'email' => array(
                    'type' => 'TEXT',
                    'null' => TRUE
            ),
            'password' => array(
                'type' => 'varchar',
                'constraint' => 255,
                'null' => TRUE
        ),
        'age' => array(
            'type' => 'INT',
            'null' => TRUE
    ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('posts');
        echo "table posts created successfully";
        
    }

    public function down()
    {
        $this->dbforge->drop_table('posts');
        echo "table posts drop  successfully";
    }
}

