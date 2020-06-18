# 拖拽排序

<p class="uk-text-lead">创建可以通过拖拽对内部元素进行排序的网格和列表。</p>

拖拽元素到另一个可排序的网格中的某处，该网格中其它条目会自动适应排列顺序。这将会在诸如排列画廊单元或者菜单单元时显得尤为有用。

***

## 用法

要使用此组件，需要在容器上添加 `uk-sortable` 属性，并创建子元素。

```html
<div uk-sortable>
    <div></div>
    <div></div>
</div>
```

```example
<ul class="uk-grid-small uk-child-width-1-2 uk-child-width-1-4@s uk-text-center" uk-sortable="handle: .uk-card" uk-grid>
    <li>
        <div class="uk-card uk-card-default uk-card-body">Item 1</div>
    </li>
    <li>
        <div class="uk-card uk-card-default uk-card-body">Item 2</div>
    </li>
    <li>
        <div class="uk-card uk-card-default uk-card-body">Item 3</div>
    </li>
    <li>
        <div class="uk-card uk-card-default uk-card-body">Item 4</div>
    </li>
    <li>
        <div class="uk-card uk-card-default uk-card-body">Item 5</div>
    </li>
    <li>
        <div class="uk-card uk-card-default uk-card-body">Item 6</div>
    </li>
    <li>
        <div class="uk-card uk-card-default uk-card-body">Item 7</div>
    </li>
    <li>
        <div class="uk-card uk-card-default uk-card-body">Item 8</div>
    </li>
</ul>
```

***

## 拖拽手柄

默认地，整个可排序的元素都可以拖拽进行排序。要创建专门用于拖拽的手柄，需要在属性上添加 `handle: SELECTOR` 选项，并在作为手柄的元素上添加手柄的 class。

```html
<ul uk-sortable="handle: .uk-sortable-handle">
    <li>
        <div class="uk-sortable-handle"></div>
        ...
    </li>
</ul>
```

```example
<ul class="uk-grid-small uk-child-width-1-2 uk-child-width-1-4@s uk-text-center" uk-sortable="handle: .uk-sortable-handle" uk-grid>
    <li>
        <div class="uk-card uk-card-default uk-card-body">
            <span class="uk-sortable-handle uk-margin-small-right" uk-icon="icon: table"></span>Item 1
        </div>
    </li>
    <li>
        <div class="uk-card uk-card-default uk-card-body">
            <span class="uk-sortable-handle uk-margin-small-right" uk-icon="icon: table"></span>Item 2
        </div>
    </li>
    <li>
        <div class="uk-card uk-card-default uk-card-body">
            <span class="uk-sortable-handle uk-margin-small-right" uk-icon="icon: table"></span>Item 3
        </div>
    </li>
    <li>
        <div class="uk-card uk-card-default uk-card-body">
            <span class="uk-sortable-handle uk-margin-small-right" uk-icon="icon: table"></span>Item 4
        </div>
    </li>
    <li>
        <div class="uk-card uk-card-default uk-card-body">
            <span class="uk-sortable-handle uk-margin-small-right" uk-icon="icon: table"></span>Item 5
        </div>
    </li>
    <li>
        <div class="uk-card uk-card-default uk-card-body">
            <span class="uk-sortable-handle uk-margin-small-right" uk-icon="icon: table"></span>Item 6
        </div>
    </li>
    <li>
        <div class="uk-card uk-card-default uk-card-body">
            <span class="uk-sortable-handle uk-margin-small-right" uk-icon="icon: table"></span>Item 7
        </div>
    </li>
    <li>
        <div class="uk-card uk-card-default uk-card-body">
            <span class="uk-sortable-handle uk-margin-small-right" uk-icon="icon: table"></span>Item 8
        </div>
    </li>
</ul>
```

***

## 组

为了是跨列表的拖拽排序成为可能，需要在每个列表的`uk-sortable`属性上添加 `group: GROUP-NAME` 选项将它们编组。

