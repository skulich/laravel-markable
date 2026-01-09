<?php

it('publishes config file', function () {
    $this->artisan('vendor:publish', ['--tag' => 'markable'])
        ->assertSuccessful();

    expect(config_path('markable.php'))->toBeFile();

    unlink(config_path('markable.php'));
});
