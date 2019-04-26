# TheRemoteCodertElements / Readme

- [About](#about)
- [How to use](#how-to-use)
- [Example](#example)


<br>

## About

Extend sites expert settings with additional navigation options that are intended to hide any site in any navigation template. The Contao default allows to hide a page from _all_ navigations which may not always fit your special needs.

You will be able to read out the new values in any of your custom navigation template and decide what to do on your own.


<br><br>

## How to use

Copy the files into Contao's module folder. Refresh any caches and test if the content elements are still working.

Requirements:

- Tested with Contao 3+

There are 3 options to hide a page in any menu: `header`, `sidebar`, `footer`.


<br><br>

## Example

Navigation template example:

```php
<!-- nav_default.html5 -->

<ul class="<?php echo $this->level; ?>">
<?php $i=0; foreach ($this->items as $item): ?>
<?php if ($item['TheRemoteCoderPageNavigation_header']) continue; ?>

<!-- HTML rendering from here ... -->
```

