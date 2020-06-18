# 迁移到 UIkit 3

<p class="uk-text-lead">将现有的 UIkit 2 网站迁移到最新的 UIkit3。</p>

Uikit 3 提供了可以运行在浏览器中的迁移工具，它能为你列出将网站从现有的 UIkit2迁移到UIkit3的所有必需的更改。运行迁移工具有两种方式：浏览器书签或单独的 JavaScript文件。必要的迁移修改会在浏览器控制台中列出。 

## 浏览器书签

使用迁移工具的最简单方式是使用浏览器书签。只需要点击此书签就能在你访问的任意页面上运行脚本。只需将下面这个链接拖拽到浏览器书签位置就行了。 

拖拽到书签栏 <span uk-icon="icon: arrow-right"></span> <a class="uk-button uk-button-primary" href="javascript: (function () { var script = document.createElement('script'); script.setAttribute('src', 'https://getuikit.com/migrate.min.js'); document.body.appendChild(script); }());">UIkit 3 Migration</a>

此外，你还可以手动创建书签，只需要将下面这些代码填写到书签的URL中即可。 

```js
javascript: (function () {
    var script = document.createElement('script');
    script.setAttribute('src', 'https://getuikit.com/migrate.min.js');
    document.body.appendChild(script);
}());
```


## HTML 集成

还可以在网站中加载相关 JavaScript 来运行迁移工具。使用这种方式，迁移脚本始终会在网站中加载。完成迁移后千万记得移除它。在`</body>` 标签前添加下列代码。 
```html
<script src="https://getuikit.com/migrate.min.js"></script>
```

***

## 用法

要开始迁移，首先，用 UIkit3的 JS和CSS文件替换掉 UIkit2的相关文件，然后运行迁移工具。打开浏览器开发者工具的控制台了解如何修改页面代码。你将看到一系列的警告和提示告诉你需要修改什么。对于必须的修改，可以点击任意信息旁边的小箭头查看详情。

![Console output](../docs/images/migration-console.gif)

每条提示或警告信息都会告诉你需要修改什么，包括受到影响的HTML元素。比较复杂的修改会有相关的例子来说明。最佳的迁移方式是逐一地修改每个组件。这样你就能在页面重载后查看错误信息是否消失了，网站上实际效果怎么样了。 

### 警告信息/Warnings

警告信息会高亮所有 UIkit3 不再支持或者必须修改的 CSS的class或Javascript属性。要迁移到 UIkit3 就必须解决这些警告信息。

### 提示信息/Notices

提示信息会高亮显示一些潜在的问题，可能这些问题并不会影响网站的效果。一些提示信息可能根本不需要任何修改。实际上，这是因为某些源自 UIkit2 的命名依然存在于 UIkit3 中，但现在已经归属于不同的组件或者有了不同的语义。这时，我们使用的选择器就无法侦测和确认相关标签是否正确，所以你需要仔细查看并确定是否已经修改过了。
