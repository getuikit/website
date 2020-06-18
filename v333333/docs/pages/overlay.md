# 遮罩

<p class="uk-text-lead">创建拥有各种样式的图片遮罩效果。</p>

## Usage

在紧跟图片的元素上添加`.uk-overlay`创建遮罩面板。在图片和遮罩面板的共同父容器上添加 `.uk-inline` class ，然后使用[定位组件](position.md)中的`.uk-position-*` class 对齐遮罩。

```html
<div class="uk-inline">
    <img src="" alt="">
    <div class="uk-overlay uk-position-bottom"></div>
</div>
```

**Note** 使用 `.uk-light` 或 `.uk-dark` class 在深色和亮色图片上优化可见效果。

```example
<div class="uk-inline">
    <img src="../docs/images/photo.jpg" alt="">
    <div class="uk-overlay uk-light uk-position-bottom">
        <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
</div>
```

***

## 样式的修饰

默认情况下，遮罩是有 padding的，但没有其他样式。使用以下 class 为遮罩添加背景颜色。

### 默认

添加`.uk-overlay-default` class 来使用默认背景颜色。

```example
<div class="uk-inline">
    <img src="../docs/images/photo.jpg" alt="">
    <div class="uk-overlay uk-overlay-default uk-position-bottom">
        <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
</div>
```

***

### 强调

添加`.uk-overlay-primary` class 来使用醒目的背景颜色。

```example
<div class="uk-inline">
    <img src="../docs/images/photo.jpg" alt="">
    <div class="uk-overlay uk-overlay-primary uk-position-bottom">
        <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
</div>
```

***

## 遮罩层上的图标

要显示一个遮罩图标，需要将 `uk-overlay-icon` 属性添加到遮罩组件内部的 `<span>` 元素。

```html
<div class="uk-position-center">
    <span uk-overlay-icon></span>
</div>
```

```example
<div class="uk-inline uk-light">
    <img src="../docs/images/dark.jpg" alt="">
    <div class="uk-position-center">
        <span uk-overlay-icon></span>
    </div>
</div>
```

***

## 定位

使用[定位组件](position.md)中的`.uk-position-*` class 来对齐遮罩。

```html
<div class="uk-overlay uk-position-top"></div>
```

```example
<div class="uk-child-width-1-2@m" uk-grid>
    <div>
        <div class="uk-inline">
            <img src="../docs/images/photo.jpg" alt="">
            <div class="uk-overlay uk-overlay-default uk-position-top">
                <p>Top</p>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-inline">
            <img src="../docs/images/photo.jpg" alt="">
            <div class="uk-overlay uk-overlay-default uk-position-center">
                <p>Center</p>
            </div>
        </div>
    </div>
</div>
```
