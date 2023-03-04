<?php

declare(strict_types=1);

namespace App\Services;

class UserService
{
    public const USER_RULE_ADMIN = 1;
    public const USER_RULE_DEFAULT = 0;

    protected int $id;
    protected string $username;
    protected string $password;
    protected string $name;

    public function create(array $data)
    {
    }
}
