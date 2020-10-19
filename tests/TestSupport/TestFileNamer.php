<?php

namespace Spatie\MediaLibrary\Tests\TestSupport;

use Spatie\MediaLibrary\Conversions\Conversion;
use Spatie\MediaLibrary\Support\FileNamer\FileNamer;

class TestFileNamer extends FileNamer
{
    public function getFileName(string $fileName): string
    {
        $fileName = pathinfo($fileName, PATHINFO_FILENAME);

        return "prefix_{$fileName}_suffix";
    }

    public function getConversionFileName(string $fileName, Conversion $conversion): string
    {
        return "{$fileName}---{$conversion->getName()}";
    }
}
