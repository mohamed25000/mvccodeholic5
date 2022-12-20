<?php

namespace app\core;

use app\core\db\DbModel;

abstract class UserModel extends DbModel
{
    public abstract function getDisplayName(): string;
}