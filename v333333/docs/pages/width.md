# 宽度

<p class="uk-text-lead">定义在不同视口尺寸下的元素宽度。</p>

UIkit 的宽度组件常常与[网格](grid.md)搭配使用，用来将内容分离到多个响应式列中。你可以使用分数、自动宽度或者扩展各个单元使其填充剩余的页面空间并组合这些模式。

***

## 用法

添加一个 `.uk-width-*` 类到一个元素中来确定它的尺寸。通常，你需要用到[网格组件](grid.md)以及它的子元素来创建布局单元。

| Class                              | Description                                               |
|------------------------------------|-----------------------------------------------------------|
| `.uk-width-1-1`                    | 100%填满可用宽度 |
| `.uk-width-1-2`                    | 占用父容器的一半宽度 |
| `.uk-width-1-3` to `.uk-width-2-3` | 将父容器宽度等分为三等分 |
| `.uk-width-1-4` to `.uk-width-3-4` | 将父容器宽度等分为四等分 |
| `.uk-width-1-5` to `.uk-width-4-5` | 将父容器宽度等分为五等分 |
| `.uk-width-1-6` to `.uk-width-5-6` | 将父容器宽度等分为六等分 |

```html
<div uk-grid>
    <div class="uk-width-1-2"></div>
    <div class="uk-width-1-2"></div>
</div>
```

```example
<div class="uk-text-center" uk-grid>
    <div class="uk-width-1-3">
        <div class="uk-card uk-card-default uk-card-body">1-3</div>
    </div>
    <div class="uk-width-1-3">
        <div class="uk-card uk-card-default uk-card-body">1-3</div>
    </div>
    <div class="uk-width-1-3">
        <div class="uk-card uk-card-default uk-card-body">1-3</div>
    </div>
</div>

<div class="uk-text-center" uk-grid>
    <div class="uk-width-1-2">
        <div class="uk-card uk-card-default uk-card-body">1-2</div>
    </div>
    <div class="uk-width-1-2">
        <div class="uk-card uk-card-default uk-card-body">1-2</div>
    </div>
</div>

<div class="uk-text-center" uk-grid>
    <div class="uk-width-1-4">
        <div class="uk-card uk-card-default uk-card-body">1-4</div>
    </div>
    <div class="uk-width-3-4">
        <div class="uk-card uk-card-default uk-card-body">3-4</div>
    </div>
</div>
```

***

## 自动 & 扩张

宽度组件提供了额外的修饰，使你能在分配条目时更加灵活。

| Class              | Description                                                             |
|--------------------|-------------------------------------------------------------------------|
| `.uk-width-auto`   | 本条目之后根据自己的内容进行扩张 |
| `.uk-width-expand` | 本条目将扩张并填满网格容器的剩余空间 |

```html
<div uk-grid>
    <div class="uk-width-auto"></div>
    <div class="uk-width-expand"></div>
</div>
```

```example
<div class="uk-text-center" uk-grid>
    <div class="uk-width-auto">
        <div class="uk-card uk-card-default uk-card-body">Auto</div>
    </div>
    <div class="uk-width-expand">
        <div class="uk-card uk-card-default uk-card-body">Expand</div>
    </div>
</div>
```

***

## 等分子元素宽度

要创建包含均分宽度的网格，不必为网格内的每个条目都添加相同的 class。只需要为网格自身添加一个 `.uk-child-width-*` class就行了。

| Class                    | Description                                                           |
|--------------------------|-----------------------------------------------------------------------|
| `.uk-child-width-1-2`    | 所有元素都占用父容器的一半 |
| `.uk-child-width-1-3`    | 所有元素都占用父容器的三分之一 |
| `.uk-child-width-1-4`    | 所有元素都占用父容器的四分之一 |
| `.uk-child-width-1-5`    | 所有元素都占用父容器的五分之一 |
| `.uk-child-width-1-6`    | 所有元素都占用父容器的六分之一 |
| `.uk-child-width-auto`   | 基于内容的尺寸将网格分隔为多个等宽单元 |
| `.uk-child-width-expand` | 基于可用空间将网格分隔为多个等宽单元 |

```html
<div class="uk-child-width-1-4" uk-grid>
    <div></div>
    <div></div>
    ...
</div>
```

```example
<div class="uk-child-width-1-4 uk-grid-small uk-text-center" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>
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

如果使用分数宽度的条目不再符合容器的宽度，就会强制换行。在使用 _expand_ 系列class时，依然会在同一行内继续均分可用空间。

```html
<div class="uk-child-width-expand" uk-grid>
    <div></div>
    <div></div>
    ...
</div>
```

```example
<div class="uk-child-width-expand uk-grid-small uk-text-center" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Item</div>
    </div>
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

