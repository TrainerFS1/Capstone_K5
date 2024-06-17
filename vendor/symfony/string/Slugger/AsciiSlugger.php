<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\String\Slugger;

<<<<<<< HEAD
<<<<<<< HEAD
use Symfony\Component\Emoji\EmojiTransliterator;
=======
use Symfony\Component\Intl\Transliterator\EmojiTransliterator;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
use Symfony\Component\Intl\Transliterator\EmojiTransliterator;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use Symfony\Component\String\AbstractUnicodeString;
use Symfony\Component\String\UnicodeString;
use Symfony\Contracts\Translation\LocaleAwareInterface;

if (!interface_exists(LocaleAwareInterface::class)) {
    throw new \LogicException('You cannot use the "Symfony\Component\String\Slugger\AsciiSlugger" as the "symfony/translation-contracts" package is not installed. Try running "composer require symfony/translation-contracts".');
}

/**
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
class AsciiSlugger implements SluggerInterface, LocaleAwareInterface
{
    private const LOCALE_TO_TRANSLITERATOR_ID = [
        'am' => 'Amharic-Latin',
        'ar' => 'Arabic-Latin',
        'az' => 'Azerbaijani-Latin',
        'be' => 'Belarusian-Latin',
        'bg' => 'Bulgarian-Latin',
        'bn' => 'Bengali-Latin',
        'de' => 'de-ASCII',
        'el' => 'Greek-Latin',
        'fa' => 'Persian-Latin',
        'he' => 'Hebrew-Latin',
        'hy' => 'Armenian-Latin',
        'ka' => 'Georgian-Latin',
        'kk' => 'Kazakh-Latin',
        'ky' => 'Kirghiz-Latin',
        'ko' => 'Korean-Latin',
        'mk' => 'Macedonian-Latin',
        'mn' => 'Mongolian-Latin',
        'or' => 'Oriya-Latin',
        'ps' => 'Pashto-Latin',
        'ru' => 'Russian-Latin',
        'sr' => 'Serbian-Latin',
        'sr_Cyrl' => 'Serbian-Latin',
        'th' => 'Thai-Latin',
        'tk' => 'Turkmen-Latin',
        'uk' => 'Ukrainian-Latin',
        'uz' => 'Uzbek-Latin',
        'zh' => 'Han-Latin',
    ];

<<<<<<< HEAD
<<<<<<< HEAD
=======
    private ?string $defaultLocale;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    private ?string $defaultLocale;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private \Closure|array $symbolsMap = [
        'en' => ['@' => 'at', '&' => 'and'],
    ];
    private bool|string $emoji = false;

    /**
     * Cache of transliterators per locale.
     *
     * @var \Transliterator[]
     */
    private array $transliterators = [];

