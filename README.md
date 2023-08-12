# openbuckets

The [OpenBuckets](https://openbuckets.io) web-based tool is a powerful utility that allows users to quickly locate [open buckets in cloud storage systems through a simple query](https://openbuckets.io). In addition, it provides a convenient way to search for various file types across these open buckets, making it an essential tool for security professionals, researchers, and anyone interested in discovering exposed data.
This Postman collection aims to showcase the capabilities of OpenBuckets by providing a set of API requests that demonstrate how to leverage its features. By following this collection, you'll learn how to utilize OpenBuckets to identify open buckets and search for specific file types within them.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```
composer require openbuckets/sdk-php
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/openbuckets/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.openbuckets.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BucketsApi* | [**searchBuckets**](docs/Api/BucketsApi.md#searchbuckets) | **GET** /api/v2/buckets | Search Buckets
*FilesApi* | [**searchFiles**](docs/Api/FilesApi.md#searchfiles) | **GET** /api/v2/files | Search Files

## Models

- [Bucket](docs/Model/Bucket.md)
- [BucketSearchResults](docs/Model/BucketSearchResults.md)
- [File](docs/Model/File.md)
- [FileSearchResults](docs/Model/FileSearchResults.md)

## Authorization

Authentication schemes defined for the API:
### bearerAuth

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author
OpenBuckets