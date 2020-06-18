# 页面滚动

<p class="uk-text-lead">在页面上各部分之间跳转时应用平滑的滚动效果。</p>

## 用法

在包含页面内 URL 链接片段的链接上添加 `uk-scroll` 属性，就能轻松实现平滑滚动。

```html
<a href="#my-id" uk-scroll></a>
```

```example
<a class="uk-button uk-button-primary" href="#target" uk-scroll>Scroll down</a>
```

***

## 滚动后的回调 

要在结束滚动后接收一个回调，可以监听触发滚动的链接元素上的 `scrolled` 事件。

```html
<a id="scroll-trigger" href="#my-id" uk-scroll></a>
```

```js
$('#scroll-trigger').on('scrolled', function () {
    alert('Done.');
});
```

```example
<a id="scroll-trigger" class="uk-button uk-button-primary" href="#target" uk-scroll>Down with callback</a>

<script>
jQuery(function ($) {
    $('#scroll-trigger').on('scrolled', function () {
        alert('Done.');
    });
});
</script>
```

***

## 组件选项

可以在组件属性中使用以下选项，用分号隔开多个选项。 [Learn more](javascript.md#component-configuration)

| Option | Value | Default | Description |
| --- | --- | --- | --- |
| `duration` | Number | `1000` | 以毫秒为单位的动画持续时间  |
| `transition` | String | `easeOutExpo` | Easing 过渡效果。如果加载了 [easing 插件](http://gsgd.co.uk/sandbox/jquery/easing/) 就可以使用这效果   |
| `offset` | Number | `0` |  以像素为单位，添加到“回到顶部”的偏移距离   |

## JavaScript

Learn more about [JavaScript components](javascript.md#programmatic-use).

### 初始化

```js
UIkit.scroll(element, options);
```

<div style="height: 2000px;"></div>

<a id="target" class="uk-button uk-button-primary" href="#top" uk-scroll>Scroll up</a>
