<?php

if (! function_exists('ray')) {
    function ray(...$args) {
        return \Spatie\LaravelRay\Ray::new(...$args);
    }
}

