<?php

class OC_Theme {
    public function getBaseUrl() {
        return 'https://' . $_SERVER['HTTP_X_FORWARDED_HOST'];
    }

    public function getTitle() {
        return 'Lights and Pause';
    }

    public function getName() {
        return $this->getTitle();
    }

    public function getHTMLName() {
        return $this->getName();
    }

    public function getEntity() {
        return 'Stefanie Blümer';
    }

    public function getSlogan() {
        return '';
    }

    public function getColorPrimary() {
        return ($this->getScssVariables())['color-primary'];
    }

    public function getScssVariables() {
        return [
            'color-primary' => '#745bca'
        ];
    }

    public function getShortFooter() {
        return '© ' . date('Y') . ' <a href="' . $this->getBaseUrl() . '" target="_blank">' . $this->getEntity() . '</a>' . '<br/>' . $this->getSlogan();
    }

    public function getLongFooter() {
        return '© ' . date('Y') . ' <a href="' . $this->getBaseUrl() . '" target="_blank">' . $this->getEntity() . '</a>' . '<br/>' . $this->getSlogan();
    }

    public function getDocBaseUrl() {
        return 'https://docs.nextcloud.com';
    }

    public function buildDocLinkToKey($key) {
        return $this->getDocBaseUrl() . '/server/15/go.php?to=' . $key;
    }
}

?>
