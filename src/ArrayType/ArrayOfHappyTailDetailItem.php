<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfHappyTailDetailItem ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfHappyTailDetailItem
 * @subpackage Arrays
 */
class ArrayOfHappyTailDetailItem extends AbstractStructArrayBase
{
    /**
     * The HappyTailDetailItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\HappyTailDetailItem[]
     */
    public $HappyTailDetailItem;
    /**
     * Constructor method for ArrayOfHappyTailDetailItem
     * @uses ArrayOfHappyTailDetailItem::setHappyTailDetailItem()
     * @param \StructType\HappyTailDetailItem[] $happyTailDetailItem
     */
    public function __construct(array $happyTailDetailItem = array())
    {
        $this
            ->setHappyTailDetailItem($happyTailDetailItem);
    }
    /**
     * Get HappyTailDetailItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\HappyTailDetailItem[]|null
     */
    public function getHappyTailDetailItem()
    {
        return isset($this->HappyTailDetailItem) ? $this->HappyTailDetailItem : null;
    }
    /**
     * Set HappyTailDetailItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\HappyTailDetailItem[] $happyTailDetailItem
     * @return \ArrayType\ArrayOfHappyTailDetailItem
     */
    public function setHappyTailDetailItem(array $happyTailDetailItem = array())
    {
        foreach ($happyTailDetailItem as $arrayOfHappyTailDetailItemHappyTailDetailItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfHappyTailDetailItemHappyTailDetailItemItem instanceof \StructType\HappyTailDetailItem) {
                throw new \InvalidArgumentException(sprintf('The HappyTailDetailItem property can only contain items of \StructType\HappyTailDetailItem, "%s" given', is_object($arrayOfHappyTailDetailItemHappyTailDetailItemItem) ? get_class($arrayOfHappyTailDetailItemHappyTailDetailItemItem) : gettype($arrayOfHappyTailDetailItemHappyTailDetailItemItem)), __LINE__);
            }
        }
        if (is_null($happyTailDetailItem) || (is_array($happyTailDetailItem) && empty($happyTailDetailItem))) {
            unset($this->HappyTailDetailItem);
        } else {
            $this->HappyTailDetailItem = $happyTailDetailItem;
        }
        return $this;
    }
    /**
     * Add item to HappyTailDetailItem value
     * @throws \InvalidArgumentException
     * @param \StructType\HappyTailDetailItem $item
     * @return \ArrayType\ArrayOfHappyTailDetailItem
     */
    public function addToHappyTailDetailItem(\StructType\HappyTailDetailItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\HappyTailDetailItem) {
            throw new \InvalidArgumentException(sprintf('The HappyTailDetailItem property can only contain items of \StructType\HappyTailDetailItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HappyTailDetailItem[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\HappyTailDetailItem|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\HappyTailDetailItem|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\HappyTailDetailItem|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\HappyTailDetailItem|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\HappyTailDetailItem|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string HappyTailDetailItem
     */
    public function getAttributeName()
    {
        return 'HappyTailDetailItem';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfHappyTailDetailItem
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
