<?php

namespace Tests\Browser;

use Facebook\WebDriver\WebDriverBy;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class OtherWebTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('https://testiq.vn/game-tinh-mat.html')
                ->clickLink('Tôi đã sẵn sàng!')->driver->executeScript('window.scrollTo(0, document.body.scrollHeight);');
            $browser->pause(2000);

            $browser->driver->findElement(WebDriverBy::className('thechosenone'))->click();
            $browser->pause(1000);

            $browser->pause(2000);
            $browser->assertSee('Thời gian còn lại');
        });
    }
}
