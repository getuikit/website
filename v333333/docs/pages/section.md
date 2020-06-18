# 区段

<p class="uk-text-lead">创建带有各种背景颜色和样式的水平布局的区段（section）。</p>

## 用法

区段（section）用于将页面的内容分拆到带有各种样式的块中。在容器元素上添加 `.uk-section` class 即可使用此组件。可以使用[容器组件](container.md)来调整区段中内容的宽度并添加水平方向的 padding。注意，嵌套容器的 padding 会被重置。

```html
<div class="uk-section">
    <div class="uk-container"></div>
</div>
```

默认情况下，区段是空白的。所以必须为它添加一个修饰样式。在例子中我们使用了 `.uk-section-muted` class。通常情况下，区段是页面的最外层元素，所以这个例子并不能完全展示该组件的实际用法。

```example
<div class="uk-section uk-section-muted">
    <div class="uk-container">

        <h3>Section</h3>

        <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
        </div>

    </div>
</div>
```

***

## 样式修饰

使用以下 class 应用各种背景色彩和 padding。

| Class                   | Description                                                  |
|-------------------------|--------------------------------------------------------------|
| `.uk-section-default`   | 添加网站的默认背景色彩             |
| `.uk-section-muted`     | 添加淡化的背景色彩                          |
| `.uk-section-primary`   | 添加醒目的背景色彩                        |
| `.uk-section-secondary` | 添加次级背景色彩                     |
| `.uk-section-media`     | 如果区段有自定义背景图片，就使用这个      |

```html
<div class="uk-section uk-section-primary"></div>
```

```example
<div class="uk-section uk-section-default">
    <div class="uk-container">

        <h3>Section Default</h3>

        <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
        </div>

    </div>
</div>

<div class="uk-section uk-section-muted">
    <div class="uk-container">

        <h3>Section Muted</h3>

        <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
        </div>

    </div>
</div>

<div class="uk-section uk-section-primary uk-light">
    <div class="uk-container">

        <h3>Section Primary</h3>

        <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
        </div>

    </div>
</div>

<div class="uk-section uk-section-secondary uk-light">
    <div class="uk-container">

        <h3>Section Secondary</h3>

        <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
        </div>

    </div>
</div>

<div class="uk-section uk-section-media uk-light uk-background-cover" style="background-image: url(../docs/images/dark.jpg)">
    <div class="uk-container">

        <h3>Section Media</h3>

        <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
        </div>
    </div>
</div>
```

***

### 维持原有颜色

`.uk-section-primary` 和 `.uk-section-secondary` 这两个 class 自动地扩展了[反相组件](inverse.md)的反相样式。如果要避免此行为，比如你在区段中使用了[卡片](cards.md)，可以添加`.uk-preserve-color` class。

```html
<div class="uk-section uk-section-primary uk-preserve-color"></div>
```

```example
<div class="uk-section uk-section-primary uk-preserve-color">
    <div class="uk-container">

        <div class="uk-panel uk-light uk-margin-medium">
            <h3>Section Primary with cards</h3>
        </div>

        <div class="uk-grid-match uk-child-width-expand@m" uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>

    </div>
</div>
```

***

## 尺寸修改

为区段添加不同尺寸的 padding，或者干脆删掉 padding。

| Class                         | Description                                                                            |
|-------------------------------|----------------------------------------------------------------------------------------|
| `.uk-section-xsmall`          | 将区段的 padding 缩到最小                         |
| `.uk-section-small`           | 将区段的 padding 缩小一些                      |
| `.uk-section-large`           | 将区段的 padding 增大                                |
| `.uk-section-xlarge`          | 将区段的 padding 增大许多               |
| `.uk-padding-remove-vertical` | 来源于[Padding 组件](padding.md)，移除区段的 padding       |
>>>>>>> Stashed changes

```example
<div class="uk-section uk-section-large uk-section-muted">
    <div class="uk-container">

        <h3>Section Large</h3>

        <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
        </div>
    </div>
</div>
```

***

## 重叠修饰

某些 UIkit 主题使用了丰富的样式，包括纹理背景和边框等。在此情况下，可以添加 `.uk-section-overlap` class 在区段上应用边框图片，以及在下一个区段上应用负数偏移。注意这只能在该区段后面还有其他区段时,才能实现此特性。

```html
<div class="uk-section uk-section-overlap"></div>
```