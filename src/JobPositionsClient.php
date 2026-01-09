<?php

declare(strict_types=1);

namespace SharpAPI\UtilityJobPositions;

use GuzzleHttp\Exception\GuzzleException;
use SharpAPI\Core\Client\SharpApiClient;

/**
 * Access job positions database - browse and filter job position data
 *
 * @package SharpAPI\UtilityJobPositions
 * @api
 */
class JobPositionsClient extends SharpApiClient
{
    public function __construct(
        string $apiKey,
        ?string $apiBaseUrl = 'https://sharpapi.com/api/v1',
        ?string $userAgent = 'SharpAPIPHPUtilityJobPositions/1.0.0'
    ) {
        parent::__construct($apiKey, $apiBaseUrl, $userAgent);
    }

    /**
     * List job positions with optional filters
     *
     * @param array $params Optional query parameters
     * @return array Job positions list
     * @throws GuzzleException
     * @api
     */
    public function listJobPositions(array $params = []): array
    {
        $response = $this->makeRequest('GET', '/utilities/job_positions_list', $params);
        return json_decode($response->getBody()->__toString(), true);
    }

    /**
     * Get job position details by UUID
     *
     * @param string $uuid Job position UUID
     * @return array Job position details
     * @throws GuzzleException
     * @api
     */
    public function getJobPositionDetails(string $uuid): array
    {
        $response = $this->makeRequest('GET', "/utilities/job_positions_details/{$uuid}");
        return json_decode($response->getBody()->__toString(), true);
    }
}
