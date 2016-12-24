<?php

namespace DataBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DataBundle\Entity\Message;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;



class MessageController extends Controller
{
    public function sendMessageAction(Request $request)
    {
        
        $em=$this->getDoctrine()->getManager();
        $data = json_decode($request->getContent(), true);
        $s_email = $data['s_email'];
        $d_email = $data['d_email'];
        $m = $data['m'];

        $user=$em->getRepository('DataBundle:User')->findOneByEmail($s_email);
        $contact=$em->getRepository('DataBundle:Contact')->findOneByEmail($d_email);
        
        $msg=new Message();
        
        $msg->setTexte($m);
        $msg->setUser($user);
        $msg->setContact($contact);
        
        $em->persist($msg);
        $em->flush();

        $resp= new Response('ok');
        $this->heders($resp);
        return $resp;

    }
    
     public function getMessagesAction(Request $request)
    {
        
        $em=$this->getDoctrine()->getManager();
        $data = json_decode($request->getContent(), true);
         $s_email = $data['s_email'];
         $d_email = $data['d_email'];

        $user=$em->getRepository('DataBundle:User')->findOneByEmail($s_email);
        $contact=$em->getRepository('DataBundle:Contact')->findOneByEmail($d_email);

            // *********** find the user of $contact ***********
        $user1=$em->getRepository('DataBundle:User')->findHisUser($contact->getEmail());
            // find the contact of $user
        $contact1=$em->getRepository('DataBundle:Contact')->findHisContact($user->getEmail());

            // *********** find their messages *****************
        $messages=$em->getRepository('DataBundle:Message')->findMessages($user, $contact, $user1, $contact1);

            //************ serialize the messages **************
        $serializer = $this->get('serializer');
        $json = $serializer->serialize($messages, 'json', array());

        $resp= new Response($json);
        return $resp;
    }

    function heders($resp){

        $resp->headers->set('Access-Control-Allow-Origin', '*');
        $resp->headers->set('Access-Control-Allow-Methods', 'GET, POST');
        $resp->headers->set("Access-Control-Allow-Headers", "Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    }
    
}
