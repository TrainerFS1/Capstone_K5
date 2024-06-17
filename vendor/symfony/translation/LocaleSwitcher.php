<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation;

use Symfony\Component\Routing\RequestContext;
use Symfony\Contracts\Translation\LocaleAwareInterface;

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 */
class LocaleSwitcher implements LocaleAwareInterface
{
    private string $defaultLocale;

    /**
     * @param LocaleAwareInterface[] $localeAwareServices
     */
    public function __construct(
        private string $locale,
        private iterable $localeAwareServices,
        private ?RequestContext $requestContext = null,
    ) {
        $this->defaultLocale = $locale;
    }

    public function setLocale(string $locale): void
    {
<<<<<<< HEAD
        // Silently ignore if the intl extension is not loaded
        try {
            if (class_exists(\Locale::class, false)) {
                \Locale::setDefault($locale);
            }
        } catch (\Exception) {
        }

        $this->locale = $locale;
=======
        \Locale::setDefault($this->locale = $locale);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->requestContext?->setParameter('_locale', $locale);

        foreach ($this->localeAwareServices as $service) {
            $service->setLocale($locale);
        }
    }

    public function getLocale(): string
    {
        return $this->locale;
    }

    /**
     * Switch to a new locale, execute a callback, then switch back to the original.
     *
     * @template T
     *
<<<<<<< HEAD
     * @param callable(string $locale):T $callback
=======
     * @param callable():T $callback
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @return T
     */
    public function runWithLocale(string $locale, callable $callback): mixed
    {
        $original = $this->getLocale();
        $this->setLocale($locale);

        try {
<<<<<<< HEAD
            return $callback($locale);
=======
            return $callback();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        } finally {
            $this->setLocale($original);
        }
    }

    public function reset(): void
    {
        $this->setLocale($this->defaultLocale);
    }
}
