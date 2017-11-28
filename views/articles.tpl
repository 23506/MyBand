<content class="wrap">

    <section>

        {foreach from=$article_list item=article}
            <article>
                <h1> {$article.title}</h1>
                <content>{$article.content}</content>
            </article>
        {/foreach}

    </section>

</content>

