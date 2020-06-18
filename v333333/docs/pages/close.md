# 关闭

<p class="uk-text-lead">创建可以与不同组件搭配使用的关闭图标。</p>

## 用法

要应用此组件，需要将`uk-close`属性添加到`<a>`或`<button>`元素。


```html
<button type="button" uk-close></button>

<a href="" uk-close></a>
```

```example
<button type="button" uk-close></button>
```

***

## 放大

添加`.uk-close-large` class创建大尺寸关闭按钮。


```html
<button class="uk-close-large" type="button" uk-close></button>
```

```example
<button class="uk-close-large" type="button" uk-close></button>
```

***

## 通知中的关闭

这是关于如何在[通知框](alert.md)中使用关闭组件的例子。

```html
<div uk-alert>
    <button class="uk-alert-close" type="button" uk-close></button>
</div>
```

```example
<div uk-alert>
    <button class="uk-alert-close" type="button" uk-close></button>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
</div>
```

***

## 模态对话框中的关闭

如何在[模态对话框](alert.md)中使用关闭组件。

```html
<div id="modal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
    </div>
</div>
```

```example
<a class="uk-button uk-button-default" href="#modal" uk-toggle>Open modal</a>
<div id="modal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2 class="uk-modal-title">Headline</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-primary" type="button">Save</button>
        </p>
    </div>
</div>
```