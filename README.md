# phpflutter
A flutter-like framework for PHP.

Need help? Join [our discord channel](https://discord.gg/peUJFh3)

# What is PHP Flutter?
PHP Flutter is a simple "framework" for better, easier and mainly more readable code.

In PHPF (Short name), everything is a widget (even the main page).

A widget looks like this:
```php
class exampleWidget extends widget {
  function __construct(){//space for arguments - text or child widgets
  
  }
  
  function build(){
  ?>
  <b>Hello world</b>
  <?
  }

}
```

# Installation

Althrough there might be a composer version in the future, as of now, the easiest way is to grab the lastest release and put it in the folder.

# Better includes

Want to have more readable includes/requires in your code? Use this simple script:

```php
spl_autoload_register(function ($class) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (file_exists($file)) {
        require __DIR__ . DIRECTORY_SEPARATOR . $file;
        return true;
    }
    return false;
});
```
_Must be in the project root_

This might be useful for PHPF projects that have one widget in one file (one class in one file) with the same name (file widget.php contains class `widget`).

Remember to always have a namespace at the top of the file!
```php
namespace path\to\folder;//for PROJECT_ROOT/path/to/folder/class.php
//class...
```
