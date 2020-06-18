# 简介

<p class="uk-text-lead">了解 UIkit 的基本情况。</p>

首先，需要下载 UIkit。或者根据[安装指南](installation.md)，从别的地方安装 UIkit包，或添加 CDN 链接。

<a class="uk-button uk-button-primary" href="https://getuikit.com/download">下载 UIkit</a>

***

## 包含的内容

在你下载的 Zip 文件中，包含已编译的 CSS 和 JavaScript 文件，你会在之后用到它们。可能你会想要自己来[安装和编译 UIkit](installation.md)或者[创建你自己的 UIkit 主题](less.md)。

| 文件夹    | 描述 |
| --------- | --- |
| `/css`    | 包含 UIkit 的 CSS 文件及其压缩版本 |
| `/images` | 包含 UIkit 用到的所有图片（比如图标） |
| `/js`     | 包含 UIkit 的 JavaScript 文件及其压缩版本 |

***

## HTML 元素

在你的 HTML5 文档的头部，添加已编译和压缩的 CSS 和 JavaScript。同时还必须要添加 [jQuery](http://jquery.com/download/)。像下面这样，基本就行了。

```html
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/jquery.js"></script>
        <script src="js/uikit.min.js"></script>
    </head>
    <body>
    </body>
</html>
```

把 UIkit 添加到文档中后，了解一下所有可用的组件，并在`<body>`元素内部写入你需要的 HTML 标签吧。

***

## 代码编辑器中 UIkit 自动完成

如果你有一款可靠的代码编辑器，就可以很好地使用 UIkit，比如 [Sublime Text](https://www.sublimetext.com/) 或者 [Atom](https://atom.io/)。要更加有效率，我们推荐你为你最喜欢的编辑器安装一个自动完成插件。它能帮你节省大量时间，因为你不必再去查看文档和输入所有 UIkit 的 class 和 HTML 标签。

我们将在插件支持 UIkit3 后，尽快更新这部分。
