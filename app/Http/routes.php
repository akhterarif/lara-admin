<?php
get("api/messages", function (){
    return App\Message::all();
});

post("api/messages", function (){
    App\Message::create(Request::all());
});