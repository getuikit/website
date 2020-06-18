# 定位

<p class="uk-text-lead">用于定位内容的一些效果。</p>

## 用法

在块元素中添加 `.uk-position-*` class 就能使用此组件。在图片上方使用此组件来定位内容时，需要为该图片和内容的父容器添加[效果](utility.md#inline)中的 `.uk-inline` class 以创建定位 context。

**Note** 常用语定位[遮罩](overlay.md)。使用[反相](inverse.md)中的 `.uk-light` 或 `.uk-dark` class 优化深色/浅色背景上的可见性。

| Class                        | Description                                              |
|------------------------------|----------------------------------------------------------|
| `.uk-position-top`           | 定位到顶部                     |
| `.uk-position-left`          | 定位到左侧              |
| `.uk-position-right`         | 定位到右侧                   |
| `.uk-position-bottom`        | 定位到底部                   |

```html
<div class="uk-inline">

    <!-- Place any content, like an image, here -->

    <div class="uk-position-center"></div>

</div>
```

```example
<div class="uk-inline uk-margin">

    <img src="../docs/images/photo.jpg" alt="">

    <div class="uk-position-top uk-overlay uk-overlay-default uk-text-center">Top</div>
    <div class="uk-position-bottom uk-overlay uk-overlay-default uk-text-center">Bottom</div>
    <div class="uk-position-left uk-overlay uk-overlay-default uk-flex uk-flex-middle">Left</div>
    <div class="uk-position-right uk-overlay uk-overlay-default uk-flex uk-flex-middle">Right</div>

</div>
```

***

### 更多的定位效果

以下 class 可以带来更多的定位效果。

| Class                        | Description                                              |
|------------------------------|----------------------------------------------------------|
| `.uk-position-top-left`      | 左上角          |
| `.uk-position-top-center`    | 顶部中间            |
| `.uk-position-top-right`     | 右上角          |
| `.uk-position-center`        | 在正中间垂直居中    |
| `.uk-position-center-left`   | 在左侧垂直居中    |
| `.uk-position-center-right`  | 在右侧垂直居中  |
| `.uk-position-bottom-left`   | 左下角          |
| `.uk-position-bottom-center` | 底部中间     |
| `.uk-position-bottom-right`  | 右下角        |


```html
<div class="uk-top-right"></div>
```

```example
<div class="uk-inline">

    <img src="../docs/images/photo.jpg" alt="">

    <div class="uk-position-top-left uk-overlay uk-overlay-default">Top Left</div>
    <div class="uk-position-top-center uk-overlay uk-overlay-default">Top Center</div>
    <div class="uk-position-top-right uk-overlay uk-overlay-default">Top Right</div>
    <div class="uk-position-center-left uk-overlay uk-overlay-default">Center Left</div>
    <div class="uk-position-center uk-overlay uk-overlay-default">Center</div>
    <div class="uk-position-center-right uk-overlay uk-overlay-default">Center Right</div>
    <div class="uk-position-bottom-left uk-overlay uk-overlay-default">Bottom Left</div>
    <div class="uk-position-bottom-center uk-overlay uk-overlay-default">Bottom Center</div>
    <div class="uk-position-bottom-right uk-overlay uk-overlay-default">Bottom Right</div>

</div>
```

***

### 覆盖

如果想要用定位的元素覆盖它的容器，需要添加 `.uk-position-cover` class。


```html
<div class="uk-position-cover"></div>
```

```example
<div class="uk-inline uk-margin">

    <img src="../docs/images/photo.jpg" alt="">

    <div class="uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">Cover</div>

</div>
```

***

## 小型 margin

想要为定位的元素应用较小的 margin，需要添加 `.uk-position-small` class。

```html
<div class="uk-position-small uk-position-center"></div>
```

```example
<div class="uk-inline uk-margin">

    <img src="../docs/images/photo.jpg" alt="">

    <div class="uk-position-small uk-position-top-left uk-overlay uk-overlay-default">Top Left</div>
    <div class="uk-position-small uk-position-top-center uk-overlay uk-overlay-default">Top Center</div>
    <div class="uk-position-small uk-position-top-right uk-overlay uk-overlay-default">Top Right</div>
    <div class="uk-position-small uk-position-center-left uk-overlay uk-overlay-default">Center Left</div>
    <div class="uk-position-small uk-position-center uk-overlay uk-overlay-default">Center</div>
    <div class="uk-position-small uk-position-center-right uk-overlay uk-overlay-default">Center Right</div>
    <div class="uk-position-small uk-position-bottom-left uk-overlay uk-overlay-default">Bottom Left</div>
    <div class="uk-position-small uk-position-bottom-center uk-overlay uk-overlay-default">Bottom Center</div>
    <div class="uk-position-small uk-position-bottom-right uk-overlay uk-overlay-default">Bottom Right</div>

</div>

<div class="uk-inline uk-margin">

    <img src="../docs/images/photo.jpg" alt="">

    <div class="uk-position-small uk-position-top uk-overlay uk-overlay-default uk-text-center">Top</div>
    <div class="uk-position-small uk-position-bottom uk-overlay uk-overlay-default uk-text-center">Bottom</div>
    <div class="uk-position-small uk-position-left uk-overlay uk-overlay-default uk-flex uk-flex-middle">Left</div>
    <div class="uk-position-small uk-position-right uk-overlay uk-overlay-default uk-flex uk-flex-middle">Right</div>

</div>

<div class="uk-inline uk-margin">

    <img src="../docs/images/photo.jpg" alt="">

    <div class="uk-position-small uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">Cover</div>

</div>
```

***

## 中等 margin

想要为定位的元素应用稍微大点的 margin，需要添加 `.uk-position-medium` class。

```html
<div class="uk-position-medium uk-position-center"></div>
```

```example
<div class="uk-inline uk-margin">

    <img src="../docs/images/photo.jpg" alt="">

    <div class="uk-position-medium uk-position-top-left uk-overlay uk-overlay-default">Top Left</div>
    <div class="uk-position-medium uk-position-top-center uk-overlay uk-overlay-default">Top Center</div>
    <div class="uk-position-medium uk-position-top-right uk-overlay uk-overlay-default">Top Right</div>
    <div class="uk-position-medium uk-position-center-left uk-overlay uk-overlay-default">Center Left</div>
    <div class="uk-position-medium uk-position-center uk-overlay uk-overlay-default">Center</div>
    <div class="uk-position-medium uk-position-center-right uk-overlay uk-overlay-default">Center Right</div>
    <div class="uk-position-medium uk-position-bottom-left uk-overlay uk-overlay-default">Bottom Left</div>
    <div class="uk-position-medium uk-position-bottom-center uk-overlay uk-overlay-default">Bottom Center</div>
    <div class="uk-position-medium uk-position-bottom-right uk-overlay uk-overlay-default">Bottom Right</div>

</div>

<div class="uk-inline uk-margin">

    <img src="../docs/images/photo.jpg" alt="">

    <div class="uk-position-medium uk-position-top uk-overlay uk-overlay-default uk-text-center">Top</div>
    <div class="uk-position-medium uk-position-bottom uk-overlay uk-overlay-default uk-text-center">Bottom</div>
    <div class="uk-position-medium uk-position-left uk-overlay uk-overlay-default uk-flex uk-flex-middle">Left</div>
    <div class="uk-position-medium uk-position-right uk-overlay uk-overlay-default uk-flex uk-flex-middle">Right</div>

</div>

<div class="uk-inline uk-margin">

    <img src="../docs/images/photo.jpg" alt="">

    <div class="uk-position-medium uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">Cover</div>

</div>
```

***

## 一些效果

这里是此组件的一些常见效果：

| Class                   | Description                                   |
|-------------------------|-----------------------------------------------|
| `.uk-position-relative` | 相对定位   |
| `.uk-position-absolute` | 绝对定位  |
| `.uk-position-fixed`    | 固定位置   |
| `.uk-position-z-index`  | z-index 加 1s  |
