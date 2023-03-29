<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Response;

class CsvExporterService
{
    public function exportCsv(array $data, string $filename = 'export.csv'): Response
    {
        $csvData = '';

        foreach ($data as $row) {
            $csvData .= implode(',', $row) . "\n";
        }

        $response = new Response($csvData);
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="' . $filename . '"');

        return $response;
    }
}
