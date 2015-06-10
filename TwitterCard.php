<?php

namespace Wicochandra;

class TwitterCard
{

    CONST TYPE_SUMMARY = 'summary';
    const TYPE_SUMMARY_LARGE = 'summary_large_image';
    const TYPE_PHOTO = 'photo';
    const TYPE_GALLERY = 'gallery';
    const TYPE_PRODUCT = 'product';
    const TYPE_APP = 'app';
    const TYPE_PLAYER = 'player';

    const CARD = 'twitter:card';
    const SITE = 'twitter:site';
    const SITE_ID = 'twitter:site:id';
    const CREATOR = 'twitter:creator';
    const CREATOR_ID = 'twitter:creator:id';
    const URL = 'twitter:url';

    const DESCRIPTION = 'twitter:description';
    const TITLE = 'twitter:title';
    const IMAGE = 'twitter:image';
    const IMAGE_WIDTH = 'twitter:image:width';
    const IMAGE_HEIGHT = 'twitter:image:height';

    const IMAGE_0 = 'twitter:image0';
    const IMAGE_1 = 'twitter:image1';
    const IMAGE_2 = 'twitter:image2';
    const IMAGE_3 = 'twitter:image3';

    const PLAYER = 'twitter:player';
    const PLAYER_WIDTH = 'twitter:player:width';
    const PLAYER_HEIGHT = 'twitter:player:height';
    const PLAYER_STREAM = 'twitter:player:stream';

    const DATA1 = 'twitter:data1';
    const LABEL1 = 'twitter:label1';
    const DATA2 = 'twitter:data2';
    const LABEL2 = 'twitter:label2';

    protected $data = [];

    public function __construct($site, $isId = false)
    {
        if ($isId) {
            $this->put(self::SITE_ID, $site);
        } else {
            $this->put(self::SITE, $site);
        }
    }

    public function put($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function get($key, $default = '')
    {
        if ($this->has($key)) {
            return $this->data[$key];
        }
        return $default;
    }

    public function has($key)
    {
        return isset($this->data[$key]);
    }

    public function render()
    {
        $render = '';
        foreach ($this->data as $key => $value) {
            $render .= sprintf("\t<meta name='%s' content='%s'>".PHP_EOL, $key, $value);
        }
        return $render;
    }
}
