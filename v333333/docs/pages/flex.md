# Flex

<p class="uk-text-lead">使用 flexbox 创建强大的布局。</p>

Flex 在构建 UIkit 布局的过程中举足轻重。许多组件，比如[网格](grid.md)和水平导航，比如[导航栏](navbar.md)，[子导航](subnav.md)，[面包屑](breadcrumb.md)，[分页](pagination.md)，[选项卡](tab.md)和[圆点导航](dotnav.md)都是使用 flexbox 构建的，还可以同时使用 flex 组件的多个效果样式。

***

## 用法

使用 flexbox 布局模式，需要用到下列 class。默认地，所有 flex 元素都会左对齐，并被赋予一致的高度和宽度。

| Class             | Description                                                                                                  |
|-------------------|--------------------------------------------------------------------------------------------------------------|
| `.uk-flex`        | 创建具有块元素行为的 flex 容器                                             |
| `.uk-flex-inline` | 创建具有行内元素行为的 flex 容器                                               |

```html
<div class="uk-flex">
    <div></div>
</div>
```

```example
<div class="uk-flex">
    <div class="uk-card uk-card-default uk-card-body">Item 1</div>
    <div class="uk-card uk-card-default uk-card-body uk-margin-left">Item 2</div>
    <div class="uk-card uk-card-default uk-card-body uk-margin-left">Item 3</div>
</div>
```

***

## 水平对齐

这些 class 定义了 flex 元素的水平对齐方式，并分配了它们之间的间距。在 flex 容器上添加一个或多个来配置 flex 元素的对齐方式。默认地，flex 元素是左对齐的，与 `.uk-flex-left` 效果一致。

| Class              | Description                                                                                                                |
|--------------------|----------------------------------------------------------------------------------------------------------------------------|
| `.uk-flex-left`    | 左对齐                                                                      |
| `.uk-flex-center`  | 以中心主轴为准居中对齐                                   |
| `.uk-flex-right`   | 右对齐                                                                |
| `.uk-flex-between` | 以中心主轴为准均匀分配flex元素，使元素之间间距相等。|
| `.uk-flex-around`  | 均匀分配元素，使每个 flex 元素两侧具有相等的间距                                     |

```html
<div class="uk-flex uk-flex-center">
    <div></div>
</div>
```

```example
<div class="uk-flex uk-flex-center">
    <div class="uk-card uk-card-default uk-card-body">Item 1</div>
    <div class="uk-card uk-card-default uk-card-body uk-margin-left">Item 2</div>
    <div class="uk-card uk-card-default uk-card-body uk-margin-left">Item 3</div>
</div>
```

***

## 垂直对齐

下列 class 定义了flex 条目的垂直对齐方式。默认地，flex 元素会填满容器的高度，效果与 `.uk-flex-stretch`一致。


| Class              | Description                                                                                                                |
|--------------------|----------------------------------------------------------------------------------------------------------------------------|
| `.uk-flex-stretch` | 扩展flex条目填满父容器的高度                                                   |
| `.uk-flex-top`     | 对齐到顶部                                                                           |
| `.uk-flex-middle`  | 以中心主轴为准居中对齐                                                               |
| `.uk-flex-bottom`  | 对齐到底部                                                            |

```html
<div class="uk-flex uk-flex-middle"></div>
```

```example
<div class="uk-flex uk-flex-middle uk-text-center">
  <div class="uk-card uk-card-default uk-card-body">Item 1</div>
   <div class="uk-card uk-card-default uk-card-body uk-margin-left">Item 2<br>...</div>
   <div class="uk-card uk-card-default uk-card-body uk-margin-left">Item 3<br>...<br>...</div>
</div>
```

***

## 方向

这些类用于定义flex主轴的方向。默认地，flex条目按照水平从左到右的方向放置，效果同`.uk-flex-row`。

| Class                     | Description                                               |
|---------------------------|-----------------------------------------------------------|
| `.uk-flex-row`            | 水平排列 |
| `.uk-flex-row-reverse`    | 从右到左排列  |
| `.uk-flex-column`         | 以垂直列的形式排列  |
| `.uk-flex-column-reverse` | 垂直地从底部到顶部排列   |

```html
<div class="uk-flex uk-flex-column"></div>
```

```example
<div class="uk-flex uk-flex-column uk-width-1-3">
   <div class="uk-card uk-card-default uk-card-body">Item 1</div>
   <div class="uk-card uk-card-default uk-card-body uk-margin-top">Item 2</div>
   <div class="uk-card uk-card-default uk-card-body uk-margin-top">Item 3</div>
</div>
```

