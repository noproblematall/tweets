<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Support\Facades\App;
use BaoPham\DynamoDb\DynamoDbClientService;

class CreateTweetsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (app()->environment('testing')) {
            return;
        }
        $params = [
            "TableName" => "tweets", 
            "KeySchema" => [
                [
                    "AttributeName" => "name", 
                    "KeyType" => "HASH"
                ],
                [
                    'AttributeName' => 'content',
                    'KeyType' => 'RANGE'  //Sort key
                ]
            ],
            "AttributeDefinitions" => [
                [
                    "AttributeName" => "name", 
                    "AttributeType" => "S"
                ],
                [
                    "AttributeName" => "content", 
                    "AttributeType" => "S"
                ]
            ], 
            "ProvisionedThroughput" => [
                "ReadCapacityUnits" => 100,
                "WriteCapacityUnits" => 100
            ],
            // "StreamSpecification" => [
            //     "StreamEnabled" => true,
            //     "StreamViewType" => "NEW_AND_OLD_IMAGES"
            // ],
            // "Tags" => [
            //     [ "Key" => "AWSTagKey", "Value" => "SomeCustomValue" ],
            // ]
        ];
        try {
            resolve(DynamoDbClientService::class)->getClient()->createTable($params);
        
        } catch (DynamoDbException $e) {
            echo "Unable to create table:\n";
            echo $e->getMessage() . "\n";
        }
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (app()->environment('testing')) {
            return;
        }

        resolve(DynamoDbClientService::class)->getClient()->deleteTable([
            "TableName" => "tweets",
        ]);

    }

    /**
     * 環境ごとのテーブル名を取得
     *
     * @param string $tableBaseName
     * @return string テーブル名
     */
    protected function getTableName(string $tableBaseName): string
    {
        // 環境名を Suffix として追加する（理由は後述）
        return studly_case($tableBaseName) . studly_case(app()->environment());
    }
}
