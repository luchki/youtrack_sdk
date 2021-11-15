<?php

namespace App\Contracts;

interface IProjectInfo
{
        public function getID(): string;

        public function getName(): string;
}