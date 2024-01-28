<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "admin_routes".
 *
 * @property int $id
 * @property string $name 名称
 * @property string $route 路由地址
 * @property int $status 状态0正常1禁用
 * @property int $created_at
 * @property int $updated_at
 */
class AdminRoute extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin_routes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'route', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['route'], 'string', 'max' => 255],
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
            'route' => 'Route',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
