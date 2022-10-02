<?php

namespace App\Utils;

class Message {
    // singleton
    private static $_instance = null;
    public static function getInstance() {
        if (is_null(self::$_instance)) {
            self::$_instance = new Message;
        }

        return self::$_instance;
    }

    /**
     * default message for CRUR process
     */
    public static function afterInsert($success) {
        return $success ? 'Insert successfully' : 'Insert failed';
    }
    public static function afterUpdate($success) {
        return $success ? 'Update successfully' : 'Update failed';
    }
    public static function afterDestroy($success) {
        return $success ? 'Delete successfully' : 'Delete failed';
    }
    /**
     * @param messageIfSuccess string contains custom success message
     * @param messageIfFailed string contains custom failed message
     * @param success boolean indicate if the process is success or not
     * @return string
     */
    public static function afterEvent($messageIfSuccess, $messageIfFailed, $success) {
        return $success ? $messageIfSuccess : $messageIfFailed;
    }
}