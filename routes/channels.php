<?php

use App\Broadcasting\BackOffice;
use App\Broadcasting\DirectMessage;
use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', DirectMessage::class);

// Back-office channel
// Channel for global events
Broadcast::channel('back-office', BackOffice::class);
