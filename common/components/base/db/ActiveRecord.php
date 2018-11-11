<?php

    namespace base\db;

    use base\util\UUID;
    use yii\behaviors\AttributeBehavior;
    use yii\behaviors\TimestampBehavior;

    class ActiveRecord extends \yii\db\ActiveRecord
    {

        /**
         * @inheritdoc
         */
        public function behaviors()
        {
            return [
                BlameableBehavior::className(),
                TimestampBehavior::className(),
                [
                    // Sets id = new v4 UUID
                    'class' => AttributeBehavior::className(),
                    'attributes' => [
                        ActiveRecord::EVENT_BEFORE_INSERT => 'id'
                    ],
                    'value' => function ($event) {
                        return (string)UUID::v4();
                    },
                ],
            ];
        }
    }
