# 子导航

<p class="uk-text-lead">定义各种样式的子导航。</p>

## 用法

使用以下 class 来应用此组件。要对齐子导航，比如水平居中对齐，可以使用[Flex](flex.md)。

| Class           | Description                                                                                                         |
|-----------------|---------------------------------------------------------------------------------------------------------------------|
| `.uk-subnav`    | 添加到`<ul>`元素定义子导航组件。使用`<a>`元素作为导航列表中的单元  |
| `.uk-active `   | 应用选中状态                                                           |

要使用不带链接的列表单元，使用 `<span>` 元素取代 `<a>`。另外，还可以添加 `.uk-disabled` class 来应用禁用状态。

```html
<ul class="uk-subnav">
    <li class="uk-active"><a href=""></a></li>
    <li><a href=""></a></li>
    <li><span></span></li>
</ul>
```

**Note** 如果导航单元要换到下一行，为了让布局更好点，可以使用[margin 组件](margin.md) 中的 `uk-margin` 属性。

```example
<ul class="uk-subnav" uk-margin>
    <li class="uk-active"><a href="#">Active</a></li>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
    <li><span>Disabled</span></li>
</ul>
```

***

## 分割线

添加`.uk-subnav-divider` class 用线条将菜单单元分隔开。

```html
<ul class="uk-subnav uk-subnav-divider">...</ul>
```

```example
<ul class="uk-subnav uk-subnav-divider" uk-margin>
    <li class="uk-active"><a href="#">Active</a></li>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
</ul>
```

***

## 胶囊效果

添加`.uk-subnav-pill` class 来为选中的菜单单元添加高亮的背景效果。
```html
<ul class="uk-subnav uk-subnav-pill">...</ul>
```

```example
<ul class="uk-subnav uk-subnav-pill" uk-margin>
    <li class="uk-active"><a href="#">Active</a></li>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
</ul>
```

***

## 子导航与下拉菜单

可以将子导航与[下拉菜单组件](dropdown.md)搭配使用。

```html
<ul class="uk-subnav">
    <li>
        <a href=""></a>
        <div uk-dropdown="mode: click;"></div>
    </li>
</ul>
```

```example
<ul class="uk-subnav uk-subnav-pill" uk-margin>
    <li class="uk-active"><a href="#">Active</a></li>
    <li><a href="#">Item</a></li>
    <li>
        <a href="#">More <span uk-icon="icon:  triangle-down"></span></a>
        <div uk-dropdown="mode: click;">
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