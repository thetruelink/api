<?php

namespace DataBundle\Http;

use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpKernel\Exception\HttpException;

class RequestValidation {
    
    private $em;
    private $container;

    public function __construct($em, $container){
        $this->em = $em;
        $this->container = $container;

    }


    public function changeStatusValidation($data){
        $error = null;
        if(!$data){
            $error = $error . 'invalid request';
            return $error;
        }
        if(!array_key_exists('status', $data)){
            $error = $error . 'status is required';
        }
        if(!array_key_exists('email', $data)){
            $error = $error . 'Email is required';
        }
        else {
            if(!$this->em->getRepository('DataBundle:Contact')->findOneByEmail($data['email'])){
                $error = $error . 'user with email = '. $data['email'] . ' not exist';
            }
        }
        return $error;
    }

    public function contactListValidation($data){
        $error = null;
        if(!$data){
            $error = $error . 'invalid request';
            return $error;
        }
        if(!array_key_exists('email', $data)){
            $error = $error . 'Email is required';
        }
        else {
            if(!$this->em->getRepository('DataBundle:Contact')->findOneByEmail($data['email'])){
                $error = $error . 'user with email = '. $data['email'] . ' not exist';
            }
        }
        return $error;

    }

    public function addContactValidation($data){
        $error = null;
        if(!$data){
            $error = $error . 'invalid request';
            return $error;
        }
        if(!array_key_exists('userId', $data)){
            $error = $error . 'userId is required';
        }
        else {
            if(!$this->em->getRepository('DataBundle:Contact')->find($data['userId'])){
                $error = $error . 'user with id = '. $data['userId'] . ' not exist';
            }
        }
        if(!array_key_exists('destId', $data)){
            $error = $error . 'destId is required';
        }
        else {
            if(!$this->em->getRepository('DataBundle:Contact')->find($data['destId'])){
                $error = $error . 'user with id = '. $data['destId'] . ' not exist';
            }
        }
        return $error;
    }

    public function changePasswordValidation($data){
        if(!$data){
            throw new HttpException(400, 'Bad Request');
        } 
        if(!array_key_exists('password', $data)){
            throw new HttpException(400, 'password is required');
        }
        if(!array_key_exists('_password', $data)){
            throw new HttpException(400, '_password is required');
        }
        if(!array_key_exists('email', $data)){
            throw new HttpException(400, 'email is required');
        }
        $user = $this->em->getRepository('DataBundle:User')->findOneByEmail($data['email']);
        if(!$user){
               throw new HttpException(400,'User not found');
        }else {
            if($user->getPassword() != $data['password']){
                throw new HttpException(400, 'Current password not valid');
            }else {
                if($data['password'] == $data['_password']){
                    throw new HttpException(400, 'The password are identics');
                }else {
                    return true;
                }
            }
        }

    }


}