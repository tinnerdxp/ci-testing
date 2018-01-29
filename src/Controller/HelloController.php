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
    public function helloAction() {
        return new Response(
            '<html><body>Hello</body></html>'
        );
    }
    public function fooAction() {
        return new Response(
            '<html><body>Foo</body></html>'
        );
    }
    public function barAction() {
        return new Response(
            '<html><body>Bar</body></html>'
        );
    }
}
