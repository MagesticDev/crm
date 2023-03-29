<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class CsvImporterService
{
    public function importCsv(UploadedFile $file): array
    {
        $data = [];

        if (($handle = fopen($file->getPathname(), 'r')) !== false) {
            while (($row = fgetcsv($handle, 1000, ',')) !== false) {
                $data[] = $row;
            }
            fclose($handle);
        }

        return $data;
    }
}
