# 文本

<p class="uk-text-lead">针对内容的实用文本效果。</p>

## 样式修饰

UIkit 提供了一些实用的文本效果 

| Class                 | Description                                                                                                           |
|-----------------------|-----------------------------------------------------------------------------------------------------------------------|
| `.uk-text-lead`       | <span class="uk-text-lead">高亮文本，比如文章子标题</span>                 |
| `.uk-text-meta`       | <span class="uk-text-meta">关于文章或其他内容的元数据</span> |

***

## 字体大小

调整文本的字体大小

| Class                 | Description                                                                                                           |
|-----------------------|-----------------------------------------------------------------------------------------------------------------------|
| `.uk-text-small`      | <span class="uk-text-small">缩小字体尺寸</span>                                          |
| `.uk-text-large`      | <span class="uk-text-large">增大字体尺寸</span>                                          |

***

## 字体粗细

使用 `.uk-text-bold`创建<span class="uk-text-bold">粗体字</span>.

***

## 文本转换

大写、小写或者首字母大写。

| Class                 | Description                                                                                                           |
|-----------------------|-----------------------------------------------------------------------------------------------------------------------|
| `.uk-text-uppercase`  | <span class="uk-text-uppercase">Add this class to transform your text to uppercase.</span>                            |
| `.uk-text-capitalize` | <span class="uk-text-capitalize">Add this class to transform your text to capitalize.</span>                          |
| `.uk-text-lowercase`  | <span class="uk-text-lowercase">Add this class to transform your text to lowercase.</span>                            |

***

## 文本颜色

设置各种文本颜色

| Class                 | Description                                                                                                           |
|-----------------------|-----------------------------------------------------------------------------------------------------------------------|
| `.uk-text-muted`      | <span class="uk-text-muted">淡化文本颜色</span>                                                  |
| `.uk-text-primary`    | <span class="uk-text-primary">强调额外的文本信息</span>                         |
| `.uk-text-success`    | <span class="uk-text-success">表示成功等积极信息</span>                                              |
| `.uk-text-warning`    | <span class="uk-text-warning">表示警告信息</span>                                            |
| `.uk-text-danger`     | <span class="uk-text-danger">表示危险信息</span>                                                |

***

## 文本对齐

调整文本的对齐方式Add one of these useful classes to align your text.

| Class              | Description                |
|--------------------|----------------------------|
| `.uk-text-left`    | 左对齐  |
| `.uk-text-right`   | 右对齐 |
| `.uk-text-center`  | 居中对齐 |
| `.uk-text-justify` | 文本两端对齐  |

```example
<div class="uk-child-width-1-3@s uk-grid-small" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-small">
            <div class="uk-text-left uk-card-body">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr. <code>.uk-text-left</code>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-small">
            <div class="uk-text-right uk-card-body">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr. <code>.uk-text-right</code>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-small">
            <div class="uk-text-center uk-card-body">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr. <code>.uk-text-center</code>
            </div>
        </div>
    </div>
</div>
```

***

### 响应式

UIkit 提供了一系列响应式对齐效果。通常与其他class效果一致，只会在特定视口宽度下触发响应式行为。

| Class                                                               | Description                                 |
|---------------------------------------------------------------------|---------------------------------------------|
| `.uk-text-left@s`<br> `.uk-text-center@s`<br> `.uk-text-right@s`    | 对 _640px_ 以上宽度生效 |
| `.uk-text-left@m`<br> `.uk-text-center@m`<br>   `.uk-text-right@m`  | 对 _960px_ 以上宽度生效 |
| `.uk-text-left@l`<br> `.uk-text-center@l`<br> `.uk-text-right@l`    | 对 _1200px_ 以上宽度生效  |
| `.uk-text-left@xl`<br> `.uk-text-center@xl`<br> `.uk-text-right@xl` | 对 _1600px_ 以上宽度生效 |

```example
<div class="uk-child-width-1-3@s uk-grid-small" uk-grid>
    <div>
        <div class="uk-card uk-card-default uk-card-small">
            <div class="uk-text-center@s uk-card-body">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr. <code>.uk-text-center@s</code>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-small">
            <div class="uk-text-right@l uk-card-body">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr. <code>.uk-text-right@l</code>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-small">
            <div class="uk-text-center@m uk-card-body">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr. <code>.uk-text-center@m</code>
            </div>
        </div>
    </div>
</div>
```

***

### 垂直对齐

使文本与另一个对象垂直对齐

| Class               | Description                  |
|---------------------|------------------------------|
| `.uk-text-top`      | 顶部对齐  |
| `.uk-text-middle`   | 垂直居中对齐  |
| `.uk-text-bottom`   | 底部对齐  |
| `.uk-text-baseline` | 基线对齐 |

```example
<div class="uk-child-width-1-3@m uk-child-width-1-2@s" uk-grid>
    <div>
        <img src="../docs/images/avatar.jpg" width="50" height="50">
        <span class="uk-text-top">Lorem ipsum.</span>
    </div>
    <div>
        <img src="../docs/images/avatar.jpg" width="50" height="50">
        <span class="uk-text-middle">Lorem ipsum.</span>
    </div>
    <div>
        <img src="../docs/images/avatar.jpg" width="50" height="50">
        <span class="uk-text-bottom">Lorem ipsum.</span>
    </div>
</div>
```

***

## 文本换行

关于文本换行的一些效果

| Class               | Description                                                             |
|---------------------|-------------------------------------------------------------------------|
| `.uk-text-truncate` | 通过截断文本，防止文本多行显示 |
| `.uk-text-break`    | 如果文本长度将超过容器宽度时，强制换行。    |
| `.uk-text-nowrap`   | 防止文本被截断成多行显示。                    |

```example
<div class="uk-child-width-1-2@s" uk-grid>
    <div>
        <div class="uk-panel uk-panel-box uk-text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
    </div>
    <div>
        <div class="uk-panel uk-panel-box uk-text-break">Loremipsumdolorsitamet,consecteturadipiscingelit,seddoeiusmodtemporincididuntutlaboreetdoloremagnaaliqua.</div>
    </div>
</div>
```
