<?php

include dirname(__FILE__) . '/../PrintEasy.php';

$html = '
    <div data-id="[itemID]">
        <h5>[title]</h5>
        <p>[description]</p>
    </div>     
';

$singleItem = array(
    'itemID' => 1,
    'title' => 'Item 1',
    'description' => 'This is description for Item 1',
);

$multipleItems = array(
    array(
        'itemID' => 1,
        'title' => 'Item 1',
        'description' => 'This is description for Item 1',
    ),
    array(
        'itemID' => 2,
        'title' => 'Item 2',
        'description' => 'This is description for Item 2',
    ),
    array(
        'itemID' => 3,
        'title' => 'Item 3',
        'description' => 'This is description for Item 3',
    ),
);

?>
<html>
<head>
    <title>PrintEasyPHP Demo</title>
</head>
<body>
<h2>Single Item Example</h2>
<?php PrintEasy::single($html, $singleItem);?>
<h2>Multiple Items Example</h2>
<?php PrintEasy::multiple($html, $multipleItems);?>
</body>
</html>
