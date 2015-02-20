<?php

use yii\db\Schema;
use yii\db\Migration;

class m150219_132020_init3 extends Migration
{
    public function up()
    {
    	$this->createTable('{{%res_title}}', [
    			'ID'                   	=> Schema::TYPE_PK,
    			'titlename' 	       	=> Schema::TYPE_STRING . '(255) NOT NULL',
    			]
    	);	
    	$this->insert('{{%res_title}}', ['ID'=>1, 'titlename'=>'Herr']);
    	$this->insert('{{%res_title}}', ['ID'=>2, 'titlename'=>'Frau']);
    	$this->insert('{{%res_title}}', ['ID'=>3, 'titlename'=>'Ing.']);
    	$this->insert('{{%res_title}}', ['ID'=>4, 'titlename'=>'DI']);
    	$this->insert('{{%res_title}}', ['ID'=>5, 'titlename'=>'Dr.']);
    	$this->insert('{{%res_title}}', ['ID'=>6, 'titlename'=>'Dr.med.']);
    	$this->insert('{{%res_title}}', ['ID'=>7, 'titlename'=>'DI Dr.']);
    	$this->insert('{{%res_title}}', ['ID'=>8, 'titlename'=>'DDr.']);
    	$this->insert('{{%res_title}}', ['ID'=>9, 'titlename'=>'Mag.']);
    	$this->insert('{{%res_title}}', ['ID'=>10, 'titlename'=>'Mag.a']);
    	$this->insert('{{%res_title}}', ['ID'=>11, 'titlename'=>'Mmag.']);
    	$this->insert('{{%res_title}}', ['ID'=>12, 'titlename'=>'Mag.vet.med']);
    	$this->insert('{{%res_title}}', ['ID'=>13, 'titlename'=>'BSc.']);
    	$this->insert('{{%res_title}}', ['ID'=>14, 'titlename'=>'MSc.']);
    	$this->insert('{{%res_title}}', ['ID'=>15, 'titlename'=>'Bgm.']);
    	$this->insert('{{%res_title}}', ['ID'=>16, 'titlename'=>'NR Bgm.']);
    	$this->insert('{{%res_title}}', ['ID'=>17, 'titlename'=>'Familie']);
    	
    	$this->createTable('{{%res_partner}}', [
    			'ID'                   	=> Schema::TYPE_PK,
    			'partnername' 	       	=> Schema::TYPE_STRING . '(255) NOT NULL',
    			'title_ID'				=> Schema::TYPE_INTEGER,
    			'givenname' 	       	=> Schema::TYPE_STRING . '(100) ',
    			'surename' 	       		=> Schema::TYPE_STRING . '(100) ',
    			'street' 	       		=> Schema::TYPE_STRING . '(100) ',
    			'zip' 	       			=> Schema::TYPE_STRING . '(24) ',
    			'city' 	       			=> Schema::TYPE_STRING . '(255) ',
    			'country_ID'      		=> Schema::TYPE_INTEGER,
    			'email'      			=> Schema::TYPE_STRING . '(255) ',
    			'website'      			=> Schema::TYPE_STRING . '(255) ',
    			'phone'      			=> Schema::TYPE_STRING . '(255) ',
    			'comment' 	       		=> Schema::TYPE_STRING . '(255) ',
    			'active' 	       		=> Schema::TYPE_BOOLEAN,
    			'language' 	       		=> Schema::TYPE_STRING . '(11) ',
    			'parent_ID'				=> Schema::TYPE_INTEGER,
    			'is_customer' 	       	=> Schema::TYPE_BOOLEAN,
    			'customer_number' 		=> Schema::TYPE_STRING . '(32) ',
    			'is_supplier' 	       	=> Schema::TYPE_BOOLEAN,
    			'supplier_number' 		=> Schema::TYPE_STRING . '(32) ',
    			'is_company' 	       	=> Schema::TYPE_BOOLEAN,
    			'vat'      				=> Schema::TYPE_STRING . '(32) ',
    			'vat_subjected'      	=> Schema::TYPE_BOOLEAN,
    			'vat_checked'      		=> Schema::TYPE_DATE,
    			'is_employee' 	       	=> Schema::TYPE_BOOLEAN,
    			'employee_number' 		=> Schema::TYPE_STRING . '(32) ',
    			'is_petowner' 	       	=> Schema::TYPE_BOOLEAN,
    	]);
    	
    	$this->addForeignKey('fk_res_partner_title', '{{%res_partner}}', 'title_ID', '{{%res_title}}', 'ID');
    	$this->addForeignKey('fk_res_partner_country', '{{%res_partner}}', 'country_ID', '{{%res_country}}', 'ID');
    	$this->addForeignKey('fk_res_partner_partner', '{{%res_partner}}', 'parent_ID', '{{%res_partner}}', 'ID');
    	
    }

    public function down()
    {
         $this->dropTable('{{%res_partner}}');
         $this->dropTable('{{%res_title}}');
    }
}
