<?php
/**
 * AuditLogEntryApi
 * PHP version 5
 *
 * @category Class
 * @package  VentureLeap\AuditLogService
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Audit Log API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.23
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace VentureLeap\AuditLogService\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use VentureLeap\AuditLogService\ApiException;
use VentureLeap\AuditLogService\Configuration;
use VentureLeap\AuditLogService\HeaderSelector;
use VentureLeap\AuditLogService\ObjectSerializer;

/**
 * AuditLogEntryApi Class Doc Comment
 *
 * @category Class
 * @package  VentureLeap\AuditLogService
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuditLogEntryApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getAuditLogEntryCollection
     *
     * Retrieves the collection of AuditLogEntry resources.
     *
     * @param  string $entity_uuid entity_uuid (optional)
     * @param  string $user_uuid user_uuid (optional)
     * @param  string $entity_type entity_type (optional)
     * @param  string $order_uuid order_uuid (optional)
     * @param  string $order_user_uuid order_user_uuid (optional)
     * @param  string $order_entity_uuid order_entity_uuid (optional)
     * @param  string $order_entity_type order_entity_type (optional)
     * @param  string $order_url order_url (optional)
     * @param  string $order_body order_body (optional)
     * @param  string $order_entry_type order_entry_type (optional)
     * @param  string $order_application_id order_application_id (optional)
     * @param  string $order_created_at order_created_at (optional)
     * @param  string $order_updated_at order_updated_at (optional)
     * @param  int $page The collection page number (optional, default to 1)
     *
     * @throws \VentureLeap\AuditLogService\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \VentureLeap\AuditLogService\Model\InlineResponse200
     */
    public function getAuditLogEntryCollection($entity_uuid = null, $user_uuid = null, $entity_type = null, $order_uuid = null, $order_user_uuid = null, $order_entity_uuid = null, $order_entity_type = null, $order_url = null, $order_body = null, $order_entry_type = null, $order_application_id = null, $order_created_at = null, $order_updated_at = null, $page = '1')
    {
        list($response) = $this->getAuditLogEntryCollectionWithHttpInfo($entity_uuid, $user_uuid, $entity_type, $order_uuid, $order_user_uuid, $order_entity_uuid, $order_entity_type, $order_url, $order_body, $order_entry_type, $order_application_id, $order_created_at, $order_updated_at, $page);
        return $response;
    }

    /**
     * Operation getAuditLogEntryCollectionWithHttpInfo
     *
     * Retrieves the collection of AuditLogEntry resources.
     *
     * @param  string $entity_uuid (optional)
     * @param  string $user_uuid (optional)
     * @param  string $entity_type (optional)
     * @param  string $order_uuid (optional)
     * @param  string $order_user_uuid (optional)
     * @param  string $order_entity_uuid (optional)
     * @param  string $order_entity_type (optional)
     * @param  string $order_url (optional)
     * @param  string $order_body (optional)
     * @param  string $order_entry_type (optional)
     * @param  string $order_application_id (optional)
     * @param  string $order_created_at (optional)
     * @param  string $order_updated_at (optional)
     * @param  int $page The collection page number (optional, default to 1)
     *
     * @throws \VentureLeap\AuditLogService\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \VentureLeap\AuditLogService\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAuditLogEntryCollectionWithHttpInfo($entity_uuid = null, $user_uuid = null, $entity_type = null, $order_uuid = null, $order_user_uuid = null, $order_entity_uuid = null, $order_entity_type = null, $order_url = null, $order_body = null, $order_entry_type = null, $order_application_id = null, $order_created_at = null, $order_updated_at = null, $page = '1')
    {
        $returnType = '\VentureLeap\AuditLogService\Model\InlineResponse200';
        $request = $this->getAuditLogEntryCollectionRequest($entity_uuid, $user_uuid, $entity_type, $order_uuid, $order_user_uuid, $order_entity_uuid, $order_entity_type, $order_url, $order_body, $order_entry_type, $order_application_id, $order_created_at, $order_updated_at, $page);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\VentureLeap\AuditLogService\Model\InlineResponse200',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAuditLogEntryCollectionAsync
     *
     * Retrieves the collection of AuditLogEntry resources.
     *
     * @param  string $entity_uuid (optional)
     * @param  string $user_uuid (optional)
     * @param  string $entity_type (optional)
     * @param  string $order_uuid (optional)
     * @param  string $order_user_uuid (optional)
     * @param  string $order_entity_uuid (optional)
     * @param  string $order_entity_type (optional)
     * @param  string $order_url (optional)
     * @param  string $order_body (optional)
     * @param  string $order_entry_type (optional)
     * @param  string $order_application_id (optional)
     * @param  string $order_created_at (optional)
     * @param  string $order_updated_at (optional)
     * @param  int $page The collection page number (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAuditLogEntryCollectionAsync($entity_uuid = null, $user_uuid = null, $entity_type = null, $order_uuid = null, $order_user_uuid = null, $order_entity_uuid = null, $order_entity_type = null, $order_url = null, $order_body = null, $order_entry_type = null, $order_application_id = null, $order_created_at = null, $order_updated_at = null, $page = '1')
    {
        return $this->getAuditLogEntryCollectionAsyncWithHttpInfo($entity_uuid, $user_uuid, $entity_type, $order_uuid, $order_user_uuid, $order_entity_uuid, $order_entity_type, $order_url, $order_body, $order_entry_type, $order_application_id, $order_created_at, $order_updated_at, $page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAuditLogEntryCollectionAsyncWithHttpInfo
     *
     * Retrieves the collection of AuditLogEntry resources.
     *
     * @param  string $entity_uuid (optional)
     * @param  string $user_uuid (optional)
     * @param  string $entity_type (optional)
     * @param  string $order_uuid (optional)
     * @param  string $order_user_uuid (optional)
     * @param  string $order_entity_uuid (optional)
     * @param  string $order_entity_type (optional)
     * @param  string $order_url (optional)
     * @param  string $order_body (optional)
     * @param  string $order_entry_type (optional)
     * @param  string $order_application_id (optional)
     * @param  string $order_created_at (optional)
     * @param  string $order_updated_at (optional)
     * @param  int $page The collection page number (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAuditLogEntryCollectionAsyncWithHttpInfo($entity_uuid = null, $user_uuid = null, $entity_type = null, $order_uuid = null, $order_user_uuid = null, $order_entity_uuid = null, $order_entity_type = null, $order_url = null, $order_body = null, $order_entry_type = null, $order_application_id = null, $order_created_at = null, $order_updated_at = null, $page = '1')
    {
        $returnType = '\VentureLeap\AuditLogService\Model\InlineResponse200';
        $request = $this->getAuditLogEntryCollectionRequest($entity_uuid, $user_uuid, $entity_type, $order_uuid, $order_user_uuid, $order_entity_uuid, $order_entity_type, $order_url, $order_body, $order_entry_type, $order_application_id, $order_created_at, $order_updated_at, $page);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAuditLogEntryCollection'
     *
     * @param  string $entity_uuid (optional)
     * @param  string $user_uuid (optional)
     * @param  string $entity_type (optional)
     * @param  string $order_uuid (optional)
     * @param  string $order_user_uuid (optional)
     * @param  string $order_entity_uuid (optional)
     * @param  string $order_entity_type (optional)
     * @param  string $order_url (optional)
     * @param  string $order_body (optional)
     * @param  string $order_entry_type (optional)
     * @param  string $order_application_id (optional)
     * @param  string $order_created_at (optional)
     * @param  string $order_updated_at (optional)
     * @param  int $page The collection page number (optional, default to 1)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAuditLogEntryCollectionRequest($entity_uuid = null, $user_uuid = null, $entity_type = null, $order_uuid = null, $order_user_uuid = null, $order_entity_uuid = null, $order_entity_type = null, $order_url = null, $order_body = null, $order_entry_type = null, $order_application_id = null, $order_created_at = null, $order_updated_at = null, $page = '1')
    {

        $resourcePath = '/audit-log/audit_log_entries';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($entity_uuid !== null) {
            $queryParams['entityUuid'] = ObjectSerializer::toQueryValue($entity_uuid, null);
        }
        // query params
        if ($user_uuid !== null) {
            $queryParams['userUuid'] = ObjectSerializer::toQueryValue($user_uuid, null);
        }
        // query params
        if ($entity_type !== null) {
            $queryParams['entityType'] = ObjectSerializer::toQueryValue($entity_type, null);
        }
        // query params
        if ($order_uuid !== null) {
            $queryParams['order[uuid]'] = ObjectSerializer::toQueryValue($order_uuid, null);
        }
        // query params
        if ($order_user_uuid !== null) {
            $queryParams['order[userUuid]'] = ObjectSerializer::toQueryValue($order_user_uuid, null);
        }
        // query params
        if ($order_entity_uuid !== null) {
            $queryParams['order[entityUuid]'] = ObjectSerializer::toQueryValue($order_entity_uuid, null);
        }
        // query params
        if ($order_entity_type !== null) {
            $queryParams['order[entityType]'] = ObjectSerializer::toQueryValue($order_entity_type, null);
        }
        // query params
        if ($order_url !== null) {
            $queryParams['order[url]'] = ObjectSerializer::toQueryValue($order_url, null);
        }
        // query params
        if ($order_body !== null) {
            $queryParams['order[body]'] = ObjectSerializer::toQueryValue($order_body, null);
        }
        // query params
        if ($order_entry_type !== null) {
            $queryParams['order[entryType]'] = ObjectSerializer::toQueryValue($order_entry_type, null);
        }
        // query params
        if ($order_application_id !== null) {
            $queryParams['order[applicationId]'] = ObjectSerializer::toQueryValue($order_application_id, null);
        }
        // query params
        if ($order_created_at !== null) {
            $queryParams['order[createdAt]'] = ObjectSerializer::toQueryValue($order_created_at, null);
        }
        // query params
        if ($order_updated_at !== null) {
            $queryParams['order[updatedAt]'] = ObjectSerializer::toQueryValue($order_updated_at, null);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/ld+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/ld+json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getAuditLogEntryItem
     *
     * Retrieves a AuditLogEntry resource.
     *
     * @param  string $id id (required)
     *
     * @throws \VentureLeap\AuditLogService\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogEntryRead
     */
    public function getAuditLogEntryItem($id)
    {
        list($response) = $this->getAuditLogEntryItemWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getAuditLogEntryItemWithHttpInfo
     *
     * Retrieves a AuditLogEntry resource.
     *
     * @param  string $id (required)
     *
     * @throws \VentureLeap\AuditLogService\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogEntryRead, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAuditLogEntryItemWithHttpInfo($id)
    {
        $returnType = '\VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogEntryRead';
        $request = $this->getAuditLogEntryItemRequest($id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogEntryRead',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAuditLogEntryItemAsync
     *
     * Retrieves a AuditLogEntry resource.
     *
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAuditLogEntryItemAsync($id)
    {
        return $this->getAuditLogEntryItemAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAuditLogEntryItemAsyncWithHttpInfo
     *
     * Retrieves a AuditLogEntry resource.
     *
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAuditLogEntryItemAsyncWithHttpInfo($id)
    {
        $returnType = '\VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogEntryRead';
        $request = $this->getAuditLogEntryItemRequest($id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getAuditLogEntryItem'
     *
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAuditLogEntryItemRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getAuditLogEntryItem'
            );
        }

        $resourcePath = '/audit-log/audit_log_entries/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/ld+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/ld+json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation postAuditLogEntryCollection
     *
     * Creates a AuditLogEntry resource.
     *
     * @param  \VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogEntryWrite $body The new AuditLogEntry resource (optional)
     *
     * @throws \VentureLeap\AuditLogService\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogEntryRead
     */
    public function postAuditLogEntryCollection($body = null)
    {
        list($response) = $this->postAuditLogEntryCollectionWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation postAuditLogEntryCollectionWithHttpInfo
     *
     * Creates a AuditLogEntry resource.
     *
     * @param  \VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogEntryWrite $body The new AuditLogEntry resource (optional)
     *
     * @throws \VentureLeap\AuditLogService\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogEntryRead, HTTP status code, HTTP response headers (array of strings)
     */
    public function postAuditLogEntryCollectionWithHttpInfo($body = null)
    {
        $returnType = '\VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogEntryRead';
        $request = $this->postAuditLogEntryCollectionRequest($body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogEntryRead',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation postAuditLogEntryCollectionAsync
     *
     * Creates a AuditLogEntry resource.
     *
     * @param  \VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogEntryWrite $body The new AuditLogEntry resource (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postAuditLogEntryCollectionAsync($body = null)
    {
        return $this->postAuditLogEntryCollectionAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation postAuditLogEntryCollectionAsyncWithHttpInfo
     *
     * Creates a AuditLogEntry resource.
     *
     * @param  \VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogEntryWrite $body The new AuditLogEntry resource (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function postAuditLogEntryCollectionAsyncWithHttpInfo($body = null)
    {
        $returnType = '\VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogEntryRead';
        $request = $this->postAuditLogEntryCollectionRequest($body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'postAuditLogEntryCollection'
     *
     * @param  \VentureLeap\AuditLogService\Model\AuditLogEntryJsonldAuditLogEntryWrite $body The new AuditLogEntry resource (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function postAuditLogEntryCollectionRequest($body = null)
    {

        $resourcePath = '/audit-log/audit_log_entries';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/ld+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/ld+json'],
                ['application/ld+json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
