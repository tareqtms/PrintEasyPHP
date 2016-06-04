# PrintEasy for PHP

PrintEasy class for PHP helps you to remove extra hassles while working with data arrays to print into html structure. Normally, you need to write some html and then use `<?php echo $someArray['Item'];?>` while printing any value from array.
By using this class you can simply build your html structure putting the array variables into `[...]` blocks and put that into the function to do the rest for you.

## Usage

Include it in your PHP file

```php
include dirname(__FILE__) . 'PrintEasy.php';
```

Generate the HTML like this
>Note that each [...] block represents a key in your array

```php
$html = '
<div data-id="[itemID]">
    <h5>[title]</h5>
    <p>[description]</p>
</div>
';
```

Use it like:

```php
PrintEasy::single($html, $singleItem);
```

or

```php
PrintEasy::multiple($html, $multipleItems);
```

Example single item
```php
$singleItem = array(
    'itemID' => 1,
    'title' => 'Item 1',
    'description' => 'This is description for Item 1',
);
```
or

```php
$singleItem = new stdClass();
$singleItem->itemID = 1;
$singleItem->title = 'Item 1';
$singleItem->description = 'This is description for Item 1';
```

Example multiple items

```php
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
```

or

```php
$singleItem1 = new stdClass();
$singleItem1->itemID = 1;
$singleItem1->title = 'Item 1';
$singleItem1->description = 'This is description for Item 1';

$singleItem2 = new stdClass();
$singleItem2->itemID = 2;
$singleItem2->title = 'Item 2';
$singleItem2->description = 'This is description for Item 2';

$singleItem3 = new stdClass();
$singleItem3->itemID = 3;
$singleItem3->title = 'Item 3';
$singleItem3->description = 'This is description for Item 3';

$multipleItems = array(
    $singleItem1,
    $singleItem2,
    $singleItem3,
);
```


## Demo
Check the demo folder for a simple demo.