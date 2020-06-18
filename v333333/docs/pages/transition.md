# 过渡效果

<p class="uk-text-lead">创建鼠标经过时，元素在两种状态间平滑的过渡效果。</p>

## 用法

要使用此组件，需要为父元素添加 `.uk-transition-toggle` class。这将使得元素在鼠标经过时触发渐变效果。

添加一个 `.uk-transition-*` 到元素自身，以应用实际的效果。

此组件主要和[遮罩组件](overlay.md)搭配使用，以实现元素从不可见到可见状态的过渡效果。使用[定位组件](position.md)将这招层方式在图片之类的其他元素上方。

```html
<div class="uk-transition-toggle">
    <div class="uk-transition-fade"></div>
</div>
```

| Class | Description |
| --- | --- |
| `.uk-transition-fade` | 元素的淡入效果 |
| `.uk-transition-scale-up`<br> `.uk-transition-scale-down` | 元素的缩放效果 |
| `.uk-transition-slide-top`<br> `.uk-transition-slide-bottom`<br> `.uk-transition-slide-left`<br> `.uk-transition-slide-right` | 元素从顶部滑入  |
| `.uk-transition-slide-top-small`<br> `.uk-transition-slide-bottom-small`<br>  `.uk-transition-slide-left-small`<br> `.uk-transition-slide-right-small` | 元素从顶部、底部、左侧或右侧带有一个小距离地滑入 |
| `.uk-transition-slide-top-medium`<br> `.uk-transition-slide-bottom-medium`<br>  `.uk-transition-slide-left-medium`<br> `.uk-transition-slide-right-medium`   | 元素从顶部、底部、左侧或右侧带有一个中等距离地滑入 |

```example
<div class="uk-child-width-1-2 uk-child-width-1-3@s uk-grid-match uk-grid-small" uk-grid>
    <div class="uk-text-center">
        <div class="uk-inline-clip uk-transition-toggle">
            <img src="../docs/images/dark.jpg" alt="">
            <div class="uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                <p class="uk-h4 uk-margin-remove">Fade</p>
            </div>
        </div>
        <p class="uk-margin-small-top">Fade</p>
    </div>
    <div class="uk-text-center">
        <div class="uk-inline-clip uk-transition-toggle">
            <img src="../docs/images/dark.jpg" alt="">
            <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
                <p class="uk-h4 uk-margin-remove">Bottom</p>
            </div>
        </div>
        <p class="uk-margin-small-top">Bottom</p>
    </div>
    <div class="uk-text-center">
        <div class="uk-inline-clip uk-transition-toggle uk-light">
            <img src="../docs/images/dark.jpg" alt="">
            <div class="uk-position-center">
                <span class="uk-transition-fade" uk-icon="icon: plus; ratio: 2"></span>
            </div>
        </div>
        <p class="uk-margin-small-top">Icon</p>
    </div>
    <div class="uk-text-center">
        <div class="uk-inline-clip uk-transition-toggle">
            <img src="images/dark.jpg" alt="">
            <img class="uk-transition-scale-up uk-position-cover" src="images/light.jpg" alt="">
        </div>
        <p class="uk-margin-small-top">2 Images</p>
    </div>
    <div class="uk-text-center">
        <div class="uk-inline-clip uk-transition-toggle">
            <img class="uk-transition-scale-up uk-transition-opaque" src="../docs/images/dark.jpg" alt="">
        </div>
        <p class="uk-margin-small-top">Scale Up Image</p>
    </div>
    <div class="uk-text-center">
        <div class="uk-inline-clip uk-transition-toggle uk-light">
            <img src="../docs/images/dark.jpg" alt="">
            <div class="uk-position-center">
                <div class="uk-transition-slide-top-small"><h4 class="uk-margin-remove">Headline</h4></div>
                <div class="uk-transition-slide-bottom-small"><h4 class="uk-margin-remove">Subheadline</h4></div>
            </div>
        </div>
        <p class="uk-margin-small-top">Small Top + Bottom</p>
    </div>
</div>
```