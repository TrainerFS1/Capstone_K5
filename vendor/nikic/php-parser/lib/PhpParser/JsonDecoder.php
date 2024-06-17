<?php declare(strict_types=1);

namespace PhpParser;

<<<<<<< HEAD
<<<<<<< HEAD
class JsonDecoder {
    /** @var \ReflectionClass<Node>[] Node type to reflection class map */
    private array $reflectionClassCache;

    /** @return mixed */
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class JsonDecoder
{
    /** @var \ReflectionClass[] Node type to reflection class map */
    private $reflectionClassCache;

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function decode(string $json) {
        $value = json_decode($json, true);
        if (json_last_error()) {
            throw new \RuntimeException('JSON decoding error: ' . json_last_error_msg());
        }

        return $this->decodeRecursive($value);
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @param mixed $value
     * @return mixed
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private function decodeRecursive($value) {
        if (\is_array($value)) {
            if (isset($value['nodeType'])) {
                if ($value['nodeType'] === 'Comment' || $value['nodeType'] === 'Comment_Doc') {
                    return $this->decodeComment($value);
                }
                return $this->decodeNode($value);
            }
            return $this->decodeArray($value);
        }
        return $value;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    private function decodeArray(array $array): array {
=======
    private function decodeArray(array $array) : array {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    private function decodeArray(array $array) : array {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $decodedArray = [];
        foreach ($array as $key => $value) {
            $decodedArray[$key] = $this->decodeRecursive($value);
        }
        return $decodedArray;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    private function decodeNode(array $value): Node {
=======
    private function decodeNode(array $value) : Node {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    private function decodeNode(array $value) : Node {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $nodeType = $value['nodeType'];
        if (!\is_string($nodeType)) {
            throw new \RuntimeException('Node type must be a string');
        }

        $reflectionClass = $this->reflectionClassFromNodeType($nodeType);
<<<<<<< HEAD
<<<<<<< HEAD
=======
        /** @var Node $node */
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        /** @var Node $node */
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $node = $reflectionClass->newInstanceWithoutConstructor();

        if (isset($value['attributes'])) {
            if (!\is_array($value['attributes'])) {
                throw new \RuntimeException('Attributes must be an array');
            }

            $node->setAttributes($this->decodeArray($value['attributes']));
        }

        foreach ($value as $name => $subNode) {
            if ($name === 'nodeType' || $name === 'attributes') {
                continue;
            }

            $node->$name = $this->decodeRecursive($subNode);
        }

        return $node;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    private function decodeComment(array $value): Comment {
=======
    private function decodeComment(array $value) : Comment {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    private function decodeComment(array $value) : Comment {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $className = $value['nodeType'] === 'Comment' ? Comment::class : Comment\Doc::class;
        if (!isset($value['text'])) {
            throw new \RuntimeException('Comment must have text');
        }

        return new $className(
            $value['text'],
            $value['line'] ?? -1, $value['filePos'] ?? -1, $value['tokenPos'] ?? -1,
            $value['endLine'] ?? -1, $value['endFilePos'] ?? -1, $value['endTokenPos'] ?? -1
        );
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /** @return \ReflectionClass<Node> */
    private function reflectionClassFromNodeType(string $nodeType): \ReflectionClass {
=======
    private function reflectionClassFromNodeType(string $nodeType) : \ReflectionClass {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    private function reflectionClassFromNodeType(string $nodeType) : \ReflectionClass {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (!isset($this->reflectionClassCache[$nodeType])) {
            $className = $this->classNameFromNodeType($nodeType);
            $this->reflectionClassCache[$nodeType] = new \ReflectionClass($className);
        }
        return $this->reflectionClassCache[$nodeType];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /** @return class-string<Node> */
    private function classNameFromNodeType(string $nodeType): string {
=======
    private function classNameFromNodeType(string $nodeType) : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    private function classNameFromNodeType(string $nodeType) : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $className = 'PhpParser\\Node\\' . strtr($nodeType, '_', '\\');
        if (class_exists($className)) {
            return $className;
        }

        $className .= '_';
        if (class_exists($className)) {
            return $className;
        }

        throw new \RuntimeException("Unknown node type \"$nodeType\"");
    }
}
