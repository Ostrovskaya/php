<?php
/**
 * @param string $source
 * @return array
 */
function getGalleryFiles(string $source): array
{
    return array_filter(
        scandir($source),
        function ($item) use ($source) {
            return !is_dir($source . $item);
        }
    );
}

