# codeigniter3_hmvc
**CodeIgniter 3.11 with HMVC (modular) ready**

1. Do a **`composer update`** if necessary, because directory: **`vendor`** is excluded.
2. Put your assets (js, css, images, etc) inside directory: **`public`**
3. **`debug_helper.php`** (*autoloaded*) has these:
   - `debugz($var)` will do `print_r($var) + die`
   - `dumpz($var)` will do `var_dump($var) + die`