## 固定宽度

除了使用上面的计算宽度的class，你还可以使用下面这些 class来应用固定宽度。

| Class               | Description                       |
|---------------------|-----------------------------------|
| `.uk-width-small`   | Applies a fixed width of _150px_. |
| `.uk-width-medium`  | Applies a fixed width of _300px_. |
| `.uk-width-large`   | Applies a fixed width of _450px_. |
| `.uk-width-xlarge`  | Applies a fixed width of _600px_. |
| `.uk-width-xxlarge` | Applies a fixed width of _750px_. |

```html
<div class="uk-width-medium"></div>
```

```example
<div class="uk-width-small uk-margin"><div class="uk-card uk-card-small uk-card-default uk-card-body">Small</div></div>
<div class="uk-width-medium uk-margin"><div class="uk-card uk-card-small uk-card-default uk-card-body">Medium</div></div>
<div class="uk-width-large uk-margin"><div class="uk-card uk-card-small uk-card-default uk-card-body">Large</div></div>
<div class="uk-width-xlarge uk-margin"><div class="uk-card uk-card-small uk-card-default uk-card-body">X Large</div></div>
<div class="uk-width-xxlarge uk-margin"><div class="uk-card uk-card-small uk-card-default uk-card-body">XX Large</div></div>
```

***

## 混合宽度

还可以为个别条目组合使用 `.uk-child-width-*` 与 `.uk-width-*`。这是可行的，例如，创建拥有一个特定宽度的条目，而其他条目自动扩展填充剩余空间的网格。

```html
<div class="uk-child-width-expand" uk-grid>
    <div></div>
    <div class="uk-width-1-3"></div>
    <div></div>
    ...
</div>
```

```example
<div class="uk-child-width-expand uk-grid-small uk-text-center" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Expand</div>
    </div>
    <div class="uk-width-1-3">
        <div class="uk-card uk-card-default uk-card-body">1-3</div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Expand</div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Expand</div>
    </div>
</div>
```

***

## 响应式宽度

UIkit 提供了一系列响应式宽度 class。它们基本和通常的宽度class一样工作，但是它们拥有的后缀表示它们会根据不同的断点产生效果。这些 class 可以与[可见性组件](visibility.md)组合使用。这将为在不同的设备尺寸下调整布局和内容带来便利。

| Class                                   | Description                                                                             |
|-----------------------------------------|-----------------------------------------------------------------------------------------|
| `.uk-width-*`<br> `.uk-child-width-*`       | 对于任何宽度的设备，网格都保持列并排。                          |
| `.uk-width-*@s`<br> `.uk-child-width-*@s`   | 影响 _640px_ 以上宽度的设备。网格列将在较小的视口中堆叠。 |
| `.uk-width-*@m`<br> `.uk-child-width-*@m` | 影响 _960px_ 以上宽度的设备。网格列将在较小的视口中堆叠。|
| `.uk-width-*@l`<br> `.uk-child-width-*@l`   | 影响 _1200px_ 以上宽度的设备。网格列将在较小的视口中堆叠。|
| `.uk-width-@xl`<br> `.uk-child-width-*@xl`   | 影响 _1600px_ 以上宽度的设备。网格列将在较小的视口中堆叠。|

```example
<div class="uk-grid-match uk-grid-small uk-text-center" uk-grid>
    <div class="uk-width-1-2@m">
        <div class="uk-card uk-card-default uk-card-body">1-2@m</div>
    </div>
    <div class="uk-width-1-4@m">
        <div class="uk-card uk-card-default uk-card-body">1-4@m</div>
    </div>
    <div class="uk-width-1-4@m">
        <div class="uk-card uk-card-default uk-card-body">1-4@m</div>
    </div>
    <div class="uk-width-1-5@m uk-hidden@l"><div class="uk-card uk-card-secondary uk-card-body">1-5@m<br>hidden@l</div></div>
    <div class="uk-width-1-5@m uk-width-1-3@l">
        <div class="uk-card uk-card-default uk-card-body">1-5@m<br>1-3@l</div>
    </div>
    <div class="uk-width-3-5@m uk-width-2-3@l">
        <div class="uk-card uk-card-default uk-card-body">3-5@m<br>2-3@l</div>
    </div>
</div>

<div class="uk-grid-match uk-grid-small uk-text-center" uk-grid>
    <div class="uk-width-auto@m uk-visible@l"><div class="uk-card uk-card-primary uk-card-body">auto@m<br>visible@l</div></div>
    <div class="uk-width-1-3@m">
        <div class="uk-card uk-card-default uk-card-body">1-3@m</div>
    </div>
    <div class="uk-width-expand@m">
        <div class="uk-card uk-card-default uk-card-body">expand@m</div>
    </div>
</div>
```
