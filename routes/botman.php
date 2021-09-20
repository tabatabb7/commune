<?php

$botman = app('neville');

$botman->hears('foo', function ($bot) {
    $bot->reply('bar');
});
