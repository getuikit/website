# 覆盖

<p class="uk-text-lead">扩展图片、视频或者iframe，使之覆盖整个容器，并且可以在它上面添加内容。</p>

## 用法

使图片覆盖它的父元素，要为父元素添加 `.uk-cover-container` class，并为图片添加 `uk-cover` 属性。

```html
<div class="uk-cover-container">
    <img src="" alt="" uk-cover>
</div>
```

**Note** 要在覆盖的元素上定位内容，使用[定位组件](position.md)。要使内容具有更好的可见性，添加[反相组件](inverse.md)中的 `.uk-light` 或 `.uk-dark` class。

```example
<div class="uk-cover-container uk-height-medium">
    <img src="../docs/images/dark.jpg" alt="" uk-cover>
</div>
```

***

## 视频

创建覆盖父容器的视频，要为视频添加 `uk-cover` 属性。为使用添加带有 `.uk-cover-container` class的容器元素，以裁剪它的内容。

```html
<div class="uk-cover-container">
    <video uk-cover></video>
</div>
```

```example
<div class="uk-cover-container uk-height-medium">
    <video uk-cover autoplay loop muted>
        <source src="//www.quirksmode.org/html5/videos/big_buck_bunny.mp4?test1" type="video/mp4">
        <source src="//www.quirksmode.org/html5/videos/big_buck_bunny.ogv?test1" type="video/ogg">
    </video>
</div>
```

***

## Iframe

要在 iframe 上使用覆盖组件，必须为 iframe 添加 `uk-cover` 属性。为包含 iframe 的元素添加 `.uk-cover-container` class，用来裁剪它的内容。

```html
<div class="uk-cover-container">
    <iframe src="" uk-cover></iframe>
</div>
```

```example
<div class="uk-cover-container uk-height-medium">
    <iframe src="//www.youtube.com/embed/YE7VzlLtp-4?autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;loop=1&amp;modestbranding=1&amp;wmode=transparent" width="560" height="315" frameborder="0" allowfullscreen uk-cover></iframe>
</div>
```

***

## 响应式高度

要为覆盖的图片添加响应式行为，必须创建一个隐形的 `<canvas>` 元素，并根据需要覆盖的区域的长宽比，为canvas指定 `width` 和 `height` 数值。这样就使得图片具有响应式行为了。

```html
<div class="uk-cover-container">
    <canvas width="" height=""></canvas>
    <video uk-cover></video>
</div>
```

```example
<div class="uk-cover-container">
    <canvas width="400" height="200"></canvas>
    <img uk-cover src="../docs/images/dark.jpg" alt="">
</div>
```

***

## 视口高度

添加[效果](utility.md)组件中的 `.uk-height-viewport` class，将会拉伸父元素的高度填满整个视口。

```html
<div class="uk-cover-container" uk-height-viewport>
    <img src="" alt="" uk-cover>
</div>
```

***

## 组建选项

可以为组件的属性添加一下选项。用分号隔开多个选项。[Learn more](javascript.md#component-configuration)

| Option | Value | Default | Description |
| --- | --- | --- | --- |
| `automute` | Boolean | true | 尝试静音iframe的视频 |
| `width` | Number | undefined | 元素的宽度 |
| `height` | Number | undefined | 元素的高度|

***

## JavaScript

Learn more about [JavaScript components](javascript.md#programmatic-use).

### 初始化

```js
UIkit.cover(element, options);
```
