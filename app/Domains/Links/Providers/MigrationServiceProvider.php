<?php

namespace App\Domains\Links\Providers;

use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait;
use App\Domains\Links\Database\Migrations\CreateLinksTable;

class MigrationServiceProvider extends ServiceProvider
{
    use MigratorTrait;
    
    public function register()
    {
        $this->migrations([
            CreateOrdersTable::class,
            CreateProductsTable::class,
        ]);
    }
}