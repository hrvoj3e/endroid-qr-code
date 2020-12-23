<?php

declare(strict_types=1);

/*
 * (c) Jeroen van den Enden <info@endroid.nl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Endroid\QrCode\Writer;

class JpgWriter extends PngWriter
{
    private function imageToString($image): string
    {
        ob_start();
        imagejpeg($image);

        return (string) ob_get_clean();
    }

    public static function getContentType(): string
    {
        return 'image/jpeg';
    }

    public static function getSupportedExtensions(): array
    {
        return ['jpg'];
    }

    public function getName(): string
    {
        return 'jpg';
    }
}
