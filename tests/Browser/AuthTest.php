<?php

use App\Models\User;

it('registers a user', function () {
    visit('/register')
        ->fill('name', 'Johnny Doe')
        ->fill('email', 'johnny@gmail.com')
        ->fill('password', 'Johnny123')
        ->press('@register-btn')
        ->assertPathIs('/ideas');

    expect(User::where('email', 'johnny@gmail.com')->exists())->toBe(true);
    $this->assertAuthenticated();
});
