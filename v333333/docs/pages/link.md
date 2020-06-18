# 链接

<p class="uk-text-lead">为链接到特定内容的链接设置不同的样式。</p>

## 淡化链接

在[基础组件](base.md)中设定了默认的链接颜色。如果想要为链接使用淡化的样式，只需在锚文本的容器上添加 `.uk-link-muted` class，容器内部所有链接都会变成淡色的。

```html
<a class="uk-link-muted" href=""></a>
```

```example
<a class="uk-link-muted" href="#">Link</a>

<p class="uk-link-muted">Lorem ipsum <a href="#">dolor sit</a> amet, consectetur adipiscing elit, sed do <a href="#">eiusmod</a> tempor incididunt ut <a href="#">labore et</a> dolore magna aliqua.</p>
```

***

## 链接重置

重置链接的颜色，使其继承父元素的颜色，需要添加 `.uk-link-reset` class。可以为父元素添加这个class，这样其内容的所有链接都被重置了。

```example
<a class="uk-link-reset" href="#">Link</a>
```