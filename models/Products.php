<?php

namespace melih058\products\models;

use Yii;
use sabsay03\categories\models\Categories;
/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $count
 * @property int|null $category_id
 * @property string|null $picture
 *
 * @property Categories $category
 * @property Shoppingcart[] $shoppingcarts
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [

            [['count', 'category_id'], 'integer'],
            [['name', 'picture'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'count' => 'Count',
            'category_id' => 'Category ID',
            'picture' => 'Picture',
            'category->name'=>'Category'
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::className(), ['id' => 'category_id']);
    }

    /**
     * Gets query for [[Shoppingcarts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShoppingcarts()
    {
        return $this->hasMany(Shoppingcart::className(), ['productid' => 'id']);
    }
}
