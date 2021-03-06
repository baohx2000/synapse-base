<?php

namespace Synapse\View\Email;

use Synapse\View\AbstractView;
use Synapse\User\TokenEntity;
use Symfony\Component\Routing\Generator\UrlGenerator;

/**
 * View for reset password emails
 */
class ResetPassword extends AbstractView
{
    /**
     * @var TokenEntity
     */
    protected $userToken;

    /**
     * @var UrlGenerator
     */
    protected $urlGenerator;

    /**
     * @param TokenEntity $userToken
     */
    public function setUserToken(TokenEntity $userToken)
    {
        $this->userToken = $userToken;
    }

    /**
     * @param UrlGenerator $urlGenerator
     */
    public function setUrlGenerator(UrlGenerator $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    /**
     * @todo Change this URL to a route in the javascript app that will perform
     *       the API request since the API expects the token as a POST parameter
     *
     * @return string
     */
    public function url()
    {
        $parameters = [
            'id'    => $this->userToken->getUserId(),
            'token' => $this->userToken->getToken(),
        ];

        $url = $this->urlGenerator->generate(
            'reset-password',
            $parameters,
            UrlGenerator::ABSOLUTE_URL
        );

        return $url;
    }
}
