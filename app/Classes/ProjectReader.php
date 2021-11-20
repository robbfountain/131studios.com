<?php

namespace App\Classes;

class ProjectReader extends FileReader
{
    protected static string $disk = 'projects';

    public function get()
    {
        return $this->items->map(function ($item) {
            return new Project($item);
        });
    }
}
