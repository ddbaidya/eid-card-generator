<?php

namespace App\Http\Controllers;

use App\Http\Requests\CardRequest;
use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * DIsplay card page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('card');
    }

    /**
     * Display card preview page.
     *
     * @return \Illuminate\View\View
     */
    public function preview(Card $card)
    {
        return view('preview', compact('card'));
    }

    /**
     * Store card details.
     *
     *
     */
    public function store(CardRequest $request)
    {
        $details = $request->only('profile_photo', 'name', 'designation', 'org', 'greetings_giver', 'greetings_giver_org', 'card');
        $card = Card::create($details);
        return redirect()->route('card.preview', $card->id);
    }
}
