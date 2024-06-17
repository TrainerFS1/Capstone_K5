<?php
declare(strict_types = 1);

namespace BaconQrCode;

use BaconQrCode\Common\ErrorCorrectionLevel;
use BaconQrCode\Common\Version;
use BaconQrCode\Encoder\Encoder;
use BaconQrCode\Exception\InvalidArgumentException;
use BaconQrCode\Renderer\RendererInterface;

/**
 * QR code writer.
 */
final class Writer
{
    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Creates a new writer with a specific renderer.
     */
    public function __construct(private readonly RendererInterface $renderer)
    {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * Renderer instance.
     *
     * @var RendererInterface
     */
    private $renderer;

    /**
     * Creates a new writer with a specific renderer.
     */
    public function __construct(RendererInterface $renderer)
    {
        $this->renderer = $renderer;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Writes QR code and returns it as string.
     *
     * Content is a string which *should* be encoded in UTF-8, in case there are
     * non ASCII-characters present.
     *
     * @throws InvalidArgumentException if the content is empty
     */
    public function writeString(
        string $content,
<<<<<<< HEAD
<<<<<<< HEAD
        string $encoding = Encoder::DEFAULT_BYTE_MODE_ENCODING,
=======
        string $encoding = Encoder::DEFAULT_BYTE_MODE_ECODING,
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        string $encoding = Encoder::DEFAULT_BYTE_MODE_ECODING,
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        ?ErrorCorrectionLevel $ecLevel = null,
        ?Version $forcedVersion = null
    ) : string {
        if (strlen($content) === 0) {
            throw new InvalidArgumentException('Found empty contents');
        }

        if (null === $ecLevel) {
            $ecLevel = ErrorCorrectionLevel::L();
        }

        return $this->renderer->render(Encoder::encode($content, $ecLevel, $encoding, $forcedVersion));
    }

    /**
     * Writes QR code to a file.
     *
     * @see Writer::writeString()
     */
    public function writeFile(
        string $content,
        string $filename,
<<<<<<< HEAD
<<<<<<< HEAD
        string $encoding = Encoder::DEFAULT_BYTE_MODE_ENCODING,
=======
        string $encoding = Encoder::DEFAULT_BYTE_MODE_ECODING,
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        string $encoding = Encoder::DEFAULT_BYTE_MODE_ECODING,
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        ?ErrorCorrectionLevel $ecLevel = null,
        ?Version $forcedVersion = null
    ) : void {
        file_put_contents($filename, $this->writeString($content, $encoding, $ecLevel, $forcedVersion));
    }
}
