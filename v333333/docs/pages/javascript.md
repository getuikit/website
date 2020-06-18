# JavaScript

在你阅读了[安装 UIkit](installation.md)后，将 JavaScript 文件添加到`<head>`部分以引入到你的页面中。你还可一选择使用 `defer` 属性来延迟脚本执行。

```html
<script src="js/jquery.min.js"></script>
<script src="js/uikit.min.js"></script>
```

***

## UIkit 与响应式（reactive） JavaScript 框架

UIkit 监听 DOM操作并且会在在 DOM 插入或移除组件时，自动地对这些组件进行初始化、连接和断开连接。这样，UIkit 就可以轻易地与 [Vue.js](http://vuejs.org/) 和 React 这样的框架一起使用了。

**Note** 你当前浏览的 UIkit 网站和文档，即是这样构建的。完美展示了 <em>UIkit 与 Vue.js</em> 可以被整合使用。查看[Github 仓库](https://github.com/uikit/uikit-site) 了解 UIkit 的官网是怎么做的。

***

## 组件用法

可以通过在 HTML 元素中添加`uk-*` 或 `data-uk-*`属性的方式来使用 UIkit 的组件，而不必写再一行 JavaScript。这是使用 UIkit 组件的最佳实践，你应该优先考虑这种方式。

```html
<div uk-sticky="offset: 50;"></div>

<div data-uk-sticky="offset: 50;"></div>
```

**Note** [React](https://facebook.github.io/react/) 只能使用 `data-uk-*` 前缀。

还可以通过 JavaScript 来初始化组件，并将它们应用到页面元素中。

```js
var stickys = UIkit.sticky('#sticky', {
    offset: 50
});
```

***

## 组件配置

每个组件都带有一系列的配置选项，使你可以自定义它们的行为。可以在某实例（instance）中设置选项，也可以全局设置。

### Instance

选项可以以`key: value;这样的格式设置：

```html
<div uk-sticky="offset: 50; top: 100;"></div>
```

以有效的 JSON 格式：

```html
<div uk-sticky='{"offset": 50, "top": 100}'></div>
```

或者是单独的属性格式：

```html
<div uk-sticky offset="50" top="100"></div>
```

如果某个选项被标为 `Primary`，如果它是唯一的自定义值，可以省略它的 key，务必查看各个组件的选项表，查找 `Primary` 选项。

```html
<span uk-icon="home"></span>
```

还可以以编程的方式向组件构造函数传递选项：

```js
// Passing an options object.
UIkit.sticky('.sticky', {
    offset: 50,
    top: 100
});

// If the component supports Primary options.
UIkit.drop('#drop', 'top-left');
```

### 优先级

通过组件属性传递的选项具有最高的优先级，然后是独立的属性，最后才是 JavaScript。

```html
<div uk-sticky="offset: 50;" offset="100"></div>

<!-- The offset will be 50 -->
```

### 全局

通过设置组件的 `defaults` 属性来全局地修改组件选项。

```js
UIkit.components.sticky.options.defaults.offset = 50;
UIkit.components.sticky.options.defaults.top = 100;
```

***

## 程序化使用

以编程的方式，可以在 JavaScript 中以 `element, options` 这样的参数格式来初始化组件。`element` 参数可以是任意 `Node`, `jQuery 选择器` 或 `jQuery 对象`。你将接收到作为返回值的已初始化的组件 `数组/array`。`函数式组件/Functional Components` (e.g. `Notification`) 会省略掉 `element`参数。

```js
// Passing a selector and an options object.
var stickys = UIkit.sticky('.sticky', {
    offset: 50,
    top: 100
});

// Functional components should omit the 'element' argument.
var notifications = UIkit.notification('MyMessage', 'danger');
```

以编程的方式初始化组件，就可以直接调用组件的函数了。

```js
UIkit.offcanvas('#offcanvas')[0].toggle();
```

任意组件的函数和以下划线开头的变量都被认为是内部 API，可以在任意给定时间进行修改。

每个组件都会触发可以监听的 DOM 事件。比如模态框显示了，或者滚动监听元素显示出来了等等。

```js
$('#offcanvas').on('show', function () {
    // do something
});
```

每个组件的文档都罗列了它们的事件。

有时，网格或标签页这样的组件会隐藏在代码中。这可能发生在搭配切换器、模态框或下拉菜单一起使用时。一旦它们变得可见，就需要调整它们的高度等等属性。

UIkit 提供了更新组件的一些方式：

```js
// Calls the update hook on all registered instances.
UIkit.update();

// Updates the component itself and components nested beneath the component.
component.$update();

// Updates the component itself and components attached to the component's parents.
component.$updateParents();
```

如果想要确保某个组件已经妥善地销毁了，例如从 DOM 上移除，可以调用它的 `$destroy` 函数。

```js
// Destroys the component. For example unbind its event listeners.
component.$destroy();

// Also destroys the component, but also removes the element from the DOM.
component.$destroy(true);
```
