# 分页

<p class="uk-text-lead">轻松创建好看的页面分页。</p>

## 用法

分页组件由按钮风格的链接组成，它们在水平列表中并列对齐。

| Class            | Description                                                                                                                    |
|------------------|--------------------------------------------------------------------------------------------------------------------------------|
| `.uk-pagination` | 添加到 `<ul>`定义分页组件。使用 `<a>`元素作为分页单元       |
| `.uk-active`     | 添加到列表单元上应用选中效果，并使用 `<span>` 替代`<a>`                         |
| `.uk-disabled`   | 添加到列表单元上应用禁用状态，并使用 `<span>` 替代`<a>`   |

```html
<ul class="uk-pagination">
    <li><a href=""></a></li>
    <li class="uk-active"><span></span></li>
    <li class="uk-disabled"><span></span></li>
</ul>
```

```example
<ul class="uk-pagination" uk-margin>
    <li><a href="#"><span uk-pagination-previous></span></a></li>
    <li><a href="#">1</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">6</a></li>
    <li class="uk-active"><span>7</span></li>
    <li><a href="#">8</a></li>
    <li><a href="#">9</a></li>
    <li><a href="#">10</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">20</a></li>
    <li><a href="#"><span uk-pagination-next></span></a></li>
</ul>
```

***

## 对齐

分页组件也使用了 flexbox，可以使用 [flex](flex.md) 来处理对齐效果。

```html
<ul class="uk-pagination uk-flex-center">...</ul>
```

```example
<ul class="uk-pagination uk-flex-center" uk-margin>
    <li><a href="#"><span uk-pagination-previous></span></a></li>
    <li><a href="#">1</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">5</a></li>
    <li><a href="#">6</a></li>
    <li class="uk-active"><span>7</span></li>
    <li><a href="#">8</a></li>
    <li><a href="#"><span uk-pagination-next></span></a></li>
</ul>

<ul class="uk-pagination uk-flex-right uk-margin-medium-top" uk-margin>
    <li><a href="#"><span uk-pagination-previous></span></a></li>
    <li><a href="#">1</a></li>
    <li class="uk-disabled"><span>...</span></li>
    <li><a href="#">5</a></li>
    <li><a href="#">6</a></li>
    <li class="uk-active"><span>7</span></li>
    <li><a href="#">8</a></li>
    <li><a href="#"><span uk-pagination-next></span></a></li>
</ul>
```

***

## 前一页和下一页

要使用前一页和下一页按钮，需要在分页单元内的`<span>`元素上添加 `uk-pagination-previous` 或 `uk-pagination-next` 属性。

```html
<ul class="uk-pagination">
    <li><a href=""><span uk-pagination-previous></span>
    <li><a href=""><span uk-pagination-next></span>
</ul>
```

```example
<ul class="uk-pagination">
    <li><a href="#"><span class="uk-margin-small-right" uk-pagination-previous></span> Previous</a></li>
    <li class="uk-margin-auto-left"><a href="#">Next <span class="uk-margin-small-left" uk-pagination-next></span></a></li>
</ul>
```
