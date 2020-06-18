# 滑动导航

<p class="uk-text-lead">创建带有上一个和下一个按钮的导航，用来浏览幻灯片。</p>

## 用法

创建带有上一个和下一个按钮的导航，需要 `<a>` 元素上添加 `uk-slidenav` 属性。然后在属性上添加 `previous` 或`next` 参数来定义上一页、下一页按钮。

```html
<a href="" uk-slidenav-next></a>
<a href="" uk-slidenav-previous></a>
```

```example
<a href="#" uk-slidenav-previous></a>
<a href="#" uk-slidenav-next></a>
```

***

## 尺寸放大

增大滑动导航图标的尺寸，需要添加 `.uk-slidenav-large` class。

```html
<a href="" class="uk-slidenav-large" uk-slidenav-next></a>
<a href="" class="uk-slidenav-large" uk-slidenav-previous></a>
```

```example
<a href="#" class="uk-slidenav-large" uk-slidenav-previous></a>
<a href="#" class="uk-slidenav-large" uk-slidenav-next></a>
```

***

## 在图片上的定位

在图片或其他行内元素上方定位滑动导航，需要添加[定位组件](position.md)中的 `.uk-position-*` class。要创建带有定位 context 的相同尺寸的容器，只需将导航和内容放在一个容器元素中，并添加[效果组件](utility.md#inline)中的 `.uk-inline` class。

使用[反相组件](inverse.md)中的 `.uk-light` 或 `.uk-dark` 来增强亮色/暗色背景上的可见性。

```html
<div class="uk-inline uk-light">
    <img src="" alt="">
    <a class="uk-position-center-left" href="" uk-slidenav-previous></a>
    <a class="uk-position-center-right" href="" uk-slidenav-next></a>
</div>
```

**Note** 还可以使用[可见性组件](visibility.md)，使滑动导航只在鼠标经过（hover）时显示。

```example
<div class="uk-child-width-1-2@s uk-grid-small" uk-grid>
    <div>
        <div class="uk-inline uk-visible-toggle uk-light">
            <img src="../docs/images/dark.jpg" alt="">
            <a class="uk-position-center-left uk-position-small uk-hidden-hover uk-slidenav-large" href="#" uk-slidenav-previous></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover uk-slidenav-large" href="#" uk-slidenav-next></a>
        </div>
    </div>
    <div>
        <div class="uk-inline uk-visible-toggle">
            <img src="../docs/images/light.jpg" alt="">
            <a class="uk-position-center-left uk-position-small uk-hidden-hover uk-slidenav-large" href="#" uk-slidenav-previous></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover uk-slidenav-large" href="#" uk-slidenav-next></a>
        </div>
    </div>
</div>
```

***

## 滑动导航容器

要显示相连的滑动导航，需要将滑动导航放在一个 `<div>` 元素中，并添加 `.uk-slidenav-container` class，以及一个 `.uk-position-*` class。

```html
<div class="uk-inline">
    <img src="" alt="">
    <div class="uk-slidenav-container uk-position-bottom-right">
        <a href="" uk-slidenav-previous></a>
        <a href="" uk-slidenav-next></a>
    </div>
</div>
```

```example
<div class="uk-child-width-1-2@s uk-grid-small" uk-grid>
    <div>
        <div class="uk-inline uk-light">
            <img src="../docs/images/dark.jpg" alt="">
            <div class="uk-slidenav-container uk-position-top-left uk-position-small">
                <a class="uk-slidenav-large" href="#" uk-slidenav-previous></a>
                <a class="uk-slidenav-large" href="#" uk-slidenav-next></a>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-inline">
            <img src="../docs/images/light.jpg" alt="">
            <div class="uk-slidenav-container uk-position-bottom-right uk-position-small">
                <a class="uk-slidenav-large" href="#" uk-slidenav-previous></a>
                <a class="uk-slidenav-large" href="#" uk-slidenav-next></a>
            </div>
        </div>
    </div>
</div>
```