<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(
        private ?string $defaultLocale = null,
        array|\Closure|null $symbolsMap = null,
    ) {
        $this->symbolsMap = $symbolsMap ?? $this->symbolsMap;
    }

    public function setLocale(string $locale): void
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function __construct(string $defaultLocale = null, array|\Closure $symbolsMap = null)
    {
        $this->defaultLocale = $defaultLocale;
        $this->symbolsMap = $symbolsMap ?? $this->symbolsMap;
    }

    public function setLocale(string $locale)
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->defaultLocale = $locale;
    }

    public function getLocale(): string
    {
        return $this->defaultLocale;
    }

    /**
     * @param bool|string $emoji true will use the same locale,
     *                           false will disable emoji,
     *                           and a string to use a specific locale
     */
    public function withEmoji(bool|string $emoji = true): static
    {
        if (false !== $emoji && !class_exists(EmojiTransliterator::class)) {
<<<<<<< HEAD
<<<<<<< HEAD
            throw new \LogicException(sprintf('You cannot use the "%s()" method as the "symfony/emoji" package is not installed. Try running "composer require symfony/emoji".', __METHOD__));
=======
            throw new \LogicException(sprintf('You cannot use the "%s()" method as the "symfony/intl" package is not installed. Try running "composer require symfony/intl".', __METHOD__));
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            throw new \LogicException(sprintf('You cannot use the "%s()" method as the "symfony/intl" package is not installed. Try running "composer require symfony/intl".', __METHOD__));
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        $new = clone $this;
        $new->emoji = $emoji;

        return $new;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function slug(string $string, string $separator = '-', ?string $locale = null): AbstractUnicodeString
=======
    public function slug(string $string, string $separator = '-', string $locale = null): AbstractUnicodeString
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function slug(string $string, string $separator = '-', string $locale = null): AbstractUnicodeString
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $locale ??= $this->defaultLocale;

        $transliterator = [];
        if ($locale && ('de' === $locale || str_starts_with($locale, 'de_'))) {
            // Use the shortcut for German in UnicodeString::ascii() if possible (faster and no requirement on intl)
            $transliterator = ['de-ASCII'];
        } elseif (\function_exists('transliterator_transliterate') && $locale) {
            $transliterator = (array) $this->createTransliterator($locale);
        }

        if ($emojiTransliterator = $this->createEmojiTransliterator($locale)) {
            $transliterator[] = $emojiTransliterator;
        }

        if ($this->symbolsMap instanceof \Closure) {
            // If the symbols map is passed as a closure, there is no need to fallback to the parent locale
            // as the closure can just provide substitutions for all locales of interest.
            $symbolsMap = $this->symbolsMap;
<<<<<<< HEAD
<<<<<<< HEAD
            array_unshift($transliterator, static fn ($s) => $symbolsMap($s, $locale));
=======
            array_unshift($transliterator, static function ($s) use ($symbolsMap, $locale) {
                return $symbolsMap($s, $locale);
            });
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            array_unshift($transliterator, static function ($s) use ($symbolsMap, $locale) {
                return $symbolsMap($s, $locale);
            });
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        $unicodeString = (new UnicodeString($string))->ascii($transliterator);

        if (\is_array($this->symbolsMap)) {
            $map = null;
            if (isset($this->symbolsMap[$locale])) {
                $map = $this->symbolsMap[$locale];
            } else {
                $parent = self::getParentLocale($locale);
                if ($parent && isset($this->symbolsMap[$parent])) {
                    $map = $this->symbolsMap[$parent];
                }
            }
            if ($map) {
                foreach ($map as $char => $replace) {
                    $unicodeString = $unicodeString->replace($char, ' '.$replace.' ');
                }
            }
        }

        return $unicodeString
            ->replaceMatches('/[^A-Za-z0-9]++/', $separator)
            ->trim($separator)
        ;
    }

    private function createTransliterator(string $locale): ?\Transliterator
    {
        if (\array_key_exists($locale, $this->transliterators)) {
            return $this->transliterators[$locale];
        }

        // Exact locale supported, cache and return
        if ($id = self::LOCALE_TO_TRANSLITERATOR_ID[$locale] ?? null) {
            return $this->transliterators[$locale] = \Transliterator::create($id.'/BGN') ?? \Transliterator::create($id);
        }

        // Locale not supported and no parent, fallback to any-latin
        if (!$parent = self::getParentLocale($locale)) {
            return $this->transliterators[$locale] = null;
        }

        // Try to use the parent locale (ie. try "de" for "de_AT") and cache both locales
        if ($id = self::LOCALE_TO_TRANSLITERATOR_ID[$parent] ?? null) {
            $transliterator = \Transliterator::create($id.'/BGN') ?? \Transliterator::create($id);
        }

        return $this->transliterators[$locale] = $this->transliterators[$parent] = $transliterator ?? null;
    }

    private function createEmojiTransliterator(?string $locale): ?EmojiTransliterator
    {
        if (\is_string($this->emoji)) {
            $locale = $this->emoji;
        } elseif (!$this->emoji) {
            return null;
        }

        while (null !== $locale) {
            try {
                return EmojiTransliterator::create("emoji-$locale");
            } catch (\IntlException) {
                $locale = self::getParentLocale($locale);
            }
        }

        return null;
    }

    private static function getParentLocale(?string $locale): ?string
    {
        if (!$locale) {
            return null;
        }
        if (false === $str = strrchr($locale, '_')) {
            // no parent locale
            return null;
        }

        return substr($locale, 0, -\strlen($str));
    }
}
