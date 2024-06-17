<?php declare(strict_types=1);

namespace PhpParser;

<<<<<<< HEAD
<<<<<<< HEAD
class Comment implements \JsonSerializable {
    protected string $text;
    protected int $startLine;
    protected int $startFilePos;
    protected int $startTokenPos;
    protected int $endLine;
    protected int $endFilePos;
    protected int $endTokenPos;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class Comment implements \JsonSerializable
{
    protected $text;
    protected $startLine;
    protected $startFilePos;
    protected $startTokenPos;
    protected $endLine;
    protected $endFilePos;
    protected $endTokenPos;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Constructs a comment node.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string $text Comment text (including comment delimiters like /*)
     * @param int $startLine Line number the comment started on
     * @param int $startFilePos File offset the comment started on
     * @param int $startTokenPos Token offset the comment started on
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param string $text          Comment text (including comment delimiters like /*)
     * @param int    $startLine     Line number the comment started on
     * @param int    $startFilePos  File offset the comment started on
     * @param int    $startTokenPos Token offset the comment started on
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __construct(
        string $text,
        int $startLine = -1, int $startFilePos = -1, int $startTokenPos = -1,
        int $endLine = -1, int $endFilePos = -1, int $endTokenPos = -1
    ) {
        $this->text = $text;
        $this->startLine = $startLine;
        $this->startFilePos = $startFilePos;
        $this->startTokenPos = $startTokenPos;
        $this->endLine = $endLine;
        $this->endFilePos = $endFilePos;
        $this->endTokenPos = $endTokenPos;
    }

    /**
     * Gets the comment text.
     *
     * @return string The comment text (including comment delimiters like /*)
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getText(): string {
=======
    public function getText() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getText() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this->text;
    }

    /**
     * Gets the line number the comment started on.
     *
     * @return int Line number (or -1 if not available)
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getStartLine(): int {
=======
    public function getStartLine() : int {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getStartLine() : int {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this->startLine;
    }

    /**
     * Gets the file offset the comment started on.
     *
     * @return int File offset (or -1 if not available)
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getStartFilePos(): int {
=======
    public function getStartFilePos() : int {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getStartFilePos() : int {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this->startFilePos;
    }

    /**
     * Gets the token offset the comment started on.
     *
     * @return int Token offset (or -1 if not available)
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getStartTokenPos(): int {
=======
    public function getStartTokenPos() : int {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getStartTokenPos() : int {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this->startTokenPos;
    }

    /**
     * Gets the line number the comment ends on.
     *
     * @return int Line number (or -1 if not available)
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getEndLine(): int {
=======
    public function getEndLine() : int {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getEndLine() : int {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this->endLine;
    }

    /**
     * Gets the file offset the comment ends on.
     *
     * @return int File offset (or -1 if not available)
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getEndFilePos(): int {
=======
    public function getEndFilePos() : int {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getEndFilePos() : int {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this->endFilePos;
    }

    /**
     * Gets the token offset the comment ends on.
     *
     * @return int Token offset (or -1 if not available)
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getEndTokenPos(): int {
=======
    public function getEndTokenPos() : int {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getEndTokenPos() : int {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this->endTokenPos;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * Gets the line number the comment started on.
     *
     * @deprecated Use getStartLine() instead
     *
     * @return int Line number
     */
    public function getLine() : int {
        return $this->startLine;
    }

    /**
     * Gets the file offset the comment started on.
     *
     * @deprecated Use getStartFilePos() instead
     *
     * @return int File offset
     */
    public function getFilePos() : int {
        return $this->startFilePos;
    }

    /**
     * Gets the token offset the comment started on.
     *
     * @deprecated Use getStartTokenPos() instead
     *
     * @return int Token offset
     */
    public function getTokenPos() : int {
        return $this->startTokenPos;
    }

    /**
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * Gets the comment text.
     *
     * @return string The comment text (including comment delimiters like /*)
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function __toString(): string {
=======
    public function __toString() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function __toString() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this->text;
    }

    /**
     * Gets the reformatted comment text.
     *
     * "Reformatted" here means that we try to clean up the whitespace at the
     * starts of the lines. This is necessary because we receive the comments
<<<<<<< HEAD
<<<<<<< HEAD
     * without leading whitespace on the first line, but with leading whitespace
     * on all subsequent lines.
     *
     * Additionally, this normalizes CRLF newlines to LF newlines.
     */
    public function getReformattedText(): string {
        $text = str_replace("\r\n", "\n", $this->text);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * without trailing whitespace on the first line, but with trailing whitespace
     * on all subsequent lines.
     *
     * @return mixed|string
     */
    public function getReformattedText() {
        $text = trim($this->text);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $newlinePos = strpos($text, "\n");
        if (false === $newlinePos) {
            // Single line comments don't need further processing
            return $text;
<<<<<<< HEAD
<<<<<<< HEAD
        }
        if (preg_match('(^.*(?:\n\s+\*.*)+$)', $text)) {
=======
        } elseif (preg_match('((*BSR_ANYCRLF)(*ANYCRLF)^.*(?:\R\s+\*.*)+$)', $text)) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        } elseif (preg_match('((*BSR_ANYCRLF)(*ANYCRLF)^.*(?:\R\s+\*.*)+$)', $text)) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            // Multi line comment of the type
            //
            //     /*
            //      * Some text.
            //      * Some more text.
            //      */
            //
            // is handled by replacing the whitespace sequences before the * by a single space
<<<<<<< HEAD
<<<<<<< HEAD
            return preg_replace('(^\s+\*)m', ' *', $text);
        }
        if (preg_match('(^/\*\*?\s*\n)', $text) && preg_match('(\n(\s*)\*/$)', $text, $matches)) {
=======
            return preg_replace('(^\s+\*)m', ' *', $this->text);
        } elseif (preg_match('(^/\*\*?\s*[\r\n])', $text) && preg_match('(\n(\s*)\*/$)', $text, $matches)) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            return preg_replace('(^\s+\*)m', ' *', $this->text);
        } elseif (preg_match('(^/\*\*?\s*[\r\n])', $text) && preg_match('(\n(\s*)\*/$)', $text, $matches)) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            // Multi line comment of the type
            //
            //    /*
            //        Some text.
            //        Some more text.
            //    */
            //
            // is handled by removing the whitespace sequence on the line before the closing
            // */ on all lines. So if the last line is "    */", then "    " is removed at the
            // start of all lines.
            return preg_replace('(^' . preg_quote($matches[1]) . ')m', '', $text);
<<<<<<< HEAD
<<<<<<< HEAD
        }
        if (preg_match('(^/\*\*?\s*(?!\s))', $text, $matches)) {
=======
        } elseif (preg_match('(^/\*\*?\s*(?!\s))', $text, $matches)) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        } elseif (preg_match('(^/\*\*?\s*(?!\s))', $text, $matches)) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            // Multi line comment of the type
            //
            //     /* Some text.
            //        Some more text.
            //          Indented text.
            //        Even more text. */
            //
            // is handled by removing the difference between the shortest whitespace prefix on all
            // lines and the length of the "/* " opening sequence.
            $prefixLen = $this->getShortestWhitespacePrefixLen(substr($text, $newlinePos + 1));
            $removeLen = $prefixLen - strlen($matches[0]);
            return preg_replace('(^\s{' . $removeLen . '})m', '', $text);
        }

        // No idea how to format this comment, so simply return as is
        return $text;
    }

    /**
     * Get length of shortest whitespace prefix (at the start of a line).
     *
     * If there is a line with no prefix whitespace, 0 is a valid return value.
     *
     * @param string $str String to check
     * @return int Length in characters. Tabs count as single characters.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    private function getShortestWhitespacePrefixLen(string $str): int {
        $lines = explode("\n", $str);
        $shortestPrefixLen = \PHP_INT_MAX;
=======
    private function getShortestWhitespacePrefixLen(string $str) : int {
        $lines = explode("\n", $str);
        $shortestPrefixLen = \INF;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    private function getShortestWhitespacePrefixLen(string $str) : int {
        $lines = explode("\n", $str);
        $shortestPrefixLen = \INF;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        foreach ($lines as $line) {
            preg_match('(^\s*)', $line, $matches);
            $prefixLen = strlen($matches[0]);
            if ($prefixLen < $shortestPrefixLen) {
                $shortestPrefixLen = $prefixLen;
            }
        }
        return $shortestPrefixLen;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array{nodeType:string, text:mixed, line:mixed, filePos:mixed}
     */
    public function jsonSerialize(): array {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @return       array
     * @psalm-return array{nodeType:string, text:mixed, line:mixed, filePos:mixed}
     */
    public function jsonSerialize() : array {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        // Technically not a node, but we make it look like one anyway
        $type = $this instanceof Comment\Doc ? 'Comment_Doc' : 'Comment';
        return [
            'nodeType' => $type,
            'text' => $this->text,
            // TODO: Rename these to include "start".
            'line' => $this->startLine,
            'filePos' => $this->startFilePos,
            'tokenPos' => $this->startTokenPos,
            'endLine' => $this->endLine,
            'endFilePos' => $this->endFilePos,
            'endTokenPos' => $this->endTokenPos,
        ];
    }
}
