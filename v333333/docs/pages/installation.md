# 安装

<p class="uk-text-lead">了解在哪里下载以及怎样编译 UIkit 源码。</p>

## 下载

你可以通过以下途径获取 UIkit：

- 下载预构建的 CSS 和 JavaScript [最新版本](https://github.com/uikit/uikit/releases/latest) 。
- 使用 [Bower](https://bower.io) 来获取预构建的 JavaScript、CSS 和 LESS 源文件。这是典型的 web 项目中使用 UIkit 的推荐方式：```bower install uikit```
- 克隆仓库中包括构建脚本在内的所有源文件： `git clone git://github.com/uikit/uikit.git`
- 使用 [Npm](https://npmjs.com) 来获取 Github上可用的所有源文件：```npm install uikit```

UIkit 所有版本的已编译的文件都被寄存在 Cloudflare 这个CDN上，国内的话推荐[bootcdn](http://www.bootcdn.cn/uikit/)。用法如下：

```html
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/[uikit-version]/css/uikit.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/[uikit-version]/js/uikit.min.js"></script>
```

***

## 源码的文件结构

Github 项目包含了所有将要被编译到 `dist` 文件夹中的所有源文件。[Less](http://lesscss.org) 源文件将被编译成为 CSS 文件，JavaScript 文件会被多行索引，SVG 图片会被合并成为使用更少符号的 SVG。

| 文件夹   | 描述 |
| -------- | ----------- |
| `/src`   | 包含所有 LESS、JavaScript和图片源文件 |
| `/dist`  | 包含所有编译后的 CSS、JS和图片，在每次发布版本时更新 |
| `/tests` | 包含所有组件的 HTML 测试文件 |

***

## 从 Github 源码编译

要自己动手编译 UIkit，你可以使用已有的构建脚本。

```sh
npm install
npm run compile
```

编译完成后，在 `dist` 文件夹中还有一些额外的文件，默认情况下它们不会被检查。如果你添加了[自定义 UIkit主题](theme.md)，构建任务会创建更多的额外文件。

```html
/dist/css

    <!-- UIkit 的 CSS -->
    uikit.css
    uikit.min.css

    <!-- UIkit 的核心样式，不包含默认主题 -->
    uikit-core.css
    uikit-core.min.css

/dist/images

    <!-- 包含 UIkit 用到的所有图片，比如图标 -->

/dist/js

    <!-- UIkit 的 JavaScript -->
    uikit.js
    uikit.min.js

    <!-- 精简的 JavaScript。只包含核心功能，不包含附加组件的功能 -->
    uikit-core.js
    uikit-core.min.js

    <!-- 附加组件（比如灯箱），只在已引入 uikit-core.js 才使用 -->
    /components
```

要使用 UIkit 的 CSS 和 JavaScript，要在你的 HTML文件中[引入这些文件](introduction.md#html-markup)，然后根据文件中列出的任意组件来添加它们的代码标签。

<script>
$.get("https://getuikit.com/assets/uikit/package.json", {nocache: Math.random()}, data => {
    $("pre").each(function(i) {
        $(this).html($(this).html().replace(/\[uikit-version\]/g, data.version));
    });
}, 'json');
</script>
