<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('Login')
                ->type('email', 'doanhuy@gmail.com')
                ->type('password', '123123')
                ->click('button[type="submit"]')
                ->assertPathIs('/home')
                ->assertSee('You are logged in!');
        });
    }
}
