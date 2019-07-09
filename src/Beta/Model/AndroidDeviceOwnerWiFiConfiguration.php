<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerWiFiConfiguration File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* AndroidDeviceOwnerWiFiConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AndroidDeviceOwnerWiFiConfiguration extends DeviceConfiguration
{
    /**
    * Gets the networkName
    * Network Name
    *
    * @return string The networkName
    */
    public function getNetworkName()
    {
        if (array_key_exists("networkName", $this->_propDict)) {
            return $this->_propDict["networkName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the networkName
    * Network Name
    *
    * @param string $val The networkName
    *
    * @return AndroidDeviceOwnerWiFiConfiguration
    */
    public function setNetworkName($val)
    {
        $this->_propDict["networkName"] = $val;
        return $this;
    }
    
    /**
    * Gets the ssid
    * This is the name of the Wi-Fi network that is broadcast to all devices.
    *
    * @return string The ssid
    */
    public function getSsid()
    {
        if (array_key_exists("ssid", $this->_propDict)) {
            return $this->_propDict["ssid"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ssid
    * This is the name of the Wi-Fi network that is broadcast to all devices.
    *
    * @param string $val The ssid
    *
    * @return AndroidDeviceOwnerWiFiConfiguration
    */
    public function setSsid($val)
    {
        $this->_propDict["ssid"] = $val;
        return $this;
    }
    
    /**
    * Gets the connectAutomatically
    * Connect automatically when this network is in range. Setting this to true will skip the user prompt and automatically connect the device to Wi-Fi network.
    *
    * @return bool The connectAutomatically
    */
    public function getConnectAutomatically()
    {
        if (array_key_exists("connectAutomatically", $this->_propDict)) {
            return $this->_propDict["connectAutomatically"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the connectAutomatically
    * Connect automatically when this network is in range. Setting this to true will skip the user prompt and automatically connect the device to Wi-Fi network.
    *
    * @param bool $val The connectAutomatically
    *
    * @return AndroidDeviceOwnerWiFiConfiguration
    */
    public function setConnectAutomatically($val)
    {
        $this->_propDict["connectAutomatically"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the connectWhenNetworkNameIsHidden
    * When set to true, this profile forces the device to connect to a network that doesn't broadcast its SSID to all devices.
    *
    * @return bool The connectWhenNetworkNameIsHidden
    */
    public function getConnectWhenNetworkNameIsHidden()
    {
        if (array_key_exists("connectWhenNetworkNameIsHidden", $this->_propDict)) {
            return $this->_propDict["connectWhenNetworkNameIsHidden"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the connectWhenNetworkNameIsHidden
    * When set to true, this profile forces the device to connect to a network that doesn't broadcast its SSID to all devices.
    *
    * @param bool $val The connectWhenNetworkNameIsHidden
    *
    * @return AndroidDeviceOwnerWiFiConfiguration
    */
    public function setConnectWhenNetworkNameIsHidden($val)
    {
        $this->_propDict["connectWhenNetworkNameIsHidden"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the wiFiSecurityType
    * Indicates whether Wi-Fi endpoint uses an EAP based security type.
    *
    * @return AndroidDeviceOwnerWiFiSecurityType The wiFiSecurityType
    */
    public function getWiFiSecurityType()
    {
        if (array_key_exists("wiFiSecurityType", $this->_propDict)) {
            if (is_a($this->_propDict["wiFiSecurityType"], "Microsoft\Graph\Beta\Model\AndroidDeviceOwnerWiFiSecurityType")) {
                return $this->_propDict["wiFiSecurityType"];
            } else {
                $this->_propDict["wiFiSecurityType"] = new AndroidDeviceOwnerWiFiSecurityType($this->_propDict["wiFiSecurityType"]);
                return $this->_propDict["wiFiSecurityType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the wiFiSecurityType
    * Indicates whether Wi-Fi endpoint uses an EAP based security type.
    *
    * @param AndroidDeviceOwnerWiFiSecurityType $val The wiFiSecurityType
    *
    * @return AndroidDeviceOwnerWiFiConfiguration
    */
    public function setWiFiSecurityType($val)
    {
        $this->_propDict["wiFiSecurityType"] = $val;
        return $this;
    }
    
    /**
    * Gets the preSharedKey
    * This is the pre-shared key for WPA Personal Wi-Fi network.
    *
    * @return string The preSharedKey
    */
    public function getPreSharedKey()
    {
        if (array_key_exists("preSharedKey", $this->_propDict)) {
            return $this->_propDict["preSharedKey"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the preSharedKey
    * This is the pre-shared key for WPA Personal Wi-Fi network.
    *
    * @param string $val The preSharedKey
    *
    * @return AndroidDeviceOwnerWiFiConfiguration
    */
    public function setPreSharedKey($val)
    {
        $this->_propDict["preSharedKey"] = $val;
        return $this;
    }
    
    /**
    * Gets the preSharedKeyIsSet
    * This is the pre-shared key for WPA Personal Wi-Fi network.
    *
    * @return bool The preSharedKeyIsSet
    */
    public function getPreSharedKeyIsSet()
    {
        if (array_key_exists("preSharedKeyIsSet", $this->_propDict)) {
            return $this->_propDict["preSharedKeyIsSet"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the preSharedKeyIsSet
    * This is the pre-shared key for WPA Personal Wi-Fi network.
    *
    * @param bool $val The preSharedKeyIsSet
    *
    * @return AndroidDeviceOwnerWiFiConfiguration
    */
    public function setPreSharedKeyIsSet($val)
    {
        $this->_propDict["preSharedKeyIsSet"] = boolval($val);
        return $this;
    }
    
}