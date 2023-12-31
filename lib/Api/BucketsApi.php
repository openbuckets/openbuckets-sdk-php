<?php
/**
 * BucketsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openbuckets.io
 */

/**
 * OpenBuckets API
 *
 * The OpenBuckets web-based tool is a powerful utility that allows users to quickly locate open buckets in cloud storage systems through a simple query. In addition, it provides a convenient way to search for various file types across these open buckets, making it an essential tool for security professionals, researchers, and anyone interested in discovering exposed data. This Postman collection aims to showcase the capabilities of OpenBuckets by providing a set of API requests that demonstrate how to leverage its features. By following this collection, you'll learn how to utilize OpenBuckets to identify open buckets and search for specific file types within them.
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openbuckets.io
 * OpenAPI Generator version: 7.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openbuckets.io).
 * https://openbuckets.io
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * BucketsApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openbuckets.io
 */
class BucketsApi
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
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'searchBuckets' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation searchBuckets
     *
     * Search Buckets
     *
     * @param  string $keywords the search keywords to filter bucket names (e.g., \&quot;abg\&quot;) (optional)
     * @param  string $type the type of bucket to filter (e.g., aws,dos,azure,gcp) (optional)
     * @param  string $exact whether to perform an exact match for the keywords (0 for false, 1 for true) (optional)
     * @param  string $start starting index for pagination (optional)
     * @param  string $limit number of search results to return per page (optional)
     * @param  string $order the sorting field for the search results (e.g., \&quot;fileCount\&quot; for sorting by file count) (optional)
     * @param  string $direction the sorting direction for the search results (e.g., \&quot;asc\&quot; for ascending) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchBuckets'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\BucketSearchResults
     */
    public function searchBuckets($keywords = null, $type = null, $exact = null, $start = null, $limit = null, $order = null, $direction = null, string $contentType = self::contentTypes['searchBuckets'][0])
    {
        list($response) = $this->searchBucketsWithHttpInfo($keywords, $type, $exact, $start, $limit, $order, $direction, $contentType);
        return $response;
    }

    /**
     * Operation searchBucketsWithHttpInfo
     *
     * Search Buckets
     *
     * @param  string $keywords the search keywords to filter bucket names (e.g., \&quot;abg\&quot;) (optional)
     * @param  string $type the type of bucket to filter (e.g., aws,dos,azure,gcp) (optional)
     * @param  string $exact whether to perform an exact match for the keywords (0 for false, 1 for true) (optional)
     * @param  string $start starting index for pagination (optional)
     * @param  string $limit number of search results to return per page (optional)
     * @param  string $order the sorting field for the search results (e.g., \&quot;fileCount\&quot; for sorting by file count) (optional)
     * @param  string $direction the sorting direction for the search results (e.g., \&quot;asc\&quot; for ascending) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchBuckets'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\BucketSearchResults, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchBucketsWithHttpInfo($keywords = null, $type = null, $exact = null, $start = null, $limit = null, $order = null, $direction = null, string $contentType = self::contentTypes['searchBuckets'][0])
    {
        $request = $this->searchBucketsRequest($keywords, $type, $exact, $start, $limit, $order, $direction, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\BucketSearchResults' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\BucketSearchResults' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\BucketSearchResults', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\BucketSearchResults';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
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
                        '\OpenAPI\Client\Model\BucketSearchResults',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation searchBucketsAsync
     *
     * Search Buckets
     *
     * @param  string $keywords the search keywords to filter bucket names (e.g., \&quot;abg\&quot;) (optional)
     * @param  string $type the type of bucket to filter (e.g., aws,dos,azure,gcp) (optional)
     * @param  string $exact whether to perform an exact match for the keywords (0 for false, 1 for true) (optional)
     * @param  string $start starting index for pagination (optional)
     * @param  string $limit number of search results to return per page (optional)
     * @param  string $order the sorting field for the search results (e.g., \&quot;fileCount\&quot; for sorting by file count) (optional)
     * @param  string $direction the sorting direction for the search results (e.g., \&quot;asc\&quot; for ascending) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchBuckets'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchBucketsAsync($keywords = null, $type = null, $exact = null, $start = null, $limit = null, $order = null, $direction = null, string $contentType = self::contentTypes['searchBuckets'][0])
    {
        return $this->searchBucketsAsyncWithHttpInfo($keywords, $type, $exact, $start, $limit, $order, $direction, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation searchBucketsAsyncWithHttpInfo
     *
     * Search Buckets
     *
     * @param  string $keywords the search keywords to filter bucket names (e.g., \&quot;abg\&quot;) (optional)
     * @param  string $type the type of bucket to filter (e.g., aws,dos,azure,gcp) (optional)
     * @param  string $exact whether to perform an exact match for the keywords (0 for false, 1 for true) (optional)
     * @param  string $start starting index for pagination (optional)
     * @param  string $limit number of search results to return per page (optional)
     * @param  string $order the sorting field for the search results (e.g., \&quot;fileCount\&quot; for sorting by file count) (optional)
     * @param  string $direction the sorting direction for the search results (e.g., \&quot;asc\&quot; for ascending) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchBuckets'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchBucketsAsyncWithHttpInfo($keywords = null, $type = null, $exact = null, $start = null, $limit = null, $order = null, $direction = null, string $contentType = self::contentTypes['searchBuckets'][0])
    {
        $returnType = '\OpenAPI\Client\Model\BucketSearchResults';
        $request = $this->searchBucketsRequest($keywords, $type, $exact, $start, $limit, $order, $direction, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'searchBuckets'
     *
     * @param  string $keywords the search keywords to filter bucket names (e.g., \&quot;abg\&quot;) (optional)
     * @param  string $type the type of bucket to filter (e.g., aws,dos,azure,gcp) (optional)
     * @param  string $exact whether to perform an exact match for the keywords (0 for false, 1 for true) (optional)
     * @param  string $start starting index for pagination (optional)
     * @param  string $limit number of search results to return per page (optional)
     * @param  string $order the sorting field for the search results (e.g., \&quot;fileCount\&quot; for sorting by file count) (optional)
     * @param  string $direction the sorting direction for the search results (e.g., \&quot;asc\&quot; for ascending) (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['searchBuckets'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function searchBucketsRequest($keywords = null, $type = null, $exact = null, $start = null, $limit = null, $order = null, $direction = null, string $contentType = self::contentTypes['searchBuckets'][0])
    {









        $resourcePath = '/api/v2/buckets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $keywords,
            'keywords', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $type,
            'type', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $exact,
            'exact', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $start,
            'start', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $order,
            'order', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $direction,
            'direction', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
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
