<?php


namespace Jmy\Esign\Model;


class AccessToken
{
    /**
     * @var $token string
     */
    private $token;

    /**
     * @var $expiresIn string
     */
    private $expiresIn;

    /**
     * @var $refreshToken string
     */
    private $refreshToken;

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return AccessToken
     */
    public function setToken(string $token): AccessToken
    {
        $this->token = $token;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpiresIn(): string
    {
        return $this->expiresIn;
    }

    /**
     * @param string $expiresIn
     * @return AccessToken
     */
    public function setExpiresIn(string $expiresIn): AccessToken
    {
        $this->expiresIn = $expiresIn;
        return $this;
    }

    /**
     * @return string
     */
    public function getRefreshToken(): string
    {
        return $this->refreshToken;
    }

    /**
     * @param string $refreshToken
     * @return AccessToken
     */
    public function setRefreshToken(string $refreshToken): AccessToken
    {
        $this->refreshToken = $refreshToken;
        return $this;
    }

}