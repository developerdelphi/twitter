<?php

it('has all page', function () {
    $response = $this->get('/all');

    $response->assertStatus(200);
});
