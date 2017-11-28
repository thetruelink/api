<?php

namespace DataBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use \DataBundle\Entity\User;
use \DataBundle\Entity\Contact;
use PhpAmqpLib\Exception\AMQPIOException;
use PhpAmqpLib\Exception\AMQPRuntimeException;
use PhpAmqpLib\Exception\AMQPTimeoutException;
//require_once __DIR__ . '/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class ContactController extends Controller
{
    public function addContactAction(Request $request)
    {

       /* $em = $this->getDoctrine()->getManager();
        $data = json_decode($request->getContent(), true);
        $userId = $data['userId'];
        $destId = $data['destId'];
        $contact = $em->getRepository('DataBundle:Contact')->find($userId);
        $user = $em->getRepository('DataBundle:User')->findOneByEmail($contact->getEmail());
        $contact = $em->getRepository('DataBundle:Contact')->find($destId);

        $user->addContact($contact);

        $em->persist($user);

        $em->flush();

        $resp = new Response('ok');
        // $this->heders($resp);
        return $resp;
        */

        $data = json_decode($request->getContent(), true);

        $response = $this->get('data.data_provider')
                         ->addContact($data);
        return new JsonResponse($response);

    }

    public function removeContactAction(Request $request)
    {

       /* $em = $this->getDoctrine()->getManager();
        $data = json_decode($request->getContent(), true);
        $userId = $data['userId'];
        $destId = $data['destId'];
        $contact = $em->getRepository('DataBundle:Contact')->find($userId);
        $user = $em->getRepository('DataBundle:User')->findOneByEmail($contact->getEmail());
        $contact = $em->getRepository('DataBundle:Contact')->find($destId);

        $user->removeContact($contact);
        $em->persist($user);
        $em->flush();

        $resp = new Response('ok');
        return $resp;
        */
        $data = json_decode($request->getContent(), true);
        $response = $this->get('data.data_provider')
                         ->removeContact($data); 
        return new JsonResponse($response);
    }

    public function listeContactAction(Request $request)
    {
   /*
        $em = $this->getDoctrine()->getManager();

        $data = json_decode($request->getContent(), true);
        $email = $data['email'];
        $user = $em->getRepository('DataBundle:User')->findOneByEmail($email);

        $contacts = $user->getContacts();

        //********** serialize the contacts *******************
        $serializer = $this->get('serializer');
        $json = $serializer->serialize($contacts, 'json', array());

        $resp = new Response($json);
        $this->heders($resp);
        return $resp;
        */
        $data = json_decode($request->getContent(), true);
        $result = $this->get('data.data_provider')
                       ->getContactList($data);

        return new JsonResponse($result);

    }

    public function allContactsAction()
    {

        $em=$this->getDoctrine()->getManager();
        $contacts=$em->getRepository('DataBundle:Contact')->findBy(array('state' => 'activated'));

        //********** serialize the contacts *******************
        $serializer = $this->get('serializer');
        $json = $serializer->serialize($contacts, 'json', array());

        $resp= new Response($json);
        return $resp;
    }

    public function allContactsAdminAction()
    {
        $em = $this->getDoctrine()->getManager();
        $contacts = $em->getRepository('DataBundle:Contact')->findAll();
        //********** serialize the contacts *******************
        $serializer = $this->get('serializer');
        $json = $serializer->serialize($contacts, 'json', array());

        $resp = new Response($json);
        $this->heders($resp);
        return $resp;
    }

    public function changeStatusAction(Request $request)
    {
        $data = json_decode($request->getContent(), true);

       /* 
        $email = $data['email'];
        $status = $data['status'];
        $em = $this->getDoctrine()->getManager();
        $contact = $em->getRepository('DataBundle:Contact')->findOneByEmail($email);
        $contact->setStatus($status);
        $em->flush();

        $resp = new Response('ok');
        $this->heders($resp);
        return $resp;
        */

        $result = $this->get('data.data_provider')->changeStatusProvider($data);
        /*$msg = implode(',', $data);

        try {
            $this->get('data.amqp')->execute($msg);
        }catch(AMQPRuntimeException $e){
              var_dump($e->getMessage());die();
        }*/
           

        return new  JsonResponse( $result);
    }

    public function changeApiIdAction(Request $request)
    {

        $apiId = $request->get('apiId');
        $email = $request->get('email');

        $em = $this->getDoctrine()->getManager();
        $contact = $em->getRepository('DataBundle:Contact')->findOneByEmail($email);
        $contact->setApiId($apiId);
        $em->flush();
        $resp = new Response('ok');
        return $resp;
    }

    public function getApiIdAction(Request $request)
    {

        $email = $request->get('email');
        $em = $this->getDoctrine()->getManager();
        $contact = $em->getRepository('DataBundle:Contact')->findOneByEmail($email);
        $apiId = $contact->getApiId();
        $em->flush();
        $resp = new Response($apiId);
        return $resp;
    }

    public function newContactAction(Request $request)
    {

        $data = json_decode($request->getContent(), true);
        $email = $data['email'];

        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('DataBundle:User')->findOneByEmail($email);

        if ($user != null) {
            $resp = new Response('existe');
        } else {
            $nom = $data['nom'];
            $prenom = $data['prenom'];
            $titre = $data['titre'];
            $localisation = $data['localisation'];
            $role = $data['role'];

            $user = new User();
            $contact = new Contact();

            $user->setEmail($email);
            $user->setPassword('truelink@' . rand());
            $user->setState('activated');

            $contact->setEmail($email);
            $contact->setNom($nom);
            $contact->setPrenom($prenom);
            $contact->setTitre($titre);
            $contact->setLocalisation($localisation);
            $contact->setRole($role);
            $contact->setState('activated');

            $em->persist($user);
            $em->persist($contact);

            $em->flush();
            $resp = new Response('ok');
        }
        /* $message = \Swift_Message::newInstance()
             ->setSubject('Hello Email')
             ->setFrom('diandiallo33@gmail.com')
             ->setTo('diandiallo33@gmail.com')
             ->setBody('Bonjour');
           $this->get('mailer')->send($message);
        */

        $this->heders($resp);
        return $resp;
    }

    public function updateContactAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $data = json_decode($request->getContent(), true);
        $id = $data['id'];
        $email = $data['email'];
        $contact = $em->getRepository('DataBundle:Contact')->find($id);
        $emailUser = $contact->getEmail();

        $user = $em->getRepository('DataBundle:User')->findOneByEmail($email);

        if ($user != null && $emailUser != $email) {
            $resp = new Response('existe');
        } else {
            $nom = $data['nom'];
            $prenom = $data['prenom'];
            $titre = $data['titre'];
            $localisation = $data['localisation'];
            $role = $data['role'];
            $user = $em->getRepository('DataBundle:User')->findOneByEmail($contact->getEmail());
            $user->setEmail($email);
            //$user->setPassword('truelink2016');

            $contact->setEmail($email);
            $contact->setNom($nom);
            $contact->setPrenom($prenom);
            $contact->setTitre($titre);
            $contact->setLocalisation($localisation);
            $contact->setRole($role);
            $em->flush();
            $resp = new Response('ok');
        }

        $this->heders($resp);
        return $resp;
    }

    public function changeStateAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $data = json_decode($request->getContent(), true);
        $email = $data['email'];
        $state = $data['state'];
        $contact = $em->getRepository('DataBundle:Contact')->findOneByEmail($email);
        $user = $em->getRepository('DataBundle:User')->findOneByEmail($contact->getEmail());
        if ($state === 'activated') {
            $contact->setState('disabled');
            $user->setState('disabled');
        } else {
            $contact->setState('activated');
            $user->setState('activated');
        }

        $em->flush();
        $resp = new Response('ok');
        $this->heders($resp);
        return $resp;
    }

    function heders($resp)
    {

        $resp->headers->set('Access-Control-Allow-Origin', '*');
        $resp->headers->set('Access-Control-Allow-Methods', 'GET, POST');
        $resp->headers->set("Access-Control-Allow-Headers", "Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    }
    public function getContactAction(Request $request){
    
        $data = json_decode($request->getContent(), true);
        $email = $data['email'];
        $contact = $this->getDoctrine()->getManager()
                        ->getRepository('DataBundle:Contact')
                        ->findOneByEmail($email);
        
        $serializer = $this->get('serializer');
        $json = $serializer->serialize($contact, 'json', array());
        $response = new JsonResponse($json);

        return $response;
    }

}
