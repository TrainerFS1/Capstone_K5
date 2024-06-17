<?php declare(strict_types=1);

namespace PhpParser;

<<<<<<< HEAD
<<<<<<< HEAD
abstract class NodeAbstract implements Node, \JsonSerializable {
    /** @var array<string, mixed> Attributes */
    protected array $attributes;
=======
abstract class NodeAbstract implements Node, \JsonSerializable
{
    protected $attributes;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
abstract class NodeAbstract implements Node, \JsonSerializable
{
    protected $attributes;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Creates a Node.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<string, mixed> $attributes Array of attributes
=======
     * @param array $attributes Array of attributes
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param array $attributes Array of attributes
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __construct(array $attributes = []) {
        $this->attributes = $attributes;
    }

    /**
     * Gets line the node started in (alias of getStartLine).
     *
     * @return int Start line (or -1 if not available)
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getLine(): int {
=======
    public function getLine() : int {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getLine() : int {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this->attributes['startLine'] ?? -1;
    }

    /**
     * Gets line the node started in.
     *
     * Requires the 'startLine' attribute to be enabled in the lexer (enabled by default).
     *
     * @return int Start line (or -1 if not available)
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
        return $this->attributes['startLine'] ?? -1;
    }

    /**
     * Gets the line the node ended in.
     *
     * Requires the 'endLine' attribute to be enabled in the lexer (enabled by default).
     *
     * @return int End line (or -1 if not available)
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
        return $this->attributes['endLine'] ?? -1;
    }

    /**
     * Gets the token offset of the first token that is part of this node.
     *
     * The offset is an index into the array returned by Lexer::getTokens().
     *
     * Requires the 'startTokenPos' attribute to be enabled in the lexer (DISABLED by default).
     *
     * @return int Token start position (or -1 if not available)
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
        return $this->attributes['startTokenPos'] ?? -1;
    }

    /**
     * Gets the token offset of the last token that is part of this node.
     *
     * The offset is an index into the array returned by Lexer::getTokens().
     *
     * Requires the 'endTokenPos' attribute to be enabled in the lexer (DISABLED by default).
     *
     * @return int Token end position (or -1 if not available)
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
        return $this->attributes['endTokenPos'] ?? -1;
    }

    /**
     * Gets the file offset of the first character that is part of this node.
     *
     * Requires the 'startFilePos' attribute to be enabled in the lexer (DISABLED by default).
     *
     * @return int File start position (or -1 if not available)
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
        return $this->attributes['startFilePos'] ?? -1;
    }

    /**
     * Gets the file offset of the last character that is part of this node.
     *
     * Requires the 'endFilePos' attribute to be enabled in the lexer (DISABLED by default).
     *
     * @return int File end position (or -1 if not available)
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
        return $this->attributes['endFilePos'] ?? -1;
    }

    /**
     * Gets all comments directly preceding this node.
     *
     * The comments are also available through the "comments" attribute.
     *
     * @return Comment[]
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getComments(): array {
=======
    public function getComments() : array {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getComments() : array {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this->attributes['comments'] ?? [];
    }

    /**
     * Gets the doc comment of the node.
     *
     * @return null|Comment\Doc Doc comment object or null
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getDocComment(): ?Comment\Doc {
=======
    public function getDocComment() {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getDocComment() {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $comments = $this->getComments();
        for ($i = count($comments) - 1; $i >= 0; $i--) {
            $comment = $comments[$i];
            if ($comment instanceof Comment\Doc) {
                return $comment;
            }
        }

        return null;
    }

    /**
     * Sets the doc comment of the node.
     *
     * This will either replace an existing doc comment or add it to the comments array.
     *
     * @param Comment\Doc $docComment Doc comment to set
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function setDocComment(Comment\Doc $docComment): void {
=======
    public function setDocComment(Comment\Doc $docComment) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function setDocComment(Comment\Doc $docComment) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $comments = $this->getComments();
        for ($i = count($comments) - 1; $i >= 0; $i--) {
            if ($comments[$i] instanceof Comment\Doc) {
                // Replace existing doc comment.
                $comments[$i] = $docComment;
                $this->setAttribute('comments', $comments);
                return;
            }
        }

        // Append new doc comment.
        $comments[] = $docComment;
        $this->setAttribute('comments', $comments);
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function setAttribute(string $key, $value): void {
        $this->attributes[$key] = $value;
    }

    public function hasAttribute(string $key): bool {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function setAttribute(string $key, $value) {
        $this->attributes[$key] = $value;
    }

    public function hasAttribute(string $key) : bool {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return array_key_exists($key, $this->attributes);
    }

    public function getAttribute(string $key, $default = null) {
        if (array_key_exists($key, $this->attributes)) {
            return $this->attributes[$key];
        }

        return $default;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getAttributes(): array {
        return $this->attributes;
    }

    public function setAttributes(array $attributes): void {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getAttributes() : array {
        return $this->attributes;
    }

    public function setAttributes(array $attributes) {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->attributes = $attributes;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @return array<string, mixed>
     */
    public function jsonSerialize(): array {
=======
     * @return array
     */
    public function jsonSerialize() : array {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @return array
     */
    public function jsonSerialize() : array {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return ['nodeType' => $this->getType()] + get_object_vars($this);
    }
}
