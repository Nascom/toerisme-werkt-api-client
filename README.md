# Toerisme Werkt PHP client

## Installation

The library is available on [packagist][packagist].

```bash
$ composer require nascom/toerisme-werkt-api-client
```

## Usage

```php
<?php

use GuzzleHttp\Client;
use Nascom\ToerismeWerktApiClient\Http\ApiClient;
use Nascom\ToerismeWerktApiClient\Request\Tags\ListTagsRequest;
use Nascom\ToerismeWerktApiClient\Response\Tags\ListTagsResponse;

// Instantiate the API client using your credentials and
// a HTTP client.
$client = new ApiClient(
    new Client(),
    'https://api.toerismewerkt.be',
    'your-api-key'
);

// Perform requests by passing a request object to the client.
$request = new ListTagsRequest();
/** @var ListTagsResponse $response */
$response = $client->handle($request);
$tags = $response->getTags();
```

For a list of all available requests, take a look at the
[Request namespace][github-requests]

[packagist]: https://packagist.org/packages/nascom/toerisme-werkt-api-client
[github-requests]: https://github.com/Nascom/toerisme-werkt-api-client/tree/master/src/Request
