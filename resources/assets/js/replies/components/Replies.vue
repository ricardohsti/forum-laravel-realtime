<template>
    <div>
        <div class="card">
            <div class="card-content">
                <span class="card-title">
                    Ricardo reply
                </span>
                <blockquote>
                    Lorem ipsum dolor sit amet
                </blockquote>
            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <span class="card-title">
                    Ricardo reply
                </span>
                <blockquote>
                    Lorem ipsum dolor sit amet
                </blockquote>
            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <span class="card-title">
                    Ricardo reply
                </span>
                <blockquote>
                    Lorem ipsum dolor sit amet
                </blockquote>
            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <span class="card-title">
                    Ricardo reply
                </span>
                <blockquote>
                    Lorem ipsum dolor sit amet
                </blockquote>
            </div>
        </div>

        <div class="card grey lighten-4">
            <div class="card-content">
                <span class="card-title">
                    {{ formTitle }}
                </span>
                <form>
                    <div class="input-field">
                        <textarea class="materialize-textarea" :placeholder="textareaPlaceholder" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn red accent-2">{{ submit }}</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            "formTitle",
            "textareaPlaceholder",
            "submit"
        ]
    }
</script>
