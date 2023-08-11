# OpenAPI\Client\FilesApi

All URIs are relative to https://api.openbuckets.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**searchFiles()**](FilesApi.md#searchFiles) | **GET** /api/v2/files | Search Files |


## `searchFiles()`

```php
searchFiles($keywords, $order, $direction, $full_path, $extensions, $last_modified_from, $last_modified_to, $size_from, $size_to, $start, $limit, $exclude_buckets, $regexp, $noautocorrect, $buckets, $stop_extensions, $paging_mode, $search_after, $scroll_id): \OpenAPI\Client\Model\FileSearchResults
```

Search Files

This request allows you to perform a highly specific search for files within the OpenBuckets database using advanced filters. You can narrow down the search based on various criteria such as keywords, order, size, date range, file extensions, and more.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keywords = org%20images%20-aws; // string | multiple keywords. - denotes stop keywords
$order = size; // string | the sorting field for the search results (e.g., \"size\", \"last_modified\")
$direction = desc; // string | the sorting direction for the search results (e.g., \"desc\" for descending)
$full_path = 1; // string | include the full path in the search results (1 for true, 0 for false)
$extensions = pdf%2C.env; // string | comma-separated list of file extensions to include (e.g., \"pdf,env\")
$last_modified_from = 1682965800; // string | UNIX timestamp for the starting date of the last modification range
$last_modified_to = 1693420200; // string | UNIX timestamp for the ending date of the last modification rang
$size_from = 15155035; // string | minimum file size in bytes
$size_to = 4538824351471; // string | maximum file size in bytes
$start = 0; // string | starting index for pagination
$limit = 1000; // string | number of search results to return per page
$exclude_buckets = 45,54; // string | comma-separated list of bucket IDs to exclude from the search
$regexp = false; // string | use regular expression for the search (true or false)
$noautocorrect = false; // string | disable autocorrection in the search query (true or false)
$buckets = ; // string | filter search results to specific bucket IDs
$stop_extensions = ; // string | comma-separated list of file extensions to exclude
$paging_mode = offset; // string | pagination mode (e.g., \"offset\" for offset-based)
$search_after = ; // string | token to continue a scroll-based search
$scroll_id = ; // string | scroll ID for a continuation of a scroll-based search

try {
    $result = $apiInstance->searchFiles($keywords, $order, $direction, $full_path, $extensions, $last_modified_from, $last_modified_to, $size_from, $size_to, $start, $limit, $exclude_buckets, $regexp, $noautocorrect, $buckets, $stop_extensions, $paging_mode, $search_after, $scroll_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->searchFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **keywords** | **string**| multiple keywords. - denotes stop keywords | [optional] |
| **order** | **string**| the sorting field for the search results (e.g., \&quot;size\&quot;, \&quot;last_modified\&quot;) | [optional] |
| **direction** | **string**| the sorting direction for the search results (e.g., \&quot;desc\&quot; for descending) | [optional] |
| **full_path** | **string**| include the full path in the search results (1 for true, 0 for false) | [optional] |
| **extensions** | **string**| comma-separated list of file extensions to include (e.g., \&quot;pdf,env\&quot;) | [optional] |
| **last_modified_from** | **string**| UNIX timestamp for the starting date of the last modification range | [optional] |
| **last_modified_to** | **string**| UNIX timestamp for the ending date of the last modification rang | [optional] |
| **size_from** | **string**| minimum file size in bytes | [optional] |
| **size_to** | **string**| maximum file size in bytes | [optional] |
| **start** | **string**| starting index for pagination | [optional] |
| **limit** | **string**| number of search results to return per page | [optional] |
| **exclude_buckets** | **string**| comma-separated list of bucket IDs to exclude from the search | [optional] |
| **regexp** | **string**| use regular expression for the search (true or false) | [optional] |
| **noautocorrect** | **string**| disable autocorrection in the search query (true or false) | [optional] |
| **buckets** | **string**| filter search results to specific bucket IDs | [optional] |
| **stop_extensions** | **string**| comma-separated list of file extensions to exclude | [optional] |
| **paging_mode** | **string**| pagination mode (e.g., \&quot;offset\&quot; for offset-based) | [optional] |
| **search_after** | **string**| token to continue a scroll-based search | [optional] |
| **scroll_id** | **string**| scroll ID for a continuation of a scroll-based search | [optional] |

### Return type

[**\OpenAPI\Client\Model\FileSearchResults**](../Model/FileSearchResults.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
