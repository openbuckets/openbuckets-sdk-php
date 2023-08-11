# OpenAPI\Client\BucketsApi

All URIs are relative to https://api.openbuckets.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**searchBuckets()**](BucketsApi.md#searchBuckets) | **GET** /api/v2/buckets | Search Buckets |


## `searchBuckets()`

```php
searchBuckets($keywords, $type, $exact, $start, $limit, $order, $direction): \OpenAPI\Client\Model\BucketSearchResults
```

Search Buckets

This request enables you to perform a targeted search for buckets within the OpenBuckets database using advanced filters. You can narrow down the search based on various criteria such as keywords, bucket type, exact match, sorting, and pagination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BucketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keywords = abg; // string | the search keywords to filter bucket names (e.g., \"abg\")
$type = aws; // string | the type of bucket to filter (e.g., aws,dos,azure,gcp)
$exact = 0; // string | whether to perform an exact match for the keywords (0 for false, 1 for true)
$start = 0; // string | starting index for pagination
$limit = 1000; // string | number of search results to return per page
$order = fileCount; // string | the sorting field for the search results (e.g., \"fileCount\" for sorting by file count)
$direction = asc; // string | the sorting direction for the search results (e.g., \"asc\" for ascending)

try {
    $result = $apiInstance->searchBuckets($keywords, $type, $exact, $start, $limit, $order, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BucketsApi->searchBuckets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **keywords** | **string**| the search keywords to filter bucket names (e.g., \&quot;abg\&quot;) | [optional] |
| **type** | **string**| the type of bucket to filter (e.g., aws,dos,azure,gcp) | [optional] |
| **exact** | **string**| whether to perform an exact match for the keywords (0 for false, 1 for true) | [optional] |
| **start** | **string**| starting index for pagination | [optional] |
| **limit** | **string**| number of search results to return per page | [optional] |
| **order** | **string**| the sorting field for the search results (e.g., \&quot;fileCount\&quot; for sorting by file count) | [optional] |
| **direction** | **string**| the sorting direction for the search results (e.g., \&quot;asc\&quot; for ascending) | [optional] |

### Return type

[**\OpenAPI\Client\Model\BucketSearchResults**](../Model/BucketSearchResults.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
