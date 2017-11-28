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
        $email = $data['email'];
        $password = $data['password'];

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('DataBundle:User')->findOneBy(array('email' => $email, 'password' => $password));

        if ($user === null) {
            return  new JsonResponse(['data' => 'No']);
        } else if ($user->getState() === 'disabled') {
           return new JsonResponse( ['data' =>'disabled']);
        } else {
            $resp = $this->get('lexik_jwt_authentication.encoder')->encode(['email' => $email]);
        }
        return new JsonResponse(['token' => $resp]);

    }
    public function changePasswordAction(Request $request){
        $data = json_decode($request->getContent(), true);
        
        $response = $this->get('data.data_provider')
                         ->changePassword($data);
        return new JsonResponse($response);

    }

}