***

## 换行

默认情况下，flex条目会被拟合到一行中从左至右排列。添加以下修饰class改变flex元素的换行行为。

| Class                   | Description                                                                                       |
|-------------------------|---------------------------------------------------------------------------------------------------|
| `.uk-flex-wrap`         | 当 flex 元素不再适合容器时，自动换到另一行 |
| `.uk-flex-wrap-reverse` | 改变 flex 元素的方向使其从右至左            |
| `.uk-flex-nowrap`       | 强制 flex 元素在一行内显示。这是默认行为         |

下列 class 用于调整换行的 flex 元素的对齐方式。

| Class                   | Description                                                                                                                |
|-------------------------|----------------------------------------------------------------------------------------------------------------------------|
| `.uk-flex-wrap-stretch` | 拉伸 flex 元素填满剩余空间                                       |
| `.uk-flex-wrap-between` | 均匀分配 flex 条目行，第一行在容器顶部，最后一行在底部  |
| `.uk-flex-wrap-around`  | 均匀分配 flex 条目行，使每行顶部底部具有相等间距  |
| `.uk-flex-wrap-top`     | 将多行 flex 元素对齐到顶部   |
| `.uk-flex-wrap-middle`  | 垂直对齐多行 flex 元素  |
| `.uk-flex-wrap-bottom`  | 将多行 flex 元素对齐到底部        |

```html
<div class="uk-flex uk-flex-wrap uk-flex-wrap-around"></div>
```

```example
<div class="uk-flex uk-flex-wrap uk-flex-wrap-around uk-background-muted uk-height-medium">
    <div class="uk-width-1-3 uk-card uk-card-default uk-card-body uk-card-small">Item 1</div>
    <div class="uk-width-1-2 uk-card uk-card-default uk-card-body uk-card-small uk-margin-left">Item 2</div>
    <div class="uk-width-1-3 uk-card uk-card-default uk-card-body uk-card-small">Item 3</div>
    <div class="uk-width-1-3 uk-card uk-card-default uk-card-body uk-card-small uk-margin-left">Item 4</div>
    <div class="uk-width-1-2 uk-card uk-card-default uk-card-body uk-card-small">Item 5</div>
    <div class="uk-width-1-3 uk-card uk-card-default uk-card-body uk-card-small uk-margin-left">Item 6</div>
</div>
```

***

## 排序

默认地，flex条目根据源码的顺序排列。要将某个元素作为第一个或者最后一个进行显示，只需要添加下列类名中的一个。

| Class                                   | Description                                   |
|-----------------------------------------|-----------------------------------------------|
| `.uk-flex-first`                        | 显示到第一个        |
| `.uk-flex-last`                         | 显示到最后一个  |
| `.uk-flex-first@s`<br> `.uk-flex-last@s`   | 在 _640px_ 以上宽度生效 |
| `.uk-flex-first@m`<br> `.uk-flex-last@m`   | 在 _960px_ 以上宽度生效  |
| `.uk-flex-first@l`<br> `.uk-flex-last@l`   | 在 _1200px_ 以上宽度生效 |
| `.uk-flex-first@xl`<br> `.uk-flex-last@xl` | 在 _1600px_ 以上宽度生效  |

```html
<div class="uk-flex">
  <div></div>
  <div class="uk-flex-first"></div>
</div>
```

```example
<div class="uk-flex">
   <div class="uk-card uk-card-default uk-card-body uk-flex-last uk-margin-left">Item 1</div>
   <div class="uk-card uk-card-default uk-card-body uk-flex-first">Item 2</div>
   <div class="uk-card uk-card-default uk-card-body uk-margin-left">Item 3</div>
</div>
```

***

## 规模

要确定一个flex条目需要占用多大的空间，为条目添加以下类中的一个即可。默认地，flex元素由内容决定它们的尺寸，但允许缩小。

| Class           | Description                                            |
|-----------------|--------------------------------------------------------|
| `.uk-flex-none` | 由内容决定尺寸         |
| `.uk-flex-auto` | 根据内容分配空间 |
| `.uk-flex-1`    | 只基于 flex来分配空间     |

***

## Flex 和网格

Flex可以与[网格组件](grid.md)组合使用。

```example
<div class="uk-flex-middle" uk-grid>
    <div class="uk-width-2-3@m">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
    </div>
    <div class="uk-width-1-3@m uk-flex-first">
        <img src="../docs/images/light.jpg" alt="Image">
    </div>
</div>
```
