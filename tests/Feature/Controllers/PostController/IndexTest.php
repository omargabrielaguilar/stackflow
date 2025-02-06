<?php

use Inertia\Testing\AssertableInertia;
use function Pest\Laravel\get;

it('debe retornar el componente correcto', function () {
    get(route('post.index'))
        ->assertInertia(
            fn(AssertableInertia $inertia) => $inertia
                ->component('Post/Index', true)
        );
});
