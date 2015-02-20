<?php

use yii\db\Schema;
use yii\db\Migration;
use chd7well\master\helpers\ArrayHelper;

class m150219_110841_init extends Migration
{
    public function up()
    {
    	$this->createTable('{{%res_currency}}', [
    			'ID'                   	=> Schema::TYPE_PK,
    			'currencyname' 	       	=> Schema::TYPE_STRING . '(32) NOT NULL',
    			'symbol' 	       		=> Schema::TYPE_STRING . '(11) NOT NULL',
    			'rounding' 	       		=> Schema::TYPE_FLOAT,
    			'before' 	       		=> Schema::TYPE_BOOLEAN,
    			'accuracy'      		=> Schema::TYPE_INTEGER,
    	]);
    	
   		$data = ArrayHelper::parse_csv(dirname ( __FILE__ ) . '/currency_7well.csv');
   		foreach($data as $record){
			$this->insert('{{%res_currency}}', $record);
   		}
    } 

    public function down()
    {
	$this->dropTable('{{%res_currency}}');
    }
}
