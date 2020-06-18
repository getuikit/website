# Margin

<p class="uk-text-lead">在元素之间添加间距的一些效果样式。</p>

## 用法

在元素中使用一个或多个以下的 class 创建垂直或水平方向的 margin，通常是用在段落中。

| Class               | Description                                                      |
|---------------------|------------------------------------------------------------------|
| `.uk-margin`        | 添加底部 margin；在该元素前有另一个元素时，才添加顶部 margin  |
|  `.uk-margin-top`   | 添加顶部 margin                                          |
| `.uk-margin-bottom` | 添加底部 margin         |
| `.uk-margin-left`   | 添加左侧 margin                  |
| `.uk-margin-right`  | 添加右侧 margin             |

```html
<div class="uk-margin"></div>
```

```example
<div class="uk-margin uk-card uk-card-default uk-card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
<div class="uk-margin uk-card uk-card-default uk-card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
```

***

## 小尺寸 margin

添加以下 class，对块元素添加小尺寸间距。

| Class                       | Description                       |
|-----------------------------|-----------------------------------|
| `.uk-margin-small`          | 添加底部 margin；在该元素前有另一个元素时，才添加顶部 margin |
| `.uk-margin-small-top`      | 添加顶部 margin            |
| `.uk-margin-small-bottom`   | 添加底部 margin        |
| `.uk-margin-small-left`     | 添加左侧 margin       |
| `.uk-margin-small-right`    | 添加右侧 margin              |

```example
<div class="uk-margin-small uk-card uk-card-default uk-card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
<div class="uk-margin-small uk-card uk-card-default uk-card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
```

***

## 中等尺寸的 margin 

添加以下 class，对块元素添加中等尺寸间距。

| Class                        | Description                        |
|------------------------------|------------------------------------|
| `.uk-margin-medium`          | 添加底部 margin；在该元素前有另一个元素时，才添加顶部 margin |
| `.uk-margin-medium-top`      | 添加顶部 margin           |
| `.uk-margin-medium-bottom`   | 添加底部 margin         |
| `.uk-margin-medium-left`     | 添加左侧 margin           |
| `.uk-margin-medium-right`    | 添加右侧 margin         |

```example
<div class="uk-margin-medium uk-card uk-card-default uk-card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
<div class="uk-margin-medium uk-card uk-card-default uk-card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
```

***

## 大尺寸 margin

添加以下 class，对块元素添加大尺寸间距。

| Class                        | Description                        |
|------------------------------|------------------------------------|
| `.uk-margin-large`           | 添加底部 margin；在该元素前有另一个元素时，才添加顶部 margin |
| `.uk-margin-large-top`       | 添加顶部 margin             |
| `.uk-margin-large-bottom`    | 添加底部 margin          |
| `.uk-margin-large-left`      | 添加左侧 margin              |
| `.uk-margin-large-right`     | 添加右侧 margin              |

```example
<div class="uk-margin-large uk-card uk-card-default uk-card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
<div class="uk-margin-large uk-card uk-card-default uk-card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
```

***

## 超大尺寸 margin

添加以下 class，对块元素添加超大尺寸间距。

| Class                         | Description                         |
|-------------------------------|-------------------------------------|
| `.uk-margin-xlarge`           | 添加底部 margin；在该元素前有另一个元素时，才添加顶部 margin |
| `.uk-margin-xlarge-top`       | 添加顶部 margin             |
| `.uk-margin-xlarge-bottom`    | 添加底部 margin          |
| `.uk-margin-xlarge-left`      | 添加左侧 margin            |
| `.uk-margin-xlarge-right`     | 添加右侧 margin          |

```example
<div class="uk-margin-xlarge uk-card uk-card-default uk-card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
<div class="uk-margin-xlarge uk-card uk-card-default uk-card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
```

***

## 移除 margin

使用以下 class 移除块元素上的 margin。

| Class                         | Description                         |
|-------------------------------|-------------------------------------|
| `.uk-margin-remove`           | 移除所有 margin               |
| `.uk-margin-remove-top`       | 移除顶部 margin              |
| `.uk-margin-remove-bottom`    | 移除底部 margin        |
| `.uk-margin-remove-left`      | 移除左侧 margin         |
| `.uk-margin-remove-right`     | 移除右侧 margin            |
| `.uk-margin-remove-vertical`  | 移除所有垂直方向的 margin      |
| `.uk-margin-remove-adjacent`  | 移除紧挨顶部边缘的元素的顶部 margin  |

```html
<h1 class="uk-margin-remove"></h1>
```

***

## Auto margin

使用以下 class 设置 auto margin。可以用于居中，或者对齐带有固定宽度的块元素，对 flex 元素有效。

| Class                         | Description                                                                           |
|-------------------------------|---------------------------------------------------------------------------------------|
| `.uk-margin-auto`             | 将左侧和右侧的 margin 设置为 auto，使块元素和 flex 元素 水平居中  |
| `.uk-margin-auto-left`        | 将左侧 margin 设为 auto，将块元素和 flex 元素推到右边  |
| `.uk-margin-auto-right`       | 将右侧 margin 设为 auto，将块元素和 flex 元素推到左边    |
| `.uk-margin-auto-vertical`    | 将顶部和底部的 margin 设为 auto，将 flex 元素垂直居中     |

```example
<div class="uk-margin uk-margin-auto-left uk-width-1-2@s uk-card uk-card-default uk-card-body uk-text-center">Block element</div>

<div class="uk-flex uk-height-medium uk-background-muted uk-margin uk-text-center">
    <div class="uk-margin-auto uk-margin-auto-vertical uk-width-1-2@s uk-card uk-card-default uk-card-body">Flex item</div>
</div>
```

***

## 动态换行

在堆叠的元素上添加间距，比如，狭窄视口中换行的行内元素，只需给它们的父容器添加 `uk-margin`属性就行。它会自动将 `.uk-margin-small-top` 添加到后面的元素上。

```html
<div uk-margin>
    <button></button>
    <button></button>
</div>
```

```example
<div uk-margin>
    <button class="uk-button uk-button-default">Button</button>
    <button class="uk-button uk-button-default">Button</button>
    <button class="uk-button uk-button-default">Button</button>
    <button class="uk-button uk-button-default">Button</button>
    <button class="uk-button uk-button-default">Button</button>
    <button class="uk-button uk-button-default">Button</button>
    <button class="uk-button uk-button-default">Button</button>
    <button class="uk-button uk-button-default">Button</button>
    <button class="uk-button uk-button-default">Button</button>
    <button class="uk-button uk-button-default">Button</button>
</div>
```

***

## 组件选项

在组件属性中添加以下选项。用分号隔开多个选项。[Learn more](javascript.md#component-configuration)

| Option          | Value  | Default         | Description                                                                                                |
|----------------|--------|-----------------|------------------------------------------------------------------------------------------------------------|
| `margin `      | String | uk-margin-small-top  | 被添加到换到下一行的元素上的 class，通常用来创建与前一行直接的 margin  |
| `first-column` | String | uk-first-column | 添加到每行第一个元素的 class    |

***

## JavaScript

Learn more about [JavaScript components](javascript.md#programmatic-use).

### 初始化

```js
UIkit.margin(element, options);
```
