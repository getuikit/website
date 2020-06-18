# 标签页

<p class="uk-text-lead">创建拥有各种样式的标签页导航。</p>

## 用法

标签页组件由数个可点击的标签组成，它们都在列表中并排对齐。它的 JavaScript 功能继承自[切换器组件](switcher.md)，必须要有 JS 功能才能用来切换各个标签页的内容。

| Class/Attribute | Description                                                                                                          |
|-----------------|----------------------------------------------------------------------------------------------------------------------|
| `uk-tab`        | 添加此属性到 `<ul>` 元素定义标签页组件。使用 `<a>` 元素作为列表中的标签单元   |
| `.uk-active `   | 在列表单元上添加此 class 应用选中状态                                        |
| `.uk-disabled ` | 应用禁用状态   |

```html
<ul uk-tab>
    <li class="uk-active"><a href=""></a></li>
    <li><a href=""></a></li>
    <li class="uk-disabled"><a href=""></a></li>
</ul>
```

```example
<ul uk-tab>
    <li class="uk-active"><a href="#">Left</a></li>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
    <li class="uk-disabled"><a href="#">Disabled</a></li>
</ul>
```

***

## 底部修饰

添加 `.uk-tab-bottom` class 将标签页单元放到底部去。

```html
<ul class="uk-tab-bottom" uk-tab>...</ul>
```

```example
<ul class="uk-tab-bottom" uk-tab>
    <li class="uk-active"><a href="#">Left</a></li>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
</ul>
```

***

## 左侧/右侧修饰

添加`.uk-tab-left` 或 `.uk-tab-right` class 将标签页对齐到左侧或右侧。在 960px 以下视口宽度，标签页的对齐方式会变回水平对齐。添加带有自定义数值的 `media` 选项到 `uk-tab` 属性中来修改此行为。

在使用垂直对齐时，通常使用网格来设置布局，如这个[切换器示例Switcher example](switcher.md#vertical-tabs)所示。

```html
<ul class="uk-tab-left" uk-tab>...</ul>

<ul class="uk-tab-right" uk-tab>...</ul>
```

```example
<div class="uk-child-width-1-2@s" uk-grid>
    <div>
        <ul class="uk-tab-left" uk-tab>
            <li class="uk-active"><a href="#">Left</a></li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
        </ul>
    </div>

    <div>
        <ul class="uk-tab-right" uk-tab>
            <li class="uk-active"><a href="#">Right</a></li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
        </ul>
    </div>
</div>
```

***

## 对齐

可以将标签页与[Flex](flex.md)或[宽度组件](width.md)组合使用来修改导航标签的对齐方式。

```html
<ul class="uk-flex-right" uk-tab>...</ul>
```

```example
<div class="uk-margin-medium-top">
    <ul class="uk-flex-center" uk-tab>
        <li class="uk-active"><a href="#">Center</a></li>
        <li><a href="#">Item</a></li>
        <li><a href="#">Item</a></li>
    </ul>
</div>

<div>
    <ul class="uk-flex-right" uk-tab>
        <li class="uk-active"><a href="#">Right</a></li>
        <li><a href="#">Item</a></li>
        <li><a href="#">Item</a></li>
    </ul>
</div>

<div>
    <ul class="uk-child-width-expand" uk-tab>
        <li class="uk-active"><a href="#">Justify</a></li>
        <li><a href="#">Item</a></li>
        <li><a href="#">Item</a></li>
        <li><a href="#">Item</a></li>
    </ul>
</div>
```

***

## 标签页与下拉菜单

标签页可以用来触发[下拉菜单](dropdown.md)。

```html
<ul uk-tab>
    <li>

        <!-- This is the menu item toggling the dropdown -->
        <a href=""></a>

        <!-- This is the dropdown -->
        <div uk-dropdown="mode: click">
            <ul class="uk-nav uk-dropdown-nav">...</ul>
        </div>

    </li>
</ul>
```

```example
<ul uk-tab>
    <li class="uk-active"><a href="#">Active</a></li>
    <li><a href="#">Item</a></li>
    <li>
        <a href="#">More <span class="uk-margin-small-left" uk-icon="icon: triangle-down"></span></a>
        <div uk-dropdown="mode: click">
            <ul class="uk-nav uk-dropdown-nav">
                <li class="uk-active"><a href="#">Active</a></li>
                <li><a href="#">Item</a></li>
                <li class="uk-nav-header">Header</li>
                <li><a href="#">Item</a></li>
                <li><a href="#">Item</a></li>
                <li class="uk-nav-divider"></li>
                <li><a href="#">Item</a></li>
            </ul>
        </div>
    </li>
</ul>
```

***

## 组件选项

可以在组件属性中使用以下选项，用分号隔开多个选项。[Learn more](javascript.md#component-configuration)

| Option      | Value           | Default | Description                                                                                              |
|-------------|-----------------|---------|----------------------------------------------------------------------------------------------------------|
| `connect`   | CSS selector    | false   | Related item's container. By default, this is the next element with the 'uk-switcher' class.             |
| `toggle `   | CSS selector    | > *     | The toggle selector, which triggers content switching on click.                                          |
| `active `   | Number          | 0       | Active index on init. Providing a negative number indicates a position starting from the end of the set. |
| `animation` | String          | false   | The space separated names of animations to use. Comma separate for animation out.                        |
| `duration`  | Number          | 200     | The animation duration.                                                                                  |
| `swiping`   | Boolean         | true    | 使用 swiping.                                                                                             |
| `media`     | Integer, String | 960     | When to switch to horizontal mode — a width as integer (e.g. 640) or a CSS media query.                  |

***

## JavaScript

Learn more about [JavaScript components](javascript.md#programmatic-use).

### 初始化

```js
UIkit.tab(element, options);
```

### 事件

These events will be triggered on the connected items of the elements with this component attached.

| Name | Description |
| --- | --- |
| `beforeShow` | 内容单元显示前触发。返回 false 可以阻止  |
| `show` | 显示后触发   |
| `beforeHide` | 隐藏前触发。返回 false阻止触发   |
| `hide` | 隐藏后触发    |
