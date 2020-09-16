<?php


namespace CaioLandgraf\Api;


/**
 * Class RequestApi
 * @package CaioLandgraf\Api
 */
class RequestApi extends Core
{

    /**
     * RequestApi constructor.
     * @param string $apiUrl
     */
    public function __construct(string $apiUrl)
    {
        parent::__construct($apiUrl);
    }

    /**
     * @param array $fields
     * @param string $endpoint
     * @return RequestApi
     */
    public function post(array $fields, string $endpoint = ""): RequestApi
    {
        $this->request(
            "POST",
            $endpoint,
            $fields
        );

        return $this;
    }

    /**
     * @param array $fields
     * @param string $endpoint
     * @return RequestApi
     */
    public function get(array $fields, string $endpoint = ""): RequestApi
    {
        $this->request(
            "GET",
            $endpoint,
            $fields
        );

        return $this;
    }

    /**
     * @param array $fields
     * @param string $endpoint
     * @return RequestApi
     */
    public function put(array $fields, string $endpoint = ""): RequestApi
    {
        $this->request(
            "PUT",
            $endpoint,
            $fields
        );

        return $this;
    }

    /**
     * @param array $fields
     * @param string $endpoint
     * @return RequestApi
     */
    public function delete(array $fields, string $endpoint = ""): RequestApi
    {
        $this->request(
            "DELETE",
            $endpoint,
            $fields
        );

        return $this;
    }
}