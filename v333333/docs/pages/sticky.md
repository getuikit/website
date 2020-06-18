# 附着

<p class="uk-text-lead">Sticky效果。使元素始终保持在时候顶部，比如常见的的附着在顶部的导航栏。</p>

## 用法

要使元素在滚动页面时始终保持在视口顶部，需要为该元素添加 `uk-sticky` 属性。

```html
<div uk-sticky></div>
```

```example
<div class="uk-card uk-card-default uk-card-body" style="z-index: 980;" uk-sticky="bottom: #offset">Stick to the top</div>
```

**Note** 本节示例中的元素只会在滚动在下一个标题前有附着效果，然后就会消失。这是为了不干扰其他附着效果的展示。

***

## 偏移量

还可以将元素定位到视口边缘下方的位置，需要在`offset`属性上添加像素距离，如下例：

```html
<div uk-sticky="offset: 100"
```

```example
<div class="uk-card uk-card-default uk-card-body" style="z-index: 980;" uk-sticky="offset: 100; bottom: #top">Stick 100px below the top</div>
```

***

## Top

要在附着行为上添加延迟效果，需要添加`top`选项，它能定义以像素为单位的偏移量、视口高度或 CSS 选择器等等延迟方式。

```html
<!-- Sticks after 100px of scrolling -->
<div uk-sticky="top: 100"></div>

<!-- Sticks after 100vh -->
<div uk-sticky="top: 100vh"></div>

<!-- Sticks to the top of the container -->
<div id="my-id">
    <div uk-sticky="top: #my-id"></div>
</div>
```

```example
<div class="uk-child-width-1-2@s" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body" style="z-index: 980;" uk-sticky="top: 200; bottom: #animation">Stick to the top but only after 200px scrolling</div>
    </div>
    <div>
        <div id="container-1" class="uk-background-muted uk-height-medium" style="margin-bottom: 200px;">
            <div class="uk-card uk-card-default uk-card-body" style="z-index: 980;" uk-sticky="top: #container-1; bottom: #animation">Stick to the top but below the box</div>
        </div>
    </div>
</div>
```

***

## 动画

为再次显示的附着元素添加平滑的[动画](animation.md)效果。

```html
<div uk-sticky="animation: uk-animation-slide-top"></div>
```

```example
<div class="uk-card uk-card-default uk-card-body" style="margin-bottom: 200px; z-index: 980;" uk-sticky="top: 100; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">Animation Slide Top</div>
```

***

## 向上滚动时的附着

使附着元素只在向上滚动使显示。带上动画效果可以带来更平滑的体验。

```html
<div uk-sticky="show-on-up: true"></div>
```

```example
<div class="uk-card uk-card-default uk-card-body" style="margin-bottom: 200px; z-index: 980;" uk-sticky="show-on-up: true; animation: uk-animation-slide-top; bottom: #bottom">Slide in on scroll up</div>
```

***

## Bottom

将附着行为绑定到指定的元素，在页面滚过该元素后，不再显示附着的元素。

```html
<!-- Sticks until the bottom of its parent container -->
<div>
    <div uk-sticky="bottom: true"></div>
</div>

<!-- Sticks until the second container -->
<div uk-sticky="bottom: #my-id"></div>
<div id="my-id"></div>
```

```example
<div class="uk-child-width-1-2@s" uk-grid>
    <div>
        <div class="uk-background-muted uk-height-medium">
            <div class="uk-height-medium uk-background-muted">
                <div class="uk-card uk-card-default uk-card-body" style="z-index: 980;" uk-sticky="bottom: true">Stick until the bottom of its parent container</div>
            </div>
        </div>
    </div>
    <div>
        <div>
            <div class="uk-card uk-card-default uk-card-body" style="z-index: 980;" uk-sticky="bottom: #container-2">Stick until the next headline</div>
        </div>
    </div>
</div>

<h3 id="container-2">Some Headline</h3>

```

***

## 响应式

可以通过在`uk-sticky`属性上添加 `media`选项及适当的视口宽度的方式来实现在不同设备上禁用附着行为。该元素会在指定视口宽度以上的设备中带有附着效果，低于该宽度就没有咯。

```html
<div uk-sticky="media: 640"></div>
```

***

## 组件选项

可以在组件属性中使用以下选项，用分号隔开多个选项。 [Learn more](javascript.md#component-configuration)

| Option          | Value                                 | Default   | Description                                                                                                   |
|-----------------|---------------------------------------|-----------|---------------------------------------------------------------------------------------------------------------|
| `top`           | Number, viewport height, CSS selector | 0         | 元素开始附着的 top 偏移                                             |
| `bottom `       | Boolean, CSS selector                 | false     | 直到元素开始附着的 bottom 偏移。(true: 父元素，以“!”为前缀的父元素选择器) |
| `offset `       | Number                                | 0         | 附着元素的偏移量                                                               |
| `animation `    | String                                | false     | 元素开始附着时使用的动画   |
| `cls-active`    | String                                | uk-active | 元素附着时添加的 class                                                                                      |
| `cls-inactive`  | String                                | ''        | 元素未附着时添加的 class                                                                                  |
| `width-element` | CSS selector                          | false     | 附着模式下获取宽度的CSS选择器。  |
| `show-on-up`    | Boolean                               | false     | 只在向上滚动时显示附着的元素         |
| `media `        | Integer, String                       | false     | 激活状态所需的整型宽度条件，或CSS媒体查询 |
| `target `       | Boolean                               | false     | 确保附着元素不会在DOM就绪后通过位置 hash（location hash）越过目标元素。  |

***

## JavaScript

Learn more about [JavaScript components](javascript.md#programmatic-use).

### 初始化

```js
UIkit.sticky(element, options);
```

### 事件

These events will be triggered on elements with this component attached.

| Name | Description |
| --- | --- |
| `active` | 开始附着后触发      |
| `inactive` | 不再附着后触发   |
