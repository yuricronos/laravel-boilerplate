# ApiService

`ApiService` is a service that simplifies making HTTP requests to an external API. It provides methods for sending POST and GET requests to specified endpoints.

## Setup

**Configuration File**

   The configuration settings for the API service are located in the `config/lrvlsrvce.php` file. You'll need to set the values for `api_url` and `api_token` with your own API details.

   Example configuration:

   ```php
   // config/lrvlsrvce.php
   return [
       'api_url' => "https://api_url",   // Replace with the base API URL
       'api_token' => "{sample token}",  // Replace with your API token
   ];
   ```

## Usage

**Initilize api service**
```php
$api = app(ApiService::class);
```

**Sending a POST Request**

```php
$params = [
    'param1'=> 'value1',
    'param2'=> 'value2'
];
$response = $api->postData('/endpoint', $params);
```

**Sending a GET Request**
```php
$params = [
    'param1'=> 'value1',
    'param2'=> 'value2'
];
$response = $api->getData('/endpoint');
```
