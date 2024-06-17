<?php

declare(strict_types=1);

namespace Faker\Core;

<<<<<<< HEAD
<<<<<<< HEAD
use Faker\Extension;
use Faker\Provider\DateTime;

/**
 * @experimental This class is experimental and does not fall under our BC promise
 */
final class Version implements Extension\VersionExtension
{
    private Extension\NumberExtension $numberExtension;
    /**
     * @var string[]
     */
    private array $semverCommonPreReleaseIdentifiers = ['alpha', 'beta', 'rc'];

    public function __construct(Extension\NumberExtension $numberExtension = null)
    {

        $this->numberExtension = $numberExtension ?: new  Number();
    }
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use Faker\Extension\Helper;
use Faker\Extension\VersionExtension;
use Faker\Provider\DateTime;

final class Version implements VersionExtension
{
    /**
     * @var string[]
     */
    private $semverCommonPreReleaseIdentifiers = ['alpha', 'beta', 'rc'];
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Represents v2.0.0 of the semantic versioning: https://semver.org/spec/v2.0.0.html
     */
    public function semver(bool $preRelease = false, bool $build = false): string
    {
        return sprintf(
            '%d.%d.%d%s%s',
<<<<<<< HEAD
<<<<<<< HEAD
            $this->numberExtension->numberBetween(0, 9),
            $this->numberExtension->numberBetween(0, 99),
            $this->numberExtension->numberBetween(0, 99),
            $preRelease && $this->numberExtension->numberBetween(0, 1) === 1 ? '-' . $this->semverPreReleaseIdentifier() : '',
            $build && $this->numberExtension->numberBetween(0, 1) === 1 ? '+' . $this->semverBuildIdentifier() : '',
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            mt_rand(0, 9),
            mt_rand(0, 99),
            mt_rand(0, 99),
            $preRelease && mt_rand(0, 1) ? '-' . $this->semverPreReleaseIdentifier() : '',
            $build && mt_rand(0, 1) ? '+' . $this->semverBuildIdentifier() : '',
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    /**
     * Common pre-release identifier
     */
    private function semverPreReleaseIdentifier(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $ident = Extension\Helper::randomElement($this->semverCommonPreReleaseIdentifiers);

        if ($this->numberExtension->numberBetween(0, 1) !== 1) {
            return $ident;
        }

        return $ident . '.' . $this->numberExtension->numberBetween(1, 99);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $ident = Helper::randomElement($this->semverCommonPreReleaseIdentifiers);

        if (!mt_rand(0, 1)) {
            return $ident;
        }

        return $ident . '.' . mt_rand(1, 99);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Common random build identifier
     */
    private function semverBuildIdentifier(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if ($this->numberExtension->numberBetween(0, 1) === 1) {
            // short git revision syntax: https://git-scm.com/book/en/v2/Git-Tools-Revision-Selection
            return substr(sha1(Extension\Helper::lexify('??????')), 0, 7);
=======
        if (mt_rand(0, 1)) {
            // short git revision syntax: https://git-scm.com/book/en/v2/Git-Tools-Revision-Selection
            return substr(sha1(Helper::lexify('??????')), 0, 7);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        if (mt_rand(0, 1)) {
            // short git revision syntax: https://git-scm.com/book/en/v2/Git-Tools-Revision-Selection
            return substr(sha1(Helper::lexify('??????')), 0, 7);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        // date syntax
        return DateTime::date('YmdHis');
    }
}
