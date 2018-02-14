<?php

namespace App\Repository\Post;

interface PostRepositoryInterface{
    public function getAll();
    public function show($id);
}