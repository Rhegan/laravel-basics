<?php

use App\Models\User;

it('shows all ideas', function () {
    $this->actingAs($user = User::factory()->create());

    $ideaDescription = "Super cool idea.";
    $user->ideas()->create([
        'description'   => $ideaDescription
    ]);

    visit('/ideas')->assertSee($ideaDescription);
});

it('shows a single idea', function () {
    expect(true)->toBeTrue();
});

it('shows an edit form to uppdate an idea', function () {
    expect(true)->toBeTrue();
});
