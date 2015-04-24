<?php

$router->get('/{username}/feedback', ['as' => 'feedback', 'uses' => 'Pages\Http\Controllers\PagesController@getFeedback']);