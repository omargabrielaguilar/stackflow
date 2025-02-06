<?php

use Inertia\Testing\AssertableInertia;
use function Pest\Laravel\get;

it('debe retornar el componente correcto', function () {
    get(route('posts.index'))
        ->assertInertia(
            fn(AssertableInertia $inertia) => $inertia
            ->component('Posts/Index', true)
        );
});

it('mostrar post en la vista', function () {
    get(route('posts.index'))
        ->assertInertia(
            fn(AssertableInertia $inertia) => $inertia
                ->has('posts')
        );
});
