<?php
namespace App\Contracts;

interface ITokenAuthentication
{
        public function getToken(): string;

        public function getApiURL(): string;
}