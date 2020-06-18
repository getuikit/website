# 拨动器

<p class="uk-text-lead">使用一个拨动器来隐藏，切换，或者改变各种内容的外观。</p>

## 用法

要使用这个组件，需要为`<button>` 或 `<a>`元素添加 `uk-toggle="target: #ID"`属性。可以在拨动属性中使用任意选择器。

拨动器会在页面的某元素中添加或者删除一个class类默认情况下，它会添加 `hidden` 属性来隐藏元素。

```html
<button uk-toggle="target: #my-id" type="button"></button>
<p id="my-id"></p>
```

```example
<div>
    <button class="uk-button uk-button-default" type="button" uk-toggle="target: #toggle-usage">Toggle</button>
    <p id="toggle-usage">What's up?</p>
</div>
```

***

## 拨动多个元素

也可以同时拨动多个元素。只需在`uk-toggle`属性中添加`target: SELECTOR`选项，并使用一个作用于所有元素的选择器。

```html
<button type="button" uk-toggle="target: .my-class"></button>
<p class="my-class"></p>
<p class="my-class"></p>
```

```example
<button class="uk-button uk-button-default" type="button" uk-toggle="target: .toggle">Toggle</button>
<p class="toggle">Hello!</p>
<p class="toggle" hidden>Bazinga!</p>
```

**Note** 在这个例子中，我们为其中一个元素添加了 `hidden` 属性，因此只有其他元素会被显示。拨动器会在两个元素之间切换可见状态。

***

## 自定义 class

如果不想拨动 `hidden` 属性，你还可以拨动自定义 class。只需要为`uk-toggle`属性添加`cls: CLASS`选项即可。在这个例子中我们使用了 `.uk-card-primary` class 来切换不同的卡片样式。

```html
<button type="button" uk-toggle="target: #my-id; cls: uk-card-primary"></button>
<p id="my-id" class="uk-card uk-card-default"></p>
```

```example
<button class="uk-button uk-button-default" type="button" uk-toggle="target: #toggle-custom; cls: uk-card-primary">Toggle</button>
<div id="toggle-custom" class="uk-card uk-card-default uk-card-body uk-margin-small">Custom class</div>
```

***

## 动画

拨动器组件允许你为元素添加拨动的动画效果。只需为animation参数添加一个[动画组件](animation.md) 中的 `.uk-animation-*` class。元素出现和消失都使用这个类。如果你喜欢不同的动画，只需添加另一个动画类就行了。

```html
<button type="button" uk-toggle="target: #my-id; animation: uk-animation-fade"></button>
<p id="my-id"></p>
```

```example
<button href="#toggle-animation" class="uk-button uk-button-default" type="button" uk-toggle="target: #toggle-animation; animation: uk-animation-fade">Toggle</button>
<div id="toggle-animation" class="uk-card uk-card-default uk-card-body uk-margin-small">Animation</div>
```

***

### 多个动画

还可以应用多个[动画](animation)。这样就能应用不同的入场出场动画了。

```html
<button type="button" uk-toggle="target: #my-id; animation: uk-animation-slide-left, uk-animation-slide-bottom"></button>
<p id="my-id"></p>
```

```example
<button class="uk-button uk-button-default" type="button" uk-toggle="target: #toggle-animation-multiple; animation:  uk-animation-slide-left, uk-animation-slide-bottom">Toggle</button>
<div id="toggle-animation-multiple" class="uk-card uk-card-default uk-card-body uk-margin-small">Animation</div>
```

***

### 序列动画

在拨动多个带有动画的元素时，你可能想要等待前一个元素的动画运行完毕后再开始第二个元素的动画。为此，为`uk-toggle`属性添加`queued: true`选项即可。

```html
<button type="button" uk-toggle="target: .my-class; animation: uk-animation-fade; queued: true"></button>
<p class="my-class"></p>
<p class="my-class"></p>
```

```example
<button class="uk-button uk-button-default" type="button" uk-toggle="target: .toggle-animation-queued; animation: uk-animation-fade; queued: true; duration: 300">Toggle</button>
<p class="toggle-animation-queued uk-card uk-card-default uk-card-body uk-margin-small">Animation</p>
<p class="toggle-animation-queued uk-card uk-card-primary uk-card-body uk-margin-small" hidden>Animation</p>
```

***

## 模式

拨动器可以以不同方式触发。只需为`uk-toggle` 属性的`mode` 选项添加下列值就能实现。

| Value    | Description                                                                            |
|----------|----------------------------------------------------------------------------------------|
| `hover`  | 鼠标悬停触发                     |
| `click ` | 点击触发。默认值              |
| `media`  | 触发行为取决于视口宽度。了解更多信息看[下文](#media). |


```html
<button type="button" uk-toggle="target: #my-id; mode: hover"></button>
<p id="my-id"></p>
```

```example
<button class="uk-button uk-button-default" type="button" uk-toggle="target: #toggle-hover; mode: hover">hover</button>
<p id="toggle-hover">What's up?</p>
```

***

### Media

使用 `media`模式时，还需要添加`media`选项，并设置视口的值（ `@s` 到 `@xl`），拨动器会将触发状态应用到自身。这样它就能根据视口的宽度切换`cls`由选项定义的不同状态了。

```html
<!-- The primary modifier will only be applied on large screens -->

<div class="uk-card uk-card-default" uk-toggle="cls: uk-card-primary; mode: media; media: @l"></div>
```

```example
<div class="uk-card uk-card-default uk-card-body uk-width-medium" uk-toggle="cls: uk-card-primary; mode: media; media: @l">
    Primary on large screens
</div>
```

***

## 组件选项

组件属性中可以使用以下任意选项。用分号隔开多个选项。[Learn more](javascript.md#component-configuration)

| Option | Value | Default | Description |
| --- | --- | --- | --- |
| `target` | String | `false` | 要拨动的元素的 CSS 选择器 |
| `mode` | String | `click` | 触发的行为， `hover` or `click` |
| `cls` | String | `false` | 被拨动的class。默认拨动的是 `hidden` 属性  |
| `animation` | String | `false` | 空格隔开多个动画的名称，逗号后是元素隐藏的动画  |
| `duration` | Number | `200` | 以毫秒为单位的动画持续时间 |
| `queued` | Boolean | `true` | 按序列切换目标  |

***

## JavaScript

Learn more about [JavaScript components](javascript.md#programmatic-use).

### 初始化

```js
UIkit.toggle(element, options);
```

### 事件

These events will be triggered on elements with this component attached.

| Name | Description |
| --- | --- |
| `beforeShow` | 元素被显示前触发。返回false就能避免触发 |
| `show` | 元素被显示后触发 |
| `beforeHide` | 元素被隐藏前触发。返回false就能避免触发 |
| `hide` | 元素被隐藏后触发 |
