<?php
use App\Http\Livewire\Timeline;
use App\Http\Livewire\Tweet\Create;
use App\Models\Tweet;
use App\Models\User;
use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertDatabaseCount;
use function Pest\Livewire\livewire;

it('Should be able to create a tweet', function(){
    $user = User::factory()->create();

    actingAs($user);

    livewire(Create::class)
        ->set('body','This is my first tweet')
        ->call('tweet')
        ->assertEmitted('tweet::created');

    assertDatabaseCount('tweets', 1);

    expect(Tweet::first())
    ->body->toBe('This is my first tweet')
    ->created_by->toBe($user->id);
});

it('Should make sure that only authenticated users can tweet', function(){
    livewire(Create::class)
        ->set('body', 'This is my first tweet')
        ->call('tweet')
        ->assertForBidden();
        // ->assertRedirect(route('login'));

    actingAs(User::factory()->create());

    livewire(Create::class)
        ->set('body','This is my first tweet')
        ->call('tweet')
        ->assertEmitted('tweet::created');

});

test('body is required', function(){
    actingAs(User::factory()->create());

    livewire(Create::class)
        ->set('body', null)
        ->call('tweet')
        ->assertHasErrors(['body' => 'required']);
});

test('the tweet should have a max length of 140 chars', function(){
    actingAs(User::factory()->create());

    livewire(Create::class)
        ->set('body', str_repeat('a', 141))
        ->call('tweet')
        ->assertHasErrors(['body'=>'max']);
});

it('should show the tweet on the timeline', function(){
    $user = User::factory()->create();

    actingAs($user);

    livewire(Create::class)
        ->set('body', 'This is my first tweet')
        ->call('tweet')
        ->assertEmitted('tweet::created');

    livewire(Timeline ::class)
        ->assertSee('This is my first tweet');
});

it('Should set body form as null after send tweet', function(){
    $user = User::factory()->create();
actingAs($user);

    livewire(Create::class)
        ->set('body', 'This is my first tweet')
        ->call('tweet')
        ->assertEmitted('tweet::created')
        ->assertSet('body', null);

});
