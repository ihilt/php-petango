<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfXmlNode ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfXmlNode
 * @subpackage Arrays
 */
class ArrayOfXmlNode extends AbstractStructArrayBase
{
    /**
     * The XmlNode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\XmlNode[]
     */
    public $XmlNode;
    /**
     * Constructor method for ArrayOfXmlNode
     * @uses ArrayOfXmlNode::setXmlNode()
     * @param \StructType\XmlNode[] $xmlNode
     */
    public function __construct(array $xmlNode = array())
    {
        $this
            ->setXmlNode($xmlNode);
    }
    /**
     * Get XmlNode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\XmlNode[]|null
     */
    public function getXmlNode()
    {
        return isset($this->XmlNode) ? $this->XmlNode : null;
    }
    /**
     * Set XmlNode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\XmlNode[] $xmlNode
     * @return \ArrayType\ArrayOfXmlNode
     */
    public function setXmlNode(array $xmlNode = array())
    {
        foreach ($xmlNode as $arrayOfXmlNodeXmlNodeItem) {
            // validation for constraint: itemType
            if (!$arrayOfXmlNodeXmlNodeItem instanceof \StructType\XmlNode) {
                throw new \InvalidArgumentException(sprintf('The XmlNode property can only contain items of \StructType\XmlNode, "%s" given', is_object($arrayOfXmlNodeXmlNodeItem) ? get_class($arrayOfXmlNodeXmlNodeItem) : gettype($arrayOfXmlNodeXmlNodeItem)), __LINE__);
            }
        }
        if (is_null($xmlNode) || (is_array($xmlNode) && empty($xmlNode))) {
            unset($this->XmlNode);
        } else {
            $this->XmlNode = $xmlNode;
        }
        return $this;
    }
    /**
     * Add item to XmlNode value
     * @throws \InvalidArgumentException
     * @param \StructType\XmlNode $item
     * @return \ArrayType\ArrayOfXmlNode
     */
    public function addToXmlNode(\StructType\XmlNode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\XmlNode) {
            throw new \InvalidArgumentException(sprintf('The XmlNode property can only contain items of \StructType\XmlNode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->XmlNode[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\XmlNode|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\XmlNode|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\XmlNode|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\XmlNode|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\XmlNode|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string XmlNode
     */
    public function getAttributeName()
    {
        return 'XmlNode';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfXmlNode
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
