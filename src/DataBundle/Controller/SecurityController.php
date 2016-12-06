<?php

namespace DataBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use DataBundle\Entity\User;


class SecurityController extends Controller
{


    public function crediantialCheckAction(Request $request)
    {

        $data = json_decode($request->getContent(), true);
        $username = $data['username'];
        $password = $data['password'];

        $em=$this->getDoctrine()->getManager();
        $user=$em->getRepository('DataBundle:User')->findOneBy(array('email'=>$username, 'password'=>$password));

        if($user===null) {$resp= new Response('No');}
        else if ($user->getState()=== 'disabled') {$resp= new Response('disabled');}
         else {
             
              $contact=$em->getRepository('DataBundle:Contact')->findOneByEmail($user->getEmail());
             
              $serializer = $this->get('serializer');
              $json = $serializer->serialize($contact, 'json', array());

             $resp= new Response($json);
         }
        
       

        $this->heders($resp);
        return $resp;

    }

    function heders($resp){

        $resp->headers->set('Access-Control-Allow-Origin', '*');
        $resp->headers->set('Access-Control-Allow-Methods', 'GET, POST');
        $resp->headers->set("Access-Control-Allow-Headers", "Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    }

}
