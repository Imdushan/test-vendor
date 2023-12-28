<?php

namespace YourVendor\MyModule;

use InvalidArgumentException;

class DynamicRequestHandler
{
    /**
     * Get a value from the request, or throw an exception if not present.
     *
     * @param array  $request  The request array.
     * @param string $key      The key to retrieve from the request.
     * @param mixed  $default  The default value if the key is not present.
     *
     * @return mixed
     *
     * @throws InvalidArgumentException
     */
    protected function getRequestValue(array $request, string $key, $default = null)
    {
        if (array_key_exists($key, $request)) {
            return $request[$key];
        }

        if ($default !== null) {
            return $default;
        }

        throw new InvalidArgumentException("Missing required attribute: {$key}");
    }
}
