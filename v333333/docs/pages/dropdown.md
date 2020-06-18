# 下拉菜单

<p class="uk-text-lead">创建拥有各种样式的下拉菜单</p>

## 用法

下拉菜单其实是[下拉组件](drop.md)一种特例，它提供了自己的样式。任意内容，比如按钮，都可以拨动下拉菜单。只需为拨动器后面的块元素添加 `uk-dropdown`属性即可。

```html
<button type="button"></button>
<div uk-dropdown></div>
```

可以通过 hover 和点击拨动器触发下拉菜单。为属性添加 `mode: click`选项启用点击模式。如果想要将拨动器和下拉菜单编组，需要为它们的容器添加 `.uk-inline` class，这是 在[效果](utility.md#inline)中定义的。

```html
<div class="uk-inline">
    <button type="button"></button>
    <div uk-dropdown="mode: click"></div>
</div>
```

```example
<div class="uk-inline">
    <button class="uk-button uk-button-default" type="button">Hover</button>
    <div uk-dropdown>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
</div>

<div class="uk-inline">
    <button class="uk-button uk-button-default" type="button">Click</button>
    <div uk-dropdown="mode: click">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
</div>
```

***

## 下拉菜单中的导航菜单

下拉菜单中可以包含[导航菜单](nav.md)。只需为 `<ul>`元素添加 `.uk-nav` class 和 `.uk-dropdown-nav` 修饰器，如下例。

```html
<button type="button"></button>
<div uk-dropdown>
    <ul class="uk-nav uk-dropdown-nav">...</ul>
</div>
```

```example
<button class="uk-button uk-button-default" type="button">Hover</button>
<div uk-dropdown>
    <ul class="uk-nav uk-dropdown-nav">
        <li class="uk-active"><a href="#">Active</a></li>
        <li><a href="#">Item</a></li>
        <li class="uk-nav-header">Header</li>
        <li><a href="#">Item</a></li>
        <li><a href="#">Item</a></li>
        <li class="uk-nav-divider"></li>
        <li><a href="#">Item</a></li>
    </ul>
</div>
```

***

## 下拉菜单中的网格

可以在下拉菜单中使用[网格组件](grid.md)，在网格中可以添加导航或者其他内容。需要将内容放在带有`uk-grid`属性的`<div>`元素中。在下拉菜单的尺寸不适应容器的尺寸，如果需要自动堆叠网格，需要添加 `.uk-drop-grid` class。

```html
<div class="uk-width-large" uk-dropdown>
    <div class="uk-dropdown-grid uk-child-width-1-2@m" uk-grid>...</div>
</div>
```

使用[宽度组件](width.md)调整下拉菜单的宽度。

```example
<button class="uk-button uk-button-default" type="button">Hover</button>
<div class="uk-width-large" uk-dropdown>
    <div class="uk-dropdown-grid uk-child-width-1-2@m" uk-grid>
        <div>
            <ul class="uk-nav uk-dropdown-nav">
                <li class="uk-active"><a href="#">Active</a></li>
                <li><a href="#">Item</a></li>
                <li class="uk-nav-header">Header</li>
                <li><a href="#">Item</a></li>
                <li><a href="#">Item</a></li>
                <li class="uk-nav-divider"></li>
                <li><a href="#">Item</a></li>
            </ul>
        </div>
        <div>
            <ul class="uk-nav uk-dropdown-nav">
                <li class="uk-active"><a href="#">Active</a></li>
                <li><a href="#">Item</a></li>
                <li class="uk-nav-header">Header</li>
                <li><a href="#">Item</a></li>
                <li><a href="#">Item</a></li>
                <li class="uk-nav-divider"></li>
                <li><a href="#">Item</a></li>
            </ul>
        </div>
    </div>
</div>
```

***

## 定位

在`uk-dropdown` 属性中添加以下这些选项来调整下拉菜单的对齐方式。

```html
<div uk-dropdown="pos: top-left"></div>
```

```example
<div class="uk-inline">
    <button class="uk-button uk-button-default" type="button">Top Right</button>
    <div uk-dropdown="pos: top-right">
        <ul class="uk-nav uk-dropdown-nav">
            <li class="uk-active"><a href="#">Active</a></li>
            <li><a href="#">Item</a></li>
            <li class="uk-nav-header">Header</li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
            <li class="uk-nav-divider"></li>
            <li><a href="#">Item</a></li>
        </ul>
    </div>
</div>

<div class="uk-inline">
    <button class="uk-button uk-button-default" type="button">Bottom Justify</button>
    <div uk-dropdown="pos: bottom-justify">
        <ul class="uk-nav uk-dropdown-nav">
            <li class="uk-active"><a href="#">Active</a></li>
            <li><a href="#">Item</a></li>
            <li class="uk-nav-header">Header</li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
            <li class="uk-nav-divider"></li>
            <li><a href="#">Item</a></li>
        </ul>
    </div>
</div>

<div class="uk-inline">
    <button class="uk-button uk-button-default" type="button">Right Center</button>
    <div uk-dropdown="pos: right-center">
        <ul class="uk-nav uk-dropdown-nav">
            <li class="uk-active"><a href="#">Active</a></li>
            <li><a href="#">Item</a></li>
            <li class="uk-nav-header">Header</li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
            <li class="uk-nav-divider"></li>
            <li><a href="#">Item</a></li>
        </ul>
    </div>
</div>
```

| Position         | Description                                                                   |
|------------------|-------------------------------------------------------------------------------|
| `bottom-left`    | 对齐到左下角                             |
| `bottom-center`  | 对齐到底部中间                                  |
| `bottom-right`   | 对齐到右下角                               |
| `bottom-justify` | 对齐到底部，并将宽度调整为关联元素的宽度 |
| `top-left`       | 对齐到左上角                                       |
| `top-center`     | 对齐到顶部中间                           |
| `top-right`      | 对齐到右上角                           |
| `top-justify`    | 对齐到顶部，并将宽度调整为关联元素的宽度   |
| `left-top`       | 对齐到左侧顶部                                        |
| `left-center`    | 对齐到左侧中间                                      |
| `left-bottom`    | 对齐到左侧底部                                       |
| `right-top`      | 对齐到右侧顶部                                   |
| `right-center`   | 对齐到右侧中间                          |
| `right-bottom`   | 对齐到右侧底部                                  |

***

## 边界

默认地，下拉菜单会在超过视口边缘的时候自动翻转。如果想要根据容器的边界来翻转，需要为 `uk-dropdown`属性添加`boundary: .my-class`选项，并添加指向容器的选择器。这样就能将任意父元素设定为下拉菜单的边界了。

```html
<div class="my-class">
    <button type="button"></button>
    <div uk-dropdown="boundary: .my-class"></div>
</div>
```

```example
<div class="boundary uk-panel uk-placeholder uk-width-2-3@s">

    <button class="uk-button uk-button-default uk-float-left" type="button">Hover</button>
    <div uk-dropdown="boundary: .boundary">
        <ul class="uk-nav uk-dropdown-nav">
            <li class="uk-active"><a href="#">Active</a></li>
            <li><a href="#">Item</a></li>
            <li class="uk-nav-header">Header</li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
            <li class="uk-nav-divider"></li>
            <li><a href="#">Item</a></li>
        </ul>
    </div>

    <button class="uk-button uk-button-default uk-float-right" type="button">Hover</button>
    <div uk-dropdown="boundary: .boundary">
        <ul class="uk-nav uk-dropdown-nav">
            <li class="uk-active"><a href="#">Active</a></li>
            <li><a href="#">Item</a></li>
            <li class="uk-nav-header">Header</li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
            <li class="uk-nav-divider"></li>
            <li><a href="#">Item</a></li>
        </ul>
    </div>

</div>
```

***

### 边界上的对齐

要使下拉菜单与边界对齐，需要为属性添加 `boundary-align: true` 选项。

```html
<div class="my-class">
    <button type="button"></button>
    <div uk-dropdown="boundary: .my-class; boundary-align: true"></div>
</div>
```

```example
<div class="boundary-align uk-panel uk-placeholder">

    <button class="uk-button uk-button-default uk-float-left" type="button">Justify</button>
    <div uk-dropdown="pos: bottom-justify; boundary: .boundary-align; boundary-align: true">
        <ul class="uk-nav uk-dropdown-nav">
            <li class="uk-active"><a href="#">Active</a></li>
            <li><a href="#">Item</a></li>
            <li class="uk-nav-header">Header</li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
            <li class="uk-nav-divider"></li>
            <li><a href="#">Item</a></li>
        </ul>
    </div>

    <button class="uk-button uk-button-default uk-float-right" type="button">Center</button>
    <div uk-dropdown="pos: bottom-center; boundary: .boundary-align; boundary-align: true">
        <ul class="uk-nav uk-dropdown-nav">
            <li class="uk-active"><a href="#">Active</a></li>
            <li><a href="#">Item</a></li>
            <li class="uk-nav-header">Header</li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
            <li class="uk-nav-divider"></li>
            <li><a href="#">Item</a></li>
        </ul>
    </div>

</div>
```

***

## 偏移

自定义下拉菜单容器与拨动器之间的偏移距离，需要添加带偏移数值的 `offset` 选项，以像素为单位。

```html
<div uk-dropdown="offset: 80"></div>
```

```example
<button class="uk-button uk-button-default" type="button">Hover</button>
<div uk-dropdown="offset: 80">
    <ul class="uk-nav uk-dropdown-nav">
        <li class="uk-active"><a href="#">Active</a></li>
        <li><a href="#">Item</a></li>
        <li class="uk-nav-header">Header</li>
        <li><a href="#">Item</a></li>
        <li><a href="#">Item</a></li>
        <li class="uk-nav-divider"></li>
        <li><a href="#">Item</a></li>
    </ul>
</div>
```

***

## 动画

添加[动画组件](animation.md)中的动画class到`animation: uk-animation-*` 选项，就能为下拉菜单添加一个或多个动画。还能设置动画的持续时间，添加带值的 `duration` 就行，如下例。

```html
<div uk-dropdown="animation: uk-animation-slide-top-small; duration: 1000"></div>
```

```example
<button class="uk-button uk-button-default" type="button">Hover</button>
<div uk-dropdown="animation: uk-animation-slide-top-small; duration: 1000">
    <ul class="uk-nav uk-dropdown-nav">
        <li class="uk-active"><a href="#">Active</a></li>
        <li><a href="#">Item</a></li>
        <li class="uk-nav-header">Header</li>
        <li><a href="#">Item</a></li>
        <li><a href="#">Item</a></li>
        <li class="uk-nav-divider"></li>
        <li><a href="#">Item</a></li>
    </ul>
</div>
```

***

## 组件选项

组件属性中可以使用以下任意选项。用分号隔开多个选项。[Learn more](javascript.md#component-configuration)

| Option           | Value                  | Default       | Description                                                                      |
|------------------|------------------------|---------------|----------------------------------------------------------------------------------|
| `toggle`         | String, Boolean  | `true`          | 作为拨动器的元素的CSS选择器。默认地会使用下拉组件前一个元素作为拨动器。  |
| `pos`            | String                 | `bottom-left` | 下拉组件的定位                  |
| `mode`           | String           | `hover`         | 下拉组件的触发模式，可以是 `hover` 或 `click`。                                                       |
| `delay-show`     | Number                 | `0`             | hover 模式下下拉组件出现的延时，以毫秒为单位 |
| `delay-hide`     | Number                 | `800`           | hover 模式下下拉组件隐藏的延时，以毫秒为单位 |
| `boundary`       | String           | `window`        | 维持下拉组件可见性的元素的CSS 选择器     |
| `boundary-align` | Boolean                | `false`         | 将下拉组件与它的边界对齐                                       |
| `flip`           | Boolean, String | `true`          | 自动翻转下拉组件。可能的值有 `false`, `true`, `x` or `y`.                                                     |
| `offset`         | Number                 | `0`             | 下拉组件容器的偏移                                          |
| `animation`      | String                 | `false`         | 空格隔开多个动画的名称，逗号后是组件隐藏的动画  |
| `duration`       | Number                 | `200`           | 以毫秒为单位的动画持续时间 |
***

## JavaScript

Learn more about [JavaScript components](javascript.md#programmatic-use).

### 初始化

```js
UIkit.dropdown(element, options);
```

### 事件

These events will be triggered on elements with this component attached.

| Name | Description |
| --- | --- |
| `toggle` | 元素被拨动时触发  |
| `beforeShow` | 元素被显示前触发。返回`false`就能避免触发 |
| `show` | 元素被显示后触发  |
| `beforeHide` | 元素被隐藏前触发。返回`false`就能避免触发 |
| `hide` | 元素被隐藏后触发 |
| `stack` |  `drop-stack`class被应用时触发 |
