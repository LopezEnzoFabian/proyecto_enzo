<?php namespace App\Filters;
use Codeigniter\HTTP\RequestInterface;
use Codeigniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface {
    public function before(RequestInterface $request, $arguments = null) {
        // if iser mpt ñpgged om
        if (! session()->get('logged_in')) {
        // then redirct to login page
        return redirect()->to(base_url('login'));    
        }
    }

    public function after(RequestInterface $request, ResponseInterface $respone, $arguments = null) {
        // Do something here
    }
}
