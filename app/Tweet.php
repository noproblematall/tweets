<?php

namespace App;

use BaoPham\DynamoDb\DynamoDbModel;

class Tweet extends DynamoDbModel
{
    protected $table="tweets";
    protected $primaryKey = 'name';
    protected $compositeKey = ['name', 'content'];
    public $timestamps = true;
    protected $fillable = [
        'name', 'content', 'date',
    ];

    /**
     * テーブル名を取得
     * 環境ごとの suffix を付ける
     *
     * @return string
     */
    // public function getTable(): string
    // {
    //     $baseTableName = parent::getTable();
    //     return $baseTableName . studly_case(app()->environment());
    // }
}
