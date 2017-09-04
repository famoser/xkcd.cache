<?php
/**
 * Created by PhpStorm.
 * User: famoser
 * Date: 03/12/2016
 * Time: 20:04
 */

namespace Famoser\SyncApi\Services\Base;


use Famoser\SyncApi\Framework\ContainerBase;

/**
 * Class BaseService: to be extended by all services
 *
 * @package Famoser\SyncApi\Services\Base
 */
class BaseService extends ContainerBase
{
    /**
     * return the base path for the log files
     *
     * @return string
     */
    protected function getLoggingFilePath()
    {
        return $this->getSettingsArray()['log_file_path'];
    }
}