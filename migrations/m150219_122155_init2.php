<?php

use yii\db\Schema;
use yii\db\Migration;
use chd7well\master\helpers\ArrayHelper;


class m150219_122155_init2 extends Migration
{
    public function up()
    {
    	$this->createTable('{{%res_country}}', [
    			'ID'                   	=> Schema::TYPE_PK,
    			'countryname' 	       	=> Schema::TYPE_STRING . '(255) NOT NULL',
    			'code' 	       			=> Schema::TYPE_STRING . '(11) ',
    			'currency_ID'      		=> Schema::TYPE_INTEGER,
    	]);
    	 
    	$this->addForeignKey('fk_res_country_currency', '{{%res_country}}', 'currency_ID', '{{%res_currency}}', 'ID');
    	
    	$data = ArrayHelper::parse_csv(dirname ( __FILE__ ) . '/country_7well.csv');
    	foreach($data as $record){
    		$this->insert('{{%res_country}}', $record);
    	}
    	
    }

    public function down()
    {
       $this->dropTable('{{%res_country}}');
    }
}
