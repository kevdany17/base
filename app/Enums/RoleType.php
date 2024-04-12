<?php
namespace App\Enums;

enum RoleType : int
{
    const SUPPORT = 1;
    const ADMIN = 2;
    const CUSTOMER = 3;
	const SELLER = 4;
	const SELLER_MANAGER = 5;
}

