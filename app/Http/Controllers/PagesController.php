<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.welcome');
    }

    public function provider() {
        $provider_name = 'Janek przewoziciel szpergalow';
        //return view('pages.provider', compact('provider_name'));
        //return view('pages.provider')->with('provider_name', $provider_name);

        $data = (array) [
            'site_title' => 'Providerzy',
            'providers' => [
                [
                    'name'    => 'Janek',
                    'title'   => 'szeregowy zmywak',
                    'service' => 'mycie okien'
                ],
                [
                    'name'    => 'Staszek',
                    'title'   => 'mlodszy zmywak',
                    'service' => 'tylko zamiatanie'
                ],
                [
                    'name'    => 'Wojtek',
                    'title'   => 'przewoznik',
                    'service' => 'podwozki ludzi to tu to tam'
                ]
            ]

        ];

        return view('pages.provider')->with($data);
    }
}
