# Right-to-left support

<p class="uk-text-lead">UIkit 可以支持从右到左阅读顺序的语言，比如阿拉伯语等，下面是实现方法。</p>

***

## Create RTL distribution

Download or clone a fresh version of UIkit. On the terminal, setup the project dependencies.

```
npm install
```

Now, run the `compile-rtl` task to build the RTL version.

```
npm run compile-rtl
```

The resulting files are now located in the `css/` folder and end with `*.rtl.css`. The JavaScript files stay the same as with the default LTR version.

***

## How to use RTL files

When you have built an RTL version of UIkit, you need to include the generated CSS files in your HTML. In addition, add the `dir="rtl"` attribute to the `<html>` tag of your website.

```html
<html dir="rtl">
...
<link rel="stylesheet" href="uikit.rtl.css">
```
