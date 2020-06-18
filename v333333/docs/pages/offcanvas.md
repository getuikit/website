# 抽屉

<p class="uk-text-lead">创建可以滑入滑出页面的抽屉边栏。</p>

## 用法

将 `uk-offcanvas`属性添加到父级`<div>`元素，并在其子级`<div>`上添加 `.uk-offcanvas-bar` class。

可以使用任意元素来拨动抽屉边栏。要启用相关的 JavaScript，需要添加 `uk-toggle`属性。`<a>`需要连接到抽屉容器的 id。如果使用了其他元素，比如按钮，需要添加`uk-toggle="target: #ID"`属性，指向抽屉容器的 id。

```html
<!-- This is a button toggling the off-canvas -->
<button uk-toggle="target: #my-id" type="button"></button>

<!-- This is an anchor toggling the off-canvas -->
<a href="#my-id" uk-toggle></a>

<!-- This is the off-canvas -->
<div id="my-id" uk-offcanvas>
    <div class="uk-offcanvas-bar"></div>
</div>
```

```example
<button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #offcanvas">Open</button>

<a href="#offcanvas" uk-toggle>Open</a>

<div id="offcanvas" uk-offcanvas>
    <div class="uk-offcanvas-bar">

        <h3>Title</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

        <button class="uk-button uk-button-default uk-offcanvas-close uk-width-1-1 uk-margin" type="button">Close</button>

    </div>
</div>
```

***

### 遮罩/Overlay

要使用遮罩层来遮挡页面，需要在 `uk-offcanvas` 属性中添加 `overlay: true` 参数。

```html
<div id="my-id" uk-offcanvas="overlay: true">...</div>
```

```example
<button class="uk-button uk-button-default" type="button" uk-toggle="target: #offcanvas-overlay">Open</button>

<div id="offcanvas-overlay" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar">

        <h3>Title</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

        <button class="uk-button uk-button-default uk-offcanvas-close uk-width-1-1 uk-margin" type="button">Close</button>

    </div>
</div>
```

***

## 翻转

在属性中添加 `flip: true` 参数调整抽屉边栏的对齐，使它可以从右侧滑入。

```html
<div id="my-id" uk-offcanvas="flip: true">...</div>
```

```example
<button class="uk-button uk-button-default" type="button" uk-toggle="target: #offcanvas-flip">Open</button>

<div id="offcanvas-flip" uk-offcanvas="flip: true">
    <div class="uk-offcanvas-bar">

        <h3>Title</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

        <button class="uk-button uk-button-default uk-offcanvas-close uk-width-1-1 uk-margin" type="button">Close</button>

    </div>
</div>
```


***

## 动画模式

默认情况下，抽屉是滑入页面的。还可以选择其他的动画：

| Parameter      | Description                                                                   |
|----------------|-------------------------------------------------------------------------------|
| `mode: slide`  | 抽屉滑入并遮罩页面内容。这是默认模式。 |
| `mode: push`   | 抽屉滑入并推动网站页面                           |
| `mode: reveal` | 抽屉滑入，并且在推动页面的过程中揭开内容     |
| `mode: none`   | 不带动画效果地显示抽屉和遮罩   |

```html
<div id="#my-id" uk-offcanvas="mode: push">...</div>
```

```example
<button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #offcanvas-slide">Slide</button>

<button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #offcanvas-push">Push</button>

<button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #offcanvas-reveal">Reveal</button>

<button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #offcanvas-none">None</button>

<div id="offcanvas-slide" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar">

        <h3>Title</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

        <button class="uk-button uk-button-default uk-offcanvas-close uk-width-1-1 uk-margin" type="button">Close</button>

    </div>
</div>

<div id="offcanvas-push" uk-offcanvas="mode: push; overlay: true">
    <div class="uk-offcanvas-bar">

        <h3>Title</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

        <button class="uk-button uk-button-default uk-offcanvas-close uk-width-1-1 uk-margin" type="button">Close</button>

    </div>
</div>

<div id="offcanvas-reveal" uk-offcanvas="mode: reveal; overlay: true">
    <div class="uk-offcanvas-bar">

        <h3>Title</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

        <button class="uk-button uk-button-default uk-offcanvas-close uk-width-1-1 uk-margin" type="button">Close</button>

    </div>
</div>

<div id="offcanvas-none" uk-offcanvas="mode: none; overlay: true">
    <div class="uk-offcanvas-bar">

        <h3>Title</h3>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

        <button class="uk-button uk-button-default uk-offcanvas-close uk-width-1-1 uk-margin" type="button">Close</button>

    </div>
</div>
```

***

## 抽屉中的导航

在抽屉中使用[导航菜单](nav.md)创建移动设备上的导航菜单。

```html
<div id="my-id" uk-offcanvas>
    <div class="uk-offcanvas-bar">
        <ul class="uk-nav uk-nav-default">...</ul>
    </div>
</div>
```

```example
<button class="uk-button uk-button-default" type="button" uk-toggle="target: #offcanvas-nav">Open</button>

<div id="offcanvas-nav" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar">

        <ul class="uk-nav uk-nav-default">
            <li class="uk-active"><a href="#">Active</a></li>
            <li class="uk-parent">
                <a href="#">Parent</a>
                <ul class="uk-nav-sub">
                    <li><a href="#">Sub item</a></li>
                    <li><a href="#">Sub item</a></li>
                </ul>
            </li>
            <li class="uk-nav-header">Header</li>
            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: table"></span> Item</a></li>
            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span> Item</a></li>
            <li class="uk-nav-divider"></li>
            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: trash"></span> Item</a></li>
        </ul>

    </div>
</div>
```

***

## 组件选项

可以在组件属性中使用以下选项，用分号隔开多个选项。 [Learn more](javascript.md#component-configuration)

| Option    | Value                     | Default | Description                                      |
|-----------|---------------------------|---------|--------------------------------------------------|
| `mode`    | String | `slide`   | 抽屉的动画模式  `slide`, `reveal`, `push` or `none`.  |
| `flip`    | Boolean                   | `false`   | 将抽屉放置到右侧         |
| `overlay` | Boolean                   | `false`   | 和遮罩层一起显示抽推 |

***

## JavaScript

Learn more about [JavaScript components](javascript.md#programmatic-use).

### 初始化

```js
UIkit.offcanvas(element, options);
```

### 事件

These events will be triggered on elements with this component attached.

| Name | Description |
| --- | --- |
| `beforeShow` | 元素显示前触发，返回 false 阻止触发  |
| `show` | 元素显示后触发   |
| `beforeHide` | 元素隐藏前触发，返回 false 阻止触发 |
| `hide` | 元素隐藏后触发    |
