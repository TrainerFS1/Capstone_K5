<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation\DataCollector;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;
use Symfony\Component\HttpKernel\DataCollector\LateDataCollectorInterface;
use Symfony\Component\Translation\DataCollectorTranslator;
use Symfony\Component\VarDumper\Cloner\Data;

/**
 * @author Abdellatif Ait boudad <a.aitboudad@gmail.com>
 *
 * @final
 */
class TranslationDataCollector extends DataCollector implements LateDataCollectorInterface
{
    private DataCollectorTranslator $translator;

    public function __construct(DataCollectorTranslator $translator)
    {
        $this->translator = $translator;
    }

<<<<<<< HEAD
    public function lateCollect(): void
=======
    public function lateCollect()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $messages = $this->sanitizeCollectedMessages($this->translator->getCollectedMessages());

        $this->data += $this->computeCount($messages);
        $this->data['messages'] = $messages;

        $this->data = $this->cloneVar($this->data);
    }

<<<<<<< HEAD
    public function collect(Request $request, Response $response, ?\Throwable $exception = null): void
=======
    public function collect(Request $request, Response $response, \Throwable $exception = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->data['locale'] = $this->translator->getLocale();
        $this->data['fallback_locales'] = $this->translator->getFallbackLocales();
    }

<<<<<<< HEAD
    public function reset(): void
=======
    public function reset()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->data = [];
    }

    public function getMessages(): array|Data
    {
        return $this->data['messages'] ?? [];
    }

    public function getCountMissings(): int
    {
        return $this->data[DataCollectorTranslator::MESSAGE_MISSING] ?? 0;
    }

    public function getCountFallbacks(): int
    {
        return $this->data[DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK] ?? 0;
    }

    public function getCountDefines(): int
    {
        return $this->data[DataCollectorTranslator::MESSAGE_DEFINED] ?? 0;
    }

<<<<<<< HEAD
    public function getLocale(): ?string
=======
    public function getLocale()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return !empty($this->data['locale']) ? $this->data['locale'] : null;
    }

    /**
     * @internal
     */
<<<<<<< HEAD
    public function getFallbackLocales(): Data|array
=======
    public function getFallbackLocales()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return (isset($this->data['fallback_locales']) && \count($this->data['fallback_locales']) > 0) ? $this->data['fallback_locales'] : [];
    }

    public function getName(): string
    {
        return 'translation';
    }

<<<<<<< HEAD
    private function sanitizeCollectedMessages(array $messages): array
=======
    private function sanitizeCollectedMessages(array $messages)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $result = [];
        foreach ($messages as $key => $message) {
            $messageId = $message['locale'].$message['domain'].$message['id'];

            if (!isset($result[$messageId])) {
                $message['count'] = 1;
                $message['parameters'] = !empty($message['parameters']) ? [$message['parameters']] : [];
                $messages[$key]['translation'] = $this->sanitizeString($message['translation']);
                $result[$messageId] = $message;
            } else {
                if (!empty($message['parameters'])) {
                    $result[$messageId]['parameters'][] = $message['parameters'];
                }

                ++$result[$messageId]['count'];
            }

            unset($messages[$key]);
        }

        return $result;
    }

<<<<<<< HEAD
    private function computeCount(array $messages): array
=======
    private function computeCount(array $messages)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $count = [
            DataCollectorTranslator::MESSAGE_DEFINED => 0,
            DataCollectorTranslator::MESSAGE_MISSING => 0,
            DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK => 0,
        ];

        foreach ($messages as $message) {
            ++$count[$message['state']];
        }

        return $count;
    }

<<<<<<< HEAD
    private function sanitizeString(string $string, int $length = 80): string
=======
    private function sanitizeString(string $string, int $length = 80)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $string = trim(preg_replace('/\s+/', ' ', $string));

        if (false !== $encoding = mb_detect_encoding($string, null, true)) {
            if (mb_strlen($string, $encoding) > $length) {
                return mb_substr($string, 0, $length - 3, $encoding).'...';
            }
        } elseif (\strlen($string) > $length) {
            return substr($string, 0, $length - 3).'...';
        }

        return $string;
    }
}
