<?php

namespace DoctrineProxies\__CG__\Concrete\Core\Entity\Express;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Entry extends \Concrete\Core\Entity\Express\Entry implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'entryFormatter', 'exEntryID', 'author', 'exEntryDisplayOrder', 'exEntryDateCreated', 'entity', 'exEntryDateModified', 'publicIdentifier', 'resultsNodeID', 'attributes', 'associations'];
        }

        return ['__isInitialized__', 'entryFormatter', 'exEntryID', 'author', 'exEntryDisplayOrder', 'exEntryDateCreated', 'entity', 'exEntryDateModified', 'publicIdentifier', 'resultsNodeID', 'attributes', 'associations'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Entry $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(?\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(?\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __call($nm, $a)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__call', [$nm, $a]);

        return parent::__call($nm, $a);
    }

    /**
     * {@inheritDoc}
     */
    public function is($entityHandle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'is', [$entityHandle]);

        return parent::is($entityHandle);
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissionObjectIdentifier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermissionObjectIdentifier', []);

        return parent::getPermissionObjectIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissionResponseClassName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermissionResponseClassName', []);

        return parent::getPermissionResponseClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissionAssignmentClassName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermissionAssignmentClassName', []);

        return parent::getPermissionAssignmentClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissionObjectKeyCategoryHandle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermissionObjectKeyCategoryHandle', []);

        return parent::getPermissionObjectKeyCategoryHandle();
    }

    /**
     * {@inheritDoc}
     */
    public function getObjectAttributeCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObjectAttributeCategory', []);

        return parent::getObjectAttributeCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeValueObject($ak, $createIfNotExists = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeValueObject', [$ak, $createIfNotExists]);

        return parent::getAttributeValueObject($ak, $createIfNotExists);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntity', []);

        return parent::getEntity();
    }

    /**
     * {@inheritDoc}
     */
    public function setEntity($entity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntity', [$entity]);

        return parent::setEntity($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function getID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getID', []);

        return parent::getID();
    }

    /**
     * {@inheritDoc}
     */
    public function setID($exEntryID)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setID', [$exEntryID]);

        return parent::setID($exEntryID);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributes', []);

        return parent::getAttributes();
    }

    /**
     * {@inheritDoc}
     */
    public function setAttributes($attributes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttributes', [$attributes]);

        return parent::setAttributes($attributes);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntryDisplayOrder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntryDisplayOrder', []);

        return parent::getEntryDisplayOrder();
    }

    /**
     * {@inheritDoc}
     */
    public function setEntryDisplayOrder($exEntryDisplayOrder)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntryDisplayOrder', [$exEntryDisplayOrder]);

        return parent::setEntryDisplayOrder($exEntryDisplayOrder);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssociations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssociations', []);

        return parent::getAssociations();
    }

    /**
     * {@inheritDoc}
     */
    public function setAssociations($associations)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAssociations', [$associations]);

        return parent::setAssociations($associations);
    }

    /**
     * {@inheritDoc}
     */
    public function getResultsNodeID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getResultsNodeID', []);

        return parent::getResultsNodeID();
    }

    /**
     * {@inheritDoc}
     */
    public function setResultsNodeID($resultsNodeID): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setResultsNodeID', [$resultsNodeID]);

        parent::setResultsNodeID($resultsNodeID);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssociation($handle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssociation', [$handle]);

        return parent::getAssociation($handle);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntryAssociation(\Concrete\Core\Entity\Express\Association $association)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntryAssociation', [$association]);

        return parent::getEntryAssociation($association);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwnedByEntry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwnedByEntry', []);

        return parent::getOwnedByEntry();
    }

    /**
     * {@inheritDoc}
     */
    public function updateDateModified()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateDateModified', []);

        return parent::updateDateModified();
    }

    /**
     * {@inheritDoc}
     */
    public function getLabel(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLabel', []);

        return parent::getLabel();
    }

    /**
     * {@inheritDoc}
     */
    public function getURL()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getURL', []);

        return parent::getURL();
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'jsonSerialize', []);

        return parent::jsonSerialize();
    }

    /**
     * {@inheritDoc}
     */
    public function getDateModified()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateModified', []);

        return parent::getDateModified();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateModified($exEntryDateModified)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateModified', [$exEntryDateModified]);

        return parent::setDateModified($exEntryDateModified);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreated', []);

        return parent::getDateCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreated($exEntryDateCreated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreated', [$exEntryDateCreated]);

        return parent::setDateCreated($exEntryDateCreated);
    }

    /**
     * {@inheritDoc}
     */
    public function associateEntries()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'associateEntries', []);

        return parent::associateEntries();
    }

    /**
     * {@inheritDoc}
     */
    public function getExporter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExporter', []);

        return parent::getExporter();
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthor', []);

        return parent::getAuthor();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthor($author)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthor', [$author]);

        return parent::setAuthor($author);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublicIdentifier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublicIdentifier', []);

        return parent::getPublicIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublicIdentifier($publicIdentifier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublicIdentifier', [$publicIdentifier]);

        return parent::setPublicIdentifier($publicIdentifier);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttribute($ak, $mode = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttribute', [$ak, $mode]);

        return parent::getAttribute($ak, $mode);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeValue($ak)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeValue', [$ak]);

        return parent::getAttributeValue($ak);
    }

    /**
     * {@inheritDoc}
     */
    public function clearAttribute($ak, bool $doReindexImmediately = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'clearAttribute', [$ak, $doReindexImmediately]);

        return parent::clearAttribute($ak, $doReindexImmediately);
    }

    /**
     * {@inheritDoc}
     */
    public function setAttribute($ak, $value, $doReindexImmediately = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttribute', [$ak, $value, $doReindexImmediately]);

        return parent::setAttribute($ak, $value, $doReindexImmediately);
    }

}
