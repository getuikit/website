# 图标导航

<p class="uk-text-lead">创建由图标组成的导航。</p>

## 用法

在 `<ul>`元素上添加`.uk-iconnav` class 来使用此组件。使用`<a>`元素作为导航列表内的菜单单元，并添加[图标](icon.md)。要在菜单单元上使用选中状态，只需添加`.uk-active` class。

```html
<ul class="uk-iconnav">
    <li><a href="" uk-icon="icon: check"></a></li>
</ul>
```

```example
<ul class="uk-iconnav">
    <li><a href="#" uk-icon="icon: plus"></a></li>
    <li><a href="#" uk-icon="icon: file-edit"></a></li>
    <li><a href="#" uk-icon="icon: copy"></a></li>
    <li><a href="#" uk-icon="icon: trash"></a></li>
</ul>
```

***

## 垂直对齐

默认情况下，图标导航都是水平对齐的。如果要使用垂直对齐，需要添加 `.uk-iconnav-vertical` class。

```html
<ul class="uk-iconnav uk-iconnav-vertical">...</ul>
```

```example
<ul class="uk-iconnav uk-iconnav-vertical">
    <li><a href="#" uk-icon="icon: plus"></a></li>
    <li><a href="#" uk-icon="icon: file-edit"></a></li>
    <li><a href="#" uk-icon="icon: copy"></a></li>
    <li><a href="#" uk-icon="icon: trash"></a></li>
</ul>
```