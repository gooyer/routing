<?php

declare(strict_types=1);

namespace Gooyer\Routing;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD)]
class Route
{
    /**
     * Http method
     * @var string $method
     */
    protected string $method;

    /**
     * URL path
     * @var string $path
     */
    protected string $path;

    public function __construct(string $method, string $path)
    {
        $this->method = $method;
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }


}
