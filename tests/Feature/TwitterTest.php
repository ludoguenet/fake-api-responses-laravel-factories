<?php

declare(strict_types=1);

it('creates fake API responses', function () {
    $tweets = \Database\Factories\TweetFactory::new()->times(10)->make();

    dd($tweets);
})->only();


