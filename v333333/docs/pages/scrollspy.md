# 滚动监听

<p class="uk-text-lead">在滚动页面时，触发一些事件和动画。</p>

## 用法

滚动监听组件监听页面的滚动，并根据滚动的位置触发一些事件。例如，如果在向下滚动页面时，某个元素首次出现在视口中，可以为该元素触发平滑的淡入效果。只需要添加可以使用下文中选项的 `uk-scrollspy` 属性就行。

典型地，[动画组件](animation.md)会搭配滚动监听组件一起使用。

```html
<div uk-scrollspy="cls:uk-animation-fade"></div>
```

```example
<div class="uk-child-width-1-2@m uk-grid-match" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
            <h3 class="uk-card-title">Left</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body" uk-scrollspy="cls: uk-animation-slide-right; repeat: true">
            <h3 class="uk-card-title">Right</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div>
</div>
```

这个例子使用了 `repeat: true` 选项。向上向下滚动页面试试看它触发的动画。这里的布局用到了[卡片组件](card.md)。

***

## 组

你还可以将多个需要添加滚动监听效果的元素编成一组，就不必再为每个元素添加属性了。为容器元素添加 `uk-scrollspy="target:MY-CLASS"` 属性就行，将 target 选项指向容器中你想要添加动画效果的元素。当使用delay(延时)时，将会为进入视野的一行条目添加逐次显现的效果。这个延时效果会在同一组内的下一行元素滚动进入视野时重置。

```html
<div uk-scrollspy="target: > div; cls:uk-animation-fade; delay: 500">
    <div></div>
    <div></div>
</div>
```

```example
<div class="uk-child-width-1-3@m" uk-grid uk-scrollspy="cls: uk-animation-fade; target: > div > .uk-card; delay: 500; repeat: true">
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title">Fade</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title">Fade</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title">Fade</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title">Fade</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title">Fade</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">
            <h3 class="uk-card-title">Fade</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </div>
</div>
```

***

## 组件选项

可以在组件属性中使用以下任意选项，用分号隔开多个选项。[Learn more](javascript.md#component-configuration)

| Option | Value | Default | Description |
| --- | --- | --- | --- |
| `cls` | String | `uk-scrollspy-inview` | 元素在视野内时添加的 class。如果要添加两个，用逗号隔开。  |
| `hidden` | Boolean | `true` | 在元素离开视野时隐藏元素  |
| `offset-top` | Number | `0` | 在视口中触发事件前的顶部偏移量。 |
| `offset-left` | Number | `0` | 在视口中触发事件前的左侧偏移量。 |
| `repeat` | Boolean | `false` | 是否在元素每次进入视野时都添加 `cls` 中的 class |
| `delay` | Number | `0` | 以毫秒为单位的延时  |

***

## JavaScript

Learn more about [JavaScript components](javascript.md#programmatic-use).

### 初始化

```js
UIkit.scrollspy(element, options);
```

### 事件

These events will be triggered on elements with this component attached.

| Name | Description |
| --- | --- |
| `inview` |元素进入视口后触发  |
| `outview` | 元素离开视口后触发  |

***

## 滚动监听导航菜单

根据你网站滚动条的位置来自动更新所对应的导航状态，需要在导航菜单上添加 `uk-scrollspy-nav`属性。 每个菜单项必须链接至网站中网站中对应的具有相同ID的部分。

```html
<ul class="uk-nav uk-nav-default" uk-scrollspy-nav="closest: li; scroll: true">
    <li><a href=""></a></li>
    <li><a href=""></a></li>
</ul>
```

对于滚动监听的例子，可以查看滚动监听测试页面。以下任意选项都能用在 `uk-scrollspy-nav` 属性中，用分号隔开多个选项。

***

### 滚动监听导航菜单

以下任意选项都能用在 `uk-scrollspy-nav` 属性中，用分号隔开多个选项。[Learn more](javascript.md#component-configuration)

| Option | Value | Default | Description |
| --- | --- | --- | --- |
| `cls` | String | `uk-active` | 添加到被选中的链接上的 class  |
| `closest` | String | `uk-scrollspy-init-inview` | 将上面所述的 class，应用到本选择器对应的元素中。 |
| `scroll` | Boolean | `false` | 在链接上添加使用[滚动组件](scroll.md)  |
| `overflow` | Boolean | `true` | 如果 overflow 被设置为 true，页面滚动到顶部和底部时，第一个或最后一个元素会保持选中状态   |
| `offset` | Number | `0` | 添加到“滚动到顶部”的像素偏移距离  |

***

### 滚动监听导航菜单的 JavaScript

Learn more about [JavaScript components](javascript.md#programmatic-use).

### 滚动监听导航菜单的初始化

```js
UIkit.scrollspyNav(element, options);
```

### 滚动监听导航菜单的事件

These events will be triggered on elements with this component attached.

| Name | Description |
| --- | --- |
| `active` | 元素被选中后触发   |
