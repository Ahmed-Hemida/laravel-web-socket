<?php

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
Broadcast::routes(['middleware' => ['web', 'auth']]);

Broadcast::channel('private-channel', function ($user) {
    return $user !== null;
});

Broadcast::channel('presence-channel', function ($user) {
    return ['id' => $user->id, 'name' => $user->name];
});

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('presence-websocket', function ($user) {
    return true; // You can add authorization logic here if needed
});