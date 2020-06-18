# 动画

<p class="uk-text-lead">一些可以流畅运行在你的页面中的简单动画。</p>

## 用法

添加一个 `.uk-animation-*` class 到任意元素。class被添加时就会显示动画，所以在页面加载之后就会立即生效。要使动画在另一个时间点才显示，比如在元素进入视口时，你需要添加使用了 JavaScript 的class，例如[滚动监听组件](scrollspy.md)。这是 UIkit 的多数组件使用动画的方式。所有动画本身都是用 CSS 实现的，不需要使用 JavaScript来播放。

| Class | Description |
| --- | --- |
| `.uk-animation-fade` | 元素的淡入效果 |
| `.uk-animation-scale-up`<br> `.uk-animation-scale-down` | 元素的缩放效果 |
| `.uk-animation-slide-top`<br> `.uk-animation-slide-bottom`  `.uk-animation-slide-left`<br> `.uk-animation-slide-right` | 元素基于它的高度或宽度从顶部、底部、左侧或右侧淡入并滑入。 |
| `.uk-animation-slide-top-small`<br> `.uk-animation-slide-bottom-small`   `.uk-animation-slide-left-small`<br> `.uk-animation-slide-right-small` | 元素从顶部、底部、左侧或右侧淡入并滑入，并带有固定像素值的较小距离。  |
| `.uk-animation-slide-top-medium`<br> `.uk-animation-slide-bottom-medium`  `.uk-animation-slide-left-medium`<br> `.uk-animation-slide-right-medium` | 元素从顶部、底部、左侧或右侧淡入并滑入，并带有固定像素值的中等距离。 |
| `.uk-animation-kenburns` | 元素不带淡入效果缓慢地缩放 |
| `.uk-animation-shake` | 元素抖动 |


```html
<div class="uk-animation-toggle">
    <div class="uk-animation-fade"></div>
</div>
```

```example
<div class="uk-child-width-1-2 uk-child-width-1-4@s uk-grid-match" uk-grid>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-fade">
            <p class="uk-text-center">Fade</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-scale-up">
            <p class="uk-text-center">Scale Up</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-scale-down">
            <p class="uk-text-center">Scale Down</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-shake">
            <p class="uk-text-center">Shake</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-slide-left">
            <p class="uk-text-center">Left</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-slide-top">
            <p class="uk-text-center">Top</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-slide-bottom">
            <p class="uk-text-center">Bottom</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-slide-right">
            <p class="uk-text-center">Right</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-slide-left-small">
            <p class="uk-text-center">Left Small</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-slide-top-small">
            <p class="uk-text-center">Top Small</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-slide-bottom-small">
            <p class="uk-text-center">Bottom Small</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-slide-right-small">
            <p class="uk-text-center">Right Small</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-slide-left-medium">
            <p class="uk-text-center">Left Medium</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-slide-top-medium">
            <p class="uk-text-center">Top Medium</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-slide-bottom-medium">
            <p class="uk-text-center">Bottom Medium</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-slide-right-medium">
            <p class="uk-text-center">Right Medium</p>
        </div>
    </div>
</div>
```

要使用鼠标经过效果，添加 `.uk-animation-toggle` class 到父元素。这会在元素被鼠标经过时触发。 

***

## 方向动画 

默认地，所有动画都是元素出现的效果。要把动画反向，比如元素消失的效果，添加 `.uk-animation-reverse` class。

```html
<div class="uk-animation-fade uk-animation-reverse"></div>
```

```example
<div class="uk-child-width-1-2 uk-child-width-1-4@s uk-grid-match" uk-grid>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-fade uk-animation-reverse">
            <p class="uk-text-center">Fade</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-scale-up uk-animation-reverse">
            <p class="uk-text-center">Scale Up</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-scale-down uk-animation-reverse">
            <p class="uk-text-center">Scale Down</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-shake uk-animation-reverse">
            <p class="uk-text-center">Shake</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-slide-left uk-animation-reverse">
            <p class="uk-text-center">Left</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-slide-top uk-animation-reverse">
            <p class="uk-text-center">Top</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-slide-bottom uk-animation-reverse">
            <p class="uk-text-center">Bottom</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-slide-right uk-animation-reverse">
            <p class="uk-text-center">Right</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-slide-left-small uk-animation-reverse">
            <p class="uk-text-center">Left Small</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-slide-top-small uk-animation-reverse">
            <p class="uk-text-center">Top Small</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-slide-bottom-small uk-animation-reverse">
            <p class="uk-text-center">Bottom Small</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-slide-right-small uk-animation-reverse">
            <p class="uk-text-center">Right Small</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-slide-left-medium uk-animation-reverse">
            <p class="uk-text-center">Left Medium</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-slide-top-medium uk-animation-reverse">
            <p class="uk-text-center">Top Medium</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-slide-bottom-medium uk-animation-reverse">
            <p class="uk-text-center">Bottom Medium</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-slide-right-medium uk-animation-reverse">
            <p class="uk-text-center">Right Medium</p>
        </div>
    </div>
</div>
```

***

## 快速动画

要以更快的速度播放动画，添加 `.uk-animation-fast` 类到元素中。 

```html
<div class="uk-animation-fade uk-animation-fast"></div>
```


```example
<div class="uk-width-1-3@s">
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-fast uk-animation-fade">
            <p class="uk-text-center">Fade</p>
        </div>
    </div>
</div>
```

***

## 动画起点

默认情况下，缩放动画的源头是中间。修改这个行为，添加一个[实用效果组件](utility.md#transform-origin)中的 `.uk-transform-origin-*` class就行。

```html
<div class="uk-animation-scale-up uk-transform-origin-bottom-right"></div>
```

```example
<div class="uk-child-width-1-3@s" uk-grid>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-scale-up uk-transform-origin-bottom-right">
            <p class="uk-text-center">Bottom Right</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-scale-up uk-transform-origin-top-center">
            <p class="uk-text-center">Top Center</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-card uk-card-default uk-card-body uk-animation-scale-up uk-transform-origin-bottom-center">
            <p class="uk-text-center">Bottom Center</p>
        </div>
    </div>
</div>
```

***

## Ken Burns

要添加简单的 Ken Burns 效果，需要为图片添加 `.uk-animation-kenburns` 类。还可以使用 `.uk-animation-reverse` 或 `.uk-transform-origin-*`来修改效果。

```html
<img class="uk-animation-kenburns" src="" alt="">
```

默认情况下动画在页面加载后就开始播放。在这个例子中我们用到了[滚动监听](scrollspy.md)组件，这样图片在进入视口时触发动画效果。

```example
<div class="uk-child-width-1-2@s uk-grid-small" uk-grid>
    <div>
        <div class="uk-overflow-hidden">
            <img src="../docs/images/dark.jpg" alt="Example image" uk-scrollspy="cls: uk-animation-kenburns; repeat: true">
        </div>
    </div>
    <div>
        <div class="uk-overflow-hidden">
            <img src="../docs/images/dark.jpg" alt="Example image" class="uk-animation-reverse uk-transform-origin-top-right" uk-scrollspy="cls: uk-animation-kenburns; repeat: true">
        </div>
    </div>
</div>
```
