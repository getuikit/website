# 模态对话框

<p class="uk-text-lead">创建带有各种样式和过渡效果的模态对话框。</p>

## 用法

模态对话框组件，由遮罩层、对话框和可选的关闭按钮组成。可以使用任意元素来拨动模态对话框。添加`uk-toggle`属性来启用必要的 JavaScript。 `<a>`元素必须链接到模态对话框的 id。如果你使用了其他元素，比如按钮，需要添加 `uk-toggle="target: #ID"`属性，并链接到模态对话框容器的 id。

在`<div>`元素中添加`uk-modal`属性来创建模态对话框的容器以及遮挡页面的遮罩层。 还必须添加`id`，用于表示这是被拨动的元素。使用以下 class 来定义模态对话框的各个控件。

| Class              | Description                                                                                              |
|--------------------|----------------------------------------------------------------------------------------------------------|
| `.uk-modal-dialog` | 添加到子级 `<div>` 元素创建对话框                                         |
| `.uk-modal-body`   | 创建模态框与正文之间的 padding                  |
| `.uk-modal-title`  | 添加到标题元素，创建模态框的标题                                   |
| `.uk-modal-close`  | 添加到`<a>`或 `<button>`元素，创建可用的关闭按钮  |

```html
<!-- This is a button toggling the modal -->
<button uk-toggle="target: #my-id" type="button"></button>

<!-- This is the modal -->
<div id="my-id" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title"></h2>
        <button class="uk-modal-close" type="button"></button>
    </div>
</div>
```

```example
<!-- This is a button toggling the modal -->
<button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #modal-example">Open</button>

<!-- This is an anchor toggling the modal -->
<a href="#modal-example" uk-toggle>Open</a>

<!-- This is the modal -->
<div id="modal-example" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Headline</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-primary" type="button">Save</button>
        </p>
    </div>
</div>
```

***

## 关闭按钮

要创建关闭按钮，并启用它的功能以及添加适当的样式和定位，需要在 `<a>` 或 `<button>` 元素上添加`.uk-modal-close-default` class。如果要将关闭按钮放在模态对话框外面，需要添加 `.uk-modal-close-outside` class。

添加[关闭组件](close.md)中的`uk-close`属性来使用关闭图标。

```html
<div id="my-id">
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-default" type="button" uk-close></button>
    </div>
</div>

<div id="my-id">
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
    </div>
</div>
```

```example
<!-- This is a button toggling the modal with the default close button -->
<button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #modal-close">Default</button>

<!-- This is the modal with the default close button -->
<div id="modal-close" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2 class="uk-modal-title">Default</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>

<!-- This is a button toggling the modal with the outside close button -->
<button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #modal-close">Outside</button>

<!-- This is the modal with the outside close button -->
<div id="modal-close" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <h2 class="uk-modal-title">Outside</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>
```

***

## 模态对话框的居中

在`uk-modal`属性中添加`center: true`参数，使模态对话框居中显示。

```html
<div id="my-id" uk-modal="center: true"></div>
```

```example
<a class="uk-button uk-button-default" href="#modal-center" uk-toggle>Open</a>

<div id="modal-center" uk-modal="center: true">
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <img src="../docs/images/size1.jpg" alt="">
    </div>
</div>
```

***

## Header and footer

将模态对话框分成几个不同的内容部分，使用以下 class：

| Class              | Description                                                             |
|--------------------|-------------------------------------------------------------------------|
| `.uk-modal-header` | 添加到 `<div>`元素，创建模态框的 header     |
| `.uk-modal-footer` | 添加到 `<div>`元素，创建模态框的 footer  |

```html
<div id="my-id" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-header">
            <h2 class="uk-modal-title"></h2>
        </div>
        <div class="uk-modal-body"></div>
        <div class="uk-modal-footer"></div>
    </div>
</div>
```

```example
<a class="uk-button uk-button-default" href="#modal-sections" uk-toggle>Open</a>

<div id="modal-sections" uk-modal="center: true">
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-header">
            <h2 class="uk-modal-title">Modal Title</h2>
        </div>
        <div class="uk-modal-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="uk-modal-footer uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-primary" type="button">Save</button>
        </div>
    </div>
</div>
```

***

## Caption 字幕

在模态框外面创建说明字幕。需要将`.uk-modal-caption` class 添加到对话框内的  `<div>`元素上。

```html
<div uk-modal>
    <div class="uk-modal-dialog">
        <div class="uk-modal-body"></div>
        <div class="uk-modal-caption"></div>
    </div>
</div>
```

```example
<a class="uk-button uk-button-default" href="#modal-caption" uk-toggle>Open</a>

<div id="modal-caption" uk-modal="center: true">
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-body">
            <h2 class="uk-modal-title">Modal Title</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="uk-modal-caption">Caption</div>
    </div>
</div>
```

***

## 容器调整

使用 `.uk-modal-container` class 将模态框扩展到默认[容器](container.md)的宽度。

```html
<div id="my-id" class="uk-modal-container" uk-modal>...</div>
```

```example
<a class="uk-button uk-button-default" href="#modal-container" uk-toggle>Open</a>

<div id="modal-container" class="uk-modal-container" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2 class="uk-modal-title">Headline</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>
```

