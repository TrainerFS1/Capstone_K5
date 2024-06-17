<?php

namespace Illuminate\Queue;

<<<<<<< HEAD
use Illuminate\Queue\Attributes\WithoutRelations;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use ReflectionClass;
use ReflectionProperty;

trait SerializesModels
{
    use SerializesAndRestoresModelIdentifiers;

    /**
     * Prepare the instance values for serialization.
     *
     * @return array
     */
    public function __serialize()
    {
        $values = [];

<<<<<<< HEAD
        $reflectionClass = new ReflectionClass($this);

        [$class, $properties, $classLevelWithoutRelations] = [
            get_class($this),
            $reflectionClass->getProperties(),
            ! empty($reflectionClass->getAttributes(WithoutRelations::class)),
        ];
=======
        $properties = (new ReflectionClass($this))->getProperties();

        $class = get_class($this);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        foreach ($properties as $property) {
            if ($property->isStatic()) {
                continue;
            }

<<<<<<< HEAD
=======
            $property->setAccessible(true);

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            if (! $property->isInitialized($this)) {
                continue;
            }

            $value = $this->getPropertyValue($property);

            if ($property->hasDefaultValue() && $value === $property->getDefaultValue()) {
                continue;
            }

            $name = $property->getName();

            if ($property->isPrivate()) {
                $name = "\0{$class}\0{$name}";
            } elseif ($property->isProtected()) {
                $name = "\0*\0{$name}";
            }

<<<<<<< HEAD
            $values[$name] = $this->getSerializedPropertyValue(
                $value,
                ! $classLevelWithoutRelations &&
                    empty($property->getAttributes(WithoutRelations::class))
            );
=======
            $values[$name] = $this->getSerializedPropertyValue($value);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        return $values;
    }

    /**
     * Restore the model after serialization.
     *
     * @param  array  $values
     * @return void
     */
    public function __unserialize(array $values)
    {
        $properties = (new ReflectionClass($this))->getProperties();

        $class = get_class($this);

        foreach ($properties as $property) {
            if ($property->isStatic()) {
                continue;
            }

            $name = $property->getName();

            if ($property->isPrivate()) {
                $name = "\0{$class}\0{$name}";
            } elseif ($property->isProtected()) {
                $name = "\0*\0{$name}";
            }

            if (! array_key_exists($name, $values)) {
                continue;
            }

<<<<<<< HEAD
=======
            $property->setAccessible(true);

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $property->setValue(
                $this, $this->getRestoredPropertyValue($values[$name])
            );
        }
    }

    /**
     * Get the property value for the given property.
     *
     * @param  \ReflectionProperty  $property
     * @return mixed
     */
    protected function getPropertyValue(ReflectionProperty $property)
    {
<<<<<<< HEAD
=======
        $property->setAccessible(true);

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $property->getValue($this);
    }
}
