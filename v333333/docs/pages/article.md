# 文章

<p class="uk-text-lead">在页面中创建文章。</p>

## 用法

文章组件有文章本身、标题以及元数据组成。

| Class | Description |
| --- | --- |
| `.uk-article` | 添加这个class定义文章组件。通常使用 `<article>` 元素来干这事。 |
| `.uk-article-title` | 添加这个class到标题中，创建文章标题。通常使用`<h1>`元素来干这事。 |
| `.uk-article-meta` | 添加这个class到文章的元数据上。|

```html
<article class="uk-article">
    <h1 class="uk-article-title"></h1>
    <p class="uk-article-meta"></p>
</article>
```

使用[文本组件](text.md)中的 `.uk-text-lead` class来创建摘要段落。

```example
<article class="uk-article">

    <h1 class="uk-article-title"><a class="uk-link-reset" href="">洛神赋</a></h1>

    <p class="uk-article-meta">由 曹植 撰写于 2012年12月12日 | 发表在 博客</p>

    <p class="uk-text-lead">黄初三年，余朝京师，还济洛川。古人有言，斯水之神，名曰宓妃。感宋玉对楚王神女之事，遂作斯赋，其词曰：</p>

    <p>黄初三年，余朝京师，还济洛川。古人有言，斯水之神，名曰宓妃。感宋玉对楚王神女之事，遂作斯赋，其词曰：</p>
    
    <p>余从京域，言归东藩，背伊阙 ，越轘辕，经通谷，陵景山。日既西倾，车殆马烦。尔乃税驾乎蘅皋，秣驷乎芝田，容与乎阳林，流眄乎洛川。于是精移神骇，忽焉思散。俯则未察，仰以殊观。睹一丽人，于岩之畔。乃援御者而告之曰：“尔有觌于彼者乎？彼何人斯，若此之艳也！”御者对曰：“臣闻河洛之神，名曰宓妃。然则君王所见，无乃是乎？其状若何，臣愿闻之。”</p>

    <div class="uk-grid-small uk-child-width-auto" uk-grid>
        <div>
            <a class="uk-button uk-button-text" href="#">阅读全文</a>
        </div>
        <div>
            <a class="uk-button uk-button-text" href="#">5 眺评论</a>
        </div>
    </div>

</article>
```