***

## 全屏

创建填满整个页面的全屏模态框，需要使用`.uk-modal-full` class。需要为关闭按钮添加 `.uk-modal-close-full` class，使其拥有适当的样式。

```html
<div id="my-id" class="uk-modal-full" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-full" type="button" uk-close></button>
    </div>
</div>
```

使用[网格](grid.md)和[宽度](width.md)组件来创建好看的分屏全屏模态框。

```example
<a class="uk-button uk-button-default" href="#modal-full" uk-toggle>Open</a>

<div id="modal-full" class="uk-modal-full" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-full" type="button" uk-close></button>
        <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
            <div class="uk-background-cover" style="background-image: url('../docs/images/photo.jpg');" uk-height-viewport></div>
            <div class="uk-padding-large">
                <h1>Headline</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
</div>
```

***

## 溢出

默认地，如果模态框的内容超过浏览器窗口的高度，页面会滚动显示模态框。要在模态框内使用滚动条，需要添加 `uk-overflow-auto`属性，这是在[效果组件](utility.md#overflow)中定义的。

```html
<div id="my-id" uk-modal>
    <div class="uk-modal-dialog" uk-overflow-auto></div>
</div>
```

```example
<a class="uk-button uk-button-default" href="#modal-overflow" uk-toggle>Open</a>

<div id="modal-overflow" uk-modal>
    <div class="uk-modal-dialog">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="uk-modal-header">
            <h2 class="uk-modal-title">Headline</h2>
        </div>

        <div class="uk-modal-body" uk-overflow-auto>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        </div>

        <div class="uk-modal-footer uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-primary" type="button">Save</button>
        </div>

    </div>
</div>
```

***

## 组件选项

可以在组件属性中使用以下选项，用分号隔开多个选项。 [Learn more](javascript.md#component-configuration)

| Option | Value | Default | Description |
| --- | --- | --- | --- |
| `center` | Boolean | `false` | 居中模态框|
| `esc-close` | Boolean | `true` | 按下 _Esc_ 键时关闭模态框 |
| `bg-close` | Boolean | `true` | 点击背景时，关闭模态框  |
| `stack` | Boolean | `false` | 在打开一个以上模态框时，堆叠它们。默认情况下，前一个会被后一个遮住    |
| `container` | String | `True` | 通过选择器定义目标容器，指定在DOM中哪个元素是模态框  |

***

## JavaScript

Learn more about [JavaScript components](javascript.md#programmatic-use).

### 初始化

```js
UIkit.modal(element, options);
```

***

### 模态对话框

此组件带有一系列可用于用户交互的预设模态框。可以用 JavaScript 直接调用对话框，并使用回调函数处理用户的输入。

| Code | Description |
|------|--------------|
| `UIkit.modal.alert('UIkit alert!')` | 带一个按钮的 alert  |
| `UIkit.modal.confirm('UIkit confirm!')` | 带有消息的两按钮确定框  |
| `UIkit.modal.prompt('Name:', 'Your name')` | 请求文本输入的对话框  |
| `UIkit.modal.dialog('<p>UIkit dialog!</p>');` | 带 HTML 内容的对话框    |

处理用户输入，模态框使用了基于 promise 的接口，提供了注册回调函数的 `then()` 函数。

```js
UIkit.modal.confirm('UIkit confirm!').then(function() {
    console.log('Confirmed.')
}, function () {
    console.log('Rejected.')
});
```

```example
<p uk-margin>

    <a id="modal-dialog" class="uk-button uk-button-default" href="#">Dialog</a>

    <a id="modal-alert" class="uk-button uk-button-default" href="#">Alert</a>

    <a id="modal-confirm" class="uk-button uk-button-default" href="#">Confirm</a>

    <a id="modal-prompt" class="uk-button uk-button-default" href="#">Prompt</a>

    <script>
    (function () {

            $('#modal-dialog').on('click', function (e) {
                e.preventDefault();
                $(this).blur();
                UIkit.modal.dialog('<p class="uk-modal-body">UIkit dialog!</p>');
            });

            $('#modal-alert').on('click', function (e) {
                e.preventDefault();
                $(this).blur();
                UIkit.modal.alert('UIkit alert!').then(function() {
                    console.log('Alert closed.')
                });
            });

            $('#modal-confirm').on('click', function (e) {
                e.preventDefault();
                $(this).blur();
                UIkit.modal.confirm('UIkit confirm!').then(function() {
                    console.log('Confirmed.')
                }, function () {
                    console.log('Rejected.')
                });
            });

            $('#modal-prompt').on('click', function (e) {
                e.preventDefault();
                $(this).blur();
                UIkit.modal.prompt('Name:', 'Your name').then(function(name) {
                    console.log('Prompted:', name)
                });
            });

        })();
    </script>

</p>
```

***

### 事件

These events will be triggered on elements with this component attached.

| Name | Description |
| --- | --- |
| `beforeShow` | 元素显示前触发。返回 `false`可以阻止 |
| `show` | 元素显示后触发  |
| `beforeHide` | 元素隐藏前触发。返回 `false`可以阻止 |
| `hide` | 元素隐藏后触发  |
