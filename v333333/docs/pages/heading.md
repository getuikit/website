# 标题

<p class="uk-text-lead">为标题定义各种样式。</p>

## 主标题

添加`.uk-heading-primary`来突显标题，可以使标题尺寸更大或者改变颜色。通常是在`<h1>`上使用。

```html
<h1 class="uk-heading-primary"></h1>
```

```example
<h1 class="uk-heading-primary">Heading Primary</h1>
```

***

## 标题分割线

添加 `.uk-heading-divider` class来使用标题分割线。可以与[基础组件](base.md#headings)中关于标题的class搭配使用。

```html
<h1 class="uk-heading-divider"></h1>
```

```example
<h1 class="uk-heading-divider">Heading Divider</h1>
```

***

## 标题装饰/Heading bullet

添加`.uk-heading-bullet`来为标题应用装饰效果。可以与[基础组件](base.md#headings)中关于标题的class搭配使用。该效果可以与文本对齐。

```html
<h1 class="uk-heading-bullet"></h1>
```

```example
<h1 class="uk-heading-bullet">Heading Bullet</h1>
```

***

## 标题线条

要在标题上添加垂直居中的线条效果，需要用到 `.uk-heading-line` class ,还要在标题元素内放入一个`<span>`元素。可以与[基础组件](base.md#headings)中关于标题的class搭配使用。该效果可以与文本对齐。

```html
<h1 class="uk-heading-line"><span></span></h1>
```

```example
<h1 class="uk-heading-line"><span>Heading Line</span></h1>

<h1 class="uk-heading-line uk-text-center"><span>Heading Line</span></h1>

<h1 class="uk-heading-line uk-text-right"><span>Heading Line</span></h1>
```

