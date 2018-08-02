<?php

namespace AppBundle\Security;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Encoder\EncoderFactory;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;

use Doctrine\ORM\EntityManager;

class UserAuthenticator extends AbstractGuardAuthenticator
{
    private $em;
    private $encoder;
    private $session;
    
    public function __construct(EntityManager $em, EncoderFactory $encoderFactory,
            Session $session)
    {
        $this->em = $em;
        $this->encoder = $encoderFactory;
        $this->session = $session;
    }
    
    /**
     * Called on every request to decide if this authenticator should be
     * used for the request. Returning false will cause this authenticator
     * to be skipped.
     */
    public function supports(Request $request)
    {
        return $request->request->has('logme');
    }
    
    /**
     * Called on every request. Return whatever credentials you want,
     * or null to stop authentication.
     */
    public function getCredentials(Request $request)
    {
        // What you return here will be passed to getUser() as $credentials
        $ret = [];
        $ret['username']  = $request->request->get('username');
        $ret['password']  = $request->request->get('password');
        
        return $ret;
    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        if (isset($credentials["username"])) {
            $username = $credentials["username"];
            
            return $this->em->getRepository('AppBundle:User')
                ->findOneByUsername($username);
        }
        
        return ;
    }

    public function checkCredentials($credentials, UserInterface $user)
    {
        // check credentials - e.g. make sure the password is valid
        if (isset($credentials["password"])) {
            
            $encoder = $this->encoder->getEncoder($user);
            return $encoder->isPasswordValid(
                $user->getPassword(),
                $credentials['password'],
                $user->getSalt()
            );
        }
        
        // return true to cause authentication success
        return false;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $tokenInt, $providerKey)
    {
        if ( $this->session->has("_security.$providerKey.target_path" ) ) {
            $url = $this->session->get( "_security.$providerKey.target_path" );
        } else {
            $url = '/roll/dashboard';
        }
        
        $response = new RedirectResponse($url);
        
        return $response;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        $data = array(
            'message' => strtr($exception->getMessageKey(), $exception->getMessageData())

            // or to translate this message
            // $this->translator->trans($exception->getMessageKey(), $exception->getMessageData())
        );
sleep(1);
        return new JsonResponse($data, Response::HTTP_FORBIDDEN);
    }

    /**
     * Called when authentication is needed, but it's not sent
     */
    public function start(Request $request, AuthenticationException $authException = null)
    {
        $data = array(
            'message' => 'authentication.required'
        );

        return new JsonResponse($data, Response::HTTP_UNAUTHORIZED);
    }

    public function supportsRememberMe()
    {
        return true;
    }
}