# 切换器

<p class="uk-text-lead">动态地切换各种内容窗口。</p>

## 用法

切换器组件由多个拨动器和与拨动器关联的内容单元组成。在包含拨动器的容器上添加 `uk-switcher` 属性。在包含内容单元的元素上添加 `.uk-switcher` class。

默认地，带有`.uk-switcher` class 的元素会直接继承拨动器的切换功能。如果想要在另一个元素中嵌套，比如在网格中嵌套，需要在`uk-switcher`属性中添加 `connect: SELECTOR` 选项并设置包含拨动单元的元素的选择器，用于切换。

通常，切换器和其他组件搭配使用，这里将展示其中一部分。

```html
<!-- This is the nav containing the toggling elements -->
<ul uk-switcher>
    <li><a href=""></a></li>
</ul>

<!-- This is the container of the content items -->
<ul class="uk-switcher">
    <li></li>
</ul>
```

此例中使用了[子导航组件](subnav.md).

```example
<ul class="uk-subnav uk-subnav-pill" uk-switcher>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
</ul>

<ul class="uk-switcher uk-margin">
    <li>Hello!</li>
    <li>Hello again!</li>
    <li>Bazinga!</li>
</ul>
```

***

## 导航控件

某些情况下，需要从当前激活的内容中切换到另一块内容。使用`uk-switcher-item`属性就能实现。要指向某内容单元，需要在属性中设置代表内容单元的数字。如下例：

将属性设置为 `next` 或 `previous`将会切换到相邻的单元。

```html
<ul class="uk-switcher uk-margin">
    <li><a href="" uk-switcher-item="0"></a></li>
    <li><a href="" uk-switcher-item="1"></a></li>
    <li><a href="" uk-switcher-item="next"></a></li>
    <li><a href="" uk-switcher-item="previous"></a></li>
</ul>
```

```example
<ul class="uk-subnav uk-subnav-pill" uk-switcher>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
</ul>
<ul class="uk-switcher uk-margin">
    <li>Hello! <a href="#" uk-switcher-item="2">Switch to item 3</a></li>
    <li>Hello again! <a href="#" uk-switcher-item="next">Next item</a></li>
    <li>Bazinga! <a href="#" uk-switcher-item="previous">Previous item</a></li>
</ul>
```

***

## 关联多个容器

可以同时关联多个内容容器。只需在属性中添加参数，并设置各个容器选择器。

```html
<!-- This is the nav containing the toggling elements -->
<ul uk-switcher="connect: my-class">...</ul>

<!-- These are the containers of the content items -->
<ul class="uk-switcher my-class">...</ul>

<ul class="uk-switcher my-class">...</ul>
```

```example
<ul class="uk-subnav uk-subnav-pill" uk-switcher="connect: .switcher-container">
    <li><a href="#">Active</a></li>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
</ul>

<h4>Container 1</h4>

<ul class="uk-switcher switcher-container uk-margin">
    <li>Hello!</li>
    <li>Hello again!</li>
    <li>Bazinga!</li>
</ul>

<h4>Container 2</h4>

<ul class="uk-switcher switcher-container uk-margin">
    <li>Hello! The first item.</li>
    <li>Hello again! The second item.</li>
    <li>Bazinga! The third item.</li>
</ul>
```

***

## 动画

可以在切换时使用所有的[动画效果](animation)。为此，需要在`uk-switcher`属性中添加带有指定动画 class 的`animation`参数。

```html
<ul uk-switcher="animation: uk-animation-fade">...</ul>
```

```example
<ul class="uk-subnav uk-subnav-pill" uk-switcher="animation: uk-animation-fade">
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
</ul>

<ul class="uk-switcher uk-margin">
    <li>Hello!</li>
    <li>Hello again!</li>
    <li>Bazinga!</li>
</ul>
```

***

### 多个动画

还可以使用多个[动画](animation)。可以添加不同的入场/出场动画。

```html
<ul uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">...</ul>
```

```example
<ul class="uk-subnav uk-subnav-pill" uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
</ul>

<ul class="uk-switcher uk-margin">
    <li>Hello!</li>
    <li>Hello again!</li>
    <li>Bazinga!</li>
</ul>
```

***

## 切换器与子导航

切换器可以轻松应用到[子导航组件](subnav)中。

```html
<!-- This is the subnav containing the toggling elements -->
<ul class="uk-subnav uk-subnav-pill" uk-switcher>...</ul>

<!-- This is the container of the content items -->
<ul class="uk-switcher"></ul>
```

```example
<ul class="uk-subnav uk-subnav-pill" uk-switcher>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
</ul>

<ul class="uk-switcher uk-margin">
    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
    <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
    <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</li>
</ul>
```


***

## 切换器与标签页

作为规则的特例，在标签页导航中添加`uk-tab`属性来替代`uk-switcher`，将切换器与[标签页](tab)组合起来。

```html
<!-- This is the subnav containing the toggling elements -->
<ul uk-tab>...</ul>

<!-- This is the container of the content items -->
<ul class="uk-switcher">...</ul>
```

