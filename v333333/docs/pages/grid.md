# 网格

<p class="uk-text-lead">创建响应式的可嵌套的流体网格布局。</p>

UIkit 的网格系统允许你将块元素排列在网格列中，并且可以与[宽度组件](width.md)搭配使用以确定各个内容块要占用多大空间。还可以与[Flex](flex.md)搭配来对齐和排序。

***

## 用法

在`<div>`元素上添加`uk-grid`属性来创建网格容器。不必添加class了。在容器内容添加 `<div>` 来创建网格单元。默认地，所有网格单元都是堆叠的。要使这些网格单元并列，需要用到[宽度组件](width.md)。使用`uk-child-width-expand`会自动为网格均匀分配宽度。

```html
<div uk-grid>
    <div></div>
    <div></div>
</div>
```
**Note** 通常，[卡片组件](card.md)都是在网格中使用。下面的例子即是如此。

```example
<div class="uk-child-width-expand@s uk-text-center" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>
</div>
```

***

## 排水沟/Gutter modifiers

网格组件带有默认的排水沟，在较小的视口宽度下，它会在某个断点自动缩小。使用下面这些 class 来应用各种尺寸的排水沟。

| Class         | Description                                                   |
|---------------|---------------------------------------------------------------|
| `.uk-grid-small`    | 较小的排水沟            |
| `.uk-grid-medium`   | 中等的排水沟，类似默认尺寸，但不带断点                  |
| `.uk-grid-large`    | 带断点的较大的排水沟                     |
| `.uk-grid-collapse` | 移除所有排水沟  |

```html
<div class="uk-grid-small" uk-grid>...</div>
```

```example
<div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>
</div>
```

```example
<div class="uk-grid-medium uk-child-width-expand@s uk-text-center" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>
</div>
```

```example
<div class="uk-grid-large uk-child-width-expand@s uk-text-center" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>
</div>
```

```example
<div class="uk-grid-collapse uk-child-width-expand@s uk-text-center" uk-grid>
    <div>
        <div class="uk-background-muted uk-padding">Item</div>
    </div>
    <div>
        <div class="uk-background-primary uk-padding uk-light">Item</div>
    </div>
    <div>
        <div class="uk-background-secondary uk-padding uk-light">Item</div>
    </div>
</div>
```

***

## 嵌套网格

使用嵌套网格轻松扩展网格布局。

```html
<div uk-grid>
    <div>
        <div uk-grid>
            <div></div>
            <div></div>
        </div>
    </div>
    <div>
        <div uk-grid>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
```

```example
<div class="uk-child-width-1-2 uk-text-center" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
	</div>
	<div>
		<div class="uk-child-width-1-2 uk-text-center" uk-grid>
			<div>
				<div class="uk-card uk-card-primary uk-card-body">Item</div>
			</div>
			<div>
				<div class="uk-card uk-card-primary uk-card-body">Item</div>
			</div>
		</div>
	</div>
</div>
```

***

## 分割线

添加 `.uk-grid-divider`用线条将网格单元分隔开。可以与排水沟的样式搭配使用。在网格堆叠显示时，分割线会自动变成水平的。

```html
<div class="uk-grid-divider" uk-grid>...</div>
```

```example
<div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
    <div>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
    <div>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
</div>
```

***

## 匹配高度

得益于 flexbox，网格单元的高度可以自动匹配。匹配网格单元的子元素，只需要添加一个 `.uk-grid-match` class 就行了。例如，在匹配[卡片组件](card.md)的高度时。

```html
<div class="uk-grid-match" uk-grid>....</div>
```

```example
<div class="uk-grid-match uk-child-width-expand@s uk-text-center" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
     </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item<br>...</div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item<br>...<br>...</div>
    </div>
</div>
```

### JavaScript

要更具体地选择需要匹配哪些元素的高度，要在`uk-height-match`属性上添加`target: SELECTOR`选项。

```html
<div uk-grid uk-height-match="target: > div > .uk-card">
    <div>
        <div class="uk-card uk-card-default"></div>
    </div>
    <div>
        <div class="uk-card uk-card-default"></div>
    </div>
</div>
```

```example
<div class="uk-child-width-expand@s uk-text-center" uk-grid uk-height-match="target: > div > .uk-card">
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
     </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item<br>...</div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item<br>...<br>...</div>
    </div>
</div>
```

***

## 网格与宽度

绝大多数情况下，网格都是和[宽度组件](width.md)搭配使用的。这就使得在确定各个列的宽度时更具灵活性了。

```html
<div uk-grid>
    <div class="uk-width-auto@m"></div>
    <div class="uk-width-1-3@m"></div>
    <div class="uk-width-expand@m"></div>
</div>
```

```example
<div class="uk-text-center" uk-grid>
    <div class="uk-width-auto@m">
        <div class="uk-card uk-card-default uk-card-body">Auto</div>
    </div>
    <div class="uk-width-1-3@m">
        <div class="uk-card uk-card-default uk-card-body">1-3</div>
    </div>
    <div class="uk-width-expand@m">
        <div class="uk-card uk-card-default uk-card-body">Expand</div>
    </div>
</div>
```

***

### 子元素宽度

如果网格列都是均匀分配的，就只需要在网格容器上添加一个`.uk-child-width-*`，不必在每个网格单元上都去添加class。

```html
<div class="uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>...</div>
```

```example
<div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-text-center" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>
</div>
```

更多详细信息查阅[宽度组件](width.md).

***

## 网格与 flex

轻松搭配网格和[Flex组件](flex.md)。调整网格元素的对齐、排序、方向以及换行。比如，你可以在较宽的视口下翻转网格单元的显示顺序。这些都可以和排水沟、分割线一起用。

```html
<div class="uk-flex-center" uk-grid>
    <div></div>
    <div class="uk-flex-first"></div>
</div>
```

```example
<div class="uk-grid-small uk-child-width-1-4@s uk-flex-center uk-text-center" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item 1</div>
    </div>
    <div class="uk-flex-last">
        <div class="uk-card uk-card-secondary uk-card-body">Item 2</div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item 3</div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item 4</div>
    </div>
    <div class="uk-flex-first">
        <div class="uk-card uk-card-primary uk-card-body">Item 5</div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item 6</div>
    </div>
</div>
```

***

## 组件选项

可以在组件属性中使用下列选项。用分号隔开多个选项。[Learn more](javascript.md#component-configuration)

| Option          | Value  | Default         | Description                                                                                                |
|----------------|--------|-----------------|------------------------------------------------------------------------------------------------------------|
| `margin `      | String | uk-grid-margin  | 添加此选项，会在换行的网格单元上创建两行之间的margin |
| `first-column` | String | uk-first-column | 被添加到每行第一个元素的 class                                             |

***

## JavaScript

Learn more about [JavaScript components](javascript.md#programmatic-use).

### 初始化

```js
UIkit.grid(element, options);
```
