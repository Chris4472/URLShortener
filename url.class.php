<?php
class Url {
    public string $shortUrl;
    public string $longUrl;

    function __construct($shortUrl, $longUrl) {
        $this->shortUrl = $shortUrl;
        $this->longUrl = $longUrl;
    }

    function getShortUrl(): string {
        return $this->shortUrl;
    }
    function getLongUrl(): string {
        return $this->longUrl;
    }
    function setShortUrl(string $shortUrl): void {
        $this->shortUrl = $shortUrl;
    }
    function setLongUrl(string $longUrl): void {
        $this->longUrl = $longUrl;
    }
}

?>