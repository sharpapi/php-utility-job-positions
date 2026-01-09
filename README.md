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
            "id": "18f73cda-db62-454b-aa53-aa26acb196b7",
            "name": "Billing Manager",
            "slug": "billing-manager"
        },
        {
            "id": "d766ba1d-c03a-4081-9cdf-75aa05de8b46",
            "name": "Accounts Payable Specialist",
            "slug": "accounts-payable-specialist"
        },
        {
            "id": "53681fe4-1a46-46ff-90ad-b508205526d0",
            "name": "Medical Biller",
            "slug": "medical-biller"
        },
        {
            "id": "4006625d-5074-400f-a09a-0a48e0adefd7",
            "name": "Cost analyst",
            "slug": "cost-analyst"
        },
        {
            "id": "c697088c-302d-4a74-9e3b-8d89769f1ec6",
            "name": "Payroll Accountant",
            "slug": "payroll-accountant"
        },
        {
            "id": "334c884a-d73b-4dc2-aaa0-bd2674dc3210",
            "name": "Tax Preparer",
            "slug": "tax-preparer"
        },
        {
            "id": "5d63e6be-a4f5-4770-94d2-bea2afd1f57e",
            "name": "Mortgage Loan Officer",
            "slug": "mortgage-loan-officer"
        },
        {
            "id": "7130a3eb-7bed-4ebc-ad57-33997341895d",
            "name": "Staff Accountant",
            "slug": "staff-accountant"
        },
        {
            "id": "004c2a41-0d0d-4773-a954-77a446e7cbad",
            "name": "Night Auditor",
            "slug": "night-auditor"
        },
        {
            "id": "78ead8b5-f304-411e-b38c-0c71fec0c0d1",
            "name": "Accounts Administrator",
            "slug": "accounts-administrator"
        },
        {
            "id": "924976b2-bf58-48f6-83a5-069aefebf5e7",
            "name": "Credit Manager",
            "slug": "credit-manager"
        },
        {
            "id": "29f0bb1b-bcfd-4838-92b9-6f2065dce043",
            "name": "Credit Officer",
            "slug": "credit-officer"
        },
        {
            "id": "eb60a270-29aa-43dc-bbd8-ae5ba070293c",
            "name": "Accounting Assistant",
            "slug": "accounting-assistant"
        },
        {
            "id": "eefd9878-b5f3-46ca-a104-6b84447cbf52",
            "name": "Budget Manager",
            "slug": "budget-manager"
        },
        {
            "id": "76da219a-eabe-4d33-a459-e80ff31e5566",
            "name": "Corporate Accountant",
            "slug": "corporate-accountant"
        }
    ],
    "links": {
        "first": "https://sharpapi.com/api/v1/utilities/job_positions_list?page=1",
        "last": "https://sharpapi.com/api/v1/utilities/job_positions_list?page=1106",
        "prev": null,
        "next": "https://sharpapi.com/api/v1/utilities/job_positions_list?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1106,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "https://sharpapi.com/api/v1/utilities/job_positions_list?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": "https://sharpapi.com/api/v1/utilities/job_positions_list?page=2",
                "label": "2",
                "active": false
            },
            {
                "url": "https://sharpapi.com/api/v1/utilities/job_positions_list?page=3",
                "label": "3",
                "active": false
            },
            {
                "url": "https://sharpapi.com/api/v1/utilities/job_positions_list?page=4",
                "label": "4",
                "active": false
            },
            {
                "url": "https://sharpapi.com/api/v1/utilities/job_positions_list?page=5",
                "label": "5",
                "active": false
            },
            {
                "url": "https://sharpapi.com/api/v1/utilities/job_positions_list?page=6",
                "label": "6",
                "active": false
            },
            {
                "url": "https://sharpapi.com/api/v1/utilities/job_positions_list?page=7",
                "label": "7",
                "active": false
            },
            {
                "url": "https://sharpapi.com/api/v1/utilities/job_positions_list?page=8",
                "label": "8",
                "active": false
            },
            {
                "url": "https://sharpapi.com/api/v1/utilities/job_positions_list?page=9",
                "label": "9",
                "active": false
            },
            {
                "url": "https://sharpapi.com/api/v1/utilities/job_positions_list?page=10",
                "label": "10",
                "active": false
            },
            {
                "url": null,
                "label": "...",
                "active": false
            },
            {
                "url": "https://sharpapi.com/api/v1/utilities/job_positions_list?page=1105",
                "label": "1105",
                "active": false
            },
            {
                "url": "https://sharpapi.com/api/v1/utilities/job_positions_list?page=1106",
                "label": "1106",
                "active": false
            },
            {
                "url": "https://sharpapi.com/api/v1/utilities/job_positions_list?page=2",
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "https://sharpapi.com/api/v1/utilities/job_positions_list",
        "per_page": 15,
        "to": 15,
        "total": 16588
    }
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
