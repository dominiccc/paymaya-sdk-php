<?php

namespace CoreProc\PayMaya\Models;

use JsonSerializable;

class Customization implements JsonSerializable
{
    /**
     * @var string
     */
    protected $logoUrl;

    /**
     * @var string
     */
    protected $iconUrl;

    /**
     * @var string
     */
    protected $appleTouchIconUrl;

    /**
     * @var string
     */
    protected $customTitle;

    /**
     * @var string
     */
    protected $colorScheme;

    /**
     * @return string
     */
    public function getLogoUrl(): string
    {
        return $this->logoUrl;
    }

    /**
     * @param string $logoUrl
     * @return Customization
     */
    public function setLogoUrl(string $logoUrl): Customization
    {
        $this->logoUrl = $logoUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getIconUrl(): ?string
    {
        return $this->iconUrl;
    }

    /**
     * @param string $iconUrl
     * @return Customization
     */
    public function setIconUrl(string $iconUrl): Customization
    {
        $this->iconUrl = $iconUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getAppleTouchIconUrl(): ?string
    {
        return $this->appleTouchIconUrl;
    }

    /**
     * @param string $appleTouchIconUrl
     * @return Customization
     */
    public function setAppleTouchIconUrl(string $appleTouchIconUrl): Customization
    {
        $this->appleTouchIconUrl = $appleTouchIconUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomTitle(): ?string
    {
        return $this->customTitle;
    }

    /**
     * @param string $customTitle
     * @return Customization
     */
    public function setCustomTitle(string $customTitle): Customization
    {
        $this->customTitle = $customTitle;

        return $this;
    }

    /**
     * @return string
     */
    public function getColorScheme(): ?string
    {
        return $this->colorScheme;
    }

    /**
     * @param string $colorScheme
     * @return Customization
     */
    public function setColorScheme(string $colorScheme): Customization
    {
        $this->colorScheme = $colorScheme;

        return $this;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return [
            'logoUrl' => $this->getLogoUrl(),
            'iconUrl' => $this->getIconUrl(),
            'appleTouchIconUrl' => $this->getAppleTouchIconUrl(),
            'customTitle' => $this->getCustomTitle(),
            'colorScheme' => $this->getColorScheme(),
        ];
    }
}
