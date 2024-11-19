<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /** @test */
    public function user_can_login_with_valid_credentials()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'valid_user@example.com')
                    ->type('phone', '09088175555')
                    ->press('Login')
                    ->pause(1000) // Adjust the pause duration if necessary
                    ->assertSee('Form submitted successfully!');
        });
    }

    /** @test */
    public function user_cannot_login_with_invalid_phone_format()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    ->type('email', 'valid_user@example.com')
                    ->type('phone', '12345')
                    ->press('Login')
                    ->pause(1000) // Adjust the pause duration if necessary
                    ->assertSee('Incorrect phone number format. Please try again.');
        });
    }
}

