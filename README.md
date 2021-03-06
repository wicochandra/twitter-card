# Twitter Card
Generate Twitter Card HTML tag For PHP. For twitter card description can be seen on https://dev.twitter.com/cards/types.

## Usage

```
<?php
use Wicochandra\Twitter;

$twitterCard = new TwitterCard('@YourTwitter');
$twitterCard->put(TwitterCard::CARD, TwitterCard::TYPE_SUMMARY_LARGE);
$twitterCard->put(TwitterCard::TITLE, 'Title Twitter');
$twitterCard->put(TwitterCard::DESCRIPTION, 'Short Description');
$twitterCard->put(TwitterCard::IMAGE, 'http://link/to/your/image');
$twitterCard->put(TwitterCard::URL, 'http://link/to/your/site');

// render HTML tag
echo $twitterCard->render();
```

## Available Constant

```

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
```
