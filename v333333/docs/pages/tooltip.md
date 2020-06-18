# 工具提示

<p class="uk-text-lead">轻松创建好看的工具提示。</p>

## 用法

要使用这个组件，需要在元素上添加 `uk-tooltip`属性。还需要添加 _title_ 属性，它的值即是工具提示的文本。 

```html
<div title="" uk-tooltip></div>
```

```example
<button class="uk-button uk-button-default" title="Hello World" uk-tooltip>Hover</button>
```

***

## 对齐

在 `uk-tooltip` 属性中添加以下选项中的任意一个，调整工具提示的对齐方式。 

```html
<button title="" uk-tooltip="pos: top-left"></button>
```

| Attribute | Description |
| --------- | ----------- |
| `pos: top`          | 将工具提示对齐在顶部         |
| `pos: top-left`     | 将工具提示对齐在左上角 |
| `pos: top-right`    | 将工具提示对齐在右上角    |
| `pos: bottom`       | 将工具提示对齐在底部     |
| `pos: bottom-left`  | 将工具提示对齐在左下角  |
| `pos: bottom-right` | 将工具提示对齐在右下角  |
| `pos: left`         | 将工具提示对齐在左侧      |
| `pos: right`        | 将工具提示对齐在右侧     |

```example
<p uk-margin>
    <button class="uk-button uk-button-default" title="Hello World" uk-tooltip>Top</button>
    <button class="uk-button uk-button-default" title="Hello World" uk-tooltip="pos: top-left">Top Left</button>
    <button class="uk-button uk-button-default" title="Hello World" uk-tooltip="pos: top-right">Top Right</button>
    <button class="uk-button uk-button-default" title="Hello World" uk-tooltip="pos: bottom">Bottom</button>
    <button class="uk-button uk-button-default" title="Hello World" uk-tooltip="pos: bottom-left">Bottom Left</button>
    <button class="uk-button uk-button-default" title="Hello World" uk-tooltip="pos: bottom-right">Bottom Right</button>
    <button class="uk-button uk-button-default" title="Hello World" uk-tooltip="pos: left">Left</button>
    <button class="uk-button uk-button-default" title="Hello World" uk-tooltip="pos: right">Right</button>
</p>
```

***

## 延迟

如果想要工具提示的显示带有一点延迟，只需在`uk-tooltip`属性中添加 `delay` 选项，并填写你想要的延迟毫秒数。 

```html
<div title="" uk-tooltip="delay: 500"></div>
```

```example
<button class="uk-button uk-button-default" title="Hello World" uk-tooltip="delay: 500">Hover</button>
```

***

## 组件选项

在组件属性中可以使用以下选项。使用逗号隔开多个选项。[了解更多](javascript.md#component-configuration)

| Option | Value | Default | Description |
| --- | --- |
| `pos` | String | 'top' | 工具提示定位 |
| `offset` | Number | false | 与源元素之间的偏移量  |
| `animation` | String | 'uk-animation-scale-up' | 由空格隔开的动画名称，用逗号隔开工具提示消失的动画  |
| `duration` | Number | 100 | 动画持续时间 |
| `delay` | Number | 0 | 显示工具提示的延迟时间 |
| `cls` | String | 'uk-active' | 表示激活状态的class |

***

## JavaScript

Learn more about [JavaScript components](javascript.md#programmatic-use).

### 初始化

```js
UIkit.tooltip(element, options);
```

### 事件

以下事件会在应用了此组件的元素上触发。 

| Name | Description |
| --- | --- |
| `beforeShow` | 元素显示前触发。通过返回`false`可以避免显示。 |
| `show` | 元素显示之后触发  |
| `beforeHide` | 元素隐藏前触发。通过返回`false`可以避免显示。 |
| `hide` | 元素隐藏之后触发 |
