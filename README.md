![SharpAPI GitHub cover](https://sharpapi.com/sharpapi-github-laravel-bg.jpg "SharpAPI PHP Client")

# Utility Job Positions API for PHP

## ⚡ Access job positions database - browse and filter job position data

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sharpapi/php-utility-job-positions.svg?style=flat-square)](https://packagist.org/packages/sharpapi/php-utility-job-positions)
[![Total Downloads](https://img.shields.io/packagist/dt/sharpapi/php-utility-job-positions.svg?style=flat-square)](https://packagist.org/packages/sharpapi/php-utility-job-positions)

Check the full documentation on the [Utility Job Positions API for PHP API](https://sharpapi.com/en/catalog/ai/utility/job-positions-api) page.

---

## Quick Links

| Resource | Link |
|----------|------|
| **Main API Documentation** | [Authorization, Webhooks, Polling & More](https://documenter.getpostman.com/view/31106842/2s9Ye8faUp) |
| **Postman Documentation** | [View Docs](https://documenter.getpostman.com/view/31106842/2sBXVeGsVm) |
| **Product Details** | [SharpAPI.com](https://sharpapi.com/en/catalog/ai/utility/job-positions-api) |
| **SDK Libraries** | [GitHub - SharpAPI SDKs](https://github.com/sharpapi) |

---

## Requirements

- PHP >= 8.0

---

## Installation

### Step 1. Install the package via Composer:

```bash
composer require sharpapi/php-utility-job-positions
```

### Step 2. Visit [SharpAPI](https://sharpapi.com/) to get your API key.

---
## What it does

Access job positions database - browse and filter job position data

**Note:** This is a synchronous utility endpoint that returns data immediately (no async polling required).

---

## Usage
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use SharpAPI\UtilityJobPositions\JobPositionsClient;
use GuzzleHttp\Exception\GuzzleException;

$apiKey = 'your_api_key_here';
$client = new JobPositionsClient(apiKey: $apiKey);

try {
    // List job positions
    $positions = $client->listJobPositions();

    // Get specific position details
    $position = $client->getJobPositionDetails('uuid-here');

    print_r($position);
} catch (GuzzleException $e) {
    echo "API error: " . $e->getMessage();
}
```

---

## Example Response
```json
{
  "data": [
    {
      "uuid": "xyz789",
      "name": "Software Engineer",
      "category": "Technology"
    }
  ]
}
```
---

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

---

## Credits

- [A2Z WEB LTD](https://github.com/a2zwebltd)
- [Dawid Makowski](https://github.com/makowskid)
- Boost your [PHP AI](https://sharpapi.com/) capabilities!

---

## License

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](LICENSE.md)

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

---

## Social Media

🚀 For the latest news, tutorials, and case studies, don't forget to follow us on:
- [SharpAPI X (formerly Twitter)](https://x.com/SharpAPI)
- [SharpAPI YouTube](https://www.youtube.com/@SharpAPI)
- [SharpAPI Vimeo](https://vimeo.com/SharpAPI)
- [SharpAPI LinkedIn](https://www.linkedin.com/products/a2z-web-ltd-sharpapicom-automate-with-aipowered-api/)
- [SharpAPI Facebook](https://www.facebook.com/profile.php?id=61554115896974)
