# 通知

<p class="uk-text-lead">创建可以拨动显示和自动淡出的通知。</p>

## 用法

鼠标放在通知消息上时，它不会消失。还可以点击关闭通知，此组件提供了简单的 API。下列代码可以帮助到你。

### JavaScript

```js
UIkit.notification({
    message: 'my-message!',
    status: 'primary',
    pos: 'top-right',
    timeout: 5000
});

// Shortcuts
UIkit.notification('My message');
UIkit.notification('My message', status);
UIkit.notification('My message', { /* options */ });
```

```example
<button class="demo uk-button uk-button-default" type="button" data-message="Notification message">Click me</button>
```

***

## HTML 消息

可以在通知消息中使用 HTML，比如使用图标之类的。

```js
UIkit.notification("<span uk-icon='icon: check'></span> Message");
```

```example
<button class="uk-button demo uk-button-default" type="button" data-message="<span uk-icon='icon: check'></span> Message with an icon">With icon</button>
```

***

## 定位

使用以下参数来调整通知的定位。


```js
UIkit.notification("...", {pos: 'top-right'})
```

| Position        | Code |
| --------------- | ---- |
| `top-left`      | `UIkit.notification("...", {pos: 'top-left'})`      |
| `top-center`    | `UIkit.notification("...", {pos: 'top-center'})`    |
| `top-right`     | `UIkit.notification("...", {pos: 'top-right'})`     |
| `bottom-left`   | `UIkit.notification("...", {pos: 'bottom-left'})`   |
| `bottom-center` | `UIkit.notification("...", {pos: 'bottom-center'})` |
| `bottom-right`  | `UIkit.notification("...", {pos: 'bottom-right'})`  |


```example
<p uk-margin>
    <button class="uk-button uk-button-default demo" type="button" data-message="Top Left..." data-pos="top-left">Top Left</button>
    <button class="uk-button uk-button-default demo" type="button" data-message="Top Center..." data-pos="top-center">Top Center</button>
    <button class="uk-button uk-button-default demo" type="button" data-message="Top Right..." data-pos="top-right">Top Right</button>
    <button class="uk-button uk-button-default demo" type="button" data-message="Bottom Left..." data-pos="bottom-left">Bottom Left</button>
    <button class="uk-button uk-button-default demo" type="button" data-message="Bottom Center..." data-pos="bottom-center">Bottom Center</button>
    <button class="uk-button uk-button-default demo" type="button" data-message="Bottom Right..." data-pos="bottom-right">Bottom Right</button>
</p>
```


***

## 样式

通过为通知消息添加状态来改变样式，可以添加下表中的效果。

```js
UIkit.notification("...", {status: 'primary'})
```

| Style     | Code |
| --------- | ---- |
| `primary` | `UIkit.notification("...", {status:'primary'})` |
| `success` | `UIkit.notification("...", {status:'success'})` |
| `warning` | `UIkit.notification("...", {status:'warning'})` |
| `danger`  | `UIkit.notification("...", {status:'danger'})`  |

```example
<p uk-margin>
    <button class="uk-button uk-button-default demo" type="button" data-message="Primary message..." data-status="primary">Primary</button>
    <button class="uk-button uk-button-default demo" type="button" data-message="Success message..." data-status="success">Success</button>
    <button class="uk-button uk-button-default demo" type="button" data-message="Warning message..." data-status="warning">Warning</button>
    <button class="uk-button uk-button-default demo" type="button" data-message="Danger message..." data-status="danger">Danger</button>
</p>
```

***

## 关闭所有

通过调用`UIkit.notification.closeAll()`来关闭所有打开的通知。

```example
<button class="uk-button uk-button-default close">Close all</button>
```


<script src="../assets/uikit/dist/js/components/notification.min.js"></script>
<script>
jQuery('button.demo').on('click', function() {
    UIkit.notification($(this).data());
});
jQuery('button.close').on('click', function() {
    UIkit.notification.closeAll();
});
</script>

***

## 组件选项

可以在组件属性中使用以下选项，用分号隔开多个选项。 [Learn more](javascript.md#component-configuration)

| Option     | Value   | Default    | Description                                                         |
|------------|---------|------------|---------------------------------------------------------------------|
| `message ` | String  | false      | 要演示的通知消息                      |
| `status`   | String  | null       | 通知的状态颜色                            |
| `timeout`  | Integer | 5000       | 通知消失之前的可见时长        |
| `group`    | String  | null       | 如果要关闭一组所有通知，可以用到这个  |
| `pos`      | String  | top-center | 显示在哪个位置                                                    |

***

## JavaScript

Learn more about [JavaScript components](javascript.md#programmatic-use).

### 初始化

这是一个功能性组件（`Functional Component`），可以省略元素参数。

```js
UIkit.notification(options);
UIkit.notification(message, status);
```

### 事件

These events will be triggered on elements with this component attached.

| Name | Description |
| --- | --- |
| `close` | 通知被关闭后触发  |
