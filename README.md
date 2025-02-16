# Requirements
```
php version >= 7.4
```
# Install
```
composer require alte0/otus-test-app
```
# Usage
```
<?php

use Alte0\OtusTestApp\ReturnText;

$returnText = new ReturnText('textInput');
$text = $returnText->getText();
```
