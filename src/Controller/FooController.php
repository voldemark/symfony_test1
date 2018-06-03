<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class FooController extends AbstractController
{
    /**
     * @Route("/welcome/{name}", 
     *		name="foo", 
     *		defaults = {"name"="Whatever1"}, 
     *		requirements={"name"="[A-Za-z]+"})
     * @param Request
     * @return Response
     */
    //public function index(Request $request)
    public function index(string $name)
    {

    	//app.request.query.get('name') | default('World')	
    	//$some_var = $request->query->get("name");	

        return $this->render('foo/index.html.twig',
        	[ 
        		//'name' => $some_var
        		'name' => $name
        	]
    	);
    }


    /**
     * @Route("/", name="hello_page")
     */
    public function hello_page()
    {
        return $this->render('hello_page.html.twig');
    }

    /**
     * @Route("/test", name="test")
     */
    public function test()
    {
        return $this->render('foo/test.html.twig');
    }
}
