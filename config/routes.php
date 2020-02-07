<?php

use dinkom\Router;

Router::add('^curses/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Curses', 'action' => 'view']);
Router::add('^events/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Events', 'action' => 'view']);

//default routes
Router::add('^admin$', ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin']);
Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' => 'admin']);

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');