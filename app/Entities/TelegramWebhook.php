<?php

namespace App\Entities;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Telegram\Bot\Objects\Update;

/**
 * Class TelegramWebhook
 * @package App\Entities
 *
 * @property $update
 */
class TelegramWebhook extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'telegram_webhook';

    public static function add(Update $update)
    {
        return true;
        $model = new static;
        $model->update = $update->toArray();
        $model->save();
    }
}