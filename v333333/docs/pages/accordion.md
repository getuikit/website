# 手风琴

<p class="uk-text-lead">创建一个列表菜单，通过点击它们的标题来展开或收缩内容。</p>

## 用法

手风琴组件是由 `uk-accordion` 属性定义的父容器，以及由标题和内容组成的多个手风琴条目所组成。

| Class | Description |
| ----- | ----------- |
| `.uk-accordion-title` | 定义并为每个手风琴条目添加拨动样式。通常用于标题。 |
| `.uk-accordion-content` | 定义每个手风琴条目的内容部分。 |

```html
<ul uk-accordion>
    <li>
        <h3 class="uk-accordion-title"></h3>
        <div class="uk-accordion-content"></div>
    </li>
</ul>
```

```example
<ul uk-accordion>
    <li class="uk-open">
        <h3 class="uk-accordion-title">Item 1</h3>
        <div class="uk-accordion-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </li>
    <li>
        <h3 class="uk-accordion-title">Item 2</h3>
        <div class="uk-accordion-content">
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
        </div>
    </li>
    <li>
        <h3 class="uk-accordion-title">Item 3</h3>
        <div class="uk-accordion-content">
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
        </div>
    </li>
</ul>
```

***

## 无收缩

默认地，所有手风琴条目都可以被收缩。要避免这种行为并始终保持一个条目展开，在属性中添加 `collapsible: false`选项即可。

```html
<ul uk-accordion="collapsible: false">...</ul>
```

```example
<ul uk-accordion="collapsible: false">
    <li>
        <h3 class="uk-accordion-title">Item 1</h3>
        <div class="uk-accordion-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </li>
    <li>
        <h3 class="uk-accordion-title">Item 2</h3>
        <div class="uk-accordion-content">
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
        </div>
    </li>
    <li>
        <h3 class="uk-accordion-title">Item 3</h3>
        <div class="uk-accordion-content">
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
        </div>
    </li>
</ul>
```

***

## 展开多个条目

要同时展开多个条目，在 `uk-accordion` 属性中添加 `multiple: true` 选项即可。

```html
<ul uk-accordion="multiple: true">...</ul>
```

```example
<ul uk-accordion="multiple: true">
    <li class="uk-open">
        <h3 class="uk-accordion-title">Item 1</h3>
        <div class="uk-accordion-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </li>
    <li>
        <h3 class="uk-accordion-title">Item 2</h3>
        <div class="uk-accordion-content">
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
        </div>
    </li>
    <li>
        <h3 class="uk-accordion-title">Item 3</h3>
        <div class="uk-accordion-content">
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
        </div>
    </li>
</ul>
```

***

## 设置展开的条目

要手动地展开某些指定的条目，在这些条目中添加 `.uk-open` 这个 class 即可。确保已经在 `uk-accordion` 属性中添加了 `multiple: true` 。

**Note** 此外，你还可以在 `uk-accordion` 属性中添加 `active: <index>` 选项来展开一个单独的条目，比如添加 `active: 1` 来显示第二个元素（index 从0开始数的）。注意，这样是会覆写 `uk-open` 的。

```html
<ul uk-accordion>
    <li></li>
    <li class="uk-open"></li>
    <li></li>
</ul>
```

```example
<ul uk-accordion>
    <li>
        <h3 class="uk-accordion-title">Item 1</h3>
        <div class="uk-accordion-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </li>
    <li class="uk-open">
        <h3 class="uk-accordion-title">Item 2</h3>
        <div class="uk-accordion-content">
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderit.</p>
        </div>
    </li>
    <li>
        <h3 class="uk-accordion-title">Item 3</h3>
        <div class="uk-accordion-content">
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident.</p>
        </div>
    </li>
</ul>
```

***

## 组件选项

可以将这些选项应用到组件属性中。使用逗号隔开多个选项。[了解更多](javascript.md#component-configuration)

| Option | 值类型 | 默认值 | 描述 |
| --- | --- | --- | --- |
| `targets` | String | `> *` | 要拨动的元素的 CSS 选择器 |
| `active` | Number | `false` | 要手动展开的元素的索引值 |
| `collapsible` | Boolean | `true` | 允许所有条目都可以关闭 |
| `multiple` | Boolean | `false` | 允许展开多个条目 |
| `animation` | Boolean | `true` | 直接显示条目或者使用一个过渡效果 |
| `transition` | String | `ease` | 显示条目时用到的过渡效果。使用 [easing functions]中的关键词。(https://developer.mozilla.org/en-US/docs/Web/CSS/single-transition-timing-function#Keywords_for_common_timing-functions). |
| `duration` | Number | `200` | 以毫秒计时的动画持续时间。 |


***

## JavaScript

了解更多关于 [JavaScript 组件](javascript.md#programmatic-use).

### 初始化

```js
UIkit.accordion(element, options);
```

### 事件

这些事件会在附加了此组件的元素上触发。

| Name | Description |
| --- | --- |
| `beforeShow` | 在条目被显示前触发。可以通过返回`false`来阻止显示。 |
| `show` | 在条目被显示后触发。 |
| `beforeHide` | 在条目被隐藏前触发。可以通过返回`false`来阻止显示。 |
| `hide` | 在条目被隐藏后触发。 |
