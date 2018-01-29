<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController {
    public function indexAction() {
        $number = mt_rand(0, 100);

        return new Response(
            '<html><body>Hello number: ' . $number . '</body></html>'
        );
    }
}
