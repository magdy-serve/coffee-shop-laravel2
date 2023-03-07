<?php

namespace App\Widgets;


use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class Customers extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = \App\Models\Customer::count();
        $string = trans_choice('customers', $count);
        // $TextMsg = `"You have" ${$count} customers  in your database. Click on button below to view all ${$string} .`;

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-smile',
            'title'  => "{$count} {$string}",
            'text'   =>"You have $count customers  in your database. Click on button below to view all $string" ,
            'button' => [
                'text' => 'View All Customers',
                
                'link' => route('voyager.customers.index'),
            ],
            'image' => '/storage/images/customers-bg.avif',
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        // return Auth::user()->can('browse', Voyager::model('user'));
        return Auth::user()->can('browse', Voyager::model('user'));
    }
}