```example
<ul uk-tab>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
</ul>

<ul class="uk-switcher uk-margin">
    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
    <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
    <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</li>
</ul>
```

***

### 垂直的标签页

使用[网格](grid)和[宽度](width)两个组件以垂直标签页的形式正确显示内容。

```html
<div uk-grid>
    <div class="uk-width-auto">
        <ul class="uk-tab-left" uk-tab="connect: #my-id">...</ul>
    </div>
    <div class="uk-width-expand">
        <ul id="my-id" class="uk-switcher">...</ul>
    </div>
</div>
```

```example
<div class="uk-child-width-1-2@s" uk-grid>
    <div>
        <div uk-grid>
            <div class="uk-width-auto@m">
                <ul class="uk-tab-left" uk-tab="connect: #component-tab-left; animation: uk-animation-fade">
                    <li><a href="#">Active</a></li>
                    <li><a href="#">Item</a></li>
                    <li><a href="#">Item</a></li>
                </ul>
            </div>
            <div class="uk-width-expand@m">
                <ul id="component-tab-left" class="uk-switcher">
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                    <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div uk-grid>
            <div class="uk-width-auto@m uk-flex-last@m">
                <ul class="uk-tab-right" uk-tab="connect: #component-tab-right; animation: uk-animation-fade">
                    <li><a href="#">Active</a></li>
                    <li><a href="#">Item</a></li>
                    <li><a href="#">Item</a></li>
                </ul>
            </div>
            <div class="uk-width-expand@m">
                <ul id="component-tab-right" class="uk-switcher">
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                    <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                    <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</li>
                </ul>
            </div>
        </div>
    </div>
<div>
```

***

## 切换器与按钮

切换器还可以与[按钮组件](button)的按钮或按钮组一起使用。只需将切换器的属性添加到带有`.uk-button-group` class的包含一组按钮的块容器上。

```html
<!-- This is a switcher using a number of buttons -->
<div uk-switcher>
    <button class="uk-button uk-button-default" type="button"></button>
    <button class="uk-button uk-button-default" type="button"></button>
</div>

<ul class="uk-switcher">...</ul>
```

```example
<div uk-switcher="animation: uk-animation-fade">
    <button class="uk-button uk-button-default" type="button">Item</button>
    <button class="uk-button uk-button-default" type="button">Item</button>
    <button class="uk-button uk-button-default" type="button">Item</button>
</div>

<ul class="uk-switcher uk-margin">
    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
    <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
    <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</li>
</ul>
```


***

## 切换器与导航菜单

将切换器应用到[导航菜单](nav)，需要在导航菜单的`<ul>`元素上添加 `uk-switcher`属性。使用[网格](grid)和[宽度](width)将导航菜单及内容放置到网格布局中。

```html
<div uk-grid>
    <div class="uk-width-small">
        <ul class="uk-nav uk-nav-default" uk-switcher="connect: #my-id">...</ul>
    </div>
    <div class="uk-width-expand">
        <ul id="my-id" class="uk-switcher">...</ul>
    </div>
</div>
```

```example
<div uk-grid>
    <div class="uk-width-small@m">

        <ul class="uk-nav uk-nav-default" uk-switcher="connect: #component-nav; animation: uk-animation-fade; toggle: > :not(.uk-nav-header)">
            <li><a href="#">Active</a></li>
            <li><a href="#">Item</a></li>
            <li><a href="#">Item</a></li>
        </ul>

    </div>
    <div class="uk-width-expand@m">

        <ul id="component-nav" class="uk-switcher">
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
            <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</li>
        </ul>

    </div>
</div>
```

***

## 组件选项

可以在组件属性中使用以下选项，用分号隔开多个选项。[Learn more](javascript.md#component-configuration)

| Option      | Value        | Default | Description                                                                                              |
|-------------|--------------|---------|----------------------------------------------------------------------------------------------------------|
| `connect`   | CSS selector | false   | 被关联的容器。默认地，这是带'uk-switcher' class的下一个元素      |
| `toggle `   | CSS selector | > *     | 点击出发触发拨动器切换内容的拨动器的选择器    |
| `active `   | Number       | 0       | 初始化时选中的单元的索引值。填写负数表示从末尾开始定位。  |
| `animation` | String       | false   | 用空格隔开的动画名称。逗号后是隐藏时的动画。         |
| `duration`  | Number       | 200     | 动画持续时间                                                                               |
| `swiping`   | Boolean      | true    | 使用 swiping.                                                                                             |
***

## JavaScript

Learn more about [JavaScript components](javascript.md#programmatic-use).

### 初始化

```js
UIkit.switcher(element, options);
```

### 事件

These events will be triggered on the connected items of the elements with this component attached.

| Name | Description |
| --- | --- |
| `beforeShow` | 内容单元显示前触发。返回 false 阻止触发 |
| `show` | 显示后触发. |
| `beforeHide` | 内容单元隐藏前触发。返回 false 阻止触发  |
| `hide` | 隐藏后触发Fires after an item is hidden. |
