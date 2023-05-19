<?php

todo('Should be albe to create a tweet', function(){
    livewire(Tweet::class)
        ->set('body','This is my first tweet')
        ->call('tweet')
        ->assertEmitted('tweet::created');
    \Pest\Laravel\assertDatabaseCount('tweets', 1);
});
todo('body is requirede');
todo('the tweet should have a max length of 140 chars');
todo('should show the tweet on the timeline');
