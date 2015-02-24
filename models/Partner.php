<?php

namespace chd7well\resource\models;

use Yii;

/**
 * This is the model class for table "{{%res_partner}}".
 *
 * @property integer $ID
 * @property string $partnername
 * @property integer $title_ID
 * @property string $givenname
 * @property string $surename
 * @property string $street
 * @property string $zip
 * @property string $city
 * @property integer $country_ID
 * @property string $email
 * @property string $website
 * @property string $phone
 * @property string $comment
 * @property integer $active
 * @property string $language
 * @property integer $parent_ID
 * @property integer $is_customer
 * @property string $customer_number
 * @property integer $is_supplier
 * @property string $supplier_number
 * @property integer $is_company
 * @property string $vat
 * @property integer $vat_subjected
 * @property string $vat_checked
 * @property integer $is_employee
 * @property string $employee_number
 * @property integer $is_petowner
 *
 * @property ResCountry $country
 * @property Partner $parent
 * @property Partner[] $partners
 * @property ResTitle $title
 * @property SalesProductSupplier[] $salesProductSuppliers
 */
class Partner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%res_partner}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['partnername'], 'required'],
            [['title_ID', 'country_ID', 'active', 'parent_ID', 'is_customer', 'is_supplier', 'is_company', 'vat_subjected', 'is_employee', 'is_petowner'], 'integer'],
            [['vat_checked'], 'safe'],
            [['partnername', 'city', 'email', 'website', 'phone', 'comment'], 'string', 'max' => 255],
            [['givenname', 'surename', 'street'], 'string', 'max' => 100],
            [['zip'], 'string', 'max' => 24],
            [['language'], 'string', 'max' => 11],
            [['customer_number', 'supplier_number', 'vat', 'employee_number'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => Yii::t('resource', 'ID'),
            'partnername' => Yii::t('resource', 'Partnername'),
            'title_ID' => Yii::t('resource', 'Title  ID'),
            'givenname' => Yii::t('resource', 'Givenname'),
            'surename' => Yii::t('resource', 'Surename'),
            'street' => Yii::t('resource', 'Street'),
            'zip' => Yii::t('resource', 'Zip'),
            'city' => Yii::t('resource', 'City'),
            'country_ID' => Yii::t('resource', 'Country  ID'),
            'email' => Yii::t('resource', 'Email'),
            'website' => Yii::t('resource', 'Website'),
            'phone' => Yii::t('resource', 'Phone'),
            'comment' => Yii::t('resource', 'Comment'),
            'active' => Yii::t('resource', 'Active'),
            'language' => Yii::t('resource', 'Language'),
            'parent_ID' => Yii::t('resource', 'Parent  ID'),
            'is_customer' => Yii::t('resource', 'Is Customer'),
            'customer_number' => Yii::t('resource', 'Customer Number'),
            'is_supplier' => Yii::t('resource', 'Is Supplier'),
            'supplier_number' => Yii::t('resource', 'Supplier Number'),
            'is_company' => Yii::t('resource', 'Is Company'),
            'vat' => Yii::t('resource', 'Vat'),
            'vat_subjected' => Yii::t('resource', 'Vat Subjected'),
            'vat_checked' => Yii::t('resource', 'Vat Checked'),
            'is_employee' => Yii::t('resource', 'Is Employee'),
            'employee_number' => Yii::t('resource', 'Employee Number'),
            'is_petowner' => Yii::t('resource', 'Is Petowner'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(ResCountry::className(), ['ID' => 'country_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Partner::className(), ['ID' => 'parent_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPartners()
    {
        return $this->hasMany(Partner::className(), ['parent_ID' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTitle()
    {
        return $this->hasOne(ResTitle::className(), ['ID' => 'title_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSalesProductSuppliers()
    {
        return $this->hasMany(SalesProductSupplier::className(), ['supplier_ID' => 'ID']);
    }
    

    
}
