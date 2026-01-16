<?php

it('merges config in register method', function () {
    expect(config('markable'))->toBeArray();
});

it('publishes config file', function () {

    $configPath = config_path('markable.php');

    if (File::exists($configPath)) {
        unlink($configPath);
    }

    $this->artisan('vendor:publish', [
        '--provider' => 'SKulich\Markable\MarkableServiceProvider',
        '--tag' => 'markable-config'
    ])->assertSuccessful();

    expect($configPath)->toBeFile();

    unlink($configPath);
});

it('publishes migration file', function () {

    foreach (File::glob(database_path('migrations/*_create_marks_table.php')) as $file) {
        unlink($file);
    }

    $this->artisan('vendor:publish', [
        '--provider' => 'SKulich\Markable\MarkableServiceProvider',
        '--tag' => 'markable-migrations'
    ])->assertSuccessful();

    $migrations = File::glob(database_path('migrations/*_create_marks_table.php'));

    expect($migrations)->not->toBeEmpty();
    expect($migrations[0])->toBeFile();

    unlink($migrations[0]);
});