```html
<div uk-sortable="group: my-group">
    <div></div>
</div>

<div uk-sortable="group: my-group">
    <div></div>
</div>
```

```example
<div class="uk-child-width-1-3@s" uk-grid>
    <div>
        <h4>Group 1</h4>
        <div uk-sortable="group: sortable-group">
            <div class="uk-margin">
                <div class="uk-card uk-card-default uk-card-body uk-card-small">Item 1</div>
            </div>
            <div class="uk-margin">
                <div class="uk-card uk-card-default uk-card-body uk-card-small">Item 2</div>
            </div>
            <div class="uk-margin">
                <div class="uk-card uk-card-default uk-card-body uk-card-small">Item 3</div>
            </div>
            <div class="uk-margin">
                <div class="uk-card uk-card-default uk-card-body uk-card-small">Item 4</div>
            </div>
        </div>
    </div>
    <div>
        <h4>Group 2</h4>
        <div uk-sortable="group: sortable-group">
            <div class="uk-margin">
                <div class="uk-card uk-card-default uk-card-body uk-card-small">Item 1</div>
            </div>
            <div class="uk-margin">
                <div class="uk-card uk-card-default uk-card-body uk-card-small">Item 2</div>
            </div>
            <div class="uk-margin">
                <div class="uk-card uk-card-default uk-card-body uk-card-small">Item 3</div>
            </div>
            <div class="uk-margin">
                <div class="uk-card uk-card-default uk-card-body uk-card-small">Item 4</div>
            </div>
        </div>
    </div>
    <div>
        <h4>Empty Group</h4>
        <div uk-sortable="group: sortable-group">
    </div>
</div>
```

***

## 自定义 class

可以在元素被拖拽时应用一个或多个自定义 class。为此，需要在属性上添加 `cls-custom: MY-CLASS` 选项。

```html
<ul uk-sortable="cls-custom: my-class">...</ul>
```

**Note** 在这个例子中，我们使用了[导航菜单](nav.md)。在拖拽某个元素时，会获取盒阴影和背景样式。

```example
<ul class="uk-nav uk-nav-default uk-width-medium" uk-sortable="cls-custom: uk-box-shadow-small uk-flex uk-flex-middle uk-background">
    <li class="uk-active"><a href="#">Active</a></li>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
</ul>
```

***

## 组件选项

可以在组件属性中使用以下选项，用分号隔开多个选项。 [Learn more](javascript.md#component-configuration)

| Option            | Value  | Default                 | Description                                   |
|-------------------|--------|-------------------------|-----------------------------------------------|
| `group`           | String | ''                      | 编组                                   |
| `animation`       | Number | 150                     | 动画持续时间     |
| `threshold`       | Number | 10                      | 触发元素拖拽的鼠标移动像素距离的阈值  |
| `cls-item`        | String | uk-sortable-item        | 可拖拽元素的 class.                               |
| `cls-placeholder` | String | uk-sortable-placeholder | 占位符的 class.                        |
| `cls-drag`        | String | uk-sortable-drag        | The ghost class.                              |
| `clsDrag-state`   | String | uk-sortable-dragging    | The body's dragging class.                    |
| `cls-base`        | String | uk-sortable             | 列表 class.                             |
| `clsNo-drag`      | String | uk-sortable-nodrag      | 使用此 class 禁用元素的拖拽  |
| `cls-empty`       | String | uk-sortable-empty       | 空列表 class.                         |
| `cls-custom`      | String | ''                      | The ghost 自定义 class.                     |
| `handle`          | String | false                   | 手柄选择器           |

***

## JavaScript

Learn more about [JavaScript components](javascript.md#programmatic-use).

### 初始化

```js
UIkit.sortable(element, options);
```

### 事件

These events will be triggered on elements with this component attached.

| Name | Description |
| --- | --- |
| `start` | 开始拖拽后触发  |
| `stop` | 拖拽停止后触发 |
| `change` | 元素被排序后触发  |
