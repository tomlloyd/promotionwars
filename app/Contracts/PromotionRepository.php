<?php

namespace App\Contracts;

interface PromotionRepository
{
    public function all();

    public function find($id);
}
