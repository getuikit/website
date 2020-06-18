# 上传

<p class="uk-text-lead">通过文件表单元素或占位符区域来上传文件。</p>

## 用法

这个Javascript组件运用了最新的 XMLHttpRequest Level 2 规范，并且提供了包含跟踪上传进度的Ajax功能。本组件提供了两种上传文件的方式：`select` 和 `drop`。`select`请求只能用在 `<input type="file">`元素上，而 `drop`基本可以用在任何元素上，只需要将文件从桌面上拖拽到指定的元素就可以上传了。记住，本组件并不能处理服务端的文件上传功能。

***

## Select

这个例子里我们使用一个按钮，实现打开文件选择窗口。 

```example
<div class="test-upload" uk-form-custom>
    <input type="file" multiple>
    <button class="uk-button uk-button-default" type="button" tabindex="-1">Select</button>
</div>
```

***

## 拖拽区域

这个例子展示了如何实现带有文件选择框的拖拽区域。 

```example
<div class="test-upload uk-placeholder uk-text-center">
    <span uk-icon="icon: cloud-upload"></span>
    <span class="uk-text-middle">Attach binaries by dropping them here or</span>
    <div uk-form-custom>
        <input type="file" multiple>
        <span class="uk-link">selecting one</span>
    </div>
</div>

<progress id="progressbar" class="uk-progress" value="0" max="100" hidden></progress>

<script>

(function ($) {

    var bar = $("#progressbar")[0];

    UIkit.upload('.test-upload', {

        url: '',
        multiple: true,

        beforeSend: function() { console.log('beforeSend', arguments); },
        beforeAll: function() { console.log('beforeAll', arguments); },
        load: function() { console.log('load', arguments); },
        error: function() { console.log('error', arguments); },
        complete: function() { console.log('complete', arguments); },

        loadStart: function (e) {
            console.log('loadStart', arguments);

            bar.removeAttribute('hidden');
            bar.max =  e.total;
            bar.value =  e.loaded;
        },

        progress: function (e) {
            console.log('progress', arguments);

            bar.max =  e.total;
            bar.value =  e.loaded;

        },

        loadEnd: function (e) {
            console.log('loadEnd', arguments);

            bar.max =  e.total;
            bar.value =  e.loaded;
        },

        completeAll: function () {
            console.log('completeAll', arguments);

            setTimeout(function () {
                bar.setAttribute('hidden', 'hidden');
            }, 1000);

            alert('Upload Completed');
        }
    });

})(jQuery);

</script>

```

***

## JavaScript

要创建 `select` 和 `drop` 上传监听器，必须实例化每个定义了回调和其他设置的上传类以及目标元素和选项。

```html
<script>

(function ($) {

    var bar = $("#progressbar")[0];

    UIkit.upload('.test-upload', {

        url: '',
        multiple: true,

        beforeSend: function() { console.log('beforeSend', arguments); },
        beforeAll: function() { console.log('beforeAll', arguments); },
        load: function() { console.log('load', arguments); },
        error: function() { console.log('error', arguments); },
        complete: function() { console.log('complete', arguments); },

        loadStart: function (e) {
            console.log('loadStart', arguments);

            bar.removeAttribute('hidden');
            bar.max =  e.total;
            bar.value =  e.loaded;
        },

        progress: function (e) {
            console.log('progress', arguments);

            bar.max =  e.total;
            bar.value =  e.loaded;

        },

        loadEnd: function (e) {
            console.log('loadEnd', arguments);

            bar.max =  e.total;
            bar.value =  e.loaded;
        },

        completeAll: function () {
            console.log('completeAll', arguments);

            setTimeout(function () {
                bar.setAttribute('hidden', 'hidden');
            }, 1000);

            alert('Upload Completed');
        }
    });

})(jQuery);

</script>
```

***

## 组件选项

下面这些选项都可以用在组件属性中，使用逗号隔开多个选项。[了解更多](javascript.md#component-configuration)

| Option | 值类型 | 默认值 | Description |
| --- | --- |
| `url` | String | '' | 请求的 URL |
| `multiple` | Boolean | false | 允许上传多个文件 |
| `name` | String | 'files[]' | name 参数 |
| `type` | String | POST | 请求类型|
| `params` | Object | {} | 附加参数 |
| `allow` | String | false | 文件名称过滤器 (eg. *.png) |
| `mime` | String | false | 文件 MIME 类型过滤器 (eg. images/*) |
| `concurrent` | Number | 1 | 可以同时上传的文件数目  |
| `data-type` | String | (xml, json, script, or html) | 期望的响应数据类型 |
| `msg-invalid-mime` | String | Invalid File Type: %s | 无效的 MIME 类型信息 |
| `msg-invalid-name` | String | Invalid File Name: %s | 无效的名称信息 |
| `cls-dragover` | String | 'uk-dragover' | 文件名称过滤器 |
| `abort` | Function | null | abort 回调 |
| `before-all` | Function | null |  beforeAll 回调 |
| `before-send` | Function | null | beforeSend 回调 |
| `complete` | Function | null |  complete 回调 |
| `complete-all` | Function | null | completeAll 回调  |
| `error` | Function | null |  error 回调 |
| `load` | Function | null |  load 回调 |
| `load-end` | Function | null |  loadEnd 回调  |
| `load-start` | Function | null | loadStart 回调  |
| `progress` | Function | null | progress 回调  |
| `fail` | Function | alert | fail 回调。如果名称和 MIME类型是无效的。  |

***

## JavaScript

了解更多 [JavaScript 组件](javascript.md#programmatic-use).

### 初始化

```js
UIkit.upload(element, options);
```

### 事件

这些事件会在添加了此组件的元素上触发。

| Name | Description |
| --- | --- |
| `upload` | 文件开始上传前触发 |
