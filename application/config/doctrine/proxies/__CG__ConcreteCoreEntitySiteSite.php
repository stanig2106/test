<?php

namespace DoctrineProxies\__CG__\Concrete\Core\Entity\Site;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Site extends \Concrete\Core\Entity\Site\Site implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'siteConfig', 'siteID', 'pThemeID', 'pThemeSkinIdentifier', 'siteIsDefault', 'siteHandle', 'locales', 'type'];
        }

        return ['__isInitialized__', 'siteConfig', 'siteID', 'pThemeID', 'pThemeSkinIdentifier', 'siteIsDefault', 'siteHandle', 'locales', 'type'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Site $proxy) {
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
    public function updateSiteConfigRepository($appConfigRepository)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateSiteConfigRepository', [$appConfigRepository]);

        return parent::updateSiteConfigRepository($appConfigRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function getConfigRepository()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfigRepository', []);

        return parent::getConfigRepository();
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocales()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocales', []);

        return parent::getLocales();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocales($locales)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocales', [$locales]);

        return parent::setLocales($locales);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteHomePageID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteHomePageID', []);

        return parent::getSiteHomePageID();
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteTreeID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteTreeID', []);

        return parent::getSiteTreeID();
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultLocale()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultLocale', []);

        return parent::getDefaultLocale();
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteTreeObject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteTreeObject', []);

        return parent::getSiteTreeObject();
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteHomePageObject($version = 'RECENT')
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteHomePageObject', [$version]);

        return parent::getSiteHomePageObject($version);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteID()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getSiteID();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteID', []);

        return parent::getSiteID();
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteHandle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteHandle', []);

        return parent::getSiteHandle();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiteHandle($siteHandle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiteHandle', [$siteHandle]);

        return parent::setSiteHandle($siteHandle);
    }

    /**
     * {@inheritDoc}
     */
    public function isDefault()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDefault', []);

        return parent::isDefault();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsDefault($siteIsDefault)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsDefault', [$siteIsDefault]);

        return parent::setIsDefault($siteIsDefault);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteName', []);

        return parent::getSiteName();
    }

    /**
     * {@inheritDoc}
     */
    public function setSiteName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSiteName', [$name]);

        return parent::setSiteName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteCanonicalURL()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteCanonicalURL', []);

        return parent::getSiteCanonicalURL();
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteAlternativeCanonicalURL()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteAlternativeCanonicalURL', []);

        return parent::getSiteAlternativeCanonicalURL();
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteSSLCanonicalURL()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSiteSSLCanonicalURL', []);

        return parent::getSiteSSLCanonicalURL();
    }

    /**
     * {@inheritDoc}
     */
    public function getTimezone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimezone', []);

        return parent::getTimezone();
    }

    /**
     * {@inheritDoc}
     */
    public function getThemeID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getThemeID', []);

        return parent::getThemeID();
    }

    /**
     * {@inheritDoc}
     */
    public function setThemeID($pThemeID)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setThemeID', [$pThemeID]);

        return parent::setThemeID($pThemeID);
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
    public function getThemeSkinIdentifier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getThemeSkinIdentifier', []);

        return parent::getThemeSkinIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function setThemeSkinIdentifier($pThemeSkinIdentifier): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setThemeSkinIdentifier', [$pThemeSkinIdentifier]);

        parent::setThemeSkinIdentifier($pThemeSkinIdentifier);
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
