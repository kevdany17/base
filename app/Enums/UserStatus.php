<?php
namespace App\Enums;

enum UserStatus : string
{
    const REGISTER =  'register';
	const ACTIVE =   'active';
	const INACTIVE =  'inactive';
	const BLOCKED =  'blocked';
}

