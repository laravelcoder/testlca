<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class TrackingNumberTest extends DuskTestCase
{

    public function testCreateTrackingNumber()
    {
        $admin = \App\User::find(1);
        $tracking_number = factory('App\TrackingNumber')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $tracking_number) {
            $browser->loginAs($admin)
                ->visit(route('admin.tracking_numbers.index'))
                ->clickLink('Add new')
                ->type("metrics_id", $tracking_number->metrics_id)
                ->type("number", $tracking_number->number)
                ->select("location_id", $tracking_number->location_id)
                ->select("company_id", $tracking_number->company_id)
                ->type("callmetric_filter_id", $tracking_number->callmetric_filter_id)
                ->press('Save')
                ->assertRouteIs('admin.tracking_numbers.index')
                ->assertSeeIn("tr:last-child td[field-key='metrics_id']", $tracking_number->metrics_id)
                ->assertSeeIn("tr:last-child td[field-key='number']", $tracking_number->number)
                ->assertSeeIn("tr:last-child td[field-key='location']", $tracking_number->location->nickname)
                ->assertSeeIn("tr:last-child td[field-key='company']", $tracking_number->company->name)
                ->assertSeeIn("tr:last-child td[field-key='callmetric_filter_id']", $tracking_number->callmetric_filter_id)
                ->logout();
        });
    }

    public function testEditTrackingNumber()
    {
        $admin = \App\User::find(1);
        $tracking_number = factory('App\TrackingNumber')->create();
        $tracking_number2 = factory('App\TrackingNumber')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $tracking_number, $tracking_number2) {
            $browser->loginAs($admin)
                ->visit(route('admin.tracking_numbers.index'))
                ->click('tr[data-entry-id="' . $tracking_number->id . '"] .btn-info')
                ->type("metrics_id", $tracking_number2->metrics_id)
                ->type("number", $tracking_number2->number)
                ->select("location_id", $tracking_number2->location_id)
                ->select("company_id", $tracking_number2->company_id)
                ->type("callmetric_filter_id", $tracking_number2->callmetric_filter_id)
                ->press('Update')
                ->assertRouteIs('admin.tracking_numbers.index')
                ->assertSeeIn("tr:last-child td[field-key='metrics_id']", $tracking_number2->metrics_id)
                ->assertSeeIn("tr:last-child td[field-key='number']", $tracking_number2->number)
                ->assertSeeIn("tr:last-child td[field-key='location']", $tracking_number2->location->nickname)
                ->assertSeeIn("tr:last-child td[field-key='company']", $tracking_number2->company->name)
                ->assertSeeIn("tr:last-child td[field-key='callmetric_filter_id']", $tracking_number2->callmetric_filter_id)
                ->logout();
        });
    }

    public function testShowTrackingNumber()
    {
        $admin = \App\User::find(1);
        $tracking_number = factory('App\TrackingNumber')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $tracking_number) {
            $browser->loginAs($admin)
                ->visit(route('admin.tracking_numbers.index'))
                ->click('tr[data-entry-id="' . $tracking_number->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='metrics_id']", $tracking_number->metrics_id)
                ->assertSeeIn("td[field-key='number']", $tracking_number->number)
                ->assertSeeIn("td[field-key='location']", $tracking_number->location->nickname)
                ->assertSeeIn("td[field-key='company']", $tracking_number->company->name)
                ->assertSeeIn("td[field-key='callmetric_filter_id']", $tracking_number->callmetric_filter_id)
                ->logout();
        });
    }

}
