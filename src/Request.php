<?php declare(strict_types=1);

namespace SergeyNezbritskiy\PrivatBank;

/**
 * Class Request
 * @package SergeyNezbritskiy\PrivatBank
 */
class Request
{

    /**
     * @var string
     */
    protected $requestUri;

    /**
     * @var string
     */
    protected $method;

    /**
     * @var string[]
     */
    protected $query;

    /**
     * @var string
     */
    protected $body;

    /**
     * Request constructor.
     * @param string $requestUri
     * @param string|null $method
     * @param array|null $query
     * @param string|null $body
     */
    public function __construct(string $requestUri, string $method = null, array $query = null, string $body = null)
    {
        $this->requestUri = $requestUri;
        $this->method = $method ?: 'GET';
        $this->query = $query ?: [];
        $this->body = $body ?: '';
    }

    /**
     * @return string
     */
    public function getRequestUri(): string
    {
        return $this->requestUri;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @param string $method
     * @return Request
     */
    public function setMethod(string $method): Request
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getQuery(): array
    {
        return $this->query;
    }

    /**
     * @param string[] $query
     * @return Request
     */
    public function setQuery(array $query): Request
    {
        $this->query = $query;
        return $this;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param string $body
     * @return Request
     */
    public function setBody(string $body): Request
    {
        $this->body = $body;
        return $this;
    }

}