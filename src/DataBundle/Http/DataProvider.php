<?php

namespace DataBundle\Http;

use Symfony\Component\DependencyInjection\Container;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpKernel\Exception\HttpException;

class DataProvider {

    protected $validator;
    protected $em;
    protected $container;


    public function __construct($em , $validator, $container){
        $this->validator = $validator;
        $this->em =  $em;
        $this->container = $container;
    }

    public function changeStatusProvider($data){
        $error = $this->validator->changeStatusValidation($data);
        $result = null;
        if($error){
            return array('error' => $error);
        }
        $contact = $this->em
                        ->getRepository('DataBundle:Contact')
                        ->findOneByEmail($data['email']);
        $contact->setStatus($data['status']);
        $this->em->flush();
        $json = $this->container->get('serializer')
                                ->serialize($contact, 'json', array());
        return array('error' => null, 'success' => true, 
                     'message' => 'contact successfully updated', 
                     'data' => $json);
    }

    public function getContactList($data){
        $error = $this->validator->contactListValidation($data);
        $result = null;
        if($error){
            return array('error' => $error);
        }
        $user = $this->em->getRepository('DataBundle:User')
                         ->findOneByEmail($data['email']);
        $contacts = $user->getContacts();
        $json = $this->container->get('serializer')
                      ->serialize($contacts, 'json', array());
        return array('error' => null, 'success' => true, 
                      'message' => '', 
                      'data' => $json);
    }

    public function addContact($data){
        $error = $this->validator->addContactValidation($data);
        $result = null;
        if($error){
            return array('error' => $error);
        }
        $contact = $this->em->getRepository('DataBundle:Contact')->find($data['userId']);
        $user = $this->em->getRepository('DataBundle:User')->findOneByEmail($contact->getEmail());
        $contact = $this->em->getRepository('DataBundle:Contact')->find($data['destId']);

        $user->addContact($contact);
        $this->em->persist($user);
        $this->em->flush();
        return array('error' => null, 'success' => true, 
                      'message' => 'contact successfully added to favorite list');
    }

    public function removeContact($data){
        $error = $this->validator->addContactValidation($data);
        $result = null;
        if($error){
            return array('error' => $error);
        }
        $contact = $this->em->getRepository('DataBundle:Contact')->find($data['userId']);
        $user = $this->em->getRepository('DataBundle:User')->findOneByEmail($contact->getEmail());
        $contact = $this->em->getRepository('DataBundle:Contact')->find($data['destId']);

        $user->removeContact($contact);
        $this->em->persist($user);
        $this->em->flush();
        return array('error' => null, 'success' => true, 
                     'message' => 'contact successfully removed to favorite list');


    }

    public function changePassword($data){
        $message = null; 
        $code = 200;
        try {
            $validation = $this->validator->changePasswordValidation($data);
            if($validation){
                $user = $this->em->getRepository('DataBundle:User')
                             ->findOneByEmail($data['email']);
                $user->setPassword($data['_password']);
                $this->em->persist($user);
                $this->em->flush();
            }
        }catch(HttpException $e){
            $message = $e->getMessage();
            $code  = $e->getStatusCode();
        }
        return array('code' => $code, 'message'=> $message);

    }

}