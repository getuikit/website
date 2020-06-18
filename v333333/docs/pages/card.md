# 卡片

<p class="uk-text-lead">创建各式各样的布局块。</p>

## 用法

卡片组件由卡片自身、卡片主体和可选的卡片标题组成。典型地，卡片通常被放置在[网格](grid.md)列中。

| Class            | Description                                                                |
|------------------|----------------------------------------------------------------------------|
| `.uk-card`       | 添加到 `<div>` 元素，定义卡片组件 |
| `.uk-card-body`  | 添加此 class 到卡片中创建卡片与内容之间的 padding |
| `.uk-card-title` | 添加到标题元素中，定义卡片标题    |

```html
<div class="uk-card uk-card-body">
    <h3 class="uk-card-title"></h3>
</div>
```

默认情况下，卡片是空白的。因此，必须为它添加定义样式的修饰 class。在下面的例子中，我们使用了 `.uk-card-default` 。

```example
<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
    <h3 class="uk-card-title">Default</h3>
    <p>Lorem ipsum <a href="#">dolor</a> sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>
```

***

## 样式的修饰

UIkit 包含一系列可以为卡片添加特定样式的class。

| Class                | Description                                                                 |
|----------------------|-----------------------------------------------------------------------------|
| `.uk-card-default`   | 创建可见的卡片块           |
| `.uk-card-primary`   | 修饰卡片并为其添加一个醒目的强调色  |
| `.uk-card-secondary` | 修饰卡片并为其添加次级背景色彩  |

```html
<div class="uk-card uk-card-default"></div>

<div class="uk-card uk-card-primary"></div>

<div class="uk-card uk-card-secondary"></div>
```

```example
<div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title">Default</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-primary uk-card-body">
            <h3 class="uk-card-title">Primary</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-secondary uk-card-body">
            <h3 class="uk-card-title">Secondary</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </div>
</div>
```

***

## 鼠标经过修饰/Hover modifier

要在卡片上创建鼠标经过效果，需要使用 `.uk-card-hover` 这个 class。这会在使用锚文本时带来方便，并且可以与其他卡片修饰类一起使用。

```html
<div class="uk-card uk-card-hover"></div>
```

```example
<div class="uk-child-width-1-2@s uk-grid-match" uk-grid>
    <div>
        <div class="uk-card uk-card-hover uk-card-body">
            <h3 class="uk-card-title">Hover</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-hover uk-card-body">
            <h3 class="uk-card-title">Default</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light">
            <h3 class="uk-card-title">Primary</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-secondary uk-card-hover uk-card-body uk-light">
            <h3 class="uk-card-title">Secondary</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </div>
</div>
```

***

## 尺寸修饰

在卡片中使用不同的尺寸修饰类，使卡片的 padding 增大或减小。

| Class            | Description                                |
|------------------|--------------------------------------------|
| `.uk-card-small` | 添加此class应用较小的padding  |
| `.uk-card-large` | 添加此class应用交大的padding  |

```html
<div class="uk-card uk-card-small uk-card-default"></div>

<div class="uk-card uk-card-large uk-card-default"></div>
```

```example
<div class="uk-child-width-1-2@s" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-small uk-card-body">
            <h3 class="uk-card-title">Small</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-large uk-card-body">
            <h3 class="uk-card-title">Large</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
</div>
```

***

## 页眉与页脚

还可以卡片分为页眉、页脚和主体三部分。只需添加 `.uk-card-header` 和 `.uk-card-footer`到卡片内的 `<div>` 元素。

```html
<div class="uk-card">
    <div class="uk-card-header">
        <h3 class="uk-card-title"></h3>
    </div>
    <div class="uk-card-body"></div>
    <div class="uk-card-footer"></div>
</div>
```

```example
<div class="uk-card uk-card-default uk-width-1-2@m">
    <div class="uk-card-header">
        <div class="uk-grid-small uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
                <img class="uk-border-circle" width="40" height="40" src="../docs/images/avatar.jpg">
            </div>
            <div class="uk-width-expand">
                <h3 class="uk-card-title uk-margin-remove-bottom">Title</h3>
                <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">April 01, 2016</time></p>
            </div>
        </div>
    </div>
    <div class="uk-card-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
    </div>
    <div class="uk-card-footer">
        <a href="#" class="uk-button uk-button-text">Read more</a>
    </div>
</div>
```

***

## 媒体

要在卡片中无边框地显示图片，需要为包裹图片的`<div>`元素添加下面这些 class 中任意一个。注意啦，你还需要调整代码的顺序才行。

| Class                  | Description                                                           |
|------------------------|-----------------------------------------------------------------------|
| `.uk-card-media-top`   | 媒体元素对齐到顶部 |
| `.uk-card-media-bottom`| 媒体元素对齐到底部 |
| `.uk-card-media-left`  | 媒体元素对齐到左侧 |
| `.uk-card-media-right` | 媒体元素对齐到右侧 |

```html
<div class="uk-card uk-card-default">
    <div class="uk-card-media-top">
        <img src="" alt="">
    </div>
    <div class="uk-card-body"></div>
</div>
```

```example
<div class="uk-child-width-1-2@m" uk-grid>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
                <img src="../docs/images/light.jpg" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">Media Top</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-body">
                <h3 class="uk-card-title">Media Bottom</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
            </div>
            <div class="uk-card-media-bottom">
                <img src="../docs/images/light.jpg" alt="">
            </div>
        </div>
    </div>
</div>
```

***

### 水平对齐

`.uk-card-media-left` 或者 `.uk-card-media-right` 能够在必要的时候重置边框半径等效果。但是，并不会创建实际的布局效果。

为此，例如你要添加[覆盖](cover.md) 中的　`.uk-cover-container` class。为图片元素添加　`uk-cover` 属性，还要使用[网格](grid.md)和[宽度](width.md)组件来实现对齐效果。以图片元素的尺寸创建一个`<canvas>`元素，如果网格在较小的视口中堆叠，也会会保持尺寸比例。这是创建并排布局的一种方式。

```html
<div class="uk-card uk-card-default uk-child-width-1-2" uk-grid>
    <div class="uk-card-media-left uk-cover-container">
        <img src="" alt="" uk-cover>
        <canvas width="" height=""></canvas>
    </div>
    <div>
        <div class="uk-card-body"></div>
    </div>
</div>
```

```example
<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
    <div class="uk-card-media-left uk-cover-container">
        <img src="../docs/images/light.jpg" alt="" uk-cover>
        <canvas width="600" height="400"></canvas>
    </div>
    <div>
        <div class="uk-card-body">
            <h3 class="uk-card-title">Media Left</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div>
    </div>
</div>

<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
    <div class="uk-flex-last@s uk-card-media-right uk-cover-container">
        <img src="../docs/images/light.jpg" alt="" uk-cover>
        <canvas width="600" height="400"></canvas>
    </div>
    <div>
        <div class="uk-card-body">
            <h3 class="uk-card-title">Media Right</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div>
    </div>
</div>
```

***

## 徽章

要在卡片中定位一个徽章，需要为容器元素添加　`.uk-card-badge` class。要为徽章定义样式，可以使用其他的组件，比如 [标注组件](label.md).

```html
<div class="uk-card uk-card-body">
    <div class="uk-card-badge uk-label"></div>
</div>
```

```example
<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
    <div class="uk-card-badge uk-label">Badge</div>
    <h3 class="uk-card-title">Title</h3>
    <p>Lorem ipsum color sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>
```
