# 圆点导航

<p class="uk-text-lead">创建操作幻灯片或者滚动页面不同部分的圆点导航控件。</p>

## 用法

使用以下 class 创建带有圆点的导航。此组件使用 Flexbox创建。所以你可以使用[Flex 组件](flex.md)来对齐圆点导航。

| Class           | Description                                                                                                         |
|-----------------|---------------------------------------------------------------------------------------------------------------------|
| `.uk-dotnav`    | 添加到 `<ul>`元素定义圆点导航组件。使用 `<a>` 元素作为导航单元。 |
| `.uk-active `   | 添加到一个导航单元，以应用选中状态。  |

```html
<ul class="uk-dotnav">
    <li class="uk-active"><a href=""></a></li>
    <li><a href=""></a></li>
</ul>
```

```example
<ul class="uk-dotnav">
    <li class="uk-active"><a href="#">Item 1</a></li>
    <li><a href="#">Item 2</a></li>
    <li><a href="#">Item 3</a></li>
    <li><a href="#">Item 4</a></li>
    <li><a href="#">Item 5</a></li>
</ul>
```

***

## 垂直对齐

添加 `.uk-dotnav-vertical` 修饰类就能将圆点导航垂直对齐。

```html
<ul class="uk-dotnav uk-dotnav-vertical">...</ul>
```

```example
<ul class="uk-dotnav uk-dotnav-vertical">
    <li class="uk-active"><a href="#">Item 1</a></li>
    <li><a href="#">Item 2</a></li>
    <li><a href="#">Item 3</a></li>
    <li><a href="#">Item 4</a></li>
    <li><a href="#">Item 5</a></li>
</ul>
```


***

## 圆点导航与图片

要将圆点导航定位到某个元素上面，需要为包裹圆点导航的`<div>`元素添加一个[定位组件](position.md)中的 `.uk-position-*` 类。为了使其在图片上具有更好的可见性，例如在幻灯片中使用圆点导航时，只需要将圆点导航放在带有`.uk-light`的容器中，`.uk-light` 是[反相组件]中的class。

```html
<div class="uk-inline uk-light">
    <img src="" alt="">
    <div class="uk-position-bottom-center uk-position-medium">
        <ul class="uk-dotnav">...</ul>
    </div>
</div>
```

```example
<div class="uk-child-width-1-2@m uk-grid-small" uk-grid>
    <div>
        <div class="uk-position-relative uk-light">
            <img src="../docs/images/dark.jpg" alt="">
            <div class="uk-position-bottom-center uk-position-medium">
                <ul class="uk-dotnav uk-flex-nowrap">
                    <li class="uk-active"><a href="#">Item 1</a></li>
                    <li><a href="#">Item 2</a></li>
                    <li><a href="#">Item 3</a></li>
                    <li><a href="#">Item 4</a></li>
                    <li><a href="#">Item 5</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-position-relative">
            <img src="../docs/images/light.jpg" alt="">
            <div class="uk-position-center-right uk-position-medium">
                <ul class="uk-dotnav uk-dotnav-vertical">
                    <li class="uk-active"><a href="#">Item 1</a></li>
                    <li><a href="#">Item 2</a></li>
                    <li><a href="#">Item 3</a></li>
                    <li><a href="#">Item 4</a></li>
                    <li><a href="#">Item 5</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
```

***

## 在视口中垂直居中

通过添加[定位组件](position.md)中的 `.uk-position-center-right` 和 `.uk-position-fixed` ，就能在视口中垂直居中圆点导航了。这对于单页网站是非常有用的。

```html
<div class="uk-position-center-right uk-position-medium uk-position-fixed">
    <ul class="uk-dotnav uk-dotnav-vertical">...</ul>
</div>
```
