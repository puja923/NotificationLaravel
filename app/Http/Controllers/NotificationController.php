<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\BirthdayWish;

class NotificationController extends Controller
{
    public function index()
    {
        $user = User::find(1);
        $messages['hi'] = "Hey, Happy Birthday {$user->name}";
        $messages['wish'] = "Onbehalf of entire company,
        I wish you best wishes";
        $user->notify(new BirthdayWish($messages));
        dd('Done');
    }
}
