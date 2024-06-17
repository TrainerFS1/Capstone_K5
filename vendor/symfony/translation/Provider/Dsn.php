<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation\Provider;

use Symfony\Component\Translation\Exception\InvalidArgumentException;
use Symfony\Component\Translation\Exception\MissingRequiredOptionException;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Oskar Stark <oskarstark@googlemail.com>
 */
final class Dsn
{
    private ?string $scheme;
    private ?string $host;
    private ?string $user;
    private ?string $password;
    private ?int $port;
    private ?string $path;
    private array $options = [];
    private string $originalDsn;

<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(#[\SensitiveParameter] string $dsn)
    {
        $this->originalDsn = $dsn;

        if (false === $params = parse_url($dsn)) {
            throw new InvalidArgumentException('The translation provider DSN is invalid.');
        }

        if (!isset($params['scheme'])) {
            throw new InvalidArgumentException('The translation provider DSN must contain a scheme.');
        }
        $this->scheme = $params['scheme'];

        if (!isset($params['host'])) {
            throw new InvalidArgumentException('The translation provider DSN must contain a host (use "default" by default).');
        }
        $this->host = $params['host'];

        $this->user = '' !== ($params['user'] ?? '') ? rawurldecode($params['user']) : null;
        $this->password = '' !== ($params['pass'] ?? '') ? rawurldecode($params['pass']) : null;
        $this->port = $params['port'] ?? null;
        $this->path = $params['path'] ?? null;
        parse_str($params['query'] ?? '', $this->options);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function __construct(string $dsn)
    {
        $this->originalDsn = $dsn;

        if (false === $parsedDsn = parse_url($dsn)) {
            throw new InvalidArgumentException(sprintf('The "%s" translation provider DSN is invalid.', $dsn));
        }

        if (!isset($parsedDsn['scheme'])) {
            throw new InvalidArgumentException(sprintf('The "%s" translation provider DSN must contain a scheme.', $dsn));
        }
        $this->scheme = $parsedDsn['scheme'];

        if (!isset($parsedDsn['host'])) {
            throw new InvalidArgumentException(sprintf('The "%s" translation provider DSN must contain a host (use "default" by default).', $dsn));
        }
        $this->host = $parsedDsn['host'];

        $this->user = '' !== ($parsedDsn['user'] ?? '') ? urldecode($parsedDsn['user']) : null;
        $this->password = '' !== ($parsedDsn['pass'] ?? '') ? urldecode($parsedDsn['pass']) : null;
        $this->port = $parsedDsn['port'] ?? null;
        $this->path = $parsedDsn['path'] ?? null;
        parse_str($parsedDsn['query'] ?? '', $this->options);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function getScheme(): string
    {
        return $this->scheme;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getPort(?int $default = null): ?int
=======
    public function getPort(int $default = null): ?int
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getPort(int $default = null): ?int
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->port ?? $default;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getOption(string $key, mixed $default = null): mixed
=======
    public function getOption(string $key, mixed $default = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getOption(string $key, mixed $default = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->options[$key] ?? $default;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getRequiredOption(string $key): mixed
=======
    public function getRequiredOption(string $key)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getRequiredOption(string $key)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        if (!\array_key_exists($key, $this->options) || '' === trim($this->options[$key])) {
            throw new MissingRequiredOptionException($key);
        }

        return $this->options[$key];
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function getOriginalDsn(): string
    {
        return $this->originalDsn;
    }
}
