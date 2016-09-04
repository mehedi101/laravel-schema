<?php
/**
 * Created by PhpStorm.
 * User: thedevsaddam
 * Date: 9/4/16
 * Time: 9:30 PM
 */

namespace Thedevsaddam\LaravelSchema\Schema\Grammar;


interface GrammarContract
{
    public function setConnection($connection);

    public function getHeaders();

    public function getBody();

    public function getTables();

    public function getColumns($tableName);

    public function getSchema();

}