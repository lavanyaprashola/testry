phpCopy code<?php

$config = [
    'db_host' => '{{ getv "/myapp/database/host" }}',
    'db_port' => '{{ getv "/myapp/database/port" }}',
    'db_user' => '{{ getv "/myapp/database/username" }}',
    'db_pass' => '{{ getv "/myapp/database/password" }}'
];
