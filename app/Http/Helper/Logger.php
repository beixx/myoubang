<?php
/**
 * Created by PhpStorm.
 * User: liulipeng
 * Date: 2016/11/24
 * Time: 下午4:57
 */

namespace App\Http\Helper;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Logger as Log;
use Monolog\Handler\StreamHandler;
use Illuminate\Log\Writer;


class Logger extends Writer
{

    // 所有的LOG都要求在这里注册
    const LOG_ERROR = 'error';

    private static $loggers = array();

    // 获取一个实例
    public static function getLogger($type = self::LOG_ERROR, $day = 30)
    {
        if (empty(self::$loggers[$type])) {
            self::$loggers[$type] = new self(new Log($type));
            self::$loggers[$type]->useDailyFiles(storage_path().'/logs/'. $type .'.log', $day);
        }

        $log = self::$loggers[$type];
        return $log;
    }

    /**
     * Register a daily file log handler.
     *
     * @param  string  $path
     * @param  int     $days
     * @param  string  $level
     * @return void
     */
    public function useDailyFiles($path, $days = 0, $level = 'debug', $filePermission = 0777)
    {
        $this->monolog->pushHandler(
            $handler = new RotatingFileHandler($path, $days, $this->parseLevel($level), $bubble = true, $filePermission)
        );

        $handler->setFormatter($this->getDefaultFormatter());
    }

}