# 下拉

<p class="uk-text-lead">将任意元素定位到另一个元素附近。</p>

## 用法

任意内容，比如按钮，都可以拨动下拉组件。只需要在拨动器后的块元素上添加 `uk-drop` 属性就行了。

```html
<button type="button"></button>
<div uk-drop></div>
```

在拨动器上悬停鼠标或者点击都可以触发下拉菜单。需要为 `uk-drop` 属性添加 `mode: click` 选项。如果想要将拨动器和下拉菜单编组，需要为它们的容器添加 `.uk-inline` class，这是 在[效果](utility.md#inline)中定义的。

```html
<div class="uk-inline">
    <button type="button"></button>
    <div uk-drop="mode: click"></div>
</div>
```

**Note** 下拉组件没有默认样式，在例子中，我们使用了[卡片组件](card.md)。

```example
<div class="uk-inline">
    <button class="uk-button uk-button-default" type="button">Hover</button>
    <div uk-drop>
        <div class="uk-card uk-card-body uk-card-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
    </div>
</div>

<div class="uk-inline">
    <button class="uk-button uk-button-default" type="button">Click</button>
    <div uk-drop="mode: click">
        <div class="uk-card uk-card-body uk-card-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
    </div>
</div>
```

***

## 下拉组件中的网格

可以在下拉中使用[网格](grid.md)。需要将内容放在带有`uk-grid`属性的`<div>`元素中。在下拉组件的尺寸不适应容器的尺寸，如果需要自动堆叠网格，需要添加 `.uk-drop-grid` class。

```html
<div class="uk-width-large" uk-drop>
    <div class="uk-drop-grid uk-child-width-1-2@m" uk-grid>...</div>
</div>
```

使用[宽度组件](width.md)调整下拉组件的宽度。

```example
<button class="uk-button uk-button-default" type="button">Hover</button>
<div class="uk-width-large" uk-drop>
    <div class="uk-card uk-card-body uk-card-default">
        <div class="uk-drop-grid uk-child-width-1-2@m" uk-grid>
            <div>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
            </div>
            <div>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
            </div>
        </div>
    </div>
</div>
```

***

## 定位

在 `uk-drop` 属性中添加以下这些选项来调整下拉组件的对齐方式。

```html
<div uk-drop="pos: top-left"></div>
```

```example
<div class="uk-inline">
    <button class="uk-button uk-button-default" type="button">Top Right</button>
    <div uk-drop="pos: top-right">
        <div class="uk-card uk-card-body uk-card-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
    </div>
</div>

<div class="uk-inline">
    <button class="uk-button uk-button-default" type="button">Bottom Justify</button>
    <div uk-drop="pos: bottom-justify">
        <div class="uk-card uk-card-body uk-card-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
    </div>
</div>

<div class="uk-inline">
    <button class="uk-button uk-button-default" type="button">Right Center</button>
    <div uk-drop="pos: right-center">
        <div class="uk-card uk-card-body uk-card-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
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

默认地，下拉组件会在超过视口边缘的时候自动翻转。如果想要根据容器的边界来翻转，需要为 `uk-drop`属性添加`boundary: .my-class`选项，并添加指向容器的选择器。这样就能将任意父元素设定为下拉组件的边界了。

```html
<div class="my-class">
    <button type="button"></button>
    <div uk-drop="boundary: .my-class"></div>
</div>
```

```example
<div class="boundary uk-panel uk-placeholder uk-width-2-3@s">

    <button class="uk-button uk-button-default uk-float-left" type="button">Hover</button>
    <div uk-drop="boundary: .boundary">
        <div class="uk-card uk-card-body uk-card-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
    </div>

    <button class="uk-button uk-button-default uk-float-right" type="button">Hover</button>
    <div uk-drop="boundary: .boundary">
        <div class="uk-card uk-card-body uk-card-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
    </div>

</div>
```

***

### 边界上的对齐

要使下拉组件与边界对齐，需要为属性添加 `boundary-align: true` 选项。

```html
<div class="my-class">
    <button type="button"></button>
    <div uk-drop="boundary: .my-class; boundary-align: true"></div>
</div>
```

```example
<div class="boundary-align uk-panel uk-placeholder">

    <button class="uk-button uk-button-default uk-float-left" type="button">Justify</button>
    <div uk-drop="pos: bottom-justify; boundary: .boundary-align; boundary-align: true">
        <div class="uk-card uk-card-body uk-card-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
    </div>

    <button class="uk-button uk-button-default uk-float-right" type="button">Center</button>
    <div uk-drop="pos: bottom-center; boundary: .boundary-align; boundary-align: true">
        <div class="uk-card uk-card-body uk-card-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
    </div>

</div>
```

***

## 偏移

自定义下拉容器与拨动器之间的偏移距离，需要添加带偏移数值的 `offset` 选项，以像素为单位。

```html
<div uk-drop="offset: 80"></div>
```

```example
<button class="uk-button uk-button-default" type="button">Hover</button>
<div uk-drop="offset: 80">
    <div class="uk-card uk-card-body uk-card-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
</div>
```

***

## 动画

添加[动画组件](animation.md)中的动画class到`animation: uk-animation-*` 选项，就能为下拉菜单添加一个或多个动画。还能设置动画的持续时间，添加带值的 `duration` 就行，如下例。

```html
<div uk-drop="animation: uk-animation-slide-top-small; duration: 1000"></div>
```

```example
<button class="uk-button uk-button-default" type="button">Hover</button>
<div uk-drop="animation: uk-animation-slide-top-small; duration: 1000">
    <div class="uk-card uk-card-body uk-card-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
</div>
```

***

## 组件选项

组件属性中可以使用以下任意选项。用分号隔开多个选项。 [Learn more](javascript.md#component-configuration)

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
UIkit.drop(element, options);
```

### 事件

These events will be triggered on elements with this component attached.

| Name | Description |
| --- | --- |
| `toggle` | 元素被拨动时触发  |
| `beforeShow` | 元素被显示前触发。返回`false`就能避免触发 |
| `show` | 元素被显示后触发  |
| `beforeHide` | 元素被隐藏前触发。返回`false`就能避免触发  |
| `hide` | 元素被隐藏后触发 |
| `stack` |  `drop-stack`class被应用时触发 |
