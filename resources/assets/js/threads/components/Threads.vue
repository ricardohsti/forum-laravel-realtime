<template>
    <div class="card">
        <div class="card-content">
            <span class="card-title">{{ title }}</span>
            <table>
                <thead>
                    <tr>
                        <td>#</td>
                        <td>{{ thread}}</td>
                        <td>{{ reply }}</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Tópico de teste de template</td>
                        <td>3</td>
                        <td><a href="/threads/1">{{ detail }}</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            "title",
            "thread",
            "reply",
            "detail"
        ]
    }
</script>
